<?php
    include '../connect.php';
    if(isset($_POST['carsubmit']))
    {
        $image = $_FILES['carimg'];
        $carName = $_POST['carname'];
        $carDec = $_POST['cardes'];
        $carPrice = $_POST['carprice'];
        $carType = $_POST['cartype'];
        // echo $carType;
        // print_r($image);

        $extenstions = array('jpg','png','jpeg','webp','avif','heif');

        // split the image and seprate the 
        $imageArray = explode('.',$image['name']);
        $extenstion = $imageArray[1];
        // check the it is image or not
        if(in_array($extenstion,$extenstions))
        {
            $image['name']=$carName;
            // print_r($image);
            $changeImgName= $image['name'].'.'.$imageArray[1];
            
            // set path to save the image
            $actualPath = "../assets/uploadedimg/".$changeImgName;
            $dbPath = "assets/uploadedimg/".$changeImgName;
            
            $sql = "INSERT INTO car (car_name,car_dec,car_price,car_img,car_type) VALUES('$carName','$carDec',$carPrice,'$dbPath','$carType')";
            $result = mysqli_query($con, $sql);
            if($result)
            {
                move_uploaded_file($image["tmp_name"],$actualPath);
                echo "success";

            }
            else
            echo "query eror";
        }
       
    }
    else if(isset($_POST["carupdate"]))
    {
        $carid = $_POST['carId'];
        $carName = $_POST['carname'];
        $carDec = $_POST['cardes'];
        $carPrice = $_POST['carprice'];
        $carType = $_POST['cartype'];

        $sql = "UPDATE car SET car_name = '$carName',car_dec='$carDec',car_price='$carPrice',car_type='$carType' where car_id=$carid";
        $result = mysqli_query($con,$sql);
        if($result)
        echo "Update";
        else
        echo "error";;
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="../styles/table.css">
</head>
<body>
    <a href="carinsert.html" class="upload-car">Upload Another Car</a>
<table>
  <!-- Create a table header row with two cells -->
  <tr>
    <th>id</th>
    <th>Image</th>
    <th>Name</th>
    <th>Decription</th>
    <th>price</th>
    <th>type</th>
    <th>operation</th>
  </tr>
  <!-- Create some table data rows with two cells each -->
  <?php
    $sql = "SELECT * FROM `car` ORDER BY `car`.`car_id` DESC";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $car_id = $row['car_id'];
        $car_name = $row['car_name'];
        $car_dec = $row['car_dec'];
        $car_price = $row['car_price'];
        $car_img = $row['car_img'];
        $car_type = $row['car_type'];

        echo '
        <tr>
        <td>'.$car_id.'</td>
        <td><img src="../'.$car_img.'" class="table-car-img" /></td>
        <td><span class="table-car-name">'.$car_name.'</span></td>
        <td>'.$car_dec.'</td>
        <td>'.$car_price.'</td>
        <td>'.$car_type.'</td>
        <td class="table-center">
        <a href="updatecart.php?id='.$car_id.'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload upload-icon"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg></a></td>
      </tr>
        ';
    }
  ?>
</table>
</body>
<script>
        feather.replace();
    </script>
</html>