-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 07:02 PM
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
  `AdminAccNo` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Image_Profile` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL,
  `VerificationCode` varchar(255) NOT NULL,
  `Verified` int(10) NOT NULL DEFAULT 0,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `AdminAccNo`, `FirstName`, `LastName`, `Gender`, `Age`, `ContactNo`, `Address`, `Birthdate`, `Email`, `Image_Profile`, `Password`, `Confirm_Password`, `VerificationCode`, `Verified`, `date_registered`, `status`) VALUES
(1, 'ST-CE-3402', 'JERAL', 'BARNUEVO', 'Male', '22', '09512341015', 'MARILAO,BULACAN', '2000-07-13', 'sacatintobarnuevo@gmail.com', 'a4b280a41354f06cc7967c68e2fc0f4f.jpg', '$2y$10$YtVNqqwDahWTj0G7.6fMJeKD3ECGeL3HQp0h4sqSfmV19zA69jMdG', '$2y$10$G6Ox71KdHpkfLbeZ4FuK7uwIr5RJFbB.4XnOy3IctRtN/F2NdDnzG', '', 1, '2022-09-26 09:22:13', 'offline'),
(2, 'ST-CE-1032', 'AARON JAY', 'MANALILI ', 'Female', '32', '09512341015', 'CALOOCAN MINDANAO', '2001-07-01', 'aaron@gmail.com', 'index.jpg', '$2y$10$KjD0MQFh9bxpTzQMdjkDseBBDlktFgs/.gWFp0PIQQLQYssMjVex6', '$2y$10$Z16DRweCdk5UPuI70V1dnOEAakkDe7xjdl8CHiGG7JhCxLJ8yvyhG', '', 0, '2022-09-25 23:58:00', 'offline'),
(3, 'ST-CE-2892', 'MARISSA', 'BARNUEVO', 'Female', '25', '09126427146', 'MARILAO,BULACAN', '1975-03-26', 'barnuevomarissa0@gmail.com', 'mm.jpg', '$2y$10$qYk.xW6eN.mdRlsHXqYu9eG28amvjd8VHxKDfeGlehqkrPoYZFnsa', '$2y$10$FREYbN5Gcj.4IZkiOuMoLu2AJDcs5JSHzKIZUybBIu52g.id8ht6G', '', 0, '2022-09-25 23:54:56', 'offline'),
(4, 'ST-CE-5408', 'JUAN', 'PANDECO', 'Male', '25', '09512341015', 'MARILAO,BULACAN', '2000-07-23', 'barnuevojeral@gmail.com', '1661171036935.jpg', '$2y$10$p0vAvjlwC2tPXKwfp.2l0e5LcfJvFqcYNiAVJX/Is9MRx2WC0sXAa', '$2y$10$qmAiMLURGz81simKH9vfae7OdNCwXdNi9cKJssRFHyv74/57b6bvy', '471550', 1, '2022-09-26 00:52:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Complaint_ID` int(11) NOT NULL,
  `homeownersID` int(11) DEFAULT NULL,
  `adminID` int(11) DEFAULT NULL,
  `Complaint_No` varchar(255) NOT NULL,
  `Complainant_Name` varchar(255) NOT NULL,
  `Complaint_Details` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` int(255) NOT NULL,
  `Attachment` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Complaint_ID`, `homeownersID`, `adminID`, `Complaint_No`, `Complainant_Name`, `Complaint_Details`, `Address`, `ContactNo`, `Attachment`, `Date`, `Status`) VALUES
