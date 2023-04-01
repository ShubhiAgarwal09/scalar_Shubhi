-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 06:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sde_scalar_shubhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(20) NOT NULL,
  `sid` int(20) NOT NULL,
  `aid` int(20) NOT NULL,
  `isevaluated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `sid`, `aid`, `isevaluated`) VALUES
(1, 1, 6, 1),
(1, 5, 7, 1),
(1, 9, 8, 0),
(2, 7, 11, 1),
(2, 4, 13, 0),
(2, 2, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(20) DEFAULT NULL,
  `sid` int(20) NOT NULL,
  `idea` int(20) NOT NULL,
  `execution` int(20) NOT NULL,
  `viva` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `eid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `sid`, `idea`, `execution`, `viva`, `total`, `eid`) VALUES
(1, 1, 8, 8, 7, 23, 1),
(1, 5, 9, 7, 5, 21, 3),
(2, 7, 9, 10, 4, 23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mentorlist`
--

CREATE TABLE `mentorlist` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentorlist`
--

INSERT INTO `mentorlist` (`id`, `name`, `email`) VALUES
(1, 'Mentor1', 'Mentor1@email.com'),
(2, 'Mentor2', 'Mentor2@email.com'),
(3, 'Mentor3', 'Mentor3@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `sid` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`sid`, `name`, `email`) VALUES
(1, 's1', 's1@gmail.com'),
(2, 's2', 's2@gmail.com'),
(3, 's3', 's3@gmail.com'),
(4, 's4', 's4@gmail.com'),
(5, 's5', 's5@gmail.com'),
(6, 's6', 's6@gmail.com'),
(7, 's7', 's7@gmail.com'),
(8, 's8', 's8@gmail.com'),
(9, 's9', 's9@gmail.com'),
(10, 's10', 's10@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `mentorlist`
--
ALTER TABLE `mentorlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
