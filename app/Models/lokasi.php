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
    protected $guarded = ['id'];
    // bikin fungsi produk untuk relasi has many
    public function province()
    {
        return $this->belongsTo(Province::class, 'provinces_id', 'id');
    }
    public function cities()
    {
        return $this->belongsTo(City::class, 'cities_id', 'id');
    }
    public function districts()
    {
        return $this->belongsTo(District::class, 'districts_id', 'id');
    }
    public function villages()
    {
        return $this->belongsTo(Village::class, 'villages_id', 'id');
    }
}
