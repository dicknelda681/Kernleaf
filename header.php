<?php include('data.php')?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?= $site['title']; ?></title>
      <meta name="description" content="<?= $site['description']; ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/hamburgers.min.css">
      <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
      <link rel="stylesheet" href="assets/css/gijgo.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/animated-headline.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6972158a4e6a21197c2fee45/1jfiq8a1i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
      <!-- ? Preloader Start -->
      <div id="preloader-active">
         <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
               <div class="preloader-circle"></div>
               <div class="preloader-img pere-text" style="font-weight:bold;">
                  <!-- <img src="assets/img/logo/loder.png" alt=""> -->
                    <?= $site['logo_text']; ?>
               </div>
            </div>
         </div>
      </div>
      <!-- Preloader Start -->
<header>
  <div class="header-area">
    <div class="main-header header-sticky">
      <div class="container-fluid">
        <div class="row align-items-center">

          <!-- Logo -->
          <div class="col-xl-2 col-lg-2 col-md-1">
            <div class="logo">
              <a href="/" style="color:black; font-weight:bold;">
                <?= $site['logo_text']; ?>
              </a>
            </div>
          </div>

          <!-- Navigation -->
          <div class="col-xl-9 col-lg-10">
            <div class="main-menu black-menu menu-bg-white d-none d-lg-block">

              <!-- Phone Button -->
              <div class="hamburger hamburger--collapse is-active">
                <a href="tel:<?= $site['phone_link']; ?>"
                   style="color:#fff; padding:8px 10px; background:black; font-weight:500;">
                  <?= $site['phone']; ?>
                </a>
              </div>

              <nav class="hamburger-menu nav-menu-show">
                <ul id="navigation">
                  <?php foreach ($nav_menu as $item): ?>
                    <li>
                      <a href="<?= $item['link']; ?>">
                        <?= $item['label']; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </nav>

            </div>
          </div>

          <!-- Mobile Menu -->
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</header>

      <main>