<?php

	session_start();
	if(!isset($_SESSION['usuario'])){
		header('location:index.php');
		exit();
	}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EBENEZER SERVIÇOS</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/bootstrapjsmanual/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
   
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
           <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 " >Area Administrativa</span>
                <img class="img-profile rounded-circle" src="">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="assets/php/logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  sair
                </a>
               </div>
            </li>
        <!-- CODIGO DE LOGOT --> 
        
        
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
     <a href="#" class="brand-link">
     <!--<img src="ebenezer%20logo.png " alt="AdminLTE  Logo" > -->
      <span class="brand-text font-weight text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EBENEZER SERVIÇOS</span>
    </a> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) --> 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                HOME
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
       
            
            <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Graficos
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-road"></i>
              <p>
                Frotas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                 <a href="pages/saida.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Saida</p>
            </a>
              </li>
              <li class="nav-item">
                <a href="./pages/entrada.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Entrada</p>
                </a>
              </li>
               <li class="nav-item">
                 <a href="pages/caminhao.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>listas de transportes</p>
            </a>
              </li>
                </ul>
              
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/caminhao.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Caminhão</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/trailler.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Trailler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/motorista.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Motorista</p>
                </a>
              </li>
            </ul>
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                 Conserto Geral
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                 <i class="nav-icon far fa-circle text-info"></i>
                  <p>Reparação de acidentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
                  <p>manutenção</p>
                </a>
              </li>
                </ul>
                        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
                Relatorio
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
              <p>Acidentes</p>
            </a>
              </li>
              <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
                  <p>Manutenção</p>
                </a>
              </li>
                <li class="nav-item">
                <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
              <p>Combustivel</p>
            </a>
              </li>
              <li class="nav-item">
               <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
              <p>Entradas</p>
            </a>
              </li>
                <li class="nav-item">
                   <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
              <p>Saidas</p>
            </a>
              </li>
                </ul>           
            </li>
                 <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-gas-pump"></i>
              <p>
               Estações de Combustível
                <span class="badge badge-info right"></span> 
              </p>
            </a>
            </li>
            
            
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                 Configuração
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="admin_preco_viagem.php" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
                  <p>Preço de viagem</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
                  <p>Tipo de veiculo</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
                  <p>Tipo de serviços</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="pages/pagina3.html" class="nav-link">
                   <i class="nav-icon far fa-circle text-info"></i>
                  <p>Estações de Combustível</p>
                </a>
              </li>
                </ul>
                 <li class="nav-item">
                  <li class="nav-item">
            <a href="admin-funcionario.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Funcionarios
                <span class="badge badge-info right"></span> 
              </p>
            </a>
            </li>  <li class="nav-item">
                  <li class="nav-item">
            <a href="admin-funcionario-inatvo.php" class="nav-link">
              <i class="nav-icon fas fa-users-slash"></i>
              <p>
               Funcionarios Inativos
                <span class="badge badge-info right"></span> 
              </p>
            </a>
            </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <script src="../../sweetalert2/sweetalert2@8"></script>
    