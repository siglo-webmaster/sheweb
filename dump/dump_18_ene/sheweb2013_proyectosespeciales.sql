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
-- Table structure for table `proyectosespeciales`
--

DROP TABLE IF EXISTS `proyectosespeciales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectosespeciales` (
  `idproyectosespeciales` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idusuariocreacion` bigint(20) NOT NULL,
  `moneda_idmoneda` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fechainicio` timestamp NULL DEFAULT NULL,
  `fechacierre` timestamp NULL DEFAULT NULL,
  `observaciones` text,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idproyectosespeciales`),
  KEY `fk_proyectosespeciales_terceros1` (`idcliente`),
  KEY `fk_proyectosespeciales_usergroups_user1` (`idusuariocreacion`),
  KEY `fk_proyectosespeciales_moneda1` (`moneda_idmoneda`),
  CONSTRAINT `fk_proyectosespeciales_moneda1` FOREIGN KEY (`moneda_idmoneda`) REFERENCES `moneda` (`idmoneda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectosespeciales_terceros1` FOREIGN KEY (`idcliente`) REFERENCES `terceros` (`idterceros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectosespeciales_usergroups_user1` FOREIGN KEY (`idusuariocreacion`) REFERENCES `usergroups_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectosespeciales`
--

LOCK TABLES `proyectosespeciales` WRITE;
/*!40000 ALTER TABLE `proyectosespeciales` DISABLE KEYS */;
INSERT INTO `proyectosespeciales` VALUES (1,5,1,1,'PEDIDOS 2013','2013-01-01 05:00:00','2013-01-31 05:00:00','','activo'),(2,6,1,1,'FILBO 2013','2013-01-17 05:00:00','2013-03-28 05:00:00','Feria internacional del libro de bogota 2013','activo'),(3,6,1,1,'FILBO 2014','2014-01-08 05:00:00','2014-01-31 05:00:00','thet trtytyyyye','activo');
/*!40000 ALTER TABLE `proyectosespeciales` ENABLE KEYS */;
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
