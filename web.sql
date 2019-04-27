-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 avr. 2019 à 17:49
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `web`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` text NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `pwd`, `adresse`, `numero`) VALUES
(2, 'ouerguemmi', 'islem', 'islem.ouerguemmi@esprit.tn', 'dfd', 'bizerte', 25552222),
(3, 'd', 'IJ', 'n.affes@yahoo.com', 'dsf', 'guy', 55),
(4, 'd', 'IJ', 'n.affes@yahoo.com', 'dsf', 'guy', 55),
(5, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(6, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(7, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(8, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(9, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(10, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(11, 'd', 'IJ', 'n.affes@yahoo.com', 'hjjh', 'guy', 55),
(12, 'd', 'IJ', 'n.affes@yahoo.com', 'dfg', 'guy', 55),
(13, 'd', 'IJ', 'n.affes@yahoo.com', 'dfg', 'guy', 55),
(14, 'sf', 'dsf', 'n.affes@yahoo.com', 'df', 'UGYV', 55),
(15, 'mathieu', 'ddddd', 'nour.affes@esprit.tn', 'dfv', 'dfg', 66),
(16, 'mathieu', 'ddddd', 'nour.affes@esprit.tn', 'dfv', 'dfg', 66),
(17, 'mathieu', 'ddddd', 'nour.affes@esprit.tn', 'dfv', 'dfg', 66),
(18, 'mathieu', 'ddddd', 'nour.affes@esprit.tn', 'sdf', 'dfg', 66),
(19, 'mathieu', 'ddddd', 'nour.affes@esprit.tn', 'sdf', 'dfg', 66),
(20, 'sed', 'sd', 'n.affes@yahoo.com', 'dfsv', 'sd', 77),
(21, 'ouerghemmi', 'islem', 'islem.ouerguemmi@esprit.tn', 'ezf;fs,', 'ariana', 54544);

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `ad` int(11) NOT NULL AUTO_INCREMENT,
  `ville` varchar(255) NOT NULL,
  `cite` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `classement` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`ad`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`ad`, `ville`, `cite`, `rue`, `id`, `classement`, `type`, `num`) VALUES
(1, 'hh', 'bv', 'b', 559, 1, 'adresse autre', 51),
(2, 'hh', 'bv', 'b', 559, 1, 'adresse autre', 51),
(3, 'hh', 'bv', 'b', 559, 1, 'adresse autre', 51),
(4, 'hh', 'bv', 'b', 559, 1, 'adresse autre', 51),
(5, 'hh', 'bv', 'b', 558, 44, 'adresse locale', 0),
(6, 'hh', 'bv', 'b', 558, 1, 'adresse locale', 0),
(7, '7', '7', '7', 558, 1, 'adresse autre', 51),
(8, 'hh', 'bv', 'b', 558, 33, 'adresse locale', 0),
(9, 'hh', 'bv', 'b', 558, 22, 'adresse locale', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numero` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=565 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `pwd`, `adresse`, `numero`) VALUES
(558, 'KOP', 'mathieu', 'n.affes@yahoo.com', '99', 'sef', 85),
(555, 'mathieu', 'mathieu', 'n.affes@yahoo.com', 'jj', 'sef', 44),
(559, 'KOP', 'mathieu', 'n.affes@yahoo.com', 'hkj', 'sef', 85),
(8, '9', '9', '9', '9', '9', 9),
(552, 'KOP', 'mathieu', 'n.affes@yahoo.com', 'mÃ¹', 'dfg', 1),
(553, 'KOP', 'mathieu', 'n.affes@yahoo.com', 'sef', 'dfg', 1),
(3, 'KOP', 'mathieu', 'n.affes@yahoo.com', 'fff', '5', 44),
(560, 'KOP', 'mathieu', 'n.affes@yahoo.com', '1', '1', 1),
(561, 'KOP', 'mathieu', 'n.affes@yahoo.com', '4', 'sd', 1),
(562, 'KOP', 'mathieu', 'n.affes@yahoo.com', '55', 'sd', 2),
(563, 'KOP', 'IJ', 'n.affes@yahoo.com', '66', 'sef', 1),
(564, 'KOP', 'IJ', 'n.affes@yahoo.com', '66', 'sef', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
