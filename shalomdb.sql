-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 09:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `ar` varchar(50) NOT NULL,
  `ap` int(50) NOT NULL,
  `vendorcom` varchar(50) NOT NULL,
  `shalomcom` varchar(50) NOT NULL,
  `bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shalom2`
--

INSERT INTO `shalom2` (`ticketnumber`, `invno`, `company`, `fullname`, `destination`, `issuedate`, `fare`, `ar`, `ap`, `vendorcom`, `shalomcom`, `bank`) VALUES
('07164573800', 'CSI-456780', 'shalom', 'tato bizuneh', 'ADD ARN ADD', '2022-09-15', '10000', '12000.00', 11000, '2000', '5', 'United Bank'),
('07164573811', 'CSI-456780', 'TATO INT SOLUTION AGENCY', 'abye zeleke', 'add-arn-add', '2022-09-10', '10000', '12000.00', 8000, '2000', '9', 'United Bank'),
('0716457389', 'CSI-677868', 'munch', 'dino girma', 'dxb-add-dxb', '2022-09-25', '10000', '12000.00', 8000, '00000', '1500', 'Nib Bank'),
('07164573898', 'CSI-456780', 'munch', 'dino', 'dxb-add-dxb', '2022-09-22', '10000', '9000', 8000, '500', '1000.00', 'Nib Bank');

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
