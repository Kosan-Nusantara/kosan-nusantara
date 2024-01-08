@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/front/images/hotel/about/banner.png') }});">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Gallery</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Gallery -->
    <section class="about-one pt-5 pb-5">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix align-items-center">
                    @foreach ($galleries as $gallery)
                        <!--Image Col-->
                        <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                            <div class="image-box">
                                <img class="" style="border-radius: 12px;"
                                    src="{{ asset('assets/front/images/hotel/gallery/' . $gallery->photo) }}" alt=""
                                    title="">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->
@endsection
@push('scripts')
@endpush
