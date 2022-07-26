-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 07:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power`
--

-- --------------------------------------------------------

--
-- Table structure for table `utility`
--

CREATE TABLE `utility` (
  `Name` char(20) NOT NULL,
  `IVRSNo.` char(20) NOT NULL,
  `Subject` char(10) NOT NULL,
  `Mobile No.` char(20) NOT NULL,
  `Address` char(40) NOT NULL,
  `complain` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utility`
--

INSERT INTO `utility` (`Name`, `IVRSNo.`, `Subject`, `Mobile No.`, `Address`, `complain`) VALUES
('Shivam Chadokar', 'N3376028724', 'No Electri', '0798799041', '258, Sector-C, Scheme No. 136, Vijaynaga', 'No power since morning '),
('Soumil Jaiswal', 'N3376028726', 'No Electri', '9589493199', 'Indore', 'testing ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
