-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 12:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerima_beasiswa_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kehadirans`
--

CREATE TABLE `kehadirans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kehadiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kehadirans`
--

INSERT INTO `kehadirans` (`id`, `kehadiran`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Sangat baik', 1, '2023-08-15 09:59:38', '2023-08-15 11:13:56'),
(2, 'Baik', 2, '2023-08-15 10:00:11', '2023-08-15 11:14:01'),
(3, 'Cukup', 3, '2023-08-15 10:00:22', '2023-08-15 11:14:07'),
(4, 'Kurang baik', 4, '2023-08-15 10:00:35', '2023-08-15 11:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `matriks`
--

CREATE TABLE `matriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matriks`
--

INSERT INTO `matriks` (`id`, `siswa_id`, `c1`, `c2`, `c3`, `c4`, `created_at`, `updated_at`) VALUES
(19, 1, 80, 80, 3, 5, '2023-08-23 07:12:46', '2023-08-23 07:12:46'),
(20, 2, 80, 80, 2, 5, '2023-08-23 07:13:01', '2023-08-23 07:35:52'),
(21, 3, 100, 80, 2, 5, '2023-08-23 07:13:26', '2023-08-23 07:30:20'),
(22, 4, 60, 60, 4, 5, '2023-08-23 07:13:43', '2023-08-23 18:19:40'),
(23, 5, 80, 60, 4, 4, '2023-08-23 07:50:09', '2023-08-23 07:50:09'),
(24, 6, 80, 80, 2, 3, '2023-08-23 07:50:39', '2023-08-23 07:54:03'),
(25, 7, 100, 60, 3, 3, '2023-08-23 07:50:56', '2023-08-23 07:54:50'),
(26, 8, 80, 60, 2, 3, '2023-08-23 07:51:14', '2023-08-23 07:53:41'),
(27, 9, 60, 80, 3, 5, '2023-08-23 07:51:34', '2023-08-23 07:51:34'),
(28, 10, 100, 80, 2, 3, '2023-08-23 07:51:49', '2023-08-23 07:51:49'),
(31, 14, 80, 80, 2, 4, '2023-08-30 19:42:21', '2023-08-30 19:42:21'),
(32, 16, 80, 60, 3, 5, '2023-10-02 06:18:50', '2023-10-02 06:19:35'),
(33, 17, 60, 80, 3, 4, '2023-10-02 06:20:06', '2023-10-02 06:20:06'),
(34, 18, 80, 60, 3, 4, '2023-10-02 06:20:55', '2023-10-02 06:20:55'),
(35, 15, 80, 60, 3, 4, '2023-10-02 06:21:52', '2023-10-02 06:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_08_060134_create_nilais_table', 1),
(6, '2023_07_08_061012_create_kehadirans_table', 1),
(7, '2023_07_08_061151_create_perilakus_table', 1),
(8, '2023_07_08_061309_create_prestasi_akademiks_table', 1),
(9, '2023_07_08_062750_create_normalisasis_table', 1),
(10, '2023_07_08_065047_create_matriks_table', 1),
(11, '2023_07_08_065354_create_siswas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nilai_rata_rata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `nilai_rata_rata`, `nilai`, `created_at`, `updated_at`) VALUES
(1, '90 - 100', 100, '2023-08-15 09:56:43', '2023-08-15 09:56:43'),
(2, '80 -  89', 80, '2023-08-15 09:57:05', '2023-08-15 09:57:05'),
(3, '70 - 79', 60, '2023-08-15 09:57:24', '2023-08-15 09:57:24'),
(4, '< 69', 1, '2023-08-15 09:57:52', '2023-08-15 09:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasis`
--

CREATE TABLE `normalisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matrik_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` decimal(8,2) NOT NULL,
  `c2` decimal(8,2) NOT NULL,
  `c3` decimal(8,2) NOT NULL,
  `c4` decimal(8,2) NOT NULL,
  `hasil` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `normalisasis`
--

