@extends('admin.layouts.app')
@section('konten')
    <div class="container">
        <h4>Edit Data Berita</h4>
        <div class="card">
            <div class="card-header">
                Edit data
            </div>
            <div class="card-body">

                <form action="{{ url('dashboard/berita/update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="judul" class="col-4 col-form-label">Judul</label>
                        <input id="judul" name="judul" value="{{$berita->judul}}" type="text" class="form-control col-8" required>
                    </div>
                    <div class="form-group row">
                        <label for="waktu" class="col-4 col-form-label">Waktu</label>
                        <input id="waktu" name="waktu" value="{{$berita->waktu}}" type="datetime-local" class="form-control col-8" required>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-4 col-form-label">Foto</label>
                        <input id="foto" name="foto" type="file" accept="image/*" class="form-control col-8">
                    </div>
                    
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Caption</label>
                        <textarea id="editor" name="caption" value="{{$berita->caption}}" class="form-control col-md-8">{{$berita->caption}}</textarea>
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
