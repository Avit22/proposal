-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 03:51 PM
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
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
`id_jurusan` int(11) NOT NULL,
  `nama_jurusan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Sipil'),
(2, 'Teknik Mesin'),
(3, 'Teknik Elektro'),
(4, 'Teknik Jasa dan Produksi'),
(5, 'Teknik Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
`id_laporan` int(25) NOT NULL,
  `id_user` int(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_pjk` varchar(255) NOT NULL,
  `rincian_kegiatan` varchar(255) NOT NULL,
  `rincian_biaya` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `file1` varchar(100) NOT NULL,
  `file2` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_user`, `judul`, `nama_pjk`, `rincian_kegiatan`, `rincian_biaya`, `tgl_input`, `file1`, `file2`) VALUES
(1, 0, 'a', 'A', 'A', 'A', '2017-09-05', 'empty.jpg', ''),
(2, 0, 'ww', 'ww', 'ww', 'ww', '2017-09-05', 'api.JPG', ''),
(3, 0, 'oo', 'oo', 'oo', 'oo', '2017-09-05', 'beckham-today-heat_3193019k.jpg', ''),
(4, 0, 'm', 'm', 'm', 'm', '2017-09-05', '12_Saha_etal.pdf', ''),
(5, 0, 'adi', 'adi', 'adi', 'adi', '2017-09-05', 'empty.jpg', ''),
(6, 0, 'mm', 'mm', 'mm', 'mm', '2017-09-05', 'rosi.jpg', ''),
(7, 0, 'kk', 'kk', 'kk', 'kk', '2017-09-05', 'kartun_copy.jpg', ''),
(8, 0, 'pp', 'pp', 'pp', 'pp', '2017-09-05', 'Chrysanthemum.jpg', ''),
(9, 0, 'll', 'll', 'll', 'll', '2017-09-05', 'Desert.jpg', ''),
(10, 0, 'nn', 'nn', 'nn', 'nn', '2017-09-05', 'Hydrangeas.jpg', ''),
(11, 0, 'bb', 'bb', 'bb', 'bb', '2017-09-05', 'Jellyfish.jpg', ''),
(12, 0, 'vv', 'vv', 'vv', 'vv', '2017-09-05', 'Koala.jpg', ''),
(13, 0, 'hh', 'hh', 'hh', 'hh', '2017-09-05', 'Lighthouse.jpg', ''),
(14, 0, 'jj', 'jj', 'jj', 'jj', '2017-09-05', 'Penguins.jpg', ''),
(15, 0, 'gg', 'gg', 'gg', 'gg', '2017-09-05', 'Tulips.jpg', ''),
(16, 0, 'ff', 'ff', 'ff', 'ff', '2017-09-05', 'ar.jpg', ''),
(17, 0, 'cc', 'cc', 'cc', 'cc', '2017-09-05', '6__Gua_lawa.jpg', ''),
(18, 0, 'xx', 'xx', 'xx', 'xx', '2017-09-05', '579594_454045107955789_999464498_n.jpg', ''),
(19, 0, 'uu', 'uu', 'uu', 'uu', '2017-09-05', '1111.jpg', ''),
(20, 0, 'uu', 'uu', 'uu', 'uu', '2017-09-05', '11111.jpg', ''),
(21, 0, 'dd', 'dd', 'dd', 'dd', '2017-09-05', 'beck_copy.jpg', ''),
(22, 0, 'yy', 'yy', 'yy', 'yy', '2017-09-05', 'coloring.jpg', ''),
(23, 0, 'ee', 'ee', 'ee', 'ee', '2017-09-05', 'fire_stock_pack_by_malleni_stock-d7qbf9g.jpg', ''),
(24, 0, 'jk', 'jk', 'jk', 'jk', '2017-09-05', 'hulk1.jpg', ''),
(25, 0, 'kl', 'kl', 'kl', 'kl', '2017-09-05', 'logo-a-tna-600x315.jpg', ''),
(26, 0, 'ko', 'ko', 'ko', 'ko', '2017-09-06', 'paper-texture.jpg', ''),
(27, 0, 'ok', 'ok', 'ok', 'ok', '2017-09-06', '50.pdf', ''),
(28, 0, 'kk', 'kk', 'kk', 'kk', '2017-09-06', '18.jpg', ''),
(29, 0, 'mn', 'mn', 'mn', 'mn', '2017-09-06', '35.pdf', ''),
(30, 31, 'bm', 'bm', 'bm', 'bm', '2017-09-06', 'jembatan-keren-windows-8.jpg', ''),
(31, 33, 'kp', 'kp', 'kp', 'kp', '2017-09-06', 'Chrysanthemum1.jpg', ''),
(32, 34, 'bb', 'bb', 'bb', 'bb', '2017-09-06', 'Desert1.jpg', ''),
(33, 32, 'bj', 'bj', 'bj', 'bj', '2017-09-06', 'Hydrangeas1.jpg', ''),
(34, 35, 'BB', 'BB', 'BB', 'BB', '2017-09-06', 'Jellyfish1.jpg', ''),
(35, 47, 'kp', 'kp', 'kp', 'kp', '2017-09-06', 'Koala1.jpg', ''),
(36, 46, 'bj', 'bj', 'bj', 'bj', '2017-09-06', 'Lighthouse1.jpg', ''),
(37, 48, 'cn', 'cn', 'cn', 'cn', '2017-09-06', 'Penguins1.jpg', ''),
(38, 45, 'jk', 'jk', 'jk', 'jk', '2017-09-06', 'Tulips1.jpg', ''),
(39, 36, 'pi', 'pi', 'pi', 'pi', '2017-09-06', '01007107.jpg', ''),
(40, 42, 'pl', 'pl', 'pl', 'pl', '2017-09-06', '01009791.jpg', ''),
(41, 43, 'kk', 'kk', 'kk', 'kk', '2017-09-06', '01009809.jpg', ''),
(42, 39, 'lp', 'lp', 'lp', 'lp', '2017-09-06', '01013540.jpg', ''),
(43, 40, 'kl', 'kl', 'kl', 'kl', '2017-09-06', '01019373.jpg', ''),
(44, 38, 'jl', 'jl', 'jl', 'jl', '2017-09-06', '01024482.jpg', ''),
(45, 44, 'bk', 'bk', 'bk', 'bk', '2017-09-06', '01024519.jpg', ''),
(46, 49, 'jj', 'jj', 'jj', 'jj', '2017-09-06', '01025559.jpg', ''),
(47, 41, 'tm', 'tm', 'tm', 'tm', '2017-09-06', '01035090.jpg', ''),
(48, 37, 'ts', 'ts', 'ts', 'ts', '2017-09-06', '01035228.jpg', ''),
(49, 10, 'pjk', 'pjk', 'pjk', 'pjk', '2017-09-06', '01035558.jpg', ''),
(50, 31, 'mm', 'mm', 'mm', 'mm', '2017-09-06', '01040412.jpg', ''),
(53, 10, 'c', 'c', 'c', 'c', '2017-09-09', '010071071.jpg', ''),
(60, 10, 'q', 'q', 'q', 'q', '2017-09-09', '131022458.jpg', ''),
(61, 10, 'coba', 'coba', 'a', 'a', '2017-09-09', '010071072.jpg', ''),
(62, 31, 'z', 'z', 'a', 'a', '2017-09-09', '491037227.jpg', ''),
(63, 33, 'w', 'w', 'a', 'a', '2017-09-09', '321030898.jpg', ''),
(64, 34, 'as', 'as', 'as', 'as', '2017-09-09', '161017212.jpg', ''),
(65, 32, 'oo', 'oo', 'gg', 'gg', '2017-09-09', '241014689.jpg', ''),
(66, 35, 'pp', 'pp', 'a', 'a', '2017-09-09', '241035352.jpg', ''),
(67, 47, 'd', 'd', 'aa', 'a', '2017-09-09', '481010571.jpg', ''),
(68, 46, 'c', 'c', 'c', 'c', '2017-09-09', '191037080.jpg', ''),
(69, 48, 'kk', 'kk', 'm', 'm', '2017-09-09', '31023210.jpg', ''),
(70, 45, 'mm', 'mm', 'kk', 'kk', '2017-09-09', '71034793.jpg', ''),
(71, 36, 'gg', 'gg', 'nn', 'nn', '2017-09-09', '61010197.jpg', ''),
(72, 42, 'nn', 'nn', 'nn', 'nn', '2017-09-09', '010350901.jpg', ''),
(73, 43, 'jj', 'jj', 'mm', 'mm', '2017-09-09', '710347931.jpg', ''),
(74, 39, 'e', 'e', 'qq', 'qq', '2017-09-09', '131025400.jpg', ''),
(76, 40, 'ii', 'ii', 'll', 'll', '2017-09-09', '191029483.jpg', ''),
(77, 38, 'op', 'op', 'po', 'po', '2017-09-09', '381022400.jpg', ''),
(78, 44, 'uu', 'uu', 'vv', 'vv', '2017-09-09', '151026992.jpg', ''),
(79, 49, 'bb', 'bb', 'll', 'll', '2017-09-09', '221013376.jpg', ''),
(80, 41, 'rr', 'rr', 'kk', 'kk', '2017-09-09', '221023192.jpg', ''),
(81, 37, 'ee', 'ee', 'kk', 'k', '2017-09-09', '421040490.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id_prodi` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_prodi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_jurusan`, `nama_prodi`) VALUES
(1, 1, 'Pendidikan Teknik Bangunan'),
(2, 1, 'Teknik Sipil'),
(3, 1, 'Teknik Arsitektur'),
(4, 2, 'Pendidikan Teknik Mesin'),
(5, 2, 'Pendidikan Teknik Otomotif'),
(6, 2, 'Teknik Mesin'),
(7, 3, 'Pendidikan Teknik Elektro'),
(8, 3, 'Pendidikan Teknik Informatika dan Komputer'),
(9, 3, 'Teknik Elektro'),
(10, 4, 'Pendidikan Kesejahteraan Keluarga'),
(11, 4, 'Pendidikan Tata Busana'),
(12, 4, 'Pendidikan Tata Boga'),
(13, 4, 'Pendidikan Tata Kecantikan'),
(14, 5, 'Teknik Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
`id_proposal` int(25) NOT NULL,
  `jenis_proposal` varchar(255) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `nama_pjk` varchar(255) DEFAULT NULL,
  `jurusan` text NOT NULL,
  `prodi` text NOT NULL,
  `judul` text,
  `pendahuluan` text,
  `dasar_hukum` text,
  `keluaran` text,
  `rab` text,
  `tgl_pelaksanaan` date DEFAULT NULL,
  `tempat` text,
  `penutup` text,
  `id_user` int(5) DEFAULT NULL,
  `status_review` varchar(20) DEFAULT 'ON REVIEW',
  `keterangan_review` text,
  `revisi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `jenis_proposal`, `tgl_input`, `nama_pjk`, `jurusan`, `prodi`, `judul`, `pendahuluan`, `dasar_hukum`, `keluaran`, `rab`, `tgl_pelaksanaan`, `tempat`, `penutup`, `id_user`, `status_review`, `keterangan_review`, `revisi`) VALUES
