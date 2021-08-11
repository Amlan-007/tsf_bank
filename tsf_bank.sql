-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: July 05, 2021 at 12:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TSF_Bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(2, 'Kaustav', 'Sayantan',20, '2021-07-04 18:08:56'),
(3, 'Samrat', 'Samprit', 100, '2021-07-08 14:55:43'),
(4, 'Sayantan', 'Ankit', 15, '2021-07-12 14:58:55'),
(5, 'Samprit', 'Sahil', 5000, '2021-07-16 21:49:16'),
(6, 'Ankit', 'Abhishek', 5000, '2021-07-18 20:41:06'),
(7, 'Sahil', 'Samrat', 5000, '2021-08-02 23:34:40'),
(8, 'Abhishek', 'Kaustav', 5000, '2021-08-05 10:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Amlan', 'amlandutta1999@gmail.com', 20000),
(2, 'Kaustav', 'kaustavmitra@gmail.com', 40000),
(3, 'Samrat', 'samratkundu@gmail.com', 30000),
(4, 'Sayantan', 'sayantankoley@gmail.com', 20000),
(5, 'Samprit', 'sampritsingha@gmail.com', 50000),
(6, 'Ankit', 'ankit@gmail.com', 26000),
(7, 'Sahil', 'sahilsingh@gmail.com', 50000),
(8, 'Abhishek', 'abhishek200@gmail.com', 80000),
(9, 'Avik', 'avik05@gmail.com', 40000),
(10, 'Souvik', 'souvik09@gmail.com', 60000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
