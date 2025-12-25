@extends('front.layouts.master')
@section('css')
    <style>
        .image {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 wow fadeIn" style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner" >
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown mb-4 text-center text-white">{{ $project->title }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            <div class="col-12">
                <div class="image" style="background-image: url({{ asset($project->image) }})"></div>
            </div>

            <div class="desc pt-4">
                {{ $project->short_description }}
            </div>
            <div class="desc pt-4">
                {!! $project->description !!}
            </div>
        </div>
     </section>
@endsection
