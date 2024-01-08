@extends('app.layout.admin')
@push('styles')
@endpush

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('admin.boarding.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" id="name" class="form-control" name="name"
                                                    placeholder="Name" value="{{ old('name') }}">
                                                <label for="name">Name</label>
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-floating">
                                                <input type="text" id="description" class="form-control"
                                                    name="description" placeholder="Description"
                                                    value="{{ old('description') }}">
                                                <label for="description">Description</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-floating">
                                                <input type="text" id="price" class="form-control" name="price"
                                                    placeholder="Price" value="{{ old('price') }}">
                                                <label for="price">Harga</label>
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group">
                                                <label for="image" class="form-label">Photo</label>
                                                <input class="form-control" type="file" id="image" name="image">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Dropdown list fasilitas -->
                                        <div class="col-12 mt-3">
                                            <button type="button" class="btn btn-primary" id="addFacilityBtn">Tambah
                                                Fasilitas</button>
                                            <div id="facilityDropdowns"></div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Counter untuk memberikan ID unik pada setiap dropdown fasilitas
            var facilityCounter = 1;
            // Batasan maksimal fasilitas
            var maxFacilities = 6;

            // Data fasilitas dari controller
            var facilitiesData = {!! json_encode($facilities) !!};

            // Event handler untuk tombol "Tambah Fasilitas"
            $('#addFacilityBtn').on('click', function() {
                // Cek apakah jumlah fasilitas sudah mencapai batas maksimal
                if (facilityCounter <= maxFacilities) {
                    var newFacilityDropdown = `
                    <div class="mt-3">
                        <label for="facility_${facilityCounter}" class="form-label">Fasilitas ${facilityCounter}</label>
                        <select class="form-select" id="facility_${facilityCounter}" name="facilities[]">
                            <option value="">Pilih Fasilitas</option>`;

                    // Tambahkan opsi fasilitas sesuai data dari array facilitiesData
                    facilitiesData.forEach(function(facility) {
                        newFacilityDropdown +=
                            `<option value="${facility.id}">${facility.name}</option>`;
                    });

                    newFacilityDropdown += `</select></div>`;
                    $('#facilityDropdowns').append(newFacilityDropdown);

                    // Increment counter
                    facilityCounter++;
                } else {
                    // Tampilkan pesan jika sudah mencapai batas maksimal
                    alert('Maksimal 6 fasilitas.');
                }
            });
        });
    </script>
@endpush