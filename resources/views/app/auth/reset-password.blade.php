@extends('app.layout.auth')
@push('styles')
    <style>
        #auth-left {
            background-color: #fff;
        }

        .kolomkiri {
            padding-top: 40px;
        }

        form {
            padding-top: 10px;
        }

        .btn {
            background-color: #00b2ff;
            color: #fff;
            inline-size: 200px;
        }

        img {
            width: 550px;
        }

        .align-center {
            display: block;
            margin: 0px auto;
            padding-top: 30px;
        }
    </style>
@endpush

@section('content')
    <div class="row h-100">
        <div class="kolomkanan col-lg-6 d-lg-block" style="background-color: #00b2ff;">
            <img src="img/WhatsApp Image 2023-10-20 at 22.34.32.jpeg" alt="logo" class="align-center">
        </div>
        <div class="kolomkiri col-lg-6" style="background-color: #fff;">
            <div id="auth-left">
                <!-- <div class="auth-logo">
                                    <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo"></a>
                                </div> -->
                <h1 class="auth-title text-center" style="font-style: poppins semibold; font-size: 52px; color: black;">
                    Change a password</h1>
                <!-- <p class="auth-subtitle mb-5">Input your data to register to our website.</p> -->

                <form action="index.html">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-group position-relative has-icon-right mb-4 mt-5">
                        <input type="text" id="email" name="email"
                            class="form-control form-control-xl rounded-pill" placeholder="Email"
                            value="{{ old('email', $request->email) }}"
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
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <a href="auth-login.html" class="btn btn-lg mt-5 rounded-pill btn-center">Reset a
                            password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
