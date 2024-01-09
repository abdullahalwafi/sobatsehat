<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use App\Models\berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BeritaController extends Controller
{
    public function index()
    {
        // ambil data dari database
        $berita = berita::all();

        // kirim data ke view
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $berita = berita::all();

        // kirim data ke view form create
        return view('admin.berita.create', compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $berita = new berita;

        // kolom kode kita isi dengan input user kode
        $berita->judul = $request->judul;
        $berita->waktu = $request->waktu;
        $berita->caption = $request->caption;
        $berita->user_id = 1;
        $berita->foto =  $request->file('foto')->store('foto', 'public');

        // simpen data nya
        $berita->save();

        // tampilin view produk
        return redirect('dashboard/berita');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $berita = berita::find($id);
        return view('admin.berita.edit', compact(
            'berita',
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
        $berita = berita::find($request->id);
        $berita->judul = $request->judul;
        $berita->waktu = $request->waktu;
        $berita->caption = $request->caption;
        $berita->user_id = 1;
        if ($request->file('foto')) {
            $berita->foto =  $request->file('foto')->store('foto', 'public');
        } else {
            $berita->foto = $berita->foto;
        }
        // simpen data nya
        $berita->save();

        // tampilin view produk
        return redirect('dashboard/berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // fitur hapus data
        $berita = berita::find($id);
        $berita->delete();

        // balikin ke halaman produk
        return redirect('dashboard/berita')->with('success', 'berita berhasil dihapus ngabs');
    }
}
