<!-- Start Agency Benefits Area -->
<div class="section-agency-benefit section-pt section-pb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="agency-benefits">
                    <div class="content">
                        <div class="section-title {{ isRTL() ? 'title-2-ar' : 'title-2' }}">
                            <h2>{{ $about->title }} </h2>
                        </div>
                        <p>
                            {!! $about->description !!}
                        </p>

                        <a href="{{ route('front.contact') }}" class="btn contact-btn mt-30 btn-circle">
                            {{ __('lang.contact_us') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="agency-thumb">
                    <div class="thumb">
                        <img src="{{ asset($about->image) }}" alt="Agency Images">
                        <div class="play-btn">
                            <a class="video-popup" href="{{ $about->link_video }}"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Agency Benefits Area -->
