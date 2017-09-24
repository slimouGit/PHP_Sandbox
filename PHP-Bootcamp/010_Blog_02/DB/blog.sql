-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 31. Mrz 2017 um 17:36
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `blog`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`) VALUES
(1, 'Hallo Welt', 'Ab imaio temquam volorat iumquae molupta tquibus nis conseca borisse simus quassiti tem ilit et quo veria aut poratur epudit, od modicilique ea verrore hendis sitatur, officid eum quatinu lliatus intoribus ipit eatemollitia nonet odit labo. Quis ad erio molores magnis et latemporro te volenis nullent hit aut vere pro totam voluptatem etur? Uptatis quamus necae quunt, etus etus, que sam et hari quiatem illeseque nost, qui sime sum fuga. Ciet modiore pudaecepta sequis moluptaero es debit officia temolor ioriori orendio blaboreped quia con con plibusant aligenit dollo iur, nonseque nostemo teceatin porem nim volorest lab inus, si niendis ab in rercidellut quiam imolore nobit, voluptatur?\r\nTe volorem fuga. Nem audit, quam voluptasimos sinis dolupta quiame et quundiassunt ut ilignis ut ommodip saperchilla esequam alit fugit eiusae niae pre evelit quunt eveliquam verument evel idelit volores es cusae diciume sum consed ut alit, corum quis a persper ibeaquo ilit adigenis magnis ad essin con ex et fugitinum quid mo vent.\r\n'),
(2, 'Test123', 'Emissions de CO2 liées à la fourniture de carburant et/ou d’électricité en g/km\r\n'),
(3, 'Hallo', 'qwrqwrewr\r\n\r\nqweqweqweqwe\r\nqw\r\n\r\n\r\nqweqweew'),
(4, 'Hallo Welt', 'Tach auch');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
