-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2013 at 04:55 AM
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
  `nama_ktgproduk` varchar(30) DEFAULT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id_ktgproduk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ktgproduk`
--

INSERT INTO `ktgproduk` (`id_ktgproduk`, `nama_ktgproduk`, `waktu`) VALUES
(1, 'pertamax', '2013-03-05'),
(2, 'Pertama', '2013-03-05'),
(3, 'kedua', '2013-03-06'),
(4, 'Ketiga', '2013-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_ktgproduk` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `hrg_satuan` varchar(20) DEFAULT NULL,
  `hrg_lusin` varchar(20) DEFAULT NULL,
  `gbr_produk` varchar(50) DEFAULT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_ktgproduk`, `nama_produk`, `hrg_satuan`, `hrg_lusin`, `gbr_produk`, `waktu`) VALUES
(1, 1, 'pertamax', '1', '12', '/images/1.jpg', '2013-03-05'),
(2, 1, 'dua', '2', '24', '/images/429234_4515916533439_288404219_n.jpg', '2013-03-05'),
(3, 0, ' pertama', ' 1', ' 12', '/images/', '2013-03-05'),
(4, 3, ' pertamax', ' 1', ' 12', '/images/', '2013-03-06'),
(5, 1, 'kelima', '10000', '100000', '/images/IMG0368A.jpg', '2013-03-06'),
(6, 1, 'kelima', '10000', '100000', '/images/IMG0368A.jpg', '2013-03-06'),
(7, 1, 'keenam', '180', '1707', '/images/', '2013-03-06');
