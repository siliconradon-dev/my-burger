-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.33 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table my_burger.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.cache: ~2 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel-cache-88c5db3e692d929d7dc1e8a96fd4dd8c', 'i:1;', 1767948576),
	('laravel-cache-88c5db3e692d929d7dc1e8a96fd4dd8c:timer', 'i:1767948575;', 1767948575);

-- Dumping structure for table my_burger.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.cache_locks: ~0 rows (approximately)

-- Dumping structure for table my_burger.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_product_id_foreign` (`product_id`),
  CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.carts: ~4 rows (approximately)
INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
	(2, 2, 2, 1, '2026-01-08 10:08:47', '2026-01-09 02:16:56'),
	(3, 2, 20, 2, '2026-01-08 23:41:17', '2026-01-09 02:23:46'),
	(4, 2, 1, 1, '2026-01-09 01:06:57', '2026-01-09 01:09:19'),
	(5, 2, 3, 6, '2026-01-09 01:12:25', '2026-01-09 01:30:26');

-- Dumping structure for table my_burger.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.categories: ~8 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Burgers', 'burgers', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(2, 'Submarines', 'submarines', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(3, 'Rice & Biriyani', 'rice-biriyani', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(4, 'Indian Corner', 'indian-corner', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(5, 'Beverages', 'beverages', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(6, 'Desserts', 'desserts', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(7, 'Starters', 'starters', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33'),
	(8, 'Kottu', 'kottu', 1, '2026-01-08 06:18:33', '2026-01-08 06:18:33');

-- Dumping structure for table my_burger.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table my_burger.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.jobs: ~0 rows (approximately)

-- Dumping structure for table my_burger.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.job_batches: ~0 rows (approximately)

-- Dumping structure for table my_burger.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.migrations: ~12 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_01_07_100015_add_phone_to_users_table', 1),
	(5, '2026_01_07_110106_add_two_factor_columns_to_users_table', 1),
	(6, '2026_01_07_110206_create_personal_access_tokens_table', 1),
	(7, '2026_01_08_111528_create_products_table', 1),
	(8, '2026_01_08_113543_create_categories_table', 1),
	(9, '2026_01_08_113601_modify_products_table_remove_stock_add_category_id', 1),
	(10, '2026_01_08_144256_create_carts_table', 2),
	(11, '2026_01_08_151635_create_orders_table', 3),
	(12, '2026_01_08_151647_create_order_items_table', 3);

-- Dumping structure for table my_burger.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cod',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.orders: ~0 rows (approximately)
INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `postcode`, `notes`, `status`, `total_amount`, `payment_method`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Saveen', 'Kudagama', 'saveenkudagama2002@gmail.com', '+94766088374', 'sriyani,vidyachandra mawatha,ahangama', 'Ahangama', '80650', NULL, 'processing', 780.00, 'cod', '2026-01-08 09:51:56', '2026-01-09 02:32:24');

-- Dumping structure for table my_burger.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.order_items: ~0 rows (approximately)
INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 780.00, '2026-01-08 09:51:56', '2026-01-08 09:51:56');

-- Dumping structure for table my_burger.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table my_burger.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  KEY `personal_access_tokens_expires_at_index` (`expires_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table my_burger.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','draft','out_of_stock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.products: ~22 rows (approximately)
INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
	(1, 'Vegetable Burger', 780.00, 'Delicious vegetable burger from our kitchen.', 'assets/img/dishes/veggie.png', 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 1),
	(2, 'Chicken Burger', 980.00, 'Delicious chicken burger from our kitchen.', 'assets/img/dishes/crispy_chicken.png', 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 1),
	(3, 'Beef Burger', 1380.00, 'Delicious beef burger from our kitchen.', 'assets/img/dishes/classic_beef.png', 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 1),
	(4, 'Crispy Fish Burger', 1380.00, 'Delicious crispy fish burger from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 1),
	(5, 'My Burger Special', 1420.00, 'Delicious my burger special from our kitchen.', 'assets/img/dishes/bacon_cheese.png', 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 1),
	(6, 'Vegetable Submarine', 920.00, 'Delicious vegetable submarine from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 2),
	(7, 'Chicken Submarine', 1260.00, 'Delicious chicken submarine from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 2),
	(8, 'Beef Submarine', 1430.00, 'Delicious beef submarine from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 2),
	(9, 'Tuna Submarine', 1660.00, 'Delicious tuna submarine from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 2),
	(10, 'Chicken Fried Rice', 1120.00, 'Delicious chicken fried rice from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 3),
	(11, 'Chicken Dum Biriyani', 1580.00, 'Delicious chicken dum biriyani from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 3),
	(12, 'Nasi Goreng', 1550.00, 'Delicious nasi goreng from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 3),
	(13, 'Mixed Fried Rice', 1440.00, 'Delicious mixed fried rice from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 3),
	(14, 'Butter Naan', 290.00, 'Delicious butter naan from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 4),
	(15, 'Chicken Tikka Masala', 1590.00, 'Delicious chicken tikka masala from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 4),
	(16, 'Paneer Butter Masala', 1380.00, 'Delicious paneer butter masala from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 4),
	(17, 'Tandoori Chicken (Half)', 1650.00, 'Delicious tandoori chicken (half) from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 4),
	(18, 'Lime Juice', 550.00, 'Delicious lime juice from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 5),
	(19, 'Blue Lagoon Mojito', 780.00, 'Delicious blue lagoon mojito from our kitchen.', NULL, 'active', '2026-01-08 06:18:33', '2026-01-08 06:18:33', 5),
	(20, 'Chocolate Milkshake', 690.00, 'Delicious chocolate milkshake from our kitchen.', NULL, 'active', '2026-01-08 06:18:34', '2026-01-08 06:18:34', 5),
	(21, 'Iced Coffee', 680.00, 'Delicious iced coffee from our kitchen.', NULL, 'active', '2026-01-08 06:18:34', '2026-01-08 06:18:34', 5),
	(22, 'Cocacola', 240.00, NULL, '/storage/products/4AY3LPfr7reuRrJLHPwK6r6sfZbo8NmOxmV60NUG.webp', 'active', '2026-01-09 02:33:23', '2026-01-09 02:33:23', 5);

-- Dumping structure for table my_burger.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.sessions: ~4 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('JkjYz77g2e4W8t79qWXyYN6vO3pnqQoUNk4nXDit', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQlpqWjA5cDE1YjNHaFhJd2JLdXh3VUI4SHA2dXFnN3VXd1dPcW51SSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9vcmRlcnMiO3M6NToicm91dGUiO3M6MTI6Im9yZGVycy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjMwOntpOjA7czoxODoiYWxlcnQuY29uZmlnLnRpdGxlIjtpOjE7czoxNzoiYWxlcnQuY29uZmlnLnRleHQiO2k6MjtzOjE4OiJhbGVydC5jb25maWcudGltZXIiO2k6MztzOjIzOiJhbGVydC5jb25maWcuYmFja2dyb3VuZCI7aTo0O3M6MTg6ImFsZXJ0LmNvbmZpZy53aWR0aCI7aTo1O3M6MjM6ImFsZXJ0LmNvbmZpZy5oZWlnaHRBdXRvIjtpOjY7czoyMDoiYWxlcnQuY29uZmlnLnBhZGRpbmciO2k6NztzOjMwOiJhbGVydC5jb25maWcuc2hvd0NvbmZpcm1CdXR0b24iO2k6ODtzOjI4OiJhbGVydC5jb25maWcuc2hvd0Nsb3NlQnV0dG9uIjtpOjk7czozMDoiYWxlcnQuY29uZmlnLmNvbmZpcm1CdXR0b25UZXh0IjtpOjEwO3M6Mjk6ImFsZXJ0LmNvbmZpZy5jYW5jZWxCdXR0b25UZXh0IjtpOjExO3M6Mjk6ImFsZXJ0LmNvbmZpZy50aW1lclByb2dyZXNzQmFyIjtpOjEyO3M6MjQ6ImFsZXJ0LmNvbmZpZy5jdXN0b21DbGFzcyI7aToxMztzOjE3OiJhbGVydC5jb25maWcuaWNvbiI7aToxNDtzOjEyOiJhbGVydC5jb25maWciO2k6MTU7czoxODoiYWxlcnQuY29uZmlnLnRpdGxlIjtpOjE2O3M6MTc6ImFsZXJ0LmNvbmZpZy50ZXh0IjtpOjE3O3M6MTg6ImFsZXJ0LmNvbmZpZy50aW1lciI7aToxODtzOjIzOiJhbGVydC5jb25maWcuYmFja2dyb3VuZCI7aToxOTtzOjE4OiJhbGVydC5jb25maWcud2lkdGgiO2k6MjA7czoyMzoiYWxlcnQuY29uZmlnLmhlaWdodEF1dG8iO2k6MjE7czoyMDoiYWxlcnQuY29uZmlnLnBhZGRpbmciO2k6MjI7czozMDoiYWxlcnQuY29uZmlnLnNob3dDb25maXJtQnV0dG9uIjtpOjIzO3M6Mjg6ImFsZXJ0LmNvbmZpZy5zaG93Q2xvc2VCdXR0b24iO2k6MjQ7czozMDoiYWxlcnQuY29uZmlnLmNvbmZpcm1CdXR0b25UZXh0IjtpOjI1O3M6Mjk6ImFsZXJ0LmNvbmZpZy5jYW5jZWxCdXR0b25UZXh0IjtpOjI2O3M6Mjk6ImFsZXJ0LmNvbmZpZy50aW1lclByb2dyZXNzQmFyIjtpOjI3O3M6MjQ6ImFsZXJ0LmNvbmZpZy5jdXN0b21DbGFzcyI7aToyODtzOjE3OiJhbGVydC5jb25maWcuaWNvbiI7aToyOTtzOjEyOiJhbGVydC5jb25maWciO31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NToiYWxlcnQiO2E6MTp7czo2OiJjb25maWciO3M6NTA0OiJ7InRpdGxlIjoiT3JkZXIgc3RhdHVzIHVwZGF0ZWQgc3VjY2Vzc2Z1bGx5LiIsInRleHQiOm51bGwsInRpbWVyIjo1MDAwLCJiYWNrZ3JvdW5kIjoiI2ZmZiIsIndpZHRoIjoiMzJyZW0iLCJoZWlnaHRBdXRvIjp0cnVlLCJwYWRkaW5nIjoiMS4yNXJlbSIsInNob3dDb25maXJtQnV0dG9uIjp0cnVlLCJzaG93Q2xvc2VCdXR0b24iOmZhbHNlLCJjb25maXJtQnV0dG9uVGV4dCI6Ik9LIiwiY2FuY2VsQnV0dG9uVGV4dCI6IkNhbmNlbCIsInRpbWVyUHJvZ3Jlc3NCYXIiOmZhbHNlLCJjdXN0b21DbGFzcyI6eyJjb250YWluZXIiOm51bGwsInBvcHVwIjpudWxsLCJoZWFkZXIiOm51bGwsInRpdGxlIjpudWxsLCJjbG9zZUJ1dHRvbiI6bnVsbCwiaWNvbiI6bnVsbCwiaW1hZ2UiOm51bGwsImNvbnRlbnQiOm51bGwsImlucHV0IjpudWxsLCJhY3Rpb25zIjpudWxsLCJjb25maXJtQnV0dG9uIjpudWxsLCJjYW5jZWxCdXR0b24iOm51bGwsImZvb3RlciI6bnVsbH0sImljb24iOiJzdWNjZXNzIn0iO319', 1767938824),
	('ks7UTlfclfqjVonDVABcSzM7d3hvPBhWlOc6mUI7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzV2UzVOUnpLUk96MWJJdk9EbEVXWnNBaWdQUUxqYkQxaEx3R21vYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1767948140),
	('y2GzKslDCUM78tQeGjjT50P9gWcOGzkCDeYdBndM', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic2ZiaTV0WlF3SEZYSGNZSzZUWHB5T2xZcFpLVkVmWjNiUDVRMWM4SyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1767953900),
	('ZU8x9UxmSGfP5zCgBI1vuUS2nxxxpBu0OanB1f6L', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidEl1RFM5dGRmY2hkODJYcFRmMVNGRGlKNU5ySVpCVWpaYU9ER3VXTCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZW51IjtzOjU6InJvdXRlIjtzOjE1OiJhZG1pbi5kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NToiYWxlcnQiO2E6MDp7fX0=', 1767947369);

-- Dumping structure for table my_burger.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table my_burger.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'Test User', 'test@example.com', NULL, '2026-01-08 06:18:35', '$2y$12$6z7mSOj3Vj7nbJWFbx9sCOfA3cXl2qzleXzC.15diAH7R1Tyq8Utu', NULL, NULL, NULL, 'P3E11TB4qJ', NULL, NULL, '2026-01-08 06:18:35', '2026-01-08 06:18:35'),
	(2, 'Saveen Kudagama', 'saveenkudagama2002@gmail.com', '0766088374', NULL, '$2y$12$I21uQwOe57tshKesJmK2pOc0A/fJLIthJpnrVqVJWvBfoUrbO6Fpy', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-08 06:20:07', '2026-01-08 06:20:07'),
	(3, 'Super Admin', 'superadmin@gmail.com', '0777123456', '2026-01-09 03:22:56', '$2y$12$ih/WVzHXk/qnCLnITWxVGunR9SpC3L2GL6S8RRP3mLnQWAVwVCGEO', NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-09 03:22:56', '2026-01-09 03:22:56');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
