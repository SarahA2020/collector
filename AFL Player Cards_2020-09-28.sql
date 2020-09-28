# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: AFL Player Cards
# Generation Time: 2020-09-28 10:51:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table card_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `card_details`;

CREATE TABLE `card_details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `player_first_name` varchar(50) DEFAULT NULL,
  `player_last_name` varchar(50) DEFAULT NULL,
  `club` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `height` decimal(3,2) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `card_details` WRITE;
/*!40000 ALTER TABLE `card_details` DISABLE KEYS */;

INSERT INTO `card_details` (`id`, `player_first_name`, `player_last_name`, `club`, `position`, `DOB`, `height`, `weight`)
VALUES
	(1,'Christian','Petracca','Melbourne Demons','Midfield','1996-01-04',1.86,96),
	(2,'Dustin','Martin','Richmond Tigers','Midfield','1991-06-26',1.87,86),
	(3,'Nat','Fyfe','Fremantle Dockers','Forward','1991-09-18',1.90,96),
	(4,'Tom','Hawkins','Geelong Cats','Full Forward','1988-07-21',1.98,101),
	(5,'James','Siciliy','Hawthorn Hawks','Defender','1995-01-06',1.89,73),
	(6,'Brodie','Grundy','Collingwood Magpies','Ruckman','1994-04-15',2.02,100);

/*!40000 ALTER TABLE `card_details` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
