/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.13-MariaDB : Database - db_geopark
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_geopark` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_geopark`;

/*Table structure for table `mst_admin` */

DROP TABLE IF EXISTS `mst_admin`;

CREATE TABLE `mst_admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_admin` */

insert  into `mst_admin`(`id_user`,`email_admin`,`password_admin`,`name_admin`) values 
(1,'lukman@adminkominfo.com','d033e22ae348aeb5660fc2140aec35850c4da997','Lukman Arief C');

/*Table structure for table `mst_bagian` */

DROP TABLE IF EXISTS `mst_bagian`;

CREATE TABLE `mst_bagian` (
  `id_bagian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bagian` varchar(200) NOT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_bagian` */

insert  into `mst_bagian`(`id_bagian`,`nama_bagian`) values 
(2,'Ketua');

/*Table structure for table `mst_berita` */

DROP TABLE IF EXISTS `mst_berita`;

CREATE TABLE `mst_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_berita` date NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `img_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_berita` */

insert  into `mst_berita`(`id_berita`,`tgl_berita`,`judul_berita`,`img_berita`,`isi_berita`) values 
(2,'2020-09-16','Kece! Bendungan Sampean Baru','blog-img-1.jpg','<p>Di tengah penenerapan new normal, atau adaptasi kehidupan baru, sejumlah warga, mulai melakukan piknik baik ke tempat wisata dan sebagainya. Salah satunya yang menjadi tujuan adalah Waduk Sampean Baru di Bondowoso, Jawa Timur.</p><p>Bendungan yang terletak di Desa Bunotan, Kecamatan Tapen, Kabupaten Bondowoso, Jawa Timur itu, mempunya lanskap pemandangan yang instagramable dan keren.</p><p>Bendungan Sampean Baru ini dibangun sejak tahun 1979. Tapi pengerjaannya baru selesai pada tahun 1983 lalu.</p><p>Bendungan yang megah tersebut, dibangun dengan susunan beton yang kokoh dan rapi. Bendungan ini&nbsp; memiliki panjang 670 meter, lebar 4 meter dan tinggi 26 meter, berfungsi mengaliri lahan pertanian seluas 9.800 hektar.</p><p><br></p><p>Banyak wisatawan menyebut bendungan Sampean Baru mirip dengan sebuah bendungan yang ada di Belanda sehingga saat weekend banyak pengunjung untuk berburu spot foto di sudut-sudut bendungan tersebut.</p><p>Ari Sincha, seorang pengunjung, mengaku datang untuk bisa menikmati pesona bendungan yang terletak di salah satu kawasan timur Bondowoso ini.<br></p><p>\"Sejak pandemi kan tempat-tempat wisata sempat ditutup. Kami tak bisa ke mana-mana. Bosen di rumah. Beruntung ada kebijakan new normal,\"&nbsp; katanya.<br></p><p>Menurutnya, tempat ini sangat instagramable, dan cocok untuk anak muda yang suka berswafoto. \"Pokoknya keren, mempesona, dan unik ya,\" imbuhnya, Sabtu (18/7/2020).<br></p><p>Pantauan di lokasi, air di Bendungan Sampean Baru Bondowoso, itu tak terlalu deras karena sudah musim kemarau. Kondisi ini membuat banyak wisawatan turun ke bawah untuk bisa mengabadikan foto di sana. (*)&nbsp;<br></p>'),
(3,'2020-09-16','Kecamatan Binakal Promosi Wisata Lewat Fun Enduro dan Downhill','blog-img-2.jpg','<p>Dalam rangka mengenalkan potensi wisata yang ada di Kecamatan Binakal, Bondowoso, Jawa Timur, Pemerintah Kecamatan setempat menggelar Fun Enduro dan Fun Downhill.</p><p>\"Dilaksanakan langsung di salah satu spot wisata alam Kecamatan Binakal yakni Bukit Bintang,\" tutur Camat Binakal, Amank Sumarmadi, Minggu (10/12/2017).<br></p><p>Amank mengatakan kegiatan tersebut adalah swadaya masyarakat Binakal dan pecinta enduro dan downhill yang diketuai oleh Aris Agung Sungkowo. Pesertanya kata dia, berasal dari berbagai daerah termasuk Probolinggo, Banyuwangi, Situbondo, Jember Lumajang sampai Pasuruan.&nbsp;<br></p><p>\"Mereka bermalam di Hotel sejak kemarin,\" katanya.&nbsp;<br></p><p>Ia menambahkan arena yang saat ini digunakan para peserta untuk downhill dan enduro merupakan arena latihan para rider sepeda dari Bondowoso bahkan sampai luar Kabupaten.<br></p><p>Ke depan, Amank berharap kegiatan yang saat ini dilaksanakan secara swadaya tersebut bisa menjadi event yang lebih besar dan memberikan dampak pada pariwisata yang ada di Kecamatan Binakal dan Bondowoso secara umum.&nbsp;</p><p>\"Syukur-syukur bisa dijadikan event tahunan Bondowoso dan dapat berdampak maksimal pada pengembangan wisata alam serta dapat memberi lapangan pekerjan baru, sehingga tingkat ekonomi masyarakat lebih baik lagi,\" katanya.&nbsp;<br></p><p>Acara ini dilaksanakan selama dua hari sejak Sabtu kemarin. Hari pertama, diisi dengan Fun Enduro dan hari selanjutnya diisi dengan Fun Downhill. (*)<br></p>');

/*Table structure for table `mst_foto` */

DROP TABLE IF EXISTS `mst_foto`;

CREATE TABLE `mst_foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_foto` varchar(200) NOT NULL,
  `judul_foto` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_foto` */

insert  into `mst_foto`(`id_foto`,`id_kategori`,`nama_foto`,`judul_foto`,`keterangan`) values 
(4,1,'img-1.jpg','Kawah Wurung','Wisata Kawah Wurung'),
(5,2,'img-2.jpg','Tancak Kembar','Wisata Tancak Kembar'),
(6,3,'img-3.jpg','Kawah Ijen','Wisata Kawah Ijen'),
(7,1,'img-4.jpg','Alas Sumor','Wisata Alas Sumor'),
(8,2,'img-5.jpg','Puncak Piramid','Wisata Puncak Gunung Piramid'),
(9,1,'img-6.jpg','Bukit Mahadewa','Wisata Bukit Mahadewa');

/*Table structure for table `mst_geo` */

DROP TABLE IF EXISTS `mst_geo`;

CREATE TABLE `mst_geo` (
  `id_tentang` int(11) NOT NULL AUTO_INCREMENT,
  `ket_geo` text NOT NULL,
  `img_geo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tentang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_geo` */

/*Table structure for table `mst_jadwal` */

DROP TABLE IF EXISTS `mst_jadwal`;

CREATE TABLE `mst_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_pariwisata` int(11) NOT NULL,
  `dtime_pariwisata` datetime NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_jadwal` */

/*Table structure for table `mst_kategori` */

DROP TABLE IF EXISTS `mst_kategori`;

CREATE TABLE `mst_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_kategori` */

insert  into `mst_kategori`(`id_kategori`,`nama_kategori`) values 
(1,'Geological Site'),
(2,'Biological Site'),
(3,'Culture Site');

/*Table structure for table `mst_kontak` */

DROP TABLE IF EXISTS `mst_kontak`;

CREATE TABLE `mst_kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `alamat_kontak` varchar(255) NOT NULL,
  `telp_kontak` varchar(30) NOT NULL,
  `email_kontak` varchar(90) NOT NULL,
  `instagram_kontak` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_kontak` */

insert  into `mst_kontak`(`id_kontak`,`alamat_kontak`,`telp_kontak`,`email_kontak`,`instagram_kontak`) values 
(2,'Jalan Panjaitan 234 Bondowoso','0332-424692','admin@geopark.com','geopark_ijen');

/*Table structure for table `mst_layanan` */

DROP TABLE IF EXISTS `mst_layanan`;

CREATE TABLE `mst_layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(255) NOT NULL,
  `link_layanan` varchar(255) NOT NULL,
  `img_layanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_layanan` */

insert  into `mst_layanan`(`id_layanan`,`nama_layanan`,`link_layanan`,`img_layanan`) values 
(3,'E-Commerce','Shopping Cart','fa fa-shopping-cart'),
(4,'Layanan Tour and Travel','Menyediakan','fa fa-plane');

/*Table structure for table `mst_menu` */

DROP TABLE IF EXISTS `mst_menu`;

CREATE TABLE `mst_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_menu` */

/*Table structure for table `mst_menu_sub` */

DROP TABLE IF EXISTS `mst_menu_sub`;

CREATE TABLE `mst_menu_sub` (
  `id_menu_sub` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  PRIMARY KEY (`id_menu_sub`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_menu_sub` */

/*Table structure for table `mst_misi` */

DROP TABLE IF EXISTS `mst_misi`;

CREATE TABLE `mst_misi` (
  `id_misi` int(11) NOT NULL AUTO_INCREMENT,
  `ket_misi` text NOT NULL,
  PRIMARY KEY (`id_misi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_misi` */

insert  into `mst_misi`(`id_misi`,`ket_misi`) values 
(1,'Melestarikan keragaman sumber daya geologi, kekhasan dan keunikan budaya, serta kekayaan sumber daya alam hayati secara berkelanjutan.'),
(2,'Meningkatkan kesejahteraan masyarakat melalui penguatan peran masyarakat dalam pengelolaan Geopark, perluasan kesempatan berusaha serta peningkatan pendapatan masyarakat dan daerah.'),
(3,'Membangun destinasi pariwisata (GEOSITE) kelas dunia yang menjunjung tinggi norma sosial, budaya dan hukum.'),
(4,'Membangun masyarakat melalui peningkatan pengetahuan dan pemahaman terhadap geopark, serta peningkatan kesadaran terhadap konservasi alam dan budaya.'),
(5,'Membangun tata kelola yang professional, terpadu dan berkelanjutan untuk menjamin terwujudnya keterpaduan pembangunan Geopark yang berkelanjutan.');

/*Table structure for table `mst_pariwisata` */

DROP TABLE IF EXISTS `mst_pariwisata`;

CREATE TABLE `mst_pariwisata` (
  `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_pariwisata` varchar(200) NOT NULL,
  `alamat_pariwisata` varchar(200) NOT NULL,
  `notelp_pariwisata` varchar(40) NOT NULL,
  `email_pariwisata` varchar(255) NOT NULL,
  `img_pariwisata` varchar(255) NOT NULL,
  `lattitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pariwisata`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_pariwisata` */

/*Table structure for table `mst_pengurus` */

DROP TABLE IF EXISTS `mst_pengurus`;

CREATE TABLE `mst_pengurus` (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `id_pariwisata` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `nama_pengurus` varchar(255) NOT NULL,
  `notelp_pengurus` varchar(255) NOT NULL,
  `img_pengurus` varchar(255) NOT NULL,
  `ket_pengurus` text NOT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_pengurus` */

/*Table structure for table `mst_plingkungan` */

DROP TABLE IF EXISTS `mst_plingkungan`;

CREATE TABLE `mst_plingkungan` (
  `id_plingkungan` int(11) NOT NULL AUTO_INCREMENT,
  `ket_plingkungan` text NOT NULL,
  PRIMARY KEY (`id_plingkungan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_plingkungan` */

/*Table structure for table `mst_slider` */

DROP TABLE IF EXISTS `mst_slider`;

CREATE TABLE `mst_slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `img_slider` varchar(255) NOT NULL,
  `judul_slider` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_slider` */

insert  into `mst_slider`(`id_slider`,`img_slider`,`judul_slider`,`keterangan`,`status`) values 
(4,'slider-img-1.jpg','Kawah Ijen','Kawah Ijen',1),
(5,'slider-img-2.jpg','Kawah Wurung','Kawah Wurung',1),
(6,'slider-img-3.jpg','Tancak Kembar','Tancak Kembar',1);

/*Table structure for table `mst_tentang` */

DROP TABLE IF EXISTS `mst_tentang`;

CREATE TABLE `mst_tentang` (
  `id_tentang` int(11) NOT NULL AUTO_INCREMENT,
  `ket_tentang` varchar(255) NOT NULL,
  `img_tentang` varchar(255) NOT NULL,
  `link_tentang` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tentang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_tentang` */

insert  into `mst_tentang`(`id_tentang`,`ket_tentang`,`img_tentang`,`link_tentang`) values 
(1,'Geoprak merupakan wilayah terpadu yang terdepan dalam perlindungan dan penggunaan warisan geologi dengan cara yang berkelanjutan, dan mempromosikan kesejahteraan ekonomi masyarakat yang tinggal di sana.','about-us.jpg','https://stackoverflow.com/questions/7991425/php-how-to-check-if-image-file-exists');

/*Table structure for table `mst_travel` */

DROP TABLE IF EXISTS `mst_travel`;

CREATE TABLE `mst_travel` (
  `id_travel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_travel` varchar(255) NOT NULL,
  `alamat_travel` varchar(200) NOT NULL,
  `email_travel` varchar(255) NOT NULL,
  `notelp_travel` varchar(255) NOT NULL,
  PRIMARY KEY (`id_travel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_travel` */

/*Table structure for table `mst_visi` */

DROP TABLE IF EXISTS `mst_visi`;

CREATE TABLE `mst_visi` (
  `id_visi` int(11) NOT NULL AUTO_INCREMENT,
  `ket_visi` text NOT NULL,
  PRIMARY KEY (`id_visi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_visi` */

insert  into `mst_visi`(`id_visi`,`ket_visi`) values 
(3,'Terwujudnya Geopark Ijen Bondowoso yang Berkelanjutan dan Berdaya Saing Internasional.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
