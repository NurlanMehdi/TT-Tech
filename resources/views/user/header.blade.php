<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TT Technologies</title>

    <meta name="keywords" content="TT technologies,TT,tt technologies,technologies,texnologiyalar,texnologiya,TT texnologiya">
    <meta name="description" content="TT Technologies">
    <meta name="author" content="Farid Yusifov - Frontend Web Developer - Edumedia Azerbaijan">
    <meta name="copyright" content="Farid Yusifov - Frontend Web Developer - Edumedia Azerbaijan">
    <meta property="og:title" content="TT Technologies">
    <meta property="og:description" content="TT Technologies">
    <meta property="og:image" content="img/sidebar-icon.png">
    <meta property="og:url" content="tttechnologies.az">

    <link rel="stylesheet" href="{{asset('/views/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/views/dist/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/views/dist/slick/slick-theme.css')}}">
</head>
<body>

<div class="header">
    <div class="container">
        <div class="header_content">
            <a href="{{route('dashboard')}}" class="header_content_logo">
                <img class="header_content_logo--img" src="{{asset('views/images/TT_logo.svg')}}" alt="page logo">
            </a>
            <div class="header_content_body">
                <ul class="header_content_body_navbar">
                    <li class="header_content_body_navbar_item">
                        <a href="{{route('about-page')}}" class="header_content_body_navbar_item_link">{{__('language.aboutUs')}}</a>
                    </li>
                    <li class="header_content_body_navbar_item">
                        <a href="{{route('solutions-page')}}" class="header_content_body_navbar_item_link">{{__('language.solutions')}}</a>
                    </li>
                    <li class="header_content_body_navbar_item">
                        <a href="{{route('news-page')}}" class="header_content_body_navbar_item_link">{{__('language.news')}}</a>
                    </li>
                    <li class="header_content_body_navbar_item">
                        <a href="{{route('mobile-app-page')}}" class="header_content_body_navbar_item_link">{{__('language.mobileApplication')}}</a>
                    </li>
                    <li class="header_content_body_navbar_item">
                        <a href="{{route('support-page')}}" class="header_content_body_navbar_item_link">{{__('language.support')}}</a>
                    </li>
                    <li class="header_content_body_navbar_item">
                        <a href="{{route('contacts-page')}}" class="header_content_body_navbar_item_link">{{__('language.contacts')}}</a>
                    </li>
                </ul>
                <div class="header_content_body_lang">
                    <a href="{{route('changeLang','en')}}" class="header_content_body_lang_item {{(app()->getLocale() === 'en') ? 'active' : ''}}">En</a>
                    <a href="{{route('changeLang','az')}}" class="header_content_body_lang_item {{(app()->getLocale() === 'az') ? 'active' : ''}}">az</a>
                </div>
                <div class="header_content_body_search">
                    <form action="{{route('search')}}" class="header_search_form">
                        <input type="search" name="search" class="header_search_content_form_input" placeholder="{{__('language.search')}}">
                        <a href="#" class="header_content_body_search_link">
                            <img class="header_content_body_search--icon" src="{{asset('views/images/search.png')}}" alt="search icon">
                        </a>
                    </form>

                </div>
            </div>
            <div class="burger">
                <div class="burger_icon">
                    <img class="burger_icon--img" src="{{asset('views/images/burger.png')}}" alt="burger icon image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobileHeader">
    <div class="mobileHeader_content">
        <div class="mobileHeader_content_head">
            <div class="mobileHeader_top">
                <a href="{{route('dashboard')}}" class="mobileHeader_logo">
                    <img class="mobileHeader_logo--img" src="{{asset('views/images/TT_logo.svg')}}" alt="blue logo">
                </a>
                <div class="mobileHeader_closeBtn">
                    <img src="{{asset('views/images/closeBtn.png')}}" alt="close icon btn">
                </div>
            </div>
            <ul class="mobileHeader_navbar acordion">
                <li class="mobileHeader_navbar_item">
                    <a href="{{route('about-page')}}" class="mobileHeader_navbar_item_link">{{__('language.aboutUs')}}</a>
                </li>
                <li class="mobileHeader_navbar_item">
                    <a href="{{route('solutions-page')}}" class="mobileHeader_navbar_item_link">{{__('language.solutions')}}</a>
                </li>
                <li class="mobileHeader_navbar_item">
                    <a href="{{route('news-page')}}" class="mobileHeader_navbar_item_link">{{__('language.news')}}</a>
                </li>
                <li class="mobileHeader_navbar_item">
                    <a href="{{route('mobile-app-page')}}" class="mobileHeader_navbar_item_link">{{__('language.mobileApplication')}}</a>
                </li>
                <li style="display: none" class="mobileHeader_navbar_item">
                    <a href="{{route('support-page')}}" class="mobileHeader_navbar_item_link">{{__('language.support')}}</a>
                </li>
                <li class="mobileHeader_navbar_item">
                    <a href="{{route('contacts-page')}}" class="mobileHeader_navbar_item_link">{{__('language.contacts')}}</a>
                </li>
            </ul>
        </div>
        <div class="mobileHeader_sidebar">
            <div class="mobileHeader_sidebar--cont">
                <div class="mobileHeader_sidebar_social">
                    <div class="mobileHeader_sidebar_social_item">
                        <a href="#" class="mobileHeader_sidebar_social_item_link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="twitter" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm5.479,9.356q.008.177.008.356A7.783,7.783,0,0,1,9.65,17.549h0a7.8,7.8,0,0,1-4.222-1.237,5.6,5.6,0,0,0,.657.038,5.527,5.527,0,0,0,3.421-1.179,2.757,2.757,0,0,1-2.573-1.913,2.745,2.745,0,0,0,1.244-.047,2.755,2.755,0,0,1-2.21-2.7c0-.012,0-.024,0-.035a2.735,2.735,0,0,0,1.247.344,2.757,2.757,0,0,1-.853-3.677,7.82,7.82,0,0,0,5.677,2.878,2.756,2.756,0,0,1,4.694-2.512,5.524,5.524,0,0,0,1.749-.669,2.765,2.765,0,0,1-1.211,1.523,5.493,5.493,0,0,0,1.582-.434,5.6,5.6,0,0,1-1.374,1.426Zm0,0" fill="#b0bfc7"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mobileHeader_sidebar_social_item">
                        <a href="#" class="mobileHeader_sidebar_social_item_link">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">
                                    <path id="Path_21" data-name="Path 21" d="M24,12A12,12,0,1,0,12,24h.211V14.656H9.633v-3h2.578V9.44a3.61,3.61,0,0,1,3.853-3.96,21.146,21.146,0,0,1,2.31.119v2.68H16.8c-1.244,0-1.485.592-1.485,1.46v1.914h2.976l-.388,3H15.313v8.881A12.01,12.01,0,0,0,24,12Z" transform="translate(0 0)" fill="#b0bfc7"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="mobileHeader_sidebar_social_item">
                        <a href="#" class="mobileHeader_sidebar_social_item_link">
                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g id="Layer_1" data-name="Layer 1" transform="translate(0)">
                                    <path id="Path_22" data-name="Path 22" d="M126.582,124.3a2.3,2.3,0,1,1-2.3-2.3,2.3,2.3,0,0,1,2.3,2.3Z" transform="translate(-112.286 -112.295)" fill="#b0bfc7"/>
                                    <path id="Path_23" data-name="Path 23" d="M90.848,81.416a2.281,2.281,0,0,0-1.3-1.307,3.829,3.829,0,0,0-1.279-.239c-.727-.033-.945-.041-2.783-.041s-2.057.007-2.783.04a3.8,3.8,0,0,0-1.278.239,2.285,2.285,0,0,0-1.312,1.308A3.841,3.841,0,0,0,79.87,82.7c-.033.726-.04.944-.04,2.783s.007,2.058.04,2.783a3.8,3.8,0,0,0,.239,1.279,2.147,2.147,0,0,0,.516.8,2.124,2.124,0,0,0,.8.515,3.8,3.8,0,0,0,1.278.239c.727.033.945.041,2.783.041s2.058-.007,2.783-.041a3.765,3.765,0,0,0,1.279-.239,2.283,2.283,0,0,0,1.306-1.307,3.866,3.866,0,0,0,.239-1.279c.033-.726.041-.944.041-2.783s-.007-2.057-.041-2.783A3.85,3.85,0,0,0,90.848,81.416Zm-5.37,7.6a3.537,3.537,0,1,1,3.537-3.537,3.537,3.537,0,0,1-3.537,3.537Zm3.677-6.389a.827.827,0,1,1,.826-.826A.827.827,0,0,1,89.155,82.626Z" transform="translate(-73.478 -73.478)" fill="#b0bfc7" opacity="0.66"/>
                                    <path id="Path_24" data-name="Path 24" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm6.851,14.841a5.078,5.078,0,0,1-.318,1.67,3.523,3.523,0,0,1-2.019,2.021,5.022,5.022,0,0,1-1.67.318c-.731.032-.97.042-2.841.042s-2.105-.009-2.841-.042a5.07,5.07,0,0,1-1.67-.318,3.526,3.526,0,0,1-2.016-2.016,5,5,0,0,1-.318-1.67c-.031-.731-.041-.97-.041-2.841s.008-2.106.041-2.841a5.074,5.074,0,0,1,.318-1.67A3.523,3.523,0,0,1,7.486,5.471a5.007,5.007,0,0,1,1.67-.318c.731-.031.97-.041,2.841-.041s2.106.008,2.841.041a5.09,5.09,0,0,1,1.67.318,3.521,3.521,0,0,1,2.023,2.015,5.027,5.027,0,0,1,.318,1.67c.032.731.041.97.041,2.841S18.883,14.106,18.851,14.841Z" transform="translate(0)" fill="#b0bfc7"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="mobileHeader_sidebar_social_item">
                        <a href="#" class="mobileHeader_sidebar_social_item_link">
                            <svg id="youtube" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_74" data-name="Path 74" d="M224.113,212.974l4.284-2.468-4.284-2.468Zm0,0" transform="translate(-213.807 -198.507)" fill="#b0bfc7"/>
                                <path id="Path_75" data-name="Path 75" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm7.5,12.012a19.806,19.806,0,0,1-.309,3.607,1.879,1.879,0,0,1-1.322,1.322A45.61,45.61,0,0,1,12,17.25a43.977,43.977,0,0,1-5.868-.321,1.879,1.879,0,0,1-1.322-1.322A19.719,19.719,0,0,1,4.5,12a19.793,19.793,0,0,1,.309-3.607A1.917,1.917,0,0,1,6.132,7.059,45.61,45.61,0,0,1,12,6.75a43.884,43.884,0,0,1,5.868.321,1.879,1.879,0,0,1,1.322,1.322,18.8,18.8,0,0,1,.309,3.619Zm0,0" fill="#b0bfc7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mobileHeader_sidebar_lang">
                    <a href="{{route('changeLang','en')}}" class="mobileHeader_sidebar_lang_item {{(app()->getLocale() === 'en') ? 'active' : ''}}">EN</a>
                    <a href="{{route('changeLang','az')}}" class="mobileHeader_sidebar_lang_item {{(app()->getLocale() === 'az') ? 'active' : ''}}">AZ</a>
                </div>
            </div>
        </div>
        <div class="mobileHeader_footer">
            <form action="{{route('search')}}" class="mobileHeader_footer_search">
                <button type="submit" class="mobileHeader_footer_search--btn">
                    <img src="{{asset('views/images/search.png')}}" alt="search icon">
                </button>
                <input id="search" name="search" type="search" placeholder="{{__('language.search')}}" class="mobileHeader_footer_search--input">
            </form>
        </div>
    </div>
</div>
