@extends('front.layouts.master')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-area bg-image section-ptb" style="background-image: url({{ asset($metaBanner->image) }})">
        <div class="container">
            <div class="row breadcrumb">
                <div class="col">
                    <h2>{{ $metaBanner->title }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">{{ __('lang.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.gallery') }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Page Conttent -->
    <main class="page-content">

        <!--Gallery Area Start-->
        <div class="gallery-area section-pb-90 section-pt">
            <div class="container">
                <div class="row masonry__wrap">
                    <!--Single Gallery Image Start-->
                    @foreach ($gallery as $get)
                        <div class="col-lg-4 col-md-6 col-sm-12 gallery__item cat--1">
                            <div class="single-gallery mb--30">
                                <img src="{{ asset($get->image ?? 'frontassets/images/gallery/gallery-01.jpg') }}" alt="">
                                <div class="gallery-content">
                                    <div class="gallery-icon-box">
                                        <a class="gallery-popup" href="{{ asset($get->image ?? 'frontassets/images/gallery/gallery-01.jpg') }}"><i
                                                class="fa fa-search"></i></a>
                                        <a class="gallery-link" href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--Single Gallery Image End-->
                </div>
            </div>
        </div>
        <!--Gallery Area End-->

    </main>
    <!--// Page Conttent -->
@endsection
