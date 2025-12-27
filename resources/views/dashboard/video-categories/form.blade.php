@php
    $title = $resource->id ? __('lang.edit') : __('lang.add');
@endphp


<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">
                {{ $title }}
            </h5>
            <button type="button" class="btn-close {{ isRtl() ? 'ms-1' : '' }}" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form"
                action="{{ $resource->id ? route('admin.video-category.update', $resource->id) : route('admin.video-category.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 text-center ">

                        {!! Form::label('icon', __('lang.icon'), ['class' => 'form-label']) !!} <br>
                        <img class="image-preview-icon rounded-circle" width="100" height="100"
                            src="{{ asset($resource->icon ?? 'assets/img/default.jpg') }}">
                        <br>
                        <label for="icon" class="btn btn-primary text-white mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z" />
                                <path fill="currentColor"
                                    d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z" />
                            </svg>
                        </label>

                        <input type="file" onchange="previewImage(this, '.image-preview-icon')" id="icon"
                            class="d-none form-control mt-3" name="icon" accept="image/*">
                    </div>
                    <div class="clearfix"></div>

                    <h6 class="mb-3 mt-3">{{ __('lang.title') }}</h6>
                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="ar_title">
                                {{ __('lang.ar.title') }}
                            </label>
                            {!! Form::text('ar[title]', old('ar[title]', optional($resource->translate('ar'))->title), [
                                'class' => 'form-control',
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="en_title">
                                {{ __('lang.en.title') }}
                            </label>
                            {!! Form::text('en[title]', old('en[title]', optional($resource->translate('en'))->title), [
                                'class' => 'form-control',
                            ]) !!}
                        </div>
                    </div>

                </div>
                <div class="pt-4">
                    <button type="submit" class="btn w3-block btn-primary">{{ __('lang.save') }}</button>
                </div>
            </form>

        </div>

    </div>
</div>

<script>
    function previewImage(input, previewSelector) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector(previewSelector).src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
