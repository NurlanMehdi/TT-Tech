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
                    <a href="{{route('admin.add-news',[0,'new'])}}" class="customBtn quickBtn">
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
                                                    <a href="{{route('admin.add-news',[$info->item_id,'edit','az'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-news',[$info->item_id,'new-translate','az'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-news-translate',($info->id ?? 0))}}" class="customBtn quickBtn">Remove</a>
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
                                                    <a href="{{route('admin.add-news',[$info->item_id,'edit','en'])}}" class="customBtn quickBtn">Düzəliş</a>
                                                @else
                                                    <a href="{{route('admin.add-news',[$info->item_id,'new-translate','en'])}}" class="customBtn quickBtn">Əlavə et</a>
                                                @endif
                                                    <a href="{{route('admin.trash-news-translate',($info->id ?? 0))}}" class="customBtn quickBtn">Remove</a>
                                                </div>
'
                                                data-original-title="Operations"
                                        >
                                            en
                                        </button>
                                    </div>
                                </td>
                                <td>

                                    <a href="{{route('admin.trash-news',$info->item_id)}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
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
