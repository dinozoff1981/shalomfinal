-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2022 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shalomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `shalom2`
--

CREATE TABLE `shalom2` (
  `ticketnumber` varchar(100) NOT NULL,
  `invno` varchar(100) NOT NULL,
  `company` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `issuedate` date NOT NULL,
  `fare` varchar(50) NOT NULL,
  `ar` decimal(20,2) NOT NULL,
  `ap` decimal(20,2) NOT NULL,
  `vendorcom` varchar(50) NOT NULL,
  `totals` decimal(20,2) DEFAULT NULL,
  `bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shalom2`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
