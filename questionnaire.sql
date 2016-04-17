-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 06:57 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `sno` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`sno`, `username`, `name`, `password`) VALUES
(1, '1admin', 'Jai Kathuria', '12345'),
(2, '1sid', 'Sid', 'zxcvb');

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
  `testKey` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` int(255) NOT NULL,
  `noq` int(100) NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `q9` text NOT NULL,
  `q10` text NOT NULL,
  `q11` text NOT NULL,
  `q12` text NOT NULL,
  `q13` text NOT NULL,
  `q14` text NOT NULL,
  `q15` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtable`
--

INSERT INTO `testtable` (`testKey`, `title`, `time`, `noq`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`) VALUES
(4, 'Testing Test', 5, 5, 'WWW stands for ?Â¿ World Whole Web Â¿Wide World Web Â¿Web World Wide Â¿World Wide WebÂ¿d', '. Which of the following are components of Central Processing Unit (CPU) ?Â¿ Arithmetic logic unit, Mouse Â¿Arithmetic logic unit, Control unit Â¿Arithmetic logic unit, Integrated Circuits Â¿Control Unit, MonitorÂ¿b', 'Which among following first generation of computers had ?Â¿Vaccum Tubes and Magnetic DrumÂ¿Integrated CircuitsÂ¿Magnetic Tape and TransistorsÂ¿All of aboveÂ¿a', 'Where is RAM located ?Â¿Expansion BoardÂ¿External DriveÂ¿Mother BoardÂ¿All of aboveÂ¿c', 'If a computer has more than one processor then it is known as ?Â¿UniprocessÂ¿MultiprocessorÂ¿MultithreadedÂ¿MultiprogrammingÂ¿b', '', '', '', '', '', '', '', '', '', ''),
(5, 'Environment', 4, 5, 'PHP files have a default file extension of..Â¿htmlÂ¿phpÂ¿xmlÂ¿phÂ¿b', 'Which of the following is/are a PHP code editor?Â¿NotepadÂ¿Notepad++Â¿bsugiuÂ¿gdgyÂ¿b', 'or smajh nahi aa raha Â¿kya puchÂ¿u stoh Â¿ilhdgÂ¿ugdyg`Â¿c', 'djbygfuÂ¿jhjjaklÂ¿jhgghgÂ¿jljhdÂ¿khdhjÂ¿b', 'dcvhvhjÂ¿hvdhjvhjÂ¿vchjvhjvckhvhjÂ¿shggÂ¿89e78Â¿a', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `uniqid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `name`, `password`, `uniqid`) VALUES
(11, 'jaikathuria', 'jai kathuria', 'zxcvb', 'user_5713a3d31314b'),
(12, 'gunavina', 'gunavina mehta', 'zxcvb', 'user_5713bed89913d'),
(13, 'tanya', 'tanya', 'zxcvb', '\r\n'),
(14, 'Ujjwal180', 'Ujjwal', 'abcdef', ''),
(15, 'Saroj', 'Saroj Rani', 'zxcvbnm', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_5713a3d31314b`
--

CREATE TABLE `user_5713a3d31314b` (
  `testid` int(200) NOT NULL,
  `correctq` int(5) NOT NULL,
  `totalq` int(200) NOT NULL,
  `answers` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_5713a3d31314b`
--

INSERT INTO `user_5713a3d31314b` (`testid`, `correctq`, `totalq`, `answers`) VALUES
(4, 2, 5, 'Â¿Â¿Â¿Â¿cÂ¿b');

-- --------------------------------------------------------

--
-- Table structure for table `user_5713bed89913d`
--

CREATE TABLE `user_5713bed89913d` (
  `testid` int(200) NOT NULL,
  `correctq` int(5) NOT NULL,
  `totalq` int(200) NOT NULL,
  `answers` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_5713bed89913d`
--

INSERT INTO `user_5713bed89913d` (`testid`, `correctq`, `totalq`, `answers`) VALUES
(5, 0, 5, 'Â¿Â¿Â¿Â¿Â¿');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `testtable`
--
ALTER TABLE `testtable`
  ADD PRIMARY KEY (`testKey`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testtable`
--
ALTER TABLE `testtable`
  MODIFY `testKey` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
