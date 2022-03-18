@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head pb-5">
                <div class="page_head--header page_head--header_after">
                    Dəstək
                </div>
            </div>
            <div class="page_content">
                <div id="faqAlert" style="display: none" class="alert">
                    Yadda saxlanıldı
                </div>
                <div class="form-group">
                    <label class="customLabel" for="video">Video əlavə et</label>
                    <div class="row">
                        <div class="col-md">
                            <input class="formControl" name="video" value="{{$tutorialVideo->url ?? ''}}" id="video" type="text" placeholder="Video əlavə et" required="">
                        </div>
                        <div class="col-md-auto">
                            <button type="button" class="customBtn quickBtn save-video-btn h-100">
                                Əlavə et
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quickLinks">
                <a href="{{route('admin.add-new-faq',[0,'new'])}}" class="customBtn quickBtn">
                    Faq yarat
                </a>
            </div>
            <div class="page_content">
                <div class="table-responsive">
                    <table class="table dataTable table-borderless">
                        <thead>
                        <tr>
                            <th>Sual</th>
                            <th>Status</th>
                            <th>Dil</th>
                            <th class="no-sort" style="width: 30px;">Silmək</th>
                        </tr>
                        </thead>
                        <tbody>
                                                @foreach($data as $info)
                                                    <tr>
                                                        <td>{{$info->question ?? ''}}</td>
                                                        <td>{{($info->status ?? '') == 1 ? 'Görünən':'Gizli'}}</td>
                                                        <td>
                                                            <div class="buttonGroup buttonGroup--table">
                                                                <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                                        data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                                        data-content=
                                                                        '
                                                                    <div class="buttonGroup buttonGroup--table">
                                                                        @if(in_array('az',$info->language))
                                                                            <a href="{{route('admin.add-new-faq',[$info->item_id,'edit','az'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                                        @else
                                                                            <a href="{{route('admin.add-new-faq',[$info->item_id,'new-translate','az'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                                        @endif
                                                                            <a href="{{route('admin.trash-support-translate',($info->id ?? 0))}}" class="customBtn quickBtn">Remove</a>
                                                                    </div>
                                                                    '
                                                                        data-original-title="Operations"
                                                                >
                                                                    az
                                                                </button>
                                                                <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                                        data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                                        data-content=
                                                                        '
                                                                        <div class="buttonGroup buttonGroup--table">
                                                                        @if(in_array('en',$info->language))
                                                                            <a href="{{route('admin.add-new-faq',[$info->item_id,'edit','en'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                                        @else
                                                                            <a href="{{route('admin.add-new-faq',[$info->item_id,'new-translate','en'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                                        @endif
                                                                            <a href="{{route('admin.trash-support-translate',($info->id ?? 0))}}" class="customBtn quickBtn">Remove</a>
                                                                        </div>
                        '
                                                                        data-original-title="Operations"
                                                                >
                                                                    en
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td>

                                                            <a href="{{route('admin.trash-support',$info->item_id)}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                                                <i class="xin-icon xin-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('.save-video-btn').on('click',function (){
            var videoUrl = $('#video').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                }
            })
            $.ajax({
                url:'{{route('admin.save.video')}}',
                method:'post',
                data:{'data':videoUrl},
                success:function (response){
                    // console.log(JSON.parse(response))

                    if(response.success){
                        $('#faqAlert').html('Yadda saxlanıldı').addClass('alert-primary').fadeIn('350').promise().done(function() {
                            setTimeout(() => {
                                $('#faqAlert').fadeOut('350').promise().done(function () {
                                    $('#faqAlert').html('').removeClass('alert-primary')
                                })
                            }, 5000)
                        })
                    }
                    else{
                        $('#faqAlert').html('Xəta baş verdi!').addClass('alert-danger').fadeIn('350').promise().done(function() {
                            setTimeout(() => {
                                $('#faqAlert').fadeOut('350').promise().done(function () {
                                    $('#faqAlert').html('').removeClass('alert-danger')
                                })
                            }, 5000)
                        })
                    }



                }
            })
        })
    </script>
@endsection
