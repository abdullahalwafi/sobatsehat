@extends('admin.layouts.app')
@section('konten')

<div class="container">
  <h2>Tambah data berita</h2>
  <div class="card">
    <div class="card-header">Tambah Data</div>
    <div class="card-body">
      <form action="{{url('berita/store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="judul" class="col-4 col-form-label">Judul</label>
          <div class="col-8">
            <input id="judul" name="judul" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="waktu" class="col-4 col-form-label">Waktu</label>
          <div class="col-8">
            <input id="waktu" name="waktu" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="caption" class="col-4 col-form-label">Caption</label>
          <div class="col-8">
            <input id="caption" name="caption" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="user_id" class="col-4 col-form-label">User_id</label>
          <div class="col-8">
            <select id="user_id" name="user_id" class="custom-select">
              @foreach($user as $u)
              <option value="{{$u->id}}">{{$u->id}}</option>
              @endforeach
            </select>
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