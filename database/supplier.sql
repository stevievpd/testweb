-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2022 at 04:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `growth`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_id` varchar(250) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` bigint(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_id`, `photo`, `business_name`, `product`, `address`, `email`, `phone_number`, `time_stamp`) VALUES
(21, 'WFN846201793', 'male.png', 'NIKO Pie', 'Pie', 'Makati City', 'nikkopie@gmail.com', 945421565, '2022-08-02 09:57:23'),
(22, 'EJQ781650329', 'female4.jpg', 'Cake Shops', 'Cake', 'Tandang Sora', 'ambL@gmail.com', 1042442, '2022-08-02 05:20:56'),
(23, 'JIG091843275', 'male.png', 'Bulla Crave', 'Laundry Machine', 'Tandang Sora', 'ambL@gmail.com', 264161125, '2022-08-02 05:38:30'),
(24, 'DPK378142605', 'facebook-profile-image.jpeg', 'Bulla Crave', 'Laundry Machine', 'Tandang Sora', 'ambL@gmail.com', 264161125, '2022-08-02 05:54:20'),
(25, 'WFU397408615', 'male6.jpg', 'Bulla Crave', 'Laundry Machine', 'Tandang Sora', 'ambL@gmail.com', 264161125, '2022-08-02 06:12:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
