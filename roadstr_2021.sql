-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 10:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roadstr_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`) VALUES
(1, 'Test1'),
(2, 'Test2'),
(3, 'Test3'),
(4, 'Test4'),
(5, 'Test5'),
(6, 'Test6');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(20) NOT NULL,
  `Full_Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Email_Address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Full_Name`, `Email_Address`, `Phone_Number`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1, 'User', 'user@outlook.com', '+962790000000', '123456789', 'Active', '2020-10-09 06:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(20) NOT NULL,
  `C_ID` int(20) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `S_ID` int(20) NOT NULL,
  `Notes` varchar(250) COLLATE utf8_bin NOT NULL,
  `Date` varchar(250) COLLATE utf8_bin NOT NULL,
  `Rate` varchar(250) COLLATE utf8_bin NOT NULL,
  `Price` varchar(250) COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Address` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Logo_Picture` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Longitude` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Latitude` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Username` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`ID`, `Name`, `Phone_Number`, `Address`, `Logo_Picture`, `Longitude`, `Latitude`, `Username`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1, 'Test Provider', '060000000', 'Amman', 'Providers_Logos/logo.png', '', '', 'provider', '123456789', 'Active', '2020-10-06 12:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(20) NOT NULL,
  `C_ID` int(20) NOT NULL,
  `P_ID` int(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Description` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Picture_1` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Picture_2` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Picture_3` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Price` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `C_ID`, `P_ID`, `Name`, `Description`, `Picture_1`, `Picture_2`, `Picture_3`, `Price`, `Status`, `Add_Date_Time`) VALUES
(1, 1, 1, 'Test', 'Test', 'Services_Pictures/logo.png', 'Services_Pictures/logo.png', 'Services_Pictures/logo.png', '100', 'Active', '2020-10-06 12:39:47'),
(5, 1, 1, 'Test', 'Test', 'Services_Pictures/logo.png', 'Services_Pictures/logo.png', 'Services_Pictures/logo.png', '200', 'Active', '2020-10-06 16:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `S_ID` (`S_ID`),
  ADD KEY `C_ID` (`C_ID`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category_ID` (`C_ID`),
  ADD KEY `services_ibfk_2` (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `C_ID` FOREIGN KEY (`C_ID`) REFERENCES `customers` (`ID`),
  ADD CONSTRAINT `P_ID` FOREIGN KEY (`P_ID`) REFERENCES `providers` (`ID`),
  ADD CONSTRAINT `S_ID` FOREIGN KEY (`S_ID`) REFERENCES `services` (`ID`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `categories` (`ID`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `providers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
