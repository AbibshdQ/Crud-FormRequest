<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'namapeg',
        'j_kel',
        'tgl_lahir',
        'tmpt_lahir',
        'alamat',
        'stat_peg',
        'tgl_masuk'
    ];
}
