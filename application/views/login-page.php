<html lang="en" class="perfect-scrollbar-on"><head>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>/assets/demo/demo.css" rel="stylesheet">
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/39/5/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/39/5/util.js"></script></head>

  <body style="background-color: #F7F7F7">
    <div class="content">
      <div class="container p-4">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <img src="<?php echo base_url('assets/img/logo-dinas-ketenagakerjaan-maluku-tengah.png') ?>" alt="logo-dinas-ketenagakerjaan-maluku-tengah.png" class="img-fluid w-100">
            <h2 class="text-center my-4">Login Area</h2>
            <form class="" action="<?php echo site_url('welcome/log_process') ?>" method="post">
              <div class="form-group">
                <!-- <label for="username">Username</label> -->
                <input type="text" name="username" class="form-control" placeholder="username" required>
              </div>
              <div class="form-group">
                <!-- <label for="password">Password</label> -->
                <input type="password" name="password-user" class="form-control" placeholder="password" required>
              </div>
              <div class="form-group text-center">
                <input type="submit" name="submit" value="Login" class="btn btn-primary">
              </div>
            </form>
            <p class="text-center">Made By Dinas ketenagakerjaan dan Transmigrasi<br><b>Maluku Tengah <br> <?php echo date('Y') ?></b></p>
          </div>
        </div>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>/assets/js/core/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="<?php echo base_url()?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="<?php echo base_url()?>/assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url()?>/assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url()?>/assets/demo/demo.js"></script>
  </body>
  </html>
