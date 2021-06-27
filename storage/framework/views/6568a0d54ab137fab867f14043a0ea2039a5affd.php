<html>
<head>
    <style>
        body{

        }
    </style>
</head>

<body>
<table>
    <thead>
        <tr>
            <th>NAMA</th>
            <th>NIP</th>
            <th>STATUS PENGAJUAN</th>
            <th>TANGGAL PENGAJUAN</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $laporanUsulanKenaikanGaji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($laporan->nama); ?></td>
            <td><?php echo e($laporan->nip); ?></td>
            <td><?php echo e($laporan->status_verifikasi); ?></td>
            <td><?php echo e($laporan->created_at); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html>
<?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/laporan-pdf.blade.php ENDPATH**/ ?>