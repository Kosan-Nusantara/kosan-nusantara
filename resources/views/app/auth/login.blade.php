@extends('app.layout.auth')
@push('styles')
    <style>
        .bg-blue {
            background-color: #00b2ff;
        }

        .bg-white {
            background-color: #fff;
        }

        .kolomkiri {
            background-color: #00b2ff;
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;
        }

        #auth-left {
            background-color: #fff;
            width: 665px;
            height: 633px;
        }

        h1 {
            color: black;
            font-style: poppins italic;

        }

        .btn {
            background-color: #00b2ff;
            color: #fff;
        }

        .align-center {
            display: block;
            margin: 0px auto;
            margin-top: 60px;
        }

        .Remember-forgot {
            display: flex;
            justify-content: space-between;
            margin: -15px 0 15px;
        }

        .Remember-forgot input {
            margin-right: 15px;
        }
    </style>
@endpush

@section('content')
    {{-- <div class="row h-100">
        <div class="col-lg-6 d-none d-lg-block bg-blue">
            <div id="auth-right bg-blue"></div>
        </div>
        <div class="col-lg-6 col-12 bg-white">
            <div id="auth-left">
                <div class="auth-logo">
                </div>
                <h1 class="auth-title text-center mb-5 pb-5">Login</h1>

                <form action="index.html">
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="text" class="form-control form-control-xl"
                            style="background-color: #fff; border-radius:25px;" placeholder="Username" />
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="password" class="form-control form-control-xl"
                            style="background-color: #fff; border-radius:25px;" placeholder="Password" />
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <div class="d-flex justify-content-start flex-grow-1">
                            <p class="font-bold">
                                <a href="auth-forgot-password.html">Forgot password?</a>
                            </p>
                        </div>
                        <div class="d-flex justify-content-end align-item-center">
                            <div class="form-check">
                                <input class="form-check-input me-2" type="checkbox" style="background-color: #fff;"
                                    value="" id="flexCheckDefault" />
                                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center login">
                        <button class="btn btn-primary btn-custom btn-lg shadow-lg mt-5" style="border-radius: 25px;">
                            Login
                        </button>
                    </div>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">
                        Don't have an account?
                        <a href="auth-register.html" class="font-bold">Sign up</a>.
                    </p>
                    <p>
                        <a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row h-100 justify-content-center">
        <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center align-items-center"
            style="background-color: #00b2ff;">
            <img src="{{ asset('assets/images/png/7.png') }}" alt="logo" class="align-center img-fluid">
        </div>
        <div class="kolomkiri col-lg-6 col-12 " style="background-color: white;">
            <div id="auth-left">
                <h1 class="auth-title text-center mb-5">Login</h1>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="text" id="user" name="user"
                            class="form-control form-control-xl rounded-pill" placeholder="Username"
                            style="padding-left: 30px;
                        padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="password" id="password" name="password"
                            class="form-control form-control-xl rounded-pill" placeholder="Password"
                            style="padding-left: 30px; padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-eye"></i>
                        </div>
                    </div>
                    <div class="Remember-forgot">
                        <label><input type="checkbox">Remember Me?</label>
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-lg mt-5 rounded-pill btn-center">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