INSERT INTO `normalisasis` (`id`, `matrik_id`, `nama`, `c1`, `c2`, `c3`, `c4`, `hasil`, `created_at`, `updated_at`) VALUES
(314, 19, 'Muh Dede Fauzan', '0.32', '0.30', '0.13', '0.06', '0.81', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(315, 20, 'Rahmawati', '0.32', '0.30', '0.20', '0.06', '0.88', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(316, 21, 'Muh Nasir', '0.40', '0.30', '0.20', '0.06', '0.96', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(317, 22, 'Hamsia', '0.24', '0.23', '0.10', '0.06', '0.63', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(318, 23, 'Awaluddin', '0.32', '0.23', '0.10', '0.08', '0.72', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(319, 24, 'Amiluddin', '0.32', '0.30', '0.20', '0.10', '0.92', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(320, 25, 'Muh  Hidayat', '0.40', '0.23', '0.13', '0.10', '0.86', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(321, 26, 'Rahmi', '0.32', '0.23', '0.20', '0.10', '0.85', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(322, 27, 'Hasrullah', '0.24', '0.30', '0.13', '0.06', '0.73', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(323, 28, 'Fitra Samzani', '0.40', '0.30', '0.20', '0.10', '1.00', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(324, 31, 'andi', '0.32', '0.30', '0.20', '0.08', '0.90', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(325, 32, 'Alfina Damayanti', '0.32', '0.23', '0.13', '0.06', '0.74', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(326, 33, 'Agung Syam', '0.24', '0.30', '0.13', '0.08', '0.75', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(327, 34, 'Ahmad', '0.32', '0.23', '0.13', '0.08', '0.75', '2023-10-02 06:22:02', '2023-10-02 06:22:02'),
(328, 35, 'Agus', '0.32', '0.23', '0.13', '0.08', '0.75', '2023-10-02 06:22:02', '2023-10-02 06:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perilakus`
--

CREATE TABLE `perilakus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perilaku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perilakus`
--

INSERT INTO `perilakus` (`id`, `perilaku`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Sangat baik', 100, '2023-08-15 09:58:22', '2023-08-15 09:58:22'),
(2, 'Baik', 80, '2023-08-15 09:58:34', '2023-08-15 09:58:34'),
(3, 'Cukup', 60, '2023-08-15 09:58:47', '2023-08-15 09:58:47'),
(4, 'Tidak baik', 1, '2023-08-15 09:58:58', '2023-08-15 09:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_akademiks`
--

CREATE TABLE `prestasi_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasi_akademiks`
--

INSERT INTO `prestasi_akademiks` (`id`, `prestasi`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Berprestasi tingkat Internasional', 1, '2023-08-15 10:01:01', '2023-08-15 10:01:01'),
(2, 'Berprestasi tingkat nasional', 2, '2023-08-15 10:01:15', '2023-08-15 10:01:15'),
(3, 'Berprestasi tingkat provensi', 3, '2023-08-15 10:01:26', '2023-08-15 10:01:26'),
(4, 'Berprestasi tingkat kabupaten', 4, '2023-08-15 10:01:37', '2023-08-15 10:01:37'),
(5, 'Berprestasi tingkat sekolah', 5, '2023-08-15 10:01:50', '2023-08-15 10:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nama`, `nis`, `alamat`, `ttl`, `email`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 'Muh Dede Fauzan', '192001', 'Aeng Batu - Batu', '2016-05-03', 'dedefauzan09@gmail.com', '085376876321', '2023-08-15 10:04:33', '2023-08-15 10:04:33'),
(2, 'Rahmawati', '192002', 'Galesong Selatan', '2016-07-18', 'rahmawati99@gmail.com', '085543876879', '2023-08-15 10:05:56', '2023-08-15 10:05:56'),
(3, 'Muh Nasir', '192003', 'Bontoa', '2016-06-11', 'nasiiiirr@gmail.com', '085343232458', '2023-08-15 10:07:09', '2023-08-15 10:07:09'),
(4, 'Hamsia', '192004', 'Galesong Selatan', '2016-10-14', 'hamsia23@gmail.co.id', '082453678921', '2023-08-15 10:08:01', '2023-08-15 10:56:56'),
(5, 'Awaluddin', '192005', 'Manari', '2016-12-26', 'awaluddin@gmail.co.id', '085363231492', '2023-08-15 10:54:15', '2023-08-15 10:54:15'),
(6, 'Amiluddin', '192006', 'Taroang', '2016-01-12', 'amiluddin12@gmail.co.id', '085383309756', '2023-08-15 10:55:09', '2023-08-15 10:59:08'),
(7, 'Muh  Hidayat', '192007', 'Tama\'la\'lang', '2016-07-24', 'dayat65@gmail.co.id', '082353809451', '2023-08-15 10:56:39', '2023-08-15 10:58:30'),
(8, 'Rahmi', '192008', 'Bontoa', '2016-08-06', 'rahmi231@gmail.co.id', '082381309443', '2023-08-15 10:57:38', '2023-08-15 10:58:12'),
(9, 'Hasrullah', '192009', 'bontokanang', '2016-09-20', 'hasrullah@gmail.com', '081343282418', '2023-08-15 11:00:20', '2023-10-02 06:56:13'),
(10, 'Fitra Samzani', '1920010', 'Btn Niaga', '2016-12-26', 'fitraa675@gmail.com', '082343932175', '2023-08-15 11:02:09', '2023-08-15 11:02:09'),
(14, 'Riswandi', '1920011', 'Tama\'la\'lang', '2016-12-15', 'andiakmal1@gmail.com', '085343232432', '2023-08-30 19:34:53', '2023-10-02 06:59:53'),
(15, 'Agus', '1920012', 'Tama\'la\'lang', '2016-06-23', 'agus@gmail.com', '085343232432', '2023-08-30 19:47:13', '2023-10-02 06:14:25'),
(16, 'Alfina Damayanti', '1920013', 'Kalampa', '2016-01-10', 'alfina08@gmail.com', '085523341453', '2023-10-02 06:15:53', '2023-10-02 06:15:53'),
(17, 'Agung Syam', '1920014', 'Sawakong', '2016-03-21', 'agung75@gmail.com', '085346937529', '2023-10-02 06:17:04', '2023-10-02 06:17:04'),
(18, 'Ahmad', '1920015', 'Bobojangang', '2016-08-25', 'liwang752@gmail.com', '082649656436', '2023-10-02 06:18:00', '2023-10-02 06:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `no_handphone`, `email`, `password`, `admin`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riswandi', 'Galesong Selatan', '085393855091', 'riswandiandi017@gmail.com', '$2y$10$1be7O8o0cwMU9.7bTuvZl.eXjPyxgj9SZ04zfYJmlqFRJhzPaF.Fe', 1, NULL, NULL, '2023-08-15 09:55:07', '2023-08-15 09:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kehadirans`
--
ALTER TABLE `kehadirans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matriks`
--
ALTER TABLE `matriks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasis`
--
ALTER TABLE `normalisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `perilakus`
--
ALTER TABLE `perilakus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasi_akademiks`
--
ALTER TABLE `prestasi_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nis_unique` (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehadirans`
--
ALTER TABLE `kehadirans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matriks`
--
ALTER TABLE `matriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `normalisasis`
--
ALTER TABLE `normalisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `perilakus`
--
ALTER TABLE `perilakus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi_akademiks`
--
ALTER TABLE `prestasi_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
