-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 04:36 PM
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
  `Admin_ID` int(11) NOT NULL,
  `AdminAccNo.` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Image-Profile` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Complaint_ID` int(11) NOT NULL,
  `Complaint_No` varchar(255) NOT NULL,
  `Complainant` varchar(255) NOT NULL,
  `Complaint-Name` varchar(255) NOT NULL,
  `Complaint-Details` text NOT NULL,
  `Attachment` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum-categories`
--

CREATE TABLE `forum-categories` (
  `categories-id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date-publish` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum-reply`
--

CREATE TABLE `forum-reply` (
  `forum-replies` int(50) NOT NULL,
  `reply` text NOT NULL,
  `date-created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum-topics`
--

CREATE TABLE `forum-topics` (
  `topics-id` int(50) NOT NULL,
  `category-id` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date-created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `homeowners`
--

CREATE TABLE `homeowners` (
  `Homeowners_ID` int(11) NOT NULL,
  `Account_Number` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeowners`
--

INSERT INTO `homeowners` (`Homeowners_ID`, `Account_Number`, `First_Name`, `Last_Name`, `Gender`, `Age`, `ContactNo`, `Address`, `Birthdate`, `Email`, `Image`, `Password`, `Confirm_Password`, `date_registered`) VALUES
(78, '', 'JERAL ', 'BARNUEVO', 'Male', 22, '09512341015', 'BLK 191 LOT 13', '2000-07-13', 'sacatintobarnuevo@gmail.com', '', '$2y$10$BY9GB6bT17N9J9DjipKuFeLWAnFNAgZ8LPjb2jSCRZ7PlSdc0GVs2', '$2y$10$EUTUHDzToI4mW2fTFE7alugzq6LdvjKQ09dnfMmSwIVkiuLNigv5u', '2022-09-11 11:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `records_iD` int(50) NOT NULL,
  `admin_name` text NOT NULL,
  `adminNo` text NOT NULL,
  `ticketNo` text NOT NULL,
  `total` float NOT NULL,
  `status` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `ViolationID` int(11) NOT NULL,
  `ViolationNo` varchar(255) NOT NULL,
  `ViolationName` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Punishment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`ViolationID`, `ViolationNo`, `ViolationName`, `Category`, `Punishment`) VALUES
(60, 'VIOLATION-00060', 'PET VIOLATION', 'Minor', '500 PESOS'),
(70, 'VIOLATION-00061', 'Gun Ban', 'Major', '1yr Prison');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Complaint_ID`);

--
-- Indexes for table `forum-categories`
--
ALTER TABLE `forum-categories`
  ADD PRIMARY KEY (`categories-id`);

--
-- Indexes for table `forum-reply`
--
ALTER TABLE `forum-reply`
  ADD PRIMARY KEY (`forum-replies`);

--
-- Indexes for table `forum-topics`
--
ALTER TABLE `forum-topics`
  ADD PRIMARY KEY (`topics-id`);

--
-- Indexes for table `homeowners`
--
ALTER TABLE `homeowners`
  ADD PRIMARY KEY (`Homeowners_ID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`records_iD`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`ViolationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Complaint_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum-categories`
--
ALTER TABLE `forum-categories`
  MODIFY `categories-id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum-reply`
--
ALTER TABLE `forum-reply`
  MODIFY `forum-replies` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum-topics`
--
ALTER TABLE `forum-topics`
  MODIFY `topics-id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeowners`
--
ALTER TABLE `homeowners`
  MODIFY `Homeowners_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `records_iD` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `ViolationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
