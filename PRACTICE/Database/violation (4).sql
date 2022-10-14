-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 02:45 AM
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
  `date_registered` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `AdminAccNo`, `FirstName`, `LastName`, `Gender`, `Age`, `ContactNo`, `Address`, `Birthdate`, `Email`, `Image_Profile`, `Password`, `Confirm_Password`, `VerificationCode`, `Verified`, `date_registered`, `status`) VALUES
(1, 'ST-CE-3402', 'JERAL', 'BARNUEVO', 'Male', '22', '09512341015', 'MARILAO,BULACAN', '2000-07-13', 'sacatintobarnuevo@gmail.com', '1661171036935.jpg', '$2y$10$SPKKdPllglXEaYhMRpr3JOQxZu/yNpSOEi.UMgk2XDs7d2p8L15aS', '$2y$10$G6Ox71KdHpkfLbeZ4FuK7uwIr5RJFbB.4XnOy3IctRtN/F2NdDnzG', '936303', 1, '2022-10-05 00:02:58', '1665651525'),
(2, 'ST-CE-1032', 'AARON JAY', 'MANALILI ', 'Female', '32', '09512341015', 'CALOOCAN MINDANAO', '2001-07-01', 'aaron@gmail.com', 'index.jpg', '$2y$10$KjD0MQFh9bxpTzQMdjkDseBBDlktFgs/.gWFp0PIQQLQYssMjVex6', '$2y$10$Z16DRweCdk5UPuI70V1dnOEAakkDe7xjdl8CHiGG7JhCxLJ8yvyhG', '', 0, '2022-10-04 21:34:47', 'offline'),
(3, 'ST-CE-2892', 'MARISSA', 'BARNUEVO', 'Female', '25', '09126427146', 'MARILAO,BULACAN', '1975-03-26', 'barnuevomarissa0@gmail.com', 'mm.jpg', '$2y$10$qYk.xW6eN.mdRlsHXqYu9eG28amvjd8VHxKDfeGlehqkrPoYZFnsa', '$2y$10$FREYbN5Gcj.4IZkiOuMoLu2AJDcs5JSHzKIZUybBIu52g.id8ht6G', '', 0, '2022-09-25 23:54:56', 'offline'),
(4, 'ST-CE-5408', 'JUAN', 'PANDECO', '', '25', '09512341015', 'MARILAO,BULACAN', '2000-07-23', 'barnuevojeral@gmail.com', '', '$2y$10$q5fWbFKsoK7Tl8Q2qXoou.UaGEZnZrL.zQ1IVp5qIuAslhe5d6qNW', '$2y$10$qmAiMLURGz81simKH9vfae7OdNCwXdNi9cKJssRFHyv74/57b6bvy', '471550', 1, '2022-10-05 00:02:57', '1664900310');

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
  `ContactNo` varchar(255) NOT NULL,
  `Attachment` varchar(255) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(255) NOT NULL,
  `Remarks` text NOT NULL,
  `forward_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Complaint_ID`, `homeownersID`, `adminID`, `Complaint_No`, `Complainant_Name`, `Complaint_Details`, `Address`, `ContactNo`, `Attachment`, `Date`, `Status`, `Remarks`, `forward_status`) VALUES
