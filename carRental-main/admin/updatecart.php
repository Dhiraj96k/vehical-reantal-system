<?php
    include '../connect.php';
    if(isset($_GET['id']))
    {
        $car_id = $_GET['id'];
        $sql =  "SELECT * FROM car WHERE car_id=$car_id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row["car_id"];
        $name = $row["car_name"];
        $car_price = $row["car_price"];
        $car_description = $row["car_dec"];
        $car_type =  $row['car_type'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car insert pages</title>
    <link rel="stylesheet" href="insertform.css">
</head>

<body>
    <form class="ins-form" action="showInsert.php" method="post" enctype="multipart/form-data">
        <main class="main-form">
            <h2 class="form-title">car update</h2>
            <div class="crname car-inp">
                <label for="id">Car Id</label>
                <input type="text" name="carId" id="id" readonly value=<?php echo $id;?>>
            </div>
            <div class="crname car-inp">
                <label for="name">Car name</label>
                <input type="text" name="carname" id="name" value=<?php echo $name;?>>
            </div>

            <div class="crdesc car-inp">
                <label for="disc">Car Description</label>
                <textarea name="cardes" id="disc" cols="30" rows="5"><?php echo $car_description;?></textarea>
            </div>

            <div class="crprice car-inp">
                <label for="price">Rent Price</label>
                <input type="number" name="carprice" id="price" value=<?php echo $car_price;?>>
            </div>

            <div class="crtype car-inp">
                <label for="type">Vehical type</label>
                <input type="text" name="cartype" id="type" value=<?php echo $car_type;?>>
            </div>

            <input type="submit" value="update" class="button-submit" name="carupdate">

        </main>
    </form>
</body>

</html>