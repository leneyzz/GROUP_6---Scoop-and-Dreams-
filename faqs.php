<?php

$img1 = "assets/img/ice/sundae.jpg";
$img2 = "assets/img/ice/matcha.jpg";
$img3 = "assets/img/ice/blue.jpg";
$img4 = "assets/img/ice/strawberry.jpg";
$img5 = "assets/img/ice/vanillarain.jpg";
$img6 = "assets/img/ice/unicorn.jpg";
$img7 = "assets/img/ice/choco.jpg";
$img8 = "assets/img/ice/oreo.jpg";
$img9 =  "assets/img/ice/homemade.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo "Valera Bootstrap Template"?> - <?php echo "Index"?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Valera
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/valera-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div class="hero-container">
      <h1><?php echo "FAQs on Delivery"?></h1>
    </div>
  </section><!-- End Hero -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php"><?php echo "Scoops & Dreams"?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="home.php"><?php echo "Home"?></a></li>
          <li><a href="about.php"><?php echo "About"?></a></li>
          <li><a href="popular.php"><?php echo "Popular"?></a></li>
          <li><a href="flavors.php"><?php echo "Flavors"?></a></li>
          <li><a href="reviews.php"><?php echo "Reviews"?></a></li>
          <li><a href="team.php"><?php echo "Teams"?></a></li>
          <li class="dropdown"><a href="#"><span><?php echo "Drop Down"?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#"><? echo "Drop Down 1"?></a></li>
              <li class="dropdown"><a href="#"><span><?php echo "Deep Drop Down"?></span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="prices.php"><?php echo "Prices"?></a></li>
                  <li><a href="brand.php"><?php echo "Brand"?></a></li>
                  <li><a href="buy.php"><?php echo "Where To Buy:"?></a></li>
                </ul>
              </li>
              <li><a href="bestseller.php"><?php echo "Best Seller"?></a></li>
              <li><a href="deals.php"><?php echo "Exciting Deals"?></a></li>
              <li><a href="faqs.php"><?php echo "FAQS on Delivery"?></a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php"><?php echo "Contact"?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
 
        <div class="section-title">
          <h2><?php echo "FAQs"?></h2>
          <p><?php echo "In these uncertain times, we hope to bring you some calm and peace as you enjoy your favorite comfort food. Shop from home and we will take care of everything else for you."?></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <h4 class="title"><a href=""><?php echo "How can I pay?"?></a></h4>
              <p class="description"><?php echo "We accept payments via GCash, PayPal, bank deposits, debit and credit cards. Otherwise, the order will not be processed. We don't accept cash on delivery (COD)."?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <h4 class="title"><a href=""><?php echo "How will items be pack?"?></a></h4>
              <p class="description"><?php echo "Items will be packed inside biodegradable plastic bags, and shipped via riders using insulator bags."?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <h4 class="title"><a href=""><?php echo "How fast can you ship my order?"?></a></h4>
              <p class="description"><?php echo "If the items are available and payment has been verified before 5:00 pm, we can ship within the day. For orders placed after 5:00 pm, delivery is not guaranteed within the day and may be shipped the next day."?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <h4 class="title"><a href=""><?php echo "Where can you deliver?"?></a></h4>
              <p class="description"><?php echo " In Metro Manila, we deliver to Alabang, Caloocan, Fairview, Makati, Malabon, Mandaluyong, Manila, Marikina, Novaliches, Pasay, Pasig, San Juan, Taguig, Quezon City and Valenzuela City."?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <h4 class="title"><a href=""><?php echo "Who will arrange the delivery?"?></a></h4>
              <p class="description"><?php echo "We will be the one to arrange for your delivery once proof of payment has been verified. We rely on third party delivery riders which use insulator bags for delivery."?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <h4 class="title"><a href=""><?php echo "When can we expect our delivery to arrive?"?></a></h4>
              <p class="description"><?php echo "Delivery time is between 30 minutes to 2 hours, depending on distance and road conditions. Delivery operations are open from 9:30 am to 7 pm, Mondays to Saturdays excluding holidays."?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3><?php echo "Scoops & Dreams"?></h3>
            <p><?php echo "The ultimate destination for ice cream lovers."?></p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; <?php echo "Copyright"?> <strong><span><?php echo "Valera"?></span></strong>. <?php echo "All Rights Reserved"?>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/valera-free-bootstrap-theme/ -->
        <?php echo "Designed by"?> <a href="https://bootstrapmade.com/"><?php echo "BootstrapMade"?></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>