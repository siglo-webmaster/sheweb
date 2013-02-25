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
-- Table structure for table `pedidosproveedoresitems`
--

DROP TABLE IF EXISTS `pedidosproveedoresitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosproveedoresitems` (
  `idpedidosproveedoresitems` int(11) NOT NULL AUTO_INCREMENT,
  `pedidosproveedores_idpedidosproveedores` int(11) NOT NULL,
  `condicioncomercial_idcondicioncomercial` int(11) NOT NULL,
  `item_iditem` int(11) NOT NULL,
  `solicitado` int(11) DEFAULT NULL,
  `confirmado` int(11) DEFAULT NULL,
  `recibido` int(11) DEFAULT NULL,
  `chekeado` tinyint(1) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpedidosproveedoresitems`),
  KEY `fk_pedidosproveedoresitems_pedidosproveedores1` (`pedidosproveedores_idpedidosproveedores`),
  KEY `fk_pedidosproveedoresitems_item1` (`item_iditem`),
  KEY `fk_pedidosproveedoresitems_condicioncomercial1` (`condicioncomercial_idcondicioncomercial`),
  CONSTRAINT `fk_pedidosproveedoresitems_condicioncomercial1` FOREIGN KEY (`condicioncomercial_idcondicioncomercial`) REFERENCES `condicioncomercial` (`idcondicioncomercial`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitems_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidosproveedoresitems_pedidosproveedores1` FOREIGN KEY (`pedidosproveedores_idpedidosproveedores`) REFERENCES `pedidosproveedores` (`idpedidosproveedores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosproveedoresitems`
--

LOCK TABLES `pedidosproveedoresitems` WRITE;
/*!40000 ALTER TABLE `pedidosproveedoresitems` DISABLE KEYS */;
INSERT INTO `pedidosproveedoresitems` VALUES (2,1,0,1,1,NULL,3,NULL,'activo'),(3,1,0,2,23,NULL,0,NULL,'activo'),(4,2,0,2,3,NULL,3,NULL,'activo'),(5,3,0,2,88,NULL,0,NULL,'activo'),(6,3,0,2,8,NULL,0,NULL,'activo'),(8,6,0,1,4,NULL,0,NULL,'activo'),(12,4,1,1,6,5,7,NULL,'activo'),(13,4,2,1,7,6,1,NULL,'activo'),(14,6,2,1,6,NULL,10,NULL,'activo'),(15,7,1,1,4,NULL,0,NULL,'activo'),(16,7,2,1,9,NULL,0,NULL,'activo'),(17,20,1,1,200,NULL,0,NULL,'activo'),(18,20,2,1,6,NULL,0,NULL,'activo'),(19,36,1,1,7,NULL,0,NULL,'activo'),(20,36,2,1,86,NULL,0,NULL,'activo'),(21,41,1,1,NULL,NULL,0,NULL,'activo'),(22,46,2,1,6,NULL,0,NULL,'activo'),(23,46,1,1,5,NULL,0,NULL,'activo'),(24,46,2,1,6,NULL,0,NULL,'activo'),(25,46,1,1,5,NULL,0,NULL,'activo'),(26,48,2,1,6,NULL,0,NULL,'activo'),(28,48,2,1,6,NULL,0,NULL,'activo'),(30,49,2,1,6,NULL,0,NULL,'activo'),(31,49,2,1,6,NULL,0,NULL,'activo'),(32,50,2,1,6,NULL,0,NULL,'activo'),(33,50,2,1,6,NULL,0,NULL,'activo'),(34,51,2,1,6,NULL,0,NULL,'activo'),(35,51,2,1,6,NULL,0,NULL,'activo'),(36,52,2,1,6,NULL,0,NULL,'activo'),(37,53,2,1,6,NULL,0,NULL,'activo'),(38,54,2,1,6,NULL,0,NULL,'activo'),(39,55,2,1,6,NULL,0,NULL,'activo'),(40,55,2,1,6,NULL,0,NULL,'activo'),(41,56,2,1,6,NULL,0,NULL,'activo'),(42,56,2,1,6,NULL,0,NULL,'activo'),(43,57,2,1,6,NULL,0,NULL,'activo'),(44,57,2,1,6,NULL,0,NULL,'activo'),(45,8,1,1,7,NULL,0,NULL,'activo'),(46,8,2,1,8,NULL,0,NULL,'activo'),(47,58,1,3,55,3,0,NULL,'activo'),(48,59,1,1,6,2,2,NULL,'activo'),(49,60,1,1,6,2,2,NULL,'activo'),(50,8,1,1,5,NULL,0,NULL,'activo'),(51,8,1,1,3,NULL,0,NULL,'activo'),(52,8,1,2,3,NULL,0,NULL,'activo');
/*!40000 ALTER TABLE `pedidosproveedoresitems` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-16 17:33:54
