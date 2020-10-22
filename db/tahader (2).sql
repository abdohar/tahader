-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 03:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tahader`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_phone`, `admin_email`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0992884727', 'abdohar97@gmail.com', 1, '2020-10-04 05:52:00', '2020-10-04 05:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` enum('الرياض','جدة','مكة','الدمام','الخبر','الجبيل','الاحساء','المدينة المنورة','الطائف','بريده','عنيزة','جيزان','نجران','أبها','الباحة','تبوك','العود') COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `city`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'الرياض', 'Abhā', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(2, 'الرياض', 'Abqaiq', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(3, 'الرياض', 'Al-Baḥah', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(4, 'الرياض', 'Al-Dammām', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(5, 'الرياض', 'Al-Hufūf', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(6, 'الرياض', 'Al-Jawf', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(7, 'الرياض', 'Al-Kharj', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(8, 'الرياض', 'Al-Khubar', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(9, 'الرياض', 'Al-Qaṭīf', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(10, 'الرياض', 'Al-Ṭaʾif', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(11, 'الرياض', 'ʿArʿar', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(12, 'الرياض', 'Buraydah', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(13, 'الرياض', 'Dhahran', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(14, 'الرياض', 'Ḥāʾil', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(15, 'الرياض', 'Jiddah', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(16, 'الرياض', 'Jīzān', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(17, 'الرياض', 'Khamīs Mushayt', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(18, 'الرياض', 'King Khalīd Military City', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(19, 'الرياض', 'Mecca', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(20, 'الرياض', 'Medina', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(21, 'الرياض', 'Najrān', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(22, 'الرياض', 'Ras Tanura', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(23, 'الرياض', 'Riyadh', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(24, 'الرياض', 'Sakākā', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(25, 'الرياض', 'Tabūk', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(26, 'الرياض', 'Yanbuʿ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meassge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `sender_name`, `sender_email`, `sender_phone`, `subject`, `meassge`, `created_at`, `updated_at`) VALUES
(2, 'abdohar', 'abdohar97@gmail.com', '0992884727', 'test', 'hi how are you \r\ni want register school in your site\r\ncan you contact me please.\r\nthanks.', '2020-10-04 09:37:04', '2020-10-04 09:37:04'),
(3, 'abdohar', 'abdh4497@gmail.com', '0992884727', 'test', 'Consectetur adipiscing elit, sued do eiusmod Consectetur adipiscing elit, sued do eiusmod\r\nConsectetur adipiscing elit, sued do eiusmod', '2020-10-04 09:44:26', '2020-10-04 09:44:26'),
(4, 'test', 'abdohar97@gmail.com', '0992884727', 'a', 'sad qw dasd asd sadsa\r\nsa dsadsas adsa das\r\n\r\nsa dsadlasdhaskd', '2020-10-18 09:51:55', '2020-10-18 09:51:55'),
(5, 'test', 'abdohar97@gmail.com', '0992884727', 'a', 'sakjd sjag duyas bd uysano \r\ndsaf sdfdsfsdf sdf\r\nsdf sdafdsfsd', '2020-10-18 09:55:41', '2020-10-18 09:55:41'),
(6, 'test', 'abdohar97@gmail.com', '0992884727', 'a', 'sakjd sjag duyas bd uysano \r\ndsaf sdfdsfsdf sdf\r\nsdf sdafdsfsd', '2020-10-18 09:57:42', '2020-10-18 09:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) NOT NULL,
  `school_grade_subject_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `drive_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file_path`, `school_id`, `school_grade_subject_id`, `created_at`, `updated_at`, `subject_id`, `drive_url`) VALUES
