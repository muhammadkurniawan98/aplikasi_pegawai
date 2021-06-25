<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMANSA</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?php echo $__env->yieldContent('admin-dashboard'); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="fas fa-columns"></i>
            <span>DASHBOARD</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        USULAN PEGAWAI
    </div>

    <li class="nav-item <?php echo $__env->yieldContent('admin-gaji'); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.gaji.index')); ?>">
            <i class="fas fa-clipboard-check"></i>
            <span>KENAIKAN GAJI</span>
        </a>
    </li>
    <li class="nav-item <?php echo $__env->yieldContent('admin-pangkat'); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.pangkat.index')); ?>">
            <i class="fas fa-clipboard-check"></i>
            <span>KENAIKAN PANGKAT</span>
        </a>
    </li>
    <li class="nav-item <?php echo $__env->yieldContent('admin-pensiun'); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.pensiun.index')); ?>">
            <i class="fas fa-clipboard-check"></i>
            <span>PENSIUN</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item <?php echo $__env->yieldContent('admin-rekapitulasi'); ?>">
        <a class="nav-link" href="<?php echo e(route('admin.rekapitulasi')); ?>">
            <i class="fas fa-clipboard-list"></i>
            <span>REKAPITULASI DATA PEGAWAI</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH D:\project_website\github\aplikasi_pegawai\resources\views/admin/layouts/includes/sidebar.blade.php ENDPATH**/ ?>