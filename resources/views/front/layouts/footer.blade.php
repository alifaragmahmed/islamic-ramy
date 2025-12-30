<!-- FOOTER -->
<footer class="footer" style="background-image: url({{ asset(getSettingValue('bg_footer')) }})">
    <div class="container">
        <div class="footer-grid">
            <div>
                <ul class="w3-ul">
                    <li>
                        <img class="logo-img_" style="width: 100px" src="{{ asset(getSettingValue('logo_white')) }}" alt="أكاديمية أنوار القرآن">

                    </li>
                    {{-- <li class="w3-xlarge">
                        {!! getSettingValue('title_' . app()->getLocale()) !!}
                    </li> --}}
                    <li>
                        <p>
                            {!! getSettingValue('description_' . app()->getLocale()) !!}
                        </p>
                    </li>
                </ul>
            </div>
            <div>
                <h4>{{ __('lang.quick_links') }}</h4>
                <br>
                <ul class="w3-ul">
                    <li><a href="{{ route('front.home') }}">{{ __('lang.home') }}</a></li>
                    <li><a href="{{ route('front.home') }}">{{ __('lang.programs') }}</a></li>
                    {{-- <li><a href="tests.html">{{ __('lang.tests') }}</a></li> --}}
                    <li><a href="{{ route('front.home') }}">{{ __('lang.blogs') }}</a></li>
                    <li><a href="{{ route('front.about') }}">{{ __('lang.about') }}</a></li>
                </ul>
            </div>
            <div>
                <h4>{{ __('lang.contact_us') }}</h4>
                <br>
                <ul class="w3-ul">
                    <li>
                        <svg class="me-2" width="20" height="20" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.9514 0C11.6132 0 0 10.7698 0 24.0699C0 31.6607 3.76295 38.408 9.66688 42.8197L9.79664 51.2539C9.79664 51.7081 10.3157 51.9676 10.7049 51.773L18.8147 47.2315C21.0855 47.8154 23.486 48.1398 26.0162 48.1398C40.3544 48.1398 51.9676 37.37 51.9676 24.0699C51.9676 10.7698 40.2246 0 25.9514 0ZM27.8328 31.9202L22.3182 26.146C21.9938 25.8216 21.4748 25.7567 21.0855 25.9514L11.3537 31.2065C10.9644 31.4011 10.6401 30.947 10.8996 30.6226L22.383 18.4255C22.7074 18.1011 23.2913 18.1011 23.6157 18.4255L29.1304 24.3294C29.4548 24.6538 29.9738 24.7835 30.3631 24.524L39.9002 19.3338C40.2895 19.1391 40.6139 19.5933 40.3544 19.9177L29.0655 31.9202C28.7411 32.2446 28.1572 32.2446 27.8328 31.9202Z"
                                fill="white" />
                        </svg>

                        <a href="{{ getSettingValue('eg_facebook_link') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('lang.facebook') }}
                        </a>
                    </li>
                    <li>
                        <svg class="me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M256.064 0h-.128C114.784 0 0 114.816 0 256c0 56 18.048 107.904 48.736 150.048l-31.904 95.104 98.4-31.456C155.712 496.512 204 512 256.064 512 397.216 512 512 397.152 512 256S397.216 0 256.064 0zm148.96 361.504c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.616-127.456-112.576-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016.16 8.576.288 7.52.32 11.296.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744-3.776 4.352-7.36 7.68-11.136 12.352-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>

                        <a href="https://wa.me/{{ getSettingValue('eg_whatsapp') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('lang.whatsapp') }}
                        </a>
                    </li>
                    <li>
                        <svg class="me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M436.992 74.953c-99.989-99.959-262.08-99.935-362.039.055s-99.935 262.08.055 362.039 262.08 99.935 362.039-.055a256 256 0 0 0-.055-362.039zm-49.289 281.652-.034.034v-.085l-12.971 12.885a68.267 68.267 0 0 1-64.427 18.432 226.834 226.834 0 0 1-65.877-29.525 304.371 304.371 0 0 1-51.968-41.899 306.71 306.71 0 0 1-38.827-47.104 238.907 238.907 0 0 1-29.184-59.051 68.265 68.265 0 0 1 17.067-69.717l15.189-15.189c4.223-4.242 11.085-4.257 15.326-.034l.034.034 47.957 47.957c4.242 4.223 4.257 11.085.034 15.326l-.034.034-28.16 28.16c-8.08 7.992-9.096 20.692-2.389 29.867a329.334 329.334 0 0 0 33.707 39.339 327.314 327.314 0 0 0 44.373 37.291c9.167 6.394 21.595 5.316 29.525-2.56l27.221-27.648c4.223-4.242 11.085-4.257 15.326-.034l.034.034 48.043 48.128c4.243 4.222 4.258 11.083.035 15.325z"
                                    fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>

                        <a href="tel:{{ getSettingValue('eg_phone') }}" target="_blank" rel="noopener noreferrer">
                            {{ getSettingValue('eg_phone') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="small w3-text-white" style="margin-top:14px; opacity:.85;">
            © <span id="y"></span> جميع الحقوق محفوظة — أكاديمية أنوار القرآن
        </div>
    </div>
</footer>

<!-- WhatsApp Floating -->
<a class="whatsapp-float" href="https://wa.me/201019028034" target="_blank" rel="noopener">
    <span class="dot" aria-hidden="true"></span>
    واتساب الأكاديمية
</a>
