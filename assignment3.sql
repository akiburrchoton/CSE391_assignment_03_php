-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 07:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(3) NOT NULL,
  `name_r` varchar(255) NOT NULL,
  `fname_r` varchar(255) NOT NULL,
  `sid_r` int(9) NOT NULL,
  `email_r` varchar(255) NOT NULL,
  `seat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `name_r`, `fname_r`, `sid_r`, `email_r`, `seat`) VALUES
(1, 'Akibur Rahman', 'Akibur', 4334, 'akibur.chot', 2),
(2, 'Akibur Rahman', 'Akibur', 34234, 'akibur.chot', 5),
(4, 'Akibur Rahman', 'Akibur', 65757, 'akibur.chot', 6),
(21, 'Akibur Rahman', 'Akibur', 24324, 'akibur.choton@gmail.com', 3),
(22, 'Monday', 'MON ', 123123, 'mon@mon.com', 2),
(23, 'tuesday', 'teus', 123324, 'tues@tues.com', 3),
(24, 'thurs', 'thurs', 342234, 't@t.com', 5),
(25, 'fri', 'fri', 432432, 'fri@d.com', 6),
(28, 'Akibur Rahman', 'sad312', 21312, 'akibur.choton@gmail.com', 2),
(30, 'abm', 'sayad', 15301102, 'abm@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'Akibur', '420ffdfa108dac81bf680b3244bf64198e1ebf40'),
(25, 'akibur', '420ffdfa108dac81bf680b3244bf64198e1ebf40'),
(26, 'choton', 'f779cd3d0e1fa75cb91950a8bd376c81ed26b431'),
(27, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
