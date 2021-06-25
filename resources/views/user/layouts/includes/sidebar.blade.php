<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMANSA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-columns"></i>
            <span>DASHBOARD</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Menu -->
    <div class="sidebar-heading">
        PENGAJUAN USULAN
    </div>

    <!-- Nav Item - Pages Collapse Pengajuan Usulan -->
    <li class="nav-item @yield('gaji')">
        <a class="nav-link" href="{{ route('gaji.index') }}">
            <i class="fas fa-clipboard-check"></i>
            <span>KENAIKAN GAJI</span>
        </a>
    </li>
    <li class="nav-item @yield('pangkat')">
        <a class="nav-link" href="{{ route('pangkat.index') }}">
            <i class="fas fa-clipboard-check"></i>
            <span>KENAIKAN PANGKAT</span>
        </a>
    </li>
    <li class="nav-item @yield('pensiun')">
        <a class="nav-link" href="{{ route('pensiun.index') }}">
            <i class="fas fa-clipboard-check"></i>
            <span>PENSIUN</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
