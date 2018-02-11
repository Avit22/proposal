/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - proposal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proposal` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proposal`;

/*Table structure for table `item_wd2` */

DROP TABLE IF EXISTS `item_wd2`;

CREATE TABLE `item_wd2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_proposal` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `item_wd2` */

insert  into `item_wd2`(`id`,`id_proposal`,`id_user`,`barang`,`harga`,`jumlah`,`total`) values 
(2,130,2,'Honor Narasumber (2x)',1000000,2,4000000),
(3,130,2,'Snack',8000,130,1040000),
(4,130,2,'Makan',30000,50,1500000),
(5,130,2,'Transport Narasumber',130000,2,260000),
(6,130,2,'Penginapan Narasumber',150000,2,300000),
(7,167,2,'Snack',10000,10,100000),
(8,169,2,'Snack',15000,10,150000),
(9,170,2,'snack',1000,10,10000);

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` text NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`id_jurusan`,`nama_jurusan`) values 
(1,'Teknik Sipil'),
(2,'Teknik Mesin'),
(3,'Teknik Elektro'),
(4,'Teknik Jasa dan Produksi'),
(5,'Teknik Kimia');

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `id_laporan` int(25) NOT NULL AUTO_INCREMENT,
  `id_user` int(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_pjk` varchar(255) NOT NULL,
  `rincian_kegiatan` varchar(255) NOT NULL,
  `rincian_biaya` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `file1` varchar(100) NOT NULL,
  `file2` varchar(100) NOT NULL,
  `laporan_review` varchar(100) DEFAULT 'ON REVIEW',
  `keterangan_review` varchar(100) DEFAULT NULL,
  `tgl_input_bendahara` date DEFAULT NULL,
  `revisi` text,
  `id_proposal` int(25) NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

/*Data for the table `laporan` */

insert  into `laporan`(`id_laporan`,`id_user`,`judul`,`nama_pjk`,`rincian_kegiatan`,`rincian_biaya`,`tgl_input`,`file1`,`file2`,`laporan_review`,`keterangan_review`,`tgl_input_bendahara`,`revisi`,`id_proposal`) values 
(2,0,'ww','ww','ww','5000000','2017-09-05','api.JPG','',NULL,'',NULL,NULL,0),
(119,10,'KULIAH UMUM PRODI S1 PTE','Avit Wisnu Prananda','','9000000','2017-11-07','ALUR_PENCAIRAN_UANG_PANJAR_KERJA2.pdf','','DISETUJUI','Bendahara','2017-11-07','sudah diganti',130),
(120,10,'Proposal Pembangunan Lab','Yanuar','','150000','2018-01-30','Rumusan_Masalah.docx','','ON REVIEW',NULL,NULL,NULL,158),
(129,10,'Proposal Pelatihan Android','Avit Wisnu Prananda','','5555555','2018-01-30','alur_pencairan_dana5.PNG','','ON REVIEW',NULL,NULL,NULL,149),
(130,10,'<p>Proposal Lomba Kreatifitas Menggambar Komik</p>','Maulana Faizin','','100000','2018-01-31','alur_pencairan_dana6.PNG','','DISETUJUI','<p>Bendahara</p>','2018-01-31',NULL,167),
(131,10,'<p>Proposal Lomba Desain Grafis</p>','Avit Wisnu Prananda','','150000','2018-02-01','alur_pencairan_dana7.PNG','','ON REVIEW',NULL,NULL,NULL,169),
(132,10,'<p>p</p>','Avit Wisnu Prananda','','10000','2018-02-01','alur_pencairan_dana8.PNG','','ON REVIEW',NULL,NULL,NULL,170),
(133,10,'<p>q</p>','Avit Wisnu Prananda','','1000000','2018-02-06','artikel.docx','','ON REVIEW',NULL,NULL,NULL,171),
(134,10,'<p>q</p>','Avit Wisnu Prananda','','3000000','2018-02-06','COVER.docx','','ON REVIEW',NULL,NULL,NULL,171),
(135,10,'<p>q</p>','Avit Wisnu Prananda','','77777','2018-02-06','artikel1.docx','','ON REVIEW',NULL,NULL,NULL,171),
(136,10,'<p>Proposal Pengajian Mechanical Fair</p>','Rizki','','200000','2018-02-06','DAFTAR_ISI.docx','','ON REVIEW',NULL,NULL,NULL,168),
(137,10,'<p>q</p>','Avit Wisnu Prananda','','77777','2018-02-11','Artikel_andalas.pdf','','ON REVIEW',NULL,NULL,NULL,171),
(138,10,'<p>q</p>','Avit Wisnu Prananda','','5555555','2018-02-11','artikel2.docx','','ON REVIEW',NULL,NULL,NULL,171),
(139,10,'<p>q</p>','Avit Wisnu Prananda','','100000','2018-02-11','ABSTRAK1.docx','','ON REVIEW',NULL,NULL,NULL,171),
(140,10,'<p>q</p>','Avit Wisnu Prananda','','150000','2018-02-11','activity_diagram1.docx','','ON REVIEW',NULL,NULL,NULL,171),
(141,10,'<p>q</p>','Avit Wisnu Prananda','','800000','2018-02-11','ABSTRAK2.docx','','ON REVIEW',NULL,NULL,NULL,171),
(142,10,'<p>q</p>','Avit Wisnu Prananda','','150000','2018-02-11','ABSTRAK3.docx','','ON REVIEW',NULL,NULL,NULL,171),
(143,10,'<p>q</p>','Avit Wisnu Prananda','','9999','2018-02-11','activity_diagram2.docx','','ON REVIEW',NULL,NULL,NULL,171);

/*Table structure for table `panjar_kerja` */

DROP TABLE IF EXISTS `panjar_kerja`;

