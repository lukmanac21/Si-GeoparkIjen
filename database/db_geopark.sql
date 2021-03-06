-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 10:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_geopark`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE `mst_admin` (
  `id_user` int(11) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `name_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id_user`, `email_admin`, `password_admin`, `name_admin`) VALUES
(1, 'lukman@adminkominfo.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Lukman Arief C');

-- --------------------------------------------------------

--
-- Table structure for table `mst_bagian`
--

CREATE TABLE `mst_bagian` (
  `id_bagian` int(11) NOT NULL,
  `nama_bagian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_bagian`
--

INSERT INTO `mst_bagian` (`id_bagian`, `nama_bagian`) VALUES
(2, 'Ketua');

-- --------------------------------------------------------

--
-- Table structure for table `mst_berita`
--

CREATE TABLE `mst_berita` (
  `id_berita` int(11) NOT NULL,
  `tgl_berita` date NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `img_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_foto`
--

CREATE TABLE `mst_foto` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(200) NOT NULL,
  `judul_foto` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_jadwal`
--

CREATE TABLE `mst_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_pariwisata` int(11) NOT NULL,
  `dtime_pariwisata` datetime NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_kategori`
--

CREATE TABLE `mst_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_kategori`
--

INSERT INTO `mst_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Geogical Site'),
(2, 'Biological Site'),
(3, 'Culture Site');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kontak`
--

CREATE TABLE `mst_kontak` (
  `id_kontak` int(11) NOT NULL,
  `telp_kontak` varchar(30) NOT NULL,
  `email_kontak` varchar(90) NOT NULL,
  `instagram_kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_layanan`
--

CREATE TABLE `mst_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_layanan`
--

INSERT INTO `mst_layanan` (`id_layanan`, `nama_layanan`, `keterangan`, `icon`) VALUES
(3, 'E-Commerce', 'Shopping Cart', 'fa fa-shopping-cart');

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu_sub`
--

