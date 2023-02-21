-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: markaz
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminID` int(100) NOT NULL AUTO_INCREMENT,
  `lavozim` varchar(10) NOT NULL DEFAULT 'teacher',
  `ism` varchar(15) NOT NULL,
  `familiya` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `parol` int(50) NOT NULL,
  UNIQUE KEY `adminID` (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','Habibulloh','Xalilov','abs@gmail.com',12345678),(2,'teacher','Bobur','Abduvayitov','ggg@gmail.com',12332145),(3,'teacher','Kamol','Jamolov','ddd@gmail.com',12332112);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guruhlar`
--

DROP TABLE IF EXISTS `guruhlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guruhlar` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `guruhid` varchar(10) DEFAULT NULL,
  `peopls` int(11) DEFAULT NULL,
  `teacher` varchar(40) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guruhlar`
--

LOCK TABLES `guruhlar` WRITE;
/*!40000 ALTER TABLE `guruhlar` DISABLE KEYS */;
INSERT INTO `guruhlar` VALUES (4,'mat2',1,'Berdiyev Tolib'),(5,'fiz1',2,'Jamolov Komil'),(7,'fiz3',2,'  Shodiyev Bekzod  '),(8,'fiz4',2,'  Jamolov Tohir  '),(9,'fiz5',0,'  Shodiyev Bekzod  '),(10,'mat3',0,'  Shodiyev Bekzod  '),(11,'fiz6',0,'  Shodiyev Bekzod  ');
/*!40000 ALTER TABLE `guruhlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kurslar`
--

DROP TABLE IF EXISTS `kurslar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kurslar` (
  `kursid` int(100) NOT NULL AUTO_INCREMENT,
  `kursnomi` varchar(15) NOT NULL,
  `davomiyligi` int(11) NOT NULL,
  PRIMARY KEY (`kursid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kurslar`
--

LOCK TABLES `kurslar` WRITE;
/*!40000 ALTER TABLE `kurslar` DISABLE KEYS */;
INSERT INTO `kurslar` VALUES (1,'matematika',10),(2,'fizika',10),(4,'kimyo',12),(5,'ingiliz tili',6);
/*!40000 ALTER TABLE `kurslar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `markaz`
--

DROP TABLE IF EXISTS `markaz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `markaz` (
  `markazid` int(100) NOT NULL AUTO_INCREMENT,
  `markazNomi` varchar(100) NOT NULL,
  `markazManzili` varchar(300) NOT NULL,
  `markazTelefoni` varchar(15) NOT NULL,
  `markazDirektori` varchar(30) NOT NULL,
  PRIMARY KEY (`markazid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `markaz`
--

LOCK TABLES `markaz` WRITE;
/*!40000 ALTER TABLE `markaz` DISABLE KEYS */;
INSERT INTO `markaz` VALUES (1,'O\'quv markaz','Samarqand shahri, Amir Temur ko\'chasi, A-12','+998781230505','Abdusalomov Sherzod'),(11,'a','a','+998941234567','Kamolov Jamol');
/*!40000 ALTER TABLE `markaz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mat2`
--

DROP TABLE IF EXISTS `mat2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mat2` (
  `mat2id` int(200) NOT NULL AUTO_INCREMENT,
  `peoplsname` varchar(40) NOT NULL,
  PRIMARY KEY (`mat2id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mat2`
--

LOCK TABLES `mat2` WRITE;
/*!40000 ALTER TABLE `mat2` DISABLE KEYS */;
/*!40000 ALTER TABLE `mat2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `people` (
  `peopleid` int(200) NOT NULL AUTO_INCREMENT,
  `guruhid` varchar(10) NOT NULL,
  `familiya` varchar(15) NOT NULL,
  `ism` varchar(15) NOT NULL,
  `fan` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `qabul` date NOT NULL,
  `tulov` float NOT NULL,
  UNIQUE KEY `peopleid` (`peopleid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people`
--

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
INSERT INTO `people` VALUES (1,'mat2','Ilhomov','Shavkat','matematika','+998945632178','2022-11-26',300000),(2,'fiz1','Jamolov','Kamol','fizika','+998945632178','2022-10-05',300000),(3,'fiz1','Abdullayev','Bobur','fizika','+998945632178','2022-10-05',320000),(7,'mat3','Soliyev','Bekzod','matematika','+998945632102','2023-01-15',320000),(8,'mat3','Abdullayev','Bekzod','matematika','+998945632102','2023-01-15',315000);
/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `teacherid` int(200) NOT NULL AUTO_INCREMENT,
  `guruhid` varchar(10) NOT NULL,
  `familiya` varchar(15) NOT NULL,
  `ism` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `manzil` varchar(300) NOT NULL,
  `fan` varchar(10) NOT NULL,
  `maosh` float NOT NULL,
  PRIMARY KEY (`teacherid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'fiz1','Shodiyev','Bekzod','+998945632178','Samarqand viloyati','fizika',10000000),(2,'mat3','Shodiyev','Bekzod','+998945632178','Samarqand viloyati','matematika',5000000),(4,'mat3','Soliyev','Bekzod','+998945632102','Samarqand tumani','matematika',5000000),(5,'fiz2','Jamolov','Tohir','+998945632102','Samarqand tumani','fizika',5000000);
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xodim`
--

DROP TABLE IF EXISTS `xodim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xodim` (
  `xodimid` int(200) NOT NULL AUTO_INCREMENT,
  `familiya` varchar(15) NOT NULL,
  `ism` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `manzil` varchar(300) NOT NULL,
  `lavozim` varchar(15) NOT NULL,
  `maosh` float NOT NULL,
  UNIQUE KEY `xodimid` (`xodimid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xodim`
--

LOCK TABLES `xodim` WRITE;
/*!40000 ALTER TABLE `xodim` DISABLE KEYS */;
INSERT INTO `xodim` VALUES (1,'Karimov','Bekzod','+998945632178','Samarqand shahri','hisobchi',5000000),(3,'Berdiyev','Bekzod','+998945632222','Samarqand tumani','zamdirektor',5000000);
/*!40000 ALTER TABLE `xodim` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-21 17:55:57
