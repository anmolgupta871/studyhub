-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 12:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodle`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `companyDate` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `companyDate`, `location`) VALUES
(1, '17-03-2018', 'jobs/1.txt'),
(2, '17-03-2018', 'jobs/2.txt'),
(3, '17-03-2018', 'jobs/3.txt'),
(4, '17-03-2018', 'jobs/4.txt'),
(5, '17-03-2018', 'jobs/5.txt'),
(6, '17-03-2018', 'jobs/6.txt'),
(7, '17-03-2018', 'jobs/7.txt');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `mobile`) VALUES
(1, 'anmol', '11111', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subjectId` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subjectName`, `location`, `subjectId`, `topic`) VALUES
(1, 'java1', 'notes/JAVA_u-1.html', 'java1', 'UNIT-I'),
(2, 'none', 'notes/blank.txt', '2', 'NONE'),
(3, '.net', 'notes/asp.net1.html', '3', 'UNIT-I'),
(4, 'java', 'notes/JAVA_u-2.html', 'java1', 'UNIT-II'),
(5, 'Java', 'notes/JAVA_u-3.html', 'Java1', 'UNIT-III'),
(6, 'Java', 'notes/JAVA_u-4.html', 'java1', 'UNIT-IV'),
(7, 'Java', 'notes/JAVA_u-5.html', 'java1', 'UNIT-V'),
(8, '.net', 'notes/asp.net2.html', '3', 'UNIT-II'),
(9, '.net', 'notes/asp.net3.html', '3', 'UNIT-III'),
(10, '.net', 'notes/asp.net4.html', '3', 'UNIT-IV'),
(11, '.net', 'notes/asp.net5.html', '3', 'UNIT-V'),
(12, 'SE', 'notes/s-w1.html', '4', 'UNIT-I'),
(13, 'SE', 'notes/s-w2.html', '4', 'UNIT-II'),
(14, 'IS', 'notes/CNC unit1.html', '5', 'UNIT-I'),
(15, 'IS', 'notes/CNC unit2.html', '5', 'UNIT-II'),
(16, 'SE', 'notes/s-w3.html', '4', 'UNIT-III'),
(17, 'SE', 'notes/s-w4.html', '4', 'UNIT-IV'),
(18, 'SE', 'notes/s-w5.html', '4', 'UNIT-V'),
(19, 'IS', 'notes/CNC unit3.html', '5', 'UNIT-III'),
(20, 'IS', 'notes/CNC unit4.html', '5', 'UNIT-IV'),
(21, 'IS', 'notes/CNC unit5.html', '5', 'UNIT-V');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(11) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subjectId` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `subjectName`, `location`, `subjectId`, `year`) VALUES
(3, 'NONE', 'papers/blank.txt', '2', 'NONE'),
(4, 'JAVA', 'papers/java/2017java.txt', 'java1', '2017*'),
(5, 'JAVA', 'papers/java/2016java.html', 'java1', '2016'),
(6, 'JAVA', 'papers/java/2015java.html', 'java1', '2015**'),
(7, 'JAVA', 'papers/java/2014java.html', 'java1', '2014**'),
(8, 'JAVA', 'papers/java/2013java.html', 'java1', '2013*'),
(9, '.NET', 'papers/net/2017net.html', '3', '2017'),
(10, '.NET', 'papers/net/2016net.txt', '3', '2016*'),
(11, '.NET', 'papers/net/2015net.html\r\n', '3', '2015'),
(12, '.NET', 'papers/net/2014net.html', '3', '2014'),
(13, '.NET', 'papers/net/2013net.html', '3', '2013'),
(14, 'SE', 'papers/se/2017se.html', '4', '2017'),
(15, 'SE', 'papers/se/2016se.txt', '4', '2016*'),
(16, 'SE', 'papers/se/2015se.txt', '4', '2015*'),
(17, 'SE', 'papers/se/2014se.html', '4', '2014'),
(18, 'SE', 'papers/se/2013se.html', '4', '2013'),
(19, 'IS', 'papers/is/2017is.html', '5', '2017'),
(20, 'IS', 'papers/is/2016is.txt', '5', '2016*'),
(21, 'IS', 'papers/is/2015is.html', '5', '2015'),
(22, 'IS', 'papers/is/2014is.html', '5', '2014'),
(23, 'IS', 'papers/is/2013is.html', '5', '2013'),
(29, 'BOC', 'papers/boc/2013boc.txt', '6', '2013'),
(30, '.NET', 'papers/net/sample1.html', '3', 'Sample1'),
(31, 'SE', 'papers/se/sample1.html', '4', 'Sample1'),
(32, 'JAVA', 'papers/java/sample1.html', 'java1', 'Sample1*'),
(33, 'JAVA', 'papers/java/sample2.html', 'java1', 'Sample2*'),
(34, 'JAVA', 'papers/java/sample3.html', 'java1', 'Sample3*'),
(35, 'JAVA', 'papers/java/sample4.html', 'java1', 'Sample4*'),
(36, 'JAVA', 'papers/java/sample5.html', 'java1', 'Sample5*'),
(37, 'JAVA', 'papers/java/sample6.html', 'java1', 'Sample6*'),
(38, '.NET', 'papers/net/sample2.html', '3', 'Sample2*'),
(39, '.NET', 'papers/net/sample3.html', '3', 'Sample3*'),
(40, '.NET', 'papers/net/sample4.html', '3', 'Sample4*'),
(41, 'SE', 'papers/se/sample2.html', '4', 'Sample2*'),
(42, 'SE', 'papers/se/sample3.html', '4', 'Sample3*'),
(43, 'SE', 'papers/se/sample4.html', '4', 'Sample4*');

-- --------------------------------------------------------

--
-- Table structure for table `practicals`
--

CREATE TABLE `practicals` (
  `id` int(11) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subjectId` varchar(255) NOT NULL,
  `practicalNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practicals`
--

INSERT INTO `practicals` (`id`, `subjectName`, `location`, `subjectId`, `practicalNo`) VALUES
(1, 'java', 'practicals/javapracticallist.html', 'java2', 'QUESTIONS'),
(2, 'none', 'practicals/blank.txt', '2', 'NONE'),
(3, 'JAVA', 'practicals/javasolvedpractical.txt', 'java2', 'SOLVED'),
(4, '.NET', 'practicals/dotnetpracticalque.html', '3', 'QUESTIONS'),
(5, '.NET', 'practicals/dotnet/dotnet.html', '3', 'SOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `fileName`, `location`) VALUES
(1, 'blank', 'syllabus/blank.txt'),
(2, 'syllabus', 'syllabus/Internet Technology & Security.html'),
(3, 'syllabus', 'syllabus/Software Engineering.html'),
(4, 'syllabus', 'syllabus/dotNet Technology.html'),
(5, 'syllabus', 'syllabus/Java.html'),
(6, 'syllabus', 'syllabus/boc.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practicals`
--
ALTER TABLE `practicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `practicals`
--
ALTER TABLE `practicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
