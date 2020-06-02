-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 01:26 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u553296776_ag4297`
--

-- --------------------------------------------------------

--
-- Table structure for table `mijnroutes`
--

CREATE TABLE `mijnroutes` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `routeID` int(11) NOT NULL,
  `routename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routedescr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routeimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `startpunt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eindpunt` int(255) NOT NULL,
  `kilom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mijnroutes`
--

INSERT INTO `mijnroutes` (`id`, `userID`, `routeID`, `routename`, `routedescr`, `routeimage`, `cost`, `startpunt`, `eindpunt`, `kilom`) VALUES
(0, 0, 0, 'Empty', '0', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 0, 3),
(2, 6, 5, 'Wandelroute Dollard', 'De Dollard is één van de weinige brakwater getijdengebieden van Europa. Kom wandelen en genieten van de unieke brakwatervegetatie en de vele wadvogels.', 'Dollard_160519-4-315x160.jpg', 80, '0', 0, 0),
(3, 6, 7, 'Wandelroute Bourtange', 'Wandelroute van 8 kilometer door het gevarieerde natuurgebied Bourtange. Wandel door roemruchte historie en sta oog in oog met runderen en Konikpaarden. ', 'Het-Groninger-Landschap-Linie-lr-315x160.jpg', 80, '0', 0, 0),
(4, 6, 1, 'Wandelroute Steenhuis', 'Wandel vanaf het Iwema Steenhuis door het coulissenlandschap van het Zuidelijk Westerkwartier en maak kennis met ‘het andere Groningen’.', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 0, 3),
(5, 7, 1, 'Wandelroute Steenhuis', 'Wandel vanaf het Iwema Steenhuis door het coulissenlandschap van het Zuidelijk Westerkwartier en maak kennis met ‘het andere Groningen’.', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 0, 3),
(6, 8, 1, 'Wandelroute Steenhuis', 'Wandel vanaf het Iwema Steenhuis door het coulissenlandschap van het Zuidelijk Westerkwartier en maak kennis met ‘het andere Groningen’.', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 53, 3),
(7, 7, 1, 'Wandelroute Steenhuis', 'Wandel vanaf het Iwema Steenhuis door het coulissenlandschap van het Zuidelijk Westerkwartier en maak kennis met ‘het andere Groningen’.', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 53, 3),
(8, 8, 1, 'Wandelroute Steenhuis', 'Wandel vanaf het Iwema Steenhuis door het coulissenlandschap van het Zuidelijk Westerkwartier en maak kennis met ‘het andere Groningen’.', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 53, 3),
(9, 8, 2, 'Wandelroute Ennemaborg', 'Wandelroute Ennemaborg De wandelroute bij de Ennemaborg loopt door de barokke parktuin, een donker bos, open velden en langs een natuurplas.', 'Ennemaborgh-005-315x160.jpg', 80, 'Ennemaborgh', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `routename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routedescr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routeimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `startpunt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eindpunt` int(11) NOT NULL,
  `kilom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `routename`, `routedescr`, `routeimage`, `cost`, `startpunt`, `eindpunt`, `kilom`) VALUES
(0, 'Empty', 'Empty', '', 0, '0', 0, 0),
(1, 'Wandelroute Steenhuis', 'Wandel vanaf het Iwema Steenhuis door het coulissenlandschap van het Zuidelijk Westerkwartier en maak kennis met ‘het andere Groningen’.', 'Iwema_Steenhuis.jpg', 80, 'Iwema Steen', 53, 3),
(2, 'Wandelroute Ennemaborg', 'Wandelroute Ennemaborg De wandelroute bij de Ennemaborg loopt door de barokke parktuin, een donker bos, open velden en langs een natuurplas.', 'Ennemaborgh-005-315x160.jpg', 80, 'Ennemaborgh', 0, 2),
(5, 'Wandelroute Dollard', 'De Dollard is één van de weinige brakwater getijdengebieden van Europa. Kom wandelen en genieten van de unieke brakwatervegetatie en de vele wadvogels.', 'Dollard_160519-4-315x160.jpg', 80, '0', 0, 0),
(6, 'Wandelroute Coendersborg', 'De borg zelf stamt uit 1813 – het jaartal staat groot op de voorgevel – en is vernoemd naar Ludoph Coenders, bewoner van de vroegere boerderij, de Fossemaheerd.', 'Het-Groninger-Landschap-Excursie-Coendersborgh-001-315x160.jpg', 80, '0', 0, 0),
(7, 'Wandelroute Bourtange', 'Wandelroute van 8 kilometer door het gevarieerde natuurgebied Bourtange. Wandel door roemruchte historie en sta oog in oog met runderen en Konikpaarden. ', 'Het-Groninger-Landschap-Linie-lr-315x160.jpg', 80, '0', 0, 0),
(8, 'Wandelroute Reitdiep', 'Wandelroute Reitdiep Een ommetje van 2,5 kilometer vanaf Bezoekerscentrum Reitdiep door het oudste cultuurlandschap van Europa: het Reitdiepgebied.', 'Het-Groninger-Landschap-Hogeland-Reitdiep-315x160.jpg', 80, '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `coins` int(11) NOT NULL,
  `current_route` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `naam`, `achternaam`, `coins`, `current_route`) VALUES
(6, 'ahmet', 'ae13@live.nl', '07d715edb696fb5f628f7298e5d7217ed4d2bdfc5347a1c55fee30832267f21d', 'ahmet', 'yavas', 160, 7),
(7, 'esr', 'eline.steenredeker@gmail.com', '682933e1b46d53d5ea9578b1a736fa589fddc4e2bf22245156f430dbbb99da7d', 'e', 'str', 160, 1),
(8, 'niekvondeling', 'niekvondeling@live.nl', 'da835094cbd12553d94e3715c8b7286133e5302ad508a5875607fb0755da7a82', 'niek', 'vondeling', 100, 1),
(9, 'admin', 'e.van.zand@st.hanze.nl', '6e27dae40e4ed26d3f1b1d7ac3def4a70a46442147c86daac67029d96a97f8ee', 'eva', 'aap', 180, 0),
(10, 'coolerooniek', 'niekvondeling@live.nl', '7bca025eff4fb877bea86faac56c909b65c97adfba23b7c1fb6b9772d34b420e', 'niek', 'coole boy', 0, 0),
(11, 'cornékox', 'hoi@live.nl', '7bca025eff4fb877bea86faac56c909b65c97adfba23b7c1fb6b9772d34b420e', 'corné', 'kox', 0, 0),
(12, 'evaaapje', 'xevavanzand@gmail.com', '6e27dae40e4ed26d3f1b1d7ac3def4a70a46442147c86daac67029d96a97f8ee', 'eva', 'aap', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mijnroutes`
--
ALTER TABLE `mijnroutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mijnroutes`
--
ALTER TABLE `mijnroutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
