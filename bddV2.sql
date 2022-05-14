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
DROP TABLE IF EXISTS `analytics`;
CREATE TABLE IF NOT EXISTS `analytics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `search_count` int(11) NOT NULL DEFAULT '0',
  `visit_count` int(11) NOT NULL DEFAULT '0',
  `like_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.analytics: ~3 rows (approximately)
/*!40000 ALTER TABLE `analytics` DISABLE KEYS */;
REPLACE INTO `analytics` (`id`, `search_count`, `visit_count`, `like_count`, `created_at`, `updated_at`) VALUES
	(1, 0, 0, 0, '2022-04-11 09:06:08', '2022-04-11 09:06:08'),
	(2, 0, 0, 0, '2022-04-12 08:45:12', '2022-04-12 08:45:12'),
	(3, 0, 0, 0, '2022-05-09 15:53:25', '2022-05-09 15:53:25'),
	(4, 0, 0, 0, '2022-05-11 10:14:44', '2022-05-11 10:14:44');
/*!40000 ALTER TABLE `analytics` ENABLE KEYS */;

-- Dumping structure for table laravel.categories
DROP TABLE IF EXISTS `categories`;
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
DROP TABLE IF EXISTS `cities`;
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
DROP TABLE IF EXISTS `failed_jobs`;
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

