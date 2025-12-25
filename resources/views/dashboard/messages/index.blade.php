@extends('dashboard.layouts.master')

@php
    $title = __('lang.messages');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    

    <div class="row pt-3">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   
               @endslot

               @slot('content')

                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                           <td>{{ __('lang.name') }}</td>
                           <td>{{ __('lang.email') }}</td>
                           <td>{{ __('lang.subject') }}</td>
                           <td>{{ __('lang.message') }}</td>
                           <td>{{ __('lang.actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->subject }}
                                        </td>
                                        <td>
                                            {{ $item->message }}
                                        </td>
                                       
                                        <td>
                                            <a href="{{ route('admin.message.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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
