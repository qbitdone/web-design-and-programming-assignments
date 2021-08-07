-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2021 at 04:56 PM
-- Server version: 5.5.62-0+deb8u1
-- PHP Version: 7.2.25-1+0~20191128.32+debian8~1.gbp108445

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WebDiP2020x110`
--

-- --------------------------------------------------------

--
-- Table structure for table `dnevnik_rada`
--

CREATE TABLE `dnevnik_rada` (
  `id_dnevnik` int(11) NOT NULL,
  `id_tip` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `opis_radnje` varchar(45) NOT NULL,
  `upit` varchar(100) DEFAULT NULL,
  `vrijeme` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dnevnik_rada`
--

INSERT INTO `dnevnik_rada` (`id_dnevnik`, `id_tip`, `id_korisnik`, `opis_radnje`, `upit`, `vrijeme`) VALUES
(1, 1, 1, 'Korisnik se prijavio', NULL, '2021-04-11 10:00:00'),
(2, 1, 1, 'Korisnik se odjavio', NULL, '2021-04-11 13:00:00'),
(3, 1, 5, 'Korisnik se prijavio', NULL, '2021-04-05 13:00:00'),
(4, 2, 5, 'Korisnik je dohvatio sve korisnike iz baze', 'SELECT * FROM korisnik;', '2021-04-05 14:00:00'),
(5, 1, 5, 'Korisnik se odjavio', NULL, '2021-04-05 17:00:00'),
(6, 1, 1, 'Korisnik se prijavio', NULL, '2021-04-09 15:00:00'),
(7, 3, 1, 'Korisnik je postavio novog moderatora', NULL, '2021-04-09 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donacija`
--

CREATE TABLE `donacija` (
  `id_korisnik` int(11) NOT NULL,
  `id_poziv` int(11) NOT NULL,
  `sredstva` double NOT NULL,
  `datum_vrijeme` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donacija`
--

INSERT INTO `donacija` (`id_korisnik`, `id_poziv`, `sredstva`, `datum_vrijeme`) VALUES
(2, 1, 100000, '2021-04-21 10:14:14'),
(2, 2, 50000, '2021-02-09 12:32:32'),
(2, 3, 544433, '2021-04-28 11:19:16'),
(6, 4, 4433, '2021-01-13 09:25:36'),
(6, 5, 43334, '2021-03-22 02:17:17'),
(6, 6, 55555, '2020-12-08 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE `grad` (
  `id_grad` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `ZIP` varchar(15) NOT NULL,
  `broj_stanovnika` int(11) DEFAULT NULL,
  `drzava` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`id_grad`, `ime`, `ZIP`, `broj_stanovnika`, `drzava`) VALUES
(1, 'Slatina', '33520', 13000, 'Hrvatska'),
(2, 'Zagreb', '10000', 790000, 'Hrvatska'),
(3, 'Varazdin', '42000', 46000, 'Hrvatska'),
(4, 'Karlovac', '47000', 55000, 'Hrvatska'),
(5, 'Zadar', '23000', 75000, 'Hrvatska'),
(6, 'Umag', '52470', 13000, 'Hrvatska'),
(7, 'Metković', '20350', 16000, 'Hrvatska');

-- --------------------------------------------------------

--
-- Table structure for table `javni_poziv`
--

CREATE TABLE `javni_poziv` (
  `id_poziv` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL,
  `id_grad` int(11) NOT NULL,
  `id_kategorija` int(11) NOT NULL,
  `naziv` varchar(45) NOT NULL,
  `opis` varchar(45) NOT NULL,
  `otvoren_od` datetime NOT NULL,
  `otvoren_do` datetime NOT NULL,
  `sredstva` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `javni_poziv`
--

INSERT INTO `javni_poziv` (`id_poziv`, `id_korisnik`, `id_grad`, `id_kategorija`, `naziv`, `opis`, `otvoren_od`, `otvoren_do`, `sredstva`) VALUES
(1, 5, 1, 1, 'Javni poziv - Poplava', 'Javni poziv za pogođene poplavom', '2021-04-04 00:00:00', '2021-04-30 00:00:00', 100000),
(2, 5, 2, 2, 'Javni poziv - Potres', 'Javni poziv za pogođene potresom ', '2021-02-01 00:00:00', '2021-07-24 00:00:00', 500000),
(3, 5, 3, 4, 'Javni poziv - udar groma', 'Javni poziv za oštećene obitelji', '2021-04-14 00:00:00', '2021-08-26 00:00:00', 50000),
(4, 7, 4, 6, 'Javni poziv - Pljačka', 'Za oštećene obitelji', '2021-04-16 00:00:00', '2021-04-30 00:00:00', 200000),
(5, 7, 6, 5, 'Javni poziv - oluja', 'Za oštećene u udaru groma', '2021-04-14 00:00:00', '2021-04-24 00:00:00', 500000),
(6, 5, 5, 3, 'Javni poziv - prometna nesreća', 'Javni poziv za sudjelovatelje', '2021-04-04 00:00:00', '2021-06-19 00:00:00', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `id_kategorija` int(11) NOT NULL,
  `naziv` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`id_kategorija`, `naziv`) VALUES
(1, 'Poplava'),
(2, 'Potres'),
(3, 'Prometna nesreća'),
(4, 'Udar groma'),
(5, 'Oluja'),
(6, 'Pljačka');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id_korisnik` int(11) NOT NULL,
  `id_uloga` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `prezime` varchar(45) NOT NULL,
  `korisnicko_ime` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `lozinka` varchar(45) NOT NULL,
  `lozinka_kriptirana` varchar(40) NOT NULL,
  `uvjeti` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id_korisnik`, `id_uloga`, `ime`, `prezime`, `korisnicko_ime`, `email`, `lozinka`, `lozinka_kriptirana`, `uvjeti`, `status`) VALUES
(1, 4, 'Kristijan', 'Čulina', 'kculina', 'kculina@foi.hr', 'admin_AGENT47', 'ff0694ede5a0344b52f68a6b6f63712adf367948', '2021-04-12 00:00:00', 0),
(2, 1, 'Ante', 'Antić', 'aantic', 'aantic@foi.hr', 'obicni33', 'f24b1729166f11c2634176de6c7e10508415d084', '2021-04-21 00:00:00', 1),
(3, 2, 'Vinko', 'Juric', 'vjuric', 'vjuric@foi.hr', 'vinkosamja83', 'aa50404f0df9fc069b837c72509c39a06f944867', '2021-04-01 00:00:00', 0),
(4, 2, 'Dragutin', 'Debeljak', 'ddebeljak', 'ddebeljak@foi.hr', 'maradona352', 'd1276c75d31111a67bc69d2412faaf83647c7195', '2021-04-21 00:00:00', 1),
(5, 3, 'Janko', 'Burić', 'jburic', 'jburic@foi.hr', 'Zbregov42', '097fd708ccfc98619181e43cdd418f375a486ac4', '2021-02-10 23:24:41', 0),
(6, 1, 'Antonio', 'Bugar', 'abugar', 'abugar@foi.hr', 'Corona321', 'b6cd23d014691257937c8b565e7c4b8633e05c12', '2021-01-13 10:24:29', 1),
(7, 3, 'Tomo', 'Matković', 'tmatkovic', 'tmatkovic@foi.hr', 'Radiogrude94', 'bc2b633856ba30bcdac42f6676af7090435d8837', '2021-02-09 05:35:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materijal`
--

CREATE TABLE `materijal` (
  `id_materijal` int(11) NOT NULL,
  `naziv` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materijal`
--

INSERT INTO `materijal` (`id_materijal`, `naziv`) VALUES
(1, 'Audio'),
(2, 'Video'),
(3, 'Slika'),
(4, 'pdf'),
(5, 'word dokument'),
(6, 'pptx');

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

CREATE TABLE `prijava` (
  `id_korisnik` int(11) NOT NULL,
  `id_poziv` int(11) NOT NULL,
  `id_materijal` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `iznos_subvencije` double DEFAULT NULL,
  `naziv` varchar(45) NOT NULL,
  `opis` varchar(45) NOT NULL,
  `oznake` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`id_korisnik`, `id_poziv`, `id_materijal`, `status`, `iznos_subvencije`, `naziv`, `opis`, `oznake`) VALUES
(3, 1, 1, NULL, NULL, 'Prijava štete - poplava', 'Stradala mi je kuća u poplavi', 'kuća; poplava; šteta'),
(3, 2, 2, NULL, NULL, 'Prijava štete - potres', 'Obitelj mi je stradala u potresu', 'potres; kuća; obitelj;'),
(3, 3, 3, NULL, NULL, 'Prijava štete - udar groma', 'TV mi je stradao u udaru groma', 'kuća; tv; grom;'),
(4, 4, 5, NULL, NULL, 'Prijava pljačke', 'Opljačkan sam', 'pljačka; obitelj;'),
(4, 5, 5, NULL, NULL, 'Šteta oluja', 'Oluja mi je stušila stup', 'stup; oluja;'),
(4, 6, 5, NULL, NULL, 'Prometna nesreća', 'Auto mi je stradao', 'auto; lančani-sudar;');

-- --------------------------------------------------------

--
-- Table structure for table `tip_rada`
--

CREATE TABLE `tip_rada` (
  `id_tip` int(11) NOT NULL,
  `naziv` varchar(45) NOT NULL,
  `opis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_rada`
--

INSERT INTO `tip_rada` (`id_tip`, `naziv`, `opis`) VALUES
(1, 'Prijava/odjava', 'Korisnik se prijavio ili odjavio'),
(2, 'Rad s bazom', 'Korisnik je obavio neke radnje s bazom'),
(3, 'Ostale radnje', 'Korisnik je obavio neke ostale radnje');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id_uloga` int(11) NOT NULL,
  `naziv` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id_uloga`, `naziv`) VALUES
(1, 'Neregistrirani korisnik'),
(2, 'Registrirani korisnik'),
(3, 'Moderator'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `upravlja`
--

CREATE TABLE `upravlja` (
  `id_korisnik` int(11) NOT NULL,
  `id_kategorija` int(11) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upravlja`
--

INSERT INTO `upravlja` (`id_korisnik`, `id_kategorija`, `datum`) VALUES
(5, 1, '2021-03-10'),
(5, 2, '2021-02-15'),
(5, 5, '2020-06-08'),
(7, 3, '2021-01-12'),
(7, 4, '2020-07-07'),
(7, 6, '2020-08-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dnevnik_rada`
--
ALTER TABLE `dnevnik_rada`
  ADD PRIMARY KEY (`id_dnevnik`),
  ADD KEY `fk_dnevnik_rada_tip_rada1_idx` (`id_tip`),
  ADD KEY `fk_dnevnik_rada_korisnik1_idx` (`id_korisnik`);

--
-- Indexes for table `donacija`
--
ALTER TABLE `donacija`
  ADD PRIMARY KEY (`id_korisnik`,`id_poziv`),
  ADD KEY `fk_korisnik_has_javni_poziv_javni_poziv2_idx` (`id_poziv`),
  ADD KEY `fk_korisnik_has_javni_poziv_korisnik2_idx` (`id_korisnik`);

--
-- Indexes for table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`id_grad`);

--
-- Indexes for table `javni_poziv`
--
ALTER TABLE `javni_poziv`
  ADD PRIMARY KEY (`id_poziv`),
  ADD KEY `fk_javni_poziv_korisnik1_idx` (`id_korisnik`),
  ADD KEY `fk_javni_poziv_grad1_idx` (`id_grad`),
  ADD KEY `fk_javni_poziv_kategorija1_idx` (`id_kategorija`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`id_kategorija`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id_korisnik`),
  ADD KEY `fk_korisnik_uloga_idx` (`id_uloga`);

--
-- Indexes for table `materijal`
--
ALTER TABLE `materijal`
  ADD PRIMARY KEY (`id_materijal`);

--
-- Indexes for table `prijava`
--
ALTER TABLE `prijava`
  ADD PRIMARY KEY (`id_korisnik`,`id_poziv`),
  ADD KEY `fk_korisnik_has_javni_poziv_javni_poziv1_idx` (`id_poziv`),
  ADD KEY `fk_korisnik_has_javni_poziv_korisnik1_idx` (`id_korisnik`),
  ADD KEY `fk_prijava_materijal1_idx` (`id_materijal`);

--
-- Indexes for table `tip_rada`
--
ALTER TABLE `tip_rada`
  ADD PRIMARY KEY (`id_tip`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id_uloga`);

--
-- Indexes for table `upravlja`
--
ALTER TABLE `upravlja`
  ADD PRIMARY KEY (`id_korisnik`,`id_kategorija`),
  ADD KEY `fk_korisnik_has_kategorija_kategorija1_idx` (`id_kategorija`),
  ADD KEY `fk_korisnik_has_kategorija_korisnik1_idx` (`id_korisnik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dnevnik_rada`
--
ALTER TABLE `dnevnik_rada`
  MODIFY `id_dnevnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `grad`
--
ALTER TABLE `grad`
  MODIFY `id_grad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `javni_poziv`
--
ALTER TABLE `javni_poziv`
  MODIFY `id_poziv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `id_kategorija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id_korisnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materijal`
--
ALTER TABLE `materijal`
  MODIFY `id_materijal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tip_rada`
--
ALTER TABLE `tip_rada`
  MODIFY `id_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id_uloga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dnevnik_rada`
--
ALTER TABLE `dnevnik_rada`
  ADD CONSTRAINT `fk_dnevnik_rada_korisnik1` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dnevnik_rada_tip_rada1` FOREIGN KEY (`id_tip`) REFERENCES `tip_rada` (`id_tip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donacija`
--
ALTER TABLE `donacija`
  ADD CONSTRAINT `fk_korisnik_has_javni_poziv_korisnik2` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_korisnik_has_javni_poziv_javni_poziv2` FOREIGN KEY (`id_poziv`) REFERENCES `javni_poziv` (`id_poziv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `javni_poziv`
--
ALTER TABLE `javni_poziv`
  ADD CONSTRAINT `fk_javni_poziv_korisnik1` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_javni_poziv_grad1` FOREIGN KEY (`id_grad`) REFERENCES `grad` (`id_grad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_javni_poziv_kategorija1` FOREIGN KEY (`id_kategorija`) REFERENCES `kategorija` (`id_kategorija`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `fk_korisnik_uloga` FOREIGN KEY (`id_uloga`) REFERENCES `uloga` (`id_uloga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prijava`
--
ALTER TABLE `prijava`
  ADD CONSTRAINT `fk_korisnik_has_javni_poziv_korisnik1` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_korisnik_has_javni_poziv_javni_poziv1` FOREIGN KEY (`id_poziv`) REFERENCES `javni_poziv` (`id_poziv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prijava_materijal1` FOREIGN KEY (`id_materijal`) REFERENCES `materijal` (`id_materijal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upravlja`
--
ALTER TABLE `upravlja`
  ADD CONSTRAINT `fk_korisnik_has_kategorija_korisnik1` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id_korisnik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_korisnik_has_kategorija_kategorija1` FOREIGN KEY (`id_kategorija`) REFERENCES `kategorija` (`id_kategorija`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
