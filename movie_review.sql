-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 05:57 PM
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
-- Database: `movie_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `c_fname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_name` varchar(50) NOT NULL,
  `m_year` int(6) NOT NULL,
  `m_genre` varchar(15) NOT NULL,
  `m_trailer_link` varchar(500) NOT NULL,
  `avg_rate` decimal(5,0) NOT NULL,
  `dir_fname` varchar(30) NOT NULL,
  `dir_lname` varchar(30) NOT NULL,
  `dir_age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_cast`
--

CREATE TABLE `movie_cast` (
  `m_name` varchar(50) NOT NULL,
  `cast_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_watch_list`
--

CREATE TABLE `m_watch_list` (
  `m_name` varchar(50) NOT NULL,
  `m_year` int(6) NOT NULL,
  `m_watched` varchar(10) NOT NULL,
  `m_priority` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `user_name` varchar(30) NOT NULL,
  `review` text NOT NULL,
  `rating` int(5) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `s_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `s_name` varchar(50) NOT NULL,
  `s_year` int(6) NOT NULL,
  `s_genre` varchar(20) NOT NULL,
  `s_trailer_link` varchar(500) NOT NULL,
  `avg_rate` int(5) NOT NULL,
  `dir_fname` varchar(30) NOT NULL,
  `dir_lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series_cast`
--

CREATE TABLE `series_cast` (
  `s_name` varchar(50) NOT NULL,
  `cast_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `s_watch_list`
--

CREATE TABLE `s_watch_list` (
  `s_name` varchar(50) NOT NULL,
  `s_year` int(6) NOT NULL,
  `s_watched` varchar(10) NOT NULL,
  `s_priority` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`c_fname`,`c_lname`,`age`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`fname`,`lname`,`age`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_name`,`m_year`),
  ADD KEY `dir_key1` (`dir_fname`);

--
-- Indexes for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD KEY `oljkl` (`m_name`),
  ADD KEY `jkjjh` (`cast_name`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `user_key` (`user_name`),
  ADD KEY `movie_key` (`m_name`),
  ADD KEY `series_key` (`s_name`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`s_name`,`s_year`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `user_name` (`user_name`,`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `dir_key1` FOREIGN KEY (`dir_fname`) REFERENCES `director` (`fname`);

--
-- Constraints for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD CONSTRAINT `jkjjh` FOREIGN KEY (`cast_name`) REFERENCES `cast` (`c_fname`),
  ADD CONSTRAINT `oljkl` FOREIGN KEY (`m_name`) REFERENCES `movies` (`m_name`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `movie_key` FOREIGN KEY (`m_name`) REFERENCES `movies` (`m_name`),
  ADD CONSTRAINT `series_key` FOREIGN KEY (`s_name`) REFERENCES `series` (`s_name`),
  ADD CONSTRAINT `user_key` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
