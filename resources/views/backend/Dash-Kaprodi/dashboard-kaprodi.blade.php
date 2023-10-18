<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | @yield('second')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Script Atas Start  -->
    @include('backend.Dash-Kaprodi.partials.atas')
    <!-- Script Atas End  -->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Header Start -->
        @include('backend.Dash-Kaprodi.partials.header')
        <!-- Header End -->


        <!-- Sidebar Start -->
        @include('backend.Dash-Kaprodi.partials.sidebar')
        <!-- Sidebar End -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('title')
                    <small>@yield('second')</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">@yield('title')</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                @yield('content')
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer Start -->
        @include('backend.Dash-Kaprodi.partials.footer')
        <!-- Footer End -->

        <!-- Control Sidebar -->
        @include('backend.Dash-Kaprodi.partials.control-sidebar')
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- Script Bawah Start -->
    @include('backend.Dash-Kaprodi.partials.bawah')
    <!-- Script Bawah End -->
</body>

</html>
