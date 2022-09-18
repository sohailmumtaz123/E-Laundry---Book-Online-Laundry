<?php require_once "login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services-Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


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
      <div class="container">

        <div class="justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Start Tabs Section- ======= -->
   <div class="pricing_text tabs_text">
      <h3>[ Our Service ]</h3>
      <h1>Dry Cleaning & Laundry</h1>
      <p>Laundry services are considerably the most convenient services that people look for. Laundry is one of the most difficult chores that we have to deal with on a regular basis.</p>
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">LAUNDRY SERVICES</a></h4>
              <p class="description">Let us pick up your dirty laundry, sort it, pre-treat stains, wash, dry, fold and deliver back to you in one neat, easy package.</p>
              <a href="services/laundry-services.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">DRY CLEANING SERVICES</a></h4>
              <p class="description">SMU students and local residents love on our reliable dry cleaning services for the fast, accurate, top quality results.</p>
              <a href="services/dry-cleaning.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">CARPET / RUGS CLEANING</a></h4>
              <p class="description">To keep carpet at peak performance, we recommend professional deep cleaning your carpet every 12 to 18 months.</p>
              <a href="services/carpet-cleaning.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">CURTAINS CLEANING</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              <a href="services/curtains-cleaning.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">STEAM IRON</a></h4>
              <p class="description">These services are accomplished under the guidance of adroit personnel who have affluent industry proficiency.</p>
              <a href="services/steam-iron.php" class="more-info">See more...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">WASH ONLY/IRON ONLY</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
               <a href="services/steam-iron.php" class="more-info">See more...</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- Commercial Laundry Service -->
    <section id="commercial">
      <div class="row commercial">
        <div class="col-md-6 order-sm-2 my-auto" id="text_colm">
          <div class="inner_section">
            <h2>[ Laundry service for your business! ]</h2>
            <h1>Commercial Laundry Service</h1>
            <p>
              Large corporations have determined that there is a financial benefit to outsourcing back office work because it saves money. Allowing us to do your laundry is cost effective and will allow you and your employees to focus on your core business. We offer smart solutions to meet your commercial laundry needs. Our Commercial Laundry Clients include:
            </p>
            <ul data-aos="fade-up">
                <li><span>✔</span> 100% Customer Satisfaction</li>
                <li><span>✔</span> Free Collection & Delivery</li>
                <li><span>✔</span> Affordable Prices</li>
                <li><span>✔</span> Affordable Prices</li>
              </ul>
          </div>
        </div>
        <div class="col-md-6 order-sm-1">
          <img src="assets/img/commercial.jpg">
          
        </div>
      
    </div>
    </section>
    <!-- Commercial Laundry Service End -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>

</body>

</html>