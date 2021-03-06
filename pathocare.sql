-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 05:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathocare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doc_id`, `user_id`, `date`, `time`) VALUES
(3, 2, 2, '2022-06-16', '17:40'),
(6, 2, 1, '2022-06-08', '12:00'),
(7, 1, 2, '2022-06-10', '13:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Psychiatrist'),
(2, 'Orthopedic'),
(3, 'Anesthesiologists'),
(4, 'Cardiologists'),
(6, 'General Physicians');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `registration_number` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `registration_number`, `phone_number`, `time`, `degree`, `category`) VALUES
(1, 'Arpita', '10', '7074883264', 'Monday - Wednesday (From 10 A.M. - 9 P.M.)', 'Double M.B.B.S. from USA', '6'),
(2, 'Poppy', '02', '7074883204', 'Monday - Friday (From 1 P.M. - 2 P.M.)', 'M.B.B.S. from India', '2'),
(3, 'Nandita', '03', '7074583204', 'Tuesday - Friday (From 9 A.M. - 2 P.M.)', 'M.B.B.S. from Canada', '1');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `time` text NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `time`, `details`) VALUES
(2, 'Blood Test', 'Monday - Friday (From 10 A.M. - 9 P.M.)', 'Test your blood with efficiently.');

-- --------------------------------------------------------

--
-- Table structure for table `service_appoint`
--

CREATE TABLE `service_appoint` (
  `id` int(10) NOT NULL,
  `serv_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_appoint`
--

INSERT INTO `service_appoint` (`id`, `serv_id`, `user_id`, `date`, `time`) VALUES
(4, 2, 1, '2022-06-22', '12:22'),
(5, 2, 2, '2022-06-15', '13:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone_number` bigint(25) NOT NULL,
  `gender` int(2) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `phone_number`, `gender`, `age`, `address`) VALUES
(1, 'Tama', '12345', 7074883264, 1, 21, 'Bakultala, nadia'),
(2, 'Akash Sarkar', '543210', 9734845264, 0, 19, 'Nimtala, Nadia'),
(3, 'Suraj Das', '123456', 9635596856, 0, 22, 'vill- subuddhipur, P.o- Mahadevpur, dist- Nadia, ps- Haringhata,'),
(4, 'Sunny', '543210', 8346012730, 1, 23, 'vill- subuddhipur, P.o- Mahadevpur, dist- Nadia, ps- Haringhata,'),
(5, 'Suraj Das', '254664', 8346012730, 3, 47, 'Kolkata, West Bengal, India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_appoint`
--
ALTER TABLE `service_appoint`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_appoint`
--
ALTER TABLE `service_appoint`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
