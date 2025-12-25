{{-- <section class="section--product pt-5">
    <div class="bg-white ">
        <div class="container mb-5">

            <div class="row pt-5 mb-5 facts-counter ">

            </div>

        </div>
        <br><br>
    </div>
</section> --}}
<div class="p-5 " style="background: #131313 ; min-height: 120vh">

    <div class="container">



        <div class="d-flex m-auto goals--items justify-content-between gap-5  pt-2">
            {{-- @foreach ($technicalFeatures as $item) --}}
                <div class="text-white   pt-5 goals--item "  style="margin-top:100px">
                    <div class="item-tect-feature  technical-item ">
                        <h2
                            style="color:#BDA771;
                         font-family: Tajawal;
                         font-size: 72px;
                         font-style: normal;
                         font-weight: 700;
                         line-height: normal;-webkit-text-fill-color: transparent;
                        -webkit-text-stroke: 1px;">
                            01
                        </h2>


                        <b class="text-white fs-5">{{ __('lang.goals') }}</b>
                        <div class=" overlay ">
                           {{ Str::limit(getSettingValue('goals_'.app()->getLocale()) , 250) }}
                        </div>
                    </div>
                </div>
                <div class="text-white   pt-5 goals--item ">
                    <div class="item-tect-feature  technical-item ">
                        <h2
                            style="color:#BDA771;
                         font-family: Tajawal;
                         font-size: 72px;
                         font-style: normal;
                         font-weight: 700;
                         line-height: normal;-webkit-text-fill-color: transparent;
                        -webkit-text-stroke: 1px;">
                            02
                        </h2>


                        <b class="text-white fs-5">{{ __('lang.our_message') }}</b>
                        <div class=" overlay ">
                           {{Str::limit(getSettingValue('our_message_'.app()->getLocale()) , 250) }}
                        </div>
                    </div>
                </div>
                <div class="text-white  pt-5 goals--item "  style="margin-top:100px">
                    <div class="item-tect-feature  technical-item ">
                        <h2
                            style="color:#BDA771;
                         font-family: Tajawal;
                         font-size: 72px;
                         font-style: normal;
                         font-weight: 700;
                         line-height: normal;-webkit-text-fill-color: transparent;
                        -webkit-text-stroke: 1px;">
                            03
                        </h2>


                        <b class="text-white fs-5">{{ __('lang.our_vision') }}</b>
                        <div class=" overlay ">
                           {{ Str::limit(getSettingValue('our_vision_'.app()->getLocale()) , 250) }}
                        </div>
                    </div>
                </div>
                <div class="text-white   pt-5  goals--item ">
                    <div class="item-tect-feature  technical-item ">
                        <h2
                            style="color:#BDA771;
                         font-family: Tajawal;
                         font-size: 72px;
                         font-style: normal;
                         font-weight: 700;
                         line-height: normal;-webkit-text-fill-color: transparent;
                        -webkit-text-stroke: 1px;">
                            04
                        </h2>


                        <b class="text-white fs-5">{{ __('lang.rate_us') }}</b>
                        <div class=" overlay ">
                           {{ Str::limit(getSettingValue('rate_us_'.app()->getLocale()) , 250) }}
                        </div>
                    </div>
                </div>



        </div>
<br>
    </div>
</div>
