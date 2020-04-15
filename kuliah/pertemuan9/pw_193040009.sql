-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Apr 2020 pada 14.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040009`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Muhammad Wildhan', '193040009', '193040009.muhammad@mail.unpas.ac.id', 'Teknik Informatika', 'wildhan.jpeg'),
(2, 'Sofyan Egi', '193040025', '193040025.sofyan@mail.unpas.ac.id', 'Teknik Industri', 'egi.jpeg'),
(3, 'Farhan A', '193040010', '193040010.farhan@mail.unpas.ac.id', 'Teknik Informatika', 'farhan.jpeg'),
(4, 'Putra Hanif Ammarta', '193040001', '193040001.putra@mail.unpas.ac.id', 'Teknik Informatika', 'hanif.jpeg'),
(5, 'David Dalil Tauhid', '193040002', '193040002.david@mail.unpas.ac.id', 'Teknik Informatika', 'david.jpeg'),
(6, 'Aryogi Aziz', '193040023', '193040023.aryogi@mail.unpas.ac.id', 'Teknik Informatika', 'arogi.jpeg'),
(7, 'Taufik Hidayat', '193040019', '193040019.taufik@mail.unpas.ac.id', 'Teknik Informatika', 'taufik.jpeg'),
(8, 'Silvi Fitriawati', '193040028', '193040028.silvi@@mail.unpas.ac.id', 'Teknik Informatika', 'silvii.jpeg'),
(9, 'Anjara Darojatun Nisa', '193040006', '193040006.anjara@mail.unpas.ac.id', 'Teknik Informatika', 'anjara.jpeg'),
(10, 'Fahri Arliansyah', '193040011', '193040011.fahri@mail.unpas.ac.id', 'Teknik Informatika', 'fahri.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
