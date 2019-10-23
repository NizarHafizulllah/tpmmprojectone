<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\css\jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\scss\partials\menu\_pcmenu.htm">

     <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script src="<?php echo base_url('assets/adminty/'); ?>\files\assets\js\pcoded.min.js"></script>
    <script src="<?php echo base_url('assets/adminty/'); ?>\files\assets\js\vartical-layout.min.js"></script>
    <script src="<?php echo base_url('assets/adminty/'); ?>\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\assets\js\script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <img class="img-fluid" src="<?php echo base_url('assets/adminty/'); ?>\files\assets\images\logos2.png" alt="Theme-Logo">
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url('assets/adminty/'); ?>\files\assets\images\default.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>M. Rezkha Adhitya</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= site_url('login') ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel">Administrator</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="<?= site_url('dashboard') ?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="pcoded-navigatio-lavel">Kendaraan Baru</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu <?php if($title=='Pendaftaran BBN 1'||$title=='Registrasi BBN 1'||$title=='Monitor Print Kartu Induk BBN 1'||$title=='Print Tanda Terima BBN 1'||$title=='Verifikasi BBN 1'||$title=='Penulisan BBN 1'||$title=='Cetak Legalitas BPKB BBN 1'||$title=='Laporan BBN 1'||$title=='Laporan BBN 1'){ echo "active pcoded-trigger"; } ?> ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">BBN1</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if($title=='Pendaftaran BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuPendaftaran">
                                                <span class="pcoded-mtext">Pendaftaran</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Registrasi BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuRegistrasi">
                                                <span class="pcoded-mtext">Registrasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Monitor Print Kartu Induk BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuMonitorKartuInduk">
                                                <span class="pcoded-mtext">Monitor Print Kartu Induk</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Print Tanda Terima BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuTandaTerima">
                                                <span class="pcoded-mtext">Print Tanda Terima</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Verifikasi BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuVerifikasi">
                                                <span class="pcoded-mtext">Verifikasi </span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Penulisan BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuPenulisan">
                                                <span class="pcoded-mtext">Penulisan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Penyerahan BPKB BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuPenyerahan">
                                                <span class="pcoded-mtext">Penyerahan BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Laporan BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuLaporan">
                                                <span class="pcoded-mtext">Laporan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if($title=='Cetak Legalitas BBN 1'){ echo 'active'; } ?>">
                                            <a href="BbnSatuLegalitas">
                                                <span class="pcoded-mtext">Cetak Legalitas</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="pcoded-navigatio-lavel">Kendaraan Lama</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">BBN2</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index-1.htm">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4><?= $title; ?></h4>
                                                        <span><?= $subtitle; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="#"> <i class="feather icon-home"></i> Dashboard </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <?php echo $content; ?>

                                </div>
                            </div>
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
   
</body>

</html>