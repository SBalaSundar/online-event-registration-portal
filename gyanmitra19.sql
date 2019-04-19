-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 07:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gyanmitra19`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ad_no` text NOT NULL,
  `event_1` text NOT NULL,
  `event_2` text NOT NULL,
  `event_3` text NOT NULL,
  `event_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbmania`
--

CREATE TABLE `dbmania` (
  `team_id` text NOT NULL,
  `member1` text NOT NULL,
  `member2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbmania`
--

INSERT INTO `dbmania` (`team_id`, `member1`, `member2`) VALUES
('515', '12696', '12504');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(2) NOT NULL,
  `event_name` text NOT NULL,
  `group_id` int(1) NOT NULL,
  `dept` text NOT NULL,
  `max_seats` int(3) NOT NULL DEFAULT '0',
  `registered` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `group_id`, `dept`, `max_seats`, `registered`) VALUES
(11, 'Draftrix', 1, 'CIVIL', 50, 0),
(12, 'Paper Presentation', 1, 'EEE', 50, 0),
(13, 'Rummy Fication', 1, 'ECE', 50, 0),
(14, 'Poster Designing', 1, 'CSE', 50, 0),
(15, 'Mech Lathe', 1, 'MECH', 50, 0),
(16, 'PETRIPHILES', 1, 'BT', 50, 0),
(17, 'Paper Presentation', 1, 'MCA', 50, 0),
(18, 'Zip the Lip', 1, 'SH', 50, 0),
(21, 'Idea Presentation and startups', 2, 'CIVIL', 50, 0),
(22, 'Potter Brain', 2, 'EEE', 50, 0),
(23, 'Paper Presentation', 2, 'ECE', 50, 0),
(24, 'Web Designing', 2, 'CSE', 50, 0),
(25, 'Paper presentation', 2, 'MECH', 50, 0),
(26, 'MERCHANT IN U', 2, 'BT', 50, 0),
(27, 'Treasure Hunt', 2, 'MCA', 50, 0),
(28, 'TRIPPY BUZZ', 2, 'SH', 50, 0),
(31, 'Make ‘n Break', 3, 'CIVIL', 50, 0),
(32, 'Hungry Bears ', 3, 'EEE', 50, 0),
(33, 'Mind Kraft ', 3, 'ECE', 50, 0),
(34, 'Online Coding', 3, 'CSE', 50, 0),
(35, 'Technical video (or) Image presentation', 3, 'MECH', 50, 0),
(36, 'MOUSY TRICK', 3, 'BT', 50, 0),
(37, 'Quiz', 3, 'MCA', 50, 0),
(38, 'FICTION WRITING', 3, 'SH', 50, 0),
(41, 'Brick Battle', 4, 'CIVIL', 50, 0),
(42, 'Idea Presentation', 4, 'EEE', 50, 0),
(43, 'Covert Pixels', 4, 'ECE', 50, 0),
(44, 'DB Mania', 4, 'CSE', 50, 0),
(45, 'Prototype Modelling', 4, 'MECH', 50, 0),
(46, 'CLOVER PROBE', 4, 'BT', 50, 0),
(47, 'Debugging', 4, 'MCA', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecoding`
--

CREATE TABLE `onlinecoding` (
  `team_id` text NOT NULL,
  `member1` text NOT NULL,
  `member2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `ad_no` text NOT NULL,
  `roll_no` text NOT NULL,
  `mailid` text NOT NULL,
  `team_id1` text,
  `team_id2` text,
  `dept` text,
  `year` int(1) DEFAULT NULL,
  `section` text NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `event_1` text,
  `event_2` text,
  `event_3` text,
  `event_4` text,
  `attendance` text,
  `att_2` text NOT NULL,
  `att_3` text NOT NULL,
  `att_4` text NOT NULL,
  `lop` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`ad_no`, `roll_no`, `mailid`, `team_id1`, `team_id2`, `dept`, `year`, `section`, `name`, `password`, `event_1`, `event_2`, `event_3`, `event_4`, `attendance`, `att_2`, `att_3`, `att_4`, `lop`) VALUES
('12215', '15BCS131', 'ak@protonmail.com', 'NULL', 'NULL', 'CSE', 4, '', 'ak', 'as', 'NULL', 'NULL', 'NULL', 'NULL', 'AB', 'AB', 'AB', 'AB', 'NULL'),
('12339', '15BCS112', 'akshaykanna120298@gmail.com', '337', 'NULL', 'CSE', 4, '', 'Akshay Kanna', '12345', 'Poster Designing', 'NULL', 'Online Coding', 'DB Mania', 'AB', 'AB', 'AB', 'AB', 'NULL'),
('12504', '15BCS126', 'vinothbalaji.don23@gmail.com', 'NULL', '515', 'CSE', 4, '', 'VINOTH BALAJI T', '12345', 'NULL', 'NULL', 'Online Coding', 'DB Mania', 'AB', 'AB', 'AB', 'AB', 'NULL'),
('12587', '15CIV123', 'ak@protonmail.com', 'NULL', 'NULL', '', 4, '', 'Akshay Kanna', '123', 'NULL', 'NULL', 'NULL', 'NULL', 'AB', 'AB', 'AB', 'AB', 'NULL'),
('12696', '15BCS122', 'na@g.com', '297', '515', 'CSE', 4, '', 'surya', '1234', 'NULL', 'NULL', 'Online Coding', 'DB Mania', 'AB', 'AB', 'AB', 'AB', 'NULL'),
('12950', '15BCS073', 'balsingthomson@gmail.com', '297', 'NULL', 'CSE', 4, '', 'Balsing', '123456', 'NULL', 'NULL', 'Online Coding', 'DB Mania', 'AB', 'AB', 'AB', 'AB', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(10) NOT NULL,
  `member1` text NOT NULL,
  `member2` text NOT NULL,
  `member3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ad_no`(7));

--
-- Indexes for table `dbmania`
--
ALTER TABLE `dbmania`
  ADD PRIMARY KEY (`team_id`(10)),
  ADD UNIQUE KEY `member1` (`member1`(10)),
  ADD UNIQUE KEY `member2` (`member2`(10));

--
-- Indexes for table `onlinecoding`
--
ALTER TABLE `onlinecoding`
  ADD PRIMARY KEY (`team_id`(10)),
  ADD UNIQUE KEY `member1` (`member1`(10)),
  ADD UNIQUE KEY `member2` (`member2`(10));

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`ad_no`(7));

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
