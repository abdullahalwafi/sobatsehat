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
    protected $fillable = [
        'judul',
        'waktu',
        'caption',
        'user_id'
    ];

    //buat fungsi kasih relasi ke lokasiproduk
    public function lokasi(){
        return $this->belongsTo(lokasi::class);
    }


    // // Menentukan nama tabel yang terhubung dengan model ini
    // protected $table = 'berita';

    // // Kolom-kolom yang dapat diisi secara massal
    // protected $fillable = [
    //     'judul',             // judul berita
    //     'waktu',       // waktu berita
    //     'caption',       // caption berita
    //     'user_id',             // user_ide
    // ];

    // // Definisi relasi "belongs to" dengan model lokasiProduk
    // public function berita()
    // {
    //     return $this->belongsTo(berita::class);
    // }

	// 	// Bikin fungsi nampilin semua data
	// 	public static function getAllberita()
    // {
    //     // return DB::table('produk')->get();

	// 			// Mengambil semua data produk dan menggabungkannya dengan lokasi produk terkait
    //     $alldata = DB::table('berita')
    //         ->join('berita', 'produk.lokasi_produk_id', '=', 'lokasi_produk.id')
    //         ->select('produk.*', 'lokasi_produk.nama as nama_lokasi')
    //         ->get();
    //     return $alldata;
    // }
}