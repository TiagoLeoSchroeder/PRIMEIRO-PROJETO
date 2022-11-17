-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2022 às 01:59
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicios`
--

CREATE TABLE `exercicios` (
  `idexercicio` int(11) NOT NULL,
  `musculo` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idequipamento` int(11) DEFAULT NULL,
  `idtreino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `exercicios`
--

INSERT INTO `exercicios` (`idexercicio`, `musculo`, `nivel`, `idusuario`, `idequipamento`, `idtreino`) VALUES
(1, 'Biceps', '1', 0, NULL, 1),
(2, 'Triceps', '1', 0, NULL, 1),
(21, 'Coxa', '1', 1, NULL, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `exercicios`
--
ALTER TABLE `exercicios`
  ADD PRIMARY KEY (`idexercicio`),
  ADD KEY `idusuario` (`idusuario`,`idequipamento`,`idtreino`),
  ADD KEY `idequipamento` (`idequipamento`),
  ADD KEY `idexercicio` (`idexercicio`),
  ADD KEY `exercicios_ibfk_3` (`idtreino`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `exercicios`
--
ALTER TABLE `exercicios`
  ADD CONSTRAINT `exercicios_ibfk_1` FOREIGN KEY (`idtreino`) REFERENCES `treinos` (`idtreinos`),
  ADD CONSTRAINT `exercicios_ibfk_2` FOREIGN KEY (`idequipamento`) REFERENCES `equipamento` (`idequipamento`),
  ADD CONSTRAINT `exercicios_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`pk_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
