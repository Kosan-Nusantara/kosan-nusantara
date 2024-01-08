@extends('app.layout.front')
@push('styles')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/v1/transactions"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
@endpush
@section('content')
    <!-- Banner Section -->
    <section class="inner-banner d-none">
        <div class="image-layer" style="background-image: url({{ asset('assets/front/images/hotel/about/banner.png') }});">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Booking</h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Intro -->
    <section class="packages-three pt-5">
        <div class="auto-container">
            <div class="row clearfix ">
                <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center align-items-center"
                    style="background-color: #00B2FF;">
                    <img class="img-fluid" src="{{ asset('assets/front/images/hotel/co/bg1.png') }}" alt="">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                        <h3 class="text-center">Quick Reservation</h3>
                        <div class="form-box site-form">
                            <form method="post" action="{{ route('payment') }}">
                                @csrf
                                <input type="text" name="id" value="{{ $room->id }}" hidden>
                                <input type="text" name="price" value="{{ $room->price }}" hidden>
                                <div class="row clearfix justify-content-center">
                                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                                placeholder="Jhon Smith" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="email" placeholder="jhon@smith.com"
                                                value="{{ old('email', $user->email) }}" required="">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="phone" value="" placeholder="08221133445566"
                                                required="">
                                        </div>
                                    </div> --}}
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input class="datepicker" type="text" name="check_in" value=""
                                                placeholder="Check in" value="{{ old('check_in') }}" required>
                                            <i class="alt-icon fa fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input class="datepicker" type="text" name="check_out" value=""
                                                placeholder="Check Out" value="{{ old('check_out') }}" required>
                                            <i class="alt-icon fa fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="room" value="{{ old('room', $room->name) }}"
                                                placeholder="Room Type" required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="price"
                                                value="Rp. {{ number_format($room->price, 0, ',', '.') }}"
                                                placeholder="Price" disabled>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="type" value="" placeholder="Adult"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Start writing your message here" required=""></textarea>
                                        </div>
                                    </div> --}}
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <a href="{{ url()->previous() }}" type="submit" class="theme-btn btn-style-one"
                                            style="color: black; background-color: #00B2FF; border: none;">
                                            <span>Cancel</span>
                                        </a>
                                    </div>
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one"
                                            style="color: black; background-color: #00B2FF; border: none;">
                                            <span>Book Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Intro -->
@endsection
@push('scripts')
@endpush
