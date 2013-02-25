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
-- Temporary table structure for view `view_pedidosproveedoresitems`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitems`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitems`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitems` (
  `idpedidosproveedoresitems` tinyint NOT NULL,
  `pedidosproveedores_idpedidosproveedores` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `reservado` tinyint NOT NULL,
  `recibido` tinyint NOT NULL,
  `estado` tinyint NOT NULL,
  `usuarios_idusuarios` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `isbn` tinyint NOT NULL,
  `barcode` tinyint NOT NULL,
  `fechaedicion` tinyint NOT NULL,
  `fechacreacion` tinyint NOT NULL,
  `temporal` tinyint NOT NULL,
  `ideditorial` tinyint NOT NULL,
  `nombreeditorial` tinyint NOT NULL,
  `idcondicioncomercial` tinyint NOT NULL,
  `condicioncomercial` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_pedidosproveedores`
--

DROP TABLE IF EXISTS `view_pedidosproveedores`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedores`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedores` (
  `idpedidosproveedores` tinyint NOT NULL,
  `usuariocreacion` tinyint NOT NULL,
  `usernamecreacion` tinyint NOT NULL,
  `usuarioaprobacion` tinyint NOT NULL,
  `usernameaprobacion` tinyint NOT NULL,
  `idproveedor` tinyint NOT NULL,
  `nombreproveedor` tinyint NOT NULL,
  `moneda_idmoneda` tinyint NOT NULL,
  `nombremoneda` tinyint NOT NULL,
  `fechacreacion` tinyint NOT NULL,
  `fechacierre` tinyint NOT NULL,
  `fechaaprobacion` tinyint NOT NULL,
  `fechaestimada` tinyint NOT NULL,
  `fechaentrada` tinyint NOT NULL,
  `fechaliberacion` tinyint NOT NULL,
  `descripcion` tinyint NOT NULL,
  `observaciones` tinyint NOT NULL,
  `estado` tinyint NOT NULL,
  `idtipopedidosproveedores` tinyint NOT NULL,
  `tipopedidosproveedores` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_clientes`
--

DROP TABLE IF EXISTS `view_clientes`;
/*!50001 DROP VIEW IF EXISTS `view_clientes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_clientes` (
  `idterceros` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_pedidosproveedoresitemscorto`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitemscorto`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemscorto`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitemscorto` (
  `idppi` tinyint NOT NULL,
  `idpp` tinyint NOT NULL,
  `iditem` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `recibido` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_pedidosproveedoresentradasalmacendetalle`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresentradasalmacendetalle` (
  `idpedidosproveedoresentradasalmacendetalle` tinyint NOT NULL,
  `idpedidosproveedoresentradasalmacen` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `cantidad` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `idcondicioncomercial` tinyint NOT NULL,
  `condicioncomercial` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_proveedores`
--

DROP TABLE IF EXISTS `view_proveedores`;
/*!50001 DROP VIEW IF EXISTS `view_proveedores`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_proveedores` (
  `idterceros` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_pedidosproveedoresitemsagrupado`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitemsagrupado`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemsagrupado`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitemsagrupado` (
  `idpedidosproveedoresitems` tinyint NOT NULL,
  `pedidosproveedores_idpedidosproveedores` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `recibido` tinyint NOT NULL,
  `reservado` tinyint NOT NULL,
  `estado` tinyint NOT NULL,
  `idcondicioncomercial` tinyint NOT NULL,
  `condicioncomercial` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_pedidosproveedoresitemdetallereserva`
--

DROP TABLE IF EXISTS `view_pedidosproveedoresitemdetallereserva`;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemdetallereserva`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_pedidosproveedoresitemdetallereserva` (
  `idpedidosproveedoresitemdetallereserva` tinyint NOT NULL,
  `usuarios_idusuarios` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `bodega_idbodega` tinyint NOT NULL,
  `nombrebodega` tinyint NOT NULL,
  `reservado` tinyint NOT NULL,
  `solicitado` tinyint NOT NULL,
  `idpedidosproveedoresitems` tinyint NOT NULL,
  `item_iditem` tinyint NOT NULL,
  `nombre` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_pedidosproveedoresitems`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitems`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitems`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitems` AS select `ppi`.`idpedidosproveedoresitems` AS `idpedidosproveedoresitems`,`ppi`.`pedidosproveedores_idpedidosproveedores` AS `pedidosproveedores_idpedidosproveedores`,`ppi`.`item_iditem` AS `item_iditem`,`ppi`.`solicitado` AS `solicitado`,`pid`.`reservado` AS `reservado`,`ppi`.`recibido` AS `recibido`,`ppi`.`estado` AS `estado`,`pid`.`usuarios_idusuarios` AS `usuarios_idusuarios`,`u`.`username` AS `username`,`i`.`nombre` AS `nombre`,`i`.`isbn` AS `isbn`,`i`.`barcode` AS `barcode`,`i`.`fechaedicion` AS `fechaedicion`,`i`.`fechacreacion` AS `fechacreacion`,`i`.`temporal` AS `temporal`,`e`.`ideditorial` AS `ideditorial`,`e`.`nombre` AS `nombreeditorial`,`cc`.`idcondicioncomercial` AS `idcondicioncomercial`,`cc`.`nombre` AS `condicioncomercial` from (((((`pedidosproveedoresitems` `ppi` join `item` `i` on((`i`.`iditem` = `ppi`.`item_iditem`))) join `editorial` `e` on((`e`.`ideditorial` = `i`.`editorial_ideditorial`))) join `condicioncomercial` `cc` on((`cc`.`idcondicioncomercial` = `ppi`.`condicioncomercial_idcondicioncomercial`))) left join `pedidosproveedoresitemdetallereserva` `pid` on((`ppi`.`idpedidosproveedoresitems` = `pid`.`pedidosproveedoresitems_idpedidosproveedoresitems`))) left join `usergroups_user` `u` on((`u`.`id` = `pid`.`usuarios_idusuarios`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedores`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedores`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedores`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedores` AS select `pp`.`idpedidosproveedores` AS `idpedidosproveedores`,`pp`.`usuariocreacion` AS `usuariocreacion`,`uc`.`username` AS `usernamecreacion`,`pp`.`usuarioaprobacion` AS `usuarioaprobacion`,`ua`.`username` AS `usernameaprobacion`,`pp`.`idproveedor` AS `idproveedor`,`t`.`nombre` AS `nombreproveedor`,`pp`.`moneda_idmoneda` AS `moneda_idmoneda`,`m`.`nombre` AS `nombremoneda`,`pp`.`fechacreacion` AS `fechacreacion`,`pp`.`fechacierre` AS `fechacierre`,`pp`.`fechaaprobacion` AS `fechaaprobacion`,`pp`.`fechaestimada` AS `fechaestimada`,`pp`.`fechaentrada` AS `fechaentrada`,`pp`.`fechaliberacion` AS `fechaliberacion`,`pp`.`descripcion` AS `descripcion`,`pp`.`observaciones` AS `observaciones`,`pp`.`estado` AS `estado`,`tpp`.`idtipopedidosproveedores` AS `idtipopedidosproveedores`,`tpp`.`nombre` AS `tipopedidosproveedores` from (((((`pedidosproveedores` `pp` join `tipopedidosproveedores` `tpp` on((`tpp`.`idtipopedidosproveedores` = `pp`.`tipopedidosproveedores_idtipopedidosproveedores`))) join `terceros` `t` on((`t`.`idterceros` = `pp`.`idproveedor`))) join `moneda` `m` on((`m`.`idmoneda` = `pp`.`moneda_idmoneda`))) left join `usergroups_user` `uc` on((`uc`.`id` = `pp`.`usuariocreacion`))) left join `usergroups_user` `ua` on((`ua`.`id` = `pp`.`usuariocreacion`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_clientes`
--

/*!50001 DROP TABLE IF EXISTS `view_clientes`*/;
/*!50001 DROP VIEW IF EXISTS `view_clientes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_clientes` AS select `t`.`idterceros` AS `idterceros`,`t`.`nombre` AS `nombre`,`t`.`estado` AS `estado` from (`terceros` `t` join `terceros_has_tiposterceros` `tt` on((`tt`.`terceros_idterceros` = `t`.`idterceros`))) where (`tt`.`tiposterceros_idtiposterceros` = '1') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresitemscorto`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitemscorto`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemscorto`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitemscorto` AS select distinct `view_pedidosproveedoresitemsagrupado`.`idpedidosproveedoresitems` AS `idppi`,`view_pedidosproveedoresitemsagrupado`.`pedidosproveedores_idpedidosproveedores` AS `idpp`,`view_pedidosproveedoresitemsagrupado`.`item_iditem` AS `iditem`,`view_pedidosproveedoresitemsagrupado`.`nombre` AS `nombre`,`view_pedidosproveedoresitemsagrupado`.`solicitado` AS `solicitado`,`view_pedidosproveedoresitemsagrupado`.`recibido` AS `recibido`,`view_pedidosproveedoresitemsagrupado`.`estado` AS `estado` from `view_pedidosproveedoresitemsagrupado` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresentradasalmacendetalle`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresentradasalmacendetalle`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresentradasalmacendetalle` AS select `d`.`idpedidosproveedoresentradasalmacendetalle` AS `idpedidosproveedoresentradasalmacendetalle`,`d`.`idpedidosproveedoresentradasalmacen` AS `idpedidosproveedoresentradasalmacen`,`d`.`item_iditem` AS `item_iditem`,`d`.`cantidad` AS `cantidad`,`i`.`nombre` AS `nombre`,`cc`.`idcondicioncomercial` AS `idcondicioncomercial`,`cc`.`nombre` AS `condicioncomercial` from ((`pedidosproveedoresentradasalmacendetalle` `d` join `item` `i` on((`i`.`iditem` = `d`.`item_iditem`))) join `condicioncomercial` `cc` on((`cc`.`idcondicioncomercial` = `d`.`condicioncomercial_idcondicioncomercial`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_proveedores`
--

/*!50001 DROP TABLE IF EXISTS `view_proveedores`*/;
/*!50001 DROP VIEW IF EXISTS `view_proveedores`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_proveedores` AS select `t`.`idterceros` AS `idterceros`,`t`.`nombre` AS `nombre`,`t`.`estado` AS `estado` from (`terceros` `t` join `terceros_has_tiposterceros` `tt` on((`tt`.`terceros_idterceros` = `t`.`idterceros`))) where (`tt`.`tiposterceros_idtiposterceros` = '2') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresitemsagrupado`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitemsagrupado`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemsagrupado`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitemsagrupado` AS select `view_pedidosproveedoresitems`.`idpedidosproveedoresitems` AS `idpedidosproveedoresitems`,`view_pedidosproveedoresitems`.`pedidosproveedores_idpedidosproveedores` AS `pedidosproveedores_idpedidosproveedores`,`view_pedidosproveedoresitems`.`item_iditem` AS `item_iditem`,`view_pedidosproveedoresitems`.`nombre` AS `nombre`,`view_pedidosproveedoresitems`.`solicitado` AS `solicitado`,`view_pedidosproveedoresitems`.`recibido` AS `recibido`,sum(`view_pedidosproveedoresitems`.`reservado`) AS `reservado`,`view_pedidosproveedoresitems`.`estado` AS `estado`,`view_pedidosproveedoresitems`.`idcondicioncomercial` AS `idcondicioncomercial`,`view_pedidosproveedoresitems`.`condicioncomercial` AS `condicioncomercial` from `view_pedidosproveedoresitems` group by `view_pedidosproveedoresitems`.`idpedidosproveedoresitems`,`view_pedidosproveedoresitems`.`pedidosproveedores_idpedidosproveedores`,`view_pedidosproveedoresitems`.`item_iditem`,`view_pedidosproveedoresitems`.`nombre`,`view_pedidosproveedoresitems`.`solicitado`,`view_pedidosproveedoresitems`.`recibido`,`view_pedidosproveedoresitems`.`idcondicioncomercial`,`view_pedidosproveedoresitems`.`condicioncomercial` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_pedidosproveedoresitemdetallereserva`
--

/*!50001 DROP TABLE IF EXISTS `view_pedidosproveedoresitemdetallereserva`*/;
/*!50001 DROP VIEW IF EXISTS `view_pedidosproveedoresitemdetallereserva`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_pedidosproveedoresitemdetallereserva` AS select `d`.`idpedidosproveedoresitemdetallereserva` AS `idpedidosproveedoresitemdetallereserva`,`d`.`usuarios_idusuarios` AS `usuarios_idusuarios`,`u`.`username` AS `username`,`d`.`bodega_idbodega` AS `bodega_idbodega`,`b`.`nombre` AS `nombrebodega`,`d`.`reservado` AS `reservado`,`ppi`.`solicitado` AS `solicitado`,`ppi`.`idpedidosproveedoresitems` AS `idpedidosproveedoresitems`,`ppi`.`item_iditem` AS `item_iditem`,`i`.`nombre` AS `nombre` from ((((`pedidosproveedoresitemdetallereserva` `d` join `bodega` `b` on((`b`.`idbodega` = `d`.`bodega_idbodega`))) join `usergroups_user` `u` on((`u`.`id` = `d`.`usuarios_idusuarios`))) join `pedidosproveedoresitems` `ppi` on((`ppi`.`idpedidosproveedoresitems` = `d`.`pedidosproveedoresitems_idpedidosproveedoresitems`))) join `item` `i` on((`i`.`iditem` = `ppi`.`item_iditem`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-01-09 16:00:07
