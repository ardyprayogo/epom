-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:26 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgllhr` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `almt` varchar(75) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `tgllhr`, `email`, `password`, `jk`, `almt`, `notelp`) VALUES
('admin1', 'ardy prayogo', '1995-08-09', 'ardy.prayogo@yahoo.com', '21232f297a57a5a743894a0e4a801fc3', 'l', 'jakarta selatan', '089625566281'),
('admin2', 'administrator', '2018-06-07', 'administrator@mail.com', '21232f297a57a5a743894a0e4a801fc3', 'l', 'jakarta', '123');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` varchar(3) NOT NULL,
  `kriteria` varchar(15) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `bobot`) VALUES
('c1', 'pedagogik', 0.3),
('c2', 'kepribadian', 0.2),
('c3', 'sosial', 0.2),
('c4', 'profesional', 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `id_murid` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgllhr` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `almt` varchar(75) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `nama`, `tgllhr`, `email`, `password`, `jk`, `agama`, `almt`, `tingkat`, `notelp`) VALUES
(1, 'dafha ardana', '2003-06-05', 'ponorogo@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jk1', 'smp-9', '123456'),
(2, 'Faisal Hasan', '2003-06-07', 'mail@mgil.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'smp-9', '11234321'),
(3, 'ghina soraya', '2002-12-31', 'example@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jkt', 'smp-9', '1234'),
(4, 'm. azka hermawan', '2000-06-15', 'aaa@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta', 'sma-12', '1234567'),
(6, 'indra', '2000-12-07', 'test@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jl. test', 'sma-12', '123'),
(7, 'heru prasetyo', '2002-04-21', 'alma@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta', 'sma-12', '12345678'),
(8, 'putri huda', '2001-02-19', 'putri@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-12', '087812312345'),
(9, 'hestiyawati', '2001-02-23', 'hesti@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta barat', 'sma-12', '0812334556112'),
(10, 'heru prasetio', '2018-07-19', 'test@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta', 'smp-9', '123'),
(11, 'hermawan', '2004-08-12', 'hermanto@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(12, 'cahya lestari', '2004-08-09', 'cahya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '123'),
(13, 'aprilia ningsih', '2018-09-03', 'april@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '123'),
(14, 'faisal akbar', '2018-04-10', 'fiasal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(15, 'anto seftiadi', '2018-08-29', 'anto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '123'),
(16, 'ery sediati', '2018-09-06', 'eryst@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(17, 'prasetyo putra', '2018-09-04', 'putra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(18, 'ardy', '2018-09-12', 'ardy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(19, 'bayu santoso', '2018-09-04', 'bayu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(20, 'irfan nur hidayat', '2018-09-04', 'irfan2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(21, 'setia nuraini', '2018-08-27', '1221@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(22, 'arie setiadi', '2018-09-05', 'arie@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(23, 'dani ariyanto', '2018-08-26', 'dani@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(24, 'putri wardani', '2018-09-04', 'putri@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '111'),
(25, 'nadia utami', '2018-09-15', 'nadia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(26, 'wita juliati', '2018-09-06', 'wita@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(27, 'yulia komalasari', '2018-08-29', 'komalasari@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'l', 'islam', 'jakarta selatan', 'sma-11', '1234'),
(28, 'sukma ekanur', '2018-08-26', 'eka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'p', 'islam', 'jakarta selatan', 'sma-11', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `pedagogik` double NOT NULL,
  `kepribadian` double NOT NULL,
  `sosial` double NOT NULL,
  `profesional` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `tgl`, `id_murid`, `id_pengajar`, `pedagogik`, `kepribadian`, `sosial`, `profesional`) VALUES
(1, '2018-09-16', 1, 10, 4, 5, 4, 3),
(2, '2018-09-10', 2, 10, 5, 4, 4, 4),
(3, '2018-09-04', 3, 10, 5, 1, 3, 5),
(4, '2018-09-10', 1, 20, 4, 4, 4, 3),
(5, '2018-09-10', 2, 20, 5, 5, 2, 4),
(6, '2018-09-10', 3, 20, 3, 5, 4, 5),
(7, '2018-09-10', 3, 20, 3, 5, 4, 5),
(8, '2018-07-02', 6, 10, 4.5, 4.25, 4.5, 4.75),
(9, '2018-07-02', 6, 31, 4.5, 4.25, 4.5, 4.75),
(10, '2018-07-02', 6, 21, 4, 4.25, 4, 4.5),
(11, '2018-07-02', 6, 30, 2.75, 2.75, 2.75, 3.5),
(12, '2018-07-02', 6, 32, 3.25, 3.75, 3.5, 3.75),
(13, '2018-09-16', 1, 21, 3.25, 3.5, 3.75, 4.5),
(14, '2018-09-16', 1, 22, 4.5, 4.5, 4, 4.25),
(15, '2018-09-16', 1, 23, 4.25, 4.25, 3.75, 4.25),
(16, '2018-09-16', 1, 28, 4, 4.75, 4.5, 4.5),
(17, '2018-09-16', 1, 30, 4.25, 4.75, 4.25, 4.5),
(18, '2018-09-16', 1, 31, 4.5, 4.25, 4, 4),
(19, '2018-09-16', 1, 32, 4, 3.75, 4.5, 4.75),
(20, '2018-09-16', 2, 21, 3.75, 4.25, 4.25, 4.25),
(21, '2018-09-16', 2, 22, 4.25, 4.25, 4.5, 4.5),
(22, '2018-09-16', 2, 23, 4.5, 3.75, 4.25, 4.5),
(23, '2018-09-16', 2, 23, 4.25, 4, 3.75, 4),
(24, '2018-09-16', 2, 28, 3.75, 4, 4, 4.5),
(25, '2018-09-16', 2, 30, 4.25, 4.75, 3.5, 4.25),
(26, '2018-09-16', 2, 31, 4, 4.5, 4.5, 4.5),
(27, '2018-09-16', 3, 21, 3.5, 4, 3.75, 3.75),
(28, '2018-09-16', 3, 22, 4.25, 4.25, 4.25, 4.25),
(29, '2018-09-16', 3, 23, 4.25, 4, 4.25, 4.25),
(30, '2018-09-16', 3, 28, 4, 4, 4.25, 4.25),
(31, '2018-09-16', 3, 30, 4.25, 3.75, 4.25, 4),
(32, '2018-09-16', 3, 31, 4.25, 4.25, 4.25, 4.25),
(33, '2018-09-16', 3, 32, 4.25, 4.25, 4.25, 4.5),
(34, '2018-09-16', 4, 10, 4, 4.25, 4.25, 4.25),
(35, '2018-09-16', 4, 20, 4.25, 4.5, 4.5, 4.25),
(36, '2018-09-16', 4, 21, 4.25, 4.75, 4.75, 4.5),
(37, '2018-09-16', 4, 22, 4.25, 4.25, 4, 4.5),
(38, '2018-09-16', 4, 23, 4, 4.5, 4.25, 3.75),
(39, '2018-09-16', 4, 28, 4.25, 4.5, 4, 4.25),
(40, '2018-09-16', 4, 30, 4.25, 4.25, 4.5, 4),
(41, '2018-09-16', 4, 31, 4, 4.75, 4, 4.25),
(42, '2018-09-16', 4, 32, 4, 4.25, 4.5, 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE IF NOT EXISTS `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgllhr` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `almt` varchar(75) NOT NULL,
  `pendidikan` varchar(5) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama`, `tgllhr`, `email`, `jk`, `agama`, `almt`, `pendidikan`, `notelp`) VALUES
