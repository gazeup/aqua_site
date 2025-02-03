-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 03 feb 2025 kl 15:02
-- Serverversion: 10.4.27-MariaDB
-- PHP-version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `guestbook`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `diving_bookings`
--

CREATE TABLE `diving_bookings` (
  `id` int(11) NOT NULL,
  `namn` varchar(100) NOT NULL,
  `epost` varchar(100) NOT NULL,
  `antal` int(11) NOT NULL,
  `datum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumpning av Data i tabell `diving_bookings`
--

INSERT INTO `diving_bookings` (`id`, `namn`, `epost`, `antal`, `datum`) VALUES
(36, 'Adrian', 'wefef@fdgg.df', 2, '651'),
(37, 'Karl', 'sfsf@fsdf.vo', 2, '23156'),
(38, 'Bob', 'dfsdf@dfdsf.sf', 2, '6545645');

-- --------------------------------------------------------

--
-- Tabellstruktur `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `namn` varchar(100) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `imgurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumpning av Data i tabell `employee`
--

INSERT INTO `employee` (`id`, `namn`, `roll`, `imgurl`) VALUES
(1, 'Wilma', 'Ledare för Campus Akvarium', ''),
(2, 'Cecilia', 'Djurskötare', ''),
(3, 'Sofia', 'Dykaransvarig', ''),
(4, 'Johannes', 'Kafe anställd', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `guestbooktable`
--

CREATE TABLE `guestbooktable` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Post` tinytext DEFAULT NULL,
  `PostDate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumpning av Data i tabell `guestbooktable`
--

INSERT INTO `guestbooktable` (`Id`, `Username`, `Post`, `PostDate`) VALUES
(15, 'Alvin', 'Då var det del två', '2023-07-10 20:38:43'),
(18, 'Davod', 'Och det ska ju fungera på skolans nätverk', '2023-07-10 20:39:26'),
(20, 'Berta', 'Tadaaaaa laa!', '2023-07-10 20:44:32');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `diving_bookings`
--
ALTER TABLE `diving_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `guestbooktable`
--
ALTER TABLE `guestbooktable`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `diving_bookings`
--
ALTER TABLE `diving_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT för tabell `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `guestbooktable`
--
ALTER TABLE `guestbooktable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
