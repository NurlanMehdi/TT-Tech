@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Dəstək
                </div>
                <div class="page_head--description">
                    Faq yarat
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-faq-info')}}">
                {{csrf_field()}}
                <div class="page_content">
                    <form class="section_articleInner_body_content--description">
                        <div class="form-group required">
                            <label class="customLabel" for="status">Status</label>

                            <select class="customSelect" name="status" id="page_status" required="" title="Status">
                                <option value="0" {{(($aboutData->status ?? '') == '0') ? 'selected' : ''}}>Gizli</option>
                                <option value="1" {{(($aboutData->status ?? '') == '1') ? 'selected' : ''}}>Görünən</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="language">Dil</label>
                            <select class="customSelect" {{(($faqData->lang ?? '') != '') ? 'disabled' : ''}} name="language" id="language" required="" title="Dil">
                                <option value="az" {{(($faqData->lang ?? '') == 'az') ? 'selected' : ''}}>Az</option>
                                <option value="en" {{(($faqData->lang ?? '') == 'en') ? 'selected' : ''}}>En</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="question">Sual</label>
                            <input class="formControl" name="question" value="{{$faqData->question ?? ''}}" id="question" type="text" placeholder="Sual" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="answer">Cavab</label>
                            <input class="formControl" name="answer" value="{{$faqData->answer ?? ''}}" id="answer" type="text" placeholder="Cavab" required="">
                        </div>
                        <div class="form-group pt-5">
                            <hr class="mt-5"/>
                            <div class="quickLinks">
                                <button type="submit" class="customBtn quickBtn save-btn">
                                    Əlavə et
                                </button>
                                <a href="{{route('admin.about')}}" class="customBtn applyBtn-trash">
                                    Ləğv et
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </form>

        </div>
    </section>
    <!-- MAIN PAGE END -->
@endsection
@section('js')
    <script src="{{asset('admin/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/vendor/ckeditor/samples/js/sample.js')}}"></script>
    <script>
        $('#aboutImgUpload').on('change', function (){
            readURL(this);
        })

        $('.save-btn').on('click',function (e){
            e.preventDefault();
            e.stopPropagation();

            if({{$aboutData->id ?? 0}} > 0 ||'{{$aboutData->lang ?? ''}}' != ''){
                $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$aboutData->item_id ?? 0}}">');
                $('#aboutUs').append('<input type="hidden" name="lang" value="{{$aboutData->lang ?? ''}}">');

            }

            $('#aboutUs').get(0).submit();
        });

        initSample();


    </script>
@endsection
