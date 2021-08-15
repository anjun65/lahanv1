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
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul Kegiatan</label>
                                            <input disabled type="text" name="judul" class="form-control" required value="{{ $item->judul }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Awal Pelaksanaan</label>
                                            <input disabled type="email" name="awal_pelaksanaan" class="form-control" required value="{{ $item->awal_pelaksanaan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akhir Pelaksanaan</label>
                                            <input disabled type="email" name="akhir_pelaksanaan" class="form-control" required value="{{ $item->akhir_pelaksanaan }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Blok</label>
                                            <input disabled type="email" name="blok" class="form-control" required value="{{ $item->blok }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Peneliti</label>
                                            <input disabled type="email" name="blok" class="form-control" required value="{{ $item->user->name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Areal</label>
                                            <input disabled type="email" name="areal" class="form-control" required value="{{ $item->areal }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input disabled type="email" name="areal" class="form-control" required value="{{ $item->keterangan_areal }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Peralatan :</label>

                                            <div class="input-group mb-3">
                                                <div class="form-check mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_ember) checked="true" @endisset id="check_ember">
                                                        <label class="form-check-label" for="check_ember">
                                                            Ember
                                                        </label>
                                                        
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_ember" value="{{ $item->details->jumlah_ember }}" class="form-control">
                                                </div>

                                                <div class="form-check mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_polibag) checked="true" @endisset id="check_polibag">
                                                        <label class="form-check-label" for="check_polibag">
                                                            Polibag
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_polibag" value="{{ $item->details->jumlah_polibag }}" class="form-control">
                                                </div>

                                                <div class="form-check mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_pot) checked="true" @endisset id="check_pot">
                                                        <label class="form-check-label" for="check_pot">
                                                            Pot/drum
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_pot" value="{{ $item->details->jumlah_pot }}" class="form-control">
                                                </div>

                                                <div class="form-check mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_mulsa) checked="true" @endisset id="check_mulsa">
                                                        <label class="form-check-label" for="check_mulsa">
                                                            Mulsa
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_mulsa" value="{{ $item->details->jumlah_mulsa }}" class="form-control">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Benih dan Pupuk :</label>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_benih) checked="true" @endisset id="check_benih">
                                                        <label class="form-check-label" for="check_benih">
                                                            Benih
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_benih" value="{{ $item->details->jumlah_benih }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_petroganik) checked="true" @endisset id="check_petroganik">
                                                        <label class="form-check-label" for="check_petroganik">
                                                            Petroganik
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_petroganik" value="{{ $item->details->jumlah_petroganik }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_phonska) checked="true" @endisset id="check_phonska">
                                                        <label class="form-check-label" for="check_phonska">
                                                            Phonska
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_phonska" value="{{ $item->details->jumlah_phonska }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_urea) checked="true" @endisset id="check_urea">
                                                        <label class="form-check-label" for="check_urea">
                                                            Urea
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_urea" value="{{ $item->details->jumlah_urea }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_za) checked="true" @endisset id="check_za">
                                                        <label class="form-check-label" for="check_za">
                                                            ZA
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_za" value="{{ $item->details->jumlah_za }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_zk) checked="true" @endisset id="check_zk">
                                                        <label class="form-check-label" for="check_zk">
                                                            ZK
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_zk" value="{{ $item->details->jumlah_zk }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_kci) checked="true" @endisset id="check_kci">
                                                        <label class="form-check-label" for="check_kci">
                                                            KCI
                                                        </label>
                                                        <input disabled placeholder="Jumlah" type="number" name="jumlah_kci" value="{{ $item->details->jumlah_kci }}" class="form-control">
                                                </div>

                                                <div class="form-check mb-3 mr-4">
                                                        <input class="form-check-input" type="checkbox" @isset($item->details->jumlah_lain) checked="true" @endisset id="check_lain">
                                                        <label class="form-check-label" for="check_lain">
                                                            Lainnya
                                                        </label>
                                                        <input disabled type="text" placeholder="Keterangan" name="text_lain"  value="{{ $item->details->text_lain }}" class="form-control mb-3">
                                                        <input disabled type="number" placeholder="Jumlah" name="jumlah_lain" value="{{ $item->details->jumlah_lain }}" class="form-control mb-3">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Sarana Lain :</label>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" @if($item->details->pestisida != 0) checked="true" @endif name="pestisida" id="check_pestisida">
                                                        <label class="form-check-label" for="check_pestisida">
                                                            Pestisida sesuai kebutuhan
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" @if($item->details->herbisida != 0) checked="true" @endif name="herbisida" id="check_herbisida">
                                                        <label class="form-check-label" for="check_herbisida">
                                                            Herbisida sesuai kebutuhan
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" @if($item->details->fungisida != 0) checked="true" @endif name="fungisida" id="check_fungisida">
                                                        <label class="form-check-label" for="check_fungisida">
                                                            Fungisida sesuai kebutuhan
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" @if($item->details->plastik_barrier != 0) checked="true" @endif name="plastik_barrier" id="check_plastik">
                                                        <label class="form-check-label" for="check_plastik">
                                                            Plastik Barier
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" @if($item->details->jaring_burung != 0) checked="true" @endif name="jaring_burung" id="check_jaring">
                                                        <label class="form-check-label" for="check_jaring">
                                                            Jaring Burung
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="form-check mb-3 mr-4">
                                                    <input class="form-check-input" type="checkbox" @isset($item->details->sarana_lain) checked="true" @endisset name="check_sarana_lain" id="check_sarana_lain">
                                                    <label class="form-check-label" for="check_sarana_lain">
                                                        Lainnya
                                                    </label>
                                                    <input disabled type="text" placeholder="Keterangan" name="sarana_lain" value="{{ $item->details->sarana_lain }}" class="form-control mb-3">
                                            </div>

                                    

                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <input disabled type="text" name="catatan" value="{{ $item->catatan_staf_muda }}" class="form-control mb-3">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" required class="form-control">
                                                <option value="{{  $item->status }}" selected>Tidak diganti</option>
                                                <option value="Diajukan">Diajukan</option>
                                                <option value="Disetujui">Disetujui</option>
                                                <option value="Revisi">Revisi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5">
                                            Save now
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection