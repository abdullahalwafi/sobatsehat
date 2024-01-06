@extends('admin.layouts.app')
@section('konten')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1>Form Input Kegiatan</h1>
    <form method="POST" action="{{ url('/kegiatan/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="nama_kegiatan" class="col-4 col-form-label">Nama Kegiatan</label>
            <div class="col-8">
                <input id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" type="text"
                    class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori_id" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <select id="kategori_id" name="kategori_id" class="custom-select" aria-describedby="kategori_idHelpBlock">
                    @foreach ($kategori as $ka)
                        <option value="{{ $ka->id }}">{{ $ka->nama_kategori }}</option>
                    @endforeach
                </select>
                <span id="kategori_idHelpBlock" class="form-text text-muted">Pilih Kategori</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
            <div class="col-8">
                <input id="lokasi" name="lokasi" placeholder="Masukkan Lokasi" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu" class="col-4 col-form-label">Waktu Pelaksanaan</label>
            <div class="col-8">
                <input id="waktu" name="waktu" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputer" class="col-4 col-form-label">Penginput</label>
            <div class="col-8">
                <input id="inputer" name="inputer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
