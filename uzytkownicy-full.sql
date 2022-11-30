-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Lis 2022, 09:52
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `psy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`) VALUES
(0, 'Grzegorz', 'g');
(1, 'Justyna', 'a056c8d05ae9ac6ca180bc991b93b7ffe37563e0'),
(2, 'Ewa', 'c50267b906a652f2142cfab006e215c9f6fdc8a0'),
(3, 'Krzysiek', '637a81ed8e8217bb01c15c67c39b43b0ab4e20f1'),
(4, 'Adam', '8578173555a47d4ea49e697badfda270dee0858f'),
(5, 'Magda', '99ebdbd711b0e1854a6c2e93f759efc2af291fd0'),
(6, 'Werka', '186154712b2d5f6791d85b9a0987b98fa231779c'),
(7, 'Janek', '7823372203bd98aeb10e6f33a6ce7dab12d13423'),
(8, 'Heniek', '425ffc1422dc4f32528bd9fd5af355fdb5c96192'),
(9, 'Ola', '4ae9fa0a8299a828a886c0eb30c930c7cf302a72'),
(10, 'Dawid', 'b3054ff0797ff0b2bbce03ec897fe63e0b6490e0'),
(11, 'Ewelina', '7e240de74fb1ed08fa08d38063f6a6a91462a815'),


--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


--
-- Metadane
--
USE `phpmyadmin`;

--
-- Metadane dla tabeli uzytkownicy
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
