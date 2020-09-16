/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.13-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `mst_tentang` (
	`id_tentang` int (11),
	`ket_tentang` varchar (765),
	`img_tentang` varchar (765),
	`link_tentang` varchar (765)
); 
insert into `mst_tentang` (`id_tentang`, `ket_tentang`, `img_tentang`, `link_tentang`) values('1','Geoprak merupakan wilayah terpadu yang terdepan dalam perlindungan dan penggunaan warisan geologi dengan cara yang berkelanjutan, dan mempromosikan kesejahteraan ekonomi masyarakat yang tinggal di sana.','about-us.jpg','https://stackoverflow.com/questions/7991425/php-how-to-check-if-image-file-exists');
