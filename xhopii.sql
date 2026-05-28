-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2026 às 03:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'img/cliente.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `cpf`, `dataNascimento`, `telefone`, `email`, `senha`, `foto`) VALUES
(1, 'Nina ', 'Ninoca', '00', '2019-08-18', '183365189', 'nina@gmail.com', '123', 'img/cliente.png'),
(2, 'Nino', 'Ninoco', '789.885.654-59', '2026-05-14', '18996320649', 'nino@gmail.com', '321', 'img/cliente.png'),
(3, 'Teste Login Banco', 'Testando', '12344578956', '2026-05-29', '189963202', 'teste@gmail', '456', 'img/cliente.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupom`
--

CREATE TABLE `cupom` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `tipoDesconto` varchar(50) NOT NULL,
  `valorDesconto` decimal(10,2) NOT NULL,
  `dataValidade` date NOT NULL,
  `quantidadeUsos` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT 'img/cupom.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cupom`
--

INSERT INTO `cupom` (`id`, `codigo`, `tipoDesconto`, `valorDesconto`, `dataValidade`, `quantidadeUsos`, `foto`) VALUES
(1, 'N10%', '-10', 10.00, '0000-00-00', 2, 'img/cupom.png'),
(2, 'asd', 'qdqw', 54.00, '0000-00-00', 2, 'img/cupom.png'),
(3, 'asdeeeeeee', 'qdqweeeee', 54.00, '0000-00-00', 6, 'img/cupom.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `dataAdmissao` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'img/funcionario.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `sobrenome`, `cpf`, `dataAdmissao`, `telefone`, `cargo`, `salario`, `email`, `senha`, `foto`) VALUES
(1, 'Nina', 'Ninoca', '789.558.256-98', '2026-05-01', '7855963201', 'Dona', 8000.00, 'N@gmail.com', 'N1234o3jr20inr', 'img/funcionario.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja`
--

CREATE TABLE `loja` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `loja`
--

INSERT INTO `loja` (`id`, `nome`, `cnpj`, `email`, `telefone`, `endereco`) VALUES
(1, 'Nina Dog Dog', '785423856', 'nina@ninadogdog', '789558', 'Rua Sem Nome, 12 - Sem Bairro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `fabricante` varchar(100) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'img/produto1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `foto`) VALUES
(1, 'Cama', 'Nina Dog', 'Cama confortável para cachorro', 59.00, 70, 'img/produto1.png'),
(2, 'Iphone', 'Apple', 'Iphone 17 - 256GB', 5000.00, 15, 'img/produto1.png'),
(3, 'Teste', 'nenhum', 'zero', 89.00, 890, 'img/produtos/produto_6a178eee882ac.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
