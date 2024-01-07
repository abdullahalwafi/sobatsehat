@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Ubah Data lokasi</h1>
<form action="{{url('lokasi/update')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @foreach ($lokasi as $l)
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama_pemesan" type="text" class="form-control" value="{{$l->}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat_pemesan" type="text" class="form-control" value="{{$l->alamat}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-4 col-form-label">Kota</label> 
    <div class="col-8">
      <input id="kota" name="kota" type="text" class="form-control" value="{{$l->kota}}">
    </div>
  </div>
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