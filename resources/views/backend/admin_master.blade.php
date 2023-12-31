<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SBSC Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="    {{ asset('backend/assets/images/favicon.ico') }}">
    {{-- {{ asset('backend/') }} --}}
    <!-- jquery.vectormap css -->
    {{-- <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" /> --}}

    <!-- DataTables -->
    {{-- <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" /> --}}

    <!-- Responsive datatable examples -->
    {{-- <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" /> --}}
    @include('backend.css.css')
    <!-- Bootstrap Css -->
    {{-- <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" /> --}}
    <!-- Icons Css -->
    {{-- <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!-- App Css-->
    {{-- <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" /> --}}

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('backend.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            {{-- Main Content --}}
            @yield('content')
            <!-- End Page-content -->

            @include('backend.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('backend.js.js')
</body>

</html>
