-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:3306
-- Vytvořeno: Pát 15. úno 2019, 06:10
-- Verze serveru: 5.7.23
-- Verze PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `songs`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `songs`
--

CREATE TABLE `songs` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(127) NOT NULL,
  `song` varchar(127) NOT NULL,
  `code` varchar(127) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `songs`
--

INSERT INTO `songs` (`id`, `author`, `song`, `code`, `URL`, `added`) VALUES
(1, 'MGMT', 'Kids', 'fe4EK4HSPkI', 'https://www.youtube.com/watch?v=fe4EK4HSPkI', NULL),
(2, 'MGMT', 'Kids', 'fe4EK4HSPkI', 'https://www.youtube.com/watch?v=fe4EK4HSPkI', NULL),
(3, 'Led Zeppelin', 'Stairway to heaven', 'xbhCPt6PZIU', 'https://www.youtube.com/watch?v=xbhCPt6PZIU', NULL),
(4, 'The Naked And Famous', 'Young Blood', '0YuSg4mts9E', 'https://www.youtube.com/watch?v=0YuSg4mts9E', NULL),
(5, 'Led Zeppelin', 'Stairway to heaven', 'xbhCPt6PZIU', 'https://www.youtube.com/watch?v=xbhCPt6PZIU', NULL),
(6, 'Led Zeppelin', 'Stairway to heaven', 'xbhCPt6PZIU', 'https://www.youtube.com/watch?v=xbhCPt6PZIU', NULL),
(7, 'Led Zeppelin', 'Stairway to heaven', 'xbhCPt6PZIU', 'https://www.youtube.com/watch?v=xbhCPt6PZIU', NULL),
(8, 'Armand', 'Wings', 'VnwDxlds8fo&list=RDVnwDxlds8fo&start_radio=1', 'https://www.youtube.com/watch?v=VnwDxlds8fo&list=RDVnwDxlds8fo&start_radio=1', NULL);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
