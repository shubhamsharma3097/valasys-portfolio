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


DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `branches` text DEFAULT NULL,
  `small_descp` text DEFAULT NULL,
  `brief_descp` text DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `fb_url` varchar(255) DEFAULT NULL,
  `insta_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `company` (`id`, `name`, `logo`, `image`, `email`, `contact`, `address`, `branches`, `small_descp`, `brief_descp`, `linkedin_url`, `fb_url`, `insta_url`, `twitter_url`, `about`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1,	'Valasys Media LLC',	'valasys-logo.png',	'valasys-logo1.png',	'info@valasys.com',	'+1 862-904-0242',	'111 Town Square Place, Suite 1203, Jersey City,\r\nNJ 07310',	'India,USA,UAE',	'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',	'Valasys Media is a globally acclaimed B2B Media Publisher focused on building strong partnerships with our clients, driven by the prime objective of – “Empowering Marketers with Powerful Insights.” We are focused on delivering impeccable B2B marketing & sales solutions. Over the years, our team of expert sales professionals, marketing analysts, marketers, and data-driven leaders have worked with some of the well-renowned clients in the world including Fortune 500 companies to help them increase their visibility, conversions, and revenue.						',	'https://www.linkedin.com/in/shubham-sharma-871485202/',	'https://www.facebook.com/ValasysB2B/',	'https://www.instagram.com/valasysmedia/?hl=en',	'https://twitter.com/valasysb2b?lang=en',	NULL,	'All Rights Reserve',	'Active',	'2023-06-22 01:04:18',	'0000-00-00 00:00:00');

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


DROP TABLE IF EXISTS `images_descriptions_mapping`;
CREATE TABLE `images_descriptions_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT 0,
  `service_id` int(11) DEFAULT 0,
  `title` varchar(255) DEFAULT NULL,
  `category` enum('Project','Service','Mapped') DEFAULT 'Project',
  `image_name` varchar(255) DEFAULT NULL,
  `is_thumbnail` enum('No','Yes') DEFAULT 'No',
  `thumbnail_url` varchar(255) DEFAULT NULL,
  `is_video` enum('No','Yes') DEFAULT 'No',
  `video_url` varchar(255) DEFAULT NULL,
  `short_descp` text DEFAULT NULL,
  `brief_descp` text DEFAULT NULL,
  `dimensions` varchar(150) DEFAULT NULL,
  `extensions` varchar(150) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `images_descriptions_mapping` (`id`, `project_id`, `service_id`, `title`, `category`, `image_name`, `is_thumbnail`, `thumbnail_url`, `is_video`, `video_url`, `short_descp`, `brief_descp`, `dimensions`, `extensions`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	4,	NULL,	'Mapped',	'al-masaood.jpg',	'No',	NULL,	'Yes',	NULL,	'Why we use social media.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 17:31:31',	'0000-00-00 00:00:00'),
(2,	1,	4,	NULL,	'Mapped',	'al-masaood1.jpg',	'No',	NULL,	'Yes',	NULL,	'Advantages of using social media.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 17:31:31',	'0000-00-00 00:00:00'),
(3,	1,	4,	NULL,	'Mapped',	'al-masaood2.jpg',	'No',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	'2023-06-27 21:33:11',	'0000-00-00 00:00:00'),
(4,	1,	4,	NULL,	'Mapped',	'al-masaood3.jpg',	'No',	NULL,	'Yes',	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	'2023-06-27 21:33:43',	'0000-00-00 00:00:00'),
(5,	1,	4,	NULL,	'Mapped',	'al-masaood4.jpg',	'No',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	'2023-06-27 21:33:57',	'0000-00-00 00:00:00'),
(6,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(1).jpg',	'No',	NULL,	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 21:45:28',	'0000-00-00 00:00:00'),
(7,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(2).jpg',	'No',	NULL,	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 21:46:27',	'0000-00-00 00:00:00'),
(8,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(3).jpg',	'No',	NULL,	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 21:47:00',	'0000-00-00 00:00:00'),
(9,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(4).jpg',	'No',	NULL,	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 21:47:46',	'0000-00-00 00:00:00'),
(10,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(5).jpg',	'No',	NULL,	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 21:48:16',	'0000-00-00 00:00:00'),
(11,	1,	3,	NULL,	'Mapped',	NULL,	'Yes',	'al-masaood.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:29:25',	'0000-00-00 00:00:00'),
(12,	3,	3,	NULL,	'Mapped',	NULL,	'Yes',	'gandofly.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:30:20',	'0000-00-00 00:00:00'),
(13,	10,	3,	NULL,	'Mapped',	NULL,	'Yes',	'trex.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:32:38',	'0000-00-00 00:00:00'),
(14,	10,	3,	NULL,	'Mapped',	NULL,	'Yes',	'rethink_trends.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:53:08',	'0000-00-00 00:00:00'),
(15,	10,	3,	NULL,	'Mapped',	NULL,	'Yes',	'aquatics_club.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:53:33',	'0000-00-00 00:00:00'),
(16,	10,	3,	NULL,	'Mapped',	NULL,	'Yes',	'valasys_ae.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:54:04',	'0000-00-00 00:00:00');

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
  `logo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_video` enum('No','Yes') DEFAULT 'No',
  `video_url` varchar(255) DEFAULT NULL,
  `small_descp` text DEFAULT NULL,
  `brief_descp` text DEFAULT NULL,
  `client_id` varchar(50) DEFAULT NULL,
  `pro_start` date DEFAULT NULL,
  `pro_end` date DEFAULT NULL,
  `status` enum('Active','Completed','Pending') NOT NULL DEFAULT 'Active',
  `pro_cost` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `projects` (`id`, `name`, `anchor_keyword`, `logo`, `image`, `is_video`, `video_url`, `small_descp`, `brief_descp`, `client_id`, `pro_start`, `pro_end`, `status`, `pro_cost`, `created_at`, `updated_at`) VALUES
