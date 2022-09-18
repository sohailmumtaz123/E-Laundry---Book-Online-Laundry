<?php require_once "login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About-Laundry Services</title>
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
    }
    ?> 
   <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container align-middle">

        <div class=""> <!-- add class "d-flex" -->
          <h2>About</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-md-7 order-sm-2 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">About us</h3>
              <p data-aos="fade-up">
                We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics. Plus, we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We are passionate about changing the way you think about laundry!
              </p><br>
              <ul data-aos="fade-up">
                <li><span>✔</span> 100% Customer Satisfaction</li>
                <li><span>✔</span> Free Collection & Delivery</li>
                <li><span>✔</span> Affordable Prices</li>
                <li><span>✔</span> Affordable Prices</li>
              </ul>
            </div><!-- End .content-->
          </div>

          <div class="image col-md-5 order-sm-1 d-flex align-items-stretch justify-content-lg-start" data-aos="fade-right">
          </div>

        </div>

      </div>
    </section>

    <!-- Our Mission Our Vision -->
    <div class="our-mission">
      <div class="row content">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Our Mission</h4>
                  <p>Aims to be a national market leader in the provision of cleaning services delivering reliable, quality, cost effective cleaning solutions to our customers</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Our Vision</h4>
                  <p>We have more than 215 franchise locations across the United States and Canada. All of them are committed to the same common values and principles.</p>
                </div>
      </div>
    </div>
    <!-- End About Us Section -->

    <!-- Contact us Strip Section -->
    <!-- <div>
      <div class="row contact">
        <div class="col-lg-2"></div>
        <div class="col-lg-5" style="text-align: right">
          <h1>THis is heading 1</h1>
        </div>
        <div class="col-lg-3">
          <h3>this is h3</h3>
        </div>
        <div class="col-lg-2"></div>
        
      </div>
    </div> -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>If you’re not happy, <span>just let us know!</span></h3>
            <p> In case of any problem, let us know. We’ll work to make it right.Our goal is Your satisfaction (of course after our laundry work). Office Phone works around the clock (24/7).</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-right">
            <a class="cta-btn align-middle" href="contact.php">Contact US</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section --> 

    <!-- Our History -->
    <section id="history">
      <div class="row history">
        <div class="col-md-6 my-auto" id="text_colm">
          <div class="inner_section">
            <h2>[ Our History ]</h2>
            <h1>Laundry & Dry Cleaning Foundation</h1>
            <p>
              Founded in 1990, we follow a dream and an We aim to serve our customers in a way that far exceeds expectation. Being one of the leading laundry service providers, we know our customers’ mindset. It is not easy to come home from a hectic day at the office and rush to the nearest laundry service with your clothes. So, we have an array of services to make things easy for you. <br><br>

              You need not tolerate late deliveries, low standard of work merged with high prices. Our services cater to all your laundering and ironing, dry cleaning, shoe repairs, upholstery cleaning, etc.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="assets/img/history.jpg">
          
        </div>
      
    </div>
    </section>
    <!-- Our History End -->

    

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sohail Mumtaz</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Saad Wasim</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Saveed Shah</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?> 
  <!-- ======= End Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>

</body>

</html>