<?php 

            if(isset($_POST['submit'] )){
            $user_name= $_POST['name'];
            $user_email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password'];

            $connection = mysqli_connect('localhost', 'root', '', 'fyp_singup');
            
              if($connection){
                echo " Signed Up successfully";
              }

              $query = "INSERT INTO users(name, email, phone, password)";
              $query .= "VALUES('$user_name' , '$user_email', '$phone_number', '$password')";

              $result = mysqli_query($connection, $query);
              if(!$result){
                die('Query Failed' .mysqli_error());
              }
              else{
                                header('Location: http://localhost/FYP/');
              }
            
          };

          ?>

          <?php 
              // session_start();
              // if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
              //     header("location: welcome.php");
              //     exit;}

           

          if(isset($_POST['login'])){

            $name=$_POST['login_mail'];
            $pass=$_POST['login_password'];

            $connection = mysqli_connect('localhost', 'root', '', 'fyp_singup');
            // if($connection){
            //     echo " Signed Up successfully";
            //   }

            // $username=mysqli_real_escape_string($conn, $name);
            // $password=mysqli_real_escape_string($conn, $pass);

            $query="SELECT * FROM users where email='{$name}' and password='{$pass}'";
            $run_query=mysqli_query($connection, $query);

             $row = mysqli_fetch_array($run_query,MYSQLI_ASSOC);
             $count = mysqli_num_rows($run_query);
              if($count > 1) {
                echo "You are successfuly loged in";
                   header("location: http://localhost/FYP/");
                }else {
                   echo "Your Login Name or Password is invalid";
                }
            }
  ?>



<!DOCTYPE html>
<html>
<head>
  <title>Login/Signup</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- ----------------------------------------------- -->
  <link rel="stylesheet" type="text/css" href="style.css"/>
<!-- ----------------------------------------------- -->
  <script type="text/javascript" src="jscript.js">
    
  </script>
<!-- ----------------------------------------------- -->

</head>
<body>

  <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
  <!-- -----------------------Login---------------------->
          <form action="login.php" method="post" class="login">
            <div class="field">
              <input type="text" name="login_mail" placeholder="Email Address" required>
            </div>

            <div class="field">
              <input type="password" name="login_password" placeholder="Password" required>
            </div>

            <div class="pass-link">
            <a href="#">Forgot password?</a>
            </div>

            <div class="field btn">
              <div class="btn-layer"></div>
            <input type="submit" name="login" value="Login">
            </div>

            <!-- <div class="signup-link">
              Not a member? <a href="">Signup now</a>
            </div> -->
          </form>
<!-- -----------------------Sign-up---------------------->
          <form action="login.php" method="post" class="signup">
            <div class="field">
              <input type="text" name="name" placeholder="Name" required>
            </div>

            <div class="field">
              <input type="Email" name="email" placeholder="Email Address" required>
            </div>

            <div class="field">
                <input type="tel" name="phone_number" placeholder="Phone Number" required>
            </div>

            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="field btn">
                <div class="btn-layer"> </div>
              <input type="submit" name="submit" value="Signup">
            </div>
          </form>
<!-- --------------------------------------------->
          </div>
          </div>
          </div>

<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
</script>

</body>
</html>