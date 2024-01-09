@extends('app.layout.admin')
@push('styles')
    <style>
        .imagePreview {
            border-radius: 25px;
            max-width: 300px;
            max-height: 300px
        }
    </style>
@endpush

@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Fasilitas Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('admin.facility.store') }}" method="post"
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
                                        <div class="col-12 d-flex justify-content-end">
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
