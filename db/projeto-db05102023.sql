-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 05/10/2023 às 16:20
-- Versão do servidor: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- Versão do PHP: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto-db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_anamnese`
--

CREATE TABLE `dados_anamnese` (
  `id_anamnese` int(8) UNSIGNED NOT NULL,
  `CPF` varchar(30) DEFAULT NULL,
  `problem` varchar(50) DEFAULT NULL,
  `visit` varchar(30) DEFAULT NULL,
  `medical` varchar(30) DEFAULT NULL,
  `allergies` varchar(30) DEFAULT NULL,
  `allergies_desc` varchar(50) DEFAULT NULL,
  `heart` varchar(30) DEFAULT NULL,
  `heart_desc` varchar(50) DEFAULT NULL,
  `benz` varchar(30) DEFAULT NULL,
  `benz_problem` varchar(30) DEFAULT NULL,
  `dipirona` varchar(30) DEFAULT NULL,
  `dip_problem` varchar(30) DEFAULT NULL,
  `pressure` varchar(20) DEFAULT NULL,
  `press_med` varchar(30) DEFAULT NULL,
  `press_medicine` varchar(50) DEFAULT NULL,
  `renal` varchar(30) DEFAULT NULL,
  `renal_problem` varchar(50) DEFAULT NULL,
  `diabete` varchar(30) DEFAULT NULL,
  `hepatite` varchar(30) DEFAULT NULL,
  `anest` varchar(30) DEFAULT NULL,
  `anest_problem` varchar(30) DEFAULT NULL,
  `protese` varchar(30) DEFAULT NULL,
  `marcap` varchar(30) DEFAULT NULL,
  `transf` varchar(30) DEFAULT NULL,
  `droga` varchar(30) DEFAULT NULL,
  `fuma` varchar(30) DEFAULT NULL,
  `gravida` varchar(30) DEFAULT NULL,
  `escovacao` varchar(30) DEFAULT NULL,
  `fio_dental` varchar(30) DEFAULT NULL,
  `criado` varchar(30) DEFAULT NULL,
  `modificado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Despejando dados para a tabela `dados_anamnese`
--

