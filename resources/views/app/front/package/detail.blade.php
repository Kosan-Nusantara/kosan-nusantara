@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="tour-single-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('/assets/front/images/hotel/room/' . $boarding->photo) }});">
        </div>
        <div class="auto-container">
            <div class="content-box d-flex justify-content-center align-items-center">
                <h1 class="text-center" style="color: white;">Detail Room</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <section class="facts-section pb-5" style="background-color: white;">
        <div class="video-box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="image-box centered" style="background-color: white;">
                <!-- <img src="images/resource/image-5.jpg" alt="" title=""> -->
                <div class="text-content mt-3" style="color: black;">
                    <h3 style="font-size: 40px;">{{ $boarding->name }}</h3>
                    <p style="font-size: 32px;">{{ $boarding->description }}</p>
                    <p style="font-size: 32px; color: #00B2FF;">Rp. {{ number_format($boarding->price, 0, ',', '.') }}</p>
                    <p style="font-size: 32px;"><i class="fa fa-star" style="color: goldenrod;"></i>
                        <i class="fa fa-star" style="color: goldenrod;"></i>
                        <i class="fa fa-star" style="color: goldenrod;"></i>
                        <i class="fa fa-star" style="color: goldenrod;"></i>
                        <i class="fa fa-star" style="color: goldenrod;"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="auto-container pt-5" style="color: black;">
            <div class="title-box left wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                <h2 class="text-left"><span>Description</span></h2>
            </div>
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-5">
                    <div class="image-box centered" style="background-color: white;">
                        <img src="{{ asset('assets/front/images/hotel/detail/bathroom.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-5">
                    <div class="text-content" style="background-color: white;">
                        <h2>Batrhroom</h2>
                        <p style="font-size: 22px;">The premium room is equipped with a mattress,
                            an en suite bathroom with free water facilities,
                            a sitting closet and a shower. Max 2 people
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="image-box centered" style="background-color: white;">
                        <img src="{{ asset('assets/front/images/hotel/detail/kitchen.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="text-content" style="background-color: white;">
                        <h2>Kitchen</h2>
                        <p style="font-size: 22px;">Apart from that there
                            is a private kitchen with stove
                            facilities.
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="text-left mt-5"><span>Facilities</span></h2>
            <div class="row clearfix justify-content-center align-items-center">
                @foreach ($boarding->facility as $facility)
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


                {{-- <!--Block-->
                <div class="col-lg-2 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/tv.png" alt="">
                            </div>
                        </div>
                        <h5>TV</h5>
                    </div>
                </div>

                <!--Block-->
                <div class="col-lg-2 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/listrik.png" alt="">
                            </div>
                        </div>
                        <h5>Listrik</h5>
                    </div>
                </div>

                <!--Block-->
                <div class="col-lg-2 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/ac.png" alt="">
                            </div>
                        </div>
                        <h5>AC</h5>
                    </div>
                </div>

                <!--Block-->
                <div class="col-lg-2 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/wifi.png" alt="">
                            </div>
                        </div>
                        <h5>Wifi</h5>
                    </div>
                </div>
                <!--Block-->
                <div class="col-lg-2 col-md-6 col-sm-12 tour-type-block bg-blue">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon"><img src="images/hotel/facilities//icon/dispenser.png" alt="">
                            </div>
                        </div>
                        <h5>Dispenser</h5>
                    </div>
                </div> --}}
            </div>
            <div class="row clearfix centered justify-content-center align-items-center">
                <div class="col-6">
                    <a href="{{ route('booking', ['id' => $boarding->id]) }}" class="theme-btn btn-style-one">
                        <span>Book Now</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@endpush
