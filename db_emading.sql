-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 05:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_emading`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(8) NOT NULL,
  `header` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul_artikel` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi_artikel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('publish','draft') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_users` int(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `header`, `judul_artikel`, `isi_artikel`, `status`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 'artikel_02-01-2024_20-07-03.png', 'Pemilihan Skema Pembekalan Sertifikasi Profesi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'publish', 1, '2024-01-02 13:07:15', NULL),
(2, 'artikel_02-01-2024_20-07-53.png', 'Jadwal Pembekalan Sertifikasi Profesi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'publish', 1, '2024-01-02 13:08:13', NULL),
(3, 'artikel_02-01-2024_20-08-47.png', 'Pelaksanaan Pembekalan Sertifikasi Profesi', '<div class=\\\"grid lg:grid-cols-2 gap-x-4 gap-y-4 px-5 lg:px-0 lg:grid-cols-2 pb-7\\\">\r\n<div class=\\\"lg:ml-[-50px]\\\">\r\n<p class=\\\"flex mx-auto text-gray-500 mb-7\\\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n</div>\r\n</div>', 'publish', 1, '2024-01-02 13:08:59', NULL),
(20, 'artikel_02-01-2024_21-01-08.png', 'Pengerjaan Tugas Skema Junior Web Programmer', '<p style=\\\"text-align: center;\\\"><strong>Kasus Pelatihan</strong></p>\r\n<p>Sekolah Tinggi JeWePe membutuhkan media komunikasi untuk&nbsp;dapat memberikan informasi kepada para peserta didiknya dalam&nbsp;bentuk yang tidak terlalu resmi. Berdasarkan kebutuhan tersebut,&nbsp;direncanakan untuk membuat majalah dinding online (e-mading).&nbsp;Mading online ini akan dikelola oleh <em>admin</em> yang dapat dibaca&nbsp;oleh semua peserta didik secara umum. Pihak pembaca saat ini&nbsp;hanya dapat membaca artikel.</p>\r\n<p>&nbsp;</p>\r\n<p>Pihak <em>admin</em> akan dapat melakukan kelola mading dengan&nbsp;melakukan <em>login</em> terlebih dahulu. Pada kelola artikel, <em>admin</em> dapat&nbsp;melakukan <em>input</em>, <em>edit</em> dan hapus artikel.&nbsp;Pada setiap artikel, <em>Admin</em> memiliki pilihan apakah akan&nbsp;mem<em>publish</em> atau masih dalam bentuk <em>draft</em>. Saat menginput&nbsp;artikel, <em>Admin</em> dapat melakukan variasi tulisan dan unggah&nbsp;gambar.</p>', 'publish', 1, '2024-01-02 15:37:28', NULL),
(21, 'artikel_02-01-2024_21-01-43.png', 'Test Informasi Masih Dalam Draft', '<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum molestias iure aspernatur. Nemo quae ipsam illo nam perspiciatis. Accusantium molestiae tenetur quod non, unde voluptate quasi earum perferendis? Velit.-</strong></div>\r\n<div><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum molestias iure aspernatur. Nemo quae ipsam illo nam perspiciatis. Accusantium molestiae tenetur quod non, unde voluptate quasi earum perferendis? Velit.</em></div>', 'draft', 1, '2024-01-03 07:28:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(8) NOT NULL,
  `name` varchar(80) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Brian Viko Nura', 'brianvikonura', 'b43cc3224e9595bbdd1c55515731640e', '2023-12-30 15:17:34', '2023-12-30 15:17:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_iblk1` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
