-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 07/11/2023 às 13:17
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
(1, '46342609802', 'ronco', '1 ano', 'nao', 'nao', NULL, 'nao', NULL, 'sim', 'nao', 'sim', 'nao', 'normal', 'sim', 'Losartana', 'nao', NULL, 'nao', 'nao', 'sim', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', '3', '1', '2023-11-01', NULL),
(2, '11208096818', 'não há', '2 anos', 'nao', 'nao', NULL, 'nao', NULL, 'sim', 'nao', 'sim', 'nao', 'normal', 'nao', NULL, 'nao', NULL, 'nao', 'nao', 'sim', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', '3', '1', '2023-11-02', NULL),
(3, '83665598826', 'ronco', '1 ano', 'nao', 'nao', NULL, 'sim', 'arritmia cardíaca', 'sim', 'nao', 'sim', 'nao', 'normal', 'nao', NULL, 'nao', NULL, 'nao', 'nao', 'sim', 'nao', 'nao', 'sim', 'nao', 'nao', 'nao', 'nao', '3', '1', '2023-11-03', NULL),
(4, '69516722881', 'não há', '2 anos', 'nao', 'nao', NULL, 'nao', NULL, 'sim', 'nao', 'sim', 'nao', 'normal', 'nao', NULL, 'nao', NULL, 'nao', 'nao', 'sim', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', '3', '1', '2023-11-04', NULL),
(5, '87846695860', 'não há', '6 meses', 'nao', 'nao', NULL, 'nao', NULL, 'sim', 'nao', 'sim', 'nao', 'normal', 'nao', NULL, 'nao', NULL, 'nao', 'nao', 'sim', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', '3', '1', '2023-11-05', NULL);

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
(1, '46342609802', 'Priscila Stefany Amanda Mendes', '12 992251644', '53', 'casada', 'priscila_mendes@marcossousa.com', 'professora', 'feminino', 'particular', '12240530', '570', 'Avenida Campos Elíseos', 'Jardim Alvorada', 'São José dos Campos', 'SP', '2023-11-01', NULL),
(2, '11208096818', 'Giovanni Mário Duarte', '12 984007180', '23', 'solteiro', 'giovanni-duarte98@gruposandino.com.br', 'estudante', 'masculino', 'particular', '12230420', '573', 'Rua Virgem', 'Jardim Satélite', 'São José dos Campos', 'SP', '2023-11-02', NULL),
(3, '83665598826', 'Hugo Manoel da Paz', '12 986931110', '58', 'casado', 'hugo_manoel_dapaz@rubens.adm.br', 'empresário', 'masculino', 'particular', '12212810', '779', 'Praça César Traballi', 'Jardim Telespark', 'São José dos Campos', 'SP', '2023-11-03', NULL),
(4, '69516722881', 'Diogo Matheus Monteiro', '12 998927377', '39', 'solteiro', 'diogomatheusmonteiro@homtail.com', 'engenheiro', 'masculino', 'particular', '12224793', '445', 'Rua Marcílio Benedito Costa', 'Jardim Pararangaba', 'São José dos Campos', 'SP', '2023-11-04', NULL),
(5, '87846695860', 'Flávia Regina Esther Nunes', '12 999333279', '51', 'casada', 'flavia_regina_nunes@trevorh.com.br', 'dona de casa', 'feminino', 'particular', '12232882', '215', 'Rua Vinte Três', 'Conjunto Residencial Dom Pedro II', 'São José dos Campos', 'SP', '2023-11-05', NULL);

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
(1, 'Priscila Stefany Amanda Mendes', '46342609802', '2023-11-06 14:00:00', '2023-05-15 16:00:00', 'necessita de AIO, aparelho intraoral para ronco', NULL),
(2, 'Giovanni Mário Duarte', '11208096818', '2023-11-08 16:00:00', '2023-11-08 17:00:00', 'iniciado clareamento dental caseiro', NULL),
(3, 'Hugo Manoel da Paz', '83665598826', '2023-11-14 16:00:00', '2023-11-14 18:00:00', 'paciente classe 2, iniciado tratamento de reabilitação oral na arcada superior', NULL),
(4, 'Diogo Matheus Monteiro', '69516722881', '2023-11-15 13:30:00', '2023-11-15 15:00:00', 'efetuadas 2 restaurações na oclusal do 46 e na oclusal do 47', NULL),
(5, 'Flávia Regina Esther Nunes', '87846695860', '2023-11-22 14:30:00', '2023-11-22 16:00:00', 'efetuada limpeza e iniciado clareamento dental caseiro', NULL);

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
  MODIFY `id_anamnese` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `dados_paciente`
--
ALTER TABLE `dados_paciente`
  MODIFY `id_pac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
