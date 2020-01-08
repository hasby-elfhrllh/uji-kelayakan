<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $fillable = [
        'id_peminjaman', 'tgl_pinjam', 'tgl_kembali', 'status_peminjaman', 'id_pegawai'
    ];
}
