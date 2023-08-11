-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 16/05/2023 às 00:25
-- Versão do servidor: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- Versão do PHP: 8.1.17

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
  `fio_dental` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Despejando dados para a tabela `dados_anamnese`
--

INSERT INTO `dados_anamnese` (`id_anamnese`, `CPF`, `problem`, `visit`, `medical`, `allergies`, `allergies_desc`, `heart`, `heart_desc`, `benz`, `benz_problem`, `dipirona`, `dip_problem`, `pressure`, `press_med`, `press_medicine`, `renal`, `renal_problem`, `diabete`, `hepatite`, `anest`, `anest_problem`, `protese`, `marcap`, `transf`, `droga`, `fuma`, `gravida`, `escovacao`, `fio_dental`) VALUES
(1, '123.456.789-10', 'dasda', 'dasda', 'dasda', 'dasda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '423.388.478-90', 'Dor', '2 meses', '1', '1', 'Abelha', '0', '', '1', '0', '1', '0', 'Normal', '0', '', '0', '', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '3', '3');

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
(8, '123.456.789-10', 'Ronaldinho da Silva Junior', '1295698-8745', '03102021', 'gg', 'asdasdas@hotmail.com', 'g', 'homem', 'ggg', '12235000', '453', 'Avenida Guadalupe', 'Jardim América', 'São José dos Campos', 'SP', NULL, '2023-05-15 19:38:04'),
(9, '423.388.478-90', 'Joel Justino', '12 98107-3748', '03/10/1995', 'Casado', 'joelsaudesucesso@gmail.com', 'Aluno', 'homem', 'Particular', '12228710', '212', 'Rua H18A', 'Campus do CTA', 'São José dos Campos', 'SP', NULL, NULL),
(10, '666.666.666-66', 'Pi Justino Pereira', '13985698547', '20052019', 'Solteiro', 'pi@hotmail.com', 'Gato', '', 'Particular', '12235000', '10', 'Avenida Guadalupe', 'Jardim América', 'São José dos Campos', 'SP', NULL, '2023-05-15 22:11:03'),
(11, '1', 'TESTE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `color` varchar(10) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(7, 'Joel', '#FFD700', '2023-05-08 00:00:00', '2023-05-08 00:00:00'),
(8, '423.388.478-90', '#FF4500', '2023-05-09 00:00:00', '2023-05-09 00:00:00'),
(9, 'Joel Justino', '#1C1C1C', '2023-05-18 00:00:00', '2023-05-18 00:00:00'),
(10, 'Ronaldinho', '', '2023-05-15 00:00:00', '2023-05-15 00:00:00'),
(11, 'Joel Justino', '', '2023-05-16 00:00:00', '2023-05-16 00:00:00'),
(12, 'Joel Justino', '', '2023-05-19 00:00:00', '2023-05-19 00:00:00'),
(13, 'Joel Justino', '#8B4513', '2023-05-20 16:00:00', '2023-05-20 17:00:00'),
(14, 'Ronaldinho', '#A020F0', '2023-05-20 00:00:00', '2023-05-20 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_apagar_agenda`
--

CREATE TABLE `z_apagar_agenda` (
  `id_agendamento` mediumint(8) UNSIGNED NOT NULL,
  `CRO` mediumint(6) UNSIGNED NOT NULL,
  `data_solicitacao` date DEFAULT NULL,
  `hora_solicitacao` time DEFAULT NULL,
  `id_pac` mediumint(8) UNSIGNED NOT NULL,
  `data_agendamento` date DEFAULT NULL,
  `hora_agendamento` time DEFAULT NULL,
  `status_confirmacao` enum('confirmado','solicitada confirmacao','nao confirmado') DEFAULT 'nao confirmado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_apagar_anamnese`
--

CREATE TABLE `z_apagar_anamnese` (
  `id_anamnese` mediumint(8) UNSIGNED NOT NULL,
  `problem` varchar(50) DEFAULT NULL,
  `visit` varchar(30) NOT NULL,
  `medical` enum('sim','nao') DEFAULT NULL,
  `allergies` enum('sim','nao') DEFAULT NULL,
  `allergies_desc` varchar(50) DEFAULT NULL,
  `heart` enum('sim','nao') DEFAULT NULL,
  `heart_desc` varchar(50) DEFAULT NULL,
  `benz` enum('sim','nao') DEFAULT NULL,
  `benz_problem` enum('sim','nao') DEFAULT NULL,
  `dipirona` enum('sim','nao') DEFAULT NULL,
  `dip_problem` enum('sim','nao') DEFAULT NULL,
  `pressure` varchar(20) DEFAULT NULL,
  `press_med` enum('sim','nao') DEFAULT NULL,
  `press_medicine` varchar(50) DEFAULT NULL,
  `renal` enum('sim','nao') DEFAULT NULL,
  `renal_problem` varchar(50) DEFAULT NULL,
  `diabete` enum('sim','nao') DEFAULT NULL,
  `hepatite` enum('sim','nao') DEFAULT NULL,
  `anest` enum('sim','nao') DEFAULT NULL,
  `anest_problem` enum('sim','nao') DEFAULT NULL,
  `protese` enum('sim','nao') DEFAULT NULL,
  `marcap` enum('sim','nao') DEFAULT NULL,
  `transf` enum('sim','nao') DEFAULT NULL,
  `droga` enum('sim','nao') DEFAULT NULL,
  `fuma` enum('sim','nao') DEFAULT NULL,
  `gravida` enum('sim','nao') DEFAULT NULL,
  `escovacao` tinyint(4) NOT NULL,
  `fio_dental` tinyint(4) NOT NULL,
  `CPF_pac` bigint(20) UNSIGNED NOT NULL,
  `id_pac` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_apagar_consulta`
--

CREATE TABLE `z_apagar_consulta` (
  `id_consulta` mediumint(8) UNSIGNED NOT NULL,
  `data_consulta` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `id_pac` mediumint(8) UNSIGNED NOT NULL,
  `CRO` mediumint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_apagar_dados_paciente`
--

CREATE TABLE `z_apagar_dados_paciente` (
  `CPF` bigint(14) UNSIGNED NOT NULL,
  `nome` varchar(40) NOT NULL,
  `celular` mediumint(11) UNSIGNED NOT NULL,
  `idade` date DEFAULT NULL,
  `estado_civil` enum('Solteiro(a)','Casado(a)','Divorciado(a)','Viuvo(a)') DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `work` varchar(40) DEFAULT NULL,
  `gender` enum('M','F','O') DEFAULT NULL,
  `convenio` varchar(20) DEFAULT 'particular',
  `CEP` int(10) UNSIGNED DEFAULT NULL,
  `ad_number` mediumint(8) UNSIGNED DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `id_anamnese` int(10) UNSIGNED DEFAULT NULL,
  `id_pac` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_apagar_dentista`
--

CREATE TABLE `z_apagar_dentista` (
  `CRO` mediumint(6) UNSIGNED NOT NULL,
  `CPF` bigint(11) UNSIGNED NOT NULL,
  `nome_den` varchar(30) NOT NULL,
  `id_consulta` mediumint(7) DEFAULT NULL,
  `id_agendamento` mediumint(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `z_apagar_pacient`
--

CREATE TABLE `z_apagar_pacient` (
  `id_pac` mediumint(8) UNSIGNED NOT NULL,
  `id_consulta` mediumint(8) UNSIGNED NOT NULL,
  `id_agendamento` mediumint(8) UNSIGNED DEFAULT NULL,
  `CPF_pac` bigint(20) UNSIGNED DEFAULT NULL,
  `id_anamnese` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

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
-- Índices de tabela `z_apagar_agenda`
--
ALTER TABLE `z_apagar_agenda`
  ADD PRIMARY KEY (`id_agendamento`),
  ADD KEY `CRO` (`CRO`),
  ADD KEY `id_pac` (`id_pac`);

--
-- Índices de tabela `z_apagar_anamnese`
--
ALTER TABLE `z_apagar_anamnese`
  ADD PRIMARY KEY (`id_anamnese`),
  ADD KEY `z_apagar_anamnese_ibfk_1` (`id_pac`),
  ADD KEY `z_apagar_anamnese_ibfk_2` (`CPF_pac`);

--
-- Índices de tabela `z_apagar_consulta`
--
ALTER TABLE `z_apagar_consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_pac` (`id_pac`),
  ADD KEY `CRO` (`CRO`);

--
-- Índices de tabela `z_apagar_dados_paciente`
--
ALTER TABLE `z_apagar_dados_paciente`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices de tabela `z_apagar_dentista`
--
ALTER TABLE `z_apagar_dentista`
  ADD PRIMARY KEY (`CRO`);

--
-- Índices de tabela `z_apagar_pacient`
--
ALTER TABLE `z_apagar_pacient`
  ADD PRIMARY KEY (`id_pac`),
  ADD KEY `id_anamnese` (`id_anamnese`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_anamnese`
--
ALTER TABLE `dados_anamnese`
  MODIFY `id_anamnese` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dados_paciente`
--
ALTER TABLE `dados_paciente`
  MODIFY `id_pac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `z_apagar_agenda`
--
ALTER TABLE `z_apagar_agenda`
  MODIFY `id_agendamento` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4000;

--
-- AUTO_INCREMENT de tabela `z_apagar_anamnese`
--
ALTER TABLE `z_apagar_anamnese`
  MODIFY `id_anamnese` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `z_apagar_consulta`
--
ALTER TABLE `z_apagar_consulta`
  MODIFY `id_consulta` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000;

--
-- AUTO_INCREMENT de tabela `z_apagar_pacient`
--
ALTER TABLE `z_apagar_pacient`
  MODIFY `id_pac` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `z_apagar_agenda`
--
ALTER TABLE `z_apagar_agenda`
  ADD CONSTRAINT `z_apagar_agenda_ibfk_1` FOREIGN KEY (`CRO`) REFERENCES `z_apagar_dentista` (`CRO`),
  ADD CONSTRAINT `z_apagar_agenda_ibfk_2` FOREIGN KEY (`id_pac`) REFERENCES `z_apagar_pacient` (`id_pac`);

--
-- Restrições para tabelas `z_apagar_anamnese`
--
ALTER TABLE `z_apagar_anamnese`
  ADD CONSTRAINT `z_apagar_anamnese_ibfk_1` FOREIGN KEY (`id_pac`) REFERENCES `z_apagar_pacient` (`id_pac`),
  ADD CONSTRAINT `z_apagar_anamnese_ibfk_2` FOREIGN KEY (`CPF_pac`) REFERENCES `z_apagar_dados_paciente` (`CPF`);

--
-- Restrições para tabelas `z_apagar_consulta`
--
ALTER TABLE `z_apagar_consulta`
  ADD CONSTRAINT `z_apagar_consulta_ibfk_1` FOREIGN KEY (`id_pac`) REFERENCES `z_apagar_pacient` (`id_pac`),
  ADD CONSTRAINT `z_apagar_consulta_ibfk_2` FOREIGN KEY (`CRO`) REFERENCES `z_apagar_dentista` (`CRO`);

--
-- Restrições para tabelas `z_apagar_pacient`
--
ALTER TABLE `z_apagar_pacient`
  ADD CONSTRAINT `z_apagar_pacient_ibfk_1` FOREIGN KEY (`id_anamnese`) REFERENCES `z_apagar_anamnese` (`id_anamnese`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
