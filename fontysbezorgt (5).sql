-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 nov 2023 om 13:12
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fontysbezorgt`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

CREATE TABLE `bestelling` (
  `Bestelnr` int(11) NOT NULL,
  `Klant_Studentnummer` int(11) NOT NULL,
  `Gebouw_Gebouwnaam` varchar(10) NOT NULL,
  `Lokaal_Lokaal` varchar(11) NOT NULL,
  `Tafel_Tafelnummer` int(11) NOT NULL,
  `robot_robotnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bestelling`
--

INSERT INTO `bestelling` (`Bestelnr`, `Klant_Studentnummer`, `Gebouw_Gebouwnaam`, `Lokaal_Lokaal`, `Tafel_Tafelnummer`, `robot_robotnr`) VALUES
(11, 533302, 'p1', '1.1', 1, 20),
(12, 533302, 'p1', '1.1', 2, 8),
(13, 533306, 'p2', '1.1', 1, 11);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebouw`
--

CREATE TABLE `gebouw` (
  `Gebouwnaam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebouw`
--

INSERT INTO `gebouw` (`Gebouwnaam`) VALUES
('p1'),
('p2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `Studentnummer` int(11) NOT NULL,
  `Naam` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lokaal`
--

CREATE TABLE `lokaal` (
  `Lokaal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `lokaal`
--

INSERT INTO `lokaal` (`Lokaal`) VALUES
('1.1'),
('1.2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `Product` varchar(50) NOT NULL,
  `Prijs` decimal(5,2) NOT NULL,
  `Omschrijving` text NOT NULL,
  `Categorie` enum('broodjes','drankjes','fruit','snacks','snoep') NOT NULL,
  `Bestelling_Bestelnr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`Product`, `Prijs`, `Omschrijving`, `Categorie`, `Bestelling_Bestelnr`) VALUES
('1', 1.25, 'Broodje zalm', 'broodjes', NULL),
('2', 1.45, 'Redbull', 'drankjes', NULL),
('3', 1.58, 'Zakje snoep mix', 'snacks', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `robot`
--

CREATE TABLE `robot` (
  `robotnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tafel`
--

CREATE TABLE `tafel` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tafel`
--

INSERT INTO `tafel` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Stand-in structuur voor view `view`
-- (Zie onder voor de actuele view)
--
CREATE TABLE `view` (
`Bestelnr` int(11)
,`Klant_Studentnummer` int(11)
,`Gebouw_Gebouwnaam` varchar(10)
,`robot_robotnr` int(11)
);

-- --------------------------------------------------------

--
-- Structuur voor de view `view`
--
DROP TABLE IF EXISTS `view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view`  AS SELECT `bestelling`.`Bestelnr` AS `Bestelnr`, `bestelling`.`Klant_Studentnummer` AS `Klant_Studentnummer`, `bestelling`.`Gebouw_Gebouwnaam` AS `Gebouw_Gebouwnaam`, `bestelling`.`robot_robotnr` AS `robot_robotnr` FROM `bestelling` ;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`Bestelnr`) USING BTREE,
  ADD KEY `fk_Bestelling_Gebouw1_idx` (`Gebouw_Gebouwnaam`),
  ADD KEY `fk_Bestelling_robot1_idx` (`robot_robotnr`),
  ADD KEY `fk_Bestelling_Lokaal1_idx` (`Lokaal_Lokaal`),
  ADD KEY `fk_Bestelling_Tafel1_idx` (`Tafel_Tafelnummer`);

--
-- Indexen voor tabel `gebouw`
--
ALTER TABLE `gebouw`
  ADD PRIMARY KEY (`Gebouwnaam`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`Studentnummer`);

--
-- Indexen voor tabel `lokaal`
--
ALTER TABLE `lokaal`
  ADD PRIMARY KEY (`Lokaal`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product`),
  ADD KEY `fk_Product_Bestelling1_idx` (`Bestelling_Bestelnr`);

--
-- Indexen voor tabel `robot`
--
ALTER TABLE `robot`
  ADD PRIMARY KEY (`robotnr`);

--
-- Indexen voor tabel `tafel`
--
ALTER TABLE `tafel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `Bestelnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `Studentnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502542;

--
-- AUTO_INCREMENT voor een tabel `robot`
--
ALTER TABLE `robot`
  MODIFY `robotnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `tafel`
--
ALTER TABLE `tafel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
