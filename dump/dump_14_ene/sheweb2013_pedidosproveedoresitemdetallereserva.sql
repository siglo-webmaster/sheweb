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
-- Table structure for table `pedidosproveedoresitemdetallereserva`
--

DROP TABLE IF EXISTS `pedidosproveedoresitemdetallereserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresitemdetallereserva` (
  `idpedidosproveedoresitemdetallereserva` int(11) NOT NULL AUTO_INCREMENT,
  `pedidosproveedoresitems_idpedidosproveedoresitems` int(11) NOT NULL,
  `bodega_idbodega` int(11) NOT NULL,
  `proyectosespeciales_idproyectosespeciales` int(11) DEFAULT NULL,
  `usuarios_idusuarios` bigint(20) DEFAULT NULL,
  `reservado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresitemdetallereserva`),
  KEY `fk_pedidosproveedoresitemdetallereserva_bodega1` (`bodega_idbodega`),
  KEY `fk_pedidosproveedoresitemdetallereserva_pedidosproveedoresite1` (`pedidosproveedoresitems_idpedidosproveedoresitems`),
  KEY `fk_pedidosproveedoresitemdetallereserva_idusuario` (`usuarios_idusuarios`),
  KEY `fk_pedidosproveedoresitemdetallereserva_proyectosespeciales1` (`proyectosespeciales_idproyectosespeciales`),
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_bodega1` FOREIGN KEY (`bodega_idbodega`) REFERENCES `bodega` (`idbodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_idusuario` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usergroups_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_pedidosproveedoresite1` FOREIGN KEY (`pedidosproveedoresitems_idpedidosproveedoresitems`) REFERENCES `pedidosproveedoresitems` (`idpedidosproveedoresitems`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_pedidosproveedoresitemdetallereserva_proyectosespeciales1` FOREIGN KEY (`proyectosespeciales_idproyectosespeciales`) REFERENCES `proyectosespeciales` (`idproyectosespeciales`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresitemdetallereserva`
--

LOCK TABLES `pedidosproveedoresitemdetallereserva` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresitemdetallereserva` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresitemdetallereserva` VALUES (2,2,1,NULL,1,12),(3,17,1,NULL,1,55),(4,17,2,NULL,1,66),(5,17,3,NULL,1,26),(6,30,1,NULL,1,1),(7,30,2,NULL,1,2),(8,31,1,NULL,1,1),(9,39,1,NULL,1,1),(10,39,2,NULL,1,2),(11,40,1,NULL,1,1),(12,41,1,NULL,1,1),(13,41,2,NULL,1,2),(14,42,1,NULL,1,1),(15,43,1,NULL,1,1),(16,43,2,NULL,1,2),(17,44,1,NULL,1,1),(25,45,1,1,1,5),(27,45,1,1,1,1),(28,47,2,1,1,4),(29,47,3,1,1,6);
/*!40000 ALTER TABLE `pedidosproveedoresitemdetallereserva` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-14 17:53:47
