-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 06:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `image`, `created_at`, `updated_at`) VALUES
('Edm', 'categories/ap471jkw5KayEnlEtcYPfagZTQzB5KcCchPTRFgw.jpg', '2023-07-23 07:05:38', '2023-07-23 07:05:38'),
('Hip Hop', 'categories/K5kEnkENg1SKUHmkTtBcQYDYKY6sydEqgMEMDZ5b.jpg', '2023-07-23 07:06:05', '2023-07-23 07:06:05'),
('Pop', 'categories/LlcdSbw3JLe33hWeuOhPaiCvR7cLs7wVyBcfDw0Z.jpg', '2023-07-23 07:05:22', '2023-07-23 07:05:22'),
('Rap', 'categories/vQZ2oppmbgEoIXj1e9gfYu7TxLri5S7fRUWBYqF2.jpg', '2023-07-23 07:05:53', '2023-07-23 07:05:53'),
('Rock', 'categories/zt370sxLM9dQb24LKQGS2OBw2zxt9quy6fZRVpgV.jpg', '2023-07-23 07:09:57', '2023-07-23 07:09:57');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image/Ihtctpy13EeIRqeI29dBcO6hGriLBaHUEbi6TNCu.png', '2023-06-12 04:56:47', '2023-06-12 04:56:47'),
(2, 'image/eufgWMGnsDg5cbz7cfRk3kOUAVkIZr2rjSnSq6pa.png', '2023-06-26 03:03:02', '2023-06-26 03:03:02'),
(3, 'image/w7VREa5RsYeJaltVOOM0SQD1M5pIUXKTmauvG641.png', '2023-07-10 02:59:46', '2023-07-10 02:59:46');

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
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2023_06_12_111500_create_images_table', 2),
(15, '2023_05_29_094645_create_companies_table', 4),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 7),
(24, '2023_07_14_081117_create_users_table', 8),
(25, '2023_07_18_002617_create_categories_table', 9),
(27, '2023_07_20_115421_create_songs_table', 10),
(28, '2023_08_01_181633_add_new_column_to_songs_table', 11),
(29, '2023_08_01_182716_create_reports_table', 12),
(30, '2023_08_01_183104_create_redeem_cards_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redeem_cards`
--

CREATE TABLE `redeem_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `redeem_code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `value` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `information` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `uploaded_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `created_at`, `updated_at`, `name`, `song`, `image`, `artist`, `category`, `uploaded_by`) VALUES
(5, '2023-07-23 07:12:36', '2023-07-23 07:12:36', 'Sample', 'songs/28zronM6zROu78MtQRhHKl7HBN9laVzLgvFyBdwP.mp3', 'images/TZ2ydET7vEJ4OWRjFT9ot1AGX88GPsT6gPwJ5Vt7.png', 'No_name', 'Edm', NULL),
(6, '2023-07-23 07:13:58', '2023-07-23 07:13:58', 'Rave', 'songs/BrdB8gqpRuNuangI3Im3JCrZvL3N0ZpvVEG7bdvG.mp3', 'images/K4qy0XjrV9wjpGTdzcGuJp6qJZ0sVxujLT1TYyV6.jpg', 'dxrk', 'Edm', NULL),
(7, '2023-07-23 07:25:25', '2023-07-23 07:25:25', 'Hotline Bling', 'songs/SfDJGFKa2XvzwnM0qv1YRH45AgxmN5UXJDw0VQ44.mp3', 'images/92JqRHdIHX71qLgy2oiLSRGeiHwKs7ajG5VDOBMK.png', 'Drake', 'Pop', NULL),
(8, '2023-07-23 07:26:11', '2023-07-23 07:26:11', 'Cheri Cheri Lady', 'songs/GAfLAs81oHsbA9MR2dmR6O32sOrjDwqEqG1psWIq.mp3', 'images/4u6AYxhHUGVfxiyVM8IzYXT8NLItUIZcUvuy24Dz.jpg', 'Modern Talking', 'Pop', NULL),
(9, '2023-07-23 07:27:06', '2023-07-23 07:27:06', 'Bury The Light', 'songs/ZylpVkr68B5khBvtqttGTLnAGM5Po09Dr5lTqgpW.mp3', 'images/C5AlCH8IgKZL7rGFZrCD8CkUbi4aNuwVqOY2iBWK.png', 'Casey Edwards', 'Rock', NULL),
(10, '2023-07-23 07:28:51', '2023-07-23 07:28:51', 'A lot', 'songs/HtcpLdgoUGXP71p4Wi7hggjusOKC33GHXVYPR4JV.mp3', 'images/SQhShQAsf4yn0rt9Vx92LsQd9ADaVpgl7Lu4Ux2F.jpg', '21 Savage, J.Cole', 'Rap', NULL),
(11, '2023-07-23 07:30:15', '2023-07-23 07:30:15', 'N in paris', 'songs/ygLlvQiC51Je59MsiyRaH5TNIgGbu2ZJkYVYkkWt.mp3', 'images/lF6UzYdVFCYdGEEGtTzFYKQvZcEdVDgxkEl42nX5.jpg', 'Kayne West, Jay-Z', 'Hip Hop', NULL),
(12, '2023-07-23 07:34:10', '2023-07-23 07:34:10', 'L\'Amour Toujours', 'songs/MSn36NoMtzcxYYTyXvP4NckYVh9pCfOmIgCWr2qf.mp3', 'images/OhI1ytnTNZ7X8y3iUw3OQrTgs1P4x3NjioseD72l.jpg', 'Gigi D\'Agostino', 'Edm', NULL),
(14, '2023-07-23 07:36:20', '2023-07-23 07:36:20', 'Golden Shower', 'songs/TF82LrtQgsPu0tjT3myizqnuv1lEOFk2qIQXBfiM.mp3', 'images/CSLoGdH3XbbodpXBcVacRtFV6tnfGXcgWAn7Ko4M.jpg', 'JVKE', 'Pop', NULL),
(17, '2023-07-24 03:39:40', '2023-07-24 03:39:40', 'Family ties', 'songs/UHmHy4zEy2Th8O5VjFSCGAVsg441R5qpOWZjj9Ak.mp3', 'images/dPKLlPnjwESVQs4iDdp78LM8aPA8KFUvgVAVP75B.png', '21', 'Edm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `money` double(8,2) NOT NULL DEFAULT 0.00,
  `VIP` tinyint(1) NOT NULL DEFAULT 0,
  `type` varchar(255) NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `money`, `VIP`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin', '123', 0.00, 0, 'admin', NULL, '2023-07-22 01:47:12', '2023-07-22 01:47:44'),
(2, 'asdqwecgvsadqai', 'eqe@dsafsam', '321', 0.00, 0, 'ban', NULL, '2023-07-24 02:30:34', '2023-07-24 02:31:06'),
(3, '123', 'anh@123', '123', 0.00, 0, 'customer', NULL, '2023-07-24 03:40:08', '2023-07-24 03:40:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `redeem_cards`
--
ALTER TABLE `redeem_cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `redeem_cards_redeem_code_unique` (`redeem_code`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_created_by_foreign` (`created_by`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `songs_category_foreign` (`category`),
  ADD KEY `songs_uploaded_by_foreign` (`uploaded_by`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redeem_cards`
--
ALTER TABLE `redeem_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`name`) ON DELETE CASCADE,
  ADD CONSTRAINT `songs_uploaded_by_foreign` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
