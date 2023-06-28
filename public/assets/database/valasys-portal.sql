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
(1,	1,	4,	NULL,	'Mapped',	'al-masaood.jpg',	'No',	NULL,	'Yes',	'https://www.youtube.com/shorts/NEZnUQVdkQw',	'',	'We crafted a captivating realm of glamour on Al Masaood Jewellery\'s social media platforms. Through stunning reels, enchanting stories, and mesmerizing static posts, we showcased their finest jewellery designs. With the graceful presence of models, we accentuated the inherent beauty of each piece, inviting viewers into a world of timeless elegance. ',	NULL,	NULL,	'Active',	'2023-06-27 17:31:31',	'0000-00-00 00:00:00'),
(2,	1,	4,	NULL,	'Mapped',	'al-masaood1.jpg',	'No',	NULL,	'Yes',	'https://www.youtube.com/watch?v=iH3qXKPsnZM',	'',	'We created an experimentation by alternating between models adorned with their exquisite jewelry and static photos highlighting the pieces themselves. This method allowed us to gauge the viewer preferences, as well as which type of posts generates maximum likes, engagement, and resonance.',	NULL,	NULL,	'Active',	'2023-06-27 17:31:31',	'0000-00-00 00:00:00'),
(3,	1,	4,	NULL,	'Mapped',	'al-masaood2.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'Collaborations with esteemed brands added a touch of exclusivity, creating a captivating fusion of artistry and sophistication. We ensured maximum impact through expertly curated images and thoughtfully crafted content, leaving an indelible impression on every viewer. ',	NULL,	NULL,	'Active',	'2023-06-27 21:33:11',	'0000-00-00 00:00:00'),
(4,	1,	4,	NULL,	'Mapped',	'al-masaood3.jpg',	'No',	NULL,	'Yes',	'https://www.youtube.com/shorts/VO1QdQWnXuo',	NULL,	'Their captivating social media posts weave a tapestry of information and allure. Each image description eloquently describes the unique details of the showcased jewelry, while the tone exudes sophistication and charm. With carefully crafted content, we promote these exquisite pieces to create a sense of indulgence in the viewers.',	NULL,	NULL,	'Active',	'2023-06-27 21:33:43',	'0000-00-00 00:00:00'),
(5,	1,	4,	NULL,	'Mapped',	'al-masaood4.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'Each of their posts showcase a masterful use of color palettes while we meticulously edit their raw photos. Each image is imbued with hues that enhance the brilliance and radiance of the pieces, captivating the viewer\'s eye and evoking a sense of luxury and refinement. The thoughtful color choices elevate the beauty of the jewelry to new heights, creating an irresistible visual experience. 			',	NULL,	NULL,	'Active',	'2023-06-27 21:33:57',	'0000-00-00 00:00:00'),
(6,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(1).jpg',	'No',	NULL,	'No',	NULL,	'',	'\"Subsequent branding meant we incorporated brand colors that complement the overall Sea-inspired theme. \r\n\r\nUsing shades of blue for the background, with effects of water splashes emerging from it, the images of lip-smacking seafood delicacies aim to transcend viewers to the feel and ambiance of the restaurant\".',	NULL,	NULL,	'Active',	'2023-06-27 21:45:28',	'0000-00-00 00:00:00'),
(7,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(2).jpg',	'No',	NULL,	'No',	NULL,	'',	'\"The variations in design and content meant we kept the page fresh without losing the brand\'s essence and value. \r\n\r\nThe raw images are corrected. Content is curated to complement the image. Hashtags are included to ensure maximum reach, impression, and discovery. \"',	NULL,	NULL,	'Active',	'2023-06-27 21:46:27',	'0000-00-00 00:00:00'),
(8,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(3).jpg',	'No',	NULL,	'No',	NULL,	'',	'\"Showcase the range of dishes, and reshare them on stories for maximum engagement. \r\n\r\nAlso, the organic following is critical to engagement. We meticulously follow accounts that are aligned to the industry, active, and opt to visit the outlet.\"',	NULL,	NULL,	'Active',	'2023-06-27 21:47:00',	'0000-00-00 00:00:00'),
(9,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(4).jpg',	'No',	NULL,	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. ',	NULL,	NULL,	'Active',	'2023-06-27 21:47:46',	'0000-00-00 00:00:00'),
(10,	4,	4,	NULL,	'Mapped',	'al_askandrani_mockup(5).jpg',	'No',	NULL,	'No',	NULL,	'',	'We keep referring to the analytics to track which design types perform better and fetch more engagement, optimizing our planner.',	NULL,	NULL,	'Active',	'2023-06-27 21:48:16',	'0000-00-00 00:00:00'),
(11,	1,	3,	NULL,	'Mapped',	'al masaood (1).webp',	'Yes',	'al-masaood.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:29:25',	'0000-00-00 00:00:00'),
(12,	3,	3,	NULL,	'Mapped',	'gandofly (1).webp',	'Yes',	'gandofly.webp',	'No',	NULL,	'A playful squirrel darted across her path, momentarily distracting her from her reverie.',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:30:20',	'0000-00-00 00:00:00'),
(13,	10,	3,	NULL,	'Mapped',	'trex (1).webp',	'Yes',	'trex.webp',	'No',	NULL,	'',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Active',	'2023-06-27 23:32:38',	'0000-00-00 00:00:00'),
(14,	10,	3,	NULL,	'Mapped',	'rethink trends (1).webp',	'Yes',	'rethink_trends.webp',	'No',	NULL,	'',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Inactive',	'2023-06-27 23:53:08',	'0000-00-00 00:00:00'),
(15,	10,	3,	NULL,	'Mapped',	'aquatics club (1).webp',	'Yes',	'aquatics_club.webp',	'No',	NULL,	'',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Inactive',	'2023-06-27 23:53:33',	'0000-00-00 00:00:00'),
(16,	10,	3,	NULL,	'Mapped',	'valasys.webp',	'Yes',	'valasys_ae.webp',	'No',	NULL,	'',	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves. Lost in thought, she strolled along the winding path, feeling the soft grass under her bare feet. The aroma of freshly baked bread wafted from the nearby bakery, tempting her senses. A playful squirrel darted across her path, momentarily distracting her from her reverie. ',	NULL,	NULL,	'Inactive',	'2023-06-27 23:54:04',	'0000-00-00 00:00:00'),
(17,	2,	4,	NULL,	'Mapped',	'almurooj.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'An integration of user-generated content with the skillset of our designer\'s expertise makes posts an eye-catchy one. The designer\'s skillset also enables them to create a balanced composition, ensuring that all elements harmonize and convey the intended message. They have a keen eye for detail, ensuring that the design is visually appealing and visually communicates the school\'s identity to its audience.',	NULL,	NULL,	'Active',	'2023-06-28 16:06:30',	'0000-00-00 00:00:00'),
(18,	2,	4,	NULL,	'Mapped',	'almurooj1.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'A/B testing or split testing, where different design variations are presented to different segments of the audience. By comparing the performance of these variations, designers can identify which design elements or approaches resonate better with the target audience and drive higher engagement or conversions.',	NULL,	NULL,	'Active',	'2023-06-28 16:06:30',	'0000-00-00 00:00:00'),
(19,	2,	4,	NULL,	'Mapped',	'almurooj2.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'By enhancing raw images, our designers unleashed their creativity and craft images that stand out from the crowd. The process adds depth, richness, and a sense of realism to the photographs, making them more captivating and engaging to viewers.',	NULL,	NULL,	'Active',	'2023-06-28 16:06:30',	'0000-00-00 00:00:00'),
(20,	2,	4,	NULL,	'Mapped',	'almurooj3.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'Relevancy in designs ensures that they are adaptable and responsive to the specific goals and objectives of a project. Whether it\'s promoting a product, conveying information, or creating a memorable brand identity, relevant designs are tailored to meet these specific objectives, ultimately driving desired outcomes.',	NULL,	NULL,	'Active',	'2023-06-28 16:08:51',	'0000-00-00 00:00:00'),
(21,	2,	4,	NULL,	'Mapped',	'almurooj4.jpg',	'No',	NULL,	'No',	NULL,	NULL,	'Sticking to a carefully curated color palette is the key to creating a cohesive and strategically designed social media profile. By selecting a consistent set of colors that align with the brand identity, ensure that the social media profiles have a unified and professional appearance.',	NULL,	NULL,	'Active',	'2023-06-28 16:08:51',	'0000-00-00 00:00:00'),
(22,	3,	4,	NULL,	'Mapped',	'gandofly.jpg',	'No',	'',	'No',	NULL,	'',	'We crafted an irresistible visual journey on their Instagram feed, enticing seafood enthusiasts to dive into a world of culinary delight. Our carefully curated images showcase tantalizing dishes with vibrant colors, captivating textures, and exquisite plating. Each photo is a feast for the eyes, evoking a sense of anticipation and craving. Through thoughtful composition and artistic presentation, we transport the followers to the client\'s restaurant, inviting them to savor the flavors and experience the ambiance.		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		',	NULL,	NULL,	'Active',	'2023-06-28 16:12:13',	'0000-00-00 00:00:00'),
(23,	3,	4,	NULL,	'Mapped',	'gandofly2.jpg',	'No',	'',	'No',	NULL,	'',	'To captivate and engage our audience, we carefully strategized the content for optimal reach. We ensured the posts reached the right people by utilizing popular hashtags and showcasing mouthwatering dishes that take center stage. Our talented designers skillfully crafted each image, emphasizing the delectable food and incorporating enticing details like ingredient names and steam, making the visuals come alive. Through this thoughtful approach, we aim to inspire prospects to indulge in delectable seafood creations.',	NULL,	NULL,	'Active',	'2023-06-28 16:14:10',	'0000-00-00 00:00:00'),
(24,	3,	4,	NULL,	'Mapped',	'gandofly3.jpg',	'No',	'',	'No',	NULL,	'',	'With a data-driven approach, we harness the power of analytics to ensure our social media strategy hits the mark. Through thorough analysis, we identify the preferences and behaviors of our target audience, allowing us to curate content that resonates with their tastes. We optimize the posts by constantly monitoring engagement metrics and insights to maximize reach, impressions, and overall impact. From captivating visuals to compelling captions, every element is meticulously crafted to keep the audience coming back for more.',	NULL,	NULL,	'Active',	'2023-06-28 16:14:10',	'0000-00-00 00:00:00'),
(25,	3,	4,	NULL,	'Mapped',	'gandofly4.jpg',	'No',	'',	'No',	NULL,	'',	'\"Fulfilling the client\'s needs of displaying the dishes in away that captures the attention of their prospects, we designs the creatives with minimum distractions and maximum focus on the dish.\r\n\r\nWe also used the their brand colors and added subtle elements to make the dish stand out and look more delicious.\"',	NULL,	NULL,	'Active',	'2023-06-28 16:14:10',	'0000-00-00 00:00:00'),
(26,	5,	4,	NULL,	'Mapped',	'Petunia-mockup(1).jpg',	'No',	'',	'No',	NULL,	'',	'Our digital print design features a beautiful pink rose adorned with dew, carefully chosen to resonate with a wide range of people. We deliberately chose pink instead of red to appeal to a broader audience and suit various occasions. Pink has universal charm, making it a perfect gift for romantic partners and cherished family members. We believe in creating designs that captivate and touch the hearts of many, and our choice of the pink rose accomplishes just that.',	NULL,	NULL,	'Active',	'2023-06-28 16:14:10',	'0000-00-00 00:00:00'),
(27,	5,	4,	NULL,	'Mapped',	'Petunia-Mockup(2).jpg',	'No',	'',	'No',	NULL,	'',	'Our image showcases a stunning array of flowers in various vibrant colors, beautifully contrasting against a subtle backdrop. With our carefully curated collection, we offer creative options to cater to different audiences. Whether you\'re seeking elegant classics, bold and vibrant arrangements, or unique and exotic blooms, the designs illustrate the variety at the flower shop.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(28,	5,	4,	NULL,	'Mapped',	'Petunia-Mockup(3).jpg',	'No',	'',	'No',	NULL,	'',	'Maintaining a fresh and engaging online presence is essential for branding. Through thoughtfully designed variations in the creatives and content, we ensure that the brand\'s essence and value shine through. We real flower images, correct them to perfection and curate compelling content that perfectly complements each image. Incorporating relevant hashtags maximizes our reach, leaving no stone unturned in our quest to connect with floral enthusiasts.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(29,	5,	4,	NULL,	'Mapped',	'Petunia-Mockup(4).jpg',	'No',	'',	'No',	NULL,	'',	'Our focus is on creating an attractive and informative feed for our viewers. We take pride in curating designs that are visually appealing while also educating users about various flowers and occasions for gifting.The key to a successful social media post is posting relevant content that provides value to the viewer.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(30,	5,	4,	NULL,	'Mapped',	'Petunia-Mockup(5).jpg',	'No',	'',	'No',	NULL,	'',	'\"We went the extra mile to connect with our intended audience. By leveraging the captivating stories feature, we showcased the beautiful flowers, capturing the attention of a wide-ranging audience. We carefully selected stickers that resonated with our target market, ensuring our posts hit the spot and inspired them to experience the exceptional services provided by our clients. Our thoughtful design choices were driven by a desire to engage and entice, allowing people to understand the purpose behind our creative approach.\"',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(31,	5,	4,	NULL,	'Mapped',	'Petunia-Mockup(6).jpg',	'No',	'',	'No',	NULL,	'',	'We adopted an interactive approach to engage our audience on social media. By tapping into the curiosity and interests of our followers, we created a dynamic and enjoyable experience. Our strategy aimed to spark conversations, generate buzz, and ultimately build a loyal community around our client\'s flower shop. We deepened the relationship with each interaction, establishing our brand as a go-to destination for stunning floral arrangements and personalized service.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(32,	6,	4,	NULL,	'Mapped',	'Queen\'s-Palace-Mockup(1).jpg',	'No',	'',	'No',	NULL,	'',	'The social media content planning involved placing their dine-in outlets as regular pit-stops for the locals, whereas they positioned their suites & accommodations for tourists and business travelers.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(33,	6,	4,	NULL,	'Mapped',	'Queen\'s-Palace-Mockup(2).jpg',	'No',	'',	'No',	NULL,	'',	'We also banked on holidays specific to UAE. Quirky, humor-filled content to make their daily offerings relatable to people. At the same time, we were using a contrasting color palette to bring out the visuals, ensuring the images are central to the attention span of the audience.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(34,	6,	4,	NULL,	'Mapped',	'Queen\'s-Palace-Mockup(3).jpg',	'No',	'',	'No',	NULL,	'',	'\"Thematic campaigns promoted special offers, while Instagram\'s story feature showcased enticing hotel features. \r\n\r\nWith a highly engaging comment section, customers interacted actively, and user-generated content served as valuable testimonials. We implemented an interactive landing page with compelling CTAs, enhanced conversions, and effective Google listing and local SEO for increased local discoverability.\"',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(35,	6,	4,	NULL,	'Mapped',	'Queen\'s-Palace-Mockup(4).jpg',	'No',	'',	'No',	NULL,	'',	'Our integrated digital marketing strategy combined Adwords and organic social media content, achieving optimal results. Showcase their amenities like pool, banquets, party spots, and comfy rooms are well-received by the audience and translate into page engagement, reach & impressions. Also, we added seasonal promos to the bank on-moment marketing, like Pool during Summer Times.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(36,	6,	4,	NULL,	'Mapped',	'Queen\'s-Palace-Mockup(5).jpg',	'No',	'',	'No',	NULL,	'',	'The Target of the social media campaign was to position the brand as an all-around hospitality landmark of luxury in Abu Dhabi. This meant creating a planner that covers every aspect of the property and adding relevant images to give the audience an inside view of the property to make the page more experiential.',	NULL,	NULL,	'Active',	'2023-06-28 16:18:40',	'0000-00-00 00:00:00'),
(37,	7,	4,	NULL,	'Mapped',	'Safi-Sana-Mockup(1).jpg',	'No',	'',	'No',	NULL,	'',	'\"Most posts are created in promotional tones, highlighting the offers and discounts in engaging content. \r\nWe created stories, highlights, and reels to produce various content. \"',	NULL,	NULL,	'Active',	'2023-06-28 19:43:53',	'0000-00-00 00:00:00'),
(38,	7,	4,	NULL,	'Mapped',	'Safi-Sana-Mockup(2).jpg',	'No',	'',	'No',	NULL,	'',	'We worked on the variation of designs, ensuring we covered each dish and related offers from different perspectives. The planner is curated to highlight their best-selling options. Recommendations, offers, and CTAs are always highlighted for extra-attention.',	NULL,	NULL,	'Active',	'2023-06-28 19:43:53',	'0000-00-00 00:00:00'),
(39,	7,	4,	NULL,	'Mapped',	'Safi-Sana-Mockup(3).jpg',	'No',	'',	'No',	NULL,	'',	'Variety is the key to social media. To keep the page vibrant, engaging, and interactive, we experimented with designs and banked on special occasions like Eid to create messages that our audience could resonate with.',	NULL,	NULL,	'Active',	'2023-06-28 19:43:53',	'0000-00-00 00:00:00'),
(40,	7,	4,	NULL,	'Mapped',	'Safi-Sana-Mockup(4).jpg',	'No',	'',	'No',	NULL,	'',	'\"We followed the 80-20 rule for each image, where 80% of the space and 20% of the content is used for the image. \r\n\r\nWe made sure the discount outline was attention-grabbing. The food shots are carefully selected and sorted. \"',	NULL,	NULL,	'Active',	'2023-06-28 19:43:53',	'0000-00-00 00:00:00'),
(41,	7,	4,	NULL,	'Mapped',	'Safi-Sana-Mockup(5).jpg',	'No',	'',	'No',	NULL,	'',	'The overall look & feel of the page is to tempt our audience to book a table and relish the delicacies. We experience 325% boost on Taps to external links and CTAs.',	NULL,	NULL,	'Active',	'2023-06-28 19:43:53',	'0000-00-00 00:00:00'),
(42,	8,	4,	NULL,	'Mapped',	'sparkle-spa.jpg',	'No',	'',	'No',	NULL,	'',	'The design of the Sparkle Spa perfectly justifies its theme of tranquility and rejuvenation. Every aspect of the design is carefully crafted to create a serene and inviting atmosphere for clients.',	NULL,	NULL,	'Active',	'2023-06-28 19:50:26',	'0000-00-00 00:00:00'),
(43,	8,	4,	NULL,	'Mapped',	'sparkle-spa1.jpg',	'No',	'',	'No',	NULL,	'',	'Visual hierarchy is another essential element in creating readable designs. By emphasizing important information through size, weight, or placement, designers guide the viewer\'s attention and ensure key messages are easily understood. Strategic use of headings, subheadings, and bullet points can help break up content and improve readability.',	NULL,	NULL,	'Active',	'2023-06-28 19:50:26',	'0000-00-00 00:00:00'),
(44,	8,	4,	NULL,	'Mapped',	'sparkle-spa2.jpg',	'No',	'',	'No',	NULL,	'',	'Diverse designs for a diverse range of content involve tailoring the visual elements, layouts, and interactive features to effectively showcase the unique characteristics of each content type. By considering the specific requirements and goals of the content, designers create visually appealing, engaging, and immersive designs that capture the attention of audiences and deliver impactful messages.',	NULL,	NULL,	'Active',	'2023-06-28 19:50:26',	'0000-00-00 00:00:00'),
(45,	8,	4,	NULL,	'Mapped',	'sparkle-spa3.jpg',	'No',	'',	'No',	NULL,	'',	'Detailedly specific designs require a meticulous approach to typography, colour selection, illustrations, layout, and visual effects. By paying close attention to these elements, designers create visually compelling designs that align with the content\'s purpose, effectively communicate the intended message, and leave a lasting impression on the audience.',	NULL,	NULL,	'Active',	'2023-06-28 19:52:12',	'0000-00-00 00:00:00'),
(46,	8,	4,	NULL,	'Mapped',	'sparkle-spa4.jpg',	'No',	'',	'No',	NULL,	'',	'Multi-screen friendly designs involve employing responsive design techniques, prioritizing content, optimizing for touch interactions, maintaining consistency in branding, and conducting regular testing. By considering the diverse range of devices and user preferences, designers ensure that their designs are visually appealing, readable, and user-friendly across various screens.',	NULL,	NULL,	'Active',	'2023-06-28 19:52:32',	'0000-00-00 00:00:00'),
(47,	9,	4,	NULL,	'Mapped',	'texas.jpg',	'No',	'',	'No',	NULL,	'',	'This captivating Insta page brings their tech expertise to the forefront. It created a digital hub that inspires innovation, fosters connections, and showcases their cutting-edge solutions. Through engaging visuals and informative content, we aimed to ignite a tech revolution amongst the audience.',	NULL,	NULL,	'Active',	'2023-06-28 19:52:32',	'0000-00-00 00:00:00'),
(48,	9,	4,	NULL,	'Mapped',	'texas1.jpg',	'No',	'',	'No',	NULL,	'',	'We wove a captivating tapestry of technology through reels, stories, and static posts on their social media platform. Each reel unraveled the magic of their IT solutions, stories immersed viewers in the brand\'s journey, and static posts showcased their excellence. Seamlessly blending innovation and engagement, we redefined the art of captivating digital storytelling.',	NULL,	NULL,	'Active',	'2023-06-28 19:55:56',	'0000-00-00 00:00:00'),
(49,	9,	4,	NULL,	'Mapped',	'texas2.jpg',	'No',	'',	'No',	NULL,	'',	'Their captivating social media post unveils their expansive array of IT services in a single glance. From cutting-edge Surveillance Systems to advanced Networking solutions, their expertise was showcased. With innovative visuals and compelling content, they redefine the possibilities of technology, paving the way for seamless and efficient business operations. 		',	NULL,	NULL,	'Active',	'2023-06-28 19:55:56',	'0000-00-00 00:00:00'),
(50,	9,	4,	NULL,	'Mapped',	'texas3.jpg',	'No',	'',	'No',	NULL,	'',	'These striking social media posts mesmerize with the dynamic combination of black and red. Symbolizing power and innovation, these colors command attention and evoke a sense of confidence in their services. The bold palette captivates customers, enticing them to explore the exceptional IT solutions that await, setting the stage for a transformative technology journey.',	NULL,	NULL,	'Active',	'2023-06-28 19:55:56',	'0000-00-00 00:00:00'),
(51,	9,	4,	NULL,	'Mapped',	'texas4.jpg',	'No',	'',	'No',	NULL,	'',	'Through meticulous analytics, we dove into the impact of Texas Systems Technology\'s social media posts. Unveiling valuable insights, we discovered what resonated with their audience, allowing us to tailor content even more effectively.',	NULL,	NULL,	'Active',	'2023-06-28 19:55:56',	'0000-00-00 00:00:00'),
(52,	10,	4,	NULL,	'Mapped',	'TREX-Mockup(1).jpg',	'No',	'',	'No',	NULL,	'',	'We insisted on implementing synchronous offline and online campaigns for overall marketing impact. For online, we leveraged an SEO-friendly website, rampant social media presence, and carefully balanced paid and sponsored ads.',	NULL,	NULL,	'Active',	'2023-06-28 19:59:53',	'0000-00-00 00:00:00'),
(53,	10,	4,	NULL,	'Mapped',	'TREX-Mockup(2).jpg',	'No',	'',	'No',	NULL,	'',	'Trex Properties are affiliated with a wide array of properties. Each property has its unique theme and concept. While designing, we wanted to ensure we captured the essence of each property and incorporated the branding of Trex into the same.',	NULL,	NULL,	'Active',	'2023-06-28 19:59:53',	'0000-00-00 00:00:00'),
(54,	10,	4,	NULL,	'Mapped',	'TREX-Mockup(3).jpg',	'No',	'',	'No',	NULL,	'',	'For offline, we created visiting cards, banners, flex, pamphlets, brochures, hoarding, and ads, integrating this with our online presence for maximum impact and brand-callback value.',	NULL,	NULL,	'Active',	'2023-06-28 19:59:53',	'0000-00-00 00:00:00'),
(55,	10,	4,	NULL,	'Mapped',	'TREX-Mockup(4).jpg',	'No',	'',	'No',	NULL,	'',	'To keep the grid view of the page fresh, we created designs that complement the primary and secondary colors of the templates. ',	NULL,	NULL,	'Active',	'2023-06-28 19:59:53',	'0000-00-00 00:00:00'),
(56,	10,	4,	NULL,	'Mapped',	'TREX-Mockup(5).jpg',	'No',	'',	'No',	NULL,	'',	'The content planner was created to give equal prominence to each property. Analytics helped to identify which posts were performing better than average. A mix of reels, stories, carousels, and statics was used for the brand. ',	NULL,	NULL,	'Active',	'2023-06-28 19:59:53',	'0000-00-00 00:00:00'),
(57,	10,	4,	NULL,	'Mapped',	'TREX-Mockup(6).jpg',	'No',	'',	'No',	NULL,	'',	'Also, we needed to design a content-intensive layout that keeps the look & feel of the posts. Highlighting the promotional bits without making the design feel too cluttered was a challenge we managed with relative ease.',	NULL,	NULL,	'Active',	'2023-06-28 20:02:30',	'0000-00-00 00:00:00');

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
(1,	'Al-Masaood',	'al_masaood',	'al_masaood_logo.png',	'project_image.jpg',	'No',	NULL,	'The sun cast a golden hue over the tranquil meadow as a gentle breeze rustled through the leaves.',	'The Al Masaood Jewellery logo is an exquisite fusion of elegance and sophistication. The intertwined letters A and M, rendered in a captivating combination of rich brown and pristine white, symbolize the brand\'s unwavering commitment to timeless beauty. It\'s a symbol that whispers of luxury, craftsmanship, and the artistry of fine jewelry.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:20:31',	NULL),
(2,	'Al-Murooj',	'al_murooj',	'al_murooj_scientific_private_school.png',	NULL,	'No',	NULL,	'',	'The logo aims to create a memorable and impactful visual representation that instills a sense of pride and recognition among students, parents, and the community. It serves as a symbol of the school\'s commitment to academic excellence, personal growth, and the pursuit of knowledge.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:26:22',	NULL),
(3,	'Gandofly',	'gandofly',	'gandofly_logo.png',	NULL,	'No',	NULL,	'',	'Our meticulously crafted logo embodies the spirit of Gandofly Seafood Restaurant with its striking design. The prominent depiction of a majestic shark atop the logo symbolizes the deep connection to the sea and the abundance of marine delights they offer. The bold and captivating \"Gandofly\" typography, rendered in large, commanding letters against a vibrant red background, evokes a sense of energy and passion for exceptional seafood cuisine.	\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		\r\n		',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:28:35',	NULL),
(4,	'Al-Askandrani',	'al_askandrani',	'al_askandrani_logo.png',	NULL,	'No',	NULL,	'',	'Inspired by the Sea and the dock, the interiors and the branding incorporate elements consistent with the brand: the Lighthouse, Anchor & Helm, all representative of this concurrent theme. 		\r\n		\r\n		\r\n		\r\n		\r\n		',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 11:33:24',	NULL),
(5,	'Petunia',	'petunia',	'petunia_logo.png',	NULL,	'No',	NULL,	NULL,	'\"The logo of Petunia Chocolate and Floral is a re-imagination of mistletoe - a symbol of love, affection, and goodwill, with qualities and characteristics similar to that of a flower. \r\nWe have used the colors golden, lilac, and pink, which denote success, beauty, and affection, respectively, depicting the thought behind the gift-giver. Petunia Chocolate and Floral is a gift shop in Abu Dhabi that offers flowers, chocolates, and balloons for all occasions.\"',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-28 10:46:26',	NULL),
(6,	'Queen palace',	'queen_palace',	'queen_palace.png',	NULL,	'No',	NULL,	NULL,	'We aim to achieve a solid online presence across multiple channels, increasing footfall for stays and dine-outs. Through brand-building efforts, we aim to enhance overall brand awareness, resulting in marked improvements in ROI generation.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:30:05',	NULL),
(7,	'Safi sana',	'safi_sana',	'safi_sana.png',	NULL,	'No',	NULL,	NULL,	'Simple & minimal, the logo and the branding are done in the palette of blue. However, we needed to add more texture and variety to the pages. Make it more lively.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:30:48',	NULL),
(8,	'Sparkle spa',	'sparkle_spa',	'sparkle_spa.png',	NULL,	'No',	NULL,	NULL,	'The Sparkle Spa logo captures the essence of the spa\'s mission to provide a serene and rejuvenating experience for its clients. It communicates a sense of elegance, tranquility, and beauty, inviting individuals to immerse themselves in a world of pure relaxation and indulgence.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:31:33',	NULL),
(9,	'Texas',	'texas',	'Texas.png',	NULL,	'No',	NULL,	NULL,	'The logo of Texas Systems Technology beautifully captures the essence of innovation and reliability. With a captivating blend of black, red, and white, it exudes a powerful and modern appeal. Symbolizing their commitment to excellence, it represents the cutting-edge solutions and unwavering dedication that sets them apart in the IT industry.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:32:19',	NULL),
(10,	'Trex',	'trex',	'trex_properties.png',	NULL,	'No',	NULL,	NULL,	'We built the logo for Trex using the negative spacing concept between the Letters E & X. Keeping the colors minimal in two shades, we create contrast, highlight the \"home\" in the negative space, and build consistent brand colors and tone to build the brand identity. Luxurious, immersive, alluring while homely and comfy are the overall tone we wanted to achieve with the brand.',	NULL,	NULL,	NULL,	'Active',	NULL,	'2023-06-27 14:33:03',	NULL),
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
(1,	'Content Marketing',	'content_marketing',	'content-marketing.png',	NULL,	'No',	NULL,	'Creating and distributing valuable content to attract and engage your target audience.',	'Our branding services help businesses create a solid and memorable brand identity that resonates with their target audience. We offer a comprehensive range of services, from logo design and brand identity development to brand strategy and positioning, brand messaging and storytelling, brand guidelines and style guides, visual assets creation, packaging design, brand audits, and analysis, brand refresh or rebranding, online and offline brand presence optimization, and brand reputation management. We understand that every business is different, so we tailor our services to meet the specific needs of our clients. We work with you to understand your brand goals, target audience, and competitive landscape. We then develop a branding strategy to help you achieve your goals and reach your target audience. A strong brand is essential for business success. A well-branded business is more likely to be remembered, more likely to be trusted, and more likely to be successful.',	4,	'Active',	'2023-06-27 10:43:31',	NULL),
(2,	'Graphics Design',	'graphic_design',	'Graphic-design.png',	NULL,	'No',	NULL,	'Visual communication through the artful combination of typography, imagery, and layout.',	'In graphics designing, we offer comprehensive services to cater to your visual branding needs. Our talented team excels in crafting impactful designs that leave a lasting impression. We cover everything from logo design, brochure and flyer design, poster and banner design, infographic creation, and packaging design. Our expertise includes creating eye-catching social media graphics, unique illustrations, and custom artwork. We also specialize in designing effective print and digital advertisements that reflect your brand identity. Additionally, we provide visual branding solutions for events and exhibitions, ensuring a cohesive and visually appealing presence. With our graphics designing services, you can expect top-notch quality and attention to detail in every project.',	3,	'Active',	'2023-06-27 10:45:29',	NULL),
(3,	'Website Development',	'website_development',	'website-development.png',	NULL,	'No',	NULL,	'Building and creating functional and visually appealing websites for businesses and individuals.',	'Regarding website development, we offer comprehensive services to bring your online presence to life. Our skilled team excels in custom website design and development, tailoring the design and functionality to suit your unique needs. Whether you require an e-commerce platform to sell products or services or need a content management system (CMS) for easy website updates, we have you covered. Our experts prioritize user experience (UX) and user interface (UI) design, crafting intuitive and visually appealing interfaces. We also provide website maintenance and updates to ensure your website remains secure and up to date. Additionally, our team is experienced in optimizing website performance for faster loading times and implementing robust security measures. From crafting engaging landing pages to implementing website analytics and tracking, we offer comprehensive website development solutions to enhance your online presence and drive results.',	15,	'Active',	'2023-06-27 10:48:01',	NULL),
(4,	'Social Media',	'social_media',	'social-media.png',	NULL,	'No',	NULL,	'Connecting, engaging, and sharing content with audiences through online platforms for communication, networking, and marketing purposes.',	'Regarding social media, our comprehensive range of services ensures your brand thrives digitally. We develop a tailored social media strategy to align with your business objectives. Our creative team excels in content creation and curation, crafting engaging posts that captivate your audience. We handle social media account setup and optimization, ensuring your profiles reflect your brand identity and attract followers.',	5,	'Active',	'2023-06-27 10:49:28',	NULL),
(5,	'SEO',	'seo',	'SEO.png',	NULL,	'No',	NULL,	'Optimizing websites to improve visibility and organic rankings on search engines, driving targeted traffic and increasing online visibility.',	'In the SEO domain, we offer comprehensive services to enhance online visibility and drive organic traffic to your website. Our skilled team excels in keyword research and analysis, on-page optimization, off-page optimization, technical SEO, local SEO optimization, SEO audits and website analysis, SEO content writing and optimization, mobile optimization, SEO tracking and analytics, SEO consulting, and strategy development. With our SEO expertise, you can expect improved search engine rankings, increased website authority, and targeted organic traffic. We employ the latest strategies and best practices to ensure long-term results, helping your business thrive in the digital landscape. Our dedicated team is committed to delivering exceptional quality and achieving your SEO goals.',	NULL,	'Active',	'2023-06-27 10:51:15',	NULL),
(6,	'Video Marketing ',	'video_marketing',	'video-marketing.png',	NULL,	'No',	NULL,	'Utilizing engaging and compelling videos to promote products, services, or messages and reach a wider audience for effective marketing and communication.',	'For video marketing, we offer comprehensive services to help you effectively engage your audience through captivating visuals. Our team specializes in video concept development and scriptwriting, ensuring your message is conveyed effectively. We handle every aspect of video production, from filming to editing and post-production, delivering high-quality videos that resonate with your target audience. Our expertise extends to animation and motion graphics, adding a touch of creativity and visual appeal to your videos. We excel in brand storytelling through video, creating compelling narratives that connect with viewers emotionally. Our services also include product demonstrations and tutorials, customer testimonials and case study videos, and explainer videos to simplify complex concepts. Through video analytics and performance tracking, we provide valuable insights into viewer engagement and measure the success of your video marketing campaigns. With our video marketing services, you can expect exceptional creativity, professionalism, and a powerful visual storytelling approach that sets your brand apart.',	NULL,	'Active',	'2023-06-27 10:52:24',	NULL);

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


-- 2023-06-28 18:51:24
