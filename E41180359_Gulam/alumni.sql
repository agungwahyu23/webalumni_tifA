-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 06:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `berita`
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
-- Table structure for table `grup`
--

CREATE TABLE `grup` (
  `ID_GRUP` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `DESKRIPSI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`ID_GRUP`, `NAMA`, `DESKRIPSI`) VALUES
(1, 'Admin', 'admin'),
(2, 'Alumni', 'alumni');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `ID_KATEGORIBERITA` int(11) NOT NULL,
  `NM_KATEGORI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_diskusi`
--

CREATE TABLE `kategori_diskusi` (
  `ID_KATEGORIDISK` int(11) NOT NULL,
  `KATEGORI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_diskusi`
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
-- Table structure for table `post_diskusi`
--

CREATE TABLE `post_diskusi` (
  `ID_DISKUSI` int(11) NOT NULL,
  `ID_KATEGORIDISK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `TITLE` varchar(100) DEFAULT NULL,
  `CONTENT` varchar(200) DEFAULT NULL,
  `TANGGAL_POST` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `NISN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
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
  `NO_SKHUN` varchar(25) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`NISN`, `ID_USER`, `NM_LENGKAP`, `JENKEL`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `ALAMAT`, `NO_TELP`, `NM_AYAH`, `PEKERJAAN_AYAH`, `NM_IBU`, `PEKERJAAN_IBU`, `THN_MASUK`, `THN_LULUS`, `NO_IJAZAH`, `NO_SKHUN`, `STATUS`) VALUES
(1, 2, 'DENI SATRIYO', 'PRIA', 'JEMBER', '2019-11-01', 'JEMBER', '093712', 'DONO', 'PNS', 'DINI', 'PNS', '2015', '2018', '2211', '22112', 'KERJA'),
(2, 3, 'GULAM AHMAD', 'PRIA', 'JEMBER', '2019-11-03', 'JEMBER', '0988999', 'DONO', 'PNS', 'DINI', 'PNS', '2015', '2019', '22112', '2211', 'KULIAH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_GRUP` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `ID_GRUP`, `USERNAME`, `PASSWORD`, `EMAIL`, `FIRST_NAME`, `LAST_NAME`) VALUES
(2, 2, 'DENI', 'DENI123', 'DENI@DENI.COM', 'DENI', 'INED'),
(3, 2, 'GULAM', 'GULAM123', 'GULAM@GULAM.COM', 'GULAM', 'GULAMO'),
(4, 1, 'ADMIN', 'ADMIN', 'agulam@yahoo.com', 'ADMIN', 'ADMIN'),
(5, 2, 'mubarik', 'ahmad', 'gulam@gmail.com', 'ganas', 'sayang');

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
  MODIFY `ID_KATEGORIBERITA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_diskusi`
--
ALTER TABLE `kategori_diskusi`
  MODIFY `ID_KATEGORIDISK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  MODIFY `ID_DISKUSI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`ID_KATEGORIBERITA`) REFERENCES `kategori_berita` (`ID_KATEGORIBERITA`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  ADD CONSTRAINT `komentar_diskusi_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `komentar_diskusi_ibfk_2` FOREIGN KEY (`ID_DISKUSI`) REFERENCES `post_diskusi` (`ID_DISKUSI`);

--
-- Constraints for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  ADD CONSTRAINT `post_diskusi_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `post_diskusi_ibfk_2` FOREIGN KEY (`ID_KATEGORIDISK`) REFERENCES `kategori_diskusi` (`ID_KATEGORIDISK`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`ID_GRUP`) REFERENCES `grup` (`ID_GRUP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
