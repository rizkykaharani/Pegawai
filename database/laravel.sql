-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 08:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan_gaji`
--

CREATE TABLE `master_jabatan_gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `transport` int(11) NOT NULL,
  `tunjangan_keluarga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_jabatan_gaji`
--

INSERT INTO `master_jabatan_gaji` (`id`, `gaji_pokok`, `transport`, `tunjangan_keluarga`, `created_at`, `updated_at`, `Jabatan`) VALUES
(1, 10000000, 1000000, 1500000, NULL, NULL, 'SUPERVISOR'),
(2, 5000000, 750000, 1000000, NULL, NULL, 'OFFICER'),
(3, 15000000, 1250000, 2000000, NULL, NULL, 'SUPERINTENDENT'),
(4, 20000000, 1500000, 2500000, NULL, NULL, 'MANAGER');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_02_142725_create_pegawai', 1),
(6, '2021_12_02_143741_add_nip_pegawai', 2),
(7, '2023_03_28_064516_add_to_pegawai', 3),
(8, '2023_03_28_143724_add_relasi_master_jabatan', 4),
(9, '2023_03_28_143931_create_master_jabatan_gaji', 4),
(10, '2023_03_28_144551_add_to_master_jabatan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pernikahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jabatan` bigint(20) UNSIGNED NOT NULL,
  `Jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `tanggal_lahir`, `divisi`, `created_at`, `updated_at`, `nip`, `jenis_kelamin`, `alamat`, `agama`, `no_hp`, `email`, `status_pernikahan`, `total_gaji`, `id_jabatan`, `Jabatan`) VALUES
(9, 'kiki', '1994-01-17', 'IT', '2023-03-28 10:34:04', '2023-03-28 11:44:13', '1709883', 'perempuan', 'Bandung', 'islam', '089696491619', 'hdkh@gmail.com', 'single', '6550000', 2, 'OFFICER'),
(10, 'Iqbal', '1990-06-13', 'MARKETING', '2023-03-28 11:48:44', '2023-03-28 11:48:44', '17098831', 'laki-laki', 'Bandung', 'islam', '089696491618', 'iqbal@gmail.com', 'single', '23200000', 4, 'MANAGER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_jabatan_gaji`
--
ALTER TABLE `master_jabatan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_jabatan_gaji`
--
ALTER TABLE `master_jabatan_gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `master_jabatan_gaji` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
