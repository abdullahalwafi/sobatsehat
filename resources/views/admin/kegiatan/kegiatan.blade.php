@extends('admin.layouts.app')
@section('konten')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 align="center" class="mt-4">Jadwal Kegiatan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kegiatan</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ url('/kategori/create') }}">Create</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Nama Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Waktu Pelaksanaan</th>
                                    <th>Penginput</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kegiatan as $k)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $k->nama_kegiatan }}</td>
                                        <td>{{ $k->kategori }}</td>
                                        <td>{{ $k->lokasi }}</td>
                                        <td>{{ $k->waktu }}</td>
                                        <td>{{ $k->inputer }}</td>
                                        <td>{{ $k->deskripsi }}</td>
                                        {{-- buat tombol edit --}}
                                        <td><a href="{{ url('kegiatan/edit/' . $k->id) }}" class="btn btn-warning">Edit</a>
                                            {{-- buat tombol delete --}}
                                            <a href="{{ url('kegiatan/delete/' . $k->id) }}" class="btn btn-danger"
                                                onclick="return confirm('apakah ingin hapus kegiatan ngabs?')">Delete</a>
                                        </td>
                                    </tr>
                                    @php $no++; @endphp
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Nama Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Waktu Pelaksanaan</th>
                                    <th>Penginput</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    {{-- <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ url('/kegiatan/create') }}">Create</a>
        </div>
        <div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Nama Kategori</th>
                            <th>Lokasi</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Penginput</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Nama Kategori</th>
                            <th>Lokasi</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Penginput</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kegiatan as $k)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $k->nama_kegiatan }}</td>
                                <td>{{ $k->kategori_id }}</td>
                                <td>{{ $k->lokasi }}</td>
                                <td>{{ $k->waktu }}</td>
                                <td>{{ $k->inputer }}</td>
                                <td>{{ $k->deskripsi }}</td>
                                {{-- buat tombol edit --}}
    {{-- <td><a href="{{ url('kegiatan/edit/' . $k->id) }}" class="btn btn-warning">Edit</a></td> --}}
    {{-- buat tombol delete --}}
    {{-- <td><a href="{{ url('kegiatan/delete/' . $k->id) }}" class="btn btn-danger"
                                        onclick="return confirm('apakah ingin hapus kegiatan ngabs?')">Delete</a></td>
                            </tr>
                            @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  --}}
@endsection
