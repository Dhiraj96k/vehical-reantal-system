<?php include 'connect.php';?>
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
  <header>
    <nav id="nav" class="flex items-center justify-between px-4">
      <div class="nav-logo uppercase font-bold text-xl">
        on<span class="text-hoverBg italic">rent</span>al
      </div>
      <ul class="nav-links flex items-center py-4">
        <li>
          <a href="#cars"
            class="hover:bg-secondaryHoverBg transition-all rounded-lg font-semibold capitalize px-4 py-2">Cars</a>
        </li>
        <li>
          <a href="#bikes"
            class="hover:bg-secondaryHoverBg transition-all rounded-lg font-semibold capitalize px-4 py-2">Bikes</a>
        </li>
        <li>
          <a href="#feedback"
            class="hover:bg-secondaryHoverBg transition-all rounded-lg font-semibold capitalize px-4 py-2">Feedback</a>
        </li>
        <li>
          <a href="./admin/admin.html"
            class="hover:bg-secondaryHoverBg transition-all rounded-lg font-semibold capitalize px-4 py-2">dashboard</a>
        </li>
        <li>
          <a href="#"
            class="hover:bg-secondaryHoverBg transition-all rounded-lg font-semibold capitalize px-4 py-2">Contact
            us</a>
        </li>
      </ul>
      <div class="login-button">
        <?php 
        if(isset($_COOKIE['u_id']))
        echo '<a href="#" class="py-3 px-6 rounded-full bg-hoverBg font-semibold capitalize">Hello, '.$_COOKIE['u_name'].'</a>';
        else
        echo '<a href="register.html" class="py-3 px-6 rounded-full bg-hoverBg font-semibold capitalize">sign up</a>';
        
        ?>
      </div>
    </nav>
  </header>
  <div class="hero-section my-8 flex items-center justify-around gap-4">
    <div class="text-section">
      <h2 class="text-5xl font-bold capitalize">rent our best</h2>
      <h2 class="text-5xl font-bold capitalize">cars,with best price.</h2>
      <p class="text-lg max-w-[500px] mt-2">
        The best way to travel across the road to success is in a vehicle that
        embodies the essence of success
      </p>

      <a href="started.php" target="_self"
        class="getStartedBtn block w-fit px-6 py-3 bg-hoverBg capitalize font-semibold rounded-full flex mt-4">
        <span>get started</span>
        <div class="relative w-6">
          <i data-feather="chevron-right" class="absolute inline"></i><i data-feather="chevron-right"
            class="getStartedChevrons absolute transition-all duration-500 inline opacity-65"></i><i
            data-feather="chevron-right"
            class="getStartedChevrons absolute transition-all duration-500 inline opacity-55"></i>
        </div>
      </a>
    </div>
    <div class="relative img-section bg-yellow-500 grid place-items-center rounded-full w-[500px] h-[500px]">
      <img src="assets/Hero/hero1.jpg" class="relative z-10 rounded-full w-[100%] h-[100%] object-cover" alt="" />
      <div
        class="absolute w-96 h-[500px] rounded-full bg-gradient-to-r from-cyan-500 to-[#d85ac6] from-[#edb658] blur-3xl">
      </div>
    </div>
  </div>

  <!-- main  products section-->
  <main class="py-4">
    <div class="bg-gray-100 py-4">
      <div class="title-section flex items-center justify-between px-8">
        <h2 class="text-xl font-bold capitalize">
          what we <span class="uppercase text-gray-600">offers</span>
        </h2>
        <div class="flex items-center gap-8">
          <p
            class="font-semibold text-lg capitalize py-2 border-b-2 border-transparent border-b-hoverBg transition-all">
            all cars
          </p>
          <p
            class="text-gray-600 text-lg capitalize py-2 border-b-2 border-transparent hover:border-b-hoverBg transition-all">
            top rentals
          </p>
          <div class="flex items-center gap-4">
            <a href="#" class="block text-gray-600 p-2 rounded-full shadow"><i data-feather="chevron-left"></i></a>
            <a href="#" class="block text-gray-600 p-2 rounded-full shadow"><i data-feather="chevron-right"></i></a>
          </div>
        </div>
      </div>

      <!-- card-container -->
      <div id="cars" class="cards-container my-8 mx-4 grid gap-4 grid-cols-4">

        <?php
          $sql = "SELECT * FROM `car` WHERE car_type='car' ORDER BY `car`.`car_id` DESC LIMIT 10";
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

      <div id="bikes" class="cards-container my-8 mx-4 grid gap-4 grid-cols-4">
      <?php
          $sql = "SELECT * FROM car WHERE car_type = 'bike' LIMIT 10";
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
        
        <!-- card end -->
      </div>

    </div>
    <!--users says  -->
    <div id="feedback" class="u-feedbakcs px-4">
      <h2 class="text-xl font-bold capitalize my-8">
        what says our <span class="uppercase text-gray-600">customers</span>
      </h2>
      <div class="uf-card-container relative flex items-center justify-center gap-8">
        <div
          class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-60 h-20 rounded-full blur-xl absolute">
        </div>
        <div class="uf-card rounded-lg shadow backdrop-blur-md px-4 py-7 max-w-96 bg-glassWhite">
          <div class="personal-info">
            <div class="flex items-center gap-4">
              <img src="assets/usersFeedbacks/rs1.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
              <div>
                <h3 class="u-name capitalize font-semibold text-lg">dhiraj salunke</h3>
                <p class="from-state uppercase text-sm">ayodhya,kashi, 2003</p>
              </div>
            </div>
          </div>
          <div class="feedback">
            <p class="text-5xl quamma text-gray-600">,,</p>
            so beautiful so elegent just looking like a wow just looking like a woww !
            so beautiful so elegent just looking like a wow just looking like a woww !
          </div>
        </div>
        <div class="uf-card rounded-lg shadow backdrop-blur-md px-4 py-7 max-w-96 bg-glassWhite">
          <div class="personal-info">
            <div class="flex items-center gap-4">
              <img src="assets/usersFeedbacks/myby.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
              <div>
                <h3 class="u-name capitalize font-semibold text-lg">tanmay salunke</h3>
                <p class="from-state uppercase text-sm">ayodhya,kashi, 2003</p>
              </div>
            </div>
          </div>
          <div class="feedback">
            <p class="text-5xl quamma text-gray-600">,,</p>
            so beautiful so elegent just looking like a wow just looking like a woww !
            so beautiful so elegent just looking like a wow just looking like a woww !
          </div>
        </div>
        <div class="uf-card rounded-lg shadow backdrop-blur-md px-4 py-7 max-w-96 bg-glassWhite">
          <div class="personal-info">
            <div class="flex items-center gap-4">
              <img src="assets/usersFeedbacks/rs2.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
              <div>
                <h3 class="u-name capitalize font-semibold text-lg">dhiraj salunke</h3>
                <p class="from-state uppercase text-sm">ayodhya,kashi, 2003</p>
              </div>
            </div>
          </div>
          <div class="feedback">
            <p class="text-5xl quamma text-gray-600">,,</p>
            so beautiful so elegent just looking like a wow just looking like a woww !
            so beautiful so elegent just looking like a wow just looking like a woww !
          </div>
        </div>
        <!-- uf-card-end -->
      </div>
      <a href="feedback/feedback.html"> <button
      class="add-into-cart py-2 px-4 outline outline-4 outline-transparent hover:outline-hoverBg transition-all duration-500 border-[3px] border-transparent hover:border-white bg-hoverBg rounded-lg  mx-4 my-8">Add Your's</button>
    </div></a>
  </main>
</body>

<script src="scripts/tailwind.js"></script>
<script>
  feather.replace();
</script>
<script src="scripts/getStartedChevron.js"></script>

</html>