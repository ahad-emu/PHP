-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 06:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `cName` varchar(30) NOT NULL,
  `candidate_name` varchar(30) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `religion` varchar(30) NOT NULL,
  `present` varchar(100) NOT NULL,
  `parmanent` varchar(100) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`cName`, `candidate_name`, `fName`, `date`, `religion`, `present`, `parmanent`, `nationality`, `mobile_no`, `email`) VALUES
('CSE', 'Ahad Emu', 'Md. Aminul Islam', '1995-03-11', 'Islam', '40 No. Mokroba Road, Nagar Khanpur, Narayanganj', '40 No. Mokroba Road, Nagar Khanpur, Narayanganj', 'Bangladeshi', '019******63', 'ahademu99@gmail.com'),
('CSE', 'Syeed MD. Jobayer', 'Syeed', '1994-04-14', 'Islam', 'C/O Ittadi store, post-office road, Home #46 C-block,opposite of poshu hospital, Dapa-Idrakpur, Fatu', 'C/O Ittadi store, post-office road, Home #46 C-block,opposite of poshu hospital, Dapa-Idrakpur, Fatu', 'Bangladeshi', '015******99', 'syeedjobayer@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
