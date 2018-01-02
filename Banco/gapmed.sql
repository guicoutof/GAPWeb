-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 02/01/2018 às 16:08
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.26-2+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gapmed`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `timestamp` int(50) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('hm1b1t8sr5qc2q9v8ccq3uf31ulsdevj', '127.0.0.1', 1514915941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343931353934313b6370667c733a393a22313233343536373839223b6e6f6d657c733a31333a2244656e6973652053616b69796f223b656d61696c7c733a373a226465406e697365223b7469706f7c733a383a2270616369656e7465223b),
('tj795n39pmvo5acj9thkuc2he0u6frqa', '127.0.0.1', 1514916271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343931363237313b6370667c733a393a22313233343536373839223b6e6f6d657c733a31333a2244656e6973652053616b69796f223b656d61696c7c733a373a226465406e697365223b7469706f7c733a383a2270616369656e7465223b);

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `con_id` int(11) NOT NULL,
  `pac_CPF` varchar(11) NOT NULL,
  `med_CPF` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `consumo_medicamento`
--

CREATE TABLE `consumo_medicamento` (
  `pac_proc_id` int(11) NOT NULL,
  `mdc_id` int(11) NOT NULL,
  `csm_data` date NOT NULL,
  `csm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `instrucao`
--

CREATE TABLE `instrucao` (
  `ins_id` int(11) NOT NULL,
  `proc_id` int(11) NOT NULL,
  `mdc_id` int(11) NOT NULL,
  `ins_procedimento` tinyint(1) NOT NULL,
  `ins_descricao` varchar(255) NOT NULL,
  `ins_geral` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `mdc_id` int(11) NOT NULL,
  `mdc_nome` varchar(45) NOT NULL,
  `mdc_descricao` varchar(255) NOT NULL,
  `mdc_intervalo_dia` tinyint(4) NOT NULL,
  `mdc_intervalo_limite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `medicamento`
--

INSERT INTO `medicamento` (`mdc_id`, `mdc_nome`, `mdc_descricao`, `mdc_intervalo_dia`, `mdc_intervalo_limite`) VALUES
(1, 'paracetamal', 'para se ta mal', 2, 10),
(2, 'Benegripe', 'contra gripe', 3, 10),
(3, 'benegripe', 'para gripe', 3, 10),
(4, 'Desconfiometro', 'Sempre', 5, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `med_CPF` varchar(11) NOT NULL,
  `med_nome` varchar(45) NOT NULL,
  `med_email` varchar(45) NOT NULL,
  `med_senha` varchar(255) NOT NULL,
  `med_telefone` varchar(45) NOT NULL,
  `med_endereco` varchar(255) NOT NULL,
  `med_cidade` varchar(45) NOT NULL,
  `med_estado` varchar(45) NOT NULL,
  `med_pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `medico`
--

INSERT INTO `medico` (`med_CPF`, `med_nome`, `med_email`, `med_senha`, `med_telefone`, `med_endereco`, `med_cidade`, `med_estado`, `med_pais`) VALUES
('44135878806', 'Guilherme Couto', 'gui@couto', 'guicouto', '14996903532', 'Rua Artur Whitaker 60', 'Presidente Prudente', 'SP', 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `pac_CPF` int(11) NOT NULL,
  `pac_nome` varchar(45) NOT NULL,
  `pac_email` varchar(45) NOT NULL,
  `pac_senha` varchar(255) NOT NULL,
  `pac_telefone` varchar(45) NOT NULL,
  `pac_endereco` varchar(255) NOT NULL,
  `pac_cidade` varchar(45) NOT NULL,
  `pac_estado` varchar(45) NOT NULL,
  `pac_pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `paciente`
--

INSERT INTO `paciente` (`pac_CPF`, `pac_nome`, `pac_email`, `pac_senha`, `pac_telefone`, `pac_endereco`, `pac_cidade`, `pac_estado`, `pac_pais`) VALUES
(123456789, 'Denise Sakiyo', 'de@nise', '1234', '999999999', 'Rua Martin', 'Presidente Prudente', 'SP', 'Brasil'),
(321654987, 'Fabio', 'fabio@takaki', 'fabio', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pac_proc`
--

CREATE TABLE `pac_proc` (
  `proc_id` int(11) NOT NULL,
  `pac_proc_ativo` tinyint(1) NOT NULL,
  `pac_proc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `proc_id` int(11) NOT NULL,
  `con_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gatilhos `procedimento`
--
DELIMITER $$
CREATE TRIGGER `trigger_addPacProc` AFTER INSERT ON `procedimento` FOR EACH ROW INSERT INTO pac_proc(proc_id,pac_proc_ativo) VALUES (NEW.proc_id,'1')
$$
DELIMITER ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`con_id`);

--
-- Índices de tabela `consumo_medicamento`
--
ALTER TABLE `consumo_medicamento`
  ADD PRIMARY KEY (`csm_id`);

--
-- Índices de tabela `instrucao`
--
ALTER TABLE `instrucao`
  ADD PRIMARY KEY (`ins_id`);

--
-- Índices de tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`mdc_id`);

--
-- Índices de tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`med_CPF`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`pac_CPF`);

--
-- Índices de tabela `pac_proc`
--
ALTER TABLE `pac_proc`
  ADD PRIMARY KEY (`pac_proc_id`);

--
-- Índices de tabela `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`proc_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `consumo_medicamento`
--
ALTER TABLE `consumo_medicamento`
  MODIFY `csm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `instrucao`
--
ALTER TABLE `instrucao`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `mdc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `pac_proc`
--
ALTER TABLE `pac_proc`
  MODIFY `pac_proc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de tabela `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `proc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
