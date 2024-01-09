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
    public $timestamps = false;

    // Tentuin kolom-kolom yang bisa diisi
    protected $fillable = [
        'nama_kegiatan',
        'kategori_id',
        'lokasi',
        'waktu',
        "inputer",
        'deskripsi'
    ];

    //buat fungsi kasih relasi ke kategoriproduk
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }


    // // Menentukan nama tabel yang terhubung dengan model ini
    // protected $table = 'kegiatan';

    // // Kolom-kolom yang dapat diisi secara massal
    // protected $fillable = [
    //     'nama',             // Nama kegiatan
    //     'tanggal',       // Tanggal kegiatan
    //     'waktu',       // Waktu kegiatan
    //     'ket',             // Keterangan
    // ];

    // // Definisi relasi "belongs to" dengan model KategoriProduk
    // public function kegiatan()
    // {
    //     return $this->belongsTo(Kegiatan::class);
    // }

	// 	// Bikin fungsi nampilin semua data
	// 	public static function getAllKegiatan()
    // {
    //     // return DB::table('produk')->get();

	// 			// Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
    //     $alldata = DB::table('kegiatan')
    //         ->join('kegiatan', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
    //         ->select('produk.*', 'kategori_produk.nama as nama_kategori')
    //         ->get();
    //     return $alldata;
    // }
}
