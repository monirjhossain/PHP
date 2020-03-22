-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 05:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `primary_info`
--

CREATE TABLE `primary_info` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `primary_info`
--

INSERT INTO `primary_info` (`st_id`, `st_name`, `st_email`, `st_phone`) VALUES
(18, 'MD. MONIR HOSSAIN', 'jontyrose1@gmail.com', '01948283811'),
(19, 'monir', 'akashjony123@outlook.com', '01948283811'),
(24, 'Zahir Khan', 'asadahamed54@gmail.com', '01865832147'),
(25, 'Minar Khan', 'minar@gmail.com', '01948283811'),
(32, 'Halum', 'halum@gmail.com', '01865832147');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `primary_info`
--
ALTER TABLE `primary_info`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `st_email` (`st_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `primary_info`
--
ALTER TABLE `primary_info`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
