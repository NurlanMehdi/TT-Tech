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
                    <a class="pageBreadcrumb_item_link">{{__('language.sitemap')}}</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    {{__('language.sitemap')}}
                </div>
                {{--                <div class="page_header_desc">--}}
                {{--                    {{__('language.aboutUsDashboardContent2')}}--}}
                {{--                </div>--}}
            </div>
        </div>
{{--        <img class="headerCover--img" src="{{asset('views/images/dataexchangeand.jpg')}}" alt="about us wallpaper">--}}
        <div class="overlay"></div>
    </div>
    <!-- Site MAp -->
    <div class="sitemap">
        <div class="container">
            <div class="sitemap_content">
                <div class="sitemap_content_item">
                    <div class="sitemap_content_item_head">Xəbərlər</div>
                    <ul class="sitemap_content_item_body">
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Press Relizlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Aida Mediada</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Müsahibələr</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Forumlar</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Nəşrlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Məqalələr</a>
                        </li>
                    </ul>
                </div>
                <div class="sitemap_content_item">
                    <div class="sitemap_content_item_head">Xəbərlər</div>
                    <ul class="sitemap_content_item_body">
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Press Relizlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Aida Mediada</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Müsahibələr</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Forumlar</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Nəşrlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Məqalələr</a>
                        </li>
                    </ul>
                </div>
                <div class="sitemap_content_item">
                    <div class="sitemap_content_item_head">Xəbərlər</div>
                    <ul class="sitemap_content_item_body">
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Press Relizlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Aida Mediada</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Müsahibələr</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Forumlar</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Nəşrlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Məqalələr</a>
                        </li>
                    </ul>
                </div>
                <div class="sitemap_content_item">
                    <div class="sitemap_content_item_head">Xəbərlər</div>
                    <ul class="sitemap_content_item_body">
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Press Relizlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Aida Mediada</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Müsahibələr</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Forumlar</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Nəşrlər</a>
                        </li>
                        <li class="sitemap_content_item_body_li">
                            <a href="#" class="sitemap_content_item_body_li_link">Məqalələr</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients -->
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

