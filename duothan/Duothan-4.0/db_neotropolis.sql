-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2024 at 09:32 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_neotropolis`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `u_id` int NOT NULL,
  `p_amount` varchar(255) NOT NULL,
  `p_type` varchar(10) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `u_username` varchar(100) NOT NULL,
  `u_fname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `u_mobile` varchar(20) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_status` varchar(10) NOT NULL,
  `u_dtpcode` int NOT NULL,
  PRIMARY KEY (`u_id`,`u_username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_username`, `u_fname`, `u_lname`, `u_mobile`, `u_email`, `u_password`, `u_status`, `u_dtpcode`) VALUES
(1, 'dushan6693', 'Dushan', 'Madushanka', '0767771005', 'dushan@gmail.com', '12345678', 'user', 234578);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
CREATE TABLE IF NOT EXISTS `user_status` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `u_id` int NOT NULL,
  `token_id` int NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
