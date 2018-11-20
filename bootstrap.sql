-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 12:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootstrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
--

CREATE TABLE `dataguru` (
  `NIP` bigint(12) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Mengajar` varchar(10) NOT NULL,
  `Golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataguru`
--

INSERT INTO `dataguru` (`NIP`, `Nama`, `Mengajar`, `Golongan`) VALUES
(123456789, 'Apung Nadly', 'IPA', '3A');

-- --------------------------------------------------------

--
-- Table structure for table `datatu`
--

CREATE TABLE `datatu` (
  `NIP` int(12) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `GOLONGAN` varchar(5) NOT NULL,
  `JABATAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatu`
--

INSERT INTO `datatu` (`NIP`, `NAMA`, `GOLONGAN`, `JABATAN`) VALUES
(35434564, 'Bimo Aji', '3B', 'Sekretaris'),
(123456789, 'Dzaky Dhimast', '3A', 'Bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(21, '2018-11-20', 'arimbianjing.docx', 14297, 'docx'),
(22, '2018-11-20', '203187_Form_Pengajuan_Judul_Tugas_Besar_df057c0a658e155aad486450a02be6b4.doc', 108544, 'doc'),
(23, '2018-11-20', 'krs14116041_5.pdf', 551744, 'pdf'),
(24, '2018-11-20', '113648_Lembar_Tulis__1_.docx', 14564, 'docx'),
(25, '2018-11-20', '442144_nametag.docx', 27454, 'docx'),
(26, '2018-11-20', '10-Soal_solusi_Gelombang_EM-edit.docx', 804839, 'docx'),
(27, '2018-11-20', '1142581_DAFTAR_ANGGOTA_ACARA_SWARNAFEST_2018.docx', 13219, 'docx'),
(28, '2018-11-20', '722760_02_RE_REVAARYAANDANU_13116012_AHMADTHARIQ.doc', 325120, 'doc'),
(29, '2018-11-20', 'arimbianjing.docx', 14297, 'docx'),
(30, '2018-11-20', '29038_Surat_Pernyataan_Peserta.docx', 16775, 'docx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'AdminDzaky', 'admindzaky', 'ae2dfda9fff23ae02f74cb4058c1febd', 'admin'),
(2, 'AdminBimo', 'adminbimo', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(3, 'AdminIchsan', 'adminichsan', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(4, 'coba', 'coba', '25d55ad283aa400af464c76d713c07ad', 'member'),
(5, 'meiji', 'meijiaja', '5c3ffe3b4ee3bad2d967a4a3705423c1', 'member'),
(10, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataguru`
--
ALTER TABLE `dataguru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `datatu`
--
ALTER TABLE `datatu`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
