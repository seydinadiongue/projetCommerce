-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 déc. 2020 à 18:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonner`
--

DROP TABLE IF EXISTS `abonner`;
CREATE TABLE IF NOT EXISTS `abonner` (
  `idab` int(20) NOT NULL AUTO_INCREMENT,
  `idclient` int(20) DEFAULT NULL,
  `idcom` int(20) DEFAULT NULL,
  PRIMARY KEY (`idab`),
  KEY `fk_abonner1` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonner`
--

INSERT INTO `abonner` (`idab`, `idclient`, `idcom`) VALUES
(108, 8920928, 990290818),
(109, 87878699, 89839091),
(105, 989798787, 877878787);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(11) DEFAULT NULL,
  `mdp` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `cni` int(10) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` int(30) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cni`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`cni`, `nom`, `prenom`, `telephone`, `adresse`, `login`, `mdp`) VALUES
(763590912, 'DIALLO', 'Amadou Sara', 776537872, 'Yarakh', 'dasleu', 'das96'),
(678123431, 'GUEYE', 'Bassirou', 786137072, 'Guediawaye', 'joni', 'joni97'),
(342561782, 'DIA', 'Fatoumata', 789827600, 'Grand-Dakar', 'famish', 'fama97');

-- --------------------------------------------------------

--
-- Structure de la table `cantine`
--

