@extends('layouts.home')
@section('datapendonor')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">LAPORAN STOK DARAH</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Golongan Darah A</h5>
                            <h1>{{ $stokdarah[0] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Golongan Darah B</h5>
                            <h1>{{ $stokdarah[1] }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card danger">
                        <div class="card-body">
                            <h5 class="card-title">Golongan Darah AB</h5>
                            <h1>{{ $stokdarah[2] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Golongan Darah O</h5>
                            <h1>{{ $stokdarah[3] }}</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
