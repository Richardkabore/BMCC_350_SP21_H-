-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 10:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `generateServiceId` () RETURNS INT(11) NO SQL
BEGIN
DECLARE countId INT;
SELECT `serviceId` INTO countId from `serviceid`;


UPDATE `serviceid` SET `serviceId`= (countId+1) WHERE primaryid = 1 ;
RETURN countId+1;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(15) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `dateOfBirth` date NOT NULL,
  `mobileNo` varchar(10) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `userStaff` varchar(45) NOT NULL,
  `passStaff` varchar(45) NOT NULL,
  `status` enum('STAFF','ADMIN') NOT NULL,
  `gender` enum('M','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `firstName`, `lastName`, `dateOfBirth`, `mobileNo`, `address`, `email`, `userStaff`, `passStaff`, `status`, `gender`) VALUES
(12, 'admin', 'admin', '2018-11-10', 'admin', 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'M'),
(14, 'admin2modify', 'admin2modify', '2011-11-10', '12315455', 'admin2modify', 'admin2mod@gmail.com', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'ADMIN', 'F'),
(15, 'staff', 'staff', '2018-11-10', '1234', '1234', 'staff@gmail.com', 'staff', '1253208465b1efa876f982d8a9e73eef', 'STAFF', 'F'),
(16, '11', '11', '2018-11-13', '11', '11', '11', '11', '6512bd43d9caa6e02c990b0a82652dca', 'ADMIN', 'F'),
(17, 'asdf', 'adsf', '2016-11-13', 'asdf', 'adf', 'asdf', 'asdf', '912ec803b2ce49e4a541068d495ab570', 'STAFF', 'M'),
(18, 'khan', 'ameen', '2021-04-16', '0303050443', '12 Main street Layyah', 'muzm2323@gmail.com', 'noman', '0c1300db57bef58404261cc20c271cd1', '', 'M'),
(19, 'rehman', 'ab', '2021-04-07', '0303050443', 'multan', 'weewr@gmail.com', 'rehman', 'b86bb59cddf35f94c2bf4cebb065e366', '', 'M'),
(20, 'Yeah', 'Right', '2020-08-06', '', '234 Elm St', 'test@test.com', 'test', '098f6bcd4621d373cade4e832627b4f6', '', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `time_id` int(20) NOT NULL,
  `res_time` varchar(100) NOT NULL,
  `time_applied` date DEFAULT NULL,
  `by_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`time_id`,`res_time`,`by_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `time_id` int(20) NOT NULL AUTO_INCREMENT;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `ClearWeekly` ON SCHEDULE EVERY 7 DAY STARTS '2021-05-10 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Clear the Time Table Weekly' DO TRUNCATE TABLE time_table$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
