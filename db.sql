-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2025 at 03:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saaf_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `created_at`, `updated_at`, `link_video`) VALUES
(1, 'uploads/about/maalm-kran-otgoyd-2025-12-25-01-19-29-3713.png', '2024-11-13 10:06:01', '2025-12-25 11:19:29', 'https://www.youtube.com/watch?v=619LtwJuLNo');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `about_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'معلّم قرآن وتجويد', 'بفضل الله وحده وبتوفيقه ربنا أكرمنى وحصلت على دبلومة  إجازة تدريس القرآن الكريم بتقدير إمتياز  من أكاديمية جدير لدراسات القرآن الكريم  لبناء معلمى القرآن الكريم والمعتمده عالميا بشهادة الأيزو \r\nوالقاءم عليها  رئيس مراكز الدكتور أحمد عيسى المعصراوى', '<p>بفضل الله وحده وبتوفيقه ربنا أكرمنى وحصلت على دبلومة إجازة تدريس القرآن الكريم بتقدير إمتياز من أكاديمية جدير لدراسات القرآن الكريم لبناء معلمى القرآن الكريم والمعتمده عالميا بشهادة الأيزو&nbsp;<br />والقاءم عليها رئيس مراكز الدكتور أحمد عيسى المعصراوى&nbsp;</p>', NULL, NULL),
(2, 1, 'en', 'A coffee bean.. and a touch of art are enough, to make a difference in your day.', 'At Sa\'af Cafe, we believe that coffee isn\'t just a drink, but a carefully crafted experience.\r\nWe offer a variety of hot and cold beverages prepared with the finest ingredients, so you\'ll always find something to suit your taste and mood.\r\n\r\n🌿 Enjoy a warm and comfortable atmosphere. Make your time with us a place to relax, work, or meet friends.\r\nWhether you\'ve come to start your morning with energy or end your day with a moment of relaxation, we\'re here to provide you with the experience you deserve.', '<p><br />🌿 Enjoy a warm and comfortable atmosphere. Make your time with us a place to relax, work, or meet friends.<br />Whether you\'ve come to start your morning with energy or end your day with a moment of relaxation, we\'re here to provide you with the experience you deserve.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$/yLOnh2ugJpEsDGEE/ITL.93FHl6RuzYsSe3FMZ0gIwyanfrbM3.q', NULL, '2024-11-13 10:06:01', '2024-11-13 10:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand_translations`
--

CREATE TABLE `brand_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countrs`
--

CREATE TABLE `countrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bg_hover` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrs`
--

INSERT INTO `countrs` (`id`, `image`, `number`, `created_at`, `updated_at`, `bg_hover`, `color`) VALUES
(1, NULL, '500', '2025-08-26 09:19:40', '2025-08-28 19:02:10', NULL, '#696d58'),
(2, NULL, '150', '2025-08-26 13:04:36', '2025-08-28 19:04:13', NULL, '#ccbfa6'),
(3, NULL, '10', '2025-08-26 13:04:49', '2025-08-28 19:05:29', NULL, '#4d4833');

-- --------------------------------------------------------

--
-- Table structure for table `countr_translations`
--

CREATE TABLE `countr_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countr_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countr_translations`
--

INSERT INTO `countr_translations` (`id`, `countr_id`, `locale`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'زائر يوميًا', NULL, NULL),
(2, 1, 'en', 'Visitor daily', NULL, NULL),
(3, 2, 'ar', 'مشروب متميز', NULL, NULL),
(4, 2, 'en', 'Outstanding drink', NULL, NULL),
(5, 3, 'ar', 'خدمة مختلفة', NULL, NULL),
(6, 3, 'en', 'Different service', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_opinions`
--

CREATE TABLE `customer_opinions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_opinions`
--

