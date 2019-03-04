-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 mars 2019 à 08:16
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `vetements`
--

DROP TABLE IF EXISTS `vetements`;
CREATE TABLE IF NOT EXISTS `vetements` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Modele` varchar(30) NOT NULL,
  `Marque` varchar(30) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Prix` double NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Date_arrivée` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vetements`
--

INSERT INTO `vetements` (`Id`, `Nom`, `Modele`, `Marque`, `Photo`, `Prix`, `Pays`, `Description`, `Date_arrivée`) VALUES
(25, 'Pull', 'Femme', 'Pull &amp; Bear', 'pull_pb.jpg', 40, 'France', 'Pull en cachemir qui tient au chaud.', '2019-02-23 23:42:45'),
(28, 'Lunette', 'Homme', 'Cartier', '7619e7aa-0a03-4e0b-8ccc-71808f69dbb3.jpg', 270, 'France', 'GGEZ', '2019-02-25 18:18:50'),
(31, 'Montre', 'Homme', 'Hugo Boss', 'HIMHBQB6650.jpg', 265, 'Espagne', 'Belle montre pour homme.', '2019-03-03 14:59:43'),
(32, 'Jean', 'Femme', 'Levis', 'LE221N04M-K11@10.jpg', 80, 'Portugal', 'Jean levis femme', '2019-03-03 15:05:41'),
(33, 'Basket', 'BÃ©bÃ©', 'Nike', '513H3NOeLuL.jpg', 80, 'Etas unis', 'Basket Nike pour BÃ©bÃ©', '2019-03-03 15:07:35'),
(34, 'Basket 270', 'Homme', 'Nike', '000000000001396097_1.jpg', 150, 'France', 'Belle paire de basket nike', '2019-03-03 15:12:46'),
(35, 'Basket', 'Femme', 'Addidas', '793781_200_A.jpg', 100, 'Allemagne', 'Basket Addidas pour femme', '2019-03-03 15:13:31'),
(36, 'Montre', 'Femme', 'Guess', 'HIMFBQF0E80.jpg', 170, 'France', 'Belle montre avec des diamants.', '2019-03-03 15:14:56'),
(37, 'Polo', 'Homme', 'Lacoste', 'lacoste-polo-lacoste-dh9483-002rg.jpg', 120, 'France', 'Jolie polo Lacoste pour Homme', '2019-03-03 15:19:49'),
(38, 'Doudoune', 'Femme', 'Zara', 'veste.jpg', 100, 'France', 'Belle Doudoune pour l\\\'hiver.', '2019-03-03 15:21:51'),
(39, 'Chapeau', 'Homme', 'Decathlon', '904607_899A08_portrait_HD_1.jpg', 30, 'France', 'Chapeau annÃ©e 1970', '2019-03-03 15:47:06'),
(40, 'GrenouillÃ¨re', 'BÃ©bÃ©', 'PSG', 'grenouillere-bebe-garcon-psg-collection-officiel.jpg', 55, 'France', 'Jolie grenouillÃ¨re du PSG.', '2019-03-03 15:55:37'),
(41, 'Casquette', 'Homme', 'Nike', '000000000001396097_1.jpg', 100, 'France', 'pjgejp', '2019-03-04 08:15:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
