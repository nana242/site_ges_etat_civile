-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Mai 2023 à 17:09
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `etatcivil1`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_login`
--

CREATE TABLE `admin_login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `admin_login`
--

INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', '16b52cdd67f7048dd09b455869c6ff84');

-- --------------------------------------------------------

--
-- Structure de la table `deces`
--

CREATE TABLE `deces` (
  `code_deces` int(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(30) NOT NULL,
  `date_deces` date NOT NULL,
  `h_deces` time NOT NULL,
  `lieu_deces` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `D_defunt` varchar(100) NOT NULL,
  `c_deces` varchar(30) NOT NULL,
  `nom_municipalite` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `deces`
--

INSERT INTO `deces` (`code_deces`, `nom`, `prenom`, `sexe`, `date_naiss`, `lieu_naiss`, `date_deces`, `h_deces`, `lieu_deces`, `profession`, `D_defunt`, `c_deces`, `nom_municipalite`) VALUES
(10, 'LEON', 'Beliche', 'maxculin', '2023-12-31', 'Rue Mbama', '2034-10-30', '23:59:00', 'Ã  la maison', 'Etudiant', '49 rue Béranger', 'VHI SIDA', 'MAKELEKELE'),
(45, 'Benard', 'Rochell', 'maxculin', '2023-12-31', ' brazzaville', '2023-12-31', '23:59:00', 'la maison', 'Etudiant', '39 rue Mafouta', 'VHI SIDA', 'MAKELEKELE');

-- --------------------------------------------------------

--
-- Structure de la table `municipalite`
--

CREATE TABLE `municipalite` (
  `nom` varchar(30) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `municipalite`
--

INSERT INTO `municipalite` (`nom`, `id`) VALUES
('MAKELEKELE', 1);

-- --------------------------------------------------------

--
-- Structure de la table `naissances`
--

CREATE TABLE `naissances` (
  `code_naiss` int(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naiss` date NOT NULL,
  `h_naiss` time NOT NULL,
  `lieu_naiss` varchar(30) NOT NULL,
  `nom_pere` varchar(30) NOT NULL,
  `prenom_pere` varchar(30) NOT NULL,
  `natio_pere` varchar(60) NOT NULL,
  `nom_mere` varchar(30) NOT NULL,
  `prenom_mere` varchar(30) NOT NULL,
  `natio_mere` varchar(60) NOT NULL,
  `nom_municipalite` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `naissances`
--

INSERT INTO `naissances` (`code_naiss`, `nom`, `prenom`, `sexe`, `date_naiss`, `h_naiss`, `lieu_naiss`, `nom_pere`, `prenom_pere`, `natio_pere`, `nom_mere`, `prenom_mere`, `natio_mere`, `nom_municipalite`) VALUES
(41, 'BATETANA', 'Benny ', 'maxculin', '2023-04-14', '16:24:00', ' brazzaville', 'BAVOUEZA', 'Isidor', 'Congolaise', 'MOUANGA', 'Nina Diane', 'Congolaise', 'MAKELEKELE');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`userid`);

--
-- Index pour la table `deces`
--
ALTER TABLE `deces`
  ADD PRIMARY KEY (`code_deces`),
  ADD KEY `nom_municipalite` (`nom_municipalite`);

--
-- Index pour la table `municipalite`
--
ALTER TABLE `municipalite`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `naissances`
--
ALTER TABLE `naissances`
  ADD PRIMARY KEY (`code_naiss`),
  ADD KEY `nom_municipalite` (`nom_municipalite`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `deces`
--
ALTER TABLE `deces`
  ADD CONSTRAINT `deces_ibfk_2` FOREIGN KEY (`nom_municipalite`) REFERENCES `municipalite` (`nom`);

--
-- Contraintes pour la table `naissances`
--
ALTER TABLE `naissances`
  ADD CONSTRAINT `naissances_ibfk_4` FOREIGN KEY (`nom_municipalite`) REFERENCES `municipalite` (`nom`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
