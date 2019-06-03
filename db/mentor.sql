-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2019 at 01:16 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mentor`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `tcname` varchar(50) NOT NULL,
  `trainername` varchar(50) NOT NULL,
  `seats` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `hours` varchar(50) NOT NULL,
  `chname` varchar(50) NOT NULL,
  `trainerid` varchar(50) NOT NULL,
  `prereservation` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`tcname`, `trainername`, `seats`, `days`, `hours`, `chname`, `trainerid`, `prereservation`, `availability`, `id`) VALUES
('Crossfit', 'dddddddddddf', '4', 'Friday', '17:00 - 18:00', 'Class B', '32', '', '0', 7),
('Yoga', 'dddddddddddf', '8', 'Wednesday', '10:00 - 11:00', 'Class B', '32', '', '8', 8),
('Yoga', 'dddddddddddf', '8', 'Sunday', '17:00 - 18:00', 'Class B', '32', '', '8', 9),
('Crossfit', 'dddddddddddf', '8', 'Tuesday', '17:00 - 18:00', 'Class B', '32', '', '6', 10),
('Yoga', 'dddddddddddf', '8', 'Thursday', '17:30 - 18:30', 'Class B', '32', '', '8', 11);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `weight` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `muscleStrength` varchar(50) DEFAULT NULL,
  `endurance` varchar(50) DEFAULT NULL,
  `muscle_gain` varchar(50) DEFAULT NULL,
  `body_tone` varchar(50) DEFAULT NULL,
  `weight_loss` varchar(50) DEFAULT NULL,
  `physical_performance` varchar(50) DEFAULT NULL,
  `classes` varchar(50) DEFAULT NULL,
  `fat_percentage` varchar(50) DEFAULT NULL,
  `muscle_percentage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`email`, `password`, `gender`, `id`, `weight`, `height`, `age`, `muscleStrength`, `endurance`, `muscle_gain`, `body_tone`, `weight_loss`, `physical_performance`, `classes`, `fat_percentage`, `muscle_percentage`) VALUES
('andrewceid@gmail.com', 'anorthosis_1911', 'Male', 51, '34', '1.25', '3', '2', '1', '0', NULL, NULL, NULL, NULL, '777', '777'),
('sdfgsds@wefrew.com', 'wcfnwek3289rhwnefd3w9', 'Male', 53, '1.1', '1.89', '40', '1', '1', NULL, NULL, NULL, NULL, NULL, '4', '4'),
('aantoniouu@gmail.com', 'kbkbhb9y7y78679', 'Male', 54, '1.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', '4'),
('kirou@imexontros.com', 'anoanoano_1911', 'Male', 55, '80', '1.67', '28', '1', '1', NULL, NULL, NULL, NULL, NULL, '4', '4'),
('andrewceidii@gmail.com', 'anorthosis_1911', 'Male', 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('andrewceidl@gmail.com', 'anorthosis_1911', 'Male', 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('andrewceidppp@gmail.com', 'anorthosis_1911', 'Male', 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('andrewceid@lgmail.com', 'anorthosis_1911', 'Male', 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('andrewceidkbk@gmail.com', 'anorthosis_1911', 'Male', 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('andrewc@gmail.com', 'anorthosis_1911', 'Male', 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('andrewid@gmail.com', 'anorthosis_1911', 'Male', 62, '30', '1.25', '3', '1', '1', NULL, NULL, NULL, NULL, NULL, '777', '777');

-- --------------------------------------------------------

--
-- Table structure for table `customersex`
--

CREATE TABLE IF NOT EXISTS `customersex` (
  `exercise` varchar(50) NOT NULL,
  `idEx` int(3) NOT NULL,
  `kg` int(3) NOT NULL,
  `visits` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customersex`
--

INSERT INTO `customersex` (`exercise`, `idEx`, `kg`, `visits`, `id`) VALUES
('', 2, 400, '149', 51),
('', 1, 530, '149', 51),
('', 3, 345, '149', 51),
('', 4, 365, '149', 51),
('', 10, 0, '', 0),
('', 11, 0, '', 0),
('', 12, 0, '', 0),
('', 10, 0, '', 0),
('', 11, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE IF NOT EXISTS `exercise` (
  `pathImg` varchar(100) NOT NULL DEFAULT '',
  `levelDif` varchar(50) NOT NULL,
  `exercise` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `exId` int(11) NOT NULL AUTO_INCREMENT,
  KEY `pathImg` (`exId`,`pathImg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`pathImg`, `levelDif`, `exercise`, `description`, `exId`) VALUES
('back/1.jpg', '1', 'Back', 'easy exercise for back', 1),
('back/2.jpg', '1', 'Back', 'easy exercise for back', 2),
('back/3.jpg', '1', 'Back', 'easy exercise for back', 3),
('back/4.jpg', '1', 'Back', 'easy exercise for back', 4),
('back/5.jpg', '2', 'Back', 'easy exercise for back', 5),
('back/6.jpg', '2', 'Back', 'easy exercise for back', 6),
('back/7.jpg', '2', 'Back', 'easy exercise for back', 7),
('back/8.jpg', '2', 'Back', 'easy exercise for back', 8),
('back/9.jpg', '3', 'Back', 'difficult exercise for back', 9);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE IF NOT EXISTS `foods` (
  `mealName` varchar(50) NOT NULL,
  `proteins` varchar(50) NOT NULL,
  `fat` int(5) NOT NULL,
  `carbohydrates` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`mealName`, `proteins`, `fat`, `carbohydrates`, `id`) VALUES
('chiken (100 gr)', '10', 2, '4', 5),
('Tuna', '20', 4, '4', 6),
('Salmon', '15', 1, '1', 7),
('Rice', '2', 2, '10', 8),
('Macaroni', '6', 15, '20', 9),
('Potatoes', '10', 4, '20', 11),
('pork', '6', 1, '4', 13),
('koupepia(300gr)', '10', 4, '10', 14);

-- --------------------------------------------------------

--
-- Table structure for table `mealsplan`
--

CREATE TABLE IF NOT EXISTS `mealsplan` (
  `breakfast` varchar(50) NOT NULL,
  `snack1` varchar(50) NOT NULL,
  `lunch` varchar(50) NOT NULL,
  `snack2` varchar(50) NOT NULL,
  `dinner` varchar(50) NOT NULL,
  `snack3` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `totalprotein` int(5) DEFAULT NULL,
  `totalfat` int(5) DEFAULT NULL,
  `totalcarbohydrates` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mealsplan`
--

INSERT INTO `mealsplan` (`breakfast`, `snack1`, `lunch`, `snack2`, `dinner`, `snack3`, `id`, `totalprotein`, `totalfat`, `totalcarbohydrates`) VALUES
('Tuna', 'Salmon', 'Rice', 'Potatoes', 'Tuna', 'Tuna', 16, 87, 19, 43);

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE IF NOT EXISTS `nutrition` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`email`, `password`, `id`) VALUES
('mariosceid@gmail.com', '1357aefyj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `programm`
--

CREATE TABLE IF NOT EXISTS `programm` (
  `programmname` varchar(50) NOT NULL,
  `trainername` varchar(50) NOT NULL,
  `special` tinyint(1) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programm`
--


-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`email`, `password`, `id`) VALUES
('giorosceid@gmail.com', '12345asdf', 1);
