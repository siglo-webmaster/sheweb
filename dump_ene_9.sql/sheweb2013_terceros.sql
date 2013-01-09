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
-- Table structure for table `terceros`
--

DROP TABLE IF EXISTS `terceros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terceros` (
  `idterceros` int(11) NOT NULL AUTO_INCREMENT,
  `tiposidentificacion_idtiposidentificacion` int(11) NOT NULL,
  `ciudad_idciudad` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `identificacion` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `contacto` varchar(128) DEFAULT NULL,
  `telefonocontacto` varchar(45) DEFAULT NULL,
  `direccion` varchar(128) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idterceros`),
  KEY `fk_terceros_tiposidentificacion1` (`tiposidentificacion_idtiposidentificacion`),
  KEY `fk_terceros_ciudad1` (`ciudad_idciudad`),
  CONSTRAINT `fk_terceros_ciudad1` FOREIGN KEY (`ciudad_idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_terceros_tiposidentificacion1` FOREIGN KEY (`tiposidentificacion_idtiposidentificacion`) REFERENCES `tiposidentificacion` (`idtiposidentificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terceros`
--

LOCK TABLES `terceros` WRITE;
/*!40000 ALTER TABLE `terceros` DISABLE KEYS */;
INSERT INTO `terceros` VALUES (1,1,1,'PUBLIDISA','982380932798327','6554465','carlos@jojo.com','Carlos Augusto Torres Dias','n876yolh98oh90','cll 22 # 34 - 55','activo'),(2,2,1,'tirant','8987987','6554465','897yukj90yuhk','89yh98yky9','987987987','87oh098gh98yo','activo'),(3,1,1,'nuevo tercero con 2 tipos de moneda','4342345234','','','','','','activo'),(4,1,1,'kmklk lk kl lk ','4324234234','','','','','','activo');
/*!40000 ALTER TABLE `terceros` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-09  8:16:21
