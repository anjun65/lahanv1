<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'nomor' => 'required|string|max:50',
            // 'tanggal' => 'required|string|max:50',
            // 'judul' => 'required|string|max:50',
            // 'mulai_pelaksanaan' => 'required|string|max:50',
            // 'akhir_pelaksanaan' => 'required|string|max:50',
            // 'blok' => 'required|string|max:50',
            // 'peneliti' => 'required|string|max:50',
            // 'areal' => 'required|string|max:50',
            // 'keterangan_areal' => 'required|string|max:50',

            // 'jumlah_ember' => 'integer',
            // 'jumlah_ember' => 'integer',
            // 'jumlah_polibag' => 'integer',
            // 'jumlah_pot' => 'integer',
            // 'jumlah_mulsa' => 'integer',
            // 'jumlah_benih' => 'integer',
            // 'jumlah_petroganik' => 'integer',
            // 'jumlah_phonska' => 'integer',
            // 'jumlah_urea' => 'integer',
            // 'jumlah_za' => 'integer',
            // 'jumlah_zk' => 'integer',
            // 'jumlah_kci' => 'integer',
            // 'benih_lain' => 'string',
            // 'jumlah_lain' => 'integer',

            // 'pestisida' => 'boolean',
            // 'herbisida' => 'boolean',
            // 'fungisida' => 'boolean',
            // 'plastik_barrier' => 'boolean',
            // 'jaring_burung' => 'boolean',
            // 'sarana_lain' => 'string',

            'description' => 'required|string|max:50',
            // 'catatan_vp' => 'required|string|max:50',
            'status' => 'required|string',
        ];
    }
}
