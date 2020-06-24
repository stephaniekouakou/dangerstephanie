-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 juin 2020 à 10:21
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dangerview`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `libelle`) VALUES
(1, 'homme'),
(3, 'femme'),
(4, 'groupe de jeune'),
(5, 'groupe de femme');

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `nom_activite` varchar(100) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `id_danger` varchar(255) DEFAULT NULL,
  `lieu_id_lieu` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom_activite`, `id_utilisateur`, `nom_user`, `id_danger`, `lieu_id_lieu`, `date`) VALUES
(1, 'ajouter une ville', 1, 'kouakou stephanie', NULL, 'sikensi', '2020-06-17 14:42:15'),
(2, 'ajouter un danger', 1, 'kouakou stephanie', 'accidents', NULL, '2020-06-17 14:45:41'),
(3, 'ajouter un danger', 1, 'kouakou stephanie', 'accidents', NULL, '2020-06-17 14:54:01'),
(4, 'modification dune ville', 1, 'kouakou stephanie', NULL, 'sikensi', '2020-06-17 15:15:26'),
(5, 'modification dune ville', 1, 'kouakou stephanie', NULL, 'sikensi', '2020-06-17 15:15:41'),
(6, 'suppression de danger', 0, '', 'accidents', NULL, '2020-06-17 15:41:21'),
(7, 'modification de danger', 1, 'kouakou stephanie', 'accidents', NULL, '2020-06-21 07:45:28'),
(8, 'modification dune ville', 1, 'kouakou stephanie', NULL, 'sikensi', '2020-06-21 07:46:13'),
(9, 'Ajouter un type de danger', 1, 'kouakou stephanie', NULL, NULL, '2020-06-21 07:53:09'),
(10, 'ajouter un utilisateur', 7, 'zika ariane', NULL, NULL, '2020-06-21 10:05:52'),
(11, 'ajouter un utilisateur', 1, 'kouakou stephanie', NULL, NULL, '2020-06-21 13:59:47'),
(12, 'ajouter un danger', 1, 'kouakou stephanie', 'les accidents', NULL, '2020-06-21 23:22:13'),
(13, 'suppression de danger', 0, '', 'les accidents', NULL, '2020-06-21 23:23:05'),
(14, 'ajouter un danger', 1, 'kouakou stephanie', 'les accidents', NULL, '2020-06-22 08:32:17');

-- --------------------------------------------------------

--
-- Structure de la table `dangertable`
--

