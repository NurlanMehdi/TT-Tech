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
                    <a class="pageBreadcrumb_item_link">About Us</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    About TT Technologies
                </div>
                <div class="page_header_desc">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                </div>
            </div>
        </div>
        <img class="headerCover--img" src="{{asset('views/images/Creative_Wallpaper_____Direct_light_lines_093129_.png')}}" alt="about us wallpaper">
        <div class="overlay"></div>
    </div>
    <!-- Page About -->
    <div class="pageAbout">
        <div class="container">
            <div class="pageAbout_content">
                <div class="pageAbout_content_item">
                    <div class="pageAbout_content_body">
                        <div class="pageAbout_content_body_head section_title">
                            Purpose
                        </div>
                        <div class="pageAbout_content_body_desc section_text">
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
                <div class="pageAbout_content_item">
                    <div class="pageAbout_content_body">
                        <div class="pageAbout_content_body_head section_title">
                            Mission
                        </div>
                        <div class="pageAbout_content_body_desc section_text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="pageAbout_content_image">
                        <div class="image_dropShadow_2n">
                            <div class="box pd_t65">
                                <div class="box_item">
                                    <img src="{{asset('views/images/aboutUs_content_img.png')}}" alt="about us content img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pageAbout_content_item">
                    <div class="pageAbout_content_body">
                        <div class="pageAbout_content_body_head section_title">
                            Vision
                        </div>
                        <div class="pageAbout_content_body_desc section_text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="pageAbout_content_image">
                        <div class="image_dropShadow">
                            <div class="box pd_t65">
                                <div class="box_item">
                                    <img src="{{asset('views/images/aboutUs_content_img.png')}}" alt="about us content img">
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

