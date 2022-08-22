-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 08:22 PM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `plan` varchar(200) NOT NULL,
  `user` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`plan`, `user`, `time`, `date`, `instructor`, `isactive`, `id`) VALUES
('Diet', 'lawblaze4@gmail.com', '22:05:00', '2022-08-25', 'moses jjk', 1, 41),
('Aerobics', 'lawblaze5@gmail.com', '07:45:00', '2022-08-18', 'peter james', 1, 44),
('Personal Training ', 'lawblaze6@gmail.com', '13:09:00', '2022-09-03', 'Daniel Lawson', 1, 45),
('Personal Training ', 'lawblaze7@gmail.com', '17:35:00', '2022-09-06', 'moses jjk', 1, 46);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Name` varchar(225) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` longtext NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Name`, `Email`, `Message`, `id`) VALUES
('james john', 'lawblaze6@gmail.com', 'bff', 1),
('Daniel lawson', 'lawblaze5@gmail.com', 'thank you', 2),
('Daniel lawson', 'lawblaze5@gmail.com', 'thank you', 3),
('Daniel lawson', 'james@gmail.com', 'thank you very', 4),
('hello my name is daniel', 'daniel@test.com', 'hello my name is daniel and this is my test', 5);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Amount`) VALUES
('121', 'preliminary', 800),
('122', 'Wt. gain', 1500),
('123', 'Wt.loss', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Trainer_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` int(100) NOT NULL,
  `about` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Name`, `phone`, `about`, `image`) VALUES
(101, 'Rakesh', 12365489, '', ''),
(102, 'Ravi', 21365789, '', ''),
(103, 'wasim', 123564789, '', ''),
(104, 'Sameer', 12536987, '', ''),
(123, 'jame', 80234567, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_first` varchar(225) NOT NULL,
  `user_last` varchar(225) NOT NULL,
  `user_email` varchar(225) NOT NULL,
  `user_uid` varchar(225) NOT NULL,
  `user_pwd` varchar(225) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plan` varchar(200) DEFAULT NULL,
  `instructor` varchar(200) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `ap_date` date DEFAULT NULL,
  `ap_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_id`, `plan`, `instructor`, `active`, `ap_date`, `ap_time`) VALUES
('Daniel', 'Lawson', 'lawblaze4@gmail.com', 'lawblaze', '25d55ad283aa400af464c76d713c07ad', 11, 'Gym Equipment', 'moses jjk', 1, '2022-08-25', '22:05:00'),
('Daniel', 'Lawson', 'lawblaze5@gmail.com', 'james', '25d55ad283aa400af464c76d713c07ad', 12, 'Aerobics', 'peter james', 1, '2022-08-18', '07:45:00'),
('james', 'john', 'lawblaze6@gmail.com', 'Daniel', '5e77806003323953a0761340bd90c8e4', 13, 'Personal Training ', 'Daniel Lawson', 1, '2022-09-03', '13:09:00'),
('james', 'john', 'lawblaze7@gmail.com', 'lawblaze', 'dc2e5d0339cc8a27f8eed2aeac7f879a', 14, 'Personal Training ', 'moses jjk', 1, '2022-09-06', '17:35:00'),
('sylvian', 'ezekiel', 'sylvianenrot@gmail.com', 'sylvian', '724d511265bf58fd18183732d9da7133', 15, NULL, NULL, 0, NULL, '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Trainer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
