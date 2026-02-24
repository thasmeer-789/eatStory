-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 12:11 PM
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
-- Database: `eatstory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_password`, `a_date`) VALUES
(3, 'admin@gmail.com', 'admin', '2025-03-07 00:00:00.000000'),
(4, 'admin@gmail.com', 'admin', '2025-03-07 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(100) NOT NULL,
  `i_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `i_id`, `u_id`, `quantity`) VALUES
(29, 7, 0, 1),
(30, 7, 2, 1),
(33, 8, 3, 1),
(34, 7, 3, 1),
(39, 8, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_date`) VALUES
(2, 'Non-veg', '2025-03-08 12:30:02.000000'),
(3, 'Veg', '2025-03-08 12:29:39.000000'),
(4, 'Vegnn', '2025-03-19 21:31:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `discount_type` varchar(20) DEFAULT NULL CHECK (`discount_type` in ('fixed','percentage')),
  `discount_value` float NOT NULL,
  `min_order_value` float DEFAULT 0,
  `max_discount_value` float DEFAULT 0,
  `expiration_date` date NOT NULL,
  `status` enum('active','expired') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount_type`, `discount_value`, `min_order_value`, `max_discount_value`, `expiration_date`, `status`) VALUES
(1, 'F4E58724', 'percentage', 20, 1, 30, '2025-03-21', 'active'),
(2, '1D0872AC', 'percentage', 20, 1, 30, '2025-03-21', 'active'),
(3, '892EF6AE', 'fixed', 30, 1000, 30, '2025-03-28', 'active'),
(4, 'BF2B8E8B', 'fixed', 30, 500, 1000, '2025-04-17', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `d_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_designation` varchar(255) NOT NULL,
  `d_img` varchar(255) NOT NULL,
  `d_price` int(255) NOT NULL,
  `qty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`d_id`, `cat_id`, `d_name`, `d_designation`, `d_img`, `d_price`, `qty`) VALUES
(7, 2, ' Butter Chicken', 'A rich and creamy North Indian dish made with marinated chicken cooked in a spiced tomato-based curry with butter and cream.', 'uploads/combo.jpg', 700, '5'),
(8, 3, 'Harvest Bowl', 'wild rice, roasted chicken, kale, pickled red onion, pepitas, sumac chip, feta + lemon ginger dressing', 'uploads/WhatsApp Image 2022-03-27 at 10.39.03 PM.jpeg', 500, '6');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `ratings` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_id`, `message`, `date`, `ratings`, `order_id`) VALUES
(6, 0, 'testing', '0000-00-00', 5, 2147483647),
(7, 0, 'testing feedback', '2025-04-04', 4, 2147483647),
(8, 0, 'testing order feedback', '2025-04-04', 4, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ofeedback`
--

CREATE TABLE `ofeedback` (
  `feed_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `feed_name` varchar(255) NOT NULL,
  `feed_email` varchar(255) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `feed_message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `od_id` int(11) NOT NULL,
  `c_id` int(50) NOT NULL,
  `tot_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `o_id` int(11) NOT NULL,
  `c_id` int(50) NOT NULL,
  `cart_id` int(50) NOT NULL,
  `sub_amt` int(50) NOT NULL,
  `tot_amt` int(50) NOT NULL,
  `i_id` int(50) NOT NULL,
  `o_qty` int(50) NOT NULL,
  `od_id` int(50) NOT NULL,
  `ostatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`o_id`, `c_id`, `cart_id`, `sub_amt`, `tot_amt`, `i_id`, `o_qty`, `od_id`, `ostatus`) VALUES
