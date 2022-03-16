-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2022 at 11:57 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'mohammed_nader', 999103320),
(2, 'khaled_alkofahi', 999103390);

-- --------------------------------------------------------

--
-- Table structure for table `all_book`
--

CREATE TABLE `all_book` (
  `id` int(30) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_type` varchar(200) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `pic` text NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_book`
--

INSERT INTO `all_book` (`id`, `book_name`, `book_type`, `author_name`, `pic`, `pdf`) VALUES
(2, 'العقل المدبر', 'ترفيهي', 'احمد', 'pic/children_2.jpg', 'book_pdf/children_2.pdf'),
(3, 'كيمو (شهريار التجمع)', 'ترفيهي', 'حافظ خليل', 'pic/comic_1.png', 'book_pdf/comic_1.pdf'),
(4, 'بالطوو وفانيلة وتاب', 'ترفيهي', 'مالك طالب', 'pic/comic_2.jpg', 'book_pdf/comic_2.pdf'),
(5, 'الرأس مالية تجدد نفسها ', 'كتب اقتصادية', 'صابر احمد', 'pic/economic_1.jpg', 'book_pdf/economic_1.pdf'),
(6, 'المالية العامة', 'كتب اقتصادية', 'فادي سعبد', 'pic/economic_2.jpg', 'book_pdf/economic_2.pdf'),
(7, 'جداول بلا ماء', 'روايات', 'موفق خليل', 'pic/novels_1.jpg', 'book_pdf/novels_1.pdf'),
(8, 'امال و اقدالر', 'روايات', 'منى سعيد', 'pic/novels_2.jpg', 'book_pdf/novels_2.pdf'),
(15, 'الزمن العربي الرديء', 'كتب سياسية', 'خليل ابراهيم', 'pic/political_4.jpg', 'book_pdf/political_4.pdf'),
(16, 'الانظمة السياسية', 'كتب سياسية', 'خليل ابراهيم', 'pic/political_5.jpg', 'book_pdf/political_5.pdf'),
(17, 'اميرة النهر', 'قصص اطفال', 'العبادي', 'pic/children_3.jpg', 'book_pdf/children_3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(15) NOT NULL,
  `name` varchar(350) NOT NULL,
  `e_mail` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `e_mail`, `message`) VALUES
(1, '', '', ''),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(3, 'mohammed nader', 123),
(4, 'ahmed alkofahi', 888),
(6, 'ali alhammouri', 999),
(7, 'hussine faisal', 888),
(8, 'ahmed alquran ', 777),
(9, 'moath alrababah', 444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_book`
--
ALTER TABLE `all_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `all_book`
--
ALTER TABLE `all_book`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
