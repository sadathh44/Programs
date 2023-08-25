-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 07:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `eid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `eid`, `name`, `password`) VALUES
(1, 'hsadath44@gmail.com', 'sadath', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(20) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `subject` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'sadath', 'hsadath44@gmail.com', 'Asking fro help', 'lorem ipsum dolor simit please ejesbadabdsadjasdja', NULL),
(2, 'yathish', 'fundaurs@gmail.com', 'dasdasd', 'asdasdasdasd', NULL),
(3, 'yathish', 'yathish971@gmail.com', 'C programmin', 'dasdasdasdasdasd', NULL),
(4, 'sadath', 'yathish971@gmail.com', 'sdadaasddasss', 'sadasas', NULL),
(5, 'sadasasd', 'Emmawatson@gmail.com', '10X Rule', 'sadd', NULL),
(6, 'sadath Hussain', 'saadsiddiqi@gmail.com', 'help me', 'i dont knowwaht to do\r\n', '2015-08-21 21:20:19'),
(7, 'sadath Hussain', 'saadsiddiqi@gmail.com', 'help me', 'i dont knowwaht to do\r\n', '2016-08-21 00:54:03'),
(8, 'siddhart', 'siddhart@gmail.com', 'sameina', 'help me out hyaar\r\n', '2016-08-21 00:54:23'),
(9, 'hello mama', 'hey@g.c', 'shu', 'shuu', '2016-08-21 00:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(255) NOT NULL,
  `subcode` varchar(20) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `uploadedby` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subcode`, `sub`, `branch`, `sem`, `notes`, `cover`, `uploadedby`, `date`) VALUES
(57, 'micrio', 'micronbio', 'BSC', 1, 'EVS.pdf', '', 'sam@gmail.com', '2021-08-16 10:39:11'),
(49, 'phythin', 'physics', 'BSC', 5, 'F.I.T.pdf', '', NULL, '0000-00-00 00:00:00'),
(7, 'rules', 'rules', 'other', 0, 'Programming in C.pdf', '', 'Ravi', NULL),
(4, 'sena', '10X Rule', 'BCA', 1, '10X rule.pdf', 'Picture 3.png', NULL, NULL),
(50, 'sert', 'The hentai', 'BSC', 4, 'Digital Fundamentals.pdf', '', NULL, '2021-08-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(5) NOT NULL,
  `cat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `status`, `cat`) VALUES
(3, 'Sadath Hussain', 'hsadath44@gmail.com', '12345678', 'a', NULL),
(4, 'Britney Spears', 'Emmawatson@gmail.com', 'Britney123', 't', 'BSC'),
(8, 'samanh', 'sam@gmail.com', '12345678', 't', 'BSC'),
(12, 'saad', 'sadiulhusaini@gmail.com', 'Sidh12011', 't', 'BBA'),
(13, 'yathish', 'yathishl2000@gmail.com', 'Aa12345678@', 't', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `reg` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `registered` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `reg`, `name`, `password`, `email`, `registered`) VALUES
(16, '', '', '', NULL, NULL),
(12, '18159815', 'neha', '75682754', 'neha@gmail.com', '2016-08-21 00:00:00'),
(1, '200', 'Sadath Hussain', 'sena', 'hsadath44@gmail.com', NULL),
(2, '201', 'sreyas', 'sreyas', 'shreyas@gmail.com', NULL),
(3, '202', 'saadath', 'saadath', 'nfh', NULL),
(10, '81891478', 'seenas', '98584322', 'seenas@gmail.com', '2016-08-21 00:00:00'),
(8, '88840657', 'aman', '74224791', 'saman@gmail.com', '2021-08-16 00:26:16'),
(4, '88888888', 'sadad@gmail', '8881065788', 'fghfgh', NULL),
(5, '88888889', 'yathish', '61713832', 'yathish971@gmail.com', NULL),
(9, '99806592', 'yakana', '77292415', 'yakana@gmail.com', '2021-08-16 00:26:37'),
(13, 'fa458288', 'fazil', '96223211', 'faaz@gmail.com', '2016-08-21 00:31:04'),
(20, 'seenauss', 'selena', '81985356', 'serena@ymail.com', '2016-08-21 00:57:32'),
(7, 'ybc18245', 'saad', '63695876', 'sadathyuv@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `idno` (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `eid` (`eid`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`subcode`),
  ADD UNIQUE KEY `idno` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg`),
  ADD UNIQUE KEY `idno` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
