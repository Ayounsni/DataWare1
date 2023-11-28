-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 nov. 2023 à 23:58
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dataware1`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `id_equipe` int(11) NOT NULL,
  `Name_equipe` varchar(255) NOT NULL,
  `scrum_master_id` int(11) DEFAULT NULL,
  `membre_id` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projets` int(11) NOT NULL,
  `nom_projet` varchar(255) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `equipe_id` int(11) DEFAULT NULL,
  `scrum_master_id` int(11) DEFAULT NULL,
  `status_projet` varchar(50) NOT NULL DEFAULT 'en cours',
  `date_fin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projets`, `nom_projet`, `date_debut`, `equipe_id`, `scrum_master_id`, `status_projet`, `date_fin`) VALUES
(31, 'oumaima', '2023-11-28', NULL, NULL, 'finaliser', '2023-12-08');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','product_owner','scrum_master') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `First_name`, `Last_name`, `email`, `password`, `role`) VALUES
(1, 'Doe', 'John', 'john.doe@example.com', 'motdepasse123', 'scrum_master'),
(54, 'manal', 'najwa', 'ehh@gmaik.com', '123456789', 'scrum_master'),
(56, 'Ayoub', 'Snini', 'Ayoubsnini@gmail.com', 'Manalmhsn', 'product_owner'),
(57, 'kjkjj', 'Snini', 'fffd@ggf.com', 'ayoubsnini', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id_equipe`),
  ADD KEY `scrum_master_id` (`scrum_master_id`),
  ADD KEY `membre_id` (`membre_id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projets`),
  ADD KEY `equipe_id` (`equipe_id`),
  ADD KEY `scrum_master_id` (`scrum_master_id`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD CONSTRAINT `equipes_ibfk_1` FOREIGN KEY (`scrum_master_id`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `equipes_ibfk_2` FOREIGN KEY (`membre_id`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projets_ibfk_1` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`id_equipe`),
  ADD CONSTRAINT `projets_ibfk_2` FOREIGN KEY (`scrum_master_id`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
