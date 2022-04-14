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
                    <a href="{{route('solutions-page')}}" class="pageBreadcrumb_item_link">{{__('language.solutions')}}</a>
                </li>
                <li class="pageBreadcrumb_item">
                    <a class="pageBreadcrumb_item_link">{{$solutionData->name}}</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    {{$solutionData->name}}
                </div>
                <div class="page_header_desc">

                </div>
            </div>
        </div>
        <img class="headerCover--img" src="{{$solutionData->back_img}}" alt="solutions wallpaper">
        <div class="overlay"></div>
    </div>
    <!-- Page About -->
    <div class="pageAbout">
        <div class="container">
            <div class="pageAbout_content">
{{--                <div class="pageAbout_content_item">--}}
                    {!! $solutionData->first_info !!}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- PAge info grafik -->
{{--    <div class="infographic">--}}
{{--        <div class="container">--}}
{{--            <div class="section_header">--}}
{{--                <div class="infographic_header_cont">--}}
{{--                    <div class="infographic_header_title">How does the procedure go? </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="infographic_content">--}}
{{--                <div class="infographic_content_image">--}}
{{--                    <div class="box pd_t23">--}}
{{--                        <div class="box_item">--}}
{{--                            <img class="infographic_content_image--img" src="{{asset('views/images/infograf.svg')}}" alt="solution_infoGraphic">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="sectionItem">
        <div class="container">
            <div class="sectionItem_content">
{{--                <div class="sectionItem_content_item">--}}
                    {!! $solutionData->last_info !!}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- FAQ -->
    @include('user.faq')
    <!-- Clients -->
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

