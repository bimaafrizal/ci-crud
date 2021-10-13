-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 09:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--
-- Error reading structure for table backend.news: #1932 - Table 'backend.news' doesn't exist in engine
-- Error reading data for table backend.news: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `backend`.`news`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `news2`
--

CREATE TABLE `news2` (
  `id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news2`
--

INSERT INTO `news2` (`id`, `title`, `text`) VALUES
(1, 'tes123', 'tes12356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news2`
--
ALTER TABLE `news2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news2`
--
ALTER TABLE `news2`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
