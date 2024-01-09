<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\lokasi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        // ambil data dari database
        $kegiatan = Kegiatan::all();

        // kirim data ke view
        return view('admin.kegiatan.kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = lokasi::all();

        // kirim data ke view form create
        return view('admin.kegiatan.create', compact('kategori', 'lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $kegiatan = new Kegiatan;

        // kolom kode kita isi dengan input user kode
        $kegiatan->nama = $request->nama;
        $kegiatan->kategori_id = $request->kategori_id;
        $kegiatan->lokasi_id = $request->lokasi_id;
        $kegiatan->user_id = 1;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto =  $request->file('foto')->store('foto', 'public');

        // simpen data nya
        $kegiatan->save();

        // tampilin view produk
        return redirect('/dashboard/kegiatan');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kategori = Kategori::all();
        $lokasi = lokasi::all();
        $kegiatan = Kegiatan::find($id)->first();
        return view('admin.kegiatan.edit', compact(
            'lokasi',
            'kegiatan',
            'kategori'
        ));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // fitur edit data/validasi edit data
        $kegiatan = Kegiatan::find($id)->first();
        $kegiatan->nama = $request->nama;
        $kegiatan->kategori_id = $request->kategori_id;
        $kegiatan->lokasi_id = $request->lokasi_id;
        $kegiatan->user_id = 1;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->deskripsi = $request->deskripsi;
        if($request->file('foto')){
            $kegiatan->foto =  $request->file('foto')->store('foto', 'public');
        } else {
            $kegiatan->foto = $kegiatan->foto;
        }

        // simpen data nya
        $kegiatan->save();

        // tampilin view produk
        return redirect('/dashboard/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // fitur hapus data
        $kegiatan = Kegiatan::find($id)->first();
        $kegiatan->delete();

        // balikin ke halaman produk
        return redirect('/dashboard/kegiatan')->with('success', 'Kegiatan berhasil dihapus ngabs');
    }
}
