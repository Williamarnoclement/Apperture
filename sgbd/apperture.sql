-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 26 fév. 2021 à 16:43
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apperture`
--

-- --------------------------------------------------------

--
-- Structure de la table `app_application`
--

CREATE TABLE `app_application` (
  `cle` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `cle_editeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `app_editeur`
--

CREATE TABLE `app_editeur` (
  `cle` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `site_internet` varchar(200) NOT NULL,
  `id_connexion` varchar(60) NOT NULL,
  `mdp_connexion` varchar(240) NOT NULL,
  `salt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `app_utilisateur`
--

CREATE TABLE `app_utilisateur` (
  `cle` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `identifiant` varchar(30) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `salt` varchar(130) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isTechnicien` tinyint(1) NOT NULL DEFAULT 0,
  `isEnAttente` tinyint(1) NOT NULL DEFAULT 1,
  `isVIP` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `app_application`
--
ALTER TABLE `app_application`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `app_editeur`
--
ALTER TABLE `app_editeur`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `app_utilisateur`
--
ALTER TABLE `app_utilisateur`
  ADD PRIMARY KEY (`cle`),
  ADD UNIQUE KEY `I_identifiant` (`identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `app_application`
--
ALTER TABLE `app_application`
  MODIFY `cle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_editeur`
--
ALTER TABLE `app_editeur`
  MODIFY `cle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_utilisateur`
--
ALTER TABLE `app_utilisateur`
  MODIFY `cle` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
