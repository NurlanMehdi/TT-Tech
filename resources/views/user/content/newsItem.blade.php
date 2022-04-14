@extends('user.master')
@section('content')
    <!-- PAge -->
    <div class="page">
        <div class="container">
            <div class="page_cover">
                <div class="box pd_t43">
                    <div class="box_item">
                        <img class="page_cover--img" src="{{$newsData->img}}" alt="News Item wallpaper">
                    </div>
                </div>
            </div>
            <div class="page_body">
                <div class="page_body_back">
                    <div class="page_body_main">
                        <a href="{{route('news-page')}}" class="page_body_back_btn">
                            <img src="{{asset('views/images/arrow_back.svg')}}" alt="arrow back">
                            Back
                        </a>
                    </div>
                </div>
                <div class="page_body_cont">
                    <div class="page_body_main">
                        {!! $newsData->info !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blogs">
        <div class="container">
            <div class="section_header">
                <div class="section_header_cont">
                    <div class="blogs_header_title section_title">More news</div>
                    <a href="{{route('news-page')}}" class="btn">
                        See more
                        <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blue arrow to right">
                    </a>
                </div>
            </div>
            <div class="blogs_content">
                @foreach($allNews as $otherNews)
                    @if($otherNews->id != $newsData->id)
                        <div class="blogs_content_item">
                            <div class="blogs_content_item_cont">
                                <div class="blogs_content_item_image">
                                    <div class="box pd_t57">
                                        <div class="box_item">
                                            <img class="blogs_content_item_image--img" src="{{$otherNews->img}}" alt="blog item image">
                                        </div>
                                    </div>
                                </div>
                                <div class="blogs_content_item_body">
                                    <div class="blogs_content_item_body_header">
                                        {{$otherNews->name}}
                                    </div>
                                    <div class="blogs_content_item_body_desc">
                                        {!! preg_replace("/<img[^>]+\>/i", " ", $otherNews->info) !!}
                                    </div>
                                    <div class="blogs_content_item_body_btn">
                                        <a href="{{route('news-content-page',$otherNews->item_id)}}" class="btn">
                                            Read more
                                            <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
{{--                <div class="blogs_content_item">--}}
{{--                    <div class="blogs_content_item_cont">--}}
{{--                        <div class="blogs_content_item_image">--}}
{{--                            <div class="box pd_t57">--}}
{{--                                <div class="box_item">--}}
{{--                                    <img class="blogs_content_item_image--img" src="images/alvaro-reyes-qWwpHwip31M-unsplash.png" alt="blog item image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body">--}}
{{--                            <div class="blogs_content_item_body_header">--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                            </div>--}}
{{--                            <div class="blogs_content_item_body_desc">--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                            </div>--}}
{{--                            <div class="blogs_content_item_body_btn">--}}
{{--                                <a href="#" class="btn">--}}
{{--                                    Read more--}}
{{--                                    <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="blogs_content_item">--}}
{{--                    <div class="blogs_content_item_cont">--}}
{{--                        <div class="blogs_content_item_image">--}}
{{--                            <div class="box pd_t57">--}}
{{--                                <div class="box_item">--}}
{{--                                    <img class="blogs_content_item_image--img" src="images/alvaro-reyes-qWwpHwip31M-unsplash.png" alt="blog item image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body">--}}
{{--                            <div class="blogs_content_item_body_header">--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                            </div>--}}
{{--                            <div class="blogs_content_item_body_desc">--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                            </div>--}}
{{--                            <div class="blogs_content_item_body_btn">--}}
{{--                                <a href="#" class="btn">--}}
{{--                                    Read more--}}
{{--                                    <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="blogs_content_item">--}}
{{--                    <div class="blogs_content_item_cont">--}}
{{--                        <div class="blogs_content_item_image">--}}
{{--                            <div class="box pd_t57">--}}
{{--                                <div class="box_item">--}}
{{--                                    <img class="blogs_content_item_image--img" src="images/alvaro-reyes-qWwpHwip31M-unsplash.png" alt="blog item image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body">--}}
{{--                            <div class="blogs_content_item_body_header">--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                            </div>--}}
{{--                            <div class="blogs_content_item_body_desc">--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                            </div>--}}
{{--                            <div class="blogs_content_item_body_btn">--}}
{{--                                <a href="#" class="btn">--}}
{{--                                    Read more--}}
{{--                                    <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection





{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>TT Technologies | News</title>--}}

{{--    <meta name="keywords" content="TT technologies,TT,tt technologies,technologies,texnologiyalar,texnologiya,TT texnologiya">--}}
{{--    <meta name="description" content="TT Technologies">--}}
{{--    <meta name="author" content="Farid Yusifov - Frontend Web Developer - Edumedia Azerbaijan">--}}
{{--    <meta name="copyright" content="Farid Yusifov - Frontend Web Developer - Edumedia Azerbaijan">--}}
{{--    <meta property="og:title" content="TT Technologies">--}}
{{--    <meta property="og:description" content="TT Technologies">--}}
{{--    <meta property="og:image" content="img/sidebar-icon.png">--}}
{{--    <meta property="og:url" content="tttechnologies.az">--}}

{{--    <link rel="stylesheet" href="css/main.css">--}}
{{--    <link rel="stylesheet" href="dist/slick/slick.css">--}}
{{--    <link rel="stylesheet" href="dist/slick/slick-theme.css">--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- Header -->--}}
{{--<div class="header">--}}
{{--    <div class="container">--}}
{{--        <div class="header_content">--}}
{{--            <a href="index.html" class="header_content_logo">--}}
{{--                <img class="header_content_logo--img" src="images/TT_logo.svg" alt="page logo">--}}
{{--            </a>--}}
{{--            <div class="header_content_body">--}}
{{--                <ul class="header_content_body_navbar">--}}
{{--                    <li class="header_content_body_navbar_item">--}}
{{--                        <a href="about.html" class="header_content_body_navbar_item_link ">About Us</a>--}}
{{--                    </li>--}}
{{--                    <li class="header_content_body_navbar_item">--}}
{{--                        <a href="solutions.html" class="header_content_body_navbar_item_link ">SOLUTIONS</a>--}}
{{--                    </li>--}}
{{--                    <li class="header_content_body_navbar_item">--}}
{{--                        <a href="news.html" class="header_content_body_navbar_item_link active">News</a>--}}
{{--                    </li>--}}
{{--                    <li class="header_content_body_navbar_item">--}}
{{--                        <a href="mobileApp.html" class="header_content_body_navbar_item_link ">Mobile Application</a>--}}
{{--                    </li>--}}
{{--                    <li class="header_content_body_navbar_item">--}}
{{--                        <a href="support.html" class="header_content_body_navbar_item_link">Support</a>--}}
{{--                    </li>--}}
{{--                    <li class="header_content_body_navbar_item">--}}
{{--                        <a href="contact.html" class="header_content_body_navbar_item_link">Contacts</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="header_content_body_lang">--}}
{{--                    <a href="#" class="header_content_body_lang_item active">En</a>--}}
{{--                    <a href="#" class="header_content_body_lang_item">az</a>--}}
{{--                </div>--}}
{{--                <div class="header_content_body_search">--}}
{{--                    <input type="search" class="header_search_content_form_input" placeholder="Search keyword">--}}
{{--                    <a href="#" class="header_content_body_search_link">--}}
{{--                        <img class="header_content_body_search--icon" src="images/search.png" alt="search icon">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="burger">--}}
{{--                <div class="burger_icon">--}}
{{--                    <img class="burger_icon--img" src="images/burger.png" alt="burger icon image">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="mobileHeader">--}}
{{--    <div class="mobileHeader_content">--}}
{{--        <div class="mobileHeader_content_head">--}}
{{--            <div class="mobileHeader_top">--}}
{{--                <a href="index.html" class="mobileHeader_logo">--}}
{{--                    <img class="mobileHeader_logo--img" src="images/TT_logo.svg" alt="blue logo">--}}
{{--                </a>--}}
{{--                <div class="mobileHeader_closeBtn">--}}
{{--                    <img src="images/closeBtn.png" alt="close icon btn">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <ul class="mobileHeader_navbar acordion">--}}
{{--                <li class="mobileHeader_navbar_item">--}}
{{--                    <a href="about.html" class="mobileHeader_navbar_item_link">ABOUT US</a>--}}
{{--                </li>--}}
{{--                <li class="mobileHeader_navbar_item">--}}
{{--                    <a href="solutions.html" class="mobileHeader_navbar_item_link">SOLUTIONS</a>--}}
{{--                </li>--}}
{{--                <li class="mobileHeader_navbar_item">--}}
{{--                    <a href="news.html" class="mobileHeader_navbar_item_link">NEWS</a>--}}
{{--                </li>--}}
{{--                <li class="mobileHeader_navbar_item">--}}
{{--                    <a href="mobileApp.html" class="mobileHeader_navbar_item_link">MOBILE APPLICATION</a>--}}
{{--                </li>--}}
{{--                <li class="mobileHeader_navbar_item">--}}
{{--                    <a href="support.html" class="mobileHeader_navbar_item_link">SUPPORT</a>--}}
{{--                </li>--}}
{{--                <li class="mobileHeader_navbar_item">--}}
{{--                    <a href="contact.html" class="mobileHeader_navbar_item_link">CONTACTS</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="mobileHeader_sidebar">--}}
{{--            <div class="mobileHeader_sidebar--cont">--}}
{{--                <div class="mobileHeader_sidebar_social">--}}
{{--                    <div class="mobileHeader_sidebar_social_item">--}}
{{--                        <a href="#" class="mobileHeader_sidebar_social_item_link">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <path id="twitter" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm5.479,9.356q.008.177.008.356A7.783,7.783,0,0,1,9.65,17.549h0a7.8,7.8,0,0,1-4.222-1.237,5.6,5.6,0,0,0,.657.038,5.527,5.527,0,0,0,3.421-1.179,2.757,2.757,0,0,1-2.573-1.913,2.745,2.745,0,0,0,1.244-.047,2.755,2.755,0,0,1-2.21-2.7c0-.012,0-.024,0-.035a2.735,2.735,0,0,0,1.247.344,2.757,2.757,0,0,1-.853-3.677,7.82,7.82,0,0,0,5.677,2.878,2.756,2.756,0,0,1,4.694-2.512,5.524,5.524,0,0,0,1.749-.669,2.765,2.765,0,0,1-1.211,1.523,5.493,5.493,0,0,0,1.582-.434,5.6,5.6,0,0,1-1.374,1.426Zm0,0" fill="#b0bfc7"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="mobileHeader_sidebar_social_item">--}}
{{--                        <a href="#" class="mobileHeader_sidebar_social_item_link">--}}
{{--                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">--}}
{{--                                    <path id="Path_21" data-name="Path 21" d="M24,12A12,12,0,1,0,12,24h.211V14.656H9.633v-3h2.578V9.44a3.61,3.61,0,0,1,3.853-3.96,21.146,21.146,0,0,1,2.31.119v2.68H16.8c-1.244,0-1.485.592-1.485,1.46v1.914h2.976l-.388,3H15.313v8.881A12.01,12.01,0,0,0,24,12Z" transform="translate(0 0)" fill="#b0bfc7"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="mobileHeader_sidebar_social_item">--}}
{{--                        <a href="#" class="mobileHeader_sidebar_social_item_link">--}}
{{--                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <g id="Layer_1" data-name="Layer 1" transform="translate(0)">--}}
{{--                                    <path id="Path_22" data-name="Path 22" d="M126.582,124.3a2.3,2.3,0,1,1-2.3-2.3,2.3,2.3,0,0,1,2.3,2.3Z" transform="translate(-112.286 -112.295)" fill="#b0bfc7"/>--}}
{{--                                    <path id="Path_23" data-name="Path 23" d="M90.848,81.416a2.281,2.281,0,0,0-1.3-1.307,3.829,3.829,0,0,0-1.279-.239c-.727-.033-.945-.041-2.783-.041s-2.057.007-2.783.04a3.8,3.8,0,0,0-1.278.239,2.285,2.285,0,0,0-1.312,1.308A3.841,3.841,0,0,0,79.87,82.7c-.033.726-.04.944-.04,2.783s.007,2.058.04,2.783a3.8,3.8,0,0,0,.239,1.279,2.147,2.147,0,0,0,.516.8,2.124,2.124,0,0,0,.8.515,3.8,3.8,0,0,0,1.278.239c.727.033.945.041,2.783.041s2.058-.007,2.783-.041a3.765,3.765,0,0,0,1.279-.239,2.283,2.283,0,0,0,1.306-1.307,3.866,3.866,0,0,0,.239-1.279c.033-.726.041-.944.041-2.783s-.007-2.057-.041-2.783A3.85,3.85,0,0,0,90.848,81.416Zm-5.37,7.6a3.537,3.537,0,1,1,3.537-3.537,3.537,3.537,0,0,1-3.537,3.537Zm3.677-6.389a.827.827,0,1,1,.826-.826A.827.827,0,0,1,89.155,82.626Z" transform="translate(-73.478 -73.478)" fill="#b0bfc7" opacity="0.66"/>--}}
{{--                                    <path id="Path_24" data-name="Path 24" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm6.851,14.841a5.078,5.078,0,0,1-.318,1.67,3.523,3.523,0,0,1-2.019,2.021,5.022,5.022,0,0,1-1.67.318c-.731.032-.97.042-2.841.042s-2.105-.009-2.841-.042a5.07,5.07,0,0,1-1.67-.318,3.526,3.526,0,0,1-2.016-2.016,5,5,0,0,1-.318-1.67c-.031-.731-.041-.97-.041-2.841s.008-2.106.041-2.841a5.074,5.074,0,0,1,.318-1.67A3.523,3.523,0,0,1,7.486,5.471a5.007,5.007,0,0,1,1.67-.318c.731-.031.97-.041,2.841-.041s2.106.008,2.841.041a5.09,5.09,0,0,1,1.67.318,3.521,3.521,0,0,1,2.023,2.015,5.027,5.027,0,0,1,.318,1.67c.032.731.041.97.041,2.841S18.883,14.106,18.851,14.841Z" transform="translate(0)" fill="#b0bfc7"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="mobileHeader_sidebar_social_item">--}}
{{--                        <a href="#" class="mobileHeader_sidebar_social_item_link">--}}
{{--                            <svg id="youtube" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <path id="Path_74" data-name="Path 74" d="M224.113,212.974l4.284-2.468-4.284-2.468Zm0,0" transform="translate(-213.807 -198.507)" fill="#b0bfc7"/>--}}
{{--                                <path id="Path_75" data-name="Path 75" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm7.5,12.012a19.806,19.806,0,0,1-.309,3.607,1.879,1.879,0,0,1-1.322,1.322A45.61,45.61,0,0,1,12,17.25a43.977,43.977,0,0,1-5.868-.321,1.879,1.879,0,0,1-1.322-1.322A19.719,19.719,0,0,1,4.5,12a19.793,19.793,0,0,1,.309-3.607A1.917,1.917,0,0,1,6.132,7.059,45.61,45.61,0,0,1,12,6.75a43.884,43.884,0,0,1,5.868.321,1.879,1.879,0,0,1,1.322,1.322,18.8,18.8,0,0,1,.309,3.619Zm0,0" fill="#b0bfc7"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mobileHeader_sidebar_lang">--}}
{{--                    <div class="mobileHeader_sidebar_lang_item active">EN</div>--}}
{{--                    <div class="mobileHeader_sidebar_lang_item">AZ</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="mobileHeader_footer">--}}
{{--            <form action="#" class="mobileHeader_footer_search">--}}
{{--                <button type="submit" class="mobileHeader_footer_search--btn">--}}
{{--                    <img src="images/search.png" alt="search icon">--}}
{{--                </button>--}}
{{--                <input id="search" type="search" placeholder="Search" class="mobileHeader_footer_search--input">--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- PAge -->--}}
{{--<div class="page">--}}
{{--    <div class="container">--}}
{{--        <div class="page_cover">--}}
{{--            <div class="box pd_t43">--}}
{{--                <div class="box_item">--}}
{{--                    <img class="page_cover--img" src="images/screen_2x.png" alt="News Item wallpaper">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- <div class="overlay"></div> -->--}}
{{--        </div>--}}
{{--        <div class="page_body">--}}
{{--            <div class="page_body_back">--}}
{{--                <div class="page_body_main">--}}
{{--                    <a href="#" class="page_body_back_btn">--}}
{{--                        <img src="images/arrow_back.svg" alt="arrow back">--}}
{{--                        Back--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="page_body_cont">--}}
{{--                <div class="page_body_main">--}}
{{--                    <div class="page_body_cont_header">--}}
{{--                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.--}}
{{--                    </div>--}}
{{--                    <div class="page_body_cont_text">--}}
{{--                        During our discovery phase for the project, we noticed that search functionality across a number of homebuilders had not been updated in years and added a lot of friction to the user experience. This is a core feature that the user is likely to interact with first when landing on a homebuilder’s website. They could be leisurely browsing a new area they’d like to move to or see what’s being built within a certain radius of their location.--}}
{{--                    </div>--}}
{{--                    <div class="page_body_cont_title">--}}
{{--                        Header--}}
{{--                    </div>--}}
{{--                    <div class="page_body_cont_text">--}}
{{--                        Our approach to search for Spitfire Homes was to make sure it was easy to use, super fast and easy to edit – allowing the user to easily filter by bedrooms, price and house type almost instantly without having to submit a new search. To achieve this, we implemented state management techniques and re-rendering based on a users’ input and interaction. This approach also means the page doesn’t need to reload every time a filter is updated.--}}
{{--                    </div>--}}
{{--                    <div class="page_body_cont_image">--}}
{{--                        <div class="box pd_t60">--}}
{{--                            <div class="box_item">--}}
{{--                                <img class="page_body_cont_image--img" src="images/11344.png" alt="news item image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="page_body_cont_text">--}}
{{--                        During our discovery phase for the project, we noticed that search functionality across a number of homebuilders had not been updated in years and added a lot of friction to the user experience. This is a core feature that the user is likely to interact with first when landing on a homebuilder’s website. They could be leisurely browsing a new area they’d like to move to or see what’s being built within a certain radius of their location. Our approach to search for Spitfire Homes was to make sure it was easy to use, super fast and easy to edit – allowing the user to easily filter by bedrooms, price and house type almost instantly without having to submit a new search. To achieve this, we implemented state management techniques and re-rendering based on a users’ input and interaction. This approach also means the page doesn’t need to reload every time a filter is updated.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="blogs">--}}
{{--    <div class="container">--}}
{{--        <div class="section_header">--}}
{{--            <div class="section_header_cont">--}}
{{--                <div class="blogs_header_title section_title">Next posts</div>--}}
{{--                <a href="news.html" class="btn">--}}
{{--                    See more--}}
{{--                    <img src="images/blue_arrow_to_right.png" alt="blue arrow to right">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="blogs_content">--}}
{{--            <div class="blogs_content_item">--}}
{{--                <div class="blogs_content_item_cont">--}}
{{--                    <div class="blogs_content_item_image">--}}
{{--                        <div class="box pd_t57">--}}
{{--                            <div class="box_item">--}}
{{--                                <img class="blogs_content_item_image--img" src="images/alvaro-reyes-qWwpHwip31M-unsplash.png" alt="blog item image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blogs_content_item_body">--}}
{{--                        <div class="blogs_content_item_body_header">--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body_desc">--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body_btn">--}}
{{--                            <a href="#" class="btn">--}}
{{--                                Read more--}}
{{--                                <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blogs_content_item">--}}
{{--                <div class="blogs_content_item_cont">--}}
{{--                    <div class="blogs_content_item_image">--}}
{{--                        <div class="box pd_t57">--}}
{{--                            <div class="box_item">--}}
{{--                                <img class="blogs_content_item_image--img" src="images/alvaro-reyes-qWwpHwip31M-unsplash.png" alt="blog item image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blogs_content_item_body">--}}
{{--                        <div class="blogs_content_item_body_header">--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body_desc">--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body_btn">--}}
{{--                            <a href="#" class="btn">--}}
{{--                                Read more--}}
{{--                                <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="blogs_content_item">--}}
{{--                <div class="blogs_content_item_cont">--}}
{{--                    <div class="blogs_content_item_image">--}}
{{--                        <div class="box pd_t57">--}}
{{--                            <div class="box_item">--}}
{{--                                <img class="blogs_content_item_image--img" src="images/alvaro-reyes-qWwpHwip31M-unsplash.png" alt="blog item image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blogs_content_item_body">--}}
{{--                        <div class="blogs_content_item_body_header">--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body_desc">--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd--}}
{{--                        </div>--}}
{{--                        <div class="blogs_content_item_body_btn">--}}
{{--                            <a href="#" class="btn">--}}
{{--                                Read more--}}
{{--                                <img src="images/blue_arrow_to_right.png" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Get in touch -->--}}
{{--<div class="getInTouch">--}}
{{--    <div class="container">--}}
{{--        <div class="getInTouch_content">--}}
{{--            <div class="getInTouch_content_header">--}}
{{--                Learn more about our solutions--}}
{{--            </div>--}}
{{--            <div class="getInTouch_content_btn">--}}
{{--                <a href="#" class="white_btn btn">--}}
{{--                    Get in touch--}}
{{--                    <img src="images/btn_right_arrow.svg" alt="btn right arrow">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Footer -->--}}
{{--<div class="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="footer_content">--}}
{{--            <div class="footer_content_item">--}}
{{--                <a href="index.html" class="footer_logo">--}}
{{--                    <img class="footer_logo--img" src="images/TT_logo.svg" alt="TT logo">--}}
{{--                </a>--}}
{{--                <ul class="footer_social">--}}
{{--                    <li class="footer_social_item">--}}
{{--                        <a href="#" class="footer_social_item_link">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <path id="twitter" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm5.479,9.356q.008.177.008.356A7.783,7.783,0,0,1,9.65,17.549h0a7.8,7.8,0,0,1-4.222-1.237,5.6,5.6,0,0,0,.657.038,5.527,5.527,0,0,0,3.421-1.179,2.757,2.757,0,0,1-2.573-1.913,2.745,2.745,0,0,0,1.244-.047,2.755,2.755,0,0,1-2.21-2.7c0-.012,0-.024,0-.035a2.735,2.735,0,0,0,1.247.344,2.757,2.757,0,0,1-.853-3.677,7.82,7.82,0,0,0,5.677,2.878,2.756,2.756,0,0,1,4.694-2.512,5.524,5.524,0,0,0,1.749-.669,2.765,2.765,0,0,1-1.211,1.523,5.493,5.493,0,0,0,1.582-.434,5.6,5.6,0,0,1-1.374,1.426Zm0,0" fill="#b0bfc7"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_social_item">--}}
{{--                        <a href="#" class="footer_social_item_link">--}}
{{--                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">--}}
{{--                                    <path id="Path_21" data-name="Path 21" d="M24,12A12,12,0,1,0,12,24h.211V14.656H9.633v-3h2.578V9.44a3.61,3.61,0,0,1,3.853-3.96,21.146,21.146,0,0,1,2.31.119v2.68H16.8c-1.244,0-1.485.592-1.485,1.46v1.914h2.976l-.388,3H15.313v8.881A12.01,12.01,0,0,0,24,12Z" transform="translate(0 0)" fill="#b0bfc7"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_social_item">--}}
{{--                        <a href="#" class="footer_social_item_link">--}}
{{--                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <g id="Layer_1" data-name="Layer 1" transform="translate(0)">--}}
{{--                                    <path id="Path_22" data-name="Path 22" d="M126.582,124.3a2.3,2.3,0,1,1-2.3-2.3,2.3,2.3,0,0,1,2.3,2.3Z" transform="translate(-112.286 -112.295)" fill="#b0bfc7"/>--}}
{{--                                    <path id="Path_23" data-name="Path 23" d="M90.848,81.416a2.281,2.281,0,0,0-1.3-1.307,3.829,3.829,0,0,0-1.279-.239c-.727-.033-.945-.041-2.783-.041s-2.057.007-2.783.04a3.8,3.8,0,0,0-1.278.239,2.285,2.285,0,0,0-1.312,1.308A3.841,3.841,0,0,0,79.87,82.7c-.033.726-.04.944-.04,2.783s.007,2.058.04,2.783a3.8,3.8,0,0,0,.239,1.279,2.147,2.147,0,0,0,.516.8,2.124,2.124,0,0,0,.8.515,3.8,3.8,0,0,0,1.278.239c.727.033.945.041,2.783.041s2.058-.007,2.783-.041a3.765,3.765,0,0,0,1.279-.239,2.283,2.283,0,0,0,1.306-1.307,3.866,3.866,0,0,0,.239-1.279c.033-.726.041-.944.041-2.783s-.007-2.057-.041-2.783A3.85,3.85,0,0,0,90.848,81.416Zm-5.37,7.6a3.537,3.537,0,1,1,3.537-3.537,3.537,3.537,0,0,1-3.537,3.537Zm3.677-6.389a.827.827,0,1,1,.826-.826A.827.827,0,0,1,89.155,82.626Z" transform="translate(-73.478 -73.478)" fill="#b0bfc7" opacity="0.66"/>--}}
{{--                                    <path id="Path_24" data-name="Path 24" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm6.851,14.841a5.078,5.078,0,0,1-.318,1.67,3.523,3.523,0,0,1-2.019,2.021,5.022,5.022,0,0,1-1.67.318c-.731.032-.97.042-2.841.042s-2.105-.009-2.841-.042a5.07,5.07,0,0,1-1.67-.318,3.526,3.526,0,0,1-2.016-2.016,5,5,0,0,1-.318-1.67c-.031-.731-.041-.97-.041-2.841s.008-2.106.041-2.841a5.074,5.074,0,0,1,.318-1.67A3.523,3.523,0,0,1,7.486,5.471a5.007,5.007,0,0,1,1.67-.318c.731-.031.97-.041,2.841-.041s2.106.008,2.841.041a5.09,5.09,0,0,1,1.67.318,3.521,3.521,0,0,1,2.023,2.015,5.027,5.027,0,0,1,.318,1.67c.032.731.041.97.041,2.841S18.883,14.106,18.851,14.841Z" transform="translate(0)" fill="#b0bfc7"/>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_social_item">--}}
{{--                        <a href="#" class="footer_social_item_link">--}}
{{--                            <svg id="youtube" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">--}}
{{--                                <path id="Path_74" data-name="Path 74" d="M224.113,212.974l4.284-2.468-4.284-2.468Zm0,0" transform="translate(-213.807 -198.507)" fill="#b0bfc7"/>--}}
{{--                                <path id="Path_75" data-name="Path 75" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm7.5,12.012a19.806,19.806,0,0,1-.309,3.607,1.879,1.879,0,0,1-1.322,1.322A45.61,45.61,0,0,1,12,17.25a43.977,43.977,0,0,1-5.868-.321,1.879,1.879,0,0,1-1.322-1.322A19.719,19.719,0,0,1,4.5,12a19.793,19.793,0,0,1,.309-3.607A1.917,1.917,0,0,1,6.132,7.059,45.61,45.61,0,0,1,12,6.75a43.884,43.884,0,0,1,5.868.321,1.879,1.879,0,0,1,1.322,1.322,18.8,18.8,0,0,1,.309,3.619Zm0,0" fill="#b0bfc7"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="footer_content_item footer_content_item_50">--}}
{{--                <div class="footer_title">Contents</div>--}}
{{--                <ul class="footer_content_item_cont">--}}
{{--                    <li class="footer_content_item_cont_item">--}}
{{--                        <a href="about.html" class="footer_content_item_cont_item_link">About Us</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_content_item_cont_item">--}}
{{--                        <a href="solutions.html" class="footer_content_item_cont_item_link">Solutions</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_content_item_cont_item">--}}
{{--                        <a href="news.html" class="footer_content_item_cont_item_link">News</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_content_item_cont_item">--}}
{{--                        <a href="mobileApp.html" class="footer_content_item_cont_item_link">Mobile Application</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_content_item_cont_item">--}}
{{--                        <a href="support.html" class="footer_content_item_cont_item_link">Support</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_content_item_cont_item">--}}
{{--                        <a href="contact.html" class="footer_content_item_cont_item_link">Contacts</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="footer_content_item footer_content_item_50">--}}
{{--                <div class="footer_title">Solutions</div>--}}
{{--                <ul class="footer_solutions">--}}
{{--                    <li class="footer_solutions_item">--}}
{{--                        <a href="#" class="footer_solutions_item_link">Alcohol drinks</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_solutions_item">--}}
{{--                        <a href="#" class="footer_solutions_item_link">Energetic drinks</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_solutions_item">--}}
{{--                        <a href="#" class="footer_solutions_item_link">Tabacco</a>--}}
{{--                    </li>--}}
{{--                    <li class="footer_solutions_item">--}}
{{--                        <a href="#" class="footer_solutions_item_link">Medicine</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="footer_content_item">--}}
{{--                <div class="footer_title">Download our app</div>--}}
{{--                <div class="footer_downloadApp">--}}
{{--                    <a href="#" class="footer_downloadApp_item">--}}
{{--                        <img class="footer_downloadApp_item--img" src="images/appStore.svg" alt="app store">--}}
{{--                    </a>--}}
{{--                    <a href="#" class="footer_downloadApp_item">--}}
{{--                        <img class="footer_downloadApp_item--img" src="images/googlePlay.svg" alt="app store">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="footer_content_item">--}}
{{--                <div class="footer_content_item_contact">--}}
{{--                    <div class="footer_title">Email:</div>--}}
{{--                    <a href="mailto::office@tttechnologies.az" class="footer_content_item_contact_link">office@tttechnologies.az</a>--}}
{{--                </div>--}}
{{--                <div class="footer_content_item_contact">--}}
{{--                    <div class="footer_title">Phone:</div>--}}
{{--                    <a href="tel:+994 50 567 67 67" class="footer_content_item_contact_link">+994 50 567 67 67</a>--}}
{{--                </div>--}}
{{--                <div class="footer_content_item_contact">--}}
{{--                    <div class="footer_title">Address:</div>--}}
{{--                    <a class="footer_content_item_contact_link">Edumedia-Azerbaijan 34, Khatai ave., Luxen Plaza, Baku</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="footer_bottom">--}}
{{--    <div class="container">--}}
{{--        <div class="footer_bottom_content">--}}
{{--            <div class="footer_bottom_content_left">--}}
{{--                <div class="footer_bottom_content_text">© 2021 TT Technologies</div>--}}
{{--            </div>--}}
{{--            <div class="footer_bottom_content_right">--}}
{{--                <a href="#" class="footer_bottom_content_text">Privacy policy</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script src="dist/jquery-3.6.0.min.js"></script>--}}
{{--<script src="dist/slick/slick.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
