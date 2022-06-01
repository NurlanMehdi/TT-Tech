@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Haqqımızda
                </div>
                <div class="page_head--description">
                    Məlumat əlavə et
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-about-info')}}">
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
                            <select class="customSelect" {{(($solutionData->lang ?? '') != '') ? 'readonly' : ''}} name="language" id="language" required="" title="Dil">
                                @if(($solutionData->lang ?? 1)== 'az')
                                    <option value="az" selected>Az</option>
                                @elseif(($solutionData->lang ?? 1) == 'en')
                                    <option value="en" selected>En</option>
                                @else
                                    <option value="az">Az</option>
                                    <option value="en">En</option>

                                @endif


                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="info_name">Məlumatın adı</label>
                            <input class="formControl" name="info_name" value="{{$aboutData->name ?? ''}}" id="title" type="text" placeholder="Xəbərin adı" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="image">Şəkil</label>
                            <br>
                            <label for="aboutImgUpload" class="quickBtn">Əlavə edin</label>
                            <input id="aboutImgUpload" name="image" style="visibility:hidden;"  type="file">
                            <br>

                            <img style="display: {{($aboutData->img ?? '') == '' ? 'none' : 'block'}};max-width: 180px;" id="previewImg" src="{{asset('storage/img/'.($aboutData->img ?? ''))}}"  alt="your image" />


                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="editor">Təsvir</label>
                            <textarea name="info" id="editor">{{$aboutData->info ?? ''}}</textarea>
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
