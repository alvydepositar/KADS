-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:43 AM
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
-- Database: `kads`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`) VALUES
(1, 'Sushi Rolls'),
(2, 'Bento Box'),
(3, 'Temaki Wraps'),
(6, 'Platters'),
(7, 'Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `info_accts`
--

CREATE TABLE `info_accts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_accts`
--

INSERT INTO `info_accts` (`id`, `firstname`, `lastname`, `birthday`, `username`, `phone`, `password`, `role`) VALUES
(12, 'Admin', 'Admin', '2001-08-13', 'admin', '09123456789', '$2y$10$HkVmVdmQHxyQE0ARqbPej.pmBGopjlUjj/ZQpFYLH6mFWwPn2tJ0G', 1),
(17, 'Atasha Rich', 'Molina', '2003-03-15', 'atasharich.plm@gmail.com', '09987654323', 'atasha', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(400) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `productName`, `price`, `category`) VALUES
(7, 'IMG-63b85f281dfd45.78622008.png', 'Cucumber Roll', 100, 1),
(8, 'IMG-63b85f55e30814.16050105.png', 'Salmon Roll', 190, 1),
(10, 'IMG-63b85f6e7ab867.21949032.png', 'Kani Roll', 150, 1),
(11, 'IMG-63b85f8b343056.80089378.png', 'BNY Roll', 230, 1),
(12, 'IMG-63b85f9a1adb86.83227212.png', 'Bonito Roll', 185, 1),
(13, 'IMG-63b85fa186c036.43296471.png', 'California Roll', 230, 1),
(14, 'IMG-63b85fab878042.97388770.png', 'Crazy Kani Roll', 220, 1),
(15, 'IMG-63b85fb9c79542.80524625.png', 'Golden Roll', 190, 1),
(16, 'IMG-63b85fcfa01602.65640887.png', 'Lava Roll', 250, 1),
(17, 'IMG-63b85ff49e4382.66362994.png', 'OG Roll', 390, 1),
(18, 'IMG-63b8600be5b008.84541368.png', 'Spicy Tuna Roll', 250, 1),
(19, 'IMG-63b8601b1c1796.23705063.png', 'Spicy Kani Roll', 290, 1),
(20, 'IMG-63b86038176741.49207115.png', 'Sunshine Roll', 350, 1),
(21, 'IMG-63b8604949bc39.68325891.png', 'Super Cali Roll', 390, 1),
(22, 'IMG-63b86055e9a126.42208117.png', 'Tamago Roll', 150, 1),
(23, 'IMG-63b8606e965108.13347397.png', 'Tuna Roll', 190, 1),
(24, 'IMG-63b8607c5c2513.91181968.png', 'Wakame Roll', 230, 1),
(25, 'IMG-63b86086057a56.72885709.png', 'Caramba Roll', 250, 1),
(26, 'IMG-63b860eeb1ba75.23920111.png', 'Caramba Temaki', 250, 3),
(27, 'IMG-63b862c9892099.05667644.png', 'California Temaki', 190, 3),
(28, 'IMG-63b862e8688139.14303407.png', 'Chicken Winner Roll', 230, 1),
(29, 'IMG-63b8632f2f5761.70903125.png', 'Cloud 9 Roll', 250, 1),
(30, 'IMG-63b8636234f0f7.29795206.png', 'Fireball Roll', 290, 1),
(31, 'IMG-63b863748644b0.01812730.png', 'Godzilla Roll', 330, 1),
(32, 'IMG-63b8639dca4ef0.90948589.png', 'Firecracker Roll', 220, 1),
(33, 'IMG-63b863c989a2d7.51811383.png', 'Crazy Kani Temaki', 190, 3),
(34, 'IMG-63b863e5b4bd91.86541466.png', 'Firecracker Temaki', 200, 3),
(35, 'IMG-63b8640a01de35.26894582.png', 'Okonomiya Temaki', 200, 3),
(36, 'IMG-63b864356c3d08.39590278.png', 'Sushi Dreams Temaki', 230, 3),
(37, 'IMG-63b86462bf1dd8.52349637.png', 'Aburi Mix Bento', 500, 2),
(38, 'IMG-63b8654d2ba1f1.72871302.png', 'Classic Mix Bento', 500, 2),
(39, 'IMG-63b8658b0bdf63.73682690.png', 'Salmon Overload Bento', 600, 2),
(40, 'IMG-63b865af5c54a1.15080877.png', 'Tuna Overload Bento', 600, 2),
(41, 'IMG-63b86600ab6c78.98186216.png', 'Basic Party Platter', 1500, 6),
(42, 'IMG-63b866423d5a85.60123403.png', 'Deluxe Party Platter', 1900, 6),
(43, 'IMG-63b86668b88257.72776792.png', 'Poke Party Platter', 2300, 6),
(44, 'IMG-63b8669176d383.37165719.png', 'Premium Party Platter', 2500, 6),
(45, 'IMG-63b866b2916cc6.42531744.png', 'Veggie Sushi Cake', 1300, 7),
(46, 'IMG-63b866edf05e79.94782112.png', 'Classic Sushi Cake', 1500, 7),
(47, 'IMG-63b8670fbf3a23.47768244.png', 'Rose Sushi Cake', 1500, 7),
(48, 'IMG-63b8672ad3c850.20096925.png', 'Spicy Sushi Cake', 1500, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `house` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip` int(11) NOT NULL,
  `contactNum` int(11) DEFAULT NULL,
  `info` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `house`, `city`, `province`, `zip`, `contactNum`, `info`) VALUES
(12, '123 Pacheco St', 'Manila', 'Metro Manila', 1013, 2147483647, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(11) NOT NULL,
  `orders` int(255) NOT NULL,
  `orderTotal` int(11) NOT NULL,
  `timeOrder` time DEFAULT NULL,
  `dateOrder` date DEFAULT NULL,
  `statusOrder` varchar(255) DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_accts`
--
ALTER TABLE `info_accts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk` (`category`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_orders_ibfk` (`user`),
  ADD KEY `orders_ibfk` (`orders`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `info_accts`
--
ALTER TABLE `info_accts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD CONSTRAINT `orders_ibfk` FOREIGN KEY (`orders`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_orders_ibfk` FOREIGN KEY (`user`) REFERENCES `info_accts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
