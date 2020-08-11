/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.37-MariaDB : Database - pkl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pkl` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pkl`;

/*Table structure for table `industri` */

DROP TABLE IF EXISTS `industri`;

CREATE TABLE `industri` (
  `nib` varchar(30) NOT NULL,
  `namaind` varchar(50) DEFAULT NULL,
  `namaproduk` varchar(50) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `alamatind` varchar(50) DEFAULT NULL,
  `id_kec` int(3) DEFAULT NULL,
  PRIMARY KEY (`nib`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `industri` */

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `id_kec` int(3) NOT NULL,
  `namakec` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

/*Table structure for table `pemilik` */

DROP TABLE IF EXISTS `pemilik`;

CREATE TABLE `pemilik` (
  `nik` int(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `sosmed` varchar(20) DEFAULT NULL,
  `nib` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pemilik` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
