<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
    content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?=$title ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/') ?>assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/') ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/') ?>dist/css/style.min.css" rel="stylesheet">

</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <a class="navbar-brand" href="<?=base_url('home') ?>">
                    <strong>Aplikasi Tes Kebugaran</strong>
                </a>
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                  <ul class="navbar-nav float-left mr-auto">

                  </ul>
                  <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img style="object-fit: cover; height: 31px"
                      src="<?=base_url('assets/assets/images/users/').$user['image']?>" alt="user" class="rounded-circle"
                      width="31"></a>
                      <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="<?=base_url('auth/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i>
                        Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>