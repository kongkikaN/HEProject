-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 10:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_business`
--

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `campaign_title` varchar(255) NOT NULL,
  `campaign_for` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `fund_description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`username`, `email`, `goal`, `campaign_title`, `campaign_for`, `zip_code`, `category`, `fund_id`, `image_url`, `fund_description`) VALUES
('extralife', 'nikos', '1000', 'Raise money for education', 'myself', '18863', 'education', 16, 'images/other/white-and-black-dress-code-28-background-wallpaper.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the'),
('extralife', 'nikos', '11880', 'Î¤Î·Î»ÎµÏ†Ï‰Î½Î¹ÎºÏŒ ÎšÎ­Î½Ï„ÏÎ¿', 'myself', '123456', 'other', 17, 'images/other/rick-and-morty-wallpaper-hd-pics-backgrounds-background-of-mobile-phones.png', 'Aenean ultrices neque sit amet arcu gravida, et malesuada ex aliquet. Nullam elementum magna nec dictum accumsan. Nullam imperdiet maximus turpis, ut elementum ipsum egestas sit amet. Integer quis est vitae ipsum blandit aliquet. Vestibulum enim augue, sollicitudin in augue in, congue mollis neque. Praesent a dignissim dui, eu rhoncus purus.'),
('extralife', 'nikos', '9999', 'Raise money for myself', 'myself', '123456', 'art', 18, 'images/other/IMG_7323.JPG', 'Vivamus id neque ipsum. Quisque eu velit id purus egestas bibendum. Quisque dapibus massa ut urna porttitor, et volutpat ante tempor. Proin id velit condimentum, rhoncus nulla nec, ultrices risus. Vivamus elit odio, feugiat in nulla a, consequat condimentum enim. Sed non ex sem. Vestibulum laoreet tellus ac mauris pulvinar, vitae semper dolor dapibus. Quisque non ornare mi, non viverra magna. Sed egestas sed eros at placerat. Morbi eget justo justo. Nunc sit amet placerat massa. Sed id ultricies eros, at lobortis augue. Aliquam erat volutpat. Nullam nisl felis, accumsan in fermentum non, im');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('kongkikan', '123456', NULL),
('extralife', '@8wHSouoamUEwKxsya', 'nikos'),
('alexis', '123456', 'alexis@gmail.com'),
('nikos', 'kongkika', 'kongkikan@gmail.com'),
('Gioulian', '123456', 'gioulian@gmail.com'),
('kongkika', '0000', 'kongkikan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`fund_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
