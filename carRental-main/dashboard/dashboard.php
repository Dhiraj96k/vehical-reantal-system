<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* outline: 2px solid lime; */
        }

        body {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
            width: 100vw;
            height: 100vh;
            background-color: #f0eef1;
            margin: 15px;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        .main-container {
            display: grid;
            grid-template-columns: 20rem auto;
            gap: 8px;
            overflow: hidden;
        }

        .container {
            background-color: rgb(120, 215, 228);
            border-radius: 5px;

            padding: 25px;
            border-radius: 5px;

        }

        .left {

            
        }
        a{
            text-decoration:none;
            color:rgb(0, 0, 0) ;
        }
        .dashboard {
            display: flex;
            align-items: center;
            justify-content: center;
            /* width: fit-content; */
            color: black;
            gap: 4px;
            font-weight: bold;
            font-size: 20px;
            padding: 19px 15px;
            /* margin-bottom: 35px; */
            /* background-color: #110f0f; */
            border-radius: 5px;
        }

        .grid-icon {
            width: 35px;
            height: 35px;
        }

        .nav-child {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 25px;
            /* background-color: #efe0ff; */
        }

        .hover {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            /* border: 2px solid black; */
            transition: all ease-in 200ms;

        }

        .hover:hover {
            margin-left: 0;
            padding-left: 10px;
            border-left: 5px solid black;


        }

        .nav-child a {
            text-decoration: none;
            color: black;
            transition: all 1s ease-in;
            font-size: 17px;
        }

        .logout {
            display: flex;
            padding: 10px;
            gap: 9px;
            position: absolute;
            bottom: 1rem;
            left: 3rem;
        }

        .log-out {}

        .logout:hover {
            background-color: #c5c4c6;
            border-radius: 5px;
            margin-left: 2px;
            transition: all ease 0.8s;
        }

        .logout .log-out:hover {}

        .logout a {

            text-decoration: none;
            color: black;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            background-color: #74E291;
            padding: 35px 10px;
            border-radius: 9px;
            /* margin-left: 8px; */
            /* width: fit-content; */
        }

        .sub-heading1 .admin_greet {
            /* text-align: center; */
        }

        .sub-heading2 {
         
        }

        .sub-heading2 img {

            height: 50px;
            width: 50px;
        }

        .heading-date {
            display: flex;
            align-item: center;
            /* justify-content:center; */
            gap: 2px;
            margin-top: 30px;
            padding: 5px;
            /* background-color:white;
            width:fit-content;
            padding:8px; */
        }

        .heading-content-main {
            display: flex;
          align-items: center;
          /* justify-content: center; */
        }

        .heading-content {
            display: flex;
          align-items: center;
          justify-content: center;
        }

        .content-data {
            margin: 20px;
            margin-top: 40px;
            background-color: rgb(225, 248, 121);
            padding: 25px 40px;
            border-radius: 10px;
            text-align: center;
            width: fit-content;
        }

        .content-data a {
            text-decoration: none;
            color: rgb(11, 9, 9);
        }

        .content-value1 {
            font-size: 20px;
            font-weight: bold;
        }

        .content-value2 {
            font-size: 30px;
            font-weight: 800;
        }

        .content-data1 {
            background-color: #B4B4B8;
        }

        .content-data2 {
            background-color: #F3CCF3;
        }

        .content-data3 {
            background-color: #7b90a3;
        }

        .content-data4 {
            background-color: #86A789;
        }

        .feth-icon .icon {
            height: 40px;
            width: 40px;
        }

        .recent-request {
            margin-top:60px;
            margin-left:450px;

        }
        .recent-request table{
            width:450px;
        }

        .recent-request-p1 {
            padding: 10px;
            font-size: 20px;
            font-weight: 400;
        }

        .section2 {
            /* margin: 20px 0px; */
            position: absolute;
            bottom: 0;
            left:12rem;
            margin-top: 20px;
            display: flex;
            gap: 50px;
            align-items: center;
            justify-content: center;
            /* background-color: black; */
            background-color: rgb(125, 118, 252);
            padding: 10px 0;
            border-radius: 9px;
            /* margin-left: 15px; */
        }

        .maruqee-img {
            margin-right: 50px;
            object-fit: contain;
            height: 45px;
            width: 45px;
            /* animation: marque 2s ease infinite; */
        }

        @keyframes marque {
            to {
                transform: translateX(0)
            }

            from {
                transform: translateX(1000px);
            }
        }

        /* .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;

        } */

        table {
            border-collapse: collapse;
            width: 96%;
            margin-left: 15px;

        }

        th {}

        td {
            text-align: center;

        }
    </style>
</head>

<body>
    <!-- <?php
    
    include '../connect.php';

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    ?> -->
    <div class="main-container">
        <div class="container">
            <div class="left">
            
                <div class="dashboard">
                    
                    <i data-feather="grid" class="grid-icon"></i>
                    <a href="admin_dashboard1.php">  
                    <p>Dashboard</p>
                    </a>
                </div>
                           
            </div>
        </div>
        <div class="heading">
            <div class="sub-heading1">
                <p class="admin_greet">Hello!!</p>
                <p>Welcome To Vehical Rental Service </p>
            </div>
            <div class="sub-heading2">
    <!-- <i data-feather="user" class="user"></i> -->
    <img src="img/account_illustartion.jpg" alt="">
</div>
        </div>

                    <!-- <div class="ajax-load show-dash-result"> -->
                     
                        <div class="heading-content-main">
                        <div class="heading-content">
                            <div class="content-data content-data1">
                                <a href="#">
                                    <div class="feth-icon">
                                        <i data-feather="users" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">Total Rented</p>
                                    <p class="content-value2">
                                        <?php 
                                $sql = "SELECT count(r_id) as num_cust from rented;";
                                $result = $con->query($sql);
                                // print_r($result);
                                if(mysqli_num_rows($result)>0)
                                {
                                    $row=mysqli_fetch_assoc($result);
                                   $num_cust=$row['num_cust'];
                                   echo "$num_cust";
                                }
                            ?>
                                    </p>
                                </a>
                            </div>

                            <div class="content-data content-data2">
                                <a href="#">
                                    <div class="feth-icon">
                                        <i data-feather="box" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">Total Vehical</p>
                                     <p class="content-value2">
                                        <?php 
                                $sql = "SELECT count(car_id) as num_cust from car;";
                                $result = $con->query($sql);
                                // print_r($result);
                                if(mysqli_num_rows($result)>0)
                                {
                                    $row=mysqli_fetch_assoc($result);
                                   $num_cust=$row['num_cust'];
                                   echo "$num_cust";
                                }
                            ?>
                                 
                                </a>
                            </div>

                            <div class="content-data content-data3">
                                <a href="../admin/showInsert.php">
                                    <div class="feth-icon">
                                        <i data-feather="file-text" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">Insert Vehical</p>
                                    
                                </a>
                            </div>

                            <div class="content-data content-data4">
                                <a href="#">
                                    <div class="feth-icon">
                                        <i data-feather="message-circle" class="icon"></i><br>
                                    </div>
                                    <p class="content-value1">Total Feedback</p>
                                     <p class="content-value2">
                                    
                                    </p> 
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="recent-request">
                             <?php
                            $sql = "SELECT * from rented LIMIT 5;";
                            $result = $con->query($sql);
                            // print_r($result);
                            if(mysqli_num_rows($result)>0)
                            {
                                echo '<table border="1">
                                <tr><th>Vehical Name</th>
                                <th>Vehical Price</th>
                                <th>Custmer name</th>
                                <th>mobile no</th>
                                
                               
                                </tr>
                                ';
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $make=$row['r_id'];
                                    $model=$row['r_car_name'];
                                    $license_plate=$row['name'];
                                    $mileage=$row['mobile'];

                                    echo '<tr>
                                            <td>'.$make.'</td>
                                            <td>'.$model.'</td>
                                           
                                            <td>'.$license_plate.'</td>
                                            <td>'.$mileage.'</td>
                                        
                                            ';
                                }
                            }
                        ?> 

                        </div>

                    <div>
                        <div class="logout">
                        <i data-feather="log-out" class="log-out"></i>
                        <a href="logout.php">Log out</a>
                        </div>
                    <section class="">

                        <marquee direction="left" class="section2">
                            <img class="maruqee-img" src="img/honda-512.png" alt="">
                            <img class="maruqee-img" src="img/kia-512.png" alt="">
                            <img class="maruqee-img" src="img/toyota-512.png" alt="">
                            <img class="maruqee-img" src="img/audi-512.png" alt="">
                            <img class="maruqee-img" src="img/bmw.png" alt="">
                            <img class="maruqee-img" src="img/ford-512.png" alt="">
                            <img class="maruqee-img" src="img/chevrolet-512.png" alt="">
                            <img class="maruqee-img" src="img/mercedes-benz-512.png" alt="">
                            <img class="maruqee-img" src="img/jeep.png" alt="">
                            <img class="maruqee-img" src="img/mitsubishi-512.png" alt="">
                            <img class="maruqee-img" src="img/volkswagen-512.png" alt="">
                        </marquee>

                    </section>
                    </div>



            </div>
        
        </div>

</body>
<script>
    feather.replace();
</script>
<script src="../auth\authAjaxScripts\dashboard.js"></script>

</html>