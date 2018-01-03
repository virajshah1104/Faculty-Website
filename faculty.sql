-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 06:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `login` (
  `Emp_Id` int(11) NOT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Role` enum('Admin','Faculty','Clerk') DEFAULT NULL,
  `P1` enum('TRUE','FALSE') DEFAULT NULL,
  `P2` enum('TRUE','FALSE') DEFAULT NULL,
  `P3` enum('TRUE','FALSE') DEFAULT NULL,
  `P4` enum('TRUE','FALSE') DEFAULT NULL,
  `Security_Question` varchar(150) NOT NULL,
  `Security_Answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `academic_details` (
  `Emp2_Id` int(11) DEFAULT NULL,
  `SSC_Institute` varchar(45) DEFAULT NULL,
  `SSC_Percentile` decimal(5,2) DEFAULT NULL,
  `SSC_Year` int(11) DEFAULT NULL,
  `SSC_Marksheet` longblob,
  `HSC_Institute` varchar(45) DEFAULT NULL,
  `HSC_Percentile` decimal(5,2) DEFAULT NULL,
  `HSC_Year` int(11) DEFAULT NULL,
  `HSC_Marksheet` longblob,
  `Bachelors_In` varchar(45) DEFAULT NULL,
  `Bachelors_Institute` varchar(45) DEFAULT NULL,
  `Bachelors_Year` int(11) DEFAULT NULL,
  `Bachelors_Percentile` decimal(5,2) DEFAULT NULL,
  `Bachelors_Marksheet` longblob,
  `Masters_In` varchar(45) DEFAULT NULL,
  `Masters_Year` int(11) DEFAULT NULL,
  `Masters_Percentile` decimal(5,2) DEFAULT NULL,
  `Masters_Institute` varchar(45) DEFAULT NULL,
  `Masters_Marksheet` longblob,
  `Phd_In` varchar(45) DEFAULT NULL,
  `Phd_Institute` varchar(45) DEFAULT NULL,
  `Phd_Year` int(11) DEFAULT NULL,
  `Phd_Percentile` decimal(5,2) DEFAULT NULL,
  `Phd_Marksheet` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `academic_details`

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Emp8_Id` int(11) DEFAULT NULL,
  `Category` varchar(10) DEFAULT NULL,
  `Course_Id` varchar(150) DEFAULT NULL,
  `Semester` varchar(10) DEFAULT NULL,
  `Year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular`
--

CREATE TABLE `co_curricular` (
  `Emp10_Id` int(11) DEFAULT NULL,
  `Description` varchar(145) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `Emp11_Id` int(11) DEFAULT NULL,
  `Description` varchar(145) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `Place` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--





CREATE TABLE `personal_details` (
  `Emp3_Id` int(11) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Contact` varchar(45) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Join_Pos` varchar(45) DEFAULT NULL,
  `Join_Date` date DEFAULT NULL,
  `Years_Exp` int(11) DEFAULT NULL,
  `Profile_Pic` longblob,
  `Prom_1` varchar(45) DEFAULT NULL,
  `Prom_1_Date` date DEFAULT NULL,
  `Prom_2` varchar(45) DEFAULT NULL,
  `Prom_2_Date` date DEFAULT NULL,
  `Prom_3` varchar(45) DEFAULT NULL,
  `Prom_3_Date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_details`
--



--
-- Table structure for table `publication_books`
--

CREATE TABLE `publication_books` (
  `Emp1_Id` int(11) DEFAULT NULL,
  `Book_Name` varchar(45) DEFAULT NULL,
  `ISBN` varchar(45) DEFAULT NULL,
  `Date_Published` date DEFAULT NULL,
  `Publisher_Name` varchar(45) DEFAULT NULL,
  `COA1` varchar(45) DEFAULT NULL,
  `COA1_INST` varchar(45) DEFAULT NULL,
  `COA2` varchar(45) DEFAULT NULL,
  `COA2_INST` varchar(45) DEFAULT NULL,
  `COA3` varchar(45) DEFAULT NULL,
  `COA3_INST` varchar(45) DEFAULT NULL,
  `Edition` varchar(45) DEFAULT NULL,
  `Author` varchar(45) DEFAULT NULL,
  `Author_INST` varchar(45) DEFAULT NULL,
  `Cover` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publication_conferences`
--

CREATE TABLE `publication_conferences` (
  `Emp5_Id` int(11) DEFAULT NULL,
  `Type` enum('National','International') DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Speaker` varchar(45) DEFAULT NULL,
  `Place` varchar(45) DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `Certificate` longblob,
  `Title` varchar(45) DEFAULT NULL,
  `Paper_Pdf` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publication_journals`
--

CREATE TABLE `publication_journals` (
  `Emp4_Id` int(11) DEFAULT NULL,
  `Type` enum('National','International') DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `Author` varchar(45) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Book_Chapter` enum('YES','NO') DEFAULT NULL,
  `Certificate` longblob,
  `Peer_Reviewed` enum('YES','NO') DEFAULT NULL,
  `Paper_PDF` longblob,
  `Impact_Factor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sttp_event_attended`
--

CREATE TABLE `sttp_event_attended` (
  `Emp6_Id` int(11) DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `Organized_By` varchar(45) DEFAULT NULL,
  `Place` varchar(45) DEFAULT NULL,
  `Duration` varchar(45) DEFAULT NULL,
  `Total_Participation` int(11) DEFAULT NULL,
  `Speaker` varchar(45) DEFAULT NULL,
  `Event_Type` varchar(50) DEFAULT NULL,
  `Certificate` longblob,
  `Title` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sttp_event_delivered`
--

CREATE TABLE `sttp_event_delivered` (
  `Emp9_Id` int(11) DEFAULT NULL,
  `Description` varchar(145) DEFAULT NULL,
  `Place` varchar(45) DEFAULT NULL,
  `Duration` varchar(45) DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sttp_event_organized`
--

CREATE TABLE `sttp_event_organized` (
  `Emp7_Id` int(11) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `Number_Participants` int(11) DEFAULT NULL,
  `Place` varchar(45) DEFAULT NULL,
  `Date_From` date DEFAULT NULL,
  `Date_To` date DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD KEY `Employee_Id_idx` (`Emp2_Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD KEY `Emp8_Id_idx` (`Emp8_Id`);

--
-- Indexes for table `co_curricular`
--
ALTER TABLE `co_curricular`
  ADD KEY `Emp10_Id_idx` (`Emp10_Id`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD KEY `Emp11_Id_idx` (`Emp11_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Emp_Id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD KEY `Emp_Id_idx` (`Emp3_Id`);

--
-- Indexes for table `publication_books`
--
ALTER TABLE `publication_books`
  ADD KEY `Employee1_Id_idx` (`Emp1_Id`);

--
-- Indexes for table `publication_conferences`
--
ALTER TABLE `publication_conferences`
  ADD KEY `Emp5_Id_idx` (`Emp5_Id`);

--
-- Indexes for table `publication_journals`
--
ALTER TABLE `publication_journals`
  ADD KEY `Emp4_Id_idx` (`Emp4_Id`);

--
-- Indexes for table `sttp_event_attended`
--
ALTER TABLE `sttp_event_attended`
  ADD KEY `Emp6_Id_idx` (`Emp6_Id`);

--
-- Indexes for table `sttp_event_delivered`
--
ALTER TABLE `sttp_event_delivered`
  ADD KEY `Emp9_Id_idx` (`Emp9_Id`);

--
-- Indexes for table `sttp_event_organized`
--
ALTER TABLE `sttp_event_organized`
  ADD KEY `Emp7_Id_idx` (`Emp7_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD CONSTRAINT `Employee_Id` FOREIGN KEY (`Emp2_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `Emp8_Id` FOREIGN KEY (`Emp8_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `co_curricular`
--
ALTER TABLE `co_curricular`
  ADD CONSTRAINT `Emp10_Id` FOREIGN KEY (`Emp10_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `extra`
--
ALTER TABLE `extra`
  ADD CONSTRAINT `Emp11_Id` FOREIGN KEY (`Emp11_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD CONSTRAINT `Emp_Id` FOREIGN KEY (`Emp3_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publication_books`
--
ALTER TABLE `publication_books`
  ADD CONSTRAINT `Employee1_Id` FOREIGN KEY (`Emp1_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publication_conferences`
--
ALTER TABLE `publication_conferences`
  ADD CONSTRAINT `Emp5_Id` FOREIGN KEY (`Emp5_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publication_journals`
--
ALTER TABLE `publication_journals`
  ADD CONSTRAINT `Emp4_Id` FOREIGN KEY (`Emp4_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sttp_event_attended`
--
ALTER TABLE `sttp_event_attended`
  ADD CONSTRAINT `Emp6_Id` FOREIGN KEY (`Emp6_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sttp_event_delivered`
--
ALTER TABLE `sttp_event_delivered`
  ADD CONSTRAINT `Emp9_Id` FOREIGN KEY (`Emp9_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sttp_event_organized`
--
ALTER TABLE `sttp_event_organized`
  ADD CONSTRAINT `Emp7_Id` FOREIGN KEY (`Emp7_Id`) REFERENCES `login` (`Emp_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
