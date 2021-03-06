-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 mai 2021 à 08:52
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
  `emplacement` varchar(500) NOT NULL,
  `procedure_` varchar(500) NOT NULL,
  `cle_editeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `app_budget`
--

CREATE TABLE `app_budget` (
  `cle` int(11) NOT NULL,
  `cle_logiciel` int(11) NOT NULL,
  `coutParAn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `app_direction`
--

CREATE TABLE `app_direction` (
  `cle` int(11) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `numero_dir` int(11) NOT NULL,
  `id_directeur` int(11) NOT NULL
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
  `telephone` varchar(60) NOT NULL,
  `interlocuteur` varchar(240) NOT NULL,
  `numero_contrat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `app_licence`
--

CREATE TABLE `app_licence` (
  `cle` int(11) NOT NULL,
  `cle_direction` int(11) NOT NULL,
  `cle_logiciel` int(11) NOT NULL,
  `debut_licence` date NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `cle_direction` int(11) NOT NULL DEFAULT 0,
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
-- Index pour la table `app_budget`
--
ALTER TABLE `app_budget`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `app_direction`
--
ALTER TABLE `app_direction`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `app_editeur`
--
ALTER TABLE `app_editeur`
  ADD PRIMARY KEY (`cle`);

--
-- Index pour la table `app_licence`
--
ALTER TABLE `app_licence`
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
-- AUTO_INCREMENT pour la table `app_budget`
--
ALTER TABLE `app_budget`
  MODIFY `cle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_direction`
--
ALTER TABLE `app_direction`
  MODIFY `cle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_editeur`
--
ALTER TABLE `app_editeur`
  MODIFY `cle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `app_licence`
--
ALTER TABLE `app_licence`
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
