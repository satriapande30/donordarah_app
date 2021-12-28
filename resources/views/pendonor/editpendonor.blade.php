@extends('layouts.home');
@section('datapendonor');

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="card-header border-0">
                    <h3 class="mb-0">Edit Data Pendonor</h3>
                </div>
            </div>
            <div class="card-body">

                <form action="/updatependonor/{{ $pendonors->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Informasi Pendonor</h6>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">ID User</label>
                                    <input type="text" class="form-control" value="{{ $pendonors->user }}" name="user"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" class="form-control" value="{{ $pendonors->email }}"
                                        name="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nomor Telepon</label>
                                    <input type="number" class="form-control" value="{{ $pendonors->hp }}" name="hp"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="{{ $pendonors->nama }}" name="nama"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="{{ $pendonors->tgl_lahir }}"
                                        name="tgl_lahir" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jk" value="{{ $pendonors->jk }}" required>
                                        <option value="" disabled selected hidden>{{ $pendonors->jk }}</option>
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
                                    <textarea rows="3" class="form-control" value="{{ $pendonors->alamat }}"
                                        name="alamat">{{ $pendonors->alamat }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="col-form-label">Golongan Darah</label>
                                    <select class="form-control" name="goldarah" value="{{ $pendonors->goldarah }}"
                                        required>
                                        <option value="" selected hidden>{{ $pendonors->goldarah }}
                                        </option>
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
                                    <select class="form-control" name="rhesus" value="{{ $pendonors->rhesus }}"
                                        required>
                                        <option value="" disabled selected hidden>{{ $pendonors->rhesus }}</option>
                                        <option>Positif</option>
                                        <option>Negatif</option>
                                        <option>Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Keterangan</label>
                                    <input type="text" class="form-control" value="{{ $pendonors->ket }}" name="ket"
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