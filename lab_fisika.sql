-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 30. Agustus 2017 jam 11:14
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab_fisika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asisten`
--

DROP TABLE IF EXISTS `asisten`;
CREATE TABLE IF NOT EXISTS `asisten` (
  `id_asis` int(2) NOT NULL AUTO_INCREMENT,
  `user_asis` varchar(20) NOT NULL,
  `pass_asis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_asis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `asisten`
--

INSERT INTO `asisten` (`id_asis`, `user_asis`, `pass_asis`) VALUES
(1, 'admin_asis_fisdas', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `sub_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `sub_berita`, `isi_berita`) VALUES
(6, 'Hukum I Newton', 'gambar/a1.JPG', ' 	  Bunyi: "Jika resultan gaya yang bekerja pada benda yang sama dengan nol, maka benda yang mula-mula diam akan tetap diam. Benda yang ', 'Bunyi: "Jika resultan gaya yang bekerja pada benda yang sama dengan nol, maka benda yang mula-mula diam akan tetap diam. Benda yang mula-mula bergerak lurus beraturan akan tetap lurus beraturan dengan kecepatan tetap". Rumus Hukum Newton 1 (I): &#8721;F=0 Contoh Hukum Newton 1 (I) dalam Kehidupan Sehari-hari Saat mobil bergerak cepat di rem mendapak penumpang akan serasa terdorong kedepan Mobil yang anda naiki setelah direm mendadak, lalu mobil tiba-tiba bergerak kedepan, maka anda akan terdorong ke belakang Koin yang diatas kertas yang diletakkan di meja akan tetap, jika kertas ditarik cepat\r\n'),
(7, 'Hukum II Newton', 'gambar/a2.JPG', 'Bunyi: "Percepatan dari suatu benda akan sebanding dengan jumlah gaya (resultan gaya) yang bekerja pada benda tersebut dan berbanding terbalik dengan', '    Bunyi: "Percepatan dari suatu benda akan sebanding dengan jumlah gaya (resultan gaya) yang bekerja pada benda tersebut dan berbanding terbalik dengan massanya". Rumus Hukum Newton 2 (II): &#8721;F=m x a Contoh Hukum Newton 2 (II) dalam Kehidupan Sehari-hari : Jika di tarik dengan gaya yang sama mobil-mobil yang massanya lebih besar, percepatannya lebih kecil, sedangkan pada mobil-mobilan yang massanya lebih kecil jika ditarik dengan gaya yang sama akan mengalami percepatan yang lebih besar.\r\n    ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `kelompok` int(2) NOT NULL,
  `shift` varchar(3) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `mod1` varchar(2) NOT NULL,
  `mod2` varchar(2) NOT NULL,
  `mod3` varchar(2) NOT NULL,
  `mod4` varchar(2) NOT NULL,
  `mod5` varchar(2) NOT NULL,
  `mod6` varchar(2) NOT NULL,
  `mod7` varchar(2) NOT NULL,
  `mod8` varchar(2) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama`, `npm`, `kelas`, `kelompok`, `shift`, `hari`, `mod1`, `mod2`, `mod3`, `mod4`, `mod5`, `mod6`, `mod7`, `mod8`) VALUES
