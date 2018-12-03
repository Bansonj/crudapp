-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 08:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs202`
--

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `pass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `phone`, `pass`) VALUES
('Brock', 'brocksmith@yahoo.co.uk', '+13606506789', 'password'),
('Abernathy', 'Abernathy@gmail.com', '123123123', '4141414141'),
('Crooks', 'Crooks@wwu.edu', '12345678', '11111'),
('Judge', 'Judgemark12@gmail.com', '123456', '111111'),
('Scottie', 'Scottie@gmail.com', '12345678', '232323'),
('Pagac', 'pagac@gmail.com', '8787878', 'faith34'),
('Satterfield', 'satfield@gmail.com', '12345678', 'Wesley@'),
('Joanie', 'Joanie@yahoo.com', '135687770', 'password4'),
('Huels Joany', 'huej@wwu.edu', '898889900', 'pass!@#$'),
('Miles Hickle', 'mhickle@gmail.com', '854938310', 'lightaffe45'),
('Champlin', 'champlin45@gmail.com', '98449443', '121212');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
