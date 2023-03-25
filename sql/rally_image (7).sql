-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2020 at 09:04 AM
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
-- Database: `rally image`
--

-- --------------------------------------------------------

--
-- Table structure for table `bishopscourt20`
--

DROP TABLE IF EXISTS `bishopscourt20`;
CREATE TABLE IF NOT EXISTS `bishopscourt20` (
  `img_ID` int(11) NOT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `Caption` varchar(255) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bishopscourt20`
--

INSERT INTO `bishopscourt20` (`img_ID`, `Event_ID`, `Caption`, `img`) VALUES
(1001, 105, '1.Derek McGarrity', 'img_bishopscourt/1.DerekMcGarrity'),
(1002, 105, '3.Gareth Sayers', 'img_bishopscourt/3.GarethSayers'),
(1003, 105, '4.Kieron Graffin', 'img_bishopscourt/4.KieronGraffin'),
(1004, 105, '7.Martin Brady', 'img_bishopscourt/7.MartinBrady'),
(1005, 105, '19.Jason Mitchell', 'img_bishopscourt/19.JasonMitchell'),
(1006, 105, '34.Olivia Coulter', 'img_bishopscourt/34.OliviaCoulter'),
(1007, 105, '39.NiallBranniff', 'img_bishopscourt/39.NiallBranniff'),
(1008, 105, '45. Daniel Hamill', 'img_bishopscourt/45.DanielHammill'),
(1009, 105, '51.Stephen Jess', 'img_bishopscourt/51.StephenJess'),
(1010, 105, '54.Mervyn Wilson', 'img_bishopscourt/54.MervynWilson'),
(1011, 105, 'Car 40', 'img_bishopscourt/car40'),
(1012, 105, 'Niall Burns', 'img_bishopscourt/NiallBurns'),
(1013, 105, 'Sweeper', 'img_bishopscourt/Sweeper');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `Event_ID` int(11) NOT NULL,
  `Event_Name` varchar(225) NOT NULL,
  PRIMARY KEY (`Event_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_ID`, `Event_Name`) VALUES
(101, 'Ulster_Rally'),
(102, 'Loughgall_Stages_Rally'),
(103, 'Monte_Carlo_Rally'),
(104, 'Sweden_Rally'),
(105, 'Bishopscourt'),
(106, 'Mayo'),
(107, 'Rally Mexico');

-- --------------------------------------------------------

--
-- Table structure for table `loughgall19`
--

DROP TABLE IF EXISTS `loughgall19`;
CREATE TABLE IF NOT EXISTS `loughgall19` (
  `img_ID` int(11) NOT NULL,
  `Caption` varchar(225) DEFAULT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loughgall19`
--

INSERT INTO `loughgall19` (`img_ID`, `Caption`, `Event_ID`, `img`) VALUES
(1, '0.Sweeper Car', 102, 'img_loughgall/0'),
(2, '1.Damien Toner', 102, 'img_loughgall/1.DamienToner(2)'),
(3, '1.Damien Toner', 102, 'img_loughgall/1.DamienToner'),
(4, '2.Wesley Patterson', 102, 'img_loughgall/2.WesleyPatterson(2)'),
(5, '2.Wesley Patterson', 102, 'img_loughgall/2.WesleyPatterson'),
(6, '3.John Bradley', 102, 'img_loughgall/3.JohnBradley'),
(7, '4.Adrian Hetherington', 102, 'img_loughgall/4.AdrianHetherington'),
(8, '5.James Kennedy', 102, 'img_loughgall/5.JamesKennedy(2)'),
(9, '5.James Kennedy', 102, 'img_loughgall/5.JamesKennedy'),
(10, '6.Marty Toner', 102, 'img_loughgall/6.MartyToner(2)'),
(11, '6.Marty Toner', 102, 'img_loughgall/6.MartyToner'),
(12, '7.Mervyn Wedlock', 102, 'img_loughgall/7.MervynWedlock(2)'),
(13, '7.Mervyn Wedlock', 102, 'img_loughgall/7.MervynWedlock'),
(14, '8.Barry Morris', 102, 'img_loughgall/8.BarryMorris'),
(15, '9.John Devlin', 102, 'img_loughgall/9.JohnDevlin'),
(16, '10.Shane Cullen', 102, 'img_loughgall/10.ShaneCullen(2)'),
(17, '10.ShaneCullen', 102, 'img_loughgall/10.ShaneCullen'),
(18, '11.JT Warnock', 102, 'img_loughgall/11.JTWarnock'),
(19, '15.Joe Hegarty', 102, 'img_loughgall/15.JoeHegarty'),
(20, '18.Brian Black', 102, 'img_loughgall/18.BrianBlack'),
(21, '20.Philip Greenlee', 102, 'img_loughgall/20.PhilipGreenlee'),
(22, '21.Barry Scott', 102, 'img_loughgall/21.BarryScott'),
(23, '23.Seamus Morris', 102, 'img_loughgall/23.SeamusMorris'),
(24, '29.Gareth Black', 102, 'img_loughgall/29.GarethBlack'),
(25, '37.Paddy Quinn', 102, 'img_loughgall/37.PaddyQuinn'),
(26, '54.Owen Percy', 102, 'img_loughgall/54.OwenPercy'),
(27, '61.Olivia Coulter', 102, 'img_loughgall/61.OliviaCoulter'),
(28, '63.Andrew Mackarel', 102, 'img_loughgall/63.AndrewMackarel'),
(29, '64.Seamus Connelly', 102, 'img_loughgall/64.SeamusConnelly'),
(30, '66.Seamus McGivney', 102, 'img_loughgall/66.GerardMcGivney'),
(31, '8.Barry Morris', 102, 'img_loughgall/BMorris'),
(32, 'Corolla', 102, 'img_loughgall/corolla'),
(33, 'Sideways Action', 102, 'img_loughgall/double');

-- --------------------------------------------------------

--
-- Table structure for table `mayo20`
--

DROP TABLE IF EXISTS `mayo20`;
CREATE TABLE IF NOT EXISTS `mayo20` (
  `img_ID` int(11) NOT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `Caption` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mayo20`
--

INSERT INTO `mayo20` (`img_ID`, `Event_ID`, `Caption`, `img`) VALUES
(1001, 106, '1.Donagh Kelly', 'img_mayo/1.DonaghKelly'),
(1002, 106, '1.Donagh Kelly', 'img_mayo/1.DonaghKelly(2)'),
(1003, 106, '2.Roy White', 'img_mayo/2.RoyWhite'),
(1004, 106, '6.Gary Kiernan', 'img_mayo/6.GaryKiernan'),
(1005, 106, '8.Euan Thorburn', 'img_mayo/8.EuanThorburn'),
(1006, 106, '17.Colin O\'Rourke', 'img_mayo/17.ColinORourke'),
(1007, 106, '21.Jason Black', 'img_mayo/21.JasonBlack'),
(1008, 106, '53.Sean Warnock', 'img_mayo/53.SeanWarnock'),
(1009, 106, '56.Christy McLaughlin', 'img_mayo/56.ChristyMcLaughlin'),
(1010, 106, '71.David McSorley', 'img_mayo/71.DavidMcSorley'),
(1011, 106, '76.Declan Campbell', 'img_mayo/76.DeclanCampbell'),
(1012, 106, 'Conor Maguire', 'img_mayo/ConorMaguire'),
(1013, 106, 'Damien Toner', 'img_mayo/DamienToner'),
(1014, 106, 'David Bogie', 'img_mayo/DavidBogie'),
(1015, 106, 'Gareth Black', 'img_mayo/GarethBlack'),
(1016, 106, 'Gerard Tohill', 'img_mayo/GerardTohill'),
(1017, 106, 'Josh Moffett', 'img_mayo/JoshMoffett'),
(1018, 106, 'Ray Fitzpatrick', 'img_mayo/RayFitzpatrick'),
(1019, 106, 'Stephen O\'Hanlon', 'img_mayo/StephenO\'Hanlon'),
(1020, 106, 'Tommy O\'Connell', 'img_mayo/TommyOConnell');

-- --------------------------------------------------------

--
-- Table structure for table `mexico20`
--

DROP TABLE IF EXISTS `mexico20`;
CREATE TABLE IF NOT EXISTS `mexico20` (
  `img_ID` int(11) NOT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `Caption` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mexico20`
--

INSERT INTO `mexico20` (`img_ID`, `Event_ID`, `Caption`, `img`) VALUES
(1001, 107, 'Car 26', 'img_mexico/Car26'),
(1002, 107, 'Dusty Roads', 'img_mexico/dustyroads'),
(1003, 107, 'Elfyn Evans', 'img_mexico/Evans'),
(1004, 107, 'Flying high', 'img_mexico/FlyingHigh'),
(1005, 107, 'Gus Greensmith', 'img_mexico/Greensmith'),
(1006, 107, 'Gus Greensmith', 'img_mexico/Gus-Greensmith'),
(1007, 107, 'Gus Greensmith', 'img_mexico/GusGreensmith'),
(1008, 107, 'Hyundai', 'img_mexico/Hyundai'),
(1009, 107, 'Jump', 'img_mexico/Jump'),
(1010, 107, 'Kalle Rovanpera', 'img_mexico/KalleRovanpera'),
(1011, 107, 'Thierry Neuville', 'img_mexico/neuville'),
(1012, 107, 'Ole Christian Vieby', 'img_mexico/OleChristianVieby'),
(1013, 107, 'Sebastian Ogier', 'img_mexico/Sebastian-Ogier'),
(1014, 107, 'Skoda', 'img_mexico/skoda'),
(1015, 107, 'Teemu Suninen', 'img_mexico/Suninen'),
(1016, 107, 'Toyota', 'img_mexico/Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `monaco20`
--

DROP TABLE IF EXISTS `monaco20`;
CREATE TABLE IF NOT EXISTS `monaco20` (
  `img_ID` int(11) NOT NULL,
  `Caption` varchar(225) DEFAULT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monaco20`
--

INSERT INTO `monaco20` (`img_ID`, `Caption`, `Event_ID`, `img`) VALUES
(1, 'E Camilli', 103, 'img_montecarlo/e-camilli'),
(2, 'E Lappi', 103, 'img_montecarlo/elappi'),
(3, 'E Evans', 103, 'img_montecarlo/elfynevans1'),
(4, 'E Evans', 103, 'img_montecarlo/elfynevans2'),
(5, 'Fourmaux', 103, 'img_montecarlo/fourmaux'),
(6, 'G Greensmith', 103, 'img_montecarlo/gusgreensmith'),
(7, 'T Katsuta', 103, 'img_montecarlo/katsuta1'),
(8, 'T Katsuta', 103, 'img_montecarlo/katsuta2'),
(9, 'M Ostberg', 103, 'img_montecarlo/mostberg'),
(10, 'O Tanak', 103, 'img_montecarlo/otanak'),
(11, 'Rossell', 103, 'img_montecarlo/rossell'),
(12, 'S Loeb', 103, 'img_montecarlo/sloeb'),
(13, 'S Loeb', 103, 'img_montecarlo/sloeb2'),
(14, 'S Ogier', 103, 'img_montecarlo/sogier1'),
(15, 'S Ogier', 103, 'img_montecarlo/sogier2'),
(16, 'S Ogier', 103, 'img_montecarlo/sogier3'),
(17, 'T Neuville', 103, 'img_montecarlo/tneuville1'),
(18, 'T Neuville', 103, 'img_montecarlo/tneuville2'),
(19, 'T Neuville', 103, 'img_montecarlo/tneuville3'),
(20, 'T Neuville', 103, 'img_montecarlo/tneuville4'),
(21, 'T Suninen', 103, 'img_montecarlo/tsuninen');

-- --------------------------------------------------------

--
-- Table structure for table `sweden20`
--

DROP TABLE IF EXISTS `sweden20`;
CREATE TABLE IF NOT EXISTS `sweden20` (
  `img_ID` int(11) NOT NULL,
  `Caption` varchar(225) DEFAULT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`img_ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ulster19`
--

DROP TABLE IF EXISTS `ulster19`;
CREATE TABLE IF NOT EXISTS `ulster19` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Caption` varchar(225) NOT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Event_ID` (`Event_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulster19`
--

INSERT INTO `ulster19` (`ID`, `Caption`, `Event_ID`, `img`) VALUES
(1, '1.Craig Breen\r\n', 101, 'img_Ulster/1.CraigBreen'),
(2, '2.Matt Edwards\r\n', 101, 'img_Ulster/2.MattEdwards'),
(3, '3.Alastair Fisher \r\n', 101, 'img_Ulster/3.AlastairFisher'),
(4, '4.Callum Devine\r\n', 101, 'img_Ulster/4.CallumDevine'),
(5, '12.Daniel Cronin \r\n', 101, 'img_Ulster/12.DanielCronin'),
(6, '14.Merion Evans\r\n', 101, 'img_Ulster/14.MerionEvans'),
(7, '17.Stuart Biggerstaff\r\n', 101, 'img_Ulster/17.StuartBiggerstaff'),
(8, '18.Camillus Bradley\r\n', 101, 'img_Ulster/18.CamillusBradley'),
(9, '18.Camillus Bradley\r\n', 101, 'img_Ulster/18.CamillusBradley'),
(10, '19.Damien Toner\r\n', 101, 'img_Ulster/19.DamienToner'),
(11, '21.Niall Henry \r\n', 101, 'img_Ulster/21.NiallHenry'),
(12, '22.Andy Davies\r\n', 101, 'img_Ulster/22.AndyDavis'),
(13, '23.Paul Rowley\r\n', 101, 'img_Ulster/23.PaulRowley'),
(14, '24.Willie Mavitty\r\n', 101, 'img_Ulster/24.WillieMavitty'),
(15, '26.William Creighton\r\n', 101, 'img_Ulster/26.WilliamCreighton'),
(16, '27.James Williams\r\n', 101, 'img_Ulster/27.JamesWilliams'),
(17, '29.Jordan Hone\r\n', 101, 'img_Ulster/29.JordanHone'),
(18, '35.Rupert Flynn\r\n', 101, 'img_Ulster/35.RupertFlynn'),
(19, '37.John Morrison\r\n', 101, 'img_Ulster/37.JohnMorrison'),
(20, '38.Simon Chapman\r\n', 101, 'img_Ulster/38.SimonChapman'),
(21, '40.John Devlin \r\n', 101, 'img_Ulster/40.JohnDevlin'),
(22, '41.James Kennedy\r\n', 101, 'img_Ulster/41.JamesKennedy'),
(23, '42.Adrian Hetherington \r\n', 101, 'img_Ulster/42.AdrianHetherington'),
(24, '43.Stanley Orr\r\n', 101, 'img_Ulster/43.StanleyOrr'),
(25, '44.Ray Cunningham \r\n', 101, 'img_Ulster/44.RayCunningham'),
(26, '45.Simon Webster\r\n', 101, 'img_Ulster/45.SimonWebster'),
(27, '47.Joe Price\r\n', 101, 'img_Ulster/47.JoePrice'),
(28, '48.Rikki Proffitt\r\n', 101, 'img_Ulster/48.RikkiProffitt'),
(29, '50.David Armstrong \r\n', 101, 'img_Ulster/50.DavidArmstrong'),
(30, '52.Fintan McGrady\r\n', 101, 'img_Ulster/52.FintanMcGrady'),
(31, '53.David Condell \r\n', 101, 'img_Ulster/53.DavidCondell'),
(32, '55.John Gordon', 101, 'img_Ulster/55.JohnGordon'),
(33, '56.Bryan Jardine\r\n', 101, 'img_Ulster/56.BryanJardine'),
(34, '59.Ashley Dickson\r\n', 101, 'img_Ulster/59.AshleyDickson'),
(35, '64.Gareth Black\r\n', 101, 'img_Ulster/64.GarethBlack'),
(36, '65.Seamus Braniff\r\n', 101, 'img_Ulster/65.SeamusBranniff'),
(37, '67.Matthew McGaffin\r\n', 101, 'img_Ulster/67.MatthewMcGaffin'),
(38, '68.Chris McGurk\r\n', 101, 'img_Ulster/68.ChrisMcGurk'),
(39, '71.Adrian Kermode\r\n', 101, 'img_Ulster/71.AdrianKermode'),
(40, '72.Barry Stevenson Wheeler\r\n', 101, 'img_Ulster/72.BarryStevensonWheeler'),
(41, '74.Duncan Williams\r\n', 101, 'img_Ulster/74.DuncanWilliams'),
(42, '75.Robert Erwin \r\n', 101, 'img_Ulster/75.RobertErwin'),
(43, '76.Niall Branniff \r\n', 101, 'img_Ulster/76.NiallBranniff'),
(44, '77.Steven Armstrong \r\n', 101, 'img_Ulster/77.StevenArmstrong'),
(45, '78.Gerry McPolin\r\n', 101, 'img_Ulster/78.GerryMcPolin'),
(46, '80.Quentin Park\r\n', 101, 'img_Ulster/80.QuentinPark'),
(47, '81.Philip Greenlee\r\n', 101, 'img_Ulster/81.PhilipGreenlee'),
(48, '83.Michael McGarrity\r\n', 101, 'img_Ulster/83.MichaelMcGarrity'),
(49, '89.Gavin Devlin \r\n', 101, 'img_Ulster/89.GavinDevlin'),
(50, '90.Eamon McGuigan\r\n', 101, 'img_Ulster/90.EaminMcGuigan'),
(51, '100.Jason Dickson\r\n', 101, 'img_Ulster/100.JasonDickson'),
(52, '103.Peter Hetherington\r\n', 101, 'img_Ulster/103.PeterHeatherington'),
(53, '104.Malcolm Pedlow\r\n', 101, 'img_Ulster/104.MalcolmPedlow'),
(54, '111.Niall Creighton \r\n', 101, 'img_Ulster/111.NiallCreighton');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loughgall19`
--
ALTER TABLE `loughgall19`
  ADD CONSTRAINT `loughgall19_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `events` (`Event_ID`);

--
-- Constraints for table `monaco20`
--
ALTER TABLE `monaco20`
  ADD CONSTRAINT `monaco20_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `events` (`Event_ID`);

--
-- Constraints for table `sweden20`
--
ALTER TABLE `sweden20`
  ADD CONSTRAINT `sweden20_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `events` (`Event_ID`);

--
-- Constraints for table `ulster19`
--
ALTER TABLE `ulster19`
  ADD CONSTRAINT `ulster19_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `events` (`Event_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
