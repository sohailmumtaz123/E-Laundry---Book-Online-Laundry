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
          <h2>Orders</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Orders</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs --> 

    <section class="row user_dashbaord">
      <div class="col-md-3 sidebar">
        <div class="sidebar-item categories">
                <ul>
                  <li><a href="profile.php">Profile</a></li>
                  <li class="active"><a href="user-orders.php">Orders</a></li>
                  <li><a href="login/logout-user.php">Logout</a></li>
                  <!-- <li><a href="curtains-cleaning.php">Curtains Cleaning</a></li>
                  <li><a href="#">Wash only / Iron Only</a></li> -->
                </ul>
        </div><!-- End sidebar categories-->
      </div>
      <div class="col-md-9">
          <div style='margin: 15px;'>
                    <h3>My Orders</h3>
                    <p>Dashboard</p>
            </div>
            <table class='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Items</th>
                            <th>Pickup Date & Time</th>
                            <th>Drop Date & Time</th>
                            <th>Order Status</th>
                        </tr>
                    </thead> 
        <?php
            
                $conn = mysqli_connect('localhost', 'u230980101_sohail', 'Sohail123@', 'u230980101_elaundry');

                $query= "SELECT * FROM schedule_order where  email = '$email'";
                $get_users= mysqli_query($conn, $query);
                while($row= mysqli_fetch_assoc($get_users)){
                  $ID=$row['id'];
                  $items=$row['items'];
                  $pick_date=$row['pick_date'];
                  $pick_time=$row['pick_time'];
                  $drop_date=$row['drop_date'];
                  $drop_time=$row['drop_time'];
                  $status=$row['status'];
                  echo "";
                  echo "
                    <tbody>
                      <tr>
                        <td>$ID</td>
                        <td>$items</td>
                        <td>$pick_date  $pick_time</td>
                        <td>$drop_date  $drop_time</td>
                        <td>$status</td>
                      </tr>
                    </tbody>
          ";
                    }
        ?>
        </table> 
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?> 
  <!-- ======= End Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>