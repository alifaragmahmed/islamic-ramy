<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! stripslashes(JsonLd::generate()) !!}
    <meta name="author" content="Tawazun Digital Marting">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontassets/images/favicon.ico') }}">

    <!-- CSS
 ============================================ -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontassets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontassets/css/style.css') }}?v=1.2">

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Changa:wght@200..800&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <style>
        *,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Cairo", sans-serif;
            /* font-optical-sizing: auto; */
            /* font-weight: <weight>; */
            /* font-style: normal; */
            /* font-variation-settings:
                "slnt" 0; */
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5JCTSSF');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body class="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JCTSSF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    {{-- <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-main text-white btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}

    @include('front.layouts.script')
</body>

</html>
