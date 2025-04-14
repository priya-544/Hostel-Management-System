-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2023 at 04:02 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'hostel@123');

-- --------------------------------------------------------
--
-- Table structure for table `entry`
--

DROP TABLE IF EXISTS `entry`;
CREATE TABLE IF NOT EXISTS `entry` (
  `RoomNo` int(10) NOT NULL AUTO_INCREMENT,
  `Date` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  PRIMARY KEY (`RoomNo`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`RoomNo`, `Date`, `Time`, `Name`, `Place`) VALUES
(112, '2023-12-14 11:30:02' , 'Priya Tare', 'College');


-- --------------------------------------------------------

--
-- Table structure for table `available_rooms`
--

DROP TABLE IF EXISTS `available_rooms`;
CREATE TABLE IF NOT EXISTS `available_rooms` (
  `room_no` int(10) NOT NULL,
  `floor` varchar(10) NOT NULL,
  PRIMARY KEY (`room_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available_rooms`
--

INSERT INTO `available_rooms` (`room_no`, `floor`) VALUES
(1, 'Ground'),
(2, 'Ground'),
(3, 'Ground'),
(4, 'Ground'),
(5, 'Ground'),
(6, 'Ground'),
(7, 'Ground'),
(8, 'Ground'),
(9, 'Ground'),
(10, 'Ground'),
(11, 'Ground'),
(12, 'Ground'),
(13, 'Ground'),
(14, 'Ground'),
(15, 'Ground'),
(16, 'Ground'),
(17, 'Ground'),
(18, 'Ground'),
(19, 'Ground'),
(20, 'Ground'),
(101, 'First'),(102, 'First'),(103, 'First'),(104, 'First'),(105, 'First'),(106, 'First'),(107, 'First'),(108, 'First'),(109, 'First'),(110, 'First'),
(111, 'First'),(112, 'First'),(113, 'First'),(114, 'First'),(115, 'First'),(116, 'First'),(117, 'First'),(118, 'First'),(119, 'First'),(120, 'First'),
(201, 'Second'),(202, 'Second'),(203, 'Second'),(204, 'Second'),(205, 'Second'),(206, 'Second'),(207, 'Second'),(208, 'Second'),
(209, 'Second'),(210, 'Second'),(211, 'Second'),(212, 'Second'),(213, 'Second'),(214, 'Second'),(215, 'Second'),(216, 'Second'),
(217, 'Second'),(218, 'Second'),(219, 'Second'),(220, 'Second')

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` varchar(20) NOT NULL,
  `room` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Date`, `room`, `name`, `type`, `description`) VALUES
(27, '2023-01-02', 110, 'Ankita Palkar', 'Water Problem', 'Tap is damage.');

-- --------------------------------------------------------

--
-- Table structure for table `fullly_packed`
--

DROP TABLE IF EXISTS `fullly_packed`;
CREATE TABLE IF NOT EXISTS `fullly_packed` (
  `room_no` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullly_packed`
--

INSERT INTO `fullly_packed` (`room_no`) VALUES
(12),
(211);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_room`
--

DROP TABLE IF EXISTS `hostel_room`;
CREATE TABLE IF NOT EXISTS `hostel_room` (
  `room_no` int(20) NOT NULL,
  `floor` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_room`
--

INSERT INTO `hostel_room` (`room_no`, `floor`) VALUES
(1, 'Ground'),
(2, 'Ground'),
(3, 'Ground'),
(4, 'Ground'),
(5, 'Ground'),
(6, 'Ground'),
(7, 'Ground'),
(8, 'Ground'),
(9, 'Ground'),
(10, 'Ground'),
(11, 'Ground'),
(12, 'Ground'),
(13, 'Ground'),
(14, 'Ground'),
(15, 'Ground'),
(16, 'Ground'),
(17, 'Ground'),
(18, 'Ground'),
(19, 'Ground'),
(20, 'Ground'),
(101, 'First'),(102, 'First'),(103, 'First'),(104, 'First'),(105, 'First'),(106, 'First'),(107, 'First'),(108, 'First'),(109, 'First'),(110, 'First'),
(111, 'First'),(112, 'First'),(113, 'First'),(114, 'First'),(115, 'First'),(116, 'First'),(117, 'First'),(118, 'First'),(119, 'First'),(120, 'First'),
(201, 'Second'),(202, 'Second'),(203, 'Second'),(204, 'Second'),(205, 'Second'),(206, 'Second'),(207, 'Second'),(208, 'Second'),
(209, 'Second'),(210, 'Second'),(211, 'Second'),(212, 'Second'),(213, 'Second'),(214, 'Second'),(215, 'Second'),(216, 'Second'),
(217, 'Second'),(218, 'Second'),(219, 'Second'),(220, 'Second')

-- --------------------------------------------------------

--
-- Table structure for table `leaved`
--

DROP TABLE IF EXISTS `leaved`;
CREATE TABLE IF NOT EXISTS `leaved` (
  `room` int(10) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `department` varchar(40) NOT NULL,
  `year` varchar(30) NOT NULL,
  `prn` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaved`
--

INSERT INTO `leaved` (`room`, `f_name`, `l_name`, `department`, `year`, `prn`) VALUES
(112, 'Priya', 'Tare', 'comp', 'Third', 2130331245014),
(110, 'Aparna', 'Sawant', 'comp', 'first', 2130331245038);

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

DROP TABLE IF EXISTS `pending`;
CREATE TABLE IF NOT EXISTS `pending` (
  `id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `room` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `date`, `room`, `name`, `type`, `description`) VALUES
(1, '2023-12-3', 113, 'Kushal Dhore', 'maintaince', 'passage is not clean.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(100) NOT NULL,
  `prn_no` bigint(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `prn_no`, `department`, `year`, `address`, `mobile_no`, `email_id`, `username`, `password`, `date`, `time`) VALUES
('Priya', 2130331245014, 'Computer', '3rd', 'Alibag', 8390875329, 'priyatare1354@gmail.com', 'priya544', 'Priya544', '2023-12-04', '12:41 PM'),
('Aparna ', 2130331245038, 'Computer', 'third', 'Thane', 9511780631, 'aparna@gmail.com', 'aparna_21', 'Aparna@21', '2023-12-02', '10:34 PM'),

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(10) NOT NULL,
  `room` int(10) NOT NULL,
  `reply` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `room`, `reply`, `date`) VALUES
(1, 110, 'Ok, we will solve it.', '2023-01-02'),
(2, 113, 'solved', '2022-12-30'),


-- --------------------------------------------------------

--
-- Table structure for table `room_registration`
--

DROP TABLE IF EXISTS `room_registration`;
CREATE TABLE IF NOT EXISTS `room_registration` (
  `room_no` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `prn_no` bigint(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `permanent_add` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `parent_mobile` bigint(10) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_registration`
--

INSERT INTO `room_registration` (`room_no`, `first_name`, `middle_name`, `last_name`, `prn_no`, `department`, `year`, `semester`, `permanent_add`, `city`, `mobile_no`, `email`, `parent_name`, `parent_mobile`) VALUES
(110, 'Aparna', 'Santosh', 'Sawant', 2130331245038, 'comp', 'Third', 'fifth', 'Bhiwandi', 'Thane', 9511780631, 'aparna@gmail.com', 'Manisha Sawant', 9865452585),
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
