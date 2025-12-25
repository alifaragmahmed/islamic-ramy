@extends('dashboard.layouts.master')

@php
    $title = __('lang.products');
@endphp

@section('title')
    {{ $title }}
@endsection


@section('content')

    @include('dashboard.layouts.includes.breadcrumb' , ['title' => $title])

    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card', ['title' => __('lang.filter')])


               @slot('content')
                    <form action="{{ route('admin.product') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        {{ __('lang.categories') }}
                                    </label>

                                    {!! Form::select('category_id', $categories, old('category_id',request()->category_id), ['class' => 'form-control form-select-lg select2 p-2'  , 'placeholder' => __('lang.select') . ' ' . __('lang.category')]) !!}

                            </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">{{ __('lang.search') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
               @endslot

           @endcomponent

        </div>

    </div>
    <div class="row pt-2">
        <div class="col-md-12">
           @component('dashboard.layouts.includes.card' )
               @slot('tool')
                   <a href="{{ route('admin.product.create') }}"   class="btn btn-primary d-grid float-end mb-2 ">
                    <i class="  bx bx-plus"> {{ __('lang.add') . ' ' . __('lang.product') }}</i>

                </a>
               @endslot

               @slot('content')
                   @component('dashboard.layouts.includes.table')
                       @slot('headers')
                            <td>#</td>
                            <td>{{ __('lang.sort') }}</td>
                            <td>{{ __('lang.name') }}</td>
                            <td>{{ __('lang.category') }}</td>
                            <td>{{ __('lang.status') }}</td>
                            <td>{{ __('lang.actions') }}</td>
                       @endslot

                       @slot('data')
                           @if (isset($data))
                               @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <input type="number" class="form-control" onblur="updateSort(this,{{ $item->id }})" value="{{ $item->sort }}">
                                        </td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" class="border-8" width="40px" height="40px" alt="">
                                            <b>{{ $item->title }}</b>
                                        </td>


                                        <td>{{ optional($item->category)->title }}</td>
                                        <td>
                                            <a class="form-check form-switch d-flex m-1 justify-content-between text-center" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('lang.change_status') }}" >
                                                <input class="form-check-input"   type="checkbox" role="switch" id="flexSwitchCheckChecked-{{ $item->id }}" onclick="changeStatus(this,{{ $item->id }})" {{ $item->is_active == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexSwitchCheckChecked-{{ $item->id }}"></label>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.product.edit',$item->id) }}"   class="btn  btn-primary btn-sm"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('admin.product.delete',$item->id) }}" class="btn btn-danger sw-alert btn-sm"><i class="bx bx-trash"></i></a>
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
                   <div class="mt-4 ">
                    {{ $data->appends(request()->query())->render() }}
                   </div>
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
    function changeStatus(el , id){
        var is_active = 0 ;
        if(el.checked){
            is_active = 1 ;
        }
        $.ajax({
            url: "{{ route('admin.product.change-status') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
                is_active: is_active
            },
            success: function (results) {
               if (results.success) {
                    swal.fire("", results.message, "success");
               } else {
                    swal.fire("", results.message, "error");
               }
            },
            error: function (xhr) {
                var err = JSON.parse(xhr.responseText);
                swal.fire("", err.message, "error");
            }
        });
    }


    function updateSort(el , id){

        $.ajax({
            url: "{{ route('admin.product.update-sort') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
                sort: el.value
            },
            success: function (results) {
               if (results.success) {
                    swal.fire("", results.message, "success");
               } else {
                    swal.fire("", results.message, "error");
               }
            },
            error: function (xhr) {
                var err = JSON.parse(xhr.responseText);
                swal.fire("", err.message, "error");
            }
        });
    }
</script>

@endsection
