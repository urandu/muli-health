-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2015 at 10:15 AM
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
-- Table structure for table `patient_profile`
--

CREATE TABLE IF NOT EXISTS `patient_profile` (
  `patient_id` varchar(60) NOT NULL,
  `first_name` varchar(60) DEFAULT NULL,
  `middle_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `insured` varchar(20) DEFAULT NULL,
  `nhif` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `dob`, `gender`, `id_number`, `role`, `password`, `email`, `user_name`) VALUES
(1, '0', '0', '0', '0', 0, 0, 'd41d8cd98f00b204e9800998ecf8427e', '', '0'),
(2, 'bildad namawa', '0726430386', '1992-02-20', 'm', 29364156, 0, 'f9f16d97c90d8c6f2cab37bb6d1f1992', '', 'doctor'),
(4, 'pharmacist', '0726430386', '1990-12-20', 'm', 29364156, 1, '0a9b3767c8b9b69cea129110e8daeda2', 'bildadnamaw@gmail.comm', 'receptionist'),
(5, 'lab', '0726430386', '1952-04-02', 'm', 29364156, 2, '2f6f0be2c74d12b3ebae21b01e954a23', 'bildadnamawa@gmail.com', 'lab attendant'),
(6, 'pharmacist', '0726430386', '1992-12-15', 'm', 29364156, 3, 'fd3051577824ada21b3df777812c66fa', 'bildadnamawa@gmail.com', 'pharmacist'),
(7, 'pharmacist', '0726430386', '1992-12-15', 'm', 29364156, 4, '7a90e38a211ece1c346928e7d1f3e968', 'bildadnamawa@gmail.com', 'accounts');

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