(7, 'Ade Rachmat Hidayat', '20416222', '101', 1, 'II', 'Senin', 'M0', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4'),
(8, 'Aditya Andrianto', '20416123', '101', 1, 'II', 'Senin', 'M0', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4'),
(9, 'Akmal Khairuilloh', '20416152', '101', 2, 'II', 'Senin', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0'),
(10, 'Arif Mughni', '20416094', '101', 2, 'II', 'Senin', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0'),
(11, 'Ayogi Dwi Prayogo', '20416206', '101', 3, 'II', 'Senin', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1'),
(12, 'Erik Siswanto', '20416002', '101', 3, 'II', 'Senin', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1'),
(13, 'Fadjri Rismoro', '20416075', '101', 4, 'II', 'Senin', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3'),
(14, 'Fahriza Ardhi', '20416092', '101', 4, 'II', 'Senin', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3'),
(15, 'Iksan Hernanda Manao', '20416001', '101', 5, 'II', 'Senin', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4'),
(16, 'M Nazarudin', '20416122', '101', 5, 'II', 'Senin', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4'),
(17, 'Maulana Syahreza', '20416049', '101', 1, 'III', 'Senin', 'M0', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4'),
(18, 'Muhamad Farizsi', '20416071', '101', 1, 'III', 'Senin', 'M0', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4'),
(19, 'Muhamad Hanif Sunaryo', '20416003', '101', 2, 'III', 'Senin', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0'),
(20, 'muhamad riswan', '20416060', '101', 2, 'III', 'Senin', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0'),
(21, 'muhammad azzam', '20416150', '101', 3, 'III', 'Senin', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1'),
(22, 'muhammad rizky firnanda', '20416066', '101', 3, 'III', 'Senin', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1'),
(23, 'vella roviqoh', '20416004', '101', 4, 'III', 'Senin', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3'),
(24, 'wahana adi putra', '20416062', '101', 4, 'III', 'Senin', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3'),
(25, 'wahyu ariadi', '20416182', '101', 5, 'III', 'Senin', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4'),
(26, 'wildan naufal', '20416074', '101', 5, 'III', 'Senin', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4'),
(30, 'dani ruslani', '40416046', '105', 1, 'II', 'Jumat', 'M0', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4'),
(31, 'fikhobara', '40416059', '105', 1, 'II', 'Jumat', 'M0', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4'),
(32, 'cahya rizqillah', '40416082', '105', 2, 'II', 'Jumat', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0'),
(33, 'bagas adi pratama', '40416090', '105', 2, 'II', 'Jumat', 'M1', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0'),
(34, 'moh reza adhari', '40416116', '105', 3, 'II', 'Jumat', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1'),
(35, 'b.e prasetyawan d.e', '40416135', '105', 3, 'II', 'Jumat', 'M3', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1'),
(36, 'alpin yandika restu', '40416009', '105', 4, 'II', 'Jumat', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3'),
(37, 'rahmat hidayat', '40416205', '105', 4, 'II', 'Jumat', 'M4', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3'),
(38, 'aa liyandi', '40416207', '105', 5, 'II', 'Jumat', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4'),
(39, 'jihan fadhilah', '40416216', '105', 5, 'II', 'Jumat', 'L1', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4'),
(40, 'rifki noparianto', '40416010', '105', 6, 'II', 'Jumat', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4', 'L1'),
(41, 'muhamad rivaldi hidayat', '40416262', '105', 6, 'II', 'Jumat', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4', 'L1'),
(42, 'dani lintang hestiono', '40416264', '105', 6, 'II', 'Jumat', 'K2', 'K3', 'K4', 'M0', 'M1', 'M3', 'M4', 'L1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `npm` varchar(8) NOT NULL,
  `modul` varchar(2) NOT NULL,
  `tgl` varchar(11) NOT NULL,
  `lap_pen` double NOT NULL,
  `tes_pen` double NOT NULL,
  `ker` double NOT NULL,
  `lap_ak` double NOT NULL,
  `nilai_tot` double NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `npm`, `modul`, `tgl`, `lap_pen`, `tes_pen`, `ker`, `lap_ak`, `nilai_tot`) VALUES
(7, '40416046', 'M0', '6/Apr/2017', 6.5, 10, 26, 20, 62.5),
(8, '40416046', 'M1', '7/Apr/2017', 9, 10, 29, 29, 77),
(9, '40416059', 'M0', '6/Apr/2017', 10, 15, 27, 30, 82),
(10, '40416046', 'M3', '8/Apr/2017', 8.5, 8, 25, 35, 76.5),
(11, '40416046', 'M4', '9/Apr/2017', 10, 12, 27, 20, 69),
(12, '40416046', 'L1', '10/Apr/2017', 8, 15.5, 22, 30, 75.5),
(13, '40416046', 'K2', '11/Apr/2017', 10, 13.5, 20, 23, 66.5),
(14, '40416046', 'K3', '12/Apr/2017', 10, 15, 28, 31, 84),
(15, '40416046', 'K4', '14/Apr/2017', 10, 17, 24, 31, 82),
(16, '40416059', 'M3', '10/Apr/2017', 0, 0, 0, 0, 0),
(17, '40416059', 'M4', '11/Apr/2017', 10, 19, 25, 25, 79),
(18, '40416059', 'L1', '12/Apr/2017', 0, 0, 0, 0, 0),
(19, '40416059', 'K2', '12/Apr/2017', 0, 0, 0, 0, 0),
(20, '40416059', 'K3', '14/Apr/2017', 10, 18, 29, 25, 82),
(21, '40416059', 'K4', '15/Apr/2017', 6, 10, 20, 30, 66),
(22, '40416059', 'M1', '8/Apr/2017', 0, 0, 0, 0, 0),
(23, '20416004', 'M0', '10/Apr/2017', 10, 19, 28, 34, 91),
(24, '20416004', 'M1', '12/Apr/2017', 10, 10, 27, 30, 77),
(25, '20416004', 'M3', '14/Apr/2016', 10, 13, 25, 0, 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikan`
--

DROP TABLE IF EXISTS `praktikan`;
CREATE TABLE IF NOT EXISTS `praktikan` (
  `npm` varchar(8) NOT NULL,
  `nama_prak` varchar(50) NOT NULL,
  `pass_prak` varchar(10) NOT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikan`
--

INSERT INTO `praktikan` (`npm`, `nama_prak`, `pass_prak`) VALUES
('20416004', 'Vella Roviqoh', 'vella16'),
('30414216', 'Yuanita P', 'yuan96'),
('40416046', 'Dani Ruslani', 'dani_r'),
('40416059', 'Fikhobara', 'fikho123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `status` varchar(35) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `jurusan`, `status`, `gambar`) VALUES
(2, 'Abdul Hakim, S.Kom', '', 'Kepala Laboratorium', 'gambar/pak_hakim.JPG'),
(3, 'Dian S.U.S', 'Sistem Informasi', 'Staff Laboratorium/Asisten Tetap', 'gambar/dian.JPG'),
(4, 'Yuanita Pratiwi', 'Manajemen Informatika', 'Asisten Laboratorium', 'gambar/yuan.JPG'),
(5, 'Rama Putra', 'Sistem Informasi', 'Asisten Laboratorium', 'gambar/rama.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
