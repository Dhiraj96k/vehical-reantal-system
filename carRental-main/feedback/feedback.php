<?php
include '../connect.php';

if(isset($_POST['fsubmit']))
{
    $cname = $_POST['c_name'];
    $cfback=$_POST['c_back'];

    $sql = "INSERT INTO feedback (uname, ufback) VALUES ('$cname', '$cfback')";

    echo"feedback inserted";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
}
}
?>