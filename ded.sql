-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2018 pada 07.35
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
-- Struktur dari tabel `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `id_bagian` int(10) NOT NULL,
  `id_biro` int(10) NOT NULL,
  `nama_bagian` varchar(200) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(10) NOT NULL,
  `id_peraturan` int(10) NOT NULL,
  `nama_bidang` varchar(200) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biro`
--

CREATE TABLE `tbl_biro` (
  `id_biro` int(10) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `nama_biro` varchar(200) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_database`
--

CREATE TABLE `tbl_database` (
  `id_database` int(10) NOT NULL,
  `id_subag` int(10) NOT NULL,
  `nama_database` varchar(200) NOT NULL
) ;

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
  `file_pdf` varchar(200) NOT NULL
) ;

--
-- Dumping data untuk tabel `tbl_ded`
--

INSERT INTO `tbl_ded` (`id`, `nama_peraturan`, `unit`, `tupoksi`, `jml_database`, `file_pdf`) VALUES
(1, 'Sekretariat Daerah', '82', '243', '12', '1_Sekretariat_Daerah.pdf'),
(2, 'Sekretariat Dewan Perwakilan Rakyat Aceh', '12', '53', '13', '2_Sekretariat_Dewan_Perwakilan_Rakyat_Aceh.pdf'),
(3, 'Inspektorat Aceh', '3', '18', '11', '3_Inspektorat_Aceh.pdf'),
(4, 'Badan Perencanaan Pembangunan Daerah Aceh', '21', '133', '19', '4_Badan_Perencanaan_Pembangunan_Daerah_Aceh.pdf'),
(5, 'Badan Pengelolaan Keuangan Aceh', '21', '77', '24', '5_Badan_Pengelolaan_Keuangan_Aceh.pdf'),
(6, 'Badan Kepegawaian Aceh', '18', '58', '19', '6_Badan_Kepegawaian_Aceh.pdf'),
(7, 'Badan Pengembangan Sumber Daya manusia Aceh', '15', '72', '15', '7_Badan_Pengembangan_Sumber_Daya_manusia_Aceh.pdf'),
(8, 'Badan Penangulangan Bencana Aceh', '9', '27', '11', '8_Badan_Penangulangan_Bencana_Aceh.pdf'),
(9, 'Badan Penghubung Pemerintah Aceh', '5', '21', '6', '9_Badan_Penghubung_Pemerintah_Aceh.pdf'),
(10, 'Dinas Pendidikan Aceh', '15', '59', '20', '10_Dinas_Pendidikan_Aceh.pdf'),
(11, 'Dinas Kesehatan Aceh', '15', '60', '22', '11_Dinas_Kesehatan_Aceh.pdf'),
(12, 'Dinas Pekerjaan Umum dan Penataan Ruang Aceh', '15', '49', '13', '12_Dinas_Pekerjaan_Umum_dan_Penataan_Ruang_Aceh.pdf'),
(13, 'Dinas Pengairan Aceh', '15', '37', '14', '13_Dinas_Pengairan_Aceh.pdf'),
(14, 'Dinas Perumahan Rakyat', '15', '36', '15', '14_Dinas_Perumahan_Rakyat.pdf'),
(15, 'Dinas Sosial Aceh', '15', '46', '7', '15_Dinas_Sosial_Aceh.pdf'),
(16, 'Dinas Tenaga Kerja dan Mobilitas Penduduk Aceh', '18', '80', '16', '16_Dinas_Tenaga_Kerja_dan_Mobilitas_Penduduk_Aceh.pdf'),
(17, 'Dinas Pemberdayaan Perempuan dan Perlindungan Anak', '15', '72', '10', '17_Dinas_Pemberdayaan_Perempuan_dan_Perlindungan_Anak.pdf'),
(18, 'Dinas Pangan Aceh', '15', '54', '38', '18_Dinas_Pangan_Aceh.pdf'),
(19, 'Dinas Lingkungan Hidup dan Pangan Aceh', '18', '92', '16', '19_Dinas_Lingkungan_Hidup_dan_Kehutanan_Aceh.pdf'),
(20, 'Dinas registrasi Kependfudukan Aceh', '15', '39', '11', '20_Dinas_Registrasi_Kependudukan_Aceh.pdf'),
(21, 'Dinas Pemberdayaan Masyarakat dan Gampong Aceh', '15', '100', '24', '21_Dinas_Pemberdayaan_Masyarakat_dan_Gampong_Aceh.pdf'),
(22, 'Dinas Perhubungan Aceh', '15', '76', '22', '22_Dinas_Perhubungan_Aceh.pdf'),
(23, 'Dinas Komunikasi, Informatika dan Persandian Aceh', '18', '130', '21', '23_Dinas_Komunikasi,_Informatika_dan_Persandian_Aceh.pdf'),
(24, 'Dinas Koperasi dan Usaha Kecil Dan Menengah Aceh', '15', '49', '24', '24_Dinas_Koperasi_dan_Usaha_Kecil_Dan_Menengah_Aceh.pdf'),
(25, 'Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Aceh', '27', '175', '25', '25_Dinas_Penanaman_Modal_Dan_Pelayanan_Terpadu_Satu_Pintu_Aceh.pdf'),
(26, 'Dinas Pemuda Dan Olahraga Aceh', '15', '102', '40', '26_Dinas_Pemuda_Dan_Olahraga_Aceh.pdf'),
(27, 'Dinas Kebudayaan dan Pariwisata Aceh', '18', '32', '11', '27_Dinas_Kebudayaan_dan_Pariwisata_Aceh.pdf'),
(28, 'Dinas Perpustakaan dan Kearsipan Aceh', '18', '78', '13', '28_Dinas_Perpustakaan_dan_Kearsipan_Aceh.pdf'),
(29, 'Dinas Kelautan Dan Perikanan Aceh', '15', '50', '16', '29_Dinas_Kelautan_Dan_Perikanan_Aceh.pdf'),
(30, 'Dinas Pertanian dan Perkebunan Aceh', '21', '58', '23', '30_Dinas_Pertanian_dan_Perkebunan_Aceh.pdf'),
(31, 'Dinas Peternakan', '15', '45', '21', '31_Dinas_Peternakan.pdf'),
(32, 'Dinas Energi dan Sumber Daya Mineral Aceh', '15', '39', '17', '32_Dinas_Energi_dan_Sumber_Daya_Mineral_Aceh.pdf'),
(33, 'Dinas Perindustrian dan Perdagangan Aceh', '18', '85', '12', '33_Dinas_Perindustrian_dan_Perdagangan_Aceh.pdf'),
(34, 'Keurukon Katibul Wali', '12', '23', '11', '34_Keurukon_Katibul_Wali.pdf'),
(35, 'Dinas Syariat Islam Aceh', '12', '24', '14', '35_Dinas_Syariat_Islam_Aceh.pdf'),
(36, 'Dinas Pendidikan dayah Aceh', '13', '49', '9', '36_Dinas_Pendidikan_dayah_Aceh.pdf'),
(37, 'Dinas Pertanahan Aceh', '12', '23', '11', '37_Dinas_Pertanahan_Aceh.pdf'),
(38, 'Majelis Permusyawarahan Ulama', '9', '22', '17', '38_Majelis_Permusyawarahan_Ulama.pdf'),
(39, 'Majelis Adat', '9', '16', '13', '39_Majelis_Adat.pdf'),
(40, 'Majelis Pendidikan', '9', '17', '15', '40_Majelis_Pendidikan.pdf'),
(41, 'Baitul Mal', '9', '19', '13', '41_Baitul_Mal.pdf'),
(42, 'Badan Reintegrasi', '9', '9', '12', '42_Badan_Reintegrasi.pdf'),
(43, 'Pamong Praja', '18', '27', '17', '43_Pamong_Praja.pdf'),
(44, 'Rumah Sakit Umum dr. Zainoel Abidin', '23', '45', '10', '44_Rumah_Sakit_Umum_dr__Zainoel_Abidin.pdf'),
(45, 'Rumah Sakit Jiwa', '12', '30', '20', '45_Rumah_Sakit_Jiwa.pdf'),
(46, 'Rumah Sakit Ibu dan Anak', '12', '26', '20', '46_Rumah_Sakit_Ibu_dan_Anak.pdf'),
(47, 'Badan Kesatuan Bangsa dan Politik Aceh', '10', '15', '18', '47_Badan_Kesatuan_Bangsa_dan_Politik_Aceh.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_entitas`
--

CREATE TABLE `tbl_entitas` (
  `id` int(10) NOT NULL,
  `id_subag` int(10) NOT NULL,
  `entitas` varchar(1000) NOT NULL
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
-- Struktur dari tabel `tbl_parameter`
--

CREATE TABLE `tbl_parameter` (
  `id_parameter` int(10) NOT NULL,
  `id_database` int(10) NOT NULL,
  `nama_parameter` varchar(200) NOT NULL,
  `jenisdata` varchar(20) NOT NULL,
  `panjang` int(8) NOT NULL
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
-- Struktur dari tabel `tbl_subag`
--

CREATE TABLE `tbl_subag` (
  `id_subag` int(10) NOT NULL,
  `id_bagian` int(10) NOT NULL,
  `nama_subag` varchar(200) NOT NULL
) ;

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
-- Indeks untuk tabel `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indeks untuk tabel `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indeks untuk tabel `tbl_biro`
--
ALTER TABLE `tbl_biro`
  ADD PRIMARY KEY (`id_biro`);

--
-- Indeks untuk tabel `tbl_database`
--
ALTER TABLE `tbl_database`
  ADD PRIMARY KEY (`id_database`);

--
-- Indeks untuk tabel `tbl_ded`
--
ALTER TABLE `tbl_ded`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_entitas`
--
ALTER TABLE `tbl_entitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_parameter`
--
ALTER TABLE `tbl_parameter`
  ADD PRIMARY KEY (`id_parameter`);

--
-- Indeks untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_subag`
--
ALTER TABLE `tbl_subag`
  ADD PRIMARY KEY (`id_subag`);

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
-- AUTO_INCREMENT untuk tabel `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  MODIFY `id_bagian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_biro`
--
ALTER TABLE `tbl_biro`
  MODIFY `id_biro` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_database`
--
ALTER TABLE `tbl_database`
  MODIFY `id_database` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ded`
--
ALTER TABLE `tbl_ded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_entitas`
--
ALTER TABLE `tbl_entitas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_parameter`
--
ALTER TABLE `tbl_parameter`
  MODIFY `id_parameter` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_subag`
--
ALTER TABLE `tbl_subag`
  MODIFY `id_subag` int(10) NOT NULL AUTO_INCREMENT;

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
