<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KategoriController extends Controller
{
    public function kategori()
    {
        // ambil data dari database
        $kategori = Kategori::all();

        // kirim data ke view
        return view('admin.kategori.kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // kirim data ke view form create
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $kategori = new Kategori;

        // kolom kode kita isi dengan input user kode
        $kategori->nama = $request->nama;

        // simpen data nya
        $kategori->save();

        // tampilin view produk
        return redirect('dashboard/kategori');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kategori = Kategori::find($id)->first();
        return view('admin.kategori.edit', compact(
            'kategori'
        ));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // fitur edit data/validasi edit data
        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;

        // simpen data nya
        $kategori->save();

        // tampilin view produk
        return redirect('dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // fitur hapus data
        $kategori = Kategori::find($id);
        $kategori->delete();

        // balikin ke halaman produk
        return redirect('dashboard/kategori')->with('success', 'Kategori kegiatan berhasil dihapus ngabs');
    }
}
