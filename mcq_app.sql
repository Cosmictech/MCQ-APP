-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 03:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcq_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `id` int(4) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'WWW stands for ?', 'World Whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', 'World Wide Web'),
(2, 'Which are the following are components of CPU ?', 'Arithmetic Logic Unit, Mouse', 'Arithmetic Logic Unit, Control Unit', 'Arithmetic Logic Unit, Integrated Circuits', 'Control Unit, Monitor', 'Arithmetic Logic Unit, Control Unit'),
(3, 'Where is RAM located ?', 'PCI Slot', 'DIMM Slot', 'USB', 'Monitor', 'DIMM Slot'),
(4, 'Full form of URL is ?', 'Uniform Resource Locator', 'Uniform Resource Link', 'Uniform Registered Link', 'Unified Resource Link', 'Uniform Resource Locator'),
(5, 'In Which of the following form, data is stored in computer ?', 'Decimal', 'Binary', 'HexaDecimal', 'Octal', 'Binary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `name`) VALUES
(312016223, 'cb7c5f69ff356ecca55b7d08df877991', 'Akash'),
(312016226, 'd548b8bb4f0979b6ae64a6843d714599', 'Harsharaj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