(50, 109, 1, 'COMPLAINT-3388', 'JUAN DELA CRUZ', 'MAy SUNOG PO DITO', 'MARILAO BULACAN', '2147483647', '301172695_382615037342347_3092196706144048870_n.jpg', '2022-09-28', 'Complete', 'OKAY NA PRE BAYAD NA', ''),
(52, 125, 1, 'COMPLAINT-1726', 'JERAL BARNUEVO', 'MARAMING ASONG GALA DITO PINAPATAKAS NG AMO', 'MARILAO BULACAN', '2147483647', '322868_1100-800x825.jpg', '2022-09-28', 'Complete', 'OK NA PINALAYAS KO NA ', ''),
(53, 125, 1, 'COMPLAINT-2286', 'JERAL BARNUEVO', 'MARAMI PONG NAGIINUMAN DITO MAINGAY!!!!', 'MARILAO,BULACAN', '09512341015', '300430276_749247759475797_5121822166515839680_n.png', '2022-09-28', 'Complete', 'OKAY NA PINALAYAS KO NA PINATULOG KO NA', ''),
(54, 125, 1, 'COMPLAINT-8357', 'JERAL BARNUEVO', 'MAY NAG AAWAY NA KAPIT BAHAY DITO', 'MARILAO, BULACAN', '09512341015', 'fkkskss.png', '2022-09-29', 'Complete', 'Okay na po', 'a'),
(55, 125, 1, 'COMPLAINT-1485', 'JERAL BARNUEVO', 'MAY NAKAHARANG NA KOTSE DITO', 'MARILAO, BULACAN', '09512341015', '298756302_790714669022219_7940598324092621692_n.png', '2022-10-06', 'Complete', 'Done', ''),
(56, 125, 1, 'COMPLAINT-5125', 'JERAL BARNUEVO', 'May Asong nakagala dito ', 'MARILAO,Bulacan', '09512341015', '322868_1100-800x825.jpg', '2022-10-06', 'Complete', 'OK NA PO', ''),
(57, 125, 1, 'COMPLAINT-6740', 'JERAL BARNUEVO', 'MAY MAIINGAY DITO SAMIN MADALING ARAW NA', 'MARILAO,BULACAN', '09512341015', '300430276_749247759475797_5121822166515839680_n.png', '2022-10-06', 'Pending', '', 'a'),
(58, 109, NULL, 'COMPLAINT-4023', 'JUAN DELA CRUZ', 'MAY TUMATAE DITONG ASO', 'MARILAO,BULACAN', '09512341015', 'Axtbh.jpg', '2022-10-09', 'Pending', '', '');

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
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeowners`
--

INSERT INTO `homeowners` (`Homeowners_ID`, `Account_Number`, `First_Name`, `Last_Name`, `Gender`, `Age`, `ContactNo`, `Address`, `Birthdate`, `Email`, `Image`, `Password`, `Confirm_Password`, `VerificationCode`, `verified`, `date_registered`) VALUES
(81, 'ST-CE-HO-1031', 'ALVIN', 'CAPILI', 'Male', 22, '09512341015', 'MARILAO, BULACAN', '0000-00-00', 'alvin@gmail.com', '', '$2y$10$YjSK.sgvKJvHIu3OSv0Aye5DsIuQ1wVvgo9uDqQOHP246Z8vEOwau', '$2y$10$ZaxVWudWOtUC3NA0T80yn.j.S1/bhQUhtl2kHLAwX6x/xUPd9AnrO', '', 0, '2022-09-27 23:47:52'),
(82, 'ST-CE-HO-3123', 'BLESSY', 'FAELDONIA', 'Female', 23, '09512341015', 'BLK 191 LOT 13', '2000-07-13', 'blessy@gmail.com', '', '$2y$10$K45WGP5QruuilmMO.zqzHOli0JsykJ1I9nUQAPFkGvz2Artm/Q1.y', '$2y$10$Y1udJ/GTBNXLlcexQuB3s.3PsFMJcLWYZfBGnmrMArb6xBjX.iwH2', '', 0, '2022-09-27 23:48:02'),
(83, 'ST-CE-HO-5233', 'MARIA', 'LORA', 'Female', 22, '09512341015', 'MARILAO,BULACAN', '2000-07-13', 'maria@gmail.com', '', '$2y$10$yK6zj7bzX15ByN4zlqw5d.OiyH.rbQTNzqMsgDuP7cY4Qrlcuij3O', '$2y$10$pYEEdLMNcBiDALIF6fZG1uAk4XxBj012Agi9NpiPprA6wEfwiEQTm', '', 0, '2022-09-27 23:48:14'),
(109, 'ST-CE-HO-1512', 'JUAN', 'DELA CRUZ', 'Male', 22, '09512341015', 'MARILAO, BULACAN', '2000-07-13', 'juan@gmail.com', 'forward.jpg', '$2y$10$Dqs7SCHIEqMKlfAZN0MiwuNau7mnk2hUA4TpYeQRKEGO1qUAw6X.q', '$2y$10$TKKroUvv2HjRHxp6COHwi.f9f4ZnPHpTmww9OF/g340DqmUTFCEuW', '', 1, '2022-09-27 23:48:24'),
(111, 'ST-CEHO-0212', 'AARON JAY', 'MANALILI', 'Female', 28, '09512341015', 'CALOOCAN, CITY', '2002-01-12', 'aaron@gmail.com', '322868_1100-800x825.jpg', '$2y$10$SJ.eFUdLWzpbj6od3h0rpuG7ziS6qDFzEMMIymR2B3p5.Q.1K4ghC', '$2y$10$bknrc4lnZ75ZgEubZweXXu3lGkRneo60mfd57LbM82z7SPA0DK4zq', '', 0, '2022-09-26 13:14:53'),
(125, 'ST-CE-HOA1611', 'JERAL', 'BARNUEVO', 'Male', 22, '09512341015', 'MARILAO,BULACAN', '2000-07-13', 'sacatintobarnuevo@gmail.com', '1661171036935.jpg', '$2y$10$Cs07t8eHiNEPS90bLyEe0ObNAVBViWp9SPmUsoKznZNS3cEqlrY6G', '$2y$10$DN9Z.L4Cg16tjcXTYlxydeKUDx8glNBbTRKNiCxJYhtX5J5skJqPe', '694810', 1, '2022-09-28 14:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `records_iD` int(50) NOT NULL,
  `admin_ID` int(11) DEFAULT NULL,
  `homeowners_ID` int(11) DEFAULT NULL,
  `violation_ID` int(11) DEFAULT NULL,
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
(25, 1, 125, 42, 'KT8060', '', 'Paid', 'Please Settle Your Violations', '2022-10-06', '2022-10-13 22:07:41'),
(26, 1, 109, 42, 'IQ9241', '', 'Paid', 'Please Settle The Amount', '2022-10-11', '2022-10-11 00:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `ViolationID` int(11) NOT NULL,
  `ViolationNo` varchar(255) NOT NULL,
  `ViolationName` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Punishment` varchar(1000) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`ViolationID`, `ViolationNo`, `ViolationName`, `Category`, `Punishment`, `Status`) VALUES
