-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 05:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(2) NOT NULL,
  `countnum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `countnum`) VALUES
(1, 42);

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `date` datetime NOT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`name`, `email`, `comment`, `date`, `ip`) VALUES
('', '', '', '2020-08-29 16:53:32', '::1'),
('', '', '', '2020-08-29 16:53:44', '::1'),
('', '', '', '2020-08-29 16:55:33', '::1'),
('', '', '', '2020-08-29 16:55:52', '::1'),
('', '', '', '2020-08-29 16:59:13', '::1'),
('', '', '', '2020-08-29 16:59:40', '::1'),
('', '', '', '2020-08-29 17:00:03', '::1'),
('', '', '', '2020-08-29 17:05:17', '::1'),
('', '', '', '2020-08-29 17:05:38', '::1'),
('', '', '', '2020-08-29 17:06:03', '::1'),
('', '', '', '2020-08-29 17:08:08', '::1'),
('', '', '', '2020-08-29 17:08:34', '::1'),
('teetouch', 'teetouchnaja@gmail.com', 'OH HO', '2020-08-29 17:08:54', '::1'),
('teetouch', 'teetouchnaja@gmail.com', 'OH HO', '2020-08-29 17:09:13', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(2) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_size` varchar(10) NOT NULL,
  `priceperday` int(11) NOT NULL,
  `pricepermonth` int(11) NOT NULL,
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_size`, `priceperday`, `pricepermonth`, `picture`) VALUES
(2, 'bigger', '60*60', 900, 10000, 'bigger.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
