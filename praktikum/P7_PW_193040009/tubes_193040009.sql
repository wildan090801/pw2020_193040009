-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2020 pada 07.34
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040009`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Alat_musik` varchar(100) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Cara_bermain` varchar(100) NOT NULL,
  `Harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `Gambar`, `Alat_musik`, `Merk`, `Cara_bermain`, `Harga`) VALUES
(1, 'Optimized-gitar.jpg', 'Gitar', 'Yamaha', 'Dipetik', 850000),
(2, 'Optimized-bass.jpg', 'Bass', 'Ibanez', 'Dipetik', 3450000),
(3, 'Optimized-drum.jpg', 'Drum', 'Yamaha', 'Dipukul', 11350000),
(4, 'Optimized-biola-min.jpg', 'Biola', 'Yamaha', 'Digesek', 9000000),
(5, 'Optimized-piano.jpg', 'Piano', 'Yamaha', 'Menekan Tuts', 9900000),
(6, 'Optimized-saxophone.jpg', 'Saxophone', 'Yamaha', 'Ditiup', 13800000),
(7, 'Optimized-harmonika.jpg', 'Harmonika', 'Suzuki Folkmaster', 'Ditiup', 150000),
(8, 'Optimized-terompet.jpg', 'Terompet', 'Yamaha', 'Ditiup', 7850000),
(9, 'Optimized-keyboard.jpg', 'Keyboard', 'Yamaha', 'Menekan Tuts', 8400000),
(10, 'Optimized-pianika.jpg', 'Pianika', 'Yamaha', 'Ditiup dan Menekan Tuts', 330000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'wildan', '$2y$10$5ZcVKn1RrI1x/bc5vdvtienJgdG812Qy/j9zzRWX1Q6AmcNC2zoOm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
