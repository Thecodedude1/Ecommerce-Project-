-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 02:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cart_item_added` datetime NOT NULL DEFAULT current_timestamp(),
  `cart_item_quantity` int(11) NOT NULL DEFAULT 1,
  `cart_item_status` varchar(20) NOT NULL DEFAULT 'cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `cart_item_added`, `cart_item_quantity`, `cart_item_status`) VALUES
(18, 2, 1, '2022-01-11 15:33:46', 1, 'purchased'),
(19, 1, 1, '2022-01-13 13:58:27', 1, 'purchased'),
(20, 1, 6, '2022-01-13 13:58:36', 1, 'purchased'),
(21, 1, 11, '2022-01-13 13:58:39', 1, 'purchased'),
(22, 2, 1, '2022-01-13 16:50:48', 1, 'purchased'),
(23, 2, 11, '2022-01-13 16:50:53', 1, 'purchased'),
(24, 2, 9, '2022-01-13 16:50:58', 1, 'purchased'),
(25, 2, 14, '2022-01-13 16:51:19', 1, 'purchased'),
(26, 2, 15, '2022-01-13 16:51:23', 1, 'purchased'),
(27, 2, 1, '2022-01-13 16:51:27', 1, 'purchased'),
(28, 2, 13, '2022-01-13 16:51:50', 1, 'purchased'),
(29, 2, 11, '2022-01-13 16:52:31', 1, 'purchased'),
(30, 2, 1, '2022-01-13 16:52:34', 1, 'purchased'),
(31, 2, 1, '2022-01-13 16:52:40', 1, 'purchased'),
(32, 3, 2, '2022-01-13 16:54:01', 1, 'purchased'),
(33, 3, 14, '2022-01-13 16:54:04', 1, 'purchased'),
(34, 3, 15, '2022-01-13 16:54:08', 1, 'purchased'),
(35, 3, 17, '2022-01-13 16:54:13', 1, 'purchased'),
(36, 4, 1, '2022-01-13 16:55:18', 1, 'purchased'),
(37, 4, 6, '2022-01-13 16:55:21', 1, 'purchased'),
(38, 4, 15, '2022-01-13 16:55:25', 1, 'purchased'),
(39, 1, 1, '2022-01-13 17:01:59', 1, 'cart'),
(40, 1, 6, '2022-01-13 17:02:04', 1, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_title` varchar(100) NOT NULL,
  `item_description` text NOT NULL,
  `item_price` double(8,2) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_image2` varchar(100) NOT NULL,
  `item_image3` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL DEFAULT 100,
  `item_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_title`, `item_description`, `item_price`, `item_image`, `item_image2`, `item_image3`, `item_quantity`, `item_category`) VALUES
(1, 'Nike Dri-Fit', 'The Nike Dri-FIT T-Shirt helps keep you dry and comfortable during workouts while giving you a little extra coverage with soft fabric that wicks sweat.', 500.00, 'images/t-shirts/nike_dri_fit.jpg', 'images/t-shirts/nike_dri_fit2.jpg', 'images/t-shirts/nike_dri_fit3.jpg', 100, 'T-Shirts'),
(2, 'Nike Sportswear JDI', 'The Nike Sportswear JDI T-Shirt sets you up with soft jersey fabric and a \"Just Do It.\" logo across the chest.', 1000.00, 'images/t-shirts/nike_sportswear_jdi.jpg', 'images/t-shirts/nike_sportswear_jdi2.png', 'images/t-shirts/nike_sportswear_jdi3.png', 100, 'T-Shirts'),
(3, 'Nike Pro Dri Fit', 'The Nike Pro Dri-FIT Top layers you in lightweight fabric with breathability built into heat zones to keep you cool and dry from warmups through cool downs. Stretchy fabric made with at least 75% recycled polyester fibers lets you move freely.', 500.00, 'images/t-shirts/nike_pro_dri_fit.jpg', 'images/t-shirts/nike_pro_dri_fit2.png', 'images/t-shirts/nike_pro_dri_fit3.png', 100, 'T-Shirts'),
(4, 'Nike Dri-FIT Vapor', 'Performance gets a classic twist in the Nike Dri-FIT Vapor Polo. The plaid pattern is knit into the fabric so it won\'t impact breathability or stretch—helping you stay cool and comfortable from teebox 1 to hole 18.', 450.00, 'images/t-shirts/nike_dri_fit_vapor.jpg', 'images/t-shirts/nike_dri_fit_vapor2.png', 'images/t-shirts/nike_dri_fit_vapor3.png', 100, 'T-Shirts'),
(6, 'Nike Sportswear Storm-FIT Windrunner', 'Ready for cold and windy weather, the Nike Sportswear Hooded Jacket offers plush warmth in a lightweight package. High-loft down traps heat without adding excess weight. Windrunner design details create a heritage look that won\'t disappoint when the temperatures really drop.', 600.00, 'images/jackets/nike_sportswear_storm.jpg', 'images/jackets/nike_sportswear_storm2.png', 'images/jackets/nike_sportswear_storm3.png', 100, 'Jackets and Vests'),
(7, 'Jordan Essentials', 'Get layered for the cold in the Jordan Essentials Puffer Jacket. The outer layer and lining are made from woven, water-repellent fabric, and the whole thing is insulated with puffy synthetic fill. Color-blocked set-in panels are inspired by the iconic AJ1 Wings jacket.', 450.00, 'images/jackets/jordan_ess.jpg', 'images/jackets/jordan_ess2.png', 'images/jackets/jordan_ess3.png', 100, 'Jackets and Vests'),
(8, 'Nike Therma-FIT Repel', 'Perfect for cooler temperatures, the Nike Therma-FIT Repel Vest helps keep you running. Insulating technology combines with water-repellent fabric so you stay dry and comfortable. It even has stitching nodding to the Windrunner\'s iconic chevron. This product is made with at least 75% organic cotton fibers.', 800.00, 'images/jackets/nike_therma_repel.jpg', 'iamges/jackets/nike_therma_repel2.png', 'images/jackets/nike_therma_repel3.png', 100, 'Jackets and Vests'),
(9, 'Nike Sportswear Therma-FIT Tech Pack', 'Winters in the concrete jungle can be rough, but you can zip on this jacket to help keep you warm for those endless chilly days. A mix of fleece textures (high and low loft) are engineered into a city grid pattern to create an extra cozy layer. Plus, we designed it with sustainability in mind, making it with at least 50% sustainable materials, using a blend of recycled polyester and organic cotton fibers.', 850.00, 'images/jackets/nike_sportswear_therma.jpg', 'images/jackets/nike_sportswear_therma2.png', 'images/jackets/nike_sportswear_therma3.png', 100, 'Jackets and Vests'),
(10, 'Nike Shorts', 'The Nike Sportswear Club Shorts blend classic comfort with a bold graphic for street-ready style. Crafted from soft fleece, they\'ve got you covered for all-day wear.', 50.00, 'images/shorts/blue_shorts.jpg', 'images/shorts/blue_shorts2.png', 'images/shorts/blue_shorts3.png', 100, 'Shorts'),
(11, 'Nike Flex Stride', 'The Nike Flex Stride Shorts have an all-new woven fabric and enhanced breathability in high-sweat areas. Their soft brief liner provides secure support where you need it most. Convenient pockets stash items on the run. This product is made with at least 50% recycled polyester fibers.', 80.00, 'images/shorts/flex_stride.jpg', 'images/shorts/flex_stride2.png', 'images/shorts/flex_stride3.png', 100, 'Shorts'),
(12, 'Nike Dri-FIT Sport Clash', 'The Nike Dri-FIT Sport Clash Shorts infuse high-stretch, lightweight fabric with sweat-wicking power to keep you dry and moving freely through your workout. Brushstroke print represents the fluidity and creativity you bring to your sport. It has a hidden zippered pocket at the back.\r\n\r\nShown: Brown Basalt/Rush', 100.00, 'images/shorts/sport_clash.jpg', 'images/shorts/sport_clash2.png', 'images/shorts/sport_clash3.png', 100, 'Shorts'),
(13, 'Nike Yoga Dri-FIT', 'The Nike Yoga Dri-FIT Shorts are a soft, light layer that keeps you comfortably covered during your practice and beyond. They\'re made with sweat-wicking power that helps you stay dry from your first stretch to your last pose. This product is made with at least 75% recycled polyester fibers.\r\n\r\n', 65.00, 'images/shorts/yoga.jpg', 'images/shorts/yoga2.png', 'images/shorts/yoga3.png', 100, 'Shorts'),
(14, 'Nike One Luxe', 'The Nike One Luxe Leggings are our most versatile leggings, made with silky soft fabric that you can\'t see through. They keep you confidently covered for any workout—and the rest of your day. Part of the Nike Luxe line, these super-comfortable, lightweight leggings are the second skin you\'ll want to live in. This product is made with at least 50% recycled polyester fibers.\r\n\r\n', 30.00, 'images/leggings/one_luxe.jpg', 'images/leggings/one_luxe2.png', 'images/leggings/one_luxe3.png', 100, 'Leggings'),
(15, 'Nike Pro Dri-FIT\r\nWomen’s High-Waisted 7/8 Graphic Leggings', 'The Nike Pro Dri-FIT Leggings have a high-waisted design that helps keep you feeling securely supported as you move through your workout or competition. This product is made with at least 75% recycled polyester fibers.', 65.00, 'images/leggings/nike_pro.jpg', 'images/leggings/nike_pro2.png', 'images/leggings/nike_pro3.png', 100, 'Leggings'),
(16, 'Nike One Luxe Resort', 'The Nike One Luxe Leggings are our most versatile leggings, made with silky soft fabric that you can\'t see through. They keep you confidently covered for any workout—and perfectly ready for vacation. Part of the Nike Luxe line, these super-comfortable, lightweight leggings are the second skin you\'ll want to live in.', 120.00, 'images/leggings/nike_resort.jpg', 'images/leggings/nike_resort2.png', 'images/leggings/nike_resort3.png', 100, 'Leggings'),
(17, 'Nike Dri-FIT One Icon Clash', 'Ready for a workout or down to chill—the Nike Dri-FIT One Icon Clash Leggings feature an allover interlocking Swoosh print. The warm design feels soft against your skin while wicking sweat to help keep you dry. Plus, you can’t see through the fabric, so you can feel confident knowing you’re covered. They\'re made with at least 50% recycled polyester fibers.', 135.00, 'images/leggings/nike_clash.jpg', 'images/leggings/nike_clash2.png', 'images/leggings/nike_clash3.png', 100, 'Leggings');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchase_item_price` double(8,2) NOT NULL,
  `purchase_item_quantity` int(11) NOT NULL DEFAULT 1,
  `purchase_date` datetime NOT NULL DEFAULT current_timestamp(),
  `receipt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `item_id`, `purchase_item_price`, `purchase_item_quantity`, `purchase_date`, `receipt_id`) VALUES
(1, 1, 500.00, 1, '2022-01-13 13:58:53', 5),
(2, 6, 600.00, 1, '2022-01-13 13:58:53', 5),
(3, 11, 80.00, 1, '2022-01-13 13:58:53', 5),
(4, 1, 500.00, 1, '2022-01-13 16:51:06', 6),
(5, 1, 500.00, 1, '2022-01-13 16:51:06', 6),
(6, 11, 80.00, 1, '2022-01-13 16:51:06', 6),
(7, 9, 850.00, 1, '2022-01-13 16:51:06', 6),
(8, 14, 30.00, 1, '2022-01-13 16:51:36', 7),
(9, 15, 65.00, 1, '2022-01-13 16:51:36', 7),
(10, 1, 500.00, 1, '2022-01-13 16:51:36', 7),
(11, 13, 65.00, 1, '2022-01-13 16:52:01', 8),
(12, 11, 80.00, 1, '2022-01-13 16:52:47', 9),
(13, 1, 500.00, 1, '2022-01-13 16:52:47', 9),
(14, 1, 500.00, 1, '2022-01-13 16:52:47', 9),
(15, 2, 1000.00, 1, '2022-01-13 16:54:22', 10),
(16, 14, 30.00, 1, '2022-01-13 16:54:22', 10),
(17, 15, 65.00, 1, '2022-01-13 16:54:22', 10),
(18, 17, 135.00, 1, '2022-01-13 16:54:22', 10),
(19, 1, 500.00, 1, '2022-01-13 16:55:32', 11),
(20, 6, 600.00, 1, '2022-01-13 16:55:32', 11),
(21, 15, 65.00, 1, '2022-01-13 16:55:32', 11);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `receipt_id` int(11) NOT NULL,
  `receipt_code` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receipt_subtotal` double(8,2) NOT NULL,
  `receipt_total` double(8,2) NOT NULL,
  `receipt_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`receipt_id`, `receipt_code`, `user_id`, `receipt_subtotal`, `receipt_total`, `receipt_date`) VALUES
(1, 'abcde', 2, 1000.00, 1000.00, '2021-12-30 11:17:30'),
(2, 'abcde', 2, 1000.00, 1000.00, '2022-01-03 18:32:29'),
(3, 'abcde', 2, 500.00, 500.00, '2022-01-03 18:35:35'),
(4, 'abcde', 2, 1530.00, 1530.00, '2022-01-03 19:14:38'),
(5, 'abcde', 1, 1180.00, 1180.00, '2022-01-13 13:58:53'),
(6, 'abcde', 2, 1930.00, 1930.00, '2022-01-13 16:51:06'),
(7, 'abcde', 2, 595.00, 595.00, '2022-01-13 16:51:36'),
(8, 'abcde', 2, 65.00, 65.00, '2022-01-13 16:52:01'),
(9, 'abcde', 2, 1080.00, 1080.00, '2022-01-13 16:52:47'),
(10, 'abcde', 3, 1230.00, 1230.00, '2022-01-13 16:54:22'),
(11, 'abcde', 4, 1165.00, 1165.00, '2022-01-13 16:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `points` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`, `points`) VALUES
(1, '', '', 'testing2@hotmail.com', '$2y$10$GAa6/IfiVJS1nMkDYuf6/u2G9aaEqeXiyYxmUR8mlHojaJS3iFDz.', '2022-01-12 14:25:29', 'admin', 12),
(2, '', '', 'testing3@hotmail.com', '$2y$10$nGzCmRKHrmU9RGFTxaMht.rmzFhGdv40VM4D.fB/uJ64lrSRA1abS', '2022-01-13 16:50:34', 'user', 37),
(3, '', '', 'testing4@hotmail.com', '$2y$10$Op15M2qlK1kr06LSobmRdexKe6//WXlVZ3GWyT1rgxC4.qLSjYGH6', '2022-01-13 16:53:47', 'user', 12),
(4, '', '', 'testing5@hotmail.com', '$2y$10$qAI95oaTJOQRs7Ycrt/miOUjrhz1eP0DbTiYkFefG8AXiLARg2h/K', '2022-01-13 16:55:05', 'user', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
