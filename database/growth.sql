-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 04:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `type`) VALUES
(1, 'admin', '$2y$10$fCOiMky4n5hCJx3cpsG20Od4wHtlkCLKmO6VLobJNRIg9ooHTkgjK', 'Roge', 'Catubig', 'profilepic.jpg', '2018-04-30', 'admin'),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', '', '2022-08-01', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(13, 1, '2018-04-27', '08:00:00', 1, '17:00:00', 8),
(14, 1, '2018-04-28', '08:00:00', 1, '17:00:00', 8),
(15, 1, '2018-05-04', '08:00:00', 1, '17:00:00', 8),
(16, 1, '2018-05-02', '08:00:00', 1, '17:00:00', 8),
(17, 1, '2018-05-01', '08:00:00', 1, '17:00:00', 8),
(18, 1, '2018-05-03', '08:00:00', 1, '17:00:00', 8),
(74, 1, '2018-04-30', '08:00:00', 1, '16:44:23', 7.7333333333333),
(75, 3, '2018-04-18', '08:00:00', 1, '17:00:00', 8),
(76, 4, '2018-04-19', '08:00:00', 1, '17:00:00', 8),
(77, 4, '2018-04-27', '08:00:00', 1, '17:00:00', 7),
(78, 4, '2018-04-28', '08:00:00', 1, '17:00:00', 8),
(79, 4, '2018-05-01', '08:30:00', 1, '17:00:00', 8),
(80, 4, '2018-05-03', '08:00:00', 1, '17:00:00', 0),
(81, 4, '2018-05-05', '08:00:00', 1, '17:00:00', 9),
(83, 4, '2018-05-31', '12:00:00', 0, '18:00:00', 5),
(84, 4, '2018-05-18', '08:00:00', 1, '17:00:00', 7),
(85, 4, '2018-05-09', '09:00:00', 1, '18:00:00', 8),
(86, 5, '2018-07-11', '07:41:00', 1, '16:00:00', 7),
(87, 1, '2018-07-11', '06:27:00', 1, '15:00:00', 6),
(88, 6, '2018-07-11', '07:45:00', 1, '14:48:00', 3.8),
(89, 7, '2018-07-11', '07:56:00', 1, '17:00:00', 8),
(90, 8, '2018-07-11', '06:05:12', 1, '16:00:00', 7),
(91, 9, '2018-07-11', '18:12:06', 0, '00:00:00', 0),
(92, 10, '2018-07-11', '18:13:01', 0, '00:00:00', 0),
(94, 12, '2018-07-11', '18:16:14', 0, '00:00:00', 0),
(95, 13, '2018-07-11', '18:17:32', 0, '00:00:00', 0),
(96, 14, '2018-07-11', '18:18:33', 0, '00:00:00', 0),
(97, 15, '2018-07-11', '18:19:26', 0, '00:00:00', 0),
(98, 16, '2018-07-11', '18:20:26', 0, '00:00:00', 0),
(99, 17, '2018-07-11', '18:21:41', 0, '00:00:00', 0),
(101, 19, '2018-07-12', '23:50:28', 1, '00:00:00', 0),
(102, 20, '2018-07-12', '23:52:48', 1, '00:00:00', 0),
(103, 21, '2018-07-12', '23:54:50', 1, '00:00:00', 0),
(104, 22, '2018-07-12', '23:56:02', 1, '00:00:00', 0),
(107, 1, '2022-07-08', '07:00:00', 1, '14:30:00', 6.5),
(108, 1, '2022-07-23', '15:04:00', 0, '14:51:00', 0.21666666666667),
(111, 1, '1997-12-12', '05:00:00', 1, '15:00:00', 6),
(114, 1, '0000-00-00', '11:11:00', 0, '11:11:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`id`, `date_advance`, `employee_id`, `amount`) VALUES
(2, '2018-05-02', '1', 1000),
(3, '2018-05-02', '1', 1000),
(4, '2018-07-12', '5', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `cust_firstname` varchar(50) NOT NULL,
  `cust_lastname` varchar(50) NOT NULL,
  `cust_contact_info` varchar(50) NOT NULL,
  `cust_address` varchar(150) NOT NULL,
  `transaction_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `cust_firstname`, `cust_lastname`, `cust_contact_info`, `cust_address`, `transaction_id`) VALUES
(1, 'ABC123456789', 'Steven Edward', 'Lizada', '09615089172', '12 Emerald lane Brgy. Culiat Quezon City', 'TRNS789456321');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES
(7, 'Pag-ibig', 150),
(8, 'SSS', 250),
(9, 'Philhealth', 300),
(10, 'Salary Loan', 900),
(11, 'PC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `position_id`, `schedule_id`, `photo`, `created_on`) VALUES
(1, 'ABC123456789', 'Roge', 'Cawater', 'Paco, Manila PH', '2018-04-02', '09000035719', 'Male', 1, 1, 'profilepic.jpg', '2018-04-28'),
(3, 'DYE473869250', 'Hayop ka ', 'Divinagracia', 'E.B. Magalona', '1992-05-02', '09123456789', 'Female', 2, 2, '', '2018-04-30'),
(4, 'JIE625973480', 'Gemalyn', 'Cepe', 'Carmen, Bohol', '1995-10-02', '09468029840', 'Female', 2, 3, '', '2018-04-30'),
(5, 'TQO238109674', 'Bruno', 'Den', 'Test', '1995-08-23', '5454578965', 'Male', 1, 2, 'thanossmile.jpg', '2018-07-11'),
(6, 'EDQ203874591', 'Henry', 'Doe', 'New St. Esp', '1991-07-25', '9876543210', 'Male', 2, 4, 'male.png', '2018-07-11'),
(7, 'TWY781946302', 'Johnny', 'Jr', 'Esp', '1995-07-11', '8467067344', 'Male', 1, 2, 'profile.jpg', '2018-07-11'),
(9, 'HEL079321846', 'Jacob', 'Carter', 'St12 N1', '1995-07-18', '5454578965', 'Male', 1, 2, 'profile.jpg', '2018-07-11'),
(10, 'OCN273564901', 'Benjamin Fuckert', 'Cohen', 'TEST', '1991-07-25', '78548852145', 'Male', 2, 3, 'profile.jpg', '2018-07-11'),
(11, 'PGX413705682', 'Ethan', 'Carson', 'DEMO', '1994-07-19', '8467067344', 'Male', 1, 2, 'profile.jpg', '2018-07-11'),
(12, 'YWX536478912', 'Daniel', 'Cooper', 'Test', '1995-07-11', '9876543210', 'Male', 2, 4, 'profile.jpg', '2018-07-11'),
(13, 'ALB590623481', 'Emma', 'Wallis', 'Test', '1994-07-19', '9632145655', 'Female', 1, 3, 'female4.jpg', '2018-07-11'),
(14, 'IOV153842976', 'Sophia', 'Maguire', 'Test', '1995-07-11', '5454578965', 'Female', 2, 2, 'profile.jpg', '2018-07-11'),
(15, 'CAB835624170', 'Mia', 'Hollister', 'Test', '1995-07-18', '9632145655', 'Female', 2, 3, 'profile.jpg', '2018-07-11'),
(16, 'MGZ312906745', 'Emily', 'JK', 'Test', '1996-07-24', '9876543210', 'Female', 2, 3, 'profile.jpg', '2018-07-11'),
(17, 'HSP067892134', 'Nakia', 'Grey', 'Test', '1995-10-24', '8467067344', 'Female', 1, 2, 'profile.jpg', '2018-07-11'),
(19, 'ZTC714069832', 'Logan', 'Paul', 'Esp 16', '1994-12-30', '0202121255', 'Male', 1, 1, 'profile.jpg', '2018-07-11'),
(20, 'VFT157620348', 'Jack', 'Adler', 'Test', '1991-07-25', '6545698880', 'Male', 1, 4, 'profile.jpg', '2018-07-11'),
(21, 'XRF342608719', 'Mason', 'Beckett', 'Demo', '1996-07-24', '8467067344', 'Male', 2, 1, 'profile.jpg', '2018-07-11'),
(22, 'LVO541238690', 'Lucas', 'Cooper', 'Demo', '1995-07-18', '9632145655', 'Male', 2, 1, 'profile.jpg', '2018-07-11'),
(25, 'BDT823670495', 'Stewie', 'Griffin', 'Qouhog', '1997-12-12', '09615089172', 'Male', 4, 2, '', '2022-07-26'),
(26, 'EYF693714205', 'James', 'Bato', 'Tandang Sora', '2022-07-15', '22442424', 'Male', 2, 2, '', '2022-07-30'),
(27, 'PEO648731092', 'test', 'test', '', '0000-00-00', '', '', 0, 0, '', '2022-08-01'),
(28, 'PRO067134925', 'test', 'test', '', '0000-00-00', '', '', 0, 0, '', '2022-08-01'),
(29, 'ROA573148690', 'test', 'test', '', '0000-00-00', '', '', 0, 0, '', '2022-08-01'),
(30, 'BKE714926058', 'Robert', 'Cailog', 'Tandang Sora', '2022-08-27', '22442424', 'Male', 4, 2, '', '2022-08-02'),
(31, 'KVZ528907163', 'Roge', 'Cawater', 'Tandang Sora', '2022-08-27', '22442424', 'Male', 1, 1, '', '2022-08-02'),
(32, 'ZMA469157820', 'Robert', 'Capuso', 'gsssg', '2022-07-15', '22442424', 'Male', 2, 1, '', '2022-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` float NOT NULL,
  `price` float NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `photo`, `product_id`, `description`, `quantity`, `cost`, `price`, `stamp`) VALUES
(14, 'female4.jpg', 'SZI590183742', 'Ballpen', 10, 10, 15, '2022-08-02 09:46:32'),
(15, 'profilepic.jpg', 'XIZ791623845', 'Laptop', 10, 25000, 30000, '2022-08-02 09:46:43'),
(16, 'flashdrive.png', 'KCJ914053786', 'USB', 10, 300, 400, '2022-08-02 08:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_unit` varchar(10) NOT NULL,
  `item_cost` int(11) NOT NULL,
  `item_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_id`, `item_description`, `item_quantity`, `item_unit`, `item_cost`, `item_total`) VALUES
(1, 'ZXC00123456789', 'Mouse and Keyboard', 1, 'pcs', 1, 750);

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `employee_id`, `hours`, `rate`, `date_overtime`) VALUES
(7, '1', 8, 100, '2022-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `description`, `rate`) VALUES
(1, 'Programmer', 100),
(2, 'Writer', 50),
(3, 'Marketing ', 35),
(4, 'Graphic Designer', 75);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `purchase_order_id` varchar(12) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `purchase_date` date NOT NULL,
  `expected_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_order_id`, `quantity`, `price`, `total`, `purchase_date`, `expected_date`) VALUES
(37, '', 220, 20, 4928, '0002-02-02', '0002-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sales_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `sales_id`) VALUES
(1, '2022-07-28', 'TR00123456789');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES
(1, '07:00:00', '16:00:00'),
(2, '08:00:00', '17:00:00'),
(3, '09:00:00', '18:00:00'),
(4, '10:00:00', '19:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `supplier_product`
--

CREATE TABLE `supplier_product` (
  `supplier_product_id` int(11) NOT NULL,
  `supplier_product_name` varchar(80) NOT NULL,
  `supplier_product_description` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_product`
--
ALTER TABLE `supplier_product`
  ADD PRIMARY KEY (`supplier_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
