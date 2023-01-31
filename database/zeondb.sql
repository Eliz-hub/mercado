-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2022 às 17:16
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `zeondb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` varchar(15) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `pass`) VALUES
('admin', '6eea9b7ef19179a06954edd0f6c05ceb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id_caixa` int(11) NOT NULL,
  `nome_completo` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nr_bi` varchar(13) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cell` int(9) NOT NULL,
  `cell_emergencia` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id_caixa`, `nome_completo`, `data_nascimento`, `nr_bi`, `cidade`, `endereco`, `cell`, `cell_emergencia`, `email`, `senha`, `data_registro`) VALUES
(7, 'Zerdone Rocha', '2003-01-23', '030123970624D', 'Nampula', 'Av. do Trabalho', 855391769, 867710791, 'zerdonerocha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-11-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestor`
--

CREATE TABLE `gestor` (
  `id_gestor` int(11) NOT NULL,
  `nome_completo` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `numero_bi` varchar(13) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cell` int(9) NOT NULL,
  `cell_emergencia` int(9) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `data_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gestor`
--

INSERT INTO `gestor` (`id_gestor`, `nome_completo`, `data_nascimento`, `numero_bi`, `cidade`, `endereco`, `cell`, `cell_emergencia`, `email`, `pass`, `data_registro`) VALUES
(28, 'Edilson Mendonça', '2002-08-11', '013226655212A', 'Nampula', 'Rua dos Combatentes', 847812126, 877247677, 'edilsonmendonca082@gmail.com', '0b280e2608b3cf47e79ab8d960b86fc5', '2022-11-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `preco` int(10) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `validade` date NOT NULL,
  `data_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_produto`, `descricao`, `categoria`, `preco`, `quantidade`, `fabricante`, `validade`, `data_registro`) VALUES
(18, 'Abacaxi 1Kg', 'Fruta', 300, 50, 'Local', '2022-12-14', '2022-11-21'),
(19, 'Acerola 1Kg', 'Fruta', 245, 100, 'Local', '2022-11-29', '2022-11-21'),
(20, 'Atemoia 1Kg', 'Fruta', 90, 100, 'Local', '2022-11-30', '2022-11-21'),
(21, 'Banana Maçã 1Kg', 'Fruta', 125, 200, 'South Africa Exports', '2022-12-08', '2022-11-21'),
(22, 'Canhu 1Kg', 'Fruta', 213, 125, 'South Africa Exports', '2022-11-28', '2022-11-21'),
(23, 'Alicate Universal', 'Ferramentas', 500, 50, 'Tools Tech', '2029-03-29', '2022-11-21'),
(24, 'Canivete Stelt', 'Ferramentas', 600, 60, 'Stelt Tools', '2029-09-28', '2022-11-21'),
(25, 'Fita Isolante 20m', 'Ferramentas', 200, 200, 'FitCot', '2029-10-04', '2022-11-21'),
(26, 'Estojo de Chaves', 'Ferramentas', 700, 20, 'Ferragens Rich', '2034-08-10', '2022-11-21'),
(27, 'Martelo Cabo de Madeira', 'Ferramentas', 600, 39, 'Local', '2035-03-22', '2022-11-21'),
(28, 'Fogão Brastemp', 'Eletrodomésticos', 7500, 15, 'Brastemp Eletrodomestics', '2030-06-26', '2022-11-21'),
(29, 'Geladeira Samsung', 'Eletrodomésticos', 90000, 10, 'Samsung Eletronics', '2027-11-18', '2022-11-21'),
(30, 'Liquidificador 5L', 'Eletrodomésticos', 4500, 27, 'Phillips', '2031-08-13', '2022-11-21'),
(31, 'Máquina de Lavar-roupa', 'Eletrodomésticos', 28000, 18, 'Samsung Eletronics', '2028-03-15', '2022-11-21'),
(32, 'Micro-ondas 10L', 'Eletrodomésticos', 18500, 5, 'Heager', '2032-10-15', '2022-11-21'),
(33, 'Acetona 150ml', 'Higiene e Limpeza', 60, 80, 'Biocosmetics', '2027-12-15', '2022-11-21'),
(34, 'Condicionador 175ml', 'Higiene e Limpeza', 200, 100, 'Tréseme', '2026-04-14', '2022-11-21'),
(35, 'Desodorante', 'Higiene e Limpeza', 150, 200, 'Rexona', '2024-06-04', '2022-11-21'),
(36, 'Desodorante Spray 50ml', 'Higiene e Limpeza', 175, 300, 'Nivea', '2023-07-12', '2022-11-21'),
(37, 'Pasta de Dentes 80g', 'Higiene e Limpeza', 45, 500, 'Elmex', '2024-10-09', '2022-11-21'),
(38, 'Carapau 1Kg', 'Alimentos', 150, 1000, 'Angola Exports', '2023-06-21', '2022-11-21'),
(39, 'Coxas de Galinha 1Kg', 'Alimentos', 200, 200, 'Local', '2023-06-15', '2022-11-21'),
(40, 'Frango 1.2Kg', 'Alimentos', 280, 500, 'Local', '2023-05-04', '2022-11-21'),
(41, 'Chouriço 5Kg', 'Alimentos', 350, 200, 'IZIDORO', '2023-03-15', '2022-11-21'),
(42, 'Carne de Vaca 1Kg', 'Alimentos', 190, 1500, 'Local', '2023-03-23', '2022-11-21'),
(43, 'Peito de Pato 500g', 'Alimentos', 320, 200, 'Swift', '2023-01-26', '2022-11-21'),
(44, 'Martelo Cabo de Borracha', 'Ferramentas', 650, 190, 'Tools Tech', '2027-02-11', '2022-11-21'),
(45, 'Limão 1kg', 'Fruta', 205, 100, 'Local', '2022-12-29', '2022-11-21'),
(46, 'Liquidificador Industrial 20L', 'Eletrodomésticos', 200, 12, 'Industial Eletronics', '2028-03-29', '2022-11-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `cod_venda` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `preco` int(10) NOT NULL,
  `quantidade` int(6) NOT NULL,
  `preco_total` int(10) NOT NULL,
  `data_venda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`cod_venda`, `cod_produto`, `descricao`, `preco`, `quantidade`, `preco_total`, `data_venda`) VALUES
(109, 18, 'Abacaxi 1Kg', 300, 5, 1500, '2022-11-21'),
(110, 23, 'Alicate Universal', 500, 29, 14500, '2022-11-21'),
(111, 27, 'Martelo Cabo de Madeira', 600, 13, 7800, '2022-11-21'),
(112, 30, 'Liquidificador 5L', 4500, 16, 72000, '2022-11-21'),
(113, 35, 'Desodorante', 150, 21, 3150, '2022-11-21'),
(114, 40, 'Frango 1.2Kg', 280, 8, 2240, '2022-11-21'),
(115, 19, 'Acerola 1Kg', 245, 1, 245, '2022-11-21'),
(116, 43, 'Peito de Pato 500g', 320, 3, 960, '2022-11-21'),
(117, 42, 'Carne de Vaca 1Kg', 190, 2, 380, '2022-11-21'),
(118, 24, 'Canivete Stelt', 600, 8, 4800, '2022-11-21'),
(119, 40, 'Frango 1.2Kg', 280, 4, 1120, '2022-11-21'),
(120, 46, 'Liquidificador Industrial', 200, 4, 800, '2022-11-21'),
(121, 43, 'Peito de Pato 500g', 320, 2, 640, '2022-11-21'),
(145, 35, 'Desodorante', 150, 9, 1350, '2022-11-21'),
(148, 40, 'Frango 1.2Kg', 280, 34, 9520, '2022-11-21'),
(149, 37, 'Pasta de Dentes 80g', 45, 25, 1125, '2022-11-21'),
(150, 19, 'Acerola 1Kg', 245, 34, 8330, '2022-11-21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id_caixa`);

--
-- Índices para tabela `gestor`
--
ALTER TABLE `gestor`
  ADD PRIMARY KEY (`id_gestor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`cod_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id_caixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `gestor`
--
ALTER TABLE `gestor`
  MODIFY `id_gestor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `cod_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
