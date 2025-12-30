@extends('front.layouts.master')

@section('title')
    {{ __('lang.home') }}
@endsection

@section('css')
    <style>
        .slider-container {
            background:
                linear-gradient(180deg, rgba(99, 49, 6, .08), rgba(216, 160, 63, .08)),
                url("{{ $slider->image ? asset($slider->image) : asset('front/img/slider-bg.jpg') }}") top/100% 100% no-repeat;
        }
    </style>
@endsection

@section('content')
    <!-- SLIDER -->
    <section class="slider-section mb-5">
        <img src="{{ $slider->image ? asset($slider->image) : asset('front/img/slider-bg.jpg') }}" class="w3-block" alt="">
        <div class="container slider-container">
            <div class="slider-content">
                <h1 class="slider-text-title">
                    {{ $slider->title ?? '' }}
                </h1>

                <p>
                    {{ $slider->description ?? '' }}
                </p>

                <a class="slider-cta w3-hide-small" href="https://wa.me/201019028034" target="_blank" rel="noopener" id="waCta">
                    <span class="wa-dot" aria-hidden="true"></span>
                    تواصل واتساب
                </a>
            </div>
        </div>
    </section>

    {{-- <div class="under-line"></div> --}}

    <!-- HERO -->
    <section class="hero mb-4">
        <div class="container">
            <div class="hero-card">
                <div class="kufi" aria-hidden="true"></div>
                <div class="hero-inner">
                    <div style="margin-top: 10%;">
                        <h1>تعلم القرآن بإتقان… خطوة بخطوة حتى الإجازة</h1>
                        <p>
                            برامج تعليمية متدرجة لتعليم القرآن وتجويده، دروس مباشرة ومسجلة،
                            متابعة فردية، اختبارات دورية، وخطة واضحة تناسب كل المستويات.
                        </p>
                        <div class="cta">
                            <a class="btn btn-primary" href="programs.html">ابدأ الآن</a>
                            <a class="btn btn-ghost" href="about.html">تعرف علينا</a>
                            <a class="btn btn-ghost" href="contact.html">تواصل معنا</a>
                        </div>
                    </div>

                    <div class="hero-side" aria-label="بطاقات تمهيدية">
                        @foreach ($whyUs as $item)
                            <div style="background-image: url({{ asset($item->image) }})" class="tile">
                                <span>{{ $item->title }}</span>
                            </div>
                        @endforeach
                        {{-- <div class="tile"><span>حلقات تلاوة</span></div>
                        <div class="tile"><span>حلقات تلاوة</span></div>
                        <div class="tile"><span>حلقات تلاوة</span></div> --}}
                        {{-- <div class="tile bg2"><span>تجويد عملي</span></div>
                        <div class="tile bg3"><span>اختبارات مستوى</span></div>
                        <div class="tile bg4"><span>متابعة فردية</span></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="section features-section mb-5">
        <div class="container">
            <div class="section-head text-center">
                <div class="w3-block mb-2">
                    <h2>مميزات الأكاديمية</h2>
                    <p>كل ما تحتاجه لتتعلم بثقة وبمنهج واضح.</p>
                </div>
            </div>

            <div class="grid-4">
                @foreach ($features as $item)
                    <div class="card w3-center text-center">
                        <img src="{{ asset($item->image) }}" alt="">
                        <div class="icon">
                        </div>
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                @endforeach
                {{-- <div class="card">
                    <div class="icon">📚</div>
                    <h3>منهج متدرّج</h3>
                    <p>خطة تبدأ من الأساسيات حتى الإتقان مع مسار واضح لكل طالب.</p>
                </div>
                <div class="card">
                    <div class="icon">🧑‍🏫</div>
                    <h3>متابعة فردية</h3>
                    <p>تقييم مستمر وملاحظات عملية لتحسين الأداء خطوة بخطوة.</p>
                </div>
                <div class="card">
                    <div class="icon">📝</div>
                    <h3>اختبارات دورية</h3>
                    <p>اختبارات مستوى وقياس تقدم تساعدك على الاستمرار بثبات.</p>
                </div>
                <div class="card">
                    <div class="icon">🏅</div>
                    <h3>شهادة/إجازة</h3>
                    <p>برامج مهيأة للوصول لمستوى الإجازة حسب شروط البرنامج.</p>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- ABOUT ACADEMY -->
    <section class="section">
        <div class="container">
            <div class="section-head w3-block">
                <div class="w3-block mb-2 text-center">
                    <h2>عن الأكاديمية</h2>
                    <p>نبذة مختصرة عن المؤسس واعتماد الأكاديمية.</p>
                </div>
            </div>

            <div class="home-about text-center text-white">
                <img src="{{ asset($about->image) }}" class="m-auto" width="100px" alt="">
                <br>
                <div class="desc">
                    {{ $about->short_description }}
                </div>
            </div>
        </div>
    </section>

    <!-- MEDIA -->
    <section class="section">
        <div class="container">
            <div class="section-head">
                <div>
                    <h2>أحدث الفيديوهات</h2>
                    <p>نماذج من الدروس والمحاضرات (عرض تجريبي).</p>
                </div>
            </div>
        </div>

        <div class="row container p-0">

            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="video">
                    <div style="background-image: url({{ asset(getSettingValue('intro_image')) }})" class="frame rounded-bottom-0">
                        <div class="play">▶</div>
                    </div>
                    <div class="caption">
                        <strong>{{ getSettingValue('site_name_' . app()->getLocale()) }}</strong>
                        {{-- <span>{{ getSettingValue('site_name_' . app()->getLocale()) }}</span> --}}
                        {{-- <span>يمكن لاحقًا ربطه بيوتيوب/فيسبوك/ملفات فيديو.</span> --}}
                    </div>
                </div>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="media_slider">
                    <strong style="color:var(--primary); display:block; margin-bottom:10px;">قائمة الفيديوهات</strong>
                    <div class="row">

                        @foreach ($latestVideos as $video)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 p-1">
                                <div class="video shadow-none p-0">
                                    <div style="background-image: url({{ asset($video->master_image) }})" class="frame rounded-bottom-0 mb-1">
                                        <div class="play">▶</div>
                                    </div>
                                    <div class="caption ps-2 pe-2">
                                        <strong style="font-size: 12px" class="">{{ $video->title }}</strong>
                                        <span>{{ $video->time_per_minutes }} دقائق</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="section messenger-section">
        <div class="container">

            <div class="row align-items-center">

                <!-- Text column (CENTER vertically) -->
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center">

                    <h2 class="mb-3">
                        <b>انضم الينا</b>
                    </h2>

                    <p class="fs-5 mb-4">
                        انضم إلينا وابدأ رحلتك مع القرآن حفظًا وتدبرًا، في بيئة تربوية تُنمّي الإيمان وتبني شخصية قرآنية واعية.
                    </p>

                    <a href="{{ getSettingValue('eg_facebook_link') }}" target="_blank" rel="noopener noreferrer">
                        <img height="40" src="{{ asset('front/img/messager_btn.png') }}" alt="">
                    </a>
                    <br>

                </div>

                <!-- Image column (BOTTOM / END) -->
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end align-items-end">
                    <img class="img-fluid {{ isMobile() ? 'w-100' : 'w-75' }}" src="{{ asset('front/img/m.png') }}" alt="">
                </div>

            </div>


        </div>
    </section>


    <!-- CTA -->
    {{-- <section class="section">
        <div class="container">
            <div class="banner">
                <div>
                    <strong>سجّل الآن وابدأ رحلة تعلم القرآن</strong>
                    <span>إنشاء حساب مجاني، ثم اختر البرنامج المناسب لك.</span>
                </div>
                <div style="display:flex; gap:10px; flex-wrap:wrap;">
                    <a class="btn btn-primary" href="register.html">إنشاء حساب</a>
                    <a class="btn btn-ghost" href="programs.html">عرض البرامج</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
