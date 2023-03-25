-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2020 at 09:03 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `favourite_event` varchar(255) NOT NULL,
  `event_desire` varchar(500) NOT NULL,
  `fav_driver` varchar(100) NOT NULL,
  `fav_car` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `favourite_event`, `event_desire`, `fav_driver`, `fav_car`) VALUES
(13, 'Max', 'jjohnston899@hotmail.co.uk', '507606946ca0ed082a2a26afc237a023', 'Circuit of Ireland', 'Donegal, Mayo, Cavan, Sweden, France', 'Donagh Kelly', 'Ford Focus WRC'),
(14, 'JamesJohnston1', 'jjohnston899@yahoo.co.uk', '507606946ca0ed082a2a26afc237a023', 'Ulster Rally', 'Donegal, Mayo, Cavan, Carlow, Monaghan', 'Kris Meeke', 'Mark 2 Escort'),
(18, 'Matthew1', 'mjones1@yahoo.co.uk', '507606946ca0ed082a2a26afc237a023', 'Circuit of Ireland', 'Donegal, Mayo, Tyrone', 'Declan Boyle ', 'Ford Focus WRC'),
(19, 'TravelTag1234', 'jjohnston899@gmail.co.uk', 'Markethill9', 'sperrins', 'tyrone, cavan, Monaghan', 'Eugene Donnelly', 'Mark 2'),
(20, 'JohnToner', 'jtoner@outlook.com', '507606946ca0ed082a2a26afc237a023', 'Circuit of Ireland', 'Wales Rally GB', 'Declan Boyle', 'Mark 2 Escort'),
(21, 'JimMcKenna', 'jjohnston988@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(22, 'HansJohnston', 'hans.johnston@btinternet.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Circuit of Ireland', 'Ulster Rally', 'Donagh Kelly', 'Mark 2 '),
(23, 'ZakkJ', 'Zakk@btinternet.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Circuit of Ireland', 'Donegal', 'Gwyndaf Evans', 'Mark 2 Escort');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