CREATE TABLE `dangertable` (
  `id_danger` int(11) NOT NULL,
  `sexevictime` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `date_danger` varchar(20) NOT NULL,
  `dangertype` varchar(50) NOT NULL,
  `acteur` varchar(50) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `description_lieu` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dangertable`
--

INSERT INTO `dangertable` (`id_danger`, `sexevictime`, `source`, `date_danger`, `dangertype`, `acteur`, `ville`, `description_lieu`, `id_utilisateur`) VALUES
(2, 'enfant', 'https://www.gps-longitude-latitude.net/coordonnees-gps-de-sikensi', '2020-06-27', 'accidents', 'femme', 'adjame', 'cummune', 1),
(4, 'enfant', 'https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal', '2020-06-23', 'les accidents', 'femme', 'attecoube', 'Situé dans Abidjan nord et sur une butte dominant la baie du Banco, Attécoubé ou encore Abidjan', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dangertype`
--

CREATE TABLE `dangertype` (
  `id_dangertype` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dangertype`
--

INSERT INTO `dangertype` (`id_dangertype`, `libelle`) VALUES
(1, 'braquage'),
(2, 'accidents'),
(3, 'meutre'),
(4, 'manifestation'),
(7, 'inondation'),
(9, 'foudre');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id_lieu` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `nom_ville` varchar(50) NOT NULL,
  `nbre_hab` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `pays`, `nom_ville`, `nbre_hab`) VALUES
(2, 'cote d ivoire', 'abidjan', 1250000),
(5, 'cote divoire', 'agboville', 12334444);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `date_msg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idpays` varchar(11) NOT NULL,
  `nom_pays` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `lieu_id_lieu` int(11) NOT NULL,
  `visiteur_id_visiteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `password`, `role`, `photo`) VALUES
(1, 'kouakou', 'stephanie', 'stephanie@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'editeur', NULL),
(2, 'tape', 'ange', 'ange@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'surperviseur', NULL),
(7, 'zika', 'ariane', 'zika@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'admin', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `nom_ville` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom_ville`, `lat`, `lng`, `id_utilisateur`) VALUES
(10, 'adjame', 5.36507, -4.02357, 0),
(11, 'attecoube', 5.33625, -4.04145, 0),
(12, 'cocody', 5.36022, -3.96744, 0),
(13, 'koumassi', 5.30298, -3.94194, 0),
(14, 'marcory', 5.30271, -3.98274, 0),
(15, 'plateau', 5.32332, -4.02357, 0),
(16, 'portbouet', 5.27725, -3.8859, 0),
(17, 'treichville', 5.29209, -4.01336, 0),
(18, 'yopougon', 5.31767, -4.08999, 0),
(19, 'abengourou', 6.7157, -3.48013, 0),
(20, 'aboisso', 5.47451, -3.20308, 0),
(21, 'adzope', 6.10715, -3.85535, 0),
(22, 'agboville', 5.9355, -4.22308, 0),
(23, 'agnibilekrou', 7.13028, -3.20308, 0),
(24, 'anyama', 5.48771, -4.05166, 0),
(26, 'beoumi', 7.67309, -5.57223, 0),
(27, 'bingerville', 5.35036, -3.87571, 0),
(28, 'bocanda', 7.06591, -4.49543, 0),
(29, 'bondoukou', 8.04788, -2.80786, 0),
(30, 'bongouanou', 6.6487, -4.20515, 0),
(31, 'bonoua', 5.27118, -3.59393, 0),
(33, 'boundiali', 9.51836, -6.48232, 0),
(34, 'dabou', 5.32621, -4.36679, 0),
(35, 'daloa', 6.88833, -6.43969, 0),
(36, 'bouaflé', 6.98274, -5.74051, 0),
(37, 'danané', 7.2676, -8.14478, 0),
(38, 'daoukro', 7.0654, -3.95724, 0),
(39, 'dimbokro', 6.65747, -4.71223, 0),
(40, 'divo', 5.84154, -5.36255, 0),
(41, 'douekoue', 6.74738, -7.36246, 0),
(42, 'ferkessedougou', 9.5842, -5.19536, 0),
(43, 'gagnoa', 6.15144, -5.95154, 0),
(44, 'gohitafla', 7.48828, -5.88024, 0),
(45, 'grandlahou', 5.13652, -5.02605, 0),
(46, 'grandbassam', 5.22594, -3.75367, 0),
(47, 'Grand-Bereby', 4.65137, -6.92205, 0),
(48, 'guiglo', 6.54906, -7.49765, 0),
(49, 'issia', 6.48761, -6.58368, 0),
(50, 'jacqueville', 5.20598, -4.42335, 0),
(52, 'katiola', 8.14023, -5.09631, 0),
(53, 'korhogo', 9.46693, -5.61426, 0),
(55, 'mbahiakro', 7.4548, -4.3411, 0),
(58, 'mankono', 8.05991, -6.18983, 0),
(59, 'odienne', 9.51888, -7.55722, 0),
(60, 'oumé', 6.37413, -5.40966, 0),
(61, 'sassandra', 4.95128, -6.09175, 0),
(62, 'seguela', 7.96018, -6.6745, 0),
(63, 'sinfra', 6.62334, -5.91456, 0),
(64, 'soubré', 5.78662, -6.58902, 0),
(65, 'tengrela', 10.482, -6.41306, 0),
(66, 'tiassale', 5.90426, -4.82614, 0),
(67, 'Toulepleu', 6.57956, -8.4102, 0),
(68, 'toumodi', 6.55603, -5.01565, 0),
(69, 'vavoua', 7.37506, -6.47699, 0),
(70, 'yamoussoukro', 6.82762, -5.28934, 0),
(71, 'zuenoula', 7.42404, -6.05204, 0),
(72, 'Bouna', 9.27166, -2.99256, 0),
(73, 'lakota', 5.85947, -5.67735, 0),
(74, 'kani', 8.47784, -6.60504, 0),
(75, 'man', 7.40643, -7.55722, 0),
(76, 'dabakala', 8.36626, -4.43364, 0),
(77, 'kong', 9.15102, -4.61018, 0),
(78, 'Touba', 8.28417, -7.68194, 0),
(79, 'bouake', 7.69047, -5.03905, 0),
(80, 'Bouna', 9.266667, -3, 0),
(81, 'sanpedro', -33.6757835, -59.6628664, 0),
(82, 'sikensi', 5.6761177, -4.575806, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visiteur` int(11) NOT NULL,
  `adress_ip` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `tmp_visite` int(11) DEFAULT NULL,
  `navigateur` varchar(45) DEFAULT NULL,
  `message_id_message` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `fk_activite_utilisateur1` (`id_utilisateur`),
  ADD KEY `lieu_id_lieu` (`lieu_id_lieu`),
  ADD KEY `id_danger` (`id_danger`);

--
-- Index pour la table `dangertable`
--
ALTER TABLE `dangertable`
  ADD PRIMARY KEY (`id_danger`),
  ADD KEY `id_acteur` (`acteur`),
  ADD KEY `id_lieu` (`ville`),
  ADD KEY `id_dangertype` (`dangertype`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `dangertype`
--
ALTER TABLE `dangertype`
  ADD PRIMARY KEY (`id_dangertype`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id_lieu`),
  ADD KEY `nom_ville` (`nom_ville`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idpays`),
  ADD KEY `pays` (`nom_pays`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`lieu_id_lieu`,`visiteur_id_visiteur`),
  ADD KEY `fk_lieu_has_visiteur_visiteur1` (`visiteur_id_visiteur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visiteur`),
  ADD KEY `fk_visiteur_message1` (`message_id_message`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `dangertable`
--
ALTER TABLE `dangertable`
  MODIFY `id_danger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `dangertype`
--
ALTER TABLE `dangertype`
  MODIFY `id_dangertype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visiteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD CONSTRAINT `fk_lieu_has_visiteur_visiteur1` FOREIGN KEY (`visiteur_id_visiteur`) REFERENCES `visiteur` (`id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD CONSTRAINT `fk_visiteur_message1` FOREIGN KEY (`message_id_message`) REFERENCES `message` (`id_message`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
