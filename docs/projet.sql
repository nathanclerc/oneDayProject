-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mer 05 Septembre 2018 à 16:54
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `Avis`
--

CREATE TABLE `Avis` (
  `avis_id` int(11) NOT NULL,
  `avis_question1` text NOT NULL,
  `avis_question2` text NOT NULL,
  `avis_sortie` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avis_coordonnee` varchar(50) DEFAULT NULL,
  `avis_dispo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Visiteur`
--

CREATE TABLE `Visiteur` (
  `visiteur_id` int(11) NOT NULL,
  `visiteur_nom` varchar(50) NOT NULL,
  `visiteur_prenom` varchar(50) NOT NULL,
  `visiteur_entreprise` varchar(50) DEFAULT NULL,
  `visiteur_poste` varchar(50) DEFAULT NULL,
  `visiteur_enregistrement` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visiteur_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Avis`
--
ALTER TABLE `Avis`
  ADD PRIMARY KEY (`avis_id`);

--
-- Index pour la table `Visiteur`
--
ALTER TABLE `Visiteur`
  ADD PRIMARY KEY (`visiteur_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Avis`
--
ALTER TABLE `Avis`
  MODIFY `avis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `Visiteur`
--
ALTER TABLE `Visiteur`
  MODIFY `visiteur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
