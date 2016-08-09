-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 06:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timelog`
--

-- --------------------------------------------------------

--
-- Table structure for table `time_l`
--

CREATE TABLE `time_l` (
  `tid` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `time_desc` varchar(100) NOT NULL,
  `time_spent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_l`
--

INSERT INTO `time_l` (`tid`, `date_time`, `time_desc`, `time_spent`) VALUES
(1, '2016-08-09 18:41:39', 'had lunch', '40 mins'),
(2, '2016-08-09 18:42:10', 'checking emails', '30 mins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `time_l`
--
ALTER TABLE `time_l`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `time_l`
--
ALTER TABLE `time_l`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
