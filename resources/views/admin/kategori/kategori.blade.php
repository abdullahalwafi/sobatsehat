@extends('admin.layouts.app')
@section('konten')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1 align="center" class="mt-4">Kategori Kegiatan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori</li>
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
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategori as $ka)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $ka->nama_kategori }}</td>
                                        {{-- buat tombol edit --}}
                                        <td><a href="{{ url('kategori/edit/' . $ka->id) }}" class="btn btn-warning">Edit</a>
                                        {{-- buat tombol delete --}}
                                        <a href="{{ url('kategori/delete/' . $ka->id) }}" class="btn btn-danger"
                                                onclick="return confirm('apakah ingin hapus kegiatan ngabs?')">Delete</a></td>
                                    </tr>
                                    @php $no++; @endphp
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
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
            <a class="btn btn-primary" href="{{ url('/kategori/create') }}">Create</a>
        </div>
        <div class="container">
            <div class="card-body">
                <table style="text-align: center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kategori as $ka)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $ka->nama_kategori }}</td>
                                {{-- buat tombol edit --}}
                                {{-- <td><a href="{{ url('kategori/edit/' . $ka->id) }}" class="btn btn-warning">Edit</a></td> --}}
                                {{-- buat tombol delete --}}
                                {{-- <td><a href="{{ url('kategori/delete/' . $ka->id) }}" class="btn btn-danger"
                                        onclick="return confirm('apakah ingin hapus kegiatan ngabs?')">Delete</a></td>
                            </tr>
                            @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}} 
@endsection
