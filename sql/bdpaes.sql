-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06/06/2017 às 18:57
-- Versão do servidor: 5.7.18-0ubuntu0.17.04.1
-- Versão do PHP: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdpaes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `compra` decimal(10,2) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `produto_idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `compra`
--

INSERT INTO `compra` (`id`, `compra`, `data`, `produto_idproduto`) VALUES
(1, '17.90', '2017-05-29 00:00:00', 2),
(2, '11.00', '2017-05-30 00:00:00', 2),
(3, '6.70', '2017-05-30 00:00:00', 2),
(4, '9.00', '2017-06-01 00:00:00', 2),
(7, '20.00', '2017-06-02 07:22:19', 2),
(8, '57.00', '2017-06-02 06:54:39', 2),
(9, '47.00', '2017-06-04 10:45:23', 2),
(10, '43.00', '2017-06-06 07:25:12', 2),
(11, '50.00', '2017-06-06 17:57:27', 2),
(12, '21.00', '2017-06-06 18:36:10', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `produto` varchar(90) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `produto`, `data`) VALUES
(1, 'Venda', '2017-05-30 00:00:00'),
(2, 'Compra', '2017-05-30 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL,
  `venda_diarias` decimal(10,2) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `produto_idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `venda`
--

INSERT INTO `venda` (`idvenda`, `venda_diarias`, `data`, `produto_idproduto`) VALUES
(1, '46.00', '2017-05-29 00:00:00', 1),
(2, '35.00', '2017-05-30 00:00:00', 1),
(15, '35.00', '2017-05-31 22:45:59', 1),
(17, '43.00', '2017-06-01 18:54:42', 1),
(18, '90.00', '2017-06-02 06:54:14', 1),
(19, '49.00', '2017-06-04 10:44:34', 1),
(20, '62.00', '2017-06-06 07:24:28', 1),
(21, '53.00', '2017-06-06 17:57:20', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compra_produto1_idx` (`produto_idproduto`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`idvenda`),
  ADD KEY `fk_venda_produto_idx` (`produto_idproduto`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `idvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_produto` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
