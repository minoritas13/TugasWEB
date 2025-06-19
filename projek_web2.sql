-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Jun 2025 pada 15.43
-- Versi server: 8.4.3
-- Versi PHP: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `kategori_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `kategori_id`) VALUES
(1, 'Pensil 2B', 1500, 16, 4),
(2, 'Buku Tulis Sidu', 3500, 200, 4),
(3, 'Pulpen Standard', 2500, 150, 4),
(4, 'Penghapus Joyko', 1000, 75, 4),
(5, 'Penggaris 30cm', 2000, 50, 4),
(6, 'Spidol Snowman', 5000, 40, 4),
(7, 'Kertas HVS A4', 40000, 30, 4),
(8, 'Map Plastik', 1500, 80, 4),
(9, 'Stapler Kenko', 12000, 25, 4),
(10, 'Tip-Ex', 3000, 60, 4),
(18, 'Pensil Mekanik', 6000, 40, 4),
(19, 'Isi Pensil 0.5mm', 3000, 70, 4),
(20, 'Penghapus Putih Staedtler', 2000, 60, 4),
(21, 'Bolpoin Pilot G2', 10000, 25, 4),
(22, 'Sticky Notes Warna-warni', 5000, 50, 4),
(23, 'Paper Clip Jumbo', 2500, 80, 4),
(24, 'Correction Tape Joyko', 6000, 45, 4),
(25, 'Binder Clip Besar', 3500, 30, 4),
(26, 'Kertas Folio Bergaris', 8000, 60, 4),
(27, 'Highlighter Stabilo', 7000, 55, 4),
(28, 'Kue Lapis Legit Slice', 7500, 30, 2),
(29, 'Sereal Koko Krunch Mini', 9500, 40, 2),
(30, 'Permen Kopiko', 3000, 100, 2),
(31, 'Wafer Tango Coklat', 8000, 60, 2),
(32, 'Kue Pia Cap Mangkok', 7000, 35, 2),
(33, 'Keripik Balado 100gr', 10000, 45, 2),
(34, 'Mie Sedap Ayam Bawang', 3000, 90, 2),
(35, 'Roti Sisir Keju', 8500, 25, 2),
(36, 'Biskuit Lemonia', 6000, 50, 2),
(37, 'Permen Relaxa', 2500, 120, 2),
(38, 'Sprite Kaleng 330ml', 6000, 40, 3),
(39, 'Fanta Botol 390ml', 6500, 35, 3),
(40, 'Teh Pucuk Harum', 5000, 75, 3),
(41, 'Good Day Freeze', 6000, 60, 3),
(42, 'Ultra Milk Stroberi', 7000, 50, 3),
(43, 'Floridina Jeruk', 4500, 65, 3),
(44, 'Fruit Tea Apel', 5500, 55, 3),
(45, 'Le Minerale 600ml', 4000, 85, 3),
(46, 'Nu Green Tea', 5000, 70, 3),
(47, 'You C1000 Vitamin C', 8000, 30, 3),
(48, 'Bawang Putih 250gr', 8000, 40, 1),
(49, 'Bawang Merah 250gr', 9000, 35, 1),
(50, 'Saos Sambal ABC', 12000, 25, 1),
(51, 'Royco Ayam 230gr', 10000, 40, 1),
(52, 'Santan Kara 65ml', 3000, 80, 1),
(53, 'Margarine Blue Band 200gr', 12000, 30, 1),
(54, 'Kopi Bubuk Kapal Api 100gr', 7000, 60, 1),
(55, 'Susu Kental Manis Frisian Flag', 9000, 50, 1),
(56, 'Minyak Goreng Tropical 1L', 17000, 40, 1),
(57, 'Tepung Bumbu Sajiku 200gr', 4000, 55, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Kebutuhan Dapur'),
(2, 'Makanan'),
(3, 'Minuman'),
(4, 'Alat Tulis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int NOT NULL,
  `kasir_id` int DEFAULT NULL,
  `pelanggan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `total`, `kasir_id`, `pelanggan`) VALUES
(2, '2025-06-10 00:48:06', 3500, 1, 'Umum'),
(3, '2025-06-10 01:26:02', 6500, 1, 'Umum'),
(4, '2025-06-10 01:56:09', 8000, 1, 'Umum'),
(5, '2025-06-10 01:58:42', 3000, 1, 'Umum'),
(6, '2025-06-10 02:10:34', 14500, 1, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` int NOT NULL,
  `transaksi_id` int DEFAULT NULL,
  `barang_id` int DEFAULT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL,
  `subtotal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id`, `transaksi_id`, `barang_id`, `jumlah`, `harga`, `subtotal`) VALUES
(2, 2, NULL, 1, 3500, 3500),
(3, 3, NULL, 1, 3500, 3500),
(4, 3, NULL, 1, 3000, 3000),
(5, 4, NULL, 1, 3500, 3500),
(6, 4, NULL, 1, 1500, 1500),
(7, 4, NULL, 1, 3000, 3000),
(8, 5, NULL, 2, 1500, 3000),
(9, 6, 9, 1, 12000, 12000),
(10, 6, 3, 1, 2500, 2500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$NsKqi18KT1TUWJJw1FwQP.9G5qOedFYHFDFmWPL/EQfxPG5kJ4CM6', 'admin'),
(2, 'kasir1', '$2y$10$3IojILPE37icfZynIjMEsOThk0cL5DyqsWs1ZdysxSBYelOU7qYH2', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`kategori_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasir_id` (`kasir_id`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kasir_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
