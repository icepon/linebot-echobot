-- phpMyAdmin SQL Dump
-- version 4.6.5
-- https://www.phpmyadmin.net/
--
-- Host: mysql.fanfinfin.com
-- Generation Time: Apr 10, 2017 at 02:35 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fanfinfin_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `uid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Primary key: users.uid for user.',
  `module` varchar(50) CHARACTER SET ascii NOT NULL DEFAULT '' COMMENT 'The name of the module declaring the variable.',
  `name` varchar(128) CHARACTER SET ascii NOT NULL DEFAULT '' COMMENT 'The identifier of the data.',
  `value` longblob COMMENT 'The value.',
  `serialized` tinyint(3) UNSIGNED DEFAULT '0' COMMENT 'Whether value is serialized.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores module data as key/value pairs per user.';

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`uid`, `module`, `name`, `value`, `serialized`) VALUES
(89, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(89, 'user', 'cancel_notify', 0x31, 0),
(105, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(105, 'user', 'cancel_notify', 0x31, 0),
(174, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(174, 'user', 'cancel_notify', 0x31, 0),
(196, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(196, 'user', 'cancel_notify', 0x31, 0),
(299, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(299, 'user', 'cancel_notify', 0x31, 0),
(347, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(347, 'user', 'cancel_notify', 0x31, 0),
(356, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(356, 'user', 'cancel_notify', 0x31, 0),
(559, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(559, 'user', 'cancel_notify', 0x31, 0),
(581, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(581, 'user', 'cancel_notify', 0x31, 0),
(593, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(593, 'user', 'cancel_notify', 0x31, 0),
(612, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(612, 'user', 'cancel_notify', 0x31, 0),
(621, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(621, 'user', 'cancel_notify', 0x31, 0),
(629, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(629, 'user', 'cancel_notify', 0x31, 0),
(651, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(651, 'user', 'cancel_notify', 0x31, 0),
(667, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(667, 'user', 'cancel_notify', 0x31, 0),
(754, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(754, 'user', 'cancel_notify', 0x31, 0),
(764, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b, 0),
(764, 'user', 'cancel_notify', 0x31, 0),
(790, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(790, 'user', 'cancel_notify', 0x31, 0),
(812, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(812, 'user', 'cancel_notify', 0x31, 0),
(826, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(826, 'user', 'cancel_notify', 0x31, 0),
(838, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(838, 'user', 'cancel_notify', 0x31, 0),
(839, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(839, 'user', 'cancel_notify', 0x31, 0),
(878, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(878, 'user', 'cancel_notify', 0x31, 0),
(908, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(908, 'user', 'cancel_notify', 0x31, 0),
(1019, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1019, 'user', 'cancel_notify', 0x31, 0),
(1101, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1101, 'user', 'cancel_notify', 0x31, 0),
(1117, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1117, 'user', 'cancel_notify', 0x31, 0),
(1144, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1144, 'user', 'cancel_notify', 0x31, 0),
(1265, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1265, 'user', 'cancel_notify', 0x31, 0),
(1274, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1274, 'user', 'cancel_notify', 0x31, 0),
(1309, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1309, 'user', 'cancel_notify', 0x31, 0),
(1316, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1316, 'user', 'cancel_notify', 0x31, 0),
(1343, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1343, 'user', 'cancel_notify', 0x31, 0),
(1423, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1423, 'user', 'cancel_notify', 0x31, 0),
(1446, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1446, 'user', 'cancel_notify', 0x31, 0),
(1643, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1643, 'user', 'cancel_notify', 0x31, 0),
(1710, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1710, 'user', 'cancel_notify', 0x31, 0),
(1739, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1739, 'user', 'cancel_notify', 0x31, 0),
(1868, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1868, 'user', 'cancel_notify', 0x31, 0),
(1924, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1924, 'user', 'cancel_notify', 0x31, 0),
(1954, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1954, 'user', 'cancel_notify', 0x31, 0),
(1980, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(1980, 'user', 'cancel_notify', 0x31, 0),
(2046, 'user', 'cancel_method', 0x757365725f63616e63656c5f626c6f636b5f756e7075626c697368, 0),
(2046, 'user', 'cancel_notify', 0x31, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`uid`,`module`,`name`),
  ADD KEY `module` (`module`),
  ADD KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
