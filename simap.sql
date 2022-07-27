-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2022 pada 14.07
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_id` bigint(20) UNSIGNED NOT NULL,
  `matkul_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('m','a','i','s') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', NULL, '$2y$10$58HMkuydeEVSUnGqxoFo8uZ1EzylO5x0GD39f3Eimm6xkltim4BEO', NULL, '2022-07-26 23:02:36', '2022-07-26 23:02:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_reg` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `nama` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('p','l') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_martial` tinyint(1) NOT NULL DEFAULT 0,
  `kewarganegaraan` enum('wna','wni') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tinggal` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah` enum('smk','sma') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_sekolah` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `no_ijazah` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_orangtua` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_orangtua` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_orangtua` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_orangtua` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_orangtua` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_orangtua` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `no_reg`, `status`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_martial`, `kewarganegaraan`, `agama`, `tempat_tinggal`, `no_hp`, `email`, `sekolah`, `nama_sekolah`, `jurusan_sekolah`, `alamat_sekolah`, `tahun_lulus`, `no_ijazah`, `nama_orangtua`, `no_hp_orangtua`, `email_orangtua`, `pekerjaan_orangtua`, `instansi_orangtua`, `pendidikan_orangtua`, `created_at`, `updated_at`) VALUES
(1, 'REG22031000003', NULL, 'muhamad santoso', 'l', 'bogor', '2004-05-20', 0, 'wni', 'islam', 'bogor', '085893712445', 'santoso@email.com', 'smk', 'smk wikrama', 'rpl', 'bogor', 2022, '123456789012349', 'ayah', NULL, NULL, 'buruh', NULL, NULL, '2022-07-26 23:02:37', '2022-07-26 23:02:37'),
(2, 'REG22031000004', 0, 'aryanto', 'l', 'bogor', '2004-05-20', 0, 'wni', 'islam', 'bogor', '085893712440', 'aryanto@email.com', 'smk', 'smk wikrama', 'rpl', 'bogor', 2022, '123456789012340', 'ayah', NULL, NULL, 'buruh', NULL, NULL, '2022-07-26 23:02:37', '2022-07-26 23:02:37'),
(3, 'REG22031000001', 1, 'muhamad ilham saputra', 'l', 'bogor', '2004-05-20', 0, 'wni', 'islam', 'bogor', '085893712441', 'muhamadilhamsptra@gmail.com', 'smk', 'smk wikrama', 'rpl', 'bogor', 2022, '123456789012345', 'ayah', NULL, NULL, 'buruh', NULL, NULL, '2022-07-26 23:02:38', '2022-07-26 23:02:38'),
(4, 'REG22031000002', 1, 'muhamad hanif', 'l', 'bogor', '2003-11-12', 0, 'wni', 'islam', 'bogor', '085893712442', 'muahamdhanif@gmail.com', 'smk', 'smk wikrama', 'rpl', 'bogor', 2022, '123456789012344', 'ayah', NULL, NULL, 'karyawan', NULL, NULL, '2022-07-26 23:02:38', '2022-07-26 23:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123456789012', 'dosen', 'dosen@email.com', NULL, '$2y$10$WeGIwJPXYsreWfQUjjoUEeuzs0ke116wtDntB9OWYWWsvVz2vigw.', NULL, '2022-07-26 23:02:37', '2022-07-26 23:02:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matkul_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `ujian` tinyint(1) NOT NULL,
  `waktu_masuk` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_keluar` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `matkul_id`, `tanggal`, `ujian`, `waktu_masuk`, `waktu_keluar`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-06-12', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(2, 1, '2022-06-13', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(3, 1, '2022-06-16', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(4, 1, '2022-06-18', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(5, 1, '2022-06-20', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(6, 1, '2022-06-24', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(7, 1, '2022-06-26', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(8, 1, '2022-06-30', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(9, 1, '2022-07-02', 0, '2', '9', '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(10, 1, '2022-07-04', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45'),
(11, 1, '2022-07-06', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45'),
(12, 1, '2022-07-08', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45'),
(13, 1, '2022-07-10', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45'),
(14, 1, '2022-07-12', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45'),
(15, 1, '2022-07-14', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45'),
(16, 1, '2022-07-16', 0, '2', '9', '2022-07-26 23:02:45', '2022-07-26 23:02:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'D3 Keuangan Perbankan', 'e', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(2, 'D3 Akutansi', 'e', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(3, 'S1 Akutansi', 'e', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(4, 'S1 Manajemen', 'e', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(5, 'D3 Manajemen Perpajakan', 'e', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(6, 'S1 Teknik Informatika', 'i', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(7, 'D3 Komputerisasi Akutansi', 'i', '2022-07-26 23:02:39', '2022-07-26 23:02:39'),
(8, 'D3 Manajemen Informatika', 'i', '2022-07-26 23:02:39', '2022-07-26 23:02:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matkul_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `semester` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` bigint(20) UNSIGNED NOT NULL,
  `nim` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `data_id`, `nim`, `semester`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, '2205200001', '1', 'muhamad ilham saputra', 'muhamadilhamsptra@gmail.com', NULL, '$2y$10$pegkK4XuDP2LJIaNudCLC.YXDSjqplXlyVDPzzjPYa/2V8RsdSRs2', NULL, '2022-07-26 23:02:38', '2022-07-26 23:02:38'),
