@extends('app.layout.admin')
@push('styles')
@endpush

@section('content')
    <section class="section">
        <!-- Beggin Content -->
        <div class="row">
            <div class="col-12 mb-5 d-flex justify-content-center align-items-center">
                <img class="align-center" src="./assets/images/illustration/2.png" alt="">
            </div>
            <div class="col-12 col-xl-7">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="color: #000;">
                            <div class="card-header">
                                <p class="font-bold" style="font-size: 25px;"> Overview </p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-xl-3">
                                        <p style="font-size: 15px;">
                                            Today <br> Check-In
                                        </p>
                                        <p class="font-extrabold" style=" font-size: 35px;">
                                            7
                                        </p>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <p style="font-size: 15px;">
                                            Today <br> Check-Out
                                        </p>
                                        <p class="font-extrabold" style=" font-size: 35px;">
                                            2
                                        </p>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <p style="font-size: 15px;">
                                            Total <br> Kos
                                        </p>
                                        <p class="font-extrabold" style=" font-size: 35px;">
                                            2
                                        </p>
                                    </div>
                                    <div class="col-6 col-xl-3">
                                        <p style="font-size: 15px;">
                                            Available <br> Room
                                        </p>
                                        <p class="font-extrabold" style=" font-size: 35px;">
                                            4
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="background-color: #858D9D;">
                            <div class="card-header" style="background-color: #858D9D;">
                                <p class="font-bold" style="font-size: 25px; color: white;"> Income </p>
                            </div>
                            <div class="card-body" style="color: #fff;">
                                <p class="font-light" style="font-size: 25px;">IDR</p>
                                <p class="font-light" style="font-size: 25px;">7.500.000 <i class="fa-solid fa-up-long"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="background-color: #383E49;">
                            <div class="card-header" style="background-color: #383E49;">
                                <p class="font-bold" style="font-size: 25px; color: white;"> Expand </p>
                            </div>
                            <div class="card-body" style="color: #fff;">
                                <p class="font-light" style="font-size: 25px;">IDR</p>
                                <p class="font-light" style="font-size: 25px;">7.700.000 <i class="fa-solid fa-up-long"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="background-color: #1366D9;">
                            <div class="card-header" style="background-color: #1366D9;">
                                <p class="font-bold" style="font-size: 25px; color: white;"> Profit </p>
                            </div>
                            <div class="card-body" style="color: #fff;">
                                <p class="font-light" style="font-size: 25px;">IDR</p>
                                <p class="font-light" style="font-size: 25px;">9.000.000 <i class="fa-solid fa-up-long"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-5">
                <div class="card" style="background-color: #1366D9;">
                    <div class="card-header" style="background-color: #1366D9;">
                        <p class="font-bold" style="font-size: 25px; color: #fff;"> Customer Feedback</p>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-flush " style="background-color: transparent;">
                            <li class="list-group-item d-flex justify-content-between align-items-start"
                                style="background-color: transparent; color: white; font-size: 15px;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Fabian</div>
                                    Room cleaning could be better.
                                </div>
                                <span>G2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start"
                                style="background-color: transparent; color: white; font-size: 15px;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Tita</div>
                                    Room cleaning could be better.
                                </div>
                                <span>F2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start"
                                style="background-color: transparent; color: white; font-size: 15px;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Robby</div>
                                    Room cleaning could be better.
                                </div>
                                <span>G2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start"
                                style="background-color: transparent; color: white; font-size: 15px;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Syndah</div>
                                    Room cleaning could be better.
                                </div>
                                <span>F5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start"
                                style="background-color: transparent; color: white; font-size: 15px;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Dudung</div>
                                    Room cleaning could be better.
                                </div>
                                <span>F1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start"
                                style="background-color: transparent; color: white; font-size: 15px;">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Amir</div>
                                    Room cleaning could be better.
                                </div>
                                <span>T2</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </section>
@endsection

@push('scripts')
@endpush