(36, 'VIOLATION-6742', 'Pet Violation', 'Minor', 'PHP 550.00', 'Active'),
(41, 'VIOLATION-3460', 'Illegal Vendors', 'Minor', 'PHP 300.00', 'Inactive'),
(42, 'VIOLATION-2432', 'Curfew', 'Major', '1 Month Community Service', 'Inactive'),
(43, 'VIOLATION-8004', 'Illegal Parking', 'Minor', 'PHP 1000.00', 'Active'),
(44, 'VIOLATION-2590', 'Illegal Noise', 'Minor', 'PHP 3500.00', 'Inactive'),
(73, 'VIOLATION-1203', 'dasdasd', 'Minor', 'asdada', 'Active'),
(74, 'VIOLATION-8530', 'Gun Ban', 'Major', 'PHP 500.00', 'Inactive');

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
  ADD KEY `records_ibfk_1` (`admin_ID`),
  ADD KEY `records_ibfk_2` (`homeowners_ID`),
  ADD KEY `records_ibfk_3` (`violation_ID`);

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
  MODIFY `Complaint_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `homeowners`
--
ALTER TABLE `homeowners`
  MODIFY `Homeowners_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `records_iD` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `ViolationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`homeowners_ID`) REFERENCES `homeowners` (`Homeowners_ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `records_ibfk_3` FOREIGN KEY (`violation_ID`) REFERENCES `violations` (`ViolationID`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
