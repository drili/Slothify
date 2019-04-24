-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 24. 04 2019 kl. 23:12:13
-- Serverversion: 10.1.37-MariaDB
-- PHP-version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slothify`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'DrilonBraha', 'Drilon', 'Braha', 'Drilib@hotmail.com', '4297f44b13955235245b2497399d7a93', '2019-04-23 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(2, 'Donkey', 'Donkey', 'Kong', 'Donkeykong@yahoo.com', '4297f44b13955235245b2497399d7a93', '2019-04-23 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(3, 'DrilonBraha2', 'Tommy', 'Bobsen', 'Drilib2@hotmail.com', '4297f44b13955235245b2497399d7a93', '2019-04-23 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(4, 'DrilonBraha3', 'Drili', 'Br', 'Aaskdjad@hotmail.com', '4297f44b13955235245b2497399d7a93', '2019-04-24 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(5, 'Barty', 'Bart', 'Simp', 'Dasdasd@hotmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '2019-04-24 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(6, 'BartyNew1', 'Asd', 'Asdd', 'Aksdjka@hotmail.com', '4297f44b13955235245b2497399d7a93', '2019-04-24 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(7, 'BartNew2', 'Bart', 'New', 'Kasd@hotmail.com', '31b69a7494a0eec4ac544fd648c9d604', '2019-04-24 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(8, 'jashasd', 'Aslkdja', 'Asjdk', 'Asasd@hotmail.com', '4297f44b13955235245b2497399d7a93', '2019-04-24 00:00:00', 'assets/images/profile-pics/profiletest.jpg'),
(9, 'asjdlk', 'Lajsldkjkl', 'Askd', 'Kasd2@hotmail.com', '4f3d0989743daf918d6d7d26f6821ecc', '2019-04-24 00:00:00', 'assets/images/profile-pics/profiletest.jpg');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
