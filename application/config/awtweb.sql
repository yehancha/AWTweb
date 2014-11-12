-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2014 at 06:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `awtweb`
--
CREATE DATABASE IF NOT EXISTS `awtweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `awtweb`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('20cf1e8fbfe146853d1eb1df2c791b65', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2209.0 Safari/537.36', 1415813371, '');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `session_id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`session_id`, `name`) VALUES
('20cf1e8fbfe146853d1eb1df2c791b65', 'Yehan Pemarathne'),
('38c1bec6f98a5e60479c859aa552f87b', 'Yehan Pemarathne'),
('ac8da698e88934d4e697da4bd521d6bc', 'Yehan Pemarathne'),
('b97009786b9c39b0abe068aa71fcfed8', 'Yehan Pemarathne'),
('cbbbc8b7b59c3ee7755ed75fb5c0079b', 'Yehan Pemarathne'),
('d13e05f590f844e49e5480bae00a13ee', 'Yehan Pemarathne');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE IF NOT EXISTS `producttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `name`) VALUES
(1, 'TV'),
(3, 'Radio'),
(4, 'PC'),
(5, 'Phone');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`) VALUES
('Navin Pemarathne', 'nypemarathne', '01c454bb5c5b23f5b66912d60218642296863b4e'),
('Yehan Pemarathne', 'yehancha', '89e5bc2380312d6b01fa0d913d96b154a6554096');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