(1,	'Al-Masaood',	'al_masaood',	'al_masaood_logo.png',	'project_image.jpg',	'No',	NULL,	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:20:31',	NULL),
(2,	'Al-Murooj',	'al_murooj',	'al_murooj_scientific_private_school.png',	NULL,	'No',	NULL,	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. In the distance, a group of children laughed and chased colorful kites, their giggles echoing through the air. As the day transitioned into dusk, the sky painted itself in vibrant hues of pink and orange, bidding farewell to another beautiful day.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:26:22',	NULL),
(3,	'Gandofly',	'gandofly',	'gandofly_logo.png',	NULL,	'No',	NULL,	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. In the distance, a group of children laughed and chased colorful kites, their giggles echoing through the air. As the day transitioned into dusk, the sky painted itself in vibrant hues of pink and orange, bidding farewell to another beautiful day.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:28:35',	NULL),
(4,	'Al-Askandrani',	'al_askandrani',	'al_askandrani_logo.png',	NULL,	'No',	NULL,	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. In the distance, a group of children laughed and chased colorful kites, their giggles echoing through the air. As the day transitioned into dusk, the sky painted itself in vibrant hues of pink and orange, bidding farewell to another beautiful day.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:33:24',	NULL),
(5,	'Petunia',	'petunia',	'petunia_logo.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:29:11',	NULL),
(6,	'Queen palace',	'queen_palace',	'queen_palace.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:30:05',	NULL),
(7,	'Safi sana',	'safi_sana',	'safi_sana.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:30:48',	NULL),
(8,	'Sparkle spa',	'sparkle_spa',	'sparkle_spa.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:31:33',	NULL),
(9,	'Texas',	'texas',	'Texas.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:32:19',	NULL),
(10,	'Trex',	'trex',	'trex_properties.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:33:03',	NULL),
(11,	'Ayana spa',	'ayana_spa',	'ayana_spa.png',	NULL,	'No',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:35:54',	NULL);

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `anchor_keyword` varchar(150) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_video` enum('No','Yes') DEFAULT 'No',
  `video_url` varchar(255) DEFAULT NULL,
  `small_descp` text DEFAULT NULL,
  `brief_descp` text DEFAULT NULL,
  `service_total_emp` int(11) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `services` (`id`, `name`, `anchor_keyword`, `logo`, `image`, `is_video`, `video_url`, `small_descp`, `brief_descp`, `service_total_emp`, `status`, `created_at`, `updated_at`) VALUES
(1,	'Content Marketing',	'content_marketing',	NULL,	NULL,	'No',	NULL,	'Creating and distributing valuable content to attract and engage your target audience.',	'Our branding services help businesses create a solid and memorable brand identity that resonates with their target audience. We offer a comprehensive range of services, from logo design and brand identity development to brand strategy and positioning, brand messaging and storytelling, brand guidelines and style guides, visual assets creation, packaging design, brand audits, and analysis, brand refresh or rebranding, online and offline brand presence optimization, and brand reputation management. We understand that every business is different, so we tailor our services to meet the specific needs of our clients. We work with you to understand your brand goals, target audience, and competitive landscape. We then develop a branding strategy to help you achieve your goals and reach your target audience. A strong brand is essential for business success. A well-branded business is more likely to be remembered, more likely to be trusted, and more likely to be successful.',	4,	'Active',	'2023-06-27 10:43:31',	NULL),
(2,	'Graphics Design',	'graphic_design',	NULL,	NULL,	'No',	NULL,	'Visual communication through the artful combination of typography, imagery, and layout.',	'In graphics designing, we offer comprehensive services to cater to your visual branding needs. Our talented team excels in crafting impactful designs that leave a lasting impression. We cover everything from logo design, brochure and flyer design, poster and banner design, infographic creation, and packaging design. Our expertise includes creating eye-catching social media graphics, unique illustrations, and custom artwork. We also specialize in designing effective print and digital advertisements that reflect your brand identity. Additionally, we provide visual branding solutions for events and exhibitions, ensuring a cohesive and visually appealing presence. With our graphics designing services, you can expect top-notch quality and attention to detail in every project.',	3,	'Active',	'2023-06-27 10:45:29',	NULL),
(3,	'Website Development',	'website_development',	NULL,	NULL,	'No',	NULL,	'Building and creating functional and visually appealing websites for businesses and individuals.',	'Regarding website development, we offer comprehensive services to bring your online presence to life. Our skilled team excels in custom website design and development, tailoring the design and functionality to suit your unique needs. Whether you require an e-commerce platform to sell products or services or need a content management system (CMS) for easy website updates, we have you covered. Our experts prioritize user experience (UX) and user interface (UI) design, crafting intuitive and visually appealing interfaces. We also provide website maintenance and updates to ensure your website remains secure and up to date. Additionally, our team is experienced in optimizing website performance for faster loading times and implementing robust security measures. From crafting engaging landing pages to implementing website analytics and tracking, we offer comprehensive website development solutions to enhance your online presence and drive results.',	15,	'Active',	'2023-06-27 10:48:01',	NULL),
(4,	'Social Media',	'social_media',	'social_media_logo.png',	NULL,	'No',	NULL,	'Connecting, engaging, and sharing content with audiences through online platforms for communication, networking, and marketing purposes.',	'Regarding social media, our comprehensive range of services ensures your brand thrives digitally. We develop a tailored social media strategy to align with your business objectives. Our creative team excels in content creation and curation, crafting engaging posts that captivate your audience. We handle social media account setup and optimization, ensuring your profiles reflect your brand identity and attract followers.',	5,	'Active',	'2023-06-27 10:49:28',	NULL),
(5,	'SEO',	'seo',	NULL,	NULL,	'No',	NULL,	'Optimizing websites to improve visibility and organic rankings on search engines, driving targeted traffic and increasing online visibility.',	'In the SEO domain, we offer comprehensive services to enhance online visibility and drive organic traffic to your website. Our skilled team excels in keyword research and analysis, on-page optimization, off-page optimization, technical SEO, local SEO optimization, SEO audits and website analysis, SEO content writing and optimization, mobile optimization, SEO tracking and analytics, SEO consulting, and strategy development. With our SEO expertise, you can expect improved search engine rankings, increased website authority, and targeted organic traffic. We employ the latest strategies and best practices to ensure long-term results, helping your business thrive in the digital landscape. Our dedicated team is committed to delivering exceptional quality and achieving your SEO goals.',	NULL,	'Active',	'2023-06-27 10:51:15',	NULL),
(6,	'Video Marketing ',	'video_marketing',	NULL,	NULL,	'No',	NULL,	'Utilizing engaging and compelling videos to promote products, services, or messages and reach a wider audience for effective marketing and communication.',	'For video marketing, we offer comprehensive services to help you effectively engage your audience through captivating visuals. Our team specializes in video concept development and scriptwriting, ensuring your message is conveyed effectively. We handle every aspect of video production, from filming to editing and post-production, delivering high-quality videos that resonate with your target audience. Our expertise extends to animation and motion graphics, adding a touch of creativity and visual appeal to your videos. We excel in brand storytelling through video, creating compelling narratives that connect with viewers emotionally. Our services also include product demonstrations and tutorials, customer testimonials and case study videos, and explainer videos to simplify complex concepts. Through video analytics and performance tracking, we provide valuable insights into viewer engagement and measure the success of your video marketing campaigns. With our video marketing services, you can expect exceptional creativity, professionalism, and a powerful visual storytelling approach that sets your brand apart.',	NULL,	'Active',	'2023-06-27 10:52:24',	NULL);

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


-- 2023-06-27 20:05:38
