<?php require_once "../login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Curtains Cleaning - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.jpg" rel="icon">
  <link href="../assets/img/favicon.jpg" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

  <!-- Vendor CSS Files -->
  <!--<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">-->
  <!--<link href="../assets/vendor/aos/aos.css" rel="stylesheet">-->
  <!--<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <!--<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">-->
  <!--<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">-->
  <!--<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">-->
  <!--<link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->

  <!-- Template Main CSS File -->
  <!--<link href="../assets/css/style.css" rel="stylesheet">-->

</head>

<body> 

  <!-- ======= Header ======= -->
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
          <h2>Curtains Cleaning </h2>
          <ol>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../services.php">Services</a></li>
            <li>Curtains Cleaning </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/curtains1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                Curtains Cleaning 
              </h2>

              <div class="entry-content">
                <p>
                  Our cleaning system sets us apart. Our customers keep coming back to us, because we provide services that work and keep their homes and apartments clean, right down to the little details. This extensive cleaning system, which we call our Detail-Clean Rotation System, which has been proven to be effective in more than five million cleans!
                </p>

                <!-- <blockquote>
                  <p>
                    Laundry's Wash and Fold, also called Fluff and Fold, or simply Drop Off Laundry, is the perfect solution to your laundry needs as a busy parent, professional, senior citizen or student. Use drop off laundry and free more of your time and energy to work, play, or just relax. Let wash, dry, and fold your clothes for you!
                  </p>
                </blockquote> -->

                <h3>How does our apartment cleaning program work?</h3>
                <p>
                  We start with a thorough detail-clean throughout your house over the course of the first two cleans. On the first clean, our maid service will thoroughly clean your apartment, with special attention on your kitchen and bathrooms. On the second session, we’ll clean your entire apartment, but this time we’ll provide detail-clean services in your sleeping and living areas. We’ll continue to maintain this detail-clean level throughout your home throughout our next visits by providing deep cleaning services on a rotating basis.
                </p>
                
                <!-- <div class="row">
                  <div class="col-md-6">
                    <img src="assets/img/services01.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-6">
                    <img src="assets/img/service02.jpg" class="img-fluid" alt="">
                  </div>
                </div> -->

                <div>
                <a href="../schedule-pickup.php"><button class="btn-get-services">Get Services Now</button></a>
                </div>

                <p></p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Laundry Services</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Clean</a></li>
                  <li><a href="#">Folded</a></li>
                  <li><a href="#">Delivery</a></li>
                </ul>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <!-- <h3 class="sidebar-title">Categories</h3> -->
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="laundry-services.php">Laundry Services</a></li>
                  <li><a href="dry-cleaning.php">Dry Cleaning</a></li>
                  <li><a href="carpet-cleaning.php">Carpet Cleaning</a></li>
                  <li><a href="steam-iron.php">Steam Iron</a></li>
                  <li class="active"><a href="curtains-cleaning.php">Curtains Cleaning</a></li>
                  <li><a href="#">Wash only / Iron Only</a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <!-- For sidebar -->
            <div class="wrapper" id="sidebar-contact">

              <header>Send us a Message</header>
              <hr style="margin:10px 25px;">

              <form action="#">
                <div class="dbl-field subject">
                  <div class="field">
                    <input type="text" name="name" placeholder="Enter your name">
                    <i class='fas fa-user'></i>
                  </div>
                </div>

                <div class="dbl-field subject">
                  <div class="field">
                    <input type="text" name="email" placeholder="Enter your email">
                    <i class='fas fa-envelope'></i>
                  </div>
                </div>
                <div class="dbl-field subject">
                  <div class="field">
                    <input type="text" name="subject" placeholder="Subject">
                    <i class='bi bi-pencil-fill'></i>
                  </div>
                </div>

                <div class="message">
                  <textarea placeholder="Write your message" name="message"></textarea>
                  <i class="material-icons">message</i>
                </div>

                <div class="button-area">
                  <button type="submit">Send Message</button>
                  <span></span>
                </div>
              </form>
            </div>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?> 
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--<script src="../assets/vendor/aos/aos.js"></script>-->
  <!--<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
  <!--<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>-->
  <!--<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>-->
  <!--<script src="../assets/vendor/php-email-form/validate.js"></script>-->
  <!--<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>-->
  <!--<script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>-->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <!-- Script for Contact form -->
  <script src="script.js"></script>

</body>

</html>