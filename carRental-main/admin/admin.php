<?php

include '../connect.php';

//echo"connection successfull";

$user_id = $_POST['Username'];
$password = $_POST['password'];

$sql = "SELECT u_name, u_pass FROM `admin` WHERE u_name = '$user_id' AND u_pass = '$password'";
$result = mysqli_query($con,$sql);

if ($result) {
        $row = mysqli_fetch_assoc($result);
        print_r($row);
        if($row['u_name']==$user_id && $row['u_pass']==$password)
        {
        header('Location:.././dashboard/dashboard.php');
        }
        else {
            echo "User not Found !!";
        }
    }
?>