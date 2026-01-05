<!-- TOPBAR -->
{{-- <div class="topbar">
    <div class="container">
        <div class="d-flex {{ isMobile() ? 'flex-column' : 'flex-row' }} p-2">
            <div class="badge flex-shrink-0"><i>🌙</i> أكاديمية أنوار القرآن (الشيخ رامي)</div>
            <div class="flex-grow-1"></div>
            <div class="top-actions flex-shrink-0">
                <div class="badge"><i>💬</i> واتساب: +20 10 19028034</div>

                <div class="social">
                    <a href="https://www.facebook.com/ramy.ragab.35110" target="_blank" rel="noopener" class="social-link fb" aria-label="Facebook">f</a>
                    <a href="https://www.youtube.com/" target="_blank" rel="noopener" class="social-link yt" aria-label="YouTube">▶</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- HEADER -->
<header class="header">
    <div class="container">
        <nav class="nav">
            <a class="brand" href="index.html">
                <img class="logo-img" src="{{ asset(getSettingValue('logo')) }}" alt="أكاديمية أنوار القرآن">
                <div class="title">
                    <strong>
                        {!! getSettingValue('site_name_' . app()->getLocale()) !!}
                    </strong>
                    <span>
                        {!! getSettingValue('short_description_' . app()->getLocale()) !!}
                    </span>
                </div>
            </a>

            <div class="nav-links" data-nav>
                <a href="{{ route('front.home') }}" class="{{ request()->routeIs('front.home') ? 'is-active' : '' }}">{{ __('lang.home') }}</a>
                <a href="{{ route('front.channel') }}" class="{{ request()->routeIs('front.channel') ? 'is-active' : '' }}">{{ __('lang.channels') }}</a>
                {{-- <a href="tests.html">الاختبارات</a> --}}
                <a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'is-active' : '' }}">{{ __('lang.about') }}</a>
            </div>

            <div class="nav-actions">
                <a class="btn btn-primary" href="javascript:window.navigator.share({title: '{{ getSettingValue('short_description_' . app()->getLocale()) }}', url: window.location.href});">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 227.216 227.216"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="M175.897 141.476c-13.249 0-25.11 6.044-32.98 15.518l-51.194-29.066a42.671 42.671 0 0 0 2.467-14.317 42.67 42.67 0 0 0-2.467-14.316l51.19-29.073c7.869 9.477 19.732 15.523 32.982 15.523 23.634 0 42.862-19.235 42.862-42.879C218.759 19.229 199.531 0 175.897 0 152.26 0 133.03 19.229 133.03 42.865c0 5.02.874 9.838 2.467 14.319L84.304 86.258c-7.869-9.472-19.729-15.514-32.975-15.514-23.64 0-42.873 19.229-42.873 42.866 0 23.636 19.233 42.865 42.873 42.865 13.246 0 25.105-6.042 32.974-15.513l51.194 29.067a42.67 42.67 0 0 0-2.468 14.321c0 23.636 19.23 42.865 42.867 42.865 23.634 0 42.862-19.23 42.862-42.865.001-23.64-19.227-42.874-42.861-42.874zm0-126.476c15.363 0 27.862 12.5 27.862 27.865 0 15.373-12.499 27.879-27.862 27.879-15.366 0-27.867-12.506-27.867-27.879C148.03 27.5 160.531 15 175.897 15zM51.33 141.476c-15.369 0-27.873-12.501-27.873-27.865 0-15.366 12.504-27.866 27.873-27.866 15.363 0 27.861 12.5 27.861 27.866 0 15.364-12.499 27.865-27.861 27.865zm124.567 70.74c-15.366 0-27.867-12.501-27.867-27.865 0-15.37 12.501-27.875 27.867-27.875 15.363 0 27.862 12.505 27.862 27.875 0 15.364-12.499 27.865-27.862 27.865z"
                                fill="currentColor" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg> <span>مشاركة المنصة</span>
                </a>

                {{-- <a class="btn btn-ghost" href="login.html">تسجيل الدخول</a>
                <a class="btn btn-primary" href="register.html">إنشاء حساب</a> --}}
                <button class="hamburger" id="hamburger" aria-label="القائمة" type="button" aria-expanded="false">≡</button>
            </div>
        </nav>

        <!-- MOBILE PANEL -->
        <div class="mobile-panel" id="mobilePanel" data-open="0" style="display:none;">
            <div class="stack" data-nav>
                <a href="{{ route('front.home') }}" class="{{ request()->routeIs('front.home') ? 'is-active' : '' }}">{{ __('lang.home') }}</a>
                <a href="{{ route('front.channel') }}" class="{{ request()->routeIs('front.channel') ? 'is-active' : '' }}">{{ __('lang.channels') }}</a>
                {{-- <a href="tests.html">الاختبارات</a> --}}
                <a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'is-active' : '' }}">{{ __('lang.about') }}</a>

                <div class="actions">
                    <a class="btn btn-primary" href="javascript:window.navigator.share({title: '{{ getSettingValue('short_description_' . app()->getLocale()) }}', url: window.location.href});">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 227.216 227.216"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M175.897 141.476c-13.249 0-25.11 6.044-32.98 15.518l-51.194-29.066a42.671 42.671 0 0 0 2.467-14.317 42.67 42.67 0 0 0-2.467-14.316l51.19-29.073c7.869 9.477 19.732 15.523 32.982 15.523 23.634 0 42.862-19.235 42.862-42.879C218.759 19.229 199.531 0 175.897 0 152.26 0 133.03 19.229 133.03 42.865c0 5.02.874 9.838 2.467 14.319L84.304 86.258c-7.869-9.472-19.729-15.514-32.975-15.514-23.64 0-42.873 19.229-42.873 42.866 0 23.636 19.233 42.865 42.873 42.865 13.246 0 25.105-6.042 32.974-15.513l51.194 29.067a42.67 42.67 0 0 0-2.468 14.321c0 23.636 19.23 42.865 42.867 42.865 23.634 0 42.862-19.23 42.862-42.865.001-23.64-19.227-42.874-42.861-42.874zm0-126.476c15.363 0 27.862 12.5 27.862 27.865 0 15.373-12.499 27.879-27.862 27.879-15.366 0-27.867-12.506-27.867-27.879C148.03 27.5 160.531 15 175.897 15zM51.33 141.476c-15.369 0-27.873-12.501-27.873-27.865 0-15.366 12.504-27.866 27.873-27.866 15.363 0 27.861 12.5 27.861 27.866 0 15.364-12.499 27.865-27.861 27.865zm124.567 70.74c-15.366 0-27.867-12.501-27.867-27.865 0-15.37 12.501-27.875 27.867-27.875 15.363 0 27.862 12.505 27.862 27.875 0 15.364-12.499 27.865-27.862 27.865z"
                                    fill="currentColor" opacity="1" data-original="#000000"></path>
                            </g>
                        </svg> <span>مشاركة المنصة</span>
                    </a>
                    {{-- <a class="btn btn-primary" href="register.html">إنشاء حساب</a> --}}
                </div>
            </div>
        </div>

    </div>
</header>