INSERT INTO `customer_opinions` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/CustomerOpinions/ali-2025-08-27-07-26-12-7104.png', '2025-08-27 04:26:12', '2025-08-27 04:26:12'),
(2, 'uploads/CustomerOpinions/nour-badri-2025-09-01-12-20-03-3522.png', '2025-09-01 19:19:38', '2025-09-01 19:20:03'),
(3, 'uploads/CustomerOpinions/mahmoud-amjad-2025-09-01-12-33-03-5179.png', '2025-09-01 19:33:03', '2025-09-01 19:33:03'),
(4, 'uploads/CustomerOpinions/laila-ahmed-2025-09-01-12-34-53-7770.jpg', '2025-09-01 19:34:53', '2025-09-01 19:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer_opinions_translations`
--

CREATE TABLE `customer_opinions_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_opinions_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_opinions_translations`
--

INSERT INTO `customer_opinions_translations` (`id`, `customer_opinions_id`, `locale`, `title`, `sub_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'أحمد عاطف', 'سعف كافيه هو أكثر مكان يعجبني في المدينة القهوة طعمها مضبوط، والموظفين مبتسمين دايمًا. الجو هنا يعين الواحد يشتغل أو يرتاح. جربت \"قهوة موكا\" وكان الطعم شي لا يعلى عليه', 'سعف كافيه هو أكثر مكان يعجبني في المدينة القهوة طعمها مضبوط، والموظفين مبتسمين دايمًا. الجو هنا يعين الواحد يشتغل أو يرتاح. جربت \"قهوة موكا\" وكان الطعم شي لا يعلى عليه', NULL, NULL),
(2, 1, 'en', 'Ahmed Atif', 'Saaf Cafe is my favorite place in town The coffee tastes great, and the staff is always smiling. The atmosphere here helps you work or relax. I tried the Mocha Coffee and the taste was amazing', 'Saaf Cafe is my favorite place in town The coffee tastes great, and the staff is always smiling. The atmosphere here helps you work or relax. I tried the Mocha Coffee and the taste was amazing', NULL, NULL),
(3, 2, 'ar', 'نور البدري', 'مكان هاديء وراقي، والديكور يخليك تحس بالراحة. جربت مشروب \"القهوة التركية\"، طعم فريد وما له مثيل. أكيد بنزل مره ثانية لحق القهوة الحلوة هذي', 'مكان هاديء وراقي، والديكور يخليك تحس بالراحة. جربت مشروب \"القهوة التركية\"، طعم فريد وما له مثيل. أكيد بنزل مره ثانية لحق القهوة الحلوة هذي', NULL, NULL),
(4, 2, 'en', 'Nour Badri', 'A quiet and elegant place, and the decor makes you feel comfortable. I tried the \"Turkish coffee\" drink, it had a unique and unparalleled taste. I will definitely come back again to try this delicious coffee.', 'A quiet and elegant place, and the decor makes you feel comfortable. I tried the \"Turkish coffee\" drink, it had a unique and unparalleled taste. I will definitely come back again to try this delicious coffee.', NULL, NULL),
(5, 3, 'ar', 'محمود أمجد', 'من يوم ما جربت الكافيه، ما صرت أروح غيره  طعم القهوة عندهم غير، خصوصًا \"اللاتيه\" مع طعم الفانيليا. أفضل مكان لمحبي القهوة', 'من يوم ما جربت الكافيه، ما صرت أروح غيره\r\n طعم القهوة عندهم غير، خصوصًا \"اللاتيه\" مع طعم الفانيليا. أفضل مكان لمحبي القهوة', NULL, NULL),
(6, 3, 'en', 'Mahmoud Amjad', 'Since I tried this café, I\'ve never gone anywhere else. Their coffee tastes different, especially the latte with vanilla. The perfect place for coffee lovers.', 'Since I tried this café, I\'ve never gone anywhere else. Their coffee tastes different, especially the latte with vanilla. The perfect place for coffee lovers.', NULL, NULL),
(7, 4, 'ar', 'ليلى أحمد', 'الجو في الكافيه جميل، دايمًا الأجواء هادئة والديكور يريح العين.', 'الجو في الكافيه جميل، دايمًا الأجواء هادئة والديكور يريح العين.', NULL, NULL),
(8, 4, 'en', 'Laila Ahmed', 'The atmosphere in the cafe is nice, it is always calm and the decor is soothing to the eye.', 'The atmosphere in the cafe is nice, it is always calm and the decor is soothing to the eye.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/features/byy-taalymy-mhfz-2025-12-25-12-42-58-7947.png', '2025-08-26 13:14:43', '2025-12-25 10:42:58'),
(2, 'uploads/features/mtabaa-frdy-dkyk-2025-12-25-12-43-14-6893.png', '2025-08-26 13:15:07', '2025-12-25 10:43:14'),
(3, 'uploads/features/bramg-tzky-alnfs-2025-12-25-12-43-27-6083.png', '2025-08-26 13:15:29', '2025-12-25 10:43:27'),
(4, 'uploads/features/thfyth-mtkn-2025-12-25-12-43-40-2866.png', '2025-12-25 10:43:40', '2025-12-25 10:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `feature_translations`
--

CREATE TABLE `feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_translations`
--

INSERT INTO `feature_translations` (`id`, `feature_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'بيئة تعليمية محفزة', 'نوفر أجواء هادئة وممتعة تساعد على التركيز، وتعزّز ارتباطه بالقرآن ومحبة التعلم.', NULL, NULL),
(2, 1, 'en', 'Tea tastes  different', 'Tea tastes different', NULL, NULL),
(3, 2, 'ar', 'متابعة فردية دقيقة', 'نُقيّم مستوى كل طالب بشكل دوري لضمان التقدم وتحقيق أفضل نتائج.', NULL, NULL),
(4, 2, 'en', 'Your coffee and mood with us', 'Your coffee and mood with us', NULL, NULL),
(5, 3, 'ar', 'برامج تزكية النفس', 'نعتني بتربية القلوب عبر دروس إيمانية تُهذّب السلوك وتُنمّي الروح.', NULL, NULL),
(6, 3, 'en', 'Delicious sweets  Various', 'Delicious sweets\r\nVarious', NULL, NULL),
(7, 4, 'ar', 'تحفيـظ متــقن', 'نُدرّس القرآن بمنهجية تعتمد على التكرار، والمراجعة المستمرة لضمان حفظ ثابت.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `type`, `link`, `created_at`, `updated_at`) VALUES
(1, 'uploads/Gallery/gallery-2025-09-01-12-39-38-3168.png', '0', NULL, '2025-08-27 10:28:49', '2025-09-01 19:39:38'),
(2, 'uploads/Gallery/gallery-2025-09-01-01-03-40-7225.png', '0', NULL, '2025-08-27 10:29:01', '2025-09-01 20:03:40'),
(3, 'uploads/Gallery/gallery-2025-09-01-01-02-29-1294.png', '0', NULL, '2025-09-01 20:02:29', '2025-09-01 20:02:29'),
(4, 'uploads/Gallery/gallery-2025-09-01-01-03-07-9816.png', '0', NULL, '2025-09-01 20:03:07', '2025-09-01 20:03:07'),
(5, 'uploads/Gallery/gallery-2025-09-01-01-04-37-7303.png', '0', NULL, '2025-09-01 20:04:37', '2025-09-01 20:04:37'),
(6, 'uploads/Gallery/gallery-2025-09-01-01-09-10-2494.png', '0', NULL, '2025-09-01 20:09:10', '2025-09-01 20:09:10'),
(7, 'uploads/Gallery/gallery-2025-09-01-01-10-21-7015.png', '0', NULL, '2025-09-01 20:10:21', '2025-09-01 20:10:21'),
(8, 'uploads/Gallery/gallery-2025-09-01-01-11-28-9955.png', '0', NULL, '2025-09-01 20:11:28', '2025-09-01 20:11:28'),
(9, 'uploads/Gallery/gallery-2025-09-01-01-11-46-1550.png', '0', NULL, '2025-09-01 20:11:46', '2025-09-01 20:11:46'),
(10, 'uploads/Gallery/gallery-2025-09-01-01-12-08-2499.png', '0', NULL, '2025-09-01 20:12:08', '2025-09-01 20:12:08'),
(11, 'uploads/Gallery/gallery-2025-09-01-01-12-32-6182.png', '0', NULL, '2025-09-01 20:12:32', '2025-09-01 20:12:32'),
(12, 'uploads/Gallery/gallery-2025-09-01-01-17-36-9075.png', '0', NULL, '2025-09-01 20:17:36', '2025-09-01 20:17:36'),
(13, 'uploads/Gallery/gallery-2025-09-01-01-19-59-5665.png', '0', NULL, '2025-09-01 20:19:59', '2025-09-01 20:19:59'),
(14, 'uploads/Gallery/gallery-2025-09-01-01-22-51-4557.png', '0', NULL, '2025-09-01 20:22:51', '2025-09-01 20:22:51'),
(15, 'uploads/Gallery/gallery-2025-09-01-01-24-00-1456.png', '0', NULL, '2025-09-01 20:24:00', '2025-09-01 20:24:00'),
(16, 'uploads/Gallery/gallery-2025-09-01-01-24-43-9454.png', '0', NULL, '2025-09-01 20:24:43', '2025-09-01 20:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `guards`
--

CREATE TABLE `guards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guards_translations`
--

CREATE TABLE `guards_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guards_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meta_tag_banners`
--

CREATE TABLE `meta_tag_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL COMMENT 'this column will be enum',
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_tag_banners`
--

INSERT INTO `meta_tag_banners` (`id`, `page`, `title`, `title_en`, `keywords`, `description`, `description_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'home', 'أكاديمية أنوار القرآن (الشيخ رامي)', 'أكاديمية أنوار القرآن (الشيخ رامي)', 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.', 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.', 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.', 'uploads/metatags/akadymy-anoar-alkran-alshykh-ramy-2025-12-25-11-50-42-7248.png', '2024-11-13 10:07:34', '2025-12-25 09:50:42'),
(2, 'about', 'عن الكافيه', 'About the cafe', 'من نحن سعف كافيه  قصة سعف كافيه  رسالتنا في القهوة  فلسفة القهوة المختصة  مقهى في [اسم المدينة]  شغف القهوة  جودة البن العربي  تجربة القهوة المميزة  مقهى متخصص  كافيه يقدم القهوة المختصة  أفضل مقهى  ثقافة القهوة  إعداد القهوة باحترافية  مقهى يجمع بين الأصالة والحداثة  مقهى برؤية جديدة', 'عن الكافيه', 'About the cafe', 'uploads/metatags/about-the-cafe-2025-09-01-12-01-04-7878.png', '2024-11-13 10:09:04', '2025-09-01 19:01:04'),
(3, 'gallery', 'معرض الصور', 'Gallery', 'كافيهات صور كافيهات', 'معرض الصور', 'Gallery', 'uploads/metatags/voluptate-blanditiis-2025-09-01-12-01-36-7891.png', '2024-11-13 10:09:42', '2025-09-01 19:02:40'),
(4, 'contact', 'تواصل معنا', 'Contact us', 'من نحن سعف كافيه  قصة سعف كافيه  رسالتنا في القهوة  فلسفة القهوة المختصة  مقهى في [اسم المدينة]  شغف القهوة  جودة البن العربي  تجربة القهوة المميزة  مقهى متخصص  كافيه يقدم القهوة المختصة  أفضل مقهى في [اسم المدينة]  ثقافة القهوة  إعداد القهوة باحترافية  مقهى يجمع بين الأصالة والحداثة  مقهى برؤية جديدة', 'تواصل معنا', 'Contact us', 'uploads/metatags/contact-us-2025-08-28-12-29-21-6440.png', '2025-08-27 09:38:29', '2025-08-28 19:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_163450_create_admins_table', 1),
(6, '2023_11_28_005105_create_sliders_table', 1),
(7, '2023_11_28_005122_create_slider_translations_table', 1),
(8, '2023_11_28_005417_create_meta_tag_banners_table', 1),
(9, '2023_11_28_035602_create_abouts_table', 1),
(10, '2023_11_28_035616_create_about_translations_table', 1),
(11, '2023_11_28_045816_create_parteners_table', 1),
(12, '2023_11_28_054942_create_services_table', 1),
(13, '2023_11_28_054952_create_service_translations_table', 1),
(14, '2023_11_28_114315_create_projects_table', 1),
(15, '2023_11_28_114334_create_project_translations_table', 1),
(16, '2023_11_28_121000_create_brands_table', 1),
(17, '2023_11_28_121019_create_brand_translations_table', 1),
(18, '2023_11_28_121032_create_categories_table', 1),
(19, '2023_11_28_121043_create_category_translations_table', 1),
(20, '2023_11_28_121103_create_products_table', 1),
(21, '2023_11_28_121114_create_product_translations_table', 1),
(22, '2023_11_28_121124_create_product_images_table', 1),
(23, '2023_11_28_130445_create_settings_table', 1),
(24, '2023_11_30_083456_create_countrs_table', 1),
(25, '2023_11_30_083535_create_countr_translations_table', 1),
(26, '2023_11_30_083555_create_features_table', 1),
(27, '2023_11_30_083606_create_feature_translations_table', 1),
(28, '2023_12_03_095804_add_type_column_to_sliders_table', 1),
(29, '2024_01_31_211820_add_bg_hover_column_to_countrs_table', 1),
(30, '2024_02_06_194557_add_url_and_color1_color2_to_products_table', 1),
(31, '2024_02_06_200130_add_project_logo_to_products_table', 1),
(32, '2024_02_06_201533_add_field_and_technology_and_country_to_products_table', 1),
(33, '2024_02_06_220305_create_work_steps_table', 1),
(34, '2024_02_06_220359_create_work_step_translations_table', 1),
(35, '2024_02_08_121256_create_blogs_table', 1),
(36, '2024_02_08_121306_create_blog_translations_table', 1),
(37, '2024_02_08_160718_create_package_categories_table', 1),
(38, '2024_02_08_160745_create_packages_table', 1),
(39, '2024_02_08_160757_create_package_translations_table', 1),
(40, '2024_02_10_164112_create_faqs_table', 1),
(41, '2024_02_10_164141_create_faq_translations_table', 1),
(42, '2024_02_11_005131_create_reviews_table', 1),
(43, '2024_02_11_005145_create_review_translations_table', 1),
(44, '2024_07_23_111942_add_field_and_country_to_product_translations_table', 1),
(45, '2024_10_21_105144_add_link_video_column_to_abouts_table', 1),
(46, '2024_10_21_105144_add_sub_title_column_to_slider_translations_table', 1),
(47, '2024_11_09_202558_create_customer_opinions_table', 1),
(48, '2024_11_09_202558_create_galleries_table', 1),
(49, '2024_11_09_202558_create_guards_table', 1),
(50, '2024_11_09_202558_create_messages_table', 1),
(51, '2024_11_09_202558_create_why_chooses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_categories`
--

CREATE TABLE `package_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_translations`
--

CREATE TABLE `package_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parteners`
--

CREATE TABLE `parteners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `color1` varchar(255) DEFAULT NULL,
  `color2` varchar(255) DEFAULT NULL,
  `project_logo` varchar(255) DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_translations`
--

CREATE TABLE `review_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'uploads/settings/logo-2025-08-28-10-20-17-6429.png', '2025-08-26 03:57:51', '2025-08-28 17:20:17'),
(2, 'menu_url', 'https://foodklick.com/Menu/Index?restId=1029&grpId=1010&tableName=1', '2025-08-27 04:20:01', '2025-09-01 18:25:16'),
(3, 'copy_right_en', 'All rights reserved to Saaf Cafe @2025', '2025-08-27 05:07:25', '2025-09-05 15:02:05'),
(4, 'copy_right_ar', 'جميع الحقوق محفوظة لـ سعف كافيه @2025', '2025-08-27 05:07:25', '2025-09-05 15:02:05'),
(5, 'eg_address_en', 'Valley Park - Dubai - United Arab Emirates', '2025-08-27 05:10:50', '2025-09-01 20:38:09'),
(6, 'eg_address_ar', 'حديقة الوادي - دبي - الامارات العربية المتحدة', '2025-08-27 05:10:50', '2025-08-28 03:57:54'),
(7, 'description_en', '<p>We offer you a mix of flavors to suit all tastes, in a comfortable and friendly atmosphere that makes every visit a special moment.</p>', '2025-08-27 05:12:06', '2025-08-28 17:37:47'),
(8, 'description_ar', '<p>نقدّم لك مزيجًا من النكهات التي تناسب كل الأذواق، ضمن أجواء مريحة وودودة تجعل كل زيارة لحظة خاصة.</p>', '2025-08-27 05:12:06', '2025-08-28 17:37:47'),
(9, 'home_description_en', '<p>At SAAF Cafe, we believe that coffee isn\'t just a drink, but a carefully crafted experience.<br />We offer a variety of hot and cold beverages prepared with the finest ingredients, so you\'ll always find something to suit your taste and mood.</p>\r\n<p>🌿 Enjoy a warm and comfortable atmosphere. Make your time with us a place to relax, work, or meet friends.<br />Whether you\'ve come to start your morning with energy or end your day with a moment of relaxation, we\'re here to provide you with the experience you deserve.</p>', '2025-08-27 05:12:06', '2025-08-28 17:37:47'),
(10, 'home_description_ar', '<p>في \"سعف كافيه\" نؤمن أن القهوة ليست مجرد مشروب، بل هي تجربة تُصنع بعناية.<br />نقدّم لك مجموعة متنوعة من المشروبات الساخنة والباردة المحضّرة من أجود المكونات، لتجد دائمًا ما يناسب ذوقك ومزاجك.</p>\r\n<p>🌿 استمتع بأجواء دافئة ومريحة، اجعل وقتك معنا محطة للهدوء، للعمل، أو لقاء الأصدقاء.<br />سواء جئت لتبدأ صباحك بطاقة، أو لتُنهي يومك بلحظة استرخاء، نحن هنا لنقدّم لك التجربة التي تستحقها.</p>', '2025-08-27 05:12:06', '2025-08-28 17:37:47'),
(11, 'eg_phone', '971566955055', '2025-08-27 05:12:06', '2025-08-28 03:57:54'),
(12, 'eg_whatsapp', '971566955055', '2025-08-27 05:12:06', '2025-08-28 03:57:54'),
(13, 'eg_email_1', 'Saafcafe_2025@gmail.com', '2025-08-27 05:12:06', '2025-08-28 03:57:54'),
(14, 'eg_email_2', 'gixytijuq@mailinator.com', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(15, 'eg_facebook_link', 'https://www.bolejopyrove.org', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(16, 'eg_youtube_link', 'https://www.nysiwedorev.info', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(17, 'eg_twitter', 'https://www.fifasyzogapamy.me.uk', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(18, 'eg_instagram', 'https://www.instagram.com/saafcafe.ae?igsh=MWd1YzZuMW5jaGZybg%3D%3D', '2025-08-27 05:12:06', '2025-08-28 20:31:11'),
(19, 'eg_snapchat', 'https://www.digetomobu.me.uk', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(20, 'eg_linkedin', 'https://www.xuzovemyroby.tv', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(21, 'eg_tiktok', 'https://www.wewyhyh.ca', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(22, 'privacy_policy_en', '<p>Illo labore minima q.</p>', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(23, 'privacy_policy_ar', '<p>Possimus, id, adipis.</p>', '2025-08-27 05:12:06', '2025-08-27 05:12:06'),
(24, 'terms_of_use_en', '<p>Terms &amp; Conditions &ndash; Saaf Caf&eacute;</p>\r\n<p><br />Welcome to Saaf Caf&eacute; website (hereinafter referred to as \"the Website\"). By accessing or using this Website, you agree to be bound by the following terms and conditions:</p>\r\n<p>1. Acceptance of Terms<br />By using the Website, you acknowledge that you have read, understood, and agreed to these Terms &amp; Conditions, which are governed by the applicable laws and regulations of the United Arab Emirates.</p>\r\n<p>2. Use of the Website<br />The Website is provided for personal and non-commercial use only.<br />You agree not to use the Website for any unlawful or unauthorized purposes.<br />You must not misuse the Website or attempt to gain unauthorized access to its systems.</p>\r\n<p><br />3. Products and Services<br />Saaf Caf&eacute; provides information about its products (hot and cold beverages, desserts, and hospitality services) through the Website.<br />Product images displayed on the Website may differ from the actual items in terms of appearance or presentation.<br />All prices are subject to change without prior notice and are governed by the internal policy of the caf&eacute;.</p>\r\n<p><br />4. Orders and Payment<br />If online ordering is enabled, customers must provide accurate and complete information when placing an order.<br />Payment must be made using the accepted methods displayed on the Website.<br />Saaf Caf&eacute; shall not be held liable for any delays caused by incorrect or incomplete information provided by the customer.</p>\r\n<p><br />5. Intellectual Property<br />All content on the Website, including text, images, designs, logos, and visual materials, is the property of Saaf Caf&eacute; and protected under intellectual property laws.<br />No part of the Website may be reproduced, copied, or distributed without prior written consent.</p>\r\n<p><br />6. Disclaimer of Liability<br />The Website is provided &ldquo;as is&rdquo; without warranties of any kind, either express or implied.<br />Saaf Caf&eacute; shall not be responsible for any damages or losses arising from the use of, or reliance on, the Website content.</p>\r\n<p><br />7. External Links<br />The Website may contain links to third-party websites. Saaf Caf&eacute; is not responsible for the content, accuracy, or practices of such websites.</p>\r\n<p>8. Modifications<br />Saaf Caf&eacute; reserves the right to modify or update these Terms &amp; Conditions at any time without prior notice. Continued use of the Website after such changes constitutes acceptance of the updated terms.</p>\r\n<p>9. Governing Law &amp; Jurisdiction<br />These Terms &amp; Conditions are governed by the laws of the United Arab Emirates, and the courts of the UAE shall have exclusive jurisdiction over any disputes arising in connection with them.</p>\r\n<p>10. Contact Us<br />For any inquiries, please contact us at:<br />📧 [Saafcafe_2025@gmail.com]<br />📞 [971566955055]</p>', '2025-08-27 05:12:06', '2025-08-28 20:42:52'),
(25, 'terms_of_use_ar', '<p>الشروط والأحكام &ndash; سعف كافيه<br />مرحبًا بكم في موقع سعف كافيه (المشار إليه فيما بعد بـ \"الموقع\"). باستخدامكم لهذا الموقع أو أي من خدماته، فإنكم توافقون على الالتزام بالشروط والأحكام التالية:</p>\r\n<p>1. القبول بالشروط<br />باستخدام الموقع، فإنكم تقرّون بقراءة هذه الشروط والأحكام والموافقة عليها، كما تخضعون لها ولجميع القوانين واللوائح المعمول بها في دولة الإمارات العربية المتحدة.</p>\r\n<p>2. استخدام الموقع<br />يحق لكم استخدام الموقع لأغراض شخصية وغير تجارية فقط.<br />يُمنع استخدام الموقع لأي غرض غير قانوني أو غير مصرح به.<br />يلتزم المستخدم بعدم إساءة استخدام الموقع أو محاولة الوصول إلى أنظمته بطرق غير مشروعة.</p>\r\n<p><br />3. المنتجات والخدمات<br />يقدم سعف كافيه عبر الموقع معلومات عن منتجاته (المشروبات الساخنة والباردة، والحلويات، وخدمات الضيافة).<br />قد تختلف الصور المعروضة على الموقع عن المنتج الفعلي من حيث الشكل أو طريقة التقديم.<br />جميع الأسعار معرّضة للتغيير دون إشعار مسبق، وتخضع لسياسة المقهى الداخلية.</p>\r\n<p><br />4. الطلبات والدفع<br />في حال تفعيل خاصية الطلب الإلكتروني، يتعيّن على العميل إدخال بيانات صحيحة وكاملة.<br />الدفع يكون بالطرق المعتمدة الموضحة في الموقع.<br />لا يتحمل سعف كافيه مسؤولية أي تأخير في الطلبات الناتج عن معلومات ناقصة أو خاطئة من العميل.</p>\r\n<p><br />5. الملكية الفكرية<br />جميع المحتويات الواردة في الموقع، بما في ذلك النصوص، الصور، التصاميم، الشعار، والمواد المرئية، مملوكة لـ سعف كافيه ومحميّة بموجب قوانين حقوق الملكية الفكرية.<br />لا يحق إعادة إنتاج أو نسخ أو توزيع أي جزء من الموقع دون إذن خطي مسبق.</p>\r\n<p><br />6. إخلاء المسؤولية<br />الموقع يُقدّم كما هو (As Is) دون أي ضمانات صريحة أو ضمنية.<br />لا يتحمل سعف كافيه أي مسؤولية عن أية أضرار أو خسائر قد تنشأ عن استخدام الموقع أو الاعتماد على محتواه.</p>\r\n<p><br />7. الروابط الخارجية<br />قد يحتوي الموقع على روابط لمواقع أخرى. سعف كافيه غير مسؤول عن محتوى أو ممارسات تلك المواقع.</p>\r\n<p>8. التعديلات<br />يحتفظ سعف كافيه بحق تعديل أو تحديث هذه الشروط والأحكام في أي وقت دون إشعار مسبق. استمرار استخدامكم للموقع بعد التعديلات يُعتبر موافقة ضمنية على الشروط الجديدة.</p>\r\n<p>9. القانون المطبق والاختصاص القضائي<br />تخضع هذه الشروط والأحكام لقوانين دولة الإمارات العربية المتحدة، ويكون الاختصاص الحصري لمحاكم الإمارات في نظر أي نزاع ينشأ عنها.</p>\r\n<p>10. للتواصل<br />في حال وجود أي استفسارات، يمكنكم التواصل معنا عبر:<br />📧 [&nbsp;Saafcafe_2025@gmail.com]<br />📞 [&nbsp;971566955055]</p>', '2025-08-27 05:12:06', '2025-08-28 20:42:52'),
(26, 'short_description_en', 'We offer you a mix of flavors to suit all tastes, in a comfortable and friendly atmosphere that makes every visit a special moment.', '2025-08-27 05:14:25', '2025-08-28 19:30:49'),
(27, 'short_description_ar', 'نقدّم لك مزيجًا من النكهات التي تناسب كل الأذواق، ضمن أجواء مريحة وودودة تجعل كل زيارة لحظة خاصة.', '2025-08-27 05:14:25', '2025-08-28 19:30:49'),
(28, 'logo_white', 'uploads/settings/logo-white-2025-09-06-10-20-55-9741.png', '2025-08-27 05:17:36', '2025-09-06 17:20:55'),
(29, 'favicon', 'uploads/settings/favicon-2025-08-28-10-23-29-6623.png', '2025-08-27 05:17:36', '2025-08-28 17:23:29'),
(30, 'map', '<iframe width=\"100%\" height=\"563\" frameborder=\"0\" allowfullscreen src=\"https://tourmkr.com/F1Y00x87h2\"></iframe>', '2025-08-27 10:23:20', '2025-08-28 05:34:27'),
(31, 'site_name_en', 'سعف كافية', '2025-08-28 17:37:47', '2025-08-28 17:37:47'),
(32, 'site_name_ar', 'SAAF Cafe', '2025-08-28 17:37:47', '2025-08-28 17:37:47'),
(33, 'bg_footer', 'uploads/settings/-2025-09-01-11-39-50-8067.png', '2025-09-01 18:39:50', '2025-09-01 18:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `link`, `created_at`, `updated_at`, `type`) VALUES
(1, 'uploads/sliders/akadymy-anoar-alkran-alshykh-ramy-2025-12-25-11-47-43-2070.png', 1, NULL, '2025-08-26 04:03:06', '2025-12-25 09:47:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `title`, `description`, `created_at`, `updated_at`, `sub_title`) VALUES
(1, 1, 'ar', 'أكاديمية أنوار القرآن (الشيخ رامي)', 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.', NULL, NULL, 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.'),
(2, 1, 'en', 'أكاديمية أنوار القرآن (الشيخ رامي)', 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.', NULL, NULL, 'أكاديمية تهدف لإتقان القرآن وتهذيب السلوك، عبر برامج تعليمية تربوية تُنمّي الإيمان وتبني شخصية قرآنية راقية.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_chooses`
--

CREATE TABLE `why_chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_chooses`
--

INSERT INTO `why_chooses` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/WhyChoose/tzky-aymanyh-2025-12-25-12-11-32-1220.jpg', '2025-08-27 05:28:56', '2025-12-25 10:11:32'),
(2, 'uploads/WhyChoose/mshark-gmaaay-2025-12-25-12-19-34-9829.jpg', '2025-08-27 05:42:03', '2025-12-25 10:19:34'),
(3, 'uploads/WhyChoose/mtabaa-frdy-2025-12-25-12-19-52-1661.jpg', '2025-08-28 04:18:06', '2025-12-25 10:19:52'),
(4, 'uploads/WhyChoose/akhtbarat-msto-2025-12-25-12-20-31-3274.jpg', '2025-12-25 10:20:31', '2025-12-25 10:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_translations`
--

CREATE TABLE `why_choose_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `why_choose_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_translations`
--

INSERT INTO `why_choose_translations` (`id`, `why_choose_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'تزكية ايمانيه', 'تزكية ايمانيه', NULL, NULL),
(2, 1, 'en', 'A varied menu for all tastes', 'From classic coffee to innovative drinks and desserts, the café\'s menu offers items to suit your mood every time.', NULL, NULL),
(3, 2, 'ar', 'مشاركة جماعية', 'مشاركة جماعية', NULL, NULL),
(4, 2, 'en', 'Carefully selected coffee beans', 'We use the finest, carefully roasted coffee beans to ensure rich taste and quality in every cup.', NULL, NULL),
(5, 3, 'ar', 'متابعة فردية', 'متابعة فردية', NULL, NULL),
(6, 3, 'en', 'Barista experience', 'Our team of professional baristas is ready to provide you with the best coffee experience, carefully prepared with a personal touch.', NULL, NULL),
(7, 4, 'ar', 'اختبارات مستوى', 'اختبارات مستوى', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_steps`
--

CREATE TABLE `work_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_step_translations`
--

CREATE TABLE `work_step_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_step_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_translations_about_id_foreign` (`about_id`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_translations_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_translations_brand_id_foreign` (`brand_id`),
  ADD KEY `brand_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_translations_category_id_foreign` (`category_id`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `countrs`
--
ALTER TABLE `countrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countr_translations_countr_id_foreign` (`countr_id`),
  ADD KEY `countr_translations_locale_index` (`locale`);

--
-- Indexes for table `customer_opinions`
--
ALTER TABLE `customer_opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_opinions_translations`
--
ALTER TABLE `customer_opinions_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_opinions_translations_customer_opinions_id_foreign` (`customer_opinions_id`),
  ADD KEY `customer_opinions_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_translations_faq_id_foreign` (`faq_id`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_translations_feature_id_foreign` (`feature_id`),
  ADD KEY `feature_translations_locale_index` (`locale`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guards`
--
ALTER TABLE `guards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guards_translations`
--
ALTER TABLE `guards_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guards_translations_guards_id_foreign` (`guards_id`),
  ADD KEY `guards_translations_locale_index` (`locale`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packages_category_id_foreign` (`category_id`);

--
-- Indexes for table `package_categories`
--
ALTER TABLE `package_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_translations_package_id_foreign` (`package_id`),
  ADD KEY `package_translations_locale_index` (`locale`);

--
-- Indexes for table `parteners`
--
ALTER TABLE `parteners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_translations_product_id_foreign` (`product_id`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_translations_project_id_foreign` (`project_id`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_translations`
--
ALTER TABLE `review_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translations_service_id_foreign` (`service_id`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_translations_slider_id_foreign` (`slider_id`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_chooses`
--
ALTER TABLE `why_chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_translations`
--
ALTER TABLE `why_choose_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_choose_translations_why_choose_id_foreign` (`why_choose_id`),
  ADD KEY `why_choose_translations_locale_index` (`locale`);

--
-- Indexes for table `work_steps`
--
ALTER TABLE `work_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_step_translations`
--
ALTER TABLE `work_step_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_step_translations_work_step_id_foreign` (`work_step_id`),
  ADD KEY `work_step_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand_translations`
--
ALTER TABLE `brand_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countrs`
--
ALTER TABLE `countrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countr_translations`
--
ALTER TABLE `countr_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_opinions`
--
ALTER TABLE `customer_opinions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_opinions_translations`
--
ALTER TABLE `customer_opinions_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feature_translations`
--
ALTER TABLE `feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `guards`
--
ALTER TABLE `guards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guards_translations`
--
ALTER TABLE `guards_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_categories`
--
ALTER TABLE `package_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_translations`
--
ALTER TABLE `package_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parteners`
--
ALTER TABLE `parteners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_translations`
--
ALTER TABLE `review_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_chooses`
--
ALTER TABLE `why_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `why_choose_translations`
--
ALTER TABLE `why_choose_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `work_steps`
--
ALTER TABLE `work_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_step_translations`
--
ALTER TABLE `work_step_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD CONSTRAINT `brand_translations_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD CONSTRAINT `countr_translations_countr_id_foreign` FOREIGN KEY (`countr_id`) REFERENCES `countrs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_opinions_translations`
--
ALTER TABLE `customer_opinions_translations`
  ADD CONSTRAINT `customer_opinions_translations_customer_opinions_id_foreign` FOREIGN KEY (`customer_opinions_id`) REFERENCES `customer_opinions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD CONSTRAINT `feature_translations_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guards_translations`
--
ALTER TABLE `guards_translations`
  ADD CONSTRAINT `guards_translations_guards_id_foreign` FOREIGN KEY (`guards_id`) REFERENCES `guards` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `package_categories` (`id`);

--
-- Constraints for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD CONSTRAINT `package_translations_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `why_choose_translations`
--
ALTER TABLE `why_choose_translations`
  ADD CONSTRAINT `why_choose_translations_why_choose_id_foreign` FOREIGN KEY (`why_choose_id`) REFERENCES `why_chooses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_step_translations`
--
ALTER TABLE `work_step_translations`
  ADD CONSTRAINT `work_step_translations_work_step_id_foreign` FOREIGN KEY (`work_step_id`) REFERENCES `work_steps` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
