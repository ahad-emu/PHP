-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 05:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student_Result`
--

CREATE TABLE `student_result` (
  `Name` varchar(30) NOT NULL,
  `Department_Name` varchar(30) NOT NULL,
  `Roll` int(10) NOT NULL,
  `Semester` varchar(30) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `1st_Subject` varchar(30) NOT NULL,
  `2nd_Subject` varchar(30) NOT NULL,
  `3rd_Subject` varchar(30) NOT NULL,
  `4th_Subject` varchar(30) NOT NULL,
  `5th_Subject` varchar(30) NOT NULL,
  `6th_Subject` varchar(30) NOT NULL,
  `Total_CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student_Result`
--

INSERT INTO `Student_Result` (`Name`, `Department_Name`, `Roll`, `Semester`, `Session`, `1st_Subject`, `2nd_Subject`, `3rd_Subject`, `4th_Subject`, `5th_Subject`, `6th_Subject`, `Total_CGPA`) VALUES
('Ahad', 'CSE', 48, '1st', '2014-15', 'CSE-111(77)', 'CSE-112(88)', 'CSE-113(76)', 'CSE-114(75)', 'CSE-115(87)', 'CSE-116(90)', 4),
('Ahad', 'CSE', 48, '3rd', '2014-15', 'CSE-311(77)', 'CSE-312(67)', 'CSE-313(88)', 'CSE-314(67)', 'CSE-315(75)', 'CSE-316(67)', 3.5),
('Jobayer', 'CSE', 24, '1st', '2014-15', 'CSE-111(55)', 'CSE-112(66)', 'CSE-113(77)', 'CSE-114(88)', 'CSE-115(87)', 'CSE-116(75)', 3.5),
('Efti', 'CSE', 21, '1st', '2014-15', 'CSE-111(67)', 'CSE-112(76)', 'CSE-113(75)', 'CSE-114(68)', 'CSE-115(77)', 'CSE-116(73)', 3.5),
('Prithul', 'CSE', 28, '1st', '2014-15', 'CSE-311(66)', 'CSE-312(77)', 'CSE-313(76)', 'CSE-314(87)', 'CSE-315(75)', 'CSE-316(61)', 3.5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
