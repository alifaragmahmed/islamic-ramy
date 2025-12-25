<section class="project--section " style="background: #0c0c0c">
    <div class="container pt-5 mb-5">
        <div class="row pt-3 pb-5">
            <div class="col-md-12 pt-5  wow fadeInDown">
                <div class="d-flex justify-content-between align-items-center">
                    <div  class="p{{ isRtl()?'e':'s' }}-3" style="border-{{ isRtl()?'right':'left' }}: 15px solid #BDA771">
                        <p class="main-color fs-5 ">{{ __('lang.what_offers') }}</p><br>
                        <b class=" fs-2 text-white  mb-5">{{ __('lang.latest_projects') }}</b>
                    </div>
                    <div>
                        <a href="{{ route('front.product') }}" class="btn btn-contact pt-2 pb-2">
                            {{ __('lang.view_all_projects') }}
                            <svg style="{{ isRtl()?'':'rotate: 180deg' }}"s xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M4 16L14 26L15.41 24.59L7.83 17L28 17L28 15L7.83 15L15.41 7.41L14 6L4 16Z" fill="#F6F6F6"/>
                              </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 pt-5" id="categores">
                <div class="categories d-flex flex-wrap justify-content-center gap-3">
                    @foreach ($categories as $cat)
                        <div class=" cat--item {{ $cat->id == request()->category  ? 'cat-active' : ( !request()->category &&$loop->first ? 'cat-active' : '' ) }}">
                            <a href="{{ route('front.home',['category'=> $cat->id]) }}#projects--div">{{ $cat->title }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>





    </div>
    @if ($products->count() > 0)

    <div class="projects--div p-5 text-center" id="projects--div">

        <div id="carouselExampleDark" class="carousel pt-5 slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner ">
                @foreach ($products as $pro)

                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
                        <div class="container">
                            <div class="laptop">
                                <div class="laptop__screen"><img loading="lazy" src="{{ asset($pro->image) }}"  class="w3-round-large" width="1600"
                                        height="1000" alt="Screen" /></div>
                                <div class="laptop__bottom">
                                    <div class="laptop__under"></div>
                                </div>
                                <div class="laptop__shadow"></div>
                                <div class="carousel-caption d-flex justify-content-between carousel--contant p-3 bg-main " style="      bottom: {{ isMobile()?'59% !important':'50px' }};position: absolute;z-index: 99999;border-radius: 20px;    width: 98%;{{ isRtl()?'right':'left' }}: 3px;">
                                <h5 style="{{ isMobile()?'font-size: 12px !important;':'' }}">{{ $pro->title }}</h5>
                                    <a href="{{ $pro->url }}" class="btn btn-contact pt-2 pb-2" style="{{ isMobile()?'padding: 3px !important;':'' }}">
                                        {{ __('lang.view_project') }}
                                        <svg style="{{ isRtl()?'':'rotate: 180deg' }}" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                            <path d="M0.181762 7L6.43176 13.25L7.31301 12.3687L2.57551 7.625L15.1818 7.625L15.1818 6.375L2.57551 6.375L7.31301 1.63125L6.43176 0.75L0.181762 7Z" fill="#F6F6F6"/>
                                            </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{-- <img src="{{ asset($pro->image) }}" style="    width: 590px;height: 440px;" class=" m-auto"  alt="..."> --}}

                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev btn--prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span style="border: 1px solid #BDA771;padding: 10px 12px;border-radius: 50%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                        <path d="M10.2727 24L0.272705 14L1.6827 12.59L9.27271 20.17L9.27271 0H11.2727L11.2727 20.17L18.8627 12.59L20.2727 14L10.2727 24Z" fill="#BDA771"/>
                        </svg>
                </span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span style="background: #BDA771;padding: 10px 12px;border-radius: 50%;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                        <path d="M10.2727 0L0.272705 10L1.6827 11.41L9.27271 3.83L9.27271 24H11.2727L11.2727 3.83L18.8627 11.41L20.2727 10L10.2727 0Z" fill="#F6F6F6"/>
                    </svg>
                </span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- <img src="{{ asset('front/images/laptob.png') }}" class="laptop--image" style="    height: 555px;
        width: 903px;
        margin: auto;
        position: relative;
        bottom: 489px;" alt=""> --}}

    </div>
    @endif
</section>
