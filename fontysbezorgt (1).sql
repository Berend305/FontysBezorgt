-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 nov 2023 om 15:42
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
  `robot_robotnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bestelling`
--

INSERT INTO `bestelling` (`Bestelnr`, `Klant_Studentnummer`, `Gebouw_Gebouwnaam`, `robot_robotnr`) VALUES
(1, 502539, '8', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE `categorie` (
  `Categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`Categorie`) VALUES
('Broodjes');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebouw`
--

CREATE TABLE `gebouw` (
  `Gebouwnaam` varchar(10) NOT NULL,
  `lokaalnr` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebouw`
--

INSERT INTO `gebouw` (`Gebouwnaam`, `lokaalnr`) VALUES
('8', '1.41');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `Studentnummer` int(11) NOT NULL,
  `Naam` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`Studentnummer`, `Naam`) VALUES
(502539, 'Sven van Schie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lokaal`
--

CREATE TABLE `lokaal` (
  `Lokaal` decimal(4,2) NOT NULL,
  `Gebouw_Gebouwnaam` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `lokaal`
--

INSERT INTO `lokaal` (`Lokaal`, `Gebouw_Gebouwnaam`) VALUES
(1.41, '8');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `Product` varchar(50) NOT NULL,
  `Prijs` decimal(5,2) NOT NULL,
  `Omschrijving` text NOT NULL,
  `Categorie_Categorie` varchar(100) NOT NULL,
  `Bestelling_Bestelnr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`Product`, `Prijs`, `Omschrijving`, `Categorie_Categorie`, `Bestelling_Bestelnr`) VALUES
('Broodje bal', 2.00, 'Broodje bal', 'Broodjes', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `robot`
--

CREATE TABLE `robot` (
  `robotnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `robot`
--

INSERT INTO `robot` (`robotnr`) VALUES
(1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tafel`
--

CREATE TABLE `tafel` (
  `id` int(11) NOT NULL,
  `Tafelcol` varchar(45) NOT NULL,
  `Lokaal_Lokaal` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tafel`
--

INSERT INTO `tafel` (`id`, `Tafelcol`, `Lokaal_Lokaal`) VALUES
(6, '1.41', 1.41);

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
  ADD PRIMARY KEY (`Bestelnr`,`Klant_Studentnummer`),
  ADD KEY `fk_Bestelling_Klant1_idx` (`Klant_Studentnummer`),
  ADD KEY `fk_Bestelling_Gebouw1_idx` (`Gebouw_Gebouwnaam`),
  ADD KEY `fk_Bestelling_robot1_idx` (`robot_robotnr`);

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Categorie`);

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
  ADD PRIMARY KEY (`Lokaal`),
  ADD KEY `fk_Lokaal_Gebouw1_idx` (`Gebouw_Gebouwnaam`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product`),
  ADD KEY `fk_Product_Categorie_idx` (`Categorie_Categorie`),
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Tafel_Lokaal1_idx` (`Lokaal_Lokaal`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `Bestelnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `Studentnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502540;

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

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `fk_Bestelling_Gebouw1` FOREIGN KEY (`Gebouw_Gebouwnaam`) REFERENCES `gebouw` (`Gebouwnaam`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bestelling_Klant1` FOREIGN KEY (`Klant_Studentnummer`) REFERENCES `klant` (`Studentnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bestelling_robot1` FOREIGN KEY (`robot_robotnr`) REFERENCES `robot` (`robotnr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `lokaal`
--
ALTER TABLE `lokaal`
  ADD CONSTRAINT `fk_Lokaal_Gebouw1` FOREIGN KEY (`Gebouw_Gebouwnaam`) REFERENCES `gebouw` (`Gebouwnaam`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_Product_Bestelling1` FOREIGN KEY (`Bestelling_Bestelnr`) REFERENCES `bestelling` (`Bestelnr`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Product_Categorie` FOREIGN KEY (`Categorie_Categorie`) REFERENCES `categorie` (`Categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `tafel`
--
ALTER TABLE `tafel`
  ADD CONSTRAINT `fk_Tafel_Lokaal1` FOREIGN KEY (`Lokaal_Lokaal`) REFERENCES `lokaal` (`Lokaal`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
