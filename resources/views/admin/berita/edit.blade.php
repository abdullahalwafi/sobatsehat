@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Ubah Data Berita</h1>
<form action="{{url('berita/update')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @foreach ($berita as $b)
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$b->id}}">
    <label for="judul" class="col-4 col-form-label">Judul</label> 
    <div class="col-8">
        <input id="judul" name="judul" type="text" class="form-control" value="{{$b->judul}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="waktu" class="col-4 col-form-label">Waktu</label> 
    <div class="col-8">
      <input id="waktu" name="waktu_pemesan" type="text" class="form-control" value="{{$b->waktu}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="caption" class="col-4 col-form-label">Caption</label> 
    <div class="col-8">
      <input id="caption" name="caption" type="text" class="form-control" value="{{$b->caption}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="user_id" class="col-4 col-form-label">User_id</label> 
    <div class="col-8">
      <select id="user_id" name="user_id" class="custom-select">
        @foreach($user as $u)
        @php $sel = ($u->id == $b->user_id) ? 'selected' : ''; @endphp
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
  @endforeach
</form>

@endsection