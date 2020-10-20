# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: localhost (MySQL 5.6.35)
# Base de données: testdev
# Temps de génération: 2018-05-03 09:51:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table groupe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groupe`;

CREATE TABLE `groupe` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(256) DEFAULT NULL,
  `description` longtext,
  `image_url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `groupe` WRITE;
/*!40000 ALTER TABLE `groupe` DISABLE KEYS */;

INSERT INTO `groupe` (`id`, `titre`, `description`, `image_url`)
VALUES
	(1,'Le Groupe','Fusce vehicula sem nec est malesuada, ac varius urna pellentesque. Praesent ultricies nulla viverra sapien auctor euismod. Duis efficitur auctor risus. Maecenas finibus nec tellus sed euismod. Etiam quis porta erat. Nulla sit amet tellus semper, laoreet dolor vitae, porttitor ex. Sed nec enim sed .\r\rDonec leo arcu, vulputate nec arcu ut, euismod rhoncus sem. Nullam scelerisque felis tellus, vitae bibendum lacus maximus at. Phasellus lacus est, interdum venenatis pharetra a, faucibus sed diam. Sed euismod, leo a maximus consequat, erat odio egestas sem, vitae finibus mi orci non sem. Nulla facilisi. Aliquam sodales fermentum tortor, sed auctor justo.','04.jpg');

/*!40000 ALTER TABLE `groupe` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table realisations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `realisations`;

CREATE TABLE `realisations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `image_url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `realisations` WRITE;
/*!40000 ALTER TABLE `realisations` DISABLE KEYS */;

INSERT INTO `realisations` (`id`, `titre`, `description`, `url`, `image_url`)
VALUES
	(1,'Pellentesque suscipit','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean facilisis ultricies nunc, eget tincidunt mi mollis ac.','https://www.myclientisrich.com','01.jpg'),
	(2,'Lorem ipsum dolor','Integer volutpat elementum ante. Donec quis vulputate orci, id venenatis orci. Curabitur eget arcu malesuada nunc interdum aliquet vulputate in metus.','https://www.myclientisrich.com','02.jpg'),
	(3,'Vivamus eu sollicitudin','Etiam finibus eget ante et volutpat. Aliquam porttitor porttitor justo vel venenatis. Maecenas quam massa, volutpat a sodales sit amet, maximus ac dui.','https://www.myclientisrich.com','03.jpg');

/*!40000 ALTER TABLE `realisations` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table valeurs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `valeurs`;

CREATE TABLE `valeurs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(256) DEFAULT NULL,
  `description` longtext,
  `image_url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `valeurs` WRITE;
/*!40000 ALTER TABLE `valeurs` DISABLE KEYS */;

INSERT INTO `valeurs` (`id`, `titre`, `description`, `image_url`)
VALUES
	(1,'Innovation','Proin nec pulvinar mi, eu accumsan dui. Sed commodo elit magna, ac mattis sem tempus id. Aliquam erat volutpat. Sed orci justo, vulputate in dapibus ut, scelerisque quis risus. Vivamus ut tempor lorem, eget dapibus leo. Ut a rutrum enim. Donec sit amet erat condimentum, cursus purus ut, finibus nunc. Nulla luctus fringilla tincidunt.','05.jpg'),
	(2,'Épanouissement','Quisque porta, tellus vel sollicitudin imperdiet, nisl diam pellentesque velit, non hendrerit eros libero vel augue. Maecenas dapibus est ac tortor mattis, nec convallis leo condimentum. Fusce at justo at mi mattis varius. Morbi malesuada urna a dolor blandit, sit amet faucibus neque gravida.','06.jpg'),
	(3,'Excellence','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis turpis massa, at ultricies lacus facilisis nec. Sed tempor tincidunt lorem, vel semper odio vulputate a.','07.jpg');

/*!40000 ALTER TABLE `valeurs` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
