<body>
<?php echo e($tahun); ?>

<?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($l->nama); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/laporan-pdf.blade.php ENDPATH**/ ?>