-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 07:19 AM
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
-- Database: `station`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `scode` varchar(255) NOT NULL,
  `cdor` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `opd` varchar(255) NOT NULL,
  `nbp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `sid`, `sname`, `scode`, `cdor`, `dis`, `cno`, `opd`, `nbp`) VALUES
(1, '1001', 'Chowdhary Charan Singh Airport', 'NS-CCSA', 'North-South', '0', '9089898990', '2019-03-08', 'Chand Jheel, Hotel Mangalam Palace, Hajj House'),
(7, '1002', 'Amausi', 'NS-AMSI', 'North-South', '807.23', '9089898990', '	2019-03-08', 'Amausi Airport Bus Stop, Chote Nawabs Restaurant'),
(8, '1003', 'Transport Nagar', 'NS-TPNG', 'North-South', '2007.7', '9089898990', '2017-07-05', 'RTO Office, Janki Hospital, Amritsar Ke Mashhur Kulchae'),
(9, '1004', 'Krishna Nagar', 'NS-KSNG', 'North-South', '3244.2', '9089898990', '2017-07-05', 'Thaggu Misthan & Jalpan Ghare, Big Hotel Store'),
(10, '1005', 'Singar Nagar', 'NS-SNNG', 'North-South', '4828.51', '9089898990', '2017-07-05', 'Singar Nagar Post Office, Manak Nagar Station'),
(11, '1006', 'Alambagh', 'NS-AGH', 'North-South', '6214.11', '9089898990', '2017-07-05', 'KSM Plaza'),
(12, '1007', 'Alambagh ISBT', 'NS-ISBT', 'North-South', '6926.62', '9089898990', '2017-07-05', 'KSM Plaza'),
(13, '1008', 'Mawaiya', 'NS-MWIA', 'North-South', '7694.13', '9089898990', '2017-07-05', 'Mawaiya Bus Stop, Prince Chatpati Fish & Biryani Cener'),
(14, '1009', 'Durgapuri', 'NS-DG', 'North-South', '8870.13', '9089898999', '2017-07-05', 'Charbagh Railway Station, KKC College, Bajrang Lassi Bhandar'),
(15, '1010', 'Charbagh /Lko Rly Station', 'NS-CBRS', 'North-South', '9634.62', '9089898999', '2017-07-05', 'Charbagh Railway Station, KKC College, Bajrang Lassi Bhandar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
