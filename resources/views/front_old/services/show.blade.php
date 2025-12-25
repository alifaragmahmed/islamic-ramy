@extends('front.layouts.master')
@section('css')
    <style>
        .image {
            background-size: cover;
            background-position: left;
            background-repeat: no-repeat;
            height: 300px;
            background-image: url("{{ asset('front/images/service-bg.png') }}")
        }
    </style>
   <style>
    .laptop {
        position: relative;
        margin: auto;
        max-width: {{ isMobile()? '90%' : '45rem' }};
    }

    .laptop .laptop__screen {
        position: relative;
        z-index: 1;
        padding: 3%;
        border-radius: 2rem;
        background: #ecf1f7;
        background-image: linear-gradient(to bottom, #333, #111);
        box-shadow: 0 0.1rem 0 #cfcfcf;
        border: 2px solid #ccc;
    }

    .laptop .laptop__screen img {
        display: block;
        max-width: 100%;
        height: auto;
        aspect-ratio: attr(width)/attr(height);
        background: #000;
    }

    .laptop .laptop__bottom {
        position: relative;
        z-index: 1;
        margin-right: -7%;
        margin-left: -7%;
        height: 0.7rem;
        background: #e9eff5;
        background-image: linear-gradient(to right, #d2dde9 0%, #f9fcff 15%, #e5ebf2 40%, #e5ebf2 60%, #f9fcff 85%, #d2dde9 100%);
    }

    .laptop .laptop__bottom::before {
        display: block;
        margin: 0 auto;
        width: 20%;
        height: 0.7rem;
        border-radius: 0 0 0.2rem 0.2rem;
        background: #f6f9fc;
        background-image: linear-gradient(to right, #c3cfdb 0%, #f6f9fc 10%, #f6f9fc 90%, #c3cfdb 100%);
        content: " ";
    }

    .laptop .laptop__under {
        position: absolute;
        top: 100%;
        left: 25%;
        display: block;
        width: 50%;
        height: 1.5rem;
        background: #e2e8f0;
        background-image: linear-gradient(to bottom, #e2e8f0, #bec7d1);
    }

    .laptop .laptop__under::after,
    .laptop .laptop__under::before {
        position: absolute;
        top: 0%;
        right: 100%;
        bottom: 0;
        display: block;
        width: 50%;
        border-bottom-left-radius: 100%;
        background: inherit;
        content: " ";
    }

    .laptop .laptop__under::after {
        right: auto;
        left: 100%;
        border-bottom-right-radius: 100%;
        border-bottom-left-radius: 0;
    }

    .laptop .laptop__shadow {
        position: absolute;
        right: -10%;
        bottom: -2.5rem;
        left: -10%;
        z-index: 0;
        height: 2rem;
        background: radial-gradient(ellipse closest-side, #000, transparent);
        opacity: 0.5;
    }
</style>

@endsection
@section('content')
    <!-- Page Header Start -->

    <div class="container-fluid page-header p-0     " style="background-image: url({{ asset($metaBanner->image) }});  " data-wow-delay="0.1s">
        <div class="meta--banner" >
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown text-end mb-4 ">{{ $service->title }}</h1>

            </div>
        </div>
    </div>

    <div class=" p-0 container sec--contact--us">
        <div class="d-flex " style="{{ isMobile()?'flex-direction:column;':'' }}">
            <div class="item d-flex text-center align-items-center p-4" style="background: #AC9867">
                <b class="fs-3 text-white">
                    {{ __('lang.contact_us_to_know') }}
                </b>
            </div>
            <div class="item--form" >
                <div class="row p-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="{{ __('lang.name') }}" class="form-control p-2 rounded-3">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="{{ __('lang.email') }}" class="form-control p-2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="number" step="any" name="phone" id="phone" placeholder="{{ __('lang.phone') }}" class="form-control p-2">
                        </div>
                    </div>
                    <div class="col-md-12 pt-3">
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control p-2" placeholder="{{ __('lang.message') }}"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item--sumbit  d-flex align-items-center p-4">
                <button class="btn bg-white  p-3 rounded-circle" type="button" onclick="sendMessage()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.99 21L1 12L21.99 3L22 10L7 12L22 14L21.99 21Z" fill="#BDA771"/>
                        </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <section class=" pt-5 mb-5 py-5">
        <div class="row ">
            <div class="col-12 pt-5">
                <div class="service--video">
                    <div id="youtube_url" class="" style="position: relative;{{ isRtl()?'right':'left' }}: {{ isMobile()?'9':'35' }}%;top:{{ isMobile()?'100px':'36px' }}"></div>

                </div>
                <br><br>
            </div>


        </div>

        <div class="row">
            <div class="col-md-6 p-5 container">
                <h3 class="">{{ $service->title }}</h3>

                <div class="" style="font-weight: 400 !important;">

                    {!! $service->short_description !!}
                </div>


            </div>
            <div class="col-md-6  p-2 w3-round-large">
                {{-- <div class="image" style="">
                    <img class="service--img" src="{{ asset($service->image) }}" alt="">
                </div> --}}

                <div class="container">
                    <div class="laptop">
                        <div class="laptop__screen"><img loading="lazy" src="{{ asset($service->image) }}"  class="w3-round-large" width="1600"
                                height="1000" alt="Screen" /></div>
                        <div class="laptop__bottom">
                            <div class="laptop__under"></div>
                        </div>
                        <div class="laptop__shadow"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row pt-4 container">
            @if ($service->description )

            <div class="col-12">
                <div class="desc  p-2 w3-round-large">
                    {!! $service->description !!}
                </div>
            </div>
            @endif


        </div>
     </section>

     <br><br>
     <div class="bg-foot"></div>
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
        var videolink = '{{ $service->video_url}}';
        const videoId = getId(videolink);
        // alert(videoId);
        const iframeMarkup =
            '<iframe width="{{ isMobile()?'80':'30' }}%" height="{{ isMobile()?'200':'365' }}px" style="border-radius: 20px; margin:auto" src="//www.youtube.com/embed/' + videoId +
            '" frameborder="0" allowfullscreen></iframe>';
        $('#youtube_url').html(iframeMarkup);
        // alert(videoId);

    </script>

<script>




</script>

@endsection
