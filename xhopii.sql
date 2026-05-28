-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2026 às 20:14
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
-- Estrutura da tabela `cliente`
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
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `cpf`, `dataNascimento`, `telefone`, `email`, `senha`, `foto`) VALUES
(4, 'Gabriel', 'Tanaka', '491.284.730-15', '2001-04-12', '(11) 98742-1560', 'cli1@gmail', '123', 'img/clientes/cliente_6a1874a203bd9.png'),
(5, 'Camila', 'Barbosa', '683.915.247-80', '1998-08-25', '(11) 96418-2037', 'cli2@gmail', '123', 'img/clientes/cliente_6a1874c2630fa.png'),
(6, 'Roberto', 'Martins', '274.650.193-42', '1972-02-03', '(11) 95327-8491', 'cli3@gmail', '123', 'img/clientes/cliente_6a1874e8cc6b3.png'),
(7, 'Larissa', 'Manoela', '739.208.561-04', '2000-11-19', '(11) 98264-7305', 'cli4@gmail', '123', 'img/clientes/cliente_6a187509939b1.png'),
(8, 'André', 'Carvalho', '158.742.906-33', '1995-06-07', '(11) 97135-6428', 'cli5@gmail', '123', 'img/clientes/cliente_6a18752ef055e.png'),
(9, 'Júlia', 'Fernandes', '820.436.175-69', '2002-01-30', '(11) 99620-4183', 'cli6@gmail', '123', 'img/clientes/cliente_6a187559ad4fc.png'),
(10, 'Diego', 'Nascimento', '346.901.528-77', '1997-01-16', '(11) 95873-2916', 'cli7@gmail', '123', 'img/clientes/cliente_6a1875873dd62.png'),
(11, 'Bianca', 'Azevedo', '905.317.684-22', '1999-03-22', '(11) 98451-6072', 'cli8@gmail', '123', 'img/clientes/cliente_6a1875acdbc64.png'),
(12, 'Patrícia', 'Ribeiro', '617.092.438-51', '1999-12-11', '(11) 96784-1359', 'cli9@gmail', '123', 'img/clientes/cliente_6a1875d6cb0dc.png'),
(13, 'Dona', 'Maria', '432.859.716-08', '1956-07-05', '(11) 95419-8260', 'cli10@gmail.com', '123', 'img/clientes/cliente_6a1875fdc3fcf.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupom`
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
-- Extraindo dados da tabela `cupom`
--

INSERT INTO `cupom` (`id`, `codigo`, `tipoDesconto`, `valorDesconto`, `dataValidade`, `quantidadeUsos`, `foto`) VALUES
(4, 'XHOPII10', 'Porcentagem', '10.00', '0000-00-00', 20, 'img/cupons/cupom_6a18774ed3191.png'),
(5, 'FRETEGRATIS', 'Frete grátis', '0.00', '0000-00-00', 10, 'img/cupons/cupom_6a187775457bf.png'),
(6, 'CLIENTE15', 'Porcentagem', '15.00', '0000-00-00', 90, 'img/cupons/cupom_6a187793910f8.png'),
(7, 'PRIMEIRACOMPRA', 'Valor fixo', '20.00', '0000-00-00', 1, 'img/cupons/cupom_6a1877bd8973d.png'),
(8, 'SUPEROFERTA', 'Porcentagem', '25.00', '0000-00-00', 100, 'img/cupons/cupom_6a1877e284a4a.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
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
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `sobrenome`, `cpf`, `dataAdmissao`, `telefone`, `cargo`, `salario`, `email`, `senha`, `foto`) VALUES
(2, 'Lucas', 'Alemeida', '433.906.245-62', '1999-09-15', '1899999999', 'Atendente', '1850.00', 'func1@gmail', '321', 'img/funcionarios/funcionario_6a18714b00704.png'),
(3, 'Marine', 'Costa', '702.392.684-40', '2007-09-13', '19888288', 'Operadora de Caixa', '1950.00', 'func2@gmail', '123', 'img/funcionarios/funcionario_6a18719f8c496.png'),
(4, 'Rafael', 'Santos', '215.348.298-49', '2012-12-31', '99002022', 'Estoquista', '2100.00', 'func3@gmail', '43543', 'img/funcionarios/funcionario_6a1871d452c13.png'),
(5, 'Aline', 'Ferreira', '336.157.059-04', '2000-05-08', '198883838', 'Supervisora de Loja', '3200.00', 'func4@gmail', '3453', 'img/funcionarios/funcionario_6a18720c42aa8.png'),
(6, 'Beatriz', 'Oliveira', '208.290.907-70', '2028-03-07', '135645645', 'Auxiliar de Vendas', '1800.00', 'func5@gmail', '646756', 'img/funcionarios/funcionario_6a18723c24634.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
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
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id`, `nome`, `cnpj`, `email`, `telefone`, `endereco`) VALUES
(2, 'Xhopii Center', '42735891000160', 'contato@xhopiicenter.com', '1134567890', 'Av. Paulista, 1500 - Bela Vista, São Paulo - SP'),
(3, 'Xhopii Fashion', '18924673000122', 'atendimento@xhopiifashion.com', '11976542189', 'Rua das Flores, 245 - Centro, Campinas - SP'),
(4, 'Xhopii Tech', '57308246000195', 'suporte@xhopiitech.com', '11934287610', 'Av. Brasil, 980 - Jardim América, São Paulo - SP'),
(5, 'Xhopii Express', '33691508000147', 'vendas@xhopiiexpress.com', '11965438721', 'Rua Aurora, 320 - Santa Ifigênia, São Paulo - SP'),
(6, 'Xhopii Market', '76215934000108', 'contato@xhopiimarket.com', '11988764502', 'Av. Independência, 710 - Centro, Guarulhos - SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
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
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `foto`) VALUES
(4, 'Garrafa de Água', 'Água Vida', 'Melhor água do mundo', '5.00', 290, 'img/produtos/produto_6a186cbf6b18d.png'),
(5, 'Perfume do Bom', 'Perfume´s top', 'Melhor fixação do mundo', '350.00', 120, 'img/produtos/produto_6a186d48ab191.png'),
(6, 'Barra de Chocolate', 'Bombons', 'Doce que é doce de verdade', '25.00', 230, 'img/produtos/produto_6a186d7dc18f0.png'),
(7, 'Batatas Batatas', 'Batateiros', 'Crocante e deliciosa', '12.00', 1200, 'img/produtos/produto_6a186db5cc1fa.png'),
(8, 'Café Vermelho', 'Café du Bom', 'Grãos vermelhos selecionados', '49.00', 900, 'img/produtos/produto_6a186df5cf5ab.png'),
(9, 'Creme de Pele', 'Creems', 'Para peles de todos os tipos', '89.00', 287, 'img/produtos/produto_6a186e572251d.png'),
(10, 'Quase Cola', 'Colas Co', 'Quase gêmeas', '9.00', 370, 'img/produtos/produto_6a186ea3463ea.png'),
(11, 'Sabonete de lavanda', 'Lavandeiro', 'O cheiro da lavanda nas suas mãos', '35.00', 200, 'img/produtos/produto_6a186ec4ce58a.png'),
(12, 'Xícara', 'Xique´s Xique´s', 'Feito com porcelana ', '78.00', 876, 'img/produtos/produto_6a186ef6cdf09.png'),
(13, 'Fone Preto', 'Fones para ouvidões', 'Fones gigantes', '69.00', 2, 'img/produtos/produto_6a186f4d019d3.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
