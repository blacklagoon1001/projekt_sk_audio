-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Lut 2019, 18:26
-- Wersja serwera: 10.1.34-MariaDB
-- Wersja PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `postal_code` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `address`, `place`, `postal_code`, `phone`, `email`) VALUES
(1, 'Urząd Miejski w Zakliczynie', 'Rynek 32', 'Zakliczyn', '32-840', '14 632 64 60', 'zakliczyn@zakliczyn.pl'),
(2, 'Urząd Miejski w Grybowie', 'Rynek 12', 'Grybów', '33-300', '18 445 02 02', 'umgrybow@pro.onet.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(300) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `party_start` datetime NOT NULL,
  `party_end` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`order_id`, `client_id`, `order_date`, `name`, `description`, `party_start`, `party_end`, `status`) VALUES
(1, 2, '2019-01-01 09:00:00', 'Test1', '', '2019-02-01 16:00:00', '2019-02-05 23:00:00', 1),
(4, 1, '2019-02-05 22:48:55', 'Test2', 'Testowy opis.', '2019-02-02 00:00:00', '2019-02-03 00:00:00', 1),
(5, 2, '2019-02-05 22:50:44', 'Test3', 'Testowy opis 1.', '2019-02-09 00:00:00', '2019-02-10 00:01:00', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `quantity` int(3) NOT NULL,
  `available` int(3) NOT NULL,
  `description` varchar(512) CHARACTER SET utf8mb4 NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `name`, `quantity`, `available`, `description`, `category_id`) VALUES
