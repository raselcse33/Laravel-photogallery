-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 03:58 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallary`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Animal', '2018-10-05 08:14:19', '2018-10-05 08:14:19'),
(2, 'Flower', '2018-10-05 08:14:19', '2018-10-05 08:14:19'),
(3, 'Horror', '2018-10-05 08:14:19', '2018-10-05 08:14:19'),
(4, 'Natural', '2018-10-05 08:14:19', '2018-10-05 08:14:19');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_10_05_092923_create_posts_table', 1),
(16, '2018_10_05_093033_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cetagory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `imagename`, `image`, `description`, `cetagory_id`, `user_id`, `author_name`, `created_at`, `updated_at`) VALUES
(3, 'cat', 'index1.jpg', 'Lion is the king of animal', 1, 1, 'Rasel', '2018-10-05 09:56:25', '2018-10-05 13:00:52'),
(4, 'Tiger', 'imags.jpg', 'Royel Bengul Tiger is National Animal in bangladesh', 1, 1, 'Rasel', '2018-10-05 09:57:15', '2018-10-05 09:57:15'),
(5, 'Cat', 'images.jpg', 'Cat is Pretti Animal', 1, 1, 'Rasel', '2018-10-05 09:58:00', '2018-10-05 14:36:28'),
(7, 'Norway Sky', 'index.jpg', 'It is very amazing sky', 4, 2, 'mohib', '2018-10-05 10:00:31', '2018-10-05 10:00:31'),
(8, 'Last world', 'indexq.jpg', 'Last world in', 4, 2, 'mohib', '2018-10-05 10:01:00', '2018-10-05 10:01:00'),
(9, 'Flower', 'imagedds.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 2, 1, 'Rasel', '2018-10-05 14:07:46', '2018-10-05 14:07:46'),
(10, 'Flower', 'ind.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 2, 1, 'Rasel', '2018-10-05 14:08:07', '2018-10-05 14:08:07'),
(11, 'Flower', 'indexddd.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 2, 1, 'Rasel', '2018-10-05 14:08:23', '2018-10-05 14:08:23'),
(12, 'Flower', 'imagedds.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 2, 1, 'Rasel', '2018-10-05 14:08:38', '2018-10-05 14:08:38'),
(13, 'Alone', 'indedddx.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 3, 2, 'mohib', '2018-10-05 14:09:43', '2018-10-05 14:09:43'),
(14, 'Alone', 'indel.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 3, 2, 'mohib', '2018-10-05 14:09:59', '2018-10-05 14:09:59'),
(15, 'Alone', 'indessx.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 3, 2, 'mohib', '2018-10-05 14:10:15', '2018-10-05 14:10:15'),
(16, 'Alone', 'indx.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 3, 2, 'mohib', '2018-10-05 14:10:33', '2018-10-05 14:10:33'),
(17, 'Animal', 'imagegggs.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 1, 1, 'Rasel', '2018-10-05 14:44:11', '2018-10-05 14:44:11'),
(18, 'Natural', 'im.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 4, 1, 'Rasel', '2018-10-05 14:44:31', '2018-10-05 14:44:31'),
(19, 'Natural', 'imagedfs.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 4, 1, 'Rasel', '2018-10-05 14:44:46', '2018-10-05 14:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rasel', 'admin@gmail.com', 1, '$2y$10$2E5eN1zGmmR4/KoD.y.1Vu5jq7Yg3qgX8y63RVQe8ZgwHUGxv.HFS', 'TV3CoYwXOWXlWZdCrwRvVrlsyFn2DP1OZ39AWNVtLnsCks8kX0o4b42nlxmS', '2018-10-05 08:14:19', '2018-10-05 08:14:19'),
(2, 'mohib', 'mohibcse330@gmail.com', 0, '$2y$10$6ntCGZhZaXK.MFLcjbkXwOewwwc..36IUSy70UgyPv5b4CpbO7E.2', 'RKOvImmfgwmdbPzsCVwic49FJrwt81mwRgJddu0pLQCnExYengon0aZ8z58a', '2018-10-05 09:59:47', '2018-10-05 09:59:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
