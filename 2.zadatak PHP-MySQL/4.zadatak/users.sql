-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 06:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `archive` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `picture`, `username`, `password`, `email`, `country`, `date`, `archive`) VALUES
(3, 'Pero', 'Peric', 'user.jpg', 'pperic', '21232f297a57a5a743894a0e4a801fc3', 'pero.peric@vvg.hr', 'HR', '2020-01-06 14:20:18', 'Y'),
(5, 'Alen', 'Simec', 'user.jpg', 'asimec1', '$2y$12$MvEg.TeRkTn9zUUwc0ALyux..9cI5IXSukNi/V3qtyk3wy3DMxbW6', 'alen@eburza.hr', 'HR', '2020-01-06 23:00:00', 'Y'),
(9, 'admin', 'admin', 'user.jpg', 'admin', '$2y$12$0xxPscN76GGGWdLfI/5yhOFxYmgsHZQ5Ee3LOkdsZwTr/r6vS53w6', 'admin@vvg.hr', 'HR', '2020-01-06 16:28:24', 'N'),
(14, 'Ivana', 'Ivkovic', 'iivkovic.jpg', 'iivana', '$2y$12$MvEg.TeRkTn9zUUwc0ALyux..9cI5IXSukNi/V3qtyk3wy3DMxbW6', 'iivkov1@vvg.hr', 'HR', '2020-01-05 17:04:32', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
