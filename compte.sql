-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 12 mars 2025 à 13:35
-- Version du serveur : 8.0.41-0ubuntu0.22.04.1
-- Version de PHP : 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `compte`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `lastname` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `name`, `lastname`, `phone`, `email`, `password`) VALUES
(18, 'Richard', 'Sounouvou', '54816018', 'Richard0@gmail.com', '$2y$10$Ku90Ognl.tHNXvB8gg5/BO7yjnQjnxqopAhPWf/wJxYwaVemzgYUW'),
(19, 'Richard', 'Sounouvou', '54816018', 'esdras@gmail.com', '$2y$10$J3iJZQpYVna2VWr.yiCGS.HW2x6nyG3fk.K.D1Fhmb3mZPYTDgJDS'),
(20, 'Richard', 'Sounouvou', '54816018', 'Richard01@gmail.com', '$2y$10$thOlRdvck6Y3sTh1LCwEdO0jGp72vgT89EcwW54Q8hj0pJ9I2VajG'),
(21, 'Richard', 'Sounouvou', '54816018', 'Richard02@gmail.com', '$2y$10$s6TlFDa8WfJuQn69TBpiBON9fPUIzmf8OCWw5tZI6x2DMIaTfzj7a'),
(22, 'sarada', 'Sounouvou', '54816018', 'sarada@gmail.com', '$2y$10$pwnjcbHV45SGCQUyReCii.jVYJmo8hsYjAoQZT64T5JgsKzECSbOy'),
(23, 'Richard', 'Sounouvou', '54816018', 'Richard@gmail.com', '$2y$10$vcKhVGb8FVPhDUXHhzDf/.ZxXfhg8wsaHR2Zov8xvjMnWXmd1SgUG'),
(24, 'Richard', 'Sounouvou', '54816018', 'Richard0Z@gmail.com', '$2y$10$GJXxehUQNf5e9jxace4UTuCtG.sRV/tqFDY4uNgUP9pnhYSZmY8uu'),
(25, 'boruto', 'Sounouvou', '54816018', 'boruto@gmail.com', '$2y$10$8ZPhOQ/0psjdx5kWsW4smusSFYQRR21bpGd5yjfrSs.PY7gmNPm1W'),
(26, 'junior', 'Sounouvou', '54816018', 'junior@gmail.com', '$2y$10$dWVlyNv9FHBlEF5dvxrjb.R7fhtRkrppUIJ5zJBFPLg4NGxyuv2cq'),
(27, 'Nancy', 'Narancia', '54816018', 'nancy@gmail.com', '$2y$10$eD9Dy9SWmt25vnV2ag2Ap.DI1JgfgdsvP.S.2c36BCC9fFa1OKEqq'),
(28, 'azertyu', 'Sounouvou', '54816018', 'azerty@gmail.com', '$2y$10$RHWL2op4YN0HDZTAjW7W9.mjyWv2I7P8AVGcGQI0a2ufGmQYxAOC6'),
(29, 'lazare', 'Sounouvou', '54816018', 'lazare@gmail.com', '$2y$10$UZ985Dn5.QU4x9q3wq1C4uBdcm22zMQ0VwIkr0hJtadaex/okbuzW'),
(30, 'Richard', 'Sounouvou', '54816018', 'azertya@gmail.com', '$2y$10$leojbE99YeB4Pe7GQFqPkuNFDgH80VTj85lJlxjyX9usrMNV/FuHu'),
(31, 'Ashley', 'grahame', '54816018', 'ashley@gmail.com', '$2y$10$rtpLp21GWQA0PHFzmc7xkOsKsgqaWI.sGz0ePF/2P7tkPsHnfsG3C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
