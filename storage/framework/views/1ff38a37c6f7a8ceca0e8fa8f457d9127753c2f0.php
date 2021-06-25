<div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Keluar" jika anda yakin untuk keluar dari halaman web ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form action="<?php echo e(route('admin.logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-primary">Keluar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/layouts/includes/logout.blade.php ENDPATH**/ ?>