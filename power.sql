-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 06:14 PM
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
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Name` char(20) NOT NULL,
  `IVRSNo.` char(20) NOT NULL,
  `Subject` char(10) NOT NULL,
  `Mobile No.` char(20) NOT NULL,
  `Address` char(40) NOT NULL,
  `complain` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Name`, `IVRSNo.`, `Subject`, `Mobile No.`, `Address`, `complain`) VALUES
('Shivam Chadokar', 'N3376028724', 'No Electri', '0798799041', '258, Sector-C, Scheme No. 136, Vijaynaga', 'No power since morning '),
('Shivam Chadokar', 'N3376028724', 'No Electri', '7987990414', '258, Sector-C, Scheme No. 136, Vijaynaga', 'testing ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `IVRSNo.` char(20) NOT NULL,
  `Name` char(20) NOT NULL,
  `Meter No.` char(20) NOT NULL,
  `Mobile No.` char(20) NOT NULL,
  `Address` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`IVRSNo.`, `Name`, `Meter No.`, `Mobile No.`, `Address`) VALUES
('N3376028724', 'Ojas Mehrotra', 'ELYMER322394', '6263729580', ''),
('N3376028725', 'Shivam Chadokar', 'ELYMER322395', '7987990414', ''),
('N3376028726', 'Soumil Jaiswal', 'ELYMER322396', '9589493199', ''),
('N3376028727', 'Prakhar Chaturvedi', 'ELYMER322397', '9630756442', ''),
('N3376028728', 'Prem Sharma', 'ELYMER322398', '9098331605', ''),
('N3376028729', 'Vanshika Arora', 'ELYMER322399', '7000959698', ''),
('N3376028730', 'Soumya Rathore', 'ELYMER322400', '7987397968', ''),
('N3376028731', 'Harshwardhan Panchal', 'ELYMER322401', '8103865262', ''),
('N3376028732', 'Nakul joshi', 'ELYMER322402', '9755424477', ''),
('N3376028733', 'Anuj Pandey', 'ELYMER322403', '8839670427', ''),
('N3376028734', 'Karan Chopra', 'ELYMER322404', '8819807777', ''),
('N3376028735', 'Sarthak Kushwah', 'ELYMER322405', '8112540990', ''),
('N3376028736', 'Gomtesh Gandhi', 'ELYMER322406', '9340589125', ''),
('N3376028737', 'Dev Davda', 'ELYMER322407', '9316307707', ''),
('N3376028738', 'Ishita Paliwal', 'ELYMER322408', '8827099042', ''),
('N3376028739', 'Devisha Solanki', 'ELYMER322409', '9893209767', ''),
('N3376028740', 'Soumil Sharma', 'ELYMER322410', '9589493101', ''),
('N3376028741', 'Shivam Malhotra', 'ELYMER322411', '7987990312', ''),
('N3376028742', 'Raj Sharma', 'ELYMER322412', '9098831605', ''),
('N3376028743', 'Rajesh Mittal', 'ELYMER322413', '7806087369', ''),
('N3376028744', 'Soumya Singh', 'ELYMER322414', '7987399768', ''),
('N3376028745', 'Sanya Singh', 'ELYMER322415', '9287451322', ''),
('N3376028746', 'Ramesh Kapoor', 'ELYMER322416', '7896541230', ''),
('N3376028747', 'Rishi Chouhan', 'ELYMER322417', '7786941223', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `IVRSNo.` char(20) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IVRSNo.`, `Password`) VALUES
('N3336001400', 85265471),
('N3376028724', 62637295),
('N3376028725', 79879904),
('N3376028726', 95894931),
('N3376028727', 96307564),
('N3376028728', 90983316),
('N3376028729', 70009596),
('N3376028730', 79873979),
('N3376028731', 81038652),
('N3376028732', 97554244),
('N3376028733', 88396704),
('N3376028734', 88198077),
('N3376028735', 81125409),
('N3376028736', 93405891),
('N3376028737', 93163077),
('N3376028738', 88270990),
('N3376028739', 98932097),
('N3376028740', 95894931),
('N3376028741', 79879903),
('N3376028742', 90988316),
('N3376028743', 78060873),
('N3376028744', 79873997),
('N3376028745', 92874513),
('N3376028746', 78965412),
('N3376028747', 77869412);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IVRSNo.`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;