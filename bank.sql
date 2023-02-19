-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 03:06 AM
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
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `account_id` int(10) NOT NULL,
  `id_card` varchar(10) NOT NULL,
  `titlename` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(5) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `money` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`account_id`, `id_card`, `titlename`, `name`, `number`, `email`, `birthday`, `age`, `account_name`, `money`, `address`, `password`) VALUES
(2, '4569872615', 'Mr', 'ppppp ooooo', '0000000000', 'lokppo', '2023-02-01', 18, 'ppp', 10000000, 'kronglongka', '444555'),
(3, '777777', 'Mr', 'somjit joey', '0929999', 'somjit@email.com', '2023-02-01', 12, 'll', 5000, 'kronglongka', '000000000'),
(4, '77444', 'Mr', 'joey', '0929555', 'somjit@email.com', '2023-02-01', 12, 'oo', 5000, 'kronglongka', '000000111'),
(5, '755556666', 'Ms', 'joy', '0929555', 'jit@email.com', '2023-02-01', 12, 'uu', 5000, 'kronglongka', '66660111'),
(1000, '7578956', 'Ms', 'jane', '0924456', 'jane@email.com', '2023-02-02', 20, 'y', 10000, 'kronglongka', '64568'),
(1001, '748621', 'Ms', 'j', '094856', 'j@email.com', '2023-01-10', 18, 'k', 10500, 'kronglongka', '61562');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1256987446;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
