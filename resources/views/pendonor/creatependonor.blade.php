@extends('layouts.home');
@section('datapendonor');

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header border-0">
                    <h3 class="mb-0">Tambah Data Pendonor</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="/storependonor" method="POST">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Informasi Pendonor</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">ID User</label>
                                    <input type="text" class="form-control" placeholder="Masukkan ID User" name="user"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Masukkan Email" name="email"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nomor Telepon</label>
                                    <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon"
                                        name="hp" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap"
                                        name="nama" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir"
                                        name="tgl_lahir" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jk" required>
                                        <option value="" disabled selected hidden>Pilih Jenis Kelamin</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Alamat</label>
                                    <textarea rows="3" class="form-control" placeholder="Masukkan Alamat Sesuai KTP"
                                        name="alamat" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-form-label">Golongan Darah</label>
                                    <select class="form-control" name="goldarah" required>
                                        <option value="" disabled selected hidden>Pilih Golongan Darah</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                        <option>O</option>
                                        <option>Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-form-label">Rhesus</label>
                                    <select class="form-control" name="rhesus" required>
                                        <option value="" disabled selected hidden>Pilih Rhesus</option>
                                        <option>Positif</option>
                                        <option>Negatif</option>
                                        <option>Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Keterangan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Keterangan" name="ket"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection