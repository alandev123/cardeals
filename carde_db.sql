-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 05:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carde_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cars`
--

CREATE TABLE `add_cars` (
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_cars`
--

INSERT INTO `add_cars` (`car_id`, `email`, `carname`, `created_at`, `updated_at`) VALUES
(1, 'company', 'car1', '2019-03-17 05:11:43', '2019-03-17 05:11:43'),
(2, 'company', 'car2', '2019-03-17 05:12:16', '2019-03-17 05:12:16'),
(3, 'company', 'car0', '2019-03-17 08:10:43', '2019-03-17 08:10:43'),
(4, 'alandevasia@mca.ajce.in', 'alanscar', '2019-03-18 13:32:41', '2019-03-18 13:32:41'),
(5, 'alandevasia@mca.ajce.in', 'alanscar1', '2019-03-18 13:32:47', '2019-03-18 13:32:47'),
(6, 'alandevasia@mca.ajce.in', 'alanscar2', '2019-03-18 13:36:00', '2019-03-18 13:36:00'),
(7, 'alandevasia@mca.ajce.in', 'alanscar3', '2019-03-18 13:36:27', '2019-03-18 13:36:27'),
(8, 'company@gmail.com', 'yutfg', '2019-03-19 00:16:52', '2019-03-19 00:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `add_features`
--

CREATE TABLE `add_features` (
  `tid` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cartype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `varient` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `milage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `torque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceleration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fsuspension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rsuspension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontbrake` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rearbrake` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradius` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ground` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheelbase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grossw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `door` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_features`
--

INSERT INTO `add_features` (`tid`, `email`, `car_id`, `image`, `cartype`, `varient`, `engine`, `fuel`, `milage`, `power`, `torque`, `seat`, `trans`, `gear`, `speed`, `acceleration`, `fsuspension`, `rsuspension`, `frontbrake`, `rearbrake`, `tradius`, `length`, `width`, `height`, `ground`, `wheelbase`, `kerb`, `grossw`, `cargo`, `door`, `created_at`, `updated_at`) VALUES
(8, 'company', 'car1', '/images/car/u6wB4rnoNSQ7RmijtiIJ3YdN1B2Pqf442wRwRC41.jpeg', 'MUV', 'ww', '121', 'petrol', '21', '122', '12', '2', 'manual', '6', '123', '12', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2019-03-17 09:51:19', '2019-03-17 09:51:19'),
(9, 'alandevasia@mca.ajce.in', 'alanscar1', 'images/car/uvP2wblRWOKiPUyr0GPYs1JBVHQAsXxCOzpQEm3B.jpeg', 'Hatchback', 'vdi', '1240', 'petrol', '25', '74bhp@4000rpm', '121@1000rpm', '5', 'manual', '5', '120', '12', 'a', 'a', 'aa', 'aa', '12', '1231', '1235', '4531', '123', '1234', '124', '1234', '323', '5', '2019-03-18 13:39:45', '2019-03-18 13:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `approve_companies`
--

CREATE TABLE `approve_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature2s`
--

CREATE TABLE `feature2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pow` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msteer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cruise` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tsn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature2s`
--

INSERT INTO `feature2s` (`id`, `car_id`, `em`, `tid`, `abs`, `pos`, `pow`, `ac`, `rac`, `msteer`, `cruise`, `rps`, `tsn`, `created_at`, `updated_at`) VALUES
(1, 'car0', 'company', '2', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:37:02', '2019-03-17 09:37:02'),
(2, 'car0', 'company', '3', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:40:19', '2019-03-17 09:40:19'),
(3, 'car0', 'company', '4', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:42:21', '2019-03-17 09:42:21'),
(4, 'car0', 'company', '5', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:44:06', '2019-03-17 09:44:06'),
(5, 'car0', 'company', '6', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:44:15', '2019-03-17 09:44:15'),
(6, 'car1', 'company', '7', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:47:02', '2019-03-17 09:47:02'),
(7, 'car1', 'company', '8', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2019-03-17 09:51:19', '2019-03-17 09:51:19'),
(8, 'alanscar1', 'alandevasia@mca.ajce.in', '9', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'yes', '2019-03-18 13:39:45', '2019-03-18 13:39:45');

-- --------------------------------------------------------

--
-- Table structure for table `first_regs`
--

CREATE TABLE `first_regs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `first_regs`
--

INSERT INTO `first_regs` (`id`, `name`, `state`, `district`, `city`, `utype`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(19, 'alan', 'kerala', 'kannur', 'skpm', 'USER', 'alandev123@gmail.com', '9895119031', 'active', '2019-03-18 13:14:08', '2019-03-18 13:14:08'),
(20, 'ms', 'kerala', 'kottayam', 'pala', 'COMPANY1', 'alandevasia@mca.ajce.in', '7561008226', 'active', '2019-03-18 13:15:06', '2019-03-18 13:15:06'),
(21, 'Admin', 'Kerala', 'Kannur', 'skpm', 'ADMIN', 'admin@cardeals.com', '7561008226', 'active', '2019-03-18 13:29:08', '2019-03-18 13:29:08'),
(22, 'aaa', 'aaa', 'aa', 'aaa', 'COMPANY1', 'company@gmail.com', '7561008226', 'active', '2019-03-19 00:11:23', '2019-03-19 00:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `password`, `utype`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(15, 'alandev123@gmail.com', '$2y$10$7FtvAXUrnVNXvG/7KPRhBekU1iyxgTIbMgTLKf/2slzwZomsmhdhe', 'USER', NULL, 'active', '2019-03-18 13:14:08', '2019-03-18 13:14:08'),
(16, 'alandevasia@mca.ajce.in', '$2y$10$mH3Rz6yUeXvqGHrPTQvDf.2gTBDoHYLF3BFgEcQIV21Rz9K5vsGAi', 'COMPANY1', NULL, 'active', '2019-03-18 13:15:06', '2019-03-18 13:15:06'),
(17, 'admin@cardeals.com', '$2y$10$CNRrd9sXdYKG.McRKE5LbOGQui10jPuFJ6CWaB0O3CU3X5.hPJsBG', 'ADMIN', NULL, 'active', '2019-03-18 13:29:09', '2019-03-18 13:29:09'),
(18, 'company@gmail.com', '$2y$10$s9Pui.vtLFnU2BzDBQdc/ecG8BdoHqyvY6p0U9uL6LsD6lbu1kAAK', 'COMPANY1', NULL, 'active', '2019-03-19 00:11:23', '2019-03-19 00:11:23');

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
(1, '2019_03_12_172435_create_first_regs_table', 1),
(2, '2019_03_13_170713_create_approve_companies_table', 1),
(3, '2019_03_07_103921_create_logins_table', 2),
(4, '2019_03_11_171113_create_reg_companies_table', 3),
(5, '2019_03_11_072605_create_add_cars_table', 4),
(6, '2019_03_17_105808_create_add_features_table', 5),
(7, '2019_03_17_122827_create_feature2s_table', 6),
(8, '2019_03_18_111949_password_resets', 7);

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
-- Table structure for table `reg_companies`
--

CREATE TABLE `reg_companies` (
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headoffice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reg_companies`
--

INSERT INTO `reg_companies` (`company_id`, `email`, `utype`, `cin`, `headoffice`, `website`, `year`, `created_at`, `updated_at`) VALUES
(3, 'alandevasia@mca.ajce.in', 'COMPANY1', '1234 4567 7890 1345', 'kochin', 'ms.com', '2000', '2019-03-18 13:23:54', '2019-03-18 13:23:54'),
(4, 'company@gmail.com', 'COMPANY1', 'szccdzc', 'vzzcv', 'vdzvz', '2000', '2019-03-19 00:14:04', '2019-03-19 00:14:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cars`
--
ALTER TABLE `add_cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `add_features`
--
ALTER TABLE `add_features`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `approve_companies`
--
ALTER TABLE `approve_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature2s`
--
ALTER TABLE `feature2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_regs`
--
ALTER TABLE `first_regs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `first_regs_email_unique` (`email`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logins_email_foreign` (`email`);

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
-- Indexes for table `reg_companies`
--
ALTER TABLE `reg_companies`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `reg_companies_email_foreign` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cars`
--
ALTER TABLE `add_cars`
  MODIFY `car_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_features`
--
ALTER TABLE `add_features`
  MODIFY `tid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `approve_companies`
--
ALTER TABLE `approve_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature2s`
--
ALTER TABLE `feature2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `first_regs`
--
ALTER TABLE `first_regs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reg_companies`
--
ALTER TABLE `reg_companies`
  MODIFY `company_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `logins_email_foreign` FOREIGN KEY (`email`) REFERENCES `first_regs` (`email`);

--
-- Constraints for table `reg_companies`
--
ALTER TABLE `reg_companies`
  ADD CONSTRAINT `reg_companies_email_foreign` FOREIGN KEY (`email`) REFERENCES `first_regs` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
