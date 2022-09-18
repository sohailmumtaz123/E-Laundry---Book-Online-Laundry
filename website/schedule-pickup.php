<?php require_once "login/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Schedule Pickup-Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">
  <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />

    <!-- Date Time Picker Library -->
    <script src="assets/dtpicker/jquery.js"> </script>
    <script src="assets/dtpicker/jquery.datetimepicker.full.min.js"> </script>
    <link rel="stylesheet" href="assets/dtpicker/jquery.datetimepicker.min.css"/>

  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->


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

  <main id="main" class="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="justify-content-between align-items-center">
          <h2>Schedule Pickup</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Schedule Pickup</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= --> 
    <section id="Checkout">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-md-8 entries">
            <div class="text">
              <h3>Schedule your order</h3>
              <p>Filee the following form to place the order and schedule your pickup.</p>
            </div>
                
            <div class="checkout"> 
              <form action="order.php"  method="POST">
                <div class="row input-field">
                  <div class="col-md-6 left">
                    <label>First Name<span>*</span></label><br>
                    <input type="text" name="fname" placeholder="Enter first name" required="true">
                  </div>
                  <div class="col-md-6 right">
                    <label>Last Name</label><br>
                    <input type="text" name="lname" placeholder="Enter last name">
                  </div>
                </div>

                <div class="input-field">
                  <label>Address<span>*</span></label><br>
                  <input type="text" name="adress" placeholder="Address" required="true">
                </div>
                
                <div class="input-field">
                    <label>Phone Number</label><br>
                    <input type="tel" name="phone" placeholder="Your Phone">
                  </div>

                <!--<div class="row input-field">-->
                <!--  <div class="col-md-6 left">-->
                <!--    <label>Phone Number</label><br>-->
                <!--    <input type="tel" name="phone" placeholder="Your Phone">-->
                <!--  </div>-->
                  <!--<div class="col-md-6 right">-->
                  <!--  <label>Email<span>*</span></label><br>-->
                  <!--  <input type="text" name="email" placeholder="Your Email" required="true">-->
                  <!--</div>-->
                <!--</div>-->

                <div class="row input-field">
                  <div class="col-md-6 left">
                    <label>Pickup Date<span>*</span></label><br>
                    <input type="text" name="pick_date" id="pick_date" required="true">
                  </div>

                  <script>
                    $('#pick_date').datetimepicker({
                      timepicker:false,
                      datepicker:true,
                      format:'Y-m-d',
                      // value:'01-07-2021',
                      yearStart:2021,
                      yearEnd: 2022,
                      // theme:'dark',
                      mask: true,
                      editable: true
                    })
                  </script>

                  <div class="col-md-6 right">
                    <label>Pickup Time<span>*</span></label><br>
                    <input type="text" id="picktime" name="pick_time" required="true">
                  </div>

                  <script>
                    $('#picktime').datetimepicker({
                      timepicker:true,
                      datepicker:false,
                      format: 'H:i',
                      // value:'09:00',
                      mask: true,
                      allowTimes: ['09:00 am','09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00']
                    })
                  </script>

                </div>

                <div class="row input-field">
                  <div class="col-md-6 left">
                    <label>Drop Date & Time<span>*</span></label><br>
                    <input type="tel" id="dropdate" name="drop_date" required="true">
                  </div>

                  <script>
                    $('#dropdate').datetimepicker({
                      timepicker:true,
                      datepicker:true,
                      format:'Y-m-d',
                      // value:'01-07-2021',
                      yearStart:2021,
                      yearEnd: 2022,
                    startDate: '-3d',
                      mask: true,
                      editable: true
                    })
                  </script>

                  <div class="col-md-6 right">
                    <label>Drop Time<span>*</span></label><br>
                    <input type="text" id="droptime" name="drop_time" required>
                  </div>

                   <script>
                    $('#droptime').datetimepicker({
                      timepicker:true,
                      datepicker:false,
                      format: 'H:i',
                      // value:'09:00',
                      mask: true,
                      allowTimes: ['09:00 am','09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00']
                    })
                  </script>

                </div>

                <div class="input-field">
                  <label>Specify Items Name with Quantity<span>*</span></label><br>
                  <input type="text" name="items" placeholder="Example. 1 Blanket, 5 Shirts, 5 Pants etc" required="true">
                </div>

                <div class="button-area">
                  <button type="submit" name="order">Place Order</button>
                  <span></span>
                </div>
              </form>
            </div>

          </div>

          <!-- This is sidebar -->
          <div class="col-md-4 Checkout">
            <div class="sidebar">
              <h3>Why buy from us?</h3>
              <p><i class='bi bi-tag-fill'></i>&nbsp Wholesale Discount Price</p>
              <p><i class='bi bi-person-fill'></i>&nbsp Superior Customer Service</p>
              <p><i class='bi bi-truck'></i>&nbsp Complimentory Standard Shipping</p>

              <br>
              <h3>Our Care Team Is Here For You!</h3>
              <p>If you have questions about our services, please get in touch with us at <a href="mailto:support@elaundry.com">support@elaundry.com</a>.</p>

          
            </div>
          </div>
          
        </div>
        
      </div>
      
    </section>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?> 
  <!-- ======= End Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>

</body>

</html>