(5, 1, 28, 0, 800, 7, 1, 5, 0),
(6, 2, 30, 0, 800, 7, 1, 7, 0),
(7, 1, 31, 0, 1700, 8, 2, 5, 0),
(8, 1, 32, 0, 1700, 7, 1, 5, 0),
(9, 3, 33, 0, 1200, 8, 1, 8, 0),
(10, 3, 34, 0, 1200, 7, 1, 8, 0),
(11, 1, 35, 0, 500, 8, 1, 9, 0),
(12, 1, 36, 0, 1000, 8, 2, 10, 0),
(13, 1, 37, 0, 1400, 7, 2, 10, 0),
(14, 1, 38, 0, 500, 8, 1, 12, 0),
(15, 1, 39, 0, 500, 8, 1, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `cust_id` int(50) NOT NULL,
  `o_id` int(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `cust_id`, `o_id`, `amount`) VALUES
(6, 1, 4, 1600),
(7, 1, 4, 1600),
(8, 2, 6, 1600),
(9, 2, 7, 800),
(10, 1, 5, 1700),
(11, 3, 8, 1200),
(12, 1, 9, 500),
(13, 1, 10, 1400),
(14, 1, 11, 500),
(15, 1, 0, 0),
(16, 1, 11, 500),
(17, 1, 12, 500),
(18, 1, 12, 500),
(19, 1, 13, 500);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `p_id` int(11) NOT NULL,
  `p_locationname` varchar(255) NOT NULL,
  `p_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`p_id`, `p_locationname`, `p_date`) VALUES
(4, 'Mangalore', '2025-03-08 13:11:58.000000'),
(5, 'Kankanady', '2025-03-08 13:12:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `sp_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `additionalinfo` varchar(50) NOT NULL,
  `zip` bigint(10) NOT NULL,
  `c_id` int(50) NOT NULL,
  `tot` int(50) NOT NULL,
  `p_method` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `o_id` int(50) NOT NULL,
  `trans_id` int(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sp_id`, `name`, `lname`, `email`, `phone`, `add1`, `additionalinfo`, `zip`, `c_id`, `tot`, `p_method`, `date`, `o_id`, `trans_id`, `status`) VALUES
(1, 'user', '', 'admin@gmail.com', 4565432345, 'n', 'tt', 5, 1, 1500, 'COD', '2025-03-19', 1, 8934, 3),
(2, 'testing', '', 'testing@gmail.com', 222222222, '4', 'ssadsd', 222, 1, 200, 'COD', '2025-03-19', 2, 3385, 0),
(3, 'testing', '', 'testing@gmail.com', 7654543454, '5', 'hello', 575018, 1, 1600, 'CP', '2025-03-19', 4, 6692, 0),
(4, 'testing', '', 'testing@gmail.com', 4565432343, '4', 'nothing', 575019, 2, 1600, 'COD', '2025-03-20', 6, 2754, 3),
(5, 'checking', '', 'admin@gmail.com', 1234567898, '5', 'a', 5, 2, 800, 'UPI', '2025-03-20', 7, 2147483647, 0),
(6, 'swasthi', '', 'swasthi@gmail.com', 7654345672, '4', 'Nothing', 575019, 1, 1700, 'UPI', '2025-03-21', 5, 2147483647, 3),
(7, 'eatstory', '', 'eatstory@gmail.com', 1234567898, '4', 'hello', 575019, 3, 1200, 'COD', '2025-03-21', 8, 2147483647, 3),
(8, 'testing', '', 'user@gmail.com', 454545, '5', 'testing', 575018, 1, 500, '', '2025-03-27', 9, 2147483647, 3),
(9, 'user', '', 'navaneeth@gmail.com', 9876565456, '4', 'testinggggg', 575019, 1, 1400, 'COD', '2025-04-04', 10, 2147483647, 3),
(11, '', '', '', 0, '', '', 0, 1, 0, '', '2025-04-04', 0, 0, 0),
(14, 'tester', '', 'navaneeth@gmail.com', 1234567898, '4', 'zzzzzzzzzzz', 575019, 1, 500, '', '2025-04-04', 12, 2147483647, 3),
(15, 'sowmya', '', 'admin@gmail.com', 9876765676, '4', 'xx', 575019, 1, 500, 'UPI', '2025-04-04', 13, 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `phone_no`, `address`, `email`, `password`, `status`, `role`) VALUES
(1, 'user', '8767654565', 'Mangalore', 'user@gmail.com', 'User_123', 0, 'customer'),
(2, 'testing', '9876765656', 'Mangalore', 'testing@gmail.com', 'Testing_12', 0, 'customer'),
(3, 'eatstory', '9876765656', 'Mangalore', 'eatstory@gmail.com', 'Eatstory_1', 0, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `ofeedback`
--
ALTER TABLE `ofeedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ofeedback`
--
ALTER TABLE `ofeedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
