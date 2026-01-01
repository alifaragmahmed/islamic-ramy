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

    <section class="section {{ !isMobile() ? 'p-5' : 'p-0' }}" style="padding-top:10px;">
        <div class="container">

            <br>

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12 mb-3">

                    <div class="top-line"></div>
                    <div class="video p-0 rounded-0">
                        <div _style="background-image: url({{ asset($resource->master_image) }})" class="frame rounded-bottom-0 w3-round-large cursor-pointer">
                            {!! $resource->embeded_text !!}
                        </div>
                        <div class="under-line"></div>


                        <div class="caption">
                            <strong class="w3-xlarge">{{ $resource->title }}</strong>

                            <p>{{ $resource->description }}</p>

                            <div class="d-flex p-2 align-items-center justify-content-center w3-round-large border-1 w3-border w3-border-light-gray">
                                <div class="flex-shrink-0">
                                    <img height="70px" src="{{ asset('front/img/sheikh-ramy-profile.png') }}" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5>الشيخ رامي أبو زريد</h5>
                                    <strong>
                                        {!! getSettingValue('site_name_' . app()->getLocale()) !!}
                                    </strong>
                                </div>
                                <div class="flex-shrink-0">
                                    <a class="btn btn-primary" href="javascript:window.navigator.share({title: '{{ $resource->title }}', url: window.location.href});">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0"
                                            viewBox="0 0 512 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M361.824 344.395c-24.531 0-46.633 10.593-61.972 27.445l-137.973-85.453A83.321 83.321 0 0 0 167.605 256a83.29 83.29 0 0 0-5.726-30.387l137.973-85.457c15.34 16.852 37.441 27.45 61.972 27.45 46.211 0 83.805-37.594 83.805-83.805C445.629 37.59 408.035 0 361.824 0c-46.21 0-83.804 37.594-83.804 83.805a83.403 83.403 0 0 0 5.726 30.386l-137.969 85.454c-15.34-16.852-37.441-27.45-61.972-27.45C37.594 172.195 0 209.793 0 256c0 46.21 37.594 83.805 83.805 83.805 24.53 0 46.633-10.594 61.972-27.45l137.97 85.454a83.408 83.408 0 0 0-5.727 30.39c0 46.207 37.593 83.801 83.804 83.801s83.805-37.594 83.805-83.8c0-46.212-37.594-83.805-83.805-83.805zm-53.246-260.59c0-29.36 23.887-53.246 53.246-53.246s53.246 23.886 53.246 53.246c0 29.36-23.886 53.246-53.246 53.246s-53.246-23.887-53.246-53.246zM83.805 309.246c-29.364 0-53.25-23.887-53.25-53.246s23.886-53.246 53.25-53.246c29.36 0 53.242 23.887 53.242 53.246s-23.883 53.246-53.242 53.246zm224.773 118.95c0-29.36 23.887-53.247 53.246-53.247s53.246 23.887 53.246 53.246c0 29.36-23.886 53.246-53.246 53.246s-53.246-23.886-53.246-53.246zm0 0"
                                                    fill="currentColor" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>

                                        مشاركة
                                    </a>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <div class="video mb-4 w3-round-large p-3 w3-white">
                        <a class="btn btn-ghost d-block text-primary" href="{{ route('front.channel') }}">
                            الرجوع للحلقات

                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 24 24"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path d="M15 19a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 0-1.41l6-6a1 1 0 0 1 1.41 1.41L10.41 12l5.29 5.29A1 1 0 0 1 15 19z" data-name="17" fill="currentColor" opacity="1"
                                        data-original="#000000"></path>
                                </g>
                            </svg>

                        </a>
                    </div>


                    <div class="video mb-4 w3-round-large p-3 w3-white">
                        <h5>{{ getSettingValue('site_name_' . app()->getLocale()) }}</h5>
                        <p class="w3-text-gray">
                            حلقات تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية. للتسجيل والاشتراك تواصل معنا مباشرة.
                        </p>
                        <div class="episode-actions" style="margin-top:12px;">
                            <a class="btn w3-green" href="https://wa.me/{{ getSettingValue('eg_whatsapp') }}" target="_blank" rel="noopener">تواصل واتساب</a>
                            <a class="btn btn-primary" href="{{ route('front.about') }}">عن الأكاديمية</a>
                        </div>
                    </div>

                    <div class="video  w3-round-large p-3 w3-white">
                        <h5>حلقات موصى بها</h5>

                        @foreach ($relatedVideos as $video)
                            <div class="video shadow-none p-0">
                                <div style="background-image: url({{ asset($video->master_image) }})" class="frame rounded-bottom-0 mb-1">
                                    <div class="play">▶</div>
                                </div>
                                <div class="caption ps-2 pe-2">
                                    <strong style="font-size: 12px" class="">{{ $video->title }}</strong>
                                    <span>{{ $video->time_per_minutes }} دقائق</span>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>


            </div>
            <div class="mt-4 d-flex align-items-center justify-content-center">
            </div>

            <div class="banner {{ isMobile() ? 'd-block' : '' }}" style="margin-top:16px;">
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
