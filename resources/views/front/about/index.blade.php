@extends('front.layouts.master')

@section('title')
    {{ __('lang.about') }}
@endsection

@section('css')
    <style>

    </style>
    {{-- /* include style channels.css */ --}}
    <link rel="stylesheet" href="{{ asset('front/css/header.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front/css/common.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('front/css/channels.css') }}">

    <style>
        .image-card {
            border-top-left-radius: 10em;
            border-top-right-radius: 10em;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            height: 200px;
            background-size: cover;
            background-position: center;
            /* max-width: 160px; */
        }

        .image-card-col-1 {
            padding-top: 0px;
        }

        .image-card-col-2 {
            padding-top: 20px;
        }

        .image-card-col-3 {
            padding-top: 40px;
        }

        .image-card-col-4 {
            padding-top: 20px;
        }

        .image-card-col-5 {
            padding-top: 0px;
        }

        .image-card-col-6 {
            padding-top: 20px;
        }

        .step-section {
            width: 100%;
            max-width: 800px;
            margin: auto;
        }

        .step-line {
            width: 4px;
            border-left: 4px dashed black;
            /* border-radius: 5em; */
            margin: auto;
            height: 50px;
        }

        /* icon box */

        .icon-box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            /* height: 75vh; */
        }

        .icon-box .box {
            margin: 10px;
            width: 80px;
            height: 80px;
            border-radius: 350px;
            justify-content: center;
            align-items: center;
            transition: transform 1s;
            cursor: pointer;
            padding: 30px;
            display: flex;

        }

        .icon-box .box i {
            font-size: 30px;
            color: #fff;
        }

        .icon-box .box:hover {
            transform: rotate(360deg)
        }

        .icon-box i:hover {
            transition: transform 1s, filter 2s ease-in-out;
            transform: scale(1.5)
        }

        .icon-box .box:nth-child(1) {
            background-image: linear-gradient(#25D366, #56ce82);
        }

        .icon-box .box:nth-child(2) {
            background-image: linear-gradient(#0088CC, #2b91c4);
        }

        .icon-box .box:nth-child(3) {
            background: linear-gradient(#FF666D, #9A35FF, #3493FF);
        }

        .icon-box .box:nth-child(4) {
            background-image: linear-gradient(#1695da, #0072b1);
        }

        .icon-box .box:nth-child(5) {
            background-image: linear-gradient(#AA00FF, #b934fc);
        }

        .icon-box .box:nth-child(6) {
            background-image: linear-gradient(#00AFF0, #1bb5ec);
        }

        .primary-light {
            background-color: #F3F1E9;
        }

        .chatgpt-sidebar {
            display: none !important;
        }
    </style>
@endsection

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="breadcrumb w3-text-black">الرئيسية / عن الاكادمية</div>
            <h1 style="">عن الاكادمية</h1>
            {{-- <div class="">تقسيم للدورات + مجموعة فيديوهات داخل كل قسم (تجريبي قابل للربط لاحقًا).</div> --}}
        </div>
    </section>

    <section class="section" style="padding-top:10px;">
        <div class="container ">
            <h1 class="text-center text-primary p-3 m-auto mb-3" style="max-width: 500px">
                {!! getSettingValue('site_name_' . app()->getLocale()) !!}
            </h1>
            <div class="text-center mb-4">

                <div class="icon-box">
                    <a target="_blank" href="https://wa.me/{{ getSettingValue('eg_whatsapp') }}" class="box animate__animated animate__zoomInRight animate__slow">
                        <i class="fab fa-whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 682 682.667"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path fill-rule="evenodd"
                                        d="M544.387 93.008C484.512 33.063 404.883.035 320.05 0 145.246 0 2.98 142.262 2.91 317.113c-.024 55.895 14.577 110.457 42.331 158.551L.25 640l168.121-44.102c46.324 25.27 98.477 38.586 151.55 38.602h.134c174.785 0 317.066-142.273 317.132-317.133.036-84.742-32.921-164.418-92.8-224.36zM320.05 580.94h-.11c-47.296-.02-93.683-12.73-134.16-36.742l-9.62-5.715-99.766 26.172 26.628-97.27-6.27-9.972c-26.386-41.969-40.32-90.476-40.296-140.281.055-145.332 118.305-263.57 263.7-263.57 70.406.023 136.59 27.476 186.355 77.3s77.156 116.051 77.133 186.485C583.582 462.69 465.34 580.94 320.05 580.94zm144.586-197.418c-7.922-3.968-46.883-23.132-54.149-25.78-7.258-2.645-12.547-3.962-17.824 3.968-5.285 7.93-20.469 25.781-25.094 31.066-4.625 5.29-9.242 5.953-17.168 1.985-7.925-3.965-33.457-12.336-63.726-39.332-23.555-21.012-39.457-46.961-44.082-54.89-4.617-7.938-.04-11.813 3.476-16.173 8.578-10.652 17.168-21.82 19.809-27.105 2.644-5.29 1.32-9.918-.664-13.883-1.977-3.965-17.824-42.969-24.426-58.84-6.437-15.445-12.965-13.36-17.832-13.601-4.617-.231-9.902-.278-15.187-.278-5.282 0-13.868 1.98-21.133 9.918-7.262 7.934-27.73 27.102-27.73 66.106s28.394 76.683 32.355 81.972c3.96 5.29 55.879 85.328 135.367 119.649 18.906 8.172 33.664 13.043 45.176 16.695 18.984 6.031 36.254 5.18 49.91 3.14 15.226-2.277 46.879-19.171 53.488-37.68 6.602-18.51 6.602-34.374 4.617-37.683-1.976-3.304-7.261-5.285-15.183-9.254zm0 0"
                                        fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                    <a target="_blank" href="https://t.me/+{{ getSettingValue('eg_whatsapp') }}?text=سلام%20عليكم&profile"
                        class="box animate__animated animate__zoomInRight animate__slow animate__delay-2s">
                        <i class="fab fa-telegram">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                                <g>
                                    <path
                                        d="m2.617 15.832 6.44 2.187 15.291-9.348c.222-.135.449.166.258.342L13.03 19.668l-.43 5.965a.494.494 0 0 0 .838.388l3.564-3.505 6.516 4.932c.702.532 1.719.157 1.908-.703l4.537-20.6c.259-1.175-.893-2.167-2.016-1.737L2.585 14.12c-.796.305-.774 1.438.032 1.712z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="hovered-path"></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                    <a target="_blank" href="{{ getSettingValue('eg_snapchat') }}" class="box animate__animated animate__zoomInUp animate__slow animate__delay-3s">
                        <i class="fab fa-weixin">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 100 100"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                                <g>
                                    <path
                                        d="M50 10c-22.1 0-40 16.6-40 37.1 0 11.7 5.8 22.1 14.9 28.9l.2 13c0 .7.8 1.1 1.4.8l12.5-7c3.5.9 7.2 1.4 11.1 1.4 22.1 0 40-16.6 40-37.1S72 10 50 10zm2.9 49.2-8.5-8.9c-.5-.5-1.3-.6-1.9-.3l-15 8.1c-.6.3-1.1-.4-.7-.9l17.7-18.8c.5-.5 1.4-.5 1.9 0l8.5 9.1c.5.5 1.3.7 1.9.3l14.7-8c.6-.3 1.1.4.7.9L54.8 59.2c-.5.5-1.4.5-1.9 0z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="hovered-path"></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                    <a target="_blank" href="{{ getSettingValue('eg_facebook_link') }}" class="box  animate__animated animate__zoomInLeft animate__slow animate__delay-2s">
                        <i class="fab fa-facebook-messenger">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 32 32"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M30 16c0 7.2-5.4 13.1-12.3 13.9V19.1H21l.5-3.8h-3.7V13c0-1.1.3-1.8 1.9-1.8h2V7.7c-1-.1-1.9-.1-2.9-.1-2.9 0-4.9 1.8-4.9 5v2.8h-3.3v3.8h3.3v10.7C7.1 28.8 2 23 2 16 2 8.3 8.3 2 16 2s14 6.3 14 14z"
                                        fill="currentColor" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                    <a target="_blank" href="tel:{{ getSettingValue('eg_phone') }}" class="box  animate__animated animate__zoomInLeft animate__slow">
                        <i class="fab fa-viber">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 322 322"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                                <g>
                                    <path
                                        d="M275.445 135.123c.387-45.398-38.279-87.016-86.192-92.771-.953-.113-1.991-.285-3.09-.467-2.372-.393-4.825-.797-7.3-.797-9.82 0-12.445 6.898-13.136 11.012-.672 4-.031 7.359 1.902 9.988 3.252 4.422 8.974 5.207 13.57 5.836 1.347.186 2.618.359 3.682.598 43.048 9.619 57.543 24.742 64.627 67.424.173 1.043.251 2.328.334 3.691.309 5.102.953 15.717 12.365 15.717h.001c.95 0 1.971-.082 3.034-.244 10.627-1.615 10.294-11.318 10.134-15.98-.045-1.313-.088-2.555.023-3.381.03-.208.045-.417.046-.626z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="hovered-path"></path>
                                    <path
                                        d="M176.077 25.688c1.275.092 2.482.18 3.487.334 70.689 10.871 103.198 44.363 112.207 115.605.153 1.211.177 2.688.202 4.252.09 5.566.275 17.145 12.71 17.385l.386.004c3.9 0 7.002-1.176 9.221-3.498 3.871-4.049 3.601-10.064 3.383-14.898-.053-1.186-.104-2.303-.091-3.281.899-72.862-62.171-138.933-134.968-141.39-.302-.01-.59.006-.881.047a6.09 6.09 0 0 1-.862.047c-.726 0-1.619-.063-2.566-.127C177.16.09 175.862 0 174.546 0c-11.593 0-13.797 8.24-14.079 13.152-.65 11.352 10.332 12.151 15.61 12.536zM288.36 233.703a224.924 224.924 0 0 1-4.512-3.508c-7.718-6.211-15.929-11.936-23.87-17.473a1800.92 1800.92 0 0 1-4.938-3.449c-10.172-7.145-19.317-10.617-27.957-10.617-11.637 0-21.783 6.43-30.157 19.109-3.71 5.621-8.211 8.354-13.758 8.354-3.28 0-7.007-.936-11.076-2.783-32.833-14.889-56.278-37.717-69.685-67.85-6.481-14.564-4.38-24.084 7.026-31.832 6.477-4.396 18.533-12.58 17.679-28.252-.967-17.797-40.235-71.346-56.78-77.428-7.005-2.576-14.365-2.6-21.915-.06-19.02 6.394-32.669 17.623-39.475 32.471-6.577 14.347-6.28 31.193.859 48.717 20.638 50.666 49.654 94.84 86.245 131.293 35.816 35.684 79.837 64.914 130.839 86.875 4.597 1.978 9.419 3.057 12.94 3.844 1.2.27 2.236.5 2.991.707.415.113.843.174 1.272.178l.403.002h.002c23.988 0 52.791-21.92 61.637-46.91 7.75-21.882-6.4-32.698-17.77-41.388zM186.687 83.564c-4.107.104-12.654.316-15.653 9.021-1.403 4.068-1.235 7.6.5 10.498 2.546 4.252 7.424 5.555 11.861 6.27 16.091 2.582 24.355 11.48 26.008 28 .768 7.703 5.955 13.082 12.615 13.082h.001c.492 0 .995-.029 1.496-.09 8.01-.953 11.893-6.838 11.542-17.49.128-11.117-5.69-23.738-15.585-33.791-9.929-10.084-21.898-15.763-32.785-15.5z"
                                        fill="currentColor" opacity="1" data-original="#000000" class="hovered-path"></path>
                                </g>
                            </svg>
                        </i>
                    </a>
                    {{-- <a class="box  animate__animated animate__bounceInLeft animate__slow">
                        <i class="fab fa-skype"></i>
                    </a> --}}
                </div>
            </div>
            <img class="w3-block wow animate__animated animate__zoomInUp" src="{{ asset($metaBanner->image) }}" alt="">
            <br>
            <br>
            <div class="section">
                <div class="modal-lg mt-4">

                    <div class="text-center">
                        <img class="m-auto wow animate__animated animate__zoomIn" style="width: 100%;max-width: 500px" src="{{ asset('front/img/contact.png') }}" alt="">
                    </div>
                    <div class="card w3-round-large shadow-lg border-0 p-3 wow animate__animated animate__zoomIn ">

                        <div class="p-3 border-none bg-transparent text-primary">
                            <h5 class="mb-0">ارسل رسالة وتس الى الشيخ رامى</h5>
                        </div>

                        <div class="card-body border-none">
                            <form id="waForm">

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">الاسم</label>
                                            <input required id="waName" type="text" name="name" class="form-control primary-light form-control-lg" placeholder="ادخل الاسم" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">الهاتف</label>
                                            <input required id="waPhone" type="text" name="phone" class="form-control primary-light form-control-lg" placeholder="ادخل رقم الهاتف" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="message" class="form-label">الرسالة</label>
                                            <textarea required id="waMessage" name="message" class="form-control primary-light form-control-lg" rows="4" placeholder="اكتب الرسالة..." required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <!-- Submit -->
                                <div class="text-center">
                                    <button type="submit" style="min-width: 100px" class="btn btn-primary">
                                        ارسل
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section step-section">
                <div class="text-center mb-3 text-primary">
                    <h2>
                        خطوات
                    </h2>
                </div>
                <br>
                <div class="d-flex m-auto wow w3-animate-right">
                    <div class="flex-shrink-0">
                        <img width="150px" src="{{ asset('front/img/s1.png') }}" alt="">
                    </div>
                    <div class="flex-grow-1 ms-4">
                        <h3>
                            <b>الاشتراك و الانضمام</b>
                        </h3>
                        <p class="text-muted">
                            التواصل مع الشيخ رامى لتحديد المجموعه المناسبة
                        </p>
                    </div>
                </div>
                <div class="step-line"></div>
                <div class="d-flex m-auto wow w3-animate-left">
                    <div class="flex-grow-1 me-4 text-left" style="direction: ltr!important">
                        <h3 class="text-left">
                            <b>المتابعة والتذكية</b>
                        </h3>
                        <p class="text-muted text-left">
                            مواعظ قصيرة لترقيق القلب ورفع الهمة وتسميع اللوح المطلوب.
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <img width="150px" src="{{ asset('front/img/s2.png') }}" alt="">
                    </div>
                </div>
                <div class="step-line"></div>
                <div class="text-center mt-3 wow w3-animate-top">
                    <h3>
                        <b>
                            حِفْظٌ مُتْقَن .. وَتَهْذِيبُ سُلُوك وَالنَّتِيجَة؟ شَخْصِيَّةٌ قُرْآنِيَّةٌ رَاقِيَة
                        </b>
                    </h3>
                </div>

            </div>

            {{-- <div class="section">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12">

                    </div>

                </div>

            </div> --}}


            @include('front.layouts.banner')
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        // ✅ Put your WhatsApp number here in international format WITHOUT + or spaces
        // Example Egypt: 2010xxxxxxx | KSA: 9665xxxxxxx
        const WHATSAPP_NUMBER = "{{ getSettingValue('eg_whatsapp') }}"; // <-- change this

        const form = document.getElementById("waForm");
        const nameEl = document.getElementById("waName");
        const phoneEl = document.getElementById("waPhone");
        const msgEl = document.getElementById("waMessage");

        const errName = document.getElementById("errName");
        const errPhone = document.getElementById("errPhone");
        const errMsg = document.getElementById("errMsg");

        function show(el, yes) {
            // el.classList.toggle("d-none", !yes);
        }

        function normalizePhone(input) {
            // keep digits only (remove spaces, +, -, etc.)
            return (input || "").replace(/\D/g, "");
        }

        function validate() {
            const name = (nameEl.value || "").trim();
            const phone = normalizePhone(phoneEl.value);
            const message = (msgEl.value || "").trim();

            const okName = name.length >= 2;
            const okPhone = phone.length >= 7 && phone.length <= 15;
            const okMsg = message.length >= 5;

            // show(errName, !okName);
            // show(errPhone, !okPhone);
            // show(errMsg, !okMsg);

            return okName && okPhone && okMsg;
        }

        form.addEventListener("submit", function(e) {
            e.preventDefault();

            if (!validate()) return;

            const name = nameEl.value.trim();
            const phone = normalizePhone(phoneEl.value);
            const message = msgEl.value.trim();

            const text =
                `*الاسم*: ${name}\n` +
                `*الهاتف*: ${phone}\n` +
                `*الرسالة*: ${message}`;

            const url = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(text)}`;

            // Open WhatsApp in new tab (works on mobile/desktop)
            window.open(url, "_blank");
        });

        // Optional: live validation while typing
        ["input", "blur"].forEach(evt => {
            nameEl.addEventListener(evt, validate);
            phoneEl.addEventListener(evt, validate);
            msgEl.addEventListener(evt, validate);
        });
    </script>
@endsection
