-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 04. Jul, 2023 06:17 AM
-- Tjener-versjon: 10.3.39-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localTouristInfo`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name_de` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name_es` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name_fr` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description_no` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description_de` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description_es` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description_fr` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `street` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `zip` smallint(4) NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `icon` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `rndmString`
--

CREATE TABLE `rndmString` (
  `id` int(11) NOT NULL,
  `randomString` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `siteSettings`
--

CREATE TABLE `siteSettings` (
  `id` int(11) NOT NULL,
  `siteTitle` varchar(65) NOT NULL,
  `siteTitle_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `siteTitle_de` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `siteTitle_es` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `siteTitle_fr` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `siteShortTitle` varchar(100) NOT NULL,
  `siteShortTitle_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `siteShortTitle_de` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `siteShortTitle_es` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `siteShortTitle_fr` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `siteDescription` text NOT NULL,
  `siteDescription_no` text NOT NULL,
  `siteDescription_de` text NOT NULL,
  `siteDescription_es` text NOT NULL,
  `siteDescription_fr` text NOT NULL,
  `siteMaintenance` smallint(11) NOT NULL DEFAULT 0,
  `siteMaintenanceText` text NOT NULL,
  `siteMaintenanceText_no` text NOT NULL,
  `siteMaintenanceText_de` text NOT NULL,
  `siteMaintenanceText_es` text NOT NULL,
  `siteMaintenanceText_fr` text NOT NULL,
  `siteWelcomeTextToggle` smallint(10) NOT NULL DEFAULT 0,
  `siteWelcomeTextTitle` varchar(100) NOT NULL,
  `siteWelcomeTextTitle_no` varchar(100) NOT NULL,
  `siteWelcomeTextTitle_de` varchar(100) NOT NULL,
  `siteWelcomeTextTitle_es` varchar(100) NOT NULL,
  `siteWelcomeTextTitle_fr` varchar(100) NOT NULL,
  `siteWelcomeText` text NOT NULL,
  `siteWelcomeText_no` text NOT NULL,
  `siteWelcomeText_de` text NOT NULL,
  `siteWelcomeText_es` text NOT NULL,
  `siteWelcomeText_fr` text NOT NULL,
  `siteAllowSponsors` smallint(10) NOT NULL DEFAULT 0,
  `siteAllowCoffee` smallint(10) NOT NULL DEFAULT 0,
  `siteCoffeeLink` varchar(300) NOT NULL,
  `siteCopyrightText` text NOT NULL,
  `siteCopyrightText_no` text NOT NULL,
  `siteCopyrightText_de` text NOT NULL,
  `siteCopyrightText_es` text NOT NULL,
  `siteCopyrightText_fr` text NOT NULL,
  `siteCopyrightName` varchar(100) NOT NULL,
  `siteContactEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `surname` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `isAdmin` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'N',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rndmString`
--
ALTER TABLE `rndmString`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteSettings`
--
ALTER TABLE `siteSettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `secondary` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rndmString`
--
ALTER TABLE `rndmString`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siteSettings`
--
ALTER TABLE `siteSettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
