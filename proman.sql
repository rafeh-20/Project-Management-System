-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2023 at 05:26 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proman`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `requirements` varchar(256) NOT NULL,
  `software` varchar(256) NOT NULL,
  `hardware` varchar(256) NOT NULL,
  `owner` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_pjfk_1` (`owner`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `firm` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `district` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `firm`, `city`, `district`, `address`) VALUES
(1, '', '', '$2y$10$c8zch7w7f/wID1Qdvn4d4eiIHG1COlPQejWM66ahmrZ', '', '', '', ''),
(2, 'vzvzx', '', '$2y$10$e3ZYfR5r6JX2pQ2u4LHJ7.EWbkmE62iWLWYIc6hQUkN', '', '', '', ''),
(3, 'sfaf', '', '$2y$10$ZwAn2fdEeTYnxZSgm3MWHeOt6d2Us6MfQZC5mvk29xV', '', '', '', ''),
(4, 'saffsa', 'as', '$2y$10$Qu.wGFOL.wnt/yZiGNZcUO29WPkAH7Dzo7o8ZdTMmZu', 'dag', 'gaddag', 'dagdga', 'dagga'),
(5, 'adg', 'agd', '$2y$10$y2W4XxwluNMYDTPcWbCLJu3Pxf7GOslUhE5pzoHc88v', 'fsfsh', 'fshfhs', 'fhsfh', 'sffsh'),
(6, 'qwe', 'zxc', '$2y$10$KITOxsBfJ3KU1U9ts/vKquT6iyJU1j4IsGwNkPqrzzW', 'asfsa', 'fsasfa', 'sfafsasfa', 'saf'),
(7, 'qwerty', 'fqf', '$2y$10$TMnngYBih4NutVKDVkXvCuE6/qj1U/AOKaIPMtl2Jts', 'asfa', 'dadga', 'dga', 'dagdag'),
(8, 'rafeh.12102@gmail.com', 'qw', '$2y$10$gF6s0QW1Z/svgfi6QIFR7OaLOY5DS7wL4N6Xmdw.zXU', 'afa', 'da', 'gdadgagad', 'dagdgaga'),
(9, 'rafeh.hussain@ug.bilkent.edu.tr', 'safs', '$2y$10$OBmNzdiTxUfPWqbShiUtvuNFAtgNsHe91jkolGzNyJOrtgqi2FJqO', 'fafsa', 'adfdafdaf', 'fdafdadfa', 'dfadffd'),
(10, 'assass', 'qq', '$2y$10$c5QLjgCuKF1C1ln.pnqd7OH/W9d4ZjUGusnQ.lEAhAq0rd/EQRJXq', 'xfasfasfsafaf', 'dfafda', 'fdadfdfa', 'dadfaf'),
(11, 'cato', 'fsafad', '$2y$10$544kNPR1XEBFWhwwJ6yo8e2i0XjrVju3KRabtBk84XmieLdvjUuFS', 'gdagdagda', 'dgagdagda', 'cankaya', 'yooooad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
