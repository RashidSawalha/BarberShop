-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 05:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `code` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `code`) VALUES
(1, 'Diaa Sharqawi', 'admin', 7898799798, 'dodosharqawi2021@gmail.com', '100200300', '2023-05-13 06:21:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(12, '238379306', 'Bara Sharqawi', 'dodosharqawi2021@gmail.com', 599145263, '2023-04-17', '12:04', 'Bald Fade', '2023-04-28 19:04:58', '', '', '0000-00-00 00:00:00'),
(13, '687854913', 'Hasan Sharqawi', 's12028415@stu.najah.edu', 599145263, '2023-04-17', '01:09', 'Hot Towel Shave', '2023-04-28 19:09:04', '', '', '0000-00-00 00:00:00'),
(14, '577499727', 'Hasan Sharqawi', 's12028415@stu.najah.edu', 599145263, '2023-04-17', '01:09', 'Hot Towel Shave', '2023-04-28 19:24:07', '', '', '0000-00-00 00:00:00'),
(15, '903673500', 'Hasan Sharqawi', 's12028415@stu.najah.edu', 599145263, '2023-04-17', '01:09', 'Hot Towel Shave', '2023-04-28 19:27:23', '', '', '0000-00-00 00:00:00'),
(16, '670009998', 'Hasan Sharqawi', 's12028415@stu.najah.edu', 599145263, '2023-04-17', '01:09', 'Hot Towel Shave', '2023-04-28 19:27:44', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(2, 'Ali Hassan ', 'AliHassan@gmail.com', 599807010, 'Male', 'need a hair cut', '2023-04-26 07:26:15', NULL),
(3, 'Hamza Ali', 'HamzaAli202@gmail.com', 599713543, 'Male', 'need a beard shave', '2023-04-26 07:26:47', NULL),
(4, 'Yousef Mahmoud', 'Yousef_Mahmoud2002@gmail.com', 599306521, 'Male', 'need a mustache trim', '2023-04-26 07:27:34', NULL),
(5, 'Samir Farid ', 'samirfarid@email.com', 599654175, 'Male', 'need a beard shave', '2023-04-26 07:28:16', NULL),
(6, 'Saad Ibrahim', 'saadibrahim@email.com', 599802345, 'Male', 'need a beard and hair cut', '2023-04-26 07:29:03', NULL),
(7, 'Tarek Hafez', 'tarekhafez@email.com', 599862146, 'Male', 'need a hair cut', '2023-04-26 07:29:44', NULL),
(8, 'Ahmed Khalil', 'ahmedkhalil2000@email.com', 59920003, 'Male', 'need a beard shave', '2023-04-26 07:30:25', '2023-04-26 08:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `ID` int(10) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`ID`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(1, 1, 1, 991646562, '2023-04-26 05:17:21'),
(2, 1, 3, 991646562, '2023-04-26 05:17:21'),
(3, 6, 7, 755188891, '2023-04-26 06:29:02'),
(4, 6, 8, 755188891, '2023-04-26 06:29:02'),
(5, 6, 11, 755188891, '2023-04-26 06:29:02'),
(6, 2, 1, 101463296, '2023-04-26 06:29:53'),
(7, 2, 2, 101463296, '2023-04-26 06:29:53'),
(8, 2, 3, 101463296, '2023-04-26 06:29:53'),
(9, 2, 4, 101463296, '2023-04-26 06:29:53'),
(10, 1, 1, 368222422, '2023-04-26 07:13:16'),
(11, 10, 1, 924970774, '2023-04-26 07:31:08'),
(12, 10, 3, 924970774, '2023-04-26 07:31:08'),
(13, 10, 2, 273581368, '2023-04-26 08:04:36'),
(14, 10, 3, 273581368, '2023-04-26 08:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials &amp; fashion hair colourings.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541236, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` varchar(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(1, 'Basic Haircut', '25$', '2023-04-25 08:27:42'),
(2, 'Deluxe Haircut', '$30', '2023-04-25 08:27:42'),
(3, 'Buzz Cut', '$15', '2023-04-25 08:27:42'),
(4, 'Classic Shave', '$25', '2023-04-25 08:27:42'),
(5, 'Beard Trim', '$10', '2023-04-25 08:27:42'),
(6, 'Mustache Trim', '$5', '2023-04-25 08:27:42'),
(7, 'Head Shave', '$20', '2023-04-25 08:27:42'),
(8, 'Neck Trim', '$5', '2023-04-25 08:27:42'),
(9, 'Hot Towel Shave', '$30', '2023-04-25 08:27:43'),
(10, 'Men\'s Hair Coloring', '$50', '2023-04-25 08:27:43'),
(11, 'Kid\'s Haircut', '$15', '2023-04-25 08:27:43'),
(12, 'Senior\'s Haircut', '$15', '2023-04-25 08:27:43'),
(13, 'Men\'s Hair Styling', '$25', '2023-04-25 08:27:43'),
(14, 'Men\'s Hair Extensions', '$150', '2023-04-25 08:27:43'),
(15, 'Mustache and Beard Dye', '$20', '2023-04-25 08:27:43'),
(16, 'Bald Fade', '$25', '2023-04-25 08:27:43'),
(17, 'Line-up', '$10', '2023-04-25 08:27:43'),
(18, 'Razor Cut', '$30', '2023-04-25 08:27:43'),
(19, 'Clipper Cut', '$20', '2023-04-25 08:27:43'),
(20, 'Designer Haircut', '$40', '2023-04-25 08:27:43'),
(22, 'Test', '50$', '2023-05-13 08:46:16'),
(23, 'Hi', '52$', '2023-05-13 08:51:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
