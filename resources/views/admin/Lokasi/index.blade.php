@extends('admin.layouts.app')
@section('konten')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Lokasi</h1>

    <a href="{{url('dashboard/lokasi/create')}}" class="btn btn-sm btn-primary">TAMBAH</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Lokasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($lokasi as $l)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$l->nama}}</td>
                            <td>{{$l->alamat}}</td>
                            <td>{{$l->kota}}</td>
                            <td>
                                <a href="{{ url('dashboard/lokasi/edit/'.$l->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('dashboard/lokasi/delete/'.$l->id) }}" class="btn btn-sm btn-danger"
                                    onclick="if(!confirm('Apakah Anda yakin ingin menghapus data lokasi?')) {return false}">Hapus</a>
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

</div>

<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>

@endsection