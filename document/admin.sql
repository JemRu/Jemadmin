# Host: localhost:3307  (Version: 5.5.20-log)
# Date: 2015-04-17 20:42:05
# Generator: MySQL-Front 5.3  (Build 4.205)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "account"
#

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `Hnum` char(20) NOT NULL,
  `Hname` varchar(20) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Regdata` datetime NOT NULL,
  `Indata` datetime NOT NULL,
  `InAdress` varchar(50) NOT NULL,
  `orout` char(2) NOT NULL,
  `logout` char(2) NOT NULL,
  `Hcategory` varchar(30) NOT NULL,
  PRIMARY KEY (`Hnum`),
  KEY `Hnum` (`Hnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "account"
#


#
# Structure for table "hdis"
#

DROP TABLE IF EXISTS `hdis`;
CREATE TABLE `hdis` (
  `Hnumber` varchar(20) NOT NULL,
  `Hname` varchar(10) NOT NULL,
  `disdata` datetime NOT NULL,
  `reason` varchar(50) NOT NULL,
  `prove` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hdis"
#


#
# Structure for table "hehe"
#

DROP TABLE IF EXISTS `hehe`;
CREATE TABLE `hehe` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hehe"
#


#
# Structure for table "hout"
#

DROP TABLE IF EXISTS `hout`;
CREATE TABLE `hout` (
  `Number` varchar(20) NOT NULL,
  `Hname` varchar(10) NOT NULL,
  `outdata` datetime NOT NULL,
  `outadress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hout"
#


#
# Structure for table "miao"
#

DROP TABLE IF EXISTS `miao`;
CREATE TABLE `miao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

#
# Data for table "miao"
#

INSERT INTO `miao` VALUES (1,'cp',0),(2,'cp',0),(3,'cp',0),(4,'cp',0),(5,'cp',0),(6,'cp',0),(7,'cp',0),(8,'cp',0),(9,'cp',0),(10,'cp',0),(11,'cp',0),(12,'cp',0),(13,'cp',0),(14,'cp',0),(15,'cp',0),(16,'cp',0),(17,'cp',0),(18,'cp',0),(19,'cp',0),(20,'cp',0),(21,'cp',0),(22,'cp',0),(23,'cp',0),(24,'cp',0),(25,'cp',0),(26,'cp',0),(27,'cp',0),(28,'cp',0),(29,'cp',0),(31,'cp',0),(32,'cp',4),(33,'cp',12),(34,'cp',79),(35,'cp',79);

#
# Structure for table "operator"
#

DROP TABLE IF EXISTS `operator`;
CREATE TABLE `operator` (
  `name` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `IDcard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "operator"
#


#
# Structure for table "perdis"
#

DROP TABLE IF EXISTS `perdis`;
CREATE TABLE `perdis` (
  `name` varchar(20) NOT NULL,
  `Hnumber` varchar(10) NOT NULL,
  `IDcard` varchar(50) NOT NULL,
  `disdata` datetime NOT NULL,
  `reason` varchar(50) NOT NULL,
  `prove` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "perdis"
#


#
# Structure for table "perout"
#

DROP TABLE IF EXISTS `perout`;
CREATE TABLE `perout` (
  `name` varchar(20) NOT NULL,
  `Hnumber` varchar(20) NOT NULL,
  `IDcard` int(50) NOT NULL,
  `outdata` datetime NOT NULL,
  `outAdress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "perout"
#


#
# Structure for table "person"
#

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `name` varchar(20) NOT NULL,
  `Sex` char(2) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `province` varchar(10) NOT NULL,
  `birthdata` datetime NOT NULL,
  `place` varchar(50) NOT NULL,
  `Hnumber` char(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `marry` varchar(10) NOT NULL,
  `IDcard` varchar(20) NOT NULL,
  `Job` varchar(20) NOT NULL,
  `WorkAdress` varchar(50) NOT NULL,
  `indata` datetime NOT NULL,
  `inAdress` varchar(50) NOT NULL,
  PRIMARY KEY (`IDcard`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "person"
#


#
# Structure for table "shops"
#

DROP TABLE IF EXISTS `shops`;
CREATE TABLE `shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '0',
  `desn` text,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`price`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "shops"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `name` varchar(20) NOT NULL,
  `IDcard` varchar(50) NOT NULL,
  `Hnumber` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#


#
# Structure for table "zh"
#

DROP TABLE IF EXISTS `zh`;
CREATE TABLE `zh` (
  `name` varchar(20) NOT NULL,
  `ye` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "zh"
#

INSERT INTO `zh` VALUES ('zhangsan',50),('lisi',150);
