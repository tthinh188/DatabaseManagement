-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: game_library
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `console`
--

DROP TABLE IF EXISTS `console`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `console` (
  `consoleID` char(10) NOT NULL,
  `consoleName` char(30) NOT NULL,
  `yearReleased` int NOT NULL,
  PRIMARY KEY (`consoleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `console`
--

LOCK TABLES `console` WRITE;
/*!40000 ALTER TABLE `console` DISABLE KEYS */;
INSERT INTO `console` VALUES ('C1111','Xbox One',2013),('C2222','Playstation 4',2013),('C3333','PC',0),('C4444','Switch',2017);
/*!40000 ALTER TABLE `console` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developedby`
--

DROP TABLE IF EXISTS `developedby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `developedby` (
  `gameID` char(10) NOT NULL,
  `devID` char(10) NOT NULL,
  PRIMARY KEY (`gameID`,`devID`),
  KEY `devID` (`devID`),
  CONSTRAINT `developedby_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`) ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT `developedby_ibfk_2` FOREIGN KEY (`devID`) REFERENCES `developer` (`devID`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developedby`
--

LOCK TABLES `developedby` WRITE;
/*!40000 ALTER TABLE `developedby` DISABLE KEYS */;
INSERT INTO `developedby` VALUES ('D100','DEV100'),('O100','DEV100'),('F100','DEV200'),('B100','DEV300'),('T100','DEV300'),('L100','DEV400');
/*!40000 ALTER TABLE `developedby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developer`
--

DROP TABLE IF EXISTS `developer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `developer` (
  `devID` char(10) NOT NULL,
  `devName` char(30) NOT NULL,
  PRIMARY KEY (`devID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developer`
--

LOCK TABLES `developer` WRITE;
/*!40000 ALTER TABLE `developer` DISABLE KEYS */;
INSERT INTO `developer` VALUES ('DEV100','Blizzard'),('DEV200','Square Enix'),('DEV300','Respawn'),('DEV400','Riot Games'),('DEV500','Dice');
/*!40000 ALTER TABLE `developer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `game` (
  `gameID` char(10) NOT NULL,
  `gameName` char(30) DEFAULT NULL,
  `gameCost` float NOT NULL,
  `gameRating` float NOT NULL,
  `pubID` char(10) NOT NULL,
  PRIMARY KEY (`gameID`),
  KEY `pubID` (`pubID`),
  CONSTRAINT `game_ibfk_1` FOREIGN KEY (`pubID`) REFERENCES `publisher` (`pubID`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` VALUES ('B100','Battlefield 1',14.99,6.5,'3000'),('D100','Diablo 3',59.99,8.4,'1000'),('F100','Final Fantasy XV',59.99,7.3,'2000'),('L100','League of Legends',0,7.5,'5000'),('O100','Overwatch',29.99,6.5,'1000'),('T100','Titanfall 2',29.99,8,'3000');
/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gamegenre`
--

DROP TABLE IF EXISTS `gamegenre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gamegenre` (
  `gameID` char(10) NOT NULL,
  `gameGenre` char(30) NOT NULL,
  PRIMARY KEY (`gameID`,`gameGenre`),
  CONSTRAINT `gamegenre_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gamegenre`
--

LOCK TABLES `gamegenre` WRITE;
/*!40000 ALTER TABLE `gamegenre` DISABLE KEYS */;
INSERT INTO `gamegenre` VALUES ('B100','Action'),('B100','RPG'),('D100','MMO'),('D100','RPG'),('F100','RPG'),('O100','MOBA'),('T100','Action'),('T100','RPG');
/*!40000 ALTER TABLE `gamegenre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operatedby`
--

DROP TABLE IF EXISTS `operatedby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `operatedby` (
  `consoleID` char(10) NOT NULL,
  `gameID` char(10) NOT NULL,
  PRIMARY KEY (`consoleID`,`gameID`),
  KEY `gameID` (`gameID`),
  CONSTRAINT `operatedby_ibfk_1` FOREIGN KEY (`consoleID`) REFERENCES `console` (`consoleID`) ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT `operatedby_ibfk_2` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operatedby`
--

LOCK TABLES `operatedby` WRITE;
/*!40000 ALTER TABLE `operatedby` DISABLE KEYS */;
INSERT INTO `operatedby` VALUES ('C1111','B100'),('C2222','B100'),('C3333','B100'),('C1111','D100'),('C2222','D100'),('C3333','D100'),('C4444','D100'),('C1111','F100'),('C3333','F100'),('C3333','L100'),('C1111','O100'),('C2222','O100'),('C3333','O100'),('C4444','O100'),('C1111','T100'),('C2222','T100'),('C3333','T100');
/*!40000 ALTER TABLE `operatedby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publisher` (
  `pubID` char(10) NOT NULL,
  `pubName` char(30) NOT NULL,
  PRIMARY KEY (`pubID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisher`
--

LOCK TABLES `publisher` WRITE;
/*!40000 ALTER TABLE `publisher` DISABLE KEYS */;
INSERT INTO `publisher` VALUES ('1000','Blizzard'),('2000','Square Enix'),('3000','EA'),('5000','Riot Games');
/*!40000 ALTER TABLE `publisher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackedby`
--

DROP TABLE IF EXISTS `trackedby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackedby` (
  `gameID` char(10) NOT NULL,
  `userID` char(10) NOT NULL,
  PRIMARY KEY (`gameID`,`userID`),
  KEY `userID` (`userID`),
  CONSTRAINT `trackedby_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`) ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT `trackedby_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackedby`
--

LOCK TABLES `trackedby` WRITE;
/*!40000 ALTER TABLE `trackedby` DISABLE KEYS */;
INSERT INTO `trackedby` VALUES ('F100','A7979'),('O100','A7979'),('B100','M7777'),('D100','M7777'),('O100','M7777'),('O100','PTT19'),('T100','PTT19');
/*!40000 ALTER TABLE `trackedby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userID` char(10) NOT NULL,
  `userName` char(30) NOT NULL,
  `userGameCount` int NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('A7979','Long',2),('CNU99999','Chris',0),('M7777','Marcus',3),('PTT19','Thinh',2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-04 15:00:12
