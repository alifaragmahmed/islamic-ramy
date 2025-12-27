@extends('dashboard.layouts.master')

@php
    $title = __('lang.videos');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb', ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
            @component('dashboard.layouts.includes.card')
                @slot('tool')
                    <a data-href="{{ route('admin.video.create') }}" data-container=".table-modal"
                        class="btn btn-modal btn-primary d-grid float-end text-white mb-2 ">
                        <i class="  bx bx-plus"> {{ __('lang.add') }}</i>

                    </a>
                @endslot

                @slot('content')
                    @component('dashboard.layouts.includes.table')
                        @slot('headers')
                            <td>#</td>
                            <td>{{ __('lang.image') }}</td>
                            <td>{{ __('lang.title') }}</td>
                            <td>{{ __('lang.category') }}</td>
                            <td>{{ __('lang.time_per_minutes') }}</td>
                            <td>{{ __('lang.actions') }}</td>
                        @endslot

                        @slot('data')
                            @if (isset($data) && count($data) > 0)
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset($item->master_image) }}" class="border-8" width="60px" height="40px"
                                                alt="">
                                        </td>
                                        <td>
                                            <b>{{ $item->title }}</b>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">{{ $item->category->title ?? 'N/A' }}</span>
                                        </td>
                                        <td>
                                            {{ $item->time_per_minutes }}
                                        </td>

                                        <td>
                                            <a data-href="{{ route('admin.video.edit', $item->id) }}" data-container=".table-modal"
                                                class="btn btn-modal text-white btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.video.delete', $item->id) }}" class="btn btn-danger sw-alert btn-sm"><i
                                                    class="bx bx-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">
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
@endsection
