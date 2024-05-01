<?php
// Database connection
include 'connect.php';

if(isset($_POST['rentsubmit']))
{

// Form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$dr_lic = $_POST['dr_lic'];
$r_car_type = $_POST['cartype'];
$r_car_name = $_POST['carname'];
$r_price = $_POST['car_price'];
// if user id is not set in the cookies that means user id not login
if(isset($_COOKIE['u_id']))
{
    
    $uId = $_COOKIE['u_id'];
$sql = "INSERT INTO `rented`(`dr_lic`, `name`, `mobile`, `email`, `address`, `r_car_type`, `r_car_name`, `r_price`, `u_id`) VALUES ('$dr_lic','$name','$mobile','$email','$address','$r_car_type','$r_car_name','$r_price','$uId')";

if ($con->query($sql) === TRUE) 
    echo '<center>Car Rented  successfully</center> <br><br> <center> <a href="index.php">Go Back To Home </a></center>';
 else 
    echo "Error: " . $sql . "<br>" . $con->error;
}
else
echo '<center><a href="register.html">Please Log in First</a></center>';
}

$con->close();
?>
