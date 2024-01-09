@extends('app.layout.admin')
@push('styles')
@endpush

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Kosan Form</h4>
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
                                            <div id="facilityDropdowns"></div>
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary mt-2"
                                                    id="addFacilityBtn">Tambah
                                                    Fasilitas</button>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 justify-content-center">
                                            <div class="form-group">
                                                {{-- <label for="image" class="form-label">Photo</label> --}}
                                                <div class="d-flex justify-content-center align-items-center flex-column">
                                                    <input class="form-control" type="file" id="image" name="image"
                                                        onchange="previewImage()" value="{{ old('image') }}" hidden>
                                                    <button type="button" class="btn btn-primary mt-2"
                                                        onclick="document.getElementById('image').click()">Choose
                                                        Image</button>
                                                </div>
                                                <div
                                                    class="mt-2 d-flex justify-content-center align-items-center flex-column">
                                                    <img id="imagePreview"
                                                        src="{{ asset('/uploads/images/thumbnail.jpg') }}" alt="Preview"
                                                        style="max-width: 300px; max-height: 300px; border-radius: 10px;">
                                                </div>
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
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
            var facilityCounter = 1;
            var maxFacilities = 6;
            var facilitiesData = {!! json_encode($facilities) !!};

            $('#addFacilityBtn').on('click', function() {
                if (facilityCounter <= maxFacilities) {
                    var newFacilityDropdown = `
                    <div class="mt-3">
                        <label for="facility_${facilityCounter}" class="form-label">Fasilitas ${facilityCounter}</label>
                        <select class="form-select" id="facility_${facilityCounter}" name="facilities[]">
                            <option value="">Pilih Fasilitas</option>`;

                    facilitiesData.forEach(function(facility) {
                        newFacilityDropdown +=
                            `<option value="${facility.id}">${facility.name}</option>`;
                    });

                    newFacilityDropdown += `</select></div>`;
                    $('#facilityDropdowns').append(newFacilityDropdown);

                    facilityCounter++;
                } else {
                    Swal.fire('Peringatan', 'Maksimal 6 fasilitas.', 'warning');
                }
            });

        });

        function previewImage() {
            var input = document.getElementById('image');
            var preview = document.getElementById('imagePreview');

            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "{{ asset('/uploads/images/thumbnail.jpg') }}";
                preview.style.display = 'block';
            }
        }
    </script>
@endpush
