<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIANIMA</title>

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
    <link href="../admin/dist/css/AdminLTE.css" rel="stylesheet" type="text/css">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Styles -->
    <style>
     

        .position-ref {
            position: relative;
        }

        
        .bottom-right {
            position: absolute;
            right: 0px;
            bottom: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }




        .planeta {
            -webkit-animation: spin 25s infinite linear;
        }
        @-webkit-keyframes spin { 
            

            100% {
                transform: rotate(-360deg);
            } 
        }

        .boneco1 {
            -webkit-animation: bonum 2s infinite linear;
        }
        @-webkit-keyframes bonum { 
            0% { 
                opacity: 0;
            } 
            20% { 
                opacity: 1;
            }
            40% { 
                opacity: 0;
            }
            60% { 
                opacity: 0;
            }
            80% { 
                opacity: 0;
            }
            100% { 
                opacity: 0;
            } 

        }

        .boneco2 {
            -webkit-animation: bodois 2s infinite linear;
        }
        @-webkit-keyframes bodois { 
            0% { 
                opacity: 0;
            }
            20% { 
                opacity: 0;
            } 
            40% { 
                opacity: 1;
            }
            60% { 
                opacity: 0;
            }
            80% { 
                opacity: 0;
            }
            100% { 
                opacity: 0;
            } 
        }

        .boneco3 {
            -webkit-animation: botres 2s infinite linear;
        }
        @-webkit-keyframes botres { 
            0% { 
                opacity: 0;
            }
            20% { 
                opacity: 0;
            }
            40% { 
                opacity: 0;
            } 
            60% { 
                opacity: 1;
            }
            80% { 
                opacity: 0;
            }
            100% { 
                opacity: 0;
            } 
        }

        .boneco4 {
            -webkit-animation: boquatro 2s infinite linear;
        }
        @-webkit-keyframes boquatro { 
            0% { 
                opacity: 0;
            }
            20% { 
                opacity: 0;
            }
            40% { 
                opacity: 0;
            }
            60% { 
                opacity: 0;
            }
            80% { 
                opacity: 1;
            }
            100% { 
                opacity: 0;
            } 
        }

        .boneco5 {
            -webkit-animation: bocinco 2s infinite linear;
        }
        @-webkit-keyframes bocinco { 
            0% { 
                opacity: 1;
            }
            10% { 
                opacity: 0;
            }
            40% { 
                opacity: 0;
            }
            60% { 
                opacity: 0;
            }
            80% { 
                opacity: 0;
            }
            100% { 
                opacity: 1;
            } 
        }



    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../images/logoanimamundip.png" style="width:85%"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="../images/logoanimamundi.png" style="width:85%"></span>
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

          <li class="dropdown user user-menu">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown">
              <button class="btn">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-home" style="color#fff"></i>
                  <span class="hidden-xs" style="color:#333">Home</span>
                </a>
              </button>
            </a>
            @else
            <div style="margin-right:10px; margin-top:5px">
                
                <a href="{{ url('/login') }}">
                <button class="btn">
                  <i class="fa fa-lock" style="color#fff"></i>
                  <span class="hidden-xs" style="color:#333">Login</span>
                </button>
                </a>
                
                <a href="{{ url('/register') }}">
                <button class="btn">
                  <i class="fa fa-plus-square" style="color#fff"></i>
                  <span class="hidden-xs" style="color:#333">Registre-se</span>
                </button>
                </a>
            </div>
            @endif
            @endauth
            
            
          </li>

          @else
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        @endauth
            </div>
            @endif
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
          <img src="../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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

  @endif

    <div>
        

        <div class="content">
            <br><br><br><br><br><br><br>






            <div style="position: relative; right:290px; width:100%">
                <!--Laravel-->
                

                <img src="../../public/images/fundo.png" style="width:40%; position: absolute">
                <img src="../../public/images/planeta.png" class="planeta" style="width:7%; margin-left:223px; margin-top:34px; position: absolute">
                <img src="../../public/images/bonecos1.png" class="boneco1" style="width:40%; position: absolute">
                <img src="../../public/images/bonecos2.png" class="boneco2" style="width:40%; position: absolute">
                <img src="../../public/images/bonecos3.png" class="boneco3" style="width:40%; position: absolute">
                <img src="../../public/images/bonecos4.png" class="boneco4" style="width:40%; position: absolute">
                <img src="../../public/images/bonecos1.png" class="boneco5" style="width:40%; position: absolute">
            </div>

            
        </div>
        <div class="bottom-right">
            <a href="http://www.atratec.com.br" target="_blank"><img src="../../public/images/logoatra.png" style="width:50%"></a>
        </div>
    </div>

    

<!-- JS-->

<!-- jQuery 2.2.3 -->
<script src="../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../admin/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../admin/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>


</body>
</html>
