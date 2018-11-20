-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2018 às 18:43
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_projeto`
--
CREATE DATABASE IF NOT EXISTS `a_projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `a_projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE `time` (
  `idTime` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `bandeira` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `login` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `senha` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `permicao` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `time` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `nome`, `login`, `senha`, `permicao`, `time`) VALUES
(1, 'Jocimar Caiado Braga', 'jocimarthebestdocaralho', '81dc9bdb52d04dc20036dbd8313ed055', 'administrador', 'Flamengo'),
(8, 'Cleiton Caiado Braga', 'cleiton', '2cbd28b48c12c336d2f1060dd2df5460', 'comum', 'Flamengo'),
(9, 'Manuela de Oliveira Caiado Bra', 'manu', '053f378e3296b958f5e2c4f6c9f4d079', 'administrador', 'Flamengo'),
(10, 'Candida Nunes Caiado Braga', 'kandi', 'd41d8cd98f00b204e9800998ecf8427e', 'comum', 'Vasco'),
(11, 'Renanda Carvalho', 'nanda', 'd41d8cd98f00b204e9800998ecf8427e', 'administrador', 'Flamengo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`idTime`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `idTime` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
