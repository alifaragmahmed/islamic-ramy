<!-- Footer -->
<footer class="footer">
    <div class="footer-top bg-gray section-pt-90 section-pb">
        <div class="container">
            <div class="row">

                <!-- Start Single Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1">
                        <h5 class="ft-title">{{ __('lang.about') }} <span>{{ __('lang.we') }}</span></h5>
                        <div class="content">
                            <p>
                                {!! getSettingValue('description_' . app()->getLocale()) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->

                <!-- Start Single Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1 space-left">
                        <h5 class="ft-title">{{ __('lang.contact') }} <span>{{ __('lang.us') }}</span></h5>
                        <div class="content">
                            <p>
                                {{ getSettingValue('eg_address_' . app()->getLocale()) }}
                            </p>
                            <div class="ft-address">
                                <p>P : {{ getSettingValue('eg_phone') }}</p>
                                <p>E : <a href="#">{{ getSettingValue('eg_email_1') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->

                <!-- Start Single Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1 space-left">
                        <h5 class="ft-title">{{ __('lang.quick') }} <span>{{ __('lang.links') }}</span></h5>
                        <div class="content">
                            <ul class="ft-menu">
                                <li><a href="{{ route('front.home') }}">{{ __('lang.home') }}</a></li>
                                <li><a href="{{ route('front.about') }}">{{ __('lang.about') }}</a></li>
                                <li><a href="{{ route('front.gallery') }}">{{ __('lang.gallery') }}</a></li>
                                <li><a href="{{ route('front.contact') }}">{{ __('lang.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->

                <!-- Start Single Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-style-1">
                        <h5 class="ft-title">{{ __('lang.newsletter') }} <span>{{ __('lang.now') }}</span></h5>
                        <div class="content">
                            <div class="input-box newsletter-box">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off">
                                    <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>

                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->

                            <div class="social-share social-square" style="display: flex;gap:15px">
                                <a title="{{ __('lang.facebook') }}" href="{{ getSettingValue('eg_facebook_link') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image23.png') }}" alt="">
                                </a>
                                <a title="{{ __('lang.twitter') }}" href="{{ getSettingValue('eg_twitter') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image9.png') }}" alt="">
                                </a>
                                <a title="{{ __('lang.tiktok') }}" href="{{ getSettingValue('eg_tiktok') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image10.png') }}" alt="">
                                </a>
                                <a title="{{ __('lang.snapchat') }}" href="{{ getSettingValue('eg_snapchat') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image26.png') }}" alt="">
                                </a>
                                <a title="{{ __('lang.instagram') }}" href="{{ getSettingValue('eg_instagram') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image7.png') }}" alt="">
                                </a>
                                <a title="{{ __('lang.linkedin') }}" href="{{ getSettingValue('eg_linkedin') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image22.png') }}" alt="">
                                </a>
                                <a title="{{ __('lang.youtube_link') }}" href="{{ getSettingValue('eg_youtube_link') }}">
                                    <img style="width: 35px;max-width:40px" src="{{ asset('frontassets/images/icon/image21.png') }}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget -->
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="copyright-left content text-center">
                        <p>{{ __('lang.copy_right') }}<a href="#"></a>{{ getSettingValue('copy_right_' . app()->getLocale()) }}</a> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--// Footer -->
