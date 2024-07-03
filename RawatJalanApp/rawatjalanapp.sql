-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Bulan Mei 2024 pada 06.50
-- Versi server: 8.0.30
-- Versi PHP: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawatjalanapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admisis`
--

CREATE TABLE `admisis` (
  `idAdmisi` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jamKerja` time NOT NULL,
  `noHp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `apoteker`
--

CREATE TABLE `apoteker` (
  `idApoteker` int UNSIGNED NOT NULL,
  `namaApoteker` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `apoteker`
--

INSERT INTO `apoteker` (`idApoteker`, `namaApoteker`, `jekel`, `email`, `noHp`, `created_at`, `updated_at`) VALUES
(1, 'Nadila Wirdianti', 'P', 'nadilawirdianti@gmail.com', '08223454324573', '2024-05-07 06:01:49', '2024-05-07 06:06:33'),
(3, 'Annisa Rahma', 'P', 'nisa@gmail.com', '089543216755', '2024-05-07 06:14:53', '2024-05-07 06:17:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosas`
--

CREATE TABLE `diagnosas` (
  `idDiagnosa` int UNSIGNED NOT NULL,
  `noRekapMedis` int UNSIGNED NOT NULL,
  `idDokter` int UNSIGNED NOT NULL,
  `idPoliKlinik` int UNSIGNED NOT NULL,
  `tanggalKunjungan` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagnosas`
--

INSERT INTO `diagnosas` (`idDiagnosa`, `noRekapMedis`, `idDokter`, `idPoliKlinik`, `tanggalKunjungan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '2003-01-17', 'kurangnya makan-makanan yang bergizi, perbanyak makan yang kaya akan vitamin', '2024-04-25 21:15:16', '2024-04-25 21:15:16'),
(2, 3, 1, 4, '2024-05-10', 'saraf terjepit', '2024-05-07 01:13:28', '2024-05-07 01:19:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokters`
--

CREATE TABLE `dokters` (
  `idDokter` int UNSIGNED NOT NULL,
  `namaDokter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokters`
--

INSERT INTO `dokters` (`idDokter`, `namaDokter`, `email`, `noHp`, `spesialis`, `created_at`, `updated_at`) VALUES
(1, 'Azwir', 'azwir@gmail.com', '082134562134', 'Spesialis Saraf', '2024-04-24 06:25:54', '2024-04-24 06:25:54'),
(2, 'Desma Yenti', 'des@gmail.com', '082134256321', 'Spesialis Penyakit Dalam', '2024-04-24 06:26:30', '2024-04-24 06:26:30'),
(3, 'Fadli surya Pradana', 'fadliSurya@gmail.com', '081234564329', 'THT', '2024-05-06 19:59:07', '2024-05-06 20:11:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `idJadwal` int UNSIGNED NOT NULL,
  `idDokter` int UNSIGNED NOT NULL,
  `idPoliKlinik` int UNSIGNED NOT NULL,
  `jekel` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jamMulai` time NOT NULL,
  `jamSelesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`idJadwal`, `idDokter`, `idPoliKlinik`, `jekel`, `jamMulai`, `jamSelesai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'L', '08:30:00', '12:00:00', '2024-04-25 21:15:43', '2024-04-25 21:15:43'),
(2, 2, 2, 'P', '04:00:00', '20:00:00', '2024-04-25 21:16:06', '2024-04-25 21:16:06'),
(3, 3, 5, 'L', '14:00:00', '18:30:00', '2024-05-07 01:53:32', '2024-05-07 01:53:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_03_25_131825_create_pasiens_table', 1),
(7, '2024_03_25_133107_create_dokters_table', 1),
(8, '2024_03_25_133208_create_poli_kliniks_table', 1),
(9, '2024_03_25_133257_create_diagnosas_table', 1),
(10, '2024_03_25_133331_create_jadwals_table', 1),
(11, '2024_03_25_133406_create_admisis_table', 1),
(12, '2024_03_25_133438_create_obats_table', 1),
(13, '2024_03_25_133511_create_pembayarans_table', 1),
(14, '2024_03_25_133552_create_pendaftaran_onlines_table', 1),
(15, '2024_03_25_133718_create_reseps_table', 1),
(16, '2024_03_25_133751_create_rekap_medis_table', 1),
(17, '2024_05_01_104700_create_permission_tables', 2),
(18, '2024_05_07_122358_create_apotekers_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obats`
--

CREATE TABLE `obats` (
  `idObat` int UNSIGNED NOT NULL,
  `namaObat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(7,2) NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obats`
--

INSERT INTO `obats` (`idObat`, `namaObat`, `harga`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'paracitamol', 5000.00, 'obat demam', '2024-04-24 06:28:43', '2024-04-24 06:28:43'),
(2, 'CTM', 7000.00, 'Anti Elergi Klasik', '2024-04-24 06:29:39', '2024-04-24 06:29:39'),
(3, 'Ranatidine 150mg', 5000.00, 'AntiNyeri', '2024-04-24 06:30:02', '2024-04-24 06:30:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiens`
--

CREATE TABLE `pasiens` (
  `noRekapMedis` int UNSIGNED NOT NULL,
  `namaPengguna` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noKTP` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatLahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalLahir` date NOT NULL,
  `noBPJS` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasiens`
--

INSERT INTO `pasiens` (`noRekapMedis`, `namaPengguna`, `noKTP`, `jekel`, `tempatLahir`, `tanggalLahir`, `noBPJS`, `noHp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Messy Wirdianti', '137402560100021', 'P', 'PADANG PANJANG', '2003-01-17', '00011131', '0895320296527', 'mesiwirdianti@gmail.com', 'jln.Rohana Kudus Perumahan Manggis Residence', '2024-04-24 06:22:59', '2024-04-24 06:22:59'),
(2, 'Novriadi Irwansyah', '1374020311010001', 'L', 'Alahan Panjang', '2001-11-03', '00019872', '082170395745', 'irwansyah@gmail.com', 'Sungai Nanam Alahan Panjang', '2024-04-24 06:24:34', '2024-04-24 06:24:34'),
(3, 'Atha', '1374021010212001', 'L', 'Padang Panjang', '2021-04-24', '00021241', '087645321234', 'Atha@gmail.com', 'padang panjang', '2024-05-06 18:20:14', '2024-05-06 18:20:14'),
(6, 'Athaalah', '1374021010212001', 'L', 'Padang Panjang', '2021-04-24', '00021241', '087645321234', 'Atha@gmail.com', 'padang panjang barat', '2024-05-06 18:39:30', '2024-05-06 19:22:05'),
(7, 'Hana', '1374025603032001', 'P', 'Payakumbuah', '2003-03-19', '00021234', '087645323567', 'Hana@gmail.com', 'jln. congkong kota Payakumbuah', '2024-05-06 18:44:36', '2024-05-06 18:44:36'),
(8, 'Hana Putri', '1374025603032001', 'P', 'Payakumbuah', '2003-03-19', '00021234', '087645323567', 'Hana@gmail.com', 'jln. congkong kota Payakumbuah', '2024-05-06 18:53:53', '2024-05-06 18:53:53');

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
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `idPembayaran` int UNSIGNED NOT NULL,
  `noRekapMedis` int UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idDaftar` int UNSIGNED NOT NULL,
  `noRekapMedis` int UNSIGNED NOT NULL,
  `namaLengkap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatLahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jekel` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalKunjungan` date NOT NULL,
  `asalRujukan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poliTujuan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokter` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`idDaftar`, `noRekapMedis`, `namaLengkap`, `tempatLahir`, `tanggalLahir`, `jekel`, `tanggalKunjungan`, `asalRujukan`, `poliTujuan`, `dokter`, `pekerjaan`, `noHp`, `agama`, `kewarganegaraan`, `created_at`, `updated_at`) VALUES
(1, 7, 'Hana', 'Payakumbuah', '2003-03-19', 'P', '2024-05-07', 'Puskesmas', 'Poli Gigi', 'fadli surya pradana', 'mahasiswa', '087645323567', 'islam', 'WNI', '2024-05-07 02:12:03', '2024-05-07 02:12:03'),
(2, 3, 'Athaaa', 'Padang Panjang', '2021-04-24', 'L', '2024-05-10', 'Klinik Gunung', 'poli saraf', 'azwir', '-', '087645323567', 'islam', 'WNI', '2024-05-07 02:14:19', '2024-05-07 02:42:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', '2024-05-01 04:40:57', '2024-05-01 04:40:57'),
(2, 'view_pasien', 'web', '2024-05-01 21:48:59', '2024-05-01 21:48:59'),
(3, 'apotik', 'web', '2024-05-02 07:38:28', '2024-05-02 07:38:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_kliniks`
--

CREATE TABLE `poli_kliniks` (
  `idPoliKlinik` int UNSIGNED NOT NULL,
  `namaPoliKlinik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `poli_kliniks`
--

INSERT INTO `poli_kliniks` (`idPoliKlinik`, `namaPoliKlinik`, `created_at`, `updated_at`) VALUES
(1, 'Poli Spesialis Jantung', '2024-04-24 06:27:36', '2024-04-24 06:27:36'),
(2, 'Poli Umum', '2024-04-24 06:27:43', '2024-04-24 06:27:43'),
(3, 'Poli Gigi', '2024-04-24 06:28:03', '2024-04-24 06:28:03'),
(4, 'PoliKlinik Saraf', '2024-04-24 06:28:12', '2024-05-06 20:45:25'),
(5, 'PoliKlinik Mata', '2024-05-06 20:39:21', '2024-05-06 20:39:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_medis`
--

CREATE TABLE `rekap_medis` (
  `idRekapMedis` int UNSIGNED NOT NULL,
  `noRekapMedis` int UNSIGNED NOT NULL,
  `idDokter` int UNSIGNED NOT NULL,
  `tanggalKunjungan` date NOT NULL,
  `keluhan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tekananDarah` int NOT NULL,
  `suhuTubuh` int NOT NULL,
  `beratBadan` int NOT NULL,
  `tinggiBadan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekap_medis`
--

INSERT INTO `rekap_medis` (`idRekapMedis`, `noRekapMedis`, `idDokter`, `tanggalKunjungan`, `keluhan`, `diagnosa`, `tekananDarah`, `suhuTubuh`, `beratBadan`, `tinggiBadan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2024-05-07', 'radang tenggorokan, demam, flu, batuk', 'amandel meradang, demam', 110, 39, 65, 165, '2024-05-07 03:27:39', '2024-05-07 03:27:39'),
(2, 6, 1, '2024-05-02', 'nyesi pada punggung belakang', 'saraf terjepit', 100, 37, 50, 130, '2024-05-07 03:28:37', '2024-05-07 03:28:37'),
(3, 2, 3, '2024-05-08', 'sakit di bagian telinga dalam dan berbunyi', 'infeksi telinga', 120, 37, 65, 165, '2024-05-07 03:38:33', '2024-05-07 03:43:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reseps`
--

CREATE TABLE `reseps` (
  `idResep` int UNSIGNED NOT NULL,
  `noRekapMedis` int UNSIGNED NOT NULL,
  `idDokter` int UNSIGNED NOT NULL,
  `idObat` int UNSIGNED NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reseps`
--

INSERT INTO `reseps` (`idResep`, `noRekapMedis`, `idDokter`, `idObat`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 1, 'ditetaskan 1x4 jam', '2024-05-07 03:52:45', '2024-05-07 03:52:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-05-01 04:09:23', '2024-05-01 04:09:23'),
(2, 'dokter', 'web', '2024-05-01 04:09:23', '2024-05-01 04:09:23'),
(3, 'apoteker', 'web', '2024-05-01 04:23:37', '2024-05-01 04:23:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(2, 2),
(3, 2),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'messy wirdianti', 'g@gmail.com', NULL, '$2y$12$5qJDqXZFdUfTl7GnG5GZ6./UC2VMVsyXJtOz.RStbld4rZwRUeAzC', NULL, '2024-04-23 22:17:07', '2024-04-23 22:17:07'),
(2, 'dokter', 'dokter@gmail.com', NULL, '$2y$12$69ONSB8AyHe5DofG2.Ys9O0U2xChVKIM.Y8TgPqJXs/QCdCrRTrmW', NULL, '2024-05-01 23:38:19', '2024-05-01 23:38:19'),
(3, 'apoteker1', 'apoteker@gmail.com', NULL, '$2y$12$MGvRKcrHhPB1Oo903O6dbu9WeZrM2UnF9VjpQgZ190bXik5rw4NV6', NULL, '2024-05-02 04:07:43', '2024-05-02 04:07:43'),
(7, 'dokter1', 'dokter1@gmail.com', NULL, '$2y$12$92GGyvwkeDeqCL6CM4olnOTPE2EE7UlOAPDz/4ieBKr.i0ko9taJi', NULL, '2024-05-02 04:17:03', '2024-05-02 04:17:03'),
(8, 'apoteker1', 'apoteker1@gmail.com', NULL, '$2y$12$8FT6d/ccvQWpsKy9FfuSiuHCu0IycoARH3xWSb8AZstTrzGIH.gRu', NULL, '2024-05-02 04:17:25', '2024-05-02 04:17:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admisis`
--
ALTER TABLE `admisis`
  ADD PRIMARY KEY (`idAdmisi`);

--
-- Indeks untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`idApoteker`);

--
-- Indeks untuk tabel `diagnosas`
--
ALTER TABLE `diagnosas`
  ADD PRIMARY KEY (`idDiagnosa`),
  ADD KEY `diagnosas_norekapmedis_foreign` (`noRekapMedis`),
  ADD KEY `diagnosas_iddokter_foreign` (`idDokter`),
  ADD KEY `diagnosas_idpoliklinik_foreign` (`idPoliKlinik`);

--
-- Indeks untuk tabel `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`idJadwal`),
  ADD KEY `jadwals_iddokter_foreign` (`idDokter`),
  ADD KEY `jadwals_idpoliklinik_foreign` (`idPoliKlinik`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`idObat`);

--
-- Indeks untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`noRekapMedis`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`idPembayaran`),
  ADD KEY `pembayarans_norekapmedis_foreign` (`noRekapMedis`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idDaftar`),
  ADD KEY `pendaftaran_norekapmedis_foreign` (`noRekapMedis`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `poli_kliniks`
--
ALTER TABLE `poli_kliniks`
  ADD PRIMARY KEY (`idPoliKlinik`);

--
-- Indeks untuk tabel `rekap_medis`
--
ALTER TABLE `rekap_medis`
  ADD PRIMARY KEY (`idRekapMedis`),
  ADD KEY `rekap_medis_norekapmedis_foreign` (`noRekapMedis`),
  ADD KEY `rekap_medis_iddokter_foreign` (`idDokter`);

--
-- Indeks untuk tabel `reseps`
--
ALTER TABLE `reseps`
  ADD PRIMARY KEY (`idResep`),
  ADD KEY `reseps_norekapmedis_foreign` (`noRekapMedis`),
  ADD KEY `reseps_iddokter_foreign` (`idDokter`),
  ADD KEY `reseps_idobat_foreign` (`idObat`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admisis`
--
ALTER TABLE `admisis`
  MODIFY `idAdmisi` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  MODIFY `idApoteker` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `diagnosas`
--
ALTER TABLE `diagnosas`
  MODIFY `idDiagnosa` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dokters`
--
ALTER TABLE `dokters`
  MODIFY `idDokter` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `idJadwal` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `obats`
--
ALTER TABLE `obats`
  MODIFY `idObat` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `noRekapMedis` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `idPembayaran` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idDaftar` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `poli_kliniks`
--
ALTER TABLE `poli_kliniks`
  MODIFY `idPoliKlinik` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rekap_medis`
--
ALTER TABLE `rekap_medis`
  MODIFY `idRekapMedis` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `reseps`
--
ALTER TABLE `reseps`
  MODIFY `idResep` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnosas`
--
ALTER TABLE `diagnosas`
  ADD CONSTRAINT `diagnosas_iddokter_foreign` FOREIGN KEY (`idDokter`) REFERENCES `dokters` (`idDokter`),
  ADD CONSTRAINT `diagnosas_idpoliklinik_foreign` FOREIGN KEY (`idPoliKlinik`) REFERENCES `poli_kliniks` (`idPoliKlinik`),
  ADD CONSTRAINT `diagnosas_norekapmedis_foreign` FOREIGN KEY (`noRekapMedis`) REFERENCES `pasiens` (`noRekapMedis`);

--
-- Ketidakleluasaan untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_iddokter_foreign` FOREIGN KEY (`idDokter`) REFERENCES `dokters` (`idDokter`),
  ADD CONSTRAINT `jadwals_idpoliklinik_foreign` FOREIGN KEY (`idPoliKlinik`) REFERENCES `poli_kliniks` (`idPoliKlinik`);

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD CONSTRAINT `pembayarans_norekapmedis_foreign` FOREIGN KEY (`noRekapMedis`) REFERENCES `pasiens` (`noRekapMedis`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_norekapmedis_foreign` FOREIGN KEY (`noRekapMedis`) REFERENCES `pasiens` (`noRekapMedis`);

--
-- Ketidakleluasaan untuk tabel `rekap_medis`
--
ALTER TABLE `rekap_medis`
  ADD CONSTRAINT `rekap_medis_iddokter_foreign` FOREIGN KEY (`idDokter`) REFERENCES `dokters` (`idDokter`),
  ADD CONSTRAINT `rekap_medis_norekapmedis_foreign` FOREIGN KEY (`noRekapMedis`) REFERENCES `pasiens` (`noRekapMedis`);

--
-- Ketidakleluasaan untuk tabel `reseps`
--
ALTER TABLE `reseps`
  ADD CONSTRAINT `reseps_iddokter_foreign` FOREIGN KEY (`idDokter`) REFERENCES `dokters` (`idDokter`),
  ADD CONSTRAINT `reseps_idobat_foreign` FOREIGN KEY (`idObat`) REFERENCES `obats` (`idObat`),
  ADD CONSTRAINT `reseps_norekapmedis_foreign` FOREIGN KEY (`noRekapMedis`) REFERENCES `pasiens` (`noRekapMedis`);

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
