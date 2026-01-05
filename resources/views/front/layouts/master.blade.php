<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! stripslashes(JsonLd::generate()) !!}
    {{-- @if (app()->getLocale() === 'ar') --}}
    <link href="{{ asset('front/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    {{-- @else
        <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    @endif --}}


    <link rel="stylesheet" href="{{ url('/front/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap');
    </style>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    {{-- <link rel="stylesheet" href="{{ asset('front/lib/animate/animate.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://vjs.zencdn.net/8.23.4/video-js.css" rel="stylesheet" />

    <style>
        *,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            font-family: "Almarai", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        body {
            width: 100%;
            height: 100%;
        }
    </style>

    @yield('css')
</head>

<body>
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    <script src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/front/js/main.js') }}" defer></script>
    <script src="{{ asset('front/js/wow.js') }}" defer></script>
    <script src="https://vjs.zencdn.net/8.23.4/video.min.js"></script>

    <script>
        // document ready
        $(document).ready(function() {
            let wow = new WOW({
                boxClass: 'wow', // default
                animateClass: 'animated', // default
                offset: 0, // default
                mobile: true, // default
                live: true // default
            })
            wow.init();
        });
    </script>
    @yield('scripts')

</body>

</html>