-- Dumping structure for table laravel.frontprefs
DROP TABLE IF EXISTS `frontprefs`;
CREATE TABLE IF NOT EXISTS `frontprefs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo_uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caroussel_show` tinyint(1) DEFAULT NULL,
  `slide_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twit_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.frontprefs: ~1 rows (approximately)
/*!40000 ALTER TABLE `frontprefs` DISABLE KEYS */;
REPLACE INTO `frontprefs` (`id`, `created_at`, `updated_at`, `logo_uri`, `app_link`, `adress`, `phone`, `emil`, `caroussel_show`, `slide_1`, `slide_2`, `slide_3`, `fb_link`, `twit_link`, `insta_link`) VALUES
	(1, '2000-01-01 01:01:01', '2022-05-11 11:57:33', 'front/1652270253logo-default-450x37.png', 'http://www.google.com/', 'tests adress', 'test phone', 'test email', 1, 'Explore Algeria now', 'Enjoy your vacation', 'Discover new places', NULL, NULL, NULL);
/*!40000 ALTER TABLE `frontprefs` ENABLE KEYS */;

-- Dumping structure for table laravel.hotels
DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_type` json DEFAULT NULL,
  `id_meta` bigint(20) unsigned DEFAULT NULL,
  `id_analytics` bigint(20) unsigned DEFAULT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hotels_id_city_foreign` (`id_city`),
  KEY `hotels_id_meta_foreign` (`id_meta`),
  KEY `hotels_id_analytics_foreign` (`id_analytics`),
  CONSTRAINT `hotels_id_analytics_foreign` FOREIGN KEY (`id_analytics`) REFERENCES `analytics` (`id`),
  CONSTRAINT `hotels_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`),
  CONSTRAINT `hotels_id_meta_foreign` FOREIGN KEY (`id_meta`) REFERENCES `metadata` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.hotels: ~0 rows (approximately)
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;

-- Dumping structure for table laravel.media
DROP TABLE IF EXISTS `media`;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.media: ~7 rows (approximately)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
REPLACE INTO `media` (`id`, `mime_type`, `uri`, `id_post`, `created_at`, `updated_at`, `filename`, `title`) VALUES
	(11, 'image/jpeg', 'media/1652111665_fort-santa-cruz.jpg', 3, '2022-05-09 15:54:25', '2022-05-09 15:54:25', 'fort-santa-cruz.jpg', NULL),
	(12, 'image/jpeg', 'media/1652111675_notre_dame_de_santa_cruz.jpg', 3, '2022-05-09 15:54:35', '2022-05-09 15:54:35', 'Notre_Dame_de_Santa_Cruz.jpg', NULL),
	(13, 'video/mp4', 'media/1652172200_el-mansourah-tlemcen-lmnswr.mp4', 1, '2022-05-10 08:43:20', '2022-05-10 08:43:20', 'el-mansourah-tlemcen-lmnswr.mp4', NULL),
	(14, 'image/jpeg', 'media/1652172348_fichier_produit_21.jpg', 1, '2022-05-10 08:45:48', '2022-05-11 09:53:10', 'fichier_produit_21.jpg', 'Tour de mansorah'),
	(15, 'image/jpeg', 'media/1652172363_fichier_produit_329.jpg', 1, '2022-05-10 08:46:03', '2022-05-10 08:46:03', 'fichier_produit_329.jpg', NULL),
	(16, 'image/jpeg', 'media/1652173646_les-grottes-de-beni-add.jpg', 2, '2022-05-10 09:07:26', '2022-05-10 09:07:26', 'les-grottes-de-beni-add.jpg', NULL),
	(17, 'image/jpeg', 'media/1652173662_44856476675_4aaab4c067_b.jpg', 2, '2022-05-10 09:07:43', '2022-05-10 09:07:43', '44856476675_4aaab4c067_b.jpg', NULL),
	(18, 'image/jpeg', 'media/1652264183_zoo_2.jpg', 4, '2022-05-11 10:16:23', '2022-05-11 10:16:32', 'zoo 2.jpg', 'Vue d\'interieur'),
	(19, 'image/jpeg', 'media/1652264200_zoo1.jpg', 4, '2022-05-11 10:16:40', '2022-05-11 10:16:47', 'zoo1.jpg', 'Vue d\'exterieur');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Dumping structure for table laravel.metadata
DROP TABLE IF EXISTS `metadata`;
CREATE TABLE IF NOT EXISTS `metadata` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.metadata: ~5 rows (approximately)
/*!40000 ALTER TABLE `metadata` DISABLE KEYS */;
REPLACE INTO `metadata` (`id`, `long`, `lat`, `price`, `time`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL, NULL, '2022-04-11 09:00:37', '2022-04-11 09:00:37'),
	(2, NULL, NULL, NULL, NULL, '2022-04-11 09:05:23', '2022-04-11 09:05:23'),
	(3, '11.22\'33\'\'', '44.55\'66\'\'', 200, 15, '2022-04-11 09:06:08', '2022-04-12 10:30:57'),
	(4, '11.22\'33\'\'', '44.55\'66\'\'', 200, 15, '2022-04-12 08:45:12', '2022-04-14 07:36:23'),
	(5, NULL, NULL, 0, 30, '2022-05-09 15:53:25', '2022-05-11 10:21:01'),
	(6, NULL, NULL, NULL, NULL, '2022-05-11 10:14:44', '2022-05-11 10:14:44');
/*!40000 ALTER TABLE `metadata` ENABLE KEYS */;

-- Dumping structure for table laravel.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~34 rows (approximately)
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
	(28, '2022_04_19_051947_add_title_to_media', 16),
	(29, '2022_05_08_115330_create_frontprefs_table', 17),
	(30, '2022_05_08_120604_create_taxis_table', 17),
	(31, '2022_05_08_120621_create_hotels_table', 17),
	(32, '2022_05_08_120659_create_restaurants_table', 17),
	(33, '2022_05_08_132840_create_tourist_guides_table', 18),
	(34, '2022_05_08_150330_add_fields_to_frontprefs', 19),
	(35, '2022_05_09_135535_add_social_to_frontprefs', 19),
	(36, '2022_05_11_111121_change_fields_in_frontprefs', 20);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel.password_resets
DROP TABLE IF EXISTS `password_resets`;
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
DROP TABLE IF EXISTS `personal_access_tokens`;
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
DROP TABLE IF EXISTS `posts`;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.posts: ~3 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`id`, `name`, `summary`, `description`, `id_city`, `id_cat`, `id_meta`, `id_analytics`, `created_at`, `updated_at`, `thumbnail_id`) VALUES
	(1, 'Mansorah', 'Summary goes here', 'Mansourah Mosque is a ruined historic mosque in the city of Mansourah, Algeria, dates back to the Marinid dynasty. It consists of a part of the Mansourah Castle. The excavation has revealed regarding the design of the mosque that it was built by the Sultan Abu Yakub in 1303, and the decoration of the main gate was done by Abu al-Hassan in 1336. Inside the yard there are 13 doors which surrounded by the wall, and a sahn with a fountain in the middle. The sahn is surrounded by three corridors, of which employ similar tilework with the prayer hall. The prayer hall is connected directly to the sahn and contains tilework similar to the qibla wall, the design which can be observed as well on the 13th-century Baybars Mosque in Samarra.The main entrance to the mosque leads to the iconic minaret as well, which is square-shaped, inspired by the minarets built by the Almohads in North Africa and Iberia, and reaches 38 meters.', 1, 1, 3, 1, '2022-04-11 09:06:08', '2022-05-10 09:05:29', 14),
	(2, 'Ain Fezza', 'The caves of Beni-Add, at an altitude of 1,143 m, are located in Aïn Fezza, between La moricière and Tlemcen', 'The caves of Beni-Add, at an altitude of 1,143 m, are located in Aïn Fezza, between La moricière and Tlemcen. Legend has it that the inhabitants, impressed by these huge caves, refused to enter them and had made them the homes of the "Djinns", demons or evil beings. They are reputed to be the “pearl of the Maghreb”.', 1, 4, 4, 2, '2022-04-12 08:45:12', '2022-05-10 09:07:29', 16),
	(3, 'Santa cruze', 'The Santa Cruz Chapel was built by the Bishop of Oran at the place where he had carried the statue of the Virgin Mary in a procession, followed by the people of the city, to the Oran hill.', 'The Santa Cruz Chapel was built by the Bishop of Oran at the place where he had carried the statue of the Virgin Mary in a procession, followed by the people of the city, to the Oran hill, when a cholera epidemic had affected the people of Oran, in 1847. They sought blessings from the Virgin Mary to protect the city from the epidemic. The entire population implored the Blessed Virgin to bless the place with rain. After the rain came, the town of Oran and the region were saved from the epidemic of cholera. As a tribute to this miracle, a chapel was built on the hill at the foot of the fort of Santa Cruz. This chapel is named the Santa Cruz Church. It was considered as being the Protector of the town. In commemoration of this event, every year until Algeria became independent in 1962, Ascension Day was observed when the people of Oran and the surrounding areas paid homage to the Virgin Mary by climbing up the mountain trail to the chapel as a pilgrimage', 2, 1, 5, 3, '2022-05-09 15:53:25', '2022-05-11 10:21:01', 11),
	(4, 'Zoo de Mansorah', NULL, 'The small zoo of Hadj aissa situated in mansorah is a pleasent place to visit, discover the wide variety animals of the algerian habitat', 1, 4, 6, 4, '2022-05-11 10:14:44', '2022-05-11 10:16:49', 19);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table laravel.restaurants
DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_meta` bigint(20) unsigned DEFAULT NULL,
  `id_analytics` bigint(20) unsigned DEFAULT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `restaurants_id_city_foreign` (`id_city`),
  KEY `restaurants_id_meta_foreign` (`id_meta`),
  KEY `restaurants_id_analytics_foreign` (`id_analytics`),
  CONSTRAINT `restaurants_id_analytics_foreign` FOREIGN KEY (`id_analytics`) REFERENCES `analytics` (`id`),
  CONSTRAINT `restaurants_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`),
  CONSTRAINT `restaurants_id_meta_foreign` FOREIGN KEY (`id_meta`) REFERENCES `metadata` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.restaurants: ~0 rows (approximately)
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;

