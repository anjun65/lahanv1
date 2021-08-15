<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Request as RequestModel;
use App\Models\RequestDetail;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

class RequestController extends Controller
{   
    public function index()
    {
        $user = Auth::user();
        $diajukan = RequestModel::where('peneliti', $user->id)->where('status', 'diajukan')->get();
        $disetujui = RequestModel::where('peneliti', $user->id)->where('status', 'disetujui')->get();
        $revisi = RequestModel::where('peneliti', $user->id)->where('status', 'revisi')->get();

        return view('pages.request',[
            'diajukan' => $diajukan,
            'disetujui' => $disetujui,
            'revisi' => $revisi,
        ]);
    }

    public function show($id)
    {
        $item = RequestModel::findOrFail($id);

        return view('pages.requestdetails', [
            'item' => $item
        ]);
    }

    public function store(Request $request)
    {
        
        // dd($request->all());
        $user = Auth::user();
        $keterangan = Str::upper($request->panjang).' m x '.Str::upper($request->lebar).' m';

        $new_book = RequestModel::create([
            'judul' =>  $request->judul,
            'awal_pelaksanaan' => $request->awal_date,
            'akhir_pelaksanaan' => $request->akhir_date,
            'areal' => $request->areal,
            'keterangan_areal' => $keterangan,
            'blok' =>  $request->blok,
            'peneliti' =>  Auth::user()->id,
            'judul' =>  $request->judul,
            'status' =>  'diajukan',
        ]);

        $new_book_detail = RequestDetail::create([
            'request_id' => $new_book->id,
            'jumlah_ember' =>  $request->jumlah_ember,
            'jumlah_polibag' =>  $request->jumlah_polibag,
            'jumlah_pot' =>  $request->jumlah_pot,
            'jumlah_mulsa' =>  $request->jumlah_mulsa,
            'jumlah_benih' =>  $request->jumlah_benih,
            'jumlah_petroganik' =>  $request->jumlah_petroganik,
            'jumlah_phonska' =>  $request->jumlah_phonska,
            'jumlah_urea' =>  $request->jumlah_urea,
            'jumlah_za' =>  $request->jumlah_za,
            'jumlah_zk' =>  $request->jumlah_zk,
            'jumlah_kci' =>  $request->jumlah_kci,
            'benih_lain' =>  $request->benih_lain,
            'jumlah_lain' =>  $request->jumlah_lain,
            
            'pestisida' =>  $request->has('pestisida'),
            'herbisida' =>  $request->has('herbisida'),
            'fungisida' =>  $request->has('fungisida'),
            'plastik_barrier' =>  $request->has('plastik_barrier'),
            'jaring_burung' =>  $request->has('jaring_burung'),

            'sarana_lain' =>  $request->sarana_lain,
        ]);

        // $new_book->update(['details_id' => $new_book_detail->id]);
        
        return redirect()->route('request');
    }
}
