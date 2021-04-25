-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 02:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthighway`
--

-- --------------------------------------------------------

--
-- Table structure for table `distance`
--

CREATE TABLE `distance` (
  `s_no` int(11) NOT NULL,
  `entrygate` varchar(255) NOT NULL,
  `exitgate` varchar(255) NOT NULL,
  `distance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distance`
--

INSERT INTO `distance` (`s_no`, `entrygate`, `exitgate`, `distance`) VALUES
(17, 'Noida', 'Noida', 0),
(18, 'Noida', 'Jewar', 58),
(19, 'Noida', 'Bulandshahr', 103),
(20, 'Noida', 'Aligarh', 174),
(21, 'Noida', 'Hathras', 226),
(22, 'Noida', 'Mathura', 269),
(23, 'Noida', 'Agra', 326),
(24, 'Noida', 'Kanpur', 604),
(25, 'Jewar', 'Noida', 58),
(26, 'Jewar', 'Jewar', 0),
(27, 'Jewar', 'Bulandshahr', 45),
(28, 'Jewar', 'Aligarh', 116),
(29, 'Jewar', 'Hathras', 168),
(30, 'Jewar', 'Mathura', 211),
(31, 'Jewar', 'Agra', 268),
(32, 'Jewar', 'Kanpur', 546),
(33, 'Bulandshahr', 'Noida', 103),
(34, 'Bulandshahr', 'Jewar', 45),
(35, 'Bulandshahr', 'Bulandshahr', 0),
(36, 'Bulandshahr', 'Aligarh', 71),
(37, 'Bulandshahr', 'Hathras', 123),
(38, 'Bulandshahr', 'Mathura', 166),
(39, 'Bulandshahr', 'Agra', 223),
(40, 'Bulandshahr', 'Kanpur', 501),
(41, 'Aligarh', 'Noida', 174),
(42, 'Aligarh', 'Jewar', 116),
(43, 'Aligarh', 'Bulandshahr', 71),
(44, 'Aligarh', 'Aligarh', 0),
(45, 'Aligarh', 'Hathras', 52),
(46, 'Aligarh', 'Mathura', 95),
(47, 'Aligarh', 'Agra', 152),
(48, 'Aligarh', 'Kanpur', 430),
(49, 'Hathras', 'Noida', 226),
(50, 'Hathras', 'Jewar', 168),
(51, 'Hathras', 'Bulandshahr', 123),
(52, 'Hathras', 'Aligarh', 52),
(53, 'Hathras', 'Hathras', 0),
(54, 'Hathras', 'Mathura', 43),
(55, 'Hathras', 'Agra', 100),
(56, 'Hathras', 'Kanpur', 378),
(57, 'Mathura', 'Noida', 269),
(58, 'Mathura', 'Jewar', 211),
(59, 'Mathura', 'Bulandshahr', 166),
(60, 'Mathura', 'Aligarh', 95),
(61, 'Mathura', 'Hathras', 43),
(62, 'Mathura', 'Mathura', 0),
(63, 'Mathura', 'Agra', 57),
(64, 'Mathura', 'Kanpur', 335),
(65, 'Agra', 'Noida', 326),
(66, 'Agra', 'Jewar', 268),
(67, 'Agra', 'Bulandshahr', 223),
(68, 'Agra', 'Aligarh', 152),
(69, 'Agra', 'Hathras', 100),
(70, 'Agra', 'Mathura', 57),
(71, 'Agra', 'Agra', 0),
(72, 'Agra', 'Kanpur', 278),
(73, 'Kanpur', 'Noida', 604),
(74, 'Kanpur', 'Jewar', 546),
(75, 'Kanpur', 'Bulandshahr', 501),
(76, 'Kanpur', 'Aligarh', 430),
(77, 'Kanpur', 'Hathras', 378),
(78, 'Kanpur', 'Mathura', 335),
(79, 'Kanpur', 'Agra', 278),
(80, 'Kanpur', 'Kanpur', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `vehicle_no` text NOT NULL,
  `owner_name` text NOT NULL,
  `entrygate` char(1) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`vehicle_no`, `owner_name`, `entrygate`, `entrytime`) VALUES
('PB67AS2345', 'Ankita', 'A', '2021-04-24 12:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `exit`
--

CREATE TABLE `exit` (
  `vehicle_no` text NOT NULL,
  `exitgate` char(1) NOT NULL,
  `rfid` text NOT NULL,
  `exittime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exit`
--

INSERT INTO `exit` (`vehicle_no`, `exitgate`, `rfid`, `exittime`) VALUES
('PB67AS2345', 'B', '12345667', '2021-04-24 12:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Ankita Singhal', 'uytrrsarsdf');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `vehicle_no` text NOT NULL,
  `owner_name` text NOT NULL,
  `mobile_no` text NOT NULL,
  `rfid` text NOT NULL,
  `balance` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`vehicle_no`, `owner_name`, `mobile_no`, `rfid`, `balance`) VALUES
('DL36RT5678', 'Harish Pratap Rana', '8193920875', 'ABC1703231073DEF', 985),
('HR23TK7832', 'Muskan Mittal', '8630180075', 'ABC1703231099DEF', 965),
('MH76KI3456', 'Ekansh Agarwal', '8368121403', 'ABC1703231071DEF', 950),
('PB65RD3241', 'Nandini Tandon', '7452826814', 'ABC1703231102DEF', 999),
('UP14TH6784', 'Ankita Singhal', '7452090335', 'ABC1703231034DEF', 900);

-- --------------------------------------------------------

--
-- Table structure for table `vehiclehistory`
--

CREATE TABLE `vehiclehistory` (
  `id` int(11) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `entrygate` varchar(255) NOT NULL,
  `entrytime` timestamp NULL DEFAULT NULL,
  `exitgate` varchar(255) DEFAULT NULL,
  `exittime` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehiclehistory`
--

INSERT INTO `vehiclehistory` (`id`, `vehicle_no`, `entrygate`, `entrytime`, `exitgate`, `exittime`, `status`) VALUES
(34, 'UP15HAR1234', 'Noida', '2021-04-25 12:00:24', 'Kanpur', '2021-04-25 12:01:07', 'PASSED'),
(35, 'UP15HAR1234', 'Noida', '2021-04-25 12:06:51', 'Kanpur', '2021-04-25 12:16:52', 'PASSED');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

CREATE TABLE `vehicleregistration` (
  `vehicle_no` text NOT NULL,
  `vehicle_name` text NOT NULL,
  `owner_name` text NOT NULL,
  `owner_contact` text NOT NULL,
  `owner_address` text NOT NULL,
  `rfid` text NOT NULL,
  `current_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rfid_balance` int(11) DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicleregistration`
--

INSERT INTO `vehicleregistration` (`vehicle_no`, `vehicle_name`, `owner_name`, `owner_contact`, `owner_address`, `rfid`, `current_datetime`, `rfid_balance`) VALUES
('UP15HAR1234', 'Maruti 800', 'Harish Pratap Rana', '8193920875', 'Ghaziabad', '123456', '2021-04-25 12:16:52', 714);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`vehicle_no`(25));

--
-- Indexes for table `exit`
--
ALTER TABLE `exit`
  ADD PRIMARY KEY (`vehicle_no`(25));

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`vehicle_no`(25));

--
-- Indexes for table `vehiclehistory`
--
ALTER TABLE `vehiclehistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicleregistration`
--
ALTER TABLE `vehicleregistration`
  ADD PRIMARY KEY (`vehicle_no`(255));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distance`
--
ALTER TABLE `distance`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `vehiclehistory`
--
ALTER TABLE `vehiclehistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
