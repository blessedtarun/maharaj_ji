-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2022 at 11:38 PM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vysoxnyu_tarun`
--
CREATE DATABASE IF NOT EXISTS `vysoxnyu_tarun` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vysoxnyu_tarun`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@gmail.com', '123'),
(2, 'abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(20) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `number`, `subject`, `message`) VALUES
(1, 'harshit', 'abc@gmail.com', '8278698501', 'For ', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL,
  `email` varchar(666) NOT NULL,
  `mobile` varchar(66) NOT NULL,
  `amount` varchar(400) NOT NULL,
  `tx_id` varchar(666) NOT NULL,
  `date` varchar(666) NOT NULL,
  `status` int(6) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`sno`, `name`, `email`, `mobile`, `amount`, `tx_id`, `date`, `status`) VALUES
(1, 'Harshit Jangid', 'harshitjangid@gmail.com', '8278698501', '89000000', 'TXID4565441', '02-10-22', 0),
(2, 'Harshit Jangid', 'harshitjangid@gmail.com', '8278698501', '50000000', 'TXID4565441', '02-10-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `sno` int(255) NOT NULL,
  `s_email` varchar(1000) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `fname` varchar(565) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `landmark` varchar(600) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `pay` varchar(200) NOT NULL,
  `pay_id` varchar(2000) NOT NULL,
  `price` int(255) NOT NULL,
  `promo` varchar(200) NOT NULL,
  `status` int(5) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `time` time(5) NOT NULL DEFAULT current_timestamp(),
  `payment_status` int(3) NOT NULL DEFAULT 0,
  `d_status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`sno`, `s_email`, `mobile`, `fname`, `lname`, `address`, `landmark`, `pincode`, `city`, `state`, `country`, `order_id`, `pay`, `pay_id`, `price`, `promo`, `status`, `date`, `updated_date`, `time`, `payment_status`, `d_status`) VALUES
(143, 'harshit@gmail.com', '4424566666', 'ty', 'singhaniyay', 'uhhj', 'dummy ', 'yty', 'jaipur', 'dummy state', 'hhh', 'ORDS5000045886594', 'ONLINE', 'pay_KpJFSLoEtOyNsd', 50000, '', 0, '2022-12-08', '2022-12-08 11:33:38.120201', '11:24:06.00000', 0, '0'),
(144, 'harshitjangid100@gmail.com', '8278698501', 'harshit', 'jangid', 'ttrtt', 'dummy land', '30511111', 'jaipur', 'dummy state', 'dummy', 'ORDS254006630765', 'ONLINE', 'pay_KpLBPbjdH55MXb', 25400, '', 0, '2022-12-08', '2022-12-08 11:33:43.705160', '02:54:31.00000', 0, '0'),
(145, 'harshit@gmail.com', '4424566666', 'harshit', 'singhaniyay', 'uiui', 'dummy ', '3055255', 'dummy city', 'dummy', 'dummy', 'ORDS2682060118108', 'COD', '', 26820, '', 0, '2022-12-08', '2022-12-08 11:32:10.914251', '06:32:10.00000', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_p`
--

CREATE TABLE `order_p` (
  `sno` int(255) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `p_id` int(200) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_p`
--

INSERT INTO `order_p` (`sno`, `order_id`, `p_id`, `qty`, `date`) VALUES
(218, 'ORDS5000045886594', 19, '3', '2022-12-08'),
(219, 'ORDS5000045886594', 18, '2', '2022-12-08'),
(220, 'ORDS254006630765', 18, '1', '2022-12-08'),
(221, 'ORDS254006630765', 7, '2', '2022-12-08'),
(222, 'ORDS2682060118108', 18, '1', '2022-12-08'),
(223, 'ORDS2682060118108', 16, '1', '2022-12-08'),
(224, 'ORDS2682060118108', 7, '1', '2022-12-08'),
(225, 'ORDS2682060118108', 15, '1', '2022-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `sno` int(200) NOT NULL,
  `pp_id` int(6) NOT NULL DEFAULT 0,
  `title` varchar(255) NOT NULL,
  `main_image` varchar(1000) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `qty` int(30) NOT NULL,
  `oprice` int(100) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sno`, `pp_id`, `title`, `main_image`, `image`, `details`, `qty`, `oprice`, `status`, `date`) VALUES
(7, 0, 'Dummy', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 14, 200, 0, ''),
(10, 1, 'Dummy2022', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 18, 250, 0, ''),
(11, 1, 'Dummy202', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 20, 750, 0, ''),
(12, 1, 'Dummy20', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 20, 750, 0, ''),
(13, 1, 'Dummy2', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa', 20, 750, 0, ''),
(14, 1, 'Dummy20', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa', 20, 750, 0, ''),
(15, 0, 'Dummy1', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa', 18, 750, 0, ''),
(16, 0, 'Dummy2', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa', 18, 750, 0, ''),
(17, 0, 'Dummy3', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 18, 750, 0, ''),
(18, 0, 'Dummy4', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa', 14, 25000, 0, ''),
(19, 0, 'Dummy5', '15.jpg', '1.jpg$2.jpg$3.jpg$4.jpg$5.jpg$6.jpg', 'Sofa', 14, 25000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(255) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `token` varchar(3000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `fname`, `lname`, `mobile`, `username`, `image`, `email`, `password`, `cpassword`, `token`, `status`, `datetime`) VALUES
(65, 'Harshit', 'Jangid', '8278698501', 'h', 'gh', 'harshitjangid100@gmail.com', '123', '123', 'jgj', 1, '0000-00-00'),
(67, 'Harshit', 'Jangid', '8278698501', 'h', 'gh', 'harshit@gmail.com', '123', '123', 'jgj', 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `order_p`
--
ALTER TABLE `order_p`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `order_p`
--
ALTER TABLE `order_p`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
