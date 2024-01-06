@extends('admin.layouts.app')
@section('konten')
    <h1>Form Input Kategori Kegiatan</h1>

    @foreach ($kategori as $ka)
        <form method="POST" action="{{ url('/kategori/update/' . $ka->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
                <div class="col-8">
                    <input id="nama_kategori" name="nama_kategori" placeholder="Masukkan Nama Kategori" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    @endforeach
@endsection
