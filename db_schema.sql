-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2015 at 02:01 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.6-1ubuntu1.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `muli`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE IF NOT EXISTS `allergies` (
  `allergy_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(60) NOT NULL,
  `allergy` varchar(255) NOT NULL,
  PRIMARY KEY (`allergy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
  `diagnosis_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `diagnosis` text,
  `treatment` text,
  `patient_id` varchar(60) NOT NULL,
  `staff_id` bigint(21) NOT NULL,
  `visit_id` bigint(21) NOT NULL,
  PRIMARY KEY (`diagnosis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE IF NOT EXISTS `lab_tests` (
  `test_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(60) NOT NULL,
  `test_done` varchar(255) DEFAULT NULL,
  `test_result` varchar(255) DEFAULT NULL,
  `staff_id` bigint(21) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medical_profile`
--

CREATE TABLE IF NOT EXISTS `medical_profile` (
  `profile_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(60) NOT NULL,
  `present_complaint` longtext,
  `complaint_history` longtext,
  `other_illness` text,
  `surgical_history` text,
  `blood_pressure` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE IF NOT EXISTS `patient_profile` (
  `patient_id` varchar(60) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `insured` varchar(20) DEFAULT NULL,
  `nhif` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `dob` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `prescription_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `prescription` text NOT NULL,
  `patient_id` varchar(60) NOT NULL,
  `staff_id` bigint(21) NOT NULL,
  `visit_id` bigint(21) NOT NULL,
  PRIMARY KEY (`prescription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `id_number` int(10) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `visit_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patient_id` varchar(60) NOT NULL,
  `medication_id` bigint(21) DEFAULT NULL,
  `allergy_id` bigint(21) DEFAULT NULL,
  `medical_profile_id` bigint(21) DEFAULT NULL,
  `lab_test_id` bigint(21) DEFAULT NULL,
  `current_stage` bigint(21) DEFAULT NULL,
  `visit_status` int(2) DEFAULT NULL,
  `end_visit` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;