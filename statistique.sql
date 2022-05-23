-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2020 at 05:40 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistique`
--

-- --------------------------------------------------------

--
-- Table structure for table `cli`
--

DROP TABLE IF EXISTS `cli`;
CREATE TABLE IF NOT EXISTS `cli` (
  `TIERS` varchar(25) NOT NULL,
  `NOMABR` varchar(25) NOT NULL,
  PRIMARY KEY (`TIERS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mouv`
--

DROP TABLE IF EXISTS `mouv`;
CREATE TABLE IF NOT EXISTS `mouv` (
  `Dos` varchar(40) DEFAULT NULL,
  `Tiers` varchar(25) DEFAULT NULL,
  `REF` varchar(25) NOT NULL,
  `CDNO` int(11) DEFAULT NULL,
  `CDDT` date DEFAULT NULL,
  `BLNO` int(11) DEFAULT NULL,
  `FADT` int(11) DEFAULT NULL,
  `FANO` int(11) DEFAULT NULL,
  `BLDT` date DEFAULT NULL,
  `OP` varchar(10) NOT NULL,
  `DEPO` varchar(30) DEFAULT NULL,
  `ETB` int(11) DEFAULT NULL,
  `DES` varchar(30) DEFAULT NULL,
  `PUB` int(11) DEFAULT NULL,
  `BLQTE` int(11) DEFAULT NULL,
  `MONT` int(11) DEFAULT NULL,
  PRIMARY KEY (`REF`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouv`
--

INSERT INTO `mouv` (`Dos`, `Tiers`, `REF`, `CDNO`, `CDDT`, `BLNO`, `FADT`, `FANO`, `BLDT`, `OP`, `DEPO`, `ETB`, `DES`, `PUB`, `BLQTE`, `MONT`) VALUES
(NULL, '125552553', 'xcvvcv251cxv1531', NULL, NULL, NULL, NULL, NULL, '2020-08-04', 'c', NULL, NULL, 'Marchar', NULL, 200, 3600),
(NULL, '55665632322', 'kjcfgjklmhggbg,kj', NULL, NULL, NULL, NULL, NULL, '2020-08-18', 'c', NULL, NULL, 'Marcharouka', NULL, 965, 255856),
(NULL, '125552553', 'bcvvcv251cxv1531', NULL, NULL, NULL, NULL, NULL, '2020-08-04', 'c', NULL, NULL, 'Marchar', NULL, 200, 3600),
(NULL, '105550053', 'pe89majks69mqpou', NULL, NULL, NULL, NULL, NULL, '2019-01-29', 'g', NULL, NULL, 'bidons', NULL, 120, 1600),
(NULL, '03340012', 'yzou2566mapo', NULL, NULL, NULL, NULL, NULL, '2020-09-05', 'f', NULL, NULL, 'bouteuille', NULL, 500, 7900),
(NULL, '135552553', 'cxv1531xcvvcv251', NULL, NULL, NULL, NULL, NULL, '2020-11-24', 'd', NULL, NULL, 'bouchons', NULL, 200, 6300),
(NULL, '55665632322', 'k1jcfgjklmhggbg,kj', NULL, NULL, NULL, NULL, NULL, '2020-08-18', 'c', NULL, NULL, 'Marcharouka', NULL, 965, 255856);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Logi` int(11) NOT NULL AUTO_INCREMENT,
  `type_user` varchar(25) NOT NULL,
  `Mot_de_passe` varchar(25) NOT NULL,
  `Confidentialite` varchar(25) DEFAULT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `num` int(9) NOT NULL,
  PRIMARY KEY (`Logi`)
) ENGINE=MyISAM AUTO_INCREMENT=569783125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Logi`, `type_user`, `Mot_de_passe`, `Confidentialite`, `nom`, `prenom`, `email`, `num`) VALUES
(123456789, 'admin', '', '', '', '', '', 0),
(13863820, 'invite', 'oj?4KIYW', 'vente/achat', '', '', '', 0),
(13263829, 'invite', '123456', 'achat', '', '', 'abirmoussa@gmail.com', 0),
(13863829, 'invite', 'gk1gJDIh', 'achat', '', '', '', 0),
(13263000, 'invite', 'sOj60lsq', 'vente', '', 'nader', 'essid.nizar.123@gmail.com', 20350014),
(13263029, 'invite', '0G9wQRSQ', 'vente', '', 'nader', 'talbi@gmail.com', 20000000),
(13060329, 'invite', 'gWRue3le', 'vente', 'nader', 'nader', 'l@gmail.com', 20000000),
(10260329, 'invite', 'okCEG9ke', 'vente', 'hammouda', 'nader', 'talbi@gmail.com', 20000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
