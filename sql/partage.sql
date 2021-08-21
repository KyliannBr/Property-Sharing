-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 août 2021 à 23:28
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `partage`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `username` text COLLATE geostd8_bin NOT NULL,
  `entiteAjoutee` text COLLATE geostd8_bin NOT NULL,
  `entiteeLouee` text COLLATE geostd8_bin NOT NULL,
  `entiteentraindelouer` text COLLATE geostd8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=geostd8 COLLATE=geostd8_bin;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`username`, `entiteAjoutee`, `entiteeLouee`, `entiteentraindelouer`) VALUES
('kyliann', '0', ' ', ' '),
('kyliann', '1', ' ', ' '),
('kyliann', '2', ' ', ' '),
('kyliann', '3', ' ', ' '),
('kyliann', '4', ' ', ' '),
('kyliann', '5', ' ', ' '),
('kyliann', '6', ' ', ' '),
('kyliann', '7', ' ', ' '),
('kyliann', '8', ' ', ' '),
('kyliann', '9', ' ', ' '),
('kyliann', '10', ' ', ' '),
('kyliann', '11', ' ', ' '),
('kyliann', '12', ' ', ' '),
('kyliann', '13', ' ', ' '),
('clemence', '14', ' ', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `username` text COLLATE geostd8_bin NOT NULL,
  `password` text COLLATE geostd8_bin NOT NULL,
  `dateheure` text COLLATE geostd8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=geostd8 COLLATE=geostd8_bin;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`username`, `password`, `dateheure`) VALUES
('kyliann', 'brisson', '10-06-2021 14:50:33'),
('kyliann', 'brisson', '10-06-2021 14:51:05'),
('kyliann', 'brisson', '10-06-2021 14:57:00'),
('kyliann', 'brisson', '10-06-2021 15:08:24'),
('kyliann', 'brisson', '10-06-2021 15:10:14'),
('kyliann', 'brisson', '10-06-2021 15:19:28'),
('kyliann', 'brisson', '10-06-2021 15:20:15'),
('kyliann', 'brisson', '11-06-2021 10:35:32'),
('kyliann', 'brisson', '11-06-2021 10:36:04'),
('kyliann', 'brisson', '11-06-2021 10:36:23'),
('kyliann', 'brisson', '11-06-2021 10:37:01'),
('kyliann', 'brisson', '11-06-2021 10:37:17'),
('kyliann', 'brisson', '11-06-2021 10:44:06'),
('kyliann', 'brisson', '11-06-2021 10:47:34'),
('kyliann', 'brisson', '11-06-2021 10:48:38'),
('kyliann', 'brisson', '11-06-2021 10:48:49'),
('kyliann', 'brisson', '11-06-2021 10:51:58'),
('kyliann', 'brisson', '11-06-2021 11:27:07'),
('kyliann', 'brisson', '11-06-2021 11:27:42'),
('kyliann', 'brisson', '11-06-2021 11:34:22'),
('kyliann', 'brisson', '11-06-2021 11:37:38'),
('kyliann', 'brisson', '11-06-2021 11:38:10'),
('kyliann', 'brisson', '11-06-2021 13:05:17'),
('kyliann', 'brisson', '11-06-2021 13:08:30'),
('kyliann', 'brisson', '11-06-2021 13:20:07'),
('kyliann', 'brisson', '11-06-2021 13:22:45'),
('kyliann', 'brisson', '11-06-2021 13:23:05'),
('clemence', '', '2021-06-11 13:29:31'),
('clemence', 'batut', '2021-06-11 13:30:41'),
('clemence', 'batut', '11-06-2021 13:32:01'),
('kyliann', 'brisson', '11-06-2021 14:14:07'),
('kyliann', 'brisson', '11-06-2021 14:31:07'),
('kyliann', 'brisson', '11-06-2021 21:55:41'),
('kyliann', 'brisson', '11-06-2021 21:58:14'),
('kyliann', 'brisson', '11-06-2021 22:11:27'),
('kyliann', 'brisson', '11-06-2021 23:57:06'),
('kyliann', 'brisson', '12-06-2021 00:35:59'),
('clemence', 'batut', '12-06-2021 01:02:38'),
('kyliann', 'brisson', '13-06-2021 12:36:23'),
('kyliann', 'brisson', '13-06-2021 12:37:07'),
('kyliann', 'brisson', '15-06-2021 21:12:09'),
('kyliann', 'brisson', '15-06-2021 21:12:50'),
('kyliann', 'brisson', '15-06-2021 21:50:56'),
('kyliann', 'brisson', '17-06-2021 11:30:47'),
('kyliann', 'brisson', '17-06-2021 13:20:52'),
('kyliann', 'brisson', '17-06-2021 13:21:53'),
('clemence', 'batut', '17-06-2021 15:42:28'),
('kyliann', 'brisson', '17-06-2021 17:07:12'),
('clemence', 'batut', '17-06-2021 17:07:30'),
('kyliann', 'brisson', '17-06-2021 17:07:40'),
('clemence', 'batut', '17-06-2021 17:13:30'),
('kyliann', 'brisson', '17-06-2021 17:30:20'),
('kyliann', 'brisson', '18-06-2021 17:13:54'),
('kyliann', 'brisson', '18-06-2021 17:15:01'),
('kyliann', 'brisson', '18-06-2021 17:16:14'),
('kyliann', 'brisson', '18-06-2021 17:19:10'),
('kyliann', 'brisson', '20-06-2021 18:16:54'),
('kyliann', 'brisson', '21-06-2021 18:11:03'),
('kyliann', 'brisson', '21-06-2021 18:12:26'),
('kyliann', 'brisson', '25-07-2021 13:35:14');

