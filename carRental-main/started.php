<?php include './connect.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vehical Renatal Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
<div class="cards-container my-8 mx-4 grid gap-4 grid-cols-4">

<?php
  $sql = "SELECT * FROM car";
  $result = mysqli_query($con,$sql);
  if($result)
  {
    while($row = mysqli_fetch_assoc($result)){
      $car_id = $row['car_id'];
      $car_name = $row['car_name'];
      $car_dec = $row['car_dec'];
      $car_price = $row['car_price'];
      $car_img = $row['car_img'];
      $car_type = $row['car_type'];

      echo '
      <div class="card bg-white rounded-md pb-4">
      <a href="Cardecription.php?id='.$car_id.'" class="overflow-hidden block">
        <img class="object-cover w-full h-60 rounded-t-md transition-all duration-500 hover:scale-150"
          src="'.$car_img.'" alt=""  />
      </a>
      <div class="card-info px-4 mt-2">
        <h2 class="card-title capitalize font-semibold text-lg line-clamp-1">
          '.$car_name.'
        </h2>
        <p class="text-gray-600 line-clamp-3">'.$car_dec.'</p>
        <div class="add-to-cart flex items-center justify-between">
          <h3 class="price capitalize"> <span class="font-bold text-lg">'.$car_price.'RS</span> /KM</h3>
          <button
            class="add-into-cart py-2 px-4 outline outline-3 outline-transparent hover:outline-hoverBg transition-all duration-500 border-[3px] border-transparent hover:border-white bg-hoverBg rounded-lg">Rent
            Now</button>
        </div>
      </div>
    </div>
      ';
    }

  }
  else echo 'error';
         ?>

<!-- card end -->
</div>

<div class="cards-container my-8 mx-4 grid gap-4 grid-cols-4">
<?php
  $sql = "SELECT * FROM car";
  $result = mysqli_query($con,$sql);
  if($result)
  {
    while($row = mysqli_fetch_assoc($result)){
      $car_id = $row['car_id'];
      $car_name = $row['car_name'];
      $car_dec = $row['car_dec'];
      $car_price = $row['car_price'];
      $car_img = $row['car_img'];
      $car_type = $row['car_type'];

      echo '
      <div class="card bg-white rounded-md pb-4">
      <a href="Cardecription.php?id='.$car_id.'" class="overflow-hidden block">
        <img class="object-cover w-full h-60 rounded-t-md transition-all duration-500 hover:scale-150"
          src="'.$car_img.'" alt="" />
      </a>
      <div class="card-info px-4 mt-2">
        <h2 class="card-title capitalize font-semibold text-lg line-clamp-1">
          '.$car_name.'
        </h2>
        <p class="text-gray-600 line-clamp-3">'.$car_dec.'</p>
        <div class="add-to-cart flex items-center justify-between">
          <h3 class="price capitalize"> <span class="font-bold text-lg">'.$car_price.'RS</span> /KM</h3>
          <button
            class="add-into-cart py-2 px-4 outline outline-3 outline-transparent hover:outline-hoverBg transition-all duration-500 border-[3px] border-transparent hover:border-white bg-hoverBg rounded-lg">Rent
            Now</button>
        </div>
      </div>
    </div>
      ';
    }

  }
  else echo 'error';
?>

</body>

<script src="scripts/tailwind.js"></script>
<script>
  feather.replace();
</script>
<script src="scripts/getStartedChevron.js"></script>

</html>