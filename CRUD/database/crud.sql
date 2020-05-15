-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 15, 2020 at 10:25 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `marks` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `image`, `marks`, `status`) VALUES
(9, 'Yogesh', 'Singh', 'yogesh697ksingh@gmail.com', 'default.jpg', 90, 1),
(28, 'Natasha', 'R', 'natashar@gmail.com', 'default.jpg', 80, 1),
(29, 'Clint', 'H', 'clinth@ymail.com', 'default.jpg', 40, 1),
(30, 'Tom', 'H', 'tom_h@gmail.com', 'default.jpg', 80, 1),
(31, 'Justin', 'S', 'justin_s@gmail.com', 'default.jpg', 90, 1),
(35, 'Trevor', 'R', 'trevor93@gmail.com', 'default.jpg', 87, 1),
(34, 'Haly', 'Berry', 'hally_b@gmail.com', 'default.jpg', 94, 1),
(33, 'Daniel', 'R', 'danielr@gmail.com', 'default.jpg', 82, 1),
(32, 'Susan', 'M', 'susanmattson@gmail.com', 'default.jpg', 90, 1),
(27, 'Robert', 'J', 'robertj@gmail.com', 'default.jpg', 60, 1),
(25, 'Mark', 'R', 'mark_r@gmail.com', 'default.jpg', 30, 1),
(26, 'Chris', 'H', 'chrish@gmail.com', 'default.jpg', 50, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
