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
                    <a class="pageBreadcrumb_item_link">{{__('language.privacyPolicy')}}</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    {{__('language.privacyPolicy')}}
                </div>
                {{--                <div class="page_header_desc">--}}
                {{--                    {{__('language.aboutUsDashboardContent2')}}--}}
                {{--                </div>--}}
            </div>
        </div>
{{--        <img class="headerCover--img" src="{{asset('views/images/dataexchangeand.jpg')}}" alt="about us wallpaper">--}}
        <div class="overlay"></div>
    </div>
    <!-- Privacy Policy -->
    <div class="privacyPolicy">
        <div class="container">
            <div class="privacyPolicy_content">
                <div class="privacyPolicy_content_item">
                    <div class="privacyPolicy_content_item_head">
                        Header 1
                    </div>
                    <div class="privacyPolicy_content_item_desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe tempore iste voluptates officiis iusto, cumque veritatis omnis impedit perferendis provident ex dicta, et consequatur ut labore maxime excepturi! Quaerat sed nihil cum cumque quidem aliquam a inventore enim esse hic aspernatur vero atque, soluta libero tenetur, unde deleniti placeat illo.
                    </div>
                </div>
                <div class="privacyPolicy_content_item">
                    <div class="privacyPolicy_content_item_head">
                        Header 1
                    </div>
                    <div class="privacyPolicy_content_item_desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe tempore iste voluptates officiis iusto, cumque veritatis omnis impedit perferendis provident ex dicta, et consequatur ut labore maxime excepturi! Quaerat sed nihil cum cumque quidem aliquam a inventore enim esse hic aspernatur vero atque, soluta libero tenetur, unde deleniti placeat illo.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients -->
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

