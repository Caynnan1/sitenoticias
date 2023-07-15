-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/07/2023 às 17:08
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
-- Banco de dados: `sitenot`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `nome` varchar(400) NOT NULL,
  `icone` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `nome`, `icone`) VALUES
(1, 'Aliados de Tarcísio avaliam que ampliação das escolas cívico-militares é aceno à base de Bolsonaro', 'https://jpimg.com.br/uploads/2023/07/age20230602005-300x170.jpg'),
(2, 'Fernando Holiday deixa o Republicanos após nove meses na sigla', 'https://jpimg.com.br/uploads/2022/04/screenshot-2022-04-14-at-02-43-51-118213862_2721561444748671_7084354792065305995_n.jpg-jpeg-image-975-%C3%97-975-pixels-scaled-75-300x170.png'),
(3, 'Grupo protesta na Fernão Dias contra morte de funcionário por PM na zona norte de SP', 'https://jpimg.com.br/uploads/2017/06/2070621292-o-movimento-de-veiculos-foi-intenso-no-retorno-sao-paulo-pela-rodovia-fernao-dias-entre-os-municipio-300x170.jpg'),
(4, '‘Desrespeito à vontade popular’, diz deputada sobre fim do programa nacional das escolas cívico-militares', 'https://jpimg.com.br/uploads/2023/07/design-sem-nome-14-300x170.png'),
(5, 'O que fazer nas férias de julho? Confira programas de até R$ 60 para crianças e famílias', 'https://jpimg.com.br/uploads/2023/07/346649779_244620268176572_1443474411415674926_n-300x170.jpg'),
(6, 'Grupo protesta na Fernão Dias contra morte de funcionário por PM na zona norte de SP', 'https://jpimg.com.br/uploads/2017/06/2070621292-o-movimento-de-veiculos-foi-intenso-no-retorno-sao-paulo-pela-rodovia-fernao-dias-entre-os-municipio-300x170.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
