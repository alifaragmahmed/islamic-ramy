@extends('front.layouts.master')

@section('css')
    @include('front.layouts.lap-css', ['width' => '37rem'])
@endsection

@section('content')
    <!-- Page Header Start -->
    @if (!isMobile())
        <br>
    @endif
    <div class="container-fluid page-header p-0 "
        style=" {{ isMobile() ? 'height:150px;' : '' }} background-image: url({{ asset($metaBanner->image) }}); "
        data-wow-delay="0.1s">
        <div class="meta--banner">
            <div class="container py-5">
                <h1 class="display-5 animated slideInDown text-end mb-1 ">{{ __('lang.our_works') }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class=" mt-5" style="background: #F8F6F1">
        <div class="container p-3">
            <div class="d-flex  flex-wrap align-items-center gap-3">
                @foreach ($categories as $cat)
                    <div
                        class=" cat--item {{ $cat->id == request()->category ? 'cat-active' : (!request()->category && $loop->first ? 'cat-active' : 'text-dark') }}">
                        <a href="{{ route('front.product', ['category' => $cat->id]) }}#categores">{{ $cat->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class=" pt-5 mb-5 py-5">


        @forelse ($products as $item)
            <div class="row">
                @if ($loop->iteration % 2 != 1 || isMobile())
                    <div class="col-md-6 p-0 ">
                        <div class="p-5 pb-0"
                            style="height: 100%; background:linear-gradient(360deg, {{ $item->color1 }} 16.3%, {{ $item->color1 }} 50.35%, {{ $item->color2 }} 48.68%, {{ $item->color2 }} 75%);">

                            {{-- <img src="{{ asset($item->image) }}" style="height: 100%" alt="{{ $item->title }}"> --}}

                            <div class="container">
                                <div class="laptop">
                                    <div class="laptop__screen"><img src="{{ asset($item->image) }}" class="w3-round-large"
                                            width="1600" height="1000" alt="Screen" /></div>
                                    <div class="laptop__bottom">
                                        <div class="laptop__under"></div>
                                    </div>
                                    <div class="laptop__shadow"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
                <div class="col-md-6 project--content {{ isMobile() ? 'p-4' : 'p-5' }} ">

                    <div class="container text-dark pt-md-5">
                        <img src="{{ asset($item->project_logo) }}" style="width: 90px" alt="">
                        <div class="pt-4">
                            <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.name') }} : </b>
                                {{ $item->title }}</p>
                            <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.field') }} : </b>
                                {{ $item->field }}</p>
                            <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.country') }} : </b>
                                {{ $item->country }}</p>
                            <p class="text-dark fs-5 pt-3"> <b class="fs-4"> {{ __('lang.technology') }} : </b>
                                {{ $item->technology }}</p>
                        </div>
                        <div class="pt-5 d-flex  justify-content-between">
                            <a href="{{ route('front.product.show', $item->id) }}"
                                class="btn btn-contact">{{ __('lang.project_details') }} </a>
                                @if ($item->url)

                                <a href="{{ $item->url }}" class="btn main-color btn-contact "
                                    style="color: #BDA771 !important;background: #fff !important;border: 2px solid #BDA771; border-radius: 50px"
                                    target="_blank">{{ __('lang.visit_website') }}</a>
                                    @endif
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 1 && !isMobile())
                    <div class="col-md-6 p-0">
                        <div class="p-5 pb-0"
                            style="height: 100%;background:linear-gradient(360deg, {{ $item->color1 }} 16.3%, {{ $item->color1 }} 50.35%, {{ $item->color2 }} 48.68%, {{ $item->color2 }} 75%);">
                            {{-- <img src="{{ asset($item->image) }}" style="height: 450px;object-fit: contain"
                                alt="{{ $item->title }}"> --}}

                            <div class="container">
                                <div class="laptop">
                                    <div class="laptop__screen"><img src="{{ asset($item->image) }}" class="w3-round-large"
                                            width="1600" height="1000" alt="Screen" /></div>
                                    <div class="laptop__bottom">
                                        <div class="laptop__under"></div>
                                    </div>
                                    <div class="laptop__shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        @empty
        @endforelse
    </section>
    <br><br>
    <div class="bg-foot"></div>
@endsection
