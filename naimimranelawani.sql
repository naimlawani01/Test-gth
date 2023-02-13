-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 23 avr. 2021 à 17:13
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `naimimranelawani`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_comment` date NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `post_id`, `user_id`, `date_comment`) VALUES
(1, 'Mon commentaire', 1, 2, '2021-04-03'),
(5, 'c\'est bien, J\'aime bien', 2, 2, '2021-04-23'),
(6, 'bien', 1, 2, '2021-04-23'),
(7, 'Commentaire de imrane', 1, 4, '2021-04-23');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `img_url` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `post_date`) VALUES
(1, 'Mon premier post', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, inventore, fuga unde quo eveniet repellat deserunt quibusdam repellendus, rerum consequatur ullam. Doloremque harum, cumque amet distinctio atque co\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, inventore, fuga unde quo eveniet repellat deserunt quibusdam repellendus, rerum consequatur ullam. Doloremque harum, cumque amet distinctio atque consequuntur vel tenetur.nsequuntur vel tenetur.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, inventore, fuga unde quo eveniet repellat deserunt quibusdam repellendus, rerum consequatur ullam. Doloremque harum, cumque amet distinctio atque consequuntur vel tenetur.', 2, '2021-04-03'),
(2, 'Centre d\'intÃ©rÃªt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, vero? Veniam voluptatibus illum unde, excepturi exercitationem, sequi ducimus a, vel laborum pariatur beatae nisi? Praesentium nam libero eos nobis eum?\r\nVoluptas odio totam placeat. Asperiores, repudiandae nihil vel, hic quam perspiciatis minus laudantium laborum quae sit iusto perferendis. Odit magnam fuga sequi temporibus quaerat, accusamus error quos. Doloremque, maiores perferendis.\r\nMagni laudantium ex quisquam, reiciendis similique odio quas nam voluptate porro recusandae, culpa, commodi facere ratione totam. At laborum a autem? Enim libero itaque vitae laborum id quia dignissimos aspernatur.\r\nIllo totam quae veritatis provident, aliquid molestiae voluptatibus? Similique adipisci itaque exercitationem iure dignissimos incidunt tempora odit voluptates neque, est saepe, fugiat quos tenetur praesentium dolorem architecto eius ipsa voluptate.\r\nRepudiandae facere, qui velit perferendis dolorem repellendus, aliquid magnam architecto tempore nihil enim, vitae voluptas hic labore alias mollitia et omnis quam laudantium est. Labore cumque expedita illo pariatur nesciunt.', 2, '2021-04-23'),
(3, 'Le football', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, vero? Veniam voluptatibus illum unde, excepturi exercitationem, sequi ducimus a, vel laborum pariatur beatae nisi? Praesentium nam libero eos nobis eum?\r\nVoluptas odio totam placeat. Asperiores, repudiandae nihil vel, hic quam perspiciatis minus laudantium laborum quae sit iusto perferendis. Odit magnam fuga sequi temporibus quaerat, accusamus error quos. Doloremque, maiores perferendis.\r\nMagni laudantium ex quisquam, reiciendis similique odio quas nam voluptate porro recusandae, culpa, commodi facere ratione totam. At laborum a autem? Enim libero itaque vitae laborum id quia dignissimos aspernatur.\r\nIllo totam quae veritatis provident, aliquid molestiae voluptatibus? Similique adipisci itaque exercitationem iure dignissimos incidunt tempora odit voluptates neque, est saepe, fugiat quos tenetur praesentium dolorem architecto eius ipsa voluptate.\r\nRepudiandae facere, qui velit perferendis dolorem repellendus, aliquid magnam architecto tempore nihil enim, vitae voluptas hic labore alias mollitia et omnis quam laudantium est. Labore cumque expedita illo pariatur nesciunt.', 4, '2021-04-23'),
(4, 'La danse', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, vero? Veniam voluptatibus illum unde, excepturi exercitationem, sequi ducimus a, vel laborum pariatur beatae nisi? Praesentium nam libero eos nobis eum? Voluptas odio totam placeat. Asperiores, repudiandae nihil vel, hic quam perspiciatis minus laudantium laborum quae sit iusto perferendis. Odit magnam fuga sequi temporibus quaerat, accusamus error quos. Doloremque, maiores perferendis. Magni laudantium ex quisquam, reiciendis similique odio quas nam voluptate porro recusandae, culpa, commodi facere ratione totam. At laborum a autem? Enim libero itaque vitae laborum id quia dignissimos aspernatur. Illo totam quae veritatis provident, aliquid molestiae voluptatibus? Similique adipisci itaque exercitationem iure dignissimos incidunt tempora odit voluptates neque, est saepe, fugiat quos tenetur praesentium dolorem architecto eius ipsa voluptate. Repudiandae facere, qui velit perferendis dolorem repellendus, aliquid magnam architecto tempore nihil enim, vitae voluptas hic labore alias mollitia et omnis quam laudantium est. Labore cumque expedita illo pariatur nesciunt.', 4, '2021-04-23'),
(5, 'La musique', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, vero? Veniam voluptatibus illum unde, excepturi exercitationem, sequi ducimus a, vel laborum pariatur beatae nisi? Praesentium nam libero eos nobis eum? Voluptas odio totam placeat. Asperiores, repudiandae nihil vel, hic quam perspiciatis minus laudantium laborum quae sit iusto perferendis. Odit magnam fuga sequi temporibus quaerat, accusamus error quos. Doloremque, maiores perferendis. Magni laudantium ex quisquam, reiciendis similique odio quas nam voluptate porro recusandae, culpa, commodi facere ratione totam. At laborum a autem? Enim libero itaque vitae laborum id quia dignissimos aspernatur. Illo totam quae veritatis provident, aliquid molestiae voluptatibus? Similique adipisci itaque exercitationem iure dignissimos incidunt tempora odit voluptates neque, est saepe, fugiat quos tenetur praesentium dolorem architecto eius ipsa voluptate. Repudiandae facere, qui velit perferendis dolorem repellendus, aliquid magnam architecto tempore nihil enim, vitae voluptas hic labore alias mollitia et omnis quam laudantium est. Labore cumque expedita illo pariatur nesciunt.', 4, '2021-04-23'),
(6, 'Informatique', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, vero? Veniam voluptatibus illum unde, excepturi exercitationem, sequi ducimus a, vel laborum pariatur beatae nisi? Praesentium nam libero eos nobis eum? Voluptas odio totam placeat. Asperiores, repudiandae nihil vel, hic quam perspiciatis minus laudantium laborum quae sit iusto perferendis. Odit magnam fuga sequi temporibus quaerat, accusamus error quos. Doloremque, maiores perferendis. Magni laudantium ex quisquam, reiciendis similique odio quas nam voluptate porro recusandae, culpa, commodi facere ratione totam. At laborum a autem? Enim libero itaque vitae laborum id quia dignissimos aspernatur. Illo totam quae veritatis provident, aliquid molestiae voluptatibus? Similique adipisci itaque exercitationem iure dignissimos incidunt tempora odit voluptates neque, est saepe, fugiat quos tenetur praesentium dolorem architecto eius ipsa voluptate. Repudiandae facere, qui velit perferendis dolorem repellendus, aliquid magnam architecto tempore nihil enim, vitae voluptas hic labore alias mollitia et omnis quam laudantium est. Labore cumque expedita illo pariatur nesciunt.', 4, '2021-04-23');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pswd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pswd`) VALUES
(2, 'imranelawani', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'imrane', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
