-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 05:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` text NOT NULL,
  `address` text NOT NULL,
  `specialty` text NOT NULL,
  `image` varchar(20) NOT NULL,
  `rating` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`ID`, `first_name`, `last_name`, `password`, `email`, `phone_no`, `address`, `specialty`, `image`, `rating`) VALUES
(8, 'Himanshu ', 'Mishra', 'himanshu123', 'himanshu532134@gmail.com', '8181814528', 'Gorakhpur,Uttar Pradesh', 'Birthday Organizer', 'images/himanshu.jpeg', 3),
(9, 'Ravi ', 'Kumar', 'ravi123', 'raviprakashmeena25@gmail.com', '8093459606', 'Rajasthan,Kota', 'Seminar organizer', 'images/ravi.jpeg', 1),
(11, 'Akash', 'Vishnoi', 'akash123', 'akashvishnoi05@gmail.com', '2147483647', 'Moradabad,Uttar Pradesh', 'Festival Events', 'images/akash.jpeg', 1),
(13, 'Rohit', 'sharma', 'rohit123', 'rs978699@gmail.com', '9469062703', 'Jammu & Kashmir', 'Wedding Organizer', 'images/rohit.jpeg', 2),
(14, 'Adarsh', 'Abhishek', 'adarsh123', 'adarshabhisek1@gmail.com', '8917392918', 'Dl-212,\r\nBasanti Colony ,\r\nRourkela-769012', 'Seminar organizer', 'images/adarsh.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
