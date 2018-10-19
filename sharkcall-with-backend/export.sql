-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  jeu. 18 oct. 2018 à 08:16
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";

--
-- Base de données :  `sharkcall`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (`id_category` int(11) NOT NULL, `designation_cat` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_category`, `designation_cat`) VALUES(1, 'Category Example');

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

CREATE TABLE `cities` (`id_city` int(11) NOT NULL, `cityName` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cities`
--

INSERT INTO `cities` (`id_city`,`cityName`) VALUES(1, 'City example');

-- --------------------------------------------------------

--
-- Structure de la table `contents`
--

CREATE TABLE `contents`(`id_content` int(11) NOT NULL, `title` varchar(255) NOT NULL, `content` mediumtext NOT NULL, `img` text, `category` int(11) NOT NULL, `subCategory` int(11) NOT NULL, `city` int(11) NOT NULL, `adress` varchar(255) NOT NULL, `phone` varchar(255) NOT NULL, `lat` varchar(255) NOT NULL, `long` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contents`
--

INSERT INTO `contents` (`id_content`,`title`, `content`, `img`, `category`, `subCategory`, `city`, `adress`, `phone`, `lat`, `long`) VALUES(1, 'Title example', 'Example content', 'https://via.placeholder.com/500x500|https://via.placeholder.com/800x800', 1, 1, 1, ' Adress example', '0000000000', '-21.244527', '55.470429');

-- --------------------------------------------------------

--
-- Structure de la table `subcategories`
--

CREATE TABLE `subcategories`(`id_subCategory` int(11) NOT NULL, `designation_subcat` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `subcategories`
--

INSERT INTO `subcategories` (`id_subCategory`,`designation_subcat`) VALUES(1, 'Campings'),(2, 'Chambres d\'hôtes'),(3, 'Gîtes'),(4, 'Hôtels 1 étoile'),(5, 'Hôtels 2 étoiles'),(6, 'Hôtels 3 étoiles'),(7, 'Hôtels 4 étoiles'),(8, 'Hôtels 5 étoiles'),(9, 'Location de voiture'),(10, 'Location de bus'),(11, 'Transferts aéroport'),(12, 'Hélicoptère'),(13, 'ULM'),(14, 'Biking'),(15, 'Culture'),(16, 'Randonnée'),(17, 'Sites naturels'),(18, 'Villages Créoles'),(19, 'Nautisme'),(20, 'Parapente'),(21, 'Pèche'),(22, 'Randonnée'),(23, 'Restaurant');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'demo', 'demo@demo.fr', 'fe01ce2a7fbac8fafaed7c982a04e229', 1);


--
-- Structure de la table `users_roles`
--

CREATE TABLE `users_roles` (
  `id_role` int(11) NOT NULL,
  `roleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users_roles`
--

INSERT INTO `users_roles` (`id_role`, `roleName`) VALUES
(1, 'Administrator');


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Index pour la table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id_content`);

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id_subCategory`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `contents`
--
ALTER TABLE `contents`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id_subCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;