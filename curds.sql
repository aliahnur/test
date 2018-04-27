-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 08:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `curds`
--

CREATE TABLE `curds` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` enum('Admin','Customer') NOT NULL DEFAULT 'Admin',
  `name` varchar(50) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `picture` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `officephone` varchar(10) NOT NULL,
  `occupation` varchar(10) NOT NULL,
  `race` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `province` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `os` enum('Window','Linux','Mac') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curds`
--

INSERT INTO `curds` (`id`, `password`, `position`, `name`, `ic`, `picture`, `email`, `mobile`, `officephone`, `occupation`, `race`, `religion`, `address1`, `address2`, `postcode`, `city`, `province`, `note`, `gender`, `os`, `created_at`, `updated_at`) VALUES
(1, '', 'Admin', 'aliah', '940430035570', '', 'aa@dda', '543', '56565', 'fdfd', 'kjhdsds', 'erg', 'fgfh', 'kjk', 'rtr', 'u7rer', 'fgfdg', '675', 'female', 'Window', '2018-04-27 05:18:40', '2018-04-26 21:18:40'),
(2, '', 'Admin', 'hawau', 'ggr', '', 'hha@fda', '7535', '4545', 'rt4', 'malay', 'df', 'rer', 'gg', 'eew', 'dfsf', 'kjkj', 'dfd', 'male', 'Mac', '2018-04-27 05:11:39', '2018-04-26 21:11:39'),
(3, '', 'Admin', 'dsd', 'ada', '', 'rt', 'd', 'bd', 'ser', 'dsf', 'erg', 'sdf', 'w', 'dfdf', '12', '43', 'dfdf', 'Female', 'Linux', '2018-04-26 21:07:45', '2018-04-26 21:07:45'),
(4, '', 'Admin', 'jjhh', 'hhg', '', 'jjhhs@ss', '012345678', '0923232', 'SE', 'malay', 'islam', 'jjh', 'jjus', '124', 'jdh', 'jdh', 'hhh', 'Female', 'Window', '2018-04-26 21:12:38', '2018-04-26 21:12:38'),
(5, '', 'Admin', 'fdf', 'ghgh', '', 'e5', 'fgfg', 'ere', 'rh', 'ui', 'tytr', '4rt', '65yty', 'hgh', 'w4', 'hgj', 't5435', 'Male', 'Mac', '2018-04-26 21:49:57', '2018-04-26 21:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curds`
--
ALTER TABLE `curds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curds`
--
ALTER TABLE `curds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
