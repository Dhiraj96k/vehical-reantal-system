<?php

setcookie("username",$username,time()+5,"/");
header('location:../index.php');
?>