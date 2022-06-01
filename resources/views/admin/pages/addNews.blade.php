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
                                <option value="0" {{(($newsData->status ?? '') == '0') ? 'selected' : ''}}>Gizli</option>
                                <option value="1" {{(($newsData->status ?? '') == '1') ? 'selected' : ''}}>Görünən</option>
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
                            <label class="customLabel" for="name">Xəbərin adı</label>
                            <input class="formControl" name="name" value="{{$newsData->name ?? ''}}" id="title" type="text" placeholder="Xəbərin adı" required="">
                        </div>
                        <div class="form-group required">
                            <div class="col-lg-12">
                                <button class="customBtn quickBtn image_selector" type="button" data-toggle="modal" data-target="#elfinderModal"
                                        data-id="newsImage">
                                    Şəkil seç
                                </button>
                                <button class=" customBtn quickBtn quickBtn--minor imageRemove" type="button" data-id="newsImage"
                                        data-removeId="newsImageRemove" data-show="{{!empty($newsData->img ?? '') ? 'true' : 'false'}}">
                                    Şəkli sil
                                </button>
                                <img class="elfinderImage" src="{{$newsData->img ?? ''}}" id="newsImagePreview"/>
                                <input type="hidden" value="{{$newsData->img ?? ''}}"
                                       name="newsImage" id="newsImageInput"
                                       class="form-control" required=""/>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="customLabel" for="catagory">Kateqoriya</label>
                            <select class="customSelect" name="catagory" id="catagory" required="" title="Dil">
                                <option value="0" {{(($newsData->catagory ?? '') == 'az') ? 'selected' : ''}}>News</option>
                                <option value="1" {{(($newsData->catagory ?? '') == 'en') ? 'selected' : ''}}>National Legislation</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="info">Link</label>
                            <input class="formControl" name="info" value="{{$newsData->info ?? ''}}" id="title" type="text" placeholder="Link" required="">
                        </div>
                        <!--<div class="form-group required">-->
                        <!--    <label class="customLabel" for="editor">Təsvir</label>-->
                    <!--    <textarea name="info" id="editor">{{$newsData->info ?? ''}}</textarea>-->
                        <!--</div>-->
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

    <link rel="stylesheet" href="{{asset('admin/vendor/jQuery/jquery-ui.css')}}"/>
    <script src="{{asset('admin/vendor/jQuery/jquery-ui.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('admin/vendor/elfinder/css/elfinder.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/elfinder/css/theme.css')}}">
    <script src="{{asset('admin/vendor/elfinder/js/elfinder.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.imageRemove', function () {
                var id = $(this).attr('data-id');
                if (id) {
                    document.getElementById(id + 'Input').value = '';
                    document.getElementById(id + 'Preview').src = '';
                } else {
                    document.getElementById('elfinderInput').value = '';
                    document.getElementById('elfinderImagePreview').src = '';
                }
                $(this).hide()
            })
        })
    </script>
    <script>
        $("document").ready(function () {
            $('.image_selector').click(function () {
                var id = $(this).attr('data-id');
                $('#elfinder').elfinder({
                    url: "{{route('elfinder.connector')}}",
                    customData: {
                        _token: "{{csrf_token()}}"
                    },
                    height: 600,
                    modal: true,
                    title: "Select your file",
                    zIndex: 99999,
                    resizable: true,
                    commandsOptions: {
                        getfile: {
                            oncomplete: 'destroy',
                        }
                    },
                    getFileCallback: function (file) {
                        if (id) {
                            document.getElementById(id + 'Input').value = file.url;
                            document.getElementById(id + 'Preview').src = file.url;
                            $(`[data-removeId="${id}Remove"]`).show();
                        } else {
                            document.getElementById('elfinderImage').value = file.url;
                            document.getElementById('elfinderImagePreview').src = file.url;
                            $(`[data-removeId="elfinderImageRemove"]`).show();
                        }
                        var alert = document.querySelector(".modal-dialog"),
                            okButton = alert.getElementsByClassName("close");
                        $(okButton).trigger("click");
                    }
                });
            });
        });
    </script>


    <script>

        $('.save-btn').on('click',function (e){
            e.preventDefault();
            e.stopPropagation();

            if({{$newsData->id ?? 0}} > 0 ||'{{$newsData->lang ?? ''}}' != ''){
                $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$newsData->item_id ?? 0}}">');
                $('#aboutUs').append('<input type="hidden" name="lang" value="{{$newsData->lang ?? ''}}">');
            }

            $('#aboutUs').get(0).submit();
        });

        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })
        initSample();
    </script>
@endsection
