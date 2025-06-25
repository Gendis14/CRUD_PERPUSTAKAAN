-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 05:55 AM
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
-- Database: `crud_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2005', '1750818513_download.jpeg', '2025-06-24 17:28:34', '2025-06-24 17:28:34'),
(4, 'Atomic Habits', 'James Clear', 'Avery', '2018', '1750818992_كتاب _ العادات الذرية.jpeg', '2025-06-24 17:36:32', '2025-06-24 17:36:32'),
(5, 'A Brief History of Time', 'Stephen Hawking', 'Bantam Books', '1988', '1750819193_1_3Zb0JI3unvndrQ-RGgcRiQ@2x.jpg', '2025-06-24 17:39:53', '2025-06-24 17:39:53'),
(6, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 'Harvill Secker', '2011', '1750819518_41-loll22gl-6048da21d541df048a04ca82.jpg', '2025-06-24 17:45:18', '2025-06-24 17:45:18'),
(7, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Plata Publishing', '1997', '1750819801_Rich Dad Poor Dad.jpeg', '2025-06-24 17:50:01', '2025-06-24 17:50:01'),
(8, 'Filosofi Teras', 'Henry Manampiring', 'Kompas Gramedia', '2018', '1750820451_kjf6cgigkomf6sy9o5qauu.jpg', '2025-06-24 18:00:52', '2025-06-24 18:00:52'),
(9, 'The Bitcoin Standard', 'Saifedean Ammous', 'Wiley', '2018', '1750820768_download.jpeg', '2025-06-24 18:06:08', '2025-06-24 18:06:08'),
(10, 'The Lean Startup', 'Eric Ries', 'Crown Business', '2011', '1750820896_The Lean Startup, Eric Ries _ 9781524762407 _ Boeken _ bol_com.jpeg', '2025-06-24 18:08:16', '2025-06-24 18:08:16'),
(11, 'Hooked: How to Build Habit-Forming Products', 'Nir Eyal', 'Portfolio', '2014', '1750820976_Hooked_ How to Build Habit-Forming Products.jpeg', '2025-06-24 18:09:36', '2025-06-24 18:09:36'),
(12, 'Thinking, Fast and Slow', 'Daniel Kahneman', 'Farrar, Straus and Giroux', '2011', '1750821080_40 of the Best Books to Unlock Your Creativity.jpeg', '2025-06-24 18:11:20', '2025-06-24 18:11:20'),
(13, 'Emotional Intelligence', 'Daniel Goleman', 'Bantam Books', '1995', '1750821178_download (1).jpeg', '2025-06-24 18:12:58', '2025-06-24 18:12:58'),
(14, 'Pergi (lanjutan dari \"Pulang\")', 'Tere Liye', 'Republika Penerbit', '2018', '1750821674_images.jpeg', '2025-06-24 18:21:14', '2025-06-24 18:21:14'),
(15, 'Sunset Bersama Rosie', 'Tere Liye', 'Mahaka Publishing', '2008', '1750821880_Gramedia Cirebon - Sunset Bersama Rosie.jpeg', '2025-06-24 18:24:40', '2025-06-24 18:24:40'),
(16, 'Atomic Habits', 'James Clear', 'Avery', '2018', '1750822300_antomic.jpeg', '2025-06-24 18:26:34', '2025-06-24 18:31:40'),
(17, 'Sebuah Seni untuk Bersikap Bodo Amat (The Subtle Art of Not Giving a Fck*)', 'Mark Manson', 'Gramedia Pustaka Utama', '2016', '1750822169_aei6jkj4cCtAUIJL3WaGyNyr-PEdVZ-pJ7FL7uKqSBlAvWjUlch6B7e4_7ZgPZFnYbVB_a0QXPxXDxkxup8WrScsSdU0R1kurQjksjqpie78Vj39o2UMuLb3yFy-Wd4QtzvwWQT_8yiH6SvjP6rwZ2i8pYocd5yvjeT4VUqd_A_fokvzq.jpg', '2025-06-24 18:29:29', '2025-06-24 18:29:29'),
(18, 'Bicara Itu Ada Seninya', 'Oh Su Hyang', 'B First', '2017', '1750822398_Bicara Itu Ada Seninya_ Rahasia Komunikasi Yang Efektif (Oh Su Hyang)_pdf.jpeg', '2025-06-24 18:33:18', '2025-06-24 18:33:18'),
(19, 'Merayakan kehilanagan', 'M. Aan Mansyur', 'Bentang Pustaka', '2016', '1750822557_Mantab.jpeg', '2025-06-24 18:35:57', '2025-06-24 18:35:57'),
(20, 'I Think You’re Lovely, I Hope You Know That', 'Reyna B.', 'Kata Depan', '2023', '1750822671_811mps2k-9L._UF1000,1000_QL80_.jpg', '2025-06-24 18:37:51', '2025-06-24 18:37:51'),
(21, 'Senja, Hujan, dan Cerita yang Telah Usai', 'Boy Candra', 'Media Kita', '2016', '1750822800_0238b61616db16da93dddd439fc5d3f0.jpg', '2025-06-24 18:40:00', '2025-06-24 18:40:00'),
(22, 'Seni Memahami Wanita', 'A. Suharman', 'Diva Press', '2020', '1750822949_19d111d6ab9fc08b9b58af39a4f2d47c.jpg', '2025-06-24 18:42:29', '2025-06-24 18:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2025_06_23_120009_create_bukus_table', 1),
(6, '2025_06_23_220040_add_gambar_to_bukus_table', 1),
(7, '2025_06_24_040908_add_role_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$IIijI8O9lcg0DltZTXY1ZuzJMe8JT5yBfm.rotOcp3OtmoQiFhN5.', NULL, '2025-06-23 17:59:56', '2025-06-23 17:59:56', 'admin'),
(2, 'Kapala Sakit', 'user@gmail.com', NULL, '$2y$12$MY6HMf6ripmeg3Fnuv6OAeobQ1JV4mdA/kY4kHx0t4d2uCcsri9ze', NULL, '2025-06-23 19:30:37', '2025-06-23 19:30:37', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
