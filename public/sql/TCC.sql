-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Mar-2019 às 02:42
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `numContrato` int(11) NOT NULL,
  `Objeto_contrato` varchar(45) NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `num_ano` int(11) NOT NULL,
  `modalidade` varchar(45) NOT NULL,
  `documentos` mediumblob,
  `links` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato_has_participante`
--

CREATE TABLE `contrato_has_participante` (
  `Contrato_numContrato` int(11) NOT NULL,
  `Participante_idParticipante` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_05_203916_create_contrato_table', 0),
(2, '2019_03_05_203916_create_contrato_has_participante_table', 0),
(3, '2019_03_05_203916_create_participante_table', 0),
(4, '2019_03_05_203918_add_foreign_keys_to_contrato_has_participante_table', 0),
(5, '2019_03_05_213302_create_contrato_table', 0),
(6, '2019_03_05_213302_create_contrato_has_participante_table', 0),
(7, '2019_03_05_213302_create_participante_table', 0),
(8, '2019_03_05_213304_add_foreign_keys_to_contrato_has_participante_table', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE `participante` (
  `idParticipante` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `matricula` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(10) NOT NULL,
  `setor` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `funcao` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`numContrato`),
  ADD UNIQUE KEY `numContrato_UNIQUE` (`numContrato`);

--
-- Indexes for table `contrato_has_participante`
--
ALTER TABLE `contrato_has_participante`
  ADD PRIMARY KEY (`Contrato_numContrato`,`Participante_idParticipante`),
  ADD KEY `fk_Contrato_has_Participante_Participante1_idx` (`Participante_idParticipante`),
  ADD KEY `fk_Contrato_has_Participante_Contrato_idx` (`Contrato_numContrato`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`idParticipante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contrato_has_participante`
--
ALTER TABLE `contrato_has_participante`
  ADD CONSTRAINT `fk_Contrato_has_Participante_Contrato` FOREIGN KEY (`Contrato_numContrato`) REFERENCES `contrato` (`numContrato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Contrato_has_Participante_Participante1` FOREIGN KEY (`Participante_idParticipante`) REFERENCES `participante` (`idParticipante`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
