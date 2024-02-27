-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 27 fév. 2024 à 14:13
-- Version du serveur : 10.5.21-MariaDB-0+deb11u1
-- Version de PHP : 8.3.2-1+0~20240120.16+debian10~1.gbpb43448

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stpavut`
--

-- --------------------------------------------------------

--
-- Structure de la table `enigmes`
--

CREATE TABLE `enigmes` (
  `enigme_id` int(11) NOT NULL,
  `enigme_titre` varchar(50) DEFAULT NULL,
  `enigme_photo` varchar(30) DEFAULT NULL,
  `enigme_lien` varchar(50) DEFAULT NULL,
  `enigme_etat` int(11) DEFAULT NULL,
  `enigme_texte` varchar(250) DEFAULT NULL,
  `enigme_ordre` int(11) DEFAULT NULL,
  `enigme_mot_magique` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `enigmes`
--

INSERT INTO `enigmes` (`enigme_id`, `enigme_titre`, `enigme_photo`, `enigme_lien`, `enigme_etat`, `enigme_texte`, `enigme_ordre`, `enigme_mot_magique`) VALUES
(1, 'Tout arrive à point', 'enigme01.jpg', 'http://www.google.fr', 1, 'se porte aux pieds quand il pleut', 1, 'botte'),
(2, 'Il en va de soit', 'enigme02.jpg', '', 1, 'Elle tombe du ciel et humide', 2, 'pluie'),
(3, 'Rien n\'oublier est important', 'sushi.jpg', 'http://www.coca.fr/enigme03.html', 1, 'éclaire le jour et projette des ombres', 3, 'soleil'),
(4, 'les apparences', 'enigme04.jpg', '', 1, 'couleur du ciel...', 4, 'bleu'),
(5, 'to be or not to be', 'enigme05.jpg', 'http://www.coca.fr/enigme05.html', 1, 'spécialité de Troyes', 5, 'andouillette'),
(6, 'Math du soir, espoir', 'bts.jpg', 'http://www.coca.fr/enigme06.html', 1, '2+2=', 6, 'quatre'),
(7, 'les couleurs du jour', 'enigme07.jpg', '', 1, 'entre vert et rouge, on s\'arrete quand meme', 7, 'orange'),
(8, 'la nuit des questions', 'enigme08.jpg', '', 1, 'la lune est un ... naturel', 8, 'satellite'),
(11, 'La fin d\'une aventure', '20211211-16-51-39tintin.jpg', 'herge.html', 1, 'synonyme de finir', 10, 'terminer'),
(10, 'Enigme', '20211129-05-03-42floppa.jpg', 'enigme.html', 1, 'Cuve dans lequel on prend des bains', 9, 'baignoire'),
(13, NULL, '20220120-11-33-40cadeau2020.jp', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudier`
--

