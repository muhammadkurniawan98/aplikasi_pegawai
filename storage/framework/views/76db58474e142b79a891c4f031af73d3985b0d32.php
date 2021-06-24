<div class="modal fade" id="changeProfilePicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingin Ganti Foto Profil?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <form action="<?php echo e(route('picture.save')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input id="photo" name="photo" type="file" class="file">
                    </div>

                    <div class="form-group mr-auto">
                        <button type="submit" id="send_form" name="submit" class="btn btn-primary">Save</button>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#photo").fileinput({
        'language': 'id',
        allowedFileExtensions: ["png", "jpg", "jpeg"],
        showPreview: true,
    });
</script>
<?php /**PATH D:\project_website\github\aplikasi_pegawai\resources\views/user/layouts/includes/change-photo.blade.php ENDPATH**/ ?>