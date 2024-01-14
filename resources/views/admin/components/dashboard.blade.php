@extends('admin.layout.app')
@section('admin_content')
    <div class="sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('admin.components.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('admin.components.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Dashboard</h1>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- Main content -->

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">

                <strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
            </footer>

        </div>
    </div>
@endsection
@section('custom_js')
    <script></script>
@endsection
