<div class="section-post-carousel section-pt section-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        {{ __('lang.latest_blog') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row post-carousel-wrapper post-carousel-active-5 post-carousel-blogs" dir="ltr" style="{{ isRTL() ? 'text-align: right' : 'text-align: left' }}">

            @foreach ($blogs as $get)
                <div class="col-lg-12">
                    <!-- Start Single Post -->
                    <div class="post-carousel mb-30">
                        <div class="thumb">
                            <a>
                                <img src="{{ asset($get->image) }}" alt="elementor">
                            </a>
                        </div>
                        <div class="ptc-content">
                            <h4><a>
                                    {{ $get->title }}
                                </a></h4>
                            <ul class="meta {{ isRTL() ? 'text-align: right' : 'text-align: left;d-flex' }}">
                                <li><a href="#"><i class="zmdi zmdi-calendar-check"></i>
                                        {{ date('d M Y', strtotime($get->created_at)) }}
                                    </a></li>
                            </ul>
                            <p>
                                {{ $get->short_description }}
                            </p>

                        </div>
                    </div>
                    <!-- End Single Post -->
                </div>
            @endforeach




        </div>
    </div>
</div>
