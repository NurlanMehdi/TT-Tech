@extends('user.master')
@section('content')
    <!-- Header Cover -->
    <div class="headerCover">
        <div class="container">
            <ul class="pageBreadcrumb">
                <li class="pageBreadcrumb_item">
                    <a href="{{route('dashboard')}}" class="pageBreadcrumb_item_link">{{__('language.homepage')}}</a>
                </li>
                <li class="pageBreadcrumb_item">
                    <a class="pageBreadcrumb_item_link">{{__('language.news')}}</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    National Legislation
                </div>
            </div>
        </div>
    </div>
    <!-- National Legislation -->
    <div class="nationalLegislation">
        <div class="container">
            <div class="nationalLegislation_content">
                @foreach($newsData as $data)
                    <div class="nationalLegislation_content_item">
                        <div class="nationalLegislation_content_item_cont">
                            <div class="nationalLegislation_content_item_image">
                                <div class="box pd_t57">
                                    <div class="box_item">
                                        <img class="nationalLegislation_content_item_image--img" src="{{$data->img ?? ''}}" alt="blog item image">
                                    </div>
                                </div>
                            </div>
                            <div class="nationalLegislation_content_item_body">
                                <div class="nationalLegislation_content_item_body_header">
                                    {{$data->name ?? ''}}
                                </div>
                                <div class="nationalLegislation_content_item_body_desc">
                                    {!! preg_replace("/<img[^>]+\>/i", " ", $data->info) !!}
                                </div>
                                <div class="nationalLegislation_content_item_body_btn">
                                    <a href="{{route('news-content-page',$data->item_id)}}" class="btn">
                                        Read more
                                        <img src="images/blue_arrow_to_right.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--            <div class="loadMore">--}}
{{--                <a href="#" class="c yellow_btn">--}}
{{--                    Show more--}}
{{--                    <img src="{{asset('views/images/arrow_to_bottom.svg')}}" alt="arrow to bottom">--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

