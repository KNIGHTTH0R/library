-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: perputakaan
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Brent I. Gentry'),(2,'Zoe Lewis'),(3,'Abel X. Paul'),(4,'Naomi J. Harmon'),(5,'Tad Reilly'),(6,'Eve Z. Collier'),(7,'Echo F. Coleman'),(8,'Forrest F. Nelson'),(9,'Sawyer J. Wilcox'),(10,'Connor Parks'),(11,'Deirdre P. Hardy'),(12,'Stuart E. Roach'),(13,'Oliver Q. Dotson'),(14,'Stuart H. Barnett'),(15,'Reese Atkins'),(16,'Rhonda Coleman'),(17,'Kadeem U. Kirby'),(18,'Aileen Sanchez'),(19,'Mark Atkinson'),(20,'Abraham H. Wynn'),(21,'Edward N. Higgins'),(22,'Amos Bartlett'),(23,'Malik K. Hensley'),(24,'Clare Coffey'),(25,'Gwendolyn Hutchinson'),(26,'Lydia M. Fulton'),(27,'Leslie William'),(28,'Chiquita X. Doyle'),(29,'Neil T. Page'),(30,'Kristen R. Cantu'),(31,'Basil I. Greene'),(32,'Nola T. Stevens'),(33,'Kim V. Savage'),(34,'Simone Schmidt'),(35,'Kennedy P. Compton'),(36,'Bruno Y. Andrews'),(37,'Emerald E. Thomas'),(38,'Yetta T. Kirkland'),(39,'Amal T. Lindsey'),(40,'Cullen S. Holcomb'),(41,'Hayes Levy'),(42,'Tyrone U. Stone'),(43,'Scott E. Middleton'),(44,'Riley Rosa'),(45,'Steven Middleton'),(46,'Vivien Mcpherson'),(47,'Bianca W. Espinoza'),(48,'Derek Parsons'),(49,'Ria Robbins'),(50,'Germaine Mcdowell'),(51,'Kirsten S. Gallegos'),(52,'Kendall L. Stafford'),(53,'Ali N. Rocha'),(54,'Omar Thompson'),(55,'Hammett C. Burch'),(56,'Amethyst R. Vaughn'),(57,'Gisela L. Hardy'),(58,'Nadine Santana'),(59,'Vincent S. Slater'),(60,'Phoebe G. Clayton'),(61,'Gil Downs'),(62,'Karen R. Mccall'),(63,'Otto Fisher'),(64,'Chiquita Salinas'),(65,'Stephen Hopkins'),(66,'Alfreda Park'),(67,'Edward S. Mitchell'),(68,'Eliana R. Melendez'),(69,'Abra W. Gibbs'),(70,'Gray O. Cooke'),(71,'Cain Kirk'),(72,'Kyla G. Brooks'),(73,'Jolene D. Sims'),(74,'Clinton Gilbert'),(75,'Pascale Hughes'),(76,'Armand A. Boyle'),(77,'Brooke Booker'),(78,'Driscoll House'),(79,'Brenda V. Flores'),(80,'Kieran D. Mathis'),(81,'Bertha Gomez'),(82,'Chadwick Hopper'),(83,'Winifred E. Fleming'),(84,'Finn P. Bradford'),(85,'Tashya Carroll'),(86,'Kalia Daugherty'),(87,'Giacomo Bates'),(88,'Julian D. Melton'),(89,'Samantha Dunlap'),(90,'Lee H. Potter'),(91,'Amos E. Medina'),(92,'Steel Crosby'),(93,'Nash B. Holloway'),(94,'Evangeline Q. Boyle'),(95,'Yuri Keith'),(96,'Carl Myers'),(97,'August Quinn'),(98,'Nolan Hewitt'),(99,'Zachery Barton'),(100,'Kylie P. Poole');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isbn` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `number_of_page` varchar(45) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `publisher_id` int(11) unsigned DEFAULT NULL,
  `genre_id` int(11) unsigned DEFAULT NULL,
  `author_id` int(11) unsigned DEFAULT NULL,
  `status` varchar(45) DEFAULT 'IN',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'dasdsa','dsadsa','23',2132,91,2,66,'IN'),(3,'','Apalah','',0000,37,2,66,'IN');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'IT'),(2,'Fiksi'),(3,'Bisnis'),(4,'Education'),(5,'Medical'),(6,'Religion'),(7,'Sports');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Arlen Toy','49 Lunder Court','51-(287)552-305','atoy0@discovery.com'),(2,'Purcell Koop','58 Twin Pines Pass','86-(755)713-111','pkoop1@mashable.com'),(3,'Waylin Dunnico','80252 Melody Trail','62-(337)435-665','wdunnico2@china.com.cn'),(4,'Giffie Coveny','3 Kings Trail','7-(134)766-6638','gcoveny3@quantcast.com'),(5,'William Heathcott','1 Independence Terrace','1-(863)386-5140','wheathcott4@dion.ne.jp'),(6,'Elora Myerscough','3103 Pankratz Avenue','46-(194)597-305','emyerscough5@thetimes.co.uk'),(7,'Rem Barrass','4 Oakridge Circle','86-(185)774-066','rbarrass6@google.com.au'),(8,'Danila Getch','2 Hauk Way','63-(521)572-362','dgetch7@bloglovin.com'),(9,'Casey Lethcoe','721 Golf Course Point','998-(437)961-46','clethcoe8@ebay.co.uk'),(10,'Jozef Paskell','3652 Bay Street','86-(868)413-758','jpaskell9@google.it'),(11,'Andrey Gier','70 Homewood Trail','84-(717)659-027','agiera@yellowpages.com'),(12,'Lotty McManamen','0185 Mosinee Lane','1-(704)340-3710','lmcmanamenb@weibo.com'),(13,'Peria Dell Casa','0020 Magdeline Trail','63-(879)587-968','pdellc@homestead.com'),(14,'Viviene Kelshaw','019 Maple Wood Point','380-(677)446-75','vkelshawd@alexa.com'),(15,'Rosemaria Chatfield','9536 Rowland Road','63-(750)374-433','rchatfielde@drupal.org'),(16,'Alexandrina Fagan','14 Loeprich Drive','46-(492)168-090','afaganf@godaddy.com'),(17,'Dorisa Clappison','2 Pierstorff Hill','591-(962)934-85','dclappisong@guardian.co.uk'),(18,'Ian Spoors','528 Coolidge Street','86-(867)403-872','ispoorsh@msn.com'),(19,'Corbie Dodsworth','1 Raven Parkway','86-(532)956-221','cdodsworthi@t.co'),(20,'Alie Daile','7 Burrows Avenue','57-(306)933-748','adailej@china.com.cn'),(21,'Cullen Abramsky','17390 Calypso Hill','33-(128)628-383','cabramskyk@uiuc.edu'),(22,'Christy Zannotelli','655 Meadow Ridge Drive','86-(561)469-377','czannotellil@buzzfeed.com'),(23,'Carlota Aizikovich','39281 Bowman Lane','62-(168)452-587','caizikovichm@scribd.com'),(24,'Candida Marney','405 Acker Center','7-(146)581-7209','cmarneyn@technorati.com'),(25,'Fidelia Dimelow','824 Wayridge Crossing','62-(806)912-662','fdimelowo@furl.net'),(26,'Alvan Vaz','80181 Summer Ridge Drive','63-(690)934-923','avazp@is.gd'),(27,'Meir Dunmuir','1230 Oxford Drive','55-(759)916-642','mdunmuirq@shutterfly.com'),(28,'Katherina Riply','2 Delladonna Road','976-(697)790-18','kriplyr@last.fm'),(29,'Truda Clive','05190 Springs Parkway','46-(191)570-539','tclives@arstechnica.com'),(30,'Drusy Shiels','075 Nancy Plaza','86-(637)210-581','dshielst@prnewswire.com'),(31,'Gerti Jurgenson','43 Old Gate Circle','86-(305)768-478','gjurgensonu@nyu.edu'),(32,'Aubry Fogg','0 Portage Point','62-(569)102-649','afoggv@pinterest.com'),(33,'Ulrikaumeko Erickson','1688 Birchwood Avenue','386-(525)679-69','uericksonw@jugem.jp'),(34,'Roman Silverton','55246 Oak Valley Parkway','7-(517)385-7410','rsilvertonx@myspace.com'),(35,'Constantina Chuck','25307 Del Sol Place','7-(738)443-4260','cchucky@devhub.com'),(36,'Josh Hastin','1150 Tennessee Alley','855-(841)352-73','jhastinz@seattletimes.com'),(37,'Terry Dodamead','189 Scofield Road','86-(612)161-894','tdodamead10@ed.gov'),(38,'Barry Rois','88083 Jenna Plaza','54-(337)161-987','brois11@telegraph.co.uk'),(39,'Gratiana Reilinger','4 Mifflin Trail','84-(793)347-189','greilinger12@hostgator.com'),(40,'Jereme Christophle','13 Summerview Drive','54-(954)545-325','jchristophle13@rambler.ru'),(41,'Tirrell Trobey','72 Dryden Crossing','93-(594)813-108','ttrobey14@privacy.gov.au'),(42,'Guilbert Clayson','114 4th Drive','46-(556)803-490','gclayson15@marketwatch.com'),(43,'Marcille Sturdgess','7 Mockingbird Avenue','1-(502)625-8292','msturdgess16@google.cn'),(44,'Luz Gyford','1600 Atwood Crossing','64-(517)937-475','lgyford17@cdbaby.com'),(45,'Vincent Kittles','46539 Debs Park','94-(736)361-213','vkittles18@geocities.jp'),(46,'Buddie Braker','1753 Dryden Way','63-(660)597-342','bbraker19@latimes.com'),(47,'Peder Dorian','623 Vidon Street','7-(288)597-5954','pdorian1a@nbcnews.com'),(48,'Obed Brugsma','358 7th Plaza','46-(310)448-585','obrugsma1b@dion.ne.jp'),(49,'Valry O\'Cannon','9 Redwing Street','81-(102)539-991','vocannon1c@paypal.com'),(50,'Danni Bryce','5 Blue Bill Park Place','62-(489)849-425','dbryce1d@globo.com'),(51,'Perry Boggs','5 Bay Point','1-(354)312-8191','pboggs1e@apache.org'),(52,'Elwira Milesap','218 Village Green Place','62-(205)675-297','emilesap1f@t-online.de'),(53,'Constantia Oliff','57 Nelson Terrace','33-(564)541-100','coliff1g@hexun.com'),(54,'Ivie Code','3153 Kensington Plaza','62-(446)467-617','icode1h@foxnews.com'),(55,'Cullin Ahrens','97 Morrow Circle','7-(770)477-2878','cahrens1i@rambler.ru'),(56,'Damiano Whitchurch','1485 Summerview Street','260-(897)400-86','dwhitchurch1j@example.com'),(57,'Salome Etherson','6 Maple Drive','81-(981)423-814','setherson1k@guardian.co.uk'),(58,'Trever Pierton','517 Londonderry Avenue','62-(715)489-636','tpierton1l@nifty.com'),(59,'Calley Crummey','9 Brown Crossing','86-(651)788-794','ccrummey1m@reference.com'),(60,'Leupold MacLaig','1 Esker Hill','33-(756)253-495','lmaclaig1n@facebook.com'),(61,'Maddalena Crace','3 Mariners Cove Trail','54-(325)837-448','mcrace1o@umn.edu'),(62,'Doreen Van der Linde','671 Utah Parkway','47-(499)450-944','dvan1p@t.co'),(63,'Lem Catterson','9 Esch Center','502-(112)544-32','lcatterson1q@sourceforge.net'),(64,'Shayna Bandt','077 Homewood Pass','380-(315)888-86','sbandt1r@mlb.com'),(65,'Vanya Blaise','78 Summer Ridge Plaza','53-(936)612-814','vblaise1s@stanford.edu'),(66,'Sawyere Cawt','605 Armistice Road','55-(230)115-464','scawt1t@blog.com'),(67,'Godfry Snadden','48908 Evergreen Drive','52-(114)338-806','gsnadden1u@desdev.cn'),(68,'Calla Viner','0 Center Way','62-(136)153-829','cviner1v@addthis.com'),(69,'Lennard Salvidge','87889 Talmadge Hill','86-(250)280-738','lsalvidge1w@csmonitor.com'),(70,'Terence Penk','17 Green Hill','353-(629)520-44','tpenk1x@china.com.cn'),(71,'Savina Bradborne','7932 Dovetail Drive','504-(784)216-21','sbradborne1y@alexa.com'),(72,'Tricia Biggerstaff','12024 Truax Drive','62-(661)947-532','tbiggerstaff1z@prweb.com'),(73,'Beauregard Caswell','60606 Corscot Plaza','51-(898)889-976','bcaswell20@w3.org'),(74,'Koo Calafate','460 Longview Road','81-(841)293-922','kcalafate21@nih.gov'),(75,'Joan Grant','046 Monica Pass','7-(240)104-2945','jgrant22@storify.com'),(76,'Britni Barnes','9 Randy Circle','36-(671)398-358','bbarnes23@amazon.co.uk'),(77,'Noelani Chichgar','77363 East Alley','86-(221)483-696','nchichgar24@xing.com'),(78,'Kimberly Prandoni','18 Blackbird Drive','253-(361)669-40','kprandoni25@hibu.com'),(79,'Beitris Wort','2 Continental Point','27-(577)839-174','bwort26@buzzfeed.com'),(80,'Gloriane Agnew','6714 Orin Drive','31-(231)246-866','gagnew27@patch.com'),(81,'Philip Vyse','76 Di Loreto Trail','1-(760)236-8477','pvyse28@ning.com'),(82,'Lucien Carpenter','0519 Del Sol Junction','967-(515)275-90','lcarpenter29@pen.io'),(83,'Leonie Tukesby','5805 Hintze Trail','60-(911)464-697','ltukesby2a@paypal.com'),(84,'Tye Dufore','9 Redwing Center','62-(230)910-745','tdufore2b@apache.org'),(85,'Darius Dabell','65 Carpenter Terrace','93-(570)797-025','ddabell2c@biglobe.ne.jp'),(86,'Angela McVicker','33 Fisk Parkway','53-(369)359-010','amcvicker2d@ucoz.ru'),(87,'Alexia Giacovazzo','9502 Linden Junction','86-(604)259-407','agiacovazzo2e@myspace.com'),(88,'Ruben Jahnig','1 Acker Alley','86-(736)367-071','rjahnig2f@opensource.org'),(89,'Casey Humble','3 Huxley Court','55-(522)991-274','chumble2g@home.pl'),(90,'Bettye Bestiman','43060 Village Green Pass','57-(674)358-109','bbestiman2h@nytimes.com'),(91,'Alexandra Mincini','4 Judy Drive','86-(480)512-966','amincini2i@soundcloud.com'),(92,'Myrtia Edwins','39 Sloan Crossing','49-(895)920-245','medwins2j@paypal.com'),(93,'Giselle Gwilliam','84792 Straubel Crossing','86-(815)480-474','ggwilliam2k@salon.com'),(94,'Harmony Casement','61470 Dottie Circle','86-(836)536-174','hcasement2l@discovery.com'),(95,'Theresita McElvine','02 Raven Way','370-(720)648-75','tmcelvine2m@ucsd.edu'),(96,'Mercy Cluderay','51556 Express Terrace','62-(655)446-837','mcluderay2n@wired.com'),(97,'Dusty Barme','68577 Menomonie Trail','351-(141)441-54','dbarme2o@live.com'),(98,'Berky Sayers','289 Kim Pass','47-(677)629-277','bsayers2p@china.com.cn'),(99,'Sascha Gerrets','28 Melrose Park','81-(969)440-424','sgerrets2q@yahoo.co.jp'),(100,'Giffy Jorg','9526 Calypso Hill','63-(724)527-494','gjorg2r@kickstarter.com');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishers`
--

DROP TABLE IF EXISTS `publishers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishers`
--

LOCK TABLES `publishers` WRITE;
/*!40000 ALTER TABLE `publishers` DISABLE KEYS */;
INSERT INTO `publishers` VALUES (1,'Abbott, Hand and Parisian','Alcanhões'),(2,'Wolf Inc','Klobuky'),(3,'Homenick-Hayes','Wasilków'),(4,'Stroman, Herman and Kiehn','Kindu'),(5,'Cummings-Daugherty','Cisaat'),(6,'Bayer-Simonis','Ōmagari'),(7,'Funk and Sons','Kokubu-matsuki'),(8,'Keebler LLC','Nueva Gerona'),(9,'Greenfelder-Quitzon','Pakembangan'),(10,'Waelchi LLC','Petaling Jaya'),(11,'Reinger Group','Tanda'),(12,'Schmitt-Botsford','Grębków'),(13,'Macejkovic, Jacobi and Langworth','Kaset Wisai'),(14,'Schuppe-Abernathy','Bieliny'),(15,'Lang, Lesch and Kilback','Kuroiso'),(16,'Hane, Abernathy and Kutch','Vecpiebalga'),(17,'Bahringer, Hodkiewicz and Volkman','Quintela'),(18,'Funk Group','Greensboro'),(19,'Hilpert, Cronin and Hahn','Jiangzhang'),(20,'Larkin, Stanton and White','Mairana'),(21,'Satterfield-Simonis','Tanghu'),(22,'Prosacco, Boyle and Roob','Pretana'),(23,'Rutherford, Kemmer and Goldner','Dublje'),(24,'Ledner Inc','Donghui'),(25,'Feil Inc','Ujmisht'),(26,'Altenwerth, Mitchell and Predovic','Novozavedennoye'),(27,'Bahringer-Reilly','Gambalidio'),(28,'Hessel and Sons','Antipolo'),(29,'Schmeler-Daniel','Asykata'),(30,'Paucek-Heidenreich','Romans-sur-Isère'),(31,'Mueller, Kub and Gibson','Vília'),(32,'Muller, Haag and Friesen','Requena'),(33,'Langosh, Medhurst and Stark','Micheng'),(34,'Ledner Group','Kedungwringin'),(35,'Schroeder Group','Liudong'),(36,'Swift, Kris and Larson','Gérakas'),(37,'Armstrong-Padberg','Itapevi'),(38,'Ryan, Grant and Ryan','Cabrero'),(39,'Olson, Stracke and Padberg','Kushnytsya'),(40,'Prohaska-Donnelly','Gerdu'),(41,'Barrows-Koss','Maythalūn'),(42,'Gutmann Group','Kugesi'),(43,'Kiehn-Hessel','Kozlovice'),(44,'Hahn Inc','Klole'),(45,'Rosenbaum-Gutmann','Sembakung'),(46,'Pfeffer and Sons','Sanchahe'),(47,'Rohan-Breitenberg','Providencia'),(48,'Rohan Inc','Rassvet'),(49,'Heathcote and Sons','Trondheim'),(50,'Dare, Hessel and MacGyver','Shorapani'),(51,'Romaguera and Sons','Paris 14'),(52,'West LLC','Ketapang'),(53,'Sauer LLC','Wakimachi'),(54,'Ziemann, Reilly and Thiel','Aloleng'),(55,'Goodwin, Christiansen and Will','Acajutla'),(56,'Wyman and Sons','Amvrosiyivka'),(57,'Kertzmann-Rogahn','Länsi-Turunmaa'),(58,'Wehner-Bechtelar','Capanema'),(59,'Koch Inc','Castilla'),(60,'Heller Group','Bauta'),(61,'Russel Inc','Mölndal'),(62,'Bode-Stark','Talagante'),(63,'Doyle and Sons','Oetua'),(64,'Swift, Rau and Swift','Wuxia'),(65,'Lemke, McKenzie and Thompson','Kumalarang'),(66,'Rogahn-McClure','Ternate'),(67,'Brekke and Sons','Dongjiao'),(68,'Kling-Little','Labège'),(69,'McClure-Monahan','San Miguel del Padrón'),(70,'Kulas, Corkery and Huel','Rumat Heib'),(71,'White LLC','Töreboda'),(72,'Morissette, Dickinson and Jenkins','Muramvya'),(73,'Willms Group','Jianxi'),(74,'Leffler, Corkery and Littel','Yipeng'),(75,'Schamberger, Dicki and Lubowitz','Yeshan'),(76,'Greenholt-Braun','Erátyra'),(77,'Halvorson and Sons','Barreira'),(78,'Jacobson, Robel and Fritsch','Huangtu'),(79,'Christiansen-Renner','Centralniy'),(80,'Trantow, Wiza and Kunze','Zográfos'),(81,'Breitenberg-Schowalter','Narvacan'),(82,'Schuppe-Gleason','Pyhäselkä'),(83,'Mraz-Nitzsche','Jiḩānah'),(84,'Kling Inc','Tekeli'),(85,'Conroy Inc','Borås'),(86,'O\'Keefe, Grady and Effertz','Port Said'),(87,'Goodwin LLC','Baikouquan'),(88,'Purdy-Mertz','Hekou'),(89,'Gleason, Gleason and Graham','Habana del Este'),(90,'Mayer, Goldner and Daniel','Teno'),(91,'Bahringer, Borer and Grimes','Persen'),(92,'Treutel-Ortiz','Portarlington'),(93,'Yundt-Schmidt','Gaoyao'),(94,'Fritsch and Sons','Pagatin'),(95,'Hartmann, Kuhlman and Wiza','Kandana'),(96,'Sawayn, Runolfsson and Hills','‘Ayn al ‘Arab'),(97,'Pagac, Torp and Spinka','Hukou'),(98,'Wunsch-Hagenes','Samothráki'),(99,'Bogisich, O\'Keefe and Collins','Sharga'),(100,'Bartoletti Group','Del Monte'),(101,'Abbott, Hand and Parisian','Alcanhões');
/*!40000 ALTER TABLE `publishers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rents`
--

DROP TABLE IF EXISTS `rents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rents` (
  `id` int(11) NOT NULL,
  `order_number` varchar(45) DEFAULT NULL,
  `customer_id` int(10) unsigned DEFAULT NULL,
  `book_id` int(10) unsigned DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rents`
--

LOCK TABLES `rents` WRITE;
/*!40000 ALTER TABLE `rents` DISABLE KEYS */;
/*!40000 ALTER TABLE `rents` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-05  7:37:15
