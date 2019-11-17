-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 05:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` varchar(30) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `join_date` date NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `employee_name`, `designation`, `join_date`, `address`) VALUES
('1001', 'Ahad Emu', 'CEO', '2018-11-30', '40 No. Mokroba Road, Nagar Khanpur, Narayanganj'),
('1002', 'Syeed MD. Jobayer', 'Manager', '2018-03-03', 'C/O Ittadi store, post-office road, Home #46 C-block,opposite of poshu hospital, Dapa-Idrakpur, Fatu'),
('1003', 'Farjana Laboni', 'Marketing Manager', '2019-05-11', '203 No. Mugda Para, Manikganj'),
('1004', 'Badhon Paul', 'HR Manager', '2019-11-03', '303 Raysha Bazar, Puran Dhaka, Dhaka'),
('1005', 'Nabila Prithul', 'Assistant Manager', '2019-07-07', 'Road No. 403, House No. 503, Mirpur-10, Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
