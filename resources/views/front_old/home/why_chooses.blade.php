<div class="reapir-choose-us section-ptb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="reapir-choose-inner">
                    <div class="section-title {{ isRTL() ? 'title-2-ar' : 'title-2' }}">
                        <h2>
                            {{ __('lang.why_chooses') }}
                        </h2>
                    </div>
                    <div class="choose-resone-inner mt-20">
                        <!-- Start Single Service -->
                        @foreach ($whychooses as $get)
                            <div class="service text-start service-6 reapir-service mt-30">
                                <div class="icons" style="{{ isRTL() ? 'float: right!important;margin-left: 25px;margin-right: 0' : 'float: left!important' }}">
                                    <img src="{{ asset($get->image) }}" alt="service icons">
                                </div>
                                <div class="content">
                                    <h4 class="{{ isRTL() ? 'text-right' : 'text-left' }}">
                                        {{ $get->title }}
                                    </h4>
                                    <p class="{{ isRTL() ? 'text-right' : 'text-left' }}">
                                        {{ $get->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Single Service -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_form_container repair-request-form">
                    <div class="ct-title-2">
                        <h2>
                            {{ __('lang.contact_us') }}
                        </h2>
                    </div>
                    <div class="repair-service-form">
                        <form id="contact-form" action="{{ route('front.contact.send') }}">
                            <div class="row">
                                @csrf
                                <div class="col-lg-12 mb-30">
                                    <input name="name" type="text" placeholder="{{ __('lang.name') }}*">
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <input name="email" type="email" placeholder="{{ __('lang.email') }}*">
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <input name="subject" type="text" placeholder="{{ __('lang.subject') }}*">
                                </div>
                                <div class="col-lg-12  mb-30">
                                    <textarea name="message" placeholder="{{ __('lang.message') }}*"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="submit-btn submit-btn-2" 
                                        style="">Send</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
