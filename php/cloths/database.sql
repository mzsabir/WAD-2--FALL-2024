-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2024 at 01:57 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` varchar(80) NOT NULL,
  `detail` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `picture`, `detail`, `date_created`) VALUES
(1, 'Stitched', 'aa.jfif', 'Stitched clothing is clothing that has been sewn together at two or more ends using a needle and thread. The process of sewing seams together to join two pieces of fabric is called seamwork.', '2024-12-10 10:59:02'),
(2, 'Unstitched', 'download (1).jfif', 'Stitched clothing is clothing that has been sewn together at two or more ends using a needle and thread. The process of sewing seams together to join two pieces of fabric is called seamwork.', '2024-12-10 11:08:53'),
(3, 'Luxuary', 'download (1).jfif', 'Stitched clothing is clothing that has been sewn together at two or more ends using a needle and thread. The process of sewing seams together to join two pieces of fabric is called seamwork.', '2024-12-10 11:08:53'),
(6, 'WInters', 'aa.jfif', 'sfdfdf', '2024-12-10 17:05:02'),
(7, 'Summers', 'aa.jfif', 'sfdfdf', '2024-12-10 17:05:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
