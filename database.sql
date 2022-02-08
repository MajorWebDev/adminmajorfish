-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: be1x3hctw7lyrksp3fb3-mysql.services.clever-cloud.com:3306
-- Generation Time: Feb 08, 2022 at 03:59 AM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be1x3hctw7lyrksp3fb3`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikan`
--

CREATE TABLE `ikan` (
  `id_ikan` int NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `rating` float DEFAULT NULL,
  `kategori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikan`
--

INSERT INTO `ikan` (`id_ikan`, `gambar`, `nama`, `deskripsi`, `harga`, `status`, `rating`, `kategori`) VALUES
(1, '2064313874_hmsr.jpg', 'Super Red', 'Usia <b>Indukan</b> <br>\r\nSize Induk <br>\r\nKualitas Jos', 50000, 'Ada', 4, 0),
(2, '1239417986_plakatwp.jpg', 'Plakat White Platinum', 'Ikan sangat berkualitas', 100000, 'Ada', 4, 3),
(3, '1625730250_ctbesgel.jpg', 'Crowntail Besgel HM', 'Ikan Murahan banget', 10005, 'Habis', 2, 4),
(13, '368774118_cupang biru.jpg', 'Cupang Biru', 'TEST', 990000, 'Ada', 2.5, 7),
(14, '1227666910_giantmulty.jpg', 'Multycolor', 'bagus <br>', 50000, 'Ada', 5, 2),
(16, '1183408162_whiteplatinum.jpg', 'White Platinum', 'Indukan <br>\r\nSiap <b> Kawin </b>', 40000, 'Ada', 4, 3),
(17, '1633419324_blue.jpg', 'Hybird Blue', 'Ikannya SULTAN', 500000, 'Ada', 5, 6),
(18, '180210641_nemo.jpg', 'Nemo', 'Ikan Kualitas Kontes\r\nSize Baby', 70000, 'Habis', 4.5, 1),
(19, '1570593411_koi.jpg', 'Koi', 'Ikan Bagus\r\nIkan Cakep', 80000, 'Ada', 4.5, 2),
(20, '1754205971_red koi galaxy.jpg', 'red koi galaxy', 'Ikan cakep\r\nMale', 100000, 'Ada', 3, 1),
(21, '1811152945_koi copper.jpg', 'Koi Copper', 'Ikan langka', 1000000, 'Habis', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
('2976e3a0-448b-11ec-96d6-7085c2f1cf35', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikan`
--
ALTER TABLE `ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikan`
--
ALTER TABLE `ikan`
  MODIFY `id_ikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