CREATE TABLE `mst_menu_sub` (
  `id_menu_sub` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_misi`
--

CREATE TABLE `mst_misi` (
  `id_misi` int(11) NOT NULL,
  `ket_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_misi`
--

INSERT INTO `mst_misi` (`id_misi`, `ket_misi`) VALUES
(1, 'Melestarikan keragaman sumber daya geologi, kekhasan dan keunikan budaya, serta kekayaan sumber daya alam hayati secara berkelanjutan.'),
(2, 'Meningkatkan kesejahteraan masyarakat melalui penguatan peran masyarakat dalam pengelolaan Geopark, perluasan kesempatan berusaha serta peningkatan pendapatan masyarakat dan daerah.'),
(3, 'Membangun destinasi pariwisata (GEOSITE) kelas dunia yang menjunjung tinggi norma sosial, budaya dan hukum.'),
(4, 'Membangun masyarakat melalui peningkatan pengetahuan dan pemahaman terhadap geopark, serta peningkatan kesadaran terhadap konservasi alam dan budaya.'),
(5, 'Membangun tata kelola yang professional, terpadu dan berkelanjutan untuk menjamin terwujudnya keterpaduan pembangunan Geopark yang berkelanjutan.');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pariwisata`
--

CREATE TABLE `mst_pariwisata` (
  `id_pariwisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_pariwisata` varchar(200) NOT NULL,
  `alamat_pariwisata` varchar(200) NOT NULL,
  `notelp_pariwisata` varchar(40) NOT NULL,
  `email_pariwisata` varchar(255) NOT NULL,
  `img_pariwisata` varchar(255) NOT NULL,
  `lattitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_pengurus`
--

CREATE TABLE `mst_pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `id_pariwisata` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `nama_pengurus` varchar(255) NOT NULL,
  `notelp_pengurus` varchar(255) NOT NULL,
  `img_pengurus` varchar(255) NOT NULL,
  `ket_pengurus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_plingkungan`
--

CREATE TABLE `mst_plingkungan` (
  `id_plingkungan` int(11) NOT NULL,
  `ket_plingkungan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_slider`
--

CREATE TABLE `mst_slider` (
  `id_slider` int(11) NOT NULL,
  `img_slider` varchar(255) NOT NULL,
  `judul_slider` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_slider`
--

INSERT INTO `mst_slider` (`id_slider`, `img_slider`, `judul_slider`, `keterangan`, `status`) VALUES
(4, 'slider-img-1.jpg', 'Kawah Ijen', 'Kawah Ijen', 1),
(5, 'slider-img-2.jpg', 'Kawah Wurung', 'Kawah Wurung', 1),
(6, 'slider-img-3.jpg', 'Tancak Kembar', 'Tancak Kembar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_tentang`
--

CREATE TABLE `mst_tentang` (
  `id_tentang` int(11) NOT NULL,
  `ket_tentang` varchar(255) NOT NULL,
  `img_tentang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_tentang`
--

INSERT INTO `mst_tentang` (`id_tentang`, `ket_tentang`, `img_tentang`) VALUES
(1, 'Geoprak merupakan wilayah terpadu yang terdepan dalam perlindungan dan penggunaan warisan geologi dengan cara yang berkelanjutan, dan mempromosikan kesejahteraan ekonomi masyarakat yang tinggal di sana.', '');

-- --------------------------------------------------------

--
-- Table structure for table `mst_travel`
--

CREATE TABLE `mst_travel` (
  `id_travel` int(11) NOT NULL,
  `nama_travel` varchar(255) NOT NULL,
  `alamat_travel` varchar(200) NOT NULL,
  `email_travel` varchar(255) NOT NULL,
  `notelp_travel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_visi`
--

CREATE TABLE `mst_visi` (
  `id_visi` int(11) NOT NULL,
  `ket_visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_visi`
--

INSERT INTO `mst_visi` (`id_visi`, `ket_visi`) VALUES
(3, 'Terwujudnya Geopark Ijen Bondowoso yang Berkelanjutan dan Berdaya Saing Internasional.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_admin`
--
ALTER TABLE `mst_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mst_bagian`
--
ALTER TABLE `mst_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `mst_berita`
--
ALTER TABLE `mst_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `mst_foto`
--
ALTER TABLE `mst_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `mst_jadwal`
--
ALTER TABLE `mst_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mst_kontak`
--
ALTER TABLE `mst_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `mst_layanan`
--
ALTER TABLE `mst_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mst_menu_sub`
--
ALTER TABLE `mst_menu_sub`
  ADD PRIMARY KEY (`id_menu_sub`);

--
-- Indexes for table `mst_misi`
--
ALTER TABLE `mst_misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `mst_pariwisata`
--
ALTER TABLE `mst_pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indexes for table `mst_pengurus`
--
ALTER TABLE `mst_pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `mst_plingkungan`
--
ALTER TABLE `mst_plingkungan`
  ADD PRIMARY KEY (`id_plingkungan`);

--
-- Indexes for table `mst_slider`
--
ALTER TABLE `mst_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `mst_tentang`
--
ALTER TABLE `mst_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `mst_travel`
--
ALTER TABLE `mst_travel`
  ADD PRIMARY KEY (`id_travel`);

--
-- Indexes for table `mst_visi`
--
ALTER TABLE `mst_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_admin`
--
ALTER TABLE `mst_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_bagian`
--
ALTER TABLE `mst_bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_berita`
--
ALTER TABLE `mst_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_foto`
--
ALTER TABLE `mst_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_jadwal`
--
ALTER TABLE `mst_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_kontak`
--
ALTER TABLE `mst_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_layanan`
--
ALTER TABLE `mst_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_menu_sub`
--
ALTER TABLE `mst_menu_sub`
  MODIFY `id_menu_sub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_misi`
--
ALTER TABLE `mst_misi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_pariwisata`
--
ALTER TABLE `mst_pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mst_pengurus`
--
ALTER TABLE `mst_pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_plingkungan`
--
ALTER TABLE `mst_plingkungan`
  MODIFY `id_plingkungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_slider`
--
ALTER TABLE `mst_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mst_tentang`
--
ALTER TABLE `mst_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_travel`
--
ALTER TABLE `mst_travel`
  MODIFY `id_travel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mst_visi`
--
ALTER TABLE `mst_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
