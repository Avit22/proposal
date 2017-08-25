-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 10:13 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proposal`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
`id_laporan` int(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_pjk` varchar(255) NOT NULL,
  `rincian_kegiatan` varchar(255) NOT NULL,
  `rincian_biaya` varchar(255) NOT NULL,
  `bukti_biaya` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `judul`, `nama_pjk`, `rincian_kegiatan`, `rincian_biaya`, `bukti_biaya`, `tgl_input`) VALUES
(1, 'a', 'Avit Wisnu Prananda', 'a', 'a', 'a', '2017-05-03'),
(2, 'aaaa', 'Wisnu', 'aaa', 'aaaa', 'aaaa', '2017-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
`id_proposal` int(25) NOT NULL,
  `jenis_proposal` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `nama_pjk` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `pendahuluan` text NOT NULL,
  `dasar_hukum` text NOT NULL,
  `keluaran` text NOT NULL,
  `rab` text NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tempat` text NOT NULL,
  `penutup` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `jenis_proposal`, `tgl_input`, `nama_pjk`, `judul`, `pendahuluan`, `dasar_hukum`, `keluaran`, `rab`, `tgl_pelaksanaan`, `tempat`, `penutup`) VALUES
(1, '2', '2017-05-03', 'n', 'n', 'n', 'n', '', 'n', '0000-00-00', '', ''),
(2, '1', '2017-05-03', 'aaa', 'j', 'J', 'J', '', 'J', '0000-00-00', '', 'J'),
(3, '1', '2017-05-03', 'a', 'a', 'a', 'a', '', 'a', '0000-00-00', '', 'a'),
(4, '2', '2017-05-03', 'Avit Wisnu Prananda', 'Proposal Kegiatan Lomba Futsal', 'AAAA', 'AAAA', '', 'AAAA', '0000-00-00', '', 'AAAA'),
(5, '3', '2017-05-03', 'Avit Wisnu Prananda', 'Proposal Lomba Voli', 'aaa', 'aaa', '', 'aaa', '0000-00-00', '', 'aaa'),
(6, '3', '2017-05-03', 'Avit Wisnu Prananda', 'Proposal Lomba Basket', 'aaa', 'aaa', '', 'aaa', '0000-00-00', '', 'aaaa'),
(7, '3', '2017-05-03', 'Avit Wisnu Prananda', 'Proposal Lomba Basket', 'aaa', 'aaa', '', 'aaa', '0000-00-00', '', 'aaaa'),
(8, '3', '2017-05-08', 'Wisnu', 'aaaa', 'aaaa', 'aaaa', '', 'aaa', '0000-00-00', '', 'aaa'),
(9, '1', '2017-05-08', 'sss', 'sss', 'sss', 'sss', '', 'sss', '0000-00-00', '', 'sss'),
(10, '1', '2017-05-08', 'sss', 'sss', 'sss', 'sss', '', 'sss', '0000-00-00', '', 'sss'),
(11, '2', '2017-05-08', 'qqq', 'qqq', 'qqq', 'qqq', '', 'qqq', '0000-00-00', '', 'qqq'),
(12, '2', '2017-05-08', 'qqq', 'qqq', 'qqq', 'qqq', '', 'qqq', '0000-00-00', '', 'qqq'),
(13, '1', '2017-05-09', 'Prananda', 'Proposal Lomba Catur ', 'aaa', 'aaa', '', 'aaa', '0000-00-00', '', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `tingkatan`
--

CREATE TABLE IF NOT EXISTS `tingkatan` (
`id_tingkatan` int(20) NOT NULL,
  `nama_tingkatan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkatan`
--

INSERT INTO `tingkatan` (`id_tingkatan`, `nama_tingkatan`) VALUES
(1, 'admin'),
(2, 'pjk'),
(3, 'wd1'),
(4, 'wd2'),
(5, 'wd3'),
(6, 'kabag_tu'),
(7, 'kabag_akun'),
(8, 'kabag_keu'),
(9, 'bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `tingkatan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `tingkatan`) VALUES
(1, 'I Made Sudana', 'wd1', '7df782b10a945d8ff6a4e83f22a11b03', 'wd1'),
(2, 'Sucipto', 'wd2', 'd5a09a7f1a424d040c110a0bca8546de', 'wd2'),
(3, 'Wirawan Sumbodo', 'wd3', 'b9d466a4611110624187e87a699bedda', 'wd3'),
(4, 'Widi Widayat', 'kabag_tu', '25ff0568fe053e492ca3e73aece9d53a', 'kabag_tu'),
(5, 'Mardiyantoro', 'kabag_akun', '9c15f3f270b3c8fc46d09a742dcfb380', 'kabag_akun'),
(6, 'Antonius Bangun Hadi', 'kabag_keu', '8e93cd81aee5aa42bf0783d8fafe8d94', 'kabag_keu'),
(7, 'Bendahara', 'bendahara', 'c9ccd7f3c1145515a9d3f7415d5bcbea', 'bendahara'),
(8, 'Nur Qudus', 'dekan', '3da2f457ad7c0edf1c94e1ea87b0818d', 'dekan'),
(9, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(10, 'Avit Wisnu Prananda', 'avit22', '1b1fa0fb65ab53aec17640933dfff39e', 'pjk'),
(11, 'Yanuar Ibnu Sabila', 'yanuar22', '39edfc1599118a1b2647ab8fcbf089dd', 'pjk');

-- --------------------------------------------------------

--
-- Table structure for table `wd`
--

CREATE TABLE IF NOT EXISTS `wd` (
`id_wd` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `urusan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wd`
--

INSERT INTO `wd` (`id_wd`, `nama`, `urusan`) VALUES
(1, 'Dr. I Made Sudana, M.Pd.', 'Akademik'),
(2, 'Drs. Sucipto, M.T.', 'Umum'),
(3, 'Dr. Wirawan Sumbodo, M.T', 'Kemahasiswaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
 ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
 ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tingkatan`
--
ALTER TABLE `tingkatan`
 ADD PRIMARY KEY (`id_tingkatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wd`
--
ALTER TABLE `wd`
 ADD PRIMARY KEY (`id_wd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
MODIFY `id_laporan` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
MODIFY `id_proposal` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tingkatan`
--
ALTER TABLE `tingkatan`
MODIFY `id_tingkatan` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `wd`
--
ALTER TABLE `wd`
MODIFY `id_wd` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
