-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2015 at 10:44 AM
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
  `visit_id` bigint(21) DEFAULT NULL,
  PRIMARY KEY (`allergy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`allergy_id`, `patient_id`, `allergy`, `visit_id`) VALUES
(3, '12354', '1', 1),
(4, '12354', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allergy_names`
--

CREATE TABLE IF NOT EXISTS `allergy_names` (
  `allergy_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `allergy_name` varchar(100) NOT NULL,
  PRIMARY KEY (`allergy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `allergy_names`
--

INSERT INTO `allergy_names` (`allergy_id`, `allergy_name`) VALUES
(1, 'nuts'),
(2, 'ofuodho');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`diagnosis_id`, `diagnosis`, `treatment`, `patient_id`, `staff_id`, `visit_id`) VALUES
(6, '2', NULL, '12354', 2, 1),
(7, '1', NULL, '12354', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `disease_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `disease_name` varchar(100) NOT NULL,
  PRIMARY KEY (`disease_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`) VALUES
(1, 'malaria'),
(2, 'TB');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `drug_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(200) NOT NULL,
  `drug_price` float NOT NULL,
  `stock` int(21) DEFAULT NULL,
  PRIMARY KEY (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_name`, `drug_price`, `stock`) VALUES
(1, 'zidididine', 200, 50),
(2, 'zidididine', 200, 50);

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
  `visit_id` bigint(21) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lab_tests`
--

INSERT INTO `lab_tests` (`test_id`, `patient_id`, `test_done`, `test_result`, `staff_id`, `visit_id`, `image`) VALUES
(4, '12354', '1', NULL, 0, 1, NULL),
(5, '12354', '1', NULL, 0, 1, NULL),
(6, '12354', '1', NULL, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_names`
--

CREATE TABLE IF NOT EXISTS `lab_test_names` (
  `test_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(100) NOT NULL,
  `test_cost` int(100) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lab_test_names`
--

INSERT INTO `lab_test_names` (`test_id`, `test_name`, `test_cost`) VALUES
(1, 'malaria', 200);

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
  `visit_id` bigint(21) NOT NULL,
  `staff_id` bigint(21) NOT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `medical_profile`
--

INSERT INTO `medical_profile` (`profile_id`, `patient_id`, `present_complaint`, `complaint_history`, `other_illness`, `surgical_history`, `blood_pressure`, `visit_id`, `staff_id`) VALUES
(1, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(2, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(3, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(4, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(5, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(6, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(7, '12354', '0', '0', NULL, NULL, NULL, 1, 2),
(8, '12354', 'gff', 'fggff', NULL, NULL, NULL, 1, 2),
(9, '12354', 'gff', 'fggff', NULL, NULL, NULL, 1, 2),
(10, 'kkkkkk', 'Watch as Local Motors fabricates an entire car (minus the engine) with a 3D printer', 'Watch as Local Motors fabricates an entire car (minus the engine) with a 3D printer', NULL, NULL, NULL, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE IF NOT EXISTS `patient_profile` (
  `patient_id` varchar(60) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `insured` varchar(20) DEFAULT NULL,
  `nhif` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `dob` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`patient_id`, `name`, `sex`, `phone`, `email`, `insured`, `nhif`, `address`, `dob`) VALUES
('12354', 'bildad namawa', 'male', '0726430386', 'bildadnamawa@gmail.com', 'no', '2154854', '1925 kakamega', '1992-08-29'),
('kkkkkk', 'biko kiko', 'male', '07254368569', 'hijk@gkgj.com', 'yes', '2541254', '6000,kiambu', '1995-05-02'),
('pppppp', 'biko kiko', 'male', '07254368569', 'hijk@gkgj.com', 'yes', '2541254', '6000,kiambu', '1995-05-02');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `prescription`, `patient_id`, `staff_id`, `visit_id`) VALUES
(8, '1', '12354', 2, 1),
(9, '1', '12354', 2, 1),
(10, '1', '12354', 2, 1);

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
  `current_stage` bigint(21) DEFAULT NULL,
  `visit_status` int(2) DEFAULT NULL,
  `end_visit` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`visit_id`, `start_date`, `patient_id`, `current_stage`, `visit_status`, `end_visit`) VALUES
(1, '2015-03-01 09:44:06', '12354', 1, 1, NULL),
(2, '2015-03-10 11:10:34', 'kkkkkk', 2, 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;