<?php require_once "login/controllerUserData.php"; ?>
<?php
    if (isset($_POST['calculate'])) {
      $shirt=$_POST['shirt'];
      $pant=$_POST['pant'];
      $shalwar=$_POST['shalwar'];
      $blanket=$_POST['blanket'];
      $dry_clean=$_POST['dry-clean'];
      $wash_only=$_POST['wash-only'];
      $rug_clean=$_POST['rug-clean'];
      $curtain_clean=$_POST['curtain-clean'];
      $steam_iron=$_POST['steam-iron'];

      $result=$shirt*50 + $pant*50 + $shalwar*150 + $blanket*500 + $dry_clean*300 + $rug_clean*500 + $curtain_clean*250 + $steam_iron*150;
      
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pricing-Laundry Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

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
          <h2>Pricing</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Start Tabs Section- ======= --> 
    <?php include("tabs-section.php"); ?> 
    <!-- ======= End Tabs Section- ======= -->


    <!-- ======= Pricing Section ======= -->
    <div class="pricing_text tabs_text">
      <h3>[ What we offer ]</h3>
      <h1>Calculate Prices Before Order</h1>
      <p>Our prices are simple and affordable which are easy on pocket<br>
      in comparison with the high street prices</p>
    </div>
    
    <!--Calculator Start-->
        <section style="padding: 50px;">
      <!--<h1>Calculate Prices</h1><br>-->
      <form action="pricing.php" method="POST">
      <div class="row calculate">
        <div class="col col-md-4">
          <label>Shirts </label>
          <input type="number" name="shirt" value="0" placeholder="0">
          <p>PKR 50/item</p>
        </div>
        <div class="col col-md-4">
          <label>Pants </label>
          <input type="number" name="pant" value="0" placeholder="0">
          <p>PKR 50/item</p>
        </div>
        <div class="col col-md-4">
          <label>Shalwar Qameez </label>
          <input type="number" name="shalwar" value="0" placeholder="0">
          <p>PKR 150/item</p>
        </div>
        <div class="col col-md-4">
          <label>Blanket </label>
          <input type="number" name="blanket" value="0" placeholder="0">
          <p>PKR 500/item</p>
        </div>
        <div class="col col-md-4">
          <label>Dry Clean </label>
          <input type="number" name="dry-clean" value="0" placeholder="0">
          <p>PKR 300/item</p>
        </div>
        <div class="col col-md-4">
          <label>Wash Only / Iron Only</label>
          <input type="number" name="wash-only" value="0" placeholder="0">
          <p>PKR 100/item</p>
        </div>
        <div class="col col-md-4">
          <label>Rug Cleaning</label>
          <input type="number" name="rug-clean" value="0" placeholder="0">
          <p>PKR 500/item</p>
        </div>
        <div class="col col-md-4">
          <label>Curtain Cleaning</label>
          <input type="number" name="curtain-clean" value="0" placeholder="0">
          <p>PKR 250/item</p>
        </div>
        <div class="col col-md-4">
          <label>Steam Iron</label>
          <input type="number" name="steam-iron" value="0" placeholder="0">
          <p>PKR 150/item</p>
        </div>
      </div>
      <br>
      <button class="btn btn-success align-middle" value="calculate" name="calculate">Calculate</button>
      </form>
    </section>
    <div style="text-align: center; background-color:#52BA64 ;color: white;padding:15px 0px">
      <h3>PKR <?php echo "$result" ?> </h3>
    </div>
    
    <!--Calculator End-->

    <!--<section id="pricing" class="pricing">-->
    <!--  <div class="container">-->

    <!--    <div class="row">-->

    <!--      <div class="col-lg-4 col-md-6">-->
    <!--        <div class="box" data-aos="fade-right">-->

    <!--          <img src="assets/img/telegram.png" alt="icon" width="82px"-->
    <!--          height="82px"-->
    <!--          style="margin-bottom: 15px">-->
    <!--          <h3>Basic</h3>-->
    <!--          <h4><sup>Pkr</sup>800<span> / month</span></h4>-->
    <!--          <ul>-->
    <!--            <li><span class="check">✔</span> 10 shirts</li>-->
    <!--            <li><span class="check">✔</span> 10 jeans</li>-->
    <!--            <li><span class="check">✔</span> 1 Towel</li>-->
    <!--            <li><span class="check">✔</span> 5 Suits</li>-->
    <!--            <li><span class="check">✔</span> 2 Curtains</li>-->
    <!--            <li class="na"><span>✔</span> 2 Suits Dry clean</li>-->
    <!--            <li class="na"><span>✔</span> 6 pairs of Socks</li>-->
    <!--            <li class="na"><span>✔</span> 3 Bottom Down Shirts</li>-->
    <!--          </ul>-->
    <!--          <div class="btn-wrap">-->
    <!--            <a href="checkout.php" class="btn-buy">Buy Now</a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-4 col-md-6 mt-4 mt-md-0">-->
    <!--        <div class="box" data-aos="fade-up">-->

    <!--          <img src="assets/img/plane.png" alt="icon" width="82px"-->
    <!--          height="82px"-->
    <!--          style="margin-bottom: 15px">-->


    <!--          <h3>Plus</h3>-->
    <!--          <h4><sup>Pkr</sup>1200<span> / month</span></h4>-->
    <!--          <ul>-->
    <!--            <li><span class="check">✔</span> 15 shirts</li>-->
    <!--            <li><span class="check">✔</span> 10 jeans</li>-->
    <!--            <li><span class="check">✔</span> 3 Towel</li>-->
    <!--            <li><span class="check">✔</span> 5 Suits</li>-->
    <!--            <li><span class="check">✔</span> 5 Curtains</li>-->
    <!--            <li><span class="check">✔</span> 2 Suits Dry Clean</li>-->
    <!--            <li><span class="check">✔</span> 4 Pairs of Socks</li>-->
    <!--            <li class="na"><span class="check">✔</span> Massa ultricies mi</li>-->
    <!--          </ul>-->
    <!--          <div class="btn-wrap">-->
    <!--            <a href="checkout.php" class="btn-buy">Buy Now</a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">-->
    <!--        <div class="box" data-aos="fade-left">-->

    <!--          <img src="assets/img/jet.png" alt="icon" width="82px"-->
    <!--          height="82px"-->
    <!--          style="margin-bottom: 15px">-->


    <!--          <h3>Pro</h3>-->
    <!--          <h4><sup>Pkr</sup>1500<span> / month</span></h4>-->
    <!--          <ul>-->
    <!--            <li><span class="check">✔</span> 30 shirts</li>-->
    <!--            <li><span class="check">✔</span> 30 jeans</li>-->
    <!--            <li><span class="check">✔</span> 6 Towel</li>-->
    <!--            <li><span class="check">✔</span> 10 Suits</li>-->
    <!--            <li><span class="check">✔</span> 10 Curtains</li>-->
    <!--            <li><span class="check">✔</span> 5 Suits Dry Clean</li>-->
    <!--            <li><span class="check">✔</span> 10 Pairs of Socks</li>-->
    <!--            <li><span class="check">✔</span> 3 Carpets Cleaning</li>-->
    <!--          </ul>-->
    <!--          <div class="btn-wrap">-->
    <!--            <a href="checkout.php" class="btn-buy">Buy Now</a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section><!-- End Pricing Section --> 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?> 
  <!-- ======= End Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>
 
</body>

</html>