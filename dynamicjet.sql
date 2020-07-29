-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 29 juil. 2020 à 23:13
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dynamicjet`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_equipement`
--

DROP TABLE IF EXISTS `category_equipement`;
CREATE TABLE IF NOT EXISTS `category_equipement` (
  `id_category` int(2) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description_category` varchar(255) NOT NULL,
  `power` int(3) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(1500) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category_equipement`
--

INSERT INTO `category_equipement` (`id_category`, `name_category`, `description_category`, `power`, `price`, `image`) VALUES
(1, 'Jet ski', 'Jet ski de racaille', 40, 35, 'https://checkyeti.imgix.net/images/optimized/jetski-offer-pages---general-hero-.jpg'),
(2, 'Wakeboard', 'Truc de normie', 20, 15, ''),
(3, 'Ski nautique', 'La justice a deux vitesses, la Lamborhini en a 6', 25, 70, '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tel` int(10) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `permis_cotier` varchar(20) DEFAULT NULL,
  `compteur_resa` int(2) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `idEmploye` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `permis_cotier_moniteur` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date_embauche` date NOT NULL,
  `date_medicale` date NOT NULL,
  `statut_contrat` enum('cdi','cdd','interim','autres') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `autres_statut_contrat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `activite` enum('moniteur','plagiste','accueil') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bees` varchar(50) DEFAULT NULL,
  `disponibilite` enum('arret','accident','conger','autres','disponible','enService','nonDiponible') NOT NULL,
  PRIMARY KEY (`idEmploye`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

DROP TABLE IF EXISTS `equipement`;
CREATE TABLE IF NOT EXISTS `equipement` (
  `id_equipement` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(2) NOT NULL,
  `state` enum('en_service','indisponible','hors_service','') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_equipement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`id_equipement`, `id_category`, `state`) VALUES
(1, 1, 'en_service');

-- --------------------------------------------------------

--
-- Structure de la table `reduction`
--

DROP TABLE IF EXISTS `reduction`;
CREATE TABLE IF NOT EXISTS `reduction` (
  `id_reduction` int(11) NOT NULL AUTO_INCREMENT,
  `id_client_reduction` int(11) NOT NULL,
  `id_reservation_reduction` int(11) NOT NULL,
  `date_reduction` date NOT NULL,
  `remboursement` int(11) NOT NULL,
  PRIMARY KEY (`id_reduction`),
  KEY `fk_reduction_vers_idClient` (`id_client_reduction`),
  KEY `fk_reduction_vers_idReservation` (`id_reservation_reduction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `idClient_reservation` int(11) NOT NULL,
  `IdEquipement_reservation` int(11) NOT NULL,
  `idMoniteur_reservation` int(11) NOT NULL,
  `date_heure_debut` datetime NOT NULL,
  `date_heure_fin` datetime NOT NULL,
  `Cout_total` float NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `fk_reservation_vers_idClient` (`idClient_reservation`),
  KEY `fk_reservation_vers_idEmploye` (`idMoniteur_reservation`),
  KEY `fk_reservation_vers_idEquipement` (`IdEquipement_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD CONSTRAINT `fk_reduction_vers_idClient` FOREIGN KEY (`id_client_reduction`) REFERENCES `client` (`idClient`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_reduction_vers_idReservation` FOREIGN KEY (`id_reservation_reduction`) REFERENCES `reservation` (`idReservation`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_vers_idClient` FOREIGN KEY (`idClient_reservation`) REFERENCES `client` (`idClient`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_reservation_vers_idEmploye` FOREIGN KEY (`idMoniteur_reservation`) REFERENCES `employe` (`idEmploye`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_reservation_vers_idEquipement` FOREIGN KEY (`IdEquipement_reservation`) REFERENCES `equipement` (`id_equipement`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
