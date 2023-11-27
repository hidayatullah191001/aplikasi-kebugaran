<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$title ?></title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets2/')?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url('assets2/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets2/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets2/')?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets2/')?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url('assets2/')?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('assets2/')?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?=base_url('assets2/')?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets2/')?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.0.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="100">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?=base_url() ?>" class="logo d-flex align-items-center">
        <img src="<?=base_url('assets2/')?>assets/img/logo.png" alt="">
        <span>Aplikasi Tes Kebugaran</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active " href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Profile</a></li>
          <li><a class="nav-link scrollto" href="#features">Fitur</a></li>
          <li><a class="nav-link scrollto" href="#contact">Hubungi</a></li>
          <li><a class="getstarted scrollto" href="<?=base_url('auth/registration') ?>">Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->