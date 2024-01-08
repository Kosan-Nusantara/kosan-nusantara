@extends('app.layout.front')
@push('styles')
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/hotel/about/banner.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Choose Your Dream Room</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Packages Section-->
    <section class="packages-three pt-5">
        <div class="auto-container">
            <div class="packages">
                <div class="row clearfix">
                    @foreach ($boardings as $boarding)
                        <!--Block-->
                        <div class="package-block col-lg-4 col-md-6 col-sm-12">
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
