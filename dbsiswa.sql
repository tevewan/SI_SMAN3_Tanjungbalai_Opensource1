-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2019 pada 18.34
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelajaran`
--

CREATE TABLE `data_pelajaran` (
  `id` int(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `pelajaran` varchar(50) NOT NULL,
  `Pengajar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pelajaran`
--

INSERT INTO `data_pelajaran` (`id`, `kode`, `pelajaran`, `Pengajar`) VALUES
(3, '001', 'IPS', 'Bambang Harry Karina'),
(5, '004', 'Game Kreative G', 'Robby Tempah '),
(6, '008', 'GAME', 'Wijaya Hadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pilihan`
--

CREATE TABLE `data_pilihan` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `mata` varchar(100) NOT NULL,
  `guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pilihan`
--

INSERT INTO `data_pilihan` (`id`, `nip`, `nama`, `jk`, `alamat`, `kode`, `mata`, `guru`) VALUES
(9, '081577', 'Rahmat', 'Pria', 'Jalan Durian', '008', 'IPS', 'Bambang Harry'),
(10, '15220298', 'Rizky Novtian Purba', 'Pria', 'Jalan Abadi', '004', 'Game Kreative G', 'Robby Tempah ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `nip`, `jk`, `alamat`) VALUES
(4, 'Rizky Novtian Purba', '15220298', 'Pria', 'Jalan Abadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'SEKRETARIAT DPRD KOTA TANJUNGBALAI', 1, 'Staff SMA 3 TG Balai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelajaran`
--
ALTER TABLE `data_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pilihan`
--
ALTER TABLE `data_pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelajaran`
--
ALTER TABLE `data_pelajaran`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_pilihan`
--
ALTER TABLE `data_pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