CREATE TABLE `panjar_kerja` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_proposal` int(100) DEFAULT NULL,
  `nominal_total` int(100) DEFAULT NULL,
  `nominal_70` int(100) DEFAULT NULL,
  `sumberdana` varchar(100) DEFAULT NULL,
  `terbilang` text,
  `tujuanbayar` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `pencairanke` varchar(100) DEFAULT NULL,
  `sisa` int(100) DEFAULT NULL,
  `lalu` int(100) DEFAULT NULL,
  `noseri` varchar(4) DEFAULT NULL,
  `nosurat` varchar(100) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `keterangan_input` varchar(100) DEFAULT 'Belum Input',
  `status_input` varchar(100) DEFAULT 'Belum Input',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `panjar_kerja` */

insert  into `panjar_kerja`(`id`,`id_proposal`,`nominal_total`,`nominal_70`,`sumberdana`,`terbilang`,`tujuanbayar`,`keterangan`,`pencairanke`,`sisa`,`lalu`,`noseri`,`nosurat`,`tgl_input`,`keterangan_input`,`status_input`) values 
(1,120,5000000,3500000,'PNBP','Tiga Juta Lima Ratus Ribu Rupiah','Kegiatan Lomba Robotika','PJK','Pertama',1500000,0,'3333','2222','2017-10-23','Sudah Input','Belum Input'),
(2,120,5000000,3500000,'PNBP','Satu Juta Lima Ratus Ribu Rupiah','Lomba','Pjk','kedua',1500000,3500000,'3333','2222','2017-10-25','Sudah Input','Belum Input'),
(3,130,9000000,6300000,'PNBP','Enam Juta Tiga Ratus Ribu Rupiah','Kuliah Umum Teknik Elektro','PK senilai 6.300.000, SPJ senilai 2.700.000','Pertama',2700000,0,'123','321','2017-11-06','Sudah Input','Belum Input'),
(4,130,9000000,2700000,'PNBP','Dua Juta Tujuh Ratus Ribu Rupiah','KULIAH UMUM PRODI S1 PTE','pjk','kedua',0,6300000,'123','321','2017-11-07','Sudah Input','Belum Input'),
(5,134,5700000,3000000,'PNBP','Tiga Juta Rupiah','PROPOSAL PENGAJUAN DANA TIM FUTSAL TUNARUNGU','PJK','Pertama',2700000,0,'1234','235','2018-01-04','Sudah Input','Belum Input'),
(6,149,0,105000,'PNBP','Seratus Lima Ribu Rupiah','Proposal Pelatihan Android','PK senilai 105000, Sisa PK 45000','Pertama',45000,0,'111','222','2018-01-30','Sudah Input','Belum Input'),
(9,158,0,0,'0','0','Proposal Pembangunan Lab','0','Pertama',0,0,'0','0','2018-01-30','Sudah Input','Belum Input'),
(10,149,0,0,'PNBP','Empat Puluh Lima Ribu Rupiah','Proposal Pelatihan Android','-','kedua',0,150000,'3333','2222','2018-01-30','Belum Input','Sudah Input'),
(11,167,0,70000,'PNBP','Tujuh Puluh Ribu Rupiah','<p>Proposal Lomba Kreatifitas Menggambar Komik</p>','Pk senilai 70000 dan SPJ senilai 30000','Pertama',30000,0,'087','077','2018-01-31','Sudah Input','Belum Input'),
(12,167,0,0,'PNBP','Tiga Puluh Ribu Rupiah','<p>Proposal Lomba Kreatifitas Menggambar Komik</p>','-','kedua',0,0,'087','077','2018-01-31','Belum Input','Sudah Input'),
(16,169,150000,105000,'PNBP','Seratus Lima Ribu Rupiah','<p>Proposal Lomba Desain Grafis</p>','-','Pertama',45000,0,'1111','2222','2018-02-01','Sudah Input','Belum Input'),
(17,170,10000,7000,'PNBP','7000','<p>p</p>','-','Pertama',3000,0,'9999','8888','2018-02-01','Sudah Input','Belum Input'),
(18,170,10000,3000,'PNBP','Tiga Ribu Rupiah','<p>p</p>','-','kedua',0,7000,'76','67','2018-02-01','Belum Input','Sudah Input'),
(19,170,10000,3000,'PNBP','Tiga Ribu Rupiah','<p>p</p>','-','kedua',0,7000,'76','67','2018-02-01','Belum Input','Sudah Input'),
(20,170,10000,7000,'PNBP','Tujuh Rupiah','<p>p</p>','-','Pertama',3000,0,'222','3333','2018-02-05','Sudah Input','Belum Input'),
(21,170,10000,7000,'PNBP','Empat Puluh Lima Ribu Rupiah','<p>p</p>','-','Pertama',3000,0,'2222','444','2018-02-05','Sudah Input','Belum Input'),
(22,170,200000,170000,'PNBP','Satu Juta Rupiah','<p>p</p>','-','Pertama',30000,0,'4444','5555','2018-02-11','Sudah Input','Belum Input');

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(11) NOT NULL,
  `nama_prodi` text NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `prodi` */

insert  into `prodi`(`id_prodi`,`id_jurusan`,`nama_prodi`) values 
(1,1,'Pendidikan Teknik Bangunan'),
(2,1,'Teknik Sipil'),
(3,1,'Teknik Arsitektur'),
(4,2,'Pendidikan Teknik Mesin'),
(5,2,'Pendidikan Teknik Otomotif'),
(6,2,'Teknik Mesin'),
(7,3,'Pendidikan Teknik Elektro'),
(8,3,'Pendidikan Teknik Informatika dan Komputer'),
(9,3,'Teknik Elektro'),
(10,4,'Pendidikan Kesejahteraan Keluarga'),
(11,4,'Pendidikan Tata Busana'),
(12,4,'Pendidikan Tata Boga'),
(13,4,'Pendidikan Tata Kecantikan'),
(14,5,'Teknik Kimia');

/*Table structure for table `proposal` */

DROP TABLE IF EXISTS `proposal`;

CREATE TABLE `proposal` (
  `id_proposal` int(25) NOT NULL AUTO_INCREMENT,
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
  `tu_review` varchar(20) NOT NULL DEFAULT 'ON REVIEW',
  `akun_review` varchar(20) NOT NULL DEFAULT 'ON REVIEW',
  `keu_review` varchar(20) NOT NULL DEFAULT 'ON REVIEW',
  `revisi` varchar(255) NOT NULL,
  `catatan_keu` text NOT NULL,
  `catatan_wd2` text NOT NULL,
  `validasi_wd2` varchar(255) DEFAULT NULL,
  `dekan_review` varchar(25) DEFAULT 'ON REVIEW',
  `revisi_rab_keu` text,
  `catatan_rab` text,
  `tgl_validasi` date DEFAULT NULL,
  `nominal_disetujui_dekan` int(100) DEFAULT NULL,
  `nominal_disetujui_rp` text,
  `terbilang` text,
  `email_pjk` varchar(255) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_proposal`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;

/*Data for the table `proposal` */

