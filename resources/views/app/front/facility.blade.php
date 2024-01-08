@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/hotel/facilities/banner.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Facilities</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Intro -->
    <section class="intro-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-8 mb-5">
                    <div class="title-box left wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h2 class="text-left"><span>We give the best Services</span></h2>
                    </div>
                    <div class="text-content">
                        <p>
                            Pleasure and praising pain was born and I will give you a complete account of the
                            systems,
                            and
                            expound the actually teachings of the great explorer of the truth, the master-builder of
                            human
                            uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is
                            pleasure,
                            but
                            because those who do not know how to pursue pleasure rationally Nor who loves or pursues
                            or
                            desires to obtain pain of itself.
                        </p>
                    </div>
                </div>
                <div class="col-8 mb-5">
                    <div class="title-box left wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h2 class="text-left"><span>Why Choose This Service</span></h2>
                    </div>
                    <div class="text-content">
                        <p>
                            Complete account of the systems and expound the actually teachings of the great explorer
                            of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or
                            avoids pleasure itself, because it is pleasure, but because those who do not know how to
                            pursue pleasure rationally encounter consequences that are extremely.
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Intro -->

    <!-- Gallery -->
    <section class="about-one pt-5 pb-5">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row clearfix align-items-center">
                    <!--Image Col-->
                    <div class="image-col col-lg-6 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/facilities/gallery1.png') }}" alt=""
                                title="">
                        </div>
                    </div>
                    <!--Image Col-->
                    <div class="image-col col-lg-6 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/facilities/gallery.png') }}" alt=""
                                title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->

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
                                        src="{{ asset('assets/front/images/hotel/facilities/icon/' . $facility->photo) }}"
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
