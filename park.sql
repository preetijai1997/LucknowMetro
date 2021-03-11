-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 07:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `pset`
--

CREATE TABLE `pset` (
  `id` int(66) NOT NULL,
  `c6` varchar(55) NOT NULL,
  `c12` varchar(77) NOT NULL,
  `cm` varchar(88) NOT NULL,
  `cd` varchar(67) NOT NULL,
  `b6` varchar(77) NOT NULL,
  `b12` varchar(56) NOT NULL,
  `bc` varchar(67) NOT NULL,
  `bm` varchar(77) NOT NULL,
  `cy6` varchar(88) NOT NULL,
  `cy12` varchar(99) NOT NULL,
  `cyd` varchar(66) NOT NULL,
  `cym` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pset`
--

INSERT INTO `pset` (`id`, `c6`, `c12`, `cm`, `cd`, `b6`, `b12`, `bc`, `bm`, `cy6`, `cy12`, `cyd`, `cym`) VALUES
(1, '111', '111', '111', '111', '111', '111', '111', '111', '111', '111', '1', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pset`
--
ALTER TABLE `pset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pset`
--
ALTER TABLE `pset`
  MODIFY `id` int(66) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
