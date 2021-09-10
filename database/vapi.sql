-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 04:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i1_users`
--

CREATE TABLE `a_p_i1_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i1_users`
--

INSERT INTO `a_p_i1_users` (`id`, `username`, `name`, `course`, `password`) VALUES
(1, 'michaels', 'Michael Scott', 'flag{api1_d0cd9be2324cc237235b}', '60!eH>Rt=d\'-'),
(2, 'meredithp', 'Meredith Palmer', 'The Subtle art of not giving a F***', '[NaZ7RUMbK#O'),
(3, 'pambeese', 'Pam Beesly', 'Sketching for Dummies', '/&T=_yEA5,_L'),
(4, 'jimhalp', 'Jim Halpert', 'Art of Pranks', 'ag4|YY~`M=Gk');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i2_users`
--

CREATE TABLE `a_p_i2_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i2_users`
--

INSERT INTO `a_p_i2_users` (`id`, `email`, `password`, `name`, `token`, `address`, `city`, `country`) VALUES
(1, 'savanna48@ortiz.com', 'zTyBwV/9', 'Evelyn', 'Fp0r1mty_gxK9DRZ5IUw3sX2enQ6rau68M6YGyoqR3XoBG13wtSbvmdaK5CB', '10th Downing', 'Mesport', 'USA'),
(2, 'hauck.aletha@yahoo.com', 'kU-wDE7r', 'Tara', '1Nkoz6quzJiis1SEonJeSxwkXTzSzcULofbL9O7KPz6_sKGkUcQDzoNfI5aA', 'flag{api2_6bf2beda61e2a1ab2d0a}', 'Delhi', 'India'),
(3, 'harber.leif@beatty.info', 'kU-wDE7r', 'Joyce', 'sLqs17RjmdlWoBP2ONdAPP8WtIVNwlyz_qzLwhmJGboWD_asFICYggcE3bPi', 'San Jose', 'California', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i3_comments`
--

CREATE TABLE `a_p_i3_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `postid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deviceid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commenttext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i3_comments`
--

INSERT INTO `a_p_i3_comments` (`id`, `postid`, `deviceid`, `latitude`, `longitude`, `commenttext`, `username`) VALUES
(1, '1', 'flag{api3_0bad677bfc504c75ff72}', '45.5426274', '-122.7944111', 'THIS POST IS SH***Y', 'baduser007');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i3_users`
--

CREATE TABLE `a_p_i3_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i3_users`
--

INSERT INTO `a_p_i3_users` (`id`, `username`, `name`, `password`) VALUES
(1, 'roottusk', 'Tushar K', '&_tUO^{FKI9-');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i4_users`
--

CREATE TABLE `a_p_i4_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `apikey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i4_users`
--

INSERT INTO `a_p_i4_users` (`id`, `apikey`, `firstname`, `lastname`) VALUES
(1, 'FZvjaFlMgUfnpFJDhKx-92xeXx_sCr7Y', 'john', 'flag{api4_ce696239323ea5b2d015}');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i5_users`
--

CREATE TABLE `a_p_i5_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i5_users`
--

INSERT INTO `a_p_i5_users` (`id`, `username`, `password`, `name`, `address`, `mobileno`) VALUES
(1, 'admin', 'admin!@#$', 'Admin User', 'flag{api5_76dd990a97ff1563ae76}', '8080808080');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i6_users`
--

CREATE TABLE `a_p_i6_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i6_users`
--

INSERT INTO `a_p_i6_users` (`id`, `name`, `username`, `password`, `credit`) VALUES
(1, 'Tushar', 'roottusk', 'asdvhSDSA&*65', '50');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i7_users`
--

CREATE TABLE `a_p_i7_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authkey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i7_users`
--

INSERT INTO `a_p_i7_users` (`id`, `username`, `password`, `authkey`) VALUES
(1, 'admin', 'Kencing@001', '8ba30b496fae88ec808d6dc74f85952d06e3739696fe689b228bc0d906d2999e');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i8_users`
--

CREATE TABLE `a_p_i8_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authkey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i8_users`
--

INSERT INTO `a_p_i8_users` (`id`, `username`, `password`, `authkey`, `secret`) VALUES
(1, 'admin', 'z2Eav@j6A:^}fSMe', 'oWsZ8vWNuECjCAiZVJHOzsNsNH08zWRZ', 'flag{api8_509f8e201807860d5c91}');

-- --------------------------------------------------------

--
-- Table structure for table `a_p_i9_users`
--

CREATE TABLE `a_p_i9_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accbalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_p_i9_users`
--

INSERT INTO `a_p_i9_users` (`id`, `username`, `pin`, `accbalance`) VALUES
(1, 'richardbranson', '1655', 'flag{api9_81e306bdd20a7734e244}');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2021_08_29_101627_create_a_p_i1_users_table', 1),
(19, '2021_08_29_154028_create_a_p_i2_users_table', 1),
(20, '2021_08_30_111133_create_a_p_i3_users_table', 1),
(21, '2021_08_30_120950_create_a_p_i3_comments_table', 1),
(22, '2021_09_03_092221_create_a_p_i4_users_table', 1),
(23, '2021_09_04_091223_create_a_p_i5_users_table', 1),
(24, '2021_09_04_151228_create_a_p_i6_users_table', 1),
(25, '2021_09_07_130451_create_a_p_i7_users_table', 1),
(26, '2021_09_08_090801_create_a_p_i8_users_table', 1),
(27, '2021_09_08_102937_create_a_p_i9_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_p_i1_users`
--
ALTER TABLE `a_p_i1_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `a_p_i2_users`
--
ALTER TABLE `a_p_i2_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i3_comments`
--
ALTER TABLE `a_p_i3_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i3_users`
--
ALTER TABLE `a_p_i3_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i4_users`
--
ALTER TABLE `a_p_i4_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i5_users`
--
ALTER TABLE `a_p_i5_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i6_users`
--
ALTER TABLE `a_p_i6_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i7_users`
--
ALTER TABLE `a_p_i7_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i8_users`
--
ALTER TABLE `a_p_i8_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_p_i9_users`
--
ALTER TABLE `a_p_i9_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `a_p_i1_users`
--
ALTER TABLE `a_p_i1_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `a_p_i2_users`
--
ALTER TABLE `a_p_i2_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `a_p_i3_comments`
--
ALTER TABLE `a_p_i3_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i3_users`
--
ALTER TABLE `a_p_i3_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i4_users`
--
ALTER TABLE `a_p_i4_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i5_users`
--
ALTER TABLE `a_p_i5_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i6_users`
--
ALTER TABLE `a_p_i6_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i7_users`
--
ALTER TABLE `a_p_i7_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i8_users`
--
ALTER TABLE `a_p_i8_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_p_i9_users`
--
ALTER TABLE `a_p_i9_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
