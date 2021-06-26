<?php $__env->startSection('gaji', 'active'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-normal">PERSYARATAN PENGAJUAN KENAIKAN GAJI</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK Pangkat Terakhir dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK Gaji Berkala Terakhir dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            Dokumen Simpedu dalam format file pdf.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-normal">FORM PENGAJUAN KENAIKAN GAJI</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('gaji.store')); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_pangkat_terakhir">SK PANGKAT TERAKHIR</label>
                            </div>
                            <input id="file_pangkat_terakhir" name="file_pangkat_terakhir" type="file" class="file">
                            <?php $__errorArgs = ['file_pangkat_terakhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div id="notification" style="display: none">
                                Notifikasi
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_gaji_berkala">SK GAJI BERKALA</label>
                            </div>
                            <input id="file_gaji_berkala" name="file_gaji_berkala" type="file" class="file">
                            <?php $__errorArgs = ['file_gaji_berkala'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_dokumen_simpedu">DOKUMEN SIMPEDU</label>
                            </div>
                            <input id="file_dokumen_simpedu" name="file_dokumen_simpedu" type="file" class="file">
                            <?php $__errorArgs = ['file_dokumen_simpedu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="alert-danger">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="send_form" class="btn btn-success">Kirim</button>
                        </div>

                        <script>
                            $("#file_pangkat_terakhir").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_gaji_berkala").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_dokumen_simpedu").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });

                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/user/usulan/create/kenaikan-gaji.blade.php ENDPATH**/ ?>