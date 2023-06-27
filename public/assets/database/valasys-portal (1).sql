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
  `short_descp` text DEFAULT NULL,
  `brief_descp` text DEFAULT NULL,
  `dimensions` varchar(150) DEFAULT NULL,
  `extensions` varchar(150) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `images_descriptions_mapping` (`id`, `project_id`, `service_id`, `title`, `category`, `image_name`, `short_descp`, `brief_descp`, `dimensions`, `extensions`, `status`, `created_at`, `updated_at`) VALUES
(1,	1,	0,	NULL,	'Project',	'project_feature.jpg',	'The Lorem Ipsum generators',	'The Amazon app is more than just a shopping space and an OTT. Read on to know more about its critical features. The Amazon app is so much more than a place for you to shop, though that’s undoubtedly a significant purpose. As a result, Amazon mobile users have several key features, whether sellers or buyers. These seven Amazon app features are essential to the modern Amazon customer.',	NULL,	NULL,	'Active',	'2023-06-20 11:18:08',	'0000-00-00 00:00:00'),
(2,	1,	0,	NULL,	'Project',	'subscription.jpg',	'Get discounts by subscribing.',	'Amazon’s Subscribe & Save feature is a great way to keep your home stocked with essentials. Amazon’s subscription service has been around since 2007, but the e-commerce giant has been trying to make it more appealing to customers with new perks.\r\n\r\nIt launched Subscribe & Save Deals in July 2015 as a way for customers to add extra savings to their subscription orders. And earlier this year, Amazon App offered Prime members a free six-month trial of Subscribe & Save 15% discount.',	NULL,	NULL,	'Active',	'2023-06-20 11:18:56',	'0000-00-00 00:00:00'),
(3,	1,	0,	NULL,	'Project',	'1651836864_627507c08d7c5.jpg',	'Use your camera to search for products.',	'Whether you’re looking for groceries, home improvement stuff or electronics, Amazon has it all. To make things easy for you to buy whatever you want, the company has introduced Amazon Flow.\r\n\r\nAll you need to do is open the Amazon app, tap the camera button to take a snap, select the correct item, and you will receive the parcel at your door.\r\n\r\nIf you wonder how Amazon Flow knows which product it is, it uses image recognition (computer vision) and machine learning to identify products and make sure they are correct.',	NULL,	NULL,	'Active',	'2023-06-20 11:41:22',	'0000-00-00 00:00:00'),
(4,	1,	1,	NULL,	'Mapped',	'image_1.png',	'Where does it come from?',	'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',	NULL,	NULL,	'Active',	'2023-06-20 11:43:28',	'0000-00-00 00:00:00'),
(5,	1,	2,	NULL,	'Mapped',	'image_2.png',	'Where can I get some?',	'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',	NULL,	NULL,	'Active',	'2023-06-20 11:44:26',	'0000-00-00 00:00:00'),
(6,	1,	3,	NULL,	'Mapped',	'image_3.png',	'Why do we use it?',	'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,',	NULL,	NULL,	'Active',	'2023-06-20 11:45:57',	'0000-00-00 00:00:00'),
(7,	0,	1,	'sample1',	'Service',	'81f6fd37100023.57373334426ba.png',	' Lorem Ipsum has been the industry\'s standard dummy text',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',	NULL,	NULL,	'Active',	'2023-06-21 23:24:51',	'0000-00-00 00:00:00'),
(8,	0,	1,	NULL,	'Service',	'ontology-2-1.png',	'It is a long established fact that a reader will be distracted',	'it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes',	NULL,	NULL,	'Active',	'2023-06-21 23:25:59',	'0000-00-00 00:00:00'),
(9,	0,	1,	NULL,	'Service',	'703143104303755.5f60405fd4186.png',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots',	'it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.',	NULL,	NULL,	'Active',	'2023-06-21 23:26:44',	'0000-00-00 00:00:00'),
(10,	0,	1,	'sample1',	'Service',	'81f6fd37100023.57373334426ba.png',	' Lorem Ipsum has been the industry\'s standard dummy text',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',	NULL,	NULL,	'Active',	'2023-06-21 23:24:51',	'0000-00-00 00:00:00'),
(11,	0,	1,	NULL,	'Service',	'ontology-2-1.png',	'It is a long established fact that a reader will be distracted',	'it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes',	NULL,	NULL,	'Active',	'2023-06-21 23:25:59',	'0000-00-00 00:00:00'),
(12,	0,	1,	NULL,	'Service',	'703143104303755.5f60405fd4186.png',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots',	'it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.',	NULL,	NULL,	'Active',	'2023-06-21 23:26:44',	'0000-00-00 00:00:00'),
(13,	0,	1,	'sample1',	'Service',	'81f6fd37100023.57373334426ba.png',	' Lorem Ipsum has been the industry\'s standard dummy text',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',	NULL,	NULL,	'Active',	'2023-06-21 23:24:51',	'0000-00-00 00:00:00'),
(14,	0,	1,	NULL,	'Service',	'703143104303755.5f60405fd4186.png',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots',	'it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.',	NULL,	NULL,	'Active',	'2023-06-21 23:26:44',	'0000-00-00 00:00:00'),
(15,	0,	1,	NULL,	'Service',	'703143104303755.5f60405fd4186.png',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots',	'it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.',	NULL,	NULL,	'Active',	'2023-06-21 23:26:44',	'0000-00-00 00:00:00');

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
(1,	'Amazonal',	'amazon',	'01.png',	'Amazon-Logo.png',	'No',	NULL,	'Online Clothing Store',	'We are planning to develop an online clothing store that allows customers to browse and purchase a wide range of clothing items. The website will provide an intuitive and user-friendly interface, ensuring a seamless shopping experience for our customers.\r\n\r\nWe aim to create an e-commerce website that delivers a seamless shopping experience, promotes customer satisfaction, and drives business growth',	'1',	'2023-06-19',	NULL,	'Active',	'2 lacs',	'2023-06-19 15:54:07',	NULL),
(2,	'Al Askandarani ',	'al_askandarani',	'02.png',	'png-transparent-j-j-jins-usa-seafood-whls-wild-seafood-crab-restaurant-seafood-logo.png',	'No',	NULL,	'Askandarani seafood dishes',	'Askandarani seafood refers to a type of cuisine or seafood specialty that originates from the coastal region of Alexandria, Egypt, known as \"Askandarani\" or \"Alexandrian\" in Arabic. The region\'s proximity to the Mediterranean Sea provides abundant access to fresh seafood, which has become a prominent part of its culinary heritage.\r\n\r\nAskandarani seafood dishes often highlight a variety of locally caught fish, shellfish, and other marine delicacies. \r\n\r\nAskandarani seafood dishes are known for their vibrant flavors, freshness, and the use of aromatic herbs and spices. The cuisine often combines the flavors of the Mediterranean with traditional Egyptian and Middle Eastern influences, resulting in a rich and diverse seafood experience.',	NULL,	'2023-06-20',	NULL,	'Active',	NULL,	'2023-06-20 07:08:45',	NULL),
(3,	'Trex',	'trex',	'03.png',	'504-5041327_trex-logo-trex-decking.png',	'No',	NULL,	'The T-Rex Project, often referred to as \"T-Rex,\"',	'The T-Rex Project, often referred to as \"T-Rex,\" is an ambitious initiative aimed at creating a life-sized replica or model of a Tyrannosaurus rex, one of the most iconic and well-known dinosaur species. The project seeks to provide an immersive and educational experience for visitors, showcasing the size, scale, and features of the mighty T-Rex.\r\n\r\nThe primary objective of the T-Rex Project is to accurately recreate the physical appearance and anatomical details of a T-Rex, utilizing the available scientific knowledge and research about these extinct creatures. The project involves a multidisciplinary team of paleontologists, artists, engineers, and experts in animatronics and special effects.',	NULL,	'2023-06-20',	NULL,	'Active',	NULL,	'2023-06-20 07:11:14',	NULL),
(4,	'Amazon',	'amazon',	'04.png',	'Amazon-Logo.png',	'No',	NULL,	'Online Clothing Store',	'We are planning to develop an online clothing store that allows customers to browse and purchase a wide range of clothing items. The website will provide an intuitive and user-friendly interface, ensuring a seamless shopping experience for our customers.\r\n\r\nWe aim to create an e-commerce website that delivers a seamless shopping experience, promotes customer satisfaction, and drives business growth',	'1',	'2023-06-19',	NULL,	'Active',	'2 lacs',	'2023-06-19 15:54:07',	NULL),
(5,	'Al Askandarani ',	'al_askandarani',	'01.png',	'png-transparent-j-j-jins-usa-seafood-whls-wild-seafood-crab-restaurant-seafood-logo.png',	'No',	NULL,	'Askandarani seafood dishes',	'Askandarani seafood refers to a type of cuisine or seafood specialty that originates from the coastal region of Alexandria, Egypt, known as \"Askandarani\" or \"Alexandrian\" in Arabic. The region\'s proximity to the Mediterranean Sea provides abundant access to fresh seafood, which has become a prominent part of its culinary heritage.\r\n\r\nAskandarani seafood dishes often highlight a variety of locally caught fish, shellfish, and other marine delicacies. \r\n\r\nAskandarani seafood dishes are known for their vibrant flavors, freshness, and the use of aromatic herbs and spices. The cuisine often combines the flavors of the Mediterranean with traditional Egyptian and Middle Eastern influences, resulting in a rich and diverse seafood experience.',	NULL,	'2023-06-20',	NULL,	'Active',	NULL,	'2023-06-20 07:08:45',	NULL),
(6,	'Trex',	'trex',	'c-d3-1.png',	'504-5041327_trex-logo-trex-decking.png',	'No',	NULL,	'The T-Rex Project, often referred to as \"T-Rex,\"',	'The T-Rex Project, often referred to as \"T-Rex,\" is an ambitious initiative aimed at creating a life-sized replica or model of a Tyrannosaurus rex, one of the most iconic and well-known dinosaur species. The project seeks to provide an immersive and educational experience for visitors, showcasing the size, scale, and features of the mighty T-Rex.\r\n\r\nThe primary objective of the T-Rex Project is to accurately recreate the physical appearance and anatomical details of a T-Rex, utilizing the available scientific knowledge and research about these extinct creatures. The project involves a multidisciplinary team of paleontologists, artists, engineers, and experts in animatronics and special effects.',	NULL,	'2023-06-20',	NULL,	'Active',	NULL,	'2023-06-20 07:11:14',	NULL),
(7,	'Amazon',	'amazon',	'c-d3-2.png',	'Amazon-Logo.png',	'No',	NULL,	'Online Clothing Store',	'We are planning to develop an online clothing store that allows customers to browse and purchase a wide range of clothing items. The website will provide an intuitive and user-friendly interface, ensuring a seamless shopping experience for our customers.\r\n\r\nWe aim to create an e-commerce website that delivers a seamless shopping experience, promotes customer satisfaction, and drives business growth',	'1',	'2023-06-19',	NULL,	'Active',	'2 lacs',	'2023-06-19 15:54:07',	NULL),
(8,	'Al Askandarani ',	'al_askandarani',	'c-d3-3.png',	'png-transparent-j-j-jins-usa-seafood-whls-wild-seafood-crab-restaurant-seafood-logo.png',	'No',	NULL,	'Askandarani seafood dishes',	'Askandarani seafood refers to a type of cuisine or seafood specialty that originates from the coastal region of Alexandria, Egypt, known as \"Askandarani\" or \"Alexandrian\" in Arabic. The region\'s proximity to the Mediterranean Sea provides abundant access to fresh seafood, which has become a prominent part of its culinary heritage.\r\n\r\nAskandarani seafood dishes often highlight a variety of locally caught fish, shellfish, and other marine delicacies. \r\n\r\nAskandarani seafood dishes are known for their vibrant flavors, freshness, and the use of aromatic herbs and spices. The cuisine often combines the flavors of the Mediterranean with traditional Egyptian and Middle Eastern influences, resulting in a rich and diverse seafood experience.',	NULL,	'2023-06-20',	NULL,	'Active',	NULL,	'2023-06-20 07:08:45',	NULL),
(9,	'Trex',	'trex',	'c-d3-4.png',	'504-5041327_trex-logo-trex-decking.png',	'No',	NULL,	'The T-Rex Project, often referred to as \"T-Rex,\"',	'The T-Rex Project, often referred to as \"T-Rex,\" is an ambitious initiative aimed at creating a life-sized replica or model of a Tyrannosaurus rex, one of the most iconic and well-known dinosaur species. The project seeks to provide an immersive and educational experience for visitors, showcasing the size, scale, and features of the mighty T-Rex.\r\n\r\nThe primary objective of the T-Rex Project is to accurately recreate the physical appearance and anatomical details of a T-Rex, utilizing the available scientific knowledge and research about these extinct creatures. The project involves a multidisciplinary team of paleontologists, artists, engineers, and experts in animatronics and special effects.',	NULL,	'2023-06-20',	NULL,	'Active',	NULL,	'2023-06-20 07:11:14',	NULL);

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
(1,	'Graphic design',	'graphic_design',	'graphic_logo.jpg',	'graphic_design.png',	'No',	NULL,	'Graphic design is a creative discipline that involves visual communication',	'Graphic designers use various tools and software to design layouts, logos, advertisements, posters, websites, and other visual materials. They carefully consider factors such as color theory, composition, typography, and visual hierarchy to create visually appealing and effective designs.\r\n\r\nThe role of a graphic designer goes beyond aesthetics. They need to understand the client\'s objectives, target audience, and the desired message to be conveyed. They often work closely with clients or creative teams to develop concepts, brainstorm ideas, and refine designs based on feedback.',	25,	'Active',	NULL,	NULL),
(2,	'Website',	'website',	'website_logo.jpg',	'website.png',	'No',	NULL,	'A well-designed website is visually appealing',	'A website is an online platform that allows individuals, businesses, or organizations to showcase information, products, services, or content to a global audience. It serves as a virtual space where users can access and interact with various web pages, multimedia elements, and functionality.\r\n\r\nA well-designed website is visually appealing, user-friendly, and offers a seamless browsing experience. It typically consists of multiple pages interconnected through navigation menus, allowing users to explore different sections and access specific content.',	25,	'Active',	'2023-06-14 17:28:53',	NULL),
(3,	'Branding',	'branding',	'branding_logo.png',	'branding.png',	'No',	NULL,	'Branding plays a vital role in the success and recognition of a business',	'Branding plays a vital role in the success and recognition of a business or individual. It helps create trust, loyalty, and emotional connections with the target audience. A strong brand can influence consumer perceptions, drive purchasing decisions, and even command premium pricing.\r\n\r\nBuilding a brand requires a deep understanding of the target audience, market dynamics, and competitive landscape. It involves careful planning, creative execution, and ongoing brand management to maintain relevance and adapt to changing customer preferences.\r\n\r\nUltimately, effective branding creates a distinctive and memorable presence that resonates with the target audience, fostering recognition, loyalty, and advocacy.',	45,	'Active',	'2023-06-14 17:46:17',	NULL),
(4,	'Social Media',	'social_media',	'social-media-png-picture.png',	'social_media.png',	'No',	NULL,	'Social media platforms come in various forms',	'Social media refers to online platforms and applications that enable individuals, communities, and businesses to connect, share content, and interact with each other in a virtual environment. It has revolutionized communication by allowing users to create, share, and exchange information, ideas, and multimedia content in real-time.\r\n\r\nSocial media platforms come in various forms, each with its unique features and focus. Some of the popular social media platforms include:\r\nHowever, it\'s important to be mindful of the impact of social media on mental health, privacy, and the spread of misinformation. Responsible usage and maintaining digital well-being are crucial aspects of navigating social media platforms effectively',	80,	'Active',	'2023-06-14 17:48:00',	NULL),
(5,	'Research Analyst',	'research_analyst',	'researchAnalyst.png',	'research_analyst.png',	'No',	NULL,	'A research analyst is a professional who gathers',	'A research analyst is a professional who gathers, analyzes, and interprets data to provide insights and support decision-making processes in various fields. They are typically employed by companies, financial institutions, market research firms, government agencies, and consulting firms. The primary responsibilities of a research analyst may vary depending on the industry or organization.\r\n\r\nOverall, research analysts play a crucial role in generating actionable insights from data, supporting evidence-based decision-making, and contributing to the success of organizations across various industries.',	25,	'Active',	NULL,	NULL),
(6,	'Web Development',	'web_development',	'webDev_logo.png',	'how-metaverse-transform-web-development-in-future-1200x720.png',	'No',	NULL,	'Web development refers to the process of designing, creating, and maintaining websites and web applications.',	'Web development refers to the process of designing, creating, and maintaining websites and web applications. It involves a combination of programming, markup languages, databases, and other technologies to build functional and interactive websites that are accessible through the internet.\r\n\r\nWeb developers, also known as front-end developers or back-end developers, use a variety of programming languages, frameworks, and tools to construct websites.\r\n\r\nWeb development is a collaborative process that often involves working with designers, content creators, project managers, and other stakeholders. Web developers need strong problem-solving skills, attention to detail, and the ability to translate client requirements into functional websites or web applications.',	25,	'Active',	'2023-06-20 11:09:10',	NULL),
(7,	'SEO',	'seo',	'seo_logo.png',	'Why-You-Need-To-Hire-A-Professional-SEO1200x720_011720.png',	'No',	NULL,	'SEO encompasses a range of techniques',	'SEO (Search Engine Optimization) is the practice of improving a website\'s visibility and organic (non-paid) search engine rankings. It involves optimizing various aspects of a website to make it more search engine-friendly and increase its chances of appearing prominently in search engine results pages (SERPs).\r\n\r\nSEO encompasses a range of techniques and strategies aimed at enhancing a website\'s relevance, authority, and user experience. \r\n\r\nEffective SEO implementation can increase a website\'s visibility, drive targeted organic traffic, and improve its online presence. However, it\'s important to note that SEO is a long-term effort, and results may take time to materialize. Consistent optimization, valuable content creation, and a user-focused approach are key to achieving sustainable SEO success.',	25,	'Active',	'2023-06-20 11:09:10',	NULL),
(8,	'Web Development',	'web_development',	'webDev_logo.png',	'how-metaverse-transform-web-development-in-future-1200x720.png',	'No',	NULL,	'Web development refers to the process of designing, creating, and maintaining websites and web applications.',	'Web development refers to the process of designing, creating, and maintaining websites and web applications. It involves a combination of programming, markup languages, databases, and other technologies to build functional and interactive websites that are accessible through the internet.\r\n\r\nWeb developers, also known as front-end developers or back-end developers, use a variety of programming languages, frameworks, and tools to construct websites.\r\n\r\nWeb development is a collaborative process that often involves working with designers, content creators, project managers, and other stakeholders. Web developers need strong problem-solving skills, attention to detail, and the ability to translate client requirements into functional websites or web applications.',	25,	'Active',	'2023-06-20 11:09:10',	NULL),
(9,	'Graphic design',	'graphic_design',	'graphic_logo.jpg',	'graphic_design.png',	'No',	NULL,	'Graphic design is a creative discipline that involves visual communication',	'Graphic designers use various tools and software to design layouts, logos, advertisements, posters, websites, and other visual materials. They carefully consider factors such as color theory, composition, typography, and visual hierarchy to create visually appealing and effective designs.\r\n\r\nThe role of a graphic designer goes beyond aesthetics. They need to understand the client\'s objectives, target audience, and the desired message to be conveyed. They often work closely with clients or creative teams to develop concepts, brainstorm ideas, and refine designs based on feedback.',	25,	'Active',	NULL,	NULL);

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


-- 2023-06-27 10:35:23
