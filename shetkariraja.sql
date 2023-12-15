-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 06:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shetkariraja`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact us`
--

CREATE TABLE `contact us` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact us`
--

INSERT INTO `contact us` (`name`, `email`, `subject`, `message`) VALUES
('Prasad & Sanjay', 'prasad.paithankar@gmail.com', 'HR', 'Nice Project, All the best for many more useful contributions to the society :)');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `rate` int(7) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`fname`, `lname`, `pname`, `quantity`, `rate`, `address`, `message`, `phone`) VALUES
('sairaj', 'kadam', 'rice', '55', 89, 'CIDCO', 'fdfgdfgdfgh', 2147483647),
('neha', 'deshmukh', 'rice', 'a6559', 89, 'CIDCO', 'dttfj', 24541521);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `rate` int(7) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signupdata`
--

CREATE TABLE `signupdata` (
  `name` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `hints` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdata`
--

INSERT INTO `signupdata` (`name`, `number`, `pass`, `hints`) VALUES
('Neha Deshmukh', 2147483647, 'nehaneha', '123456'),
('sai', 2147483647, 'ss', '123'),
('Prasad', 2147483647, '1234', '4321'),
('sai', 2147483647, 'sai', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
