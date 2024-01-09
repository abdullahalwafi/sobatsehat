@extends('admin.layouts.app')
@section('konten')
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User</h1>

        <a href="{{ url('dashboard/user/create') }}" class="btn btn-sm btn-primary">TAMBAH</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $l)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $l->name }}</td>
                                    <td>{{ $l->email }}</td>
                                    <td>{{ $l->role }}</td>
                                    <td>
                                        <a href="{{ url('dashboard/user/edit/' . $l->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ url('dashboard/user/delete/' . $l->id) }}" class="btn btn-sm btn-danger"
                                            onclick="if(!confirm('Apakah Anda yakin ingin menghapus data user?')) {return false}">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->
@endsection
