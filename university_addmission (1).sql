-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 09:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_addmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(20) NOT NULL,
  `Id` int(10) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `Bank_Id` int(20) NOT NULL,
  `Bank_Name` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`Bank_Id`, `Bank_Name`, `Branch`, `Address`) VALUES
(745, 'safas', 'agfa', 'fffffffff'),
(0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Id` int(5) NOT NULL,
  `Course_Title` varchar(20) NOT NULL,
  `Credit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Id`, `Course_Title`, `Credit`) VALUES
(0, '', 0),
(0, '46', 0),
(46, 'ggg', 444),
(0, '', 0),
(0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Name` varchar(20) NOT NULL,
  `Credit` int(3) NOT NULL,
  `Credit_Fee` int(4) NOT NULL,
  `Tuition_Fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_Name`, `Credit`, `Credit_Fee`, `Tuition_Fee`) VALUES
('afga', 444, 4444, 555),
('afga', 444, 4444, 555),
('', 0, 0, 0),
('', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Email`, `Password`) VALUES
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345'),
('ggg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `paying_details`
--

CREATE TABLE `paying_details` (
  `Date` date NOT NULL,
  `Amount` float NOT NULL,
  `Id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `B_n` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paying_details`
--

INSERT INTO `paying_details` (`Date`, `Amount`, `Id`, `s_id`, `B_n`) VALUES
('1997-12-12', 1326350000, 464131, 2147483647, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `paying_details_from_bank`
--

CREATE TABLE `paying_details_from_bank` (
  `Date` date NOT NULL,
  `Amount` double NOT NULL,
  `Id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `B_n` varchar(100) NOT NULL,
  `B_B_n` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paying_details_from_bank`
--

INSERT INTO `paying_details_from_bank` (`Date`, `Amount`, `Id`, `s_id`, `B_n`, `B_B_n`) VALUES
('1997-12-12', 1654646, 1654663, 416541, 'b', 'b'),
('0000-00-00', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requirment`
--

CREATE TABLE `requirment` (
  `Id` int(20) NOT NULL,
  `S_S_C_gpa` float DEFAULT NULL,
  `H_S_C_gpa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirment`
--

INSERT INTO `requirment` (`Id`, `S_S_C_gpa`, `H_S_C_gpa`) VALUES
(0, 4.5, 4.5),
(0, 4.5, 4.5),
(0, 0, 0),
(0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(13) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `Mother_Name` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `National_Id` int(20) NOT NULL,
  `Mobile_No` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Gender`, `Address`, `Religion`, `Nationality`, `National_Id`, `Mobile_No`, `Email`) VALUES
(0, 's', 'f', 'M', '0000-00-00', 'Male', 's', 'f', 'v', 4646, 0, 'fffff'),
(0, 's', 'f', 'M', '1997-12-12', 'Male', 's', 'f', 'v', 4646, 0, 'fffff'),
(0, 's', 'f', 'm', '1997-12-12', 'Male', 'fffffffff', 'hhhhhhhh', 'v', 2147483647, 21654646, 'fffff'),
(0, '', '', '', '0000-00-00', 'Male', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `university_administrator`
--

CREATE TABLE `university_administrator` (
  `Name` varchar(20) NOT NULL,
  `Father_Name` varchar(20) NOT NULL,
  `Mother_Name` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `National_Id` int(30) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pass` varchar(15) NOT NULL,
  `Pass1` varchar(20) NOT NULL,
  `Mobile` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university_administrator`
--

INSERT INTO `university_administrator` (`Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Gender`, `National_Id`, `Nationality`, `Email`, `Pass`, `Pass1`, `Mobile`) VALUES
('s', 'f', 'm', '1997-12-12', 'Male', 16546, 'v', 'ggg', '12345', '12345', 0),
('', '', '', '0000-00-00', 'Male', 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `university_details`
--

CREATE TABLE `university_details` (
  `Name` varchar(20) NOT NULL,
  `Code` int(10) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university_details`
--

INSERT INTO `university_details` (`Name`, `Code`, `Address`) VALUES
('s', 464, 'fffffffff'),
('s', 464, 'fffffffff'),
('', 0, ''),
('', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
