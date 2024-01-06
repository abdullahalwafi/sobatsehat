@extends('admin.layouts.app')
@section('konten')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h1>Form Input Kategori</h1>
    <form method="POST" action="{{ url('/kategori/store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label> 
            <div class="col-8">
              <input id="nama_kategori" name="nama_kategori" placeholder="Masukkan Nama Kategori" type="text" class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
    </form>
@endsection
