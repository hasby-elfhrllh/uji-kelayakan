<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $fillable = [
        'id_jenis', 'nama_jenis', 'keterangan',
    ];
}
