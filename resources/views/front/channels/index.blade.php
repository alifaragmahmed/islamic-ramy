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
            <div class="breadcrumb w3-text-black">الرئيسية / الحلقات</div>
            <h1 style="font-family:'Amiri', serif;">الحلقات</h1>
            <div class="">تقسيم للدورات + مجموعة فيديوهات داخل كل قسم (تجريبي قابل للربط لاحقًا).</div>
        </div>
    </section>

    <section class="section" style="padding-top:10px;">
        <div class="container">
            <div class="tabs" role="tablist" aria-label="تصنيفات الحلقات">
                <a href="{{ route('front.channel') }}" class="{{ request()->category_id == null ? 'btn-primary' : '' }} btn" type="button" data-filter="all">{{ __('lang.all') }}</a>
                @foreach ($categories as $cat)
                    <a href="{{ route('front.channel') }}?category_id={{ $cat->id }}" class="btn {{ request()->category_id == $cat->id ? 'btn-primary' : '' }}" type="button"
                        data-filter="tajweed">{{ $cat->title }}</a>
                @endforeach
            </div>
            <br>

            <div class="row">

                @foreach ($videos as $item)
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2">

                        <a href="{{ route('front.channel.show', $item->slug) }}" class="text-decoration-none">
                            <div class="video p-0">
                                <div style="background-image: url({{ asset($item->master_image) }})" class="frame rounded-bottom-0 w3-round-large">
                                    <div class="play">▶</div>
                                </div>
                                <div class="caption">
                                    <strong>{{ $item->title }}</strong>
                                    <span>{{ $item->short_description }}</span>
                                </div>
                            </div>
                        </a>


                    </div>
                @endforeach

            </div>
            <div class="mt-4 d-flex align-items-center justify-content-center">
                {{ $videos->appends(request()->query())->render() }}
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
