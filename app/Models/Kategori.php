<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // tabel
    protected $table = 'kategori';

    // bikin kolom yang bisa diisi
    protected $fillable = [
        'nama_kategori',
    ];
    // bikin fungsi produk untuk relasi has many


}
