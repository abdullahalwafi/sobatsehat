@extends('admin.layouts.app')
@section('konten')

<div class="container">
  <h4>Edit Lokasi</h4>
  <div class="card">
    <div class="card-header">
      Edit
    </div>
    <div class="card-body">
      <form action="{{url('dashboard/lokasi/update', $lokasi->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label>
          <div class="col-8">
            <input id="nama" name="nama" value="{{$lokasi->nama}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-4 col-form-label">Alamat</label>
          <div class="col-8">
            <input id="alamat" name="alamat" value="{{$lokasi->alamat}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="kota" class="col-4 col-form-label">Kota</label>
          <div class="col-8">
            <input id="kota" name="kota" value="{{$lokasi->kota}}" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection