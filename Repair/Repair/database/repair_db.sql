-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 07:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `user_id` int(11) NOT NULL COMMENT 'PK',
  `username` varchar(20) NOT NULL COMMENT 'ID',
  `password` varchar(20) NOT NULL COMMENT 'PASSWORD',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `user_level` varchar(20) NOT NULL COMMENT 'STATUS',
  `u_name` varchar(100) NOT NULL COMMENT 'FIRSTNAME',
  `u_lastname` varchar(100) NOT NULL COMMENT 'LASTNAME',
  `tel` varchar(20) NOT NULL COMMENT 'TELL',
  `email` varchar(50) NOT NULL COMMENT 'EMAIL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user_id`, `username`, `password`, `user_status`, `user_level`, `u_name`, `u_lastname`, `tel`, `email`) VALUES
(1, 'admin', 'admin', 0, 'admin', 'admin', 'admin', '0111111111', 'admin@gmail.com'),
(2, 'worker', 'worker', 0, 'worker', 'adam', 'adam', '0111111111', 'admin@gmail.com'),
(3, 'employee', 'employee', 0, 'employee', 'jamon', 'jamon', '0111111111', 'admin@gmail.com'),
(4, 'worker02', '1234', 0, 'worker', 'na', 'na', '0222222222', 'narx@gmail.com'),
(5, 'khgbfg', '1234', 0, 'employee', 'df', 'df', '0333333333', 'thana@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL COMMENT 'PK',
  `status_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`) VALUES
(1, 'รอนำเนินการ'),
(2, 'กำลังนำเนินการ'),
(3, 'กำลังซ่อม'),
(4, 'ซ่อมเสร็จแล้ว');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
