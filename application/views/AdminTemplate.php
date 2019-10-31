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
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">

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
                        <img class="img-fluid" src="<?= base_url('assets/adminty/'); ?>\files\assets\images\logos2.png" alt="Theme-Logo">
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
                                <li class="pcoded-hasmenu <?php if ($title == 'Pendaftaran BBN 1' || $title == 'Registrasi BBN 1' || $title == 'Monitor Print Kartu Induk BBN 1' || $title == 'Print Tanda Terima BBN 1' || $title == 'Verifikasi BBN 1' || $title == 'Penulisan BBN 1' || $title == 'Cetak Legalitas BPKB BBN 1' || $title == 'Penyerahan BPKB BBN 1' || $title == 'Laporan BBN 1' || $title == 'Cetak Legalitas BBN 1') {
                                                                echo "active pcoded-trigger";
                                                            } ?> ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">BBN1</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Pendaftaran BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuPendaftaran">
                                                <span class="pcoded-mtext">Pendaftaran</span>
                                            </a>
                                        </li>

                                        <li class="<?php if ($title == 'Registrasi BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuRegistrasi">
                                                <span class="pcoded-mtext">Registrasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Monitor Print Kartu Induk BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuMonitorKartuInduk">
                                                <span class="pcoded-mtext">Monitor Print Kartu Induk</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Print Tanda Terima BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuTandaTerima">
                                                <span class="pcoded-mtext">Print Tanda Terima</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Verifikasi BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuVerifikasi">
                                                <span class="pcoded-mtext">Verifikasi </span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penulisan BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuPenulisan">
                                                <span class="pcoded-mtext">Penulisan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penyerahan BPKB BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuPenyerahan">
                                                <span class="pcoded-mtext">Penyerahan BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan BBN 1') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="BbnSatuLaporan">
                                                <span class="pcoded-mtext">Laporan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Cetak Legalitas BBN 1') {
                                                        echo 'active';
                                                    } ?>">
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
                                        <span class="pcoded-mtext">Ganti Nama</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Pendaftaran Ganti Nama') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pendaftaran</span>
                                            </a>

                                        </li>
                                        <li class="<?php if ($title == 'Registrasi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Registrasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Pengambilan Arsip') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pengambilan Arsip</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Monitor Prin Kartu Induk') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Monitor Print Kartu Induk</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Print Tanda Terima') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Print Tanda Terima </span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Verifikasi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Verifikasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penulisan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penulisan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penyerahan BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penyerahan BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Laporan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Cek Legalitas') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Cek Legalitas</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Perubahan</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'BBN 2') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">BBN 2</span>
                                            </a>

                                        </li>
                                        <li class="<?php if ($title == 'Jenis Perubahan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Jenis Perubahan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan Ganti Identitas') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Laporan Ganti Identitas</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Pengambilan Arsip KI') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pengambilan Arsip KI</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Administrasi Data</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Administrasi TTD Buku') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Administrasi TTD Buku</span>
                                            </a>

                                        </li>
                                        <li class="<?php if ($title == 'Cetak Sket BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Cetak Sket BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Monitoring Pendaftaran Dealer') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Monitoring Pendaftaran Dealer</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Loket BRI') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Loket BRI</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Ralat') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Ralat </span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Administrasi Rekon') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Administrasi Rekon</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Mutasi Keluar</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Pendaftaran Mutasi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pendaftaran Mutasi</span>
                                            </a>

                                        </li>
                                        <li class="<?php if ($title == 'Entry Mutasi LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Entry Mutasi LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Print Kartu Induk LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Print Kartu Induk LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penyerahan Mutasi LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penyerahan Mutasi LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Pengambilan Arsip Kartu Induk MLD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pengambilan Arsip Kartu Induk MLD </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Blokir BPKB</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Blokir BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Blokir BPKB</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Nopol</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Alokasi Wilayah') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Alokasi Wilayah</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'ALokasi No. Registrasi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">ALokasi No. Registrasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Rekom') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Rekom</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Daftar List Nopol') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Daftar List Nopol</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Nopol Sementara') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Nopol Sementara</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Edit No. Polisi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Edit No. Polisi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Material</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Label Material') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Label Material</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Administrasi Sistem</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'User Komputer Klien') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">User Komputer Klien</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Konfigurasi Sistem') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Konfigurasi Sistem</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'User Management For APM') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">User Management For APM</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Report dan Monitoring</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Jurnal BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Jurnal BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Status Penerbitan BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Status Penerbitan BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Edit Data BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Edit Data BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Monitor PNBP') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Monitor PNBP</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Pendaftaran BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pendaftaran BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Pencarian BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pencarian BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Status Penyelesaian Berkas') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Status Penyelesaian Berkas</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Mutasi LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Mutasi LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Blokir') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Blokir</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'History BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">History BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan L405B') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Laporan L405B</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan Peruntukan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Laporan Peruntukan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Referensi Data Samsat') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Referensi Data Samsat</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Filer Data BPKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Filer Data BPKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Report Data eFaktur') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Report Data eFaktur</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Data Master</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'ATPM') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">ATPM</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Bahan Bakar') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Bahan Bakar</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Cara Import') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Cara Import</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Dealer') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Dealer</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Jenis') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Jenis</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Jenis Daftaran') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Jenis Daftaran</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Kelurahan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Kelurahan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Merk') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Merk</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Model') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Model</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Perubahan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Perubahan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Peruntukan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Peruntukan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Polda') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Polda</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Polres') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Polres</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Warna') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Warna</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Warna Kartu') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Warna Kartu</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Warna TNKB') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Warna TNKB</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Data Faktur') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Data Faktur</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Referensi Type') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Referensi Type</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Input Master Material') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Input Master Material</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Ex Luar Daerah</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Pendaftaran Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pendaftaran Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Register Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Register Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Monitor Print Kartu Induk LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Monitor Print Kartu Induk LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Verifikasi Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Verifikasi Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Print Tanda Terima Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Print Tanda Terima Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penulisan Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penulisan Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penyerahan Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penyerahan Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Cek Legalitas Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Cek Legalitas Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Perubahan Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Perubahan Ex LD</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan Ex LD') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Laporan Ex LD</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Duplikat BPKB</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="<?php if ($title == 'Pendaftaran Duplikat') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Pendaftaran Duplikat</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Registrasi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Registrasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Monitor Print Kartu Induk') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Monitor Print Kartu Induk</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Print Tanda Terima') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Print Tanda Terima</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Verifikasi') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Verifikasi</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penulisan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penulisan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Penyerahan') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Penyerahan</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Cetak Legalitas') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Cetak Legalitas</span>
                                            </a>
                                        </li>
                                        <li class="<?php if ($title == 'Laporan Duplikat') {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="#">
                                                <span class="pcoded-mtext">Laporan Duplikat</span>
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
                                    <div class="page-header text-center">
                                        <div class="row align-items-end">
                                            <div class="col-lg-12">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4><?= $title; ?></h4>
                                                        <!-- <span><?= $subtitle; ?></span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <?= $content; ?>

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