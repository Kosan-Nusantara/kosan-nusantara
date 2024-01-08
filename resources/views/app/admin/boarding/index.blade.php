@extends('app.layout.admin')
@push('styles')
@endpush

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible show fade">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section">
        <div class="card">
            <div class="card-header text-end">
                <h5 class="card-title">
                    <a href="{{ route('admin.boarding.create') }}" class="btn btn-primary">Tambah Data</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-minimal">
                    <table class="table" id="transaction">
                        <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>Id</th> --}}
                                <th>Name</th>
                                {{-- <th>Room Name</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable dengan sumber data kosong
            var customTable = $('#transaction').DataTable({
                ajax: {
                    url: '{{ route('admin.boarding.datatable') }}', // Gantilah dengan URL endpoint API Anda
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: 'data'
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'id'
                    },
                ],
                columnDefs: [{
                        targets: 0,
                        orderable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        targets: 1,
                        render: function(data, type, row, meta) {
                            return `<div><span class="text-gray-800 fw-bolder">${data}</span></div>`;
                        }
                    },
                    {
                        targets: 2,
                        render: function(data, type, row, meta) {
                            var editUrl = "{{ route('admin.boarding.edit', ':id') }}";
                            editUrl = editUrl.replace(':id', row.id);
                            return `
                                <a href="${editUrl}" class="btn btn-sm btn-icon btn-light-primary mb-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                        <span class="path1"></span><span class="path2"></span>
                                    </i>
                                </a>
                                <a href="#" class="btn-delete btn btn-sm btn-icon btn-light-danger mb-1" data-id="${row.id}" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
                                    </i>
                                </a> `
                        }
                    },
                ]
            });
            $('#transaction').on('click', '.btn-delete', function(e) {
                e.preventDefault();
                var boardingId = $(this).data('id');

                if (confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')) {
                    // Gunakan SweetAlert untuk konfirmasi penghapusan
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kirim permintaan penghapusan ke server
                            $.ajax({
                                url: '{{ route('admin.boarding.destroy') }}',
                                type: 'DELETE',
                                data: {
                                    id: boardingId
                                },
                                success: function(response) {
                                    customTable.ajax.reload();
                                    Swal.fire(
                                        'Berhasil!',
                                        'Fasilitas telah dihapus.',
                                        'success'
                                    );
                                },
                                error: function(error) {
                                    Swal.fire(
                                        'Gagal!',
                                        'Terjadi kesalahan saat menghapus fasilitas.',
                                        'error'
                                    );
                                }
                            });
                        }
                    });
                }
            });
        });
    </script>
@endpush
