-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220725.01cf9ce82e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 05:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `email`, `ulasan`) VALUES
(NULL, '', ''),
(NULL, '', ''),
(NULL, '', ''),
(NULL, '', ''),
(NULL, '', ''),
(NULL, '', ''),
(NULL, '', ''),
(NULL, 'sc@gmail.com', 'mojokerto keren banget'),
(NULL, 'kelompok1@gmail.com', 'mojokerto keren banget'),
(NULL, 'kelompok1@gmail.com', 'mojokerto keren banget'),
(NULL, 'tiyasbeni@gmail.com', 'mojokerto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
