-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 12:37 PM
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
-- Table structure for table `api1users`
--

CREATE TABLE `api1users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api1users`
--

INSERT INTO `api1users` (`id`, `username`, `name`, `course`, `password`) VALUES
(1, 'michaels', 'Michael Scott', 'flag{api1_d0cd9be2324cc237235b}', '12345'),
(2, 'meredithp', 'Meredith Palmer', 'The Subtle art of not giving a F***', '12345'),
(3, 'pambeese', 'Pam Beesly', 'Sketching for Dummies', '12345'),
(4, 'jimhalp', 'Jim Halpert', 'Art of Pranks', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `api2users`
--

CREATE TABLE `api2users` (
  `id` int(6) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `token` varchar(120) NOT NULL,
  `address` varchar(240) NOT NULL,
  `city` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api2users`
--

INSERT INTO `api2users` (`id`, `email`, `password`, `name`, `token`, `address`, `city`, `country`) VALUES
(1, 'savanna48@ortiz.com', 'zTyBwV/9', 'Evelyn', 'Fp0r1mty_gxK9DRZ5IUw3sX2enQ6rau68M6YGyoqR3XoBG13wtSbvmdaK5CB', '10th Downing', 'Mesport', 'USA'),
(2, 'hauck.aletha@yahoo.com', 'kU-wDE7r', 'Tara', '1Nkoz6quzJiis1SEonJeSxwkXTzSzcULofbL9O7KPz6_sKGkUcQDzoNfI5aA', 'flag{api2_6bf2beda61e2a1ab2d0a}', 'Delhi', 'India'),
(3, 'harber.leif@beatty.info', 'kU-wDE7r', 'Joyce', 'sLqs17RjmdlWoBP2ONdAPP8WtIVNwlyz_qzLwhmJGboWD_asFICYggcE3bPi', 'San Jose', 'California', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `api3users`
--

CREATE TABLE `api3users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api3users`
--

INSERT INTO `api3users` (`id`, `username`, `name`, `password`) VALUES
(1, 'michaels', 'Michael Scott', '12345'),
(2, 'meredithp', 'Meredith Palmer', '12345'),
(3, 'pambeese', 'Pam Beesly', '12345'),
(4, 'jimhalp', 'Jim Halpert', '12345'),
(5, 'testuser', 'Test User', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `api5users`
--

CREATE TABLE `api5users` (
  `id` int(5) NOT NULL,
  `username` varchar(129) NOT NULL,
  `password` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `address` varchar(240) NOT NULL,
  `mobileno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api5users`
--

INSERT INTO `api5users` (`id`, `username`, `password`, `name`, `address`, `mobileno`) VALUES
(1, 'admin', 'admin!@#$', 'Admin User', 'flag{api5_76dd990a97ff1563ae76}', '8080808080');

-- --------------------------------------------------------

--
-- Table structure for table `api6users`
--

CREATE TABLE `api6users` (
  `id` int(5) NOT NULL,
  `name` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `credit` varchar(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api6users`
--

INSERT INTO `api6users` (`id`, `name`, `username`, `password`, `credit`) VALUES
(1, 'Tushar', 'roottusk', 'abcd1234', '50');

-- --------------------------------------------------------

--
-- Table structure for table `api7users`
--

CREATE TABLE `api7users` (
  `id` int(5) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `authkey` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api7users`
--

INSERT INTO `api7users` (`id`, `username`, `password`, `authkey`) VALUES
(1, 'admin', 'Kencing@001', '8ba30b496fae88ec808d6dc74f85952d06e3739696fe689b228bc0d906d2999e');

-- --------------------------------------------------------

--
-- Table structure for table `api9users`
--

CREATE TABLE `api9users` (
  `id` int(5) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api9users`
--

INSERT INTO `api9users` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(6) NOT NULL,
  `postid` int(5) NOT NULL,
  `deviceid` varchar(120) NOT NULL,
  `latitude` varchar(120) NOT NULL,
  `longitude` varchar(120) NOT NULL,
  `commenttext` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postid`, `deviceid`, `latitude`, `longitude`, `commenttext`, `username`) VALUES
(1, 1, 'flag{api3_0bad677bfc504c75ff72}', '45.5426274', '-122.7944111', 'THIS POST IS SH***Y', 'baduser007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api1users`
--
ALTER TABLE `api1users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `api2users`
--
ALTER TABLE `api2users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `api3users`
--
ALTER TABLE `api3users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `api5users`
--
ALTER TABLE `api5users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `api6users`
--
ALTER TABLE `api6users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `api7users`
--
ALTER TABLE `api7users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `api9users`
--
ALTER TABLE `api9users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deviceid` (`deviceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api1users`
--
ALTER TABLE `api1users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `api2users`
--
ALTER TABLE `api2users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `api3users`
--
ALTER TABLE `api3users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `api5users`
--
ALTER TABLE `api5users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `api6users`
--
ALTER TABLE `api6users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `api7users`
--
ALTER TABLE `api7users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `api9users`
--
ALTER TABLE `api9users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
