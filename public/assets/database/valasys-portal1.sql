-- Adminer 4.8.1 MySQL 10.4.28-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `img_src` varchar(200) NOT NULL,
  `img_dimensions` varchar(50) DEFAULT NULL,
  `img_extensions` varchar(50) DEFAULT NULL,
  `img_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `img_descp` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `banners` (`id`, `name`, `img_src`, `img_dimensions`, `img_extensions`, `img_status`, `img_descp`, `created_at`, `updated_at`) VALUES
(1,	'graphic_design',	'graphic_design/wp10238276.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-13 16:45:18',	NULL),
(2,	'graphic_design',	'graphic_design/wallpaper1.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-13 16:45:50',	NULL),
(3,	'graphic_design',	'graphic_design/wallpaper2.jpg	',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(4,	'graphic_design',	'graphic_design/wallpaper3.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(5,	'graphic_design',	'graphic_design/wallpaper4.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(6,	'graphic_design',	'graphic_design/wallpaper8.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(7,	'graphic_design',	'graphic_design/wallpaper6.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(8,	'graphic_design',	'graphic_design/wallpaper5.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(9,	'graphic_design',	'graphic_design/wallpaper7.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `client_descp` text DEFAULT NULL,
  `client_img_id` varchar(50) DEFAULT NULL,
  `client_location` text DEFAULT NULL,
  `client_email` varchar(150) DEFAULT NULL,
  `client_contact` varchar(100) DEFAULT NULL,
  `client_requirement` text DEFAULT NULL,
  `client_requirement_img` varchar(50) DEFAULT NULL,
  `client_solution` text DEFAULT NULL,
  `client_solution_img` varchar(50) DEFAULT NULL,
  `client_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `home_banners`;
