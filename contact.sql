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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmsg`
--

CREATE TABLE `cmsg` (
  `name` varchar(78) NOT NULL,
  `email` varchar(88) NOT NULL,
  `sub` varchar(88) NOT NULL,
  `msg` varchar(88) NOT NULL,
  `date` varchar(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmsg`
--

INSERT INTO `cmsg` (`name`, `email`, `sub`, `msg`, `date`) VALUES
('Jaydeep', 'jay@gmail.com', 'asdfgf', 'wwqwrwsa', '07:55:11amDATE15/04/20'),
('Vasundhra', 'vasu@gmai.com', 'cleanliness', 'aadsfgsd', '02:53:35pmDATE01/06/20');

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `name` varchar(66) NOT NULL,
  `email` varchar(77) NOT NULL,
  `mob` varchar(88) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `pass` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`name`, `email`, `mob`, `date`, `pass`) VALUES
('Kiran Srivastava', 'kiran@gmail.com', '8745124521', '2020-05-13 19:51:30.967825', 'd41d8cd98f00b204e9800998ecf8427e'),
('Mansi Nigam', 'mansiranjana22@gmail.com', '7999999274', '0000-00-00 00:00:00.000000', 'd41d8cd98f00b204e9800998ecf8427e'),
('Preeti Jaiswal', 'preeti@gmail.com', '7845125412', '2012-05-13 18:30:00.000000', 'd41d8cd98f00b204e9800998ecf8427e'),
('Rajat Batra', 'rj@gmail.com', '8707017106', '0000-00-00 00:00:00.000000', 'd41d8cd98f00b204e9800998ecf8427e'),
('Vasundhra', 'vasu@gmai.com', '8745124512', '2020-06-01 09:18:30.230001', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `creply`
--

CREATE TABLE `creply` (
  `email` varchar(76) NOT NULL,
  `date` varchar(78) NOT NULL,
  `mst` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creply`
--

INSERT INTO `creply` (`email`, `date`, `mst`) VALUES
('mansi@gmail.com', '2020-04-20', 'yes'),
('mansi@gmail.com', '2020-04-20', 'yes'),
('vasu@gmai.com', '02:58:20pmDATE01/06/20', 'asdfes'),
('vasu@gmai.com', '03:00:53pmDATE01/06/20', 'ashdgsagdjashjhajfhjahfjheufhunjcujehfjdfjdfhjdjkfd');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `name` varchar(55) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mob` varchar(66) NOT NULL,
  `date` varchar(77) NOT NULL,
  `subject` varchar(87) NOT NULL,
  `message` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`name`, `email`, `mob`, `date`, `subject`, `message`) VALUES
('mansi nigam', 'mansi22@gmail.com', '8707017106', '2020-04-15', 'asdf', 'adsadsa'),
('Mansi Nigam', 'mansiranjana22@gmail.com', '8707017106', '2020-06-01', 'asdf', 'asfa');

-- --------------------------------------------------------

--
-- Table structure for table `metro`
--

CREATE TABLE `metro` (
  `name` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metro`
--

INSERT INTO `metro` (`name`, `password`) VALUES
('', ''),
('my', 'aa'),
('admin', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `email` varchar(55) NOT NULL,
  `adreply` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `sub` varchar(55) NOT NULL,
  `message` varchar(77) NOT NULL,
  `date` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`email`, `adreply`, `name`, `sub`, `message`, `date`) VALUES
('mansi22@gmail.com', 'yes', 'mansi nigam', 'asdf', 'adsadsa', '08:02:49amDATE15/04/20'),
('mansi22@gmail.com', 'asa', 'mansi nigam', 'asdf', 'adsadsa', '06:58:08amDATE16/04/20'),
('mansiranjana22@gmail.com', 'dshjfghagdchsjdasgfcsgjgbsjbdcsajjcbjghj', 'Mansi Nigam', 'asdf', 'asfa', '02:57:44pmDATE01/06/20'),
('mansiranjana22@gmail.com', 'weerff', 'Mansi Nigam', 'asdf', 'asfa', '02:57:57pmDATE01/06/20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`,`mob`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
