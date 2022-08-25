-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 11:50 AM
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
-- Database: `violation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `Name`, `Username`, `Password`) VALUES
(1, 'Jeral Barnuevo', 'jeral.admin13', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `personelID` smallint(6) NOT NULL,
  `IDnum` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timein` varchar(50) DEFAULT NULL,
  `timeout` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`personelID`, `IDnum`, `FirstName`, `LastName`, `ContactNumber`, `Email`, `Username`, `Password`, `date`, `timein`, `timeout`, `status`) VALUES
(7, 'CYC-61350-7', 'GHERBIE', 'DELMONTE', '09123456789', 'gherbie@gmail.com', 'jeral.personnel', '1234', '2022-03-05 07:54:14', '2022-03-05 14:24:19', '2022-03-05 15:35:21', 'Offline'),
(8, 'CYC-92609-8', 'JERAL', 'BARNUEVO', '09512341015', 'jeral@gmail.com', 'gherbie.personnel', '1234567', '2022-03-05 07:53:14', '2022-03-05 11:43:15', '2022-03-05 11:43:37', 'Offline'),
(12, 'CYC-71137-12', 'ANTONIO', 'DELMONTE', '09262918941', 'antonio@gmail.com', 'antonio.personnel', '1234', '2022-03-05 08:03:40', '2022-03-05 16:02:17', '2022-03-05 16:03:40', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `vtion`
--

CREATE TABLE `vtion` (
  `ViolationID` int(11) NOT NULL,
  `ViolationNo` varchar(255) NOT NULL,
  `ViolationName` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Punishment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vtion`
--

INSERT INTO `vtion` (`ViolationID`, `ViolationNo`, `ViolationName`, `Category`, `Punishment`) VALUES
(60, 'VIOLATION-00060', 'Noise Violation', 'Minor', '600 Pesos'),
(70, 'VIOLATION-00061', 'Gun Ban', 'Major', '1yr Prison'),
(71, 'VIOLATION-00071', 'Curfew', 'Minor', '2 Months Community Service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`personelID`);

--
-- Indexes for table `vtion`
--
ALTER TABLE `vtion`
  ADD PRIMARY KEY (`ViolationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `personelID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vtion`
--
ALTER TABLE `vtion`
  MODIFY `ViolationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
