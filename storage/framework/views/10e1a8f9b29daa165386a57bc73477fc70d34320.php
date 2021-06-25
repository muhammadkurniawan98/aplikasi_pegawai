<div class="modal fade" id="usulanKenaikanGaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">VERIFIKASI USULAN?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih file SK usulan kenaikan gaji lalu klik kirim untuk verifikasi.</div>
            <div class="modal-footer">
                <form action="<?php echo e(route('admin.gaji.verifikasi', $usulanKenaikanGaji->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="file_sk_usulan_kenaikan_gaji">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\project_website\aplikasi_pegawai\resources\views/admin/layouts/includes/verifikasi-usulan_kenaikan_gaji.blade.php ENDPATH**/ ?>