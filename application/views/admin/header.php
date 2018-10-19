<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css') ?>">

  </head>
  <body class="text-dark">
  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info py-3 sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand" href="<?php echo site_url('admin') ?>">EPOM | Nurul Fikri</a>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown
          <?php
          if($page === 'pengajar' || $page === 'murid')
          {
            echo "active";
          }
          ?>
          ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Data Master
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('admin/pengajar') ?>">Pengajar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo site_url('admin/murid') ?>">Murid</a>
            </div>
          </li>
          <li class="nav-item dropdown
          <?php
          if($page === 'kriteria')
          {
            echo "active";
          }
          ?>
          ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kriteria dan Sub Kriteria
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('admin/kriteria') ?>">Kriteria</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo site_url('admin/subkriteria') ?>">Sub Kriteria</a>
            </div>
          </li>
          <li class="nav-item
          <?php
          if($page === 'penilaian')
          {
            echo "active";
          }
          ?>
          ">
            <a href="<?php echo site_url('admin/penilaian') ?>" class="nav-link">Penilaian</a>
          </li>
          <li class="nav-item
          <?php
          if($page === 'laporan')
          {
            echo "active";
          }
          ?>
          ">
            <a href="<?php echo site_url('admin/laporan') ?>" class="nav-link">Laporan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/logout') ?>">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>