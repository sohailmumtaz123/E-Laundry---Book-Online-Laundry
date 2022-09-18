<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Header - Elaundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="../assets/img/favicon.jpg" rel="icon">
  <link href="../assets/img/favicon.jpg" rel="apple-touch-icon"> -->

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

</head>
<body>
	 <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@elaundry.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0310 6377540</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><img src="assets/img/logo.png" alt="eLaundry"></a></h1> -->

        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/logo.png" alt="Elaundry" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar nav">
        <ul>
          <li><a href="index.php" id="one">Home</a></li>
          <!--<li><a href="services.php" id="three">Services</a></li>-->
          
          <li class="dropdown"><a href="services.php" id="three"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services/laundry-services.php">Laundry Services</a></li>
              <li><a href="services/dry-cleaning.php">Dry Cleaning</a></li>
              <li><a href="services/carpet-cleaning.php">Carpet Cleaning</a></li>
              <li><a href="services/steam-iron.php">Steam Iron</a></li>
              <li><a href="services/curtains-cleaning.php">Curtains Cleaning</a></li>
              <li><a href="#">Wash only/Iron only</a></li>
            </ul>
          </li>
          
          <li><a href="pricing.php" id="four">Pricing</a></li>
          <li><a href="contact.php" id="five">Contact</a></li>
          <!-- <li id="login"><a href="../contact.php">Account</a></li> -->
          <li class="dropdown"><a href="profile.php"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.php">Dashboard</a></li>
              <li><a href="login/logout-user.php">Logout</a></li>
            </ul>
          </li>
          <li id="login"><a href="schedule-pickup.php">Book Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>


      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Main js File-->
  <!--<script src="assets/js/main.js"></script>-->

  <!-- Script for active menu color--> 
    <script type="text/javascript"> 
    var title = (document.title);
    if ( title == "GreenVilla-Laundry Services") {
      var element = document.getElementById("one");
      element.classList.add("active");
    }
    if ( title == "About-Laundry Services") {
      var element = document.getElementById("two");
      element.classList.add("active");
    }
    if ( title == "Services-Laundry Services") {
      var element = document.getElementById("three");
      element.classList.add("active");
    }
    if ( title == "Pricing-Laundry Services") {
      var element = document.getElementById("four");
      element.classList.add("active");
    }
    if ( title == "Contact-Laundry Services") {
      var element = document.getElementById("five");
      element.classList.add("active");
    }

  </script>



</body>
</html>