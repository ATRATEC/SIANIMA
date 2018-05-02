<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>-->

        <!-- Fonts -->
          <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
          <link href="../../admin/dist/css/AdminLTE.css" rel="stylesheet" type="text/css">

          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- Bootstrap 3.3.6 -->
          <link rel="stylesheet" href="../../admin/bootstrap/css/bootstrap.min.css">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
          <!-- Ionicons -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
          <!-- Theme style -->
          <link rel="stylesheet" href="../../admin/dist/css/AdminLTE.min.css">
          <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
          <link rel="stylesheet" href="../../admin/dist/css/skins/_all-skins.min.css">
          <!-- iCheck -->
          <link rel="stylesheet" href="../../admin/plugins/iCheck/flat/blue.css">
          <!-- Morris chart -->
          <link rel="stylesheet" href="../../admin/plugins/morris/morris.css">
          <!-- jvectormap -->
          <link rel="stylesheet" href="../../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
          <!-- Date Picker -->
          <link rel="stylesheet" href="../../admin/plugins/datepicker/datepicker3.css">
          <!-- Daterange picker -->
          <link rel="stylesheet" href="../../admin/plugins/daterangepicker/daterangepicker.css">
          <!-- bootstrap wysihtml5 - text editor -->
          <link rel="stylesheet" href="../../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

          <link rel="stylesheet" href="../../admin/plugins/datatables/dataTables.bootstrap.css">
          <link rel="stylesheet" href="../../admin/dist/css/skins/_all-skins.min.css">

          <style>

          /*
          .table {
              width: 97%;
              max-width: 100%;
              margin-bottom: 1rem;
              background-color: transparent;
            }

            .table th,
            .table td {
              padding: 0.75rem;
              vertical-align: top;
              border-top: 1px solid #dee2e6;
            }

            .table thead th {
              vertical-align: bottom;
              border-bottom: 2px solid #dee2e6;
            }

            .table tbody + tbody {
              border-top: 2px solid #dee2e6;
            }

            .table .table {
              background-color: #fff;
            }

            .table-sm th,
            .table-sm td {
              padding: 0.3rem;
            }

            .table-bordered {
              border: 1px solid #dee2e6;
            }

            .table-bordered th,
            .table-bordered td {
              border: 1px solid #dee2e6;
            }

            .table-bordered thead th,
            .table-bordered thead td {
              border-bottom-width: 2px;
            }

            .table-borderless th,
            .table-borderless td,
            .table-borderless thead th,
            .table-borderless tbody + tbody {
              border: 0;
            }

            .table-striped tbody tr:nth-of-type(odd) {
              background-color: rgba(0, 0, 0, 0.05);
            }

            .table-hover tbody tr:hover {
              background-color: rgba(0, 0, 0, 0.075);
            }

            .table-primary,
            .table-primary > th,
            .table-primary > td {
              background-color: #c5e2f2;
            }

            .table-hover .table-primary:hover {
              background-color: #b0d8ed;
            }

            .table-hover .table-primary:hover > td,
            .table-hover .table-primary:hover > th {
              background-color: #b0d8ed;
            }

            .table-secondary,
            .table-secondary > th,
            .table-secondary > td {
              background-color: #d6d8db;
            }

            .table-hover .table-secondary:hover {
              background-color: #c8cbcf;
            }

            .table-hover .table-secondary:hover > td,
            .table-hover .table-secondary:hover > th {
              background-color: #c8cbcf;
            }

            .table-success,
            .table-success > th,
            .table-success > td {
              background-color: #c3e9da;
            }

            .table-hover .table-success:hover {
              background-color: #b0e2ce;
            }

            .table-hover .table-success:hover > td,
            .table-hover .table-success:hover > th {
              background-color: #b0e2ce;
            }

            .table-info,
            .table-info > th,
            .table-info > td {
              background-color: #dfeaf0;
            }

            .table-hover .table-info:hover {
              background-color: #cedfe8;
            }

            .table-hover .table-info:hover > td,
            .table-hover .table-info:hover > th {
              background-color: #cedfe8;
            }

            .table-warning,
            .table-warning > th,
            .table-warning > td {
              background-color: #f0ebd0;
            }

            .table-hover .table-warning:hover {
              background-color: #eae3bd;
            }

            .table-hover .table-warning:hover > td,
            .table-hover .table-warning:hover > th {
              background-color: #eae3bd;
            }

            .table-danger,
            .table-danger > th,
            .table-danger > td {
              background-color: #edcfc3;
            }

            .table-hover .table-danger:hover {
              background-color: #e7bfaf;
            }

            .table-hover .table-danger:hover > td,
            .table-hover .table-danger:hover > th {
              background-color: #e7bfaf;
            }

            .table-light,
            .table-light > th,
            .table-light > td {
              background-color: #fdfdfe;
            }

            .table-hover .table-light:hover {
              background-color: #ececf6;
            }

            .table-hover .table-light:hover > td,
            .table-hover .table-light:hover > th {
              background-color: #ececf6;
            }

            .table-dark,
            .table-dark > th,
            .table-dark > td {
              background-color: #c6c8ca;
            }

            .table-hover .table-dark:hover {
              background-color: #b9bbbe;
            }

            .table-hover .table-dark:hover > td,
            .table-hover .table-dark:hover > th {
              background-color: #b9bbbe;
            }

            .table-active,
            .table-active > th,
            .table-active > td {
              background-color: rgba(0, 0, 0, 0.075);
            }

            .table-hover .table-active:hover {
              background-color: rgba(0, 0, 0, 0.075);
            }

            .table-hover .table-active:hover > td,
            .table-hover .table-active:hover > th {
              background-color: rgba(0, 0, 0, 0.075);
            }

            .table .thead-dark th {
              color: #fff;
              background-color: #212529;
              border-color: #32383e;
            }

            .table .thead-light th {
              color: #495057;
              background-color: #e9ecef;
              border-color: #dee2e6;
            }

            .table-dark {
              color: #fff;
              background-color: #212529;
            }

            .table-dark th,
            .table-dark td,
            .table-dark thead th {
              border-color: #32383e;
            }

            .table-dark.table-bordered {
              border: 0;
            }

            .table-dark.table-striped tbody tr:nth-of-type(odd) {
              background-color: rgba(255, 255, 255, 0.05);
            }

            .table-dark.table-hover tbody tr:hover {
              background-color: rgba(255, 255, 255, 0.075);
            }

            @media (max-width: 575.98px) {
              .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
              }

              .table-responsive-sm > .table-bordered {
                border: 0;
              }
            }

            @media (max-width: 767.98px) {
              .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
              }

              .table-responsive-md > .table-bordered {
                border: 0;
              }
            }

            @media (max-width: 991.98px) {
              .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
              }

              .table-responsive-lg > .table-bordered {
                border: 0;
              }
            }

            @media (max-width: 1199.98px) {
              .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
              }

              .table-responsive-xl > .table-bordered {
                border: 0;
              }
            }

            .table-responsive {
              display: block;
              width: 100%;
              overflow-x: auto;
              -webkit-overflow-scrolling: touch;
              -ms-overflow-style: -ms-autohiding-scrollbar;
            }

            .table-responsive > .table-bordered {
              border: 0;
            }
            */
          </style>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">







    <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../../images/logoanimamundip.png" style="width:85%"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="../../images/logoanimamundi.png" style="width:85%"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          @if (Auth::guest())

          @else
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>Animamundi</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Perfil</a>-->
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                  </form>  
                </div>
              </li>
            </ul>
          </li>
          @endif
          <!-- Control Sidebar Toggle Button -->
          <!--
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          -->
        </ul>
      </div>
    </nav>
  </header>


  @if (Auth::user())
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU PRINCIPAL</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Cadastros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('fornecedor.index') }}"><i class="fa fa-circle-o"></i> Fornecedores</a></li>
            <li><a href="{{ route('servico.index') }}"><i class="fa fa-circle-o"></i> Serviços</a></li>
          </ul>
        </li>
        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  @else
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Faça login ou<br> cadastre-se</p>
          <a href="#"  style="margin-top:-5px; position: absolute"><i class="fa fa-circle text-red"></i> Offline</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU PRINCIPAL</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Cadastros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('fornecedor.index') }}"><i class="fa fa-circle-o"></i> Fornecedores</a></li>
            <li><a href="{{ route('servico.index') }}"><i class="fa fa-circle-o"></i> Serviços</a></li>
          </ul>
        </li>
        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  @endif





        <div class="content-wrapper">
        <div id="app" style="margin-left:5px; margin-right:15px; padding-top:10px">            
            @yield('content')
            <!--
            <footer class="fixed-bottom ">
                <div class="row">
                    <div class="col-md-12 justify-content-end" style="text-align: end">teste de footer modal</div>
                </div>

            </footer>
            -->
        </div>
        </div>


        <!-- Scripts -->
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>        -->
        <script src="{{ asset('js/app.js') }}"></script>        
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });        
        </script>
        @yield('script')




    </body>

<!-- JS-->

<!-- jQuery 2.2.3 -->
<script src="../../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../../admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="../admin/dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="../admin/dist/js/demo.js"></script>  -->
<script src="../../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->


</html>
