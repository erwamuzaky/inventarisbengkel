<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = [
        'nama_barang',
        'kategori',
        'stok',
        'satuan',
        'harga',
        'gambar'
    ];
}