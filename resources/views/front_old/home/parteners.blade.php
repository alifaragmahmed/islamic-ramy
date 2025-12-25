<div class="section-post-carousel section-pt section-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        {{ __('lang.parteners') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row post-carousel-wrapper post-carousel-active-5 post-carousel-partners" dir="ltr" style="{{ isRTL() ? 'text-align: right' : 'text-align: left' }}">

            @foreach ($parteners as $get)
                <div class="item">
                    <!-- Start Single Post -->
                    <div class="post-carousel mb-30">
                        <div class="thumb">
                            <img src="{{ asset($get->image) }}" style="height: 200px;width: auto!important;max-width: none!important;padding: 5px" alt="elementor">
                        </div>
                    </div>
                    <!-- End Single Post -->
                </div>
            @endforeach




        </div>
    </div>
</div>
