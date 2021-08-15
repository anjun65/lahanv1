<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'jumlah_ember',
        'jumlah_polibag',
        'jumlah_pot',
        'jumlah_mulsa',
        'jumlah_benih',
        'jumlah_petroganik',
        'jumlah_phonska',
        'jumlah_urea',
        'jumlah_za',
        'jumlah_zk',
        'jumlah_kci',
        'benih_lain',
        'jumlah_lain',
        'pestisida',
        'herbisida',
        'fungisida',
        'plastik_barrier',
        'jaring_burung',
        'sarana_lain',
    ];

    protected $hidden = [

    ];

}
