-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 07:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `u_name` varchar(40) NOT NULL,
  `u_pass` varchar(40) NOT NULL,
  `u_birth` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_name`, `u_pass`, `u_birth`) VALUES
('admindhiraj', 'dhiraj', 2003);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(40) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_dec` varchar(200) NOT NULL,
  `car_price` int(200) NOT NULL,
  `car_img` varchar(500) NOT NULL,
  `car_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `car_dec`, `car_price`, `car_img`, `car_type`) VALUES
(13, 'Fronx', 'It is available in 13 variants, with engine options ranging from 998 to 1197 cc and a choice of 2 transmissions: Manual and Automatic', 13, 'assets/uploadedimg/Fronex.webp', 'car'),
(14, 'Venue', 'The Venue is a 5 seater 3 cylinder car and has length of 3995 mm, width of 1770 mm and a wheelbase of 2500 mm', 13, 'assets/uploadedimg/venue.webp', 'car'),
(15, 'Thar', 'The Thar is a 4 seater 4 cylinder car and has length of 3985 mm, width of 1820 mm and a wheelbase of 2750', 15, 'assets/uploadedimg/Thar.webp', 'car'),
(16, 'Brezza', 'The Maruti Vitara Brezza has 1 Petrol Engine on offer. The Petrol engine is 1462 cc . It is available with Manual & Automatic transmission.', 14, 'assets/uploadedimg/Brezza.webp', 'car'),
(17, 'Grand Vitara', 'The Grand Vitara is a 5 seater 3 cylinder car and has length of 4345 mm, width of 1795 mm and a wheelbase of 2600 mm.', 14, 'assets/uploadedimg/Grand Vitara.webp', 'car'),
(18, 'Exter', 'Hyundai Exter is a 5 seater SUV car with FWD option.', 14, 'assets/uploadedimg/Exter.webp', 'car'),
(19, 'Scorpio ', 'Scorpio Specs, Features and Price ... The Mahindra Scorpio has 1 Diesel Engine on offer. The Diesel engine is 2184 cc', 15, 'assets/uploadedimg/scorpio.webp', 'car'),
(20, 'Ertiga', 'Maruti Suzuki Ertiga is currently available in Petrol and CNG engines. The 1462 cc Petrol engine generates a power of 101.64bhp@6000rpm', 14, 'assets/uploadedimg/Ertiga.webp', 'car'),
(21, 'Shine', 'The Honda Shine is powered by a 123.94 cc air-cooled engine which produces 10.74 PS @ 7500 rpm of power', 5, 'assets/uploadedimg/CD Down.jpg', 'bike'),
(22, 'Cd Down', 'The cheapest entry-level bike from Hero Honda, Hero Honda CD Dawn , is powered by an air cooled, single cylinder, 4 stroke, OHC engine which is loaded with 97.2cc engine', 4, 'assets/uploadedimg/CD 100.jpg', 'bike'),
(23, 'Unicorn', 'The Honda Unicorn is powered by a 162.7 cc air-cooled engine which produces 12.91 PS @ 7500 rpm of power.', 6, 'assets/uploadedimg/Unicorn.jpg', 'bike'),
(24, 'Passion', 'The Hero Passion XTEC is powered by a 113.2 cc air-cooled engine which produces 9.15 PS @ 7500 rpm of power', 5, 'assets/uploadedimg/Passion.jpg', 'bike'),
(25, 'Xblade', 'The Honda X-Blade is powered by 162.71cc BS6 engine which develops a power of 13.67 bhp and a torque of 14.7 Nm', 5, 'assets/uploadedimg/Xblade.jpg', 'bike'),
(27, 'Ciaz', 'Maruti Suzuki introduced the Ciaz in 2014 as their C-segment sedan rival to the likes of the Honda City and the Hyundai Verna, and it is a spiritual successor to the highly successful SX4.', 14, 'assets/uploadedimg/Ciaz.webp', 'car'),
(28, 'Fortuner', 'The new Fortuner boasts of a power-packed 6-speed Diesel and Petrol AT as well as MT engine capable of turning mountains into molehills.', 18, 'assets/uploadedimg/Fortuner.jpg', 'car'),
(29, 'Scorpio n', 'The Diesel engine is 2198 cc while the Petrol engine is 1997 cc . It is available with Automatic & Manual transmission', 15, 'assets/uploadedimg/Scorpio n.png', 'car');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `u_id` int(50) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`u_id`, `u_name`, `u_pass`, `u_email`) VALUES
(8, 'dhiraj', 'dhiraj', 'dhiraj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE `rented` (
  `r_id` int(11) NOT NULL,
  `dr_lic` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `r_car_type` varchar(10) NOT NULL,
  `r_car_name` varchar(50) NOT NULL,
  `r_price` float NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rented`
--

INSERT INTO `rented` (`r_id`, `dr_lic`, `name`, `mobile`, `email`, `address`, `r_car_type`, `r_car_name`, `r_price`, `u_id`) VALUES
(1, '0', '0', 900, '0', 'cn', 'car', 'bmw', 100, 0),
(2, 'sju8', 'dhiraj', 900, 'abba@gm.cm', 'cn', 'car', 'bmw', 100, 0),
(3, 'sju8', 'dhiraj', 900, 'abba@gm.cm', 'cn', 'car', 'bmw', 100, 0),
(4, 'rterfdqr2345', 'd', 0, 'xyz@gmail.com', 'c', 'bike', 'Cd', 4, 1),
(5, 'rterfdqr2345', 'd', 0, 'xyz@gmail.com', 'c', 'bike', 'Cd', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
