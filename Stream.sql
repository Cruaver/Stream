-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2017 at 10:00 AM
-- Server version: 5.5.53-0+deb8u1
-- PHP Version: 5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE IF NOT EXISTS `categ` (
  `id_categ` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`id_categ`, `name`) VALUES
(1, 'Action'),
(2, 'animation'),
(3, 'Aventure'),
(4, 'Comédie	'),
(5, 'Comédie Dramatique'),
(6, 'Comédie Musicale'),
(7, 'Dessin Animé'),
(8, 'Divers'),
(9, 'Documentaire'),
(10, 'Drame'),
(11, 'Erotique'),
(12, 'Espionnage'),
(13, 'Expérimental'),
(14, 'Famille'),
(15, 'Fantastique'),
(16, 'Guerre'),
(17, 'Musical'),
(18, 'Péplum'),
(19, 'Policier'),
(20, 'Romance	'),
(21, 'Thriller'),
(22, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `categ_film`
--

CREATE TABLE IF NOT EXISTS `categ_film` (
  `ID_categ` int(11) NOT NULL,
  `ID_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ_film`
--

INSERT INTO `categ_film` (`ID_categ`, `ID_film`) VALUES
(1, 2),
(4, 4),
(7, 1),
(7, 5),
(7, 6),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categ_serie`
--

CREATE TABLE IF NOT EXISTS `categ_serie` (
  `ID_categ` int(11) NOT NULL,
  `ID_series` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ_serie`
--

INSERT INTO `categ_serie` (`ID_categ`, `ID_series`) VALUES
(3, 1),
(10, 2),
(15, 3),
(3, 4),
(10, 5),
(10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Commentaire`
--

CREATE TABLE IF NOT EXISTS `Commentaire` (
`ID` int(11) NOT NULL,
  `ID_film` int(11) NOT NULL,
  `commentaire` text CHARACTER SET utf8 NOT NULL,
  `Login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Note` int(11) NOT NULL,
  `N_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Film_info`
--

CREATE TABLE IF NOT EXISTS `Film_info` (
`ID` int(11) NOT NULL,
  `Titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `avent_premiere` date DEFAULT NULL,
  `Date_sorti` date DEFAULT NULL,
  `Realisateur` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Acteur` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Genres` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Nationalite` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Synopsis` text,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Film_info`
--

INSERT INTO `Film_info` (`ID`, `Titre`, `image`, `avent_premiere`, `Date_sorti`, `Realisateur`, `Acteur`, `Genres`, `Nationalite`, `Synopsis`, `note`) VALUES
(1, 'Vaiana', 'http://fr.web.img4.acsta.net/c_215_290/pictures/16/09/14/09/17/148002.jpg', '2016-11-16', '2016-11-30', 'John Musker, Ron Clements\r\n', 'Cerise Calixte, Anthony Kavanagh, Mareva Galanter', 'Animation, Famille, Aventure', 'Américain', 'Il y a 3 000 ans, les plus grands marins du monde voyagèrent dans le vaste océan Pacifique, à la découverte des innombrables îles de l''Océanie. Mais pendant le millénaire qui suivit, ils cessèrent de voyager. Et personne ne sait pourquoi...Vaiana, la légende du bout du monde raconte l''aventure d''une jeune fille téméraire qui se lance dans un voyage audacieux pour accomplir la quête inachevée de ses ancêtres et sauver son peuple. Au cours de sa traversée du vaste océan, Vaiana va rencontrer Maui, un demi-dieu. Ensemble, ils vont accomplir un voyage épique riche d''action, de rencontres et d''épreuves... En accomplissant la quête inaboutie de ses ancêtres, Vaiana va découvrir la seule chose qu''elle a toujours cherchée : elle-même.', NULL),
(2, 'Assasins creed', 'http://fr.web.img4.acsta.net/c_215_290/pictures/16/10/28/13/54/576646.jpg', NULL, '2016-12-21', 'Justin Kurzel', 'Michael Fassbender, Marion Cotillard, Jeremy Irons', 'Action, Science fiction', 'Action, Science fiction', 'Grâce à une technologie révolutionnaire qui libère la mémoire génétique, Callum Lynch revit les aventures de son ancêtre Aguilar, dans l’Espagne du XVe siècle.  Alors que Callum découvre qu’il est issu d’une mystérieuse société secrète, les Assassins, il va assimiler les compétences dont il aura besoin pour affronter, dans le temps présent, une autre redoutable organisation : l’Ordre des Templiers.', NULL),
(3, 'Sully', 'http://fr.web.img4.acsta.net/c_215_290/pictures/16/10/14/15/10/425022.jpg', NULL, '2016-11-30', 'Clint Eastwood', 'Tom Hanks, Aaron Eckhart, Laura Linney', 'Biopic, Drame', 'Américain', 'L’histoire vraie du pilote d’US Airways qui sauva ses passagers en amerrissant sur l’Hudson en 2009. \r\nLe 15 janvier 2009, le monde a assisté au "miracle sur l''Hudson" accompli par le commandant "Sully" Sullenberger : en effet, celui-ci a réussi à poser son appareil sur les eaux glacées du fleuve Hudson, sauvant ainsi la vie des 155 passagers à bord. Cependant, alors que Sully était salué par l''opinion publique et les médias pour son exploit inédit dans l''histoire de l''aviation, une enquête a été ouverte, menaçant de détruire sa réputation et sa carrière.', NULL),
(4, 'Papa ou maman 2', 'http://fr.web.img3.acsta.net/c_215_290/pictures/16/10/04/12/07/070308.jpg', NULL, '2016-12-07', 'Martin Bourboulon', 'Laurent Lafitte, Marina Foïs, Alexandre Desrousseaux\r\n', 'Comédie', 'Français', 'Deux ans ont passé. Après avoir raté leur séparation, les Leroy semblent parfaitement réussir leur divorce. Mais l''apparition de deux nouveaux amoureux dans la vie de Vincent et de Florence va mettre le feu aux poudres. Le match entre les ex-époux reprend.', NULL),
(5, 'Ballerina', 'http://fr.web.img4.acsta.net/c_215_290/pictures/16/10/06/16/05/095823.jpg', NULL, '2016-12-14', 'Eric Summer, Eric Warin', 'Camille Cottin, Malik Bentalha, Kaycie Chase', 'Animation', 'Français, Canadien', 'Félicie est une jeune orpheline bretonne qui n’a qu’une passion : la danse. Avec son meilleur ami Victor qui aimerait devenir un grand inventeur, ils mettent au point un plan rocambolesque pour s’échapper de l’orphelinat, direction Paris, ville lumière et sa Tour Eiffel en construction ! Félicie devra se battre comme jamais, se dépasser et apprendre de ses erreurs pour réaliser son rêve le plus fou : devenir danseuse étoile à l’Opéra de Paris…', NULL),
(6, 'Norm', 'http://fr.web.img6.acsta.net/c_215_290/pictures/16/12/09/17/16/437299.jpg', NULL, '2016-12-21', 'Trevor Wall', 'Omar Sy, Med Hondo, Lucien Jean-Baptiste', 'Animation, Aventure, Comédie', 'Américain', 'L’ours polaire Norm et ses trois meilleurs amis, les lemmings, décident de se rendre à New York afin de déjouer les plans d’un groupe immobilier qui menace d’envahir sa banquise. Il fait la rencontre de Olympia, une jeune fille, qui aidée de sa maman, vont faire de Norm la mascotte de l’entreprise. Face au machiavélique Mr Greene, ils vont tout mettre en oeuvre pour sauver leur monde.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Series_info`
--

CREATE TABLE IF NOT EXISTS `Series_info` (
`ID` int(11) NOT NULL,
  `Titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Date_sorti` date NOT NULL,
  `Realisateur` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Acteur` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Genre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Format` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Nationalite` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Synopsis` text CHARACTER SET utf8,
  `Note` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Series_info`
--

INSERT INTO `Series_info` (`ID`, `Titre`, `Image`, `Date_sorti`, `Realisateur`, `Acteur`, `Genre`, `Status`, `Format`, `Nationalite`, `Synopsis`, `Note`) VALUES
(1, 'Frontier', 'http://fr.web.img6.acsta.net/cx_160_213/pictures/16/10/31/14/22/545983.jpg', '2017-01-20', 'Brad Peyton, Rob Blackie', 'Jason Momoa, Landon Liboiron', 'Aventure, Western, Action', 'En production', '60 minutes', 'Américaine', 'Cette série d’action et d’aventure suit la lutte violente et chaotique pour la prise de pouvoir et le contrôle des richesses dans l’Amérique du Nord de la fin du 18e siècle. Racontée sous différentes perspectives, la série se déroule dans un monde où les négociations commerciales peuvent se solder par un coup de hache et où les relations sensibles entre les tribus d’indiens d’Amérique et les Européens peuvent se transformer en bain de sang.', NULL),
(2, 'Taboo', 'http://fr.web.img3.acsta.net/cx_160_213/pictures/16/11/16/08/54/496468.jpg', '2017-01-07', 'Steven Knight', 'Tom Hardy, Leo Bill, Oona Chaplin', 'Drame, Thriller', 'En production', '60 minutes', 'Britannique, américaine', 'De retour d''Afrique avec des diamants acquis illégalement, un aventurier cherche à venger la mort de son père en 1814. Alors qu’il refuse de vendre l’entreprise familiale, il lance sa propre affaire de négoce et de transport et se retrouve en délicate posture entre deux nations en guerre, la Grande-Bretagne et les États-Unis.', NULL),
(3, 'Marvel''s Iron Fist', 'http://fr.web.img5.acsta.net/cx_160_213/pictures/16/07/26/09/21/011705.jpg', '2017-03-17', 'Scott Buck', 'Finn Jones, Carrie-Anne Moss', 'Fantastique, Action', 'En production', '52 minutes', 'Américaine', 'Après avoir disparu quelques années, Danny Rand revient à New York pour combattre les criminels qui en ont fait une ville corrompue, grâce à ses connaissances en kung-fu et la puissance destructrice de son poing.\r\n', NULL),
(4, 'Riverdale', 'http://fr.web.img6.acsta.net/cx_160_213/pictures/16/05/20/09/52/489439.jpg', '2017-01-26', 'Roberto Aguirre-Sacasa', 'K.J. Apa, Lili Reinhart, Cole Sprouse', 'Aventure, Drame', 'En production', '42 minutes', 'Américaine', 'Les aventures du jeune Archie Andrews et de ses amis dans la petite ville de Riverdale. Sous son apparence idyllique, elle cache de sombres secrets qui ne demandent qu''à être révélés et perturber la tranquillité de ses habitants.', NULL),
(5, 'Glace', 'http://fr.web.img1.acsta.net/cx_160_213/pictures/16/12/29/10/12/509278.jpg', '2017-01-10', 'M6', 'Charles Berling, Julia Piaton, Nina Meurisse', 'Drame, Thriller', 'En production', '52 minutes', 'Française', 'A flanc de montagne, dans les Pyrénées, est découvert le cadavre d’un cheval sans tête accroché à 2000 mètres d’altitude, au sommet d’un téléphérique. Les capitaines Servaz et Ziegler se voient confier cette enquête. A quelques kilomètres de là, dans un centre pénitentiaire de haute sécurité, la jeune psychiatre Diane Berg entame des séances de psychothérapie auprès de Julian Hirtmann un dangereux tueur en série arrêté des années auparavant par le capitaine Servaz... Les destins de ces quatre personnages vont se percuter dans une enquête des plus terrifiantes', NULL),
(6, 'Legion', 'http://fr.web.img4.acsta.net/cx_160_213/pictures/16/12/22/09/49/097841.jpg', '2017-02-08', 'Noah Hawley', 'Dan Stevens, Aubrey Plaza, Jean Smart', 'Drame, Fantastique, Action', 'En production', '60 minutes', 'Américaine', 'L''histoire de David Haller, le fils schizophrène du professeur Xavier, un homme sujet depuis l''adolescence à une maladie mentale. Au cours d''un de ses nombreux séjours en hôpital psychiatrique, une étrange rencontre avec un patient lui fait réaliser que les voix qu''il entend et les visions auxquelles il est confronté pourraient se révéler vraies.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`user_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`user_id`, `name`, `email`, `Username`, `password`, `Admin`) VALUES
(1, 'kabro', 'charbel.kabro@gmail.com', 'cruaver', 'a40f25de1c22308ee62f74f6fcd5855da1f58b6558247e6521949b594985e8e0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
 ADD UNIQUE KEY `id_categ` (`id_categ`,`name`);

--
-- Indexes for table `categ_film`
--
ALTER TABLE `categ_film`
 ADD UNIQUE KEY `ID_categ` (`ID_categ`,`ID_film`);

--
-- Indexes for table `categ_serie`
--
ALTER TABLE `categ_serie`
 ADD UNIQUE KEY `ID_series` (`ID_series`);

--
-- Indexes for table `Commentaire`
--
ALTER TABLE `Commentaire`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `Film_info`
--
ALTER TABLE `Film_info`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `Series_info`
--
ALTER TABLE `Series_info`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Commentaire`
--
ALTER TABLE `Commentaire`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Film_info`
--
ALTER TABLE `Film_info`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Series_info`
--
ALTER TABLE `Series_info`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