DROP TABLE IF EXISTS `cantine`;
CREATE TABLE IF NOT EXISTS `cantine` (
  `idcant` int(20) NOT NULL AUTO_INCREMENT,
  `nomcant` varchar(40) DEFAULT NULL,
  `lieu` varchar(40) DEFAULT NULL,
  `idcom` int(20) DEFAULT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'im_serveur/bou15.png',
  PRIMARY KEY (`idcant`),
  KEY `fk_cantine` (`idcom`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cantine`
--

INSERT INTO `cantine` (`idcant`, `nomcant`, `lieu`, `idcom`, `photo`) VALUES
(2, 'Escales', 'Thiaroye Azur', 886732983, 'im_serveur/bou11.jpg'),
(6, 'Elle', 'West Foire', 89839091, 'tofs_server/bou6.jpg'),
(9, 'Mbatal', 'Parcelles assenies', 762387090, 'tofs_server/bou10.jpg'),
(16, '', '', 222222222, 'tofs_server/mari.png'),
(10, 'Kabacoto', 'Pikine', 878980928, 'tofs_server/bou1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `envoyeur` int(100) DEFAULT NULL,
  `receveur` int(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `lu` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `envoyeur`, `receveur`, `message`, `date`, `lu`) VALUES
(14, 886732983, 565665656, 'salut ouzex', '2019-09-29', 1),
(6, 886732983, 762387090, 'd\'accor', '2019-09-29', 1),
(8, 87878699, 762387090, 'Salut Ousmane', '2019-09-29', 1),
(9, 87878699, 565665656, 'Boy ptit Senghor', '2019-09-29', 1),
(10, 87878699, 89839091, 'Salut Mari Fall comment cv', '2019-09-29', 1),
(11, 87878699, 878980928, 'Peuhl fouta naga df', '2019-09-29', 1),
(44, 89839091, 87878699, 'hii', '2019-10-10', 1),
(30, 89839091, 76715656, 'cv Tapha Et la jrnÃ©e ?', '2019-10-01', 1),
(29, 76715656, 89839091, 'comment vas-tu ?', '2019-10-01', 1),
(28, 76715656, 89839091, 'cc Mari', '2019-10-01', 1),
(21, 87878699, 89839091, 'salut', '2019-10-01', 1),
(31, 878980928, 87878699, 'Niouss naala dh cv nii', '2019-10-01', 0),
(43, 87878699, 886732983, 'Mamour', '2019-10-04', 1),
(27, 89839091, 87878699, 'wiiiii Fatou comment cv ?', '2019-10-01', 1),
(32, 762387090, 87878699, 'cv cherie namenaala', '2019-10-01', 0),
(42, 76715656, 565665656, 'salut Senghor', '2019-10-03', 1),
(39, 76715656, 89839091, 'cv Alhamdoulilah', '2019-10-03', 1),
(45, 87878699, 89839091, 'weii mari ', '2019-10-10', 1),
(46, 89839091, 87878699, 'prquoi weii mari rirrr ?', '2019-10-10', 1),
(47, 87878699, 89839091, 'parce k weii mari mdrrrr', '2019-10-10', 1),
(48, 89839091, 87878699, 'merdee mdrr', '2019-10-10', 1),
(49, 87878699, 89839091, 'Ne me dis pas ca please', '2019-10-10', 1),
(50, 89839091, 87878699, 'Dacorrrr', '2019-10-10', 1),
(51, 87878699, 89839091, 'go', '2019-10-10', 1),
(61, 8920928, 990290818, 'Boy Modou comment cv', '2019-10-14', 1),
(57, 87878699, NULL, 'Boy ptit Senghor', '2019-10-10', 1),
(59, 787875321, 87878787, 'comment cv', '2019-10-13', 1),
(60, 87878787, 787875321, 'cv bien', '2019-10-13', 1),
(62, 990290818, 8920928, 'cv bien et vs ?', '2019-10-14', 1),
(63, 8920928, 990290818, 'goooo', '2019-10-14', 1),
(64, 87878699, 783902928, 'gerant', '2019-10-14', 1),
(65, 87878699, 783902928, 'yyyyyyy', '2019-10-14', 1),
(66, 89839091, 76715656, 'yaguisi diam', '2020-11-21', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(15) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pp` varchar(100) NOT NULL DEFAULT 'im_serveur/icon.jpg',
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `mdp`, `adresse`, `tel`, `email`, `pp`) VALUES
(42, 'diongue', 'seydina', 'diongue', 'rufisque', '771442030', 'seydinaoumardiongue@gmail.com', 'im_serveur/icon.jpg'),
(76715656, 'DIOP', 'Tapha', 'tapha', 'Touba', '765267872', 'tapha@gmail.com', 'im_serveur/icon.jpg'),
(87878699, 'DEME', 'Fatou', 'rema', 'Mbao', '982873721', 'rema@gmail.com', 'tofs_server/faa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `idcol` int(15) NOT NULL AUTO_INCREMENT,
  `nomcol` varchar(25) DEFAULT NULL,
  `idcom` int(15) DEFAULT NULL,
  PRIMARY KEY (`idcol`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`idcol`, `nomcol`, `idcom`) VALUES
(80, 'feuteuil', 89839091),
(79, 'refrigerateur', 89839091),
(78, 'lunette', 89839091),
(77, 'vetement', 89839091),
(76, 'chaussure', 565665656),
(75, 'vetement', 565665656),
(64, 'telephone', 886732983),
(63, 'ordinateur', 886732983),
(89, 'sac', 762387090),
(88, 'chaussure', 762387090),
(92, 'sac', 878980928),
(93, 'lunette', 878980928),
(91, 'vetement', 878980928),
(90, 'table', 762387090),
(94, 'chaussure', 78763767),
(95, 'sac', 78763767),
(96, 'table', 78763767),
(97, 'sac', 877878787),
(98, 'ordinateur', 877878787),
(99, 'telephone', 877878787),
(100, 'sac', 787875321),
(101, 'ordinateur', 787875321),
(102, 'telephone', 787875321),
(103, 'sac', 878676879),
(104, 'ordinateur', 878676879),
(105, 'telephone', 878676879),
(106, 'sac', 990290818),
(107, 'ordinateur', 990290818),
(108, 'telephone', 990290818);

-- --------------------------------------------------------

--
-- Structure de la table `commercant`
--

DROP TABLE IF EXISTS `commercant`;
CREATE TABLE IF NOT EXISTS `commercant` (
  `idcom` int(15) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pp` varchar(100) DEFAULT 'im_serveur/icon.jpg',
  `conf` varchar(5) DEFAULT 'non',
  `etat` varchar(10) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`idcom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commercant`
--

INSERT INTO `commercant` (`idcom`, `nom`, `prenom`, `mdp`, `adresse`, `tel`, `email`, `pp`, `conf`, `etat`) VALUES
(89839091, 'FALL', 'Mari', 'mari', 'Liberte 6', '789309890', 'mari@gmail.com', 'tofs_server/mari.png', 'oui', 'bloque'),
(222222222, 'dfdfdfd', 'ffgfgfgfgfg', 'mari', 'fgffffhfgf', '777777777', 'mari@gmail.com', 'im_serveur/icon.jpg', 'non', 'normal'),
(762387090, 'DIOP', 'Ousmane', 'oussou', 'MbackÃ©', '338279890', 'oussou78@yahoo.com', 'tofs_server/im17.jpg', 'non', 'bloque'),
(878980928, 'KA', 'Ibrahima', 'ibu', 'Nioro du Rip', '789201232', 'ibu78@yahoo.com', 'tofs_server/ibs.jpg', 'oui', 'normal'),
(886732983, 'DEME', 'Mamour', 'houma', 'Thiaroye Azur', '777327178', 'houma@gmail.com', 'tofs_server/mam.jpg', 'oui', 'normal');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `idfav` int(10) NOT NULL AUTO_INCREMENT,
  `idprod` int(10) DEFAULT NULL,
  `idclient` int(30) DEFAULT NULL,
  PRIMARY KEY (`idfav`),
  KEY `fk_fav1` (`idprod`),
  KEY `fk_fav2` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `idimage` int(10) NOT NULL AUTO_INCREMENT,
  `idprod` int(10) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idimage`),
  KEY `fk_produit` (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`idimage`, `idprod`, `url`) VALUES
(77, 82, 'im_serveur/hp.jpg'),
(78, 82, 'im_serveur/hp1.jpg'),
(79, 82, 'im_serveur/hp2.jpg'),
(83, 84, 'im_serveur/dell1.jpg'),
(84, 84, 'im_serveur/dell2.jpg'),
(85, 84, 'im_serveur/dell3.jpg'),
(86, 85, 'im_serveur/1.jpg'),
(87, 85, 'im_serveur/techno1.jpg'),
(88, 85, 'im_serveur/techno4.jpg'),
(89, 86, 'im_serveur/assus1.jpg'),
(90, 86, 'im_serveur/assus2.jpg'),
(91, 86, 'im_serveur/assus3.jpg'),
(122, 90, 'im_serveur/sac1.jpg'),
(123, 90, 'im_serveur/sac2.jpeg'),
(124, 90, 'im_serveur/sac3.jpg'),
(125, 90, 'im_serveur/sac4.jpg'),
(126, 90, 'im_serveur/sac5.jpg'),
(128, 92, 'im_serveur/tissu7.jpg'),
(129, 92, 'im_serveur/tissus.jpg'),
(130, 92, 'im_serveur/tissus1.jpeg'),
(131, 92, 'im_serveur/tissus2.jpeg'),
(132, 92, 'im_serveur/tissus8.jpg'),
(143, 95, 'im_serveur/image.jpeg'),
(144, 95, 'im_serveur/images.jpeg'),
(145, 95, 'im_serveur/SHAR.5643.369.2.jpg'),
(146, 96, 'im_serveur/tissus10.jpg'),
(147, 96, 'im_serveur/tissus11.jpg'),
(148, 96, 'im_serveur/tissus12.jpg'),
(154, 98, 'im_serveur/fuji.jpg'),
(155, 98, 'im_serveur/fuji1.jpg'),
(156, 98, 'im_serveur/fuji3.jpg'),
(157, 98, 'im_serveur/fuji4.jpg'),
(158, 99, 'im_serveur/core.jpg'),
(159, 99, 'im_serveur/core1.jpg'),
(160, 99, 'im_serveur/core2.jpg'),
(161, 100, 'im_serveur/iphone.jpg'),
(162, 100, 'im_serveur/iphone.png'),
(163, 100, 'im_serveur/iphone0.jpg'),
(189, 108, 'im_serveur/photogray1.jpg'),
(190, 108, 'im_serveur/photogray2.jpeg'),
(191, 108, 'im_serveur/photogray3.jpg'),
(192, 108, 'im_serveur/photogray4.jpeg'),
(193, 108, 'im_serveur/photogray5.jpeg'),
(194, 109, 'im_serveur/hisense.jpeg'),
(195, 109, 'im_serveur/hisense.jpg'),
(196, 109, 'im_serveur/hisense1.jpg'),
(197, 109, 'im_serveur/hisense2.jpg'),
(198, 109, 'im_serveur/hisense3.jpg'),
(204, 111, 'im_serveur/Mattkeaton1.jpeg'),
(205, 111, 'im_serveur/mattkeaton2.jpeg'),
(206, 111, 'im_serveur/mattkeaton3.jpg'),
(207, 111, 'im_serveur/mattkeaton4.jpg'),
(208, 111, 'im_serveur/mattkeaton5.jpg'),
(214, 114, 'im_serveur/sac2.jpeg'),
(215, 114, 'im_serveur/sac3.jpg'),
(216, 114, 'im_serveur/sac4.jpg'),
(217, 114, 'im_serveur/sac6.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `marchand`
--

DROP TABLE IF EXISTS `marchand`;
CREATE TABLE IF NOT EXISTS `marchand` (
  `idmar` int(15) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pp` varchar(100) NOT NULL DEFAULT 'im_serveur/icon.jpg',
  `conf` varchar(5) NOT NULL DEFAULT 'non',
  `etat` varchar(10) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`idmar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marchand`
--

INSERT INTO `marchand` (`idmar`, `nom`, `mdp`, `prenom`, `adresse`, `tel`, `email`, `pp`, `conf`, `etat`) VALUES
(783902928, 'Ndiaye', 'ndiaga', 'Ndiaga', 'Kebemer', '777630990', 'ndiaga@gmail.com', 'tofs_server/ndia.jpg', 'oui', 'normal'),
(809212098, 'Sakho', 'cheikh', 'Cheikhou', 'Mbao', '789309241', 'cheikh55@hotmail.com', 'im_serveur/icon.jpg', 'oui', 'bloque');

-- --------------------------------------------------------

--
-- Structure de la table `notif_client`
--

DROP TABLE IF EXISTS `notif_client`;
CREATE TABLE IF NOT EXISTS `notif_client` (
  `id_notif` int(20) NOT NULL AUTO_INCREMENT,
  `idcom` int(20) DEFAULT NULL,
  `idclient` int(20) DEFAULT NULL,
  `pro_com` varchar(30) NOT NULL DEFAULT 'commercant',
  `idprod` int(40) DEFAULT NULL,
  `action` varchar(40) DEFAULT NULL,
  `lu` varchar(7) NOT NULL DEFAULT 'non',
  `date` date NOT NULL,
  PRIMARY KEY (`id_notif`),
  KEY `fk_notif_client1` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notif_client`
--

INSERT INTO `notif_client` (`id_notif`, `idcom`, `idclient`, `pro_com`, `idprod`, `action`, `lu`, `date`) VALUES
(74, 990290818, 8920928, 'commercant', 116, 'publication', 'oui', '2019-10-14'),
(75, 990290818, 8920928, 'commercant', 116, 'accept_reserv', 'oui', '2019-10-14'),
(76, 990290818, 8920928, 'commercant', 116, 'annulle_reserv', 'non', '2019-10-14'),
(77, 89839091, 87878699, 'commercant', 108, 'accept_reserv', 'oui', '2019-10-14');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idpaiement` int(20) NOT NULL,
  `montant` int(20) NOT NULL,
  `datepaiement` date NOT NULL,
  `idclient` int(20) NOT NULL,
  PRIMARY KEY (`idpaiement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idprod` int(10) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `nomcol` varchar(25) DEFAULT 'defaut',
  `prix` int(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `idpers` int(25) NOT NULL,
  PRIMARY KEY (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idprod`, `nomprod`, `description`, `nomcol`, `prix`, `date`, `idpers`) VALUES
(82, 'HP pc', 'Vous pouvez faire des commande. Venez voir les autres modeles venez venez venez', 'ordinateur', 120000, '2019-09-06', 886732983),
(84, 'DELL pc', 'votre ordinateur DELL est en ligne et il est garantie pendant 2 ans ', 'ordinateur', 300000, '2019-09-06', 886732983),
(85, 'Techno ', 'Telephone Ã  bas prix et garantit pendant 3 mois . Venez achetez', 'telephone', 46000, '2019-09-06', 886732983),
(86, 'Assus pc', 'Assus votre ordinateur de travail venez venez venez acheter', 'ordinateur', 230000, '2019-09-06', 886732983),
(90, 'Sac homme', 'Sacs', 'sac', 4300, '2019-09-13', 762387090),
(92, 'Tissus', 'Tissus a vendre', 'defaut', 1000, '2019-09-14', 783902928),
(95, 'Sac femme', 'Ces sacs sont destines aux femmes drianke comme Fama Dia', 'sac', 2500, '2019-09-14', 762387090),
(96, 'drap', 'Tissus', 'defaut', 1000, '2019-09-15', 667309823),
(98, 'Fujitsu pc', 'Fujitsu pc', 'ordinateur', 110000, '2019-10-02', 886732983),
(99, 'J2 Core', 'J2 Core', 'telephone', 43000, '2019-10-02', 886732983),
(100, 'Iphone 8', 'Iphone 8', 'telephone', 98000, '2019-10-02', 886732983),
(101, 'Photogray', 'photogray', 'lunette', 11000, '2019-10-05', 89839091),
(105, 'Photogray', 'photogray', 'lunette', 10500, '2019-10-06', 89839091),
(108, 'Photogray', 'photogray', 'lunette', 11000, '2019-10-06', 89839091),
(109, 'Hisense', 'hisense', 'refrigerateur', 120000, '2019-10-09', 89839091),
(111, 'Matt keaton', 'Matt keaton', 'lunette', 21000, '2019-10-11', 89839091),
(114, 'sacoche', 'sacoche', 'vetement', 30000, '2019-10-13', 89839091);

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `idreserv` int(10) NOT NULL AUTO_INCREMENT,
  `idprod` int(10) DEFAULT NULL,
  `idclient` int(50) DEFAULT NULL,
  `accept` varchar(5) NOT NULL DEFAULT 'non',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idreserv`),
  KEY `fk_reservation1` (`idprod`),
  KEY `fk_reservation2` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reserver`
--

INSERT INTO `reserver` (`idreserv`, `idprod`, `idclient`, `accept`, `date`) VALUES
(109, 108, 87878699, 'oui', '2019-10-14');

-- --------------------------------------------------------

--
-- Structure de la table `tablee`
--

DROP TABLE IF EXISTS `tablee`;
CREATE TABLE IF NOT EXISTS `tablee` (
  `idtable` int(20) NOT NULL,
  `nomtable` varchar(40) DEFAULT NULL,
  `lieu` varchar(40) DEFAULT NULL,
  `idcom` int(20) DEFAULT NULL,
  PRIMARY KEY (`idtable`),
  KEY `fk_table` (`idcom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `comment` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeurtable`
--

DROP TABLE IF EXISTS `vendeurtable`;
CREATE TABLE IF NOT EXISTS `vendeurtable` (
  `idvend` int(15) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pp` varchar(100) NOT NULL DEFAULT 'im_serveur/icon.jpg',
  `conf` varchar(5) NOT NULL DEFAULT 'non',
  `etat` varchar(10) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`idvend`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeurtable`
--

INSERT INTO `vendeurtable` (`idvend`, `nom`, `mdp`, `prenom`, `adresse`, `tel`, `email`, `pp`, `conf`, `etat`) VALUES
(667309823, 'NDIAYE', 'fatou', 'Fatou', 'Nioro', '709809092', 'fatou@gmail.com', 'im_serveur/icon.jpg', 'oui', 'normal');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_produit` FOREIGN KEY (`idprod`) REFERENCES `produit` (`idprod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
