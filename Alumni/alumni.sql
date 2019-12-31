-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2019 pada 14.12
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `ID_BERITA` int(11) NOT NULL,
  `ID_KATEGORIBERITA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `JUDUL` varchar(100) DEFAULT NULL,
  `ISI` text,
  `TANGGAL_UPLOAD` date DEFAULT NULL,
  `GAMBAR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`ID_BERITA`, `ID_KATEGORIBERITA`, `ID_USER`, `JUDUL`, `ISI`, `TANGGAL_UPLOAD`, `GAMBAR`) VALUES
(1, 1, 28, 'Hardiknas', 'Hari Pendidikan Nasional ditetapkan jatuh pada tanggal 2 Mei. Tanggal tersebut, dimana merupakan tanggal lahir dari Ki Hadjar Dewantara. Beliau adalah pahlawan yang berjasa besar dalam dunia pendidikan di Indonesia. Ki Hadjar Dewantara lahir di Yogyakarta tepatnya pada tanggal 2 Mei 1889. Atas jasa-', '2019-12-01', 'professional-stylish-gaming-equipment-desktop-pc-vector-26301500.jpg'),
(2, 4, 28, 'coba', 'coba', '2019-12-01', 'lowongan1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grup`
--

CREATE TABLE `grup` (
  `ID_GRUP` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `DESKRIPSI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `grup`
--

INSERT INTO `grup` (`ID_GRUP`, `NAMA`, `DESKRIPSI`) VALUES
(1, 'Admin', 'admin'),
(2, 'Alumni', 'alumni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `ID_KATEGORIBERITA` int(11) NOT NULL,
  `NM_KATEGORI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`ID_KATEGORIBERITA`, `NM_KATEGORI`) VALUES
(1, 'Pendidikan'),
(4, 'Olahraga'),
(5, 'Lowongan Kerja'),
(6, 'Lomba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_diskusi`
--

CREATE TABLE `kategori_diskusi` (
  `ID_KATEGORIDISK` int(11) NOT NULL,
  `KATEGORI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_diskusi`
--

INSERT INTO `kategori_diskusi` (`ID_KATEGORIDISK`, `KATEGORI`) VALUES
(1, 'Kuliah'),
(2, 'Pekerjaan'),
(3, 'Alumni'),
(4, 'Religi'),
(5, 'Prestasi'),
(7, 'Lomba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar_diskusi`
--

CREATE TABLE `komentar_diskusi` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_DISKUSI` int(11) NOT NULL,
  `KOMENTAR` varchar(100) DEFAULT NULL,
  `TGL_KOMENTAR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar_diskusi`
--

INSERT INTO `komentar_diskusi` (`ID_KOMENTAR`, `ID_USER`, `ID_DISKUSI`, `KOMENTAR`, `TGL_KOMENTAR`) VALUES
(1, 3, 1, 'INI KOMENTAR 1', '2019-11-03'),
(2, 7, 1, 'INI KOMENTAR 2', '2019-11-03'),
(3, 10, 2, 'INI KOMENTAR PERTAMA', '2019-11-04'),
(4, 8, 2, 'INI KOMENTAR KEDUA', '2019-11-04'),
(5, 13, 1, 'INI KOMENYTAR 3', '2019-11-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_diskusi`
--

CREATE TABLE `post_diskusi` (
  `ID_DISKUSI` int(11) NOT NULL,
  `ID_KATEGORIDISK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `TITLE` varchar(100) DEFAULT NULL,
  `CONTENT` varchar(200) DEFAULT NULL,
  `TANGGAL_POST` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post_diskusi`
--

INSERT INTO `post_diskusi` (`ID_DISKUSI`, `ID_KATEGORIDISK`, `ID_USER`, `TITLE`, `CONTENT`, `TANGGAL_POST`) VALUES
(1, 1, 2, 'COBA', 'INI PERCOBAAN', '2019-11-03'),
(2, 2, 4, 'BERITA BARU', 'INI BERITA BARU', '2019-11-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `NISN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `NM_LENGKAP` varchar(100) DEFAULT NULL,
  `JENKEL` varchar(25) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(75) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELP` varchar(15) DEFAULT NULL,
  `NM_AYAH` varchar(100) DEFAULT NULL,
  `PEKERJAAN_AYAH` varchar(100) DEFAULT NULL,
  `NM_IBU` varchar(100) DEFAULT NULL,
  `PEKERJAAN_IBU` varchar(100) DEFAULT NULL,
  `THN_MASUK` varchar(15) DEFAULT NULL,
  `THN_LULUS` varchar(15) DEFAULT NULL,
  `NO_IJAZAH` varchar(25) DEFAULT NULL,
  `NO_SKHUN` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`NISN`, `ID_USER`, `id_status`, `NM_LENGKAP`, `JENKEL`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `ALAMAT`, `NO_TELP`, `NM_AYAH`, `PEKERJAAN_AYAH`, `NM_IBU`, `PEKERJAAN_IBU`, `THN_MASUK`, `THN_LULUS`, `NO_IJAZAH`, `NO_SKHUN`) VALUES
(32001, 34, 2, 'Agung Wahyu Gunawan', 'Pria', 'JEMBER', '1999-06-23', 'JEMBER', '099121', 'Widodo', 'Wiraswasta', 'Suyanti', 'PNS', '2015', '2018', '099991222', '099991212'),
(320012, 28, 1, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', ''),
(2013001, 2, 2, 'Tania Nuari Cicia', 'Perempuan', 'Jember', '1999-11-03', 'Sumbersari', '089213888999', 'Parman', 'wiraswasta', 'sisil', 'Guru', '2013', '2016', '102001', '202001'),
(2013002, 3, 1, 'Yudha Widya Pratama', 'Pria', 'JEMEBR', '2000-11-10', 'SITUBONDO', '081223892123', 'BUDI', 'PNS', 'SEKAR', '-', '2013', '2016', '102002', '202002'),
(2013003, 4, 1, 'Aldi Syafi Bachtiar', 'PRIA', 'LUMAJANG', '2000-09-03', 'BATU RADEN', '0813452318', 'PONIMAN', 'BURUH', 'INDRIANI', 'WIRASWASTA', '2013', '2016', '102003', '202003'),
(2013004, 5, 1, 'Alfiandra Gabriel Alfaro', 'PRIA', 'JEMBER', '1999-01-23', 'MASTRIP TIMUR', '0899812223', 'PARMAN', 'PNS', 'SURTI', '-', '2013', '2016', '102004', '202004'),
(2013005, 6, 1, 'Aurelia Permata Ayu Herlina', 'PEREMPUAN', 'JEMBER', '1997-01-01', 'PAGAH', '081234555666', 'BUDI ARYA', 'PNS', 'SUTEMI', '-', '2013', '2016', '102005', '202005'),
(2014001, 7, 2, 'Dwi Nurma Safira', 'PEREMPUAN', 'JEMBER', '1998-01-03', 'JEMBER', '081234222111', 'ARYA', 'PEGAWAI', 'INDAH', 'PNS', '2014', '2017', '103001', '203001'),
(2014002, 8, 2, 'Eknasya Cikal Syifa', 'PEREMPUAN', 'JEMBER', '1998-02-04', 'JEMBER', '081234898777', 'NANDO', 'WIRAUSAHA', 'AJENG', 'WIRAUSAHA', '2014', '2017', '103002', '203002'),
(2014003, 9, 2, 'Febriyan Adam', 'PRIA', 'JEMBER', '1998-09-08', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2014004, 10, 1, 'Flora Nafisa', 'PEREMPUAN', 'JEMBER', '1998-01-01', 'JEMBER', '08189881221', 'HERIANSYAH', 'PNS', 'ARIANI', '-', '2014', '2017', '1030012', '1290001'),
(2014005, 11, 1, 'Laili Nur Hidayati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014', '2017', '09888819', '1212133'),
(2015001, 12, 1, 'M. Aqso Al Hafis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2015002, 13, 2, 'M. Rizqi Ardan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2015003, 14, 1, 'Mohammad Dwi Miftahul Huda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2015004, 15, 1, 'Muhammad Aqhil Firmansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2015005, 16, 1, 'Muhammad Kevin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2016001, 17, 1, 'Muhammad Raehan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL),
(2016002, 18, 1, 'Syauqhi Mushabikin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL),
(2016003, 19, 2, 'Nadiya Oktaviany', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL),
(2016004, 20, 1, 'Nur Alifiyah Aprilia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL),
(2016005, 21, 1, 'Rebecca Zahir Albara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_alumni`
--

CREATE TABLE `status_alumni` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_alumni`
--

INSERT INTO `status_alumni` (`id_status`, `nama_status`) VALUES
(1, 'Kuliah'),
(2, 'Kerja'),
(4, 'jomblo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_GRUP` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `NM_LENGKAP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_GRUP`, `USERNAME`, `PASSWORD`, `EMAIL`, `NM_LENGKAP`) VALUES
(2, 2, '2013001', '2013001', 'tania@gmail.com', 'Tania Nuari C'),
(3, 2, '2013002', '2013002', 'yud@gmail.com', 'Yudha Widya Pratama'),
(4, 2, '2013003', '2013003', 'aldi23@gmail.com', 'Aldi Syafi Bachtiar'),
(5, 2, '2013004', '2013004', 'Alfiindr@gmail.com', 'Alfiandra Gabriel Alfaro'),
(6, 2, '2013005', '2013005', 'liaaa12@gmail.com', 'Aurelia Permata Ayu Herlina'),
(7, 2, '2014001', '2014001', 'nurm@gmail.com', 'Dwi Nurma Safira'),
(8, 2, '2014002', '2014002', 'cikl999@gmail.com', 'Eknasya Cikal Syifa'),
(9, 2, '2014003', '2014003', 'adaam@gmail.com', 'Febriyan Adam'),
(10, 2, '2014004', '2014004', 'Nafffis@gmail.com', 'Flora Nafisa'),
(11, 2, '2014005', '2014005', 'laililili@gmail.com', 'Laili Nur Hidayati'),
(12, 2, '2015001', '2015001', 'hafizqw11@gmail.com', 'M. Aqso Al Hafis'),
(13, 2, '2015002', '2015002', 'ardanwq@gmail.com', 'M. Rizqi Ardan'),
(14, 2, '2015003', '2015003', 'huda99@gmail.com', 'Mohammad Dwi Miftahul Huda'),
(15, 2, '2015004', '2015004', 'aqhiil@gmail.com', 'Muhammad Aqhil Firmansyah'),
(16, 2, '2015005', '2015005', 'kevvinn@gmail.com', 'Muhammad Kevin'),
(17, 2, '2016001', '2016001', 'raehanal@gmail.com', 'Muhammad Raehan'),
(18, 2, '2016002', '2016002', 'syauqymsb@gmail.com', 'Syauqhi Mushabikin'),
(19, 2, '2016003', '2016003', 'ndya@gmail.com', 'Nadiya Oktaviany'),
(20, 2, '2016004', '2016004', 'aprillll@gmail.com', 'Nur Alifiyah Aprilia'),
(21, 2, '2016005', '2016005', 'albaraazh@gmail.com', 'Rebecca Zahir Albara'),
(28, 1, 'ADMIN', 'ADMIN', 'DENI@DENI.COM', 'AGUNG'),
(34, 2, '320012', '320012', 'agungwahyu1@gmail.com', 'Agung Wahyu G');

--
-- Trigger `user`
--
DELIMITER $$
CREATE TRIGGER `data_user` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO
profil
SET
ID_USER = NEW.ID_USER,
NISN = NEW.USERNAME,
NM_LENGKAP = NEW.NM_LENGKAP
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `hps_user` AFTER DELETE ON `user` FOR EACH ROW DELETE FROM
profil
WHERE
ID_USER = old.ID_USER
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`ID_BERITA`),
  ADD KEY `ID_KATEGORIBERITA` (`ID_KATEGORIBERITA`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`ID_GRUP`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`ID_KATEGORIBERITA`);

--
-- Indexes for table `kategori_diskusi`
--
ALTER TABLE `kategori_diskusi`
  ADD PRIMARY KEY (`ID_KATEGORIDISK`);

--
-- Indexes for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  ADD PRIMARY KEY (`ID_KOMENTAR`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `ID_DISKUSI` (`ID_DISKUSI`);

--
-- Indexes for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  ADD PRIMARY KEY (`ID_DISKUSI`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `ID_KATEGORIDISK` (`ID_KATEGORIDISK`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`NISN`);

--
-- Indexes for table `status_alumni`
--
ALTER TABLE `status_alumni`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `ID_GRUP` (`ID_GRUP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID_BERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `ID_GRUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `ID_KATEGORIBERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori_diskusi`
--
ALTER TABLE `kategori_diskusi`
  MODIFY `ID_KATEGORIDISK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  MODIFY `ID_DISKUSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_alumni`
--
ALTER TABLE `status_alumni`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`ID_KATEGORIBERITA`) REFERENCES `kategori_berita` (`ID_KATEGORIBERITA`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  ADD CONSTRAINT `komentar_diskusi_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `komentar_diskusi_ibfk_2` FOREIGN KEY (`ID_DISKUSI`) REFERENCES `post_diskusi` (`ID_DISKUSI`);

--
-- Ketidakleluasaan untuk tabel `post_diskusi`
--
ALTER TABLE `post_diskusi`
  ADD CONSTRAINT `post_diskusi_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `post_diskusi_ibfk_2` FOREIGN KEY (`ID_KATEGORIDISK`) REFERENCES `kategori_diskusi` (`ID_KATEGORIDISK`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`ID_GRUP`) REFERENCES `grup` (`ID_GRUP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
