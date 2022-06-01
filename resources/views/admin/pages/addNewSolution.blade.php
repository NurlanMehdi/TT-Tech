@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Layihələr
                </div>
                <div class="page_head--description">
                    Layihə əlavə et
                </div>
            </div>
            <form id="aboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{route('admin.save-solution-info')}}">
                {{csrf_field()}}
                <div class="page_content">
                    <form class="section_articleInner_body_content--description">
                        <div class="form-group required">
                            <label class="customLabel" for="status">Status</label>

                            <select class="customSelect" name="status" id="page_status" required="" title="Status">
                                <option value="1" {{(($solutionData->status ?? '') == '1') ? 'selected' : ''}}>Görünən</option>
                                <option value="0" {{(($solutionData->status ?? '') == '0') ? 'selected' : ''}}>Gizli</option>
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
                            <label class="customLabel" for="category_name">Kateqoriya adı</label>
                            <input class="formControl" name="category_name" value="{{$solutionData->category_name ?? ''}}" id="title" type="text" placeholder="Kateqoriya adı" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="name">Adı</label>
                            <input class="formControl" name="name" value="{{$solutionData->name ?? ''}}" id="title" type="text" placeholder="Adı" required="">
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="name">Arxa fon şəkili</label>
                            <div class="col-lg-12">
                                <button class="customBtn quickBtn image_selector" type="button" data-toggle="modal" data-target="#elfinderModal"
                                        data-id="newsImage">
                                    Şəkil seç
                                </button>
                                <button class=" customBtn quickBtn quickBtn--minor imageRemove" type="button" data-id="newsImage"
                                        data-removeId="newsImageRemove" data-show="{{!empty($solutionData->back_img ?? '') ? 'true' : 'false'}}">
                                    Şəkli sil
                                </button>
                                <img class="elfinderImage" src="{{$solutionData->back_img ?? ''}}" id="newsImagePreview"/>
                                <input type="hidden" value="{{$solutionData->back_img ?? ''}}"
                                       name="newsImage" id="newsImageInput"
                                       class="form-control" required=""/>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="editor">İlkin təsvir</label>
                            <textarea name="first_info" id="editor">{{$solutionData->first_info ?? ''}}</textarea>
                        </div>
                        <div class="form-group required">
                            <label class="customLabel" for="editor1">Son təsvir</label>
                            <textarea name="last_info" id="editor1">{{$solutionData->last_info ?? ''}}</textarea>
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

            if({{$solutionData->id ?? 0}} > 0 ||'{{$solutionData->lang ?? ''}}' != ''){
                $('#aboutUs').append('<input type="hidden" name="item_id" value="{{$solutionData->item_id ?? 0}}">');
                $('#aboutUs').append('<input type="hidden" name="lang" value="{{$solutionData->lang ?? ''}}">');
            }

            $('#aboutUs').get(0).submit();
        });

        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })

        CKEDITOR.replace('editor1', {
            filebrowserImageBrowseUrl: '{{route('elfinder.ckeditor')}}',
            filebrowserBrowseUrl: '{{route('elfinder.ckeditor')}}'
        })
        initSample();
    </script>
@endsection
