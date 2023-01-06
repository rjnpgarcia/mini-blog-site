-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 09:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini-blog-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_content`, `post_date`) VALUES
(2, 'First Post Blog', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '6th of January 2023 06:57:19 AM'),
(3, 'Thankful Post', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '6th of January 2023 06:58:26 AM'),
(4, 'PHP Language', 'Aaawwweeesome', '6th of January 2023 06:59:01 AM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'ralph', 'qwerty@qwerty.com', '$2y$10$o2I.3CxvwX8xIGfV5i8qneB1esdArFzwurCoOUdD0H6uKwJMuO5ui'),
(2, 'Nathaniel', 'ralph@qwerty.com', '$2y$10$59Oi3KzMwuUFQip7bjKTqeVHvP2RCgVWlpUd1FIQIr5QCauTneYvu'),
(3, 'joseph', 'joseph@qwerty.com', '$2y$10$HuDkEIYo7XwUPXIfaRN12uWzy0ap5VXEHCf9Wxn/kS6Id08Kda4kS'),
(4, 'vader', 'vader@qwerty.com', '$2y$10$uF.gzddCgWVdvAMyxrliUOJSnDfPbza5OKAh6TYKPSoME0YH7xHEC'),
(5, 'omen', 'omen@qwerty.com', '$2y$10$mRcdzxhE7ctK/shfVlDSLu5f0xiPJdEpduRzEyJD/eeCcpyihnvsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
