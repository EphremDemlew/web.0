-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2021 at 11:37 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

DROP TABLE IF EXISTS `appoint`;
CREATE TABLE IF NOT EXISTS `appoint` (
  `Email` varchar(40) NOT NULL,
  `First Name` varchar(40) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `AppointDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`Email`, `First Name`, `Gender`, `Age`, `AppointDate`) VALUES
('example@gmail.com', 'dereje', 'F', 45, '2021-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `FirstName` varchar(40) NOT NULL,
  `SecondName` varchar(40) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `Pass` varchar(40) NOT NULL,
  `Text` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`FirstName`, `SecondName`, `Country`, `Pass`, `Text`) VALUES
('Belsti', 'Yezengaw', 'Ethiopia', '8d45c85b51b27a04ad7fdfc3f126f9f8', 'hi friends'),
('Ephrem', 'Demlew', 'Ethiopia', '6a2bad6cb0b1a1df786ad762c7d06c60', 'Welcome '),
('Daniel', 'Demelash', 'Ethiopia', '55b7e8b895d047537e672250dd781555', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
