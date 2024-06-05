-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 03:42 AM
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
-- Database: `lmswithmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `mobile`, `type`, `image`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'shikhar', '9864894584', 'admin', '1224.png', 'admin@admin.com', '$2y$12$D/Ti427Wtb2tIBNYJx74Su.w4f7Ua9zKQbbIMfF6bBDu2njcWv4Lq', 1, NULL, '2024-05-05 04:32:46'),
(2, 'sub-admin1', '980000000', 'subadmin', '', 'sub_admin1@admin.com', '$2y$12$bio1L8VVDBMDhHJPrD5uy.YPEL4NQ9GKaPo9gisKLBlQ2oP9EVywq', 1, NULL, NULL),
(3, 'sub-admin', '980000000', 'subadmin', '', 'sub_admin2@admin.com', '$2y$12$bio1L8VVDBMDhHJPrD5uy.YPEL4NQ9GKaPo9gisKLBlQ2oP9EVywq', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `isbn_no` varchar(255) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `admin_id`, `title`, `author`, `isbn_no`, `book_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'The Alchemist', 'Pulo', '29010', '2660.png', 'A FABLE ABOUT FOLLOWING YOUR DREAM', 1, '2024-05-10 23:05:31', '2024-05-15 10:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `table_no` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `table_no`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Fiction', '100', '3642.jpg', 1, '2024-05-10 23:04:23', '2024-05-10 23:05:53'),
(3, 'Arts', '200', '2401.jpg', 1, '2024-05-10 23:04:32', '2024-05-10 23:04:32');

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
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_name` int(11) NOT NULL,
  `room_num` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `enrolled_students` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade_name`, `room_num`, `capacity`, `enrolled_students`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'cls1', 30, 20, 1, NULL, '2024-05-28 06:33:54'),
