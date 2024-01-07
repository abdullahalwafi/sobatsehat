<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LokasiController extends Controller
{
    public function lokasi()
    {
        // ambil data dari database
        $lokasi = lokasi::

        //tampilan data
        select('lokasi.*')
        ->get();

        // kirim data ke view
        return view('admin.lokasi.lokasi', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $berita = berita::all();
        $lokasi = lokasi::all();

        // kirim data ke view form create
        return view('admin.lokasi.create', compact('berita','lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $lokasi = new lokasi;

        // kolom kode kita isi dengan input user kode
        $lokasi->nama = $request->nama;
        $lokasi->alamat = $request->alamat;
        $lokasi->kota = $request->kota;


        // simpen data nya
        $lokasi->save();

        // tampilin view produk
        return redirect('lokasi');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $berita = berita::all();
        $lokasi = lokasi::where('id', $id)->get();
        return view('admin.lokasi.edit', compact(
            'lokasi',
            'berita'
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
        $lokasi = lokasi::find($request->id);
        $lokasi->nama = $request->nama;
        $lokasi->alamat = $request->alamat;
        $lokasi->kota = $request->kota;

        // simpen data nya
        $lokasi->save();

        // tampilin view produk
        return redirect('lokasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // fitur hapus data
        $lokasi = lokasi::find($id);
        $lokasi->delete();

        // balikin ke halaman produk
        return redirect('lokasi')->with('success', 'lokasi berita berhasil dihapus ngabs');
    }
}