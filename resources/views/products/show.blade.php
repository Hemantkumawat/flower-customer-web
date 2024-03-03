@extends('layouts.app')
@section('content')
    @php($settings = \App\Models\Setting::query()->first())
    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5 " style="margin-top: 152px !important;">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="border rounded">
                                <a href="#">
                                    <img src="{{ $product->image }}" class="img-fluid rounded" alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3">{{ $product->title }}</h4>
                            <p class="text-dark">{{ strtoupper($product->code) }}</p>
                            <div>
                                {!! $product->description !!}
                            </div>
                            {{--<a href="https://www.divineflowersusa.com/wa/whatsapp-chat/?agent=903&number=+16692909760&ref=https://www.divineflowersusa.com/product/jathi-malli-string-5ft-ff-jas-019/"
                               class="mt-3 btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i>
                                Order Online? Chat on whatsapp
                            </a>--}}

                            <a href="https://wa.me/{{ $settings->whatsapp_chat_number }}?text={{ $settings->whatsapp_chat_first_message }}"
                               class="mt-3 btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary" target="_blank">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                Order Online? Chat on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->
@endsection
