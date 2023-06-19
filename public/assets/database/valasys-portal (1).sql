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
(9,	'graphic_design',	'graphic_design/wallpaper7.jpg',	NULL,	NULL,	'Active',	NULL,	NULL,	NULL),
(10,	'website',	'website/website.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(11,	'website',	'website/website1.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(12,	'website',	'website/website2.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(13,	'website',	'website/website3.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(14,	'website',	'website/website4.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(15,	'website',	'website/website5.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(16,	'website',	'website/website6.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(17,	'website',	'website/website7.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(18,	'website',	'website/website8.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:32:38',	NULL),
(19,	'social_media',	'social_media/social_media.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(20,	'social_media',	'social_media/social_media1.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(21,	'social_media',	'social_media/social_media2.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(22,	'social_media',	'social_media/social_media3.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(23,	'social_media',	'social_media/social_media4.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(24,	'social_media',	'social_media/social_media5.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(25,	'social_media',	'social_media/social_media6.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(26,	'social_media',	'social_media/social_media7.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(27,	'social_media',	'social_media/social_media8.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(28,	'social_media',	'social_media/social_media9.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:37:47',	NULL),
(29,	'branding',	'branding/branding.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(30,	'branding',	'branding/branding1.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(31,	'branding',	'branding/branding2.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(32,	'branding',	'branding/branding3.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(33,	'branding',	'branding/branding4.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(34,	'branding',	'branding/branding5.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(35,	'branding',	'branding/branding6.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(36,	'branding',	'branding/branding7.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL),
(37,	'branding',	'branding/branding8.jpg',	NULL,	NULL,	'Active',	NULL,	'2023-06-14 17:40:57',	NULL);

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
(64,	'2023_06_13_143531_create_clients_table',	1),
(65,	'2023_06_13_143520_create_services_table',	2);

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
  `name` varchar(255) NOT NULL,
  `anchor_keyword` varchar(255) NOT NULL,
  `pro_logo` varchar(255) DEFAULT NULL,
  `pro_small_descp` text DEFAULT NULL,
  `pro_brief_descp` text DEFAULT NULL,
  `client_id` varchar(50) DEFAULT NULL,
  `pro_start` date DEFAULT NULL,
  `pro_end` date DEFAULT NULL,
  `pro_status` enum('Active','Completed','Pending') NOT NULL DEFAULT 'Active',
  `pro_cost` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `projects` (`id`, `name`, `anchor_keyword`, `pro_logo`, `pro_small_descp`, `pro_brief_descp`, `client_id`, `pro_start`, `pro_end`, `pro_status`, `pro_cost`, `created_at`, `updated_at`) VALUES
(1,	'Amazon',	'amazon',	'amazon_logo.png',	'Online Clothing Store',	'We are planning to develop an online clothing store that allows customers to browse and purchase a wide range of clothing items. The website will provide an intuitive and user-friendly interface, ensuring a seamless shopping experience for our customers.\r\n\r\nWe aim to create an e-commerce website that delivers a seamless shopping experience, promotes customer satisfaction, and drives business growth',	'1',	'2023-06-19',	NULL,	'Active',	'2 lacs',	'2023-06-19 15:54:07',	NULL);

DROP TABLE IF EXISTS `projects_services_mapping`;
CREATE TABLE `projects_services_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `anchor_keyword` varchar(100) DEFAULT NULL,
  `short_descp` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dimensions` varchar(200) DEFAULT NULL,
  `extensions` varchar(200) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `projects_services_mapping` (`id`, `project_id`, `service_id`, `image_name`, `anchor_keyword`, `short_descp`, `description`, `dimensions`, `extensions`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	1,	'image_1.png',	NULL,	'Where does it come from?',	'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',	NULL,	NULL,	'Active',	'2023-06-19 23:56:02',	'0000-00-00 00:00:00'),
(2,	1,	2,	'image_2.png',	NULL,	'Where can I get some?',	'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',	NULL,	NULL,	'Active',	'2023-06-19 23:57:47',	'0000-00-00 00:00:00'),
(3,	1,	3,	'image_3.png',	NULL,	'Why do we use it?',	'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,',	NULL,	NULL,	'Active',	'2023-06-19 23:58:53',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `project_banner_descriptions`;
CREATE TABLE `project_banner_descriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `image_name` varchar(200) DEFAULT NULL,
  `anchor_keyword` varchar(100) DEFAULT NULL,
  `short_descp` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `extensions` varchar(100) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `project_banner_descriptions` (`id`, `project_id`, `image_name`, `anchor_keyword`, `short_descp`, `description`, `dimensions`, `extensions`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	'project_feature.jpg',	'social_media',	NULL,	'The Amazon app is more than just a shopping space and an OTT. Read on to know more about its critical features. The Amazon app is so much more than a place for you to shop, though that’s undoubtedly a significant purpose. As a result, Amazon mobile users have several key features, whether sellers or buyers. These seven Amazon app features are essential to the modern Amazon customer.',	NULL,	NULL,	'Active',	'2023-06-19 21:49:39',	'0000-00-00 00:00:00'),
(2,	1,	'subscription.jpg',	'subscriptions',	'Get discounts by subscribing.',	'Amazon’s Subscribe & Save feature is a great way to keep your home stocked with essentials. Amazon’s subscription service has been around since 2007, but the e-commerce giant has been trying to make it more appealing to customers with new perks.\r\n\r\nIt launched Subscribe & Save Deals in July 2015 as a way for customers to add extra savings to their subscription orders. And earlier this year, Amazon App offered Prime members a free six-month trial of Subscribe & Save 15% discount.',	NULL,	NULL,	'Active',	'2023-06-19 21:56:53',	'0000-00-00 00:00:00'),
(3,	1,	'1651836864_627507c08d7c5.jpg',	'amazon',	'Use your camera to search for products.',	'Whether you’re looking for groceries, home improvement stuff or electronics, Amazon has it all. To make things easy for you to buy whatever you want, the company has introduced Amazon Flow.\r\n\r\nAll you need to do is open the Amazon app, tap the camera button to take a snap, select the correct item, and you will receive the parcel at your door.\r\n\r\nIf you wonder how Amazon Flow knows which product it is, it uses image recognition (computer vision) and machine learning to identify products and make sure they are correct.',	NULL,	NULL,	'Active',	'2023-06-19 22:57:58',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `service_descp` text DEFAULT NULL,
  `service_total_emp` int(11) DEFAULT NULL,
  `service_img_id` varchar(50) DEFAULT NULL,
  `project_id` varchar(50) DEFAULT NULL,
  `service_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `services` (`id`, `name`, `type`, `service_descp`, `service_total_emp`, `service_img_id`, `project_id`, `service_status`, `created_at`, `updated_at`) VALUES
(1,	'Graphic design',	'graphic_design',	'Graphic design is a creative discipline that involves the creation and manipulation of visual elements to communicate messages, convey information, and solve problems visually. It encompasses a wide range of mediums, including digital and print media, such as websites, logos, advertisements, packaging, posters, brochures, and more.\r\n\r\nThe primary goal of graphic design is to visually communicate a specific message or idea to a target audience. It requires a combination of artistic skills, creativity, and technical knowledge to effectively convey information and evoke desired emotions through visual means.',	25,	'4,5,6',	NULL,	'Active',	NULL,	NULL),
(2,	'Website',	'website',	'A website description typically refers to a brief summary or overview of a website\'s content, purpose, and features. It is usually displayed on search engine result pages or as a preview text when sharing a link on social media platforms. The website description aims to provide users with a concise understanding of what they can expect to find on the website.\r\n\r\nA well-crafted website description often includes relevant keywords to attract the target audience and improve search engine optimization (SEO). It should be informative, engaging, and enticing enough to encourage users to click on the link and explore the website further.',	25,	'10,11,12,13,14,15,16,17,18,19',	NULL,	'Active',	'2023-06-14 17:28:53',	NULL),
(3,	'Branding',	'branding',	'Branding description refers to a concise and compelling summary of a brand\'s identity, values, and unique offerings. It encapsulates the essence of the brand and communicates its distinctive characteristics to the target audience. A well-crafted branding description helps establish brand recognition, attract customers, and differentiate the brand from its competitors.\r\n\r\nOverall, a branding description serves as a concise representation of the brand\'s identity and unique value proposition. It should be memorable, consistent, and effectively communicate the brand\'s essence to its target audience.',	45,	'29,30,31,32,33,34,35,36,37',	NULL,	'Active',	'2023-06-14 17:46:17',	NULL),
(4,	'Social Media',	'social_media',	'A social media description refers to a brief and engaging summary that describes a person, company, or organization on a social media platform. It is typically displayed in the profile or bio section and serves as an introduction to the account\'s purpose, content, or mission. The primary goal of a social media description is to capture the attention of potential followers and provide them with a clear understanding of what they can expect from the account.\r\n\r\nRemember, the social media description should be attention-grabbing, informative, and aligned with your brand\'s overall messaging and objectives. Regularly review and update it to ensure it accurately represents your brand\'s current focus and offerings.',	80,	'19,20,21,22,23,24,25,26,27,28',	NULL,	'Active',	'2023-06-14 17:48:00',	NULL);

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


-- 2023-06-19 19:22:07
