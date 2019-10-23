<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\icon\icofont\css\icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/'); ?>\files\assets\css\style.css">

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
    <script type="text/javascript" src="<?php echo base_url('assets/adminty/'); ?>\files\assets\js\common-pages.js"></script>
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

<body class="fix-menu">
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

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/adminty/'); ?>\files\assets\images\logos.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Log In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" id="email" name="email" class="form-control" required placeholder="Alamat Email">
                                    <span class="form-bar"></span>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>

                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.htm" class="text-right f-w-600"> Lupa Password?</a>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <a class="row m-t-30">
                                    <a class="col-md-12">
                                        <button onclick="dashboard()" type="button" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Login</button>
                                    </a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>


        <script type="text/javascript">
            function dashboard(){
                window.location = "<?php echo site_url('Dashboard') ?>";
            }
        </script>
    </section>
    <!-- Required Jquery -->
    
</body>

</html>