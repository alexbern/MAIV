-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2016 at 07:08 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `major4`
--

-- --------------------------------------------------------

--
-- Table structure for table `deelnemers`
--

CREATE TABLE `deelnemers` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `klas` varchar(255) NOT NULL,
  `gemeente` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `naam`, `school`, `klas`, `gemeente`, `is_admin`) VALUES
(1, 'itsalexbernard@gmail.com', '$2y$12$zQbvAH4EG7WGSfQUOyJ9kuw4Qv4sgRET0zGIo5xXw0GHFjC0q1FL2', 'Alex', 'Howest', '2DEV2', 'Kortrijk', 0),
(2, 'test@test.be', '$2y$12$eceKse26Mmj4RmU/vBN0KOwitbikm4ihNA1Umj0o3/O8.euMnL8wa', 'test', 'test', 'test', 'test', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deelnemers`
--
ALTER TABLE `deelnemers`
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
-- AUTO_INCREMENT for table `deelnemers`
--
ALTER TABLE `deelnemers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
