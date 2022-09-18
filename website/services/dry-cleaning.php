<?php require_once "../login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dry Cleaning - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/favicon.png" rel="apple-touch-icon">

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
          <h2>Dry Cleaning </h2>
          <ol>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../services.php">Services</a></li>
            <li>Dry Cleaning </li>
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
                <img src="../assets/img/dry-cleaning.jpeg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                Dry Cleaning 
              </h2>

              <div class="entry-content">
                <p>
                  Dry Cleaning is a process that cleans clothes without water. The cleaning fluid that is used is a liquid, and all garments are immersed and cleaned in a liquid solvent -- the fact that there is no water is why the process is called "dry cleaning." Dry cleaning helps to return garments to a spotless condition using measures to prevent shrinkage, loss of color, and change of texture or finish. At National Dry Cleaners, we don’t use the old dangerous chemical perchloroethylene or perc. We use state of the art Hydrocarbon solvent that is safe for all uses and does not leave an odor.<br><br>
                  We, at National Dry Cleaners, care for each garment as if it were our own. We get rid of dirt and everyday odors from a variety of fabrics without affecting the color or causing undesirable shrinkage. Each article of clothing goes through a detailed process, beginning with inspection, stain-removal and cleaning, then final inspection and packaging.
                  <br><br>
                  We also offer urgent dry cleaning services.
                </p>

                <blockquote>
                  <p>
                    Our cleaning system sets us apart. Our customers keep coming back to us, because we provide services that work and keep their homes and apartments clean, right down to the little details. This extensive cleaning system, which we call our Detail-Clean Rotation System, which has been proven to be effective in more than five million cleans!
                  </p>
                </blockquote>

                <h3>How does our apartment cleaning program work?</h3>
                <p>
                  Our dry steam cleaning system ensures the all dirt is pulled out from the carpet fibers, which is very damaging. The products that we are using ensure 99% elimination of bacteria. This doesn't mean that we'll fade away the color of your carpet instead we would help you give a completely new look to it. Don't consider this to be your everyday vacuuming as it ruins the health of carpets. We would suggest you to get your carpets cleaned after every 6-months, because that's the time when they need cleaning. We follow a step-by-step procedure to ensure that fabric of the carpet remains intact.<br><br>
                  It is necessary to avoid stepping on the carpets unnecessarily with shoes on, try being polite to your guests by indirectly asking them to take their shoes off. For instance – ask them to feel the softness of carpet by stepping it on with their feet rather than shoes. Well, if you care about things then you’ll have to be considerate and look for the best sofa cleaning services!
                  <br><br>
                  Best Carpet Cleaning Services Company in Karachi, Lahore, Islamabad, Multan, Rawalpindi, Faisalabad & all cities of Pakistan. Best carpet cleaner in karachi.
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
                  <li class="active"><a href="dry-cleaning.php">Dry Cleaning</a></li>
                  <li><a href="carpet-cleaning.php">Carpet Cleaning</a></li>
                  <li><a href="steam-iron.php">Steam Iron</a></li>
                  <li><a href="curtains-cleaning.php">Curtains Cleaning</a></li>
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
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
    <!-- Script for Contact form -->
  <script src="script.js"></script>

</body>

</html>