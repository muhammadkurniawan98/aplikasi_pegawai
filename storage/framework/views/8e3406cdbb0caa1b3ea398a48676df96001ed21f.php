<?php $__env->startSection('dashboard', 'active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card o-hidden border-0 shadow-none">
                <div class="card-header">
                    <h5 class="font-weight-normal">DASHBOARD</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card o-hidden border-0 shadow-none">
                                <div class="card-header d-flex justify-content-center">
                                    <img src="<?php echo e(asset(profile_picture())); ?>" width="79%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card o-hidden border-0 shadow-none">
                                <div class="card-header">
                                    <h6 class="card-title font-weight-normal"><?php echo e(('PROFIL PEGAWAI')); ?></h6>
                                </div>
                                <div class="card-body">
                                    <dl class="row">
                                        <dd class="col-sm-5 font-weight-normal">Nama</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->nama); ?></dd>

                                        <dd class="col-sm-5 font-weight-normal">Jabatan</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->jabatan); ?></dd>

                                        <dd class="col-sm-5 font-weight-normal">Pangkat</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->pangkat); ?></dd>

                                        <dd class="col-sm-5 font-weight-normal">Golongan</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->golongan); ?></dd>

                                        <dd class="col-sm-5 font-weight-normal">Status Kepegawaian</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->status_kepegawaian); ?></dd>

                                        <dd class="col-sm-5 font-weight-normal">Status Tunjangan</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->status_tunjangan); ?></dd>

                                        <dd class="col-sm-5 font-weight-normal">NIP</dd>
                                        <dd class="col-sm-7 font-weight-light"><?php echo e(pegawai()->nip); ?></dd>
                                    </dl>
                                    <a href="#"
                                       class="btn btn-secondary btn-icon-split btn-sm"
                                       data-toggle="modal" data-target="#changeProfilePicture">
                                        <span class="icon text-black-90">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text-black-90">Edit Foto Profil</span>
                                    </a>
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

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\aplikasi_pegawai\resources\views/user/dashboard.blade.php ENDPATH**/ ?>