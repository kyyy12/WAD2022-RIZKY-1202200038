-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_rizky`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_rizky`
--

CREATE TABLE `user_rizky` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_rizky`
--

INSERT INTO `user_rizky` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'kiki', 'xrizky234@gmail.com', 'zdmcdns', '0284213'),
(2, 'dfdasad', 'sddf', 'adafddf', 'adfassd'),
(4, 'RIZKY EKA SAPUTRA', '787', '123', '08995758269'),
(5, '', '', '', ''),
(6, 'fghhgf', 'vgfhg', 'bcjdm', 'ghdchdhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_rizky`
--
ALTER TABLE `user_rizky`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_rizky`
--
ALTER TABLE `user_rizky`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
