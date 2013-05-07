-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2012 at 12:50 AM
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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL COMMENT 'username',
  `password` varchar(255) NOT NULL COMMENT 'password',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

DROP TABLE IF EXISTS `kontak`;
CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id kontak',
  `nama` varchar(50) NOT NULL COMMENT 'Nama Pengunjung',
  `email` varchar(50) NOT NULL COMMENT 'Email Pengunjung',
  `notelp` int(12) NOT NULL COMMENT 'No Telp Pengunjung',
  `isi` text NOT NULL COMMENT 'Komentar Pengunjung',
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Waktu Submit',
  PRIMARY KEY (`id_kontak`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kontak`
--

