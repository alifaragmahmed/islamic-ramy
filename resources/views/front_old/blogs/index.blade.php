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
                        <li class="breadcrumb-item"><a href="index.html">{{ __('lang.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ $metaBanner->title }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->

    <!-- Page Conttent -->
    <main class="page-content">

        <!-- Start Post Carousel Style-->
        <div class="section-post-carousel section-pt section-pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>
                                {{ __('lang.latest_blog') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!-- Start Single Post -->
                            <div class="post-carousel mb-30">
                                <div class="thumb">
                                    <a>
                                        <img src="{{ asset($blog->image) }}" alt="elementor">
                                    </a>
                                </div>
                                <div class="ptc-content">
                                    <h4><a>{{ $blog->title }}</a></h4>
                                    <ul class="meta d-flex">
                                        <li><a href="#"><i class="zmdi zmdi-calendar-check"></i>
                                                {{ $blog->created_at->format('M d, Y') }}
                                            </a></li>
                                    </ul>
                                    <p>
                                        {!! $blog->short_description !!}
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Post -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End Post Carousel  Style-->

    </main>
    <!--// Page Conttent -->
@endsection
