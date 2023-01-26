-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 03:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pklconnectis`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `level` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `fullname`, `level`) VALUES
('1', 'admin', 'ed989d2e7afc762fd6f4176bef38eabf', 'admin1', 'admin'),
('2', 'rafif', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'rafifoperator', 'operator'),
('3', 'muhammad', '25d55ad283aa400af464c76d713c07ad', 'muhammad', 'admin'),
('4', 'Sidiq', 'b264cdaef0e7160bc69660c2f3a74643', 'Sidiq Unyu', 'admin'),
('5', 'Azis', '85c6bf0cee389b8e1812faed6b69a238', 'Abdul Azis', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaiantkj`
--

CREATE TABLE `pencapaiantkj` (
  `id` char(10) NOT NULL,
  `pencapaian` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `id` char(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `foto` blob NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `mulai_pkl` date NOT NULL,
  `selesai_pkl` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkl`
--

INSERT INTO `pkl` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `email`, `telepon`, `wa`, `foto`, `asal_sekolah`, `jurusan`, `mulai_pkl`, `selesai_pkl`, `username`, `password`, `level`) VALUES
('K001', 'Rafif', 'Karanganyar', '2001-09-25', 'laki-laki', 'islam', 'Jl.VonDerBosch#Krangean#01#02#Nglebak#Tawangmangu#Karanganyar', 'Rafifhabibillah@gmail.com', '0895355671056', '0895355671056', 0x3033303432303138303433383035494d472d32303137303831382d5741303030372e6a7067, 'SMKN 2 KARANGANYAR', 'RPL', '2018-02-19', '2018-04-12', 'Rafif', 'd56b699830e77ba53855679cb1d252da', 'siswa'),
('K002', 'Muhammad Sidiq Al Aziz', 'Karanganyar', '2001-09-09', 'laki-laki', 'islam', 'jl bunga no 12#Munggur#02#02#Munggur#Mojogedang#Karanganyar', 'Muhammadsidiqalaziz@gmail.com', '0816244556575', '0816244556575', 0x3239303332303138303932373536466f746f303237382d312e6a7067, 'SMKN 2 KARANGANYAR', 'RPL', '2018-01-15', '2018-04-12', 'sidiq', '9c51d2a1fac7deab665b77ae1c5fc39c', 'siswa'),
('K003', 'Abdul Aziz', 'Washington DC', '2001-03-25', 'laki-laki', 'islam', 'Jl Slamet Riyadi No 12#Washington DC#01#02#Jirapan#Masaran#Sragen', 'Encisunyu@gmail.com', '08123456789', '08123456789', 0x32393033323031383039333231366a2e6a7067, 'SMKN 2 KARANGANYAR', 'RPL', '2018-01-15', '2018-04-12', 'Encis', 'f589bc5054964277204c4850b87d267e', 'siswa'),
('K004', 'Ahmad MIke Jordan Hamilton', 'Karanganyar', '2001-01-01', 'laki-laki', 'islam', 'jl bunga no 10#pereng#01#04#pereng#Mojogedang#Karanganyar', 'aziz@gmail.com', '089465644547', '089465644547', 0x3239303332303138303933343137426163686172756464696e5f4a757375665f486162696269652e6a7067, 'SMKN 3 KARANGANYAR', 'TKJ', '2018-01-12', '2018-04-12', 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', 'siswa'),
('K005', 'Muhammad Rafif Habibillah', 'Karanganyar', '2001-09-25', 'laki-laki', 'islam', 'Qwerty#Krangean#01#02#Nglebak#Tawangmangu#Karanganyar', 'rafiefhabibillah354@gmail.com', '0895355671056', '0895355671056', 0x3239303332303138303933383037494d472d32303137303831382d5741303030372e6a7067, 'SMKN 3 KARANGANYAR', 'RPL', '2018-01-12', '2018-04-15', 'Habibillah', '91a47ceb597e7e6f65335dbb063c26c2', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `silabustkj`
--

CREATE TABLE `silabustkj` (
  `id_silabus` varchar(15) NOT NULL,
  `silabus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silabustkj`
--

INSERT INTO `silabustkj` (`id_silabus`, `silabus`) VALUES
('S001', 'Bridge (PTP/PTMP)'),
('S002', 'Router Internet / DHCP Server'),
('S003', 'SXT / Hap Lite'),
('S004', 'CCTV Online ( Lokal / Serial Number )'),
('S005', 'WEB Proxy Mikrotik'),
('S006', 'IP Forwading'),
('S007', 'Hotspot Login'),
('S008', 'Bandwith Limiter'),
('S009', 'Instalasi Linux'),
('S010', 'DNS Server'),
('S011', 'Web Server'),
('S012', 'File Server'),
('S013', 'Mail Server'),
('S014', 'Vole'),
('S015', 'Tools Jaringan'),
('S016', 'Pemasangan Out Door'),
('S017', 'Cabling'),
('S018', 'F.O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pkl`
--
ALTER TABLE `pkl`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
