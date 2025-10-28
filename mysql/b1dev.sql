-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 oct. 2025 à 18:36
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `students`
--

-- --------------------------------------------------------

--
-- Structure de la table `b1dev`
--

CREATE TABLE `b1dev` (
  `id_b1dev` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `civility` enum('M','Mme') NOT NULL DEFAULT 'Mme',
  `register_date` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `b1dev`
--

INSERT INTO `b1dev` (`id_b1dev`, `firstname`, `lastname`, `civility`, `register_date`, `phone`, `email`) VALUES
(1, 'Sheedan', 'Sonnom', 'Mme', '2025-10-28 18:29:16', NULL, 'sheedansonnomgmail.com'),
(2, 'karifala', 'sonnom', 'M', '2025-10-28 18:29:16', '0606788890', 'karifala@gmail.com'),
(3, 'nathan', 'sonnom', 'M', '2025-10-28 18:29:16', NULL, 'nathan@wesh.com'),
(4, 'Anaïs', 'sonnom', 'Mme', '2025-10-28 18:29:16', NULL, 'anais@jaimelabiologieetlagenetique.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `b1dev`
--
ALTER TABLE `b1dev`
  ADD PRIMARY KEY (`id_b1dev`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `b1dev`
--
ALTER TABLE `b1dev`
  MODIFY `id_b1dev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
