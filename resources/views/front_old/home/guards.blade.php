<div class="section-team section-pt section-pb-90 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>{{ __('lang.our_guards') }}</h2>
                    
                </div>
            </div>
        </div>
        <!-- Start Team Area -->
        <div class="row">
            @foreach ($guards as $get)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="team team-8 mb-30">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{ asset($get->image) }}" alt="team img">
                            </a>
                        </div>
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="#">
                                    {{ $get->title }}
                                    </a></h4>
                                <span>
                                    {{ $get->sub_title }}
                                </span>
                            </div>
                            <ul class="social-network social-net-2">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Start Single Team -->
            <!-- End Single Team -->
        </div>
        <!-- End Team Area -->
    </div>
</div>
