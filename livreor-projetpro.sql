-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 17 fév. 2020 à 14:14
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livreor`
--
CREATE DATABASE IF NOT EXISTS `livreor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `livreor`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'blabla', 123, '2019-11-20'),
(2, 'blabla', 123, '2019-11-20'),
(3, 'blabla', 123, '2019-11-20'),
(4, 'blablabla teste\r\n', 4, '2019-11-22'),
(5, 'blablabla teste\r\n', 4, '2019-11-22'),
(6, 'blablabla teste\r\n', 4, '2019-11-22'),
(7, 'blablabla teste\r\n', 4, '2019-11-22'),
(8, 'blablabla teste\r\n', 4, '2019-11-22'),
(9, 'blablabla teste\r\n', 4, '2019-11-22'),
(10, 'blablabla teste\r\n', 4, '2019-11-22'),
(11, 'blablabla teste\r\n', 4, '2019-11-22'),
(12, 'blablabla teste\r\n', 4, '2019-11-22'),
(13, 'blablabla teste\r\n', 4, '2019-11-22'),
(14, 'blablabla teste\r\n', 4, '2019-11-22'),
(15, 'blablabla teste\r\n', 4, '2019-11-22'),
(16, 'blablabla teste\r\n', 4, '2019-11-22'),
(17, 'blablabla teste\r\n', 4, '2019-11-22'),
(18, 'yghmlÃ¹mdlkdljksdqslcksqs,djqsbxqls!:\r\n', 4, '2019-11-23'),
(19, 'bla bla bla\r\n', 6, '2020-01-20'),
(20, 'blabla test\r\n', 4, '2020-02-17'),
(21, 'ok ok test\r\n', 4, '2020-02-17');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'thomas', 'thomas'),
(2, 'michel', ''),
(3, 'laurent', '123'),
(4, 'admin', 'admin'),
(5, 'thomas', 'thomas'),
(6, 'toto', 'toto');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
