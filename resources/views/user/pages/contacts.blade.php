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
                    <a class="pageBreadcrumb_item_link">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Contacts -->
    <div class="contact">
        <div class="container">
            <div class="contact_content">
                <div class="contact_content_cont">
                    <div class="page_header_head">Contacts</div>
                    <ul class="contact_content_cont_ul">
                        <li class="contact_content_cont_ul_li">
                            <span class="contact_content_cont_ul_li_title">Email:</span>
                            <a href="mailto::office@tttechnologies.az" class="contact_content_cont_ul_li_link">office@tttechnologies.az</a>
                        </li>
                        <li class="contact_content_cont_ul_li">
                            <span class="contact_content_cont_ul_li_title">Phone:</span>
                            <a href="tel:+994 50 567 67 67" class="contact_content_cont_ul_li_link">+994 50 567 67 67</a>
                        </li>
                        <li class="contact_content_cont_ul_li">
                            <span class="contact_content_cont_ul_li_title">Address:</span>
                            <a class="contact_content_cont_ul_li_link">Edumedia-Azerbaijan 34, Khatai ave., Luxen Plaza, Baku</a>
                        </li>
                    </ul>
                </div>
                <div class="contact_content_form">
                    <div class="contact_content_form_head">Get in touch with us</div>
                    <form action="#">
                        <div class="form_item">
                            <div class="form_item_cont">
                                <div class="form_item_input">
                                    <input class="form_item--input" type="text" placeholder="Full Name*" required>
                                </div>
                                <div class="form_item_input">
                                    <input class="form_item--input" type="email" placeholder="Email Adress*" required>
                                </div>
                            </div>
                        </div>
                        <div class="form_item">
                            <textarea class="form_item_textarea" placeholder="Your message..."></textarea>
                        </div>
                        <div class="form_item">
                            <button class="form_item_btn" type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="container">
            <div class="map_content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1807.243499470752!2d49.83877764049151!3d40.377623457038304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030862ec79a71dd%3A0xda3e298e0fabde3c!2sAzericard!5e0!3m2!1sen!2s!4v1645426087441!5m2!1sen!2s" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    @include('user.ourClients')
    <!-- Get in touch -->
    @include('user.getInTouch')
@endsection

