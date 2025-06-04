-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 04, 2025 alle 16:13
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remira`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `brainrot`
--

CREATE TABLE `brainrot` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `brainrot`
--

INSERT INTO `brainrot` (`id`, `name`, `description`) VALUES
(1, 'Tralalero Tralala', 'Trallallero Trallalla, damn god and damn Allah. I was with my fucking shit kid playing Fortnite, when at one point arrives my grandma, to tell us that the piece of shit Burger invited us to dinner to eat dick mash.'),
(2, 'Tung Tung Tung Sahur', 'Tung tung tung tung sahur. Scary anomaly that only comes out at Suhoor. it is said that if someone is called for Suhoor three times and does not answer, then this creature comes to your house. It\'s very scary. Tung tung usually makes a sound like a typical slit drum. Share it with your friends who have trouble waking up at Suhoor.'),
(3, 'Bombardiro Crocodilo', 'Bombardi Crocodilo, a dog -like crocodile that blows bombs on the ITIS MEUCCI school. I distrust allah and love bombs.\n\nI live with your mother\'s soul. If you have translated all of these words, you are a dog. Don\'t ruin the joke. This year.'),
(4, 'Brr Brr Patapim', 'Brr Brr Patapim. My hat is all slim!\n\nThere was a very unusual being in a deep and mysterious forest. The roots were intertwined and the legs were twisted, and they had a thin hand and stir arm. His nose was as long as Proschuto , a little like a dog coin , and looked a bit like a bush. His name is Patta Pim, is it weird? He said in Italian, but it was a bit strange.'),
(5, 'Lirili Larila', 'Lirily Larila, an elephant walking around the desert. The shell and the clock have a clock.\r\n\r\nCactus thorns remind me of a terrible memory.\r\n\r\nUncle Ramon came in a blue hot air balloon, \"What are you doing here? I like Wi -Fi too, how are you?\" He speaks.\r\n\r\nI couldn\'t breathe: \"I don\'t understand how cactuses wearing sandals can wear clothes!'),
(6, 'Cappuccino Assassino', 'Kapu Kapu Kapuccino, Asashino Asazini! The assassin cappuccino escapes between the enemies through the night. Be careful, those who don\'t like coffee. If you don\'t drink cappuccino in the morning, I recommend you not encounter him.');

-- --------------------------------------------------------

--
-- Struttura della tabella `brainrots_apikeys`
--

CREATE TABLE `brainrots_apikeys` (
  `id` int(11) NOT NULL,
  `apiKey` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `brainrots_apikeys`
--

INSERT INTO `brainrots_apikeys` (`id`, `apiKey`) VALUES
(1, 'kQM9J4VvmkOqiI65gNKf2d4Lb5JDqz5J');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `brainrot`
--
ALTER TABLE `brainrot`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `brainrots_apikeys`
--
ALTER TABLE `brainrots_apikeys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `brainrot`
--
ALTER TABLE `brainrot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `brainrots_apikeys`
--
ALTER TABLE `brainrots_apikeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
