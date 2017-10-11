-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2017 at 07:06 AM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hash`
--
CREATE DATABASE IF NOT EXISTS `hash` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hash`;

-- --------------------------------------------------------

--
-- Table structure for table `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `ID` int(11) NOT NULL,
  `HASH` varchar(50) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `DT_EXPIRACAO` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cadastro`
--

INSERT INTO `cadastro` (`ID`, `HASH`, `NOME`, `DT_EXPIRACAO`) VALUES
(1, 'aaa', 'aaaaaaa', '0000-00-00'),
(2, 'aaa', 'aaaaaaa', '1111-11-11'),
(3, 'hash111', 'leticia barbosa', '1970-01-01'),
(4, 'qqq', 'teste', '2017-10-10'),
(5, 'awww', 'www', '2017-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
