-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Set-2017 às 00:34
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `lang_item` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `lang_item`) VALUES
(1, 'CATEGORIA_PHOTO'),
(3, 'CATEGORIA_CLOTHES');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `data_acao` datetime NOT NULL,
  `acao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `ip`, `data_acao`, `acao`) VALUES
(1, '1270', '2017-09-26 18:24:38', 'Entrou na pÃ¡gina inicial'),
(2, '1270', '2017-09-26 18:24:40', 'Entrou na pÃ¡gina inicial'),
(3, '127.0.0.1', '2017-09-26 18:24:57', 'Entrou na pÃ¡gina inicial'),
(4, '127.0.0.1', '2017-09-26 18:24:58', 'Entrou na pÃ¡gina inicial'),
(5, '127.0.0.1', '2017-09-26 18:26:11', 'Entrou na pÃ¡gina inicial'),
(6, '127.0.0.1', '2017-09-26 18:26:12', 'Entrou na pÃ¡gina inicial'),
(7, '127.0.0.1', '2017-09-26 18:26:12', 'Entrou na pÃ¡gina inicial'),
(8, '127.0.0.1', '2017-09-26 18:26:12', 'Entrou na pÃ¡gina inicial'),
(9, '127.0.0.1', '2017-09-26 18:26:13', 'Entrou na pÃ¡gina inicial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `valor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lang`
--

INSERT INTO `lang` (`id`, `lang`, `nome`, `valor`) VALUES
(1, 'en', 'CATEGORIA_PHOTO', 'Photos'),
(2, 'pt-br', 'CATEGORIA_PHOTO', 'Fotos'),
(3, 'es', 'CATEGORIA_PHOTO', 'Fotolos'),
(4, 'en', 'CATEGORIA_CLOTHES', 'Clothes'),
(5, 'pt-br', 'CATEGORIA_CLOTHES', 'Roupas'),
(6, 'es', 'CATEGORIA_CLOTHES', 'Roupalas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Samuca', 'samuca@samuca.eti.br', '123'),
(2, 'Cintia Ruckl Hantschel', '202cb962ac59075b964b07152d234b70', 'cintia@samuca.eti.br'),
(3, 'Oliver', 'oli@samuca.eti.br', '202cb962ac59075b964b07152d234b70'),
(4, 'Samuca', 'teste@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Samuca', 'teste@hotmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
