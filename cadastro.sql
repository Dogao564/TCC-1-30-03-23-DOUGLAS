-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2023 às 21:36
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `efetivo`
--

CREATE TABLE `efetivo` (
  `ID` int(255) UNSIGNED NOT NULL,
  `Nome` text NOT NULL,
  `PostoGRAD` varchar(255) NOT NULL,
  `RG` int(255) NOT NULL,
  `CPF` varchar(255) NOT NULL,
  `Mem` varchar(255) NOT NULL,
  `PAE` varchar(255) NOT NULL,
  `Equipe` text NOT NULL,
  `MF` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `efetivo`
--

INSERT INTO `efetivo` (`ID`, `Nome`, `PostoGRAD`, `RG`, `CPF`, `Mem`, `PAE`, `Equipe`, `MF`) VALUES
(3, 'oitd bem', '1º TEN', 123123, '123123', '123123', '123123', 'Alpha', 312312132),
(4, 'douglas', 'SD', 312, '123', '312123', '312132', 'Alpha', 123123),
(5, 'nao', 'SUB TEN', 515, '123', '123', '12341', 'Charlie', 451),
(6, 'acredito', 'SD', 123132, '123123', '312', '132312', 'Alpha', 123),
(7, 'deu ', 'SD', 123, '3213', '123', '123', 'Alpha', 312),
(8, 'certo', 'SD', 123, '', '123', '312312', 'Charlie', 123123),
(9, 'hahasha', 'SD', 2147483647, '12312', '312312', '312', 'Alpha', 312312312),
(10, 'coringei', 'SD', 123123, '123123', '457454', '312', 'Delta', 665),
(11, 'teste 4', 'SD', 54654, '123132', '654', '654', 'Alpha', 654),
(12, 'teste 5', 'SD', 984965, '2313987', '981968', '98498498', 'Alpha', 98541),
(13, 'teste 6 ', 'SD', 86977498, '321', '654651', '651651', 'Alpha', 948651),
(14, 'teste 7', 'Ten Cel', 65165, '45646', '981981', '891891', 'Charlie', 189981);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_nasc`) VALUES
(1, 'douglas', 'doguinhak7@gmail.conm', '123456', '0000-00-00'),
(2, 'MARIA', 'MARIA@gmail.conm', '66666', '0000-00-00'),
(3, 'MARIA', 'MARIA@gmail.conm', '123', '0000-00-00'),
(4, 'MARIA11', 'MARIA@gmail.conm2', '12341234', '0000-00-00'),
(5, 'MARIA112', 'MARIA@gmail.conm2', '33', '0000-00-00'),
(6, 'oioi', 'oi@gmail.com', '12345', '0000-00-00'),
(7, 'diemison', 'diemisn@diemsion.com', '12345679', '0000-00-00'),
(8, 'douglas', 'doguinhak7@gmail.conm', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `efetivo`
--
ALTER TABLE `efetivo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `efetivo`
--
ALTER TABLE `efetivo`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
