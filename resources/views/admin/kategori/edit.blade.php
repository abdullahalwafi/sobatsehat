@extends('admin.layouts.app')
@section('konten')
    <div class="container">
        <h4>Edit Data Kategori</h4>
        <div class="card">
            <div class="card-header">
                Edit data
            </div>
            <div class="card-body">

                <form action="{{ url('dashboard/kategori/update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <input id="nama" name="nama" value="{{ $kategori->nama }}" type="text" class="form-control col-8">
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
