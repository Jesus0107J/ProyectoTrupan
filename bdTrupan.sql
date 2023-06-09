-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectotrupan
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `idcliente` int NOT NULL AUTO_INCREMENT,
  `cNombreCliente` varchar(300) DEFAULT NULL,
  `cApellidoCliente` varchar(300) DEFAULT NULL,
  `cDNICliente` varchar(45) DEFAULT NULL,
  `cTelefonoCliente` varchar(45) DEFAULT NULL,
  `cCorreoCliente` varchar(300) DEFAULT NULL,
  `cContraseñaCliente` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idcliente`),
  UNIQUE KEY `idcliente_UNIQUE` (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Jhefferson Jesús','Soto Montessss','72549048','950703130','jesussm0107@gmail.com','123456',_binary ''),(2,'jacinto julian','torres perez','751355621','962345789','jtorres@gmail.com','123456',_binary ''),(3,'angela maria','chamorro mallma','52365894','999999999','achamorro@gmail.com','123456',_binary '');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idservicio` int unsigned NOT NULL AUTO_INCREMENT,
  `cNombreServicio` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `nPrecioServicio` decimal(16,2) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'Cuadro','cuadro hermoso para tus fotos',20.00,_binary '\0'),(2,'Llaveros','Hermosos llaveros para acompañarte ',5.00,_binary ''),(3,'Caja Trupan','Es una caja ideal para hacer presentes',30.00,_binary '\0');
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicios` (
  `idservicio` int unsigned NOT NULL AUTO_INCREMENT,
  `cNombreServicio` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `nPrecioServicio` decimal(16,2) DEFAULT NULL,
  `cRutaImagenServicio` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'Adorno','Es un adorno dividido en 3 partes',20.00,'/img/Adorno.jpg',_binary ''),(2,'Caja Trupan','Es una caja ideal para hacer presentes',30.00,'/img/Caja.jpg',_binary ''),(3,'Cuaderno','Es un marco para cuaderno',10.00,'/img/Cuaderno.jpg',_binary ''),(4,'Cuadro','Es un cuadro para poner tu fotos',20.00,'/img/Cuadro.jpg',_binary '\0'),(5,'Cuadro','cuadro hermoso para tus fotos',20.00,'/img/Cuadro.jpg',_binary ''),(6,'Lámpara','diseños para tus lamparas',25.00,'/img/Lampara.png',_binary ''),(7,'Llaveros','Hermosos llaveros para acompañarte ',5.00,'/img/Llaveros.jpg',_binary ''),(8,'Manualidad 1','Para adornar tu sala',30.00,'/img/Manualidad 1.jpg',_binary ''),(9,'Manualidad 2','Para adornar tu sala',40.00,'/img/Manualidad.jpg',_binary ''),(10,'Marco','Marcos para adornar tu sala',80.00,'/img/Marco.jpg',_binary ''),(11,'portavaso','lindos portavasos',5.00,'/img/Portavaso.jpg',_binary ''),(12,'portavaso','lindos portavasos',5.00,'/img/Portavaso.jpg',_binary '\0'),(13,'Recordatorio','lindos recordatorios para tu familia',7.00,'/img/Cuadro.jpg',_binary '\0'),(14,'reloj','reloj de casa',30.00,'/img/Reloj.png',_binary ''),(15,'Lámpara','diseños para tus lamparas',25.00,NULL,_binary ''),(16,'Lámpara','diseños para tus lamparas',25.00,NULL,_binary ''),(17,'reloj','reloj de casa',30.00,NULL,_binary ''),(18,'Manualidad 2','Para adornar tu sala',40.00,NULL,_binary ''),(19,'Manualidad 2','Para adornar tu sala',40.00,NULL,_binary ''),(20,'Marco','Marcos para adornar tu sala',80.00,NULL,_binary ''),(21,'Caja Trupan','Es una caja ideal para hacer presentes',30.00,NULL,_binary ''),(22,'Caja Trupan','Es una caja ideal para hacer presentes',30.00,NULL,_binary ''),(23,'Adorno','Es un adorno dividido en 3 partes',20.00,NULL,_binary '');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `cNombreUsuario` varchar(300) DEFAULT NULL,
  `cContraseñaUsuario` varchar(300) DEFAULT NULL,
  `cNombres` varchar(300) DEFAULT NULL,
  `cApellidos` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario_UNIQUE` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'jesussm','123456','Jesus','Soto Montes',_binary ''),(2,'marcos','123456','Marcos','Pure Llacsa',_binary ''),(3,'jose','123456','jose','munive guerra',_binary ''),(4,'alonso','123456','alonso','chavez',_binary '\0'),(5,'carlos','123','carlos','torres de la cruz',_binary '\0'),(6,'Alfredo','123','Alfredo','Torres Perez',_binary '\0'),(7,'mateo','123456','mateo','soto',_binary '');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-09 16:00:15