(3, '1', '2017-08-23', 'Administrator', '', '', 'Pengembangan Kepribadian Mahasiswa', 'Pengembangan Kepribadian Mahasiswa', 'Pengembangan Kepribadian Mahasiswa', 'Pribadi mahasiswa menjadi semakin dewasa2', '2017-2018aa', '0000-00-00', 'Semarang Kota Indah2', 'Sekian dan terimakasih21', 9, 'TIDAK DISETUJUI', 'tidak ada dalam rencana kegiatan tahunan', ''),
(11, '2', '2017-08-14', 'Avit Wisnu Prananda', '', '', 'RANCANG BANGUN SISTEM INFORMASI MANAJEMEN PENGAJUAN PROPOSAL ANGGARAN FAKULTAS TEKNIK UNIVERSITAS NEGERI SEMARANG BERBASIS WEB ', 'Teknologi informasi dan komunikasi sudah sangat berkembang pada saat ini, hal tersebut dapat dicerminkan dengan banyaknya kemudahan yang kita dapatkan saat ingin melakukan berbagai aktifitas mulai dari belajar hingga berbelanja semua terasa mudah dengan adanya teknologi (Sholikhin dan Riasti, 2013 : 50). Jika berbicara mengenai teknologi, kita tidak bisa terlepas dengan alat yang bernama komputer. Menurut Robert H.Blissmer dalam bukunya yang berjudul Computer Annual (1985) komputer ialah suatu alat elektronik yang mampu melakukan beberapa tugas seperti menerima input, memproses input, menyimpan perintah-perintah dan menyediakan output dalam bentuk informasi. Komputer terus berkembang sejak saat pertama kali diciptakan hingga saat ini. Berkembangnya komputer tentu meningkatkan pula kinerja dari komputer tersebut. Kinerja komputer yang semakin meningkat bisa dimanfatkan dalam berbagai kegiatan sehari-hari.', ' Salah satu contoh dalam memanfaatkan suatu website adalah menggunakannya sebagai sistem informasi. Sistem informasi bisa digunakan sebagai sarana penyebaran informasi yang cepat dan akurat. Melalui media internet, seorang user bisa mengakses informasi melalui sistem informasi tersebut. Hal tersebut tanpa kita sadari sudah terjadi transfer informasi dari dari suatu sistem informasi kepada orang lain. Maka selanjutnya informasi tersebut akan terus ditransfer kepada banyak orang secara cepat bahkan bisa dilakukan secara bersamaan dalam satu waktu. Hal inilah yang menjadi nilai lebih dari penggunaan sistem informasi.', 'Suatu sistem informasi yang baik tentunya bisa mengakomodasi kebutuhan dari penggunanya. Seorang pengguna dari sistem informasi biasanya membutuhkan akses informasi yang menunjang kegiatan sehari-harinya, misalnya seorang mahasiswa akan membutuhkan sistem informasi untuk mengetahui informasi mengenai kegiatan akademik, dan seorang karyawan menggunakan sistem informasi untuk mengetahui kebijakan – kebijakan kantor dimana mereka bekerja saat ini. Selain itu, sistem informasi juga memungkinkan melakukan adanya proses untuk menciptakan, mengklasifikasikan, menyimpan, menyebarkan, menerima, menghapus informasi, data, dan lain-lain', '123456789', '0000-00-00', 'Semarang', 'Sekian dan terimakasih', 10, 'ON REVIEW', NULL, ''),
(12, '3', '2017-08-14', 'Yanuar Ibnu Sabila', '', '', 'Peningkatan Kualitas Individu Mahasiswa Guna Mempersiapkan DIri di Dunia Kerja ', 'Sistem informasi tidak hanya melulu selalu memberikan informasi tetapi juga bisa berfungsi sebagai wadah informasi atau dengan kata lain sebagai penampung data. Data yang tertampung dalam sistem informasi disimpan dalam database sebagai arsip dan nantinya akan digunakan untuk membuat suatu informasi dikala sedang dibutuhkan. Hal ini menjadi manfaat lain dari sistem informasi yaitu bisa menyimpan data dalam jumlah yang banyak, sehingga dengan memanfaatkan sistem informasi, data yang tersinpan akan menjadi lebih rapi dan mudah untuk dicari kembali saat sedang dibutuhkan pada suatu saat nanti.', 'Suatu sistem dapat didefinisikan sebagai kumpulan komponen yang saling terkait yang berfungsi bersama-sama untuk mencapai beberapa hasil (Salleh, 2010 : 1155). Sedangkan suatu sistem informasi dapat dikatakan sebagai kombinasi dari teknologi informasi dan aktivitas dari pengguna teknologi tersebut yang telah mendukung kegiatan operasi dan manajemen. Selain itu, sistem informasi juga bisa diartikan sebagai kumpulan informasi kompleks yang telah diolah sedemikian rupa kemudian disusun dan ditampilkan kepada pengguna secara jelas dan lengkap.', 'Sistem informasi adalah suatu organisasi yang mempertemukan kebutuhan dari pengolahan informasi yang mendukung suatu fungsi operasi organisasi yang bersifat manajerial dengan suatu strategi organisasi tertentu untuk menyediakan informasi kepada pihak luar yang membutuhkan informasi-informasi tersebut (Sutabri, 2012 : 45). Penelitian yang dilakukan oleh Mohd Idzwan Mohd Salleh,  Mohd Azizi Zainudin,  Mohd Zainuri Muhammad, dan Raja Abdullah Raja Yaacob mengenai Design of Integrated Online Information System for E-Commerce Adoption and Efficient Records Management Among Malaysian Businesses menunjukkan bahwa penggunaan sistem informasi terpadu secara online meningkatkan efektifitas dari proses pengerjaan suatu kegiatan bisnis, hal tersebut dibuktikan dengan mudahnya pengguna dalam menggunakannya, biaya rendah,  akses luas, fleksibilitas, paperless, mengurangi antrian pelanggan dan lain-lain. Selain itu bagi pelaku bisnis, sistem ini bisa digunakan sebagai statistik untuk analisis dari program bisnis dan tentunya sebagai salah satu alat untuk mendukung keputusan terhadap kebijakan bisnis yang sedang dijalankan (Salleh, 2010 : 1159).', '123456789', '0000-00-00', 'Jakarta', 'Sekian dan terima kasih', 11, 'DISETUJUI', 'oke lanjutkan', ''),
(16, '1', '2017-08-16', 'a', '1', '1', 'a', 'a', 'a', 'a', 'a', '0000-00-00', 'a', 'a', 10, 'ON REVIEW', NULL, ''),
(19, '4', '2017-08-25', 'aa', '', '', 'aa', 'aa', 'aa', 'aa', 'aa', '0000-00-00', 'aa', 'aa', 32, 'ON REVIEW', NULL, ''),
(20, '3', '2017-08-25', 'as', '5', '14', 'as', 'as', 'as', 'as', 'as', '0000-00-00', 'as', 'as', 34, 'ON REVIEW', NULL, ''),
(21, '3', '2017-08-17', 'z', '3', '8', 'z', 'z', 'z', 'z', 'z', '0000-00-00', 'z', 'z', 31, 'ON REVIEW', NULL, ''),
(22, '2', '2017-08-25', 'x', '3', '7', 'x', 'x', 'x', 'x', 'x', '0000-00-00', 'x', 'x', 43, 'ON REVIEW', NULL, ''),
(23, '1', '2017-08-25', 's', '1', '2', 's', 's', 's', 's', 's', '0000-00-00', 's', 's', 35, 'ON REVIEW', NULL, ''),
(24, '3', '2017-08-25', 'w', '4', '12', 'w', 'w', 'w', 'w', 'w', '0000-00-00', 'w', 'w', 33, 'ON REVIEW', NULL, ''),
(25, '1', '2017-08-25', 'd', '4', '12', 'd', 'd', 'd', 'd', 'd', '0000-00-00', 'd', 'd', 47, 'ON REVIEW', NULL, ''),
(26, '2', '2017-08-25', 'c', '4', '11', 'c', 'c', 'c', 'c', 'c', '0000-00-00', 'c', 'c', 46, 'ON REVIEW', NULL, ''),
(27, '3', '2017-08-25', 'v', '4', '13', 'v', 'v', 'v', 'v', 'v', '0000-00-00', 'v', 'v', 48, 'ON REVIEW', NULL, ''),
(28, '2', '2017-08-25', 'e', '2', '4', 'e', 'e', 'e', 'e', 'e', '0000-00-00', 'e', 'e', 39, 'ON REVIEW', NULL, ''),
(30, '2', '2017-08-25', 'f', '1', '3', 'f', 'f', 'f', 'f', 'f', '0000-00-00', 'f', 'f', 38, 'ON REVIEW', NULL, ''),
(31, '3', '2017-08-25', 'b', '2', '5', 'b', 'b', 'b', 'b', 'b', '0000-00-00', 'b', 'b', 40, 'ON REVIEW', NULL, ''),
(32, '2', '2017-08-25', 'l', '2', '6', 'l', 'l', 'l', 'l', 'l', '0000-00-00', 'l', 'l', 41, 'ON REVIEW', NULL, ''),
(33, '3', '2017-08-25', 'm', '3', '7', 'm', 'm', 'm', 'm', 'm', '0000-00-00', 'm', 'm', 42, 'ON REVIEW', NULL, ''),
(34, '3', '2017-08-25', 'p', '3', '9', 'p', 'p', 'p', 'p', 'p', '0000-00-00', 'p', 'p', 44, 'ON REVIEW', NULL, ''),
(35, '2', '2017-08-25', 't', '1', '2', 'y', 'y', 'y', 'y', 'y', '0000-00-00', 'y', 'y', 37, 'ON REVIEW', NULL, ''),
(36, '1', '2017-08-20', 'n', '1', '1', 'n', 'n', 'n', 'n', 'n', '0000-00-00', 'n', 'n', 10, 'ON REVIEW', NULL, ''),
(37, '1', '2017-08-25', 'mm', '4', '10', 'mm', 'mm', 'mm', 'mm', 'mm', '0000-00-00', 'mm', 'mm', 45, 'ON REVIEW', NULL, ''),
(38, '3', '2017-08-25', 'tk', '5', '14', 'tk', 'tk', 'tk', 'tk', 'tk', '0000-00-00', 'tk', 'tk', 49, 'ON REVIEW', NULL, ''),
(39, '1', '2017-08-23', 'll', '1', '1', 'll', 'll', 'll', 'll', 'll', '0000-00-00', 'll', 'll', 9, 'ON REVIEW', NULL, ''),
(40, '1', '2017-08-25', 'dd', '1', '1', 'dd', 'dd', 'dd', 'dd', 'dd', '0000-00-00', 'dd', 'dd', 36, 'ON REVIEW', NULL, ''),
(41, '5', '2017-08-25', 'ff', '', '', 'ff', 'ff', 'ff', 'ff', 'ff', '0000-00-00', 'ff', 'ff', 32, 'ON REVIEW', NULL, ''),
(42, '1', '2017-08-25', 'lk', '2', '5', 'lk', 'lk', 'lk', 'lk', 'lk', '0000-00-00', 'lk', 'lk', 32, 'ON REVIEW', NULL, ''),
(65, '1', '2017-08-27', 'm', '', '', 'm', 'm', 'm', 'm', 'm', '2017-08-31', 'm', 'm', 9, 'ON REVIEW', NULL, ''),
(66, '3', '2017-08-28', 'zzz', '3', '8', 'zzz', 'zzz', 'zzz', 'zzz', 'zzz', '2017-08-31', 'zzz', 'zzz', 31, 'ON REVIEW', NULL, ''),
(67, '1', '2017-08-28', 'm', '4', '10', 'm', 'm', 'm', 'm', 'm', '2017-09-06', 'm', 'm', 33, 'ON REVIEW', NULL, ''),
(68, '1', '2017-08-28', 'm', '5', '14', 'm', 'm', 'm', 'm', 'm', '2017-09-08', 'm', 'm', 34, 'ON REVIEW', NULL, ''),
(69, '3', '2017-08-28', 'oo', '2', '4', 'oo', 'oo', 'oo', 'oo', 'oo', '2017-09-15', 'oo', 'oo', 32, 'ON REVIEW', NULL, ''),
(70, '3', '2017-08-28', 'pp', '1', '1', 'pp', 'pp', 'pp', 'pp', 'pp', '2017-09-13', 'pp', 'pp', 35, 'ON REVIEW', NULL, ''),
(71, '1', '2017-08-28', 'pp', '4', '12', 'pp', 'pp', 'pp', 'pp', 'pp', '2017-09-04', 'pp', 'pp', 47, 'ON REVIEW', NULL, ''),
(72, '1', '2017-08-28', 'kk', '4', '11', 'kk', 'kk', 'kk', 'kk', 'kk', '2017-09-21', 'kk', 'kk', 46, 'ON REVIEW', NULL, ''),
(73, '3', '2017-08-28', 'kk', '4', '13', 'kk', 'kk', 'kk', 'kk', 'kk', '2017-09-12', 'kk', 'kk', 48, 'ON REVIEW', NULL, ''),
(74, '3', '2017-08-28', 'hh', '4', '10', 'hh', 'hh', 'hh', 'hh', 'hh', '2017-09-07', 'hh', 'hh', 45, 'ON REVIEW', NULL, ''),
(75, '3', '2017-08-28', 'gg', '1', '1', 'gg', 'gg', 'gg', 'gg', 'gg', '2017-09-26', 'gg', 'gg', 36, 'ON REVIEW', NULL, ''),
(76, '2', '2017-08-28', 'nn', '3', '7', 'nn', 'nn', 'nn', 'nn', 'nn', '2017-09-07', 'nn', 'nn', 42, 'ON REVIEW', NULL, ''),
(77, '3', '2017-08-28', 'jj', '3', '8', 'jj', 'jj', 'jj', 'jj', 'jj', '2017-08-25', 'jj', 'jj', 43, 'ON REVIEW', NULL, ''),
(78, '3', '2017-08-28', 'hh', '2', '4', 'hh', 'hh', 'hh', 'hh', 'hh', '2017-08-22', 'h', 'hh', 39, 'ON REVIEW', NULL, ''),
(79, '3', '2017-08-28', 'ii', '2', '5', 'ii', 'ii', 'ii', 'i', 'ii', '2017-08-09', 'ii', 'ii', 40, 'ON REVIEW', NULL, ''),
(80, '3', '2017-08-28', 'op', '1', '3', 'op', 'op', 'op', 'op', 'op', '2017-08-24', 'op', 'op', 38, 'ON REVIEW', NULL, ''),
(81, '2', '2017-08-28', 'uu', '3', '9', 'uu', 'uu', 'uu', 'uu', 'uu', '2017-08-30', 'uu', 'uu', 44, 'ON REVIEW', NULL, ''),
(82, '2', '2017-08-28', 'bb', '5', '14', 'bb', 'bb', 'bb', 'bb', 'bb', '2017-08-30', 'bb', 'bb', 49, 'ON REVIEW', NULL, ''),
(83, '2', '2017-08-28', 'rr', '2', '6', 'rr', 'rr', 'rr', 'rr', 'rr', '2017-09-05', 'rr', 'rr', 41, 'ON REVIEW', NULL, ''),
(84, '3', '2017-08-28', 'ee', '1', '2', 'ee', 'ee', 'ee', 'ee', 'ee', '2017-08-29', 'ee', 'ee', 37, 'ON REVIEW', NULL, ''),
(86, NULL, '2017-09-06', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ON REVIEW', NULL, 'coba'),
(87, NULL, '2017-09-06', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ON REVIEW', NULL, 'coba'),
(88, '1', '2017-09-07', 'coba', '3', '8', 'coba', 'coba', 'coba', 'coba', 'coba', '0000-00-00', 'coba', 'coba', 10, 'ON REVIEW', NULL, ''),
(89, '1', '2017-09-10', 'a', '3', '7', 'a', 'a', 'a', 'a', 'a', '2017-09-21', 'a', 'a', 31, 'ON REVIEW', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `revisi`
--

CREATE TABLE IF NOT EXISTS `revisi` (
`id_revisi` int(25) NOT NULL,
  `id_pjk` int(25) NOT NULL,
  `id_proposal` int(25) NOT NULL,
  `jenis_proposal` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `nama_pjk` varchar(255) NOT NULL,
  `pendahuluan` text NOT NULL,
  `dasar_hukum` text NOT NULL,
  `rab` text NOT NULL,
  `keluaran` text NOT NULL,
  `revisi` text NOT NULL,
  `tgl_input` date NOT NULL,
  `id_user` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revisi`
--

INSERT INTO `revisi` (`id_revisi`, `id_pjk`, `id_proposal`, `jenis_proposal`, `judul`, `nama_pjk`, `pendahuluan`, `dasar_hukum`, `rab`, `keluaran`, `revisi`, `tgl_input`, `id_user`) VALUES
(1, 0, 0, 'Akademik', 'a', 'a', 'a', 'a', 'a', 'a', 'test', '2017-09-07', 0),
(2, 0, 0, 'Akademik', 'a', 'a', 'a', 'a', 'a', 'a', 'coba', '2017-09-07', 0),
(4, 0, 0, 'Umum', 'q', 'didik', 'q', 'q', 'q', 'q', 'ngetest', '2017-09-07', 0),
(5, 0, 0, 'Kemahasiswaan', 'z', 'z', 'z', 'z', 'z', 'z', 'nyoba', '2017-09-07', 0),
(6, 0, 0, 'Kemahasiswaan', 'm', 'm', 'm', 'm', 'm', 'm', 'njajal', '2017-09-07', 0),
(9, 10, 0, 'Akademik', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'bismillah', '2017-09-07', 0),
(11, 10, 0, 'Akademik', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'testing', '2017-09-07', 0),
(12, 10, 0, 'Akademik', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'test lagi', '2017-09-07', 1),
(13, 10, 88, 'Akademik', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'test coba', '2017-09-10', 1),
(14, 31, 89, 'Akademik', 'a', 'a', 'a', 'a', 'a', 'a', 'test', '2017-09-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tingkatan`
--

CREATE TABLE IF NOT EXISTS `tingkatan` (
`id_tingkatan` int(20) NOT NULL,
  `nama_tingkatan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

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
(9, 'bendahara'),
(10, 'kajur_te'),
(12, 'dekan'),
(13, 'kajur_tm'),
(14, 'kajur_ts'),
(15, 'kajur_tk'),
(16, 'kajur_tjp'),
(17, 'kaprodi_ptb'),
(18, 'kaprodi_ts'),
(19, 'kaprodi_ta'),
(20, 'kaprodi_ptm'),
(21, 'kaprodi_pto'),
(22, 'kaprodi_tm'),
(23, 'kaprodi_pte'),
(24, 'kaprodi_ptik'),
(25, 'kaprodi_te'),
(26, 'kaprodi_pkk'),
(27, 'kaprodi_busana'),
(28, 'kaprodi_boga'),
(29, 'kaprodi_kecantikan'),
(30, 'kaprodi_tk');

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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

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
(11, 'Yanuar Ibnu Sabila', 'yanuar22', '19a10abcc5a1841f8554c65bceafadf2', 'pjk'),
(31, 'Kajur Teknik Elektro', 'kajurte', 'e5ed3120db2dce3c571b58194330ab81', 'kajur_te'),
(32, 'Kajur Teknik Mesin', 'kajurtm', 'c4e337c8d18ed384c599df44009d44c9', 'kajur_tm'),
(33, 'Kajur Pendidikan Kesejahteraan Keluarga', 'kajurtjp', 'f12d8064f9bdc58dac44a532a70bffcf', 'kajur_tjp'),
(34, 'Kajur Teknik Kimia', 'kajurtk', 'b04fcc54f60b1214856fd17c1693b339', 'kajur_tk'),
(35, 'Kajur Teknik Sipil', 'kajurts', 'fe4ff796fdc70987076d4522f25dbfc9', 'kajur_ts'),
(36, 'Kaprodi Pendidikan Teknik Bangunan', 'kaprodiptb', '0abda7be5425bdc65724e27d9c666c89', 'kaprodi_ptb'),
(37, 'Kaprodi Teknik Sipil', 'kaprodits', 'ccdcf595b7f711117cf8c3b2aa14ac79', 'kaprodi_ts'),
(38, 'Kaprodi Teknik Arsitektur', 'kaprodita', '30c578ef81d69f4f105c61b770c1f568', 'kaprodi_ta'),
(39, 'kaprodi Pendidikan Teknik Mesin', 'kaprodiptm', '41195d917295f51c2400cbbb447bc661', 'kaprodi_ptm'),
(40, 'Kaprodi Pendidikan Teknik Otomotif', 'kaprodipto', '463a6fb52d304c285032df91412f579f', 'kaprodi_pto'),
(41, 'Kaprodi Teknik Mesin', 'kaproditm', '4d73411775253c0e2881e58ea10c4ed7', 'kaprodi_tm'),
(42, 'Kaprodi Pendidikan Teknik Elektro', 'Kaprodipte', '849c856e215fa1da8b011d361b5f18a3', 'kaprodi_pte'),
(43, 'Kaprodi Pendidikan Teknik Informatika dan Komputer', 'kaprodiptik', '2a9fba28fa3c5efcc6c27928312d5cc1', 'kaprodi_ptik'),
(44, 'Kaprodi Teknik Elektro', 'kaprodite', '364867564cb1dfd404b2f966920506f5', 'kaprodi_te'),
(45, 'Kaprodi Pendidikan Kesejahteraan Keluarga', 'kaprodipkk', '24b447cfe63fd0a7db3e824820442cf7', 'kaprodi_pkk'),
(46, 'Kaprodi Pendidikan Tata Busana', 'kaprodibusana', 'cc5ee1534e7fe8f5e08b2e91fbc2605e', 'kaprodi_busana'),
(47, 'Kaprodi Tata Boga', 'kaprodiboga', '410a10fed95fdace917196e8ab49ae5e', 'kaprodi_boga'),
(48, 'Kaprodi Tata Kecantikan', 'kaprodikecantikan', '52359af2a50ef3173037d682ff9259ce', 'kaprodi_kecantikan'),
(49, 'Kaprodi Teknik Kimia', 'kaproditk', 'd6b6c517a0850a75a7a5fc3a204496d3', 'kaprodi_tk');

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
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
 ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
 ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `revisi`
--
ALTER TABLE `revisi`
 ADD PRIMARY KEY (`id_revisi`);

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
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
MODIFY `id_laporan` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
MODIFY `id_proposal` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `revisi`
--
ALTER TABLE `revisi`
MODIFY `id_revisi` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tingkatan`
--
ALTER TABLE `tingkatan`
MODIFY `id_tingkatan` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `wd`
--
ALTER TABLE `wd`
MODIFY `id_wd` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
