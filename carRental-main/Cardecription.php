<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Decription page</title>
    <link rel="stylesheet" href="car_decription.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
<main class="main_tag">
    <?php
    $id = $_GET['id'];  
    $sql = "SELECT * FROM car WHERE car_id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $id = $row["car_id"];
        $car_name = $row["car_name"];
        $car_img = $row["car_img"];
        $car_dec = $row["car_dec"];
        $car_price = $row["car_price"];
        $car_type = $row["car_type"];
        // you make also like
        $sql = "SELECT * FROM car WHERE car_type='$car_type' LIMIT 4";
        $result = mysqli_query($con,$sql);
        echo '
        <div class="div_tag1">
        <img src="'.$car_img.'" alt="">
        <p class="veh_about">About</p>
        <div class="veh_desc">'.$car_dec.'</div>
    </div>
    <div class="div_tag2">
    <div  class="infoclass">
        <div class="veh_inf">
            <p>'.$car_name.'</p>
            <h3>'.$car_price.'/KM</h3>
        </div>
        <div class="backbutton">
       
        <a href="index.php" class="backbtn">
        <i data-feather="arrow-left" class="absolute inline"></i>Back</a></div></div>
        <a href="formbooking.php?carName='.$car_name.'&carPrice='.$car_price.'&carType='.$car_type.'"><button>Rent Now</button></a>
        <div class="you_like">
                <p>You may also like</p>
            </div>
            <div class="Image">
           
        ';
        
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $r_id = $row["car_id"];
                $r_car_name = $row["car_name"];  
                $r_car_img = $row["car_img"];
                $r_car_price = $row["car_price"];
                echo '
                <a class="carlike" href="Cardecription.php?id='.$r_id.'">
                    <img src="'.$r_car_img.'" alt="'.$r_car_name.'">
                    <p>'.$r_car_name.'
                    <h4>'.$r_car_price.'/KM</h4>
                    </p>
                </a>
            ';
            }
            echo ' </div></div>';
        }
        else
        echo "second error";
    }
    else{
        echo "error";
    }
    ?>
    

    </main>
</body>
<script>
  feather.replace();
</script>
</html>