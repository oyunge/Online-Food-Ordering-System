-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 11:20 AM
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
-- Database: `omifood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `addedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `datetime`, `username`, `password`, `aname`, `addedby`) VALUES
(2, 'October-02-2020 00:52:32', 'Tycoon Meen', '123456', 'Mayen', 'Tycoon'),
(3, 'November-08-2020 16:42:40', 'justin', '12345', 'bol', 'Tycoon Meen'),
(4, 'July-06-2021 13:30:42', 'Alyah', 'maryalia', 'Mary', 'Tycoon Meen'),
(5, 'November-18-2021 13:18:30', 'Edu', '123456', 'Edwin', 'Tycoon Meen');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `author`, `datetime`) VALUES
(1, 'Fast Foods', 'Tycoon', 'June-20-2020 20:20:11'),
(2, 'Healthy Food', 'Tycoon', 'June-20-2020 21:11:49'),
(4, 'Salad', 'Tycoon', 'June-22-2020 20:42:36'),
(5, 'Fruits', 'Tycoon', 'June-23-2020 13:42:17'),
(6, 'Beverages', 'Tycoon', 'June-23-2020 13:53:26'),
(8, 'Snacks', 'Tycoon Meen', 'July-06-2021 13:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `datetime`, `product_name`, `category`, `author`, `product_price`, `product_image`) VALUES
(23, 'June-22-2020 20:50:49', 'Chicken Nuggets', 'Fast Foods', 'Tycoon', 599, 'chicken-nuggets.jpg'),
(24, 'June-22-2020 21:37:26', 'pizza', 'Fast Foods', 'Tycoon', 199, 'food.jpg'),
(29, 'June-23-2020 13:42:46', 'Straw Berries', 'Fruits', 'Tycoon', 99, 'background.jpg'),
(30, 'June-23-2020 13:44:44', 'Barbecue', 'Fast Foods', 'Tycoon', 1099, 'barbecue.jpg'),
(31, 'June-23-2020 13:45:41', 'Biryani', 'Healthy Food', 'Tycoon', 299, 'biryani.jpg'),
(32, 'June-23-2020 13:46:33', 'Biryani Beef', 'Healthy Food', 'Tycoon', 699, 'briyani-beef.jpg'),
(33, 'June-23-2020 13:47:54', 'Bread', 'Healthy Food', 'Tycoon', 49, 'breakfast.jpg'),
(34, 'June-23-2020 13:48:29', 'Burgers', 'Fast Foods', 'Tycoon', 229, 'burger.jpg'),
(35, 'June-23-2020 13:49:14', 'Burgers Fries', 'Fast Foods', 'Tycoon', 349, 'burger-fries.jpg'),
(36, 'June-23-2020 13:49:46', 'Burgers Special', 'Fast Foods', 'Tycoon', 499, 'burger-special.jpg'),
(37, 'June-23-2020 13:50:19', 'Chapati', 'Healthy Food', 'Tycoon', 79, 'chapati-cake.jpg'),
(38, 'June-23-2020 13:50:52', 'Chicken Plain', 'Fast Foods', 'Tycoon', 399, 'chicken.jpg'),
(39, 'June-23-2020 13:51:36', 'Fried Chicken', 'Fast Foods', 'Tycoon', 899, 'chicken-deep-Fried.jpg'),
(40, 'June-23-2020 13:54:07', 'Latte', 'Beverages', 'Tycoon', 159, 'coffee.jpg'),
(41, 'June-23-2020 13:54:48', 'Pizza', 'Fast Foods', 'Tycoon', 449, 'pizza-200.jpg'),
(42, 'July-01-2020 15:01:06', 'Shrimp', 'Salad', 'Tycoon', 234, 'shrimp.jpg'),
(47, 'November-09-2020 12:30:42', 'shawrama', 'Healthy Food', 'Tycoon Meen', 234, 'breakfast.jpg'),
(48, 'November-12-2020 16:21:18', 'Ugali Nyama', 'Healthy Food', 'Tycoon Meen', 299, 'ugalibeef2.jpg'),
(49, 'November-13-2020 08:20:53', 'Chicken Nuggets', 'Fast Foods', 'Tycoon Meen', 599, 'chips.jpg'),
(53, 'September-21-2021 15:45:04', 'hamper', 'Fast Foods', 'Tycoon Meen', 123, 'asparagus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cname`, `username`, `email`, `cpassword`, `cpass`, `caddress`, `phone`) VALUES
(1, 'Meen', 'ScolaKatana', 'protection.somalia@woccaorg.com', '123456', '123456', 'Nairobi', '2547890'),
(2, 'Baro', 'Tycoon', 'jomondi4000@gmail.com', '123456', '123456', 'jnvkr', '987654'),
(3, 'hafsa', 'HafsaDaBoss', 'jscholars2018@gmail.com', '123456', '123456', 'Nai', '23456'),
(4, 'Titus', 'Ukili', 'itncbd2018@gmail.com', '123456', '123456', 'Nairobi', '876543'),
(5, 'Linda', 'Oloo', 'lindaoloo@gmail.com', '123456', '123456', 'Nakuru', '09875'),
(6, 'patrick Mudamba', 'Pato', 'pato@gmail.com', '123456', '123456', 'Nairobi', '71234567'),
(7, 'Mary', 'Alia', 'mary@gmail.com', 'maryalia', 'maryalia', 'westy', '12334456'),
(8, 'Scola', 'Katana', 'justo@gmail.com', '123456', '123456', 'Westero', '09875'),
(9, 'Ahmed', 'Ahmed123', 'ahemd@gmail.com', '123456', '123456', 'Nairobi', '09875');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
