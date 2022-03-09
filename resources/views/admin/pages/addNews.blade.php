@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Xəbərlər
                </div>
                <div class="page_head--description">
                    Xəbər əlavə et
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-news')}}">
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
                            <select class="customSelect" {{(($aboutData->lang ?? '') != '') ? 'disabled' : ''}} name="language" id="language" required="" title="Dil">
                                <option value="az" {{(($aboutData->lang ?? '') == 'az') ? 'selected' : ''}}>Az</option>
                                <option value="en" {{(($aboutData->lang ?? '') == 'en') ? 'selected' : ''}}>En</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="catagory">Kateqoriya</label>
                            <select class="customSelect" {{(($aboutData->lang ?? '') != '') ? 'disabled' : ''}} name="catagory" id="catagory" required="" title="Dil">
                                <option value="0" {{(($aboutData->lang ?? '') == 'az') ? 'selected' : ''}}>News</option>
                                <option value="1" {{(($aboutData->lang ?? '') == 'en') ? 'selected' : ''}}>National Legislation</option>
                            </select>
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
    <div class="modal fade" id="elfinderModal" tabindex="-1" role="dialog" aria-labelledby="elfinderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true " class="icon-cross"></span></button>
            <div class="modal-content">
                <div id="elfinder"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/vendor/ckeditor/samples/js/sample.js')}}"></script>

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/jQuery/jquery-ui.css')}}"/>
    <script src="{{asset('backend/assets/vendor/jQuery/jquery-ui.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('backend/assets/vendor/elfinder/css/elfinder.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/elfinder/css/theme.css')}}">
    <script src="{{asset('backend/assets/vendor/elfinder/js/elfinder.min.js')}}"></script>

    <script>
        {{--$('#aboutImgUpload').on('change', function (){--}}
        {{--    readURL(this);--}}
        {{--})--}}

        {{--$('.save-btn').on('click',function (e){--}}
        {{--    e.preventDefault();--}}
        {{--    e.stopPropagation();--}}

        {{--    if({{$aboutData->id ?? 0}} > 0 ||'{{$aboutData->lang ?? ''}}' != ''){--}}
        {{--        $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$aboutData->item_id ?? 0}}">');--}}
        {{--        $('#aboutUs').append('<input type="hidden" name="lang" value="{{$aboutData->lang ?? ''}}">');--}}

        {{--    }--}}

        {{--    $('#aboutUs').get(0).submit();--}}
        {{--});--}}

        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })
        initSample();


    </script>
@endsection
