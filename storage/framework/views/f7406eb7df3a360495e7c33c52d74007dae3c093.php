<?php $__env->startSection('admin-pensiun', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-none">
                    <div class="card-header">
                        <h5 class="font-weight-normal">DETAIL USULAN PENSIUN</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card o-hidden border-0 shadow-none">
                                    <div class="card-header d-flex justify-content-center">
                                        <img src="<?php echo e(asset(profile_picture($usulanPensiun->nip))); ?>" width="79%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card o-hidden border-0 shadow-none">
                                    <div class="card-header">
                                        <h6 class="card-title font-weight-normal"><?php echo e(('Detail Informasi Pegawai')); ?></h6>
                                    </div>
                                    <div class="card-body">
                                        <dl class="row">
                                            <dd class="col-sm-5 font-weight-normal">Nama</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->nama); ?></dd>

                                            <dd class="col-sm-5 font-weight-normal">Jabatan</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->jabatan); ?></dd>

                                            <dd class="col-sm-5 font-weight-normal">Pangkat</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->pangkat); ?></dd>

                                            <dd class="col-sm-5 font-weight-normal">Golongan</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->golongan); ?></dd>

                                            <dd class="col-sm-5 font-weight-normal">Status Kepegawaian</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->status_kepegawaian); ?></dd>

                                            <dd class="col-sm-5 font-weight-normal">Status Tunjangan</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->status_tunjangan); ?></dd>

                                            <dd class="col-sm-5 font-weight-normal">NIP</dd>
                                            <dd class="col-sm-7 font-weight-light"><?php echo e($usulanPensiun->nip); ?></dd>
                                        </dl>
                                        <a href="<?php echo e(route('admin.pensiun.download', $usulanPensiun->nip)); ?>"
                                           class="btn btn-primary btn-icon-split btn-sm">
                                            <span class="icon text-black-90">
                                                <i class="fas fa-file-download"></i>
                                            </span>
                                            <span class="text-black-90">Download File Persyaratan</span>
                                        </a>
                                        <a href="#"
                                           class="btn btn-success btn-icon-split btn-sm"
                                           data-toggle="modal" data-target="#usulanPensiun">
                                            <span class="icon text-black-90">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text-black-90">Verifikasi</span>
                                        </a>
                                        <a href="#"
                                           class="btn btn-danger btn-icon-split btn-sm"
                                           data-toggle="modal" data-target="#tolak_usulan_pensiun">
                                            <span class="icon text-black-90">
                                                <i class="fas fa-times"></i>
                                            </span>
                                            <span class="text-black-90">Tolak</span>
                                        </a>
                                        <?php echo $__env->make('admin.layouts.includes.verifikasi-usulan_pensiun', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('admin.layouts.includes.tolak-usulan_pensiun', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/verifikasi-usulan/show/pensiun.blade.php ENDPATH**/ ?>