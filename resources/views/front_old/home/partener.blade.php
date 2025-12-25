<section class="section--product " style="background: #F6F6F6">
    <div class=" pt-5">
        <div class="container mb-5">
            <div class="row pt-3 pb-5">
                <div class="col-md-12 pt-5  wow fadeInDown">
                    <div class="d-flex justify-content-between align-items-center">
                        <div  class="p{{ isRtl()?'e':'s' }}-3" style="border-{{ isRtl()?'right':'left' }}: 15px solid #BDA771">
                            <p class="main-color fs-5 ">{{ __('lang.customers') }}</p><br>
                            <b class=" fs-2   mb-5">{{ __('lang.parteners_success') }}</b>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row pt-3 mb-5 facts-counter ">
                <div class="owl-carousel owl-theme" id="parteners--owl" style="direction: ltr">
                    @foreach ($parteners as $item)
                        <div class="item p-3 partner-item">
                            <div class=" border-0 ">
                                <div class="card-body">
                                    <img loading="lazy" src="{{ asset($item->image) }}" alt="">
                                </div>
                            </div>
                        </div>



                    @endforeach

                </div>
            </div>

        </div>
        <br><br>
    </div>
</section>
