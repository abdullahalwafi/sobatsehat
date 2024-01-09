@extends('admin.layouts.app')
@section('konten')
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>

        <a href="{{ url('dashboard/kegiatan/create') }}" class="btn btn-sm btn-primary">TAMBAH</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kegiatan as $l)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $l->nama }}</td>
                                    <td>{{ $l->kategori->nama }}</td>
                                    <td>{{ $l->waktu }}</td>
                                    <td>{{ $l->lokasi->nama }}</td>
                                    <td>
                                        <a href="{{ url('dashboard/kegiatan/edit/' . $l->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ url('dashboard/kegiatan/delete/' . $l->id) }}" class="btn btn-sm btn-danger"
                                            onclick="if(!confirm('Apakah Anda yakin ingin menghapus data kegiatan?')) {return false}">Hapus</a>
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
