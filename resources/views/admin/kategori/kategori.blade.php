@extends('admin.layouts.app')
@section('konten')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ url('/dashboard/kategori/create') }}">Create</a>
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
                                        <td>{{ $ka->nama }}</td>
                                        {{-- buat tombol edit --}}
                                        <td><a href="{{ url('dashboard/kategori/edit/' . $ka->id) }}" class="btn btn-warning">Edit</a>
                                        {{-- buat tombol delete --}}
                                        <a href="{{ url('dashboard/kategori/delete/' . $ka->id) }}" class="btn btn-danger"
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
@endsection
