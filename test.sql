-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 02:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `malaysia`
--

CREATE TABLE `malaysia` (
  `Year` varchar(4) NOT NULL,
  `Egg` int(11) DEFAULT NULL,
  `Milk` int(11) DEFAULT NULL,
  `Bread` int(11) DEFAULT NULL,
  `Biscuit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `singapore`
--

CREATE TABLE `singapore` (
  `Year` varchar(4) NOT NULL,
  `Egg` int(11) DEFAULT NULL,
  `Milk` int(11) DEFAULT NULL,
  `Bread` int(11) DEFAULT NULL,
  `Biscuit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thailand`
--

CREATE TABLE `thailand` (
  `Year` varchar(4) NOT NULL,
  `Egg` int(11) DEFAULT NULL,
  `Milk` int(11) DEFAULT NULL,
  `Bread` int(11) DEFAULT NULL,
  `Biscuit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
