-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 06:00 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `password`) VALUES
(1, 'neel', '1732'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complain_tb`
--

CREATE TABLE `complain_tb` (
  `complain_id` int(15) NOT NULL,
  `user_id` int(10) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_details` varchar(255) NOT NULL,
  `c_solution` varchar(255) NOT NULL,
  `c_date` varchar(10) NOT NULL,
  `c_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain_tb`
--

INSERT INTO `complain_tb` (`complain_id`, `user_id`, `c_title`, `c_details`, `c_solution`, `c_date`, `c_status`) VALUES
(1, 1, 'water', 'water is not coming.', 'water problem as been solved', '2020-09-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `house_member`
--

CREATE TABLE `house_member` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) DEFAULT NULL,
  `h_gender` varchar(255) DEFAULT NULL,
  `h_dob` varchar(255) DEFAULT NULL,
  `h_blood` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_member`
--

INSERT INTO `house_member` (`h_id`, `h_name`, `h_gender`, `h_dob`, `h_blood`, `user_id`) VALUES
(1, 'trushilssss', 'M', '2001-07-27', 'o+', 1),
(3, 'abbas', 'M', '2020-09-14', 'B-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_admin`
--

CREATE TABLE `main_admin` (
  `main_admin_id` int(10) NOT NULL,
  `main_username` varchar(255) NOT NULL,
  `main_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_admin`
--

INSERT INTO `main_admin` (`main_admin_id`, `main_username`, `main_password`) VALUES
(1, 'admins', '1890');

-- --------------------------------------------------------

--
-- Table structure for table `mom_meeting`
--

CREATE TABLE `mom_meeting` (
  `meeting_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meeting_date` date NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mom_meeting`
--

INSERT INTO `mom_meeting` (`meeting_id`, `title`, `meeting_date`, `start_time`, `end_time`, `topic`) VALUES
(1, 'ganpatisssss', '2020-09-15', '02:55', '05:58', 'speakerssss'),
(3, 'xyx', '2020-09-08', '01:31', '03:33', 'SPESKERssss');

-- --------------------------------------------------------

--
-- Table structure for table `noticetb`
--

CREATE TABLE `noticetb` (
  `notice_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `n_date` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `posted_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticetb`
--

INSERT INTO `noticetb` (`notice_id`, `subject`, `n_date`, `details`, `photos`, `posted_by`) VALUES
(10, 'diwali', '2020-09-19', 'jgkhg', 'notice_image/682458_111449.jpg', 'Secretary'),
(11, 'navarati', '2020-09-15', 'navarti is garba festival', 'notice_image/211295_050213.png', 'Secretary');

-- --------------------------------------------------------

--
-- Table structure for table `payment_user`
--

CREATE TABLE `payment_user` (
  `pay_id` int(11) NOT NULL,
  `order_id` varchar(30) DEFAULT NULL,
  `customer_id` varchar(30) DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_user`
--

INSERT INTO `payment_user` (`pay_id`, `order_id`, `customer_id`, `customer_name`, `date`, `amount`, `user_id`) VALUES
(1, 'ORDER98203476', 'CUST001', 'ghori neel', 'September 14, 2020', '500', 1),
(2, 'ORDER38213367', 'CUST001', 'ghori neel', 'September 14, 2020', '500', 1),
(3, 'ORDER33859502', 'CUST001', 'ghori neel', 'September 14, 2020', '500', 1),
(4, 'ORDER13873868', 'CUST001', 'ghori neel', 'September 14, 2020', '500', 1),
(5, 'ORDER9627232', 'CUST001', 'ghori neel', 'September 16, 2020', '500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `secretary_entry`
--

CREATE TABLE `secretary_entry` (
  `sec_id` int(100) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `e_mails` varchar(50) NOT NULL,
  `mobiles_no` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `join_date` varchar(15) NOT NULL,
  `sec_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secretary_entry`
--

INSERT INTO `secretary_entry` (`sec_id`, `f_name`, `l_name`, `e_mails`, `mobiles_no`, `dob`, `gender`, `occupation`, `username`, `password`, `join_date`, `sec_photo`) VALUES
(1, 'keval', 'Bhimani', 'keval@gmail.com', '8469485373', '2020-09-09', 'male', ' coding', 'keval', '1732', '2020-09-08', 'sec_photo/48902_090453.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_entry`
--

CREATE TABLE `user_entry` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `b_date` varchar(50) NOT NULL,
  `house_id` int(100) NOT NULL,
  `society_name` varchar(50) NOT NULL,
  `total_member` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_photo` varchar(200) NOT NULL,
  `entry_date` varchar(50) NOT NULL,
  `account_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_entry`
--

INSERT INTO `user_entry` (`user_id`, `first_name`, `last_name`, `e_mail`, `mobile_no`, `b_date`, `house_id`, `society_name`, `total_member`, `password`, `user_photo`, `entry_date`, `account_type`) VALUES
(1, 'ghori', 'neel', 'ghorineel62@gmail.com', '8469485373', '21.06.2000', 109, 'gokuldham', 4, '1732', 'images/839900_085252.jpg', '2020-09-17', '1'),
(3, 'Trushil', 'tejani', 'tejnai@gmail.com', '8469485373', '2020-09-11', 101, 'gokuldham', 3, '1890', 'images/887327_020941.png', '2020-09-11', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complain_tb`
--
ALTER TABLE `complain_tb`
  ADD PRIMARY KEY (`complain_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `house_member`
--
ALTER TABLE `house_member`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `house_member_ibfk_1` (`user_id`);

--
-- Indexes for table `mom_meeting`
--
ALTER TABLE `mom_meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `noticetb`
--
ALTER TABLE `noticetb`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `payment_user`
--
ALTER TABLE `payment_user`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `payment_user_ibfk_1` (`user_id`);

--
-- Indexes for table `secretary_entry`
--
ALTER TABLE `secretary_entry`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `user_entry`
--
ALTER TABLE `user_entry`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain_tb`
--
ALTER TABLE `complain_tb`
  MODIFY `complain_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `house_member`
--
ALTER TABLE `house_member`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mom_meeting`
--
ALTER TABLE `mom_meeting`
  MODIFY `meeting_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticetb`
--
ALTER TABLE `noticetb`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_user`
--
ALTER TABLE `payment_user`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `secretary_entry`
--
ALTER TABLE `secretary_entry`
  MODIFY `sec_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_entry`
--
ALTER TABLE `user_entry`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain_tb`
--
ALTER TABLE `complain_tb`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_entry` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house_member`
--
ALTER TABLE `house_member`
  ADD CONSTRAINT `house_member_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_entry` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_user`
--
ALTER TABLE `payment_user`
  ADD CONSTRAINT `payment_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_entry` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
