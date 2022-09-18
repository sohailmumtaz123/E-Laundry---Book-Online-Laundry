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

  <title>User Profile</title>
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
          <h2>Profile</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs --> 

    <section class="row user_dashbaord">
      <div class="col-md-4 sidebar">
        <div class="sidebar-item categories">
                <ul>
                  <li class="active"><a href="profile.php">Profile</a></li>
                  <li><a href="user-orders.php">Orders</a></li>
                  <li><a href="login/logout-user.php">Logout</a></li>
                  <!-- <li><a href="curtains-cleaning.php">Curtains Cleaning</a></li>
                  <li><a href="#">Wash only / Iron Only</a></li> -->
                </ul>
        </div><!-- End sidebar categories-->
      </div>
      <div class="col-md-8">
        <?php
                $conn = mysqli_connect('localhost', 'u230980101_sohail', 'Sohail123@', 'u230980101_elaundry');

                $query= "SELECT * FROM usertable where  email = '$email'";
                $get_users= mysqli_query($conn, $query);
                while($row= mysqli_fetch_assoc($get_users)){
                  $name=$row['name'];
                  $status=$row['status'];
                    }
        ?>
        <div style="margin: 15px;">
          <h3>My Account</h3>
          <p>Dashboard</p>


          <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead> 
                    <tbody>
                      <tr>
                        <td><?php echo"$name"?></td>
                        <td><?php echo"$email"?></td>
                        <td><?php echo"$status"?></td>
                      </tr>
                    </tbody>

          </table> 
        </div>
        
        
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