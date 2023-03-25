-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2020 at 09:05 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m-sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `Car_ID` int(11) NOT NULL,
  `Car_Name` char(32) DEFAULT NULL,
  `Team_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Car_ID`),
  KEY `Team_ID` (`Team_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Car_ID`, `Car_Name`, `Team_ID`) VALUES
(601, 'Hyundai i20', 501),
(602, 'Toyota Yaris', 502),
(603, 'Citroen C3', 503),
(604, 'Ford Fiesta', 504);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `Driver_ID` int(11) NOT NULL,
  `Name` char(32) DEFAULT NULL,
  `NI_ID` int(11) DEFAULT NULL,
  `National_ID` int(11) DEFAULT NULL,
  `ITRC_ID` int(11) DEFAULT NULL,
  `WRC_ID` int(11) DEFAULT NULL,
  `Car_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Driver_ID`),
  KEY `NI_ID` (`NI_ID`),
  KEY `National_ID` (`National_ID`),
  KEY `ITRC_ID` (`ITRC_ID`),
  KEY `WRC_ID` (`WRC_ID`),
  KEY `Car_ID` (`Car_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`Driver_ID`, `Name`, `NI_ID`, `National_ID`, `ITRC_ID`, `WRC_ID`, `Car_ID`) VALUES
(1001, 'Sam Moffett', NULL, NULL, 101, NULL, NULL),
(1002, 'Alastair Fisher', NULL, NULL, 102, NULL, NULL),
(1003, 'Donagh Kelly', NULL, 311, 103, NULL, NULL),
(1004, 'Meirion Evans', NULL, NULL, 104, NULL, NULL),
(1005, 'Cathan McCourt', NULL, NULL, 105, NULL, NULL),
(1006, 'Josh Moffett', NULL, 301, 106, NULL, NULL),
(1007, 'Eamon Kelly', 0, NULL, 107, NULL, NULL),
(1008, 'Willy Mavitty', NULL, NULL, 108, NULL, NULL),
(1009, 'Jason Dickson', NULL, NULL, 109, NULL, NULL),
(1010, 'Colin Flanaghan', NULL, NULL, 110, NULL, NULL),
(1011, 'Stephen Wright', 201, NULL, NULL, NULL, NULL),
(1012, 'Derek McGarrity', 202, NULL, NULL, NULL, NULL),
(1013, 'Derek McGeehan', 203, NULL, NULL, NULL, NULL),
(1014, 'James Kennedy', 205, NULL, NULL, NULL, NULL),
(1015, 'John Devlin', 206, NULL, NULL, NULL, NULL),
(1016, 'Drew Stewart', 207, NULL, NULL, NULL, NULL),
(1017, 'Marc Johnston', 208, NULL, NULL, NULL, NULL),
(1018, 'Kenny McKinstry', 209, NULL, NULL, NULL, NULL),
(1019, 'Kyle White', 210, NULL, NULL, NULL, NULL),
(1020, 'Roy White', NULL, 302, NULL, NULL, NULL),
(1021, 'Gary Kiernan', NULL, 303, NULL, NULL, NULL),
(1022, 'David Bogie', NULL, 304, NULL, NULL, NULL),
(1023, 'Jason Black', NULL, 305, NULL, NULL, NULL),
(1024, 'Declan McRory', NULL, 306, NULL, NULL, NULL),
(1025, 'Raymond Conlon', NULL, 307, NULL, NULL, NULL),
(1026, 'Niall Devine', NULL, 308, NULL, NULL, NULL),
(1027, 'John Warren', NULL, 309, NULL, NULL, NULL),
(1028, 'Ian Roche', NULL, 310, NULL, NULL, NULL),
(1029, 'Thierry Neuville', NULL, NULL, NULL, 401, 601),
(1030, 'Sebastian Ogier', NULL, NULL, NULL, 402, 602),
(1031, 'Elfyn Evans', NULL, NULL, NULL, 403, 602),
(1032, 'Esapekaa Lappi', NULL, NULL, NULL, 404, 604),
(1033, 'Kalle Rovanpera', NULL, NULL, NULL, 405, 602),
(1034, 'Sebastian Loeb', NULL, NULL, NULL, 406, 601),
(1035, 'Teemu Suninen', NULL, NULL, NULL, 407, 604),
(1036, 'Takamoto Katsuta', NULL, NULL, NULL, 408, 602),
(1037, 'Eric Camilli', NULL, NULL, NULL, 409, 603),
(1038, 'Mads Ostberg', NULL, NULL, NULL, 410, 603),
(1039, 'Emma McKinstry', 204, NULL, NULL, NULL, NULL),
(1040, 'Jason Mitchell', 211, NULL, NULL, NULL, NULL),
(1041, 'Kieron Graffin', 212, NULL, NULL, NULL, NULL),
(1042, 'Alastair Cochrane', 213, NULL, NULL, NULL, NULL),
(1043, 'Jamie Grant', 214, NULL, NULL, NULL, NULL),
(1044, 'Jonny Morrow', 215, NULL, NULL, NULL, NULL),
(1045, 'Ott Tanak', NULL, NULL, NULL, 411, 601),
(1046, 'Craig Breen', NULL, NULL, NULL, 412, 601),
(1047, 'Pontus Tiedman', NULL, NULL, NULL, 413, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `irish_tarmac`
--

DROP TABLE IF EXISTS `irish_tarmac`;
CREATE TABLE IF NOT EXISTS `irish_tarmac` (
  `ITRC_ID` int(11) NOT NULL,
  `Driver_ID` int(11) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  PRIMARY KEY (`ITRC_ID`),
  KEY `Driver_ID` (`Driver_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irish_tarmac`
--

INSERT INTO `irish_tarmac` (`ITRC_ID`, `Driver_ID`, `Points`) VALUES
(101, 1001, 14),
(102, 1002, 17),
(103, 1003, 12),
(104, 1004, 10),
(105, 1005, 7),
(106, 1006, 8),
(107, 1007, 5),
(108, 1008, 6),
(109, 1009, 4),
(110, 1010, 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_02_09_173401_create_rallies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `national_series`
--

DROP TABLE IF EXISTS `national_series`;
CREATE TABLE IF NOT EXISTS `national_series` (
  `National_ID` int(11) NOT NULL,
  `Driver_ID` int(11) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  PRIMARY KEY (`National_ID`),
  KEY `Driver_ID` (`Driver_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `national_series`
--

INSERT INTO `national_series` (`National_ID`, `Driver_ID`, `Points`) VALUES
(301, 1006, 0),
(302, 1020, 19),
(303, 1021, 16),
(304, 1022, 14),
(305, 1023, 13),
(306, 1024, 12),
(307, 1025, 11),
(308, 1026, 10),
(309, 1027, 9),
(310, 1028, 8),
(311, 1003, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ni`
--

DROP TABLE IF EXISTS `ni`;
CREATE TABLE IF NOT EXISTS `ni` (
  `NI_ID` int(11) NOT NULL,
  `Driver_ID` int(11) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  PRIMARY KEY (`NI_ID`),
  KEY `Driver_ID` (`Driver_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ni`
--

INSERT INTO `ni` (`NI_ID`, `Driver_ID`, `Points`) VALUES
(201, 1011, 0),
(202, 1012, 57),
(203, 1013, 56),
(204, 1039, 50),
(205, 1014, 46),
(206, 1015, 0),
(207, 1016, 42),
(208, 1017, 0),
(209, 1018, 0),
(210, 1019, 0),
(211, 1040, 50),
(212, 1041, 47),
(213, 1042, 39),
(214, 1043, 38),
(215, 1044, 37);

-- --------------------------------------------------------

--
-- Table structure for table `rallies`
--

DROP TABLE IF EXISTS `rallies`;
CREATE TABLE IF NOT EXISTS `rallies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Event_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rallies`
--

INSERT INTO `rallies` (`id`, `Event_Name`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Galway Rally', '2nd Feb 2020', '2020-02-10 16:38:16', '2020-02-10 16:38:16'),
(2, 'West Cork Rally', '14th Mar 2020', '2020-02-10 17:47:28', '2020-02-10 17:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `Team_ID` int(11) NOT NULL,
  `Team_Name` char(255) DEFAULT NULL,
  PRIMARY KEY (`Team_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Team_ID`, `Team_Name`) VALUES
(501, 'Hyundai Shell Mobis World Rally Team'),
(502, 'Toyota Gazoo Racing World Rally Team'),
(503, 'Citroen'),
(504, 'M-Sport Ford World Rally Team');

-- --------------------------------------------------------

--
-- Table structure for table `wrc`
--

DROP TABLE IF EXISTS `wrc`;
CREATE TABLE IF NOT EXISTS `wrc` (
  `WRC_ID` int(11) NOT NULL,
  `Driver_ID` int(11) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  PRIMARY KEY (`WRC_ID`),
  KEY `Driver_ID` (`Driver_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wrc`
--

INSERT INTO `wrc` (`WRC_ID`, `Driver_ID`, `Points`) VALUES
(401, 1029, 42),
(402, 1030, 62),
(403, 1031, 54),
(404, 1032, 24),
(405, 1033, 40),
(406, 1034, 8),
(407, 1035, 26),
(408, 1036, 8),
(409, 1037, 2),
(410, 1038, 1),
(411, 1045, 38),
(412, 1046, 6),
(413, 1047, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
