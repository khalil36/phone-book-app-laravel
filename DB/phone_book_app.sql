-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 02:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_book_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', 'john.doe@yahoo.com', '1236549871', '2021-06-10 06:35:08', '2021-06-10 06:35:08'),
(2, 'Ben', 'Miller', 'benmiller@gmail.com', '4567896542', '2021-06-10 06:37:11', '2021-06-10 06:37:11'),
(3, 'Garett', 'Varges', 'varges.garett@hotmail.com', '2583691470', '2021-06-10 06:40:38', '2021-06-10 06:40:38'),
(4, 'Gabe', 'Mares', 'gabe_mares@gmail.com', '1231321321', '2021-06-10 06:46:06', '2021-06-10 06:46:06'),
(5, 'Gordon', 'Hee', 'gordon.hee@yahoo.com', '2647598315', '2021-06-10 06:54:14', '2021-06-10 06:54:14'),
(6, 'Kim', 'Ralls', 'ralls.kim@hotmail.com', '4567981232', '2021-06-10 06:56:14', '2021-06-10 06:56:14'),
(7, 'Mike', 'Seamans', 'seamans.mike11@gmail.com', '2546789365', '2021-06-10 06:57:23', '2021-06-10 06:57:23'),
(8, 'John', 'Evens', 'evens.johns45@yahoo.com', '3456789545', '2021-06-10 06:58:23', '2021-06-10 06:58:23'),
(9, 'Essig', 'Ray', 'essig@creatingdigital.com', '2014751288', '2021-06-10 06:59:50', '2021-06-10 06:59:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
