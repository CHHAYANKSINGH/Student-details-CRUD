-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2023 at 09:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_detail`
--

CREATE TABLE `students_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `course` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_detail`
--

INSERT INTO `students_detail` (`id`, `name`, `email`, `phone`, `course`) VALUES
(1, 'Chhayank', 'chhayank@gmail.com', 8108068904, 'BE'),
(2, 'Chhayank', 'chhayank@gmail.com', 8108068904, 'BE'),
(3, 'Kishan', 'kishan@gmail.com', 9324567624, 'BE'),
(5, 'Mansi', 'mansi@gmail.com', 7738457624, 'Bsc'),
(6, 'Singh', 'singh@gmail.com', 8127563249, 'Msc'),
(7, 'Zatch', 'zatch@gmail.com', 4512365824, 'BE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_detail`
--
ALTER TABLE `students_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_detail`
--
ALTER TABLE `students_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
