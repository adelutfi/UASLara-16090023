-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 08:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_06_29_064628_create_pelamars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelamars`
--

CREATE TABLE `pelamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan_sekolah` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keterangan_dokter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'menunggu',
  `deleted_at` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamars`
--

INSERT INTO `pelamars` (`id`, `nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `email`, `no_hp`, `lulusan_sekolah`, `ktp`, `ijazah`, `surat_keterangan_dokter`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1371011709860005', 'sari', '2019-07-03', 'jakarta', 'Perempuan', 'adeluthfinofitasari@yahoo.co.id', '08564292056', 'SMK', 'ktp/HuUjyUhwdFurjISAdljTWKbCd8PTn4uXEnMrb6H3.jpeg', 'ijazah/z9lS29pp3NokiAQbKv0S5Oddhbj8QPdW8nUl9Jqk.jpeg', 'surat_keterangan/brWP3PXb4P4Q7UCvnLp6Dl8bpOT6hyGRTrTVxu0V.jpeg', 'Tidak Diterima', 1, '2019-07-06 01:57:45', '2019-07-06 01:58:32'),
(2, '7974758964797580', 'lutfi', '1996-07-23', 'jakarta', 'Perempuan', 'adelutfinofitasari595@gmail.com', '087830255915', 'SMK', 'ktp/saCISySUiRWwbOVECxM2cy7E7haHLDICU1inNFSH.jpeg', 'ijazah/LyURVl8ntyKi7ILYRLV3j7Tfx5Q6SX3qXF5sSHP7.png', 'surat_keterangan/EqeyGQ6FlPimnlkgRxHtiYiN6m80ZpLA0I8iSMeY.jpeg', 'menunggu', 1, '2019-07-10 04:05:58', '2019-07-10 04:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', '$2y$10$FHA78eAu906UqcE8s7kUXe6SY.BMFsE9Bux3PzKFcxN5hebocYZ.u', NULL, '2019-07-10 03:56:49', '2019-07-10 03:56:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelamars_nik_unique` (`nik`),
  ADD UNIQUE KEY `pelamars_email_unique` (`email`),
  ADD UNIQUE KEY `pelamars_no_hp_unique` (`no_hp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
