<?php
$conn = mysqli_connect('localhost', 'u230980101_sohail', 'Sohail123@', 'u230980101_elaundry');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Laundry Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Sohail Qureshi<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-fw fa-bar-chart-o"></i> Users</a>
                    </li>
                    <li>
                        <a href="contact_messages.php"><i class="fa fa-fw fa-table"></i> Messages</a>
                    </li>
                    <li  class="active">
                        <a href="order.php"><i class="fa fa-fw fa-edit"></i> Orders</a>
                    </li> 
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i>Blank Page</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid"> 
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Oders
                            <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Users
                            </li>
                        </ol>
                    </div>
                </div>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email & Phone</th>
                            <th>Address</th>
                            <th>Items</th>
                            <th>Pick Date & Time</th>
                            <th>Drop Date & Time</th>
                            <th>Verification Code</th>
                            <th>Order Status</th>
                            <th>Do Action</th>
                            
                        </tr>
                    </thead>
                
                <tbody>
                
                <?php
                // $conn=mysqli_connect('localhost','root','','test');
                
                
                $query= "SELECT * FROM schedule_order";
                
                $get_users= mysqli_query($conn, $query);
                
                // if($get_users){
                //     echo"Get Users";
                // }
                // else{
                //     // echo "Not Got Users";
                //     echo ('Query Not working'. mysql_erro());
                // }
                

                while($row= mysqli_fetch_assoc($get_users)){
                    $id=$row['id'];
                    $fname=$row['fname'];
                    $lname=$row['lname'];
                    $address=$row['address'];
                    $phone=$row['phone'];
                    $email=$row['email'];
                    $pick_date=$row['pick_date'];
                    $pick_time=$row['pick_time'];
                    $drop_date=$row['drop_date'];
                    $drop_time=$row['drop_time'];
                    $items=$row['items'];
                    $status=$row['status'];
                    $code=$row['code'];
                    

                   echo "<tr> " ;
                        echo "<td> $id</td>";
                        echo "<td> $fname   $lname</td>";
                        echo "<td> $email <br> $phone </td>";
                        echo "<td> $address </td>";
                        echo "<td> $items </td>";
                        echo "<td> $pick_date <br> $pick_time </td>";
                        echo "<td> $drop_date <br> $drop_time </td>";
                        echo "<td> $code</td>";
                        echo "<td> $status </td>";
                        
                        echo "<td> 
                        <form action='' method='post'>
                       <button type='submit' value='$id' name='process'>Process</button><br>
                       <button type='submit' value='$id' name='deliver'>Deliver</button>
                       <button type='submit' value='$id' name='delete'>Delete</button>
                       </form> 
                       </td>";
                        
                        
                    echo "</tr>";    
                }

                ?>
                <?php
        if(isset($_POST['process'])){
            $order_id=$_POST['process'];
            $query = "UPDATE schedule_order SET status = 'Processing' WHERE id = $order_id";
            $result = mysqli_query($conn, $query);
            if($result){
                echo"Status Updated Successfully";
                // header('location: order.php');
                echo "<meta http-equiv='refresh' content='0'>";
            }
            else{
                echo "Not updated";
            } 
        }
        if(isset($_POST['deliver'])){
            $order_id=$_POST['deliver'];
            $query = "UPDATE schedule_order SET status = 'Delivered' WHERE id = $order_id";
            $result = mysqli_query($conn, $query);
            if($result){
                echo"Status Updated Successfully";
                echo "<meta http-equiv='refresh' content='0'>";
            }
            else{
                echo "Not updated";
            } 
        }
        if(isset($_POST['delete'])){
                    $order_id=$_POST['delete'];
                    $query = "DELETE FROM schedule_order WHERE id = $order_id";
                    $result = mysqli_query($conn, $query);
                    if($result){
                        echo"Deleted Successfully";
                        echo "<meta http-equiv='refresh' content='0'>";
                    }
                    else{
                        echo "Not Deleted";
                    } 
                }
                
?>

                
                </tbody>

                </table>

                




                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>