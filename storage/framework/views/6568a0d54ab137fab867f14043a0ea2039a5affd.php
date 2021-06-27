<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header {
            background: #ffffff;
            color: #000000;
            width: 100%;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            align-items: center;
            margin: 25px;
        }
        .header .label-school{
            font-weight: bold;
            text-align: center;
        }
        .header .label-address{
            font-weight: lighter;
            text-align: center;
        }
        .header h3{
            text-align: center;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
        }
        .table thead tr{
            background: #f4ff8d;
            color: #000000;
            align-items: center;
            margin: 10px;
        }
        .table tr th, td{
            border: 1px solid;
            vertical-align: middle;
        }
        .table tr th{
            font-weight: bold;
            text-align: center;
            padding: 10px;
        }
        .table tr td{
            font-weight: normal;
            padding: 5px;
        }
        .td-left{
            align-items: start;
            text-align: left;
        }
        .td-center{
            align-items: center;
            text-align: center;
        }
        .alert-danger{
            background: #ff9e87;
        }
        .alert-success{
            background: #a1f575;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="label-school">
        SMA NEGERI 1 SEPUTIH BANYAK
    </div>
    <div class="label-address">
        <small>Jl. Raya Sri Basuki No. 01 Seputih Banyak 34156 Telp. (0725) 7623325</small>
    </div>
</header>
<hr>
<section>
    <div class="header">
        <h3><?php echo e($judul); ?></h3>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIP</th>
            <th>STATUS</th>
            <th>TANGGAL</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1?>
        <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="td-center"><?php echo e($i++); ?></td>
                <td class="td-left"><?php echo e($l->nama); ?></td>
                <td class="td-center"><?php echo e($l->nip); ?></td>
                <td class="td-center <?php if($l->status_verifikasi == 0): ?> alert-danger <?php else: ?> alert-success <?php endif; ?>"><?php echo e($l->status_verifikasi == 0? 'belum diproses':'sudah diproses'); ?></td>
                <td class="td-center"><?php echo e($l->created_at); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</section>
</body>
</html>
<?php /**PATH D:\project_website\github\clone\aplikasi_pegawai\resources\views/admin/laporan-pdf.blade.php ENDPATH**/ ?>