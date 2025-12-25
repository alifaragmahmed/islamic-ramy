<div class="section-testimonial-carousel section-pt section-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        {{ __('lang.customer_opinions') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row pb-60 testimonial-carousel-3" dir="ltr">
            @foreach ($customerOpinions as $get)
                <div class="col-lg-6">
                    <!-- Start Single Testimonial -->
                    <div class="testimonial-style-3  testimonial-grid-2">
                        <div class="testimonal">
                            <img src="{{ asset($get->image) }}" alt="testimonal image" class="{{ isRTL() ? 'image-right' : '' }}">
                            <div class="{{ isRTL() ? 'content-right' : 'content' }}" >
                                <p style="{{ isRTL() ? 'text-align: right' : '' }}">
                                    {{ $get->description }}
                                </p>
                                <div class="clint-info" style="{{ isRTL() ? 'text-align: right' : '' }}">
                                    <h4>
                                        {{ $get->title }}
                                    </h4>
                                    <span>
                                        {{ $get->sub_title }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            @endforeach

        </div>
    </div>
</div>
