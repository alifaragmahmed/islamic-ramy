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
                    <li class="breadcrumb-item active">
                        {{ __('lang.about') }}
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
    
    
    <!-- Start Agency Benefits Area -->
    @include('front.home.about')
    <!-- End Agency Benefits Area -->
    
    <!-- Project Count Area Start -->
    @include('front.home.counter')
    <!-- Project Count Area End -->
    
    <!-- Start Team Style -->
    @include('front.home.guards')
    <!-- End Team Style -->
    
    
</main>
<!--// Page Conttent -->

@endsection
@section('js')
    <script>
         function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11) ?
                match[2] :
                null;
        }
        var videolink = '{{ getSettingValue("features_video_url") }}';
        const videoId = getId(videolink);
        // alert(videoId);
        const iframeMarkup =
            '<iframe width="80%"  style="border-radius: 20px;" src="//www.youtube.com/embed/' + videoId +
            '" frameborder="0" allowfullscreen></iframe>';
        $('#youtube_link').html(iframeMarkup);
        // alert(videoId);

    </script>
@endsection
