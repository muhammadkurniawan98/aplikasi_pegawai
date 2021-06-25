<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMA NEGERI 1 SEPUTIH BANYAK - </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!--  -->
    <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
    <link href="{{ asset('/css/fileinput-rtl.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
        wish to resize images before upload. This must be loaded before fileinput.min.js -->
    <script src="{{ asset('/js/piexif.min.js') }}" type="text/javascript"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
        This must be loaded before fileinput.min.js -->
    <script src="{{ asset('/js/sortable.min.js') }}" type="text/javascript"></script>
    <!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js
    3.3.x versions without popper.min.js. -->
    <script src="{{ asset('/js/popper.min.js') }}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
        dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- the main fileinput plugin file -->
    <script src="{{ asset('/js/fileinput.min.js') }}"></script>
    <!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
    <script src="{{ asset('/js/theme.js') }}"></script>
    <script src="{{ asset('/js/locales/id.js') }}"></script>

</head>

<body id="page-top">


<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
@include('admin.layouts.includes.sidebar')

<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('admin.layouts.includes.navbar')

            @yield('content')
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.layouts.includes.footer')
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
@include('admin.layouts.includes.scroll-btn')

<!-- Logout Modal-->
@include('admin.layouts.includes.logout')

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

@include('admin.layouts.includes.rekapitulasi-kenaikan_gaji')
@include('admin.layouts.includes.rekapitulasi-kenaikan_pangkat')
@include('admin.layouts.includes.rekapitulasi-pensiun')
@include('admin.layouts.includes.status-kepegawaian')
@include('admin.layouts.includes.status-tunjangan')

<!-- Custom scripts for all pages-->
<script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
