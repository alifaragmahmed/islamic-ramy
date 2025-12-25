@php
    $title = $resource->id ? __('lang.edit') : __('lang.add');
@endphp


<div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">
          {{ $title }}
        </h5>
        <button type="button" class="btn-close {{ isRtl() ? 'ms-1' : '' }}" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{ $resource->id ? route('admin.package.cat.update', $resource->id) : route('admin.package.cat.store') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 pt-2">
                    <div class="form-group">
                        <label for="name">
                            {{ __('lang.ar.title') }}
                        </label>
                        {!! Form::text("title", old("title",$resource->title), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-12 pt-2">
                    <div class="form-group">
                        <label for="name">
                            {{ __('lang.en.title') }}
                        </label>
                        {!! Form::text("title_en", old("title_en",$resource->title_en), ['class' => 'form-control']) !!}
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
