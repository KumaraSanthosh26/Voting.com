-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2018 at 09:53 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `logid`
--

CREATE TABLE IF NOT EXISTS `logid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `regNo` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `logid`
--

INSERT INTO `logid` (`id`, `member_id`, `name`, `regNo`, `faculty`) VALUES
(6, 5, 'kakooza', '17/u/0001/lcs', 'HEALTH SCIENCE'),
(7, 4, 'kal', '17/u/000/lcs', 'HEALTH SCIENCE'),
(8, 1, 'Md. Rezwanul', '19964714075000192', ''),
(9, 6, 'kalumba', '15/u/003/bba', 'HEALTH SCIENCE'),
(10, 2, 'Mahbub', '19864714075000186', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

CREATE TABLE IF NOT EXISTS `tbadministrators` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'jeeva', 'nanthan', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbcandidates`
--

CREATE TABLE IF NOT EXISTS `tbcandidates` (
  `candidate_id` int(5) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(1, 'Mamun', 'Chairman', 34),
(2, 'Emran', 'Chairman', 19),
(4, 'Sajedul', 'Vice-Chairman', 14),
(5, 'KALUMBA ALAL', 'Member', 0),
(6, 'KASULE RICHARD', 'Treasurer', 0),
(7, 'padyy padyy', 'CEO', 1),
(8, 'kamuga bashir', 'Secretary', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

CREATE TABLE IF NOT EXISTS `tbmembers` (
  `member_id` int(50) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` int(12) NOT NULL,
  `regNo` varchar(45) NOT NULL,
  `course` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `code` int(5) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `u_name`, `gender`, `email`, `contact`, `regNo`, `course`, `faculty`, `password`, `code`) VALUES
(1, 'Md. Rezwanul', 'Haque', '', '', 'rezwan@gmail.com', 0, '19964714075000192', '', '', 'user1', 0),
(2, 'Mahbub', 'Alam', '', '', 'kal@gmail.com', 0, '19864714075000186', '', '', 'user2', 0),
(4, 'kal', 'jal', 'kalj', 'Male', 'kal@kal.com', 786554444, '17/u/000/lcs', 'LCS', 'HEALTH SCIENCE', 'kal', 22697),
(5, 'kakooza', 'rogers', 'roger', 'Male', 'kako@kako.com', 2147483647, '17/u/0001/lcs', 'LCS', 'HEALTH SCIENCE', 'kako', 0),
(6, 'kalumba', 'jalaludin', 'kal', 'Male', 'kalj@gmail.com', 234567890, '15/u/003/bba', 'LCS', 'HEALTH SCIENCE', 'jal', 28997);

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

CREATE TABLE IF NOT EXISTS `tbpositions` (
  `position_id` int(5) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`) VALUES
(1, 'Chairman'),
(2, 'Vice-Chairman'),
(3, 'Secretary'),
(4, 'Vice-Secretary'),
(7, 'Vice-Treasurer'),
(8, 'Member'),
(12, 'Registrar'),
(13, 'President'),
(14, 'CEO'),
(15, 'Director');
