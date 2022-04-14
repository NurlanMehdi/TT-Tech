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
                    <a class="pageBreadcrumb_item_link">{{__('language.support')}}</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    {{__('language.support')}}
                </div>
            </div>

            @if($tutorialVideo->url != "")
                <div class="support_header section_header">
                    <div class="support_header_head section_head">TUTORIAL</div>
                    <div class="section_header_cont">
                        <div class="support_header_title section_title">User-friendly easy to use portal to track easily all of the products. User-friendly easy to use.</div>
                    </div>
                </div>
                @endif

        </div>
    </div>
    <!-- Video -->
    @if($tutorialVideo->url != "")
        <div class="page_video">
            <div class="container">
                <div class="page_video_content">
                    <iframe width="100%" height="350px" src="{{$tutorialVideo->url ?? ''}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    @endif

    <!-- FAQ -->
    @include('user.faq')
    <!-- Live Chat Section -->
{{--    <div class="liveChatSection">--}}
{{--        <div class="container">--}}
{{--            <div class="liveChatSection_content">--}}
{{--                <div class="liveChatSection_content_body">--}}
{{--                    <div class="liveChatSection_content_body_title">--}}
{{--                        Have any questions regarding the portal?--}}
{{--                    </div>--}}
{{--                    <div class="liveChatSection_content_body_text">--}}
{{--                        You can ask any question you have regarding the portal in our live chat.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="liveChatSection_content_btn">--}}
{{--                    <a href="liveChat.html" class="yellow_btn">--}}
{{--                        Live chat--}}
{{--                        <img src="images/btn_right_arrow.svg" alt="btn arrow">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Clients -->
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

