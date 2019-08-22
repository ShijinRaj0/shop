-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2019 at 10:04 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `msg_sender` int(11) NOT NULL,
  `msg_receiver` int(11) NOT NULL,
  `msg_send_on` varchar(50) NOT NULL,
  `msg_content` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `msg_sender`, `msg_receiver`, `msg_send_on`, `msg_content`, `status`) VALUES
(1, 2, 1, '20-08-2019 12:12:34 pm', 'Hello broi', '1'),
(2, 1, 2, '20-08-2019 12:14:51 pm', 'hii', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_uid` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_phone` varchar(20) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_address` text NOT NULL,
  `last_login_date` varchar(50) NOT NULL,
  `last_ip_address` varchar(30) NOT NULL,
  `created_on` varchar(50) NOT NULL,
  `is_logged_in` enum('1','0') NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_uid`, `admin_email`, `admin_name`, `admin_password`, `admin_phone`, `admin_image`, `admin_address`, `last_login_date`, `last_ip_address`, `created_on`, `is_logged_in`, `status`) VALUES
(1, 'shijin', 'shijin802@gmail.com', 'Shijin Raj', '202cb962ac59075b964b07152d234b70', '9495457373', '89b0fc1802963814bc65071d54c34da5200820191.jpeg', '', '20-08-2019 12:12:40 pm', '::1', '20-08-2019 11:38:01 am', '0', '1'),
(2, 'akhil', 'akhildhanesh@gmail.com', 'Akhil K', '202cb962ac59075b964b07152d234b70', '9876543210', 'e327510a680bc3acc653fb5f40bdc57320082019.jpeg', '', '20-08-2019 12:14:58 pm', '::1', '20-08-2019 12:10:56 pm', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
