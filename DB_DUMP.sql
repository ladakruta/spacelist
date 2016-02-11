-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vygenerováno: Čtv 11. úno 2016, 08:54
-- Verze serveru: 5.7.10-log
-- Verze PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `kosmonauti`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `spaceman`
--

CREATE TABLE IF NOT EXISTS `spaceman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf16_czech_ci NOT NULL,
  `surname` varchar(50) COLLATE utf16_czech_ci NOT NULL,
  `birthdate` date NOT NULL,
  `superskill` varchar(50) COLLATE utf16_czech_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `superskill` (`superskill`),
  KEY `superskill_2` (`superskill`),
  KEY `superskill_3` (`superskill`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_czech_ci AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `spaceman`
--

INSERT INTO `spaceman` (`id`, `name`, `surname`, `birthdate`, `superskill`) VALUES
(1, 'Laika', '', '1950-01-01', '1'),
(6, 'Jurij', 'Gagarin', '1934-03-09', 'Spaceship pilot');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