INSERT INTO `dados_anamnese` (`id_anamnese`, `CPF`, `problem`, `visit`, `medical`, `allergies`, `allergies_desc`, `heart`, `heart_desc`, `benz`, `benz_problem`, `dipirona`, `dip_problem`, `pressure`, `press_med`, `press_medicine`, `renal`, `renal_problem`, `diabete`, `hepatite`, `anest`, `anest_problem`, `protese`, `marcap`, `transf`, `droga`, `fuma`, `gravida`, `escovacao`, `fio_dental`, `criado`, `modificado`) VALUES
(14, '39941219060', 'TESTE', 'TESTE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-04 11:23:29', NULL),
(15, '51779205007', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-04 13:47:39', NULL),
(16, '68654768088', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-04 13:50:24', NULL),
(19, '36563985009', 'sdgsdgdfgd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-10-04 14:09:22', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_paciente`
--

CREATE TABLE `dados_paciente` (
  `id_pac` int(11) NOT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `nome` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `idade` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `work` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `convenio` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `CEP` varchar(20) DEFAULT NULL,
  `ad_number` varchar(10) DEFAULT NULL,
  `street` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `district` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `city` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `state` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `criado` varchar(30) DEFAULT NULL,
  `modificado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_paciente`
--

INSERT INTO `dados_paciente` (`id_pac`, `CPF`, `nome`, `celular`, `idade`, `estado_civil`, `email`, `work`, `gender`, `convenio`, `CEP`, `ad_number`, `street`, `district`, `city`, `state`, `criado`, `modificado`) VALUES
(11, '12345678909', 'Baptista Oliveira de Souza', '1298547-85144', '03101990', '', 'baptista.bpsj@gmail.com', '', '', '', '', '', '', '', '', '', '2023-10-03 19:45:10', '2023-10-05 16:11:31'),
(12, '39941219060', 'Daten Antunes da Silva', '1298547-12124', '', '', 'daten.datener@hotmail.com', '', '', '', '', '', '', '', '', '', '2023-10-04 13:41:05', '2023-10-05 16:15:22'),
(15, '36563985009', 'Jef', '1198547-8545', '', '', 'jefbezzos@xyz.com', '', '', '', '', '', '', '', '', '', '2023-10-04 14:07:55', '2023-10-05 16:08:08');

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `color` varchar(30) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `url` varchar(220) DEFAULT NULL,
  `modificado` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `url`, `modificado`) VALUES
(1, 'Joel Justino', '42338847890', '2023-09-27 00:00:00', '2023-09-27 00:00:00', 'jkhjkhjkh', NULL),
(2, 'Joel Justino', '42338847890', '2023-09-27 00:00:00', '2023-09-27 00:00:00', 'jkhjkhjkh', NULL),
(3, 'Joel Justino', '42338847890', '2023-09-27 00:00:00', '2023-09-27 00:00:00', 'jkhjkhjkh', NULL),
(4, 'Joel Justino', '42338847890', '2023-09-27 00:00:00', '2023-09-27 00:00:00', 'jkhjkhjkh', NULL),
(5, 'Joel Justino', '42338847890', '2023-09-27 00:00:00', '2023-09-27 00:00:00', 'jkhjkhjkh', NULL),
(6, 'Joel Justino', '42338847890', '2023-09-28 00:00:00', '2023-09-28 00:00:00', 'hjk', NULL),
(7, 'Joel Justino', '42338847890', '2023-09-29 00:00:00', '2023-09-29 00:00:00', 'hjhgjg', NULL),
(8, 'Joel Justino', '42338847890', '2023-09-29 00:00:00', '2023-09-29 00:00:00', 'hjhgjg', NULL),
(9, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(10, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(12, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(13, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(14, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(15, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(16, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(17, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(18, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(19, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(20, 'oiii', '13465', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'descricao', NULL),
(21, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(22, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(23, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(24, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(25, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(26, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(27, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(28, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(29, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(30, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(31, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(32, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(33, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(34, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(35, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(36, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(37, 'Joel Justino', '42338847890', '2023-09-30 00:00:00', '2023-09-30 00:00:00', 'fghgfhf', NULL),
(38, 'Joel Justino', '42338847890', '2023-10-01 00:00:00', '2023-10-01 00:00:00', '', NULL),
(39, 'Joel Justino', '42338847890', '2023-10-01 00:00:00', '2023-10-01 00:00:00', '', NULL),
(40, 'Joel Justino', '42338847890', '2023-10-01 00:00:00', '2023-10-01 00:00:00', '', NULL),
(41, 'Joel Justino', '42338847890', '2023-10-01 00:00:00', '2023-10-01 00:00:00', '', NULL),
(42, 'Joel Justino', '42338847890', '2023-10-01 00:00:00', '2023-10-01 00:00:00', '', NULL),
(43, 'Joel Justino', '42338847890', '2023-10-01 00:00:00', '2023-10-01 00:00:00', '', NULL),
(44, 'Joel Justino', '42338847890', '2023-10-03 00:00:00', '2023-10-03 00:00:00', 'hgjg', NULL),
(45, 'Joel Justino', '42338847890', '2023-10-03 00:00:00', '2023-10-03 00:00:00', 'hgjg', NULL),
(46, 'Joel Justino', '42338847890', '2023-10-06 00:00:00', '2023-10-06 00:00:00', 'ghjg', NULL),
(47, 'Joel Justino', '42338847890', '2023-10-06 00:00:00', '2023-10-06 00:00:00', 'ghjg', NULL),
(48, 'Joel Justino', '42338847890', '2023-10-05 00:00:00', '2023-10-05 00:00:00', 'FDSFSDFSFDS', NULL),
(49, 'Joel Justino', '42338847890', '2023-09-26 00:00:00', '2023-09-26 00:00:00', 'FGHFGH', NULL),
(50, 'Joel Justino', '42338847890', '2023-09-21 00:00:00', '2023-09-21 00:00:00', 'gdgdgfdfgd', NULL),
(51, 'Rita Pereira Justino', '38103873802', '2023-09-15 00:00:00', '2023-09-15 00:00:00', 'sdfsdfsd', NULL),
(52, 'Jef', '36563985009', '2023-10-09 05:00:00', '2023-10-09 06:00:00', 'GGGGGGGGGGGGGGGGGGGGGGG HHHHHH', '2023-10-04 14:11:50'),
(53, 'Joel Justino', '42338847890', '2023-10-10 01:00:00', '2023-10-10 02:00:00', '', NULL),
(54, 'Joel Justino', '42338847890', '2023-10-11 00:00:00', '2023-10-11 00:00:00', '', NULL),
(55, 'Daten Antunes da Silva', '39941219060', '2023-10-18 13:00:00', '2023-10-18 14:00:00', 'Inspeção inicial.', NULL),
(56, 'Daten Antunes da Silva', '39941219060', '2023-10-25 15:00:00', '2023-10-25 16:00:00', 'Canal.', NULL),
(57, 'Daten Antunes da Silva', '39941219060', '2023-11-01 17:00:00', '2023-11-01 18:00:00', 'Modelagem da coroa.', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados_anamnese`
--
ALTER TABLE `dados_anamnese`
  ADD PRIMARY KEY (`id_anamnese`);

--
-- Índices de tabela `dados_paciente`
--
ALTER TABLE `dados_paciente`
  ADD PRIMARY KEY (`id_pac`);

--
-- Índices de tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_anamnese`
--
ALTER TABLE `dados_anamnese`
  MODIFY `id_anamnese` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `dados_paciente`
--
ALTER TABLE `dados_paciente`
  MODIFY `id_pac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
