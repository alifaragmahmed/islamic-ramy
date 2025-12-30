@php
    $title = $resource->id ? __('lang.edit') : __('lang.add');
@endphp


<div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">
                {{ $title }}
            </h5>
            <button type="button" class="btn-close {{ isRtl() ? 'ms-1' : '' }}" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="form" action="{{ $resource->id ? route('admin.video.update', $resource->id) : route('admin.video.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="video_category_id">
                                {{ __('lang.category') }}
                            </label>
                            <select name="video_category_id" id="video_category_id" class="form-control">
                                <option value="">{{ __('lang.select_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('video_category_id', $resource->video_category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="time_per_minutes">
                                {{ __('lang.time_per_minutes') }}
                            </label>
                            {!! Form::text('time_per_minutes', old('time_per_minutes', $resource->time_per_minutes), [
                                'class' => 'form-control',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-12 pt-2">
                        <div class="form-group">
                            <label for="master_image">
                                {{ __('lang.image') }}
                            </label>
                            <input type="file" name="master_image" id="master_image" class="form-control" accept="image/*" onchange="previewImage(this, '.image-preview-master')">
                            @if ($resource->master_image)
                                <img src="{{ asset($resource->master_image) }}" class="image-preview-master mt-2" width="200" height="120" alt="">
                            @else
                                <img src="{{ asset('assets/img/default.jpg') }}" class="image-preview-master mt-2" width="200" height="120" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12 pt-2">
                        <div class="form-group">
                            <label for="embeded_text">
                                {{ __('lang.embeded_text') }}
                            </label>
                            {!! Form::textarea('embeded_text', old('embeded_text', $resource->embeded_text), [
                                'class' => 'form-control',
                                'rows' => 3,
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-12 pt-2">
                        <div class="form-group">
                            <label for="file">
                                {{ __('lang.file') }}
                            </label>
                            <input type="file" name="file" id="file" class="form-control" accept="video/*">
                            @if ($resource->file)
                                <small class="text-success">{{ __('lang.current_file') }}:
                                    {{ basename($resource->file) }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <hr class="my-3">

                    <h6 class="mb-3">{{ __('lang.title') }}</h6>
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
                    {{-- <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="en_title">
                                {{ __('lang.en.title') }}
                            </label>
                            {!! Form::text('en[title]', old('en[title]', optional($resource->translate('en'))->title), [
                                'class' => 'form-control',
                            ]) !!}
                        </div>
                    </div> --}}

                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="ar_short_description">
                                {{ __('lang.ar.short_description') }}
                            </label>
                            {!! Form::textarea('ar[short_description]', old('ar[short_description]', optional($resource->translate('ar'))->short_description), ['class' => 'form-control', 'rows' => 3]) !!}
                        </div>
                    </div>
                    {{-- <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="en_short_description">
                                {{ __('lang.en.short_description') }}
                            </label>
                            {!! Form::textarea(
                                'en[short_description]',
                                old('en[short_description]', optional($resource->translate('en'))->short_description),
                                ['class' => 'form-control', 'rows' => 3],
                            ) !!}
                        </div>
                    </div> --}}

                    <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="ar_description">
                                {{ __('lang.ar.description') }}
                            </label>
                            {!! Form::textarea('ar[description]', old('ar[description]', optional($resource->translate('ar'))->description), ['class' => 'form-control', 'rows' => 4]) !!}
                        </div>
                    </div>
                    {{-- <div class="col-md-6 pt-2">
                        <div class="form-group">
                            <label for="en_description">
                                {{ __('lang.en.description') }}
                            </label>
                            {!! Form::textarea(
                                'en[description]',
                                old('en[description]', optional($resource->translate('en'))->description),
                                ['class' => 'form-control', 'rows' => 4],
                            ) !!}
                        </div>
                    </div> --}}

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
