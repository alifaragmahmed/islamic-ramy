<div class="hero-section section">

    <div class="hero-slider hero-slider-one">

        <div class="hero-slide-item d-flex align-items-center image-bg"
            style="background-image: url({{ asset($slider->image ?? 'assets/images/hero/hero-1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="hero-content text-{{ isRtl()?'right':'left' }}">
                            <h5>{{ $slider->sub_title ?? '' }}</h5>
                            <h1>
                                {{ $slider->title ?? ''}}
                            </h1>
                            <p>
                                {{ $slider->description ?? '' }}
                            </p>
                            <a href="{{ route('front.contact') }}" class="btn">
                                {{ __('lang.contact_us') }}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div><!-- Hero Section End -->
