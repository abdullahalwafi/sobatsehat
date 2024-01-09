<?php

namespace App\Models;

use App\Http\Controllers\KategoriController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kegiatan extends Model
{
    use HasFactory;

    // Hubungi dengan tabel produk
    protected $table = 'kegiatan';

    // matiin fitur timestamps

    // Tentuin kolom-kolom yang bisa diisi
    protected $guarded = ['id'];

    //buat fungsi kasih relasi ke kategoriproduk
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
