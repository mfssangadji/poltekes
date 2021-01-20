-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 07:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poltekes`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `user_id`, `nama_file`, `file`, `created_at`, `updated_at`) VALUES
(8, 2, 'coba', 'doc_1609027858.pdf', '2020-12-27 00:10:58', '2020-12-27 00:10:58'),
(9, 2, 'dari', 'doc_1609027879.xls', '2020-12-27 00:11:19', '2020-12-27 00:11:19'),
(10, 3, 'poltekes', 'doc_1609027963.jpg', '2020-12-27 00:12:43', '2020-12-27 00:12:43');

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
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `user_id`, `judul`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(3, 2, 'Brimob Nusantara Kembali, Giliran Pengamanan Freeport Berangkat', '1610818279.jpeg', '<div style=\"text-align: justify; \"><font color=\"#000000\" face=\"sans-serif\"><span style=\"font-size: 17px;\">Ternate, malutpost.id -- Sebanyak 100 personil Brimob Nusantara BKO yang ditugaskan ke Makassar Sulawesi Selatan (Sulsel) dan Polda Papua telah kembali ke Maluku Utara.&nbsp;</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"sans-serif\"><span style=\"font-size: 17px;\">Kini, giliran 204 personel Pra Ops Satuan Tugas (Satgas) Amole pasukan pengamanan objek vital area pertambangan PT Freeport Indonesia 2021, akan berangkat.\"Selamat datang dan bergabung untuk pasukan BKO Polda Malut yang telah melaksanakan tugas negara untuk menciptakan situasi aman dan damai,\" ucap Kapolda, Irjen Pol Risyapidin Nursin, saat memimpin upacara penyambutan personel dan pengantaran, di Mako KI 3 Den B Brimob Ternate, Jumat (15/1/2021).Di katakannya, untuk para anggota yang telah selesai dan sukses melaksanakan tugas BKO di Papua yang juga telah melaksanakan tugas di wilayah Polda Sulawesi Selatan dalam rangka operasi mantap praja 2020.\"Sekembalinya saudara-saudara ke satuan induk, secara otomatis akan memperkuat jajaran Polda Malut dalam menjaga stabilitas keamanan dan ketertiban masyarakat di wilayah hukum Polda Malut,\" katanya.</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></div><div style=\"text-align: justify; \"><font color=\"#000000\" face=\"sans-serif\"><span style=\"font-size: 17px;\">Kapolda juga memberikan apresiasi. Sebab, menurut dia, ada hal yang paling membanggakan adalah tidak adanya pelanggaran-pelanggaran yang dilakukan selama bertugas.\"Ini agar tetap dan harus dipertahankan dimanapun saudara-saudara bertugas,\" ujarnya.Jendral bintang dua itu juga berpesan kepada personel yang akan berangkat ke PT Freport Indonesia, agar selalu meningkatkan ketakwaan terhadap tuhan yang maha esa.\"Karena hanya kepadanya tempat meminta perlindungan dan pertolongan, atas semua yang terjadi selama penugasan berlangsung,\" ucapnya.Dia menambahkan, sebelum melakukan penugasan di PT. Freeport, akan dilakukan latihan Pra Ops di Mako Korps Brimob selama sebulan. Itu bertujuan untuk mempersiapkan diri maupun kesatuan sebagai pedoman untuk menghadapi tantangan tugas.\"Saya berharap dengan semangat pengabdian yang tinggi dan dilandasi motto Jiwa Ragaku Demi Kemanusiaan’, Korps Brimob Polri khususnya Satuan Brimob Polda Malut bisa jadi contoh dalam mewujudkan cita-cita itu,\" pungkasnya.(cr-04)</span></font></div>', '2021-01-16 17:31:19', '2021-01-16 17:31:19'),
(4, 2, 'Semua Pejabat di Ternate \'Gagal\' Divaksin, Ada Apa?', '1610818423.jpeg', '<div style=\"text-align: justify; \">Ternate, malutpost.id -- Seluruh pejabat Muspida Kota Ternate tidak bisa divaksin Covid-19, Sinovac saat penacanangan vaksinasi tingkat kota, Jumat (15/1/20201).Vaksin mereka akhirnya ditunda. Dari 20 nama pejabat Muspida Kota Ternate dan relawan yang masuk dalam daftar penerima vaksin perdana hanya satu orang yang berhasil disuntik yakni Ketua Persatuan Perawat Nasional Indonesia Kota Ternate Chandra Makassar.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Pejabat yang menunda vaksin yakni Kapolres Ternate AKBP Aditya Laksimada, Dandim 1501 Ternate Letkol Inf. R. Moch Iskandarmanto, Danlanal Ternate Kolonel Laut (P) Whisnu Kusardianto, Ketua Pengadilan Negeri Ternate Toni Irfan.Sementara Wali Kota Ternate Burhan Abdurrahman dan Wakil Wali Kota Abdullah Tahir tidak bisa divaksinasi karena usia.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">Kepala Dinas Kota Ternate Nurbaity Radjabessy menjelaskan, pejabat tersebut akan mendapat vaksin dilain kesempatan oleh kesehatan.\"Hasil screening mereka ternyata tekanan darahnya ada yang 190 dan 170 jadi tidak bisa disuntik yang kita suntik hanya tekanan darah normal,\" kata Nurbaity kepada sejumlah awak media usai pencanangan di Puskesmas Siko, Ternate Utara.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify; \">Dia menjelaskan, pejabat tersebut telah diistirahatkan dua kali, namun tekanan darahnya masih tetap tinggi sehingga diputuskan untuk tunda.Menurut Nurbaity, ada 20 nama relawan yang disiapkan pada suntik perdana. Hanya saja, hasil screening petugas hanya 4 orang yakni perwakilan BPOM Kota Ternate, perwakilan Dinkes, Ketua PPNI dan salah satu dokter.\"Target kita hari ini 10 orang tapi baru dapat 4 orang, jadi nanti baru dilanjutkan kembali,\" jelasnya.Di katakannya, rata-rata relawan yang divaksin tidak mengalami keluhan atau efek samping setelah 30 observasi. Untuk itu, dia berharap masyarakat tidak terprovokasi dengan isu yang beredar di media sosial.\"Vaksin ini bertujuan memberikan kekebalan tubuh sehingga tidak mudah terpapar virus korona,\" pungkasnya. (ikh)</div>', '2021-01-16 17:33:43', '2021-01-16 17:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pegawai`
--

