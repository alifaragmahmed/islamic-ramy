@extends('front.layouts.master')

@section('content')
    <div class="breadcrumb-area bg-image section-ptb" style="background-image: url({{ asset($metaBanner->image) }})">
        <div class="container">
            <div class="row breadcrumb">
                <div class="col">
                    <h2>{{ $metaBanner->title }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">{{ __('lang.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.service') }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Page Conttent -->
    <main class="page-content">

        <!-- Start Service Style-->
        <div class="section-service bg-gray section-pt section-pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>
                                {{ __('lang.our_services') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $get)
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single Service -->
                            <div class="service text-center service-2 padding-none cleaning-service mb-30">
                                <div class="thumb">
                                    <a>
                                        <img src="{{ asset($get->image) }}" alt="service img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a>
                                        {{ $get->title }}
                                    </a></h4>
                                    <div class="text-description-{{ isRTL() ? 'right' : 'left' }}">
                                        {!! $get->description !!}
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Service -->
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- End Service Style-->


    </main>
@endsection
