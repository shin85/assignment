-- MySQL dump 10.13  Distrib 5.7.23, for macos10.13 (x86_64)
--
-- Host: 192.168.1.88    Database: malaga
-- ------------------------------------------------------
-- Server version	5.7.34

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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `des` text,
  `image` varchar(255) DEFAULT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (2,'sjkahdkfasjhdf','skjahfkasjhdf',NULL,1),(3,'asdfasjhdf98','123123',NULL,1),(4,'1232abc','123abc',NULL,2),(5,'1232abc','123abc',NULL,2),(6,'1232abc','123abc',NULL,2),(8,'test with postman','test with postman',NULL,1);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `des` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'change name by postmane','test'),(2,'commic','1sadf');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `suspended` tinyint(1) DEFAULT '0',
  `idOrganization` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Benjamin','Shermans','benjamin.sherman@gmail.com','OWC09RSW6AE',0,2),(2,'Acton','Carrillo','acton.carrillo@gmail.com','HIO59BHB8HB',0,2),(3,'Zorita','Rodriguez','zorita.rodriguez','GNW04ZAO6HP',0,2),(4,'Henry','Beasley','henry.beasley','UZK64PCR2UN',0,2),(5,'Kelsey','Weber','kelsey.weber','CGR68MCJ3SN',0,2),(6,'Olympia','Huber','olympia.huber','HNP83HAE0FM',0,4),(7,'Carolyn','Pace','carolyn.pace','YIX45RKH5MR',0,2),(8,'Levi','Bishop','levi.bishop','IKY43FHZ6VT',1,2),(9,'Wyatt','Higgins','wyatt.higgins','ZIO64ZJU9HY',0,1),(10,'Lionel','Mccray','lionel.mccray','VKW78FSB6PJ',0,2),(11,'Jeremy','Bryan','jeremy.bryan','TTV64OAQ9AN',0,2),(12,'Ava','Pollard','ava.pollard','ZKV02QCQ5GZ',0,2),(13,'Jane','Leon','jane.leon','AQD96ABI2WQ',0,1),(14,'Baxter','Wise','baxter.wise','PJG36JAP3GU',0,2),(15,'Cyrus','Rosario','cyrus.rosario','ZDU33RYL2AK',0,2),(16,'Amos','Travis','amos.travis','UIP43SJH2IK',0,4),(17,'Whitney','Hale','whitney.hale','PCA69ZZG9HD',0,2),(18,'Fletcher','Fischer','fletcher.fischer','BJM28BRO9SX',0,2),(19,'Rhiannon','Dickerson','rhiannon.dickerson','ZUM07JRG0JH',0,2),(20,'Maggy','Weber','maggy.weber','MWW53SWA2WH',0,1),(21,'Kyle','Craig','kyle.craig','KAD56XAM2KY',0,2),(22,'Burton','Sanford','burton.sanford','LYO83OLV8TF',0,2),(23,'Cooper','Callahan','cooper.callahan','WKF09LDB4AF',0,2),(24,'Urielle','Moreno','urielle.moreno','DTB04DDU0KV',0,2),(25,'Aristotle','Reese','aristotle.reese','QPN11PVQ7TR',0,2),(26,'Camille','Blevins','camille.blevins','CLQ63RXB3VB',0,2),(27,'Colleen','Blevins','colleen.blevins','EOO51HIZ0PG',0,2),(28,'Martina','Holder','martina.holder','QZW21CRI9ZY',0,4),(29,'Allistair','Leon','allistair.leon','ZAW47BFF3DM',0,1),(30,'Driscoll','Dickson','driscoll.dickson','YNN51MQQ4II',0,2),(31,'Magee','Marquez','magee.marquez','SHX59YVP7XU',0,2),(32,'Angelica','Serrano','angelica.serrano','XRJ73PFL2WQ',0,2),(33,'Nomlanga','Bowen','nomlanga.bowen','SSH13DSE6TU',0,2),(34,'Gil','Bright','gil.bright','BEH66TUK0UL',1,2),(35,'Alvin','Hatfield','alvin.hatfield','MBO67IAK8UM',0,1),(36,'Curran','Knowles','curran.knowles','QNW26QIE9RW',0,2),(37,'Charissa','David','charissa.david','RTM13TXT9AK',0,2),(38,'Lev','Kennedy','lev.kennedy','EYG45KQT2IU',0,2),(39,'Lynn','Jacobs','lynn.jacobs','ZHW67JUR3DI',0,2),(40,'Lois','Wiley','lois.wiley','SIU35PZI0BT',0,2),(41,'Deborah','Wheeler','deborah.wheeler','WUD38KWN1LI',0,2),(42,'Renee','Olson','renee.olson','BXT76DJI2KA',0,2),(43,'Philip','English','philip.english','OLM46WUL5QC',0,2),(44,'Kevin','Johns','kevin.johns','IKJ83UQO4LP',0,2),(45,'Jane','Holden','jane.holden','BVG22IMJ7UO',0,2),(46,'Kendall','Collier','kendall.collier','PPQ01KRW4QU',0,1),(47,'Solomon','Tucker','solomon.tucker','LLI65CKR1FM',0,2),(48,'Richard','Higgins','richard.higgins','QXP09FYD8IJ',0,2),(49,'Carly','David','carly.david','ORG15ORK7NR',0,2),(50,'Ursa','Barry','ursa.barry','SDJ66QPG1VS',0,2),(51,'Steven','Norman','steven.norman','HVH32HVT8MR',0,1),(52,'Joan','Hatfield','joan.hatfield','RNF84ENW1FC',0,1),(53,'Simon','Pacheco','simon.pacheco','JTD92HBV6LY',0,2),(54,'Price','Sears','price.sears','ARD22CYJ7DJ',0,2),(55,'Melodie','Burton','melodie.burton','MJB89OEN9YD',0,2),(56,'Amela','Burks','amela.burks','COY70COZ0HP',0,2),(57,'Melvin','Jacobs','melvin.jacobs','ERJ13FFZ9IS',0,2),(58,'Ivory','Morin','ivory.morin','VCA67DEG0LI',0,2),(59,'Quentin','Clements','quentin.clements','BCU26BTI1ZC',0,2),(60,'Colton','Mcintyre','colton.mcintyre','DPM10ODN4MK',0,2),(61,'Talon','Boyle','talon.boyle','EAC10BKA9FZ',0,2),(62,'Kyra','Rocha','kyra.rocha','VJW60ULA7YW',0,2),(63,'Stella','Cole','stella.cole','RJH68PRO4SW',0,2),(64,'Brock','Lucas','brock.lucas','GZI54FAF2QV',0,2),(65,'Lila','Lewis','lila.lewis','PMM40BGE7EZ',0,2),(66,'Hu','Key','hu.key','MHN02DRZ2QK',0,2),(67,'Kuame','James','kuame.james','PAN51UII5EK',0,2),(68,'Xenos','Padilla','xenos.padilla','RSO17VKK9PN',0,2),(69,'Sade','Owens','sade.owens','XIH02LWO2MI',0,2),(70,'Ivor','Logan','ivor.logan','BJQ09KDN8WK',0,1),(71,'Eleanor','Cabrera','eleanor.cabrera','ECW85CUY3ZR',0,2),(72,'Clare','Macdonald','clare.macdonald','VPQ45ENN0NH',0,2),(73,'Malcolm','Burke','malcolm.burke','PLO48UGZ5XA',0,2),(74,'Kitra','Delaney','kitra.delaney','SQU50ZAG7OI',0,2),(75,'Barrett','Holcomb','barrett.holcomb','SBA21QWP2YR',0,2),(76,'Haley','Reed','haley.reed','GPK80XRK7JZ',0,2),(77,'Grant','Townsend','grant.townsend','YAL32HDT0UA',0,2),(78,'Derek','Hays','derek.hays','OVD66OAJ2UH',0,2),(79,'Keiko','Benson','keiko.benson','HPV72ZLP6MQ',0,2),(80,'Mara','Benjamin','mara.benjamin','XCQ79LJC5LQ',0,2),(81,'Hyacinth','Finley','hyacinth.finley','UIV27LYU6SW',0,1),(82,'Ramona','Solomon','ramona.solomon','MYJ31VYH0GV',0,2),(83,'Ezra','Anderson','ezra.anderson','NKN68ETH4OM',0,2),(84,'Alana','Lambert','alana.lambert','IXT00JND7YK',0,2),(85,'Lillian','Wright','lillian.wright','LBJ92OFT4IT',0,2),(86,'Brenna','Trevino','brenna.trevino','QJO38DEX1TM',0,2),(87,'Madeson','Larsen','madeson.larsen','QFL74NXO4UR',0,1),(88,'Kenyon','Hinton','kenyon.hinton','OJN19NDN7HR',0,2),(89,'Vera','Powers','vera.powers','VIR06MOZ2JV',0,2),(90,'Natalie','Brown','natalie.brown','YKD61DCY5IF',0,2),(91,'Claudia','Savage','claudia.savage','KFN84UVA1SG',0,2),(92,'Lucas','Bush','lucas.bush','ZFS09NFU7DO',0,2),(93,'Kenyon','Neal','kenyon.neal','OWG74JRY9KV',0,2),(94,'Tyrone','Hurley','tyrone.hurley','GHE80GQD6EU',0,2),(95,'Maris','Mosley','maris.mosley','NEX48LLK6CD',0,1),(96,'Elaine','Norton','elaine.norton','STY09EPG0GD',0,2),(97,'Vernon','Tanner','vernon.tanner','VMZ45SGA2NV',0,2),(98,'Brennan','Shaw','brennan.shaw','XMG63KHO3JY',0,2),(99,'Victoria','Whitehead','victoria.whitehead','LAF73KHK8FZ',1,2),(100,'Allistair','Johnson','allistair.johnson','RUN58DYH4RN',0,2),(102,'Jean-Christophe','HERON','myaddressmailgmail.com','0000',1,4);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'malaga'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-09 19:38:42
