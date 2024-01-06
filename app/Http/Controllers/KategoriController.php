<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        // ambil data dari database
        $kategori = Kategori::

        //tampilan data
        select('kategori.*')
        ->get();

        // kirim data ke view
        return view('admin.kategori.kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kegiatan = Kegiatan::all();
        $kategori = Kategori::all();

        // kirim data ke view form create
        return view('admin.kategori.create', compact('kegiatan','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $kategori = new Kategori;

        // kolom kode kita isi dengan input user kode
        $kategori->nama_kategori = $request->nama_kategori;

        // simpen data nya
        $kategori->save();

        // tampilin view produk
        return redirect('kategori');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kegiatan = Kegiatan::all();
        $kategori = Kategori::where('id', $id)->get();
        return view('admin.kategori.edit', compact(
            'kategori',
            'kegiatan'
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
        $kategori = Kategori::find($request->id);
        $kategori->nama_kategori = $request->nama_kategori;

        // simpen data nya
        $kategori->save();

        // tampilin view produk
        return redirect('kategori');
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
        return redirect('kategori')->with('success', 'Kategori kegiatan berhasil dihapus ngabs');
    }
}
