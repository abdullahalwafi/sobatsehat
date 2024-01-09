@extends('admin.layouts.app')
@section('konten')
    <div class="container">
        <h4>Tambah Data Kegiatan</h4>
        <div class="card">
            <div class="card-header">
                Tambah data
            </div>
            <div class="card-body">

                <form action="{{ url('dashboard/kegiatan/store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <input id="nama" name="nama" type="text" class="form-control col-8" required>
                    </div>
                    <div class="form-group row">
                        <label for="waktu" class="col-4 col-form-label">Waktu</label>
                        <input id="waktu" name="waktu" type="datetime-local" class="form-control col-8" required>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_id" class="col-4 col-form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control col-8" required>
                            <option value="">silahkan pilih</option>
                            @foreach ($kategori as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi_id" class="col-4 col-form-label">Lokasi</label>
                        <select name="lokasi_id" id="lokasi_id" class="form-control col-8" required>
                            <option value="">silahkan pilih</option>
                            @foreach ($lokasi as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-4 col-form-label">Foto</label>
                        <input id="foto" name="foto" type="file" accept="image/*" class="form-control col-8" required>
                    </div>
                    
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-4 col-form-label">Deskripsi</label>
                        <textarea id="editor" name="deskripsi" class="form-control col-md-8" required></textarea>
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
    
    <script src="{{asset('dist/js/ckeditor.js')}}"></script>
    <script>
         ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
