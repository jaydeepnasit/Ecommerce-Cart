-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 12:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonymous`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_number` bigint(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_image` varchar(250) NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_number`, `p_name`, `p_image`, `p_amount`, `p_status`) VALUES
(1, 852369, 'Redmi Y2 (Black, 32 GB) (3 GB RAM)', '1.jpeg', 25000, 'Active'),
(2, 159753, 'Samsung Galaxy M20 (Charcoal Black, 4+64GB)', '2.jpeg', 58000, 'Active'),
(3, 357842, 'OPPO K1 (Piano Black, 64 GB)  (4 GB RAM)', '3.jpeg', 65000, 'Active'),
(4, 456654, 'Apple iPhone X (Space Gray, 256 GB)', '4.jpeg', 25000, 'Active'),
(5, 358426, 'Vivo V15 Pro (Topaz Blue, 128 GB)  (6 GB RAM)', '5.jpeg', 55000, 'Active'),
(6, 123222, 'Honor 9N (Midnight Black, 32 GB)  (3 GB RAM)', '6.jpeg', 39000, 'Active'),
(7, 741852, 'Lenovo K8 Note (Venom Black, 64 GB)  (4 GB RAM)', '7.jpeg', 36000, 'Active'),
(8, 963852, 'Asus ZenFone Max M1 (Black, 32 GB)  (3 GB RAM)', '8.jpeg', 84000, 'Active'),
(9, 999666, 'Apple iPhone 6 (Gold, 32 GB)', '9.jpeg', 44000, 'Active'),
(10, 332211, 'Samsung Galaxy A9 (Bubblegum Pink, 128 GB)', '10.jpeg', 97000, 'Active'),
(11, 848484, 'Samsung Galaxy A8 Star (White, 64 GB)  (6 GB RAM', '11.jpeg', 78000, 'Active'),
(12, 379182, 'Apple iPhone 8 Plus (Silver, 64 GB)', '12.jpeg', 48000, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_number` (`p_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
