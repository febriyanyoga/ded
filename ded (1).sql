-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2018 pada 02.36
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ded`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ded`
--

CREATE TABLE `tbl_ded` (
  `id` int(11) NOT NULL,
  `nama_peraturan` varchar(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `tupoksi` varchar(50) NOT NULL,
  `jml_database` varchar(50) NOT NULL,
  `regualasi` varchar(70) NOT NULL
) ;

--
-- Dumping data untuk tabel `tbl_ded`
--

INSERT INTO `tbl_ded` (`id`, `nama_peraturan`, `unit`, `tupoksi`, `jml_database`, `regualasi`) VALUES
(1, 'Sekretariat Daerah', '82', '243', '12', ''),
(2, 'Sekretariat Dewan Perwakilan Rakyat Aceh', '12', '53', '13', ''),
(3, 'Inspektorat Aceh', '3', '18', '11', ''),
(4, 'Badan Perencanaan Pembangunan Daerah Aceh', '21', '133', '19', ''),
(5, 'Badan Pengelolaan Keuangan Aceh', '21', '77', '24', ''),
(6, 'Badan Kepegawaian Aceh', '18', '58', '19', ''),
(7, 'Badan Pengembangan Sumber Daya manusia Aceh', '15', '72', '15', ''),
(8, 'Badan Penangulangan Bencana Aceh', '9', '27', '11', ''),
(9, 'Badan Penghubung Pemerintah Aceh', '5', '21', '6', ''),
(10, 'Dinas Pendidikan Aceh', '15', '59', '20', ''),
(11, 'Dinas Kesehatan Aceh', '15', '60', '22', ''),
(12, 'Dinas Pekerjaan Umum dan Penataan Ruang Aceh', '15', '49', '13', ''),
(13, 'Dinas Pengairan Aceh', '15', '37', '14', ''),
(14, 'Dinas Perumahan Rakyat', '15', '36', '15', ''),
(15, 'Dinas Sosial Aceh', '15', '46', '7', ''),
(16, 'Dinas Tenaga Kerja dan Mobilitas Penduduk Aceh', '18', '80', '16', ''),
(17, 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak', '15', '72', '10', ''),
(18, 'Dinas Pangan Aceh', '15', '54', '38', ''),
(19, 'Dinas Lingkungan Hidup dan Pangan Aceh', '18', '92', '16', ''),
(20, 'Dinas registrasi Kependfudukan Aceh', '15', '39', '11', ''),
(21, 'Dinas Pemberdayaan Masyarakat dan Gampong Aceh', '15', '100', '24', ''),
(22, 'Dinas Perhubungan Aceh', '15', '76', '22', ''),
(23, 'Dinas Komunikasi, Informatika dan Persandian Aceh', '18', '130', '21', ''),
(24, 'Dinas Koperasi dan Usaha Kecil Dan Menengah Aceh', '15', '49', '24', ''),
(25, 'Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Aceh', '27', '175', '25', ''),
(26, 'Dinas Pemuda Dan Olahraga Aceh', '15', '102', '40', ''),
(27, 'Dinas Kebudayaan dan Pariwisata Aceh', '18', '32', '11', ''),
(28, 'Dinas Perpustakaan dan Kearsipan Aceh', '18', '78', '13', ''),
(29, 'Dinas Kelautan Dan Perikanan Aceh', '15', '50', '16', ''),
(30, 'Dinas Pertanian dan Perkebunan Aceh', '21', '58', '23', ''),
(31, 'Dinas Peternakan', '15', '45', '21', ''),
(32, 'Dinas Energi dan Sumber Daya Mineral Aceh', '15', '39', '17', ''),
(33, 'Dinas Perindustrian dan Perdagangan Aceh', '18', '85', '12', ''),
(34, 'Keurukon Katibul Wali', '12', '23', '11', ''),
(35, 'Dinas Syariat Islam Aceh', '12', '24', '14', ''),
(36, 'Dinas Pendidikan dayah Aceh', '13', '49', '9', ''),
(37, 'Dinas Pertanahan Aceh', '12', '23', '11', ''),
(38, 'Majelis Permusyawarahan Ulama', '9', '22', '17', ''),
(39, 'Majelis Adat', '9', '16', '13', ''),
(40, 'Majelis Pendidikan', '9', '17', '15', ''),
(41, 'Baitul Mal', '9', '19', '13', ''),
(42, 'Badan Reintegrasi', '9', '9', '12', ''),
(43, 'Pamong Praja', '18', '27', '17', ''),
(44, 'Rumah Sakit Umum dr. Zainoel Abidin', '23', '45', '10', ''),
(45, 'Rumah Sakit Jiwa', '12', '30', '20', ''),
(46, 'Rumah Sakit Ibu dan Anak', '12', '26', '20', ''),
(47, 'Badan Kesatuan Bangsa dan Politik Aceh', '10', '15', '18', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `id_detail` int(10) NOT NULL,
  `id_ded` int(10) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `biro` varchar(200) NOT NULL,
  `bagian` varchar(200) NOT NULL,
  `subag` varchar(200) NOT NULL,
  `basisdata` varchar(200) NOT NULL,
  `parameter` varchar(200) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `panjang` int(10) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_ded` int(11) NOT NULL,
  `nama_dokumen` int(11) NOT NULL,
  `file_dokumen` int(11) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_note`
--

CREATE TABLE `tbl_note` (
  `id_note` int(10) NOT NULL,
  `id_ded` int(10) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id` int(11) NOT NULL,
  `nama_sistem` varchar(70) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`id`, `nama_sistem`, `alamat`, `provinsi`, `kabupaten`, `no_telp`, `logo`) VALUES
(1, 'Aplikasi Repository Basis Data Tunggal Aceh', 'Aceh', 'Nangroe Aceh Darusalam', 'Banda Aceh', '0212345678', 'Coat_of_arms_of_Aceh_svg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_users` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `images` varchar(50) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL
) ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`) VALUES
(1, 'Ferry Ferdana Putra', 'ffpjos@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 1, 'y'),
(3, 'tes', 'tes@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 2, 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ;

--
-- Dumping data untuk tabel `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_ded`
--
ALTER TABLE `tbl_ded`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_note`
--
ALTER TABLE `tbl_note`
  ADD PRIMARY KEY (`id_note`);

--
-- Indeks untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_ded`
--
ALTER TABLE `tbl_ded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_note`
--
ALTER TABLE `tbl_note`
  MODIFY `id_note` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
