@extends('user.master')
@section('content')
    <div class="headerCover">
        <div class="container">
            <ul class="pageBreadcrumb">
                <li class="pageBreadcrumb_item">
                    <a href="{{route('dashboard')}}" class="pageBreadcrumb_item_link">{{__('language.homepage')}}</a>
                </li>
                <li class="pageBreadcrumb_item">
                    <a class="pageBreadcrumb_item_link">{{__('language.solutions')}}</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    {{__('language.solutions')}}
                </div>
{{--                <div class="page_header_desc">--}}
{{--                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                </div>--}}
            </div>
        </div>
        <img class="headerCover--img" src="{{asset('views/images/solutions_wallpaper.png')}}" alt="solutions wallpaper">
        <div class="overlay"></div>
    </div>
    <!-- External link  -->
    <div class="externalLink">
        <div class="container">
            <div class="externalLink_content">
                <div class="externalLink_content_head section_title">
                    User friendly Web Interface of  “Track and Trace” System
                </div>
{{--                <div class="externalLink_content_btn">--}}
{{--                    <a href="#" class="yellow_btn">--}}
{{--                        Go to portal--}}
{{--                        <img src="{{asset('views/images/external-link.svg')}}" alt="external-link">--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Solutions -->
    <div class="solutions">
        <div class="container">
            <div class="section_header">
                <div class="section_header_cont">
                    <div class="solutions_header_title section_title">Our Solutions </div>
                </div>
            </div>
            <div class="solutions_content">
            @foreach($solutionData as $solution)

                    <a href="{{route('solutionItem',$solution->item_id)}}" class="solutions_content_item">
                        <div class="solutions_content_item_body">
                            <div class="solutions_content_item_icon">
                                <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-alcohol-1432773.png')}}" alt="alcohol butulka jdnias">
                            </div>
                            <div class="solutions_content_item_text">
                                {{$solution->category_name ?? ''}}
                            </div>
                        </div>
                    </a>
{{--                    <a href="solutionItem.html" class="solutions_content_item">--}}
{{--                        <div class="solutions_content_item_body">--}}
{{--                            <div class="solutions_content_item_icon">--}}
{{--                                <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-energy-drink-956355.png')}}" alt="alcohol butulka jdnias">--}}
{{--                            </div>--}}
{{--                            <div class="solutions_content_item_text">--}}
{{--                                Establishment of the “Track and Trace” System for energy drink products--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="solutionItem.html" class="solutions_content_item">--}}
{{--                        <div class="solutions_content_item_body">--}}
{{--                            <div class="solutions_content_item_icon">--}}
{{--                                <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-cigarette-2160822.png')}}" alt="cigaret">--}}
{{--                            </div>--}}
{{--                            <div class="solutions_content_item_text">--}}
{{--                                Establishment of the “Track and Trace” System for tobacco products--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="solutionItem.html" class="solutions_content_item">--}}
{{--                        <div class="solutions_content_item_body">--}}
{{--                            <div class="solutions_content_item_icon">--}}
{{--                                <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-medicine-4545885.png')}}" alt="Medicine">--}}
{{--                            </div>--}}
{{--                            <div class="solutions_content_item_text">--}}
{{--                                Establishment of the “Track and Trace” System for medicine--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}

            @endforeach
            </div>
        </div>
    </div>
    <!-- Page About -->
    <div class="pageAbout">
        <div class="container">
            <div class="pageAbout_content">
                <div class="pageAbout_content_item">
                    <div class="pageAbout_content_body">
                        <div class="moreInfo_head section_head">More Info</div>
                        <div class="pageAbout_content_body_head section_title">
                            Lorem Ipsum
                        </div>
                        <div class="moreInfo_content_body_desc section_text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="pageAbout_content_image">
                        <div class="image_dropShadow">
                            <div class="box pd_t65">
                                <div class="box_item">
                                    <img class="pageAbout_content_image--img" src="{{asset('views/images/aboutUs_content_img.png')}}" alt="about us content img">
                                </div>
                            </div>
                        </div>
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

