-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2022 às 16:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `idtreino` int(11) NOT NULL,
  `gif_treino` longtext NOT NULL,
  `como_treinar` varchar(45) NOT NULL,
  `equipamento` text NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `idexercicio` int(11) NOT NULL,
  `idequipamento` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idmusculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`idtreino`),
  ADD KEY `idexercicio` (`idexercicio`,`idequipamento`,`idusuario`),
  ADD KEY `idequipamento` (`idequipamento`),
  ADD KEY `idmusculo` (`idmusculo`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `treino`
--
ALTER TABLE `treino`
  ADD CONSTRAINT `treino_ibfk_2` FOREIGN KEY (`idexercicio`) REFERENCES `exercicio` (`idexercicio`),
  ADD CONSTRAINT `treino_ibfk_3` FOREIGN KEY (`idequipamento`) REFERENCES `equipamento` (`idequipameto`),
  ADD CONSTRAINT `treino_ibfk_4` FOREIGN KEY (`idmusculo`) REFERENCES `musculo` (`idmusculo`),
  ADD CONSTRAINT `treino_ibfk_5` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`pk_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
