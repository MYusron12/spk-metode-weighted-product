<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>

  <!-- css files -->
  <link href="<?= base_url('assets/home/'); ?>css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
  <link href="<?= base_url('assets/home/'); ?>css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
  <link href="<?= base_url('assets/home/'); ?>css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
  <!-- //css files -->

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  <!-- //google fonts -->

</head>

<body>


  <!-- //header -->
  <header class="py-4">
    <div class="container">
      <div id="logo">
        <h1> <a href="index.html"><span class="fa fa-cloud" aria-hidden="true"></span> <?= $title; ?></a></h1>
      </div>
      <!-- nav -->
      <nav class="d-lg-flex">

        <label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
        <input type="checkbox" id="drop" />
        <ul class="menu mt-2 ml-auto">
          <li class=""><a href="index.html"></a></li>
          <li class=""><a href="#about"></a></li>
          <li class=""><a href="team.html"> </a></li>
          <li class=""><a href="contact.html"> </a></li>
        </ul>
        <div class="login-icon ml-lg-2">
          <a class="user" href="<?= base_url('auth/'); ?>"> Login</a>
        </div>
      </nav>
      <div class="clear"></div>
      <!-- //nav -->
    </div>
  </header>
  <!-- //header -->

  <!-- banner -->
  <div class="banner" id="home">
    <div class="container">
      <div class="row banner-text">
        <div class="slider-info col-lg-6">
          <div class="banner-info-grid mt-lg-5">
            <h2>Menentukan</h2>
            <h2>Supplier Terbaik</h2>
            <br>
            <h2>--------------</h2>
            <p>Metode Weighted Product | PT. Matahari Nusantara Logistik.</p>
          </div>
          <a class="btn mr-2 text-capitalize" href="<?= base_url('auth/registration'); ?>">Daftar </a>
        </div>
        <div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
          <img src="<?= base_url('assets/home/'); ?>images/bannerpng.png" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->

  <!-- copyright -->
  <div class="copy-right-top border-top">
    <p class="copy-right text-center py-4">&copy; 2019 Digital. All Rights Reserved | Design by
      <a href="http://w3layouts.com/"> W3layouts </a>
    </p>
  </div>
  <!-- //copyright -->

  <!-- move top -->
  <div class="move-top text-right">
    <a href="#home" class="move-top">
      <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
    </a>
  </div>
  <!-- move top -->


</body>

</html>