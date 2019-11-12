-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2019 pada 08.25
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
  `ISI` varchar(300) DEFAULT NULL,
  `TANGGAL_UPLOAD` date DEFAULT NULL,
  `GAMBAR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Lomba'),
(3, 'Olahraga');

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
(6, 'Lomba');

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
(1, 2, 1, 'Loker', 'Ada yang punya loker?', '2019-11-10');

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
(0, 0, 1, 'Ahmad Gulam', 'PRIA', 'JEMBER', '2000-10-10', 'JEMBER', '089213321222', 'DONO', 'PNS', 'AMINAH', 'PNS', '2014', '2017', '20171010', '20171011'),
(1, 2, 0, 'DENI SATRIYO', 'PRIA', 'JEMBER', '2019-11-01', 'JEMBER', '093712', 'DONO', 'PNS', 'DINI', 'PNS', '2015', '2018', '2211', '22112'),
(2, 3, 0, 'GULAM AHMAD', 'PRIA', 'JEMBER', '2019-11-03', 'JEMBER', '0988999', 'DONO', 'PNS', 'DINI', 'PNS', '2015', '2019', '22112', '2211'),
(20190101, 2, 1, 'AGUNG WAHYU', 'PRIA', 'JEMBER', '2000-06-23', 'JEMBER', '085816908859', 'DONI', 'PNS', 'AMINAH', 'PNS', '2015', '2018', '20171011', '20171012');

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
(2, 'Kerja');

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
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_GRUP`, `USERNAME`, `PASSWORD`, `EMAIL`, `name`) VALUES
(1, 2, 'AGUNGW', 'AGUNGW123', 'AGUNGW@GMAIL.COM', 'AGUNG WAHYU GUNAWAN'),
(2, 2, 'DENI', 'DENI123', 'DENI@DENI.COM', 'DENI'),
(3, 2, 'GULAM', 'GULAM123', 'GULAM@GULAM.COM', 'GULAM'),
(4, 1, 'ADMIN', 'ADMIN', 'agulam@yahoo.com', 'ADMIN'),
(5, 2, 'mubarik', 'ahmad', 'gulam@gmail.com', 'ganas'),
(6, 2, 'Dinda', 'Dinda123', 'dinda@yahoo.com', 'Dinda Ayu L');

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
  MODIFY `ID_BERITA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `ID_GRUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `ID_KATEGORIBERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori_diskusi`
--
ALTER TABLE `kategori_diskusi`
  MODIFY `ID_KATEGORIDISK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  MODIFY `ID_DISKUSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_alumni`
--
ALTER TABLE `status_alumni`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
