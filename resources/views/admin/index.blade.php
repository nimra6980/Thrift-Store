<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tabib-v2.inaikas.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tabib Apps web | Admin Dashboard Template'}}">
    <title>Hexashop Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('user/assets/images/logo.png')}}">
    <!-- Base Styling  -->
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/style.css')}}">
</head>

<body>
    <div id="main-wrapper" class="show">
    @include("admin.sidepanel");
    @include("admin.logo_component");
    @include("admin.header");
    @include("admin.content_section");
    @include("admin.footer");
</div>

<!-- JQuery v3.5.1 -->
<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('admin/assets/plugins/popper/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
    <!-- Moment -->
    <script src="{{asset('admin/assets/plugins/moment/moment.min.js')}}"></script>
    <!-- Date Range Picker -->
    <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.min.j')}}"></script>
    <!-- Datatable -->
    <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/init-tdatatable.js')}}"></script>
    <!-- Chart js -->
    <script src="{{asset('admin/assets/plugins/chart/chart/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/charts-custom.js')}}"></script>
    <!-- Main Custom JQuery -->
    <script src="{{asset('admin/assets/js/toggleFullScreen.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    <script src="{{asset('admin/assets/js/option-themes.js')}}"></script>
</body>


<!-- Mirrored from tabib-v2.inaikas.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:50:49 GMT -->
</html>