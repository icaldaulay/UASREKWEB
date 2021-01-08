-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for yourcake
CREATE DATABASE IF NOT EXISTS `yourcake` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `yourcake`;

-- Dumping structure for table yourcake.auth_activation_attempts
CREATE TABLE IF NOT EXISTS `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_activation_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `auth_activation_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_activation_attempts` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_groups
CREATE TABLE IF NOT EXISTS `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `auth_groups` DISABLE KEYS */;
REPLACE INTO `auth_groups` (`id`, `name`, `description`) VALUES
	(3, 'admin', 'admin'),
	(4, 'user', 'user');
/*!40000 ALTER TABLE `auth_groups` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_groups_permissions
CREATE TABLE IF NOT EXISTS `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_groups_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `auth_groups_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_groups_permissions` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_groups_users
CREATE TABLE IF NOT EXISTS `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_groups_users: ~3 rows (approximately)
/*!40000 ALTER TABLE `auth_groups_users` DISABLE KEYS */;
REPLACE INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
	(3, 1),
	(4, 6),
	(4, 8);
/*!40000 ALTER TABLE `auth_groups_users` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_logins
CREATE TABLE IF NOT EXISTS `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_logins: ~28 rows (approximately)
/*!40000 ALTER TABLE `auth_logins` DISABLE KEYS */;
REPLACE INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
	(1, '::1', 'icaldaulay@gmail.com', 1, '2021-01-05 04:11:48', 1),
	(2, '::1', 'icaldaulay1@gmail.com', 2, '2021-01-05 08:37:11', 1),
	(3, '::1', 'icaldaulay@gmail.com', 1, '2021-01-05 08:38:09', 1),
	(4, '::1', 'icaldaulay@gmail.com', 1, '2021-01-05 21:55:38', 1),
	(5, '::1', 'icaldaulay@gmail.com', 1, '2021-01-05 22:14:50', 1),
	(6, '::1', 'x@gmail.com', 3, '2021-01-06 23:36:10', 1),
	(7, '::1', 'x@gmail.com', 3, '2021-01-06 23:40:09', 1),
	(8, '::1', 'icaldaulay@gmail.com', 1, '2021-01-06 23:40:31', 1),
	(9, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 06:20:42', 1),
	(10, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 06:32:42', 1),
	(11, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 07:09:39', 1),
	(12, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 07:10:31', 1),
	(13, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 07:26:51', 1),
	(14, '::1', 'kepin', NULL, '2021-01-07 09:16:19', 0),
	(15, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 09:31:34', 1),
	(16, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 09:45:40', 1),
	(17, '::1', 'xx@gmail.com', 5, '2021-01-07 09:49:50', 1),
	(18, '::1', 'cc@gmail.com', 6, '2021-01-07 09:51:51', 1),
	(19, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 10:51:22', 1),
	(20, '::1', 'xx@gmail.com', 5, '2021-01-07 21:14:34', 1),
	(21, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 22:15:33', 1),
	(22, '::1', 'xx@gmail.com', 5, '2021-01-07 22:16:58', 1),
	(23, '::1', 'a@gmail.com', 7, '2021-01-07 23:54:18', 1),
	(24, '::1', 'icaldaulay@gmail.com', 1, '2021-01-07 23:55:58', 1),
	(25, '::1', 'xx@gmail.com', 8, '2021-01-08 00:04:36', 1),
	(26, '::1', 'xx@gmail.com', 8, '2021-01-08 00:07:57', 1),
	(27, '::1', 'icaldaulay@gmail.com', 1, '2021-01-08 00:08:54', 1),
	(28, '::1', 'icaldaulay@gmail.com', 1, '2021-01-08 00:17:00', 1);
/*!40000 ALTER TABLE `auth_logins` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_permissions
CREATE TABLE IF NOT EXISTS `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `auth_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_permissions` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_reset_attempts
CREATE TABLE IF NOT EXISTS `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_reset_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `auth_reset_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_reset_attempts` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_tokens
CREATE TABLE IF NOT EXISTS `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `auth_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_tokens` ENABLE KEYS */;

-- Dumping structure for table yourcake.auth_users_permissions
CREATE TABLE IF NOT EXISTS `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.auth_users_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `auth_users_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_users_permissions` ENABLE KEYS */;

-- Dumping structure for table yourcake.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1609840214, 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table yourcake.produk
CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `ket` varchar(2555) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table yourcake.produk: ~4 rows (approximately)
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
REPLACE INTO `produk` (`id_produk`, `nama_produk`, `harga`, `ket`, `gambar`) VALUES
	(1, 'Cup Cake', '15000', 'Cupcake adalah kue kecil yang dirancang untuk melayani satu orang, yang dapat dipanggang dalam kertas tipis atau cangkir aluminium.', 'cupcake.jpg'),
	(2, 'Brownis', '35000', 'Brownies merupakan sebuah makanan yang dipanggang atau dikukus yang berbentuk persegi', 'Brownis.jpg'),
	(3, 'Wedding Cake', '50000', 'Kue pernikahan adalah kue tradisional yang disajikan di resepsi pernikahan setelah makan malam. Kehadiran kue pernikahan saat pesta bukanlah sebagai penghias pesta saja, tetapi juga sebagai simbol.', 'images.jpg'),
	(13, 'kue ulang tahun', '40000', 'Kue ulang tahun biasanya dihiasi dengan nama seseorang dan membawa pesan selamat. ', 'ultah.jpg');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table yourcake.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `status` enum('lunas','belum lunas') NOT NULL DEFAULT 'belum lunas',
  `qty` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table yourcake.transaksi: ~2 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
REPLACE INTO `transaksi` (`id_transaksi`, `username`, `id_produk`, `nama_produk`, `biaya`, `status`, `qty`, `created_at`, `updated_at`) VALUES
	(13, 'kepinkepin', 3, NULL, 250000, 'lunas', 5, '2021-01-07 22:38:52', '2021-01-07 22:38:52'),
	(14, 'kepinkepin', 1, NULL, 45000, 'belum lunas', 3, '2021-01-07 23:55:21', '2021-01-07 23:55:21'),
	(15, 'kepinkepin', 2, NULL, 140000, 'belum lunas', 4, '2021-01-08 00:05:43', '2021-01-08 00:05:43');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for table yourcake.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table yourcake.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'icaldaulay@gmail.com', 'icaldaulay', '$2y$10$VRfh7ut9YzUruQVythjHEuJdx.PehObUtF6YwOzQecCkAoDQIb8fS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-05 04:11:30', '2021-01-05 04:11:30', NULL),
	(6, 'cc@gmail.com', 'rulyruly', '$2y$10$.wthrRbrWtQw10UjVOEnROK9.tMU07N/8P.J3uwZ5rPJCSZv4iFOG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-07 09:51:40', '2021-01-07 09:51:40', NULL),
	(8, 'xx@gmail.com', 'kepinkepin', '$2y$10$YVQZCQ63qKiVRSEvFm2QYOL21KHYrhxkAqAiv7/GOqNgDc/5kWKT2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-08 00:04:27', '2021-01-08 00:04:27', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
