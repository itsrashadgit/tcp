-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 10:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED DEFAULT NULL,
  `receiver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `conversation_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 - Single Chat, 1 - Group Chat',
  `message` text NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `message_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0- text message, 1- image, 2- pdf, 3- doc, 4- voice',
  `file_name` varchar(255) DEFAULT NULL,
  `message_board` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender_id`, `receiver_id`, `conversation_type`, `message`, `is_seen`, `message_type`, `file_name`, `message_board`, `created_at`, `updated_at`) VALUES
(1, 3, 4, 0, 'Hello, How are you?', 0, 0, NULL, '', '2023-02-27 02:15:33', '2023-02-27 02:15:33'),
(2, 4, 5, 0, 'hlw', 0, 0, NULL, '', '2023-02-28 06:57:20', '2023-02-28 06:57:20'),
(3, 5, 4, 0, 'hi', 0, 0, NULL, '', '2023-02-28 06:58:09', '2023-02-28 06:58:09'),
(4, 7, 4, 0, 'hello', 0, 0, NULL, '', '2023-03-01 12:47:10', '2023-03-01 12:47:10'),
(5, 9, 9, 0, 'hello', 0, 0, NULL, '', '2023-03-04 08:24:08', '2023-03-04 08:24:08'),
(6, 3, 9, 0, 'Hlw', 0, 0, NULL, '', '2023-03-04 08:27:06', '2023-03-04 08:27:06'),
(7, 3, NULL, 0, 'hellow', 0, 0, NULL, 'fire-alarm', '2023-03-06 03:24:27', '2023-03-06 03:24:27'),
(8, 9, NULL, 0, 'Thanks everyone', 0, 0, NULL, 'fire-alarm', '2023-03-06 03:28:20', '2023-03-06 03:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_uid` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `arabic_name` varchar(255) DEFAULT NULL,
  `main_products` text DEFAULT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `number_of_employees` varchar(255) DEFAULT NULL,
  `year_of_establishment` varchar(255) DEFAULT NULL,
  `average_lead_time` varchar(255) DEFAULT NULL,
  `company_size` varchar(255) DEFAULT NULL,
  `commercial_registration_number` varchar(255) DEFAULT NULL,
  `tax_number` varchar(255) DEFAULT NULL,
  `trade_license` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `commercial_register_document` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `company_description` longtext DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_id`, `company_uid`, `logo`, `name`, `arabic_name`, `main_products`, `business_type`, `number_of_employees`, `year_of_establishment`, `average_lead_time`, `company_size`, `commercial_registration_number`, `tax_number`, `trade_license`, `nid`, `commercial_register_document`, `website`, `company_description`, `slug`, `is_verified`, `is_approved`, `is_active`, `rating`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'The Construction Platform', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'the-construction-platform', 0, 1, 1, 0.00, NULL, '2023-02-14 01:58:32', '2023-02-14 01:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `company_settings`
--

CREATE TABLE `company_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

CREATE TABLE `company_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `subrole_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_user`
--

INSERT INTO `company_user` (`user_id`, `company_id`, `subrole_id`) VALUES
(1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contact_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Customer/User Contact',
  `contact_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Account, 1=Contact, 2=Delivery Address',
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL COMMENT '0=Male, 1=Female, 2=Others',
  `nationality` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `person_in_charge` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address_2` text DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `website` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `job_position` varchar(255) DEFAULT NULL,
  `tax_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `contact_source` varchar(255) DEFAULT NULL,
  `batch_id` varchar(255) DEFAULT NULL,
  `is_default_contact` tinyint(1) NOT NULL DEFAULT 0,
  `zone_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assign_to` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `company_id`, `contact_id`, `user_id`, `contact_type`, `title`, `name`, `gender`, `nationality`, `email`, `phone`, `mobile`, `fax`, `person_in_charge`, `address`, `address_2`, `country_id`, `state_id`, `city`, `zip_code`, `website`, `tags`, `job_position`, `tax_id`, `image`, `notes`, `contact_source`, `batch_id`, `is_default_contact`, `zone_id`, `assign_to`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 0, NULL, 'The Construction Platform', NULL, NULL, 'info@tcp.com', '+1053593534', NULL, NULL, NULL, 'New Jersy, USA', NULL, 1, 1, 'New Jersy', '1263', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-14 01:58:32', '2023-02-14 01:58:32'),
(2, NULL, NULL, 2, 0, NULL, 'salim', NULL, NULL, 'salimhosen19@gmail.com', '01762473884', NULL, NULL, NULL, NULL, NULL, 1, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2023-02-14 05:11:07', '2023-02-14 05:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE `counties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `shape` varchar(50) DEFAULT NULL,
  `coords` varchar(255) DEFAULT NULL,
  `latitude` double(15,2) DEFAULT NULL,
  `longitude` double(15,2) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`id`, `state_id`, `name`, `shape`, `coords`, `latitude`, `longitude`, `slug`, `created_at`, `updated_at`) VALUES
(1, 31, 'Sussex', 'circle', '607,192,107', NULL, NULL, 'sussex', '2023-02-13 20:40:15', '2023-02-13 20:40:15'),
(2, 31, 'Passaic', 'circle', '808,229,60', NULL, NULL, 'passaic', '2023-02-16 19:45:49', '2023-02-16 19:45:49'),
(3, 31, 'Bergen', 'circle', '1011,344,63', NULL, NULL, 'bergen', '2023-02-16 19:46:24', '2023-02-16 19:46:24'),
(4, 31, 'Warren', 'circle', '461,396,69', NULL, NULL, 'warren', '2023-02-16 19:46:53', '2023-02-16 19:46:53'),
(5, 31, 'Morris', 'circle', '721,405,97', NULL, NULL, 'morris', '2023-02-16 19:47:18', '2023-02-16 19:47:18'),
(6, 31, 'Essex', 'circle', '875,476,56', NULL, NULL, 'essex', '2023-02-16 19:47:46', '2023-02-16 19:47:46'),
(7, 31, 'Hunterdon', 'circle', '465,634,96', NULL, NULL, 'hunterdon', '2023-02-16 19:48:11', '2023-02-16 19:48:11'),
(8, 31, 'Union', 'rect', '783,542,887,611', NULL, NULL, 'union', '2023-02-16 19:48:37', '2023-02-16 19:48:37'),
(9, 31, 'Hudson', 'poly', '940,486,932,513,950,506,959,517,957,533,969,554,953,581,985,555,1009,531,1014,494,1026,469,1014,456,984,469,976,494,964,499,958,488', NULL, NULL, 'hudson', '2023-02-16 19:49:07', '2023-02-16 19:49:07'),
(10, 31, 'Somerset', 'circle', '644,704,71', NULL, NULL, 'somerset', '2023-02-16 19:49:35', '2023-02-16 19:49:35'),
(11, 31, 'Middlesex', 'circle', '762,797,70', NULL, NULL, 'middlesex', '2023-02-16 19:50:00', '2023-02-16 19:50:00'),
(12, 31, 'Mercer', 'circle', '612,899,60', NULL, NULL, 'mercer', '2023-02-16 19:50:25', '2023-02-16 19:50:25'),
(13, 31, 'Monmouth', 'circle', '880,898,78', NULL, NULL, 'monmouth', '2023-02-16 19:50:52', '2023-02-16 19:50:52'),
(14, 31, 'Ocean', 'circle', '835,1178,82', NULL, NULL, 'ocean', '2023-02-16 19:51:18', '2023-02-16 19:51:18'),
(15, 31, 'Burlington', 'circle', '606,1181,124', NULL, NULL, 'burlington', '2023-02-16 19:51:42', '2023-02-16 19:51:42'),
(16, 31, 'Camden', 'rect', '416,1288,535,1329', NULL, NULL, 'camden', '2023-02-16 19:52:16', '2023-02-16 19:52:16'),
(17, 31, 'Gloucester', 'rect', '209,1280,376,1345', NULL, NULL, 'gloucester', '2023-02-16 19:52:40', '2023-02-16 19:52:40'),
(18, 31, 'Salem', 'circle', '182,1429,79', NULL, NULL, 'salem', '2023-02-16 19:53:07', '2023-02-16 19:53:07'),
(19, 31, 'Atlantic', 'circle', '599,1522,106', NULL, NULL, 'atlantic', '2023-02-16 19:53:35', '2023-02-16 19:53:35'),
(20, 31, 'Cumberland', 'circle', '337,1628,88', NULL, NULL, 'cumberland', '2023-02-16 19:53:59', '2023-02-16 19:53:59'),
(21, 31, 'Cape May', 'rect', '483,1693,602,1799', NULL, NULL, 'cape-may', '2023-02-16 19:54:25', '2023-02-16 19:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `iso_code_2` varchar(255) NOT NULL,
  `iso_code_3` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso_code_2`, `iso_code_3`, `country_code`, `flag`, `slug`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'United States', 'US', 'USA', '+1', '', 'usa', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `county_user`
--

CREATE TABLE `county_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `county_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `county_user`
--

INSERT INTO `county_user` (`user_id`, `county_id`) VALUES
(3, 2),
(3, 3);

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
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `visibility` varchar(255) NOT NULL DEFAULT 'public',
  `content` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_on_pipeline` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `user_id`, `visibility`, `content`, `likes`, `created_at`, `updated_at`, `is_on_pipeline`) VALUES
(7, 3, 'Public', 'Hello how are you?', 0, '2023-03-02 12:41:36', '2023-03-02 12:41:36', 0),
(8, 3, 'Public', 'I want to sell my new shoes', 0, '2023-03-02 12:43:05', '2023-03-02 12:43:05', 0),
(9, 3, 'Public', 'Why This is ?', 0, '2023-03-02 12:43:17', '2023-03-02 12:43:17', 0),
(10, 3, 'Public', 'hello', 0, '2023-03-03 08:19:46', '2023-03-06 01:33:34', 1),
(11, 9, 'Public', 'This is a post from mohammed', 0, '2023-03-04 04:13:10', '2023-03-06 03:26:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feed_comments`
--

CREATE TABLE `feed_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feed_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `feed_comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed_comments`
--

INSERT INTO `feed_comments` (`id`, `feed_id`, `user_id`, `feed_comment_id`, `comment`, `created_at`, `updated_at`) VALUES
(6, 10, 3, NULL, 'commen', '2023-03-03 08:19:55', '2023-03-03 08:19:55'),
(7, 10, 3, 6, 'hello', '2023-03-03 08:20:00', '2023-03-03 08:20:00'),
(8, 10, 9, NULL, 'hello i am mohammad', '2023-03-04 04:13:23', '2023-03-04 04:13:23'),
(9, 11, 3, NULL, 'thanks mohammed', '2023-03-04 04:14:16', '2023-03-04 04:14:16'),
(10, 11, 3, NULL, 'hello', '2023-03-04 04:22:21', '2023-03-04 04:22:21'),
(11, 11, 9, 9, 'This is a reply', '2023-03-04 04:24:33', '2023-03-04 04:24:33'),
(12, 11, 9, 9, 'again', '2023-03-04 04:24:39', '2023-03-04 04:24:39'),
(13, 11, 3, NULL, 'here is a comment', '2023-03-04 08:43:38', '2023-03-04 08:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `feed_files`
--

CREATE TABLE `feed_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feed_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed_files`
--

INSERT INTO `feed_files` (`id`, `feed_id`, `file_name`, `file_type`, `created_at`, `updated_at`) VALUES
(2, 8, 'yqSzx91citw8OVV5Tv5ka7fObcZnRo8ONhdiAx5Z.png', 'image', '2023-03-02 12:42:55', '2023-03-02 12:43:05'),
(3, 10, '3zXcO3XbWBc1PJ9ymHvl5Z0cuLoMjBsEWeD43lmX.png', 'image', '2023-03-03 08:19:41', '2023-03-03 08:19:46'),
(4, NULL, 'SIRWaVyHjnnIskIsH7euekD62SdC4gyQFZTt1pEl.png', 'image', '2023-03-04 04:36:25', '2023-03-04 04:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `feed_likes`
--

CREATE TABLE `feed_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feed_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'like',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed_likes`
--

INSERT INTO `feed_likes` (`id`, `feed_id`, `user_id`, `type`, `created_at`, `updated_at`) VALUES
(3, 7, 3, 'like', '2023-03-02 12:45:29', '2023-03-02 12:45:29'),
(4, 10, 3, 'like', '2023-03-03 08:19:51', '2023-03-03 08:19:51'),
(6, 10, 9, 'like', '2023-03-04 08:43:23', '2023-03-04 08:43:23'),
(8, 11, 3, 'like', '2023-03-05 06:44:27', '2023-03-05 06:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `created_at`, `updated_at`) VALUES
(8, 4, 3, '2023-02-27 12:23:40', '2023-02-27 12:23:40'),
(9, 3, 9, '2023-03-04 04:42:51', '2023-03-04 04:42:51');

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
(5, '2022_01_01_000001_create_notifications_table', 1),
(6, '2022_01_01_000002_add_columns_to_users', 1),
(7, '2022_01_01_000002_create_notification_user_table', 1),
(8, '2022_01_01_000004_create_roles_table', 1),
(9, '2022_01_01_000007_create_permissions_table', 1),
(10, '2022_01_01_000010_create_companies_table', 1),
(11, '2022_01_01_000010_create_subroles_table', 1),
(12, '2022_01_01_000011_create_role_user_table', 1),
(13, '2022_01_01_000012_create_company_user_table', 1),
(14, '2022_01_01_000013_create_permission_role_table', 1),
(15, '2022_01_01_000014_create_permission_subrole_table', 1),
(16, '2022_01_01_000015_create_settings_table', 1),
(17, '2022_01_01_000016_create_company_settings_table', 1),
(18, '2022_01_01_000017_create_contacts_table', 1),
(19, '2022_01_01_000061_create_pages_table', 1),
(20, '2022_01_01_000062_create_site_menus_table', 1),
(21, '2022_01_01_000063_create_page_rows_table', 1),
(22, '2022_01_01_000064_create_page_columns_table', 1),
(23, '2023_02_06_054110_create_countries_table', 1),
(24, '2023_02_06_054110_create_states_table', 1),
(25, '2023_02_06_054119_create_counties_table', 1),
(32, '2023_02_18_060630_create_feeds_table', 2),
(33, '2023_02_18_061409_create_feed_files_table', 2),
(34, '2023_02_18_070722_create_feed_comments_table', 2),
(35, '2023_02_21_130146_create_sliders_table', 3),
(36, '2023_02_25_072740_create_followers_table', 4),
(37, '2023_03_01_000011_create_user_user_table', 5),
(38, '2023_04_01_000030_create_chat_messages_table', 6),
(39, '2023_02_27_183635_create_portfolios_table', 7),
(40, '2023_03_02_115047_create_feed_likes_table', 8),
(41, '2023_03_03_173805_create_user_county_table', 9),
(42, '2023_03_03_173805_create_county_user_table', 10),
(44, '2023_03_06_065637_create_trade_events_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `notification_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=message,1=reminder',
  `send_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_sent` tinyint(1) NOT NULL DEFAULT 0,
  `notified_by` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=notification,1=email,2=both',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_user`
--

CREATE TABLE `notification_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `notification_id` bigint(20) UNSIGNED NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `language_code` varchar(255) NOT NULL DEFAULT 'en',
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `customization_route` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_columns`
--

CREATE TABLE `page_columns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_row_id` bigint(20) UNSIGNED DEFAULT NULL,
  `column_index` tinyint(4) NOT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `show_data` tinyint(1) NOT NULL DEFAULT 0,
  `data_type` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_rows`
--

CREATE TABLE `page_rows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `row_index` tinyint(4) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('salimhosen19@gmail.com', '$2y$10$V.6faIWwJeg.ONvIheFDDO.Wt/i7RstILvzRci/65iZpVMODJPmW.', '2023-02-14 05:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'access_permission', NULL, NULL, NULL),
(2, 'create_permission', NULL, NULL, NULL),
(3, 'edit_permission', NULL, NULL, NULL),
(4, 'delete_permission', NULL, NULL, NULL),
(5, 'access_role', NULL, NULL, NULL),
(6, 'create_role', NULL, NULL, NULL),
(7, 'edit_role', NULL, NULL, NULL),
(8, 'delete_role', NULL, NULL, NULL),
(9, 'access_subrole', NULL, NULL, NULL),
(10, 'create_subrole', NULL, NULL, NULL),
(11, 'edit_subrole', NULL, NULL, NULL),
(12, 'delete_subrole', NULL, NULL, NULL),
(13, 'access_user', NULL, NULL, NULL),
(14, 'create_user', NULL, NULL, NULL),
(15, 'edit_user', NULL, NULL, NULL),
(16, 'delete_user', NULL, NULL, NULL),
(17, 'access_company', NULL, NULL, NULL),
(18, 'create_company', NULL, NULL, NULL),
(19, 'edit_company', NULL, NULL, NULL),
(20, 'delete_company', NULL, NULL, NULL),
(21, 'access_contact', NULL, NULL, NULL),
(22, 'create_contact', NULL, NULL, NULL),
(23, 'edit_contact', NULL, NULL, NULL),
(24, 'delete_contact', NULL, NULL, NULL),
(25, 'access_account', NULL, NULL, NULL),
(26, 'create_account', NULL, NULL, NULL),
(27, 'edit_account', NULL, NULL, NULL),
(28, 'delete_account', NULL, NULL, NULL),
(29, 'access_lead', NULL, NULL, NULL),
(30, 'create_lead', NULL, NULL, NULL),
(31, 'edit_lead', NULL, NULL, NULL),
(32, 'delete_lead', NULL, NULL, NULL),
(33, 'access_lead_source', NULL, NULL, NULL),
(34, 'create_lead_source', NULL, NULL, NULL),
(35, 'edit_lead_source', NULL, NULL, NULL),
(36, 'delete_lead_source', NULL, NULL, NULL),
(37, 'access_lead_stage', NULL, NULL, NULL),
(38, 'create_lead_stage', NULL, NULL, NULL),
(39, 'edit_lead_stage', NULL, NULL, NULL),
(40, 'delete_lead_stage', NULL, NULL, NULL),
(41, 'access_pipeline', NULL, NULL, NULL),
(42, 'create_pipeline', NULL, NULL, NULL),
(43, 'edit_pipeline', NULL, NULL, NULL),
(44, 'delete_pipeline', NULL, NULL, NULL),
(45, 'access_sender', NULL, NULL, NULL),
(46, 'create_sender', NULL, NULL, NULL),
(47, 'edit_sender', NULL, NULL, NULL),
(48, 'delete_sender', NULL, NULL, NULL),
(49, 'access_mailing_list', NULL, NULL, NULL),
(50, 'create_mailing_list', NULL, NULL, NULL),
(51, 'edit_mailing_list', NULL, NULL, NULL),
(52, 'delete_mailing_list', NULL, NULL, NULL),
(53, 'access_subscriber', NULL, NULL, NULL),
(54, 'create_subscriber', NULL, NULL, NULL),
(55, 'edit_subscriber', NULL, NULL, NULL),
(56, 'delete_subscriber', NULL, NULL, NULL),
(57, 'access_template', NULL, NULL, NULL),
(58, 'create_template', NULL, NULL, NULL),
(59, 'edit_template', NULL, NULL, NULL),
(60, 'delete_template', NULL, NULL, NULL),
(61, 'access_campaign', NULL, NULL, NULL),
(62, 'create_campaign', NULL, NULL, NULL),
(63, 'edit_campaign', NULL, NULL, NULL),
(64, 'delete_campaign', NULL, NULL, NULL),
(65, 'access_event', NULL, NULL, NULL),
(66, 'create_event', NULL, NULL, NULL),
(67, 'edit_event', NULL, NULL, NULL),
(68, 'delete_event', NULL, NULL, NULL),
(69, 'access_activity', NULL, NULL, NULL),
(70, 'create_activity', NULL, NULL, NULL),
(71, 'edit_activity', NULL, NULL, NULL),
(72, 'delete_activity', NULL, NULL, NULL),
(73, 'access_order', NULL, NULL, NULL),
(74, 'create_order', NULL, NULL, NULL),
(75, 'edit_order', NULL, NULL, NULL),
(76, 'delete_order', NULL, NULL, NULL),
(77, 'access_coupon', NULL, NULL, NULL),
(78, 'create_coupon', NULL, NULL, NULL),
(79, 'edit_coupon', NULL, NULL, NULL),
(80, 'delete_coupon', NULL, NULL, NULL),
(81, 'access_brand', NULL, NULL, NULL),
(82, 'create_brand', NULL, NULL, NULL),
(83, 'edit_brand', NULL, NULL, NULL),
(84, 'delete_brand', NULL, NULL, NULL),
(85, 'access_category', NULL, NULL, NULL),
(86, 'create_category', NULL, NULL, NULL),
(87, 'edit_category', NULL, NULL, NULL),
(88, 'delete_category', NULL, NULL, NULL),
(89, 'access_unit', NULL, NULL, NULL),
(90, 'create_unit', NULL, NULL, NULL),
(91, 'edit_unit', NULL, NULL, NULL),
(92, 'delete_unit', NULL, NULL, NULL),
(93, 'access_product', NULL, NULL, NULL),
(94, 'create_product', NULL, NULL, NULL),
(95, 'edit_product', NULL, NULL, NULL),
(96, 'delete_product', NULL, NULL, NULL),
(97, 'access_wishlist', NULL, NULL, NULL),
(98, 'create_wishlist', NULL, NULL, NULL),
(99, 'edit_wishlist', NULL, NULL, NULL),
(100, 'delete_wishlist', NULL, NULL, NULL),
(101, 'access_support_ticket', NULL, NULL, NULL),
(102, 'create_support_ticket', NULL, NULL, NULL),
(103, 'delete_support_ticket', NULL, NULL, NULL),
(104, 'reply_support_ticket', NULL, NULL, NULL),
(105, 'access_contact_message', NULL, NULL, NULL),
(106, 'delete_contact_message', NULL, NULL, NULL),
(107, 'reply_contact_message', NULL, NULL, NULL),
(108, 'access_payment_method', NULL, NULL, NULL),
(109, 'edit_payment_method', NULL, NULL, NULL),
(110, 'access_zone', NULL, NULL, NULL),
(111, 'create_zone', NULL, NULL, NULL),
(112, 'edit_zone', NULL, NULL, NULL),
(113, 'delete_zone', NULL, NULL, NULL),
(114, 'access_shipping_method', NULL, NULL, NULL),
(115, 'create_shipping_method', NULL, NULL, NULL),
(116, 'edit_shipping_method', NULL, NULL, NULL),
(117, 'delete_shipping_method', NULL, NULL, NULL),
(118, 'access_shipping_class', NULL, NULL, NULL),
(119, 'create_shipping_class', NULL, NULL, NULL),
(120, 'edit_shipping_class', NULL, NULL, NULL),
(121, 'delete_shipping_class', NULL, NULL, NULL),
(122, 'access_menu', NULL, NULL, NULL),
(123, 'create_menu', NULL, NULL, NULL),
(124, 'edit_menu', NULL, NULL, NULL),
(125, 'delete_menu', NULL, NULL, NULL),
(126, 'access_page', NULL, NULL, NULL),
(127, 'create_page', NULL, NULL, NULL),
(128, 'edit_page', NULL, NULL, NULL),
(129, 'delete_page', NULL, NULL, NULL),
(130, 'access_blog_category', NULL, NULL, NULL),
(131, 'create_blog_category', NULL, NULL, NULL),
(132, 'edit_blog_category', NULL, NULL, NULL),
(133, 'delete_blog_category', NULL, NULL, NULL),
(134, 'access_blog_tag', NULL, NULL, NULL),
(135, 'create_blog_tag', NULL, NULL, NULL),
(136, 'edit_blog_tag', NULL, NULL, NULL),
(137, 'delete_blog_tag', NULL, NULL, NULL),
(138, 'access_blog_post', NULL, NULL, NULL),
(139, 'create_blog_post', NULL, NULL, NULL),
(140, 'edit_blog_post', NULL, NULL, NULL),
(141, 'delete_blog_post', NULL, NULL, NULL),
(142, 'access_flash_deal', NULL, NULL, NULL),
(143, 'create_flash_deal', NULL, NULL, NULL),
(144, 'edit_flash_deal', NULL, NULL, NULL),
(145, 'delete_flash_deal', NULL, NULL, NULL),
(146, 'access_customer_query', NULL, NULL, NULL),
(147, 'create_customer_query', NULL, NULL, NULL),
(148, 'reply_customer_query', NULL, NULL, NULL),
(149, 'access_menu', NULL, NULL, NULL),
(150, 'create_menu', NULL, NULL, NULL),
(151, 'edit_menu', NULL, NULL, NULL),
(152, 'delete_menu', NULL, NULL, NULL),
(153, 'access_page', NULL, NULL, NULL),
(154, 'create_page', NULL, NULL, NULL),
(155, 'edit_page', NULL, NULL, NULL),
(156, 'delete_page', NULL, NULL, NULL),
(157, 'access_address', NULL, NULL, NULL),
(158, 'create_address', NULL, NULL, NULL),
(159, 'edit_address', NULL, NULL, NULL),
(160, 'delete_address', NULL, NULL, NULL),
(161, 'access_attribute', NULL, NULL, NULL),
(162, 'create_attribute', NULL, NULL, NULL),
(163, 'edit_attribute', NULL, NULL, NULL),
(164, 'delete_attribute', NULL, NULL, NULL),
(165, 'manage_location', NULL, NULL, NULL),
(166, 'manage_setting', NULL, NULL, NULL),
(167, 'customize_welcome_page', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(1, 163),
(1, 164),
(1, 165),
(1, 166),
(1, 167);

-- --------------------------------------------------------

--
-- Table structure for table `permission_subrole`
--

CREATE TABLE `permission_subrole` (
  `subrole_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `file_name`, `original_name`, `created_at`, `updated_at`) VALUES
(4, 3, 'G9rJ97E8C9gjEE2s1tY33aCoIewuxVGTKNu6evtb.jpg', '2.jpg', '2023-02-27 13:12:55', '2023-02-27 13:12:55'),
(5, 3, 'nPJuzPOEEfjbWl1pJ3VWJkvNdJOFNp3oTUtF96lm.jpg', '4fb4f68e9f4f6a83b6c534515c29f951.jpg', '2023-02-27 13:13:01', '2023-02-27 13:13:01'),
(6, 3, 'gslgre3toyMqteu2Acwpc6RiyKKXWXwhNrjL3pNZ.jpg', '1629300671046.jpg', '2023-02-27 13:13:07', '2023-02-27 13:13:07'),
(7, 3, 'K2n4yNVfDUAuy0WIAfc9JT0I5XY58x3IZf9o4uaW.jpg', 'download.jpg', '2023-02-27 13:13:14', '2023-02-27 13:13:14'),
(8, 5, 'tR5naI99AuF7GOlRl0uNOgU9Qz1uVlQp28fA0aX5.jpg', '2.jpg', '2023-02-28 05:52:11', '2023-02-28 05:52:11'),
(9, 5, 'eWW7oVOSFVKtAAp3YBQceiz5rtKwIVNsfEetIoEE.jpg', '1629300671046.jpg', '2023-02-28 05:52:43', '2023-02-28 05:52:43'),
(10, 3, 'YU5ohDlslFtTI0Is4jeDrmuh4N7udN3SXHkDUW0n.jpg', 'c87a7744.jpg', '2023-02-28 21:11:38', '2023-02-28 21:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 0, NULL, NULL),
(2, 'vendor', 0, NULL, NULL),
(3, 'tradesmen', 0, NULL, NULL),
(4, 'user', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', NULL, NULL, NULL),
(2, 'phone', '+1 551175960', NULL, NULL),
(3, 'email', 'info@tcp.com', NULL, NULL),
(4, 'address', 'New Jersy, USA', NULL, NULL),
(5, 'title', 'tcp.com', NULL, NULL),
(6, 'description', 'TCP', NULL, NULL),
(7, 'facebook', 'http://www.facebook.com', NULL, NULL),
(8, 'twitter', 'http://www.twitter.com', NULL, NULL),
(9, 'linkedin', 'http://linkedin.com', NULL, NULL),
(10, 'pinterest', 'http://pinterest.com', NULL, NULL),
(11, 'android_app_url', 'http://google.com', NULL, NULL),
(12, 'ios_app_url', 'http://apple.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_menus`
--

CREATE TABLE `site_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `arabic_name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `show_on_header` tinyint(1) NOT NULL DEFAULT 0,
  `show_on_footer` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `code`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'AL', 'Alabama', NULL, NULL, '2023-02-05 19:36:47'),
(2, 1, 'AK', 'Alaska', NULL, NULL, '2023-02-05 19:36:47'),
(3, 1, 'AZ', 'Arizona', NULL, NULL, '2023-02-05 19:36:47'),
(4, 1, 'AR', 'Arkansas', NULL, NULL, '2023-02-05 19:36:47'),
(5, 1, 'CA', 'California', NULL, NULL, '2023-02-05 19:36:47'),
(6, 1, 'CO', 'Colorado', NULL, NULL, '2023-02-05 19:36:47'),
(7, 1, 'CT', 'Connecticut', NULL, NULL, '2023-02-05 19:36:47'),
(8, 1, 'DE', 'Delaware', NULL, NULL, '2023-02-05 19:36:47'),
(9, 1, 'DC', 'District of Columbia', NULL, NULL, '2023-02-05 19:36:47'),
(10, 1, 'FL', 'Florida', NULL, NULL, '2023-02-05 19:36:47'),
(11, 1, 'GA', 'Georgia', NULL, NULL, '2023-02-05 19:36:47'),
(12, 1, 'HI', 'Hawaii', NULL, NULL, '2023-02-05 19:36:47'),
(13, 1, 'ID', 'Idaho', NULL, NULL, '2023-02-05 19:36:47'),
(14, 1, 'IL', 'Illinois', NULL, NULL, '2023-02-05 19:36:47'),
(15, 1, 'IN', 'Indiana', NULL, NULL, '2023-02-05 19:36:47'),
(16, 1, 'IA', 'Iowa', NULL, NULL, '2023-02-05 19:36:47'),
(17, 1, 'KS', 'Kansas', NULL, NULL, '2023-02-05 19:36:47'),
(18, 1, 'KY', 'Kentucky', NULL, NULL, '2023-02-05 19:36:47'),
(19, 1, 'LA', 'Louisiana', NULL, NULL, '2023-02-05 19:36:47'),
(20, 1, 'ME', 'Maine', NULL, NULL, '2023-02-05 19:36:47'),
(21, 1, 'MD', 'Maryland', NULL, NULL, '2023-02-05 19:36:47'),
(22, 1, 'MA', 'Massachusetts', NULL, NULL, '2023-02-05 19:36:47'),
(23, 1, 'MI', 'Michigan', NULL, NULL, '2023-02-05 19:36:47'),
(24, 1, 'MN', 'Minnesota', NULL, NULL, '2023-02-05 19:36:47'),
(25, 1, 'MS', 'Mississippi', NULL, NULL, '2023-02-05 19:36:47'),
(26, 1, 'MO', 'Missouri', NULL, NULL, '2023-02-05 19:36:47'),
(27, 1, 'MT', 'Montana', NULL, NULL, '2023-02-05 19:36:47'),
(28, 1, 'NE', 'Nebraska', NULL, NULL, '2023-02-05 19:36:47'),
(29, 1, 'NV', 'Nevada', NULL, NULL, '2023-02-05 19:36:47'),
(30, 1, 'NH', 'New Hampshire', NULL, NULL, '2023-02-05 19:36:47'),
(31, 1, 'NJ', 'New Jersey', 'iq5XiDXLqRQhFokgCLsNx4BBPPEHllEu4sEZPHFk.jpg', NULL, '2023-02-05 21:14:15'),
(32, 1, 'NM', 'New Mexico', NULL, NULL, '2023-02-05 19:36:47'),
(33, 1, 'NY', 'New York', NULL, NULL, '2023-02-05 19:36:47'),
(34, 1, 'NC', 'North Carolina', NULL, NULL, '2023-02-05 19:36:47'),
(35, 1, 'ND', 'North Dakota', NULL, NULL, '2023-02-05 19:36:47'),
(36, 1, 'OH', 'Ohio', NULL, NULL, '2023-02-05 19:36:47'),
(37, 1, 'OK', 'Oklahoma', NULL, NULL, '2023-02-05 19:36:47'),
(38, 1, 'OR', 'Oregon', NULL, NULL, '2023-02-05 19:36:47'),
(39, 1, 'PA', 'Pennsylvania', NULL, NULL, '2023-02-05 19:36:47'),
(40, 1, 'PR', 'Puerto Rico', NULL, NULL, '2023-02-05 19:36:47'),
(41, 1, 'RI', 'Rhode Island', NULL, NULL, '2023-02-05 19:36:47'),
(42, 1, 'SC', 'South Carolina', NULL, NULL, '2023-02-05 19:36:47'),
(43, 1, 'SD', 'South Dakota', NULL, NULL, '2023-02-05 19:36:47'),
(44, 1, 'TN', 'Tennessee', NULL, NULL, '2023-02-05 19:36:47'),
(45, 1, 'TX', 'Texas', NULL, NULL, '2023-02-05 19:36:47'),
(46, 1, 'UT', 'Utah', NULL, NULL, '2023-02-05 19:36:47'),
(47, 1, 'VT', 'Vermont', NULL, NULL, '2023-02-05 19:36:47'),
(48, 1, 'VA', 'Virginia', NULL, NULL, '2023-02-05 19:36:47'),
(49, 1, 'WA', 'Washington', NULL, NULL, '2023-02-05 19:36:47'),
(50, 1, 'WV', 'West Virginia', NULL, NULL, '2023-02-05 19:36:47'),
(51, 1, 'WI', 'Wisconsin', NULL, NULL, '2023-02-05 19:36:47'),
(52, 1, 'WY', 'Wyoming', NULL, NULL, '2023-02-05 19:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `subroles`
--

CREATE TABLE `subroles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Electricians', 'electrician.png', 'electricians', '2023-02-21 10:29:03', '2023-02-21 10:29:03'),
(2, 'Plumbers', 'plumber.png', 'plumbers', '2023-02-21 10:29:16', '2023-02-21 10:29:16'),
(3, 'HVAC', 'air-conditioner.png', 'hvac', '2023-02-21 10:29:26', '2023-02-21 10:29:26'),
(4, 'Telecommunications', 'cell-tower.png', 'telecommunications', '2023-02-21 10:29:36', '2023-02-21 10:29:36'),
(5, 'Low Voltage', 'voltage.png', 'low-voltage', '2023-02-21 10:30:46', '2023-02-21 10:30:46'),
(6, 'Fire Alarm', 'fire-sensor.png', 'fire-alarm', '2023-02-21 10:30:46', '2023-02-21 10:30:46'),
(7, 'House Flippers', 'house.png', 'house-flippers', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(8, 'Drywall', 'drywall.png', 'drywall', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(9, 'Audio/Visual', 'multimedia.png', 'audio/visual', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(10, 'Masonry', 'brickwork.png', 'masonry', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(11, 'Roofing', 'roof.png', 'roofing', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(12, 'Tile Marble', 'marble.png', 'tile-marble', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(13, 'Flooring', 'parquet.png', 'flooring', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(14, 'Painting', 'paint-roller.png', 'painting', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(15, 'Glass', 'glass.png', 'glass', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(16, 'Welding', 'welding.png', 'welding', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(17, 'Excavation', 'excavator.png', 'excavation', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(18, 'Demolition', 'demolition.png', 'demolition', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(19, 'Structural Steel', 'structure.png', 'structural-steel', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(20, 'Paving', 'paving.png', 'paving', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(21, 'Landscape', 'field.png', 'landscape', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(22, 'Pools', 'swimming-pool.png', 'pools', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(23, 'Fencing', 'fence.png', 'fencing', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(24, 'Laborers', 'worker.png', 'laborers', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(25, 'Acoustics Ceilings', 'ceiling.png', 'acoustics-ceilings', '2023-02-21 10:30:50', '2023-02-21 10:30:50'),
(26, 'Tree Service', 'christmas.png', 'tree-service', '2023-02-21 10:30:50', '2023-02-21 10:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `trade_events`
--

CREATE TABLE `trade_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `event_details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trade_events`
--

INSERT INTO `trade_events` (`id`, `user_id`, `name`, `start_time`, `end_time`, `event_details`, `created_at`, `updated_at`) VALUES
(1, 3, 'New Event', '2023-03-06 07:20:00', '2023-03-16 07:20:00', 'Good Event. Everyone come.', '2023-03-06 01:20:47', '2023-03-06 01:20:47'),
(2, 9, 'Another event', '2023-03-07 09:25:00', '2023-03-23 09:25:00', 'long long detais', '2023-03-06 03:25:50', '2023-03-06 03:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `county_id` bigint(20) NOT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `business_description` text DEFAULT NULL,
  `company_mission` text DEFAULT NULL,
  `company_vision` text DEFAULT NULL,
  `products` text DEFAULT NULL,
  `services` text DEFAULT NULL,
  `trade_id` bigint(20) DEFAULT NULL,
  `profession_title` varchar(255) DEFAULT NULL,
  `years_of_experience` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `work_history` text DEFAULT NULL,
  `license` varchar(255) DEFAULT NULL,
  `certificates` text DEFAULT NULL,
  `achievements` text DEFAULT NULL,
  `ability_skills` varchar(255) DEFAULT NULL,
  `about_you` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `cover_photo` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_online` tinyint(1) NOT NULL DEFAULT 0,
  `last_online_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `user_type`, `email`, `email_verified_at`, `password`, `address`, `state_id`, `county_id`, `zip_code`, `business_description`, `company_mission`, `company_vision`, `products`, `services`, `trade_id`, `profession_title`, `years_of_experience`, `education`, `institution`, `work_history`, `license`, `certificates`, `achievements`, `ability_skills`, `about_you`, `remember_token`, `created_at`, `updated_at`, `phone`, `avatar`, `cover_photo`, `is_active`, `is_online`, `last_online_at`) VALUES
(1, 'Admin', 'admin', '', 'itsrashad@gmail.com', '2023-02-14 01:58:31', '$2y$10$zW9J0vmVF6Kf12f7z9SX0utoinDgXzCV/yht/qMqXodNpXH0ZrXqe', NULL, 31, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-01 16:03:30', NULL, NULL, NULL, NULL, 1, 0, NULL),
(2, 'salim', 'salim', '', 'salimhosen19@gmail.com', '2023-03-01 05:31:23', '$2a$12$ez79e3WAiNaQi8B7gDD/kO.JE3EGkneeG1oh0Q/4hYQjrfIE8OV3S', 'konabari', 31, 0, '1700', 'i am a businessman', 'mission', 'vision', 'apple, mango', 'work.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 05:11:07', '2023-02-14 05:11:07', '01762473884', NULL, NULL, 1, 0, NULL),
(3, 'salim', 'mohammad', 'architects_engineers', 'salim7cse@gmail.com', '2023-02-28 20:37:43', '$2y$10$.hdiI1MpJQB8F4ZxmcK/1ePR0rHVnn793OapkMn1Ig89DrjwxByxi', 'konabari', 31, 1, '1700', NULL, NULL, NULL, NULL, NULL, NULL, 'Trading', '2 years', 'Graduate', 'Daffodil', '2 years', 'bsc.', 'html', NULL, 'js', 'profile updated', 'kFqMSfcxoXnxMJc1TC6roh6YttPbKiE89mgjll79YwB5AqvwLbKdJuSNr5H2', '2023-02-18 02:16:19', '2023-03-04 07:52:46', '+8801762473884', 'Nb7aAhwSreb2ljsyqLXmdGUi724xAwJxrIYbYScb.png', 'bSHgrzKFgkx6D9Y3lVqqI4Qrt3yF9cBTQdMB4U4t.jpg', 1, 1, NULL),
(4, 'Md Rashadul Islam', 'mdrashad', 'tradesmen', 'inrashad@gmail.com', '2023-02-28 12:56:36', '$2y$10$zW9J0vmVF6Kf12f7z9SX0utoinDgXzCV/yht/qMqXodNpXH0ZrXqe', 'Sussex', 31, 1, '1000', NULL, NULL, NULL, NULL, NULL, 0, 'Tradesmen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-18 20:40:34', '2023-02-18 20:40:34', '+8801717643014', NULL, NULL, 1, 0, NULL),
(5, 'trade', 'trade', 'tradesmen', 'trade@gmail.com', '2023-02-28 03:52:01', '$2y$10$175NVh.SKaZQZcYkCGwCROYhGF1q1AS/qMSpBOM/nq0QDcedUnqnO', 'konabari, gazipur', 31, 1, '1400', NULL, NULL, NULL, NULL, NULL, NULL, 'Trade', '4 years', 'Graduate', 'Daffodil', '2 years in jon', 'mx-5832424', 'hsc,ssc', 'some achievements', 'programmer', 'Its my life', NULL, '2023-02-28 03:50:06', '2023-02-28 05:50:27', '01762473884', NULL, NULL, 1, 0, NULL),
(6, 'mytrade', 'salim7', 'tradesmen', 'salim@gmail.com', NULL, '$2y$10$MVjcDLPXbXEKfFBcaSe6e.COTZYRqrsRyW3t3WaM/j5QyRx3qHMy.', 'Gazipur', 31, 5, '1700', NULL, NULL, NULL, NULL, NULL, NULL, 'my trade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-28 23:36:32', '2023-02-28 23:36:32', '01762473884', NULL, NULL, 1, 0, NULL),
(7, 'Md Rashad Hasan', 'm.rashad', 'contractors', 'm.rashad@curetechbd.com', '2023-03-01 12:45:49', '$2y$10$AkW8xsgjBLhIR4kH1D1en.w.ehHSFLckciwdbJ0CDmFOHVipt9Xoq', 'Dhaka', 31, 1, '1000', 'Electricians', 'Electricians', 'Electricians', 'Electricians', 'Electricians', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-01 11:55:43', '2023-03-01 12:45:49', '+8801717643014', NULL, NULL, 1, 0, NULL),
(8, 'salim', 'salimhosen', 'tradesmen', 'rafayo8059@v2ssr.com', '2023-03-01 19:19:41', '$2y$10$ps0.1SgL/Ca3cZt6aTzQJu/av0lAIwwaT/J91hnoQB1KZShwZC2j2', 'konabari', 31, 1, '1700', NULL, NULL, NULL, NULL, NULL, NULL, 'software engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-01 19:12:02', '2023-03-01 19:19:41', '01762473884', NULL, NULL, 1, 0, NULL),
(9, 'mohammad', 'mohammad2', 'architects_engineers', 'mohammad15-1044@diu.edu.bd', '2023-03-04 04:12:36', '$2y$10$ibpFCxT9qqMS19N5tDWEsueZAqblzqjYHaHQM/YT2WOZIjSUlxciK', 'konabari\ngazipur', 31, 1, '1700', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-04 04:11:43', '2023-03-04 07:48:50', '01981743331', NULL, 'fBrIM3PkvpCog31nL9xuIq0JHg2AlpNtfQ7098li.png', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_user`
--

CREATE TABLE `user_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_user`
--

INSERT INTO `user_user` (`user_id`, `friend_id`) VALUES
(3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_settings`
--
ALTER TABLE `company_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_settings_key_unique` (`key`),
  ADD KEY `company_settings_company_id_foreign` (`company_id`);

--
-- Indexes for table `company_user`
--
ALTER TABLE `company_user`
  ADD KEY `company_user_user_id_foreign` (`user_id`),
  ADD KEY `company_user_company_id_foreign` (`company_id`),
  ADD KEY `company_user_subrole_id_foreign` (`subrole_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_company_id_foreign` (`company_id`),
  ADD KEY `contacts_assign_to_foreign` (`assign_to`);

--
-- Indexes for table `counties`
--
ALTER TABLE `counties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counties_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `county_user`
--
ALTER TABLE `county_user`
  ADD KEY `county_user_user_id_foreign` (`user_id`),
  ADD KEY `county_user_county_id_foreign` (`county_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feeds_user_id_foreign` (`user_id`);

--
-- Indexes for table `feed_comments`
--
ALTER TABLE `feed_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feed_comments_feed_id_foreign` (`feed_id`),
  ADD KEY `feed_comments_user_id_foreign` (`user_id`),
  ADD KEY `feed_comments_feed_comment_id_foreign` (`feed_comment_id`);

--
-- Indexes for table `feed_files`
--
ALTER TABLE `feed_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feed_files_feed_id_foreign` (`feed_id`);

--
-- Indexes for table `feed_likes`
--
ALTER TABLE `feed_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feed_likes_feed_id_foreign` (`feed_id`),
  ADD KEY `feed_likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followers_user_id_foreign` (`user_id`),
  ADD KEY `followers_follower_id_foreign` (`follower_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_user`
--
ALTER TABLE `notification_user`
  ADD KEY `notification_user_user_id_foreign` (`user_id`),
  ADD KEY `notification_user_notification_id_foreign` (`notification_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_columns`
--
ALTER TABLE `page_columns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_columns_page_row_id_foreign` (`page_row_id`);

--
-- Indexes for table `page_rows`
--
ALTER TABLE `page_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_rows_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_4349750` (`role_id`),
  ADD KEY `permission_id_fk_4349750` (`permission_id`);

--
-- Indexes for table `permission_subrole`
--
ALTER TABLE `permission_subrole`
  ADD KEY `permission_subrole_subrole_id_foreign` (`subrole_id`),
  ADD KEY `permission_subrole_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `site_menus`
--
ALTER TABLE `site_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `site_menus_site_menu_id_foreign` (`site_menu_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `subroles`
--
ALTER TABLE `subroles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subroles_company_id_foreign` (`company_id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `trade_events`
--
ALTER TABLE `trade_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trade_events_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_user`
--
ALTER TABLE `user_user`
  ADD KEY `user_user_user_id_foreign` (`user_id`),
  ADD KEY `user_user_friend_id_foreign` (`friend_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_settings`
--
ALTER TABLE `company_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counties`
--
ALTER TABLE `counties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feed_comments`
--
ALTER TABLE `feed_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feed_files`
--
ALTER TABLE `feed_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feed_likes`
--
ALTER TABLE `feed_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_columns`
--
ALTER TABLE `page_columns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_rows`
--
ALTER TABLE `page_rows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site_menus`
--
ALTER TABLE `site_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `subroles`
--
ALTER TABLE `subroles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trade_events`
--
ALTER TABLE `trade_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_settings`
--
ALTER TABLE `company_settings`
  ADD CONSTRAINT `company_settings_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_user`
--
ALTER TABLE `company_user`
  ADD CONSTRAINT `company_user_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_user_subrole_id_foreign` FOREIGN KEY (`subrole_id`) REFERENCES `subroles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_assign_to_foreign` FOREIGN KEY (`assign_to`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contacts_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `counties`
--
ALTER TABLE `counties`
  ADD CONSTRAINT `counties_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `county_user`
--
ALTER TABLE `county_user`
  ADD CONSTRAINT `county_user_county_id_foreign` FOREIGN KEY (`county_id`) REFERENCES `counties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `county_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feed_comments`
--
ALTER TABLE `feed_comments`
  ADD CONSTRAINT `feed_comments_feed_comment_id_foreign` FOREIGN KEY (`feed_comment_id`) REFERENCES `feed_comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feed_comments_feed_id_foreign` FOREIGN KEY (`feed_id`) REFERENCES `feeds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feed_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feed_files`
--
ALTER TABLE `feed_files`
  ADD CONSTRAINT `feed_files_feed_id_foreign` FOREIGN KEY (`feed_id`) REFERENCES `feeds` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feed_likes`
--
ALTER TABLE `feed_likes`
  ADD CONSTRAINT `feed_likes_feed_id_foreign` FOREIGN KEY (`feed_id`) REFERENCES `feeds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feed_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification_user`
--
ALTER TABLE `notification_user`
  ADD CONSTRAINT `notification_user_notification_id_foreign` FOREIGN KEY (`notification_id`) REFERENCES `notifications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_columns`
--
ALTER TABLE `page_columns`
  ADD CONSTRAINT `page_columns_page_row_id_foreign` FOREIGN KEY (`page_row_id`) REFERENCES `page_rows` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_rows`
--
ALTER TABLE `page_rows`
  ADD CONSTRAINT `page_rows_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_4349750` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_4349750` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_subrole`
--
ALTER TABLE `permission_subrole`
  ADD CONSTRAINT `permission_subrole_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_subrole_subrole_id_foreign` FOREIGN KEY (`subrole_id`) REFERENCES `subroles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `site_menus`
--
ALTER TABLE `site_menus`
  ADD CONSTRAINT `site_menus_site_menu_id_foreign` FOREIGN KEY (`site_menu_id`) REFERENCES `site_menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subroles`
--
ALTER TABLE `subroles`
  ADD CONSTRAINT `subroles_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trade_events`
--
ALTER TABLE `trade_events`
  ADD CONSTRAINT `trade_events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_user`
--
ALTER TABLE `user_user`
  ADD CONSTRAINT `user_user_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
