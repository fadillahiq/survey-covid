-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 08:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `id_result` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `point` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`id_result`, `nama`, `point`, `status`) VALUES
(1, 'Muhamad Iqbal Fadilah', '1', 'Rendah'),
(6, 'Array', '14', 'Sedang'),
(7, 'Array', '1', 'Rendah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(26, 'Saya tidak minum air hangat & cuci tangan dengan sabun ketika sampai ke tujuan\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(27, 'Saya berjabat tangan dengan orang lain\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(28, 'Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(29, 'Saya menyentuh benda / uang yang juga disentuh orang lain.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(30, 'Saya tidak memakai masker pada saat berkumpul dengan orang lain\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(31, 'Saya berada di wilayah kelurahan tempat pasien tertular.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(32, 'Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(33, 'Saya makan diluar rumah (warung / restaurant)\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(34, 'Saya Pergi Keluar Rumah\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(35, 'Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(36, 'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(37, 'Saya tidak menyediakan : tissue basah / antiseptic , masker, sabun antiseptic bagi keluarga di rumah.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(38, 'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk membersihkan tangan sebelum pegang gagang(handle) pintu rumah masuk.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(39, 'Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas/sabun\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(40, 'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(41, 'Saya tidak segera mandi & keramas setelah saya tiba di rumah.\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(42, 'Saya jarang minum vitamin C & E, dan kurang tidur\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(43, 'Saya tidak jalan kaki / olahraga minimal 30 menit setiap hari\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(44, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(45, 'Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y'),
(46, 'Usia saya diatas 60 tahun\r\n', 'Ya', 'Tidak', 'a', '', '2020-04-14', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `password`) VALUES
(12317, 'Iqbal Fadilah', 'laku0505@gmail.com', 'nanas'),
(12318, 'Marcella Felicia', 'marcellafelicia@gmail.com', 'ifeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`id_result`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12319;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
