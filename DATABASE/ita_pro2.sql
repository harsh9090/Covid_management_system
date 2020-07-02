-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 07:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ita_pro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `p_id` int(12) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`p_id`, `country`) VALUES
(60, 'nagaland'),
(90, 'japan');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `name`, `password`) VALUES
(1, 'harsh', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `p_id` int(12) NOT NULL,
  `affected` int(1) NOT NULL DEFAULT 1,
  `recovered` int(1) NOT NULL DEFAULT 0,
  `death` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`p_id`, `affected`, `recovered`, `death`) VALUES
(41, 1, 0, 0),
(60, 0, 1, 0),
(90, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `p_id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`p_id`, `city`, `state`) VALUES
(41, 'ahm', 'Gujarat'),
(60, 'SURAT', 'Gujarat'),
(90, 'SURAT', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `p_id` int(20) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` mediumint(6) NOT NULL,
  `travel` int(1) NOT NULL,
  `medical` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`p_id`, `phone`, `age`, `gender`, `address`, `zip`, `travel`, `medical`) VALUES
(41, 9099690900, 11, 'female', 'near parsuram', 123456, 1, 'not'),
(60, 9099690900, 18, 'male', 'near parsuram', 123456, 2, 'not yet\r\n'),
(90, 9099690900, 37, 'female', 'near parsuram', 123456, 2, 'nothing serious');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `p_id` int(12) NOT NULL,
  `from_place` varchar(15) NOT NULL,
  `to_place` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`p_id`, `from_place`, `to_place`) VALUES
(41, 'gujarat', 'tamilnadu');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `p_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`p_id`, `name`, `email`, `password`, `phone_number`) VALUES
(41, 'poul', 'harsh_mithaiwala@yahoo.com', '123456', 9099690900),
(60, 'varun', 'h@gmail.com', '123456', 9099690900),
(90, 'karan', 'm@gmail.com', '123456', 9099690900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`p_id`) USING BTREE;

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
