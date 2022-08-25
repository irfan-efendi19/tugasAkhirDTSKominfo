-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 19.29
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webadu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_user`
--

CREATE TABLE `tb_detail_user` (
  `id_detail_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(13) NOT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_detail_user` int(11) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `lokasi_kejadian` text NOT NULL,
  `instansi_tujuan` text NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `id_detail_user`, `judul_laporan`, `deskripsi`, `tanggal_kejadian`, `lokasi_kejadian`, `instansi_tujuan`, `file`, `status`) VALUES
(1, 0, 'Banjir', 'Ada Banjir Besar', '2022-08-25', 'Disana', 'Dinas', '', 'Ditangani'),
(2, 0, 'Demo', 'Demo besar-besaran', '2022-08-25', 'darmo', 'Dinas', '', 'Sudah Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noTelp` varchar(100) NOT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `nik`, `namaLengkap`, `alamat`, `noTelp`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 'chilmi', 'chilmiachmad@yahoo.co.id', 'e10adc3949ba59abbe56e057f20f883e', '3578012601920003', '', 'Surabaya', '085648664488', NULL, '2022-08-19 09:03:19', '2022-08-19 09:03:19'),
(4, 'achmad', 'chilmiachmad@yahoo.co.id', 'e10adc3949ba59abbe56e057f20f883e', '3578012601920003', 'Ackmad Chilmi', 'surabaya', '085648664488', NULL, '2022-08-19 09:03:47', '2022-08-19 09:03:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  ADD PRIMARY KEY (`id_detail_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_user`
--
ALTER TABLE `tb_detail_user`
  ADD CONSTRAINT `tb_detail_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
