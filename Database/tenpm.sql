-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 08:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tenpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_package`
--

CREATE TABLE IF NOT EXISTS `add_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `softcopy` int(11) NOT NULL,
  `pre_photos` int(20) NOT NULL,
  `quality` varchar(20) NOT NULL,
  `video` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=14 ;

--
-- Dumping data for table `add_package`
--

INSERT INTO `add_package` (`id`, `p_name`, `duration`, `location`, `softcopy`, `pre_photos`, `quality`, `video`, `price`) VALUES
(13, 'new', '2 months', '3 location', 50, 100, 'hd', 'yes', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `package_orders`
--

CREATE TABLE IF NOT EXISTS `package_orders` (
  `Package` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `u_name` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `package` varchar(20) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`u_name`, `password`, `contact_no`, `email_id`, `package`, `status`) VALUES
('admin', 'admin', '1234567890', 'abc@gmail.com', '', ''),
('akash', '1010', '9895696685', 'sahbsjahd@ojhsja', 'Gold', 'Pending'),
('hari', 'hari', '335445', 'ajslkj', 'Silver', 'Ongoing'),
('harshil', '111', '9897879989', 'ajhsgahj@hajhaj', 'Silver', 'Pending'),
('harshil1', '484848', '9865489654', 'asbashgh@hjajhu', '', 'Pending'),
('pari', 'pari', '335445', 'ajslkj', 'Silver', 'Pending'),
('sanket', '123', '7201994148', 'sanket.abcxyz@gmail.com', 'Silver', 'Pending'),
('sanki', 'sanki', '52125', 'ajhsjkah', '', 'Pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
