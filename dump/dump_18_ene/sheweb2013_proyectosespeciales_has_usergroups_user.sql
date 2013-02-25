CREATE DATABASE  IF NOT EXISTS `sheweb2013` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sheweb2013`;
-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sheweb2013
-- ------------------------------------------------------
-- Server version	5.5.28-0ubuntu0.12.04.3-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `proyectosespeciales_has_usergroups_user`
--

DROP TABLE IF EXISTS `proyectosespeciales_has_usergroups_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectosespeciales_has_usergroups_user` (
  `idproyectosespeciales_has_usergroups_user` int(11) NOT NULL AUTO_INCREMENT,
  `proyectosespeciales_idproyectosespeciales` int(11) NOT NULL,
  `usergroups_user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`idproyectosespeciales_has_usergroups_user`),
  KEY `fk_proyectosespeciales_has_usergroups_user_usergroups_user1` (`usergroups_user_id`),
  KEY `fk_proyectosespeciales_has_usergroups_user_proyectosespeciales1` (`proyectosespeciales_idproyectosespeciales`),
  CONSTRAINT `fk_proyectosespeciales_has_usergroups_user_proyectosespeciales1` FOREIGN KEY (`proyectosespeciales_idproyectosespeciales`) REFERENCES `proyectosespeciales` (`idproyectosespeciales`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectosespeciales_has_usergroups_user_usergroups_user1` FOREIGN KEY (`usergroups_user_id`) REFERENCES `usergroups_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectosespeciales_has_usergroups_user`
--

LOCK TABLES `proyectosespeciales_has_usergroups_user` WRITE;
/*!40000 ALTER TABLE `proyectosespeciales_has_usergroups_user` DISABLE KEYS */;
INSERT INTO `proyectosespeciales_has_usergroups_user` VALUES (14,3,1),(15,3,2),(16,1,1),(17,1,2),(18,1,3),(19,1,4),(20,1,5);
/*!40000 ALTER TABLE `proyectosespeciales_has_usergroups_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-18 17:22:13
