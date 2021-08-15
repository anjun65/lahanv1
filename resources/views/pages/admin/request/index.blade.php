@extends('layouts.admin')


@section('title')
    Permintaan Sarana Penelitian
@endsection

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Permintaan</h2>
            <p class="dashboard-subtitle">
                Permintaan Sarana Penelitian
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Mulai Pelaksanaan</th>
                                        <th>Akhir Pelaksanaan</th>
                                        <th>Peneliti</th>
                                        <th>Blok</th>   
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('addon-scripts')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}'
            },
            columns: [
                {data: 'id', name:'id'},
                {data: 'judul', name:'judul'},
                {data: 'awal_pelaksanaan', name:'awal_pelaksanaanemail'},
                {data: 'akhir_pelaksanaan', name:'akhir_pelaksanaan'},
                {data: 'peneliti', name:'peneliti'},
                {data: 'blok', name:'blok'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endpush