-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 05:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_to_door`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(211) NOT NULL,
  `password` varchar(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.co', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `description` varchar(110) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `description`, `image`) VALUES
(13, 'Fruits', '', 'fruits.jpg'),
(14, 'Vegetables', '', 'vegetables.jpg'),
(15, 'Dairy Products', '', 'dairy_products.jpg'),
(16, 'Eggs and Meats', '', 'eggs_and_meats.jpg'),
(17, 'Bakery Items', '', 'bakery_items.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(202) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(212) NOT NULL,
  `city` varchar(213) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `city`) VALUES
(15, 'user1', 'user1@gmail.com', '1234', '5466464545', 'rwp'),
(20, 'user2', 'user2@gmail.com', '12345', '011111111', 'rwp');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `msg` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'user1', 'user1@gmail.com', 'Bakery Items', 'There should be more offers on o');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `price`, `category`, `image`) VALUES
(5, 'Fruit Cake', '650', 'Bakery Items', 'fruit_cake.jpg'),
(6, 'Chocolate Cake', '550', 'Bakery Items', 'chocolate_cake.jpg'),
(7, 'Cream Cake', '500', 'Bakery Items', 'cream_cake.jpg'),
(8, 'Cup Cake', '60', 'Bakery Items', 'cup_cake.jpg'),
(10, 'Chicken', '250', 'Eggs and Meats', 'chicken.jpg'),
(11, 'Cheese', '700', 'Dairy Products', 'cheese.jpg'),
(12, 'Potato', '30', 'Vegetables', 'potato.jpg'),
(13, 'Cherry', '475', 'Fruits', 'cherry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(210) NOT NULL,
  `phone` varchar(205) NOT NULL,
  `address` varchar(310) NOT NULL,
  `bill` varchar(111) NOT NULL,
  `payment_method` varchar(110) NOT NULL,
  `card_cash` varchar(202) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(115) NOT NULL,
  `unique_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `bill`, `payment_method`, `card_cash`, `order_date`, `status`, `unique_id`) VALUES
(1, 'user1', 'user1@gmail.com', '5466464545', 'rwp', '560.00', 'Cash on delivery', '', '2019-11-08 17:11:09', 'Awaiting', 1573215069);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `item_name` varchar(66) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `unique_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `item_name`, `item_qty`, `unit_price`, `subtotal`, `unique_id`) VALUES
(51, 'Cup Cake', 1, 60, 60, 1573215069),
(52, 'Cream Cake', 1, 500, 500, 1573215069);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(110) NOT NULL,
  `cat_title` varchar(120) NOT NULL,
  `stock` varchar(32) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `cat_title`, `stock`, `image`) VALUES
(10, 'Apple', '110', 'Fruits', '21', 'apple.jpg'),
(11, 'Banana', '65', 'Fruits', '21', 'banana.jpg'),
(12, 'Cherry', '500', 'Fruits', '21', 'cherry.jpg'),
(13, 'Grapes', '140', 'Fruits', '21', 'grapes.jpg'),
(14, 'Mango', '110', 'Fruits', '21', 'mango.jpg'),
(15, 'Orange', '120', 'Fruits', '21', 'orange.jpg'),
(16, 'Peach', '135', 'Fruits', '21', 'peach.jpg'),
(17, 'Pear', '75', 'Fruits', '21', 'pear.jpg'),
(18, 'Strawberry', '100', 'Fruits', '21', 'strawberry.jpg'),
(19, 'Water Melon', '40', 'Fruits', '21', 'water_melon.jpg'),
(20, 'Bean', '35', 'Vegetables', '21', 'bean.jpg'),
(21, 'Cabbage', '30', 'Vegetables', '21', 'cabbage.jpg'),
(22, 'Carrot', '60', 'Vegetables', '21', 'carrot.jpg'),
(23, 'Cucumber', '30', 'Vegetables', '21', 'cucumber.jpg'),
(24, 'Onion', '30', 'Vegetables', '21', 'onion.jpg'),
(25, 'Peas', '65', 'Vegetables', '21', 'peas.jpg'),
(26, 'Potato', '35', 'Vegetables', '21', 'potato.jpg'),
(27, 'Pumpkin', '50', 'Vegetables', '21', 'pumpkin.jpg'),
(28, 'Radish', '25', 'Vegetables', '21', 'radish.jpg'),
(29, 'Spinach', '35', 'Vegetables', '21', 'spinach.jpg'),
(30, 'Buffalo Milk', '100', 'Dairy Products', '21', 'buffalo_milk.jpg'),
(31, 'Butter', '600', 'Dairy Products', '21', 'butter.jpg'),
(32, 'Camel Milk', '150', 'Dairy Products', '21', 'camel_milk.jpg'),
(33, 'Cheese', '750', 'Dairy Products', '21', 'cheese.jpg'),
(34, 'Cow Milk', '110', 'Dairy Products', '21', 'cow_milk.jpg'),
(35, 'Cream', '800', 'Dairy Products', '21', 'cream.jpg'),
(36, 'Ghee (Organic)', '900', 'Dairy Products', '21', 'ghee.jpg'),
(37, 'Goat Milk', '120', 'Dairy Products', '21', 'goat_milk.jpg'),
(38, 'Lassi', '260', 'Dairy Products', '21', 'lassi.jpg'),
(39, 'Yogurt', '130', 'Dairy Products', '21', 'yogurt.jpg'),
(40, 'Beef', '480', 'Eggs and Meats', '21', 'beef.jpg'),
(41, 'Chicken', '280', 'Eggs and Meats', '21', 'chicken.jpg'),
(42, 'Egg (Organic)', '15', 'Eggs and Meats', '21', 'desi_eggs.jpg'),
(43, 'Camel Meat', '530', 'Eggs and Meats', '21', 'camel.jpg'),
(44, 'Duck Meat', '850', 'Eggs and Meats', '21', 'duck.jpg'),
(45, 'Egg', '10', 'Eggs and Meats', '21', 'eggs.jpg'),
(46, 'Fish Meat', '350', 'Eggs and Meats', '21', 'fish.jpg'),
(47, 'Mutton', '780', 'Eggs and Meats', '21', 'mutton.jpg'),
(48, 'Quail Meat', '2500', 'Eggs and Meats', '21', 'quail.jpg'),
(49, 'Rabbit Meat', '950', 'Eggs and Meats', '21', 'rabbit.jpg'),
(50, 'Bread', '55', 'Bakery Items', '21', 'bread.jpg'),
(51, 'Bun', '35', 'Bakery Items', '21', 'bun.jpg'),
(52, 'Chocolate Cake', '600', 'Bakery Items', '21', 'chocolate_cake.jpg'),
(53, 'Cream Cake', '550', 'Bakery Items', '21', 'cream_cake.jpg'),
(54, 'Cream Roll', '30', 'Bakery Items', '21', 'cream_roll.jpg'),
(55, 'Cup Cake', '80', 'Bakery Items', '21', 'cup_cake.jpg'),
(56, 'Doughnut', '70', 'Bakery Items', '21', 'doughnut.jpg'),
(57, 'Fruit Cake', '700', 'Bakery Items', '21', 'fruit_cake.jpg'),
(58, 'Pastry', '50', 'Bakery Items', '21', 'pastry.jpg'),
(59, 'Rusk', '400', 'Bakery Items', '21', 'rusk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`cat_title`),
  ADD KEY `title_2` (`cat_title`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `u_name` (`name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `user_name` (`name`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`cat_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`name`) REFERENCES `customers` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_title`) REFERENCES `categories` (`cat_title`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
