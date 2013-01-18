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
-- Table structure for table `porcentajesreservas`
--

DROP TABLE IF EXISTS `porcentajesreservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `porcentajesreservas` (
  `idporcentajesreservas` int(11) NOT NULL AUTO_INCREMENT,
  `usergroups_user_id` bigint(20) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `editorial_ideditorial` int(11) NOT NULL,
  `bodega_idbodega` int(11) NOT NULL,
  `proyectosespeciales_idproyectosespeciales` int(11) NOT NULL,
  `porcentaje` decimal(10,2) NOT NULL,
  `prioridad` int(11) NOT NULL,
  PRIMARY KEY (`idporcentajesreservas`),
  KEY `fk_porcentajesreservas_usergroups_user1` (`usergroups_user_id`),
  KEY `fk_porcentajesreservas_categoria1` (`categoria_idcategoria`),
  KEY `fk_porcentajesreservas_editorial1` (`editorial_ideditorial`),
  KEY `fk_porcentajesreservas_bodega1` (`bodega_idbodega`),
  KEY `fk_porcentajesreservas_proyectosespeciales1` (`proyectosespeciales_idproyectosespeciales`),
  CONSTRAINT `fk_porcentajesreservas_usergroups_user1` FOREIGN KEY (`usergroups_user_id`) REFERENCES `usergroups_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_porcentajesreservas_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_porcentajesreservas_editorial1` FOREIGN KEY (`editorial_ideditorial`) REFERENCES `editorial` (`ideditorial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_porcentajesreservas_bodega1` FOREIGN KEY (`bodega_idbodega`) REFERENCES `bodega` (`idbodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_porcentajesreservas_proyectosespeciales1` FOREIGN KEY (`proyectosespeciales_idproyectosespeciales`) REFERENCES `proyectosespeciales` (`idproyectosespeciales`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `porcentajesreservas`
--

LOCK TABLES `porcentajesreservas` WRITE;
/*!40000 ALTER TABLE `porcentajesreservas` DISABLE KEYS */;
INSERT INTO `porcentajesreservas` VALUES (1,1,1,1,1,1,0.50,1),(2,2,1,1,2,1,0.30,2);
/*!40000 ALTER TABLE `porcentajesreservas` ENABLE KEYS */;
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
