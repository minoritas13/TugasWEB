-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2025 at 06:42 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `kategori_id` int DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `kategori_id`, `gambar`) VALUES
-- ===============================
-- Alat Tulis (kategori_id = 4)
-- ===============================
(1, 'Pensil 2B', 1500, 16, 4, 'img/1750357454_1.png'),
(2, 'Buku Tulis Sidu', 3500, 200, 4, 'img/1750357464_2.png'),
(3, 'Pulpen Standard', 2500, 150, 4, 'img/1750357472_3.png'),
(4, 'Penghapus Joyko', 1000, 75, 4, 'img/1750357490_9.png'),
(5, 'Penggaris 30cm', 2000, 50, 4, 'img/1750357482_4.png'),
(6, 'Spidol Snowman', 5000, 40, 4, 'img/1750357514_5.png'),
(7, 'Kertas HVS A4', 40000, 30, 4, 'img/1750357506_6.png'),
(8, 'Map Plastik', 1500, 80, 4, 'img/1750357499_7.png'),
(9, 'Stapler Kenko', 12000, 25, 4, 'img/1750357523_8.png'),
(10, 'Tip-Ax', 30000, 50, 4, 'img/1750357544_9.png'),
(66, 'Tinta Printer', 50000, 10, 4, 'img/1750357523_8.png'),
(67, 'Kalkulator Casio', 75000, 8, 4, 'img/1750357544_9.png'),
(68, 'Buku Gambar', 7000, 20, 4, 'img/1750357454_1.png'),
(69, 'Pensil Warna 12', 18000, 15, 4, 'img/1750357464_2.png'),
(70, 'Lem Kertas UHU', 6000, 25, 4, 'img/1750357472_3.png'),

-- ===============================
-- Makanan (kategori_id = 2)
-- ===============================
(21, 'Indomie', 3000, 200, 2, 'img/1750060181_download.jpg'),
(22, 'Pop Mie', 8000, 40, 2, 'img/1750357531_10.png'),
(38, 'Mie Sedap Goreng', 3500, 100, 2, 'img/1750357499_7.png'),
(39, 'Roti Tawar', 12000, 25, 2, 'img/1750357506_6.png'),
(40, 'Chitato Sapi Panggang', 8000, 40, 2, 'img/1750357514_5.png'),
(41, 'Biskuit Roma Kelapa', 5000, 60, 2, 'img/1750357544_9.png'),
(42, 'SilverQueen Coklat', 15000, 30, 2, 'img/1750357454_1.png'),
(43, 'Sari Roti Coklat', 7000, 45, 2, 'img/1750357464_2.png'),
(44, 'Permen Mentos', 3000, 80, 2, 'img/1750357472_3.png'),
(45, 'Astor Coklat', 9000, 35, 2, 'img/1750357490_9.png'),
(46, 'Good Time Cookies', 11000, 50, 2, 'img/1750357482_4.png'),
(47, 'Choki Choki', 2000, 70, 2, 'img/1750357499_7.png'),
(48, 'Energen Coklat', 4000, 60, 2, 'img/1750357523_8.png'),
(49, 'Sereal Koko Krunch', 25000, 20, 2, 'img/1750357506_6.png'),
(50, 'Bubur Instan Ayam', 7000, 40, 2, 'img/1750357544_9.png'),

