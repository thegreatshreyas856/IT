-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 02:13 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `registration_number` varchar(10) DEFAULT NULL,
  `body_color` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `ownerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `user_name` varchar(16) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_name`, `password`, `role`) VALUES
('aaaa', 'aaaa', 'USER'),
('bbbb', 'bbbb', 'USER'),
('shreyas', '857857', 'ADMIN'),
('shruthi', '856856', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `new_cars`
--

CREATE TABLE `new_cars` (
  `carname` varchar(10) DEFAULT NULL,
  `cartype` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `front` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_cars`
--

INSERT INTO `new_cars` (`carname`, `cartype`, `price`, `front`) VALUES
('Mars', 'Seden', '87548', 'upload/car/front/slide1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `old_cars`
--

CREATE TABLE `old_cars` (
  `carname` varchar(10) DEFAULT NULL,
  `cartype` varchar(10) DEFAULT NULL,
  `reg_no` varchar(15) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `owner` varchar(20) DEFAULT 'no',
  `front` varchar(50) DEFAULT NULL,
  `taken` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_cars`
--

INSERT INTO `old_cars` (`carname`, `cartype`, `reg_no`, `price`, `phone`, `owner`, `front`, `taken`) VALUES
('vent', 'SUV', 'ka-50-6086', 20000, 87549854, 'aaaa', 'upload/car/front/back.png', 1),
('Second', 'Hatchback', 'ka-30-8795', 87548, 87485798, 'aaaa', 'upload/car/front/back.png', 1),
('my new', 'SUV', 'Da-58-1989', 8574, 87548968, 'bbbb', 'upload/car/front/left.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_table`
--

CREATE TABLE `reg_table` (
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` int(20) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `phone_num` int(10) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_table`
--

INSERT INTO `reg_table` (`first_name`, `last_name`, `user_name`, `password`, `email_id`, `phone_num`, `profile`) VALUES
(NULL, NULL, 'aaaa', 0, 'aa@gmail.com', NULL, NULL),
(NULL, NULL, 'bbbb', 0, 'bbbb@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `span`
--

CREATE TABLE `span` (
  `email` varchar(20) DEFAULT NULL,
  `message` varchar(20) DEFAULT NULL,
  `proof` varchar(50) DEFAULT NULL,
  `reason` varchar(20) DEFAULT NULL,
  `spamby` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `span`
--

INSERT INTO `span` (`email`, `message`, `proof`, `reason`, `spamby`) VALUES
('aa@gmail.com', 'I DONT LIKE HIM', 'proof/back.png', 'He is an mother fuck', 'aaaa'),
('aa@gmail.com', 'he spam', 'proof/back.png', 'He is an mother fuck', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
