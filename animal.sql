-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2022 at 04:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `animal`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(10) DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `descri` varchar(60) NOT NULL,
  `experience` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `category`, `image`, `descri`, `experience`) VALUES
('giraf', 'Herbivores', 'girraf.jpg', ' G', '0-1 year'),
('dog', 'Omnivores', 'dog.jpg', 'white dog ', '1-5 year'),
('loin', 'Herbivores', 'loin.jpg', ' loin', '0-1 year'),
('dog', 'Carnivores', 'dog.jpg', ' dog', '5-10 year'),
('wolf', 'Omnivores', 'wolf.jpg', ' wolf ', '5-10 year');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