(1, 'POL-AUDIO SLA 112', 16, 16, 'Estradowy system liniowy zbudowany w oparciu o przetworniki firmy BMS oraz 18SOUND.', 8),
(2, 'Rama mocowania do SLA112', 4, 4, 'Rama do mocowania modułów głośników podczas podwieszania lub stackowania.', 8),
(3, 'POL-AUDIO TP118', 18, 18, 'Kolumny basowe 700W.', 10),
(4, 'Crest Audio Ca 6 ', 3, 3, 'Końcówka mocy Crest Audio Ca 6.', 10),
(5, 'Crest Audio Ca 12', 3, 3, 'Końcówka mocy Crest Audio Ca 12.', 10),
(6, 'Crest Audio MT 1500', 2, 2, 'Końcówka mocy Crest Audio MT 1500.', 10),
(7, 'Lab FP 10000 Q', 1, 1, 'Końcówka mocy Lab FP 10000 Q.', 10),
(9, 'Behringer X32', 2, 2, 'Mikser cyfrowy Behringer X32.', 9),
(10, 'Zeck Pt 7', 2, 2, 'Końcówka mocy Zeck Pt 7.', 10),
(11, 'EV Q66', 1, 1, 'Końcówka mocy EV Q66.', 10),
(12, 'Beam 7R - pryzma 8', 8, 8, 'Ruchome głowy Beam 7R z 8-krotną pryzmą.', 2),
(13, 'Beam 7R - pryzma 16', 6, 6, 'Ruchome głowy Beam 7R z 16-krotną pryzmą.', 2),
(14, 'MAC 250', 8, 8, 'Ruchome głowy MAC 250. ', 2),
(15, 'Wash LED 36x18W', 8, 8, 'Ruchome głowy wash LED.', 2),
(16, 'Par LED 9x10W Colorstage', 11, 11, 'Par LED 9x10W Colorstage.', 3),
(17, 'Par LED 9x10W SkyWay', 5, 5, 'Par LED 9x10W SkyWay.', 3),
(18, 'Reflektor prowadzący', 2, 2, 'Reflektor prowadzący.', 5),
(19, 'Doświetlacze 500W', 4, 4, 'Doświetlacze 500W.', 5),
(20, 'Doświetlacze 1000W', 6, 6, 'Doświetlacze 1000W.', 5),
(21, 'Blindery 1x2', 2, 2, 'Blindery 1x2.', 5),
(22, 'Blindery 2x2', 7, 7, 'Blindery 2x2.', 5),
(23, 'Bar LED', 20, 20, 'Bar LED', 6),
(24, 'Splitter audio /separowany/ 32 x', 1, 1, 'Splitter audio /separowany/ 32 x.', 17),
(25, 'Monitory JBL SRX 712 M', 6, 6, 'Monitory JBL SRX 712 M.', 16),
(26, 'Monitory pasywne 4Acoustic 350W', 4, 4, 'Monitory pasywne 4Acoustic 350W.', 16),
(27, 'RCF ART. 322', 2, 2, 'RCF ART. 322.', 16),
(28, 'EV ZLV 12/1 ', 2, 2, 'EV ZLV 12/1.', 16),
(29, 'Dr. fill/Side fill 2×15+2″ ', 2, 2, 'Dr. fill/Side fill 2×15+2″. ', 16),
(30, 'Mikrofon bezprzewodowy Sennheiser EW G2', 4, 4, 'Mikrofon bezprzewodowy Sennheiser EW G2.', 11),
(31, 'Mikrofon bezprzewodowy Shure SLX SM ', 4, 4, 'Mikrofon bezprzewodowy Shure SLX SM.', 11),
(32, 'Mikrofon bezprzewodowy Sennheiser freePort ', 2, 2, 'Mikrofon bezprzewodowy Sennheiser freePort.', 11),
(33, 'Mikrofon bezprzewodowy EV Re-2', 2, 2, 'Mikrofon bezprzewodowy EV Re-2.', 11),
(34, 'Mikrofon nagłowny AKG', 2, 2, 'Mikrofon nagłowny AKG.', 12),
(35, 'Mikrofon nagłowny Sennheiser', 3, 3, 'Mikrofon nagłowny Sennheiser.', 12),
(36, 'Mikrofon dynamiczny Shure beta A 58', 6, 6, 'Mikrofon dynamiczny Shure beta A 58.', 13),
(37, 'Mikrofon dynamiczny Shure SM 58', 6, 6, 'Mikrofon dynamiczny Shure SM 58.', 13),
(38, 'Mikrofon dynamiczny Shure SM 57', 6, 6, 'Mikrofon dynamiczny Shure SM 57.', 13),
(39, 'Mikrofon dynamiczny Sennheiser E604 ', 4, 4, 'Mikrofon dynamiczny Sennheiser E604.', 13),
(40, 'Mikrofon dynamiczny Sennheiser E609 ', 2, 2, 'Mikrofon dynamiczny Sennheiser E609.', 13),
(41, 'Mikrofon dynamiczny Shure Beta 52 A', 1, 1, 'Mikrofon dynamiczny Shure Beta 52 A.', 13),
(42, 'Mikrofon dynamiczny AKG D112', 1, 1, 'Mikrofon dynamiczny AKG D112.', 13),
(43, 'Mikrofon dynamiczny Audix D6', 1, 1, 'Mikrofon dynamiczny Audix D6.', 13),
(44, 'Mikrofon dynamiczny Audix i5', 2, 2, 'Mikrofon dynamiczny Audix i5.', 13),
(45, 'Mikrofon dynamiczny Audio Technica Pro 25 ', 1, 1, 'Mikrofon dynamiczny Audio Technica Pro 25.', 13),
(46, 'Mikrofon pojemnościowy Shure BG 4.1', 2, 2, 'Mikrofon pojemnościowy Shure BG 4.1.', 13),
(47, 'Mikrofon pojemnościowy Audio Technica AT-2031', 2, 2, 'Mikrofon pojemnościowy Audio Technica AT-2031.', 13),
(48, 'Mikrofon pojemnościowy Rode M5 ', 2, 2, 'Mikrofon pojemnościowy Rode M5.', 13),
(49, 'Mikrofon pojemnościowy Audio Technica Pro 45 ', 2, 2, 'Mikrofon pojemnościowy Audio Technica Pro 45.', 13),
(50, 'Mikrofon pojemnościowy Audio Technica Pro 37', 2, 2, 'Mikrofon pojemnościowy Audio Technica Pro 37.', 13),
(51, 'Mikrofon pojemnościowy AKG C1000 ', 2, 2, 'Mikrofon pojemnościowy AKG C1000.', 13),
(52, 'Multicore Proel 24/8', 1, 1, 'Multicore Proel 24/8.', 15),
(53, 'Multicore Proel 12/4', 1, 1, 'Multicore Proel 12/4.', 15),
(54, 'Behringer S16', 2, 2, 'Behringer S16.', 15),
(55, 'DasLight', 1, 1, 'Sterownik światła DasLight.', 1),
(56, 'LightMagic', 1, 1, 'Sterownik światła LightMagic.', 1),
(57, 'Alu Quadro 4mb', 2, 2, 'Konstrukcja Alu Quadro 4mb.', 7),
(58, 'Alu Quadro 1mb', 1, 1, 'Konstrukcja Alu Quadro 1mb.', 7),
(59, 'Statywy 5.25 - srebrne', 2, 2, 'Statywy 5.25 srebrne.', 7),
(60, 'Statywy 5.25 - czarne', 2, 2, 'Statywy 5.25 - czarne.', 7),
(61, 'Wytwornica dymu 1kV', 1, 1, 'Wytwornica dymu 1kV.', 4),
(62, 'Wytwornica dymu 2kV', 1, 1, 'Wytwornica dymu 2kV.', 4),
(63, 'Allen&Heath T112', 1, 1, 'Mikser cyfrowy Allen&Heath T112.', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `main_category` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `name`, `main_category`) VALUES
(1, 'Sterowniki światła', 2),
(2, 'Ruchome głowy', 2),
(3, 'Reflektory PAR LED', 2),
(4, 'Wytwornice', 2),
(5, 'Doświetlacze, reflektory prowadzące, blindery', 2),
(6, 'Bar LED', 2),
(7, 'Rampy i statywy oświetleniowe', 2),
(8, 'Systemy nagłaśniające', 1),
(9, 'Miksery cyfrowe/analogowe', 1),
(10, 'Końcówki mocy', 1),
(11, 'Mikrofony bezprzewodowe', 1),
(12, 'Mikrofony nagłowne', 1),
(13, 'Mikrofony przewodowe', 1),
(15, 'Multicore/stagebox', 1),
(16, 'Nagłośnienie sceny', 1),
(17, 'Splittery dźwięku', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_order`
--

CREATE TABLE `product_order` (
  `product_order_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `product_order`
--

INSERT INTO `product_order` (`product_order_id`, `order_id`, `product_id`, `quantity`) VALUES
(7, 1, 12, 5),
(9, 4, 13, 3),
(10, 4, 15, 2),
(11, 4, 17, 4),
(12, 4, 19, 2),
(13, 4, 21, 1),
(14, 5, 4, 1),
(15, 5, 6, 2),
(16, 5, 9, 1),
(17, 5, 10, 2),
(18, 5, 13, 4),
(19, 5, 17, 3),
(20, 5, 37, 1),
(21, 5, 38, 2),
(22, 5, 42, 1),
(23, 5, 46, 2),
(24, 5, 49, 2),
(25, 5, 55, 1),
(26, 5, 61, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `name_surname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `name`, `name_surname`, `email`, `password`) VALUES
(1, 'admin', 'Elżbieta Nawalaniec', 'elzbietanawalaniec@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`product_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_detail_id` (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `product_order`
--
ALTER TABLE `product_order`
  MODIFY `product_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`category_id`);

--
-- Ograniczenia dla tabeli `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
