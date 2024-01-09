<?php

namespace App\Models;

use App\Http\Controllers\LokasiController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class berita extends Model
{
    use HasFactory;

    // Hubungi dengan tabel produk
    protected $table = 'berita';

    // matiin fitur timestamps
    public $timestamps = false;

    // Tentuin kolom-kolom yang bisa diisi
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
