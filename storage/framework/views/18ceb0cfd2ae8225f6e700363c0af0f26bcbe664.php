<?php $__env->startSection('pangkat', 'active'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-normal">PERSYARATAN PENGAJUAN KENAIKAN PANGKAT</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item align-items-center font-weight-light">
                            Surat Pengantar Usul Kenaikan Pangkat dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK PNS dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK Pangkat Terakhir dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            SK Jabatan Fungsional dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            Sertifikat Pendidik (Bagi Guru yang sudah bersertifikasi) dalam format file pdf.
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center font-weight-light">
                            Kartu Pegawai dalam format file pdf.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-normal">FORM PEGAJUAN KENAIKAN PANGKAT</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('pangkat.store')); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_pengantar">SURAT PENGANTAR</label>
                            </div>
                            <input id="file_pengantar" name="file_pengantar" type="file" class="file">
                            <?php $__errorArgs = ['file_pengantar'];
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
                                <label class="input-group-text font-weight-light" for="file_pns">SK PNS</label>
                            </div>
                            <input id="file_pns" name="file_pns" type="file" class="file">
                            <?php $__errorArgs = ['file_pns'];
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
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light" for="file_jabatan_fungsional">SK JABATAN FUNGSIONAL</label>
                            </div>
                            <input id="file_jabatan_fungsional" name="file_jabatan_fungsional" type="file" class="file">
                            <?php $__errorArgs = ['file_jabatan_fungsional'];
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
                                <label class="input-group-text font-weight-light" for="file_sertifikat_pendidikan">SERTIFIKAT PENDIDIKAN</label>
                            </div>
                            <input id="file_sertifikat_pendidikan" name="file_sertifikat_pendidikan" type="file" class="file">
                            <?php $__errorArgs = ['file_sertifikat_pendidikan'];
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
                                <label class="input-group-text font-weight-light" for="file_kartu_pegawai">KARTU PEGAWAI</label>
                            </div>
                            <input id="file_kartu_pegawai" name="file_kartu_pegawai" type="file" class="file">
                            <?php $__errorArgs = ['file_kartu_pegawai'];
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
                            $("#file_pengantar").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_pns").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_pangkat_terakhir").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_jabatan_fungsional").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_sertifikat_pendidikan").fileinput({
                                'language': 'id',
                                allowedFileExtensions: ["pdf"],
                                showPreview: false,
                            });
                            $("#file_kartu_pegawai").fileinput({
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

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project_website\aplikasi_pegawai\resources\views/user/usulan/create/kenaikan-pangkat.blade.php ENDPATH**/ ?>