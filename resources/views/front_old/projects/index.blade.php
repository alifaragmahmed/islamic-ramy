@extends('front.layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header p-0 wow fadeIn" style="background-image: url({{ asset($metaBanner->image) }}); " data-wow-delay="0.1s">
        <div class="meta--banner" >
            <div class="container py-5">
                <h1 class="display-4 animated slideInDown mb-4 text-end text-white">{{ __('lang.projects') }}</h1>

            </div>
        </div>
    </div>
    <!-- Page Header End -->


     <section class="container pt-5 mb-5 py-5">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-lg-3 col-md-6 wow zoomInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="{{ route('front.project.show', $project->id) }}">
                <div class="team-item rounded">
                    <img class="img-fluid" loading="lazy" src="{{ $project->image }}" style="height: 250px;width: 100%;" alt="">
                    <div class="text-center p-4">
                        <h5>{{ $project->title }}</h5>
                        <p class="text-muted">{{ Str::limit($project->description, 100) }}</p>
                    </div>

                </div>
            </a>
            </div>
            @endforeach
        </div>
     </section>
@endsection
