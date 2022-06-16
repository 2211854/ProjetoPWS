<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= APP_NAME ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./public1/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./public1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./public1/dist/css/adminlte.min.css">

    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">Administrador</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="./?c=login&a=logout"" role="button">
                <i class="fas fa-door-open"> Logout (<?php if(isset($username)){echo $username;} ?>)</i>
            </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="./public1/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Fatura +</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./public1/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php if(isset($username)){echo $username;} ?></a><!-- Ao clicar aqui abrir uma pagina do utilizador onde se pode alterar a password caso seja possivel -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <?php
            if(isset($role)){

            if($role == 'Cliente' || $role == 'Admin' || $role=='Funcionario'){
            ?>
          <li class="nav-header">Funções</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file-invoice-dollar"></i>
              <p>
                Faturas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <?php
                if($role == 'Admin' || $role == 'Funcionario'){
                ?>
              <li class="nav-item">
                <a href="./?c=fatura&a=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Criar</p>
                </a>
              </li>
                <?php } ?>
              <li class="nav-item">
                <a href="./?c=fatura&a=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historico</p>
                </a>
              </li>
            </ul>
          </li>

            <?php
            if($role == 'Admin' || $role == 'Funcionario'){
                ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-file-signature"></i>
                  <p>
                    Gestao
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./?c=produto&a=index" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Produtos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Stock</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./?c=iva&a=index" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>IVA</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./?c=empresa&a=index" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Empresa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            Utilizadores
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Clientes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./?c=user&a=create&role=Cliente" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Registar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./?c=user&a=index&tipo=Cliente" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gerir</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php if($role == 'Admin'){ ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Funcionários
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./?c=user&a=create&role=Funcionario" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Registar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./?c=user&a=index&tipo=Funcionario" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Gerir</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php
                    }
                }
            }
            ?>
        </ul>
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
