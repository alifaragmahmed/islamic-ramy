@extends('front.layouts.master')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-area bg-image section-ptb" style="background-image: url({{ asset($metaBanner->image) }})">
        <div class="container">
            <div class="row breadcrumb">
                <div class="col">
                    <h2>
                        {{ $metaBanner->title }}
                    </h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">
                            {{ __('lang.home') }}</a></li>
                        <li class="breadcrumb-item active">
                            {{ __('lang.contact') }}
                        </li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Page Conttent -->
    <main class="page-content">

        <!-- Start Google-map Area -->
        <div class="google-map">
            {!! getSettingValue('map')!!}
        </div>
        <!-- End google-map Area -->

        <div class="contact-form-area">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form_wrapper form-style-1">
                            <div class="contact-title">
                                <div class="title-3">
                                    <h3>{{ __('lang.contact_us') }}</h3>
                                </div>
                            </div>
                            <div class="form-inner-box-warp">
                                <!-- (You can usr this line) <form id="contact-form" action="assets/php/mail.php">-->
                                <form id="contact-form" action="{{ route('front.contact.send') }}">
                                    <div class="row">
                                        @csrf
                                        <div class="col-lg-12 mb-30">
                                            <input name="name" type="text" placeholder="Name*">
                                        </div>
                                        <div class="col-lg-12  mb-30">
                                            <input name="email" type="email" placeholder="Email*">
                                        </div>
                                        <div class="col-lg-12  mb-30">
                                            <input name="subject" type="text" placeholder="Subject*">
                                        </div>
                                        <div class="col-lg-12  mb-30">
                                            <textarea name="message" placeholder="Your Message*"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="submit-btn default-btn">Send</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 col-md-6">
                        <div class="contact-info-wrapper">
                            <div class="contact-title">
                                <div class="title-3">
                                    <h3>Contact Us</h3>
                                </div>
                            </div>

                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <div class="contact-text d-flex align-items-center">
                                            <i class="fa fa-phone"></i>
                                            <p>
                                                <a href="#">
                                                    {{ getSettingValue('eg_phone') }}
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-text d-flex align-items-center">
                                            <i class="fa fa-globe"></i>
                                            <p>
                                                <a href="#"> 
                                                    {{ getSettingValue('eg_email_1') }}
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-text d-flex align-items-center">
                                            <i class="fa fa-map-marker"></i>
                                            <p>
                                                {{ getSettingValue('eg_address_'. app()->getLocale()) }}
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>
    <!--// Page Conttent -->
@endsection
