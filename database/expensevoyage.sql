-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2025 at 05:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expensevoyage`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Trip Catalog', 'Browse curated trips and packages', 'trip_catalog.jpg'),
(2, 'Accommodations', '\r\nHotels, resorts and guesthouses.', 'accom_0.jpg'),
(3, 'Transport', '\r\nHotels, resorts and guesthouses.\r\n\r\n\r\nTransportation\r\nFlights, trains, buses and car rentals.', 'transport_0.jpeg'),
(4, 'Package Reviews', 'Package Reviews.\r\n\r\nSee what travelers say.', 'pakkag_1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `u_id`, `u_name`, `u_email`, `p_id`, `p_name`, `p_price`, `location`, `datetime`, `status`) VALUES
(1, 2, 'Taimoor', 'Taimoor@gmail.com', 3, 'Bali Express Flight', 50000.00, 'Jakarta → Bali', '2025-08-14 20:04:24', 'Pending'),
(2, 2, 'Taimoor', 'Taimoor@gmail.com', 1, 'Ocean View Resort', 150000.00, 'Bali, Indonesia', '2025-08-14 20:04:24', 'Pending'),
(3, 2, 'Taimoor', 'Taimoor@gmail.com', 2, ' Mountain Lodge Retreat', 2500.00, 'Aspen, USA', '2025-08-14 20:04:24', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `location`, `image`, `c_id`) VALUES
(1, 'Ocean View Resort', 150000, '\r\n\r\nLuxury resort with beach view and spa services.\r\nBedrooms: 2\r\n\r\nBathrooms: 2\r\n\r\nAmenities: Pool, Wi-Fi, Breakfast included', 'Bali, Indonesia', 'gallery-11.jpg', 2),
(2, ' Mountain Lodge Retreat', 2500, 'Bedrooms: 1\r\n\r\nBathrooms: 1\r\n\r\nAmenities: Fireplace, Ski access, Free parking\r\nCozy lodge with direct ski slope access.', 'Aspen, USA', 'carousel-3.jpg', 2),
(3, 'Bali Express Flight', 50000, 'Type: Flight\r\nDeparture: 08:00 AM\r\nArrival: 10:00 AM\r\n Direct flight with complimentary snacks and drinks.', 'Jakarta → Bali', 'packages-4.jpg', 3),
(4, 'Bali Express Flight', 0, 'Type: Flight\r\nDeparture: 08:00 AM\r\nArrival: 10:00 AM\r\n Direct flight with complimentary snacks and drinks.', 'Jakarta → Bali', 'packages-4.jpg', 0),
(5, ' EuroCity Train Pass', 120, '\r\nType: Train\r\n\r\nDeparture: 09:30 AM\r\n\r\nArrival: 04:00 PM\r\n\r\nScenic train journey through the countryside.', ' Paris → Berlin', 'destination-5.jpg', 3),
(6, 'Discover Japan – 7 Days Tour', 1, 'Duration: 7 days\r\nIncludes: Hotels, Transportation, Tour guide, Meals\r\n Explore Tokyo, Kyoto, and Osaka in an all-inclusive trip.', 'Japan ', 'gallery-5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'users');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 1),
(2, 'Taimoor', 'Taimoor@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
