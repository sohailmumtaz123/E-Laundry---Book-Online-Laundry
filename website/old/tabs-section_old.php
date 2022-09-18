<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pricing Tabs - Section</title>
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

</head>

<body>

    <!-- ======= Start Tabs Section- ======= --> 
    <div class="pricing_text tabs_text">
      <h3>[ Our Service Prices ]</h3>
      <h1>Full Price Table</h1>
      <p>Laundry service pricing is volume based. Dry cleaning is priced by item type.<br>
       Give us a call to review pricing and services today!</p>
    </div>

    <div style="width: 100%;">
      <div class="tabs_div">
        <button class="tablink" onclick="openPage('Home', this, '#52B765')" id="defaultOpen">Most Popular Items</button>
        <button class="tablink" onclick="openPage('News', this, '#52B765')">Full Apparel List</button>
        <!--    <button class="tablink" onclick="openPage('Contact', this, '#52B765')">Contact</button>-->
        <div id="Home" class="tabcontent">
          <div class="row">
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$3.00</span>
            </div>
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$5.00</span>
            </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$3.00</span>
            </div>
            <div class="col col-md-6"s>
              <span class="name">Apron</span>
              <span class="price">$5.00</span>
            </div>
          </div>
      </div>


      <div id="News" class="tabcontent">
        <div class="row">
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$3.00</span>
            </div>
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$5.00</span>
            </div>
          </div>
          <div class="row">
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$3.00</span>
            </div>
            <div class="col col-md-6"s>
              <span class="name">Apron</span>
              <span class="price">$5.00</span>
            </div>
          </div> 
          <div class="row">
            <div class="col col-md-6">
              <span class="name">Apron</span>
              <span class="price">$3.00</span>
            </div>
            <div class="col col-md-6"s>
              <span class="name">Apron</span>
              <span class="price">$5.00</span>
            </div>
          </div> 
      </div>

    </div>
  </div>
   <!-- ======= End Tabs Section- ======= --> 

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

   <script>
    function openPage(pageName,elmnt,color) {

      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";
           }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        tablinks[i].style.color = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
      elmnt.style.color = "#ffff";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script> 


</body>

</html>