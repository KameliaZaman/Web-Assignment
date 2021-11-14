-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 07:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `UserEmail` varchar(45) NOT NULL,
  `SName` varchar(45) NOT NULL,
  `Review` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`UserEmail`, `SName`, `Review`) VALUES
('pqr@ui', 'Plumber', 'good'),
('tony@gmail.com', 'Plumber', '');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `UserEmail` varchar(45) NOT NULL,
  `SName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`UserEmail`, `SName`) VALUES
('tony@gmail.com', 'Plumber'),
('ruby12@gmail.com', 'Sweeper');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `SID` varchar(45) NOT NULL,
  `SName` varchar(45) NOT NULL,
  `SDetails` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`SID`, `SName`, `SDetails`, `price`) VALUES
('2', 'Sweeper', 'Clean House', '$10'),
('5', 'Electrician', 'Helps solving electricity problems', '$12'),
('1', 'Plumber', 'Fixes pipe lines', '$11'),
('6', 'Gayser service', 'Maintains garden', '$14'),
('3', 'Pest Control', 'Removes insects from house', '$15'),
('4', 'Painting', 'Paint houses', '$13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserName` varchar(45) NOT NULL,
  `UserEmail` varchar(45) NOT NULL,
  `UserPass` varchar(45) NOT NULL,
  `UserPhone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserName`, `UserEmail`, `UserPass`, `UserPhone`) VALUES
('Kamelia Zaman', 'kamelia19979@gmail.com', '123', ''),
('Tony', 'tony@gmail.com', '567', '02567892345'),
('Ruby', 'ruby12@gmail.com', '921', '03567891234'),
('Steve', 'steve1918@gmail.com', '12345', '68767566576'),
('Thor', 'thor24468@gmail.com', 'ertyui', '668767699889'),
('scarlett', 'scarlett8776@gmail.com', 'ghjkl', '1454789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
