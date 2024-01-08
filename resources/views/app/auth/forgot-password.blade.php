@extends('app.layout.auth')
@push('styles')
    <style>
        img {
            width: 550px;
        }

        .align-center {
            display: block;
            margin: 0px auto;
            padding-top: 30px;
        }

        .btn {
            background-color: #00b2ff;
            color: #fff
        }

        .col-lg-6 {
            background-color: #00b2ff;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-right: 5px;
        }

        #auth-left {
            background-color: #fff;
            width: 665px;
            height: 640px;

        }
    </style>
@endpush

@section('content')
    <div class="row h-100">
        <div class="col-lg-6 col-12" style="background-color: #00b2ff;">
            <img src="img/WhatsApp Image 2023-10-20 at 22.34.32.jpeg" alt="logo" class="align-center">
        </div>

        <div class="col-lg-6 d-none d-lg-block">
            <div id="auth-left">
                <!-- <div class="auth-logo">
                                <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo"></a>
                            </div> -->
                <h1 class="auth-title text-center mb-5 mt-5"
                    style="font-style: poppins semibold; font-size: 52px; color: black;">Send link to email</h1>
                <!-- <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p> -->

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-right mb-4">
                        <input type="email" id="email" name="email"
                            class="form-control form-control-xl rounded-pill" placeholder="Email"
                            style="padding-left: 30px;
                    padding-right: 40px;">
                        <div class="form-control-icon" style="padding-right: 25px;">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-lg mt-5 rounded-pill btn-center">Send to
                            email</button>

                    </div>
                </form>
                <!-- <div class="text-center mt-5 text-lg fs-4">
                                <p class='text-gray-600'>Remember your account? <a href="auth-login.html" class="font-bold">Log in</a>.
                                </p>
                            </div> -->
            </div>

        </div>
    </div>
@endsection

@push('scripts')
@endpush
