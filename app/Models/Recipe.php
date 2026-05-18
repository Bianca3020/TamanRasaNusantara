<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'bahan',
        'langkah',
        'gambar',
        'kategori'
    ];
}