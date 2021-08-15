@extends('layouts.app')


@section('title')
    Rekap Permintaan
@endsection

@section('content')

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <br/>
                <div class="dashboard-heading">
                    <h3 class="dashboard-title">Rekap Permintaan</h3>
                    <p class="dashboard-subtitle">
                        Rekap Permintaan yang telah diajukan peneliti
                    </p>
                </div>
                <br/>

                <div class="dashboard-content">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link active"
                                id="diajukan-tab"
                                data-toggle="tab"
                                href="#diajukan"
                                role="tab"
                                aria-controls="diajukan"
                                aria-selected="true"
                                >Sedang diajukan</a
                            >
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="disetujui-tab"
                                data-toggle="tab"
                                href="#disetujui"
                                role="tab"
                                aria-controls="disetujui"
                                aria-selected="false"
                                >Disetujui</a
                            >
                        </li>

                        <li class="nav-item" role="presentation">
                            <a
                                class="nav-link"
                                id="revisi-tab"
                                data-toggle="tab"
                                href="#revisi"
                                role="tab"
                                aria-controls="revisi"
                                aria-selected="false"
                                >Revisi</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="diajukan"
                            role="tabpanel"
                            aria-labelledby="diajukan-tab"
                        >
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    @forelse ($diajukan as $diajukan)
                                    <a
                                        class="card card-list d-block"
                                        href="{{ route('request-show', $diajukan->id) }}"
                                    >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    {{ $diajukan->blok }}
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $diajukan->judul }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $diajukan->awal_pelaksanaan }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $diajukan->akhir_pelaksanaan }}
                                                </div>
                                                <div class="col-md-1 d-none d-md-block">
                                                    <img
                                                        src="images/dashboard-arrow-right.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    @empty
                                    <div class="col-12 mt-2 text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100">
                                        Tidak ada permintaan yang diajukan
                                    </div>
                                    
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        
                        <div
                        class="tab-pane fade"
                        id="disetujui"
                        role="tabpanel"
                        aria-labelledby="disetujui-tab"
                        >
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    @forelse ($disetujui as $disetujui)
                                    <a
                                        class="card card-list d-block"
                                        href="{{ route('request-show', $disetujui->id) }}"
                                    >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    {{ $disetujui->blok }}
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $disetujui->judul }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $disetujui->awal_pelaksanaan }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $disetujui->akhir_pelaksanaan }}
                                                </div>
                                                <div class="col-md-1 d-none d-md-block">
                                                    <img
                                                        src="images/dashboard-arrow-right.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </a>

                                    @empty
                                    <div class="col-12 mt-2 text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100">
                                        Tidak ada permintaan yang disetujui
                                    </div>
                                    
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <div
                        class="tab-pane fade"
                        id="revisi"
                        role="tabpanel"
                        aria-labelledby="revisi-tab"
                        >
                            <div class="row mt-3">
                                <div class="col-12 mt-2">
                                    @forelse ($revisi as $revisi)
                                    <a
                                        class="card card-list d-block"
                                        href="{{ route('request-show', $revisi->id) }}"
                                    >
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    {{ $revisi->blok }}
                                                </div>
                                                <div class="col-md-4">
                                                    {{ $revisi->judul }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $revisi->awal_pelaksanaan }}
                                                </div>
                                                <div class="col-md-3">
                                                    {{ $revisi->akhir_pelaksanaan }}
                                                </div>
                                                <div class="col-md-1 d-none d-md-block">
                                                    <img
                                                        src="images/dashboard-arrow-right.svg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </a>

                                    @empty
                                    <div class="col-12 mt-2 text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100">
                                        Tidak ada permintaan yang perlu direvisi
                                    </div>
                                    
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection