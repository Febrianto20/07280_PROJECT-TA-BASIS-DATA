-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 02:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(11) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `pw_dosen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `no_telp`, `email`, `pw_dosen`) VALUES
(501220, 'Rinci Kembang', '081233771422', 'rincikembang@gmail.com', 'rincikemba'),
(501221, 'Farida', '082233771818', 'farida@gmail.com', 'farida'),
(501222, 'Andy Rachman', '081233771418', 'andyrachman@gmail.com', 'andyrachma'),
(501223, 'Rani Rotul Muhima', '082133168909', 'ranirotul@gmail.com', 'ranirotul'),
(501224, 'Citra Nurina', '082133167012', 'citrajarkom@gmail.com', 'citranurin'),
(501225, 'Mujtaba Mitra', '089076981455', 'mitrakukar@gmail.com', 'mitramujta'),
(501226, 'M kurniawan', '081289774309', 'kurniawan@gmail.com', 'kurniawan'),
(501227, 'Wahyu Widodo', '083876008912', 'wahyuwidodo@gmail.com', 'wahyuwidod'),
(501228, 'Tutuk Indriyani', '089912345678', 'tutukindri@gmail.com', 'tutukindri'),
(501229, 'Nanang Rozi', '089912345687', 'nanangrozi@gmail.com', 'nanangrozi'),
(501230, 'Maftahul Hakimah', '081234569011', 'maftahulhakimah@gmail.com', 'maftahulha'),
(501231, 'Danang Haryo', '081234569000', 'danangharyo@gmail.com', 'dananghary'),
(501232, 'Hendro Nugroho', '081234569111', 'hendronugroho@gmail.com', 'hendronugr'),
(501233, 'Rahmi Rizkiana', '088812128788', 'rahmirizki@gmail.com', 'rahmirizki'),
(501234, 'Gusti Eka', '088812128799', 'gustieka@gmail.com', 'gustieka');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `kode_mk` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `npm` int(11) NOT NULL,
  `pw_mhs` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_nilai`, `kode_mk`, `nip`, `nama_mahasiswa`, `npm`, `pw_mhs`) VALUES
(1, 1, 13321, 501220, 'Febri', 7280, 'febri1'),
(2, 2, 13322, 501221, 'arza', 7281, 'arza1'),
(3, 3, 13323, 501222, 'amar', 7282, 'amar1'),
(4, 4, 13324, 501223, 'Hirdhan', 7283, 'hirdhan1'),
(5, 5, 13325, 501224, 'Rio', 7284, 'rio'),
(6, 6, 13326, 501225, 'Jonathan', 7285, 'jonathan1'),
(7, 7, 13327, 501226, 'azhar', 7288, 'azhar1'),
(8, 8, 13328, 501227, 'Fayi', 7287, 'fayi1'),
(9, 9, 13329, 501228, 'ridho', 7290, 'ridho1'),
(10, 10, 13330, 501229, 'raihan', 7286, 'raihan1'),
(11, 11, 13331, 501230, 'rachmad', 7293, 'rachmad1'),
(12, 12, 13332, 501231, 'abi', 7292, 'abi1'),
(13, 13, 13333, 501232, 'gilang', 7294, 'gilang1'),
(14, 14, 13334, 501233, 'rendy', 7295, 'rendy1'),
(15, 15, 13335, 501234, 'naufal', 7296, 'naufal1'),
(16, 16, 13335, 501234, 'sodik', 7297, 'sodik1');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_mk` int(11) NOT NULL,
  `jadwal` varchar(30) NOT NULL,
  `nama_mk` varchar(30) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_mk`, `jadwal`, `nama_mk`, `kelas`, `sks`) VALUES
(13321, 'Selasa,08:00', 'Matematika', 'F-', 3),
(13322, 'Rabu,08:00', 'Pemrograman Terstruktur', 'P3', 3),
(13323, 'Rabu,10:50', 'Struktur Data', 'P1', 3),
(13324, 'Kamis,14:00', 'Bahasa Inggris', 'P', 3),
(13325, 'Kamis,08:00', 'Otomata', 'P', 3),
(13326, 'Kamis,10:50', 'Basis Data', 'P1', 4),
(13327, 'Kamis,14:00', 'Rekayasa Perangkat Lunak', 'P', 3),
(13328, 'Jumat,08:00', 'Jaringan Komputer', 'P', 4),
(13329, 'Jumat,10:00', 'Pendidikan Agama Islam', 'P1', 3),
(13330, 'Senin,08:00', 'Pendidikan Kewarganegaraan', 'P', 3),
(13331, 'Senin,10:50', 'Kewirausahaan', 'P2', 3),
(13332, 'Senin,14:00', 'Pemrograman Terstruktur', 'P3', 4),
(13333, 'Jumat,14:20', 'Pendidikan Pancasila', 'P', 3),
(13334, 'Selasa,14:20', 'Kecerdasan Buatan', 'P3', 3),
(13335, 'Kamis,10:00', 'Komputasi Numerik', 'P3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nts` int(11) NOT NULL,
  `nas` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nts`, `nas`, `total`) VALUES
(1, 80, 80, 80),
(2, 80, 90, 85),
(3, 70, 70, 70),
(4, 90, 90, 90),
(5, 86, 86, 86),
(6, 89, 89, 89),
(7, 79, 79, 79),
(8, 85, 75, 80),
(9, 75, 75, 75),
(10, 60, 70, 65),
(11, 60, 80, 70),
(12, 60, 80, 70),
(13, 80, 80, 80),
(14, 80, 90, 85),
(15, 75, 85, 80),
(17, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin'),
(1, 'Administrator', 'admin', 'admin'),
(1, 'Administrator', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `idx_nilai` (`id_nilai`),
  ADD KEY `idx_mk` (`kode_mk`),
  ADD KEY `idx_nip` (`nip`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121214;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `kode_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133212;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
