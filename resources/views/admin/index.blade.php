@extends('admin.master')
@section('content')
    <!-- MAIN PAGE -->
    <section class="mainPage">
        <div class="container-lg">
            <div class="page_head">
                <div class="page_head--header page_head--header_after">
                    Dashboard
                </div>
                <div class="page_head--description">
                    AdminPanel dashboard-ı
                </div>
                <hr/>

            </div>
            <div class="page_content">
                <div class="section_socialBanner_content_items">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section_socialBanner_content_item">
                                <div class="section_socialBanner_content_item_content">
                                    <a href="{{route('admin.about')}}" class="section_socialBanner_content_item_content_profile">
                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                            Haqqımızda
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section_socialBanner_content_item">
                                <div class="section_socialBanner_content_item_content">
                                    <a href="{{route('admin.solutions')}}" class="section_socialBanner_content_item_content_profile">
                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                            Layihələr
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section_socialBanner_content_item">
                                <div class="section_socialBanner_content_item_content">
                                    <a href="{{route('admin.news')}}" class="section_socialBanner_content_item_content_profile">
                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                            Xəbərlər
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="section_socialBanner_content_item">--}}
{{--                                <div class="section_socialBanner_content_item_content">--}}
{{--                                    <a href="categories.html" class="section_socialBanner_content_item_content_profile">--}}
{{--                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">--}}
{{--                                            Səhifələr--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="section_socialBanner_content_item">--}}
{{--                                <div class="section_socialBanner_content_item_content">--}}
{{--                                    <a href="categories.html" class="section_socialBanner_content_item_content_profile">--}}
{{--                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">--}}
{{--                                            Xəbərlər--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="section_socialBanner_content_item">--}}
{{--                                <div class="section_socialBanner_content_item_content">--}}
{{--                                    <a href="categories.html" class="section_socialBanner_content_item_content_profile">--}}
{{--                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">--}}
{{--                                            Əlaqə--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="section_socialBanner_content_item">--}}
{{--                                <div class="section_socialBanner_content_item_content">--}}
{{--                                    <a href="categories.html" class="section_socialBanner_content_item_content_profile">--}}
{{--                                        <div class="section_socialBanner_content_item_content_profile--name text-uppercase">--}}
{{--                                            Menyu--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN PAGE END -->
@endsection
