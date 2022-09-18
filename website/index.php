<?php require_once "login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> GreenVilla-Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon"> 

</head>

<body>
  <!-- Start Header -->
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
   <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/banner.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Laundry & Dry Cleaning <span>Service</span></h2>
              <p>We care for the clothes your wear. we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics.We are passionate about changing the way you think about laundry!</p>
              <div class="text-center"><a href="schedule-pickup.php" class="btn-get-started">Order Now</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <!-- <div class="carousel-item" style="background-image: url(assets/img/slide/electric-iron.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Eco Friendly Cleaning</h2>
              <p>we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We use safe and clean perc-free solvents, so you, and the Earth, can look good.</p>
              <div class="text-center"><a href="pricing.php" class="btn-get-started">Order Now</a></div>
            </div>
          </div>
        </div> -->

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/banner3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Our Approach</h2>
              <p>We approach workforce accommodations with a property development mindset. Our “Develop. Own. Operate.” business model produces integrated solutions that enable clients to focus on their core business.</p>
              <div class="text-center"><a href="schedule-pickup.php" class="btn-get-started">Order Now</a></div>
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
                  <p>WE use environmental friendly things. We work with the environment in mind. No harsh chemicals.</p>
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
              <a href="services/laundry-services.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dry Cleaning Services</a></h4>
              <p class="description">SMU students and local residents love on our reliable dry cleaning services for the fast, accurate, top quality results.</p>
              <a href="services/dry-cleaning.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bucket-fill"></i></div>
              <h4 class="title"><a href="">Carpet / Rugs Cleaning</a></h4>
              <p class="description">To keep carpet at peak performance, we recommend professional deep cleaning your carpet every 12 to 18 months.</p>
              <a href="services/carpet-cleaning.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-water"></i></div>
              <h4 class="title"><a href="">Steam Iron</a></h4>
              <p class="description">These services are accomplished under the guidance of adroit personnel who have affluent industry proficiency.</p>
              <a href="services/steam-iron.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Curtains Cleaning</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              <a href="services/curtains-cleaning.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-droplet"></i></div>
              <h4 class="title"><a href="">Iron Only</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              <a href="#" class="more-info">See more...</a>
            </div>
          </div>
        </div>

        <div class="btn-order">
          <a href="schedule-pickup.php"><button>Schedule Your Pickup</button></a>
        </div>
        

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= How it works ======= -->
    <div class="works">
      <h3>[  Get Your Clothes Clean ]</h3>
        <h1>How It Works</h1>
        <p class="para">Taking the stress out of any aspect of cleaning is what we specialise in. We will come to your premises and offer a free quote, so you know exactly what you’ll be spending</p>
      <div class="row">
        <div class="col-md-4">
          <div class="inner">
            <img src="assets/img/tshirt.png" width="70px">
            <h2>1. Prepare</h2>
            <p>Prepare your laundry bag <br>ready to pick up.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="inner">
            <img src="assets/img/shipping.png" width="70px">
            <h2>2. Request & Pickup</h2>
            <p>Request and we'll pick up laundry from location</p>
          </div>
        </div>
        <div class="col-md-4">
          <div  class="inner">
            <img src="assets/img/fast-delivery.png" width="70px">
            <h2>3. Delivered</h2>
            <p>We will process and deliver ironed and cleaned clothes.</p>
          </div>
        </div>
        
      </div>
    </div>
 
    <!-- ======= Why choose us Section ======= -->
    <section>
      <div class="general services">
        <h3>[ Trusted Laundry Service ]</h3>
        <h1>Why Choose Us</h1>
        <p class="para">Laundry services are considerably the most convenient services that people look for. Laundry is one of the most difficult chores that we have to deal with on a regular basis.</p>
      </div>

      <div class="row choose-us">
        <div class="col-md-3 left-column my-auto">
          <img src="assets/img/diamond.png" alt="Icon" width="60px">
          <h2>Affordable Pricing</h2>
          <p>Prices that suits your pocket is one of our USP. An option of choosing between 2 types of pricing is available.</p>
          <br><br>

          <img src="assets/img/umbrella.png" alt="Icon" width="60px">
          <h2>Convenience</h2>
          <p>With just a tap of a button, your laundry gets done, giving your leisure time to spend with family and friends.</p>

        </div>

        <div class="col-md-6 center-img my-auto" style="text-align: center;">
          <img src="assets/img/img.jpg" width="90%" style="overflow: hidden; border: 5px solid #DDDDDD; border-radius: 100%"><br>
          <!-- <button class="btn btn-success">Learn More</button> -->
        </div>

        <div class="col-md-3 right-column my-auto">
          <img src="assets/img/home.png" alt="Icon" width="60px">
          <h2>Quality</h2>
          <p>We use the best in class products, to assure that your favorite clothes are always there for you to wear.</p>

          <br><br>

          <img src="assets/img/crew.png" alt="Icon" width="60px">
          <h2>Express Delivery</h2>
          <p>Forgot to wash your clothes for interview/business meeting, never mind. With our super express delivery, we would get your laundry done in less than 8 hours.</p>

        </div>
        
      </div>
      
    </section>
    <!-- ======= Why choose us Section end ======= -->


    <!-- ======= Promo Section ======= -->
    <section id="cta" class="promo">
      <div class="container">

        <div class="row align-items-center h-100">
          <div class="col-md-6">
            <h3>Quality Service with Free<span> Collection & Delivery</span></h3>
            <p> It is our goal to offer you the best possible laundry and dry cleaning service available.</p>
            <a class="cta-btn" href="schedule-pickup.php">Schedule Your Pickup</a>
          </div>
          <div class="col-md-6 cta-btn-container">
            <img src="assets/img/promo-img.png" width="95%">
          </div>
        </div>

      </div>
    </section>
    <!-- End Promo Section -->

    <!--Map ssection-->
   <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>
    <!--Map Section end--> 

  </main><!-- End #main --> 

   <!-- Start Footer -->
  <?php include("footer.php"); ?> 
   <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>
  
  <script src="assets/js/main.js"></script>

</body>

</html>