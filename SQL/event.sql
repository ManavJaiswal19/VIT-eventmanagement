-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 10:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Reg_no` varchar(9) NOT NULL,
  `Event_name` varchar(30) NOT NULL,
  `Date_time` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Reg_no`, `Event_name`, `Date_time`, `Venue`) VALUES
('19BCE1553', 'Music club curtain raiser', '14 Dec 2020-10:00 a.m.', 'Portico AB1'),
('19BCE1553', 'AI Seminar', '13th Feb, 2020-5 p.m.', '7th Floor Audi'),
('19BCE1553', 'Hackathon', '12 Dec 2020-9:00 a.m.', '7th Floor Audi AB1'),
('19BCE1553', 'Proshow Day 2', '7th Feb, 2020-6 p.m.', 'VIT Cricket Ground'),
('19BCE1037', 'Proshow Day 2', '7th Feb, 2020-6 p.m.', 'VIT Cricket Ground'),
('19BCE1037', 'AI Seminar', '13th Feb, 2020-5 p.m.', '7th Floor Audi');

-- --------------------------------------------------------

--
-- Table structure for table `ev`
--

CREATE TABLE `ev` (
  `Name` varchar(30) NOT NULL,
  `Reg_no` varchar(9) NOT NULL,
  `Event_name` varchar(20) NOT NULL,
  `Org_name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `File` blob NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev`
--

INSERT INTO `ev` (`Name`, `Reg_no`, `Event_name`, `Org_name`, `Email`, `Phone_no`, `File`, `Status`) VALUES
('Prasoon Mathur', '19BCE1553', 'asdfghj', 'asdfghjkdfghjdfghj', 'prasoon.mathur2019@vitstudent.ac.in', '9999999009', 0x53637265656e73686f74202836292e706e67, 'Under verification'),
('Manav Jaiswal', '19BCE1037', 'freestyling', 'Futsal', 'manav.jaiswal2019@vitstudent.ac.in', '9999999000', 0x706f72747069632e6a7067, 'Under verification'),
('Manav Jaiswal', '19BCE1037', 'Singing competition', 'Indian idol', 'manav.jaiswal2019@vitstudent.ac.in', '9999999000', 0x7770353538373035352d726f6e616c64696e686f2d6465736b746f702d77616c6c7061706572732e6a7067, 'Under verification');

-- --------------------------------------------------------

--
-- Table structure for table `upev`
--

CREATE TABLE `upev` (
  `Event_name` varchar(50) NOT NULL,
  `Date_time` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Cost` varchar(20) NOT NULL,
  `Category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upev`
--

INSERT INTO `upev` (`Event_name`, `Date_time`, `Venue`, `Cost`, `Category`) VALUES
('FYI Hackathon', '12 Dec 2020-2:00 p.m.', 'AB1-208', '₹ 800', 'Hackathon'),
('Google Hackera', '14 Dec 2020-2:00 p.m.', 'AB1-605', '₹ 1800', 'Hackathon'),
('Hack IT!', '19 Dec 2020-2:00 p.m.', 'AB1-508', '₹ 1000', 'Hackathon'),
('Learning AI', '11 Dec 2020-1:00 p.m.', 'AB1-208', '₹ 500', 'Seminar'),
('ROB Machine Learning', '24 Dec 2020-2:00 p.m.', 'AB2-605', '₹ 1000', 'Seminar'),
('Robotics', '13 Dec 2020-12:00 p.m.', 'AB1-Auditorium', '₹ 1800', 'Seminar'),
('FYI FUTSAL ', '1 Dec 2020-6:00 p.m.', 'Hockey ground', 'Free', 'Sports'),
('5-A-Side futsal', '2 Dec 2020-4:00 p.m.', 'Football ground', '₹ 500', 'Sports'),
('5 km Awareness Marathon', '11 Dec 2020-6:00 a.m.', 'VIT entry gate', 'Free', 'Sports'),
('DID auditions', '19 Dec 2020-2:00 p.m.', 'AB1 auditorium', '₹ 200', 'Dance'),
('Talent hunt', '11 Dec 2020-1:00 p.m.', 'Amphitheatre', 'Free', 'Dance'),
('Dance club curtain raiser', '24 Dec 2020-5:00 p.m.', 'Amphitheatre', 'Free', 'Dance'),
('Indian Idol auditions', '13 Dec 2020-2:00 p.m.', 'AB1-Auditorium', '₹ 200', 'Music'),
('Music club curtain raiser', '18 Dec 2020-5:00 p.m.', 'Amphitheatre', 'Free', 'Music'),
('Guitarist audition', '11 Dec 2020-1:00 p.m.', 'AB1-Auditorium', 'Free', 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL,
  `Reg_no` varchar(9) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `School` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Reg_no`, `Password`, `DOB`, `Email`, `Phone_no`, `School`) VALUES
('Deepak Soni', '19BAI1031', 'deepak1031', '2000-01-01', 'deepak@gmail.com', '8888888888', 'SELECT'),
('Manav Jaiswal', '19BCE1037', 'manav1037', '2001-10-19', 'manav.jaiswal2019@vitstudent.ac.in', '9999999000', 'SELECT'),
('Prasoon Mathur', '19BCE1553', 'prasoon1553', '2000-01-01', 'prasoon.mathur2019@vitstudent.ac.in', '9999999009', 'SCOPE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
