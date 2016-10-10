-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 10:27 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_posts`
--

CREATE TABLE `cms_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_posts`
--

INSERT INTO `cms_posts` (`post_id`, `post_title`, `post_slug`, `post_content`, `post_author`, `post_time`) VALUES
(1, 'Hello World!', 'hello-world', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a faucibus orci. Integer pretium purus eu tellus imperdiet, in molestie ex efficitur. Aliquam rhoncus, metus vel volutpat laoreet, enim nulla efficitur quam, dapibus commodo purus ligula eget ligula. Nam sed eros vitae enim maximus facilisis at ut turpis. In ut vehicula magna, sed ullamcorper eros. Aenean rutrum ipsum orci, a suscipit libero ornare a. Praesent semper massa ut lacus bibendum eleifend. Sed non maximus odio, ut rutrum justo.<br><br>Nunc est est, pellentesque tempus condimentum porttitor, efficitur at nunc. Fusce egestas viverra ultrices. Curabitur pellentesque mauris quis nunc ultricies iaculis eget viverra lacus. Donec ut nisi lobortis, convallis purus sit amet, vestibulum quam. In venenatis risus nec ligula aliquam porta. Donec neque erat, egestas eu posuere nec, ornare et nulla. Vestibulum quam mauris, faucibus ac accumsan sed, vestibulum et mi. Vestibulum sodales purus a pellentesque rutrum.', 'Admin', '2016-10-05 17:29:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_posts`
--
ALTER TABLE `cms_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_posts`
--
ALTER TABLE `cms_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
