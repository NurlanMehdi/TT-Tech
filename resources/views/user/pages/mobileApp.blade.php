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
                    <a class="pageBreadcrumb_item_link">Mobile Application</a>
                </li>
            </ul>
            <div class="page_header">
                <div class="page_header_head">
                    Mobile Application
                </div>
                <div class="page_header_desc">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                </div>
            </div>
        </div>
        <img class="headerCover--img" src="{{asset('views/images/5b67ba61748073.5a78c56dbb549.png')}}" alt="mobileApp wallpaper">
        <div class="overlay"></div>
    </div>
    <!-- Page About -->
    <div class="pageAbout">
        <div class="container">
            <div class="pageAbout_content">
                <div class="pageAbout_content_item">
                    <div class="pageAbout_content_body">
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
                                    <img class="pageAbout_content_image--img" src="{{asset('views/images/white_phone_in_hand.png')}}" alt="mobileApp img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sectionItem">
        <div class="container">
            <div class="sectionItem_content">
                <div class="sectionItem_content_item ">
                    <div class="sectionItem_content_body">
                        <div class="sectionItem_content_body_head section_title">
                            Lorem Ipsum
                        </div>
                        <div class="sectionItem_content_body_desc section_text">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        </div>
                        <ul class="sectionItem_content_body_ul">
                            <li class="sectionItem_content_body_ul_li">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era
                            </li>
                            <li class="sectionItem_content_body_ul_li">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era
                            </li>
                            <li class="sectionItem_content_body_ul_li">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era
                            </li>
                        </ul>
                    </div>
                    <div class="sectionItem_content_image">
                        <div class="image_dropShadow_2n">
                            <div class="box pd_t65">
                                <div class="box_item">
                                    <img class="sectionItem_content_image--img" src="{{asset('views/images/QR_code_in_phone.png')}}" alt="QR code img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

