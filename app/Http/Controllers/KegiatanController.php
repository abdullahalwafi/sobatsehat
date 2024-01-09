<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KegiatanController extends Controller
{
    public function kegiatan()
    {
        // ambil data dari database
        $kegiatan = Kegiatan::join('kategori', 'kategori.id', '=', 'kegiatan.kategori_id')

        //tampilan data
        ->select('kegiatan.*', 'kategori.nama_kategori as kategori')
        ->get();

        // kirim data ke view
        return view('admin.kegiatan.kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $kegiatan = Kegiatan::all();

        // kirim data ke view form create
        return view('admin.kegiatan.create', compact('kategori','kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $kegiatan = new Kegiatan;

        // kolom kode kita isi dengan input user kode
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->kategori_id = $request->kategori_id;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->kategori_id = $request->kategori_id;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->inputer = $request->inputer;
        $kegiatan->deskripsi = $request->deskripsi;

        // simpen data nya
        $kegiatan->save();

        // tampilin view produk
        return redirect('kegiatan');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kategori = Kategori::all();
        $kegiatan = Kegiatan::where('id', $id)->get();
        return view('admin.kegiatan.edit', compact(
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
    public function update(Request $request)
    {
        // fitur edit data/validasi edit data
        $kegiatan = Kegiatan::find($request->id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->kategori_id = $request->kategori_id;
        $kegiatan->lokasi = $request->lokasi;
        $kegiatan->kategori_id = $request->kategori_id;
        $kegiatan->waktu = $request->waktu;
        $kegiatan->inputer = $request->inputer;
        $kegiatan->deskripsi = $request->deskripsi;

        // simpen data nya
        $kegiatan->save();

        // tampilin view produk
        return redirect('kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // fitur hapus data
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        // balikin ke halaman produk
        return redirect('kegiatan')->with('success', 'Kegiatan berhasil dihapus ngabs');
    }
}
