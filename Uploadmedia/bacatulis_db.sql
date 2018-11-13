-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 03:06 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacatulis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `membaca`
--

CREATE TABLE `membaca` (
  `id_baca` int(11) NOT NULL,
  `kode_baca` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `audio` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membaca`
--

INSERT INTO `membaca` (`id_baca`, `kode_baca`, `judul`, `keterangan`, `foto`, `audio`) VALUES
(1, 'C01', 'Membaca angka', 'Angka 1', '17_an.jpg', ''),
(2, 'B03', 'Membaca angka 2', 'Angka 2', '2.mp4', 'REC201803102127581.mp3'),
(3, '012', 'Angka dua', 'Membaca angka 2', '21.mp4', '');

-- --------------------------------------------------------

--
-- Table structure for table `tulis`
--

CREATE TABLE `tulis` (
  `id_tulis` int(10) NOT NULL,
  `kode_tulis` varchar(100) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `audio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tulis`
--

INSERT INTO `tulis` (`id_tulis`, `kode_tulis`, `judul`, `keterangan`, `foto`, `audio`) VALUES
(1, '07', 'Menulis huruf', 'Huruf C', 'c.mp4', ''),
(2, '09', 'Menulis angka', 'Angka 1', '0.mp4', 'REC20180310212758.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(3, 'admin', 'administrator', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membaca`
--
ALTER TABLE `membaca`
  ADD PRIMARY KEY (`id_baca`);

--
-- Indexes for table `tulis`
--
ALTER TABLE `tulis`
  ADD PRIMARY KEY (`id_tulis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membaca`
--
ALTER TABLE `membaca`
  MODIFY `id_baca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tulis`
--
ALTER TABLE `tulis`
  MODIFY `id_tulis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
