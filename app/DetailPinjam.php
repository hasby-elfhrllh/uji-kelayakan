<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    protected $fillable = [
        'id_detail_pinjaman', 'id_inventaris', 'jumlah',
    ];
}
