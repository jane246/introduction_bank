-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 12:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `deposit` int(20) NOT NULL,
  `withdraw` int(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `time` datetime(6) NOT NULL,
  `account_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`deposit`, `withdraw`, `comment`, `time`, `account_id`) VALUES
(0, 0, '0', '0000-00-00 00:00:00.000000', 0),
(1000, 0, '0', '0000-00-00 00:00:00.000000', 0),
(1000, 0, '0', '0000-00-00 00:00:00.000000', 1256987448),
(4000, 0, '0', '0000-00-00 00:00:00.000000', 1256987448),
(1000, 0, '0', '0000-00-00 00:00:00.000000', 1256987448),
(107, 0, '0', '0000-00-00 00:00:00.000000', 1256987448),
(107, 0, '0', '0000-00-00 00:00:00.000000', 1256987448),
(107, 0, 'นนน', '0000-00-00 00:00:00.000000', 1256987448),
(1000, 0, 'ppp', '2023-02-19 17:38:59.000000', 1256987448);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
