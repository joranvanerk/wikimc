-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 05 feb 2021 om 13:11
-- Serverversie: 5.7.30
-- PHP-versie: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samensoc_wiki`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `bericht` varchar(500) NOT NULL,
  `herken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `naam`, `bericht`, `herken`) VALUES
(16, 'Turan', 'Nice website guys!', 0),
(17, 'Joran', 'Handige en snelle informatie!', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teksten`
--

CREATE TABLE `teksten` (
  `id` int(11) NOT NULL,
  `titel` varchar(500) NOT NULL,
  `tekst` varchar(5000) NOT NULL,
  `plaatje` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `teksten`
--

INSERT INTO `teksten` (`id`, `titel`, `tekst`, `plaatje`) VALUES
(0, 'Welkom bij Minecraft WIKI+', 'Minecraft is een spel waar je blokken plaats het spel heeft 3 game modes: Survival, Creative en Adventure mode.Onze andere paginaâ€™s leggen uit wat Survival en Creative is, en Adventure is survival maar je kan geen blokken breken dat is de enige verschil.', 'https://24.media.tumblr.com/ae679a9249d5d0dd2415e5a5a3bc5bdb/tumblr_mgvrg9Dgdt1s2r8omo1_250.gif'),
(1, 'De gameplay van MineCraft', 'Minecraft heeft geen einde het hele doel van het spel is om te bouwen, minen en om te overleven. <br> Je kan overal blokken plaatsen om iets te bouwen of je kan de eindbaas van minecraft proberen te verslaan. <br>Het doel is om ervan te genieten als je overleven kan je survival spelen als je alleen wilt bouwen is creative iets voor jouw het spel kan gespeelt worden zoals jij het wilt. <br>Het is jouw keuze het is jouw wereld maak ervan wat jij leuk vindt.', 'https://vignette2.wikia.nocookie.net/minecraftpocketedition/images/5/55/Enchanted_Book.gif/revision/latest?cb=20170625192235'),
(2, 'Populairste gamemode, dat is survival!', 'Minecraft survival heeft geen doel perse je hebt een eindbaas maar dat is niet echt je doel geniet je zelf terwijl je overleeft, mined en bouwt. Blok voor blok bouw je droom huis of bouw een machine het is jouw keuze. Zoek je een uitdaging? Kies dan de hardcore mode het is hetzelfde als survival maar je krijgt meer damage en je hebt maar een leven.', 'https://vignette.wikia.nocookie.net/minecraft360/images/f/fd/Sword_Anim.gif/revision/latest?cb=20140508122603'),
(3, 'Dit is de creative titel', 'CREATIVVEEE TEKST!', 'https://www.picgifs.com/games-gifs/games-gifs/minecraft/picgifs-minecraft-394102.gif');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'admin@samensocial.nl', 'admin', '$2y$10$x91X2lB2BPVsBCZTiUjG.uS7Vq5z.zsDcthDy6TrKXUUDbEowZXFS');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `websitetekst`
--

CREATE TABLE `websitetekst` (
  `gameplay` varchar(5000) NOT NULL,
  `survival` varchar(5000) NOT NULL,
  `creative` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `websitetekst`
--

INSERT INTO `websitetekst` (`gameplay`, `survival`, `creative`) VALUES
('', '', ''),
('Test dit is een test', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
