<?php $__env->startSection('admin-pangkat', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card o-hidden border-0 shadow-none">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-5">
                                <h6 class="font-weight-normal">DAFTAR USULAN KENAIKAN PANGKAT PEGAWAI</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="text-center font-weight-normal">NAMA</th>
                                <th class="text-center font-weight-normal">NIP</th>
                                <th class="text-center font-weight-normal">VERIFIKASI</th>
                                <th class="text-center font-weight-normal">SK USULAN PEGAWAI</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $usulanKenaikanPangkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center font-weight-light"><?php echo e($u->nama); ?></td>
                                    <td class="text-center font-weight-light"><?php echo e($u->nip); ?></td>
                                    <td class="text-center font-weight-light <?php if($u->status_verifikasi == 0): ?> <?php echo e('alert-danger'); ?> <?php endif; ?>"><?php echo e($u->status_verifikasi == 0? 'Belum diverifikasi':''); ?></td>
                                    <td class="text-center font-weight-light">
                                        <a class="btn btn-danger btn-icon-split btn-sm" href="<?php echo e(route('admin.pangkat.show', $u->id)); ?>">
                                            <span class="icon text-white-12">
                                                <i class="fas fa-info"></i>
                                            </span>
                                            <span class="text font-weight-light">Lihat Detail</span>
                                        </a>
                                    </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\aplikasi_pegawai\resources\views/admin/verifikasi-usulan/index/kenaikan-pangkat.blade.php ENDPATH**/ ?>