-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2022 at 01:51 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_electronix`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `firstName`, `lastName`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 'admin'),
(2, 'andre@gmail.com', 'password', 'Andre', 'Rodrigues'),
(3, 'renzo@gmail.com', 'renzo123', 'Renzo', 'Gana'),
(4, 'jack@hotmail.com', 'gking', 'Jack', 'Lindfeild'),
(8, 'SodiqRaj@yahoo.com', 'mckid', 'Sodiq', 'Raji'),
(9, 'beckham@hotmail.com', 'qwerty', 'Beck', 'Ayome'),
(14, 'milosz@gmail.com', '12345', 'Milosz', 'Wroble'),
(13, 'viviana@gmail.com', '123456', 'Viviana', 'Palomeque'),
(21, 'asdsadsadsa', 'asdasd', 'asdasda', 'asdasdsadasd'),
(22, 'rionnuk@gmail.com', 'rionnuk', 'Ryan', 'Depmsy'),
(23, 'sophiefernz@yhaoo.com', 'sophie123', 'Sophie', 'Fernandez');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `category`, `price`, `description`, `product_img`) VALUES
(1, 'SONY BRAVIA KD43X85JU 43\" Smart 4K TV', 'television', '599', '• Advanced A9 Gen4 AI processor 4K for ultimate picture & sound • HDR: Dolby Vision IQ / HDR10 / Hybrid Log-Gamma (HLG) • Smart TV with Google Assistant & Amazon Alexa • 43-inch flat screen TV', 'images/products/televisions/sony_tv.jpg'),
(2, 'HISENSE 43AE7000FTUK 43\" 4K Smart TV', 'television', '499', '• Advanced A9 Gen4 AI processor 4K for ultimate picture & sound • HDR: Dolby Vision IQ / HDR10 / Hybrid Log-Gamma (HLG) • Smart TV with Google Assistant & Amazon Alexa • 43-inch flat screen TV', 'images/products/televisions/hisense_tv.jpg'),
(3, 'Samsung AU7110 75\" Smart 4K TV HDR10+', 'television', '699', '• Advanced A9 Gen4 AI processor 4K for ultimate picture & sound • HDR: Dolby Vision IQ / HDR10 / Hybrid Log-Gamma (HLG) • Smart TV with Google Assistant & Amazon Alexa • 43-inch flat screen TV', 'images/products/televisions/samsung_tv.jpg'),
(4, 'Apple iPhone 11', 'phone', '599', '• 6.1-inch Liquid Retina HD LCD displayd • Face ID for secure authentication and Apple Pay • A13 Bionic chip with third-generation Neural Engine • Dual-camera system with 12MP Ultra Wide cameras', 'images/products/phone/iphone11_phone.jpg'),
(5, 'Apple iPhone 13', 'phone', '899', '• 6.1-inch Super Retina XDR display • A15 Bionic chip for lightning-fast performance • Up to 19 hours of video playback • 12MP TrueDepth front camera with Night mode', 'images/products/phone/iphone13_phone.jpg'),
(6, 'Apple iPhone SE', 'phone', '389', '• 4.7-inch Retina HD display • 7MP front camera with Portrait mode • Touch ID for secure authentication and Apple Pay • Water and dust resistant', 'images/products/phone/iphoneSE_phone.jpg'),
(7, 'Tornado R5 Gaming PC - AMD Ryzen 5, RTX 3060', 'computing', '1299', '• Numeric keypad • RAM: 16 GB / Storage: 2 TB HDD & 512 GB SSD • Graphics: NVIDIA GeForce RTX 3060 12 GB • 258 FPS when playing Fortnite at 1080p', 'images/products/computing/pc_computing.jpg'),
(8, 'GIGABYTE GeForce RTX 3070 Ti Graphics Card', 'computing', '1099', '• With 16 million colours to choose from - GPU lighting • Max-covered cooling keeps everything running optimally. • Clock speed: 1875 MHz • 4 x HDMI / DisplayPorts', 'images/products/computing/gpu_computing.jpg'),
(9, 'ADX MK0419 Mechanical Gaming Keyboard', 'computing', '69', '• Red switches • RGB backlit keys • Anti-ghosting • Numeric keypad', 'images/products/computing/keyboard_computing.jpg'),
(10, 'SONY WH-1000XM4 Wireless Headphones', 'audio', '249', '• 30 hours battery life (with Noise Cancelling on) • powered by our HD Noise Cancelling Processor QN1 • Bluetooth headphones support High-Resolution Audio • automatically pauses playback when you start a conversation', 'images/products/audio/soney_headphones.jpg'),
(11, 'APPLE AirPods Pro - White', 'audio', '199', '• Transparency mode, hear the world around you • Active Noise Cancellation for immersive sound • Easy setup for all your Apple devices • Wireless Charging Case delivers 24 hour battery life', 'images/products/audio/apple_headphones.jpg'),
(12, 'Beats Solo3 Wireless Headphones - Red', 'audio', '149', '• High-performance wireless Bluetooth headphones in red • With up to 40 hours of battery life • Adjustable fit with comfort and cushioned • Compatible with iOS and Android devices', 'images/products/audio/beat_headphone.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
