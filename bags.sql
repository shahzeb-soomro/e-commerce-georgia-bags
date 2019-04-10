/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.61 : Database - bags
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bags` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bags`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) DEFAULT NULL,
  `cat_description` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `unique` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `category` */

insert  into `category`(`cat_id`,`cat_name`,`cat_description`,`created_on`,`modified_date`) values (1,'TOTE Bags','TOTE Bags','2018-12-18 10:10:04',NULL),(2,'BANDANNA','BANDANNA','2018-12-18 10:11:29',NULL),(3,'APRON','APRON','2018-12-18 10:11:48',NULL),(4,'Towel','Towel','2018-12-18 10:12:04',NULL);

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `idorder_items` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` varchar(45) NOT NULL,
  PRIMARY KEY (`idorder_items`),
  CONSTRAINT `product_id` FOREIGN KEY (`idorder_items`) REFERENCES `products` (`idproducts`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `order_items` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `idorders` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idorders`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `orders` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `short_description` varchar(45) DEFAULT NULL,
  `long_description` varchar(300) DEFAULT NULL,
  `product_image` varchar(200) DEFAULT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `72_ntr` varchar(45) DEFAULT NULL,
  `144_ntr` varchar(45) DEFAULT NULL,
  `300_ntr` varchar(45) DEFAULT NULL,
  `600_ntr` varchar(45) DEFAULT NULL,
  `1000_ntr` varchar(45) DEFAULT NULL,
  `2500_ntr` varchar(45) DEFAULT NULL,
  `72_clr` varchar(45) DEFAULT NULL,
  `144_clr` varchar(45) DEFAULT NULL,
  `300_clr` varchar(45) DEFAULT NULL,
  `600_clr` varchar(45) DEFAULT NULL,
  `1000_clr` varchar(45) DEFAULT NULL,
  `2500_clr` varchar(45) DEFAULT NULL,
  `price_includes` varchar(45) DEFAULT NULL,
  `lead_time` varchar(45) DEFAULT NULL,
  `rush_available` varchar(100) DEFAULT NULL,
  `imprint_area` varchar(45) DEFAULT NULL,
  `setup_charge` varchar(45) DEFAULT NULL,
  `repeat_setup` varchar(45) DEFAULT NULL,
  `flash_charge` varchar(45) DEFAULT NULL,
  `pms_match` varchar(45) DEFAULT NULL,
  `less_than_minimum` varchar(45) DEFAULT NULL,
  `color_change_charge` varchar(45) DEFAULT NULL,
  `spec_sample` varchar(200) DEFAULT NULL,
  `item_no` varchar(50) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `available_colors` varchar(45) DEFAULT NULL,
  `product_size` varchar(45) DEFAULT NULL,
  `quality_matrial` varchar(45) DEFAULT NULL,
  `quality_weight` varchar(45) DEFAULT NULL,
  `handle_length` varchar(45) DEFAULT NULL,
  `side_gussets` varchar(45) DEFAULT NULL,
  `bottom_gussets` varchar(45) DEFAULT NULL,
  `available_decoration` varchar(100) DEFAULT NULL,
  `create_on` timestamp NULL DEFAULT NULL,
  `modified_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idproducts`),
  KEY `cat_id` (`cat_id`),
  CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`idproducts`,`product_name`,`short_description`,`long_description`,`product_image`,`cat_id`,`72_ntr`,`144_ntr`,`300_ntr`,`600_ntr`,`1000_ntr`,`2500_ntr`,`72_clr`,`144_clr`,`300_clr`,`600_clr`,`1000_clr`,`2500_clr`,`price_includes`,`lead_time`,`rush_available`,`imprint_area`,`setup_charge`,`repeat_setup`,`flash_charge`,`pms_match`,`less_than_minimum`,`color_change_charge`,`spec_sample`,`item_no`,`item_name`,`available_colors`,`product_size`,`quality_matrial`,`quality_weight`,`handle_length`,`side_gussets`,`bottom_gussets`,`available_decoration`,`create_on`,`modified_on`) values (1,'11 X 13 Canvas Tote Bag','Reinforced at stress points.','7oz Cotton canvas Bag with self-fabric 20\" handles. Reinforced at stress points.','Black.jpg',1,'$1','$2','$3','$4','$5','$6','$7','$8','$9','$10','$11','$12','1 Color, 1 Location','5-7 Business Days','Yes, Pls contact customer service','7\"W x 9\"H','$37.50 (V)','$18.75 (V)','$0.25 (V)','$ 25.00 (V)','$ 50.00 (V)','$ 25.00 (V)','$ 55.00 (V) - if Approved for production within a week repeat setups can be avoided','TB1113','11 X 13 Canvas Tote Bag','Black, Natural','11.5\"W x 13\"H x 1.5\"D','100% Cotton Canvas','7oz','20\"','No','Yes','Spot Colors, 4 Color Process, Embroidery, Heat Transfers','2018-11-29 21:53:48','2018-11-29 21:53:51');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`) values (1,'admin','admin@example.com','123456');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