CREATE TABLE `jenis_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pegawai`
--

INSERT INTO `jenis_pegawai` (`id`, `nama_jenis_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'Dosen', '2020-12-20 12:01:36', '2020-12-20 12:01:36'),
(2, 'Tenaga Kependidikan', '2020-12-20 12:01:45', '2020-12-20 12:01:45'),
(3, 'Tenaga Pendukung', '2020-12-20 12:01:55', '2020-12-20 12:01:55');

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
(4, '2020_12_20_112121_create_informasi_table', 2),
(5, '2020_12_20_112343_create_unit_table', 3),
(6, '2020_12_20_112448_create_jenis_pegawai_table', 4),
(7, '2020_12_20_112540_create_pegawai_table', 5),
(8, '2020_12_21_084206_create_arsip_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` tinyint(4) DEFAULT NULL,
  `pendidikan` tinyint(4) NOT NULL,
  `golongan` tinyint(4) DEFAULT NULL,
  `agama` tinyint(4) UNSIGNED DEFAULT NULL,
  `jenis_kelamin` tinyint(4) DEFAULT NULL,
  `no_sertifikat_dosen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_str` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_data` tinyint(5) DEFAULT NULL,
  `data_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `jenis_pegawai_id`, `unit_id`, `nip`, `nama`, `jabatan`, `pendidikan`, `golongan`, `agama`, `jenis_kelamin`, `no_sertifikat_dosen`, `no_str`, `status_data`, `data_id`, `created_at`, `updated_at`) VALUES
