-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 04:08 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` tinyint(10) NOT NULL,
  `nim` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `gambar` text NOT NULL,
  `gambar2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `nim`, `judul`, `isi`, `tanggal`, `gambar`, `gambar2`) VALUES
(51, 1407055038, 'Yana', '<p>yeaaah</p>\r\n', '06 May 2017 22:14', 'gambar/14701231_212268489196040_5595394607664857088_n.jpg', '../admin/berita/gambar/14701231_212268489196040_5595394607664857088_n.jpg'),
(52, 1407055038, 'Rifki', '<p>sssssupeeerrrrrrr</p>\r\n', '06 May 2017 22:15', 'gambar/IMG_20150717_144807.jpg', '../admin/berita/gambar/IMG_20150717_144807.jpg'),
(53, 1407055038, 'keindahan dunia', '<p>Mantap</p>\r\n', '06 May 2017 22:17', 'gambar/bicycle-1366x768.jpg', '../admin/berita/gambar/bicycle-1366x768.jpg'),
(54, 1407055038, 'tes', '<p>aaa</p>\r\n', '06 May 2017 22:19', 'gambar/39674188-game-of-thrones-wallpapers.jpg', '../admin/berita/gambar/39674188-game-of-thrones-wallpapers.jpg'),
(55, 1407055038, 'aaa', '<p>aaaa</p>\r\n', '06 May 2017 22:19', 'gambar/game-of-thrones-wallpaper-hd-24.jpg', '../admin/berita/gambar/game-of-thrones-wallpaper-hd-24.jpg'),
(56, 1407055038, 'popopopo', '<p>eeEA</p>\r\n\r\n<p>&nbsp;</p>\r\n', '09 May 2017 15:17', 'gambar/Raline Shah 1.png', '../admin/berita/gambar/Raline Shah 1.png'),
(57, 1407055038, 'ituini', '<p>ituiniini</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '09 May 2017 16:02', 'gambar/Chrysanthemum.jpg', '../admin/berita/gambar/Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `password`) VALUES
(1407055038, 'rifki', '2a5c4c5a5ba1c332279685ddec507cd9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
