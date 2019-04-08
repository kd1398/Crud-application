-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 10:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `sch`
--

CREATE TABLE `sch` (
  `er_no` bigint(15) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `institute_name` varchar(20) NOT NULL,
  `department_name` varchar(20) NOT NULL,
  `scholarship` varchar(20) NOT NULL,
  `scheme` varchar(20) NOT NULL,
  `amount` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch`
--

INSERT INTO `sch` (`er_no`, `fullname`, `institute_name`, `department_name`, `scholarship`, `scheme`, `amount`) VALUES
(160210107011, 'Kinjal S Doshi', 'gec', 'ce', 'ma', 'sdsd', 10000),
(160210107017, 'riddhi gondaliya`', 'gec', 'ce', 'ma', 'dghfg', 12000),
(160210107032, 'ibrahim', 'gec', 'ce', 'xfg', 'fdgf', 5000),
(160210107033, 'Foran Modi', 'gec', 'ce', 'ma', 'abc', 12345),
(1600210107010, 'kinjal', 'der', 'ce', 'sfdg', 'RGTH', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sch`
--
ALTER TABLE `sch`
  ADD PRIMARY KEY (`er_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
