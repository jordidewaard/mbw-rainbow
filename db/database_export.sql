-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 09 mrt 2020 om 11:18
-- Serverversie: 5.7.27
-- PHP-versie: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hours`
--

CREATE TABLE `hours` (
  `hour_id` int(10) UNSIGNED NOT NULL,
  `project_user_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `hours` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `hours`
--

INSERT INTO `hours` (`hour_id`, `project_user_id`, `date`, `hours`, `status`, `description`, `created_at`, `updated_at`) VALUES
(29, 2, '2020-03-04', -2, 'removed', 'Student 1 heeft -2 uren verwijderd', '2020-03-04 08:13:34', '2020-03-04 08:13:34'),
(28, 2, '2020-03-04', 1, 'requested', 'Student 1 heeft 1 uren aangevraagd', '2020-03-04 08:13:31', '2020-03-04 08:13:31'),
(4, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:32', '2020-02-13 12:35:32'),
(5, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:33', '2020-02-13 12:35:33'),
(6, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:35', '2020-02-13 12:35:35'),
(7, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:36', '2020-02-13 12:35:36'),
(8, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:38', '2020-02-13 12:35:38'),
(9, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:40', '2020-02-13 12:35:40'),
(10, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:41', '2020-02-13 12:35:41'),
(11, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:43', '2020-02-13 12:35:43'),
(12, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:45', '2020-02-13 12:35:45'),
(13, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:46', '2020-02-13 12:35:46'),
(14, 1, '2020-02-13', 1, 'added', 'Leraar 1 heeft 1 uren toegevoegd', '2020-02-13 12:35:48', '2020-02-13 12:35:48'),
(27, 2, '2020-03-04', 11, 'requested', 'Student 1 heeft 11 uren aangevraagd', '2020-03-04 08:13:29', '2020-03-04 08:13:29'),
(16, 1, '2020-02-13', 3, 'added', 'Leraar 1 heeft 3 uren toegevoegd', '2020-02-13 12:35:51', '2020-02-13 12:35:51'),
(17, 1, '2020-02-13', 4, 'added', 'Leraar 1 heeft 4 uren toegevoegd', '2020-02-13 12:35:53', '2020-02-13 12:35:53'),
(18, 1, '2020-02-13', 5, 'added', 'Leraar 1 heeft 5 uren toegevoegd', '2020-02-13 12:35:54', '2020-02-13 12:35:54'),
(19, 1, '2020-02-13', 6, 'added', 'Leraar 1 heeft 6 uren toegevoegd', '2020-02-13 12:35:56', '2020-02-13 12:35:56'),
(20, 1, '2020-02-13', 7, 'added', 'Leraar 1 heeft 7 uren toegevoegd', '2020-02-13 12:35:57', '2020-02-13 12:35:57'),
(21, 1, '2020-02-13', 8, 'added', 'Leraar 1 heeft 8 uren toegevoegd', '2020-02-13 12:35:59', '2020-02-13 12:35:59'),
(22, 1, '2020-02-13', 9, 'added', 'Leraar 1 heeft 9 uren toegevoegd', '2020-02-13 12:36:01', '2020-02-13 12:36:01'),
(23, 1, '2020-02-13', 10, 'added', 'Leraar 1 heeft 10 uren toegevoegd', '2020-02-13 12:36:04', '2020-02-13 12:36:04'),
(24, 1, '2020-02-13', 11, 'added', 'Leraar 1 heeft 11 uren toegevoegd', '2020-02-13 12:36:06', '2020-02-13 12:36:06'),
(25, 1, '2020-02-13', 12, 'added', 'Leraar 1 heeft 12 uren toegevoegd', '2020-02-13 12:36:08', '2020-02-13 12:36:08'),
(26, 1, '2020-02-13', 13, 'added', 'Leraar 1 heeft 13 uren toegevoegd', '2020-02-13 12:36:13', '2020-02-13 12:36:13'),
(30, 3, '2020-03-04', 22, 'requested', 'Student 1 heeft 22 uren aangevraagd', '2020-03-04 08:17:38', '2020-03-04 08:17:38'),
(31, 3, '2020-03-04', 1, 'requested', 'Student 1 heeft 1 uren aangevraagd', '2020-03-04 08:17:41', '2020-03-04 08:17:41'),
(32, 3, '2020-03-04', 3, 'requested', 'Student 1 heeft 3 uren aangevraagd', '2020-03-04 08:17:43', '2020-03-04 08:17:43'),
(33, 3, '2020-03-04', 4, 'requested', 'Student 1 heeft 4 uren aangevraagd', '2020-03-04 08:17:47', '2020-03-04 08:17:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_06_113429_create_projects_table', 1),
(4, '2019_05_13_101124_create_groups_table', 1),
(5, '2019_05_28_100031_create_project_user_table', 1),
(6, '2019_05_28_120636_create_hours_table', 1),
(7, '2019_10_29_143528_project_add_url', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `duration`, `description`, `client_id`, `deleted_at`, `created_at`, `updated_at`, `link`) VALUES
(21, 'Test1234', 20, '213', 3, NULL, '2020-03-04 08:01:55', '2020-03-04 08:01:55', NULL),
(2, 'Project 3', 100, 'jhgf', NULL, NULL, '2020-02-05 08:15:47', '2020-02-05 08:15:47', NULL),
(3, 'sadsdassd', 111, 'asdasd', NULL, NULL, '2020-02-05 08:23:33', '2020-02-05 08:23:33', NULL),
(4, 'Test1234', 20, '123wqe', NULL, NULL, '2020-02-05 08:24:43', '2020-02-05 08:24:43', NULL),
(5, 'Test1234212', 80, '123123', NULL, NULL, '2020-02-05 08:25:05', '2020-02-05 08:25:05', NULL),
(6, 'Project 22g', 123, 'asd', NULL, NULL, '2020-02-05 08:27:12', '2020-02-05 11:14:05', NULL),
(22, 'Test12342', 31, 'sdasd', 6, NULL, '2020-03-04 08:13:05', '2020-03-04 08:13:05', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project_user`
--

CREATE TABLE `project_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `project_user`
--

INSERT INTO `project_user` (`id`, `user_id`, `project_id`, `start_date`, `end_date`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2020-02-13 12:35:13', '2020-02-13 12:35:13', 0, NULL, NULL, NULL),
(2, 1, 22, '2020-03-04 08:13:17', '2020-03-04 08:13:17', 0, NULL, NULL, NULL),
(3, 1, 21, '2020-03-04 08:17:23', '2020-03-04 08:17:23', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('A','C','S') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'S',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quinten v.d. Herik', 'student@live.nl', 'S', NULL, '$2y$10$lZNwaTrD6uGFsii0q.OmMO5IUHo6vaCbijrqMBp/rssbRXzc8cbqe', NULL, '2020-01-22 07:46:58', '2020-02-05 10:32:53'),
(2, 'Admin', 'admin@live.nl', 'A', NULL, '$2y$10$4Q0uLijKLYUEYm/Lw.GBnePuRXqMWMS6EhstIqsVdhfKiS9DhgXyi', 'Hqigc7aDusYuQxhuV9d32OCZMsX2jDkIxcyd893rMq0BqDWvGcOpUZGg27RI', '2020-01-22 07:46:58', '2020-02-18 12:38:18'),
(3, 'Karbala', 'test@live.nl', 'C', NULL, '$2y$10$aMbnZZlubOS9vJ57hs4c5.IjD8RYibij0qeugwf9dEfs.bqi1hkE.', NULL, '2020-01-22 11:21:27', '2020-01-22 11:21:27'),
(6, 'Shanti Sagar 16', 'shantiSagar16@live.nl', 'C', NULL, '$2y$10$aMbnZZlubOS9vJ57hs4c5.IjD8RYibij0qeugwf9dEfs.bqi1hkE.', NULL, '2020-02-12 10:24:59', '2020-02-12 10:24:59');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`hour_id`),
  ADD KEY `hours_project_user_id_foreign` (`project_user_id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_client_id_foreign` (`client_id`);

--
-- Indexen voor tabel `project_user`
--
ALTER TABLE `project_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_user_user_id_foreign` (`user_id`),
  ADD KEY `project_user_project_id_foreign` (`project_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `hours`
--
ALTER TABLE `hours`
  MODIFY `hour_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `project_user`
--
ALTER TABLE `project_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