CREATE TABLE `etudier` (
  `etud_id` int(11) NOT NULL,
  `duree_resolution` time DEFAULT NULL,
  `etat_resolution` int(11) DEFAULT NULL,
  `date_debut_etude` datetime DEFAULT NULL,
  `gamers_gamer_id` int(11) DEFAULT NULL,
  `enigmes_enigme_id` int(11) DEFAULT NULL,
  `nb_essais` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `etudier`
--

INSERT INTO `etudier` (`etud_id`, `duree_resolution`, `etat_resolution`, `date_debut_etude`, `gamers_gamer_id`, `enigmes_enigme_id`, `nb_essais`) VALUES
(1, '00:00:00', 0, '2012-10-20 10:20:00', 1, 1, 1),
(2, '00:00:00', 0, '2013-10-20 18:20:00', 3, 1, 1),
(3, '00:00:00', 0, '2012-10-20 15:20:00', 4, 1, 0),
(4, '00:00:00', 0, '2012-10-20 09:20:00', 7, 1, 2),
(5, '00:00:00', 0, '2013-10-20 16:14:00', 9, 1, 1),
(6, '00:00:00', 0, '2012-10-20 19:25:00', 10, 1, 0),
(7, '02:15:00', 1, '2014-10-20 11:25:00', 2, 1, 0),
(8, '01:34:00', 1, '2012-10-20 10:20:00', 5, 1, 0),
(9, '01:42:00', 1, '2013-10-20 18:20:00', 6, 1, 1),
(10, '04:22:00', 1, '2012-10-20 15:20:00', 8, 1, 0),
(11, '05:41:00', 1, '2012-10-20 09:20:00', 11, 1, 2),
(12, '01:12:00', 1, '2013-10-20 16:14:00', 12, 1, 0),
(13, '00:00:00', 0, '2014-10-20 10:20:00', 2, 2, 0),
(14, '00:00:00', 0, '2014-10-20 18:20:00', 5, 2, 2),
(15, '00:00:00', 0, '2015-10-20 15:20:00', 8, 2, 1),
(16, '00:00:00', 0, '2015-10-20 09:20:00', 11, 2, 0),
(17, '08:35:00', 1, '2015-10-20 16:14:00', 6, 2, 2),
(18, '00:46:00', 1, '2016-10-20 15:20:00', 12, 2, 0),
(19, '00:00:00', 0, '2016-10-20 09:20:00', 6, 3, 1),
(20, '00:00:00', 0, '2016-10-20 16:14:00', 12, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `gamers`
--

CREATE TABLE `gamers` (
  `gamer_id` int(11) NOT NULL,
  `gamer_nom` varchar(30) DEFAULT NULL,
  `gamer_prenom` varchar(30) DEFAULT NULL,
  `gamer_email` varchar(50) DEFAULT NULL,
  `gamer_etat` varchar(1) DEFAULT NULL,
  `gamer_enigme_en_cours` int(11) DEFAULT NULL,
  `gamer_photo` varchar(50) DEFAULT NULL,
  `gamer_pass` varchar(50) NOT NULL,
  `nb_essais` int(11) NOT NULL,
  `nb_essais_total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `gamers`
--

INSERT INTO `gamers` (`gamer_id`, `gamer_nom`, `gamer_prenom`, `gamer_email`, `gamer_etat`, `gamer_enigme_en_cours`, `gamer_photo`, `gamer_pass`, `nb_essais`, `nb_essais_total`) VALUES
(1, 'Dupond', 'Bob', 'toto@titi.com', '1', 1, 'photo1.png', 'toto', 0, 0),
(2, 'Durand', 'Bernard', 'tutu@toto.com', '1', 2, 'photo2.png', 'titi', 0, 0),
(3, 'Ballotin', 'Paulo', 'bob@boby.fr', '1', 1, 'photo3.png', 'titi', 0, 0),
(4, 'Gérard', 'Nenette', 'lolo@lili.fr', '0', 4, 'photo4.png', 'titi', 0, 0),
(5, 'Gabin', 'Robert', 'bilou@tutu.fr', '1', 2, 'photo5.png', 'titi', 0, 0),
(6, 'Macalindro', 'Barnadé', 'zaza@zuzu.co', '1', 3, 'photo6.png', 'titi', 0, 0),
(7, 'Roturien', 'Polux', 'zozo@lala.fr', '0', 1, 'photo7.png', 'titi', 0, 0),
(8, 'Pataulin', 'Ginette', 'jiji@jojo.com', '1', 2, 'photo8.png', 'titi', 0, 0),
(9, 'Bouloudet', 'Paulette', 'lou@li.fr', '1', 7, 'photo9.png', 'titi', 0, 7),
(10, 'Maupin', 'René', 'rere@rara.fr', '1', 1, 'photo10.png', 'titi', 0, 0),
(11, 'Matrin', 'Cunégonde', 'dada@dudu.com', '0', 2, 'photo11.png', 'titi', 0, 0),
(12, 'Varant', 'Donald', 'baba@bubu.fr', '1', 3, 'photo12.png', 'titi', 0, 0),
(13, 'owowo', 'uwuwu', 'uwu@owo.com', '1', 3, '20211124-02-59-53cat.jpg', 'japon', 1, 0),
(14, 'chaton', 'golf', 'golf@potichat.com', '1', 11, '20211125-01-13-35poti_chat_golf.png', 'golf', 0, 0),
(15, 'Six', 'Léo', 'leo@six.fr', '1', 9, '20211211-16-20-41leo2020.jpg', 'leone', 0, 3),
(16, 'Gommery', 'Patrice', 'pgommery@gmail.com', '1', 2, '20220120-10-55-56cadeau2020.jpg', 'toto', 4, 0),
(18, 'Gommery', 'Patrice', 'pgommery@gmail.com', '0', 1, NULL, 'prof', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enigmes`
--
ALTER TABLE `enigmes`
  ADD PRIMARY KEY (`enigme_id`);

--
-- Index pour la table `etudier`
--
ALTER TABLE `etudier`
  ADD PRIMARY KEY (`etud_id`);

--
-- Index pour la table `gamers`
--
ALTER TABLE `gamers`
  ADD PRIMARY KEY (`gamer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enigmes`
--
ALTER TABLE `enigmes`
  MODIFY `enigme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `etudier`
--
ALTER TABLE `etudier`
  MODIFY `etud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `gamers`
--
ALTER TABLE `gamers`
  MODIFY `gamer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
