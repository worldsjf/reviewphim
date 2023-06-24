-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 10:31 AM
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
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_id`, `name`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'Admin@gmail.com', '123', 0),
(2, 'SuperAdmin', 'SAdmin@gmail.com', '456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allmovies`
--

CREATE TABLE `allmovies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `type` enum('movies','series','popular','trends') NOT NULL,
  `avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allmovies`
--

INSERT INTO `allmovies` (`id`, `name`, `image`, `des`, `type`, `avg`) VALUES
(5, 'gggg', 'bidmouth2.jpg', 'gggg', 'movies', 0),
(6, 'gggg', 'anh1.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis minima voluptatibus incidunt. Accusamus, provident', 'popular', 0),
(8, '1555', '', 'gggg', 'series', 0),
(9, 'anh111', 'matbiec.jpg', 'phim mắt biếc ', 'trends', 0),
(10, 'khsadkjdjak', 'anh2.jpg', 'adshauog', 'movies', 0),
(11, 'adada', 'bongdungtrungso.jpg', 'afaf', 'movies', 0),
(13, 'àahahfakjak', 'nguocdongthoigiandeyeuanh.jpg', 'sgagag', 'series', 0),
(14, 'test comment', '6354deb79889e.jpg', 'test commnet ko dc thì nghỉ', 'series', 3.5),
(15, 'fafaff', '6354df87e61e9.png', 'ăfafagegaa', 'series', 0),
(16, 'popular', '63556741794cc.jpg', 'train to busan', 'popular', 4),
(18, 'test avg', 'squdigame1.jpg', 'aggagaga', 'trends', 4.6),
(19, 'testsss', '635ba87957c57.jpg', 'taafljafjafjafjk', 'trends', 0),
(20, 'test avg 2', '635bac4a6bc6e.jpg', 'test test test', 'popular', 0),
(21, 'doan', '634ba60a7ccf2.jpg', 'bbdabaaaaaaaaaaaLorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis minima voluptatibus incidunt. Accusamus, provident.aaaaaaaaaaaaaaaaaaaaaaaaaa', 'trends', 0),
(22, 'afbfbab', '6360e57e8af8c.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis minima voluptatibus incidunt. Accusamus, providentLorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis minima voluptatibus incidunt. Accusamus, providentLorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis minima voluptatibus incidunt. Accusamus, providentLorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis minima voluptatibus incidunt. Accusamus, providentLorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor deserunt nam assumenda ipsa eligendi dolo', 'popular', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `C_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`C_id`, `name`, `email`, `comment`, `id`) VALUES
(9, 'fshh', 'sfhshs', 'sfhshsh', 0),
(10, 'fshh', 'sfhshs', 'sfhshsh', 0),
(11, 'adabdba', 'vudangthanh18122002@gmail.com', 'sfsfdfs', 0),
(12, 'fhshsf', 'abdabdb', 'dafafa', 14),
(13, 'adabdba', 'vudangthanh18122002@gmail.com', 'test comment theo id\r\n', 15),
(14, 'adba', '0332280971', 'asfafwf', 13),
(15, 'teoan', '0332280971', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor\r\n                        deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis\r\n                        minima voluptatibus incidunt. Accusamus, provident.', 15),
(16, 'vudutoan', 'vudangthanh18122002@gmail.com', 'âfaffafa', 16),
(17, 'adabdba', '0332280971', 'hahrharh', 14),
(18, 'fhshsf', '380', 'agagae', 19);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `R_id` int(11) NOT NULL,
  `rate-star` enum('5','4','3','2','1') NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`R_id`, `rate-star`, `id`) VALUES
(1, '5', 15),
(2, '3', 14),
(3, '4', 16),
(4, '4', 15),
(5, '5', 15),
(6, '3', 16),
(7, '4', 14),
(8, '3', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `allmovies`
--
ALTER TABLE `allmovies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`R_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `allmovies`
--
ALTER TABLE `allmovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
