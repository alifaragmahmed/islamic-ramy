@extends('dashboard.layouts.master')

@php
    $title = __('lang.gallery');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('content')
               <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    
                    <div class="col-md-6 pt-5">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
                        </div>
                    </div>

                </div>
               </form>

               @endslot
           @endcomponent
        </div>
    </div>

    <div class="row pt-3">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   <a data-href="{{ route('admin.gallery.create') }}"  data-container=".table-modal" class="btn btn-modal btn-primary d-grid float-end text-white mb-2 ">
                    <i class="  bx bx-plus"> {{ __('lang.add') }}</i>

                </a>
               @endslot

               @slot('content')

                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('lang.image') }}</td>
                           <td>{{ __('lang.type') }}</td>
                           <td>{{ __('lang.actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8" width="50px" height="40px" alt="">
                                        </td>

                                        <td>
                                            @if ($item->type == '0')
                                                {{ __('lang.image') }}
                                            @else
                                                {{ __('lang.video') }}
                                            @endif
                                        </td>
                                        <td>
                                            <a data-href="{{ route('admin.gallery.edit',$item->id) }}"  data-container=".table-modal" class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.gallery.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
                                        </td>
                                   </tr>
                               @endforeach
                           @else
                               <tr>
                                   <td colspan="4">
                                       <div class="text-center alert alert-warring">
                                           {{ __('lang.no_data_found') }}
                                       </div>
                                   </td>
                               </tr>
                           @endif
                       @endslot
                   @endcomponent
               @endslot
           @endcomponent
        </div>
    </div>
    <div class="modal fade table-modal" id="table-model" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
</div>
@endsection
@section('js')
<script>
    function setType(value) {
        if (value === '0') {
            // hide the link-video code
            $('.link-video').addClass('d-none');
        } else if (value === '1') {
            console.log('Video selected');
            // Add your video-specific code here
            $('.link-video').removeClass('d-none');
        }
    }
</script>
@endsection
