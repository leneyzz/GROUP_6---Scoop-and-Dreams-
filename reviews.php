<?php

$img1 = "assets/img/testimonials/testimonials-1.jpg";
$img2 = "assets/img/testimonials/testimonials-2.jpg";
$img3 = "assets/img/testimonials/testimonials-3.jpg";
$img4 = "assets/img/testimonials/testimonials-4.jpg";
$img5 = "assets/img/testimonials/testimonials-5.jpg";

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
      <h1><?php echo "Reviews"?></h1>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
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
          <li><a href="team.php"><?php echo "Team"?></a></li>
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

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?php echo "Reviews"?></h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo " OK hands-down this is the best ice cream I think I’ve ever had an existence of my life. It’s so creamy and delicious. There’s pieces of chocolate all around it, inside of it."?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3><?php echo "Saul Goodman"?></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo "Too much chocolate to ice cream ratio. And if you follow the instructions to how to crack the chocolate shell the ice cream gets all melty. Still liked it but prefer the mini bars."?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3><?php echo "Sara Wilsson"?></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo "I love this ice cream. It feels rich with flavor without the 'imported from France' priceline that normally follows. I scarcely eat ice cream  when I do, I have enjoyed this one thoroughly."?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3><?php echo "Jena Karlis"?></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo "Probably the yummiest ice cream I've ever inhaled!! Very interesting idea to totally surround the ice cream with a hard chocolate shell. It gives you more time to come to your senses."?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3><?php echo "Matt Brandon"?></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo "The chocolate is pretty good but the vanilla ice cream lacked any real flavor, it was almost like eating thick whipped cream. It was almost on the level of generic brands like Eddy's."?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3><?php echo "John Larson"?></h3>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
   
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
    &copy; <?php echo "Copyright"?> <strong><span><?php echo "Scoops & Dreams!"?></span></strong>.
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