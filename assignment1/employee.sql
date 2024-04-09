-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2024 at 09:41 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `http5225`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EEID` varchar(1024) DEFAULT NULL,
  `FullName` varchar(1024) DEFAULT NULL,
  `JobTitle` varchar(1024) DEFAULT NULL,
  `Department` varchar(1024) DEFAULT NULL,
  `BusinessUnit` varchar(1024) DEFAULT NULL,
  `Gender` varchar(1024) DEFAULT NULL,
  `Ethnicity` varchar(1024) DEFAULT NULL,
  `Age` bigint(20) DEFAULT NULL,
  `HireDate` varchar(1024) DEFAULT NULL,
  `AnnualSalary` varchar(1024) DEFAULT NULL,
  `Bonus` varchar(1024) DEFAULT NULL,
  `Country` varchar(1024) DEFAULT NULL,
  `City` varchar(1024) DEFAULT NULL,
  `ExitDate` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EEID`, `FullName`, `JobTitle`, `Department`, `BusinessUnit`, `Gender`, `Ethnicity`, `Age`, `HireDate`, `AnnualSalary`, `Bonus`, `Country`, `City`, `ExitDate`) VALUES
('E02387', 'Emily Davis', 'Sr. Manger', 'IT', 'Research & Development', 'Female', 'Black', 55, '4/8/2016', '$141,604', '15%', 'United States', 'Seattle', '10/16/2021'),
('E04105', 'Theodore Dinh', 'Technical Architect', 'IT', 'Manufacturing', 'Male', 'Asian', 59, '11/29/1997', '$99,975', '0%', 'China', 'Chongqing', NULL),
('E02572', 'Luna Sanders', 'Director', 'Finance', 'Speciality Products', 'Female', 'Caucasian', 50, '10/26/2006', '$163,099', '20%', 'United States', 'Chicago', NULL),
('E02832', 'Penelope Jordan', 'Computer Systems Manager', 'IT', 'Manufacturing', 'Female', 'Caucasian', 26, '9/27/2019', '$84,913', '7%', 'United States', 'Chicago', NULL),
('E01639', 'Austin Vo', 'Sr. Analyst', 'Finance', 'Manufacturing', 'Male', 'Asian', 55, '11/20/1995', '$95,409', '0%', 'United States', 'Phoenix', NULL),
('E00644', 'Joshua Gupta', 'Account Representative', 'Sales', 'Corporate', 'Male', 'Asian', 57, '1/24/2017', '$50,994', '0%', 'China', 'Chongqing', NULL),
('E01550', 'Ruby Barnes', 'Manager', 'IT', 'Corporate', 'Female', 'Caucasian', 27, '7/1/2020', '$119,746', '10%', 'United States', 'Phoenix', NULL),
('E04332', 'Luke Martin', 'Analyst', 'Finance', 'Manufacturing', 'Male', 'Black', 25, '5/16/2020', '$41,336', '0%', 'United States', 'Miami', '5/20/2021'),
('E04533', 'Easton Bailey', 'Manager', 'Accounting', 'Manufacturing', 'Male', 'Caucasian', 29, '1/25/2019', '$113,527', '6%', 'United States', 'Austin', NULL),
('E03838', 'Madeline Walker', 'Sr. Analyst', 'Finance', 'Speciality Products', 'Female', 'Caucasian', 34, '6/13/2018', '$77,203', '0%', 'United States', 'Chicago', NULL),
('E00591', 'Savannah Ali', 'Sr. Manger', 'Human Resources', 'Manufacturing', 'Female', 'Asian', 36, '2/11/2009', '$157,333', '15%', 'United States', 'Miami', NULL),
('E03344', 'Camila Rogers', 'Controls Engineer', 'Engineering', 'Speciality Products', 'Female', 'Caucasian', 27, '10/21/2021', '$109,851', '0%', 'United States', 'Seattle', NULL),
('E00530', 'Eli Jones', 'Manager', 'Human Resources', 'Manufacturing', 'Male', 'Caucasian', 59, '3/14/1999', '$105,086', '9%', 'United States', 'Austin', NULL),
('E04239', 'Everleigh Ng', 'Sr. Manger', 'Finance', 'Research & Development', 'Female', 'Asian', 51, '6/10/2021', '$146,742', '10%', 'China', 'Shanghai', NULL),
('E03496', 'Robert Yang', 'Sr. Analyst', 'Accounting', 'Speciality Products', 'Male', 'Asian', 31, '11/4/2017', '$97,078', '0%', 'United States', 'Austin', '3/9/2020'),
('E00549', 'Isabella Xi', 'Vice President', 'Marketing', 'Research & Development', 'Female', 'Asian', 41, '3/13/2013', '$249,270', '30%', 'United States', 'Seattle', NULL),
('E00163', 'Bella Powell', 'Director', 'Finance', 'Research & Development', 'Female', 'Black', 65, '3/4/2002', '$175,837', '20%', 'United States', 'Phoenix', NULL),
('E00884', 'Camila Silva', 'Sr. Manger', 'Marketing', 'Speciality Products', 'Female', 'Latino', 64, '12/1/2003', '$154,828', '13%', 'United States', 'Seattle', NULL),
('E04116', 'David Barnes', 'Director', 'IT', 'Corporate', 'Male', 'Caucasian', 64, '11/3/2013', '$186,503', '24%', 'United States', 'Columbus', NULL),
('E04625', 'Adam Dang', 'Director', 'Sales', 'Research & Development', 'Male', 'Asian', 45, '7/9/2002', '$166,331', '18%', 'China', 'Chongqing', NULL),
('E03680', 'Elias Alvarado', 'Sr. Manger', 'IT', 'Manufacturing', 'Male', 'Latino', 56, '1/9/2012', '$146,140', '10%', 'Brazil', 'Manaus', NULL),
('E04732', 'Eva Rivera', 'Director', 'Sales', 'Manufacturing', 'Female', 'Latino', 36, '4/2/2021', '$151,703', '21%', 'United States', 'Miami', NULL),
('E03484', 'Logan Rivera', 'Director', 'IT', 'Research & Development', 'Male', 'Latino', 59, '5/24/2002', '$172,787', '28%', 'Brazil', 'Rio de Janerio', NULL),
('E00671', 'Leonardo Dixon', 'Analyst', 'Sales', 'Speciality Products', 'Male', 'Caucasian', 37, '9/5/2019', '$49,998', '0%', 'United States', 'Seattle', NULL),
('E02071', 'Mateo Her', 'Vice President', 'Sales', 'Speciality Products', 'Male', 'Asian', 44, '3/2/2014', '$207,172', '31%', 'China', 'Chongqing', NULL),
('E02206', 'Jose Henderson', 'Director', 'Human Resources', 'Speciality Products', 'Male', 'Black', 41, '4/17/2015', '$152,239', '23%', 'United States', 'Columbus', NULL),
('E04545', 'Abigail Mejia', 'Quality Engineer', 'Engineering', 'Corporate', 'Female', 'Latino', 56, '2/5/2005', '$98,581', '0%', 'Brazil', 'Rio de Janerio', NULL),
('E00154', 'Wyatt Chin', 'Vice President', 'Engineering', 'Speciality Products', 'Male', 'Asian', 43, '6/7/2004', '$246,231', '31%', 'United States', 'Seattle', NULL),
('E03343', 'Carson Lu', 'Engineering Manager', 'Engineering', 'Speciality Products', 'Male', 'Asian', 64, '12/4/1996', '$99,354', '12%', 'China', 'Beijing', NULL),
('E00304', 'Dylan Choi', 'Vice President', 'IT', 'Corporate', 'Male', 'Asian', 63, '5/11/2012', '$231,141', '34%', 'China', 'Beijing', NULL),
('E02594', 'Ezekiel Kumar', 'IT Coordinator', 'IT', 'Research & Development', 'Male', 'Asian', 28, '6/25/2017', '$54,775', '0%', 'United States', 'Columbus', NULL),
('E00402', 'Dominic Guzman', 'Analyst', 'Finance', 'Manufacturing', 'Male', 'Latino', 65, '5/16/2004', '$55,499', '0%', 'Brazil', 'Manaus', NULL),
('E01994', 'Angel Powell', 'Analyst II', 'Sales', 'Research & Development', 'Male', 'Caucasian', 61, '7/11/2008', '$66,521', '0%', 'United States', 'Seattle', NULL),
('E03549', 'Mateo Vu', 'Account Representative', 'Sales', 'Speciality Products', 'Male', 'Asian', 30, '9/29/2016', '$59,100', '0%', 'China', 'Chongqing', NULL),
('E03247', 'Caroline Jenkins', 'Analyst', 'Finance', 'Research & Development', 'Female', 'Caucasian', 27, '5/6/2018', '$49,011', '0%', 'United States', 'Chicago', NULL),
('E02074', 'Nora Brown', 'Enterprise Architect', 'IT', 'Manufacturing', 'Female', 'Caucasian', 32, '2/11/2014', '$99,575', '0%', 'United States', 'Austin', NULL),
('E04152', 'Adeline Huang', 'Controls Engineer', 'Engineering', 'Manufacturing', 'Female', 'Asian', 34, '12/16/2019', '$99,989', '0%', 'China', 'Chengdu', NULL),
('E01628', 'Jackson Perry', 'Vice President', 'Marketing', 'Research & Development', 'Male', 'Caucasian', 27, '10/20/2019', '$256,420', '30%', 'United States', 'Phoenix', NULL),
('E04285', 'Riley Padilla', 'Technical Architect', 'IT', 'Manufacturing', 'Female', 'Latino', 35, '5/15/2013', '$78,940', '0%', 'United States', 'Miami', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
