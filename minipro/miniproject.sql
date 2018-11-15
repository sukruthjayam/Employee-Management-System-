-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 02:37 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `displayemp` (IN `id` INT)  SELECT * FROM registertable WHERE mgrid=id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `mgrid` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`mgrid`, `userid`, `password`) VALUES
(1, 'sukruth1234', 'suk10387#'),
(2, 'saisanthosh121', 'sai12345');

-- --------------------------------------------------------

--
-- Table structure for table `expdetails`
--

CREATE TABLE `expdetails` (
  `exid` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `experiance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expdetails`
--

INSERT INTO `expdetails` (`exid`, `company`, `designation`, `experiance`) VALUES
(4, 'tally', 'backenddeveloper', 1),
(5, 'wipro', 'webdesigner', 2),
(6, 'RIT', 'frontend developer', 3),
(8, 'evoque', 'ful lstack developer', 1),
(9, 'MICROWEBZ', 'UI designer', 1),
(10, 'GofoTechnologies', 'UX DESIGNER', 2),
(11, 'swaraghTechnologies', 'Interaction Designer', 1),
(20, 'eORB', 'Interaction Designer', 2),
(22, 'webCo', 'interactive designer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `leaveform`
--

CREATE TABLE `leaveform` (
  `reqno` int(11) NOT NULL,
  `essn` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `from` varchar(10) NOT NULL,
  `to` varchar(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `mgrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveform`
--

INSERT INTO `leaveform` (`reqno`, `essn`, `fname`, `description`, `from`, `to`, `status`, `mgrid`) VALUES
(2, 4, 'gurunath', 'sick', '2018-11-01', '2018-11-03', 'accepted', 2),
(3, 6, 'murali', 'friends marriage', '2018-11-07', '2018-11-08', 'rejected', 2),
(4, 11, 'manish', 'friends marriage', '2018-11-05', '2018-11-06', 'accepted', 1),
(5, 9, 'shubham', 'health', '2018-11-08', '2018-11-10', 'rejected', 1),
(6, 10, 'sarthak', 'vacation', '2018-11-14', '2018-11-17', 'rejected', 1),
(7, 10, 'sarthak', 'sisters marriage', '2018-11-16', '2018-11-17', 'null', 1),
(8, 4, 'gurunath', 'marriage', '2018-11-08', '2018-11-10', 'null', 2);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `tid` int(11) NOT NULL,
  `essn` int(10) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `cdate` datetime(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`tid`, `essn`, `action`, `cdate`) VALUES
(22, 6, 'Inserted', '2018-11-03 22:00:38.00000'),
(23, 7, 'Inserted', '2018-11-03 22:50:23.00000'),
(24, 1, 'deleted', '2018-11-04 09:20:10.00000'),
(25, 7, 'deleted', '2018-11-04 09:20:15.00000'),
(26, 8, 'Inserted', '2018-11-04 09:24:18.00000'),
(27, 9, 'Inserted', '2018-11-04 09:28:36.00000'),
(28, 10, 'Inserted', '2018-11-04 09:30:48.00000'),
(29, 11, 'Inserted', '2018-11-04 09:33:41.00000'),
(30, 20, 'inserted', '2018-11-04 10:18:36.00000'),
(31, 21, 'inserted', '2018-11-04 12:51:12.00000'),
(32, 21, 'deleted', '2018-11-04 12:53:10.00000'),
(33, 2, 'deleted', '2018-11-04 13:18:48.00000'),
(34, 22, 'inserted', '2018-11-04 13:28:31.00000');

-- --------------------------------------------------------

--
-- Table structure for table `login table`
--

CREATE TABLE `login table` (
  `essn` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login table`
--

INSERT INTO `login table` (`essn`, `userid`, `password`) VALUES
(4, 'gurunath@gmail.com', 'gurunath'),
(5, 'amrith@gmail.com', 'amrith'),
(6, 'murali@gmail.com', 'murali'),
(8, 'amrith@gmail.com', 'amrith'),
(9, 'shubham@gmail.com', 'shubham'),
(10, 'sarthak@gmail.com', 'sarthak'),
(11, 'manish@gmail.com', 'manish'),
(20, 'manoj@gmail.com', 'manoj'),
(22, 'suresh@gmail.com', 'suresh');

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `essn` int(11) NOT NULL,
  `mgrid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone no` bigint(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`essn`, `mgrid`, `fname`, `lname`, `gender`, `phone no`, `designation`, `Address`, `email`, `salary`) VALUES
(4, 2, 'gurunath', 'R', 'Male', 4124571458, 'backenddeveloper', 'marthalli,bangalore', 'gurunath@gmail.com', 90000),
(5, 2, 'amrith', 'raj', 'Male', 7382522059, 'webdesigner', 'yelahanka,bangalore', 'amrith@gmail.com', 50000),
(6, 2, 'murali', 'r', 'Male', 4512784512, 'frontend developer', 'whitefield,bangalore', 'murali@gmail.com', 80000),
(8, 1, 'amrith', 'raj', 'Male', 7845124578, 'ful lstack developer', 'avalahalli,yelaahanka', 'amrith@gmail.com', 40000),
(9, 1, 'shubham', 'anand', 'Male', 7845124578, 'UI designer', 'whitefield', 'shubham@gmail.com', 80000),
(10, 1, 'sarthak', 'gupta', 'Male', 8641234578, 'UX DESIGNER', 'kormangala', 'sarthak@gmail.com', 50000),
(11, 1, 'manish', 'M', 'Male', 9874124574, 'Interaction Designer', 'kormangala', 'manish@gmail.com', 60000),
(20, 2, 'manoj', 'kolla', 'Male', 7382522059, 'Interaction Designer', 'jalahalli', 'manoj@gmail.com', 60000),
(22, 2, 'suresh', 'M', 'Male', 7841254789, 'interactive designer', 'peenya', 'suresh@gmail.com', 60000);

--
-- Triggers `registertable`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `registertable` FOR EACH ROW INSERT into log VALUES(null,old.essn,'deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inserinto` AFTER INSERT ON `registertable` FOR EACH ROW INSERT INTO log VALUES(null,NEW.essn,'inserted',NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`mgrid`);

--
-- Indexes for table `expdetails`
--
ALTER TABLE `expdetails`
  ADD PRIMARY KEY (`exid`),
  ADD KEY `exid` (`exid`);

--
-- Indexes for table `leaveform`
--
ALTER TABLE `leaveform`
  ADD PRIMARY KEY (`reqno`),
  ADD KEY `essn` (`essn`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `login table`
--
ALTER TABLE `login table`
  ADD PRIMARY KEY (`essn`),
  ADD KEY `essn` (`essn`);

--
-- Indexes for table `registertable`
--
ALTER TABLE `registertable`
  ADD PRIMARY KEY (`essn`),
  ADD KEY `mgrid` (`mgrid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `mgrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaveform`
--
ALTER TABLE `leaveform`
  MODIFY `reqno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registertable`
--
ALTER TABLE `registertable`
  MODIFY `essn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expdetails`
--
ALTER TABLE `expdetails`
  ADD CONSTRAINT `expdetails_ibfk_1` FOREIGN KEY (`exid`) REFERENCES `registertable` (`essn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaveform`
--
ALTER TABLE `leaveform`
  ADD CONSTRAINT `leaveform_ibfk_1` FOREIGN KEY (`essn`) REFERENCES `registertable` (`essn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login table`
--
ALTER TABLE `login table`
  ADD CONSTRAINT `login table_ibfk_1` FOREIGN KEY (`essn`) REFERENCES `registertable` (`essn`) ON DELETE CASCADE;

--
-- Constraints for table `registertable`
--
ALTER TABLE `registertable`
  ADD CONSTRAINT `c1` FOREIGN KEY (`mgrid`) REFERENCES `admintable` (`mgrid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
