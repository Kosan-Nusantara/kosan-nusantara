@extends('app.layout.auth')
@push('styles')
    <style>
        .btn {
            background-color: #00b2ff;
            font-size: 32px;
            margin-top: 20px;
        }

        p {
            margin-top: 10px;
        }

        .btn {
            color: #fff;
        }

        .align-center {
            display: block;
            margin: 0px auto;
            margin-top: 100px;
        }
    </style>
@endpush

@section('content')
    <div class="row h-100">
        <div class="col-lg-6 d-none d-lg-block" style="background-color: #00b2ff;">
            <img src="{{ asset('assets/images/png/5.png') }}" alt="logo" class="align-center">
        </div>
        <div class="col-lg-6 col-12" style="background-color: #fff;">
            <div id="auth-left">
                <!-- <div class="auth-logo">
                                                    <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo"></a>
                                                </div> -->
                <h1 class="auth-title text-center" style="font-style: poppins semibold; font-size: 52px; color: black;">
                    Register</h1>
                <!-- <p class="auth-subtitle mb-5">Input your data to register to our website.</p> -->

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="text" id="username" name="username"
                            class="form-control form-control-xl rounded-pill" placeholder="Username"
                            style="padding-left: 30px;
                    padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="text" id="email" name="email"
                            class="form-control form-control-xl rounded-pill" placeholder="Email"
                            style="padding-left: 30px;
                    padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="password" id="password" name="password"
                            class="form-control form-control-xl rounded-pill" placeholder="Password"
                            style="padding-left: 30px;
                    padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-eye"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control form-control-xl rounded-pill" placeholder="Confirm Password"
                            style="padding-left: 30px;
                    padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-eye"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            i agree to the term & condition
                        </label>
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button class="btn btn-lg rounded-pill btn-center" type="submit"
                            style="font-style: poppins semibold;">Sign
                            up</button>
                    </div>
                </form>
                <div class="text-center text-lg fs-6">
                    <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}" class="font-bold"
                            style="color: #00b2ff;">Login</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
