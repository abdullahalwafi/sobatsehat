<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;

    // tabel
    protected $table = 'lokasi';

    // bikin kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'alamat',
        'kota',

    ];
    // bikin fungsi produk untuk relasi has many


}