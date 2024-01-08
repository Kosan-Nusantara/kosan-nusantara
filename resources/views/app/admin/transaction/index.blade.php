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
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id</th>
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
@endpush