(2, 2, 'cls1', 30, 20, 1, NULL, '2024-05-27 21:54:58'),
(3, 3, 'cls1', 30, 20, 1, NULL, '2024-05-27 21:55:00'),
(4, 4, 'cls1', 30, 20, 1, NULL, NULL),
(5, 5, 'cls1', 30, 20, 1, NULL, NULL),
(6, 6, 'cls1', 30, 20, 1, NULL, NULL),
(7, 7, 'cls1', 30, 20, 1, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_04_120015_create_admins_table', 2),
(9, '2024_05_06_064414_create_categories_table', 3),
(10, '2024_05_10_162921_drop_books_table', 4),
(11, '2024_05_10_165338_create_categories_table', 5),
(12, '2024_05_10_165417_create_books_table', 6),
(13, '2024_05_10_170320_create_books_table', 7),
(14, '2024_05_10_170724_create_books_table', 8),
(15, '2024_05_13_043252_create_class_table', 9),
(16, '2024_05_13_044420_create_grades_table', 10),
(17, '2024_05_14_154340_create_subjects_table', 11),
(18, '2024_05_14_161656_create_subjects_table', 12),
(19, '2024_05_18_153216_create_teachers_table', 13),
(20, '2024_05_18_161205_create_teachers_table', 14),
(21, '2024_05_19_082603_create_teachers_table', 15),
(22, '2024_05_19_171627_create_teacher_schedule_table', 16),
(23, '2024_05_20_042513_create_teacher_schedules_table', 17),
(24, '2024_05_26_030602_create_students_table', 18),
(25, '2024_05_27_140645_create_students_table', 19),
(26, '2024_05_27_143035_create_students_table', 20),
(27, '2024_05_28_122656_create_teacher_schedules_table', 21),
(28, '2024_05_28_122905_create_teacher_schedules_table', 22),
(29, '2024_05_28_153616_create_notice_categories_table', 23),
(30, '2024_05_29_030645_create_notices_table', 24),
(31, '2024_05_29_150637_create_notices_table', 25),
(32, '2024_05_30_024321_create_notices_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `notice_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `admin_id`, `notice_cat_id`, `title`, `link`, `description`, `attachment`, `url`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 2, 'test', 'tests', 'test', '7964.pdf', 'test-6137', 1, '2024-05-29 23:16:36', '2024-05-29 23:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `notice_categories`
--

CREATE TABLE `notice_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_categories`
--

INSERT INTO `notice_categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Adminstration', 1, NULL, '2024-05-28 10:45:02'),
(2, 'General', 0, NULL, '2024-05-29 20:50:05'),
(3, 'parent Information', 0, NULL, '2024-05-29 08:36:38'),
(4, 'Technical update', 1, '2024-05-28 10:33:22', '2024-05-28 10:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_contact` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `grade_id` bigint(20) UNSIGNED DEFAULT NULL,
  `roll_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `gender`, `dob`, `parent_name`, `parent_contact`, `admission_date`, `grade_id`, `roll_no`, `email`, `password`, `student_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ram', 'bdr', 'thapa', 'baglung', 'male', '2021-12-02', 'bhim thapa', '9864354384', '2021-12-02', 2, 2, 'ram@gmail.com', '$2a$12$CHGfcIc90IQvLiVq.gAoKep5tD..drZEnQ.RZwA1WJECZfTTTtQxC', '', 1, NULL, NULL),
(6, 'Hari', 'maya', 'KC', 'Pokhara-26, newroad', 'female', '2024-05-07', 'Gauri Kc', '9864894584', '2024-05-06', 6, 20, 'hari@gmail.com', '$2y$12$ALmfKelKEJqObH4eYY8ov.0ZqgyfeO6768cx/P8yI8hnOxmaQBjB6', '', 1, '2024-05-27 10:45:57', '2024-05-27 23:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grade_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `credit_hours` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `grade_id`, `subject_name`, `subject_code`, `credit_hours`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'Computer', 'smp2', 2, 1, '2024-05-18 08:32:52', '2024-05-18 21:34:55'),
(4, 2, 'English', 'eng2', 3, 1, '2024-05-18 08:32:52', '2024-05-18 08:32:52'),
(5, 1, 'History', 'HSt1', 4, 1, '2024-05-21 10:47:12', '2024-05-21 10:47:12'),
(6, 4, 'Economics', 'Eco5', 3, 1, '2024-05-25 07:51:19', '2024-05-25 07:51:19'),
(7, 7, 'Science', 'scnc7', 2, 1, '2024-05-25 07:59:42', '2024-05-25 07:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `joining_date` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `attendance` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `teacher_image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `dob`, `joining_date`, `department`, `salary`, `attendance`, `gender`, `contact`, `address`, `teacher_image`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Shikhar', 'Bahik', '2024-12-03', '2024-12-03', 'Science', '20000', 12, 'male', '986564', '123 Main St', '', 'teacher@gmail.com', '$2y$12$D/Ti427Wtb2tIBNYJx74Su.w4f7Ua9zKQbbIMfF6bBDu2njcWv4Lq', 1, NULL, '2024-05-31 01:20:17'),
(5, 'Shikhar', 'Bahik Magar', '2024-05-16', '2024-05-14', 'IT', '100000', 123, 'male', '9864894584', 'Pokhara-26, Bijaypur', '', 'sonamgrg141@gmail.com', '$2y$12$eGxxFq/AE1gIFGTKQJFkjuK1MxbDleSd.wkBpysuAGweJ34aPueHO', 1, '2024-05-19 10:33:25', '2024-05-31 01:54:06'),
(6, 'Madan', 'Adhikari', '2003-12-29', '2024-05-29', 'Science', '450000', 12, 'male', '32225522', 'Pokhara-26, talchowk', '1940.JPG', 'cfcb@gmail.com', '$2y$12$D/Ti427Wtb2tIBNYJx74Su.w4f7Ua9zKQbbIMfF6bBDu2njcWv4Lq', 1, '2024-05-29 01:14:11', '2024-05-29 01:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_schedules`
--

CREATE TABLE `teacher_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `day_of_week` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_schedules`
--

INSERT INTO `teacher_schedules` (`id`, `teacher_id`, `class_id`, `subject_id`, `day_of_week`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 3, 'everyday', '10:15 - 11:05', 1, NULL, '2024-05-28 07:30:15'),
(8, 2, 1, 5, 'sunday', '11:05 - 12:00', 1, '2024-05-31 01:38:34', '2024-05-31 01:38:34'),
(9, 2, 7, 7, 'monday', '12:00 - 01:00', 1, '2024-05-31 01:39:16', '2024-05-31 01:39:16');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_index` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_admin_id_index` (`admin_id`),
  ADD KEY `notices_notice_cat_id_index` (`notice_cat_id`);

--
-- Indexes for table `notice_categories`
--
ALTER TABLE `notice_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_grade_id_index` (`grade_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_grade_id_index` (`grade_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `teacher_schedules`
--
ALTER TABLE `teacher_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_schedules_teacher_id_index` (`teacher_id`),
  ADD KEY `teacher_schedules_class_id_index` (`class_id`),
  ADD KEY `teacher_schedules_subject_id_index` (`subject_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice_categories`
--
ALTER TABLE `notice_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_schedules`
--
ALTER TABLE `teacher_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notices_notice_cat_id_foreign` FOREIGN KEY (`notice_cat_id`) REFERENCES `notice_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_schedules`
--
ALTER TABLE `teacher_schedules`
  ADD CONSTRAINT `teacher_schedules_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_schedules_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teacher_schedules_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
