@extends('app.layout.admin')
@push('styles')
@endpush

@section('content')
    <section class="section">
        <!-- Beggin Content -->
        <p class="fw-bold" style="font-size: 40px; margin-bottom: 0px; color: #25396f;"> Edit Profile</p>
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row">
                    <div class="col-12 col-xl-12" style="height: 385px;">
                        <div class="card" style="background-color: #1366D9; margin-bottom: 0px; border-radius: 30px;">
                            <div class="card-header"
                                style="background-color: #1366D9; padding-bottom: 0px; padding-top: 45px; border-radius: 30px;">

                            </div>
                            <div class="card-body" style="padding-left: 90px; height: 360px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" style="color: #fff;">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="John"
                                                value="{{ $user->name }}"
                                                style="width: 346px; border-radius: 15px; height: 44px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="email" style="color: #fff;">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                placeholder="johnwick@gmail.com"
                                                style="width: 796px; border-radius: 15px; height: 44px;"
                                                value="{{ $user->email }}">
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="helperText" style="color: #fff;">Address</label>
                                            <input type="text" id="helperText" class="form-control"
                                                placeholder="Jl.RE Martadinata"
                                                style="width: 796px; border-radius: 15px; height: 44px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="helperText" style="color: #fff;">City</label>
                                            <input type="text" id="helperText" class="form-control"
                                                placeholder="Kab.Ciamis"
                                                style="width: 796px; border-radius: 15px; height: 44px;">
                                        </div> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="disabledInput" style="color: #fff;">Username</label>
                                            <input type="text" id="helperText" class="form-control" placeholder="Wick"
                                                value="{{ $user->username }}"
                                                style="width: 346px; border-radius: 15px; height: 44px;">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
