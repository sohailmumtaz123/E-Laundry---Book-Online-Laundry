-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2022 at 03:17 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u230980101_elaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Sohail Mumtaz', 'suhailq046@gmail.com', 'This is sohail Qureshi', 'This is message from Sohail Qureshi'),
(2, 'Saad Wasim', 'saadwaseem99@gmail.com', 'PRICE INFO', 'How much will you charge for 3 jeans and 2 shirt'),
(5, 'Ahmed', 'ahmed29@gmail.com', 'This is Ahmed Qureshi', 'Hi there! I have a Query, I want to about how you work. Thanks'),
(6, 'Farris Ghazi', 'farrisghazi29@gmail.com', 'I have an issue about the dress that you washed.', 'Hello there! I have an issue about a dress that you washed. Can you please resolve my issue. Thanks'),
(7, 'saad', 'saadwaseem258@gmail.com', 'okay', 'okay'),
(8, 'Saveed ', 'saveed.shah@gmail.com', 'Cloths ', 'Xvhus '),
(10, 'Sohail Mumtaz', 'suhailq046@gmail.com', 'This is sohail Qureshi', 'This is message'),
(11, 'Farris Ghazi', 'farrisghazi29@gmail.com', 'This is sohail Qureshi', 'This is message from Sohail'),
(12, 'Sohail Mumtaz', 'suhailq046@gmail.com', 'I have an issue about the dress that you washed.', 'This is message from contact form of website. '),
(13, 'Sohail Mumtaz', 'suhailq046@gmail.com', 'This is sohail Qureshi', 'This is message from Laundry services, '),
(14, 'Farris Ghazi', 'farrisghazi29@gmail.com', 'I have an issue about the dress that you washed.', 'THis is message from Farris Ghazi to Elaundry');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_order`
--

CREATE TABLE `schedule_order` (
  `id` int(15) NOT NULL,
  `fname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pick_date` date NOT NULL,
  `pick_time` time NOT NULL,
  `drop_date` date NOT NULL,
  `drop_time` time NOT NULL,
  `items` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_order`
--

INSERT INTO `schedule_order` (`id`, `fname`, `lname`, `address`, `phone`, `email`, `pick_date`, `pick_time`, `drop_date`, `drop_time`, `items`, `status`, `code`) VALUES
(6, 'Saad', 'Waseem', 'I Hall  UET TAXILA', '2147483647', 'saadwaseem99@gmail.com', '2021-07-14', '11:00:00', '2021-07-14', '11:00:00', '3 Jeans, 2 shirt', 'Delivered', 0),
(8, 'Sheraz', 'khan', 'Behriya Town', '2147483647', 'sheraz@gmail.com', '2021-07-14', '09:00:00', '2021-07-16', '10:30:00', '1 Blanket, 3 suits, 5 pants & shirts ', 'Processing', 0),
(9, 'Shahid', 'khan', 'Rawalpindi', '03106377540', 'suhailq046@gmail.com', '2021-07-14', '10:30:00', '2021-07-15', '09:30:00', '1 Blanket, 3 shirts laundry only, 5 suits.', 'Delivered', 4203),
(10, 'saad', 'wasim', 'i hall', '03027636577', 'saadwaseem258@gmail.com', '2021-07-15', '10:30:00', '2021-07-16', '10:30:00', '2 siut', 'Processing', 195606),
(11, 'Saveed ', 'Hassan ', 'Gujranwala', '03107230241', 'saveed.shah@gmail.com', '2021-07-14', '10:30:00', '2021-07-21', '10:30:00', 'Blanket , shirts ', 'Processing', 723242),
(12, 'Sohail', 'Qureshi', 'Dera Ghazi Khan', '03106377540', 'suhailq046@gmail.com', '2021-07-15', '10:00:00', '2021-07-16', '11:00:00', '1 Blanket, 3 shirts laundry only, 5 suits.', 'Processing', 266377),
(13, 'Sohail', 'Mumtaz', 'Islamabad', '03106377540', 'suhailq046@gmail.com', '2021-07-15', '11:00:00', '2021-07-15', '11:00:00', '5 shirts, 5 Pants, 3 suits, 5 pairs of socks ', 'onhold', 687667),
(14, 'Mam', 'Nishina', 'Islamabad', '03106377540', 'suhailq046@gmail.com', '2021-07-13', '09:00:00', '2021-07-14', '09:00:00', '1 Blanket, 3 shirts laundry only, 5 suits.', 'onhold', 552662),
(15, 'Sohail', 'Mumtaz', 'Islamabad', '03106377540', 'suhailq046@gmail.com', '2021-07-08', '10:00:00', '2021-07-10', '11:30:00', '5 shirts, 5 Pants, 3 suits, 5 pairs of socks ', 'onhold', 205268),
(16, 'farris', 'ghazi', 'Islamabad', '03106377540', 'farrisghazi29@gmail.com', '2021-07-08', '09:00:00', '2021-07-10', '10:00:00', '5 shirts, 5 Pants, 3 suits, 5 pairs of socks ', 'Delivered', 505414);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(2, 'Sohail Mumtaz', 'suhailq046@gmail.com', '$2y$10$6BiGMKb3a.uFeUdBG4A2WuqN4PAk5qNlK/0V5Ult/4YGAFTijtLeW', 888804, 'verified'),
(3, 'Saad Wasim', 'saadwaseem99@gmail.com', '$2y$10$zGdJkbpgYG6ZAdyjiDTE9uS7mtRFkp40FCHA/TUdxO5.B9Dtfgh3m', 0, 'verified'),
(4, 'saad', 'saad@gmailcom', '$2y$10$4M2suc2D2ytVPZ7VKjkkyOaAgd.mRnY/nqpnxoHj.5mx3smPoHraO', 644507, 'notverified'),
(5, 'Qureshi', 'qureshi29@gmail.com', '$2y$10$hWTM089gjrPVcU5mM4g5feK6z.gom.QMxLKpspBkDM.M8B50Kdfmu', 581368, 'notverified'),
(6, 'Fahad', 'fahad29@gmail.com', '$2y$10$smqNLM3c9VTpzYeL5ipyruggUBq/9nq7W/3dFXMW6zcE2p/bcyOni', 432913, 'notverified'),
(8, 'Muhammad Saveed ul hassan', 'saveed.shah@gmail.com', '$2y$10$OnnOIknVIA9UUH/oCLJae.psqVTIADgyp1UCoHVRLZVbIVD6ltHjm', 0, 'verified'),
(9, 'Saad', 'saadwaseem258@gmail.com', '$2y$10$DNmAi3OUO6bjZFjVI1d14Oz8.jfXp9e03afpg9xOJpLQqPxPzYihy', 0, 'verified'),
(10, 'web developer', 'webdev296@gmail.com', '$2y$10$40EyZ08Xwpp/hI7.YoaaPueGEwk7iOor66vPxxKEJ7QMeUBBQl8fa', 349636, 'notverified'),
(11, 'Sohail Mumtaz', 'farrisghazi29@gmail.com', '$2y$10$k3qi0GEVYfI8ekyQctkrUe4.5W1Sesu3j6kGu.8HJRZOxKBvexTui', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_order`
--
ALTER TABLE `schedule_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedule_order`
--
ALTER TABLE `schedule_order`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
