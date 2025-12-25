@extends('front.layouts.master')
@section('css')
    <style>

        .form-control {
            border-color: var(--secondary);
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->


    <div class=" p-0 container pt-5">
        <div class="row pt-5">
            <div class="col-md-7">
                <div  class="p{{ isRtl()?'e':'s' }}-3" style="border-{{ isRtl()?'right':'left' }}: 15px solid #BDA771">
                    <p class="main-color fs-3 bold">{{ __('lang.please_fill_data') }}</p><br>
                    <b class=" fs-2  mb-5">{{ __('lang.request_package') }}</b>
                </div>
                <div class="form pt-5">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="{{ __('lang.name') }}" class="form-control p-3 rounded-3">
                        </div>
                        <div class="form-group pt-4">
                            <input type="email" name="email" id="email" placeholder="{{ __('lang.email') }}" class="form-control p-3 rounded-3">
                        </div>
                        <div class="form-group pt-4">
                            <input type="number" name="phone" id="phone" placeholder="{{ __('lang.phone') }}" class="form-control p-3 rounded-3">
                        </div>
                        <div class="form-group pt-4">
                            <textarea name="message" class="form-control" placeholder="{{ __('lang.message') }}" id="message" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group pt-4 text-center">
                            <button class="btn btn-contact  p-3 " type="button" onclick="sendMessage()">{{ __('lang.request_now') }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
                <div class="package--item" style="background-image: url({{ asset($package->image) }});">
                    <div class="header pt-2 text-white text-center">
                        <b class="fs-3">{{ $package->title }}</b>
                        <p class="fs-5 text-white">{{ $package->short_description }}</p>
                    </div>
                    <div class="package--content p-5" style="height: 300px;overflow: auto;margin-top: 50px">
                        {!! $package->description !!}
                    </div>
                   </div>
            </div>

        </div>

    </div>
    <!-- Page Header End -->



     <br><br>
     <div class="bg-foot"></div>
@endsection
@section('js')

<script>



    var whatsapp_base_url= 'https://wa.me/{phone}/?text={text}';

    function validate(data) {
        var valid = true;
        Object.keys(data).forEach(key => {
            if (!data[key]) {
                valid = false;
            }
        });
        return valid;
    }
    function sendMessage() {
        var text = '';

        var data = {
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            message: $('#message').val(),
        };

        if (!validate(data)) {
            alert("{{ __('lang.fill_all_fields') }}");
            return false;
        }
        data['package'] = "{{ $package->title }}";
        data['price'] = "{{ $package->short_description }}";
        data['category'] = "{{ $package->category->title }}";
        Object.keys(data).forEach(key => {
            text += key + ' :' + data[key] + " \n" ;

        });

            var link = whatsapp_base_url
            .replace('{phone}', "{{ getSettingValue('sa_whatsapp') }}")
            .replace('{text}', encodeURIComponent(text));

            console.log(link + text)
            window.open(link , "_blank");
    }

</script>
@endsection