(18, 1, 1, '234798', 'Pertama', 1, 1, 1, 1, 1, '2394878', '9723848', NULL, NULL, '2020-12-27 14:42:41', '2020-12-27 14:42:41'),
(19, 1, 1, '8924', 'sadk', 2, 3, 3, 3, 2, 'makdsmk', 'asodoads', NULL, NULL, '2020-12-27 14:50:04', '2020-12-27 14:50:04'),
(20, 1, 3, '893249', 'asmdkamskd', 3, 6, 6, 2, 1, '82934', '28394', NULL, NULL, '2020-12-27 14:50:34', '2020-12-27 14:50:34'),
(21, 1, 1, '8983294', 'aksjdi', 1, 2, 3, 1, 1, '23498', '8983924', NULL, NULL, '2020-12-27 14:50:49', '2020-12-27 14:50:49'),
(22, 2, 1, '80983294', 'maksdm', 3, 4, 4, 2, 1, NULL, '28394', NULL, NULL, '2020-12-27 14:51:17', '2020-12-27 14:51:17'),
(23, 2, 3, '89898432', 'askdjksad', 3, 4, 1, 3, 2, NULL, '28349234', NULL, NULL, '2020-12-27 14:51:32', '2020-12-27 14:51:32'),
(24, 2, 3, '8239489', 'asmdkad', 1, 3, 3, 3, 1, NULL, '2384928394', NULL, NULL, '2020-12-27 14:51:46', '2020-12-27 14:51:46'),
(25, 2, 3, '238948', 'amsdkm', 3, 8, 5, 1, 2, NULL, '28349', NULL, NULL, '2020-12-27 14:52:07', '2020-12-27 14:52:07'),
(26, 3, 3, NULL, 'jaksdjk', NULL, 7, NULL, 2, 1, NULL, NULL, NULL, NULL, '2020-12-27 14:52:23', '2020-12-27 14:52:23'),
(27, 3, 3, NULL, 'ksjdkas', NULL, 1, NULL, 3, 2, NULL, NULL, NULL, NULL, '2020-12-27 14:52:33', '2020-12-27 14:52:33'),
(28, 3, 3, NULL, 'amskdk', NULL, 4, NULL, 2, 1, NULL, NULL, NULL, NULL, '2020-12-27 14:52:44', '2020-12-27 14:52:44'),
(29, 3, 3, NULL, 'maskd', NULL, 1, NULL, 1, 1, NULL, NULL, NULL, NULL, '2020-12-27 14:52:51', '2020-12-27 14:52:51'),
(30, 1, 2, '987456876', 'si ucup', 2, 1, 3, 3, 1, '243', '345', NULL, NULL, '2021-01-06 08:11:51', '2021-01-06 08:11:51'),
(31, 1, 1, '234', 'asd', 1, 1, 1, 1, 1, '324', '43', NULL, NULL, '2021-01-16 04:42:51', '2021-01-16 04:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama_unit`, `created_at`, `updated_at`) VALUES
(1, 'Unit 1', '2020-12-20 13:30:15', '2020-12-20 13:30:16'),
(2, 'Unit 2', '2020-12-20 13:30:20', '2020-12-20 13:30:20'),
(3, 'Unit 3', '2020-12-20 13:30:24', '2020-12-20 13:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(5) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@localhost', NULL, '$2y$10$ePmPs3O.VqH6bd5brIJhHuPGFF2MqJS..kcYCloQ6XBtEgIUvmTCu', 1, NULL, '2020-12-20 12:36:05', '2020-12-20 12:41:32'),
(3, 'Operator', 'operator@localhost', NULL, '$2y$10$jRgh9z3UjGi/LgJ7IIILkOK5NsJKYk3q0P/AzYNP4c58xeHPAC0wi', 2, NULL, '2020-12-20 12:45:48', '2020-12-20 12:45:48'),
(5, 'Guest', 'guest@localhost', NULL, '$2y$10$Y9Iedm7z5WK2pbos7F4gBOtRiULGRIn1IepcDeln.ksPosMF3llIa', 3, NULL, '2021-01-16 17:51:55', '2021-01-16 17:51:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arsip_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_user_id_foreign` (`user_id`);

--
-- Indexes for table `jenis_pegawai`
--
ALTER TABLE `jenis_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_jenis_pegawai_id_foreign` (`jenis_pegawai_id`),
  ADD KEY `pegawai_unit_id_foreign` (`unit_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_pegawai`
--
ALTER TABLE `jenis_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_jenis_pegawai_id_foreign` FOREIGN KEY (`jenis_pegawai_id`) REFERENCES `jenis_pegawai` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pegawai_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
