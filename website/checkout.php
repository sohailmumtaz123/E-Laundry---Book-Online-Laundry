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

  <title>Checkout-Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">
  <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />


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
          <h2>Checkout</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Checkout</li>
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
              <h3>Billing Address</h3>
              <p>Enter the physical address where you want us to deliver your order.</p>
            </div>

            <div class="checkout"> 
              <form action="#">
                <div class="row input-field">
                  <div class="col-md-6 left">
                    <label>First Name <span>*</span></label><br>
                    <input type="text" name="fname" placeholder="Enter first name">
                  </div>
                  <div class="col-md-6 right">
                    <label>Last Name</label><br>
                    <input type="text" name="lname" placeholder="Enter last name">
                  </div>
                </div>

                <div class="input-field">
                  <label>Address <span>*</span></label><br>
                  <input type="text" name="adress" placeholder="Address">
                </div>

                <div class="row input-field">
                  <div class="col-md-6 left">
                    <label>City <span>*</span></label><br>
                    <input type="text" name="city" placeholder="Your City">
                  </div>
                  <div class="col-md-6 right">
                    <label>Postal Code</label><br>
                    <input type="text" name="postal" placeholder="Postal code">
                  </div>
                </div>

                <div class="input-field">
                  <label>Phone <span>*</span> </label><br>
                  <input type="tel" name="phone" placeholder="Phone Number">
                </div>

                <div class="">
                  <h3>Payment method</h3>
                  <p>Choose Your Payment Method</p>
                </div>

                <!-- ////////////////////////////////////////////////
 -->
                <div class="main-container">
                <!-- <h2>What's your favourite hobbie?</h2> -->
                <div class="radio-buttons">
                  <label class="custom-radio">
                    <input type="radio" name="radio" checked />
                    <span class="radio-btn">
                      <i class="las la-check"></i>
                      <div class="hobbies-icon">
                        <!-- <i class="las la-biking"></i> -->
                        <img src="assets/img/Jazz-Cash.png" width="50px">
                        <h3>JazzCash</h3>
                      </div>
                    </span>
                  </label>
                  <label class="custom-radio">
                    <input type="radio" name="radio" />
                    <span class="radio-btn"
                      ><i class="las la-check"></i>
                      <div class="hobbies-icon">
                        <!-- <i class="las la-futbol"></i> -->
                        <img src="assets/img/debit-card.png" width="50px">
                        <h3>Debit Card</h3>
                      </div>
                    </span>
                  </label>
                  <label class="custom-radio">
                    <input type="radio" name="radio" />
                    <span class="radio-btn"
                      ><i class="las la-check"></i>
                      <div class="hobbies-icon">
                        <!-- <i class="las la-table-tennis"></i> -->
                        <img src="assets/img/cash-on-delivery.png" width="50px">
                        <h3>Cash on Delivery</h3>
                      </div>
                    </span>
                  </label>
                </div>
              </div>

                <!-- ///////////////////////////////////////////////// -->

                <div class="button-area">
                  <button type="submit">Pay Now</button>
                  <span></span>
                </div>
              </form>
            </div>

          </div>

          <!-- This is sidebar -->
          <div class="col-md-4 Checkout">
            <div class="sidebar">
              <h3>Summary</h3>
              <p>The total cost consist of the tax and shipping charges.</p>
              <hr>

              <div class="row">
                <div class="col-sm-9">
                  <p>This is title of selected product</p>
                </div>
                <div class="col-sm-3">
                  <hp>$50</hp>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-9">
                  <hp>Tax</hp>
                </div>
                <div class="col-sm-3">
                  <hp>$0.00</hp>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-9">
                  <hp>Total</hp>
                </div>
                <div class="col-sm-3">
                  <hp>$50.00</hp>
                </div>
              </div>


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