@extends('admin.layouts.app')
@section('konten')

<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">BERITA</h1>
    <p class="mb-4"><a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <a href="{{url('dashboard/berita/create')}}" class="btn btn-sm btn-primary">TAMBAH</a>

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
                            <th>Caption</th>
                            <th>User_id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Waktu</th>
                            <th>Caption</th>
                            <th>User_id</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1 ; @endphp
                        @foreach($berita as $b)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$b->judul}}</td>
                            <td>{{$b->waktu}}</td>
                            <td>{{$b->caption}}</td>
                            <td>{{$b->user_id}}</td>
                            <td>
                                <a href="{{ url('berita/edit/'.$p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('berita/delete/'.$p->id) }}" class="btn btn-sm btn-danger"
                                    onclick="if(!confirm('Apakah Anda yakin ingin menghapus data berita?')) {return false}">Hapus</a>
                            </td>
                        </tr>
                        @php $no++; @endphp
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