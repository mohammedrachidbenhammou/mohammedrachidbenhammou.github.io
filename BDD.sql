-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravel`;

-- Dumping structure for table laravel.analytics
CREATE TABLE IF NOT EXISTS `analytics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `search_count` int(11) NOT NULL DEFAULT '0',
  `visit_count` int(11) NOT NULL DEFAULT '0',
  `like_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.analytics: ~2 rows (approximately)
/*!40000 ALTER TABLE `analytics` DISABLE KEYS */;
REPLACE INTO `analytics` (`id`, `search_count`, `visit_count`, `like_count`, `created_at`, `updated_at`) VALUES
	(1, 0, 0, 0, '2022-04-11 09:06:08', '2022-04-11 09:06:08'),
	(2, 0, 0, 0, '2022-04-12 08:45:12', '2022-04-12 08:45:12');
/*!40000 ALTER TABLE `analytics` ENABLE KEYS */;

-- Dumping structure for table laravel.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`id`, `nom_cat`, `created_at`, `updated_at`) VALUES
	(1, 'Monuments', '2022-04-10 07:40:48', '2022-04-10 07:40:48'),
	(2, 'Mosques', '2022-04-10 07:41:43', '2022-04-10 07:41:43'),
	(4, 'Parks', '2022-04-10 08:11:11', '2022-04-10 08:11:11');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table laravel.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.cities: ~4 rows (approximately)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
REPLACE INTO `cities` (`id`, `Name`, `created_at`, `updated_at`) VALUES
	(1, 'Tlemcen', '2022-04-10 08:10:23', '2022-04-10 08:10:23'),
	(2, 'Oran', '2022-04-10 08:22:07', '2022-04-10 08:22:07'),
	(3, 'Alger', '2022-04-14 04:01:16', '2022-04-14 04:01:16'),
	(4, 'Tindouf', '2022-04-14 07:35:17', '2022-04-14 07:35:17');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Dumping structure for table laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_id_post_foreign` (`id_post`),
  CONSTRAINT `media_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.media: ~2 rows (approximately)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
REPLACE INTO `media` (`id`, `mime_type`, `uri`, `id_post`, `created_at`, `updated_at`, `filename`, `title`) VALUES
	(6, 'image/jpeg', 'media/1649883404_minaret.jpg', 1, '2022-04-14 04:56:44', '2022-04-14 04:56:44', 'minaret.jpg', NULL),
	(7, 'image/jpeg', 'media/1649892996_ainfeza.jpg', 2, '2022-04-14 07:36:36', '2022-04-14 07:36:36', 'ainfeza.jpg', NULL);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Dumping structure for table laravel.metadata
CREATE TABLE IF NOT EXISTS `metadata` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.metadata: ~4 rows (approximately)
/*!40000 ALTER TABLE `metadata` DISABLE KEYS */;
REPLACE INTO `metadata` (`id`, `long`, `lat`, `price`, `time`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL, NULL, '2022-04-11 09:00:37', '2022-04-11 09:00:37'),
	(2, NULL, NULL, NULL, NULL, '2022-04-11 09:05:23', '2022-04-11 09:05:23'),
	(3, '11.22\'33\'\'', '44.55\'66\'\'', 200, 15, '2022-04-11 09:06:08', '2022-04-12 10:30:57'),
	(4, '11.22\'33\'\'', '44.55\'66\'\'', 200, 15, '2022-04-12 08:45:12', '2022-04-14 07:36:23');
/*!40000 ALTER TABLE `metadata` ENABLE KEYS */;

-- Dumping structure for table laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~22 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_04_07_230927_create_role_table', 2),
	(6, '2022_04_07_230937_add_role_to_users', 3),
	(7, '2022_04_07_230945_create_category_table', 3),
	(8, '2022_04_07_231002_create_city_table', 3),
	(9, '2022_04_07_231040_create_metadata_table', 3),
	(10, '2022_04_07_231059_create_analytics_table', 3),
	(11, '2022_04_07_231516_create_posts_table', 4),
	(12, '2022_04_07_232339_create__media_table', 5),
	(13, '2022_04_09_22111_create_roles_table', 6),
	(14, '2022_04_09_22222_update_users_table', 6),
	(15, '2022_04_09_22333_create_categories_table', 6),
	(16, '2022_04_09_22444_create_cities_table', 6),
	(17, '2022_04_09_22555_create_metadata_table', 7),
	(18, '2022_04_09_22666_create_analytics_table', 7),
	(19, '2022_04_09_22777_create_posts_table', 8),
	(20, '2022_04_09_22888_create_media_table', 8),
	(21, '2022_04_11_001027_update_fields_in_posts', 9),
	(22, '2022_04_11_004541_update_fields_in_metadata', 10),
	(23, '2022_04_11_010004_add_timestamps_in_metadata', 11),
	(24, '2022_04_11_010201_set_default_fields_in_analytics', 12),
	(25, '2022_04_11_010541_add_timestamps_in_analytics', 13),
	(26, '2022_04_13_205146_add_filename_to_media', 14),
	(27, '2022_04_19_050555_add_thumbnail_id_to_posts', 15),
	(28, '2022_04_19_051947_add_title_to_media', 16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `id_city` bigint(20) unsigned NOT NULL,
  `id_cat` bigint(20) unsigned NOT NULL,
  `id_meta` bigint(20) unsigned NOT NULL,
  `id_analytics` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumbnail_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_id_city_foreign` (`id_city`),
  KEY `posts_id_cat_foreign` (`id_cat`),
  KEY `posts_id_meta_foreign` (`id_meta`),
  KEY `posts_id_analytics_foreign` (`id_analytics`),
  KEY `posts_thumbnail_id_foreign` (`thumbnail_id`),
  CONSTRAINT `posts_id_analytics_foreign` FOREIGN KEY (`id_analytics`) REFERENCES `analytics` (`id`),
  CONSTRAINT `posts_id_cat_foreign` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id`),
  CONSTRAINT `posts_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`),
  CONSTRAINT `posts_id_meta_foreign` FOREIGN KEY (`id_meta`) REFERENCES `metadata` (`id`),
  CONSTRAINT `posts_thumbnail_id_foreign` FOREIGN KEY (`thumbnail_id`) REFERENCES `media` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`id`, `name`, `summary`, `description`, `id_city`, `id_cat`, `id_meta`, `id_analytics`, `created_at`, `updated_at`, `thumbnail_id`) VALUES
	(1, 'Mansorah', 'Summary goes here', 'Full description goes here', 1, 1, 3, 1, '2022-04-11 09:06:08', '2022-04-12 10:29:31', 6),
	(2, 'Ain Fezza', 'a summary', 'a description', 1, 4, 4, 2, '2022-04-12 08:45:12', '2022-04-14 07:36:23', NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table laravel.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manage_users` tinyint(1) NOT NULL,
  `add_city` tinyint(1) NOT NULL,
  `add_posts` tinyint(1) NOT NULL,
  `edit_posts` tinyint(1) NOT NULL,
  `delete_posts` tinyint(1) NOT NULL,
  `add_category` tinyint(1) NOT NULL,
  `delete_category` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `role_name`, `manage_users`, `add_city`, `add_posts`, `edit_posts`, `delete_posts`, `add_category`, `delete_category`) VALUES
	(1, 'superadmin', 1, 1, 1, 1, 1, 1, 1),
	(999, 'registred', 0, 0, 0, 0, 0, 0, 0);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` bigint(20) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_foreign` (`role`),
  CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
	(1, 'Admin Admin', 'admin@argon.com', '2022-04-06 08:31:12', '$2y$10$cu3RYle8Fi704KDfgNSb.eiOJBBdT5RZIaAkvc/q.CKVY2HTC/.ZW', 'LtIXV3sx2x8gYyBL1LmFQ6ddbviSspNrD7G81JGVFhPYkJ5T2rHiJLPFiyyp', '2022-04-06 08:31:12', '2022-04-06 08:31:12', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
