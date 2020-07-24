-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 09:50 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friendly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `nama_lengkap`) VALUES
(1, 'azam', 'semarang', 'Norzam Yahya');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `nama` text NOT NULL,
  `modal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `active` char(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `jenis`, `merk`, `nama`, `modal`, `harga`, `foto`, `keterangan`, `active`) VALUES
(4, 'Laptop', 'Acer', 'ACER Aspire E5-476G-8250U(Steel Grey)', 8099000, 8199000, '3.png', 'None', ''),
(5, 'Laptop', 'Acer', 'ACER Aspire One 14-Z476-6006U (Black)', 5299000, 5399000, '4.png', '', ''),
(6, 'Laptop', 'Acer', 'ACER Switch One SW1 011 10C4 (Gray)', 3399000, 3499000, 'ACER Switch One SW1 011 10C4 Gray Hybird 2 in 1-26950.png', 'Promo', '1'),
(8, 'Laptop', 'Acer', 'ACER PREDATOR NITRO 5i7-8750H RAM 8GB Black', 12850000, 12950000, 'ACER PREDATOR NITRO 5-AN515 i7-8750H RAM 8GB GTX1050M-4GB Black.png', 'Trending', '0'),
(9, 'Laptop', 'Asus', 'ASUS ROG GL503GE-EN129T Hero Edition', 17699000, 17799000, '5.png', 'Trending', '0'),
(10, 'Laptop', 'Asus', 'ASUS VivoBook A407UA-BV320T Icicle Gold', 5849000, 5949000, '7.png', 'Promo', '0'),
(11, 'Laptop', 'Asus', 'ASUS VivoBook Flip TP410UA-EC543T Gray Metal', 6499000, 6599000, '6.png', 'Trending', '1'),
(12, 'Laptop', 'Asus', 'ASUS VivoBook S406UA-BM257T Grey - 36694', 7699000, 7799000, '8.png', '', ''),
(13, 'Laptop', 'HP', 'HP 14-bs007tu Black', 3599000, 3699000, 'HP 14-bs007tu Black -37062.png', 'Promo', '0'),
(14, 'Laptop', 'HP', 'HP 14-bs742tu Grey', 5450000, 5550000, 'HP 14-bs742tu Grey -0-270918-RBB02.png', '', ''),
(15, 'Laptop', 'HP', 'HP 14-bw512ax Black', 7699000, 7799000, 'HP 14-bw512ax Black -36896.png', 'Trending', '0'),
(16, 'Laptop', 'HP', 'HP EliteBook Folio Silver', 11600000, 11700000, 'HP EliteBook Folio 102-M5Y71-8GB-256GB Silver - 36382.png', '', ''),
(17, 'Laptop', 'Lenovo', 'LENOVO IdeaPad 320-15IAP-N4200-4GB-1TB', 4199000, 4299000, 'LENOVO IdeaPad 320-15IAP-N4200-4GB-1TB-Win10 Blue - BEC1.png', 'Promo', '1'),
(18, 'Laptop', 'Lenovo', 'LENOVO IdeaPad 4GB-1TB-2GB Onyx Black', 4999000, 5099000, 'LENOVO IdeaPad 330-14AST-A9-9425-4GB-1TB-R530-2GB-Win10 Onyx Black.png', '', ''),
(19, 'Laptop', 'Lenovo', 'LENOVO Yoga Book-Android Gray', 5699000, 5799000, 'LENOVO Yoga Book-Android Gray - 30336-KnK.png', '', ''),
(20, 'Laptop', 'Lenovo', 'LENOVO IdeaPad 330S-14IKB-8250U-4GB-1TB Platinum Gray', 8599000, 8699000, 'LENOVO IdeaPad 330S-14IKB-8250U-4GB-1TB-Win10 Platinum Gray - 36712.png', 'Trending', '1'),
(21, 'Flashdisk', 'Samsung', 'Samsung Drive BAR MUF-32BA 32GB', 95000, 110000, 'Samsung Drive BAR MUF-32BA 32GB - USB 3.png', 'Trending', '1'),
(22, 'Flashdisk', 'Sandisk', 'Sandisk Cruzer Blade CZ50 8GB', 40000, 50000, 'Sandisk Cruzer Blade CZ50 8GB.png', 'Promo', '0'),
(23, 'Flashdisk', 'Sandisk', 'Sandisk Cruzer Ultra Fit CZ430 16GB USB 3.1', 68500, 70500, 'Sandisk Cruzer Ultra Fit CZ430 16GB USB 3.png', 'Promo', '0'),
(25, 'Flashdisk', 'Sandisk', 'Sandisk Ultra Dual Drive OTG 32GB USB 3.0', 112000, 122000, 'Sandisk Ultra Dual Drive OTG 32GB USB 3.png', '', ''),
(26, 'Keyboard', 'Logitech', 'Logitech Classic MK120 (K120 + B100)', 134000, 154000, 'Logitech Wireless Desktop MK220.png', '', ''),
(27, 'Keyboard', 'MSI', 'MSI Gaming Keyboard - Vigor GK40 With RGB Mystic Light', 833000, 899000, 'MSI Gaming Keyboard - Vigor GK40 With RGB Mystic Light.png', 'Trending', '1'),
(28, 'Keyboard', 'Cougar', 'Cougar Mechanical Gaming Keyboard Ultimus RGB Cherry', 789000, 990000, 'Cougar Mechanical Gaming Keyboard Ultimus RGB Cherry MX Blue Switch.png', '', ''),
(29, 'Keyboard', 'Aula', 'Aula Gaming Keyboard - Adjudication', 89000, 100000, 'Aula Gaming Keyboard - Adjudication SK-832.png', 'Promo', '1'),
(30, 'Mouse', '1stPlayer', '1STPLAYER Gaming Mouse BLACKSIR', 120000, 22000, '1STPLAYER Gaming Mouse BLACKSIR BS300 BLACK - RGB Effect.png', 'Promo', '1'),
(31, 'Mouse', 'Logitech', 'Logitech M100r Optical Mouse USB', 60000, 70000, 'Logitech M100r Optical Mouse USB - Black.png', '', ''),
(32, 'Mouse', 'Gamdias', 'Gamdias Combo Zeus E1 + NYX E1', 330000, 350000, 'Gamdias Combo Zeus E1 + NYX E1.jpg', 'Trending', '0'),
(33, 'Mouse', 'Cougar', 'Cougar Gaming Mouse Revenger S - RGB', 665000, 680000, 'Cougar Gaming Mouse Revenger S - RGB - 12000 DPI 6 Programmable Button.png', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