CREATE TABLE `home_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `home_banners` (`id`, `categories`, `image_src`, `title`, `descriptions`, `status`, `created_at`, `update_at`) VALUES
(1,	'graphic_design',	'abc.png',	'sample1',	'this is first sample. ',	'Inactive',	'2023-06-10 00:13:40',	'2023-06-10 00:13:40'),
(2,	'all',	'all/blog-3.jpg',	'sample1',	'this is first sample. ',	'Active',	'2023-06-10 00:20:30',	'0000-00-00 00:00:00'),
(3,	'all',	'all/blog-5.jpg',	'sample2',	'this is first sample2. ',	'Active',	'2023-06-10 00:21:00',	'0000-00-00 00:00:00'),
(4,	'all',	'all/blog-4.jpg',	'sample3',	'this is first sample3',	'Active',	'2023-06-10 00:21:41',	'0000-00-00 00:00:00'),
(5,	'all',	'all/blog-6.jpg',	'sample4',	'this is first sample4',	'Active',	'2023-06-10 00:22:13',	'0000-00-00 00:00:00'),
(6,	'all',	'all/blog-d2-1.jpg',	'sample5',	'this is first sample5',	'Active',	'2023-06-10 00:22:47',	'0000-00-00 00:00:00'),
(7,	'all',	'all/blog-3.jpg',	'sample6',	'this is first sample6',	'Active',	'2023-06-10 00:23:13',	'0000-00-00 00:00:00'),
(8,	'all',	'all/blog-01.jpg',	'sample7',	'this is first sample7',	'Active',	'2023-06-10 00:23:44',	'0000-00-00 00:00:00'),
(9,	'all',	'all/blog-02.jpg',	'sample8',	'this is first sample8',	'Active',	'2023-06-10 00:24:13',	'0000-00-00 00:00:00'),
(10,	'graphic_design',	'graphic_design/wp10238276.jpg',	'sample1',	'this is first sample.',	'Active',	'2023-06-12 21:02:46',	'0000-00-00 00:00:00'),
(11,	'graphic_design',	'graphic_design/wallpaper1.jpg',	'sample2',	'this is first sample2. ',	'Active',	'2023-06-12 21:04:48',	'0000-00-00 00:00:00'),
(12,	'graphic_design',	'graphic_design/wallpaper2.jpg',	'sample3',	'this is first sample3',	'Active',	'2023-06-12 21:07:14',	'0000-00-00 00:00:00'),
(13,	'graphic_design',	'graphic_design/wallpaper3.jpg',	'sample4',	'this is first sample4',	'Active',	'2023-06-12 21:08:28',	'0000-00-00 00:00:00'),
(14,	'graphic_design',	'graphic_design/wallpaper4.jpg',	'sample5',	'this is first sample5',	'Active',	'2023-06-12 21:10:09',	'0000-00-00 00:00:00'),
(15,	'graphic_design',	'graphic_design/wallpaper8.jpg',	'sample6',	'this is first sample6',	'Active',	'2023-06-12 21:10:48',	'0000-00-00 00:00:00'),
(16,	'graphic_design',	'graphic_design/wallpaper6.jpg',	'sample7',	'this is first sample7',	'Active',	'2023-06-12 21:16:27',	'0000-00-00 00:00:00'),
(17,	'graphic_design',	'graphic_design/wallpaper5.jpg',	'sample8',	'this is first sample8',	'Active',	'2023-06-12 21:17:24',	'0000-00-00 00:00:00'),
(18,	'graphic_design',	'graphic_design/wallpaper7.jpg',	'sample7',	'this is first sample7',	'Active',	'2023-06-12 21:17:58',	'0000-00-00 00:00:00'),
(19,	'social_media',	'social_media/social_media.jpg',	'sample1',	'this is first sample. ',	'Active',	'2023-06-12 21:59:06',	'0000-00-00 00:00:00'),
(20,	'social_media',	'social_media/social_media1.jpg',	'sample2',	'this is first sample2. ',	'Active',	'2023-06-12 21:59:34',	'0000-00-00 00:00:00'),
(21,	'social_media',	'social_media/social_media2.jpg',	'sample3',	'this is first sample3',	'Active',	'2023-06-12 21:59:51',	'0000-00-00 00:00:00'),
(22,	'social_media',	'social_media/social_media3.jpg',	'sample4',	'this is first sample4',	'Active',	'2023-06-12 22:00:38',	'0000-00-00 00:00:00'),
(23,	'social_media',	'social_media/social_media4.jpg',	'sample5',	'this is first sample5',	'Active',	'2023-06-12 22:01:19',	'0000-00-00 00:00:00'),
(24,	'social_media',	'social_media/social_media5.jpg',	'sample6',	'this is first sample6. ',	'Active',	'2023-06-12 22:01:59',	'0000-00-00 00:00:00'),
(25,	'social_media',	'social_media/social_media6.jpg',	'sample7',	'this is first sample7',	'Active',	'2023-06-12 22:02:20',	'0000-00-00 00:00:00'),
(26,	'social_media',	'social_media/social_media7.jpg',	'sample8',	'this is first sample8. ',	'Active',	'2023-06-12 22:03:02',	'0000-00-00 00:00:00'),
(27,	'social_media',	'social_media/social_media8.jpg',	'sample9',	'this is first sample9. ',	'Active',	'2023-06-12 22:03:32',	'0000-00-00 00:00:00'),
(28,	'branding',	'branding/branding.jpg',	'sample',	'this is first sample. ',	'Active',	'2023-06-12 23:14:15',	'0000-00-00 00:00:00'),
(29,	'branding',	'branding/branding1.jpg',	'sample1',	'this is first sample1. ',	'Active',	'2023-06-12 23:14:36',	'0000-00-00 00:00:00'),
(30,	'branding',	'branding/branding2.jpg',	'sample2',	'this is first sample2. ',	'Active',	'2023-06-12 23:16:25',	'0000-00-00 00:00:00'),
(31,	'branding',	'branding/branding3.jpg',	'sample3',	'this is first sample3',	'Active',	'2023-06-12 23:17:51',	'0000-00-00 00:00:00'),
(32,	'branding',	'branding/branding4.jpg',	'sample4',	'this is first sample4',	'Active',	'2023-06-12 23:18:11',	'0000-00-00 00:00:00'),
(33,	'branding',	'branding/branding5.jpg',	'sample5',	'this is first sample5',	'Active',	'2023-06-12 23:19:03',	'0000-00-00 00:00:00'),
(34,	'branding',	'branding/branding6.jpg',	'sample6',	'this is first sample6',	'Active',	'2023-06-12 23:20:36',	'0000-00-00 00:00:00'),
(35,	'branding',	'branding/branding7.jpg',	'sample7',	'this is first sample7',	'Active',	'2023-06-12 23:20:57',	'0000-00-00 00:00:00'),
(36,	'branding',	'branding/branding8.jpg',	'sample8',	'this is first sample8',	'Active',	'2023-06-12 23:21:15',	'0000-00-00 00:00:00'),
(37,	'website',	'website/website.jpg',	'sample',	'this is first sample. ',	'Active',	'2023-06-12 23:32:00',	'0000-00-00 00:00:00'),
(38,	'website',	'website/website2.jpg',	'sample1',	'this is first sample1',	'Active',	'2023-06-12 23:32:25',	'0000-00-00 00:00:00'),
(39,	'website',	'website/website1.jpg',	'sample2',	'this is first sample2. ',	'Active',	'2023-06-12 23:32:38',	'0000-00-00 00:00:00'),
(40,	'website',	'website/website3.jpg',	'sample3',	'this is first sample3',	'Active',	'2023-06-12 23:33:10',	'0000-00-00 00:00:00'),
(41,	'website',	'website/website4.jpg',	'sample4',	'this is first sample4',	'Active',	'2023-06-12 23:33:26',	'0000-00-00 00:00:00'),
(42,	'website',	'website/website5.jpg',	'sample5',	'this is first sample5',	'Active',	'2023-06-12 23:33:44',	'0000-00-00 00:00:00'),
(43,	'website',	'website/website6.jpg',	'sample6',	'this is first sample6',	'Active',	'2023-06-12 23:34:05',	'0000-00-00 00:00:00'),
(44,	'website',	'website/website7.jpg',	'sample7',	'this is first sample7',	'Active',	'2023-06-12 23:34:22',	'0000-00-00 00:00:00'),
(45,	'website',	'website/website8.jpg',	'sample8',	'this is first sample8',	'Active',	'2023-06-12 23:34:39',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(57,	'2014_10_12_000000_create_users_table',	1),
(58,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(59,	'2019_08_19_000000_create_failed_jobs_table',	1),
(60,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(61,	'2023_06_13_143435_create_banners_table',	1),
(62,	'2023_06_13_143458_create_projects_table',	1),
(63,	'2023_06_13_143520_create_services_table',	1),
(64,	'2023_06_13_143531_create_clients_table',	1);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `pro_descp` text DEFAULT NULL,
  `pro_img_id` varchar(50) DEFAULT NULL,
  `client_id` varchar(50) DEFAULT NULL,
  `pro_start` date DEFAULT NULL,
  `pro_end` date DEFAULT NULL,
  `pro_status` enum('Active','Completed','Pending') NOT NULL DEFAULT 'Active',
  `pro_cost` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `service_descp` text DEFAULT NULL,
  `service_total_emp` int(11) DEFAULT NULL,
  `service_img_id` varchar(50) DEFAULT NULL,
  `project_id` varchar(50) DEFAULT NULL,
  `service_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `services` (`id`, `name`, `service_descp`, `service_total_emp`, `service_img_id`, `project_id`, `service_status`, `created_at`, `updated_at`) VALUES
(1,	'Graphic Design',	'Graphic design is a creative discipline that involves the creation and manipulation of visual elements to communicate messages, convey information, and solve problems visually. It encompasses a wide range of mediums, including digital and print media, such as websites, logos, advertisements, packaging, posters, brochures, and more.\r\n\r\nThe primary goal of graphic design is to visually communicate a specific message or idea to a target audience. It requires a combination of artistic skills, creativity, and technical knowledge to effectively convey information and evoke desired emotions through visual means.',	25,	'1,2,3,4,5,6,7,8,9',	NULL,	'Active',	'2023-06-13 16:43:53',	NULL),
(2,	'Website',	'Graphic design is a creative discipline that involves the creation and manipulation of visual elements to communicate messages, convey information, and solve problems visually. It encompasses a wide range of mediums, including digital and print media, such as websites, logos, advertisements, packaging, posters, brochures, and more.\r\n\r\nThe primary goal of graphic design is to visually communicate a specific message or idea to a target audience. It requires a combination of artistic skills, creativity, and technical knowledge to effectively convey information and evoke desired emotions through visual means.',	25,	'4,5,6',	NULL,	'Active',	'2023-06-13 16:43:53',	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-06-13 19:14:41
