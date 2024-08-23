-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 mai 2024 à 21:29
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_perception_trajets`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=877 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(876, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `annees`
--

DROP TABLE IF EXISTS `annees`;
CREATE TABLE IF NOT EXISTS `annees` (
  `id_annee` int NOT NULL AUTO_INCREMENT,
  `designation` int NOT NULL,
  PRIMARY KEY (`id_annee`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annees`
--

INSERT INTO `annees` (`id_annee`, `designation`) VALUES
(1, 2020),
(2, 2003);

-- --------------------------------------------------------

--
-- Structure de la table `clients_partis`
--

DROP TABLE IF EXISTS `clients_partis`;
CREATE TABLE IF NOT EXISTS `clients_partis` (
  `id` int NOT NULL,
  `nom` text NOT NULL,
  `postnom` text NOT NULL,
  `contact` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clients_partis`
--

INSERT INTO `clients_partis` (`id`, `nom`, `postnom`, `contact`) VALUES
(2, 'KAVIRA', 'GHODO', 97866544);

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
CREATE TABLE IF NOT EXISTS `paiements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idvoyageur` int NOT NULL,
  `idPercepteur` int NOT NULL,
  `idtrajet` int NOT NULL,
  `anneeEnCours` int NOT NULL,
  `date_paiement` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `idvoyageur`, `idPercepteur`, `idtrajet`, `anneeEnCours`, `date_paiement`) VALUES
(1, 1, 876, 1, 2003, '2024-05-21');

-- --------------------------------------------------------

--
-- Structure de la table `percepteurs`
--

DROP TABLE IF EXISTS `percepteurs`;
CREATE TABLE IF NOT EXISTS `percepteurs` (
  `id_percepteur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id_percepteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `trajets`
--

DROP TABLE IF EXISTS `trajets`;
CREATE TABLE IF NOT EXISTS `trajets` (
  `id_trajet` int NOT NULL AUTO_INCREMENT,
  `designation` text NOT NULL,
  `montant` int NOT NULL,
  PRIMARY KEY (`id_trajet`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trajets`
--

INSERT INTO `trajets` (`id_trajet`, `designation`, `montant`) VALUES
(1, 'BENI-BUTEMBO', 23000);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `trajets_vip`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `trajets_vip`;
CREATE TABLE IF NOT EXISTS `trajets_vip` (
`designation` text
,`id_trajet` int
,`montant` int
);

-- --------------------------------------------------------

--
-- Structure de la table `voyageurs`
--

DROP TABLE IF EXISTS `voyageurs`;
CREATE TABLE IF NOT EXISTS `voyageurs` (
  `id_voyageur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`id_voyageur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voyageurs`
--

INSERT INTO `voyageurs` (`id_voyageur`, `nom`, `postnom`, `prenom`, `telephone`, `adresse`) VALUES
(1, 'KAHINDO', 'KAMALA', 'SARAH', 92277659, 'KIKOMA');

--
-- Déclencheurs `voyageurs`
--
DROP TRIGGER IF EXISTS `apres_suppression`;
DELIMITER $$
CREATE TRIGGER `apres_suppression` AFTER DELETE ON `voyageurs` FOR EACH ROW INSERT INTO clients_partis(id,nom,postnom,contact)
VALUES(OLD.id_voyageur,OLD.nom,OLD.postnom,OLD.telephone)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la vue `trajets_vip`
--
DROP TABLE IF EXISTS `trajets_vip`;

DROP VIEW IF EXISTS `trajets_vip`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `trajets_vip`  AS SELECT `trajets`.`id_trajet` AS `id_trajet`, `trajets`.`designation` AS `designation`, `trajets`.`montant` AS `montant` FROM `trajets` WHERE (`trajets`.`montant` > 10000)  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
