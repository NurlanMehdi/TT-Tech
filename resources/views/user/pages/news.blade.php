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
                    {{__('language.news')}}
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs -->
    @if(isset($newsData['news']))
    <div class="news">
        <div class="container">
            <div class="news_content">
                @foreach($newsData['news'] as $data)


                    <a target="_blank" href="{{$data->info ?? ''}}" class="news_content_item">
                        <div class="news_content_item_cont">
                            <div class="news_content_item_image">
                                <div class="box pd_t57">
                                    <div class="box_item">
                                        <img class="news_content_item_image--img" src="{{$data->img ?? ''}}" alt="blog item image">
                                    </div>
                                </div>
                            </div>
                            <div class="news_content_item_body">
                                <div class="news_content_item_body_header">
                                    <div class="news_content_item_body_header_head">{{$data->name ?? ''}}</div>

                                </div>
                                <div class="news_content_item_body_desc">

                                </div>
{{--                                <div class="news_content_item_body_btn">--}}
{{--                                    <a href="{{route('news-content-page',$data->item_id)}}" class="btn">--}}
{{--                                        Read more--}}
{{--                                        <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </a>


                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- National Legislation -->
    @if(isset($newsData['nationalLegislation']))
    <div class="blogs">
        <div class="container">
            <div class="section_header">
                <div class="section_header_cont">
                    <div class="blogs_header_title section_title">National Legislation</div>
                    <a href="{{route('national.legislation.list')}}" class="btn">
                        See more
                        <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blue arrow to right">
                    </a>
                </div>
            </div>
            <div class="blogs_content">


                @foreach($newsData['nationalLegislation'] as $key =>  $data)
                    <div class="blogs_content_item">
                        <div class="blogs_content_item_cont">
                            <div class="blogs_content_item_image">
                                <div class="box pd_t57">
                                    <div class="box_item">
                                        <img class="blogs_content_item_image--img" src="{{$data->img ?? ''}}" alt="blog item image">
                                    </div>
                                </div>
                            </div>
                            <div class="blogs_content_item_body">
                                <div class="blogs_content_item_body_header">
                                    {{$data->name ?? ''}}
                                </div>
                                <div class="blogs_content_item_body_desc">
                                    {!! preg_replace("/<img[^>]+\>/i", " ", $data->info) !!}
                                </div>
                                <div class="blogs_content_item_body_btn">
                                    <a href="{{route('news-content-page',$data->item_id)}}" class="btn">
                                        Read more
                                        <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

