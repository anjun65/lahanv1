<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor',
        'tanggal',
        'judul',
        'awal_pelaksanaan',
        'akhir_pelaksanaan',
        'blok',
        'areal',
        'keterangan_areal',
        'peneliti',
        'details_id',
        'catatan_staf_muda',
        'catatan_vp',
        'status',
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'peneliti');
    }

    public function details()
    {
        return $this->hasOne(RequestDetail::class, 'request_id', 'id');
    }
}
