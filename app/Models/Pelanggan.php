<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat'
    ];

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}