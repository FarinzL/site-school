-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2018 at 11:10 AM
-- Server version: 5.5.58-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `5ai_s00560`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agenti`
--

CREATE TABLE IF NOT EXISTS `Agenti` (
  `matricola` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Agenti`
--

INSERT INTO `Agenti` (`matricola`, `nome`) VALUES
('001024c', 'Giacomo Bonaventura'),
('1234567', 'Alessandro Del Piero'),
('37d289a', 'Giampiero Ventura'),
('465b789', 'Christian Vieri');

-- --------------------------------------------------------

--
-- Table structure for table `Auto`
--

CREATE TABLE IF NOT EXISTS `Auto` (
  `targa` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modello` varchar(45) NOT NULL,
  `proprietario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Auto`
--

INSERT INTO `Auto` (`targa`, `marca`, `modello`, `proprietario`) VALUES
('ET371RJ', 'OPEL', 'Corsa', 'FRJNEUR3'),
('FF820AG', 'FIAT', 'Punto', 'FDBDFBD3'),
('JP320AC', 'JEEP', 'Renegade', 'DFBFB'),
('PJ007CV', 'VOLVO', 'c70', 'BJISDF2');

-- --------------------------------------------------------

--
-- Table structure for table `Automobilisti`
--

CREATE TABLE IF NOT EXISTS `Automobilisti` (
  `Cod_Fisc` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `indirizzo` varchar(45) NOT NULL,
  `citta` varchar(45) NOT NULL,
  `CAP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Automobilisti`
--

INSERT INTO `Automobilisti` (`Cod_Fisc`, `nome`, `indirizzo`, `citta`, `CAP`) VALUES
('BJISDF2', 'Pippo', 'Palla', 'Pianezze', 36060),
('DFBFB', 'Gionny', 'Gallo', 'BdG', 36032),
('FDBDFBD3', 'Mirco', 'Cipolla', 'Stroppari', 36062),
('FRJNEUR3', 'Cristian', 'Caineanu', 'Campagnari', 36062);

-- --------------------------------------------------------

--
-- Table structure for table `Calciatore_Squadra`
--

CREATE TABLE IF NOT EXISTS `Calciatore_Squadra` (
  `matricola` varchar(45) NOT NULL,
  `id_squadra` varchar(45) NOT NULL,
  `stagione` year(4) NOT NULL,
  `ruolo` varchar(45) NOT NULL,
  `goal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Calciatore_Squadra`
--

INSERT INTO `Calciatore_Squadra` (`matricola`, `id_squadra`, `stagione`, `ruolo`, `goal`) VALUES
('ADP', 'JUV', 2017, 'ATT', 45),
('BOBO', 'BEN', 2017, 'ATT', 20),
('INZ', 'MIL', 2017, 'AT', 3),
('MAT', 'MNC', 2017, 'DIF', 2),
('mnt', 'INT', 2005, 'ATT', 1),
('mnt', 'MIL', 2003, 'POR', 5),
('MPB', 'PSG', 2017, 'ATT', 15),
('RINO', 'MNU', 2017, 'CC', 1),
('SHE', 'BAR', 2017, 'ATT', 7),
('TOT', 'RM', 2000, 'ATT', 5),
('ZID', 'RMD', 2017, 'COC', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Calciatori`
--

CREATE TABLE IF NOT EXISTS `Calciatori` (
  `matricola` varchar(45) NOT NULL,
  `nominativo` varchar(45) NOT NULL,
  `data_nascita` date NOT NULL,
  `nazione` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Calciatori`
--

INSERT INTO `Calciatori` (`matricola`, `nominativo`, `data_nascita`, `nazione`) VALUES
('ADP', 'Alessandro Del Piero', '1974-11-09', 'Italia'),
('BOBO', 'Christian Vieri', '1965-06-09', 'Italia'),
('INZ', 'Filippo Inzaghi', '1970-06-09', 'Italia'),
('MAT', 'Marco Materazzi', '1960-06-09', 'Italia'),
('mnt', 'Muntari', '2018-01-23', 'Nero'),
('MPB', 'Mbappe', '1998-12-09', 'Francia'),
('RINO', 'Gennaro Gattuso', '1981-01-29', 'Italia'),
('SHE', 'Sheva', '1972-10-12', 'Ucraina'),
('TOT', 'Francesco Totti', '1985-06-09', 'Italia'),
('ZID', 'Zidane', '1970-09-29', 'Francia');

-- --------------------------------------------------------

--
-- Table structure for table `Campionato`
--

CREATE TABLE IF NOT EXISTS `Campionato` (
  `anno` year(4) NOT NULL,
  `id_squadra` varchar(45) NOT NULL,
  `punteggio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Campionato`
--

INSERT INTO `Campionato` (`anno`, `id_squadra`, `punteggio`) VALUES
(2000, 'BAR', 1),
(2000, 'INT', 2),
(2000, 'MNC', 23),
(2000, 'MNU', 7),
(2000, 'PSG', 11),
(2000, 'RMD', 34),
(2009, 'BEN', 22),
(2009, 'JUV', 40),
(2009, 'MIL', 22);

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `IDcliente` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `indirizzo` varchar(45) NOT NULL,
  `nomeReferente` varchar(45) NOT NULL,
  `telReferente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Cliente`
--

INSERT INTO `Cliente` (`IDcliente`, `nome`, `indirizzo`, `nomeReferente`, `telReferente`) VALUES
('1', 'GLS', 'via roma, 40', 'Luigi', 335255512),
('20', 'Lui', 'via verci', 'ess', 2263535),
('5553', 'Pippo', 'via milano, 41', 'Luca', 335224352),
('5554', 'Palla', 'via napoli, 2', 'Mario', 335255542),
('5555', 'vento', 'via marostica, 123', 'Christian', 331235512);

-- --------------------------------------------------------

--
-- Table structure for table `CompetenzeImpiegato`
--

CREATE TABLE IF NOT EXISTS `CompetenzeImpiegato` (
  `IDimpiegato` varchar(45) NOT NULL,
  `competenza` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CompetenzeImpiegato`
--

INSERT INTO `CompetenzeImpiegato` (`IDimpiegato`, `competenza`) VALUES
('101', 'Informatiche'),
('102', 'Elettroniche'),
('103', 'Meccaniche'),
('104', 'Informatiche'),
('104', 'Sportive'),
('105', 'Contabile'),
('106', 'Chimiche');

-- --------------------------------------------------------

--
-- Table structure for table `Dipartimento`
--

CREATE TABLE IF NOT EXISTS `Dipartimento` (
  `IDdipartimento` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dipartimento`
--

INSERT INTO `Dipartimento` (`IDdipartimento`, `nome`) VALUES
('001', 'magazzini'),
('002', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `Impiegato`
--

CREATE TABLE IF NOT EXISTS `Impiegato` (
  `IDimpiegato` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `mansione` varchar(45) NOT NULL,
  `IDdipartimento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Impiegato`
--

INSERT INTO `Impiegato` (`IDimpiegato`, `nome`, `mansione`, `IDdipartimento`) VALUES
('000', 'NESSUNO', 'NESSUNA', '001'),
('101', 'Luigi', 'Lavapiatti', '001'),
('102', 'Mario', 'Trasporti', '002'),
('103', 'Kodi', 'Dirigente', '001'),
('104', 'Luca', 'Supervisore', '001'),
('105', 'David', 'Carrellista', '002'),
('106', 'Andrea', 'Bho', '002');

-- --------------------------------------------------------

--
-- Table structure for table `Infrazioni`
--

CREATE TABLE IF NOT EXISTS `Infrazioni` (
  `cod_infrazione` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `agente` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `importo` int(11) NOT NULL,
  `targa_auto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MySite`
--

CREATE TABLE IF NOT EXISTS `MySite` (
  `nome` varchar(45) NOT NULL,
  `autore` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MySite`
--

INSERT INTO `MySite` (`nome`, `autore`, `link`) VALUES
('13 Ottobre 2017', 'Farina Luca', '/13Ottobre2017/index.php'),
('9_11_17', 'Farina Luca', '/9_11_17/index.php'),
('Array', 'Farina Luca', '/Array/index.php'),
('Autenticazione_Account', 'Farina Luca', '/Autenticazione_Account/signup.php'),
('Esercizio Calcio', 'Farina Luca', '/Esercizio_Calcio'),
('MCD', 'Farina Luca', '/MCD/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `Squadra`
--

CREATE TABLE IF NOT EXISTS `Squadra` (
  `id_squadra` varchar(45) NOT NULL,
  `nome_societa` varchar(45) NOT NULL,
  `citta` varchar(45) NOT NULL,
  `anno_fondazione` year(4) NOT NULL,
  `colori_sociali` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Squadra`
--

INSERT INTO `Squadra` (`id_squadra`, `nome_societa`, `citta`, `anno_fondazione`, `colori_sociali`) VALUES
('AS', 'ascoli', 'ascoli', 2015, 'bianco'),
('BAR', 'Barcelona', 'Barcelona', 2000, 'blau&grana'),
('BEN', 'Benevento', 'Benevento', 2016, 'colorato'),
('INT', 'Inter', 'Milano', 1915, 'Nero Azzurri'),
('JUV', 'Juventus', 'Torino', 1918, 'bianco neri'),
('MIL', 'MIlan', 'Milano', 2000, 'rosso neri'),
('MNC', 'Manchester City', 'Manchester', 2000, 'azzurro'),
('MNU', 'Manchester United', 'Manchester', 2000, 'rosso'),
('PSG', 'Paris Saint Germain', 'Paris', 2000, 'blu neri'),
('RM', 'Roma', 'Roma', 1920, 'Marrone'),
('RMD', 'Real Madrid', 'Madrid', 2000, 'bianco');

-- --------------------------------------------------------

--
-- Table structure for table `Tipo_Infrazione`
--

CREATE TABLE IF NOT EXISTS `Tipo_Infrazione` (
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tipo_Infrazione`
--

INSERT INTO `Tipo_Infrazione` (`tipo`) VALUES
('Divieto di sosta'),
('Eccesso di velocità'),
('Guida in contromano'),
('Mancato arresto al semaforo');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`username`, `password`) VALUES
('cris.bebo', 'lasolita'),
('farinz', 'lasolita');

-- --------------------------------------------------------

--
-- Table structure for table `ValoriT`
--

CREATE TABLE IF NOT EXISTS `ValoriT` (
  `id` varchar(45) NOT NULL,
  `anno` year(4) NOT NULL,
  `dato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agenti`
--
ALTER TABLE `Agenti`
 ADD PRIMARY KEY (`matricola`);

--
-- Indexes for table `Auto`
--
ALTER TABLE `Auto`
 ADD PRIMARY KEY (`targa`), ADD KEY `proprietario` (`proprietario`), ADD KEY `proprietario_2` (`proprietario`);

--
-- Indexes for table `Automobilisti`
--
ALTER TABLE `Automobilisti`
 ADD PRIMARY KEY (`Cod_Fisc`);

--
-- Indexes for table `Calciatore_Squadra`
--
ALTER TABLE `Calciatore_Squadra`
 ADD PRIMARY KEY (`matricola`,`id_squadra`), ADD KEY `id_squadra` (`id_squadra`);

--
-- Indexes for table `Calciatori`
--
ALTER TABLE `Calciatori`
 ADD PRIMARY KEY (`matricola`);

--
-- Indexes for table `Campionato`
--
ALTER TABLE `Campionato`
 ADD PRIMARY KEY (`anno`,`id_squadra`), ADD KEY `id_squadra` (`id_squadra`);

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
 ADD PRIMARY KEY (`IDcliente`);

--
-- Indexes for table `CompetenzeImpiegato`
--
ALTER TABLE `CompetenzeImpiegato`
 ADD PRIMARY KEY (`IDimpiegato`,`competenza`);

--
-- Indexes for table `Dipartimento`
--
ALTER TABLE `Dipartimento`
 ADD PRIMARY KEY (`IDdipartimento`);

--
-- Indexes for table `Impiegato`
--
ALTER TABLE `Impiegato`
 ADD PRIMARY KEY (`IDimpiegato`), ADD KEY `IDdipartimento` (`IDdipartimento`);

--
-- Indexes for table `Infrazioni`
--
ALTER TABLE `Infrazioni`
 ADD PRIMARY KEY (`cod_infrazione`), ADD KEY `agente` (`agente`,`targa_auto`), ADD KEY `tipo` (`tipo`), ADD KEY `targa_auto` (`targa_auto`);

--
-- Indexes for table `MySite`
--
ALTER TABLE `MySite`
 ADD PRIMARY KEY (`nome`);

--
-- Indexes for table `Squadra`
--
ALTER TABLE `Squadra`
 ADD PRIMARY KEY (`id_squadra`);

--
-- Indexes for table `Tipo_Infrazione`
--
ALTER TABLE `Tipo_Infrazione`
 ADD PRIMARY KEY (`tipo`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Auto`
--
ALTER TABLE `Auto`
ADD CONSTRAINT `Auto_ibfk_1` FOREIGN KEY (`proprietario`) REFERENCES `Automobilisti` (`Cod_Fisc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Calciatore_Squadra`
--
ALTER TABLE `Calciatore_Squadra`
ADD CONSTRAINT `Calciatore_Squadra_ibfk_1` FOREIGN KEY (`matricola`) REFERENCES `Calciatori` (`matricola`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `Calciatore_Squadra_ibfk_2` FOREIGN KEY (`id_squadra`) REFERENCES `Squadra` (`id_squadra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Campionato`
--
ALTER TABLE `Campionato`
ADD CONSTRAINT `Campionato_ibfk_1` FOREIGN KEY (`id_squadra`) REFERENCES `Squadra` (`id_squadra`),
ADD CONSTRAINT `Campionato_ibfk_2` FOREIGN KEY (`id_squadra`) REFERENCES `Squadra` (`id_squadra`);

--
-- Constraints for table `CompetenzeImpiegato`
--
ALTER TABLE `CompetenzeImpiegato`
ADD CONSTRAINT `CompetenzeImpiegato_ibfk_1` FOREIGN KEY (`IDimpiegato`) REFERENCES `Impiegato` (`IDimpiegato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Impiegato`
--
ALTER TABLE `Impiegato`
ADD CONSTRAINT `Impiegato_ibfk_1` FOREIGN KEY (`IDdipartimento`) REFERENCES `Dipartimento` (`IDdipartimento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Infrazioni`
--
ALTER TABLE `Infrazioni`
ADD CONSTRAINT `Infrazioni_ibfk_1` FOREIGN KEY (`agente`) REFERENCES `Agenti` (`matricola`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `Infrazioni_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `Tipo_Infrazione` (`tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `Infrazioni_ibfk_3` FOREIGN KEY (`targa_auto`) REFERENCES `Auto` (`targa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
