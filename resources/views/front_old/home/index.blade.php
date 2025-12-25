@extends('front.layouts.master')
@section('css')
    @include('front.layouts.lap-css', ['width' => '40rem', 'height' => '34rem'])
    @if (isRtl())
        <style>
            .slick-slide {
                float: right !important;
            }
        </style>
    @endif
@endsection
@section('content')
    @include('front.home.slider')

    <!-- Page Conttent -->
    <main class="page-content">

        <!-- Start Service Style-->
        @include('front.home.features')
        <!-- End Service Style-->

        @include('front.home.about')

        <!-- Start Service Style-->
        @include('front.home.services')
        <!-- End Service Style-->

        @include('front.home.why_chooses')

        @include('front.home.customer_opinions')

        @include('front.home.guards')

        @include('front.home.blog')
        @if (isset($parteners))
            @include('front.home.parteners')
        @endif
    </main>
    <!--// Page Conttent -->
@endsection
