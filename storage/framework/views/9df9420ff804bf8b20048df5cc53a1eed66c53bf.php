<div class="modal fade" id="tolak_usulan_pensiun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Pesan
            </div>
            <div class="modal-body">
                Anda yakin ingin menolak usulan pensiun ini?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                <a href="<?php echo e(route('admin.pensiun.tolak', $usulanPensiun->id)); ?>" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/layouts/includes/tolak-usulan_pensiun.blade.php ENDPATH**/ ?>