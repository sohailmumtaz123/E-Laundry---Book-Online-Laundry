<?php require_once "login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> GreenVilla- Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v4.2.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- Start Header -->
   <!-- End Header -->
   <?php
    if($_SESSION['email'] == true){
       include("header-logout.php");
    }
    else{
        include("header.php");
        // echo $_SESSION['info'];
        // echo $_SESSION['email'];
    }
    ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/hero-4.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Laundry & Dry Cleaning <span>Service</span></h2>
              <p>We care for the clothes your wear. we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics.We are passionate about changing the way you think about laundry!</p>
              <div class="text-center"><a href="pricing.php" class="btn-get-started">Order Now</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/hero-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Eco Friendly Cleaning</h2>
              <p>we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We use safe and clean perc-free solvents, so you, and the Earth, can look good.</p>
              <div class="text-center"><a href="pricing.php" class="btn-get-started">Order Now</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/hero-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Our Approach</h2>
              <p>We approach workforce accommodations with a property development mindset. Our “Develop. Own. Operate.” business model produces integrated solutions that enable clients to focus on their core business.</p>
              <div class="text-center"><a href="pricing.php" class="btn-get-started">Order Now</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

      <!-- ======= Contact Section ======= -->
    
      <div class="container home-info contact">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-patch-check"></i>
                  <h4>High Quality</h4>
                  <p>We work hard to make sure that the clothes you get back are spotless and ready for action.</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-shield-check"></i>
                  <h4>Cleaner & Greener</h4>
                  <p>We work with the environment in mind. No harsh chemicals.</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-hand-thumbs-up"></i>
                  <h4>Happiness Guarantee</h4>
                  <p>If you're not completely satisfied with the wash or dry cleaning, we will re-process your clothes for free!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!-- End Contact Section -->

  <main id="main"> 

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <h3>[ Our Services ]</h3>
        <h1>Dry Cleaning & Laundry</h1>
        <p class="para">Laundry services are considerably the most convenient services that people look for. Laundry is one of the most difficult chores that we have to deal with on a regular basis.</p>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-gear"></i></div>
              <h4 class="title"><a href="">Laundry Services</a></h4>
              <p class="description">Let us pick up your dirty laundry, sort it, pre-treat stains, wash, dry, fold and deliver back to you in one neat, easy package.</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dry Cleaning Services</a></h4>
              <p class="description">SMU students and local residents love on our reliable dry cleaning services for the fast, accurate, top quality results.</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bucket-fill"></i></div>
              <h4 class="title"><a href="">Carpet / Rugs Cleaning</a></h4>
              <p class="description">To keep carpet at peak performance, we recommend professional deep cleaning your carpet every 12 to 18 months.</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-water"></i></div>
              <h4 class="title"><a href="">Steam Iron</a></h4>
              <p class="description">These services are accomplished under the guidance of adroit personnel who have affluent industry proficiency.</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Curtains Cleaning</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-droplet"></i></div>
              <h4 class="title"><a href="">Wash Only/Iron Only</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
        </div>

        <div class="btn-order">
          <a href="pricing.php"><button>Order Now</button></a>
        </div>
        

      </div>
    </section>
    <!-- End Services Section -->
 
    <!-- ======= Why choose us Section ======= -->
    <section>
      <div class="general services">
        <h3>[ Why choose us ]</h3>
        <h1>WHY CHOOOSE US</h1>
        <p class="para">Laundry services are considerably the most convenient services that people look for. Laundry is one of the most difficult chores that we have to deal with on a regular basis.</p>
      </div>

      <div class="row choose-us">
        <div class="col-md-3 left-column my-auto">
          <img src="assets/img/diamond.png" alt="Icon" width="60px">
          <h3>Affordable Pricing</h3>
          <p>Prices that suits your pocket is one of our USP. An option of choosing between 2 types of pricing is available.</p>
          <br><br>

          <img src="assets/img/umbrella.png" alt="Icon" width="60px">
          <h3>Convenience</h3>
          <p>With just a tap of a button, your laundry gets done, giving your leisure time to spend with family and friends.</p>

        </div>

        <div class="col-md-6 center-img my-auto" style="text-align: center;">
          <img src="assets/img/features-4.png" width="80%" height="80%" style="overflow: hidden; border: 8px solid #DDDDDD; border-radius: 100%"><br>
          <!-- <button class="btn btn-success">Learn More</button> -->
        </div>

        <div class="col-md-3 right-column my-auto">
          <img src="assets/img/home.png" alt="Icon" width="60px">
          <h3>Quality</h3>
          <p>We use the best in class products, to assure that your favorite clothes are always there for you to wear.</p>

          <br><br>

          <img src="assets/img/crew.png" alt="Icon" width="60px">
          <h3>Express Delivery</h3>
          <p>Forgot to wash your clothes for interview/business meeting, never mind. With our super express delivery, we would get your laundry done in less than 8 hours.</p>

        </div>
        
      </div>
      
    </section>
    <!-- ======= Why choose us Section end ======= -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>We've created more than <span>200 websites</span> this year!</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="contact.php">Request a quote</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!--Map ssection-->
   <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>
    <!--Map Section end--> 

  </main><!-- End #main --> 

   <!-- Start Footer -->
  <?php include("footer.php"); ?> 
   <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>