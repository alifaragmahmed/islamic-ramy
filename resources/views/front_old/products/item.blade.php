<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="team-item card rounded" style="border-radius: 20px !important;">
        <a href="{{ route('front.product.show', $item->id) }}">
            <img class="img-fluid" loading="lazy" src="{{ asset($item->image) }}" alt="">
        </a>
        <div class="text-center p-4">
            <b class="card-title fs-4">{{ $item->title }}</b>
            <p class=" text-muted">
                {{ Str::limit($item->short_description, 50) }}
            </p>
        </div>
        <div class="team-text text-center bg-white p-4">
            <b class="card-title fs-4">{{ $item->title }}</b>
            <p class=" text-muted">
                {{ Str::limit($item->short_description, 50) }}
            </p>
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('front.product.show', $item->id) }}" class="btn text-white d-flex align-items-center rounded-circle bg-main">
                    <i class="fa fa-eye fs-4 "></i>
                </a>
                <button  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn  btn--primary">{{ __('lang.order_now') }}                        <i class="fa fa-shopping-cart"></i>
                </button>
            </div>
        </div>
    </div>
</div>
