<?php require_once "login/controllerUserData.php"; ?>
<?php
$conn = mysqli_connect('localhost', 'u230980101_sohail', 'Sohail123@', 'u230980101_elaundry');
$email=$_SESSION['email'];

if (isset($_POST['order'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
// 	$email=$_POST['email'];
	$address=$_POST['adress'];
	$phone=$_POST['phone'];
	$pick_date=$_POST['pick_date'];
	$pick_time=$_POST['pick_time'];
	$drop_date=$_POST['drop_date'];
	$drop_time=$_POST['drop_time'];
	$items=$_POST['items'];
	$status="onhold";
	$vcode=rand(100000,999999);

	$itsquery="INSERT INTO schedule_order(fname, lname, address, phone,  email, pick_date, pick_time, drop_date, drop_time, items, status, code) VALUES ('$fname','$lname', '$address', '$phone',  '$email', '$pick_date', '$pick_time', '$drop_date', '$drop_time', '$items', '$status', $vcode)";
	$result=mysqli_query($conn, $itsquery);
	if ($result) {
		
	  $receiver = "$email"; //enter that email address where you want to receive all messages
	  $sender_email="suhailq046@gmail.com";
      $subject = "From: www.elaundry.com <$sender_email>";
      
      $body = "Thank you for placing the order.\n\n Your order current status is onhold. We will process your order and change its status. You can check you order status on website user dashboar. You can please verify our Delivery boy for picking the clothes by asking ORDER VERIFICCAION CODE. Your ORDER VERIFICAION CODE is $vcode.\n\n Order Details: \nName: $fname $lname
          Email: $email
          Phone: $phone
          Address: $address
          Pick date & time: $pick_date  $pick_time
          Delivery date & time: $drop_date  $drop_time
          Clothes Items: $items
          Order Status: $status
          Verification Code: $vcode
          
          Thanks,
          Elaundry Team";
      
      
      $sender = "From: $sender_email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your Email has been sent";
      }else{
         echo "Sorry, failed to send your Email!";
      }
		
		echo "Data Inserted Successfully";
		header ("location: user-orders.php");
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
} 

?>