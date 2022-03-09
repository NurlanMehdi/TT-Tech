@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Xəbərlər
                </div>
                <div class="quickLinks">
                    <a href="{{route('admin.add-news')}}" class="customBtn quickBtn">
                        Xəbər əlavə et
                    </a>
                </div>
            </div>
            <div class="page_content">
                <div class="table-responsive">
                    <table class="table dataTable table-borderless">
                        <thead>
                        <tr>
                            <th>Xəbərin adı</th>
                            <th>Status</th>
                            <th>Tarix</th>
                            <th>Dil</th>
                            <th class="no-sort" style="width: 30px;">Silmək</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $info)
                            <tr>
                                <td>{{$info->name ?? ''}}</td>
                                <td>{{($info->status ?? '') == 1 ? 'Görünən':'Gizli'}}</td>
                                <td>{{$info->created_at ?? ''}}</td>
                                <td>
                                    <div class="buttonGroup buttonGroup--table">
                                        <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                data-content=
                                                '
                                            <div class="buttonGroup buttonGroup--table">
                                                @if(in_array('az',$info->language))
                                                    <a href="{{route('admin.add-new-about-info',[$info->item_id,'edit','az'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-new-about-info',[$info->item_id,'new-translate','az'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-about-translate',($info->id ?? 0))}}" class="customBtn quickBtn">Remove</a>
                                            </div>
                                            '
                                                data-original-title="Operations"
                                        >
                                            az
{{--                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16"><g><g><g><path fill="#41479b" d="M24.628 15.923H1.162a.42.42 0 0 1-.419-.42V.42A.42.42 0 0 1 1.163 0h23.465a.42.42 0 0 1 .419.419v15.085a.42.42 0 0 1-.42.419z"></path></g><g><path fill="#f5f5f5" d="M25.047.419a.42.42 0 0 0-.42-.419h-1.874L14.99 5.086V0H10.8v5.086L3.037 0H1.162a.42.42 0 0 0-.419.419v1.084l6.66 4.363H.744v4.19h6.66L.744 14.42v1.084a.42.42 0 0 0 .42.419h1.874l7.763-5.086v5.086h4.19v-5.086l7.763 5.086h1.875a.42.42 0 0 0 .419-.42V14.42l-6.66-4.363h6.66v-4.19h-6.66l6.66-4.364z"></path></g><g><g><path fill="#ff4b55" d="M25.047 6.704H14.152V0h-2.514v6.704H.743V9.22h10.895v6.704h2.514V9.219h10.895z"></path></g><g><path fill="#ff4b55" d="M9.238 10.057L.755 15.563c.03.202.197.36.407.36h.578l9.037-5.866h-1.54z"></path></g><g><path fill="#ff4b55" d="M17.186 10.057h-1.54l9.025 5.857a.415.415 0 0 0 .376-.41v-.345z"></path></g><g><path fill="#ff4b55" d="M.743.882l7.68 4.984h1.539L.988.041a.417.417 0 0 0-.245.378z"></path></g><g><path fill="#ff4b55" d="M16.53 5.866L25.032.347A.413.413 0 0 0 24.628 0h-.6L14.99 5.866z"></path></g></g></g></g></svg>--}}
                                        </button>
                                        <button class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" aria-label="lang edit"
                                                data-container="body" data-placement="top" data-toggle="popover" data-html="true" title=""
                                                data-content=
                                                '
                                                <div class="buttonGroup buttonGroup--table">
                                                @if(in_array('en',$info->language))
                                                    <a href="{{route('admin.add-new-about-info',[$info->item_id,'edit','en'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-new-about-info',[$info->item_id,'new-translate','en'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-about-translate',($info->id ?? 0))}}" class="customBtn quickBtn">Remove</a>
                                                </div>
'
                                                data-original-title="Operations"
                                        >
                                            en
{{--                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16"><g><g><g><path fill="#41479b" d="M24.628 15.923H1.162a.42.42 0 0 1-.419-.42V.42A.42.42 0 0 1 1.163 0h23.465a.42.42 0 0 1 .419.419v15.085a.42.42 0 0 1-.42.419z"></path></g><g><path fill="#f5f5f5" d="M25.047.419a.42.42 0 0 0-.42-.419h-1.874L14.99 5.086V0H10.8v5.086L3.037 0H1.162a.42.42 0 0 0-.419.419v1.084l6.66 4.363H.744v4.19h6.66L.744 14.42v1.084a.42.42 0 0 0 .42.419h1.874l7.763-5.086v5.086h4.19v-5.086l7.763 5.086h1.875a.42.42 0 0 0 .419-.42V14.42l-6.66-4.363h6.66v-4.19h-6.66l6.66-4.364z"></path></g><g><g><path fill="#ff4b55" d="M25.047 6.704H14.152V0h-2.514v6.704H.743V9.22h10.895v6.704h2.514V9.219h10.895z"></path></g><g><path fill="#ff4b55" d="M9.238 10.057L.755 15.563c.03.202.197.36.407.36h.578l9.037-5.866h-1.54z"></path></g><g><path fill="#ff4b55" d="M17.186 10.057h-1.54l9.025 5.857a.415.415 0 0 0 .376-.41v-.345z"></path></g><g><path fill="#ff4b55" d="M.743.882l7.68 4.984h1.539L.988.041a.417.417 0 0 0-.245.378z"></path></g><g><path fill="#ff4b55" d="M16.53 5.866L25.032.347A.413.413 0 0 0 24.628 0h-.6L14.99 5.866z"></path></g></g></g></g></svg>--}}
                                        </button>
                                    </div>
                                </td>
                                <td>

                                    <a href="{{route('admin.trash-about',$info->item_id)}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
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
