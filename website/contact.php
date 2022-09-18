<?php require_once "login/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact-Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

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
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= --> 

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Behria town phase#7 Islamabad</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>contact@elaundry.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>0310 6377540</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <div class="wrapper">

              <header>Send us a Message</header>
              <hr style="margin:10px 25px;">

              <form action="#">
                <div class="dbl-field">
                  <div class="field">
                    <input type="text" name="name" placeholder="Enter your name*" required>
                    <i class='fas fa-user'></i>
                  </div>
                  <div class="field">
                    <input type="text" name="email" placeholder="Enter your email*" required>
                    <i class='fas fa-envelope'></i>
                  </div>
                </div>

                <div class="dbl-field subject">
                  <div class="field">
                    <input type="text" name="subject" placeholder="Subject*" required>
                    <i class='bi bi-pencil-fill'></i>
                  </div>
                </div>

                <div class="message">
                  <textarea  name="message" placeholder="Write your message*" required></textarea>
                  <i class="material-icons">message</i>
                </div>

                <div class="button-area">
                  <button type="submit">Send Message</button>
                  <span></span>
                </div>
              </form>
            </div>
          </div>

        </div>

        

      </div>
    </section>
    <!-- End Contact Section -->

    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?> 
  <!-- ======= End Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>

  <!-- Script for Contact form -->
  <script src="script.js"></script>

</body>

</html>