-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Des 2020 pada 15.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kl_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nama_tamu` varchar(100) DEFAULT NULL,
  `waktu` enum('pagi','siang','sore','malam') NOT NULL,
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `waktu`, `tanggal_masuk`) VALUES
(0000000001, 'Gamanto Hutapea', 'pagi', '2020-12-26 14:43:52'),
(0000000002, 'Satya Nababan S.I.Kom', 'pagi', '2020-12-26 14:43:52'),
(0000000003, 'Ifa Padmasari', 'pagi', '2020-12-26 14:43:52'),
(0000000004, 'Amalia Eva Yolanda', 'pagi', '2020-12-26 14:43:52'),
(0000000005, 'Irfan Jailani', 'pagi', '2020-12-26 14:43:52'),
(0000000006, 'Dacin Viktor Sitompul', 'pagi', '2020-12-26 14:43:52'),
(0000000007, 'Luwes Prayoga', 'pagi', '2020-12-26 14:43:52'),
(0000000008, 'Cinthia Pia Permata S.IP', 'pagi', '2020-12-26 14:43:52'),
(0000000009, 'Malika Wulan Hassanah S.Pt', 'pagi', '2020-12-26 14:43:52'),
(0000000010, 'Nalar Siregar', 'pagi', '2020-12-26 14:43:52'),
(0000000011, 'Gina Astuti', 'pagi', '2020-12-26 14:43:52'),
(0000000012, 'Luthfi Tarihoran', 'pagi', '2020-12-26 14:43:52'),
(0000000013, 'Tari Usamah', 'pagi', '2020-12-26 14:43:52'),
(0000000014, 'Humaira Lailasari', 'pagi', '2020-12-26 14:43:52'),
(0000000015, 'Luwar Niyaga Hakim S.Kom', 'pagi', '2020-12-26 14:43:52'),
(0000000016, 'Hesti Laksita', 'pagi', '2020-12-26 14:43:52'),
(0000000017, 'Galak Emong Prabowo', 'pagi', '2020-12-26 14:43:52'),
(0000000018, 'Dodo Suryono M.Ak', 'pagi', '2020-12-26 14:43:52'),
(0000000019, 'Suci Utami S.IP', 'pagi', '2020-12-26 14:43:52'),
(0000000020, 'Farah Maya Lestari S.Psi', 'pagi', '2020-12-26 14:43:52'),
(0000000021, 'Jessica Vanesa Nasyiah', 'pagi', '2020-12-26 14:43:52'),
(0000000022, 'Kamila Lidya Yuniar', 'pagi', '2020-12-26 14:43:52'),
(0000000023, 'Salwa Mayasari', 'pagi', '2020-12-26 14:43:52'),
(0000000024, 'Tirtayasa Damanik S.Psi', 'pagi', '2020-12-26 14:43:52'),
(0000000025, 'Hendra Hutasoit', 'pagi', '2020-12-26 14:43:52'),
(0000000026, 'Puput Widiastuti', 'pagi', '2020-12-26 14:43:52'),
(0000000027, 'Usyi Usamah S.H.', 'pagi', '2020-12-26 14:43:52'),
(0000000028, 'Salimah Yulianti S.Pd', 'pagi', '2020-12-26 14:43:52'),
(0000000029, 'Cici Maryati', 'pagi', '2020-12-26 14:43:52'),
(0000000030, 'Maya Mayasari', 'pagi', '2020-12-26 14:43:52'),
(0000000031, 'Widya Sudiati M.TI.', 'pagi', '2020-12-26 14:43:52'),
(0000000032, 'Ikhsan Wacana S.Ked', 'pagi', '2020-12-26 14:43:52'),
(0000000033, 'Ihsan Napitupulu', 'pagi', '2020-12-26 14:43:52'),
(0000000034, 'Safina Uyainah', 'pagi', '2020-12-26 14:43:52'),
(0000000035, 'Puji Hassanah', 'pagi', '2020-12-26 14:43:52'),
(0000000036, 'Garda Permadi', 'pagi', '2020-12-26 14:43:52'),
(0000000037, 'Keisha Qori Nasyidah', 'pagi', '2020-12-26 14:43:52'),
(0000000038, 'Rika Kusmawati', 'pagi', '2020-12-26 14:43:52'),
(0000000039, 'Himawan Akarsana Hutagalung S.H.', 'pagi', '2020-12-26 14:43:52'),
(0000000040, 'Wage Cakrabuana Suwarno S.Psi', 'pagi', '2020-12-26 14:43:52'),
(0000000041, 'Arta Cawisadi Saefullah S.T.', 'pagi', '2020-12-26 14:43:52'),
(0000000042, 'Ida Umi Wulandari', 'pagi', '2020-12-26 14:43:52'),
(0000000043, 'Respati Natsir M.M.', 'pagi', '2020-12-26 14:43:52'),
(0000000044, 'Yusuf Nababan', 'pagi', '2020-12-26 14:43:52'),
(0000000045, 'Rini Ika Usada', 'pagi', '2020-12-26 14:43:52'),
(0000000046, 'Suci Mandasari', 'pagi', '2020-12-26 14:43:52'),
(0000000047, 'Eja Tarihoran M.Farm', 'pagi', '2020-12-26 14:43:52'),
(0000000048, 'Syahrini Restu Rahimah S.Farm', 'pagi', '2020-12-26 14:43:52'),
(0000000049, 'Kania Jamalia Handayani M.Pd', 'pagi', '2020-12-26 14:43:52'),
(0000000050, 'Rahayu Lailasari', 'pagi', '2020-12-26 14:43:52'),
(0000000051, 'Darmanto Lazuardi S.Farm', 'pagi', '2020-12-26 14:43:52'),
(0000000052, 'Pranawa Sihotang', 'pagi', '2020-12-26 14:43:52'),
(0000000053, 'Vega Wahyudin', 'pagi', '2020-12-26 14:43:52'),
(0000000054, 'Salwa Febi Mandasari S.Sos', 'pagi', '2020-12-26 14:43:52'),
(0000000055, 'Rudi Prabu Napitupulu', 'pagi', '2020-12-26 14:43:52'),
(0000000056, 'Darmana Suwarno', 'pagi', '2020-12-26 14:43:52'),
(0000000057, 'Clara Prastuti', 'pagi', '2020-12-26 14:43:52'),
(0000000058, 'Oni Suartini', 'pagi', '2020-12-26 14:43:52'),
(0000000059, 'Paramita Sudiati', 'pagi', '2020-12-26 14:43:52'),
(0000000060, 'Prima Manah Sihombing', 'pagi', '2020-12-26 14:43:52'),
(0000000061, 'Maida Suryatmi S.Farm', 'pagi', '2020-12-26 14:43:52'),
(0000000062, 'Irnanto Damanik S.E.', 'pagi', '2020-12-26 14:43:52'),
(0000000063, 'Ian Harto Saefullah S.Pt', 'pagi', '2020-12-26 14:43:52'),
(0000000064, 'Violet Alika Wijayanti S.Gz', 'pagi', '2020-12-26 14:43:52'),
(0000000065, 'Lanang Permadi', 'pagi', '2020-12-26 14:43:52'),
(0000000066, 'Jaya Yoga Halim S.E.', 'pagi', '2020-12-26 14:43:52'),
(0000000067, 'Dina Mayasari', 'pagi', '2020-12-26 14:43:52'),
(0000000068, 'Mutia Pertiwi', 'pagi', '2020-12-26 14:43:52'),
(0000000069, 'Oman Salman Iswahyudi M.Farm', 'pagi', '2020-12-26 14:43:52'),
(0000000070, 'Dian Wulandari S.T.', 'pagi', '2020-12-26 14:43:52'),
(0000000071, 'Ika Purwanti', 'pagi', '2020-12-26 14:43:52'),
(0000000072, 'Wawan Marbun S.Psi', 'pagi', '2020-12-26 14:43:52'),
(0000000073, 'Shania Rahmawati', 'pagi', '2020-12-26 14:43:52'),
(0000000074, 'Cahyanto Hidayat', 'pagi', '2020-12-26 14:43:52'),
(0000000075, 'Arsipatra Megantara', 'pagi', '2020-12-26 14:43:52'),
(0000000076, 'Mala Kartika Mardhiyah', 'pagi', '2020-12-26 14:43:52'),
(0000000077, 'Wahyu Ramadan', 'pagi', '2020-12-26 14:43:52'),
(0000000078, 'Xanana Pradipta', 'pagi', '2020-12-26 14:43:52'),
(0000000079, 'Fitria Agustina', 'pagi', '2020-12-26 14:43:52'),
(0000000080, 'Yuliana Zamira Mulyani', 'pagi', '2020-12-26 14:43:52'),
(0000000081, 'Cahyono Nardi Putra S.E.I', 'pagi', '2020-12-26 14:43:52'),
(0000000082, 'Kawaca Latupono', 'pagi', '2020-12-26 14:43:52'),
(0000000083, 'Aslijan Permadi S.H.', 'pagi', '2020-12-26 14:43:52'),
(0000000084, 'Jinawi Jaeman Wasita', 'pagi', '2020-12-26 14:43:52'),
(0000000085, 'Wisnu Kayun Uwais S.Ked', 'pagi', '2020-12-26 14:43:52'),
(0000000086, 'Lasmanto Sitorus', 'pagi', '2020-12-26 14:43:52'),
(0000000087, 'Artanto Eman Halim', 'pagi', '2020-12-26 14:43:52'),
(0000000088, 'Karen Safitri', 'pagi', '2020-12-26 14:43:52'),
(0000000089, 'Bagiya Santoso S.E.I', 'pagi', '2020-12-26 14:43:52'),
(0000000090, 'Puti Wahyuni', 'pagi', '2020-12-26 14:43:52'),
(0000000091, 'Putri Anggraini', 'pagi', '2020-12-26 14:43:52'),
(0000000092, 'Jamalia Fitria Lailasari S.Kom', 'pagi', '2020-12-26 14:43:52'),
(0000000093, 'Prabu Ibrahim Sihotang S.Farm', 'pagi', '2020-12-26 14:43:52'),
(0000000094, 'Paris Yunita Purwanti S.H.', 'pagi', '2020-12-26 14:43:52'),
(0000000095, 'Ulva Hariyah M.Ak', 'pagi', '2020-12-26 14:43:52'),
(0000000096, 'Intan Winarsih S.Sos', 'pagi', '2020-12-26 14:43:52'),
(0000000097, 'Harja Cakrabirawa Budiyanto', 'pagi', '2020-12-26 14:43:52'),
(0000000098, 'Aris Saptono', 'pagi', '2020-12-26 14:43:52'),
(0000000099, 'Nugraha Prasetyo Rajata S.Sos', 'pagi', '2020-12-26 14:43:52'),
(0000000100, 'Cemani Setiawan S.Ked', 'pagi', '2020-12-26 14:43:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
