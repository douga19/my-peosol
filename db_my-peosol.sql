-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2014 at 11:49 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_my-peosol`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(255) NOT NULL,
  `mailClient` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dateReception` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nomClient`, `mailClient`, `contenu`, `dateReception`) VALUES
(1, 'nom', 'mail', 'message', '2014-11-03 14:22:58'),
(2, 'rakoto', 'douga19@live.fr', 'qsdfqsfd', '2014-11-03 14:28:08'),
(3, 'rakoto', 'douga19@live.fr', 'qsdf', '2014-11-03 14:29:41'),
(4, '', 'douga19@live.fr', 'qsdf', '2014-11-03 14:37:26'),
(5, '', 'douga19@live.fr', 'qsdf', '2014-11-03 14:38:06'),
(6, '', 'qsdf', 'qfds', '2014-11-03 14:38:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
