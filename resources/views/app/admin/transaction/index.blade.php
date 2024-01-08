@extends('app.layout.admin')
@push('styles')
@endpush

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Minimal jQuery Datatable
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
                                <th>Room Name</th>
                                <th>Status</th>
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
                    url: '{{ route('admin.transaction.datatable') }}', // Gantilah dengan URL endpoint API Anda
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: 'data'
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'user_id'
                    },
                    {
                        data: 'boarding_id'
                    },
                    {
                        data: 'status'
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
                            var data = row.user.name
                            return `<div><span class="text-gray-800 fw-bolder">${data}</span></div>`;
                        }
                    },
                    {
                        targets: 2,
                        render: function(data, type, row, meta) {
                            var data = row.boarding.name
                            return `<div><span class="text-gray-800">${data}</span></div>`;
                        }
                    },
                    {
                        targets: 3,
                        render: function(data, type, row, meta) {
                            var value = '';
                            var _class = '';

                            if (row.status == 'success') {
                                var value = 'Success';
                                var _class = 'success';
                            } else if (row.status == 'unpaid') {
                                var value = 'Unpaid';
                                var _class = 'danger';
                            } else if (row.status == 'expire') {
                                var value = 'Expire';
                                var _class = 'danger';
                            } else if (row.status == 'failure') {
                                var value = 'Failure';
                                var _class = 'danger';
                            }

                            return `<div><span class="badge rounded-pill bg-${_class}">${value}</span>`;

                        }
                    },
                ]
            });

        });
    </script>
@endpush
