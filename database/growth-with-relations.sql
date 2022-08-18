-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 12:01 PM
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
-- Database: `growth-with-relations`
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
(1, 'admin', '$2y$10$rvKMwNpFI3J1vMSEAMDQr.RLpGq6rp4/QwZOFbWQDdRX3hoDmCACy', 'steven', 'lizada', '', '2022-08-18', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`, `created_on`, `updated_on`, `delete_flag`) VALUES
(1, 1, '2022-08-18', '09:00:00', 1, '06:05:59', 8, '2022-08-18 11:37:55', '2022-08-18 11:37:55', 0),
(2, 2, '2022-08-19', '06:00:00', 1, '09:00:00', 8, '2022-08-18 11:38:40', '2022-08-18 11:38:40', 0),
(3, 3, '2022-08-20', '09:05:59', 0, '06:05:59', 8, '2022-08-18 11:39:12', '2022-08-18 11:39:12', 0),
(4, 4, '2022-08-21', '10:05:59', 0, '06:05:59', 7, '2022-08-18 11:43:48', '2022-08-18 11:43:48', 0),
(5, 5, '2022-08-19', '09:05:59', 0, '09:00:00', 8, '2022-08-18 11:53:04', '2022-08-18 11:53:04', 0),
(6, 6, '2022-08-22', '06:00:00', 0, '09:00:00', 8, '2022-08-18 11:53:43', '2022-08-18 11:53:43', 0),
(7, 7, '2022-08-23', '09:05:59', 0, '06:05:59', 8, '2022-08-18 11:54:23', '2022-08-18 11:54:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE `cashadvance` (
  `cashadvance_id` int(11) NOT NULL,
  `date_advance` date NOT NULL,
  `employee_id` int(15) NOT NULL,
  `amount` double NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_firstname` varchar(50) NOT NULL,
  `customer_lastname` varchar(50) NOT NULL,
  `customer_contact_info` varchar(50) NOT NULL,
  `customer_address` varchar(150) NOT NULL,
  `customer_created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `employee_id` int(50) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `deduction_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `created_on`, `updated_on`, `delete_flag`) VALUES
