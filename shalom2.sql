-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2022 at 05:26 AM
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
  `totals` decimal(20,0) DEFAULT NULL,
  `bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shalom2`
--

INSERT INTO `shalom2` (`ticketnumber`, `invno`, `company`, `fullname`, `destination`, `issuedate`, `fare`, `ar`, `ap`, `vendorcom`, `totals`, `bank`) VALUES
('12346588', 'CSI-523532', 'dinoint', 'abye', 'add-mqx-add', '2022-12-22', '5000.50', '87645.00', '36457.00', 'Fly Dubai', '0', 'Oromia international Bank'),
('1234658811', 'CSI-523532', 'abba', 'abebe', 'add-mqx-add', '2022-12-30', '5000.50', '2876467.00', '1000.00', 'Jezeera Airlines', NULL, 'Awash Bank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shalom2`
--
ALTER TABLE `shalom2`
  ADD PRIMARY KEY (`ticketnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
