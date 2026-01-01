@extends('front.layouts.master')

@section('title')
    {{ __('lang.home') }}
@endsection

@section('css')
    <style>

    </style>
    {{-- /* include style channels.css */ --}}
    <link rel="stylesheet" href="{{ asset('front/css/header.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front/css/common.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('front/css/channels.css') }}">
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="breadcrumb w3-text-black">
                <a class="text-decoration-none" href="{{ route('front.home') }}">
                    الرئيسية
                </a>
                /
                <a class="text-decoration-none" href="{{ route('front.channel') }}">
                    الحلقات
                </a>
            </div>
            <h1 style="font-family:'Amiri', serif;">
                {{ $resource->title }}
            </h1>
            <div class="">
                {{ $resource->short_description }}
            </div>
        </div>
    </section>

    <section class="section p-5" style="padding-top:10px;">
        <div class="container">

            <br>

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12">

                    <div class="video p-0">
                        <div _style="background-image: url({{ asset($resource->master_image) }})" class="frame rounded-bottom-0 w3-round-large cursor-pointer">
                            {!! $resource->embeded_text !!}
                        </div>

                        <div class="caption">
                            <strong class="w3-xlarge">{{ $resource->title }}</strong>

                            <p>{{ $resource->description }}</p>

                            <div class="d-flex justify-content-center w3-round-large border-1 w3-border w3-border-light-gray">
                                <div class="flex-shrink-0 p-2">
                                    <img height="70px" src="{{ asset('front/img/sheikh-ramy-profile.png') }}" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5>الشيخ رامي أبو زريد</h5>
                                    <strong>
                                        {!! getSettingValue('site_name_' . app()->getLocale()) !!}
                                    </strong>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>


            </div>
            <div class="mt-4 d-flex align-items-center justify-content-center">
            </div>

            <div class="banner" style="margin-top:16px;">
                <div class="d-block">
                    <img class="d-inline-block p-0" height="70px" src="{{ asset('front/img/sheikh-ramy.png') }}" alt="">
                    <div class="d-inline-block p-2">
                        <strong>هل تريد الانضمام لحلقة مناسبة لمستواك؟</strong>
                        <span>راسلنا على واتساب وسنساعدك في تحديد القسم المناسب.</span>
                    </div>
                </div>

                <a href="{{ getSettingValue('eg_facebook_link') }}" target="_blank" rel="noopener noreferrer">
                    <img height="40" src="{{ asset('front/img/messager_btn.png') }}" alt="">
                </a>
                {{-- <a class="btn btn-primary" href="https://wa.me/201019028034" target="_blank" rel="noopener">تواصل واتساب</a> --}}
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        let embeded = '{!! $resource->embeded_text !!}';

        function showVideo() {
            // let div = document.createElement('div');
            // div.innerHTML = embeded;
            $('.frame').find('iframe').attr('width', '100%');
            // $('.frame').html(div.innerHTML);
        }

        showVideo();
    </script>
@endsection
