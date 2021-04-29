<?php 
session_start();
if(empty($_SESSION['id_admin'])){ header('location:../'); }
require '../config/koneksi.php'; require '../config/function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>template/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base; ?>template/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="favicon.ico">
    <link rel="shortcut icon" href="<?php echo $base; ?>template/img/surat.png">
    <script src="<?php echo $base; ?>template/js/jquery-3.2.1.min.js"></script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">Admin</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?php echo $base; ?>admin/proses/controller.php?aksi=logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo $base; ?>template/img/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nama']; ?></p>
          <p class="app-sidebar__user-designation">Web Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo $base; ?>admin"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">CRUD</span></a></li>
        
      </ul>
    </aside>