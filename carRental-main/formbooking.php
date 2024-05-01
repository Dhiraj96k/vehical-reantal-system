<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>
    <div class="main-container">
        <form action="booking.php" method="post">
            <h2 class="form-title">Make a Booking</h2>
            <div class="container">
                <div class="info child1">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" placeholder="Name Surname" value=<?php if(isset($_COOKIE['u_name'])) echo $_COOKIE['u_name'] ?>>
                </div>
                <div class="info child2">
                    <label for="mobile">Mobile No: </label>
                    <input type="tel" id="mobile" name="mobile" placeholder="Mobile">
                </div>
                <div class="info child3">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Email" value=<?php if(isset($_COOKIE['u_email'])) echo $_COOKIE['u_email'] ?> >
                </div>
                <div>
                    <label for="add">Address</label>
                    <input type="text" id="add" name="address" placeholder="Address">
                </div>
            </div>
            <div class="container-2">
                <div class="carinfo">
                    <label for="lic">Driving Licence</label>
                    <input type="text" class="licen" name="dr_lic" id="lic" placeholder="Licence No">
                </div>
                <div class="grid-2">
                    <div class="carinfo">
                        <label for="">Carname</label>
                        <input type="text" name="carname" id="carname" class="carname" value=<?php if(isset($_GET['carName'])) echo $_GET['carName'];?>>
                    </div>
                    <div class="carinfo">
                        <label for="">Price/KM</label>
                        <input type="text" placeholder="/KM" name="car_price" id="carname"  class="carname" value=<?php if(isset($_GET['carPrice'])) echo $_GET['carPrice'];?> >
                    </div>
                </div>

                <div class="carinfo">
                    <label for="cartype">VehicleType</label>
                    <input type="text" name="cartype" id="cartype" class="cartype"  value=<?php if(isset($_GET['carType'])) echo $_GET['carType']?>>
                </div>
            </div>

            <input class="btn-submit" name="rentsubmit" type="submit" value="submit">
        </form>
    </div>
</body>

</html>