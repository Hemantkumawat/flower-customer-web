<div>
    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">100% Organic and fresh</h4>
                    <h1 class="mb-5 display-3 text-primary">Daily Fresh indian flowers </h1>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="search"
                               placeholder="Search" wire:model.live="term">
                        <button type="submit"
                                class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100"
                                style="top: 0; right: 25%;">Submit Now
                        </button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="{{ asset('theme/img/hero-img-1.png') }}" class="img-fluid w-100 h-100 bg-secondary rounded"
                                     alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="{{ asset('theme/img/hero-img-2.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Vesitables</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Flowers Shop Start-->
    <div class="container-fluid fruite px-5">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4 row-cols-5">
                    @forelse($products??[] as $product)
                        <a class="col cursor-pointer" href="{{ route('product',$product->slug) }}">
                            <div class="rounded position-relative fruite-item border">
                                <div class="fruite-img">
                                    <img src="{{ $product->image }}" class="img-fluid w-100 rounded-top"
                                         alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                     style="top: 10px; left: 10px;">{{ strtoupper($product->code) }}
                                </div>
                                <div class="p-4 border-top-0 rounded-bottom">
                                    <h4>{{ $product->title }}</h4>
                                </div>
                            </div>
                        </a>
                        @if($loop->last)
                            <div class="col-md-12 text-center">
                                {!! $products->links() !!}
                            </div>
                        @endif
                    @empty
                        <div class="text-3x text-center">No Products!</div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
    <!-- Flowers Shop End-->
</div>
