-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 27 mai 2019 à 15:23
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rivieriders`
--

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

CREATE TABLE `moto` (
  `id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cover_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moteur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tank` double NOT NULL,
  `saddlebags` tinyint(1) DEFAULT NULL,
  `saddleheight` int(11) DEFAULT NULL,
  `weight` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id`, `model`, `price`, `cover_img`, `moteur`, `tank`, `saddlebags`, `saddleheight`, `weight`, `description`) VALUES
(10, 'Fat Boy', 97, 'fat-boy.jpg', 'Milwaukee-Eigth', 18.9, 0, 675, 304, 'L\'icône custom Fat original qui avait tout changé et qui recommence. Finitions en chrome satiné. Pneu arrière trapu de 240 mm. Maintenant disponible avec le moteur Milwaukee-Eight™ 107 ou 114 Big Twin pour bénéficier du Fat Boy® le plus musclé, le plus irrésistible de notre histoire.\r\n'),
(11, 'Road King Custom', 115, 'road-king-custom.jpg', 'Milwaukee-Eigth', 22.7, 1, 695, 355, 'Si vous voulez savoir ce que signifie réellement dominer la route, prenez le guidon mini-ape du ROAD KING® Special en main et ouvrez les gaz de son moteur Milwaukee-Eight® 107. '),
(12, 'Raod King Classic', 117, 'Road-King-classic.jpg', 'Milwaukee-Eigth', 22.7, 1, 715, 362, 'NON SEULEMENT VOUS OUBLIEREZ LE JOUR DE LA SEMAINE, MAIS VOUS OUBLIEREZ AUSSI L\'ANNÉE !\r\n\r\nFlancs blancs, roues à bâtons et ajouts de sacoches en cuir. La Road King® Classic mérite réellement son nom.\r\n'),
(13, 'Iron 883', 97, 'sportster-iron883.jpg', 'Evolution', 17, 1, 760, 247, 'Un style authentique et agressif qui puise dans l\'innovation. Une machine qui ne demande qu\'à briller. Elle est prête à s\'emparer de la rue.\r\n'),
(14, 'Superlow', 85, 'sportster-superlow.jpg', 'Evolution', 17, 1, 705, 263, 'RIEN NE VOUS RAPPROCHE PLUS DE LA ROUTE.\r\n\r\nAvec son centre de gravité particulièrement bas, cette selle basse vous offrira une position parfaitement équilibrée et un regain de confiance. '),
(15, 'H.D Street', 95, 'street-glide.jpg', 'Revolution X V-Twin', 13.1, 0, 765, 229, 'LA PARTIE DE PLAISIR COMMENCE QUAND LE FEU PASSE AU VERT\r\n\r\nAu cœur de la Dark Custom®, un moteur Revolution X™ V-Twin 750 cm³ à refroidissement liquide, tendu.'),
(16, 'Street Rod', 87, 'street-rod.jpg', 'High Output revolution', 13.2, 0, 765, 229, 'POUR SE RÉVEILLER L\'ÂME.\r\n\r\nOffrez-vous une machine à la hauteur de vos désirs. Ne vous limitez pas. La nouvelle Street Rod® est conçue pour vous emporter jusqu\'à la limite.'),
(17, 'Touring Electra', 124, 'touring-electra.jpg', 'Twin-cooled', 22.7, 1, 740, 398, 'Une moto épurée qui offre l’essentiel aux amateurs de Touring. Conçue pour que vous vous l’appropriez. '),
(18, 'Breakout', 75, 'breakout.jpg', 'Milwaukee-Eigth', 13.2, 0, 665, 294, 'Le nouveau Breakout® reprend le concept de la machine musclée, longue et mince, pour la projeter en plein 21ème siècle.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
