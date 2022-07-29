-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2022 at 10:18 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_revive`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL_image` varchar(333) COLLATE utf8_unicode_ci NOT NULL,
  `Brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Listed` date NOT NULL,
  `Condition` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(23) NOT NULL,
  `Review` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Category`, `Name`, `URL_image`, `Brand`, `Description`, `Location`, `Listed`, `Condition`, `Price`, `Review`) VALUES
(1, 'Consoles & Gaming', 'Acer Chromebook', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpnnLKzGOig4GOxViNN5Ut6kiA2prCP32Bhg&usqp=CAU', 'Acer', 'Acer Chromebook with webcam and built in mic perfect for work and education. Acess to Google Applications straight at your fingertips, from Playstore to fast browsing and excellent processing power this will cover all your needs! ', 'City Centre, Glasgow', '2022-02-22', 'Good', 280, 5),
(2, 'PCs & Laptops', 'HP Laptop', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5TkdL4t32KFEqOvo4IM45ycbGbj4hwJja4d_BoE5a5E3JMo79OOG-aCyfuZIlO6bGlX4&usqp=CAU', 'HP', 'The HP 250 Laptop keeps up with mobile workstyles with a thin and light design. The beautiful display with its narrow border design and big screen-to-body-ratio provides ample space for work or streaming content with built in webcam and mic. ', 'Paisley, Glasgow', '2022-02-18', 'Good', 280, 5),
(3, 'PCs & Laptops', 'Macbook Pro', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpFY3d2CvPivOtCV6o1BTOKHzlE3x4zKduL62ad9kJMAXD3tnhGQszgXIktksDZTb-yEM&usqp=CAU', 'Apple', 'Macbook Pro 2021 is great for design, development and creativity. With the new 8 core GPU and unbelievable speed and processing power you\'ll absolutely fall in love with the sleek design and soft buttons at your fingertips. ', 'City Centre, Glasgow', '2022-02-23', 'Good', 980, 5),
(4, 'PCs & Laptops', 'Imac Desktop', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZlCJm4K6aF-bT27x5TyvQ42AZOynqC3XTx3ncU1iU3V2Rwk9mnSXdjh-P1I6NEY9zags&usqp=CAU', 'Apple', 'Apple Imac Desktop has a 3.6 GHz 10-Core Intel Core i9, 32GTB of RAM, the AMD Radeon Pro 5700 XT with 16GB of Memory, 1TB of storage and the nano-textured glass.\r\n\r\nThis is perfect for Design, editing, programing and advanced creative design for video and art as well as browsing and streaming.', 'Newton Mearns, Glasgow', '2022-02-23', 'Good', 1000, 4),
(5, 'PCs & Laptops', 'Dell Desktop', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEbCRWymfyE40EaL6cPRpkj3XFf1r0GzEemQ&usqp=CAU', 'Dell', 'Dell Desktop Computer with i7 core and AMD graphics card, perfect for gaming, programing and working. \r\n\r\nThe Dell is fantastic and comes with monitor and all accessories and operates on windows 10 already installed. ', 'Johnstone, Glasgow', '2022-02-22', 'Fair', 130, 3),
(6, 'Screens & Audio', 'Samsung Smart Tv', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdtHixdLhzyLEj_JoRfLL7NhUtYUwX3wrGRQ&usqp=CAU', 'Samsung', 'Samsung 65\" Smart Tv with apps like Netflix, Google Play and others straight at your leisure. \r\n\r\nThe smart tv has 3D modes as well as football screens and built in surround system audio perfect for watching movies or playing those games. ', 'Barrhead, Glasgow', '2022-02-23', 'Good', 380, 5),
(7, 'Consoles & Gaming', 'Nintendo Switch', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJtRRrgQAyALpQIyk6esd3Acd0FElL1uVtzg&usqp=CAU', 'Nintendo', 'Nintendo Switch gaming console with two controllers and 3 games (Animal Crossing, Outer Worlds and Legend of Zelda). \r\n\r\nThis console can be played both as handheld and on the big screen, portable and easy to use anywhere it\'s great for any gaming needs.', 'Barrhead, Glasgow', '2022-02-23', 'Good', 230, 4),
(8, 'Consoles & Gaming', 'Xbox One Console', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqtQ_tomRRmoB8JmMOC8wLPnuCC5IpZYT4oA&usqp=CAU', 'Microsoft', 'Xbox One console with controllers and games, color is white and great for gaming online and casual. \r\n\r\nThe console works but may need some repairs as the disk drive can be tempremental, but overall doesn\'t affect the performance or usability. ', 'City Centre, Glasgow', '2022-02-24', 'Fair', 200, 3),
(9, 'Mobiles & Tablets', 'Samsung Tab 2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0co36Js0yFY2pL6sYeLrITyHe0qRIjcE_AQ&usqp=CAU', 'Samsung', 'Samsung Tab 2 is a portable tablet used for presentation, notetaking, applications and surfing the web. \r\n\r\nWith its notes to text and agile design you\'ll be able to draw, create and design in no time and it\'s so portable to take into the office or anywhere. ', 'City Centre, Glasgow', '2022-02-23', 'Good', 280, 4),
(10, 'Consoles & Gaming', 'PS4 Controller', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoZCfRcJr2NAz8nVQZScM0fkkOBhX9Vozaew&usqp=CAU', 'Sony', 'PS4 Camo Controller, with touchpad and blue camo skin. \r\n\r\nComes with USB cable and accessories, can be used with PS4 console and PC gaming, wireless use. ', 'Barrhead, Glasgow', '2022-02-22', 'Exellent', 20, 4),
(11, 'Mobiles & Tablets', 'Iphone 4S', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxs_H7RBtLHx96OTXWYeJzunBYZxYvzS8yUg&usqp=CAU', 'Apple', 'Iphone 4S 32G unlocked to any network, great camera located on the front and back, colour in black. \r\n\r\nThe iPhone is in good condition with a little wear and tear, connects to other apple devices and app store. ', 'Paisley, Glasgow', '2022-02-24', 'Good', 90, 4),
(12, 'Mobiles & Tablets', 'Iphone 7', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHxewaQlVE9ShJ-xIBapzJAozJn505PTzvJA&usqp=CAU', 'Apple', 'Iphone 7 plus 64G, EE network comes with case and has an amazing camera, great space, app store, 8 megapixel cameras on the front and back and is in black. \r\n\r\nThe iPhone is in Excellent condition comes with box and all accessories including charger and headphones. ', 'Partick, Glasgow', '2022-02-24', 'Exellent', 130, 5),
(19, 'PC & Laptops', 'AMD Gaming PC', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLoR_Tepr5vHBSyk76qbMDaHlJrN9wF2_ePdBWqnyO12LzVg43yR-_fqW_fiattpIF5qo&usqp=CAU', 'AMD', 'AMD Gaming PC Perfect for high resolution gaming with a Ryzen 6 Graphics card, 1 TB hard drive for unlimited space and great for design and programming intensive use.', 'Barrhead, Glasgow', '2022-03-01', 'Exellent', 450, 5),
(20, 'PC & Laptops', 'TEST', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLoR_Tepr5vHBSyk76qbMDaHlJrN9wF2_ePdBWqnyO12LzVg43yR-_fqW_fiattpIF5qo&usqp=CAU', 'AMD', 'TESTING TEST FOR DELETE', 'City Centre, Glasgow', '2022-03-01', 'Good', 430, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Name`, `Email`, `Account`) VALUES
(34, 'test', '', 'Jade', 'test@test.com', 'standard'),
(33, 'Test', '', 'Jade', 'test@test.com', 'standard');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
