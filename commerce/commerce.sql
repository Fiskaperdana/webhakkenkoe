-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 05. Desember 2012 jam 23:49
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `materiphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(29) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `merek` varchar(50) NOT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `nama`, `foto`, `deskripsi`, `harga`, `merek`) VALUES
(1, ' Experia', 'experia.jpg', 'Sony Ericson Experia adalah hanpdhone entry level dengan fitur mp3 player bersuara jernih plus koneksi 3g serta gratis download lagu sepuasnya ', 1200000, 'Sony Ericson'),
(2, 'Galaxy Mini', 'mini.jpg', 'Samsung galaxy mini adalah smartphone android dari samsung untuk pengguna entri level. Dengan harga yang murah anda bisa mendapatkan smartphone dengan fitur touchscreen, android ginger bread, wireless hotspot dsb ', 1700000, 'Samsung'),
(3, 'Gemini', 'blackberry.jpg', 'Gemini adalah produk blackberry paling populer dan laris di pasar. Blackbarry mempunyai keunggulan komunikasi BBM yang akan mempermudah anda dalam berkomunikasi hanya dengan berlangganan bulanan ke operator yang anda pakai. ', 1000000, 'Blackberry'),
(4, 'iPhone 5', 'iphone5.jpg', 'Generasi terbaru dari produk Apple yang akan membuat hidup anda jauh lebih mudah dengan integrasi Apple Maps yang super canggih plus Siri dan cloud yang membuat iPhone cocok sebagai assiten pribadi anda ', 5000000, 'Apple'),
(5, 'Galaxy Note', 'note2.jpg', 'Galaxy Note adalah Kombinasi Smartphone dan tablet dengan ukuran yang pas ditangan anda, simple, mudah dan menyederhakan aktifitas kantor anda. ', 4500000, 'samsung'),
(6, 'Galaxy SIII', 's3.jpg', 'Galaxy S3 adalah smartphone tercanggih di tahun 2012, memiliki segudang fitur seperti Allshare, android beam, HD video dan layar super jernih yang membuat semuanya menjadi nyata ', 7000000, 'SAMSUNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `kd_transaksi` varchar(6) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `total_bayar` double NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`kd_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kd_transaksi`, `tgl_transaksi`, `total_bayar`, `nama`, `alamat`) VALUES
('T00001', '2012-12-03 16:47:25', 150000, 'angga', 'jl janti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `transaksi_detail` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `kd_transaksi` varchar(6) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`no`, `kd_transaksi`, `idproduk`, `jumlah`) VALUES
(1, 'T00001', 3, 1),
(2, 'T00001', 4, 3);
