@extends('layouts.home');
@section('datapendonor');

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">TABEL PENDONOR</h1>
            <button type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#importModal">
                Import Excel
            </button>
            <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Pilih file
                        </div>
                        <div class="modal-footer">
                            <form action="/import" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="file" name="file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary">
                <a href="pendonor/export" class="text-white">Export Excel</a>
            </button>
            <button type="button" class="btn btn-primary">
                <a href="/creatependonor" class="text-white">Tambah Data</a>
            </button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" class="sort">No</th>
                            <th scope="col" class="sort">ID User</th>
                            <th scope="col" class="sort">Email</th>
                            <th scope="col" class="sort">No Telepon</th>
                            <th scope="col" class="sort">Nama Lengkap</th>
                            <th scope="col" class="sort">Tanggal Lahir</th>
                            <th scope="col" class="sort">Jenis Kelamin</th>
                            <th scope="col" class="sort">Alamat</th>
                            <th scope="col" class="sort">Golongan Darah</th>
                            <th scope="col" class="sort">Rhesus</th>
                            <th scope="col" class="sort">Keterangan</th>
                            <th scope="col" class="sort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ( $pendonors as $row )
                        <tr>
                            <td scope='row'>{{ $no++ }}</td>
                            <td scope='row'>{{ $row->user }}</td>
                            <td scope='row'>{{ $row->email }}</td>
                            <td scope='row'>{{ $row->hp }}</td>
                            <td scope='row'>{{ $row->nama }}</td>
                            <td scope='row'>{{ $row->tgl_lahir }}</td>
                            <td scope='row'>{{ $row->jk }}</td>
                            <td scope='row'>{{ $row->alamat }}</td>
                            <td scope='row'>{{ $row->goldarah }}</td>
                            <td scope='row'>{{ $row->rhesus }}</td>
                            <td scope='row'>{{ $row->ket }}</td>
                            <td scope="row">
                                <a href="/editpendonor/{{$row->id}}" class="btn btn-warning">Edit</a>
                                <a href="/deletependonor" class="btn btn-danger delete" data-id="{{$row->id}}"
                                    data-nama="{{$row->nama}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection