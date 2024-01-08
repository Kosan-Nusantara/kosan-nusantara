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
            <div class="title-box centered">
                @if ($result == 'finish')
                    <div class="subtitle">
                        <span style="color: #00B2FF">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#00B2FF"
                                class="bi bi-bag-check-fill mb-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg>
                        </span> <br> Payment Successful
                    </div>
                    <h6 style="margin-bottom: 0;"><i class="bg-vector"></i><span>Thank You, Your Transaction Has Been
                            Successful</span></h6>
                    <br><span style="margin-top: -0;">Transaction Code: {{ $order_id }}</span>
                @elseif ($result == 'unfinish')
                    <div class="subtitle">
                        <span style="color: #f0df26">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#f0df26"
                                class="bi bi-bag-x-fill mb-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293z" />
                            </svg>
                        </span> <br> Payment Unfinish
                    </div>
                    <h6 style="margin-bottom: 0;"><i class="bg-vector"></i><span>We are sorry your transaction unfinish,
                            Please Contact Us!!! </span></h6>
                    <br><span style="margin-top: -0;">Transaction Code: {{ $order_id }}</span>
                @else
                    <div class="subtitle">
                        <span style="color: #f02645">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#f02645"
                                class="bi bi-bag-x-fill mb-3" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293z" />
                            </svg>
                        </span> <br> Payment Failed
                    </div>
                    <h6 style="margin-bottom: 0;"><i class="bg-vector"></i><span>We are sorry your transaction failed,
                            Please Try Again </span></h6>
                    <br><span style="margin-top: -0;">Transaction Code: {{ $order_id }}</span>
                @endif

            </div>
    </section>
    <!-- End Intro -->
@endsection
@push('scripts')
@endpush
