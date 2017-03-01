-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 05:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uteval`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestud`
--

CREATE TABLE IF NOT EXISTS `bestud` (
  `name` varchar(50) NOT NULL,
  `roll` varchar(9) NOT NULL,
  `sr` int(3) NOT NULL,
  `class` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oopmdetailst1`
--

CREATE TABLE IF NOT EXISTS `oopmdetailst1` (
  `qno` varchar(7) NOT NULL,
  `cot1` varchar(5) NOT NULL DEFAULT '0',
  `mt1` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oopmdetailst1`
--

INSERT INTO `oopmdetailst1` (`qno`, `cot1`, `mt1`) VALUES
('Q 1. A.', 'CO1', 0),
('Q 1. B.', 'CO1', 0),
('Q 2. A.', 'Co2', 0),
('Q 2. B.', '0', 0),
('Q 3. A.', '0', 0),
('Q 3. B.', '0', 0),
('Q 1. A.', 'CO1', 0),
('Q 1. B.', 'CO1', 0),
('Q 2. A.', 'Co2', 0),
('Q 2. B.', '0', 0),
('Q 3. A.', '0', 0),
('Q 3. B.', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oopmdetailst2`
--

CREATE TABLE IF NOT EXISTS `oopmdetailst2` (
  `qno` varchar(8) NOT NULL,
  `cot1` varchar(4) NOT NULL DEFAULT '0',
  `mt1` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oopmdetailst2`
--

INSERT INTO `oopmdetailst2` (`qno`, `cot1`, `mt1`) VALUES
('Q 1. A.', 'CO2', 0),
('Q 1. B.', '0', 0),
('Q 2. A.', '0', 0),
('Q 2. B. ', '0', 0),
('Q 3. A.', '0', 0),
('Q 3. B.', '0', 0),
('Q 1. A.', 'CO2', 0),
('Q 1. B.', '0', 0),
('Q 2. A.', '0', 0),
('Q 2. B. ', '0', 0),
('Q 3. A.', '0', 0),
('Q 3. B.', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `semarks`
--

CREATE TABLE IF NOT EXISTS `semarks` (
  `roll` varchar(9) NOT NULL,
  `oopmt1` int(2) NOT NULL DEFAULT '0',
  `oopmt2` int(2) NOT NULL DEFAULT '0',
  `oopmavg` int(2) NOT NULL DEFAULT '0',
  `dst1` int(2) NOT NULL DEFAULT '0',
  `dst2` int(2) NOT NULL DEFAULT '0',
  `dsavg` int(2) NOT NULL DEFAULT '0',
  `dist1` int(2) NOT NULL DEFAULT '0',
  `dist2` int(2) NOT NULL DEFAULT '0',
  `disavg` int(2) NOT NULL DEFAULT '0',
  `m3t1` int(2) NOT NULL DEFAULT '0',
  `m3t2` int(2) NOT NULL DEFAULT '0',
  `m3avg` int(2) NOT NULL DEFAULT '0',
  `dldat1` int(2) NOT NULL DEFAULT '0',
  `dldat2` int(2) NOT NULL DEFAULT '0',
  `dldaavg` int(2) NOT NULL DEFAULT '0',
  `eccft1` int(2) NOT NULL DEFAULT '0',
  `eccft2` int(2) NOT NULL DEFAULT '0',
  `eccfavg` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semarks`
--

INSERT INTO `semarks` (`roll`, `oopmt1`, `oopmt2`, `oopmavg`, `dst1`, `dst2`, `dsavg`, `dist1`, `dist2`, `disavg`, `m3t1`, `m3t2`, `m3avg`, `dldat1`, `dldat2`, `dldaavg`, `eccft1`, `eccft2`, `eccfavg`) VALUES
('14CE1011', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15CE5001', 0, 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15CE5009', 10, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15CE5011', 12, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15CE5013', 5, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('15CE5016', 10, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sestud`
--

CREATE TABLE IF NOT EXISTS `sestud` (
  `name` varchar(50) NOT NULL,
  `roll` varchar(9) NOT NULL,
  `sr` int(2) NOT NULL,
  `class` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sestud`
--

INSERT INTO `sestud` (`name`, `roll`, `sr`, `class`, `batch`) VALUES
('Abhishek Saha', '14CE1011', 17, 'SEB', 'B2'),
('patil viany', '15CE5001', 14, 'SEA', 'A3'),
('Nabil Zikar Memon', '15CE5009', 3, 'SEA', 'A3'),
('mansi bhaldare', '15CE5011', 4, 'SEA', 'A3'),
('Juilie Bhoir', '15CE5013', 6, 'SEA', 'A1'),
('Sweta Saindane', '15CE5016', 16, 'SEA', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE IF NOT EXISTS `sub` (
  `se1` varchar(5) NOT NULL,
  `se` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`se1`, `se`) VALUES
('oopm', 'Object Oriented Programming and Methodology'),
('ds', 'Data Structures'),
('dlda', 'Digital Logic and Design Analysis'),
('dis', 'Discrete Structures'),
('eccf', 'Electronic Circuit and Communication Fundamentals'),
('m3', 'Applied Mathematics 3');

-- --------------------------------------------------------

--
-- Table structure for table `testud`
--

CREATE TABLE IF NOT EXISTS `testud` (
  `name` varchar(50) NOT NULL,
  `roll` varchar(9) NOT NULL,
  `sr` int(3) NOT NULL,
  `class` varchar(3) NOT NULL,
  `batch` varchar(3) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bit` int(1) NOT NULL,
  `class1` varchar(6) DEFAULT NULL,
  `sub1` varchar(6) DEFAULT NULL,
  `class2` varchar(6) DEFAULT NULL,
  `sub2` varchar(6) DEFAULT NULL,
  `claa3` varchar(6) DEFAULT NULL,
  `sub3` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `bit`, `class1`, `sub1`, `class2`, `sub2`, `claa3`, `sub3`) VALUES
('nab', 'adi', '123', 0, 'SEB', 'ECCF', 'none', 'none', 'none', 'none'),
('javed', 'java', '123', 0, NULL, NULL, NULL, NULL, NULL, NULL),
('sub', 'lap', '100', 0, 'TEC', 'DLDA', 'none', 'none', 'none', 'none'),
('nabil', 'nab', '123', 1, 'SEC', 'DLDA', 'SEB', 'DS', 'none', 'none'),
('Nabil', 'nabil', '12345', 1, NULL, NULL, NULL, NULL, NULL, NULL),
('patil', 'pat', '123', 1, 'SEA', 'OOPM', 'SEB', 'ECCF', 'none', 'none');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `semarks`
--
ALTER TABLE `semarks`
  ADD CONSTRAINT `semarks_ibfk_1` FOREIGN KEY (`roll`) REFERENCES `sestud` (`roll`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
