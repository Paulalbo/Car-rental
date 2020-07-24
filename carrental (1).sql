-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jul 2020 um 14:44
-- Server-Version: 10.1.39-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `carrental`
--
CREATE DATABASE IF NOT EXISTS `carrental` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `carrental`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cardetails`
--

CREATE TABLE `cardetails` (
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `available` int(11) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cardetails`
--

INSERT INTO `cardetails` (`brand`, `model`, `price`, `location`, `available`, `img`, `id`, `type`) VALUES
('VW', 'Polo', 25, 'Vienna Prater', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/vw-polo-5d-weiss-2020.png', 1, 1),
('VW', 'Passat', 30, 'Vienna Millennium Tower', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/vw-passat-4d-schwarz-2018.png', 2, 1),
('Maserati', 'Ghibli', 50, 'Vienna Westbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/maserati-ghibli-4d-grau-2018.png', 3, 1),
('Mercedes', 'S-Klasse', 55, 'Vienna Hauptbahnhof', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/mb-s-klasse-4d-schwarz-2017.png', 4, 1),
('Audi', 'A4', 35, 'Vienna Airport', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/audi-a4-4d-blau-2019.png', 5, 1),
('BMW', 'I3', 25, 'Vienna Westbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/bmw-i3-3d-blau-schwarz-2017-elektro.png', 6, 1),
('Cadillac', 'CT6', 33, 'Vienna Prater', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/cadillac-ct6-4d-grau-2019.png', 8, 1),
('Tesla', 'Model 3', 40, 'Vienna Hauptbahnhof', 1, 'https://sx-content-labs.sixt.io/Media/8fleet-1050x600/tesla-3-4d-weiss-2018-elektro.png', 35, 1),
('Ford', 'Mustang Cabrio', 45, 'Vienna Prater', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/ford-mustang-cabrio-2d-rot-geschl-2016.png', 36, 1),
('Mini', 'Cabrio', 35, 'Vienna Airport', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/mini-cooper-cabrio-2d-weiss-offen-2018.png', 37, 1),
('Citroen', 'C1', 20, 'Vienna Hauptbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/citroen-c1-5d-silber-rot-2014.png', 38, 1),
('Opel', 'Corsa', 25, 'Vienna Westbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/opel-corsa-3d-rot-2015.png', 39, 1),
('Jaguar', 'F-Pace', 60, 'Vienna Airport', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/jaguar-f-pace-5d-weiss-2016.png', 41, 2),
('Mercedes', 'G500', 60, 'Vienna Westbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/mb-g-klasse-5d-grau-2018.png', 42, 2),
('Jeep', 'Grand Cherokee', 38, 'Vienna Hauptbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/jeep-grand-cherokee-srt-5d-rot-2014.png', 43, 2),
('Maserati', 'Levante', 75, 'Vienna Hauptbahnhof', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/maserati-levante-5d-schwarz-2018.png', 44, 2),
('VW ', 'Tiguan', 35, 'Vienna Millennium Tower', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/vw-tiguan-5d-grau-2019.png', 45, 2),
('BMW', 'X4 30', 47, 'Vienna Westbahnhof', 0, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/bmw-x4-m40i-5d-schwarz-2019.png', 46, 2),
('Alfa Romeo', 'Stelvio', 40, 'Vienna Westbahnhof', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/alfa-romeo-stelvio-5d-rot-2019.png', 47, 2),
('Range Rover', 'Velar', 48, 'Vienna Airport', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/land-rover-range-rover-velar-5d-silber-2018.png', 48, 2),
('Peugeot', '5008', 41, 'Vienna Millennium Tower', 1, 'https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/peugeot-5008-5d-blau-2017.png', 50, 2),
('KTM', '125', 42, 'Vienna Westbahnhof', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_125-DUKE-2017-RE_%23SALL_%23AEPI_%23V1.png', 51, 3),
('KTM', '1290', 33, 'Vienna Millennium Tower', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_1290-sdgt-2019-black-90-re_%23SALL_%23AEPI_%23V1.png', 52, 3),
('KTM', '250', 40, 'Vienna Westbahnhof', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_250-EXC-TPI-MY21_%23SALL_%23AEPI_%23V1.png', 53, 3),
('KTM', '390\r\n', 35, 'Vienna Airport', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_390ADVENTURE-MY20-White-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V1.png', 54, 3),
('KTM', '450 SX-F', 20, 'Vienna Hauptbahnhof', 0, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_450-SX-F-MY21_%23SALL_%23AEPI_%23V1.png', 55, 3),
('KTM', '690 SMC R', 25, 'Vienna Hauptbahnhof', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_690-smcr-2019-90-re_%23SALL_%23AEPI_%23V1.png', 56, 3),
('KTM', '790 DUKE L', 38, 'Vienna Westbahnhof', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_790DUKE-MY20-Black-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V1.png', 57, 3),
('KTM', 'RC 390', 50, 'Vienna Millennium Tower', 1, 'https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_RC390-MY20-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V2.png', 58, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(1, 'Pauli', 'admin@gmx.at', '34c139d38990c41bc42bdb958c8b914479360ac73f580844e5377ada2174ad27', 'admin'),
(2, 'Paul', 'user@gmx.at', '34c139d38990c41bc42bdb958c8b914479360ac73f580844e5377ada2174ad27', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
