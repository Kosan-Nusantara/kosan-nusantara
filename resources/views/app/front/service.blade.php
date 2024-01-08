@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/hotel/about/banner.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Service</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Service -->
    <section class="about-one pt-5 pb-5">
        <!-- <div class="bg-grad-right"><img src="images/background/bg-gradient-18.png" alt="" title=""></div> -->
        <div class="auto-container">
            <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h2><span>Our Service Boarding</span></h2>
            </div>
            <div class="outer-box">
                <div class="row clearfix align-items-center">
                    <!--Image Col-->
                    <div class="image-col col-lg-4 col-md-12 col-sm-12">
                        <div class="image-box">
                            <img style="border-radius: 12px;"
                                src="{{ asset('/assets/front/images/hotel/service/cleaning.png') }}" alt=""
                                title="">
                        </div>
                        <h4 class="text-center mt-2">Cleaning Service</h4>
                        <div class="text text-center">
                            we have a janitor to clean the yard
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12">
                        <div class="image-box">
                            <img style="border-radius: 12px;"
                                src="{{ asset('/assets/front/images/hotel/service/food.png') }}" alt=""
                                title="">
                        </div>
                        <h4 class="text-center mt-2">Restaurant</h4>
                        <div class="text text-center">
                            We also provide restaurants or food stalls to make it easier for tenants if they want to
                            buy food
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12">
                        <div class="image-box">
                            <img style="border-radius: 12px;"
                                src="{{ asset('/assets/front/images/hotel/service/sitting.png') }}" alt=""
                                title="">
                        </div>
                        <h4 class="text-center mt-2">Sitting Room</h4>
                        <div class="text text-center">
                            We provide a living room so that tenant guests feel comfortable
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Facilities -->
    <section class="about-one pt-5 pb-5">
        <div class="auto-container">
            <div class="row clearfix align-items-center">
                @foreach ($facilities as $facility)
                    <!--Block-->
                    <div class="col-lg-2 col-md-6 col-sm-12 tour-type-block bg-blue">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon"><img
                                        src="{{ asset('assets/front/images/hotel/service/icon/' . $facility->photo) }}"
                                        alt="">
                                </div>
                            </div>
                            <h5>{{ $facility->name }}</h5>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Facilities -->
@endsection
@push('scripts')
@endpush
