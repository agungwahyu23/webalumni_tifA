-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Jan 2020 pada 07.09
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_test`
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
(1, 1, 1, 'Hardiknas', 'Hari Pendidikan Nasional ditetapkan jatuh pada tanggal 2 Mei. Tanggal tersebut, dimana merupakan tanggal lahir dari Ki Hadjar Dewantara. Beliau adalah pahlawan yang berjasa besar dalam dunia pendidikan di Indonesia. Ki Hadjar Dewantara lahir di Yogyakarta tepatnya pada tanggal 2 Mei 1889. Atas jasa-', '2019-12-01', 'professional-stylish-gaming-equipment-desktop-pc-vector-26301500.jpg'),
(4, 5, 1, ' REKRUTMEN EKSTERNAL TINGKAT SLTA PEMENUHAN FORMASI KONDEKTUR PT KERETA API INDONESIA PERSERO TAHUN ', 'PT Kereta Api Indonesia (Persero) merupakan Badan Usaha Milik Negara (BUMN) Indonesia yang menyelenggarakan jasa angkutan Perkeretaapian dan bisnis usaha penunjang lainnya dengan mengutamakan Integritas, Profesional, Keselamatan, Inovasi dan Pelayanan Prima, memberikan kesempatan kepada putra terbaik Bangsa Indonesia untuk bergabung dan berkarir di PT Kereta Api Indonesia (Persero) dalam rangka pemenuhan kebutuhan pekerja formasi Kondektur, dengan kriteria dan persyaratan sebagai berikut :<br />\r\n<br />\r\n <br />\r\n<br />\r\nKRITERIA PELAMAR :<br />\r\n<br />\r\n    Warga Negara Indonesia (WNI);<br />\r\n    Jenis Kelamin Pria;<br />\r\n    Sehat jasmani dan rohani;<br />\r\n    Memiliki ijazah SLTA (SMA/MA/SMK/MAK) dengan Nilai Ujian Nasional rata-rata minimal 6,0 (enam koma nol);<br />\r\n    Usia pelamar per 01 Februari 2019 serendah-rendahnya 18 (delapan belas) tahun dan setinggi-tingginya 25 (dua puluh lima) tahun;<br />\r\n    Memiliki tinggi badan minimal 165 cm dengan berat badan ideal;<br />\r\n    Berpenampilan menarik;<br />\r\n    Berkelakuan baik;<br />\r\n    Tidak bertato dan tidak bertindik;<br />\r\n    Tidak terlibat narkoba atau psikotropika;<br />\r\n    Tidak pernah dihukum penjara berdasarkan putusan pengadilan yang telah berkekuatan hukum tetap;<br />\r\n    Tidak pernah diberhentikan di anak perusahaan atau institusi lainnya dikarenakan hukuman disiplin;<br />\r\n    Lulus dalam seleksi calon pekerja baru yang diselenggarakan oleh panitia rekruitmen PT Kereta Api Indonesia (Persero) tahun 2019.<br />\r\n<br />\r\n <br />\r\n<br />\r\n KETENTUAN LAIN :<br />\r\n<br />\r\n    Bersedia ditempatkan di seluruh wilayah kerja PT Kereta Api Indonesia (Persero);<br />\r\n    Penempatan calon pekerja disesuaikan dengan kebutuhan Perusahaan;<br />\r\n    Pemilihan lokasi seleksi tidak menentukan penempatan calon pekerja;<br />\r\n    Bersedia mengundurkan diri dari hubungan kerja dengan institusi lainnya apabila telah memenuhi persyaratan dan dinyatakan lulus seleksi.<br />\r\n<br />\r\n <br />\r\n<br />\r\nPERSYARATAN LAMARAN :<br />\r\n<br />\r\n    Ijazah SLTA (SMA/MA/SMK/MAK) asli atau fotocopy legalisir;<br />\r\n    Nilai Ujian Nasional asli atau fotocopy legalisir;<br />\r\n    Kartu tanda penduduk (KTP) atau Surat Keterangan Kependudukan yang masih berlaku;<br />\r\n    Pas foto terbaru background berwarna biru, menggunakan kemeja putih.<br />\r\n<br />\r\nKeterangan:<br />\r\nDokumen persyaratan lamaran poin 1 s.d 3 menggunakan format "pdf" dengan ukuran maksimal 2 mb;<br />\r\nPas Foto terbaru, menggunakan format jpg/jpeg dengan ukuran maksimal 2 mb;<br />\r\n<br />\r\n <br />\r\n<br />\r\nTAHAPAN SELEKSI :<br />\r\n<br />\r\nTahap 1    : Seleksi Administrasi<br />\r\n<br />\r\nTahap 2    : Seleksi Kesehatan Awal<br />\r\n<br />\r\nTahap 3    : Seleksi Psikologi<br />\r\n<br />\r\nTahap 4    : Seleksi Wawancara<br />\r\n<br />\r\nTahap 5    : Seleksi Kesehatan Akhir<br />\r\n<br />\r\n <br />\r\n<br />\r\nPROSEDUR REGISTRASI DAN APPLY :<br />\r\n<br />\r\n    Baca seluruh informasi dan prosedur pelaksanaan rekrut serta Buku Panduan Rekrutmen Online yang dapat didownload pada menu PANDUAN > Panduan > Panduan Registrasi dan Apply Lowongan > â€œDOWNLOAD BUKU PANDUANâ€.<br />\r\n    Calon pelamar yang belum memiliki akun, terlebih dahulu melakukan registrasi dan upload dokumen sesuai persyaratan lamaran.<br />\r\n    Calon pelamar wajib memastikan bahwa email yang digunakan pada saat registrasi adalah email aktif dan data yang diinput harus sesuai identitas diri seperti KTP, Ijazah, dll serta tidak melakukan perubahan data/dokumen setelah melakukan apply sampai proses rekrutmen selesai.<br />\r\n    Calon pelamar yang sudah memiliki akun di website https://recruitment.kai.id/ harus memastikan bahwa dokumen persyaratan lamaran sudah diupload di akun pelamar yang ada di website.<br />\r\n    Bagi calon pelamar yang berminat mengikuti rekrut sesuai formasi yang ditawarkan, wajib melakukan proses apply pada akun masing-masing mulai tanggal 12 Februari 2019 s.d 16 Februari 2019 dan hanya bisa mengikuti 1 (satu) event rekrut saja.<br />\r\n    Bagi calon pelamar yang sudah melakukan upload dan melengkapi data, tetapi tidak melakukan proses apply di akunnya pada tanggal 12 Februari 2019 s.d 16 Februari 2019, maka dianggap tidak mengikuti kegiatan rekrut ini.<br />\r\n    Lokasi Seleksi berdasarkan pemilihan lokasi daerah (Jakarta, Bandung, Semarang, Yogyakarta dan Surabaya) oleh pelamar pada saat melakukan APPLY (Pendaftaran) dan kebijakan Panitia Rekrutmen.<br />\r\n    Pelamar yang lulus seleksi tahap I (Seleksi Administrasi) berhak mengikuti seleksi tahap II (Seleksi Kesehatan Awal) yang akan diumumkan melalui website https://recruitment.kai.id/ rencana tanggal 28 Februari 2019;<br />\r\n    Rekrutmen PT Kereta Api Indonesia (Persero) tidak dipungut biaya apapun dan tidak menggunakan sistem refund atau penggantian biaya transportasi maupun akomodasi yang berkaitan dengan pelaksanaan recruitment dan dimohon untuk mengabaikan pihak-pihak yang menjanjikan dapat membantu meluluskan peserta rekrut.<br />\r\n    Setiap Pengumuman Seleksi secara resmi hanya dipublish melalui website : https://recruitment.kai.id/.<br />\r\n    Seleksi penerimaan pekerja menggunakan sistem gugur dan keputusan panitia tidak dapat diganggu gugat.<br />\r\n<br />\r\n<i>sumber: https://recruitment.kai.id/lowongan_review?id=U1ZBc20xNGQ2MW0xNGRNQXp2 </i>', '2019-12-08', 'logo-kereta-api-baru-cdr-574d84880123bda309d001d0.png'),
(6, 5, 28, 'Pertamina Energi', 'PT Pertamina adalah perusahaan minyak dan gas yang berskala nasional yang bertujuan utama untuk memenuhi kebutuhan masyarakat akan bahan bakar dan minyak.Sebagai lokomotif perekonomian bangsa Pertamina merupakan perusahaan milik negara yang bergerak di bidang energi meliputi minyak, gas serta energi baru.Pertamina menjalankan kegiatan bisnisnya berdasarkan prinsip-prinsip tata kelola korporasi yang baik sehingga dapat berdaya saing yang tinggi di dalam era globalisasi.Dengan pengalaman lebih dari 55 tahun, Pertamina semakin percaya diri untuk berkomitmen menjalankan kegiatan bisnisnya secara profesional dan penguasaan teknis yang tinggi mulai dari kegiatan hulu sampai hilir.Berorientasi pada kepentingan pelanggan juga merupakan suatu hal yang menjadi komitmen Pertamina,agar dapat berperan dalam memberikan nilai tambah bagi kemajuan dan kesejahteraan bangsa Indonesia Di Tahun 2019 Ini PT.PERTAMINA(Persero) Membuka Lowongan Kerja Baru & Mengundang Para Tenaga Kerja Profesional Uraian Pekerjaan Lowongan yang kami tawarkan adapun sebagai berikut: 1.Kepala Produksi 2.Operator Produksi 3.Accounting & Finance 4.Administrasi 5.Sekertaris 6.Manager Operasional 7.Asisten Manager 8.Management 9.Asisten Management 10.Keuangan 11.IT/Progammer 12.Heathcare & Medical 13.Customer Service 14.Human Resources 15.Statistika 16.Psikologi Dan Konseling 17.Hukum 18.Labotarium 19.SPG & SPB 20.Business Development 21.MBA Commercial Development Program 22.Land Internships 23.Business Strategy 24.Downstream & Chemicals Development Program 25.Senior Drilling Engineer 26.Drilling and Completions 27.Drilling Engineering 28.Completion Engineering 29.Subsea Intervention Engineering 30.Drill Site/Well Site Management 31.Senior Community Empowerment 32.Facilities Design Engineering 33.Petroleum Engineering 34.Operation Engineering 35.Process Engineering 36.Research and Development Engineering 37.Senior Development Geologist 38.Technical Sales/Support Engineering 39.Downstream & Chemicals Engineering Development Program 40.Engineering Internships 41.Finance 42.Site Planner 43.Production Method Engineer 44.Finance M.B.A. Internships 45.Finance Development Program 46.Geology/Geophysics 47.Earth Science Internships 48.Research 49.Day Drilling Supervisor 50.HES Internships 51.HR Development Program 52.HR Internships 53.Maintenance 54.IT Internships 55.IT M.B.A. Leadership Development Program 56.Senior Data Management Engineer 57.Legal 58.Teknisi 59.Security Kualifikasi PERSYARATAN : - Pria/Wanita, usia maksimal 18 & 45 tahun - Pendidikan SMA SMK D1 D3 S1&S2 semua jurusan - Pengalaman dalam bidangnya - Mempunyai kemampuan analisa yang baik - Memiliki kemampuan dan dapat berkomunikasi dengan baik - Teliti, disiplin dan bertanggungjawab serta motivasi kerja tinggi - Dapat bekerja secara individu maupun dalam team Kelengkapan Dokumen Surat Lamaran Kerja â€¢Curriculum Vitae ( CV ) â€¢Fotocopy Ijazah Pendidikan Terakhir â€¢Foto copy Identitas ( KTP / SIM ) â€¢Pas Foto (berwarna) ukuran 3 x 4 sebanyak 2 lembar â€¢Email dan No. Telp / Hp yang masih aktif Informasi Tambahan Cara Melamar Kerja : Silahkan kirim data lamaran ke email : pcc.pertamina(at)engineer.com', '2019-12-31', '0.jpg'),
(7, 5, 28, 'REKRUTMEN EKSTERNAL TINGKAT SLTA, D3 DAN S1 BERSUMBER DARI JOB FAIR UNS TAHUN 2019 PT KERETA API IND', 'PT Kereta Api Indonesia (Persero) merupakan Badan Usaha Milik Negara (BUMN) Indonesia yang bergerak di bidang Jasa Angkutan Perkeretaapian dan bisnis usaha penunjang lainnya dengan mengutamakan Integritas, Profesional, Keselamatan, Inovasi dan Pelayanan Prima, memberikan kesempatan kepada Putra-putri terbaik Bangsa Indonesia untuk bergabung dan  berkarir di PT Kereta Api Indonesia (Persero), dengan kriteria dan persyaratan sebagai berikut :\r\n\r\nKRITERIA PELAMAR :\r\n\r\n    Warga Negara Indonesia (WNI);\r\n    Jenis Kelamin Pria/Wanita;\r\n    Memiliki :\r\n        Ijazah SLTA dengan Nilai UN/UAN rata-rata minimal 7,0 (tujuh koma nol);\r\n        Ijazah D3 dengan IPK minimal 2,95 dan akreditasi jurusan pada saat tanggal kelulusan minimal â€œBâ€ dari BAN-PT, khusus Formasi Paramedis dapat menggunakan akreditasi dari LAM KES yang diterbitkan oleh Kemenkes/Dinkes dan melampirkan Surat Tanda Registrasi Perawat/Bidan.\r\n        Ijazah S1 dengan IPK minimal 2,95 dan akreditasi jurusan pada saat tanggal kelulusan â€œAâ€ menggunakan akreditasi dari BAN-PT, khusus formasi Dokter Umum dan Dokter Gigi juga melampirkan Ijazah Profesi dan Transkrip Nilai Profesi serta Surat Tanda Registrasi sebagai Dokter Umum / Dokter Gigi.\r\n    Usia pelamar per 01 Oktober 2019 :\r\n        Tingkat SLTA serendah-rendahnya 18 (delapan belas) tahun dan setinggi-tingginya 25 (dua puluh lima) tahun;\r\n        Tingkat D3 serendah-rendahnya 18 (delapan belas) tahun dan setinggi-tingginya 27 (dua puluh tujuh) tahun;\r\n        Tingkat S1 serendah-rendahnya 18 (delapan belas) tahun dan setinggi-tingginya 30 (tiga puluh) tahun.\r\n    Memiliki tinggi badan ;\r\n        Pria minimal 160 cm dengan berat badan ideal;\r\n        Wanita minimal 155 cm dengan berat badan ideal;\r\n        Khusus Formasi Polsuska jenis kelamin Pria, Minimal 165 cm dengan berat badan ideal.\r\n    Sehat jasmani / rohani.\r\n    Berkelakuan baik.\r\n    Tidak terlibat narkoba atau psikotropika.\r\n    Tidak bertato dan khusus pria tidak bertindik.\r\n    Tidak pernah dihukum penjara berdasarkan putusan pengadilan yang telah berkekuatan hukum tetap.\r\n    Tidak pernah diberhentikan di anak perusahaan atau institusi lainnya dikarenakan hukuman disiplin.\r\n    Bersedia ditempatkan di seluruh wilayah kerja PT Kereta Api Indonesia (Persero).\r\n    Bersedia mengundurkan diri dari hubungan kerja dengan institusi lainnya apabila telah memenuhi persyaratan dan dinyatakan lulus seleksi.\r\n\r\nPERSYARATAN LAMARAN :\r\n\r\n    Pas foto terbaru background berwarna biru dan menggunakan kemeja putih dengan ukuran 4X6;\r\n    Ijazah SLTA/D3/S1 asli atau fotocopy legalisir;\r\n    Transkrip Nilai D3/S1/ nilai UAN SLTA asli atau fotocopy legalisir;\r\n    Kartu tanda penduduk (KTP) atau surat keterangan kependudukan yang masih berlaku;\r\n    Akreditasi Jurusan D3/S1 pada saat tanggal kelulusan;\r\n    Khusus Formasi Dokter juga wajib melampirkan Ijazah dan Transkrip Nilai Profesi serta Surat Tanda Registrasi sebagai Dokter yang masih berlaku;\r\n    Khusus Formasi Perawat/Bidan wajib melampirkan Surat Tanda Registrasi Perawat/Bidan yang masih berlaku.\r\n\r\nKETERANGAN :\r\n\r\n    Bagi Calon Pelamar yang berminat mengikuti rekrutmen dengan tingkat pendidikan D3 dan S1, wajib hadir dan membawa dokumen persyaratan lamaran poin 1 s.d 6 pada saat pelaksanaan Job Fair UNS Surakarta tanggal 25 - 26 September 2019 di Auditorium Booth PT KAI (Persero) untuk dilakukan verifikasi berkas.\r\n    Bagi Calon Pelamar yang berminat mengikuti rekrutmen dengan tingkat pendidikan SLTA, wajib hadir dan membawa dokumen persyaratan lamaran poin 1 s.d 4 ke Gedung Student Center Universitas Sebelas Maret pada tanggal 25 - 26 September 2019 untuk diverifikasi oleh panitia.\r\n    Bagi calon pelamar yang dinyatakan memenuhi syarat pada saat verifikasi selanjutnya akan dilakukan pemeriksaan tinggi badan, berat badan dan tes buta warna.\r\n    Bagi calon pelamar yang dinyatakan memenuhi syarat pemeriksaan tinggi badan dan buta warna akan diberikan kode dan password untuk proses apply di website recruitment.kai.id mulai tanggal 25 s.d 28 September 2019.\r\n\r\nTAHAPAN SELEKSI\r\n\r\nTahap 1    : Seleksi Administrasi\r\nTahap 2    : Seleksi Kesehatan Awal\r\nTahap 3    : Seleksi Psikologi\r\nTahap 4    : Seleksi Wawancara\r\nTahap 5    : Seleksi Kesehatan Akhir\r\n\r\nPROSEDUR REGISTRASI DAN APPLY\r\n\r\nBaca seluruh informasi dan prosedur pelaksanaan rekrut serta Buku Panduan Rekrutmen Online yang dapat didownload pada menu PANDUAN - Panduan Registrasi dan Apply.\r\n\r\n    Prosedur Registrasi dan Upload Dokumen di Website Bagi yang Telah Memiliki Kode dan Password\r\n        Calon pelamar yang belum memiliki akun, terlebih dahulu melakukan registrasi dan upload dokumen sesuai persyaratan lamaran.\r\n        Calon pelamar wajib memastikan bahwa email yang digunakan pada saat registrasi adalah email aktif dan data yang diinput harus sesuai identitas diri seperti KTP, Ijazah, dll serta tidak melakukan perubahan data/dokumen setelah melakukan apply sampai proses rekrutmen selesai.\r\n        Calon pelamar yang sudah memiliki akun di website https://recruitment.kai.id harus memastikan bahwa dokumen persyaratan lamaran sudah diupload di akun pelamar yang ada di website sesuai persyaratan dan ketentuan.\r\n        Pada saat upload berkas di akun masing-masing di website recruitment.kai.id, dokumen persyaratan lamaran poin 2 s.d 7 menggunakan format pdf dengan ukuran maksimal 2 mb.\r\n        Pas Foto terbaru, menggunakan format jpg/jpeg dengan ukuran maksimal 2 mb dan dokumen lain mnggunakan format pdf dengan ukuran maksimal 2 mb.\r\n        Khusus Formasi Paramedis untuk upload dokumen di akun website dengan ketentuan sebagai berikut :\r\n            Upload Dokumen Ijazah D3 terdiri dari file Ijazah D3;\r\n            Upload Dokumen KTP terdiri dari Kartu Tanda Pendudukan;\r\n            Upload Dokumen Transkrip Nilai terdiri dari Transkrip Nilai D3;\r\n            Upload Dokumen Akreditasi D3 tediri dari Akreditasi Jurusan saat tanggal kelulusan dari BAN-PT atau LAM KES yang diterbitkan oleh Kemenkes/Dinkes;\r\n            Upload Dokumen Surat Tanda Registrasi D3 terdiri dari Surat Tanda Registrasi Perawat/Bidan yang masih berlaku.\r\n        Khusus Formasi Dokter Umum/Gigi untuk upload dokumen di akun website dengan ketentuan sebagai berikut :\r\n            Upload Dokumen Ijazah S1 terdiri dari file Ijazah S1, Ijazah Profesi;\r\n            Upload Dokumen KTP terdiri dari Kartu Tanda Penduduk;\r\n            Upload Dokumen Transkrip Nilai terdiri dari Transkrip Nilai S1, Transkrip Nilai Profesi;\r\n            Upload Dokumen Akreditasi S1 terdiri dari Akreditasi jurusan saat tanggal kelulusan dari BAN-PT;\r\n            Upload Dokumen Surat Tanda Registrasi D4/S1 terdiri dari Surat Tanda Registrasi Profesi yang masih berlaku.\r\n    Prosedur Apply Lamaran\r\n        Bagi calon pelamar yang berminat mengikuti rekrut sesuai formasi, persyaratan dan ketentuan yang ditawarkan, wajib hadir dengan membawa PERSYARATAN LAMARAN pada\r\n            Acara                 : UNS Solo Job Fair XX\r\n            Hari, Tangga       : Rabu â€“ Kamis, 25 â€“ 26 September 2019\r\n            Waktu                : 08.00 â€“ 16.00 WIB\r\n            Tempat              : Auditorium dan Gedung Student Center Universitas Sebelas Maret (UNS) â€“ Solo\r\n        Ketentuan pengunjung JOB FAIR UNS :\r\n            Informasi panduan registrasi online event UNS Solo Job Fair ke 20 di website uns.ac.id\r\n            Berpakaian rapi dan sopan, tidak diperkenankan memakai sandal dan Kaos\r\n            Tertib dan teratur\r\n            Lamaran hanya diterima apabila sesuai dengan persyaratan dan ketentuan yang berlaku\r\n        Panitia Rekrut PT KAI (Persero) akan melakukan verifikasi dokumen persyaratan lamaran di JOB FAIR UNS untuk calon pelamar tingkat pendidikan D3/S1 dan SLTA ke Gedung Student Center UNS untuk melakukan verifikasi dokumen, apabila sesuai dengan ketentuan dan kuota maka calon pelamar akan mendapatkan CODE dan PASSWORD untuk melakukan proses Apply pada akun di website Recruitment.kai.id.\r\n        Calon pelamar yang lulus verifikasi oleh panitia Rekrut maka berhak mendapatkan Code dan Password Rekrut PT KAI (Persero) untuk proses apply pada akun masing-masing mulai tanggal 25 â€“ 28 September 2019.\r\n        Proses APPLY rekrutmen pada website recruitment.kai.id hanya bisa dilakukan dengan menggunakan Code dan Password yang didapat saat verifikasi dokumen oleh panitia rekrut di Booth PT KAI (Persero) Job Fair UNS.\r\n        Bagi calon pelamar yang sudah melakukan upload dokumen, melengkapi data dan datang ke Job Fair UNS serta memiliki Code dan Password, tetapi tidak melakukan proses apply di akunnya pada tanggal 25 â€“ 28 September 2019, maka dianggap tidak mengikuti kegiatan rekrut ini.\r\n        Pelamar yang lulus seleksi tahap I (Seleksi Administrasi) berhak mengikuti seleksi tahap II (Seleksi Kesehatan Awal) yang akan diumumkan melalui website https://recruitment.kai.id/ rencana pada tanggal 03 Oktober 2019.\r\n        Rekrutmen PT Kereta Api Indonesia (Persero) tidak dipungut biaya apapun dan tidak menggunakan sistem refund atau penggantian biaya transportasi maupun akomodasi yang berkaitan dengan pelaksanaan rekrutmen dan dimohon untuk mengabaikan pihak-pihak yang menjanjikan dapat membantu meluluskan peserta rekrut.\r\n        Seleksi penerimaan pekerja menggunakan sistem gugur dan keputusan panitia tidak dapat diganggu gugat.\r\n', '2019-12-30', 'logo-kereta-api-baru-cdr-574d84880123bda309d001d0.png');

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
(4, 'Olahraga'),
(5, 'Lowongan Kerja'),
(6, 'Lomba'),
(9, 'Event'),
(11, 'Kecantikan');

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
(7, 'Lomba'),
(12, 'Lainnya'),
(14, 'AB');

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
(10, 3, 5, 'ghui', '0000-00-00'),
(11, 3, 5, 'knn', '0000-00-00'),
(12, 3, 5, 'coba lagi', '0000-00-00'),
(14, 3, 6, 'hai', '0000-00-00'),
(35, 2, 7, 'kkk', '0000-00-00'),
(37, 2, 10, 'Saya Ada info loker akuntansi', '0000-00-00');

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
(7, 1, 2, 'Kuliah', 'Kuliah dimana aja?', '0000-00-00'),
(10, 3, 2, 'Akuntansi', 'Ada yang lulusan Akuntansi angkatan 2015?', '0000-00-00'),
(11, 2, 28, 'Info loker', 'Loker Programmer', '0000-00-00');

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
(0, 32, 0, 'Administrator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 38, 0, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(909, 39, 0, 'Gulam Mubarik Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2013001, 2, 1, 'Tania Nuari Cicia', 'Perempuan', 'Jember', '1999-11-03', 'Sumbersari', '089213888999', 'Parman', 'wiraswasta', 'sisil', 'Guru', '2013', '2016', '102001', '202001'),
(2013002, 3, 1, 'Yudha Widya Pratama', 'Pria', 'JEMEBR', '2000-11-10', 'SITUBONDO', '081223892123', 'BUDI', 'PNS', 'SEKAR', '-', '2013', '2016', '102002', '202002'),
(2013003, 4, 1, 'Aldi Syafi Bachtiar', 'PRIA', 'LUMAJANG', '2000-09-03', 'BATU RADEN', '0813452318', 'PONIMAN', 'BURUH', 'INDRIANI', 'WIRASWASTA', '2013', '2016', '102003', '202003'),
(2013004, 5, 1, 'Alfiandra Gabriel Alfaro', 'PRIA', 'JEMBER', '1999-01-23', 'MASTRIP TIMUR', '0899812223', 'PARMAN', 'PNS', 'SURTI', '-', '2013', '2016', '102004', '202004'),
(2013005, 6, 1, 'Aurelia Permata Ayu Herlina', 'PEREMPUAN', 'JEMBER', '1997-01-01', 'PAGAH', '081234555666', 'BUDI ARYA', 'PNS', 'SUTEMI', '-', '2013', '2016', '102005', '202005'),
(2014001, 7, 2, 'Dwi Nurma Safira', 'PEREMPUAN', 'JEMBER', '1998-01-03', 'JEMBER', '081234222111', 'ARYA', 'PEGAWAI', 'INDAH', 'PNS', '2014', '2017', '103001', '203001'),
(2014002, 8, 2, 'Eknasya Cikal Syifa', 'PEREMPUAN', 'JEMBER', '1998-02-04', 'JEMBER', '081234898777', 'NANDO', 'WIRAUSAHA', 'AJENG', 'WIRAUSAHA', '2014', '2017', '103002', '203002'),
(2014003, 9, 2, 'Febriyan Adam', 'PRIA', 'JEMBER', '1998-09-08', 'Jember', '', '', '', '', '', '', '2017', '', ''),
(2014004, 10, 1, 'Flora Nafisa', 'PEREMPUAN', 'JEMBER', '1998-01-01', 'JEMBER', '08189881221', 'HERIANSYAH', 'PNS', 'ARIANI', '-', '2014', '2017', '1030012', '1290001'),
(2015002, 13, 2, 'M. Rizqi Ardan', 'Laki-laki', 'Lumajang', '2000-09-09', 'Jember', '0981212999', 'Parman', 'PNS', 'Aminah', 'PNS', '2015', '2018', '09999112', '21111112'),
(2015003, 14, 1, 'Mohammad Dwi Miftahul Huda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2015004, 15, 1, 'Muhammad Aqhil Firmansyah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2015005, 16, 1, 'Muhammad Kevin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015', '2018', NULL, NULL),
(2016001, 17, 1, 'Muhammad Raehan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL),
(2016002, 18, 1, 'Syauqhi Mushabikin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016', '2019', NULL, NULL),
(2016003, 19, 2, 'Nadiya Oktaviany', 'perempuan', 'Jember', '1997-10-01', 'Jember', '0981212999', 'Parman', 'PNS', 'Aminah', 'PNS', '2016', '2019', '09999111', '21111111'),
(2016004, 20, 2, 'Nur Alifiyah Aprilia', '', '', '0000-00-00', '', '', '', '', '', '', '2016', '2019', '', '');

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
  `NM_LENGKAP` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_GRUP`, `USERNAME`, `PASSWORD`, `EMAIL`, `NM_LENGKAP`) VALUES
