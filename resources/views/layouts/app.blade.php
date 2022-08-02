<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Plusfin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-light">
    <!-- Left navbar links -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-icon" style="color: black" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-icon dropdown-toggle" style="color: black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" style="color: black" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" style="color: black" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Plusfin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
          </div>
        </div>       
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item">
                  <a href="#" class="nav-link">
                    Painel
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="#" class="nav-link">
                    Entrada
                  </a>
                  </li>
                   <li class="nav-item">
                  <a href="/saida" class="nav-link">
                   Saida
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="#" class="nav-link menu-toggle">
                    Caixa
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Aporte
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Caixa Banco
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Retirada
                    </a>
                    </li>
                  </ul>
                   </li>
                  <li class="nav-item">
                  <a href="#" class="nav-link menu-toggle">
                    Gerenciamento
                  </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/atualizarsaidas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Atualizar Saidas
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/aprovarsaidas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Aprovar Saidas
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/auditoriaentrada" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Auditoria Entrada
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/auditoriasaida" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Auditoria Saida
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/enviardocumento" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Enviar Documento
                    </a>
                    </li>
                     <li class="nav-item">
                    <a href="/pagamentosaidas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Pagamento Saidas
                    </a>
                    </li>
                     <li class="nav-item">
                    <a href="/efetivarentradas" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Efetivar entradas
                    </a>
                    </li>
                     <li class="nav-item">
                    <a href="/chequedevolvido" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      Cheque Devolvido
                    </a>
                    </li>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link menu-toggle">
                      Cadastros
                    </a>               
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="{{ route('origens')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    Origens
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="/aprovarsaidas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Aprovar Saidas
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="/auditoriaentrada" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Auditoria Entrada
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="/auditoriasaida" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Auditoria Saida
                  </a>
                  </li>
                  <li class="nav-item">
                  <a href="/enviardocumento" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Enviar Documento
                  </a>
                  </li>
                   <li class="nav-item">
                  <a href="/pagamentosaidas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Pagamento Saidas
                  </a>
                  </li>
                   <li class="nav-item">
                  <a href="/efetivarentradas" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Efetivar entradas
                  </a>
                  </li>
                   <li class="nav-item">
                  <a href="/chequedevolvido" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    Cheque Devolvido
                  </a>
                  </li>
                </li>
                </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
    <!-- /.container-fluid -->
    @yield('content')
    </div>
  <!-- /.content -->
  </div>
   <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a>Plusfin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

  
  <!-- REQUIRED SCRIPTS -->
  
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>
  
  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
  </body>
  </html>