(49, 119, NULL, 'COMPLAINT-4801', 'aasdasd', 'sdadad', 'asdadada', 13123, '322868_1100-800x825.jpg', '2022-09-26', 'Pending');

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
  `VerificationCode` varchar(255) NOT NULL,
  `verified` int(10) NOT NULL DEFAULT 0,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeowners`
--

INSERT INTO `homeowners` (`Homeowners_ID`, `Account_Number`, `First_Name`, `Last_Name`, `Gender`, `Age`, `ContactNo`, `Address`, `Birthdate`, `Email`, `Image`, `Password`, `Confirm_Password`, `VerificationCode`, `verified`, `date_registered`) VALUES
(81, '', 'ALVIN', 'CAPILI', 'Male', 22, '09512341015', 'MARILAO, BULACAN', '0000-00-00', 'alvin@gmail.com', '', '$2y$10$YjSK.sgvKJvHIu3OSv0Aye5DsIuQ1wVvgo9uDqQOHP246Z8vEOwau', '$2y$10$ZaxVWudWOtUC3NA0T80yn.j.S1/bhQUhtl2kHLAwX6x/xUPd9AnrO', '', 0, '2022-09-17 23:40:10'),
(82, '', 'BLESSY', 'FAELDONIA', 'Female', 23, '09512341015', 'BLK 191 LOT 13', '2000-07-13', 'blessy@gmail.com', '', '$2y$10$K45WGP5QruuilmMO.zqzHOli0JsykJ1I9nUQAPFkGvz2Artm/Q1.y', '$2y$10$Y1udJ/GTBNXLlcexQuB3s.3PsFMJcLWYZfBGnmrMArb6xBjX.iwH2', '', 0, '2022-09-17 23:44:00'),
(83, '', 'MARIA', 'LORA', 'Female', 22, '09512341015', 'MARILAO,BULACAN', '2000-07-13', 'maria@gmail.com', '', '$2y$10$yK6zj7bzX15ByN4zlqw5d.OiyH.rbQTNzqMsgDuP7cY4Qrlcuij3O', '$2y$10$pYEEdLMNcBiDALIF6fZG1uAk4XxBj012Agi9NpiPprA6wEfwiEQTm', '', 0, '2022-09-18 01:09:17'),
(109, '', 'JUAN', 'DELA CRUZ', 'Male', 22, '09512341015', 'MARILAO, BULACAN', '2000-07-13', 'juan@gmail.com', 'forward.jpg', '$2y$10$Dqs7SCHIEqMKlfAZN0MiwuNau7mnk2hUA4TpYeQRKEGO1qUAw6X.q', '$2y$10$TKKroUvv2HjRHxp6COHwi.f9f4ZnPHpTmww9OF/g340DqmUTFCEuW', '', 1, '2022-09-26 16:21:15'),
(111, 'ST-CEHO-0212', 'AARON JAY', 'MANALILI', 'Female', 28, '09512341015', 'CALOOCAN, CITY', '2002-01-12', 'aaron@gmail.com', '322868_1100-800x825.jpg', '$2y$10$SJ.eFUdLWzpbj6od3h0rpuG7ziS6qDFzEMMIymR2B3p5.Q.1K4ghC', '$2y$10$bknrc4lnZ75ZgEubZweXXu3lGkRneo60mfd57LbM82z7SPA0DK4zq', '', 0, '2022-09-26 13:14:53'),
(119, '', 'JERAL', 'BARNUEVO', 'Male', 22, '09512341015', 'MARILAO,BULACAN', '2000-07-13', 'sacatintobarnuevo@gmail.com', '293630030_5090075924451637_8073798961032393203_n.jpg', '$2y$10$oCxPdkgMTmKSWBXXAR11/enDnjm9CZ6icEfNy2ZqUBiqRYl0nribK', '$2y$10$fc099nOp0jc55ADYiJmwZeapwZbEvxTJ8LMvIfRDzVg3GhZESDccK', '329847', 1, '2022-09-25 14:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `records_iD` int(50) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `homeowners_ID` int(11) NOT NULL,
  `violation_ID` int(11) NOT NULL,
  `ticketNo` text NOT NULL,
  `Fine` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`records_iD`, `admin_ID`, `homeowners_ID`, `violation_ID`, `ticketNo`, `Fine`, `status`, `Comment`, `date_created`, `date_updated`) VALUES
(3, 1, 81, 20, 'MC6816', '1yr Prison', 'Pending', 'IPAPAKULONG NA KITA', '2022-09-26', '2022-09-26 15:38:25'),
(4, 1, 82, 20, 'SN9667', '1yr Prison', 'Pending', 'IKULONG KA NAMIN', '2022-09-23', '2022-09-26 15:38:33'),
(16, 2, 81, 0, 'SO1323', '1yr Prison', 'Pending', 'dasdasdas', '2022-09-20', '2022-09-26 22:48:54');

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
(20, 'VIOLATION-0731', 'GUN BAN', 'Major', '1yr Prison'),
(21, 'VIOLATION-5036', 'dadad', 'Minor', 'asdasdas');

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
  ADD PRIMARY KEY (`Complaint_ID`),
  ADD KEY `homeownersID` (`homeownersID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `homeowners`
--
ALTER TABLE `homeowners`
  ADD PRIMARY KEY (`Homeowners_ID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`records_iD`),
  ADD KEY `admin_ID` (`admin_ID`),
  ADD KEY `homeowners_ID` (`homeowners_ID`),
  ADD KEY `violation_ID` (`violation_ID`);

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
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Complaint_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `homeowners`
--
ALTER TABLE `homeowners`
  MODIFY `Homeowners_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `records_iD` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `ViolationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`homeownersID`) REFERENCES `homeowners` (`Homeowners_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`adminID`) REFERENCES `admin` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`Admin_ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`homeowners_ID`) REFERENCES `homeowners` (`Homeowners_ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
