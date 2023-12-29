-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 01:28 PM
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
-- Database: `real_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `status` enum('active','inactive','suspended','blocked') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', 'active', '2023-12-27 06:02:00', '2023-12-27 06:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `type`, `first_name`, `last_name`, `phone_number`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'contact', 'Rabin', 'Panday', '9849222856', 'rabinpanday@gmail.com', 'Hi, I want to sell a property.', '2023-12-28 04:19:41', '2023-12-28 04:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` enum('sale','rent') NOT NULL,
  `address` varchar(255) NOT NULL,
  `gated_community` tinyint(1) NOT NULL DEFAULT 0,
  `bedroom` int(11) NOT NULL DEFAULT 0,
  `bathroom` int(11) NOT NULL DEFAULT 0,
  `storey` int(11) NOT NULL DEFAULT 0,
  `security` tinyint(1) NOT NULL DEFAULT 0,
  `swimming_pool` tinyint(1) NOT NULL DEFAULT 0,
  `gym` tinyint(1) NOT NULL DEFAULT 0,
  `monthly_rental` decimal(10,2) NOT NULL DEFAULT 0.00,
  `contract_term` varchar(255) DEFAULT NULL,
  `other_information` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `videos` text DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `approve_status` enum('approved','pending','rejected') NOT NULL DEFAULT 'pending',
  `visibility_status` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `default_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `category_id`, `type`, `address`, `gated_community`, `bedroom`, `bathroom`, `storey`, `security`, `swimming_pool`, `gym`, `monthly_rental`, `contract_term`, `other_information`, `images`, `videos`, `owner_id`, `approve_status`, `visibility_status`, `price`, `default_image`, `created_at`, `updated_at`, `city_id`) VALUES
(1, 'Beautiful Apartment3', 2, 'rent', 'Dhobhighat,Lalitpur', 0, 0, 0, 3, 0, 0, 0, 0.00, '2 years', 'I didnt want to sell it but have to.', NULL, NULL, 1, 'approved', 0, 12345.00, NULL, '2023-12-28 08:02:46', '2023-12-29 12:19:49', 1),
(2, 'Beautiful Apartment2', 3, 'rent', 'Ekantakuna, Lalitpur', 0, 0, 0, 0, 0, 0, 0, 0.00, '3 years', 'You cant find best property than this.', 'gallery-img-3.jpg,gallery-img-4.jpg', NULL, 1, 'approved', 0, 54646.00, NULL, '2023-12-28 08:02:46', '2023-12-29 11:34:29', 2),
(3, 'Beautiful Apartment1', 4, 'sale', 'Bhaisepati, Lalitpur', 0, 0, 0, 0, 0, 0, 0, 0.00, '2 Years', 'This is a nice Property.', 'gallery-img-4.jpg,gallery-img-1.jpg', NULL, 1, 'approved', 0, 400000.00, NULL, '2023-12-28 08:02:46', '2023-12-29 11:34:44', 3),
(8, 'Bhat Bhateni', 1, 'sale', 'Bhaisepati', 0, 0, 0, 2, 0, 0, 0, 0.00, '2 Years', 'This property is best yo can find in kathmandu.', 'gallery-img-2.jpg,gallery-img-3.jpg', NULL, 0, 'approved', 0, 36544000.00, NULL, '2023-12-29 08:42:26', '2023-12-29 11:32:51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `property_owners`
--

CREATE TABLE `property_owners` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_owners`
--

INSERT INTO `property_owners` (`id`, `name`, `email`, `phone_number`, `address`, `dob`, `password`, `profession`, `created_at`, `updated_at`) VALUES
(1, 'Owner12222', 'owner1@gmail.com', '9876543210', 'Pokhara', '2023-12-01', 'niraj123', NULL, '2023-12-29 09:58:06', '2023-12-29 12:18:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_owners`
--
ALTER TABLE `property_owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_owners`
--
ALTER TABLE `property_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
