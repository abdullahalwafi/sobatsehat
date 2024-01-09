<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LokasiController extends Controller
{
    public function index()
    {
        // ambil data dari database
        $lokasi = lokasi::

        //tampilan data
        select('lokasi.*')
        ->get();

        // kirim data ke view
        return view('admin.lokasi.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // kirim data ke view form create
        return view('admin.lokasi.create');
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
        $lokasi->provinces_id = $request->province;
        $lokasi->districts_id = $request->district;
        $lokasi->cities_id = $request->city;
        $lokasi->villages_id = $request->village;

        // simpen data nya
        $lokasi->save();

        // tampilin view produk
        return redirect('/dashboard/lokasi');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $lokasi = lokasi::where('id', $id)->first();
        return view('admin.lokasi.edit', compact(
            'lokasi'
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
        $lokasi = lokasi::find($id);
        $lokasi->nama = $request->nama;
        $lokasi->alamat = $request->alamat;
        $lokasi->provinces_id = $request->province;
        $lokasi->districts_id = $request->district;
        $lokasi->cities_id = $request->city;
        $lokasi->villages_id = $request->village;

        // simpen data nya
        $lokasi->save();

        // tampilin view produk
        return redirect('/dashboard/lokasi');
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
        return redirect('/dashboard/lokasi')->with('success', 'lokasi berita berhasil dihapus ngabs');
    }
}
