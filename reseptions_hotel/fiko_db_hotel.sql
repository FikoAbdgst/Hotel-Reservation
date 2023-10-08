-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2022 pada 08.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiko_db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_fasilitas_hotel`
--

CREATE TABLE `fiko_fasilitas_hotel` (
  `fiko_id_fasilitas` int(20) NOT NULL,
  `fiko_nama_fasilitas` varchar(255) NOT NULL,
  `fiko_keterangan` varchar(255) NOT NULL,
  `fiko_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_fasilitas_hotel`
--

INSERT INTO `fiko_fasilitas_hotel` (`fiko_id_fasilitas`, `fiko_nama_fasilitas`, `fiko_keterangan`, `fiko_foto`) VALUES
(1, 'Kolam Renang', 'Berada di halaman Hotel', '14.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_kamar`
--

CREATE TABLE `fiko_kamar` (
  `fiko_id_kamar` int(11) NOT NULL,
  `fiko_no_kamar` varchar(255) NOT NULL,
  `fiko_id_tipe` int(11) NOT NULL,
  `fiko_status` text NOT NULL,
  `fiko_lantai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_kamar`
--

INSERT INTO `fiko_kamar` (`fiko_id_kamar`, `fiko_no_kamar`, `fiko_id_tipe`, `fiko_status`, `fiko_lantai`) VALUES
(1, 'A-01', 1, 'Tersedia', '1'),
(2, 'A-02', 1, 'Tersedia', '1'),
(3, 'A-03', 2, 'Tersedia', '1'),
(4, 'A-04', 2, 'Tersedia', '1'),
(5, 'A-05', 3, 'Tidak Tersedia', '1'),
(6, 'A-06', 3, 'Tidak Tersedia', '1'),
(7, 'A-07', 4, 'Tersedia', '1'),
(8, 'A-08', 4, 'Tersedia', '1'),
(9, 'A-09', 5, 'Tersedia', '1'),
(10, 'A-10', 5, 'Tersedia', '1'),
(11, 'B-01', 1, 'Tersedia', '2'),
(12, 'B-02', 1, 'Tidak Tersedia', '2'),
(13, 'B-03', 2, 'Tersedia', '2'),
(14, 'B-04', 2, 'Tersedia', '2'),
(15, 'B-05', 3, 'Tidak Tersedia', '2'),
(16, 'B-06', 3, 'Tidak Tersedia', '2'),
(17, 'B-07', 4, 'Tersedia', '2'),
(18, 'B-08', 4, 'Tersedia', '2'),
(19, 'B-09', 5, 'Tersedia', '2'),
(20, 'B-10', 5, 'Tersedia', '2'),
(21, 'C-01', 1, 'Tidak Tersedia', '3'),
(22, 'C-02', 1, 'Tidak Tersedia', '3'),
(23, 'C-03', 2, 'Tersedia', '3'),
(24, 'C-04', 2, 'Tersedia', '3'),
(25, 'C-05', 3, 'Tersedia', '3'),
(26, 'C-06', 3, 'Tersedia', '3'),
(27, 'C-07', 4, 'Tersedia', '3'),
(28, 'C-08', 4, 'Tersedia', '3'),
(29, 'C-09', 5, 'Tersedia', '3'),
(30, 'C-10', 5, 'Tersedia', '3'),
(31, 'D-01', 1, 'Tersedia', '4'),
(32, 'D-02', 1, 'Tersedia', '4'),
(33, 'D-03', 2, 'Tersedia', '4'),
(34, 'D-04', 2, 'Tersedia', '4'),
(35, 'D-05', 3, 'Tersedia', '4'),
(36, 'D-06', 3, 'Tersedia', '4'),
(37, 'D-07', 4, 'Tersedia', '4'),
(38, 'D-08', 4, 'Tersedia', '4'),
(39, 'D-09', 5, 'Tersedia', '4'),
(40, 'D-10', 5, 'Tersedia', '4'),
(41, 'E-01', 1, 'Tersedia', '5'),
(42, 'E-02', 1, 'Tersedia', '5'),
(43, 'E-03 ', 2, 'Tersedia ', '5'),
(44, 'E-04', 2, 'Tersedia ', '5'),
(45, 'E-05', 3, 'Tersedia ', '5'),
(46, 'E-06', 3, 'Tersedia', '5'),
(47, 'E-07', 4, 'Tersedia', '5'),
(48, 'E-08', 4, 'Tersedia', '5'),
(49, 'E-09', 5, 'Tersedia', '5'),
(50, 'E-10', 5, 'Tersedia', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_reservasi`
--

CREATE TABLE `fiko_reservasi` (
  `fiko_id_reservasi` int(11) NOT NULL,
  `fiko_kode_reservasi` varchar(255) NOT NULL,
  `fiko_nama_tamu` varchar(255) NOT NULL,
  `fiko_email_tamu` varchar(255) NOT NULL,
  `fiko_check_in` date NOT NULL,
  `fiko_check_out` date NOT NULL,
  `fiko_jumlah_kamar` int(11) NOT NULL,
  `fiko_jumlah_tamu` int(11) NOT NULL,
  `fiko_pesan` varchar(255) NOT NULL,
  `fiko_id_tipe` int(11) NOT NULL,
  `fiko_status` varchar(255) NOT NULL,
  `fiko_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_reservasi`
--

INSERT INTO `fiko_reservasi` (`fiko_id_reservasi`, `fiko_kode_reservasi`, `fiko_nama_tamu`, `fiko_email_tamu`, `fiko_check_in`, `fiko_check_out`, `fiko_jumlah_kamar`, `fiko_jumlah_tamu`, `fiko_pesan`, `fiko_id_tipe`, `fiko_status`, `fiko_total`) VALUES
(1, 'RSV001', 'oi', 'yaya@gmail.com', '2022-03-25', '2022-03-26', 1, 2, '2', 1, 'Check Out', '300000'),
(2, 'RSV002', 'oi', 'yaya@gmail.com', '2022-03-24', '2022-03-25', 1, 2, '2', 1, 'Check Out', '300000'),
(3, 'RSV003', 'oi', 'yaya@gmail.com', '2022-03-25', '2022-03-26', 2, 2, 'pesan', 3, 'Check In', '150000'),
(4, 'RSV004', 'oi', 'yaya@gmail.com', '2022-03-25', '2022-03-26', 2, 2, 'oi', 1, '', '150000'),
(5, 'RSV005', 'oi', 'yaya@gmail.com', '2022-03-24', '2022-03-25', 2, 2, '2', 1, '', '150000'),
(6, 'RSV006', 'oi', 'yaya@gmail.com', '2022-03-25', '2022-03-26', 2, 2, '2', 1, '', '150000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_reserved_room`
--

CREATE TABLE `fiko_reserved_room` (
  `fiko_id` int(11) NOT NULL,
  `fiko_kode_reservasi` varchar(255) NOT NULL,
  `fiko_no_kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_reserved_room`
--

INSERT INTO `fiko_reserved_room` (`fiko_id`, `fiko_kode_reservasi`, `fiko_no_kamar`) VALUES
(1, 'RSV001', 'A-01 A-02 B-01 '),
(2, 'RSV002', 'B-02 C-01 C-02 '),
(3, 'RSV001', 'B-02 C-01 C-02 '),
(4, 'RSV003', 'A-05 A-06 B-05 B-06 '),
(5, 'RSV002', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_role`
--

CREATE TABLE `fiko_role` (
  `fiko_id_role` int(11) NOT NULL,
  `fiko_jenis_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_role`
--

INSERT INTO `fiko_role` (`fiko_id_role`, `fiko_jenis_role`) VALUES
(1, 'Administrator'),
(2, 'Resepsionis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_tamu`
--

CREATE TABLE `fiko_tamu` (
  `fiko_id_tamu` int(11) NOT NULL,
  `fiko_no_identitas` varchar(255) NOT NULL,
  `fiko_nama_tamu` varchar(255) NOT NULL,
  `fiko_email_tamu` varchar(255) NOT NULL,
  `fiko_username` varchar(255) NOT NULL,
  `fiko_password` varchar(255) NOT NULL,
  `fiko_telepon_tamu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_tamu`
--

INSERT INTO `fiko_tamu` (`fiko_id_tamu`, `fiko_no_identitas`, `fiko_nama_tamu`, `fiko_email_tamu`, `fiko_username`, `fiko_password`, `fiko_telepon_tamu`) VALUES
(1, 'No-001', 'Junjun', 'junjun15@gmail.com', 'Junjun', 'dafd755989a0b52f07be78a7f11a0550', '081234567891'),
(2, 'No-002', 'safsd', 'dawaf', 'asdaw', '6ca203c07883f29d3a0b3b1d12672df9', '1234'),
(3, 'No-003', 'oi', 'yaya@gmail.com', 'oi', '69990d881eda34072747d26bc01d9d16', '0812345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_tipe_kamar`
--

CREATE TABLE `fiko_tipe_kamar` (
  `fiko_id_tipe` int(11) NOT NULL,
  `fiko_tipe_kamar` varchar(255) NOT NULL,
  `fiko_deskripsi` varchar(255) NOT NULL,
  `fiko_foto` varchar(255) NOT NULL,
  `fiko_fasilitas` varchar(255) NOT NULL,
  `fiko_harga` varchar(255) NOT NULL,
  `fiko_jumlah_bed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_tipe_kamar`
--

INSERT INTO `fiko_tipe_kamar` (`fiko_id_tipe`, `fiko_tipe_kamar`, `fiko_deskripsi`, `fiko_foto`, `fiko_fasilitas`, `fiko_harga`, `fiko_jumlah_bed`) VALUES
(1, 'Deluxe', 'Kamar ini sangat bagus loh', '723583.jpg', 'AC,BathTub,TV 42 inch', '50000', '-4'),
(2, 'Superior', 'Kamar ini sangat bagus loh', '1170835.jpg', '', '150000', '1'),
(3, 'Single', 'Kamar ini untuk Jomblo', '7.jpg', '', '50000', '6'),
(4, 'Double', 'Kamar Untuk Berdua', '6.jpg', '', '100000', '10'),
(5, 'Triple', 'Kamar untuk Bertiga', '4.jpg', '', '150000', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiko_user`
--

CREATE TABLE `fiko_user` (
  `fiko_id_user` int(11) NOT NULL,
  `fiko_id_role` int(11) NOT NULL,
  `fiko_nama_user` varchar(255) NOT NULL,
  `fiko_email_user` varchar(255) NOT NULL,
  `fiko_username_user` varchar(255) NOT NULL,
  `fiko_password_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fiko_user`
--

INSERT INTO `fiko_user` (`fiko_id_user`, `fiko_id_role`, `fiko_nama_user`, `fiko_email_user`, `fiko_username_user`, `fiko_password_user`) VALUES
(1, 1, 'fiko', 'fiko15@gmail.com', 'fiko', 'a9e7ee609dab7b49e3c9fcfa1f50da6b'),
(2, 2, 'abdigusti', 'abdigusti83@gmail.com', 'abdigusti', 'e86e4685c6c0e86f7ae6698a3cb31073');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fiko_fasilitas_hotel`
--
ALTER TABLE `fiko_fasilitas_hotel`
  ADD PRIMARY KEY (`fiko_id_fasilitas`);

--
-- Indeks untuk tabel `fiko_kamar`
--
ALTER TABLE `fiko_kamar`
  ADD PRIMARY KEY (`fiko_id_kamar`);

--
-- Indeks untuk tabel `fiko_reservasi`
--
ALTER TABLE `fiko_reservasi`
  ADD PRIMARY KEY (`fiko_id_reservasi`);

--
-- Indeks untuk tabel `fiko_reserved_room`
--
ALTER TABLE `fiko_reserved_room`
  ADD PRIMARY KEY (`fiko_id`);

--
-- Indeks untuk tabel `fiko_role`
--
ALTER TABLE `fiko_role`
  ADD PRIMARY KEY (`fiko_id_role`);

--
-- Indeks untuk tabel `fiko_tamu`
--
ALTER TABLE `fiko_tamu`
  ADD PRIMARY KEY (`fiko_id_tamu`);

--
-- Indeks untuk tabel `fiko_tipe_kamar`
--
ALTER TABLE `fiko_tipe_kamar`
  ADD PRIMARY KEY (`fiko_id_tipe`);

--
-- Indeks untuk tabel `fiko_user`
--
ALTER TABLE `fiko_user`
  ADD PRIMARY KEY (`fiko_id_user`),
  ADD UNIQUE KEY `fiko_id_role` (`fiko_id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fiko_fasilitas_hotel`
--
ALTER TABLE `fiko_fasilitas_hotel`
  MODIFY `fiko_id_fasilitas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fiko_kamar`
--
ALTER TABLE `fiko_kamar`
  MODIFY `fiko_id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `fiko_reservasi`
--
ALTER TABLE `fiko_reservasi`
  MODIFY `fiko_id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fiko_reserved_room`
--
ALTER TABLE `fiko_reserved_room`
  MODIFY `fiko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fiko_tamu`
--
ALTER TABLE `fiko_tamu`
  MODIFY `fiko_id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fiko_tipe_kamar`
--
ALTER TABLE `fiko_tipe_kamar`
  MODIFY `fiko_id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fiko_user`
--
ALTER TABLE `fiko_user`
  MODIFY `fiko_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
