<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("statusTunjangan");
    var statusTunjangan = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Menerima Tunjangan", "Tidak Menerima Tunjangan"],
            datasets: [{
                data: resolveData(),
                backgroundColor: ['#6287f5', '#f36464'],
                hoverBackgroundColor: ['#3737e3', '#ff3636'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
            cutoutPercentage: 80,
        },
    });

    function resolveData(){
        var data = [];

        <?php $__currentLoopData = rasioStatusTunjangan(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            data.push(<?php echo e($status); ?>);
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        return data;
    }
</script>
<?php /**PATH D:\project_website\github\aplikasi_pegawai\resources\views/admin/layouts/includes/status-tunjangan.blade.php ENDPATH**/ ?>