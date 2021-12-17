-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 déc. 2021 à 20:20
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotellerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `numChambre` int NOT NULL AUTO_INCREMENT,
  `prix` float DEFAULT NULL,
  `nbLits` int DEFAULT NULL,
  `nbPers` int DEFAULT NULL,
  `image` varchar(20) NOT NULL,
  `description` text,
  PRIMARY KEY (`numChambre`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numChambre`, `prix`, `nbLits`, `nbPers`, `image`, `description`) VALUES
(11, 30, 2, 2, 'image', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour '),
(12, 40, 3, 4, 'images', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour '),
(13, 18, 4, 5, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `numClient` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `tel` int DEFAULT NULL,
  PRIMARY KEY (`numClient`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`numClient`, `nom`, `prenom`, `tel`) VALUES
(1, 'MAMA', 'ndiaye', 14565896),
(2, 'toi', 'toi', 749232063),
(3, 'toto', 'tata', 14565896);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `numClient` int NOT NULL,
  `numChambre` int NOT NULL,
  `dateArrivee` date NOT NULL,
  `dateDepart` date NOT NULL,
  PRIMARY KEY (`numClient`,`numChambre`),
  KEY `numClient` (`numClient`),
  KEY `numChambre` (`numChambre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reserver`
--

INSERT INTO `reserver` (`numClient`, `numChambre`, `dateArrivee`, `dateDepart`) VALUES
(1, 12, '2021-12-21', '2021-12-22'),
(2, 11, '2020-11-13', '2023-02-15'),
(3, 11, '2021-12-23', '2021-12-15');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_util` bigint NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `mot_de_passe` varchar(70) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_util`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `login`, `mot_de_passe`, `role`) VALUES
(3, 'pseudo1', 'wone', 'admin'),
(4, 'pseudo2', 'reception', 'receptionniste');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `reserver_ibfk_2` FOREIGN KEY (`numChambre`) REFERENCES `chambre` (`numChambre`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `reserver_ibfk_3` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
