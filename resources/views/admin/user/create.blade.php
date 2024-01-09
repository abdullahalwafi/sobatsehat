@extends('admin.layouts.app')
@section('konten')
    <div class="container">
        <h4>Tambah Data User</h4>
        <div class="card">
            <div class="card-header">
                Tambah data
            </div>
            <div class="card-body">

                <form action="{{ url('dashboard/user/store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nama</label>
                        <input id="name" name="name" type="text" class="form-control col-8" required>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <input id="email" name="email" type="email" class="form-control col-8" required>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Password</label>
                        <input id="password" name="password" type="text"class="form-control col-8" required>
                    </div>
                    
                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label">Role</label>
                        <select id="editor" name="role" class="form-control col-md-8">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                            <option value="kontributor">kontributor</option>
                        </select>
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
