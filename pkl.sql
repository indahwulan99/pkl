-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2020 pada 03.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'sindi123', '$2y$10$CP5C5bkPkGgSMYEtiSUWU.rIys651.caZkyMAsnyBzHxc0V2./3lC', 'Sindi Nur Kharisma'),
(3, 'indah123', '$2y$10$smclEFa0faXToP4I1zV2LOB1GFktbyp8pUn709wb/95rMvOAsKnPW', 'Indah Wulansari'),
(5, 'admin123', '$2y$10$Jw6blYdT43wlcIfOBNm4X.HcQhgdGUtPDCLzMdFEDt1KZNAIZnzd2', 'admin'),
(6, 'riska123', '$2y$10$nZwJghM9xFPSoUNrxQA2su1jp1ndUPsflb1AEpOO39bicXrl.CeiO', 'Riska NA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri`
--

CREATE TABLE `industri` (
  `nib` varchar(30) NOT NULL,
  `namaind` varchar(50) DEFAULT NULL,
  `namaproduk` varchar(50) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `pendthn` varchar(30) DEFAULT NULL,
  `inthn` varchar(30) DEFAULT NULL,
  `pekerja` varchar(30) DEFAULT NULL,
  `alamatind` varchar(50) DEFAULT NULL,
  `id_kec` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `industri`
--

INSERT INTO `industri` (`nib`, `namaind`, `namaproduk`, `tahun`, `pendthn`, `inthn`, `pekerja`, `alamatind`, `id_kec`) VALUES
('1232123456', 'graha mitra', 'kamera', '2010', 'Kecil', '1.000.000.000 - 15.000.000.000', '>=20', 'kediri', 11),
('2', 'graha mitrakgiii', 'tape ketanm', '2011', 'Menengah', '15.000.000.000', '>=20', 'kedirie', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(3) NOT NULL,
  `namakec` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `namakec`) VALUES
(1, 'Pagu'),
(2, 'Kunjang'),
(3, 'Purwoasri'),
(4, 'Plemahan'),
(5, 'Kayen Kidul'),
(6, 'Papar'),
(7, 'Ngasem'),
(8, 'Sampengrejo'),
(9, 'Semen'),
(10, 'Tarokan'),
(11, 'Mojo'),
(12, 'Grogol'),
(13, 'Banyakan'),
(14, 'Kandat'),
(15, 'Ngadiluwih'),
(16, 'Ngancar'),
(17, 'Ringinrejo'),
(18, 'Wates'),
(19, 'Gurah'),
(20, 'Kandangan'),
(21, 'Badas'),
(22, 'Pare'),
(23, 'Plosoklaten'),
(24, 'Puncu'),
(25, 'Kepung'),
(26, 'Kras');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `nik` int(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `sosmed` varchar(20) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `nib` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`nik`, `nama`, `email`, `alamat`, `sosmed`, `telp`, `nib`) VALUES
(765431, 'Indah Wulansari', 'kab.kediri@user.com', 'Bandar Lor', 'fb', '089765432123', '1232123456'),
(3231312, 'Yolanda Diah Puuss', 'indahwulansariyfs@facebook.com', 'jongbiruuue', 'fbi', '0890785', '2'),
(2147483647, 'Faris', 'Bandar Lor', 'ghgh@GMAIL.COM', 'fb', '089765432123', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skala`
--

CREATE TABLE `skala` (
  `id_skala` int(11) NOT NULL,
  `skala` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skala`
--

INSERT INTO `skala` (`id_skala`, `skala`) VALUES
(1, 'Mikro'),
(2, 'Kecil'),
(3, 'Menengah'),
(4, 'Besar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`nib`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `skala`
--
ALTER TABLE `skala`
  ADD PRIMARY KEY (`id_skala`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `skala`
--
ALTER TABLE `skala`
  MODIFY `id_skala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
