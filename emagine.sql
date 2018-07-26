-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 06:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emagine`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `POST_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `HEADING` varchar(200) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`POST_ID`, `USER_ID`, `HEADING`, `DESCRIPTION`) VALUES
(1, 0, 'Post One', 'Hope This Works.'),
(2, 0, 'Post Two', 'This will definitely work!'),
(3, 0, 'Article 3', 'erer'),
(4, 0, 'Post One', 'Man do I worry!'),
(5, 0, 'Another Post ', 'Text and Stuff'),
(6, 0, 'Article 5', 'La La Land.'),
(7, 0, 'Atstse', 'ydydd'),
(8, 0, 'Article 7', 'Here is a stock description text.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `NSU_ID` varchar(12) NOT NULL,
  `UNAME` varchar(10) NOT NULL,
  `PASS` varchar(100) NOT NULL,
  `USER` varchar(10) NOT NULL,
  `EDITOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FNAME`, `LNAME`, `EMAIL`, `NSU_ID`, `UNAME`, `PASS`, `USER`, `EDITOR`) VALUES
(1, 'Green', 'Day', 'gday@homeland.usa', '13224232', 'green', '628b7db04235f228d40adc671413a8c8', 'writer', 1),
(2, 'Mashrafee', 'Mortuza', 'mmsjsd@kjl.com', '14146575', 'mmort', 'e99a18c428cb38d5f260853678922e03', 'writer', 1),
(3, 'Aquib', 'Sarwar', 'Sjd@dkjsk.com', '14146575', 'lallana.lo', 'e99a18c428cb38d5f260853678922e03', 'writer', 0),
(4, 'Sadia', 'Dia', 'dia@gmail.com', '14146575', 'dia', '81dc9bdb52d04dc20036dbd8313ed055', 'writer', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`POST_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `POST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
