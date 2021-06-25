@extends('admin.layouts.app')
@section('admin-rekapitulasi', 'active')
@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h4 class="h4 mb-2 text-gray-800 font-weight-normal">REKAPITULASI DATA PEGAWAI</h4>
        <p class="mb-4">Rekapitulasi data pengajuan pegawai yang telah masuk kedalam database.</p>

        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pegawai (Total)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ pegawaiTotal() }} - Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pegawai (PNS)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ pegawaiPNS() }} - Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pegawai (Pensiun)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ pegawaiPensiun() }} - Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-7">

                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 text-primary font-weight-normal">REKAPITULASI KENAIKAN GAJI PEGAWAI</h6>
                        <form action="{{ route('admin.gaji.laporan.download') }}" method="post">
                            @csrf
                            <input type="text" class="form-control">
                            <button type="submit" class="btn btn-primary">download</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="rekapitulasiKenaikanGaji"></canvas>
                        </div>
                        <hr>
                        Data jumlah pegawai yang mengajukan kenaikan gaji hingga tahun {{ date('Y') }}.

                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 text-primary font-weight-normal">REKAPITULASI KENAIKAN PANGKAT PEGAWAI</h6>
                        <button type="submit" class="btn btn-primary">download</button>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="rekapitulasiKenaikanPangkat"></canvas>
                        </div>
                        <hr>
                        Data jumlah pegawai yang mengajukan kenaikan pangkat hingga tahun {{ date('Y') }}.

                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 text-primary font-weight-normal">REKAPITULASI PENSIUN PEGAWAI</h6>
                        <button type="submit" class="btn btn-primary">download</button>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="rekapitulasiPensiun"></canvas>
                        </div>
                        <hr>
                        Data jumlah pegawai yang mengajukan pensiun hingga tahun {{ date('Y') }}.

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
