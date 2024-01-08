@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="banner-two">
        <div class="banner-container">
            <div class="banner-slider">
                <div class="swiper-wrapper">
                    <!--Slide Item-->
                    <div class="swiper-slide slide-item">
                        <div class="image-layer"
                            style="background-image: url({{ asset('/assets/front/images/hotel/room.jpg') }});"></div>
                        <div class="auto-container">
                            <div class="content-box">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--End Banner Section -->

    <!-- Intro -->
    <section class="intro-section">
        <div class="auto-container">
            <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h2><span>Welcome To Nusantara Boarding House</span></h2>
            </div>
            <div class="text-content">
                <p>
                    Runt ut labore et dolore magna aliqua enim ad minim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat luptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                    omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.
                </p>
            </div>
    </section>
    <!-- End Intro -->

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
                            <img style="border-radius: 12px;" src="{{ asset('/assets/front/images/hotel/service.jpg') }}"
                                alt="" title="">
                        </div>
                        <div class="text-content text-center">
                        </div>
                        <h4 class="text-center mt-2">24/7 Room Dining</h4>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12">
                        <div class="image-box">
                            <img style="border-radius: 12px;" src="{{ asset('/assets/front/images/hotel/laundry.jpeg') }}"
                                alt="" title="">
                        </div>
                        <h4 class="text-center mt-2">Laundry and Cleaning Service</h4>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12">
                        <div class="image-box">
                            <img style="border-radius: 12px;"
                                src="{{ asset('/assets/front/images/hotel/reservation.png') }}" alt=""
                                title="">
                        </div>
                        <h4 class="text-center mt-2">Concierge Service</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Facilities -->
    <section class="about-one pt-5 pb-5">
        <div class="auto-container">
            <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h2><span>We Organize Most Popular Facilities To Our Customer</span></h2>
            </div>
            <div class="row clearfix">
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box rounded-5">
                            <img style="border-radius: 12px;" src="{{ asset('assets/front/images/hotel/restourant.jpg') }}"
                                alt="" title="">
                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="title-box">
                        <div class="subtitle"></div>
                        <h3><span>Restourant</span></h3>
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
            <div class="row clearfix">
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box rounded-5">
                            <img style="border-radius: 12px;" src="{{ asset('/assets/front/images/hotel/pool.jpg') }}"
                                alt="" title="">
                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="title-box">
                        <div class="subtitle"></div>
                        <h3><span>Swiming Pool</span></h3>
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
            <div class="row clearfix">
                <!--Image Col-->
                <div class="image-col col-lg-6 col-md-12 col-sm-12 mb-5 align-items-center">
                    <div class="inner" data-wow-duration="1500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image-box rounded-circle">
                            <img style="border-radius: 12px;" src="{{ asset('/assets/front/images/hotel/gym.jpg') }}"
                                alt="" title="">
                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12 mb-5">
                    <div class="title-box">
                        <div class="subtitle"></div>
                        <h3><span>Gym</span></h3>
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

    <!-- Gallery -->
    <section class="about-one pt-5 pb-5">
        <!-- <div class="bg-grad-right"><img src="images/background/bg-gradient-18.png" alt="" title=""></div> -->
        <div class="auto-container">
            <div class="title-box centered wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h2><span>Gallery</span></h2>
            </div>
            <div class="outer-box">
                <div class="row clearfix align-items-center">
                    <!--Image Col-->
                    <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/gallery6.jpg') }}" alt=""
                                title="">
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/gallery3.jpg') }}" alt=""
                                title="">
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/gallery5.jpg') }}" alt=""
                                title="">
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/gallery2.jpg') }}" alt=""
                                title="">
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/gallery4.jpg') }}" alt=""
                                title="">
                        </div>
                    </div>
                    <div class="image-col col-lg-4 col-md-12 col-sm-12 mb-5 ">
                        <div class="image-box">
                            <img class="" style="border-radius: 12px;"
                                src="{{ asset('assets/front/images/hotel/gallery1.jpg') }}" alt=""
                                title="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->
@endsection
@push('scripts')
@endpush
