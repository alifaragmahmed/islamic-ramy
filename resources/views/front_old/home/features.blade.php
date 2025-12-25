<!-- Start Service Style-->
<div class="section-service">
    <div class="container-fluid plr_-0">
        <div class="row g-0">
            @foreach ($features as $get)
                <!-- Start Single Service -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="row-service-wrap_white">
                        <div class="service  service-6 medical-service {{ $loop->index % 2 == 0 ? 'service-bg-2' : '' }}">
                            <div class="icons" style="{{ isRTL() ? 'float: right!important;margin-left: 25px;margin-right: 0' : 'float: left!important' }}">
                                <img src="{{ asset($get->image) }}" alt="service icons">
                            </div>
                            <div class="content">
                                <h4>
                                    {{ $get->title }}
                                </h4>
                                <p>
                                    {{ $get->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Service Style-->
