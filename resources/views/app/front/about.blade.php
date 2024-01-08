@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('/assets/front/images/hotel/about/banner.png') }});">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1>About Us</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Facilities -->
    <section class="about-one pt-5 pb-5">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box">
                            <img style="border-radius: 25px;"
                                src="{{ asset('/assets/front/images/hotel/about/about.png') }}" alt=""
                                title="">
                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="title-box">
                        <div class="subtitle"></div>
                        <h3><span>Most Safe & Rated
                                Boarding in Ciamis.</span></h3>
                    </div>
                    <div class="features">
                        <div class="inner-box">
                            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
                                minima nostrum nesciunt harum soluta, asperiores quibusdam aliquam exercitationem
                                est eius rerum temporibus repudiandae officiis incidunt delectus facere ipsa?
                                Repudiandae quia architecto, iure vel, obcaecati, sapiente deleniti dolores neque
                                quod vero odit dolorem totam aliquid incidunt possimus quibusdam repellendus harum
                                ipsum.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Facilities -->

    <!--Packages Section-->
    <section class="packages-section" style="background-color: white;">
        <div class="auto-container">
            <div class="title-box">
                <h2><span>Our Choice</span></h2>
                <span>The Best Room Just For You!</span>
            </div>
            <div class="carousel-box">
                <div class="packages-carousel">
                    @foreach ($boardings as $boarding)
                        <!--Block-->
                        <div class="package-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a
                                            href="{{ route('package.detail', ['id' => $boarding->id]) }}"><img
                                                src="{{ asset('/assets/front/images/hotel/room/' . $boarding->photo) }}"
                                                alt=""></a></div>
                                </div>
                                <div class="lower-box">
                                    <div class="location">{{ $boarding->name }}</div>
                                    <div class="text mb-1">
                                        <a class="mb-5" href="{{ route('package.detail', ['id' => $boarding->id]) }}">
                                            <span> {{ $boarding->description }}</span>
                                        </a>
                                    </div>

                                    <div class="info clearfix">
                                        <div class="duration">
                                            <h6 style="color: #00B2FF;">
                                                <h6 style="color: #00B2FF;">Rp.
                                                    {{ number_format($boarding->price, 0, ',', '.') }}</h6>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class=" clearfix pd-3">
                                        <div class="rating mb-2">
                                            <a href="#" class="theme-btn">
                                                <strong>5.0</strong>
                                                <i class="fa fa-star" style="color: goldenrod;"></i>
                                                <i class="fa fa-star" style="color: goldenrod;"></i>
                                                <i class="fa fa-star" style="color: goldenrod;"></i>
                                                <i class="fa fa-star" style="color: goldenrod;"></i>
                                                <i class="fa fa-star" style="color: goldenrod;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
