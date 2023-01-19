-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 17. 19:51
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `flashcardsystem`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `theme`
--
-- Hiba a(z) flashcardsystem.theme tábla szerkezetének olvasásakor: #1932 - Table 'flashcardsystem.theme' doesn't exist in engine
-- Hiba a(z) flashcardsystem.theme tábla adatainak olvasásakor: #1064 - A Szintaktikai hiba a 'FROM `flashcardsystem`.`theme`'-hez kozeli a 1 sorban

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--
-- Hiba a(z) flashcardsystem.user tábla szerkezetének olvasásakor: #1932 - Table 'flashcardsystem.user' doesn't exist in engine
-- Hiba a(z) flashcardsystem.user tábla adatainak olvasásakor: #1064 - A Szintaktikai hiba a 'FROM `flashcardsystem`.`user`'-hez kozeli a 1 sorban

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `word`
--
-- Hiba a(z) flashcardsystem.word tábla szerkezetének olvasásakor: #1932 - Table 'flashcardsystem.word' doesn't exist in engine
-- Hiba a(z) flashcardsystem.word tábla adatainak olvasásakor: #1064 - A Szintaktikai hiba a 'FROM `flashcardsystem`.`word`'-hez kozeli a 1 sorban
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
