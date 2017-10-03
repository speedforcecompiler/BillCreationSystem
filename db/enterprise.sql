-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 05:53 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_name` varchar(50) NOT NULL,
  `client_gst` varchar(50) NOT NULL,
  `client_addr` text NOT NULL,
  `client_contact` varchar(13) NOT NULL,
  `client_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `ID` int(11) NOT NULL,
  `pub_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`ID`, `pub_name`) VALUES
(29, 'TIMES OF INDIA'),
(31, 'LOKSATTA'),
(33, 'INDIAN EXPRESS'),
(34, 'MAHARASHTRA TIMES'),
(35, 'NAVBHARAT TIME'),
(36, 'MUMBAI MIRROR'),
(37, 'BOMBAY TIMES '),
(38, 'ACTIVE TIMES'),
(39, 'MUMBAI LAKSHADEEP'),
(40, 'MIDDAY -PM'),
(41, 'MIDDAY - AM'),
(42, 'ASSIGNMENT ABROAD'),
(43, 'HINDUSTAN TIMES'),
(45, 'URDU TIMES'),
(46, 'INQUILAB'),
(47, 'AFTERNOON '),
(48, 'DAINIK BHASKAR'),
(49, 'URDU NEWS'),
(50, 'SAHARA'),
(51, 'MUMBAI CHAUFER'),
(52, 'DECCAN CHRONICLE'),
(53, 'SAKAAL - PUNE'),
(54, 'SAMANAA - MARATHI'),
(55, 'SAMANAA - HINDI'),
(57, 'NAVSHAKTI'),
(58, 'MUMBAI NAGARI'),
(59, 'GUJARAT SAMACHAR'),
(60, 'BOMBAY SAMACHAR');

-- --------------------------------------------------------

--
-- Table structure for table `release_orders`
--

CREATE TABLE `release_orders` (
  `ro_number` int(10) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `release_orders`
--

INSERT INTO `release_orders` (`ro_number`, `name`) VALUES
(1, 'sohail'),
(2, 'shivang'),
(3, 'saumy'),
(4, 'vividha'),
(5, 'jainy'),
(6, 'speedforce'),
(7, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `release_orders`
--
ALTER TABLE `release_orders`
  ADD PRIMARY KEY (`ro_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `release_orders`
--
ALTER TABLE `release_orders`
  MODIFY `ro_number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