(10, 'hermanto', '1990-08-12', 'test@gmail.com', 'l', 'islam', 'jalan jatayu', 's1', '123'),
(20, 'arie septiawan', '1985-05-12', 'arie@yahoo.com', 'l', 'islam', 'asd', 's1', '11'),
(21, 'ade saputra', '1992-05-29', 'ade@yahoo.com', 'l', 'islam', 'asd', 's1', '12'),
(22, 'riska maulidya', '1990-01-12', 'ardy.prayogo@yahoo.com', 'p', 'islam', 'asd', 's1', '12'),
(23, 'annisa', '1992-12-23', 'ardy.prayogo@yahoo.com', 'l', 'islam', 'asd', 's1', '12'),
(28, 'novi ulfah', '2018-05-01', 'hermanjakarta@mail.com', 'p', 'islam', 'jakarta selatan', 's1', '123'),
(30, 'putri zamania', '2008-12-28', 'surtono@mail.com', 'p', 'islam', 'jakarta selatan', 's2', '1234'),
(31, 'panji gunawan', '2018-05-31', '123123@gmail.com', 'l', 'islam', 'sdasd', 's1', '1234'),
(32, 'zahra komalasari', '1995-06-01', 'zhr4@gmail.com', 'p', 'islam', 'jakarta barat', 's1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE IF NOT EXISTS `subkriteria` (
  `id_sub` int(11) NOT NULL,
  `id_kriteria` varchar(3) NOT NULL,
  `sub` varchar(25) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_sub`, `id_kriteria`, `sub`, `ket`) VALUES
(1, 'c1', 'kesiapan', 'Kakak pengajar selalu menyiapkan materi dengan tepat saat proses belajar di kelas.'),
(2, 'c1', 'ketertiban', 'Ketertiban kelas saat kakak pengajar melaksanakan kegiatan belajar mengajar.'),
(3, 'c1', 'lebih hidup', 'Kakak pengajar membuat kelas menjadi lebih hidup saat kegiatan belajar.'),
(4, 'c1', 'pemanfaatan media', 'Kakak pengajar selalu memanfaatkan media dan teknologi yang tersedia pada kelas.'),
(5, 'c2', 'wibawa', 'Kakak pengajar terlihat berwibawa.'),
(6, 'c2', 'pengambilan keputusan', 'Kakak pengajar mampu mengambil keputusan dengan tepat.'),
(7, 'c2', 'sikap perilaku', 'Sikap dan perilaku kaka pengajar.'),
(8, 'c2', 'pengendalian diri', 'Kakak pengajar tidak mudah marah saat kelas sedang gaduh.'),
(9, 'c3', 'penyampaian pendapat', 'Dalam menyampaikan pendapat kakak pengajar sangat membantu.'),
(10, 'c3', 'penerimaan saran', 'Kakak pengajar dapat menerima saran dan kritik dari saya.'),
(11, 'c3', 'toleransi', 'Kakak pengajar memiliki toleransi tinggi.'),
(12, 'c4', 'pemahaman materi', 'Kakak pengajar memahami materi yang diajarkan.'),
(13, 'c4', 'pemberian contoh', 'Dalam memberikan contoh pelajaran, kakak pengajar sangat jelas.'),
(14, 'c4', 'peneguran', 'kakak pengajar menegur saya jika ada sesuatu yang salah terjadi pada saya.'),
(15, 'c4', 'motivasi', 'Kakak pengajar selalu memberi motivasi kepada saya.'),
(16, 'c3', 'pengenalan murid', 'Kakak pengajar mengenal seluruh muridnya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_murid` (`id_murid`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_murid`) REFERENCES `murid` (`id_murid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
