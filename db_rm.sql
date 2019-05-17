-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 10:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rm`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_mkn`
--

CREATE TABLE IF NOT EXISTS `menu_mkn` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `menu_mkn`
--

INSERT INTO `menu_mkn` (`id_menu`, `nama_menu`, `type`, `gambar`, `harga`) VALUES
(8, 'Sate Ayam', 'makanan', 'sateayam.jpg', 24500),
(10, 'Nasi Goreng', 'makanan', 'nasi_goreng.jpg', 20000),
(11, 'Sop Buntut', 'makanan', 'sop_buntut.jpg', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `menu_mnm`
--

CREATE TABLE IF NOT EXISTS `menu_mnm` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu_mnm`
--

INSERT INTO `menu_mnm` (`id_menu`, `nama_menu`, `type`, `gambar`, `harga`) VALUES
(3, 'Jus Jeruk', 'minuman', 'jus_jeruk.png', 14000),
(5, 'Jus Alpukat', 'minuman', 'jus_alpukat.png', 17000),
(6, 'Jus Mangga', 'minuman', 'jus_mangga.png', 14500);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_menu1` int(11) DEFAULT NULL,
  `qty_mkn` int(11) NOT NULL,
  `id_menu2` int(11) DEFAULT NULL,
  `qty_mnm` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_order` varchar(50) DEFAULT NULL,
  `total_bayar` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_menu1`, `qty_mkn`, `id_menu2`, `qty_mnm`, `nama`, `tgl_order`, `total_bayar`, `status`, `qrcode`) VALUES
('AA1A10093542', 8, 2, 5, 3, 'Somad Yue', '25-05-2018', '100000', 'sudah dibayar', 'AA1A10093542.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nip`, `username`, `password`, `nama`, `status`) VALUES
(1, '1731890001', 'owner', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Udin', 1),
(11, '17314091411101', 'petugas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'John Doe', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
