<?php $__env->startSection('admin-rekapitulasi', 'active'); ?>
<?php $__env->startSection('content'); ?>

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
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(pegawaiTotal()); ?> - Orang</div>
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
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(pegawaiPNS()); ?> - Orang</div>
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
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e(pegawaiPensiun()); ?> - Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-slash fa-2x text-gray-300"></i>
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
                        <form action="<?php echo e(route('admin.gaji.laporan.download')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <input id="tahun_gaji" type="text" class="col-xl-8 form-control" name="tahun" placeholder="Tahun" readonly>
                                <script>
                                    $('#tahun_gaji').datepicker({
                                        format: 'yyyy',
                                        language: 'id',
                                        viewMode: 'years',
                                        minViewMode: 'years'
                                    });
                                </script>
                                <button type="submit" class="col-xl-4 btn btn-primary">download</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="rekapitulasiKenaikanGaji"></canvas>
                        </div>
                        <hr>
                        Data jumlah pegawai yang mengajukan kenaikan gaji hingga tahun <?php echo e(date('Y')); ?>.

                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 text-primary font-weight-normal">REKAPITULASI KENAIKAN PANGKAT PEGAWAI</h6>
                        <form action="<?php echo e(route('admin.pangkat.laporan.download')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <input id="tahun_pangkat" type="text" class="col-xl-8 form-control" name="tahun" placeholder="Tahun" readonly>
                                <script>
                                    $('#tahun_pangkat').datepicker({
                                        format: 'yyyy',
                                        language: 'id',
                                        viewMode: 'years',
                                        minViewMode: 'years'
                                    });
                                </script>
                                <button type="submit" class="col-xl-4 btn btn-primary">download</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="rekapitulasiKenaikanPangkat"></canvas>
                        </div>
                        <hr>
                        Data jumlah pegawai yang mengajukan kenaikan pangkat hingga tahun <?php echo e(date('Y')); ?>.

                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h6 class="m-0 text-primary font-weight-normal">REKAPITULASI PENSIUN PEGAWAI</h6>
                        <form action="<?php echo e(route('admin.pensiun.laporan.download')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <input id="tahun_pensiun" type="text" class="col-xl-8 form-control" name="tahun" placeholder="Tahun" readonly>
                                <script>
                                    $('#tahun_pensiun').datepicker({
                                        format: 'yyyy',
                                        language: 'id',
                                        viewMode: 'years',
                                        minViewMode: 'years'
                                    });
                                </script>
                                <button type="submit" class="col-xl-4 btn btn-primary">download</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="rekapitulasiPensiun"></canvas>
                        </div>
                        <hr>
                        Data jumlah pegawai yang mengajukan pensiun hingga tahun <?php echo e(date('Y')); ?>.

                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/rekapitulasi.blade.php ENDPATH**/ ?>