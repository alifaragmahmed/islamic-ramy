<!-- Start Service Style-->
<div class="section-service bg-gray section-pt section-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>
                        {{ __('lang.our_services') }}                        
                    </h2>
                </div>
            </div>
        </div>
        <div class="row cln-service-activation poss_relative" dir="ltr">
            @foreach ($services as $get )
                
            <div class="col-lg-12">
                <!-- Start Single Service -->
                <div class="service text-center service-2 padding-none cleaning-service mb-30" >
                    <div class="thumb">
                        <a >
                            <img src="{{ asset($get->image ?? 'frontassets/images/serviece/service-01.jpg') }}" alt="service img">
                        </a>
                    </div>
                    <div class="content">
                        <h4><a >
                            {{ $get->title }}</a></h4>
                        <div class="text-description-{{ isRTL() ? 'right' : 'left' }}">
                            {!! $get->description !!}
                        </div>
                    </div>
                </div>
                <!-- End Single Service -->
            </div>
            @endforeach
        </div>
    </div>
</div>