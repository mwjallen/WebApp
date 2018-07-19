-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 03:50 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cancercare`
--
CREATE DATABASE `cancercare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cancercare`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `addr1` varchar(100) DEFAULT NULL,
  `addr2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `client`
--


-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `consultant` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital`, `phone`, `consultant`, `email`) VALUES
(1, 'Russell''s Hall', '01384349933', 'Mr Abraham', 'Abraham@russelshall.nhs.uk'),
(2, 'New Cross', '01902579021', 'Mr Franklin', 'franklin@newcross.nhs.uk'),
(3, 'Queen Elizabeth', '01213456789', 'Mr Peters', 'peters@qehospital.nhs.uk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usercode` int(2) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `usercode`, `usertype`) VALUES
(1, 'admin@cancercare.org', 'password', 1, 'administrator'),
(2, 'fred@hotmail.co.uk', 'password', 2, 'volunteer'),
(5, 'paul.masters@live.co.uk', 'password', 2, 'Volunteer'),
(6, 'martin.jones@hotmail.co.uk', 'password', 2, 'Volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `volunteer_id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `addr1` varchar(100) DEFAULT NULL,
  `addr2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`volunteer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `lname`, `fname`, `addr1`, `addr2`, `city`, `postcode`, `phone`, `mobile`, `email`, `client_id`, `user_id`) VALUES
(1, 'Bloggs', 'Fred', '78 Penny Lane', NULL, 'Telford', 'TF3 1GG', '01952789098', '07777453210', 'fred@hotmail.co.uk', NULL, 2),
(2, 'Masters', 'Paul', '56 Smart Drive', '', 'Wolverhampton', 'WV6 3AQ', '01902 766209', '07792987465', 'paul.masters@live.co.uk', NULL, 0),
(3, 'Jones', 'Martin', '39 Everything Avenue', '', 'Dudley', 'DY4 7GG', '01384111222', '07796212564', 'martin.jones@hotmail.co.uk', NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
