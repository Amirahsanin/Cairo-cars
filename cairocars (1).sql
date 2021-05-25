-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 03:59 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cairocars`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `email`, `subject`, `message`) VALUES
('amira', 'am@j', 'hello', 'hdbcjhsbchg vsdbjhv sdhbc vjhsd vcjhsdjhsdjh jsd vjhsd jhdcjdcj djch vjhsdb vjhds vjdkclskcnb;dkCND;BCVDSKLCVSDJBVSDKB KJ JN '),
('amiramohammed', 'hgvgy@kljnm', 'jkbdfjkbvk', 'We are a team of 10 people.\r\nIn the year of graduation from the Institute of Computer Science, Fifth Settlement.\r\nWe have prepared the site to be consistent and integrated to help you reach a goal simply.\r\nWe are available 24 hours to serve you.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `holder` varchar(50) NOT NULL,
  `number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`holder`, `number`) VALUES
('0', 123456789),
('fcfv', 256156),
('fcfv', 256156),
('hhh', 5555);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conpassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `username`, `password`, `conpassword`, `email`, `dob`, `nid`) VALUES
('amira', 'amira', 'amimhmd', '33333', '33333', 'hgvgy@kljnm', '54415-05-04', '15215151'),
('amira', 'amira', 'amimhmd', '33333', '33333', 'hgvgy@kljnm', '54415-05-04', '15215151'),
('amira', 'amira', 'amimhmd', '33333', '33333', 'hgvgy@kljnm', '54415-05-04', '15215151'),
('amira', 'amira', 'amimhmd', '33333', '33333', 'hgvgy@kljnm', '54415-05-04', '15215151'),
('amira', 'amira', 'amimhmd', '33333', '33333', 'hgvgy@kljnm', '54415-05-04', '15215151');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
