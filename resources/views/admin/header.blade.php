<!-- HEADER -->
<section class="section section_header">
    <div class="container-fluid">
        <div class="section_header_topHeader">
            <div class="section_header_topHeader_logo">
                <a href="{{route('admin.admin-panel')}}" class="section_header_topHeader_logo_link">
                    <img src="{{asset('views/images/TT_logo.svg')}}" class="section_header_topHeader_logo_link--img" alt="XIN logo" />
                </a>
            </div>
            <a href="#" class="section_header_topHeader_toggle">
                <i class="xin-icon xin-burger"></i>
            </a>
        </div>

        @if(Request::is('admin/coco') != 1 && Request::is('admin/login') != 1 && Request::is('admin/logout') != 1)
            <div class="section_header_mainHeader">
                <div class="section_header_mainHeader_navbar">
                    <a href="{{route('admin.about')}}" data-name="Haqqımızda" data-sub-menu="menu_about_us" class="section_header_mainHeader_navbar_link">
                        Haqqımızda
                    </a>
                    <a href="{{route('admin.solutions')}}" data-name="Haqqımızda" data-sub-menu="menu_about_us" class="section_header_mainHeader_navbar_link">
                        Layihələr
                    </a>
                    <a href="{{route('admin.news')}}" data-name="Haqqımızda" data-sub-menu="menu_about_us" class="section_header_mainHeader_navbar_link">
                        Xəbərlər
                    </a>
                    <a href="{{route('admin.support')}}" data-name="Haqqımızda" data-sub-menu="menu_about_us" class="section_header_mainHeader_navbar_link">
                        Dəstək
                    </a>
                    <a href="{{route('admin.contact')}}" data-name="Haqqımızda" data-sub-menu="menu_about_us" class="section_header_mainHeader_navbar_link">
                        Əlaqə
                    </a>
                    <a href="{{route('admin.logout.handle')}}" data-name="Çıxış" data-sub-menu="menu_logout" class="section_header_mainHeader_navbar_link">
                        Çıxış
                    </a>
                </div>
            </div>
            <div class="section_header_mobileNavbar">
                <div class="section_header_mobileNavbar_nav">
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('admin.about')}}" class="section_header_mobileNavbar_nav_item--link">
                            Haqqımızda
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('admin.solutions')}}" class="section_header_mobileNavbar_nav_item--link">
                            Layihələr
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('admin.news')}}" class="section_header_mobileNavbar_nav_item--link">
                            Xəbərlər
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('admin.support')}}" class="section_header_mobileNavbar_nav_item--link">
                            Dəstək
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('admin.contact')}}" class="section_header_mobileNavbar_nav_item--link">
                            Əlaqə
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('admin.logout.handle')}}" class="section_header_mobileNavbar_nav_item--link">
                            Çıxış
                        </a>
                    </div>

                </div>
                <div class="section_header_mobileNavbar_bottom">
                    <div class="section_header_mobileNavbar_bottom_content">
                        <div class="section_header_mobileNavbar_bottom_content_social">
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-twitter_bg"></i>
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-facebook_bg"></i>
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-instagram_bg"></i>
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-youtube_bg"></i>
                            </a>
                        </div>
                        <div class="section_header_mobileNavbar_bottom_content_lang">
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link">
                                az
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link">
                                ru
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link active">
                                en
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link">
                                fr
                            </a>
                        </div>
                    </div>
                    <div class="section_header_mobileNavbar_bottom_search">
                        <label class="sr-only" for="searchMobile">Search</label>
                        <form class="searchForm">
                            <i class="xin-icon xin-search"></i>
                            <input class="section_header_mainHeader_search_input searchForm--input customForm-control" id="searchMobile" name="search" value="" placeholder="Search" type="search">
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!-- HEADER END -->
