-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 01:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'IK', 'Ilmu Komputer'),
(2, 'EB', 'Ekonomi dan Bisnis'),
(3, 'KB', 'Komunikasi dan Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `nama_prodi` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_prodi`, `photo`) VALUES
(1, '12171353', 'Darmawan', 'Jakarta', 'darmawan@gmail.com', '02129553186', 'Jakarta', '2020-11-09', 'Laki-Laki', 'Sistem Informasi', 'Profile.jpg'),
(2, '12171355', 'Budi', 'Jakarta', 'budi@gmail.com', '0212986735', 'Bandung', '2020-11-10', 'Laki-Laki', 'Akutansi', 'IMG_20180702_202202.jpg'),
(12, '12171354', 'Dika', 'Bandung', 'dika@gmail.com', '02129553186', 'Jakarta', '2020-11-12', 'Laki-Laki', 'Sastra Inggris', 'CC_BCA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(10) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `nama_prodi`) VALUES
('MKK01', 'Algoritma dan Pemrograman Dasar', 3, 1, 'Sistem Informasi'),
('MKK02', 'Sistem Basis Data', 3, 2, 'Sistem Informasi'),
('MKU01', 'Pendidikan Pancasila', 2, 1, 'Akutansi'),
('MKU02', 'Pendidikan Akuntansi Dasar 1', 2, 4, 'Akutansi');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
(1, 'MI', 'Manajemen Informatika', 'Ilmu Komputer'),
(2, 'TI', 'Teknik Informatika', 'Ilmu Komputer'),
(3, 'AK', 'Akutansi', 'Ekonomi dan Bisnis'),
(4, 'IG', 'Sastra Inggris', 'Komunikasi dan Bahasa'),
(5, 'SI', 'Sistem Informasi', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn_akad` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_akad`, `tahun_akademik`, `semester`, `status`) VALUES
(1, '2018/2019', '1', 'Aktif'),
(2, '2018/2019', '2', 'Aktif'),
(3, '2019/2020', '1', 'Aktif'),
(4, '2019/2020', '2', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_sessions`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@sisfo-akademik.com', 'admin', 'N', ''),
(2, 'khori', '823697f98c0f734016c8a91ac59a6db9', 'khori.isti@gmail.com', 'admin', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_akad`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
