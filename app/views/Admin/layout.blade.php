<!doctype html>
<html lang="en">
<head>
@include('Admin/meta')
<title>Laravel Authentication</title>
@include('Admin/css')
@include('Admin/js')
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
@include('Admin/header')

<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Left Sidebar user panel -->

@include('Admin/leftSidebar')
              <!-- sidebar menu: : style can be found in sidebar.less -->
@include('Admin/menu')
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
@include('Admin/breadcumb')

<!-- Main content -->
<section class="content">

<!-- Small boxes (Stat box) -->
@yield('content')



</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->



</body>





</html>