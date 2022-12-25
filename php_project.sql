-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 11:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_status`, `user_id`, `user_phone`, `user_city`, `user_address`, `order_date`) VALUES
(1, '1500.00', 'on_hold', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-14 00:28:35'),
(2, '4000.00', 'not paid', 2, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-20 13:53:15'),
(3, '1500.00', 'not paid', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-25 22:12:23'),
(4, '2000.00', 'not paid', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-25 22:16:31'),
(5, '2000.00', 'not paid', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-25 22:18:37'),
(6, '2000.00', 'not paid', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-25 22:20:33'),
(7, '2000.00', 'not paid', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-25 22:20:47'),
(8, '2000.00', 'not paid', 1, 1615233524, 'Dhaka', 'House 127, Road 4,Block A,Basundhara R/A', '2022-12-25 22:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_id`, `order_date`) VALUES
(1, 1, '2', 'Green Bag', 'featured2.jpg', '1500.00', 1, 1, '2022-12-14 00:28:35'),
(2, 2, '4', 'Blue Bag', 'featured4.jpg', '2000.00', 1, 2, '2022-12-20 13:53:15'),
(3, 2, '1', 'White Shoe', 'featured1.jpg', '2000.00', 1, 2, '2022-12-20 13:53:15'),
(4, 3, '2', 'Green Bag', 'featured2.jpg', '1500.00', 1, 1, '2022-12-25 22:12:23'),
(5, 4, '4', 'Blue Bag', 'featured4.jpg', '2000.00', 1, 1, '2022-12-25 22:16:31'),
(6, 5, '4', 'Blue Bag', 'featured4.jpg', '2000.00', 1, 1, '2022-12-25 22:18:37'),
(7, 6, '4', 'Blue Bag', 'featured4.jpg', '2000.00', 1, 1, '2022-12-25 22:20:33'),
(8, 7, '4', 'Blue Bag', 'featured4.jpg', '2000.00', 1, 1, '2022-12-25 22:20:47'),
(9, 8, '1', 'White Shoe', 'featured1.jpg', '2000.00', 1, 1, '2022-12-25 22:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_image4` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` int(2) NOT NULL,
  `product_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(1, 'White Shoe', 'shoes', 'awesome white shoes', 'featured1.jpg', 'featured1.jpg', 'featured1.jpg', 'featured1.jpg', '2000.00', 0, 'white'),
(2, 'Green Bag', 'bags', 'awesome green Bag', 'featured2.jpg', 'featured2.jpg', 'featured2.jpg', 'featured2.jpg', '1500.00', 0, 'green'),
(3, 'Black Bag', 'bags', 'awesome black Bag', 'featured3.jpg', 'featured3.jpg', 'featured3.jpg', 'featured3.jpg', '1800.00', 0, 'black'),
(4, 'Blue Bag', 'bags', 'awesome blue Bag', 'featured4.jpg', 'featured4.jpg', 'featured4.jpg', 'featured4.jpg', '2000.00', 0, 'blue'),
(5, 'Black Coat', 'coats', 'Black Coats For Men', 'cloth1.jpg', 'cloth1.jpg', 'cloth1.jpg', 'cloth1.jpg', '300.00', 0, 'black'),
(7, 'Blue Coat', 'coats', 'Women Blue Coats', 'cloth3.jpg', 'cloth3.jpg', 'cloth3.jpg', 'cloth3.jpg', '300.00', 0, 'blue'),
(8, 'EMPERIO WATCH', 'watches', 'Grab your stylish vintage now', 'watch1.jpg', 'watch1.jpg', 'watch1.jpg', 'watch1.jpg', '4000.00', 0, 'Black'),
(9, 'EMPERIO WATCH', 'watches', 'Grab your stylish vintage now', 'watch1.jpg', 'watch1.jpg', 'watch1.jpg', 'watch1.jpg', '4000.00', 0, 'Black'),
(10, 'EMPERIO 2.0', 'watches', 'Grab your stylish vintage now', 'watch2.jpg', 'watch2.jpg', 'watch2.jpg', 'watch2.jpg', '3500.00', 0, 'Black'),
(11, 'QUMO', 'watches', 'The ruler is here', 'watch4.jpg', 'watch4.jpg', 'watch4.jpg', 'watch4.jpg', '5000.00', 0, 'Leather'),
(12, 'Ash Boy', 'shoes', 'Description is loading', 'shoes1.jpg', 'shoes1.jpg', 'shoes1.jpg', 'shoes1.jpg', '2000.00', 0, 'Ash'),
(13, 'Ash Boy', 'shoes', 'Description is loading', 'shoes1.jpg', 'shoes2.jpg', 'shoes2.jpg', 'shoes2.jpg', '2000.00', 0, 'Ash'),
(14, 'Ash Boy', 'shoes', 'Description is loading', 'shoes3.jpg', 'shoes3.jpg', 'shoes3.jpg', 'shoes3.jpg', '2000.00', 0, 'Ash'),
(15, 'Ash Boy', 'shoes', 'Description is loading', 'shoes4.jpg', 'shoes4.jpg', 'shoes4.jpg', 'shoes4.jpg', '2000.00', 0, 'Ash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Sabbir Ahmed', 'sabbirahmed2013303@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Shourav', 'sabbir.ahmed5@northsouth.edu', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UX_Constraint` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
