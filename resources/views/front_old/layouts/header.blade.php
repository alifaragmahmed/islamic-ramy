{{-- @php
    dd(app()->getLocale());
@endphp --}}
<!-- Header -->
<header class="header">

    <div class="header-bottom-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="cuscol">
                        <div class="logo">
                            <a href="{{ route('front.home') }}">
                                <img src="{{ asset(getSettingValue('logo')) }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 d-none d-lg-block">
                    <div class="menu-area d-flex align-items-center justify-content-between">
                        <nav class="main-menu text-center">
                            <ul>
                                <li><a href="{{ route('front.home') }}">
                                        {{ __('lang.home') }}
                                    </a></li>
                                <li><a href="{{ route('front.about') }}">
                                        {{ __('lang.about') }} {{ __('lang.we') }}
                                    </a></li>
                                <li><a href="{{ route('front.service') }}">
                                        {{ __('lang.services') }}
                                    </a></li>
                                <li><a href="{{ route('front.blog') }}">
                                        {{ __('lang.blogs') }}
                                    </a></li>
                                <li><a href="{{ route('front.gallery') }}">
                                        {{ __('lang.gallery') }}
                                    </a></li>

                                <li><a href="{{ route('front.contact') }}">
                                        {{ __('lang.contact') }}
                                    </a></li>
                                @if (isMobile())
                                    <li><a href="{{ route('front.home') }}">
                                            {{ __('lang.home') }}
                                        </a></li>
                                @endif
                            </ul>
                        </nav><!--// main-menu -->
                        <div class="header-btn text-end">
                            <a class="" href="{{ route('front.lang') }}?lang={{ app()->getLocale() == 'ar' ? 'en' : 'ar' }}">
                                {{ app()->getLocale() == 'ar' ? 'EN' : 'AR' }}
                                <svg width="30" height="30" viewBox="0 0 40 41" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 35.5C17.9356 35.5 15.9911 35.1056 14.1667 34.3167C12.3422 33.5267 10.7533 32.4544 9.40001 31.1C8.04668 29.7456 6.97445 28.1567 6.18334 26.3333C5.39223 24.51 4.99779 22.5656 5.00001 20.5C5.00001 18.4289 5.39445 16.4828 6.18334 14.6617C6.97334 12.8394 8.04556 11.2522 9.40001 9.9C10.7545 8.54778 12.3433 7.47556 14.1667 6.68333C15.9911 5.89444 17.9356 5.5 20 5.5C22.0711 5.5 24.0172 5.89444 25.8383 6.68333C27.6606 7.47333 29.2483 8.54556 30.6017 9.9C31.955 11.2544 33.0267 12.8417 33.8167 14.6617C34.6056 16.4839 35 18.43 35 20.5C35 22.5644 34.6056 24.5089 33.8167 26.3333C33.0267 28.1578 31.9545 29.7467 30.6 31.1C29.2456 32.4533 27.6583 33.5256 25.8383 34.3167C24.0183 35.1078 22.0722 35.5022 20 35.5ZM20 33.8467C20.9778 32.59 21.7845 31.3561 22.42 30.145C23.0545 28.9339 23.5706 27.5783 23.9683 26.0783H16.0317C16.4728 27.6628 16.9995 29.0606 17.6117 30.2717C18.225 31.4828 19.0211 32.6744 20 33.8467ZM17.8783 33.5967C17.1006 32.68 16.3906 31.5467 15.7483 30.1967C15.1061 28.8478 14.6283 27.4744 14.315 26.0767H7.92334C8.8789 28.1489 10.2328 29.8489 11.985 31.1767C13.7383 32.5033 15.7028 33.31 17.8783 33.5967ZM22.1217 33.5967C24.2972 33.31 26.2617 32.5033 28.015 31.1767C29.7672 29.8489 31.1211 28.1489 32.0767 26.0767H25.6867C25.2645 27.4956 24.7328 28.8794 24.0917 30.2283C23.4495 31.5783 22.7928 32.7022 22.1217 33.5967ZM7.24334 24.4117H13.9683C13.8417 23.7272 13.7528 23.0606 13.7017 22.4117C13.6483 21.7639 13.6217 21.1267 13.6217 20.5C13.6217 19.8733 13.6478 19.2361 13.7 18.5883C13.7522 17.9406 13.8411 17.2739 13.9667 16.5883H7.24501C7.0639 17.1661 6.92223 17.7956 6.82001 18.4767C6.71779 19.1567 6.66668 19.8311 6.66668 20.5C6.66668 21.1689 6.71723 21.8439 6.81834 22.525C6.91945 23.2061 7.06112 23.8344 7.24334 24.41M15.635 24.41H24.365C24.4917 23.7267 24.5806 23.0711 24.6317 22.4433C24.685 21.8167 24.7117 21.1689 24.7117 20.5C24.7117 19.8311 24.6856 19.1833 24.6333 18.5567C24.5811 17.93 24.4922 17.2744 24.3667 16.59H15.6333C15.5078 17.2733 15.4189 17.9289 15.3667 18.5567C15.3145 19.1833 15.2883 19.8311 15.2883 20.5C15.2883 21.1689 15.3145 21.8167 15.3667 22.4433C15.4189 23.07 15.5095 23.7256 15.635 24.41ZM26.0333 24.41H32.7567C32.9378 23.8333 33.0795 23.205 33.1817 22.525C33.2828 21.8439 33.3333 21.1689 33.3333 20.5C33.3333 19.8311 33.2828 19.1561 33.1817 18.475C33.0806 17.7939 32.9389 17.1656 32.7567 16.59H26.0317C26.1583 17.2733 26.2472 17.9394 26.2983 18.5883C26.3517 19.2372 26.3783 19.8744 26.3783 20.5C26.3783 21.1256 26.3522 21.7628 26.3 22.4117C26.2478 23.0606 26.1589 23.7272 26.0333 24.4117M25.6867 14.9233H32.0767C31.1 12.8078 29.7622 11.1078 28.0633 9.82333C26.3645 8.53889 24.3839 7.72167 22.1217 7.37167C22.8995 8.395 23.5989 9.56556 24.22 10.8833C24.8411 12.2 25.33 13.5467 25.6867 14.9233ZM16.0317 14.9233H23.9683C23.5283 13.3589 22.9856 11.9444 22.34 10.68C21.6945 9.41556 20.9145 8.24 20 7.15333C19.0856 8.23889 18.3056 9.41444 17.66 10.68C17.0145 11.9456 16.4706 13.36 16.0317 14.9233ZM7.92501 14.9233H14.315C14.6717 13.5478 15.1606 12.2011 15.7817 10.8833C16.4028 9.56556 17.1022 8.395 17.88 7.37167C15.5978 7.72278 13.6122 8.545 11.9233 9.83833C10.2345 11.1339 8.90112 12.8339 7.92334 14.9233Z"
                                        fill="black" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Show in small device Start -->
                <div class="clickable-menu clickable-mainmenu-active d-block d-lg-none  col-md-6 col-6">
                    <a href="#" style="float: {{ App::getLocale() == 'ar' ? 'left' : 'right' }}"><i class="zmdi zmdi-menu"></i></a>
                </div>
                <div class="clickable-mainmenu {{ isRtl() ? 'clickable-mainmenu-right' : '' }}">
                    <div class="clickable-mainmenu-icon">
                        <button class="clickable-mainmenu-close">
                            <span class="zmdi zmdi-close"></span>
                        </button>
                    </div>

                    <div id="menu" class="text-start clickable-menu-style">
                        <ul>
                            <li><a style="text-align: {{ App::getLocale() == 'ar' ? 'right' : 'left' }}" href="{{ route('front.home') }}">{{ __('lang.home') }}</a>
                            </li>
                            <li><a style="text-align: {{ App::getLocale() == 'ar' ? 'right' : 'left' }}" href="{{ route('front.service') }}">{{ __('lang.services') }}</a></li>
                            <li><a style="text-align: {{ App::getLocale() == 'ar' ? 'right' : 'left' }}" href="{{ route('front.about') }}">{{ __('lang.about') }} {{ __('lang.we') }}</a></li>
                            <li><a style="text-align: {{ App::getLocale() == 'ar' ? 'right' : 'left' }}" href="{{ route('front.gallery') }}">{{ __('lang.gallery') }}</a></li>
                            <li><a style="text-align: {{ App::getLocale() == 'ar' ? 'right' : 'left' }}" href="{{ route('front.contact') }}">{{ __('lang.contact') }}</a></li>
                            <li><a style="text-align: {{ App::getLocale() == 'ar' ? 'right' : 'left' }}"
                                    href="{{ route('front.lang') }}?lang={{ app()->getLocale() == 'ar' ? 'en' : 'ar' }}">{{ app()->getLocale() == 'ar' ? 'English' : 'Arabic' }}</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Show in small device End -->
            </div>
        </div>
    </div>
</header>
<!--// Header -->
