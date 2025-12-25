@extends('front.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/viewer.css') }}" crossorigin="anonymous">

    <style>
        .image {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

    </style>

    @include('front.layouts.lap-css')
@endsection
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header p-0"
        style="background-image: url({{ asset($metaBanner->image) }});"
        data-wow-delay="0.1s">
        <div class="meta--banner">
            <div class="container py-5">
                <h1 class=" animated slideInDown mb-4 text-end">{{ $product->title }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <section class="container pt-5 mb-5 py-5">
        <div class="row">
            <div class="col-md-6 ">
                <div class="container text-dark pt-md-5">
                    <img src="{{ asset($product->project_logo) }}" style="width: 70px" alt="">
                    <div class="pt-4">
                        <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.name') }} : </b>
                            {{ $product->title }}</p>
                        <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.field') }} : </b>
                            {{ $product->field }}</p>
                        <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.country') }} : </b>
                            {{ $product->country }}</p>
                        <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.technology') }} : </b>
                            {{ $product->technology }}</p>
                    </div>
                    <div class="pt-5 d-flex  justify-content-between">
                        <a href="{{ $product->url }}" class="btn main-color btn-contact "
                            style="color: #BDA771 !important;background: #fff !important;border: 2px solid #BDA771; border-radius: 50px"
                            target="_blank">{{ __('lang.visit_website') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6  p-2 ">
                <div class="product-image  p-3  ">

                    <div class="container">
                        <div class="laptop">
                            <div class="laptop__screen"><img src="{{ asset($product->image) }}"  class="w3-round-large" width="1600"
                                    height="1000" alt="Screen" /></div>
                            <div class="laptop__bottom">
                                <div class="laptop__under"></div>
                            </div>
                            <div class="laptop__shadow"></div>
                        </div>
                    </div>

                    {{-- <div class="lap--view text-center w3-center" style="padding-top: 25px;background-size: contain;  position: relative;
                   ">
                        <img class="product_image_new w3-round-large position-absolute_" src="{{ asset($product->image) }}" alt=""
                            data-zoom-image="{{ asset($product->image) }}">
                    </div> --}}


                </div>
            </div>

        </div>

        <div class="row pt-4">

            @if ($product->description)
                <div class="col-12">

                    <b>{{ __('lang.project_desc') }} : </b>
                    <div class="desc  pt-3 w3-round-large">
                        {{ $product->short_description }}
                    </div>
                    <div class="desc   w3-round-large">
                        {!! $product->description !!}
                    </div>
                </div>
            @endif

        </div>

        <div class="row pt-3">
            @foreach ($product->images as $item)
                <div class="col-md-4 m-auto pt-2">

                    <img src="{{ asset($item->image) }}" style="height: 300px;width:100%;object-fit: cover" class="w3-round-large" alt="">
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('js')
@endsection
