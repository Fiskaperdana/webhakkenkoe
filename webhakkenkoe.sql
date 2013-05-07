-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2013 at 05:52 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webhakkenkoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `realname` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `realname`, `password`) VALUES
('admin', 'Rosalina Tri Agustika', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL,
  `tqty` varchar(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  PRIMARY KEY (`id_cart`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `idkontak` int(11) NOT NULL AUTO_INCREMENT,
  `namakontak` varchar(50) DEFAULT NULL,
  `emailkontak` varchar(50) DEFAULT NULL,
  `telpkontak` varchar(30) DEFAULT NULL,
  `isikontak` text,
  `waktu` date NOT NULL,
  PRIMARY KEY (`idkontak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`idkontak`, `namakontak`, `emailkontak`, `telpkontak`, `isikontak`, `waktu`) VALUES
(1, 'Rosa', 'pyomb333@yahoo.com', '088806002344', 'Pertamax', '2013-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `ktgproduk`
--

CREATE TABLE IF NOT EXISTS `ktgproduk` (
  `id_ktgproduk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ktgproduk` varchar(30) NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id_ktgproduk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `ktgproduk`
--

INSERT INTO `ktgproduk` (`id_ktgproduk`, `nama_ktgproduk`, `waktu`) VALUES
(35, 'Hakken', '2013-04-29'),
(36, 'Brooch', '2013-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `menu_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `title`, `url`, `menu_order`) VALUES
(1, 0, 'Home', 'admin.php', 1),
(2, 0, 'Pengaturan', '#', 2),
(3, 0, 'Laporan Order', 'rekaporder.php', 3),
(4, 2, 'Kategori Produk', 'lihat_kategori.php', 1),
(5, 2, 'Produk', 'lihat_produk.php', 2),
(6, 2, 'Profile Admin', 'profileadmin.php', 3),
(7, 0, 'Logout', 'logout.php', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menuadmin`
--

CREATE TABLE IF NOT EXISTS `menuadmin` (
  `parent_id` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `menu_order` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuadmin`
--

INSERT INTO `menuadmin` (`parent_id`, `title`, `url`, `menu_order`) VALUES
('0', 'Pengaturan', '#', '1'),
('1', 'Kategori Produk', 'lihat_kategori.php', '1'),
('1', 'Produk', 'lihat_produk.php', '2'),
('1', 'Admin', 'profiladmin.php', '3'),
('1', 'Menu', 'lihat_menu.php', '4'),
('0', 'Laporan Transaksi', 'rekaporder.php', '2'),
('0', 'Logout', 'logout.php', '3');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ktgproduk` varchar(30) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `hrg_satuan` varchar(20) NOT NULL,
  `hrg_lusin` varchar(20) NOT NULL,
  `gbr_produk` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_ktgproduk`, `nama_produk`, `hrg_satuan`, `hrg_lusin`, `gbr_produk`, `waktu`) VALUES
(12, '36', 'Brooch Indian', '14000', '100000', '1020050511_15708879.jpg', '2013-04-29'),
(11, '36', 'coba3', '12', '23', 'GoKong_1dicky cheung.JPG', '2013-04-29');
