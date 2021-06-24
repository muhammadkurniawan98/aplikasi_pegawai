<?php $__env->startSection('pangkat', 'active'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <?php if($usulanKenaikanPangkat != null): ?>
                    <a href="<?php echo e(route('pangkat.create')); ?>"
                       class="btn btn-primary btn-icon-split btn-sm <?php if($usulanKenaikanPangkat->status_verifikasi == 0): ?> <?php echo e('disabled'); ?> <?php endif; ?>">
                    <span class="icon text-white">
                        <i class="far fa-plus-square"></i>
                    </span>
                        <span class="text-black-90">Buat Pengajuan</span>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('pangkat.create')); ?>"
                       class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white">
                        <i class="far fa-plus-square"></i>
                    </span>
                        <span class="text-black-90">Buat Pengajuan</span>
                    </a>
                <?php endif; ?>

                <?php if(Session::has('success')): ?>
                    <div class="alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <br><br><br>

                <div class="card o-hidden border-0 shadow-none">
                    <div class="card-header">
                        <h5 class="font-weight-normal">USULAN KENAIKAN PANGKAT</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th class="text-center font-weight-normal">NAMA</th>
                                        <th class="text-center font-weight-normal">NIP</th>
                                        <th class="text-center font-weight-normal">VERIFIKASI</th>
                                        <th class="text-center font-weight-normal">SK USULAN PEGAWAI</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php if($usulanKenaikanPangkat != null): ?>
                                            <?php if($usulanKenaikanPangkat->status_verifikasi == 0): ?>
                                                <td class="text-center font-weight-light"><?php echo e(pegawai()->nama); ?></td>
                                                <td class="text-center font-weight-light"><?php echo e(pegawai()->nip); ?></td>
                                                <td class="text-center font-weight-light alert-danger"><?php echo e('BELUM DIVERIFIKASI'); ?></td>
                                                <td class="text-center font-weight-light">
                                                    <a href="#" class="btn btn-success btn-icon-split btn-sm disabled">
                                                    <span class="icon text-white-12">
                                                        <i class="fas fa-file-download"></i>
                                                    </span>
                                                        <span class="text">Unduh File</span>
                                                    </a>
                                                </td>
                                            <?php else: ?>
                                                <td class="text-center font-weight-light"><?php echo e(pegawai()->nama); ?></td>
                                                <td class="text-center font-weight-light"><?php echo e(pegawai()->nip); ?></td>
                                                <td class="text-center font-weight-light alert-success"><?php echo e('SUDAH DIVERIFIKASI'); ?></td>
                                                <td class="text-center font-weight-light">
                                                    <a href="<?php echo e(route('download.pangkat.sk', $usulanKenaikanPangkat->skUsulanPegawai->file_sk_usulan_kenaikan_pangkat)); ?>" class="btn btn-success btn-icon-split btn-sm">
                                                    <span class="icon text-white-12">
                                                        <i class="fas fa-file-download"></i>
                                                    </span>
                                                        <span class="text">Unduh File</span>
                                                    </a>
                                                </td>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <td class="text-center font-weight-light"><?php echo e(pegawai()->nama); ?></td>
                                            <td class="text-center font-weight-light"><?php echo e(pegawai()->nip); ?></td>
                                            <td class="text-center font-weight-light"><?php echo e('BELUM ADA PENGAJUAN'); ?></td>
                                            <td class="text-center font-weight-light">
                                                <a href="#" class="btn btn-success btn-icon-split btn-sm disabled">
                                                    <span class="icon text-white-12">
                                                        <i class="fas fa-file-download"></i>
                                                    </span>
                                                    <span class="text">Unduh File</span>
                                                </a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\aplikasi_pegawai\resources\views/user/usulan/index/kenaikan-pangkat.blade.php ENDPATH**/ ?>