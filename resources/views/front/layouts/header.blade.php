<!-- TOPBAR -->
<div class="topbar">
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
</div>

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
                <a href="tests.html">الاختبارات</a>
                <a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'is-active' : '' }}">{{ __('lang.about') }}</a>
            </div>

            <div class="nav-actions">
                <a class="btn btn-ghost" href="login.html">تسجيل الدخول</a>
                <a class="btn btn-primary" href="register.html">إنشاء حساب</a>
                <button class="hamburger" id="hamburger" aria-label="القائمة" type="button" aria-expanded="false">≡</button>
            </div>
        </nav>

        <!-- MOBILE PANEL -->
        <div class="mobile-panel" id="mobilePanel" data-open="0" style="display:none;">
            <div class="stack" data-nav>
                <a href="{{ route('front.home') }}" class="{{ request()->routeIs('front.home') ? 'is-active' : '' }}">{{ __('lang.home') }}</a>
                <a href="{{ route('front.channel') }}" class="{{ request()->routeIs('front.channel') ? 'is-active' : '' }}">{{ __('lang.channels') }}</a>
                <a href="tests.html">الاختبارات</a>
                <a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'is-active' : '' }}">{{ __('lang.about') }}</a>

                <div class="actions">
                    <a class="btn btn-ghost" href="login.html">تسجيل الدخول</a>
                    <a class="btn btn-primary" href="register.html">إنشاء حساب</a>
                </div>
            </div>
        </div>

    </div>
</header>