-- ===============================
-- Kebutuhan Dapur (kategori_id = 1)
-- ===============================
(23, 'Sapu Lidi', 10000, 20, 1, 'img/1750357454_1.png'),
(24, 'Sabun Cuci Piring', 8000, 35, 1, 'img/1750357464_2.png'),
(25, 'Minyak Goreng 1L', 17000, 50, 1, 'img/1750357472_3.png'),
(26, 'Garam Dapur', 3000, 100, 1, 'img/1750357490_9.png'),
(27, 'Gula Pasir 1Kg', 14000, 80, 1, 'img/1750357482_4.png'),
(28, 'Tepung Terigu Segitiga', 12000, 60, 1, 'img/1750357514_5.png'),
(29, 'Kecap Manis ABC', 11000, 70, 1, 'img/1750357506_6.png'),
(30, 'Sikat Lantai', 9000, 50, 1, 'img/1750357499_7.png'),
(31, 'Spons Cuci Piring', 3000, 120, 1, 'img/1750357523_8.png'),
(32, 'Ember Plastik', 15000, 25, 1, 'img/1750357544_9.png'),
(33, 'Talenan Kayu', 18000, 30, 1, 'img/1750357454_1.png'),
(34, 'Panci Kecil', 40000, 15, 1, 'img/1750357464_2.png'),
(35, 'Wajan Anti Lengket', 85000, 10, 1, 'img/1750357472_3.png'),
(36, 'Minyak Kayu Putih', 9000, 20, 1, 'img/1750357490_9.png'),
(37, 'Sabun Mandi Lifebuoy', 4500, 100, 1, 'img/1750357482_4.png'),

-- ===============================
-- Minuman (kategori_id = 3)
-- ===============================
(51, 'Susu Ultra Coklat', 7000, 60, 3, 'img/1750357490_9.png'),
(52, 'Teh Kotak Jasmine', 5000, 40, 3, 'img/1750357482_4.png'),
(53, 'Aqua Botol 600ml', 4000, 100, 3, 'img/1750357514_5.png'),
(54, 'Floridina Jeruk', 5000, 80, 3, 'img/1750357506_6.png'),
(55, 'Mizone Active', 6000, 30, 3, 'img/1750357499_7.png'),
(56, 'Susu Bear Brand', 11000, 40, 3, 'img/1750357523_8.png'),
(57, 'Green Tea Ichitan', 7000, 25, 3, 'img/1750357544_9.png'),
(58, 'Coca Cola 1L', 9000, 20, 3, 'img/1750357454_1.png'),
(59, 'Pocari Sweat Botol', 8500, 30, 3, 'img/1750357464_2.png'),
(60, 'Le Minerale 600ml', 3000, 90, 3, 'img/1750357472_3.png'),
(61, 'Ultrajaya Teh Manis', 5000, 45, 3, 'img/1750357490_9.png'),
(62, 'Susu Indomilk', 6500, 50, 3, 'img/1750357482_4.png'),
(63, 'You C1000 Orange', 8000, 20, 3, 'img/1750357499_7.png'),
(64, 'Fruit Tea Apel', 6000, 35, 3, 'img/1750357506_6.png'),
(65, 'Fanta 1L', 9000, 20, 3, 'img/1750357514_5.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Kebutuhan Dapur'),
(2, 'Makanan'),
(3, 'Minuman'),
(4, 'Alat Tulis');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `pelanggan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `total`, `user_id`, `pelanggan`) VALUES
(2, '2025-06-10 00:48:06', 3500, 1, 'Umum'),
(3, '2025-06-10 01:26:02', 6500, 1, 'Umum'),
(4, '2025-06-10 01:56:09', 8000, 1, 'Umum'),
(5, '2025-06-10 01:58:42', 3000, 1, 'Umum'),
(6, '2025-06-10 02:10:34', 14500, 1, 'Umum'),
(8, '2025-06-16 14:54:51', 3000, 2, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
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
-- Dumping data for table `transaksi_detail`
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
(10, 6, 3, 1, 2500, 2500),
(11, 8, 4, 1, 1000, 1000),
(12, 8, 5, 1, 2000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','kasir','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$NsKqi18KT1TUWJJw1FwQP.9G5qOedFYHFDFmWPL/EQfxPG5kJ4CM6', 'admin'),
(2, 'kasir1', '$2y$10$3IojILPE37icfZynIjMEsOThk0cL5DyqsWs1ZdysxSBYelOU7qYH2', 'user'),
(3, 'tes', '$2y$10$juF47GWMFYjnue4V..1ROuUi38NsQk2rVbu5E3wkPB6yQwocKZY3W', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasir_id` (`user_id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`),
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
