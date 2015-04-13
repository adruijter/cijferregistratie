-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 13 apr 2015 om 13:57
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `cijferregistratie`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `toeleverendescholen`
--

CREATE TABLE IF NOT EXISTS `toeleverendescholen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `toeleverendeschool` varchar(200) NOT NULL,
  `plaats` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Gegevens worden geëxporteerd voor tabel `toeleverendescholen`
--

INSERT INTO `toeleverendescholen` (`id`, `toeleverendeschool`, `plaats`) VALUES
(5, 'Heerenlandencollege', 'Leerdam'),
(6, 'Gerrit Rietveldcollege', 'Utrecht'),
(7, 'Het Gilde Vakcollege Techniek', 'Gorinchem'),
(8, 'Gomarus', 'Gorinchem'),
(9, 'Groenhorstcollege', 'Maartensdijk'),
(10, 'ONS', 'Bilthoven'),
(11, 'Goudse Waarden', 'Gouda'),
(12, 'Rientjes Mavo', 'Maarssenbroek'),
(13, 'Minkema College', 'Woerden'),
(14, 'Oosterlichtcollege', 'Nieuwegein'),
(15, 'Calscollege', 'IJsselstein'),
(16, 'Anna van Rijn College', 'Nieuwegein'),
(17, 'Via Nova College', 'Utrecht'),
(18, 'Het Houtens', 'Houten'),
(19, 'Schoonhovens college', 'Schoonhoven'),
(20, 'Beukenrode Onderwijs', 'Doorn'),
(21, 'Oosterlichtcollege', 'Vianen'),
(22, 'Driestar college', 'Gouda'),
(23, 'Globe College', 'Utrecht'),
(24, 'CSG Broecklandcollege', 'Breukelen'),
(25, 'Willem de Zwijgercollege', 'Schoonhoven'),
(26, 'Lek en Linge', 'Culemborg'),
(27, 'Werkplaats Kindergemeenschap', 'Bilthoven'),
(28, 'Kalsbeek College', 'Woerden'),
(29, 'Amadeus College', 'Vleuten'),
(30, 'Koningin Wilhelmina College', 'Culemborg'),
(31, 'De Breul', 'Zeist'),
(32, 'Wellantcollege Montfoort', 'Montfoort'),
(33, 'Trajectum College', 'Utrecht'),
(36, 'Jac. P. Thijsse College', 'Castricum');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(100) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`) VALUES
(1, 'Bert', 'van', 'Wagendorp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