-- Dumping structure for table laravel.roles
DROP TABLE IF EXISTS `roles`;
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

-- Dumping structure for table laravel.taxis
DROP TABLE IF EXISTS `taxis`;
CREATE TABLE IF NOT EXISTS `taxis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `soc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taxis_id_city_foreign` (`id_city`),
  CONSTRAINT `taxis_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.taxis: ~0 rows (approximately)
/*!40000 ALTER TABLE `taxis` DISABLE KEYS */;
/*!40000 ALTER TABLE `taxis` ENABLE KEYS */;

-- Dumping structure for table laravel.tourist_guides
DROP TABLE IF EXISTS `tourist_guides`;
CREATE TABLE IF NOT EXISTS `tourist_guides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_city` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tourist_guides_id_city_foreign` (`id_city`),
  CONSTRAINT `tourist_guides_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.tourist_guides: ~0 rows (approximately)
/*!40000 ALTER TABLE `tourist_guides` DISABLE KEYS */;
/*!40000 ALTER TABLE `tourist_guides` ENABLE KEYS */;

-- Dumping structure for table laravel.users
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
  `role` bigint(20) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_foreign` (`role`),
  CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
	(1, 'Admin Admin', 'admin@argon.com', '2022-04-06 08:31:12', '$2y$10$cu3RYle8Fi704KDfgNSb.eiOJBBdT5RZIaAkvc/q.CKVY2HTC/.ZW', 'uLHp2UF295EphYecw3c94x8i60prsUtGZRumUZVQty15YrBAGH1Q00Jh3CVn', '2022-04-06 08:31:12', '2022-04-06 08:31:12', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
