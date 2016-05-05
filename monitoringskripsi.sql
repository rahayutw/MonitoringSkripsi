-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 08:10 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitoringskripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE IF NOT EXISTS `bimbingan` (
  `idSkripsi` int(10) NOT NULL,
  `NIK` int(15) NOT NULL,
  `subjek` text NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `persetujuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIK` int(15) NOT NULL,
  `IdKBK` int(10) NOT NULL,
  `nama_dosen` text NOT NULL,
  `password_dosen` varchar(15) NOT NULL,
  `alamatDosen` varchar(60) NOT NULL,
  `tlpnDosen` int(15) NOT NULL,
  `emailDosen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `id_skripsi`
--

CREATE TABLE IF NOT EXISTS `id_skripsi` (
  `id_skripsi` int(10) NOT NULL,
  `id_kbk` int(10) NOT NULL,
  `judul` text NOT NULL,
  `nim` int(15) NOT NULL,
  `tglTopik` int(10) NOT NULL,
  `tglProposal` int(10) NOT NULL,
  `tglSkripsi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `idJabatan` int(10) NOT NULL,
  `namaJabatan` varchar(20) NOT NULL,
  `NIK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kbk`
--

CREATE TABLE IF NOT EXISTS `kbk` (
  `IdKBK` int(10) NOT NULL,
  `namaKBK` varchar(10) NOT NULL,
  `NIK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE IF NOT EXISTS `kuota` (
  `tahunAjar` int(10) NOT NULL,
  `kuota` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `Nama_Mahasiswa` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `Tlpn` int(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`idSkripsi`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indexes for table `kbk`
--
ALTER TABLE `kbk`
  ADD PRIMARY KEY (`IdKBK`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
