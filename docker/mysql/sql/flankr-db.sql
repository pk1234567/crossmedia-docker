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
CREATE DATABASE IF NOT EXISTS `homestead` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `homestead`;

-- Exportiere Struktur von Tabelle homestead.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filetype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.documents: ~14 rows (ungefähr)
DELETE FROM `documents`;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id`, `title`, `description`, `file`, `filetype`, `kategorie`, `filesize`, `created_at`, `updated_at`) VALUES
	(1, 'a', 'a', '1613398190.jpg', 'jpg', NULL, 84890, '2021-02-15 14:09:50', '2021-02-15 14:09:50'),
	(2, 'e', 'e', '1613398221.pdf', 'pdf', NULL, 1526329, '2021-02-15 14:10:21', '2021-02-15 14:10:21'),
	(3, 'd', 'd', '1613399096.mp4', 'mp4', NULL, 832794, '2021-02-15 14:24:56', '2021-02-15 14:24:56'),
	(4, 'd', 'd', '1613410387.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:07', '2021-02-15 17:33:07'),
	(5, 'd', 'd', '1613410396.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:16', '2021-02-15 17:33:16'),
	(6, 'd', 'd', '1613410405.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:25', '2021-02-15 17:33:25'),
	(7, 'd', 'd', '1613410412.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:32', '2021-02-15 17:33:32'),
	(8, 'd', 'd', '1613410418.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:38', '2021-02-15 17:33:38'),
	(9, 'd', 'd', '1613410423.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:43', '2021-02-15 17:33:43'),
	(10, 'd', 'd', '1613410425.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:45', '2021-02-15 17:33:45'),
	(11, 'd', 'd', '1613410426.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:46', '2021-02-15 17:33:46'),
	(12, 'd', 'd', '1613410427.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:47', '2021-02-15 17:33:47'),
	(13, 'd', 'd', '1613410428.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:48', '2021-02-15 17:33:48'),
	(14, 'd', 'd', '1613410428.jpg', 'jpg', 'Landschaft', 95058, '2021-02-15 17:33:48', '2021-02-15 17:33:48');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.failed_jobs
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
	(5, '2021_01_18_174753_create_documents_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.password_resets: ~0 rows (ungefähr)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle homestead.test
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
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle homestead.users: ~1 rows (ungefähr)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'a', 'a@b.c', NULL, 'default.jpg', '$2y$10$JS6elGzutuJewX/446kzJOSYiGWNl90cMNmmbhB0Q/ZA/tCz4vdMu', NULL, '2021-02-15 14:09:31', '2021-02-15 14:09:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