(2, 2, '2205200002', '1', 'muhamad hanif', 'mhamadhanif@gmail.com', NULL, '$2y$10$Q/3C80hrP5eS1Kk0/z3r3O8mNlADf.mr477pp7c2UIq//F/ChR46C', NULL, '2022-07-26 23:02:38', '2022-07-26 23:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sks` int(11) NOT NULL,
  `dosen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `nama`, `semester`, `jumlah_sks`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'Logika Matematika', '1', 3, 1, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(2, 'Statistika', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(3, 'Dasar Multimedia', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(4, 'Sistem Informasi', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(5, 'Technopreneurship', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(6, 'Algoritma dan Pemrograman', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(7, 'Praktikum Algoritma dan Pemrograman', '1', 1, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(8, 'Pengantar Teknologi Informasi', '1', 2, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(9, 'Kalkulus 1', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(10, 'Praktikum Aplikasi Komputer', '1', 2, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(11, 'Bahasa Indonesia', '1', 3, NULL, '2022-07-26 23:02:40', '2022-07-26 23:02:40'),
(12, 'Pendidikan Agama', '1', 2, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(13, 'Komputasi Numerik 1', '2', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(14, 'Praktikum Komputasi Numerik', '2', 1, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(15, 'Jaringan Komputer', '2', 2, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(16, 'Praktikum Jaringan Komputer', '2', 2, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(17, 'Struktur Data', '2', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(18, 'Praktikum Struktur Data', '2', 1, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(19, 'Sistem Digital', '2', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(20, 'Matematika Diskret', '2', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(21, 'Kalkulus2', '2', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(22, 'Pendidikan Pancasila dan Kewarganegaraan', '2', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(23, 'Komputasi Numerik 2', '3', 2, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(24, 'Inteligensi Buatan', '3', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(25, 'Praktikum Intelegensi Buatan', '3', 1, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(26, 'Praktikum Sistem Digital', '3', 2, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(27, 'Pengantar Sistem Mobile dan Nirkabel', '3', 2, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(28, 'Interaksi Manusia dan Komputer', '3', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(29, 'Arsitektur Komputer', '3', 3, NULL, '2022-07-26 23:02:41', '2022-07-26 23:02:41'),
(30, 'Pemrograman Web', '3', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(31, 'Pemrograman Berorientasi Objek', '4', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(32, 'Praktikum Pemrograman Berorientasi Objek', '4', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(33, 'Basis Data', '4', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(34, 'Praktikum Basis Data', '4', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(35, 'Rekayasa Perangkat Lunak', '4', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(36, 'Pemrograman Visual', '4', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(37, 'Pemrograman Basis Data', '5', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(38, 'Praktikum Aplikasi Mobile', '5', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(39, 'Projek Pembangunan PL Profesional', '5', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(40, 'Sistem Operasi', '5', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(41, 'Matakuliah Pilihan 1 (dari konsentrasi bebas)', '5', 3, NULL, '2022-07-26 23:02:42', '2022-07-26 23:02:42'),
(42, 'Matakuliah Pilihan 2 (dari konsentrasi bebas)', '5', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(43, 'Perangkat Lunak Enterprise', '6', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(44, 'Ekonomi Informatika', '6', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(45, 'Grafika Komputer', '6', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(46, 'Matakuliah Konsentrasi 1', '6', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(47, 'Matakuliah Konsentrasi 2', '6', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(48, 'Bahasa Inggris', '6', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(49, 'Kerja Praktek /Magang', '7', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(50, 'Metodologi Penelitian dan Publikasi Ilmiah', '7', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(51, 'Matakuliah Konsentrasi 3', '7', 3, NULL, '2022-07-26 23:02:43', '2022-07-26 23:02:43'),
(52, 'Matakuliah Pilihan 3 (dari konsentrasinya)', '7', 3, NULL, '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(53, 'Matakuliah Pilihan 4 (dari konsentrasinya)', '7', 3, NULL, '2022-07-26 23:02:44', '2022-07-26 23:02:44'),
(54, 'Kuliah Kerja Nyata/KKN Informatika', '7', 3, NULL, '2022-07-26 23:02:44', '2022-07-26 23:02:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_admin_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_10_020316_create_dosen_table', 1),
(6, '2022_06_10_020523_create_data_mahasiswa_table', 1),
(7, '2022_06_10_020900_create_mahasiswa_table', 1),
(8, '2022_06_14_111805_create_jurusan_table', 1),
(9, '2022_06_14_120638_create_matkul_table', 1),
(10, '2022_06_14_122532_create_jadwal_table', 1),
(11, '2022_06_14_122627_create_tugas_table', 1),
(12, '2022_06_14_122823_create_krs_table', 1),
(13, '2022_06_16_021452_create_absensi_table', 1),
(14, '2022_06_16_024801_create_nilai_table', 1),
(15, '2022_06_16_174836_create_pengumpulan_tugas_table', 1),
(16, '2022_06_19_020045_create_jawaban_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matkul_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumpulan_tugas`
--

CREATE TABLE `pengumpulan_tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tugas_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matkul_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_jadwal_id_foreign` (`jadwal_id`),
  ADD KEY `absensi_matkul_id_foreign` (`matkul_id`),
  ADD KEY `absensi_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_mahasiswa_no_hp_unique` (`no_hp`),
  ADD UNIQUE KEY `data_mahasiswa_email_unique` (`email`),
  ADD UNIQUE KEY `data_mahasiswa_no_ijazah_unique` (`no_ijazah`),
  ADD UNIQUE KEY `data_mahasiswa_no_hp_orangtua_unique` (`no_hp_orangtua`),
  ADD UNIQUE KEY `data_mahasiswa_email_orangtua_unique` (`email_orangtua`),
  ADD KEY `data_mahasiswa_no_reg_index` (`no_reg`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip_unique` (`nip`),
  ADD UNIQUE KEY `dosen_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_matkul_id_foreign` (`matkul_id`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `krs_matkul_id_foreign` (`matkul_id`),
  ADD KEY `krs_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`),
  ADD KEY `mahasiswa_data_id_foreign` (`data_id`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matkul_dosen_id_foreign` (`dosen_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_matkul_id_foreign` (`matkul_id`),
  ADD KEY `nilai_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengumpulan_tugas_tugas_id_foreign` (`tugas_id`),
  ADD KEY `pengumpulan_tugas_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_matkul_id_foreign` (`matkul_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_jadwal_id_foreign` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`id`),
  ADD CONSTRAINT `absensi_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `absensi_matkul_id_foreign` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_matkul_id_foreign` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`);

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `krs_matkul_id_foreign` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_data_id_foreign` FOREIGN KEY (`data_id`) REFERENCES `data_mahasiswa` (`id`);

--
-- Ketidakleluasaan untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `matkul_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `nilai_matkul_id_foreign` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengumpulan_tugas`
--
ALTER TABLE `pengumpulan_tugas`
  ADD CONSTRAINT `pengumpulan_tugas_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `pengumpulan_tugas_tugas_id_foreign` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`);

--
-- Ketidakleluasaan untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_matkul_id_foreign` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
