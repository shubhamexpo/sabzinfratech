-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 11:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabzInfraTech`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `sno` int(11) NOT NULL,
  `awards` varchar(250) NOT NULL,
  `projectGallery` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `sno` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`sno`, `photo`) VALUES
(1, '../projectsImages/currentProjects/36535090_2116772771928367_8360490068883800064_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `completedProjects`
--

CREATE TABLE `completedProjects` (
  `sno` int(11) NOT NULL,
  `ownerName` varchar(250) NOT NULL,
  `projectName` varchar(250) NOT NULL,
  `projectCost` varchar(250) NOT NULL,
  `projectScope` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currentProjects`
--

CREATE TABLE `currentProjects` (
  `sno` int(11) NOT NULL,
  `ownerName` varchar(250) NOT NULL,
  `projectName` varchar(250) NOT NULL,
  `projectCost` varchar(250) NOT NULL,
  `projectScope` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `helpMessage`
--

CREATE TABLE `helpMessage` (
  `sno` int(11) NOT NULL,
  `messangerName` varchar(250) NOT NULL,
  `messangerEmail` varchar(250) NOT NULL,
  `Messengermessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `sno` int(11) NOT NULL,
  `projectType` varchar(250) NOT NULL,
  `ownerName` varchar(250) NOT NULL,
  `projectName` varchar(250) NOT NULL,
  `projectCost` varchar(250) NOT NULL,
  `projectScope` text NOT NULL,
  `projectPhoto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`sno`, `projectType`, `ownerName`, `projectName`, `projectCost`, `projectScope`, `projectPhoto`) VALUES
(1, 'completedProject', 'shubham', 'shubham dubey', 'asf', 'asfa', '../projectsImages/completedProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(3, 'currentProject', 'binu', 'binu', '1000000', 'kdlsfahsafjksjakgfskjgjksfkfls', '../projectsImages/currentProjects/2.jpg'),
(4, 'currentProject', 'fhg', 'vhb', 'gvg', 'vhn', '../projectsImages/currentProjects/DvsDARBX0AAYETR.jpg-large.jpeg'),
(5, 'completedProject', 'shubham', 'shubham', '864326482368', 'BDSKJABVJKDSBV AJVLAKBVJLAB', '../projectsImages/completedProjects/48360860_1223392667810523_75569124939399168_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projectDetails`
--

CREATE TABLE `projectDetails` (
  `sno` int(11) NOT NULL,
  `currentProject` varchar(250) NOT NULL,
  `completedProject` varchar(250) NOT NULL,
  `awardWon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectDetails`
--

INSERT INTO `projectDetails` (`sno`, `currentProject`, `completedProject`, `awardWon`) VALUES
(1, '10', '250', 25);

-- --------------------------------------------------------

--
-- Table structure for table `projectGallery`
--

CREATE TABLE `projectGallery` (
  `sno` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectGallery`
--

INSERT INTO `projectGallery` (`sno`, `photo`) VALUES
(22, '../projectsImages/currentProjects/36535090_2116772771928367_8360490068883800064_n.jpg'),
(23, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(24, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(25, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(26, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(27, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(28, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(29, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(30, '../projectsImages/currentProjects/36535090_2116772771928367_8360490068883800064_n.jpg'),
(31, '../projectsImages/currentProjects/42186843_1849604825120760_7854290596381327360_n.jpg'),
(32, '../projectsImages/projectGallery/unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `email`, `password`) VALUES
(1, 'skd8238@gmail.com', '0ec6fea0dadaafe10ef1f60d63f74565'),
(2, 'jiopaamom@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(3, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `completedProjects`
--
ALTER TABLE `completedProjects`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `currentProjects`
--
ALTER TABLE `currentProjects`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `helpMessage`
--
ALTER TABLE `helpMessage`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `projectDetails`
--
ALTER TABLE `projectDetails`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `projectGallery`
--
ALTER TABLE `projectGallery`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `completedProjects`
--
ALTER TABLE `completedProjects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currentProjects`
--
ALTER TABLE `currentProjects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `helpMessage`
--
ALTER TABLE `helpMessage`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projectDetails`
--
ALTER TABLE `projectDetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projectGallery`
--
ALTER TABLE `projectGallery`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
