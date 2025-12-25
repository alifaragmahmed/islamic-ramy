@extends('front.layouts.master')
@section('css')
    <style>
        .accordion-button::after{
            margin: auto !important
        }
        .accordion-button:not(.collapsed) {
            box-shadow:none !important;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <br><br>
    <div class="container-fluid page-header p-0 " style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner" >
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown text-end mb-4">{{isRtl()? $metaBanner->title :  $metaBanner->title_en}}</h1>

            </div>
        </div>
    </div>

    <!-- Page Header End -->
<br><br>

    <section class="section--services pt-4 pb-5 bg-main" style="">
        <div class="container pt-5 pb-5">
            <div class="row pb-5">
                <div class="col-md-12 pt-5 text-center wow fadeInDown">
                     <p class="main-color fs-5 ">{{ __('lang.diff_packages') }}</p><br>
                    <p class="text-white fs-3">
                        {{ isRtl()? $metaBanner->description :  $metaBanner->description_en }}

                    </p>

                    <div class="pt-5">
                        <div class="d-flex  flex-wrap align-items-center gap-3" >
                            @foreach ($categories as $cat)
                            <div class=" cat--item {{ $cat->id == request()->category  ? 'cat-active' : ( !request()->category &&$loop->first ? 'cat-active' : 'text-white' ) }}">
                                <a href="{{ route('front.package',['category'=> $cat->id]) }}">{{ isRtl()? $cat->title :  $cat->title_en }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                    @foreach ($packages as $item)
                        <div class="item col-lg-4 col-md-6 pt-3 ">
                            <a href="{{ route('front.package.show', $item->id) }}" class="text-decoration-none text-dark" >
                           <div class="package--item" style="background-image: url({{ asset($item->image) }});">
                            <div class="header pt-2 text-white text-center">
                                <b class="fs-3">{{ $item->title }}</b>
                                <p class="fs-5 text-white">{{ $item->short_description }}</p>
                            </div>
                            <div class="package--content p-5" style="height: 300px;overflow: auto;margin-top: 50px">
                                {!! $item->description !!}
                            </div>
                           </div>
                        </a>
                        </div>

                    @endforeach

            </div>
        </div>
    </section>

    <div class="pt-5 container">
        <div class="row pt-5">
            <div class="col-lg-4">
                <div  class="p{{ isRtl()?'e':'s' }}-3" style="border-{{ isRtl()? 'right' : 'left' }}: 15px solid #BDA771">
                    <p class="main-color fs-3 bold">{{ __('lang.question_answer') }}</p><br>
                    <b class=" fs-2  mb-5">{{ __('lang.some_faqs') }}</b>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="accordion border-0" id="accordionExample">
                    @foreach ($faqs as $item)

                    <div class="accordion-item border-0 ">
                      <h2 class="accordion-header border-0" id="heading{{ $item->id }}">
                        <button class="accordion-button border-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                            <div class="d-flex gap-3">
                                <b class="main-color fs-3">0{{ $loop->iteration }}</b>
                                <b class="fs-4 text-dark">{{ $item->question }}</b>
                            </div>
                        </button>
                      </h2>
                      <div id="collapse{{ $item->id }}" class="accordion-collapse collapse {{ $loop->first?'show':'' }}" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            {{ $item->answer }}
                        </div>
                      </div>
                    </div>
                    <hr>
                    @endforeach
                    {{-- <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Accordion Item #2
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Accordion Item #3
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div> --}}
                  </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <div class="bg-foot"></div>

@endsection