(2, 2, '2013001', '2013001', 'tania@gmail.com', 'Tania Nuari Cahya'),
(3, 2, '2013002', '2013002', 'yud@gmail.com', 'Yudha Widya Pratama'),
(4, 2, '2013003', '2013003', 'aldi23@gmail.com', 'Aldi Syafi Bachtiar'),
(5, 2, '2013004', '2013004', 'Alfiindr@gmail.com', 'Alfiandra Gabriel Alfaro'),
(6, 2, '2013005', '2013005', 'liaaa12@gmail.com', 'Aurelia Permata Ayu Herlina'),
(7, 2, '2014001', '2014001', 'nurm@gmail.com', 'Dwi Nurma Safira'),
(8, 2, '2014002', '2014002', 'cikl999@gmail.com', 'Eknasya Cikal Syifa'),
(9, 2, '2014003', '2014003', 'adaam@gmail.com', 'Febriyan Adam'),
(10, 2, '2014004', '2014004', 'Nafffis@gmail.com', 'Flora Nafisa'),
(11, 2, '2014005', '2014005', 'laililili@gmail.com', 'Laili Nur Hidayati'),
(13, 2, '2015002', '2015002', 'ardanwq@gmail.com', 'M. Rizqi Ardan'),
(14, 2, '2015003', '2015003', 'huda99@gmail.com', 'Mohammad Dwi Miftahul Huda'),
(15, 2, '2015004', '2015004', 'aqhiil@gmail.com', 'Muhammad Aqhil Firmansyah'),
(16, 2, '2015005', '2015005', 'kevvinn@gmail.com', 'Muhammad Kevin'),
(17, 2, '2016001', '2016001', 'raehanal@gmail.com', 'Muhammad Raehan'),
(18, 2, '2016002', '2016002', 'syauqymsb@gmail.com', 'Syauqhi Mushabikin'),
(19, 2, '2016003', '2016003', 'ndya@gmail.com', 'Nadiya Oktaviany'),
(20, 2, '2016004', '2016004', 'aprillll@gmail.com', 'Nur Alifiyah Aprilia'),
(28, 1, 'AGUNG', 'jalan', 'agungwahyu23699@gmail.com', 'AGUNG'),
(32, 1, 'admin', 'admin', 'admin@polije.ac.id', 'Administrator1'),
(33, 2, '213', '213', 'h@gmail.com', 'guhhh'),
(36, 2, '123', '123', 'ads', 'asd'),
(38, 2, '1', '1', 'A', 'A'),
(39, 2, '0909', '0909', 'gulam@gmail.com', 'Gulam Mubarik Ahmad');

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
  MODIFY `ID_BERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `grup`
--
ALTER TABLE `grup`
  MODIFY `ID_GRUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `ID_KATEGORIBERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kategori_diskusi`
--
ALTER TABLE `kategori_diskusi`
  MODIFY `ID_KATEGORIDISK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `post_diskusi`
--
ALTER TABLE `post_diskusi`
  MODIFY `ID_DISKUSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `status_alumni`
--
ALTER TABLE `status_alumni`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
