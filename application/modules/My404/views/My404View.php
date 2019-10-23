<!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
    <meta charset="utf-8">
    <title>Adminty - Premium Admin Template by Colorlib</title>
    <meta name="description" content="Flat able 404 Error page design">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Codedthemes">
    <!-- ================= Favicons ================== -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/adminty/files/extra-pages/404/1/'); ?>/img\favicon.ico">
    <!-- ============== Resources style ============== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminty/files/extra-pages/404/1/'); ?>/css\style.css">
</head>

<body class="bubble">
    <canvas id="canvasbg"></canvas>
    <canvas id="canvas"></canvas>
    <!-- Your logo on the top left -->
  
    <div class="content">
        <div class="content-box">
            <div class="big-content">
                <!-- Main squares for the content logo in the background -->
                <div class="list-square">
                    <span class="square"></span>
                    <span class="square"></span>
                    <span class="square"></span>
                </div>
                <!-- Main lines for the content logo in the background -->
                <div class="list-line">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <!-- The animated searching tool -->
                <i class="fa fa-search color" aria-hidden="true"></i>
                <!-- div clearing the float -->
                <div class="clear"></div>
            </div>
            <!-- Your text -->
            <h1>Error 404 not found.</h1>
            <p>Halaman yang anda cari tidak ada.
                <br> Halaman mungkin sudah dihapus.</p>
        </div>
    </div>
    <footer class="light">
        <ul>
            <li><a href="<?php echo site_url('Dashboard'); ?>">Kembali</a></li>
        </ul>
    </footer>
    <script src="<?php echo base_url('assets/adminty/files/extra-pages/404/1/'); ?>/js\jquery.min.js"></script>
    <script src="<?php echo base_url('assets/adminty/files/extra-pages/404/1/'); ?>/js\bootstrap.min.js"></script>
    <!-- Bubble plugin -->
    <script src="<?php echo base_url('assets/adminty/files/extra-pages/404/1/'); ?>/js\bubble.js"></script>
</body>

</html>