(1, 'IT Department', '2022-08-16 15:43:47', '2022-08-16 15:43:47', 0),
(2, 'Accounting Department', '2022-08-18 10:29:35', '2022-08-18 10:29:35', 0),
(3, 'Billing Department', '2022-08-18 10:29:59', '2022-08-18 10:29:59', 0),
(4, 'Marketing Department', '2022-08-18 10:31:48', '2022-08-18 10:31:48', 0),
(5, 'Production Department', '2022-08-18 10:32:51', '2022-08-18 10:32:51', 0),
(6, 'Engineering Department', '2022-08-18 10:33:34', '2022-08-18 10:33:34', 0),
(7, 'Risk Management Department', '2022-08-18 10:34:57', '2022-08-18 10:34:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_code` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `job_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL COMMENT '[1] - True [0] - False'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_code`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `job_id`, `department_id`, `schedule_id`, `photo`, `created_on`, `updated_on`, `delete_flag`) VALUES
(1, '142542242', 'Roge', 'Cawater', '1109 Escoda Street Paco Manila', '1997-10-19', '090651211', 'Male', 1, 1, 0, '', '2022-08-18 11:27:27', '2022-08-18 11:27:27', 0),
(2, '4252442343', 'Steven', 'Cadugyot', 'Gloria III Tandang Sora Quezon City', '1997-05-16', '09411218563', 'Male', 2, 1, 0, '', '2022-08-18 11:29:15', '2022-08-18 11:29:15', 0),
(3, '515411526', 'Sam', 'Bal', 'Pag-asa Quezon City', '1997-08-20', '0945135681', 'Male', 5, 1, 1, '', '2022-08-18 11:30:40', '2022-08-18 11:30:40', 0),
(4, '624224242', 'Nikko', 'Abad', 'Pasay City Metro Manila', '1997-05-19', '0946514621', 'Male', 2, 1, 0, '', '2022-08-18 11:42:56', '2022-08-18 11:42:56', 0),
(5, '882253424', 'Ann', 'Leyco', 'Muños QC', '1996-07-11', '09454576138', 'Female', 11, 2, 0, '', '2022-08-18 11:48:17', '2022-08-18 11:48:17', 0),
(6, '651121892', 'Rose', 'Velasco', 'Sampaloc Manila', '1996-08-13', '09264106540', 'Female', 12, 2, 0, '', '2022-08-18 11:48:17', '2022-08-18 11:48:17', 0),
(7, '7156419124', 'Mary', 'Sapungan', 'Project 8 Visayas Ave. QC', '1996-08-03', '0935987526', 'Female', 13, 2, 0, '', '2022-08-18 11:49:15', '2022-08-18 11:49:15', 0),
(64, 'SUA657048123', 'sam', 'bal', 'paco escoda manila', '0000-00-00', '09452368544', 'Male', 47, 1, 0, '', '2022-08-18 17:50:00', '2022-08-18 17:50:00', 0),
(65, 'VUO902843761', 'Leo', 'Nikko', 'General Ave. Tandang Sora', '0000-00-00', '0935654111', 'Male', 2, 1, 0, '', '2022-08-18 17:57:19', '2022-08-18 17:57:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `product_id` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` float NOT NULL,
  `price` float NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `item_total` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `description`, `rate`, `created_on`, `updated_on`, `delete_flag`) VALUES
(1, 'Programmer', 550, '2022-08-16 15:42:08', '2022-08-16 15:42:08', 0),
(2, 'Software Developer', 537, '2022-08-18 10:28:13', '2022-08-18 10:28:13', 0),
(3, 'Computer Hardware', 537, '2022-08-18 10:36:42', '2022-08-18 10:36:42', 0),
(4, 'Troubleshooting', 537, '2022-08-18 10:37:22', '2022-08-18 10:37:22', 0),
(5, 'IT Technician', 750, '2022-08-18 10:38:54', '2022-08-18 10:38:54', 0),
(6, 'Support Specialist', 850, '2022-08-18 10:39:18', '2022-08-18 10:39:18', 0),
(7, 'IT Security Specialist', 850, '2022-08-18 10:41:54', '2022-08-18 10:41:54', 0),
(8, 'System Analyst', 850, '2022-08-18 10:41:54', '2022-08-18 10:41:54', 0),
(9, 'Network Engineer', 850, '2022-08-18 10:41:54', '2022-08-18 10:41:54', 0),
(10, 'Software Engineer', 850, '2022-08-18 10:41:54', '2022-08-18 10:41:54', 0),
(11, 'Accounting Manager', 850, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(12, 'Accounting officer', 650, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(13, 'Accounting Clerk', 537, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(14, 'General accountant', 750, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(15, 'Auditor', 537, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(16, 'Treasurer', 537, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(17, 'Financial Analyst', 537, '2022-08-18 10:48:54', '2022-08-18 10:48:54', 0),
(18, 'Billing Manager', 850, '2022-08-18 10:52:18', '2022-08-18 10:52:18', 0),
(19, 'Billing Specialist', 650, '2022-08-18 10:52:18', '2022-08-18 10:52:18', 0),
(20, 'Billing Clerk', 0, '2022-08-18 10:52:18', '2022-08-18 10:52:18', 0),
(21, 'Billing Officer', 0, '2022-08-18 10:52:18', '2022-08-18 10:52:18', 0),
(22, 'Chief Marketing Officer (CMO)', 950, '2022-08-18 10:56:15', '2022-08-18 10:56:15', 0),
(23, 'Financial Analyst', 750, '2022-08-18 10:56:15', '2022-08-18 10:56:15', 0),
(24, 'Digital Marketing Manager', 650, '2022-08-18 10:56:15', '2022-08-18 10:56:15', 0),
(25, 'Communications Manager', 537, '2022-08-18 10:56:15', '2022-08-18 10:56:15', 0),
(26, 'Content Marketing Specialist', 537, '2022-08-18 10:56:15', '2022-08-18 10:56:15', 0),
(27, 'Production Manager', 950, '2022-08-18 11:08:52', '2022-08-18 11:08:52', 0),
(28, 'Production Supervisor', 850, '2022-08-18 11:08:52', '2022-08-18 11:08:52', 0),
(29, 'Production Operator', 650, '2022-08-18 11:08:52', '2022-08-18 11:08:52', 0),
(30, 'Production Monitoring', 650, '2022-08-18 11:08:52', '2022-08-18 11:08:52', 0),
(31, 'Production Officer', 537, '2022-08-18 11:08:52', '2022-08-18 11:08:52', 0),
(32, 'Chief Engineering', 1500, '2022-08-18 11:14:03', '2022-08-18 11:14:03', 0),
(33, 'VP Engineering', 1000, '2022-08-18 11:14:03', '2022-08-18 11:14:03', 0),
(34, 'Director Of Engineering', 950, '2022-08-18 11:14:03', '2022-08-18 11:14:03', 0),
(35, 'Engineering Manager', 850, '2022-08-18 11:14:03', '2022-08-18 11:14:03', 0),
(36, 'Individual Contributors ', 750, '2022-08-18 11:14:03', '2022-08-18 11:14:03', 0),
(37, ' Environmental Compliance Specialist', 2500, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(38, 'Loss Control Consultant', 2000, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(39, ' Compliance Consultant', 1800, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(40, ' Compliance Officer', 1500, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(41, 'Risk Analyst', 1300, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(42, 'Risk and Compliance Investigator', 1000, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(43, ' Model Risk Specialist', 850, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(44, 'Regulatory Affairs Managers', 750, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(47, 'Risk Manager', 650, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0),
(48, 'Chief Risk Officer', 537, '2022-08-18 11:24:05', '2022-08-18 11:24:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `overtime_id` int(11) NOT NULL,
  `employee_id` int(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`overtime_id`, `employee_id`, `hours`, `rate`, `date_overtime`, `created_on`, `updated_on`, `delete_flag`) VALUES
(1, 1, 2, 150, '2022-08-18', '2022-08-18 13:20:27', '2022-08-18 13:20:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_terms`
--

CREATE TABLE `payment_terms` (
  `payment_terms_id` int(11) NOT NULL,
  `payment_methods` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `purchase_order_id` int(11) NOT NULL,
  `purchase_order_code` varchar(12) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` float NOT NULL,
  `subtotal` float NOT NULL,
  `sales_tax` float NOT NULL,
  `total` float NOT NULL,
  `purchase_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL COMMENT '[0] - Pending [1] - Received\r\n',
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `time_in`, `time_out`, `employee_id`, `created_on`, `updated_on`, `delete_flag`) VALUES
(0, '09:00:00', '18:00:00', 1, '2022-08-18 11:33:38', '2022-08-18 11:33:38', 0),
(2, '06:00:00', '09:00:00', 2, '2022-08-18 11:33:38', '2022-08-18 11:33:38', 0),
(3, '05:00:00', '14:00:00', 3, '2022-08-18 11:40:15', '2022-08-18 11:40:15', 0),
(4, '06:00:00', '15:00:00', 4, '2022-08-18 11:44:23', '2022-08-18 11:44:23', 0),
(5, '07:00:00', '16:00:00', 5, '2022-08-18 11:51:34', '2022-08-18 11:51:34', 0),
(6, '06:00:00', '09:00:00', 6, '2022-08-18 11:52:04', '2022-08-18 11:52:04', 0),
(7, '10:00:00', '17:00:00', 7, '2022-08-18 11:52:23', '2022-08-18 11:52:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_code` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` bigint(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_product`
--

CREATE TABLE `supplier_product` (
  `id` int(11) NOT NULL,
  `supplier_product_id` varchar(50) NOT NULL,
  `supplier_product_name` varchar(80) NOT NULL,
  `supplier_product_description` varchar(80) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL,
  `delete_flag` tinyint(1) NOT NULL
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
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`cashadvance_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`deduction_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `position_id` (`job_id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`overtime_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `payment_terms`
--
ALTER TABLE `payment_terms`
  ADD PRIMARY KEY (`payment_terms_id`);

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
  ADD PRIMARY KEY (`purchase_order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `supplier_product`
--
ALTER TABLE `supplier_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `cashadvance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `overtime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_terms`
--
ALTER TABLE `payment_terms`
  MODIFY `payment_terms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `purchase_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_product`
--
ALTER TABLE `supplier_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD CONSTRAINT `cashadvance_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deductions`
--
ALTER TABLE `deductions`
  ADD CONSTRAINT `deductions_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `overtime`
--
ALTER TABLE `overtime`
  ADD CONSTRAINT `overtime_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
