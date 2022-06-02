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
                    <a class="pageBreadcrumb_item_link">{{__('language.contacts')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Contacts -->
    <div class="contact">
        <div class="container">
            <div class="contact_content">
                <div class="contact_content_cont">
                    <div class="page_header_head">{{__('language.contacts')}}</div>
                    <ul class="contact_content_cont_ul">
                        <li class="contact_content_cont_ul_li">
                            <span class="contact_content_cont_ul_li_title">{{__('language.email')}} :</span>
                            <a href="mailto::{{$contact->email}}" class="contact_content_cont_ul_li_link">{{$contact->email}}</a>
                        </li>
                        <li class="contact_content_cont_ul_li">
                            <span class="contact_content_cont_ul_li_title">{{__('language.phone')}} :</span>
                            <a href="tel::{{$contact->phone}}" class="contact_content_cont_ul_li_link">{{$contact->phone}}</a>
                        </li>
                        <li class="contact_content_cont_ul_li">
                            <span class="contact_content_cont_ul_li_title">{{__('language.address')}} :</span>
                            <a class="contact_content_cont_ul_li_link">{{$contact->address}}</a>
                        </li>
                    </ul>
                </div>
                <div class="contact_content_form">
                    <div class="contact_content_form_head">{{__('language.getInTouch')}}</div>
                    <form action="{{route('mail')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form_item">
                            <div class="form_item_cont">
                                <div class="form_item_input">
                                    <input class="form_item--input" name="fullname" type="text" placeholder="{{__('language.fullName')}}*" required>
                                </div>
                                <div class="form_item_input">
                                    <input class="form_item--input" name="email"  type="email" placeholder="{{__('language.email')}}*" required>
                                </div>
                            </div>
                        </div>
                        <div class="form_item">
                            <textarea name="message" class="form_item_textarea" placeholder="{{__('language.yourMessage')}}"></textarea>
                        </div>
                        <div class="form_item">
                            <button class="form_item_btn" type="submit">{{__('language.submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="container">
            <div class="map_content">
                <iframe src="{{$contact->map}}" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