-- --------------------------------------------------------

--
-- Structure de la table `identifiantsentite`
--

CREATE TABLE `identifiantsentite` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE geostd8_bin NOT NULL,
  `lieuInitial` text COLLATE geostd8_bin NOT NULL,
  `proprietaire` text COLLATE geostd8_bin NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text COLLATE geostd8_bin NOT NULL,
  `img` text COLLATE geostd8_bin NOT NULL,
  `img2` text COLLATE geostd8_bin NOT NULL,
  `img3` text COLLATE geostd8_bin NOT NULL,
  `img4` text COLLATE geostd8_bin NOT NULL,
  `img5` text COLLATE geostd8_bin NOT NULL,
  `img6` text COLLATE geostd8_bin NOT NULL,
  `type` text COLLATE geostd8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=geostd8 COLLATE=geostd8_bin;

--
-- Déchargement des données de la table `identifiantsentite`
--

INSERT INTO `identifiantsentite` (`id`, `nom`, `lieuInitial`, `proprietaire`, `prix`, `description`, `img`, `img2`, `img3`, `img4`, `img5`, `img6`, `type`) VALUES
(0, 'bmw', 'juilly', 'kyliann', 1500, 'bmw drift car', 'voiture.jpg', '5ac8cf88c9264c087930049f909b7d9e.jpg', 'maxre.jpg', 'maxresdef.jpg', 'maxresdefa.jpg', 'maxresdefault.jpg', 'mobilier'),
(1, 'mercedes', 'juilly', 'kyliann', 1250, 'mercedes A200D AMG Line', 'mercedesbenz_mercedes_refueling_131955_1920x1080.jpg', '', '', '', '', '', 'mobilier'),
(2, 'Villa', 'Corse', 'kyliann', 4500, 'Villa - Corse', '4032_00-2019-08-02-1515.jpg', '', '', '', '', '', 'immobilier'),
(3, 'Villa', 'Monaco', 'kyliann', 9550, 'Villa - Monaco', 'musk2-1100x715.jpg', '', '', '', '', '', 'immobilier'),
(4, 'Model 3', 'Lizy-sur-Ourcq', 'kyliann', 700, 'Description Tesla Model 3', '800354.jpg', 'capture-decran-2021-01-22-a-11.51.36-733x410.png', 's0-exclusivite-caradisiac-au-volant-de-la-tesla-model-3-526348-scaled.jpg', 'S0-tesla-model-3-on-l-a-mise-sur-circuit-reportage-video-593706.jpg', 'tesla-model-3-1-scaled.jpg', 'Tesla-model-3-DSCF8897.jpg', 'mobilier'),
(5, 'appartement', 'Nice', 'kyliann', 2000, 'Appartement - Nice', '10815984855eeb7c668c2e3.44641975_581.jpg', '', '', '', '', '', 'immobilier'),
(6, 'Formule 1', 'Monaco', 'kyliann', 150000, 'Formule 1', '2021-Formula1-Mercedes-AMG-W12-E-Performance-003-1440w.jpg', '', '', '', '', '', 'mobilier'),
(7, 'Chalet', 'Chamonix', 'kyliann', 1200, 'Chalet - Chamonix', '4f1b6a8e-841d-4c43-a428-8258dd046068.c10.jpg', '', '', '', '', '', 'immobilier'),
(8, 'BMW - Moto', 'juilly', 'kyliann', 35000, 'Moto BMW - M1000RR', 'S8-presentation-de-la-nouvelle-bmw-m-1000-rr-643910.jpg', '', '', '', '', '', 'mobilier'),
(9, 'Audi RS6', 'Juilly', 'kyliann', 5000, 'Audi - RS6', '19rJMfEaTP8VoGd6Uv3FzM-a3beec4eaff6f2ddd7889b21bc2f3e56-Audi-RS6_Avant-2020-1600-05-1100.jpg', '', '', '', '', '', 'mobilier'),
(10, 'Villa ', 'Corse', 'kyliann', 4570, 'Villa - Corse', '46175329.jpg', '', '', '', '', '', 'immobilier'),
(11, 'Maison', 'Nice', 'kyliann', 2750000, '950 m2', '6402046b--202103251146.jpg', '', '', '', '', '', 'immobilier'),
(12, 'Model X', 'Juilly', 'kyliann', 100000, 'Tesla - Model X', 'Tesla-Model-X-2021-9.jpg', '', '', '', '', '', 'mobilier'),
(13, 'Tesla Model S', 'Juilly', 'kyliann', 150000, 'Model S - Plaid', 'deep-blue-tesla-model-s-21-inch-ts118-matte-black-forged-wheels-wm-1_e2373a23-58fe-4810-b7ec-dccc452cb7f5-20181225134105.jpg', '', '', '', '', '', 'mobilier'),
(14, 'Merco Benz', 'juilly', 'clemence', 155000, 'AMG G36', 'mercedes-classe-g-63-amg-118073254.jpg', '2019-mercedes-amg-g63-edition-1.jpg', '20191203164312.jpeg', 'exteriorImage.MQ6.12.20191219153123.jpeg', 'HR-Sportfedern-Mercedes-G63-AMG-W463A-W464-2.jpg', 'mercedes-classe-g-63-amg-arriere-12.jpg', 'mobilier');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `username` text COLLATE geostd8_bin NOT NULL,
  `password` text COLLATE geostd8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=geostd8 COLLATE=geostd8_bin;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`username`, `password`) VALUES
('kyliann', 'brisson'),
('clemence', 'batut');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
