<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>SIMRANMOR</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
        <link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="../../../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/media/img/logo/favicon.ico" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/app/media/img//bg/bg-3.jpg);">
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="#">
                                <img width="96px" height="80px" src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/app/media/img/logos/lantas.png">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">SIMRANMOR</h3>
                            </div>
                            <form id="formdata" class="m-login__form m-form" >
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Nama Pengguna" name="email" autocomplete="off" id="email">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Kata Sandi" name="password" id="password">
                                </div>
                                
                                <div class="m-login__form-action">
                                    <button id="loginbtn" type="button" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Masuk</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
        <script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts -->
        <script src="<?php echo base_url('assets/adminty/newassets'); ?>/sweetalert29.js"></script>

        <?php $this->load->view($this->controller.'ViewJs'); ?>
        <script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>