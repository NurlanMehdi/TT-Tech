@extends('user.master')
@section('content')
    <!-- Header Cover -->
    <div class="headerCover">
        <div class="container">
            <ul class="pageBreadcrumb">
                <li class="pageBreadcrumb_item">
                    <a href="{{route('dashboard')}}" class="pageBreadcrumb_item_link">Homepage</a>
                </li>
                <li class="pageBreadcrumb_item">
                    <a class="pageBreadcrumb_item_link">News</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    News
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs -->
    <div class="news">
        <div class="container">
            <div class="blogs_main">
                <div class="blogs_main_cont">
                    <div class="blogs_main_image">
                        <div class="box pd_t57">
                            <div class="box_item">
                                <img class="blogs_content_item_image--img" src="{{asset('views/images/screen_2x.png')}}" alt="blog item image">
                            </div>
                        </div>
                    </div>
                    <div class="blogs_main_body">
                        <div class="blogs_main_body_cont">
                            <div class="blogs_content_item_body_header">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </div>
                            <div class="blogs_main_body_cont_desc">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            </div>
                            <div class="blogs_content_item_body_btn">
                                <a href="newsItem.html" class="btn">
                                    Read more
                                    <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_header">
                <div class="section_header_cont">
                    <div class="section_title"></div>
                    <a href="{{route('solutions-page')}}" class="btn">
                        See more
                        <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blue arrow to right">
                    </a>
                </div>
            </div>
            <div class="news_content">
                <div class="news_content_item">
                    <div class="news_content_item_cont">
                        <div class="news_content_item_image">
                            <div class="box pd_t57">
                                <div class="box_item">
                                    <img class="news_content_item_image--img" src="{{asset('views/images/alvaro-reyes-qWwpHwip31M-unsplash.png')}}" alt="blog item image">
                                </div>
                            </div>
                        </div>
                        <div class="news_content_item_body">
                            <div class="news_content_item_body_header">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            </div>
                            <div class="news_content_item_body_desc">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            </div>
                            <div class="news_content_item_body_btn">
                                <a href="newsItem.html" class="btn">
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
    <!-- National Legislation -->
    <div class="blogs">
        <div class="container">
            <div class="section_header">
                <div class="section_header_cont">
                    <div class="blogs_header_title section_title">National Legislation</div>
                    <a href="nationalLegislation.html" class="btn">
                        See more
                        <img src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blue arrow to right">
                    </a>
                </div>
            </div>
            <div class="blogs_content">
                <div class="blogs_content_item">
                    <div class="blogs_content_item_cont">
                        <div class="blogs_content_item_image">
                            <div class="box pd_t57">
                                <div class="box_item">
                                    <img class="blogs_content_item_image--img" src="{{asset('views/images/blue_arrow_to_right.png')}}" alt="blog item image">
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
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

