-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Apr 29, 2022 alle 10:09
-- Versione del server: 5.7.34
-- Versione PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_nrauto`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `car_brand`
--

CREATE TABLE `car_brand` (
  `id` int(100) NOT NULL,
  `bname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `car_brand`
--

INSERT INTO `car_brand` (`id`, `bname`) VALUES
(1, 'Ferrari'),
(2, 'Lamborghini'),
(3, 'BMW'),
(4, 'Tesla'),
(5, 'Mercedes'),
(6, 'Audi'),
(7, 'Porsche'),
(8, 'Jaguar'),
(9, 'Pagani'),
(10, 'Rolls Royce');

-- --------------------------------------------------------

--
-- Struttura della tabella `car_fuel`
--

CREATE TABLE `car_fuel` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `car_fuel`
--

INSERT INTO `car_fuel` (`id`, `fname`) VALUES
(1, 'Benzina'),
(2, 'Diesel'),
(3, 'Elettrica');

-- --------------------------------------------------------

--
-- Struttura della tabella `car_list`
--

CREATE TABLE `car_list` (
  `idcar` int(11) NOT NULL,
  `license_plate` varchar(255) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `model_id` int(100) NOT NULL,
  `fuel_id` int(100) NOT NULL,
  `shift_id` int(100) NOT NULL,
  `cc` int(100) NOT NULL,
  `hp` int(100) NOT NULL,
  `years` int(100) NOT NULL,
  `km` int(100) NOT NULL,
  `last_revision` date NOT NULL,
  `last_revision_km` int(100) NOT NULL,
  `info` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `square` varchar(255) NOT NULL,
  `wide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `car_list`
--

INSERT INTO `car_list` (`idcar`, `license_plate`, `brand_id`, `model_id`, `fuel_id`, `shift_id`, `cc`, `hp`, `years`, `km`, `last_revision`, `last_revision_km`, `info`, `price`, `square`, `wide`) VALUES
(1, 'TG F40', 1, 1, 1, 2, 3000, 479, 1992, 10000, '2021-12-01', 8000, 'La Ferrari F40 è un\'auto sportiva prodotta dalla casa automobilistica italiana Ferrari, virtuale erede della Ferrari 288 GTO Evoluzione, costruita tra il 1987 e il 1998 (per gli ultimi esemplari \"F40 GTE\"), la cui erede fu la F50.', 2200000, 'assets/images/cars/ferrari_f40_square.jpg', 'assets/images/cars/ferrari_f40_wide.jpg'),
(2, 'TG HUR', 2, 2, 1, 1, 5200, 639, 2017, 12000, '2020-12-01', 10000, 'La Huracán, la più “accessibile” delle supercar di Sant’Agata, erede della Gallardo e adotta un V10 aspirato di 5,2 litri montato in posizione posteriore-centrale, è costruito dalla Volkswagen e abbinato a un cambio a doppia frizione a sette marce.', 269000, 'assets/images/cars/lamborghini_huracan_square.jpg', 'assets/images/cars/lamborghini_huracan_wide.jpg\r\n'),
(4, 'TG X6M', 3, 4, 1, 1, 4400, 625, 2021, 1000, '2022-01-01', 100, 'La BMW X6 M con M xDrive cattura gli sguardi con i suoi interni lussuosi e una dinamica di guida caratterizzata dal DNA delle auto da corsa.', 167500, 'assets/images/cars/bmw_x6m_square.jpg', 'assets/images/cars/bmw_x6m_wide.jpg'),
(5, 'TG ROMA', 1, 5, 1, 1, 3900, 620, 2021, 50, '2021-06-01', 50, 'La Ferrari Roma è un\'autovettura sportiva di tipo gran turismo con carrozzeria coupé prodotta dalla casa automobilistica italiana Ferrari a partire dal 2019.', 288000, 'assets/images/cars/ferrari_roma_square.jpg', 'assets/images/cars/ferrari_roma_wide.jpg'),
(6, 'TG SVJ', 2, 6, 1, 2, 6500, 770, 2020, 11000, '2021-07-01', 10000, 'La Lamborghini Aventador SVJ è un\'automobile prodotta dalla casa automobilistica italiana Lamborghini in 2903 esemplari tra il 1990 e il 2001.', 890000, 'assets/images/cars/lamborghini_svj_square.jpg', 'assets/images/cars/lamborghini_svj_wide.jpg'),
(7, 'TG MS', 4, 7, 3, 1, 0, 1020, 2022, 10, '2022-03-15', 10, 'La Model S Plaid offre l\'accelerazione più rapida rispetto a qualsiasi altro veicolo in produzione. L\'architettura aggiornata della batteria per tutti gli allestimenti della Model S consente scatti fulminei consecutivi senza degrado delle prestazioni.', 219000, 'assets/images/cars/tesla_s_square.jpg', 'assets/images/cars/tesla_s_wide.jpg'),
(8, 'TG RS6', 6, 8, 1, 1, 4000, 600, 2022, 100, '2022-01-10', 100, 'Audi RS 6 Avant è perfetta per ogni occasione. Questa vettura sportiva dalle prestazioni sorprendenti presenta un design senza compromessi abbinato a una grande versatilità.', 179000, 'assets/images/cars/audi_rs6_square.jpg', 'assets/images/cars/audi_rs6_wide.jpg'),
(9, 'TG PH', 9, 9, 1, 1, 5980, 700, 2011, 15000, '2021-12-01', 14500, 'La Pagani Huayra (nome in codice progetto C9) è, dopo la famiglia della Pagani Zonda, il secondo modello della piccola casa automobilistica fondata da Horacio Pagani.', 3700000, 'assets/images/cars/pagani_huayra_square.jpg', 'assets/images/cars/pagani_huayra_wide.jpg'),
(10, 'TG RR', 10, 10, 1, 1, 6592, 571, 2011, 2600, '2022-01-15', 2500, 'La Rolls-Royce Dawn è una cabriolet a quattro posti (comodi) derivata dalla coupé Wraith. Ha dimensioni \"importanti\" e forme classiche.', 344500, 'assets/images/cars/rolls_dawn_square.jpg', 'assets/images/cars/rolls_dawn_wide.jpg'),
(11, 'TG TAY', 7, 11, 3, 1, 0, 489, 2021, 1, '2022-03-02', 1, 'La Porsche Taycan è la prima auto elettrica della casa tedesca. Si tratta di una berlina a quattro porte dalle linee assai filanti e pulite: anche per questo, il Cx è di 0,22, un valore davvero notevole.', 162500, 'assets/images/cars/porsche_taycan_square.jpg', 'assets/images/cars/porsche_taycan_wide.jpg'),
(12, 'TG GTR', 5, 12, 1, 1, 4000, 730, 2022, 28, '2022-03-02', 20, 'Mercedes-Benz AMG GT GT R ha un motore benzina a 8 cilindri da 3.982 cm3, trazione posteriore e cambio automatico a 7 rapporti.', 576000, 'assets/images/cars/mercedes_gtr_square.jpg', 'assets/images/cars/mercedes_gtr_wide.jpg'),
(13, 'TG G63', 5, 13, 1, 1, 4000, 700, 2018, 20000, '2022-04-09', 19995, 'Il DNA di un fuoristrada iconico, robusto e quasi indistruttibile. Hanno progettato elementi che ancora oggi, inalterati, assolvono determinate funzioni, ed hanno segnato per generazioni lo stile di un\'auto senza eguali.', 169000, 'assets/images/cars/mercedes_g63_square.jpg', 'assets/images/cars/mercedes_g63_wide.jpg'),
(14, 'TG 911', 7, 12, 1, 2, 3900, 650, 2022, 1, '2022-04-14', 1, 'Porsche 992', 250000, 'assets/images/cars/porsche_911_square.jpg', 'assets/images/cars/porsche_911_wide.jpg'),
(15, 'TG F-T', 8, 15, 1, 1, 5000, 550, 2019, 10000, '2022-04-12', 10000, 'La vettura è stata presentata con V8 5.0 con compressore volumetrico 550 CV.', 136000, 'assets/images/cars/jaguar_ftype_square.jpg', 'assets/images/cars/jaguar_ftype_wide.jpg'),
(16, 'TG R8', 6, 16, 1, 2, 5200, 620, 2018, 9000, '2022-01-13', 8960, 'Il progetto R8 deriva dalla concept Le Mans Quattro del 2003, è caratterizzato dalla posizione posteriore centrale del motore e dalla trazione integrale. La piattaforma è la stessa utilizzata per la Lamborghini Gallardo. ', 157000, 'assets/images/cars/audi_r8_square.jpg', 'assets/images/cars/audi_r8_wide.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `car_model`
--

CREATE TABLE `car_model` (
  `id` int(100) NOT NULL,
  `mname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `car_model`
--

INSERT INTO `car_model` (`id`, `mname`) VALUES
(1, 'F40'),
(2, 'Huracan'),
(3, 'M2'),
(4, 'X6 M'),
(5, 'Roma'),
(7, 'Model S'),
(8, 'RS6'),
(9, 'Huayra'),
(10, 'Dawn'),
(6, 'SVJ'),
(11, 'Taycan'),
(12, 'GTR'),
(13, 'G63'),
(14, '911'),
(15, 'F-Type'),
(16, 'R8');

-- --------------------------------------------------------

--
-- Struttura della tabella `car_shift`
--

CREATE TABLE `car_shift` (
  `id` int(100) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `car_shift`
--

INSERT INTO `car_shift` (`id`, `sname`) VALUES
(1, 'Automatico'),
(2, 'Manuale');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'nicolo_roffi', '$2y$10$3cblsUXUDHNKQwydI5SNbefN7EAYa3SnX507Bq9C.NGFAJsKZSo3G', '2022-04-15 12:02:24'),
(2, 'matteo_lupica', '$2y$10$hdBi0.pIW7RfBXZYfUCt5uRPtkfJKifAHZOVw7wLik9zqYejRqAF6', '2022-04-20 16:42:24');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `car_brand`
--
ALTER TABLE `car_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `car_list`
--
ALTER TABLE `car_list`
  ADD PRIMARY KEY (`idcar`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `car_list`
--
ALTER TABLE `car_list`
  MODIFY `idcar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
