-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 26 Février 2017 à 14:05
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `recensement`
--

-- --------------------------------------------------------

--
-- Structure de la table `habitants`
--

CREATE TABLE IF NOT EXISTS `habitants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parents1_id` int(11) DEFAULT NULL,
  `parents2_id` int(11) DEFAULT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `dateNaissance` datetime NOT NULL,
  `telephone` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `zone` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `dateEnregistrement` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_61FF385EC901A84B` (`parents1_id`),
  KEY `IDX_61FF385EDBB407A5` (`parents2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `habitants`
--

INSERT INTO `habitants` (`id`, `parents1_id`, `parents2_id`, `nom`, `prenom`, `sexe`, `dateNaissance`, `telephone`, `adresse`, `zone`, `dateEnregistrement`) VALUES
(1, 3, 4, 'Marion', 'Jesquin', 0, '2012-01-01 00:00:00', '06000000', '29, rue deux leopaul', 'NORD', '2017-02-09 10:48:24'),
(2, 5, 6, 'kevins', 'jacob', 1, '2012-01-01 00:00:00', '07000000', '27, rue deux charles', 'NORD', '2017-02-09 10:54:50'),
(3, 7, 8, 'Mathieu', 'Geko', 1, '2013-01-10 00:00:00', '06000000', '29, rue deux patrick', 'NORD', '2017-02-20 16:42:24');

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` datetime NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `parents`
--

INSERT INTO `parents` (`id`, `nom`, `prenom`, `dateNaissance`, `sexe`) VALUES
(3, 'Jean-Yves', 'Jesquin', '2012-01-01 00:00:00', 1),
(4, 'Claire', 'Jesquin', '2012-01-01 00:00:00', 0),
(5, 'pierre jean', 'jacob', '2012-01-01 00:00:00', 1),
(6, 'michelle', 'jacob', '2012-01-01 00:00:00', 0),
(7, 'Jean-Yves', 'Geko', '2012-01-01 00:00:00', 1),
(8, 'Claire', 'Geko', '2012-01-01 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `thouars`
--

CREATE TABLE IF NOT EXISTS `thouars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zone` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `thouars`
--

INSERT INTO `thouars` (`id`, `zone`) VALUES
(1, 'NORD'),
(2, 'SUD'),
(3, 'OUEST'),
(4, 'EST');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_497B315E92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_497B315EA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'benjamin', 'benjamin', 'benjamin@example.com', 'benjamin@example.com', 1, '3tisldw5t8e8oo0kcw4s88cscow8cks', '1pcH3Q7kZTM+qeERwqfUY9HEsP82T2+RubvMGRKRLVaAyyIy/lAcO07cXX9u0+iw28jTdcqFZIhsr4XUKwRO0Q==', '2017-02-20 16:33:22', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `habitants`
--
ALTER TABLE `habitants`
  ADD CONSTRAINT `FK_61FF385EC901A84B` FOREIGN KEY (`parents1_id`) REFERENCES `parents` (`id`),
  ADD CONSTRAINT `FK_61FF385EDBB407A5` FOREIGN KEY (`parents2_id`) REFERENCES `parents` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
