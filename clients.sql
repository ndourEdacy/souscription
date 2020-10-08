-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 08 oct. 2020 à 23:14
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `souscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `date_naiss` date DEFAULT NULL,
  `lieux_naiss` varchar(45) DEFAULT NULL,
  `nationalite` varchar(45) DEFAULT NULL,
  `lieuxSouscrip` varchar(45) DEFAULT NULL,
  `sexe` varchar(25) DEFAULT NULL,
  `type_piece` varchar(25) DEFAULT NULL,
  `numero_piece` varchar(255) DEFAULT NULL,
  `date_delivre` date DEFAULT NULL,
  `code_postal` varchar(25) DEFAULT NULL,
  `localite` varchar(45) DEFAULT NULL,
  `telephone_client` bigint(255) DEFAULT NULL,
  `email_client` varchar(45) DEFAULT NULL,
  `fax_client` int(35) DEFAULT NULL,
  `type_client` varchar(5) DEFAULT NULL,
  `fonction_pp` varchar(35) DEFAULT NULL,
  `nom_employeur` varchar(55) DEFAULT NULL,
  `adress_employeur` varchar(45) DEFAULT NULL,
  `telephone_employeur` bigint(255) DEFAULT NULL,
  `email_employeur` varchar(55) DEFAULT NULL,
  `fax_employeur` bigint(11) DEFAULT NULL,
  `secteur` varchar(54) DEFAULT NULL,
  `poste_ocupe` varchar(45) DEFAULT NULL,
  `denomination` varchar(45) DEFAULT NULL,
  `forme_juridique` varchar(45) DEFAULT NULL,
  `capital_social` double DEFAULT NULL,
  `adress_pm` varchar(35) DEFAULT NULL,
  `code_postal_pm` varchar(11) DEFAULT NULL,
  `region_pm` varchar(45) DEFAULT NULL,
  `tephone_pm` bigint(25) DEFAULT NULL,
  `email_pm` varchar(45) DEFAULT NULL,
  `nombre_titre` int(11) DEFAULT NULL,
  `type_paiement` varchar(15) DEFAULT NULL,
  `numero_cheque` bigint(25) DEFAULT NULL,
  `nom_sgi` varchar(45) DEFAULT NULL,
  `numero_compte` varchar(255) DEFAULT NULL,
  `numero_compte_bang` varchar(255) DEFAULT NULL,
  `date_souscription` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `date_naiss`, `lieux_naiss`, `nationalite`, `lieuxSouscrip`, `sexe`, `type_piece`, `numero_piece`, `date_delivre`, `code_postal`, `localite`, `telephone_client`, `email_client`, `fax_client`, `type_client`, `fonction_pp`, `nom_employeur`, `adress_employeur`, `telephone_employeur`, `email_employeur`, `fax_employeur`, `secteur`, `poste_ocupe`, `denomination`, `forme_juridique`, `capital_social`, `adress_pm`, `code_postal_pm`, `region_pm`, `tephone_pm`, `email_pm`, `nombre_titre`, `type_paiement`, `numero_cheque`, `nom_sgi`, `numero_compte`, `numero_compte_bang`, `date_souscription`) VALUES
(26, 'izip', 'uozu', '2020-09-28', 'kkjfj', 'Afghanistan', 'Afghanistan', 'HOMME', 'cni', 'jfjj', '2020-09-28', 'opoeo', '  poeool', 909380, 'kkfjk', 9999021, 'pp', 'fonctionnaire', 'KJKFK', 'JKJFJDA', 92093280, 'KKJSJO', 30192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cheque', 992, '', '', '', '2020-10-07 09:50:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
