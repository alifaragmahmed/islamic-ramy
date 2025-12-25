<div class="project-count-area image-bg section-pt-90 section-pb"
    style="background-image: url(assets/images/bg/counter-bg.jpg)" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-count-inner domain-inner-bg">
                    <div class="row">
                        @foreach ($counters as $get)
                            <div class="col-lg-3 col-sm-6">
                                <!-- counter start -->
                                <div class="counter text-center mt-30">
                                    <img src="{{ asset($get->image ?? 'frontassets/images/icon/fun-01.png') }}" alt="">
                                    <h3 class="counter-active">
                                        {{ $get->number }}
                                    </h3>
                                    <p>
                                        {{ $get->title }}
                                    </p>
                                </div>
                                <!-- counter end -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
