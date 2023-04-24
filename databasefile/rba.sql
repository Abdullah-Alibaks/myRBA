-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2023 at 11:39 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rba`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebreken`
--

CREATE TABLE `gebreken` (
  `id` int(11) NOT NULL,
  `projecten_id` int(11) NOT NULL,
  `gebreek_info` varchar(200) NOT NULL,
  `gebreek_foto` longblob NOT NULL,
  `gebreek_kosten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebreken`
--

INSERT INTO `gebreken` (`id`, `projecten_id`, `gebreek_info`, `gebreek_foto`, `gebreek_kosten`) VALUES
(1, 2, 'raam kapot', 0x7079726f2d616a61782d76616c656e6369612d373536783432322e6a7067, 299),
(9, 1, 'dffsd', 0x313932307831343430612e6a7067, 122),
(10, 2, 'dakkapen', 0x3537333531333531363533352e6a7067, 8000),
(11, 3, 'test', 0x7770343139383935362e6a706567, 1234566),
(12, 2, 'kozijnen verrot', 0x6874747073205f7777772e6f6e656d6f72657468696e672e6e6c5f77702d636f6e74656e745f75706c6f6164735f323032315f30365f694f532d31352d76616c742d746567656e2e6a7067, 200);

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `id` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `telefoon` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`id`, `naam`, `telefoon`) VALUES
(2, 'Abdullah', '0634113144'),
(3, 'Angeli', '0345678912'),
(4, 'niek', '453535345'),
(5, 'Hans', '06454432232');

-- --------------------------------------------------------

--
-- Table structure for table `projecten`
--

CREATE TABLE `projecten` (
  `id` int(11) NOT NULL,
  `klanten_id` int(11) NOT NULL,
  `typegebouw` enum('Vrijstaand','Flat','Rijtjeshuis','Appartement') NOT NULL,
  `grootte` int(30) NOT NULL,
  `adres` varchar(200) NOT NULL,
  `woonplaats` varchar(200) NOT NULL,
  `status` enum('Controle','Offerte','Afgerond','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projecten`
--

INSERT INTO `projecten` (`id`, `klanten_id`, `typegebouw`, `grootte`, `adres`, `woonplaats`, `status`) VALUES
(1, 2, 'Flat', 120, 'straat 1', 'Amsterdam', 'Afgerond'),
(2, 3, 'Flat', 1200, 'singel 1', 'Amsterdam', 'Offerte'),
(3, 4, 'Vrijstaand', 90, 'Amsterdamsestraat 5', 'Diemen', 'Offerte'),
(4, 5, 'Appartement', 90, 'ajaxlaan 1312', 'Amsterdam-Duivendrecht', 'Controle');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `email`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'PTB2z2KOFcWDAE_1Oou6qjIGmhgDykHo', '$2y$13$ENvbA/rvBJtQdiLqFxzszO.yP9BlfGXdMyh55E13DF8v60ckLwoG.', 'appieafca@gmail.com', '2023-04-13 07:46:57', '2023-04-13 07:46:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebreken`
--
ALTER TABLE `gebreken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebreken`
--
ALTER TABLE `gebreken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projecten`
--
ALTER TABLE `projecten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
