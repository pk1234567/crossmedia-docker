-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               5.7.29 - MySQL Community Server (GPL)
-- Server Betriebssystem:        Linux
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank Struktur für homestead
DROP DATABASE IF EXISTS `homestead`;
CREATE DATABASE IF NOT EXISTS `homestead` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `homestead`;

-- Exportiere Struktur von Tabelle homestead.documents
DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.documents: ~4 rows (ungefähr)
DELETE FROM `documents`;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
	(27, 'Video2', 'vid', '1613131630.mp4', '2021-02-12 12:07:10', '2021-02-12 12:07:10'),
	(28, 'Text Test', 'Big Video Bro', '1613134209.txt', '2021-02-12 12:50:09', '2021-02-12 12:50:09'),
	(29, 'Bild', 'Bild1', '1613134451.jpg', '2021-02-12 12:54:11', '2021-02-12 12:54:11'),
	(31, 'Test', 'Testlink', '1613137611.jpg', '2021-02-12 13:46:51', '2021-02-12 13:46:51');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.failed_jobs: ~0 rows (ungefähr)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.migrations: ~5 rows (ungefähr)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_12_27_133932_create_test_table', 1),
	(5, '2021_01_18_174753_create_documents_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.password_resets: ~1 rows (ungefähr)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('admin@example.com', '$2y$10$LRbuBAkNN5Cc2ifua1YbZOvCFDG.D7tvvDsuSMGNkIqGHnf4/NyJm', '2021-02-12 09:22:32');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.test
DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.test: ~0 rows (ungefähr)
DELETE FROM `test`;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.users: ~5 rows (ungefähr)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'est', 'test@test', '2020-12-27 14:48:06', '123', '2', '2020-12-27 14:48:09', '2020-12-27 14:48:10'),
	(2, 'admin', 'admin@example.com', NULL, '$2y$10$rw2SqTpg9hmHNoVAn9E7kOgBvfV/E68EYE2QhBUNmEFNL0bbAxpi.', NULL, '2021-01-30 13:26:30', '2021-01-30 13:26:30'),
	(3, 'Jonny31', 'Jonny31@test.de', NULL, '$2y$10$eZFYlrL70qXt3uNRbTsyVuYlfiGPp8izV8ao9Fa/FzqZF.SAac2hq', NULL, '2021-01-31 18:09:51', '2021-01-31 18:09:51'),
	(4, 'Tim', 'Tim@test.de', NULL, '$2y$10$RnTqBdnXsvhw8zsxLh81LOlqZ5cuKbN4Ve6D3tcBqYevYQsuozM5i', NULL, '2021-02-03 19:23:32', '2021-02-03 19:23:32'),
	(5, 'sers@alda.de', 'sers@alda.de', NULL, '$2y$10$NEZz8FJtCZqkalw00Xym7.ueGyNNUE.UIBqlwHh30mFrMPkP196xC', NULL, '2021-02-10 13:00:17', '2021-02-10 13:00:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
