-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 09:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dip`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `no` bigint(20) NOT NULL,
  `consultation` varchar(255) DEFAULT NULL,
  `lab` varchar(255) DEFAULT NULL,
  `token` varchar(45) DEFAULT NULL,
  `detailsid` bigint(20) NOT NULL,
  `foreignkey` bigint(20) DEFAULT NULL,
  `type` enum('lab','redo','daily') NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`no`, `consultation`, `lab`, `token`, `detailsid`, `foreignkey`, `type`, `date`) VALUES
(1, NULL, NULL, '0', 1, NULL, 'redo', '2020-10-01 04:32:01'),
(2, NULL, NULL, '0', 2, NULL, 'redo', '2020-10-01 04:32:01'),
(3, NULL, NULL, '0', 3, NULL, 'redo', '2020-10-01 04:32:02'),
(4, 'Cough and Cold', NULL, NULL, 1, 1, 'daily', '2020-10-01 04:32:57'),
(5, 'Panadol', NULL, NULL, 3, 3, 'daily', '2020-10-01 04:32:57'),
(6, 'Cough and Cold', NULL, NULL, 1, 1, 'daily', '2020-10-01 04:34:04'),
(7, 'Panadol', NULL, NULL, 3, 3, 'daily', '2020-10-01 04:34:04'),
(8, NULL, 'Blood Test', NULL, 2, 2, 'lab', '2020-10-01 04:34:57'),
(9, NULL, 'Injection', NULL, 3, 3, 'lab', '2020-10-01 04:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `activitiyusers`
--

CREATE TABLE `activitiyusers` (
  `no` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `age` smallint(6) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `secondarycontact` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitiyusers`
--

INSERT INTO `activitiyusers` (`no`, `name`, `gender`, `age`, `contact`, `secondarycontact`, `place`, `code`, `createdat`, `updatedate`) VALUES
(1, 'Tom', 'M', 31, '1212121', '3434343', 'California', '1', '2020-10-01 04:31:03', '2020-10-01 04:31:03'),
(2, 'Jack', 'M', 45, '99999', '11111', 'Colorado', '2', '2020-10-01 04:31:03', '2020-10-01 04:31:03'),
(3, 'Harry', 'M', 99, '112233', '998877', 'Texas', '3', '2020-10-01 04:31:03', '2020-10-01 04:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `no` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` int(40) NOT NULL,
  `consultation` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `place` varchar(40) NOT NULL,
  `secondarycontact` varchar(60) NOT NULL,
  `foreignkey` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`no`, `name`, `age`, `date`, `code`, `consultation`, `contact`, `gender`, `place`, `secondarycontact`, `foreignkey`) VALUES
(51, 'tom cruise', 31, '2020-10-02 12:14:15', 1, 'oxygen', '1212121', 'M', 'California ', '3434343', '60'),
(52, 'Jack ', 45, '2020-10-02 11:15:54', 2, 'sdfsd', '99999', 'M', 'Colorado', '111111', '61'),
(53, 'adel', 31, '2020-10-02 11:16:32', 4, 'reghedrgre', '4354353451', 'M', 'Aroor', '3453453454', '63');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `consultation` text NOT NULL,
  `code` int(40) NOT NULL,
  `lab` text NOT NULL,
  `place` varchar(40) NOT NULL,
  `secondarycontact` varchar(60) NOT NULL,
  `foreignkey` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`no`, `name`, `age`, `contact`, `date`, `consultation`, `code`, `lab`, `place`, `secondarycontact`, `foreignkey`, `gender`) VALUES
(27, 'tom cruise', 31, '1212121', '2020-10-02 12:14:15', '', 1, 'weiuorweuhfwuehfwuhfhwiuehf', 'California ', '3434343', '60', 'M'),
(28, 'Harry', 99, '112233', '2020-10-02 11:16:18', '', 3, 'sderfgdghedgherg', 'Texas', '998877', '62', 'M'),
(29, 'abdullah', 31, '1234567890', '2020-10-02 11:16:44', '', 5, 'ghsdrehgserdgerg', 'adimali', '1234567890', '64', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `previouspatients`
--

CREATE TABLE `previouspatients` (
  `no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `place` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `secondarycontact` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `previouspatients`
--

INSERT INTO `previouspatients` (`no`, `name`, `place`, `code`, `age`, `contact`, `secondarycontact`, `gender`, `date`) VALUES
(1, 'tom cruise', 'gurvayoor', '106598', '31', '456456', '345345345', 'M', '2020-09-29 17:05:57'),
(2, 'abdullah', 'Aroor', '1', '32', '19287391287', '1214791834', 'M', '2020-09-29 17:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `redo`
--

CREATE TABLE `redo` (
  `no` int(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `token` int(50) NOT NULL,
  `age` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` varchar(10) NOT NULL,
  `consultation` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `code` int(40) NOT NULL,
  `place` varchar(40) NOT NULL,
  `secondarycontact` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `redo`
--

INSERT INTO `redo` (`no`, `name`, `token`, `age`, `date`, `gender`, `consultation`, `contact`, `code`, `place`, `secondarycontact`) VALUES
(60, 'tom cruise', 0, 31, '2020-09-30 23:25:33', 'M', '', '1212121', 1, 'California ', '3434343'),
(61, 'Jack ', 0, 45, '2020-09-30 23:28:35', 'M', '', '99999', 2, 'Colorado', '111111'),
(62, 'Harry', 0, 99, '2020-09-30 23:31:38', 'M', '', '112233', 3, 'Texas', '998877'),
(63, 'adel', 0, 31, '2020-10-02 07:32:08', 'M', '', '4354353451', 4, 'Aroor', '3453453454'),
(64, 'abdullah', 0, 31, '2020-10-02 11:05:58', 'M', '', '1234567890', 5, 'adimali', '1234567890'),
(65, 'Tu', 0, 31, '2020-10-02 12:13:37', 'female', '', '1234567890', 22, 'adimali', '1234567890');

--
-- Triggers `redo`
--
DELIMITER $$
CREATE TRIGGER `update_details` AFTER UPDATE ON `redo` FOR EACH ROW BEGIN
UPDATE redo,daily SET daily.name=redo.name,
daily.age=redo.age,daily.code=redo.code,
daily.place=redo.place,daily.gender=redo.gender,
daily.contact=redo.contact,daily.secondarycontact=redo.secondarycontact
WHERE daily.foreignkey=redo.no;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_lab` AFTER UPDATE ON `redo` FOR EACH ROW BEGIN
UPDATE redo,lab SET lab.name=redo.name,
lab.age=redo.age,lab.code=redo.code,
lab.place=redo.place,lab.gender=redo.gender,
lab.contact=redo.contact,lab.secondarycontact=redo.secondarycontact
WHERE lab.foreignkey=redo.no;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `user` varchar(40) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`user`, `password`) VALUES
('hari', '3274723564'),
('', ''),
('adel', '12345'),
('jkol', '12345'),
('abc', 'asd123'),
('karan', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `activitiyusers`
--
ALTER TABLE `activitiyusers`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `previouspatients`
--
ALTER TABLE `previouspatients`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `redo`
--
ALTER TABLE `redo`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `activitiyusers`
--
ALTER TABLE `activitiyusers`
  MODIFY `no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `no` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `previouspatients`
--
ALTER TABLE `previouspatients`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `redo`
--
ALTER TABLE `redo`
  MODIFY `no` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
