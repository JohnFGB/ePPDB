-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2023 pada 05.00
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbnew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_unbk`
--

CREATE TABLE `tbl_nilai_unbk` (
  `id_nilai_unbk` int(11) NOT NULL,
  `mapel_unbk` varchar(100) DEFAULT NULL,
  `nilai_unbk` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai_unbk`
--

INSERT INTO `tbl_nilai_unbk` (`id_nilai_unbk`, `mapel_unbk`, `nilai_unbk`, `no_pendaftaran`) VALUES
(8, 'Matematika', 80, 'PSB18004001'),
(6, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004001'),
(9, 'Bahasa Indonesia', 80, 'PSB18004001'),
(10, 'Bahasa Inggris', 80, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004002'),
(13, 'Matematika', 80, 'PSB18004002'),
(14, 'Bahasa Indonesia', 80, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 'PSB18004002'),
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004003'),
(17, 'Matematika', 80, 'PSB18004003'),
(18, 'Bahasa Indonesia', 80, 'PSB18004003'),
(19, 'Bahasa Inggris', 80, 'PSB18004003'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004004'),
(22, 'Matematika', 80, 'PSB18004004'),
(23, 'Bahasa Indonesia', 80, 'PSB18004004'),
(24, 'Bahasa Inggris', 80, 'PSB18004004'),
(26, 'Ilmu Pengetahuan Alam (IPA)', 56, 'PSB18004005'),
(27, 'Matematika', 56, 'PSB18004005'),
(28, 'Bahasa Indonesia', 70, 'PSB18004005'),
(29, 'Bahasa Inggris', 50, 'PSB18004005'),
(30, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004006'),
(31, 'Matematika', 80, 'PSB18004006'),
(32, 'Bahasa Indonesia', 80, 'PSB18004006'),
(33, 'Bahasa Inggris', 80, 'PSB18004006'),
(34, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004007'),
(35, 'Matematika', 80, 'PSB18004007'),
(36, 'Bahasa Indonesia', 80, 'PSB18004007'),
(37, 'Bahasa Inggris', 80, 'PSB18004007'),
(38, 'Ilmu Pengetahuan Alam (IPA)', 90, 'PSB18004008'),
(39, 'Matematika', 90, 'PSB18004008'),
(40, 'Bahasa Indonesia', 90, 'PSB18004008'),
(41, 'Bahasa Inggris', 90, 'PSB18004008'),
(42, 'Ilmu Pengetahuan Alam (IPA)', 90, 'PSB18004008'),
(43, 'Matematika', 90, 'PSB18004008'),
(44, 'Bahasa Indonesia', 90, 'PSB18004008'),
(45, 'Bahasa Inggris', 90, 'PSB18004008'),
(46, 'Ilmu Pengetahuan Alam (IPA)', 100, 'PSB18004009'),
(47, 'Matematika', 100, 'PSB18004009'),
(48, 'Bahasa Indonesia', 100, 'PSB18004009'),
(49, 'Bahasa Inggris', 100, 'PSB18004009'),
(50, 'Ilmu Pengetahuan Alam (IPA)', 100, 'PSB18004010'),
(51, 'Matematika', 100, 'PSB18004010'),
(52, 'Bahasa Indonesia', 100, 'PSB18004010'),
(53, 'Bahasa Inggris', 100, 'PSB18004010'),
(54, 'Ilmu Pengetahuan Alam (IPA)', 100, 'PSB18004011'),
(55, 'Matematika', 100, 'PSB18004011'),
(56, 'Bahasa Indonesia', 100, 'PSB18004011'),
(57, 'Bahasa Inggris', 100, 'PSB18004011'),
(58, 'Ilmu Pengetahuan Alam (IPA)', 100, 'PSB18004011'),
(59, 'Matematika', 100, 'PSB18004011'),
(60, 'Bahasa Indonesia', 100, 'PSB18004011'),
(61, 'Bahasa Inggris', 100, 'PSB18004011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_usbn`
--

CREATE TABLE `tbl_nilai_usbn` (
  `id_nilai_usbn` int(10) NOT NULL,
  `mapel_usbn` varchar(100) DEFAULT NULL,
  `nilai_usbn` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai_usbn`
--

INSERT INTO `tbl_nilai_usbn` (`id_nilai_usbn`, `mapel_usbn`, `nilai_usbn`, `no_pendaftaran`) VALUES
(1, 'Pendidikan Agama', '80', 'PSB18004003'),
(2, 'PKN', '80', 'PSB18004003'),
(3, 'Bahasa Indonesia', '80', 'PSB18004003'),
(4, 'Bahasa Inggris', '80', 'PSB18004003'),
(5, 'Matematika', '80', 'PSB18004003'),
(6, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004003'),
(7, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004003'),
(8, 'Pendidikan Agama', '80', 'PSB18004004'),
(9, 'PKN', '80', 'PSB18004004'),
(10, 'Bahasa Indonesia', '80', 'PSB18004004'),
(11, 'Bahasa Inggris', '80', 'PSB18004004'),
(12, 'Matematika', '80', 'PSB18004004'),
(13, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004004'),
(14, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004004'),
(15, 'Pendidikan Agama', '70', 'PSB18004001'),
(16, 'PKN', '80', 'PSB18004001'),
(17, 'Bahasa Inggris', '76', 'PSB18004001'),
(18, 'Bahasa Indonesia', '77', 'PSB18004001'),
(19, 'Matematika', '79', 'PSB18004001'),
(20, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004001'),
(21, 'Ilmu Pengetahuan Sosial (IPS)', '78', 'PSB18004001'),
(22, 'Pendidikan Agama', '80', 'PSB18004005'),
(23, 'PKN', '75', 'PSB18004005'),
(24, 'Bahasa Indonesia', '75', 'PSB18004005'),
(25, 'Bahasa Inggris', '75', 'PSB18004005'),
(26, 'Matematika', '75', 'PSB18004005'),
(27, 'Ilmu Pengetahuan Alam (IPA)', '75', 'PSB18004005'),
(28, 'Ilmu Pengetahuan Sosial (IPS)', '75', 'PSB18004005'),
(29, 'Pendidikan Agama', '75', 'PSB18004006'),
(30, 'PKN', '76', 'PSB18004006'),
(31, 'Bahasa Indonesia', '76', 'PSB18004006'),
(32, 'Bahasa Inggris', '76', 'PSB18004006'),
(33, 'Matematika', '76', 'PSB18004006'),
(34, 'Ilmu Pengetahuan Alam (IPA)', '76', 'PSB18004006'),
(35, 'Ilmu Pengetahuan Sosial (IPS)', '76', 'PSB18004006'),
(36, 'Pendidikan Agama', '90', 'PSB18004007'),
(37, 'PKN', '80', 'PSB18004007'),
(38, 'Bahasa Indonesia', '80', 'PSB18004007'),
(39, 'Bahasa Inggris', '80', 'PSB18004007'),
(40, 'Matematika', '80', 'PSB18004007'),
(41, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004007'),
(42, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004007'),
(43, 'Pendidikan Agama', '90', 'PSB18004008'),
(44, 'PKN', '90', 'PSB18004008'),
(45, 'Bahasa Indonesia', '90', 'PSB18004008'),
(46, 'Bahasa Inggris', '90', 'PSB18004008'),
(47, 'Matematika', '90', 'PSB18004008'),
(48, 'Ilmu Pengetahuan Alam (IPA)', '90', 'PSB18004008'),
(49, 'Ilmu Pengetahuan Sosial (IPS)', '90', 'PSB18004008'),
(50, 'Pendidikan Agama', '90', 'PSB18004008'),
(51, 'PKN', '90', 'PSB18004008'),
(52, 'Bahasa Indonesia', '90', 'PSB18004008'),
(53, 'Bahasa Inggris', '90', 'PSB18004008'),
(54, 'Matematika', '90', 'PSB18004008'),
(55, 'Ilmu Pengetahuan Alam (IPA)', '90', 'PSB18004008'),
(56, 'Ilmu Pengetahuan Sosial (IPS)', '90', 'PSB18004008'),
(57, 'Pendidikan Agama', '100', 'PSB18004009'),
(58, 'PKN', '100', 'PSB18004009'),
(59, 'Bahasa Indonesia', '100', 'PSB18004009'),
(60, 'Bahasa Inggris', '100', 'PSB18004009'),
(61, 'Matematika', '100', 'PSB18004009'),
(62, 'Ilmu Pengetahuan Alam (IPA)', '100', 'PSB18004009'),
(63, 'Ilmu Pengetahuan Sosial (IPS)', '100', 'PSB18004009'),
(64, 'Pendidikan Agama', '100', 'PSB18004010'),
(65, 'PKN', '100', 'PSB18004010'),
(66, 'Bahasa Indonesia', '100', 'PSB18004010'),
(67, 'Bahasa Inggris', '100', 'PSB18004010'),
(68, 'Matematika', '100', 'PSB18004010'),
(69, 'Ilmu Pengetahuan Alam (IPA)', '100', 'PSB18004010'),
(70, 'Ilmu Pengetahuan Sosial (IPS)', '100', 'PSB18004010'),
(71, 'Pendidikan Agama', '100', 'PSB18004011'),
(72, 'PKN', '100', 'PSB18004011'),
(73, 'Bahasa Indonesia', '100', 'PSB18004011'),
(74, 'Bahasa Inggris', '100', 'PSB18004011'),
(75, 'Matematika', '100', 'PSB18004011'),
(76, 'Ilmu Pengetahuan Alam (IPA)', '100', 'PSB18004011'),
(77, 'Ilmu Pengetahuan Sosial (IPS)', '100', 'PSB18004011'),
(78, 'Pendidikan Agama', '100', 'PSB18004011'),
(79, 'PKN', '100', 'PSB18004011'),
(80, 'Bahasa Indonesia', '100', 'PSB18004011'),
(81, 'Bahasa Inggris', '100', 'PSB18004011'),
(82, 'Matematika', '100', 'PSB18004011'),
(83, 'Ilmu Pengetahuan Alam (IPA)', '100', 'PSB18004011'),
(84, 'Ilmu Pengetahuan Sosial (IPS)', '100', 'PSB18004011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'Tdk Sekolah'),
(2, 'SD/MI'),
(3, 'SMP/MTs'),
(4, 'SMA/SMK/MA'),
(5, 'DIPLOMA'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `ket_pekerjaan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `ket_pekerjaan`) VALUES
(1, 'Buruh', 'ayah'),
(2, 'Tani', 'ayah'),
(3, 'Wiraswasta', 'ayah'),
(4, 'PNS', 'ayah'),
(5, 'TNI/POLRI', 'ayah'),
(6, 'Perangkat Desa', 'ayah'),
(7, 'Nelayan', 'ayah'),
(8, 'Lain-lain ', 'ayah'),
(9, 'Ibu Rumah Tangga\r\n', 'ibu'),
(10, 'Buruh', 'ibu'),
(11, 'Tani', 'ibu'),
(12, 'Wiraswasta', 'ibu'),
(13, 'PNS', 'ibu'),
(14, 'TNI/POLRI', 'ibu'),
(15, 'Perangkat Desa', 'ibu'),
(16, 'Nelayan', 'ibu'),
(17, 'Lain-lain', 'ibu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `order_id` char(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `payment_type` varchar(13) NOT NULL,
  `transaction_time` varchar(19) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_numbers` varchar(30) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`order_id`, `nama_lengkap`, `nisn`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_numbers`, `pdf_url`, `status_code`) VALUES
('109855417', 'John', '', 250000, 'bank_transfer', '2023-06-27 21:56:06', 'bca', '59431863930', 'https://app.sandbox.midtrans.com/snap/v1/transactions/61e6795b-5683-45b4-b9c9-b5e88a60e2a5/pdf', '201'),
('1311178422', 'Udin Saepudin', '1234567895', 250000, 'bank_transfer', '2023-06-29 10:19:34', 'bni', '9885943170897144', 'https://app.sandbox.midtrans.com/snap/v1/transactions/953a54b2-545e-45e2-8273-fa06a49ebf5c/pdf', '200'),
('785410082', 'test', '1234567896', 250000, 'bank_transfer', '2023-07-02 22:13:11', 'bni', '9885943126703707', 'https://app.sandbox.midtrans.com/snap/v1/transactions/eae67c86-455a-41d1-89bf-f11e92736802/pdf', '200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id_penghasilan` int(10) NOT NULL,
  `nama_penghasilan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id_penghasilan`, `nama_penghasilan`) VALUES
(1, '< 500rb'),
(2, '500-1jt'),
(3, '1jt-3jt'),
(4, '3jt-5jt'),
(5, '5jt-10jt'),
(6, '>10jt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\n<head>\n	<title></title>\n</head>\n<body>\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Keterangan :</u></strong></span></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Registrasi daftar ulang dilaksanakan pada tanggal 20 &ndash; 27 Juli 2023 pukul 08.00 &ndash; 14.00 </span></span></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;2. Mencetak dan membawa Surat Pengumuman ini sebagai bukti&nbsp; lulus seleksi</span></span></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp; &nbsp; 3.&nbsp;Membawa materi Rp. 6000,- sebanyak 2 lembar</span></span></span></span></p>\n</body>\n</html>\n', '2018-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` int(10) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `semester1` int(10) DEFAULT NULL,
  `semester2` int(10) DEFAULT NULL,
  `semester3` int(10) DEFAULT NULL,
  `semester4` int(10) DEFAULT NULL,
  `semester5` int(10) DEFAULT NULL,
  `rata_rata_nilai` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `mapel`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `rata_rata_nilai`, `no_pendaftaran`) VALUES
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 70, 80, 80, 80, 78, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(14, 'Bahasa Indonesia', 60, 80, 80, 80, 80, 76, 'PSB18004001'),
(13, 'Matematika', 60, 80, 60, 80, 80, 72, 'PSB18004001'),
(12, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(17, 'Ilmu Pengetahuan Sosial (IPS)', 80, 70, 80, 70, 80, 76, 'PSB18004002'),
(18, 'Matematika', 80, 80, 80, 80, 90, 82, 'PSB18004002'),
(19, 'Bahasa Indonesia', 80, 80, 80, 80, 50, 74, 'PSB18004002'),
(20, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004002'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 60, 50, 78, 68, 80, 67, 'PSB18004003'),
(22, 'Ilmu Pengetahuan Sosial (IPS)', 59, 80, 81, 67, 66, 71, 'PSB18004003'),
(23, 'Matematika', 80, 83, 54, 55, 78, 70, 'PSB18004003'),
(24, 'Bahasa Indonesia', 78, 98, 78, 88, 86, 86, 'PSB18004003'),
(25, 'Bahasa Inggris', 89, 89, 88, 80, 80, 85, 'PSB18004003'),
(26, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(27, 'Ilmu Pengetahuan Sosial (IPS)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(28, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(29, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(30, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(31, 'Ilmu Pengetahuan Alam (IPA)', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(32, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(33, 'Matematika', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(34, 'Bahasa Indonesia', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(35, 'Bahasa Inggris', 100, 100, 100, 100, 75, 95, 'PSB18004005'),
(36, 'Ilmu Pengetahuan Alam (IPA)', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(37, 'Ilmu Pengetahuan Sosial (IPS)', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(38, 'Matematika', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(39, 'Bahasa Indonesia', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(40, 'Bahasa Inggris', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(41, 'Ilmu Pengetahuan Alam (IPA)', 75, 75, 75, 75, 75, 75, 'PSB18004007'),
(42, 'Ilmu Pengetahuan Sosial (IPS)', 75, 80, 80, 80, 80, 79, 'PSB18004007'),
(43, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(44, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(45, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(46, 'Ilmu Pengetahuan Alam (IPA)', 100, 89, 90, 90, 80, 90, 'PSB18004008'),
(47, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(48, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(49, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(50, 'Bahasa Inggris', 90, 90, 90, 90, 90, 90, 'PSB18004008'),
(51, 'Ilmu Pengetahuan Alam (IPA)', 100, 89, 90, 90, 80, 90, 'PSB18004008'),
(52, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(53, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004008'),
(54, 'Bahasa Indonesia', 100, 100, 100, 10, 50, 72, 'PSB18004008'),
(55, 'Bahasa Inggris', 90, 90, 90, 90, 90, 90, 'PSB18004008'),
(56, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(57, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(58, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(59, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(60, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004009'),
(61, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(62, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(63, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(64, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(65, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004010'),
(66, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(67, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(68, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(69, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(70, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(71, 'Ilmu Pengetahuan Alam (IPA)', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(72, 'Ilmu Pengetahuan Sosial (IPS)', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(73, 'Matematika', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(74, 'Bahasa Indonesia', 100, 100, 100, 100, 100, 100, 'PSB18004011'),
(75, 'Bahasa Inggris', 100, 100, 100, 100, 100, 100, 'PSB18004011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `alamat_siswa` text DEFAULT NULL,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `no_hp_ayah` varchar(14) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `no_hp_ibu` varchar(14) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_wali` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `model_un` varchar(100) DEFAULT NULL,
  `jurusan` varchar(40) NOT NULL,
  `alamat_sekolah` text DEFAULT NULL,
  `thn_lulus` year(4) DEFAULT NULL,
  `rayonisasi` varchar(100) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `tgl_siswa` datetime DEFAULT NULL,
  `ijazah` varchar(255) NOT NULL,
  `rekap_nilai` varchar(255) NOT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_pendaftaran`, `password`, `nis`, `nisn`, `nik`, `nama_lengkap`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `no_hp_siswa`, `nama_ayah`, `pdd_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `pdd_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nama_wali`, `pdd_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `model_un`, `jurusan`, `alamat_sekolah`, `thn_lulus`, `rayonisasi`, `foto`, `tgl_siswa`, `ijazah`, `rekap_nilai`, `status_verifikasi`, `status_pendaftaran`) VALUES
(13, 'PSB18004009', '1234567892', '1234567892', '1234567892', '3271051402020004', 'John', 'Laki-Laki', 'Bogor', '01-01-1990', 'Islam', 'Anak Kandung', 'test', '12452312', 'admin', 'Tdk Sekolah', 'Buruh', '< 500rb', '081290522014', 'test', 'Tdk Sekolah', 'Ibu Rumah Tangga\r\n', '< 500rb', '081290522014', 'admin', 'Tdk Sekolah', 'Buruh', '< 500rb', '0812345678910', '20220371', 'SMAN 1 BOGOR', 'NEGERI', 'UNBK', 'Animasi', 'Jl. Jalan nomor 007', 2023, 'Lintas Rayon', NULL, '2023-06-13 20:32:22', 'logo-provinsi-jawa-barat-hitam-putih1.jpg', 'product-1.png', '1', NULL),
(14, 'PSB18004010', '1234567895', '1234567895', '1234567895', '3271051402010001', 'Udin Saepudin', 'Laki-Laki', 'Bogor', '01-01-2007', 'Islam', 'Anak Kandung', 'Jl. Jalan nomor 007', '0812345678910', 'test', 'Tdk Sekolah', 'Buruh', '< 500rb', '081290522014', 'test', 'Tdk Sekolah', 'Ibu Rumah Tangga\r\n', '< 500rb', '081290522014', '-', 'Tdk Sekolah', 'Buruh', '< 500rb', '0', '20220371', 'SMAN 1 BOGOR', 'NEGERI', 'UNBK', 'musik', 'Jl. Jalan nomor 007', 2022, 'Lintas Rayon', NULL, '2023-06-29 10:00:33', '500596-download-free-dark-side-of-the-moon-wallpaper-1920x1080-for-1080p.jpg', '', '1', 'lulus'),
(15, 'PSB18004011', '1234567896', '1234567896', '1234567896', '1234567896', 'test', 'Laki-Laki', 'Bogor', '01-01-1990', 'Islam', 'Anak Kandung', 'test', '087776220542', 'test', 'Tdk Sekolah', 'Buruh', '< 500rb', '081285525862', 'test', 'Tdk Sekolah', 'Ibu Rumah Tangga\r\n', '< 500rb', '081285525862', 'test', 'Tdk Sekolah', 'Buruh', '< 500rb', '081285525862', '20220372', 'SMPN 1 BOGOR', 'NEGERI', 'UNBK', 'Musik Klasik', 'Jl. Jalan nomor 007', 2022, 'Lintas Rayon', NULL, '2023-07-02 22:05:35', 'product-11.png', 'product-2.png', '1', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `tgl_daftar`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin', '2023-06-02 23:42:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\n<head>\n	<title></title>\n</head>\n<body>\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Materi Tes Potensi Akdemik :</u></strong></span></span><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u> </u></strong></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Bahasa Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal </span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; 2.&nbsp;Bahasa Inggris&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal </span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; 3.&nbsp;Matematika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal&nbsp;&nbsp; </span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; 4. IPA </span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fisika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 12 soal</span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Biologi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: 13 soal </span></span></p>\n\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Hari Tanggal tes : </u></strong></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;tanggal 3 s.d 5 Juli 2018</span></span></p>\n\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Waktu Tes potensi Akademik :</u></strong></span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 1&nbsp; : 07.00 - 09.00</span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 2&nbsp; : 09.30 - 11.30<br />\n&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Sesi 3&nbsp; : 12.00 - 14.00</span></span><br />\n<span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 4&nbsp; : 14.30 - 16.30</span></span></p>\n\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*<em>catatan : </em></span></span></strong><br />\n<strong><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em>jadwal ujian bisa berubah sewaktu - waktu&nbsp; Update infomasi di web PPDB </em></span></span><em><span style=\"font-size:11.0pt\">peserta ujian datang 15&nbsp; menit sebelun tes dimulai.</span></em></strong></p>\n</body>\n</html>\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2023-06-04 18:43:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_nilai_unbk`
--
ALTER TABLE `tbl_nilai_unbk`
  ADD PRIMARY KEY (`id_nilai_unbk`);

--
-- Indeks untuk tabel `tbl_nilai_usbn`
--
ALTER TABLE `tbl_nilai_usbn`
  ADD PRIMARY KEY (`id_nilai_usbn`);

--
-- Indeks untuk tabel `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id_pdd`);

--
-- Indeks untuk tabel `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- Indeks untuk tabel `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_unbk`
--
ALTER TABLE `tbl_nilai_unbk`
  MODIFY `id_nilai_unbk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_usbn`
--
ALTER TABLE `tbl_nilai_usbn`
  MODIFY `id_nilai_usbn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id_pdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  MODIFY `id_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  MODIFY `id_rapor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13253;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  MODIFY `id_verifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
