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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand" href="<?php echo site_url('murid') ?>">EPOM | Nurul Fikri</a>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item
          <?php
          if($page === 'penilaian')
          {
            echo "active";
          }
          ?>
          ">
            <a href="<?php echo site_url('murid/penilaian') ?>" class="nav-link">Penilaian Pengajar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('murid/logout') ?>">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>