-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 10:17 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `symbols`
--

CREATE TABLE `symbols` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `year` int(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `people` int(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symbols`
--

INSERT INTO `symbols` (`id`, `name`, `email`, `title`, `year`, `gender`, `fromdate`, `todate`, `people`,`image`) VALUES
(1, 'Naveen Kumar', 'naveenkumar@gmail.com', 'RECHARGE', 3, 'male', '2023-12-31', '2024-01-02', 4,'RECHARGE.jpeg'),
(2, 'Jegan', 'Jegan@gmail.com', 'BOTSHA', 3, 'male', '2024-01-06', '2024-01-10', 10,'BOTSHA.jpg'),
(3, 'Jaya Surya', 'JayaSurya@studentpartner.com', 'BOOTUP', 3, 'male', '2024-01-12', '2024-01-15', 20,'BOOTUP.jpeg'),
(4, 'Mohana Prasath', 'mohan@gmail.com', 'Thozha Thandavam', 3, 'male', '2024-01-20', '2024-01-22', 30,'Thozha Thandavam.jpg');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `symbols`
--
ALTER TABLE `symbols`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `symbols`
--
ALTER TABLE `symbols`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