insert  into `proposal`(`id_proposal`,`jenis_proposal`,`tgl_input`,`nama_pjk`,`jurusan`,`prodi`,`judul`,`pendahuluan`,`dasar_hukum`,`keluaran`,`rab`,`tgl_pelaksanaan`,`tempat`,`penutup`,`id_user`,`status_review`,`keterangan_review`,`tu_review`,`akun_review`,`keu_review`,`revisi`,`catatan_keu`,`catatan_wd2`,`validasi_wd2`,`dekan_review`,`revisi_rab_keu`,`catatan_rab`,`tgl_validasi`,`nominal_disetujui_dekan`,`nominal_disetujui_rp`,`terbilang`,`email_pjk`,`kode`) values 
(3,'1','2017-08-23','Administrator','','','Pengembangan Kepribadian Mahasiswa','Pengembangan Kepribadian Mahasiswa','Pengembangan Kepribadian Mahasiswa','Pribadi mahasiswa menjadi semakin dewasa2','2017-2018aa','0000-00-00','Semarang Kota Indah2','Sekian dan terimakasih21',9,'TIDAK DISETUJUI','tidak ada dalam rencana kegiatan tahunan','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(130,'1','2018-01-30','Avit Wisnu Prananda','3','8','<p>KULIAH UMUM PRODI S1 PTE</p>','<p style=\"text-align: justify;\">Dalam rangka menghasilkan lulusan yang memiliki daya saing di dunia usaha dan dunia industri maka Jurusan Teknik Elektro Fakultas Teknik UNNES menyelenggarakan kuliah umum dengan tema &ldquo;Trends and Challenges in Electrical Engineering and Information Technology&rdquo;. Kuliah Umum dengan tema &ldquo;Trends and Challenges in Electrical Engineering and Information Technology&rdquo; akan memberikan gambaran kepada mahasiswa mengenai persaingan dan trend perkembangan dunia teknologi informasi pada saat ini dan waktu yang akan datang. Dengan berbekal pengetahuan dan wawasan tersebut, mahasiswa diharapkan dapat mempersiapkan diri guna menghadapi tantangan perkembangan pesat teknologi informasi.</p>','<div>1. Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional ;</div>\r\n<div>2. Undang-undang No.12 Tahun 2012 tentang Pendidikan Tinggi ;</div>\r\n<div>3. Peraturan Pemerintah No.23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum ;</div>\r\n<div>4. Keputusan Menteri Pendidikan Nasional No.8 Tahun 2012 tentang Statuta Universitas Negeri Semarang;</div>\r\n<div>5. Program Kerja Jurusan Teknik Elektro Fakultas Teknik UNNES Tahun 2017.</div>','<div style=\"text-align: justify;\">Tujuan:</div>\r\n<div style=\"text-align: justify;\">1. Merealisasikan kerjasama antara Teknik Elektro UNNES dengan Southern Cross University Australia dan&nbsp;&nbsp; Mahasarakham University Thailand.</div>\r\n<div style=\"text-align: justify;\">2. Meningkatkan wawasan mahasiswa tentang perkembangan teknologi informasi</div>\r\n<div style=\"text-align: justify;\">3. Membangun kesadaran mahasiswa untuk lebih mempersiapkan diri dalam mengahdapi tantangan dunia kerja.</div>\r\n<div style=\"text-align: justify;\">4. Membangun akses kerjasama dan komunikasi global terkait dengan penelitian</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Manfaat:</div>\r\n<div style=\"text-align: justify;\">1. Mahasiswa memahami tentang trend dan tantangan perkembangan dalam bidang teknik elektro dan teknologi informasi.</div>\r\n<div style=\"text-align: justify;\">2. Kuliah umum merupakan salah satu kegiatan sebagai syarat penunjang dalam meningkatkan akreditasi prodi.</div>','<p>130</p>','2017-11-27','<p>Ruang Dekanat FT UNNES Lantai 3</p>','<p>Demikian Proposal Kuliah Umum Program Studi S1 Pendidikan Teknik Elektro, yang diadakan oleh Jurusan Teknik Elektro, Fakultas Teknik UNNES ini disusun untuk dapat digunakan sebagaimana mestinya. Kami mengharap partisipasi dan kerjasamanya dari berbagai pihak yang terkait demi suksesnya kegiatan ini.</p>',10,'DISETUJUI','<p>Dekan</p>','DISETUJUI','DISETUJUI','DISETUJUI','','berikut adalah rab yang telah disesuaikan dan direvisi oleh pjk','Berikut adalah rekomendasi rab dari saya terkait dana yang diperlukan','DISETUJUI','DISETUJUI','','Revisi Sudah Direvisi','2018-02-06',100000,'Rp. 100.000,-','Satu Juta Lima Ratus Ribu Rupiah','',''),
(131,'1','2017-11-17','ULFAH','3','8','HSADLDS','skauyftyfhjl;kuyh','kjopj','gfdggfkjshad','131','2017-11-17','e11','jlksdfdfl',43,'DISETUJUI','Dekan','DISETUJUI','DISETUJUI','DISETUJUI','','','item rab sudah sesuai','DISETUJUI','DISETUJUI',NULL,NULL,'2017-12-31',1000000,'Rp. 1.000.000,-','Satu Juta Rupiah','',''),
(132,'1','2017-12-30','Avit Wisnu Prananda','3','8','Pentas Seni Budaya Jurusan Teknik Elektro','Seiring perkembangan waktu dan pesatnya perkembangan teknologi dan informasi serta kurangnya minat dan perhatian para pemuda terhadap seni dan budaya asli milik Indonesia yang semestinya kita lestarikan kini tenggelam di tengah-tengah begitu kuatnya arus budaya asing yang masuk hingga ke pelosok-pelosok desa.\r\n\r\nHanya sedikit saja ada seorang remaja ataupun pemuda kita yang bisa membawakan tarian tradisional dan sesuatu yang aneh jika kita menemukan seseorang yang mengenakan batik dalam kesehariannya. Pergeseran adat dan budaya tampaknya telah merubah wajah anak-anak negeri yang lebih memilih budaya asing untuk mereka banggakan.\r\n\r\nMasuknya budaya barat yang mendapat respon positif dari kalangan remaja tanpa adanya filter dan penyeimbang dari budaya lokal mengakibatkan para remaja, pemuda dan sebagian besar masyarakat mengalami kerancuan dalam memahami dan membedakan antara budaya asli milik Indonesia dengan budaya asing.\r\n\r\nMelihat kondisi dan fakta di atas pantas kiranya kita memberikan perhatian lebih terhadap permasalahan tersebut dan inilah yang menjadi latarbelakang kami sebagai organisasi Mahasiswa \"Indonesia Sosial Komunitas\" (INSOSKOM) akan menyelenggarakan kegiatan Festival lintas kampus dan Pentas Seni Budaya ','Peraturan Rektor No. 51 Tahun 2010','Dalam rangka memperingati hari kemerdekaan Republik Indonesia 17 Agustus 1945, Indonesia Sosial Komunitas selaku organisasi kepemudaan dan mahasiswa ingin mengadakan acara Festival lintas kampus dan pentas seni budaya yang bertujuan untuk\r\n\r\nA. Untuk memperingati dan memeriahkan Hari Kemerdekaan Republik Indonesia Yang Ke 69\r\nB. Untuk melestarikan dan menumbuhkan minat terhadap seni dan budaya asli Indonesia\r\nC. Untuk membangun kebersamaan dan membangun kreativitas para pemuda','132','2018-01-10','Gedung E11 Jurusan TE','Sekian propsoal anggaran ini kami sampaikan, terimakasih atas perhatiannya ',10,'DISETUJUI','Kabag Tata Usaha','DISETUJUI','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2017-12-30',NULL,NULL,NULL,'',''),
(133,'Akademik','2017-12-31','Avit Wisnu Prananda','3','8','PROPOSAL PENGAJUAN DANA LOMBA PMR','Palang merah Indonesia adalah suatu organisasi sosial yang bergerak dibidang Kemanusian. Dimana salah satu kelompok anggota Palang Merah Indonesia adalah PMR, yaitu kelompok relawan terdidik dan terlatih dalam bidang ilmu-ilmu ke-PalangMerahan.\r\nMaka atas dasar itulah Plang Merah Indonesia Kota metro perlu melaksanakan monitoring generasi muda dalam bidang ilmu kepalangmerahan yang menjadi dasar ilmu relawan PMI.\r\n','1.      Anggaran dasar dan Anggaran Rumah Tangga PMI.\r\n2.      Program Kerja Markas PMI Kota Metro Tahun 2016.\r\n3.      Rapat Relawan 10 September 2016.\r\n','1.      Memberiklan pengetahuan dan keterampilan dalam kegiatan kePalang Merahan.\r\n2.      Penguasaan ilmu kepalangmerahan yang sesuai dengan adanya teknis dan ketentuan perlombaan sebagai dasar ilmu dalam pedoman kepalngmerahan.\r\n3.   Menyebarluaskan ilmu kePalangMerahan.\r\n4.   Silaturahmi antar anggota Unit PMR WIRA di kota METRO sebagaimana wwujud bakti PMR.\r\n','133','2018-01-22','lapangan kampus 15 A Iring Mulyo','Demikian proposal ini kami buat, apabila ada kesalahan kami akan senantiasa memperbaiki sebagaimana mestinya. Tidak lupa kami ucapkan terimaksih kepada semua. Saya mohon agar bapak/ibu berkenan memberikan bantuan biaya demi kelancaran lomba PMR tersebut.',10,'DISETUJUI','Kasubag Keuangan','DISETUJUI','DISETUJUI','DISETUJUI','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(134,'1','2017-12-31','Avit Wisnu Prananda','3','8','PROPOSAL PENGAJUAN DANA TIM FUTSAL TUNARUNGU','Dalam mengembangkan minat dan menyalurkan bakat pemuda khususnya dalam olahraga futsal penyandang disabilitasi Tuna rungu yang mempunyai potensi yang sangat besar serta mempererat tali siraturahmi melalui olahraga futsal, melihat dari potensi yang ada maka kami dari karang taruna cipta mandiri DEAF FUTSAL SOLO CITY bermaksud untuk mengikuti turnamen futsal TULI BANTEN 2017. \r\nDemi terselenggaranya kegiatan tersebut kami mengharapkan dukungan dari semua pihak baik moril maupun materil dan mudah-mudahan apa yang kami rencanakan dapat berjalan dengan lancer sesuai dengan apa yang kita harapkan.\r\n','1.      Anggaran dasar dan Anggaran Rumah Tangga PMI.\r\n2.      Program Kerja Markas PMI Kota Metro Tahun 2016.\r\n3.      Rapat Relawan 10 September 2016.\r\n','1.Untuk mengembangkan bakat dalam olahraga futsal penyandang disabilitasi Tunarungu\r\n2. Untuk menghindarkan kegiatan pemuda dari hal-hal yang tidak diharapkan\r\n3. Menjalin tali siraturahmi\r\n','134','2018-01-22','Lapangan Futsal ','Melalui proposal ini besar harapan kami dapatlah kiranya Bapak/I memahami dan merealisasikannya agar kami bisa berpartisipasi dalam mengikuti Turnamen Futsal “TULI BANTEN 2017”.Sehingga apa yang diharapkan oleh kami dapat terwujud. Demikian agar menjadi maklum dan atas perhatiannya kami ucapkan terima kasih.',10,'DISETUJUI','Dekan','DISETUJUI','DISETUJUI','DISETUJUI','','','item rab sudah sesuai','DISETUJUI','DISETUJUI',NULL,NULL,'2017-12-31',5700000,'Rp. 5.700.000,-','Lima Juta Tujuh Ratus Ribu Rupiah','',''),
(135,'1','2018-01-26','aaaa','1','1','Proposal Lomba Desain Web','aa','aa','aa','135','2018-01-30','aa','aa',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-29',NULL,NULL,NULL,'',''),
(136,'1','2018-01-26','aaaa','1','1','Proposal Lomba Desain Web','aa','aa','aa','136','2018-01-30','aa','aa',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-29',NULL,NULL,NULL,'',''),
(137,'1','2018-01-26','Avit Wisnu Prananda','1','1','Proposal Lomba Desain Web','a','a','a','137','2018-01-30','a','a',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-30',NULL,NULL,NULL,'',''),
(138,'1','2018-01-26','Avit Wisnu Prananda','3','8','Proposal Lomba Desain Grafis','a','a','a','138','2018-01-30','a','a',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-29',NULL,NULL,NULL,'',''),
(139,'1','2018-01-26','Avit Wisnu Prananda','1','1','Proposal Lomba Desain Grafis','a','a','a','139','2018-01-30','a','a',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(140,'1','2018-01-26','Avit Wisnu Prananda','1','1','Proposal Lomba Desain Grafis','a','a','a','139','2018-01-30','a','a',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(141,'Akademik','2018-01-27','Avit Wisnu Prananda','3','8','Proposal Lomba Pembuatan Web','a','a','a','141','2018-01-31','a','a',10,'DISETUJUI','Kasubag Akuntansi','DISETUJUI','DISETUJUI','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(142,'Akademik','2018-01-27','Avit Wisnu Prananda','3','8','Proposal Lomba Futsal','a','a','a','142','2018-01-29','a','a',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(143,'Umum','2018-01-27','a','1','1','q','q','q','q','143','2018-01-29','q','q',10,'DISETUJUI','Wakil Dekan II','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(144,'Akademik','2018-01-27','Avit Wisnu Prananda','3','8','Proposal Lomba Kreatifitas Desain Grafis','s','s','s','144','2018-01-31','s','s',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(145,'1','2018-01-27','Avit Wisnu Prananda','3','8','Lomba Desain','q','q','q','145','2018-01-29','q','q',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-28',NULL,NULL,NULL,'',''),
(146,'Akademik','2018-01-27','Avit Wisnu Prananda','3','8','Proposal Lomba Futsal','q','q','q','146','2018-01-30','q','q',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-28',NULL,NULL,NULL,'',''),
(147,'1','2018-01-27','aaaaa','1','1','q','q','q','q','147','2018-01-30','q','q',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(148,'Umum','2018-01-27','zzz','1','1','zzz','zzz','zzz','zzz','148','2018-01-30','zzz','zzz',9,'DISETUJUI','Wakil Dekan II','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(149,'1','2018-01-27','Avit Wisnu Prananda','3','8','Proposal Pelatihan Android','a','a','a','149','2018-01-29','a','a',10,'DISETUJUI','Dekan','DISETUJUI','DISETUJUI','DISETUJUI','','rab sudah sesuai','fix rab','DISETUJUI','DISETUJUI','',NULL,'2018-01-30',150000,'Rp. 150.000,-','Seratus Lima Puluh Ribu Rupiah','',''),
(150,'1','2018-01-27','Avit Wisnu Prananda','2','4','Lomba Desain Mobil','q','q','q','150','2018-01-28','q','q',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-29',NULL,NULL,NULL,'',''),
(151,'Umum','2018-01-27','Avit Wisnu Prananda','3','8','mm','mm','mm','mm','151','2018-01-28','mm','mm',10,'DISETUJUI','Wakil Dekan II','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(152,'Kemahasiswaan','2018-01-27','kk','1','1','kk','kk','kk','kk','152','2018-01-28','kk','kk',10,'DISETUJUI','Wakil Dekan III','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(153,'Kemahasiswaan','2018-01-27','op','1','1','op','op','op','op','153','2018-01-28','op','op',10,'DISETUJUI','Wakil Dekan III','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-27',NULL,NULL,NULL,'',''),
(154,'Akademik','2018-01-28','Yanuar Ibnu Sabila','3','7','Proposal Lomba Desain Hardware Elektro','a','a','a','154','2018-01-30','a','a',10,'DISETUJUI','Wakil Dekan I','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-28',NULL,NULL,NULL,'',''),
(156,'2','2018-01-28','Avit Wisnu Prananda','1','2','Proposal Lomba Desain Bangunan','a','a','a','155','2018-01-29','a','a',10,'DISETUJUI','Wakil Dekan II','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-30',NULL,NULL,NULL,'',''),
(157,'3','2018-01-28','Yanuar Ibnu Sabila','2','4','Proposal Lomba Kemahasiswaan','a','a','a','157','2018-01-29','a','a',10,'DISETUJUI','Wakil Dekan III','ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,NULL,NULL,NULL,'2018-01-30',NULL,NULL,NULL,'',''),
(158,'1','2018-01-30','Yanuar','1','1','<h2>Proposal Pembangunan Lab</h2>','<p>a</p>','<p>a</p>','<p>a</p>','158','2018-01-29','<p>a</p>','<p>a</p>',10,'DISETUJUI','Dekan','DISETUJUI','DISETUJUI','DISETUJUI','<p>Pembangunan lab</p>','','sip','DISETUJUI','DISETUJUI',NULL,NULL,'2018-01-30',0,'Rp. ,-','','',''),
(163,'2','2018-01-30','Avit Wisnu Prananda','3','8','<p>Proposal Lomba Web</p>','<p>aaaaaaaa</p>','<p>aaaaaaaaaaaaaa</p>','<p>aaaaaaaaa</p>','159','2018-01-30','<p>aaaaaaaaa</p>','<p>aaaaaaaaa</p>',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(164,'1','2018-01-30','yanuar','1','1','<p>a</p>','<p>a</p>','<p>a</p>','<p>a</p>','164','2018-01-30','<p>a</p>','<p>a</p>',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(165,'1','2018-01-30','Avit Wisnu Prananda','1','1','<p>a</p>','<p>a</p>','<p>a</p>','<p>a</p>','165','2018-01-30','<p>a</p>','<p>a</p>',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(166,'1','2018-01-30','Avit Wisnu Prananda','1','1','<p>a</p>','<p>a</p>','<p>a</p>','<p>a</p>','166','2018-01-30','<p>a</p>','<p>a</p>',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,NULL,NULL,NULL,NULL,'',''),
(167,'2','2018-01-31','Maulana Faizin','3','8','<p>Proposal Lomba Kreatifitas Menggambar Komik</p>','<p style=\"text-align: justify;\">Lomba kreatifitas menggambar komik ini berawal dari sekumpulan komunitas yang memiliki hobi sama dan memutuskan untuk mengadakan lomba ini</p>','<div>1. Peraturan 1</div>\r\n<div>2. Peraturan 2</div>\r\n<div>3. Peraturan 3</div>\r\n<div>4. Peraturan 4</div>\r\n<div>5. Peraturan 5</div>','<p style=\"text-align: justify;\">Lomba ini diharapkan mampu meningkatkan keakraban antar sesama komunitas dan dapat membuka peluang usaha maupun menciptakan lapangan pekerjaan</p>','<p>167</p>','0000-00-00','<p>Fakultas Teknik</p>','<p>Terima Kasih atas perhatiannya</p>\r\n<p>Wassalamualaikum wr.wb</p>',10,'DISETUJUI','<p>Dekan</p>','DISETUJUI','DISETUJUI','DISETUJUI','','<p>Pembuatan RAB telah sesuai harga terkini</p>','<p>Rab telah sesuai</p>','DISETUJUI','DISETUJUI','',NULL,'2018-02-11',5555555,'Rp. 5.555.555,-','Dua Juta Tujuh Ratus Ribu Rupiah','avitwisnu22@gmail.com','60421358'),
(168,'3','2018-02-01','Rizki','2','4','<p>Proposal Pengajian Mechanical Fair</p>','<p>Pendahuluan.......</p>','<p>Dasar Hukum.....</p>','<p>Keluaran</p>','<p>168</p>','0000-00-00','<p>FT UNNES</p>','<p>Demikian</p>',10,'DISETUJUI','<p>Kasubag Akuntansi</p>','DISETUJUI','DISETUJUI','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,'2018-02-01',NULL,NULL,NULL,'',''),
(170,'1','2018-02-01','Avit Wisnu Prananda','1','1','<p>p</p>','<p>p</p>','<p>p</p>','<p>p</p>','<p>169</p>','0000-00-00','<p>p</p>','<p>p</p>',10,'DISETUJUI','<p>Dekan</p>','DISETUJUI','DISETUJUI','DISETUJUI','','<p>sip</p>','<p>sip</p>','DISETUJUI','DISETUJUI','',NULL,'2018-02-06',200000,'Rp. 200.000,-','Dua Juta Tujuh Ratus Ribu Rupiah','avitwisnu22@gmail.com',''),
(171,'1','2018-02-05','Avit Wisnu Prananda','3','8','<p>q</p>','<p>q</p>','<p>q</p>','<p>q</p>','171','2018-02-14','<p>q</p>','<p>q</p>',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,NULL,NULL,NULL,NULL,'avitwisnu22@gmail.com','34256784'),
(172,'1','2018-02-11','qq','1','13','<p>q</p>','<p>q</p>','<p>q</p>','<p>q</p>','172','2018-02-11','<p>q</p>','<p>q</p>',10,'ON REVIEW',NULL,'ON REVIEW','ON REVIEW','ON REVIEW','','','',NULL,'ON REVIEW',NULL,NULL,NULL,NULL,NULL,NULL,'avitwisnu22@gmail.com',NULL);

/*Table structure for table `rab` */

DROP TABLE IF EXISTS `rab`;

CREATE TABLE `rab` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_proposal` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `catatan` text,
  `tgl_input` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

/*Data for the table `rab` */

insert  into `rab`(`id`,`id_proposal`,`id_user`,`barang`,`harga`,`jumlah`,`total`,`catatan`,`tgl_input`) values 
(30,4,10,'Honor Narasumber',1200000,2,4800000,NULL,NULL),
(31,4,10,'Snack',10000,130,1300000,NULL,NULL),
(32,4,10,'Makan',35000,50,1750000,NULL,NULL),
(33,4,10,'Transport Narasumber',150000,2,300000,NULL,NULL),
(34,4,10,'Penginapan Narasumber',1000000,2,2000000,NULL,NULL),
(35,4,10,'MMT',150000,2,300000,NULL,NULL),
(36,4,10,'Fotocopy',200,1250,250000,NULL,NULL),
(37,4,10,'Dekorasi Taman',250000,1,250000,NULL,NULL),
(38,129,10,'suvenir',10000,2,20000,NULL,NULL),
(39,130,10,'Honor Narasumber (2x)',1000000,2,4000000,NULL,NULL),
(40,130,10,'Snack',8000,130,1040000,NULL,NULL),
(41,130,10,'Makan',30000,50,1500000,NULL,NULL),
(42,130,10,'Transport Narasumber',130000,2,260000,NULL,NULL),
(43,130,10,'Penginapan Narasumber',150000,2,300000,NULL,NULL),
(44,130,10,'MMT',100000,2,200000,NULL,NULL),
(45,130,10,'Fotocopy',150,1250,187500,NULL,NULL),
(46,130,10,'Dekorasi Taman',150000,1,150000,NULL,NULL),
(47,128,10,'buku',5000,1,5000,NULL,NULL),
(48,132,10,'Snack',10000,50,500000,NULL,NULL),
(49,132,10,'Dekorasi',2500000,1,2500000,NULL,NULL),
(50,133,10,'Biaya daftar sekolah',150000,1,150000,NULL,NULL),
(51,133,10,'Biaya Peserta',175000,1,175000,NULL,NULL),
(52,133,10,'Biaya Konsumsi',50000,1,50000,NULL,NULL),
(53,134,10,'Biaya Pendaftaran',800000,1,800000,NULL,NULL),
(54,134,10,'Kaos Team',1000000,1,1000000,NULL,NULL),
(55,134,10,'Konsumsi (2 hari)',30000,15,900000,NULL,NULL),
(56,134,10,'Transportasi (PP)',3000000,1,3000000,NULL,NULL),
(57,136,10,'a',1500,1,1500,NULL,NULL),
(58,137,10,'suvenir',1500,1,1500,NULL,NULL),
(59,138,10,'Snack',1500,1,1500,NULL,NULL),
(60,139,10,'suvenir',1500,1,1500,NULL,NULL),
(61,154,10,'Snack',150000,1,15000,NULL,NULL),
(62,155,10,'Snack',15000,1,15000,NULL,NULL),
(63,157,10,'Snack',15000,1,15000,NULL,NULL),
(64,159,10,'Snack',1500,1,1500,NULL,NULL),
(65,167,10,'Snack',10000,10,100000,NULL,NULL),
(66,169,10,'Snack',15000,10,150000,NULL,NULL),
(67,170,10,'snack',1000,10,10000,NULL,NULL),
(68,171,10,'ssss',1500,1,1500,NULL,NULL),
(69,168,10,'WWWW',1500,1,1500,NULL,NULL);

/*Table structure for table `rab_keu` */

DROP TABLE IF EXISTS `rab_keu`;

CREATE TABLE `rab_keu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_proposal` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `rab_keu` */

insert  into `rab_keu`(`id`,`id_proposal`,`id_user`,`barang`,`harga`,`jumlah`,`total`) values 
(5,130,6,'Honor Narasumber (2x)',1000000,2,4000000),
(6,130,6,'Snack',8000,130,1040000),
(7,130,6,'Makan',30000,50,1500000),
(8,130,6,'Transport Narasumber',130000,2,260000),
(9,130,6,'Penginapan Narasumber',150000,2,300000),
(10,130,6,'MMT',1000000,2,200000),
(11,130,6,'Fotocopy',150,1250,187500),
(12,130,6,'Dekorasi Taman',150000,1,150000),
(13,167,6,'Snack',10000,10,100000),
(14,169,6,'Snack',15000,10,150000),
(15,170,6,'snack',1000,10,10000);

/*Table structure for table `revisi` */

DROP TABLE IF EXISTS `revisi`;

CREATE TABLE `revisi` (
  `id_revisi` int(25) NOT NULL AUTO_INCREMENT,
  `id_pjk` int(25) NOT NULL,
  `id_proposal` int(25) NOT NULL,
  `jenis_proposal` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `nama_pjk` varchar(255) NOT NULL,
  `pendahuluan` text NOT NULL,
  `dasar_hukum` text NOT NULL,
  `rab` text NOT NULL,
  `keluaran` text NOT NULL,
  `revisi1` text NOT NULL,
  `tgl_revisi` date NOT NULL,
  `id_user` int(25) NOT NULL,
  PRIMARY KEY (`id_revisi`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

/*Data for the table `revisi` */

insert  into `revisi`(`id_revisi`,`id_pjk`,`id_proposal`,`jenis_proposal`,`judul`,`nama_pjk`,`pendahuluan`,`dasar_hukum`,`rab`,`keluaran`,`revisi1`,`tgl_revisi`,`id_user`) values 
(58,10,130,'Akademik','KULIAH UMUM PRODI S1 PTE','Avit Wisnu Prananda','Dalam rangka menghasilkan lulusan yang memiliki daya saing di dunia usaha dan dunia industri maka Jurusan Teknik Elektro Fakultas Teknik UNNES menyelenggarakan kuliah umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology”. Kuliah Umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology” akan memberikan gambaran kepada mahasiswa mengenai persaingan dan trend perkembangan dunia teknologi informasi pada saat ini dan waktu yang akan datang. Dengan berbekal pengetahuan dan wawasan tersebut, mahasiswa diharapkan dapat mempersiapkan diri guna menghadapi tantangan perkembangan pesat teknologi informasi.','1.	Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional ;\r\n2.	Undang-undang No.12 Tahun 2012 tentang Pendidikan Tinggi ;\r\n3.	Peraturan Pemerintah No.23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum ;\r\n4.	Keputusan Menteri Pendidikan Nasional No.8 Tahun 2012 tentang Statuta Universitas Negeri Semarang;\r\n5.	Program Kerja Jurusan Teknik Elektro Fakultas Teknik UNNES Tahun 2017.\r\n','130','Tujuan:\r\n1.	Merealisasikan kerjasama antara Teknik Elektro UNNES dengan Southern Cross University Australia dan Mahasarakham University Thailand.\r\n2.	Meningkatkan wawasan mahasiswa tentang perkembangan teknologi informasi\r\n3.	Membangun kesadaran mahasiswa untuk lebih mempersiapkan diri dalam mengahdapi tantangan dunia kerja.\r\n4.	Membangun akses kerjasama dan komunikasi global terkait dengan penelitian\r\n\r\nManfaat:\r\n1.	Mahasiswa memahami tentang trend dan tantangan perkembangan dalam bidang teknik elektro dan teknologi informasi.\r\n2.	Kuliah umum merupakan salah satu kegiatan sebagai syarat penunjang dalam meningkatkan akreditasi prodi.\r\n','revisi tanggal','2017-11-06',1),
(59,10,130,'Akademik','KULIAH UMUM PRODI S1 PTE','Avit Wisnu Prananda','Dalam rangka menghasilkan lulusan yang memiliki daya saing di dunia usaha dan dunia industri maka Jurusan Teknik Elektro Fakultas Teknik UNNES menyelenggarakan kuliah umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology”. Kuliah Umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology” akan memberikan gambaran kepada mahasiswa mengenai persaingan dan trend perkembangan dunia teknologi informasi pada saat ini dan waktu yang akan datang. Dengan berbekal pengetahuan dan wawasan tersebut, mahasiswa diharapkan dapat mempersiapkan diri guna menghadapi tantangan perkembangan pesat teknologi informasi.','1.	Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional ;\r\n2.	Undang-undang No.12 Tahun 2012 tentang Pendidikan Tinggi ;\r\n3.	Peraturan Pemerintah No.23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum ;\r\n4.	Keputusan Menteri Pendidikan Nasional No.8 Tahun 2012 tentang Statuta Universitas Negeri Semarang;\r\n5.	Program Kerja Jurusan Teknik Elektro Fakultas Teknik UNNES Tahun 2017.\r\n','130','Tujuan:\r\n1.	Merealisasikan kerjasama antara Teknik Elektro UNNES dengan Southern Cross University Australia dan Mahasarakham University Thailand.\r\n2.	Meningkatkan wawasan mahasiswa tentang perkembangan teknologi informasi\r\n3.	Membangun kesadaran mahasiswa untuk lebih mempersiapkan diri dalam mengahdapi tantangan dunia kerja.\r\n4.	Membangun akses kerjasama dan komunikasi global terkait dengan penelitian\r\n\r\nManfaat:\r\n1.	Mahasiswa memahami tentang trend dan tantangan perkembangan dalam bidang teknik elektro dan teknologi informasi.\r\n2.	Kuliah umum merupakan salah satu kegiatan sebagai syarat penunjang dalam meningkatkan akreditasi prodi.\r\n','revisi judul','2017-11-06',4),
(60,10,130,'Akademik','KULIAH UMUM PRODI S1 PTE','Avit Wisnu Prananda','Dalam rangka menghasilkan lulusan yang memiliki daya saing di dunia usaha dan dunia industri maka Jurusan Teknik Elektro Fakultas Teknik UNNES menyelenggarakan kuliah umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology”. Kuliah Umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology” akan memberikan gambaran kepada mahasiswa mengenai persaingan dan trend perkembangan dunia teknologi informasi pada saat ini dan waktu yang akan datang. Dengan berbekal pengetahuan dan wawasan tersebut, mahasiswa diharapkan dapat mempersiapkan diri guna menghadapi tantangan perkembangan pesat teknologi informasi.','1.	Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional ;\r\n2.	Undang-undang No.12 Tahun 2012 tentang Pendidikan Tinggi ;\r\n3.	Peraturan Pemerintah No.23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum ;\r\n4.	Keputusan Menteri Pendidikan Nasional No.8 Tahun 2012 tentang Statuta Universitas Negeri Semarang;\r\n5.	Program Kerja Jurusan Teknik Elektro Fakultas Teknik UNNES Tahun 2017.\r\n','130','Tujuan:\r\n1.	Merealisasikan kerjasama antara Teknik Elektro UNNES dengan Southern Cross University Australia dan Mahasarakham University Thailand.\r\n2.	Meningkatkan wawasan mahasiswa tentang perkembangan teknologi informasi\r\n3.	Membangun kesadaran mahasiswa untuk lebih mempersiapkan diri dalam mengahdapi tantangan dunia kerja.\r\n4.	Membangun akses kerjasama dan komunikasi global terkait dengan penelitian\r\n\r\nManfaat:\r\n1.	Mahasiswa memahami tentang trend dan tantangan perkembangan dalam bidang teknik elektro dan teknologi informasi.\r\n2.	Kuliah umum merupakan salah satu kegiatan sebagai syarat penunjang dalam meningkatkan akreditasi prodi.\r\n','revisi pendahuluan','2017-11-06',5),
(61,10,130,'Akademik','KULIAH UMUM PRODI S1 PTE','Avit Wisnu Prananda','Dalam rangka menghasilkan lulusan yang memiliki daya saing di dunia usaha dan dunia industri maka Jurusan Teknik Elektro Fakultas Teknik UNNES menyelenggarakan kuliah umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology”. Kuliah Umum dengan tema “Trends and Challenges in Electrical Engineering and Information Technology” akan memberikan gambaran kepada mahasiswa mengenai persaingan dan trend perkembangan dunia teknologi informasi pada saat ini dan waktu yang akan datang. Dengan berbekal pengetahuan dan wawasan tersebut, mahasiswa diharapkan dapat mempersiapkan diri guna menghadapi tantangan perkembangan pesat teknologi informasi.','1.	Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional ;\r\n2.	Undang-undang No.12 Tahun 2012 tentang Pendidikan Tinggi ;\r\n3.	Peraturan Pemerintah No.23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum ;\r\n4.	Keputusan Menteri Pendidikan Nasional No.8 Tahun 2012 tentang Statuta Universitas Negeri Semarang;\r\n5.	Program Kerja Jurusan Teknik Elektro Fakultas Teknik UNNES Tahun 2017.\r\n','130','Tujuan:\r\n1.	Merealisasikan kerjasama antara Teknik Elektro UNNES dengan Southern Cross University Australia dan Mahasarakham University Thailand.\r\n2.	Meningkatkan wawasan mahasiswa tentang perkembangan teknologi informasi\r\n3.	Membangun kesadaran mahasiswa untuk lebih mempersiapkan diri dalam mengahdapi tantangan dunia kerja.\r\n4.	Membangun akses kerjasama dan komunikasi global terkait dengan penelitian\r\n\r\nManfaat:\r\n1.	Mahasiswa memahami tentang trend dan tantangan perkembangan dalam bidang teknik elektro dan teknologi informasi.\r\n2.	Kuliah umum merupakan salah satu kegiatan sebagai syarat penunjang dalam meningkatkan akreditasi prodi.\r\n','ganti nama','2017-11-06',6);

/*Table structure for table `revisi_laporan` */

DROP TABLE IF EXISTS `revisi_laporan`;

CREATE TABLE `revisi_laporan` (
  `id_revisi` int(100) NOT NULL AUTO_INCREMENT,
  `id_laporan` int(100) NOT NULL,
  `id_pjk` int(100) DEFAULT NULL,
  `nama_pjk` varchar(100) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `catatan_revisi` text,
  `id_user` int(100) DEFAULT NULL,
  `tgl_revisi` date DEFAULT NULL,
  PRIMARY KEY (`id_revisi`),
  KEY `id_revisi` (`id_revisi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `revisi_laporan` */

insert  into `revisi_laporan`(`id_revisi`,`id_laporan`,`id_pjk`,`nama_pjk`,`judul`,`catatan_revisi`,`id_user`,`tgl_revisi`) values 
(3,119,10,'Avit Wisnu Prananda','KULIAH UMUM PRODI S1 PTE','tambah dokumentaasi',7,'2017-11-06');

/*Table structure for table `tingkatan` */

DROP TABLE IF EXISTS `tingkatan`;

CREATE TABLE `tingkatan` (
  `id_tingkatan` int(20) NOT NULL AUTO_INCREMENT,
  `nama_tingkatan` varchar(255) NOT NULL,
  `keterangan_tingkatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tingkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `tingkatan` */

insert  into `tingkatan`(`id_tingkatan`,`nama_tingkatan`,`keterangan_tingkatan`) values 
(1,'admin','Admin'),
(2,'pjk','Pjk'),
(3,'wd1','Wakil Dekan I'),
(4,'wd2','Wakil Dekan II'),
(5,'wd3','Wakil Dekan III'),
(6,'kabag_tu','Kabag Tata Usaha'),
(7,'kabag_akun','Kasubag Akuntansi'),
(8,'kabag_keu','Kasubag Keuangan'),
(9,'bendahara','Bendahara'),
(10,'kajur_te','Kajur Teknik Elektro'),
(12,'dekan','Dekan'),
(13,'kajur_tm','Kajur Teknik Mesin'),
(14,'kajur_ts','Kajur Teknik Sipil'),
(15,'kajur_tk','Kajur Teknik Kimia'),
(16,'kajur_tjp','Kajur Teknik Jasa dan Produksi'),
(17,'kaprodi_ptb','Kaprodi Pendidikan Teknik Bangunan'),
(18,'kaprodi_ts','Kaprodi Teknik Sipil'),
(19,'kaprodi_ta','Kaprodi Teknik Arsitektur'),
(20,'kaprodi_ptm','Kaprodi Pendidikan Teknik Mesin'),
(21,'kaprodi_pto','Kaprodi Pendidikan Teknik Otomotif'),
(22,'kaprodi_tm','Kaprodi Teknik Mesin'),
(23,'kaprodi_pte','Kaprodi Pendidikan Teknik Elektro'),
(24,'kaprodi_ptik','Kaprodi Pendidikan Teknik Informatika dan Komputer'),
(25,'kaprodi_te','Kaprodi Teknik Elektro'),
(26,'kaprodi_pkk','Kaprodi Pendidikan Kesejahteraan Keluarga'),
(27,'kaprodi_busana','Kaprodi Pendidikan Tata Busana'),
(28,'kaprodi_boga','Kaprodi Pendidikan Tata Boga'),
(29,'kaprodi_kecantikan','Kaprodi Pendidikan Tata Kecantikan'),
(30,'kaprodi_tk','Kaprodi Teknik Kimia');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `tingkatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama`,`username`,`password`,`tingkatan`) values 
(1,'I Made Sudana','wd1','7df782b10a945d8ff6a4e83f22a11b03','wd1'),
(2,'Sucipto','wd2','d5a09a7f1a424d040c110a0bca8546de','wd2'),
(3,'Wirawan Sumbodo','wd3','b9d466a4611110624187e87a699bedda','wd3'),
(4,'Widi Widayat','kabag_tu','25ff0568fe053e492ca3e73aece9d53a','kabag_tu'),
(5,'Mardiyantoro','kabag_akun','9c15f3f270b3c8fc46d09a742dcfb380','kabag_akun'),
(6,'Antonius Bangun Hadi','kabag_keu','8e93cd81aee5aa42bf0783d8fafe8d94','kabag_keu'),
(7,'Bendahara','bendahara','c9ccd7f3c1145515a9d3f7415d5bcbea','bendahara'),
(8,'Nur Qudus','dekan','3da2f457ad7c0edf1c94e1ea87b0818d','dekan'),
(9,'Admin','admin','21232f297a57a5a743894a0e4a801fc3','admin'),
(10,'Avit Wisnu Prananda','avit22','1b1fa0fb65ab53aec17640933dfff39e','pjk'),
(11,'Yanuar Ibnu Sabila','yanuar22','19a10abcc5a1841f8554c65bceafadf2','pjk'),
(31,'Kajur Teknik Elektro','kajurte','e5ed3120db2dce3c571b58194330ab81','kajur_te'),
(32,'Kajur Teknik Mesin','kajurtm','c4e337c8d18ed384c599df44009d44c9','kajur_tm'),
(33,'Kajur Teknik Jasa dan Produksi','kajurtjp','f12d8064f9bdc58dac44a532a70bffcf','kajur_tjp'),
(34,'Kajur Teknik Kimia','kajurtk','b04fcc54f60b1214856fd17c1693b339','kajur_tk'),
(35,'Kajur Teknik Sipil','kajurts','fe4ff796fdc70987076d4522f25dbfc9','kajur_ts'),
(36,'Kaprodi Pendidikan Teknik Bangunan','kaprodiptb','0abda7be5425bdc65724e27d9c666c89','kaprodi_ptb'),
(37,'Kaprodi Teknik Sipil','kaprodits','ccdcf595b7f711117cf8c3b2aa14ac79','kaprodi_ts'),
(38,'Kaprodi Teknik Arsitektur','kaprodita','30c578ef81d69f4f105c61b770c1f568','kaprodi_ta'),
(39,'kaprodi Pendidikan Teknik Mesin','kaprodiptm','41195d917295f51c2400cbbb447bc661','kaprodi_ptm'),
(40,'Kaprodi Pendidikan Teknik Otomotif','kaprodipto','463a6fb52d304c285032df91412f579f','kaprodi_pto'),
(41,'Kaprodi Teknik Mesin','kaproditm','4d73411775253c0e2881e58ea10c4ed7','kaprodi_tm'),
(42,'Kaprodi Pendidikan Teknik Elektro','Kaprodipte','849c856e215fa1da8b011d361b5f18a3','kaprodi_pte'),
(43,'Kaprodi Pendidikan Teknik Informatika dan Komputer','kaprodiptik','2a9fba28fa3c5efcc6c27928312d5cc1','kaprodi_ptik'),
(44,'Kaprodi Teknik Elektro','kaprodite','364867564cb1dfd404b2f966920506f5','kaprodi_te'),
(45,'Kaprodi Pendidikan Kesejahteraan Keluarga','kaprodipkk','24b447cfe63fd0a7db3e824820442cf7','kaprodi_pkk'),
(46,'Kaprodi Pendidikan Tata Busana','kaprodibusana','cc5ee1534e7fe8f5e08b2e91fbc2605e','kaprodi_busana'),
(47,'Kaprodi Tata Boga','kaprodiboga','410a10fed95fdace917196e8ab49ae5e','kaprodi_boga'),
(48,'Kaprodi Tata Kecantikan','kaprodikecantikan','52359af2a50ef3173037d682ff9259ce','kaprodi_kecantikan'),
(49,'Kaprodi Teknik Kimia','kaproditk','d6b6c517a0850a75a7a5fc3a204496d3','kaprodi_tk'),
(51,'Admin_ft','adminft','8437ed6149465101b42de4d0542fd9bd','pjk');

/*Table structure for table `wd` */

DROP TABLE IF EXISTS `wd`;

CREATE TABLE `wd` (
  `id_wd` int(25) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `urusan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_wd`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `wd` */

insert  into `wd`(`id_wd`,`nama`,`urusan`) values 
(1,'Dr. I Made Sudana, M.Pd.','Akademik'),
(2,'Drs. Sucipto, M.T.','Umum'),
(3,'Dr. Wirawan Sumbodo, M.T','Kemahasiswaan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
