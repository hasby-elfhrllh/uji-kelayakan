<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = [
        'id_inventaris', 'nama', 'keterangan', 'jumlah', 'id_jenis', 'tgl_register', 'id_ruang'
    ];
}
