-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2016 at 07:31 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itech`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `activity` (
  `activityID` int(11) NOT NULL AUTO_INCREMENT,
  `gaming` varchar(15) NOT NULL,
  `entertainment` varchar(40) NOT NULL,
  `socialmedia` varchar(255) NOT NULL,
  `internet` varchar(255) NOT NULL,
  `sleep` varchar(255) NOT NULL,
  `study` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,

  FOREIGN KEY (`user_id`) REFERENCES users(`user_id`),
  PRIMARY KEY (`activityID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- Dumping data for table `users`
--

