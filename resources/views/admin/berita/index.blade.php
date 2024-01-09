@extends('admin.layouts.app')
@section('konten')
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Berita</h1>

        <a href="{{ url('dashboard/berita/create') }}" class="btn btn-sm btn-primary">TAMBAH</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Judul</th>
                                <th>Waktu</th>
                                <th>User</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Judul</th>
                                <th>Waktu</th>
                                <th>User</th>
                                <th>action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($berita as $l)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $l->judul }}</td>
                                    <td>{{ $l->waktu }}</td>
                                    <td>{{ $l->user->name }}</td>
                                    <td>
                                        <a href="{{ url('dashboard/berita/edit/' . $l->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ url('dashboard/berita/delete/' . $l->id) }}" class="btn btn-sm btn-danger"
                                            onclick="if(!confirm('Apakah Anda yakin ingin menghapus data berita?')) {return false}">Hapus</a>
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
