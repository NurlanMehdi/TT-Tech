@extends('user.master')
@section('content')
    <!-- Banner -->
{{--    <div class="banner">--}}
{{--        <div class="container">--}}
{{--            <div class="banner_content">--}}
{{--                <div class="banner_content_body">--}}
{{--                    <div class="banner_content_body_header">--}}
{{--                        We bring new technologies--}}
{{--                        to let you track your products--}}
{{--                        effortlessly--}}
{{--                    </div>--}}
{{--                    <div class="banner_content_body_desc">--}}
{{--                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                    </div>--}}
{{--                    <div class="banner_content_body_btn">--}}
{{--                        <a href="{{route('solutions-page')}}" class="btn yellow_btn">--}}
{{--                            See Solutions--}}
{{--                            <img src="{{asset('views/images/btn_right_arrow.svg')}}" alt="btn right arrow">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="banner_content_image">--}}
{{--                    <div class="box pd_t83">--}}
{{--                        <div class="box_item">--}}
{{--                            <img class="banner_content_image--img" src="{{asset('views/images/banner_img.png')}}" alt="banner Image">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- About Us -->
    <div class="about">
        <div class="container">
            <div class="section_header">
                <div class="section_head">
                    {{__('language.aboutUs')}}
                </div>
            </div>
            <div class="about_content">
                <div class="about_content_body">
                    <div class="about_content_body_head section_title">
                        {{__('language.aboutUsDashboardContent1')}}
                    </div>
                    <div class="about_content_body_desc section_text">
                        {{__('language.aboutUsDashboardContent2')}}
                    </div>
                    <div class="about_content_body_btn">
                        <a href="{{route('about-page')}}" class="btn">
                            Read more
                            <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blue arrow to right">
                        </a>
                    </div>
                </div>
                <div class="banner_content_image">
                    <div class="box pd_t83">
                        <div class="box_item">
                            <img class="banner_content_image--img" src="{{asset('views/images/banner_img.png')}}" alt="banner Image">
                        </div>
                    </div>
                </div>
{{--                <div class="about_content_image">--}}
{{--                    <div class="image_dropShadow_2n">--}}
{{--                        <div class="box pd_t65">--}}
{{--                            <div class="box_item">--}}
{{--                                <img src="{{asset('views/images/aboutUs_content_img.png')}}" alt="about us content img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Mission and Vision -->
    <div class="misvis">
        <div class="container">
            <div class="section_header">
                <div class="section_head">
                    {{__('language.missionAndVision')}}
                </div>
            </div>
            <div class="misvis_content">
                <div class="misvis_content_item">
                    <div class="misvis_content_item_head section_title">{{__('language.mission')}}</div>
                    <div class="misvis_content_item_desc section_text">
                        {{__('language.missionText')}}
                    </div>
                </div>
                <div class="misvis_content_item">
                    <div class="misvis_content_item_head section_title">{{__('language.vision')}}</div>
                    <div class="misvis_content_item_desc section_text">
                        {{__('language.visionText')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Solutions -->
    <div class="solutions">
        <div class="container">
            <div class="section_header">
                <div class="solutions_header_head section_head">Our Solutions</div>
                <div class="section_header_cont">
                    <div class="solutions_header_title section_title">Delivering high end projects or both government and brands </div>
                    <a href="{{route('solutions-page')}}" class="btn">
                        See more
                        <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blue arrow to right">
                    </a>
                </div>
            </div>
            <div class="solutions_content">
                <a href="solutionItem.html" class="solutions_content_item">
                    <div class="solutions_content_item_body">
                        <div class="solutions_content_item_icon">
                            <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-alcohol-1432773.png')}}" alt="alcohol butulka jdnias">
                        </div>
                        <div class="solutions_content_item_text">
                            Establishment of the “Track and Trace” System for alcohol products
                        </div>
                    </div>
                </a>
                <a href="solutionItem.html" class="solutions_content_item">
                    <div class="solutions_content_item_body">
                        <div class="solutions_content_item_icon">
                            <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-energy-drink-956355.png')}}" alt="alcohol butulka jdnias">
                        </div>
                        <div class="solutions_content_item_text">
                            Establishment of the “Track and Trace” System for alcohol products
                        </div>
                    </div>
                </a>
                <a href="solutionItem.html" class="solutions_content_item">
                    <div class="solutions_content_item_body">
                        <div class="solutions_content_item_icon">
                            <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-cigarette-2160822.png')}}" alt="cigaret">
                        </div>
                        <div class="solutions_content_item_text">
                            Establishment of the “Track and Trace” System for alcohol products
                        </div>
                    </div>
                </a>
                <a href="solutionItem.html" class="solutions_content_item">
                    <div class="solutions_content_item_body">
                        <div class="solutions_content_item_icon">
                            <img class="solutions_content_item_icon--img" src="{{asset('views/images/noun-medicine-4545885.png')}}" alt="Medicine">
                        </div>
                        <div class="solutions_content_item_text">
                            Establishment of the “Track and Trace” System for alcohol products
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Goverment and Brand -->
    <div class="governmentAndBrand">
        <div class="container">
            <div class="governmentAndBrand_content">
                <div class="governmentAndBrand_content_item">
                    <div class="governmentAndBrand_content_item_head section_head">{{__('language.forGovernment')}}</div>
                    <div class="governmentAndBrand_content_item_image">
                        <div class="box pd_t54">
                            <div class="box_item">
                                <img class="governmentAndBrand_content_item_image--img" src="{{asset('views/images/baku-best-things-to-do.png')}}" alt="government binasi">
                            </div>
                        </div>
                    </div>
{{--                    <div class="governmentAndBrand_content_item_title">--}}
{{--                        User-friendly easy to use portal to track easily all of the products--}}
{{--                    </div>--}}
                    <div class="governmentAndBrand_content_item_desc section_text">
                        {{__('language.forGovernmentText')}}
                    </div>
                </div>
                <div class="governmentAndBrand_content_item">
                    <div class="governmentAndBrand_content_item_head section_head">{{__('language.forEnterprenuers')}} </div>
                    <div class="governmentAndBrand_content_item_image">
                        <div class="box pd_t54">
                            <div class="box_item">
                                <img class="governmentAndBrand_content_item_image--img" src="{{asset('views/images/baku-best-things-to-do.png')}}" alt="government binasi">
                            </div>
                        </div>
                    </div>
{{--                    <div class="governmentAndBrand_content_item_title">--}}
{{--                        User-friendly easy to use portal to track easily all of the products--}}
{{--                    </div>--}}
                    <div class="governmentAndBrand_content_item_desc section_text">
                        {{__('language.forEnterprenuersText')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs -->
    <div class="blogs">
        <div class="container">
            <div class="blogs_header section_header">
                <div class="blogs_header section_header_cont">
                    <div class="blogs_header_title section_title">Want to read our updates? </div>
                    <div class="blogs_header_text section_text">Check out our latest news on the progress of this project.</div>
                </div>
            </div>
            <div class="blogs_content">
                <div class="blogs_content_item">
                    <div class="blogs_content_item_cont">
                        <div class="blogs_content_item_image">
                            <div class="box pd_t57">
                                <div class="box_item">
                                    <img class="blogs_content_item_image--img" src="{{asset('views/images/alvaro-reyes-qWwpHwip31M-unsplash.png')}}" alt="blog item image">
                                </div>
                            </div>
                        </div>
                        <div class="blogs_content_item_body">
                            <div class="blogs_content_item_body_header">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </div>
                            <div class="blogs_content_item_body_desc">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            </div>
                            <div class="blogs_content_item_body_btn">
                                <a href="#" class="btn">
                                    Read more
                                    <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogs_content_item">
                    <div class="blogs_content_item_cont">
                        <div class="blogs_content_item_image">
                            <div class="box pd_t57">
                                <div class="box_item">
                                    <img class="blogs_content_item_image--img" src="{{asset('views/images/alvaro-reyes-qWwpHwip31M-unsplash.png')}}" alt="blog item image">
                                </div>
                            </div>
                        </div>
                        <div class="blogs_content_item_body">
                            <div class="blogs_content_item_body_header">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </div>
                            <div class="blogs_content_item_body_desc">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            </div>
                            <div class="blogs_content_item_body_btn">
                                <a href="#" class="btn">
                                    Read more
                                    <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogs_content_item">
                    <div class="blogs_content_item_cont">
                        <div class="blogs_content_item_image">
                            <div class="box pd_t57">
                                <div class="box_item">
                                    <img class="blogs_content_item_image--img" src="{{asset('views/images/alvaro-reyes-qWwpHwip31M-unsplash.png')}}" alt="blog item image">
                                </div>
                            </div>
                        </div>
                        <div class="blogs_content_item_body">
                            <div class="blogs_content_item_body_header">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </div>
                            <div class="blogs_content_item_body_desc">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            </div>
                            <div class="blogs_content_item_body_btn">
                                <a href="#" class="btn">
                                    Read more
                                    <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="">
                                </a>
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
