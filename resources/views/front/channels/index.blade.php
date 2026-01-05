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
            <div class="h6">
                حلقات متخصصة في حفظ القرآن ومراجعته بإتقان، مع تصحيح التلاوة وتثبيت الحفظ في أجواء إيمانية .
            </div>
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
                            <div class="video p-0 wow w3-animate-zoom">
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


            @include('front.layouts.banner')
        </div>
    </section>
@endsection
