@extends('front.layouts.master')
@php $dir = app()->getLocale() == 'ar' ? 'rtl' : 'ltr'; @endphp

@section('title')
    {{ __('lang.home') }}
@endsection



@section('content')

    <div class="container pt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                {!! getSettingValue('terms_of_use_' . app()->getLocale()) !!}            </div>
        </div>
    </div>



@endsection