(1, 'kg1', NULL, 2, NULL, '2020-10-04 06:20:18', '2020-10-04 06:20:18', 13, 'https://drive.google.com/drive/folders/1uYz3D9ZFEDYmuC8v8d1xZXuJ6SpNGF0I'),
(2, 'kg1-math', NULL, 1, NULL, '2020-10-04 06:24:52', '2020-10-04 06:24:52', 1, 'https://drive.google.com/drive/folders/1smh2Qq_8QuXk0UxuFV6Dn-mBG3fAvMHQ'),
(3, 'kg-2English', NULL, 1, NULL, '2020-10-04 06:26:18', '2020-10-04 06:26:18', 3, 'https://drive.google.com/drive/folders/1gBiBXLZHISV99kDnWrZqtR4qhFlbblUj'),
(4, 'kg-1 arabic', NULL, 2, NULL, '2020-10-04 06:33:22', '2020-10-04 06:33:22', 14, 'https://drive.google.com/drive/folders/1ID39Nn8rrcSdMcn4Ztb2S9etppT0-egQ'),
(5, 'kg1- english', NULL, 2, NULL, '2020-10-04 06:35:34', '2020-10-04 06:35:34', 17, 'https://drive.google.com/drive/folders/1a9_3n8-EV-tlTVwL-JJ5pg6CSYgG0X4U');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `note`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Kg1', 'this is Kg1', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(2, 'Kg2', 'this is Kg2', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(3, 'Kg3', 'this is Kg3', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(4, 'Kg4', 'this is Kg4', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(5, 'First Grade ', 'this is First Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(6, 'Second Grade ', 'this is Second Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(7, 'Third Grade ', 'this is Third Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(8, 'Fourth Grade ', 'this is Fourth Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(9, 'Fifth Grade ', 'this is Fifth Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(10, 'VI Grade ', 'this is VI Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(11, 'Seventh Grade ', 'this is Seventh Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(12, 'VIII Grade ', 'this is VIII Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(13, 'Ninth Grade ', 'this is Ninth Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(14, 'The tenth', 'this is The tenth', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(15, 'Eleventh Grade ', 'this is Eleventh Grade ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(16, 'Bachelor Grad ', 'this is Bachelor Grad ', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meassge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `meassge`, `school_id`, `created_at`, `updated_at`) VALUES
(2, 'test 2', 'ho sdafas wdasda qwrfdawdsa q wdsad', 1, '2020-10-07 08:52:26', '2020-10-07 08:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_09_23_071708_create_schools_table', 1),
(4, '2020_09_23_071722_create_subjects_table', 1),
(5, '2020_09_23_071739_create_grades_table', 1),
(6, '2020_09_23_071755_create_teachers_table', 1),
(7, '2020_09_23_071810_create_files_table', 1),
(8, '2020_09_23_071843_create_admins_table', 1),
(9, '2020_09_23_073321_create_cities_table', 1),
(10, '2020_09_23_073338_create_tracks_table', 1),
(11, '2020_09_23_073515_create_schooltracks_table', 1),
(12, '2020_09_23_073527_create_schoolcities_table', 1),
(13, '2020_09_23_093702_create_schoolgradesubjects_table', 1),
(14, '2020_09_23_102801_create_schoolgradesubjectteachers_table', 1),
(15, '2020_09_28_083310_add_column_grade_id_subjects_table', 1),
(16, '2020_09_28_094200_create_schoolgrades_table', 1),
(17, '2020_09_28_123910_add_column_subject_id_files_table', 1),
(18, '2020_09_29_095315_add_column_drive_url_file_upload_table', 1),
(19, '2020_09_30_071539_create_contacts_table', 1),
(20, '2020_09_30_115333_create_teachergrades_table', 1),
(21, '2020_09_30_115400_create_teachersubjects_table', 1),
(22, '2020_09_30_124113_add_column_teacher_phone_teachers_table', 1),
(23, '2020_09_30_132648_add_column_school_id_teachergrades_table', 1),
(24, '2020_09_30_132714_add_column_school_id_teachersubjects_table', 1),
(25, '2020_10_01_085537_add_column_verfication_key_is_block_users_table', 1),
(26, '2020_10_03_071116_add_column_certificate_teachers_table', 1),
(27, '2020_10_04_102749_add_column_show_schools_table', 2),
(28, '2020_10_04_102958_add_column_show_schools_table', 3),
(29, '2020_10_04_111634_add_column_school_address_schools_table', 4),
(30, '2020_10_05_084843_create_replaycontacts_table', 5),
(31, '2020_10_05_121646_create_messages_table', 6),
(32, '2020_10_06_063635_create_replaymessages_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `replaycontacts`
--

CREATE TABLE `replaycontacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meassge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replaymessages`
--

CREATE TABLE `replaymessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meassge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replaymessages`
--

INSERT INTO `replaymessages` (`id`, `subject`, `meassge`, `school_id`, `message_id`, `created_at`, `updated_at`) VALUES
(5, 'test 2', 'wqdfe ve fwv  efw fedaed', 1, 2, '2020-10-07 09:03:48', '2020-10-07 09:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `schoolcities`
--

CREATE TABLE `schoolcities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `school-address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schoolgrades`
--

CREATE TABLE `schoolgrades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolgrades`
--

INSERT INTO `schoolgrades` (`id`, `school_id`, `grade_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-10-04 05:59:16', '2020-10-04 05:59:16'),
(2, 1, 2, '2020-10-04 06:00:02', '2020-10-04 06:00:02'),
(3, 1, 5, '2020-10-04 06:00:02', '2020-10-04 06:00:02'),
(11, 2, 1, '2020-10-04 06:12:52', '2020-10-04 06:12:52'),
(12, 2, 2, '2020-10-04 06:13:31', '2020-10-04 06:13:31'),
(13, 2, 3, '2020-10-04 06:13:31', '2020-10-04 06:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `schoolgradesubjects`
--

CREATE TABLE `schoolgradesubjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schoolgradesubjectteachers`
--

CREATE TABLE `schoolgradesubjectteachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_open_year` date NOT NULL,
  `school_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_track` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `show` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `school_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `manager_name`, `manager_phone`, `manager_email`, `school_name`, `school_description`, `school_open_year`, `school_phone`, `school_website`, `school_email`, `school_country`, `school_city`, `school_track`, `school_logo`, `school_cover`, `user_id`, `deleted_at`, `created_at`, `updated_at`, `show`, `school_address`) VALUES
(1, 'Abdulrahman', '0992884727', 'abdh4497@gmail.com', 'Alwatanea', 'this is Aleataneia School', '2000-10-10', '0992884727', NULL, 'abdh4497@gmail.com', 'Saudi Arabia', 'Abhā', 'Public School', '/assets/Alwatanea/logo/1601801878_lo.png', '/assets/Alwatanea/logo/1601801879_html5-display.png', 2, NULL, '2020-10-04 05:57:59', '2020-10-21 08:57:28', '8', 'damascuc ala sdasdkj as dsakj;dnkasj dlksjdn'),
(2, 'omaeer', '0936215337', 'iecdiecdsyria@gmail.com', 'international', 'this is international school', '1990-12-11', '0936215337', NULL, 'iecdiecdsyria@gmail.com', 'Saudi Arabia', 'Abhā', 'Public School', '/assets/international/logo/1601802145_lo.png', '/assets/international/logo/1601802145_html5-display.png', 3, NULL, '2020-10-04 06:02:26', '2020-10-19 03:34:49', '16', 'sadsad jkksdka m,kj kubask i');

-- --------------------------------------------------------

--
-- Table structure for table `schooltracks`
--

CREATE TABLE `schooltracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `note`, `code`, `school_id`, `deleted_at`, `created_at`, `updated_at`, `grade_id`) VALUES
(1, 'math', 'this is subject math', NULL, 1, NULL, '2020-10-04 06:00:02', '2020-10-04 06:00:02', 1),
(2, 'arabic', 'this is subject arabic', NULL, 1, NULL, '2020-10-04 06:00:02', '2020-10-04 06:00:02', 1),
(3, 'English', 'this is subject English', NULL, 1, NULL, '2020-10-04 06:00:02', '2020-10-04 06:00:02', 2),
(4, 'arabic', 'this is subject arabic', NULL, 1, NULL, '2020-10-04 06:00:02', '2020-10-04 06:00:02', 2),
(5, 'arabic', 'this is subject arabic', NULL, 1, NULL, '2020-10-04 06:00:02', '2020-10-04 06:00:02', 5),
(13, 'math', 'this is subject math', NULL, 2, NULL, '2020-10-04 06:12:52', '2020-10-04 06:12:52', 1),
(14, 'arabic', 'this is subject arabic', NULL, 2, NULL, '2020-10-04 06:12:52', '2020-10-04 06:12:52', 1),
(15, 'physic', 'this is subject physic', NULL, 2, NULL, '2020-10-04 06:13:31', '2020-10-04 06:13:31', 2),
(16, 'arabic', 'this is subject arabic', NULL, 2, NULL, '2020-10-04 06:13:31', '2020-10-04 06:13:31', 2),
(17, 'English', 'this is subject English', NULL, 2, NULL, '2020-10-04 06:13:31', '2020-10-04 06:13:31', 3),
(18, 'france', 'this is subject france', NULL, 2, NULL, '2020-10-04 06:13:31', '2020-10-04 06:13:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachergrades`
--

CREATE TABLE `teachergrades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachergrades`
--

INSERT INTO `teachergrades` (`id`, `teacher_id`, `grade_id`, `created_at`, `updated_at`, `school_id`) VALUES
(1, 1, 1, '2020-10-04 06:29:25', '2020-10-04 06:29:25', 2),
(2, 1, 2, '2020-10-04 06:29:36', '2020-10-04 06:29:36', 2),
(5, 3, 1, '2020-10-07 09:15:56', '2020-10-07 09:15:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `firstname`, `fathername`, `lastname`, `school_id`, `user_id`, `created_at`, `updated_at`, `phone`, `sertificate`) VALUES
(1, 'abd', 'kasem', 'harb', 2, 4, '2020-10-04 06:29:08', '2020-10-04 06:29:08', '0992884777', 'math'),
(3, 'omaeer', 'abd', 'harb', 1, 6, '2020-10-07 09:15:22', '2020-10-07 09:15:22', '0992884727', 'math');

-- --------------------------------------------------------

--
-- Table structure for table `teachersubjects`
--

CREATE TABLE `teachersubjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `grade_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachersubjects`
--

INSERT INTO `teachersubjects` (`id`, `teacher_id`, `grade_id`, `grade_name`, `subject_id`, `created_at`, `updated_at`, `school_id`) VALUES
(1, 1, 3, 'Kg3', 17, '2020-10-04 06:29:47', '2020-10-04 06:29:47', 2),
(2, 1, 2, 'Kg2', 16, '2020-10-05 08:17:32', '2020-10-05 08:17:32', 2),
(4, 1, 1, 'Kg1', 13, '2020-10-05 09:00:13', '2020-10-05 09:00:13', 2),
(6, 3, 5, 'First Grade ', 5, '2020-10-07 09:16:10', '2020-10-07 09:16:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_name` enum('international-عالمي','public-school-عام','Decisions-مقررات') COLLATE utf8mb4_unicode_ci NOT NULL,
  `track` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `track_name`, `track`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'international-عالمي', 'International', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(2, 'international-عالمي', 'Public School', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13'),
(3, 'international-عالمي', 'Decisions', NULL, '2020-10-04 05:53:13', '2020-10-04 05:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verficationkey` int(11) NOT NULL,
  `resetpassword` int(11) DEFAULT NULL,
  `isblock` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `verficationkey`, `resetpassword`, `isblock`) VALUES
(1, 'Admin', 'schooltahader@gmail.com', NULL, 'admin', '$2y$10$OQT7U68i0BmjtMeRF9xNsegjcxbRdgCSerLtXZAMjHf15Nfc1bh9G', NULL, '2020-10-04 05:52:00', '2020-10-04 05:54:53', 693211, NULL, 0),
(2, 'Alwatanea@0992884727', 'abdh4497@gmail.com', NULL, 'school', '$2y$10$lE850RJlqj2maTzHsqFESeeObG7ITpYg.NvGpGf1ei1YeH53h4Lm.', NULL, '2020-10-04 05:57:59', '2020-10-21 09:32:12', 364265, 294341, 0),
(3, 'international@0936215337', 'iecdiecdsyria@gmail.com', NULL, 'school', '$2y$10$OQT7U68i0BmjtMeRF9xNsegjcxbRdgCSerLtXZAMjHf15Nfc1bh9G', NULL, '2020-10-04 06:02:26', '2020-10-04 06:15:24', 152498, NULL, 0),
(4, 'abd@0992884777', 'abdohar97@gmail.com', NULL, 'teacher', '$2y$10$OQT7U68i0BmjtMeRF9xNsegjcxbRdgCSerLtXZAMjHf15Nfc1bh9G', NULL, '2020-10-04 06:29:08', '2020-10-07 09:13:51', 244339, NULL, 0),
(6, 'omaeer@0992884727', 'alghfran248@gmail.com', NULL, 'teacher', '$2y$10$OQT7U68i0BmjtMeRF9xNsegjcxbRdgCSerLtXZAMjHf15Nfc1bh9G', NULL, '2020-10-07 09:15:22', '2020-10-07 09:16:52', 476885, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_admin_email_unique` (`admin_email`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grades_name_unique` (`name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replaycontacts`
--
ALTER TABLE `replaycontacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replaymessages`
--
ALTER TABLE `replaymessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolcities`
--
ALTER TABLE `schoolcities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolgrades`
--
ALTER TABLE `schoolgrades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolgradesubjects`
--
ALTER TABLE `schoolgradesubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolgradesubjectteachers`
--
ALTER TABLE `schoolgradesubjectteachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schools_manager_email_unique` (`manager_email`),
  ADD UNIQUE KEY `schools_school_name_unique` (`school_name`),
  ADD UNIQUE KEY `schools_school_phone_unique` (`school_phone`),
  ADD UNIQUE KEY `schools_school_email_unique` (`school_email`),
  ADD UNIQUE KEY `schools_school_website_unique` (`school_website`);

--
-- Indexes for table `schooltracks`
--
ALTER TABLE `schooltracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_code_unique` (`code`);

--
-- Indexes for table `teachergrades`
--
ALTER TABLE `teachergrades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_phone_unique` (`phone`);

--
-- Indexes for table `teachersubjects`
--
ALTER TABLE `teachersubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `replaycontacts`
--
ALTER TABLE `replaycontacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `replaymessages`
--
ALTER TABLE `replaymessages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schoolcities`
--
ALTER TABLE `schoolcities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schoolgrades`
--
ALTER TABLE `schoolgrades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `schoolgradesubjects`
--
ALTER TABLE `schoolgradesubjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schoolgradesubjectteachers`
--
ALTER TABLE `schoolgradesubjectteachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schooltracks`
--
ALTER TABLE `schooltracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teachergrades`
--
ALTER TABLE `teachergrades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachersubjects`
--
ALTER TABLE `teachersubjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
