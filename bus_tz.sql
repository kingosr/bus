-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 05:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_tz`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `seat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bus_register`
--

CREATE TABLE `bus_register` (
  `id` int(11) NOT NULL,
  `busname` varchar(200) NOT NULL,
  `plate` varchar(200) NOT NULL,
  `driver` varchar(200) NOT NULL,
  `bus_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myticket`
--

CREATE TABLE `myticket` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `seat_no` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `last_id` int(11) NOT NULL,
  `busname` varchar(255) NOT NULL,
  `bustype` varchar(255) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `ticketid` int(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myticket`
--

INSERT INTO `myticket` (`id`, `name`, `phone`, `seat_no`, `price`, `last_id`, `busname`, `bustype`, `plate`, `ticketid`, `confirm`, `transaction_id`) VALUES
(59, 'ROBINSON GREGORY', '0752162760', 'Q1', 50000, 66, 'ABC EXPRESS', 'ORDINARY', 'T 980 AZS', 17766, 'PAID', ''),
(60, 'MAKOYE WEBIRO', '0782345432', 'A12', 50000, 68, 'ABC EXPRESS', 'ORDINARY', 'T 980 AZS', 52312, '', ''),
(61, 'KUKI', '0782345432', 'Q1', 50000, 67, 'ABC EXPRESS', 'ORDINARY', 'T 980 AZS', 81443, 'PAID', ''),
(62, 'TEDDY', '0766665485', 'A12', 60000, 69, 'KIMBINYIKO', 'LUXURY', 'T 540 ACX', 58899, '', ''),
(63, 'ADAM SELEMANI', '0653404558', 'H2', 60000, 70, 'ABC EXPRESS', 'ORDINARY', 'T 980 AZS', 21223, '', ''),
(64, 'MAKOYE WEBIRO', '0782345432', 'D32', 56000, 71, 'NEW FORCE', 'LUXURY', 'T 230 AXC', 62496, 'PAID', ''),
(65, 'ROBINSON GREGORY', '0752162760', 'B21', 56000, 75, 'KIMBINYIKO', 'LUXURY', 'T 988 EZS', 89223, 'PAID', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `namba` varchar(200) NOT NULL,
  `ticketid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(255) NOT NULL,
  `from_` varchar(200) NOT NULL,
  `to_` varchar(200) NOT NULL,
  `bus_name` varchar(200) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `bus_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `from_`, `to_`, `bus_name`, `plate`, `driver`, `bus_type`) VALUES
(28, 'DAR ES SALAAM', 'DODOMA', 'ABC EXPRESS', 'T 980 AZS', 'SALUM MADATI', 'ORDINARY'),
(29, 'DAR ES SALAAM', 'DODOMA', 'KIMBINYIKO', 'T 540 ACX', 'ALI SALEH ', 'LUXURY'),
(30, 'SINGIDA', 'MOSHI', 'NEW FORCE', 'T 230 AXC', 'ELIBARIKI', 'LUXURY'),
(31, 'SINGIDA', 'DODOMA', 'KIMBINYIKO', 'T 988 EZS', 'SHAUKHAN', 'LUXURY');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `seat_no` varchar(200) NOT NULL,
  `route_id` int(200) NOT NULL,
  `price` int(20) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `reserved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `seat_no`, `route_id`, `price`, `available`, `reserved`) VALUES
(66, 'Q1', 28, 50000, 0, 1),
(67, 'Q1', 28, 50000, 0, 1),
(68, 'A12', 28, 50000, 0, 1),
(69, 'A12', 29, 60000, 0, 1),
(70, 'H2', 28, 60000, 0, 1),
(71, 'D32', 30, 56000, 0, 1),
(72, 'ZQ', 28, 50000, 0, 0),
(73, 'Q4', 28, 60000, 0, 0),
(74, 'Q1', 28, 50000, 0, 0),
(75, 'B21', 31, 56000, 0, 1),
(76, 'C3', 31, 50000, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_register`
--
ALTER TABLE `bus_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myticket`
--
ALTER TABLE `myticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_register`
--
ALTER TABLE `bus_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myticket`
--
ALTER TABLE `myticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
