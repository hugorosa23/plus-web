-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 25/12/2017 às 22:17
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Usuário: `plus`
--

CREATE USER 'plus'@'localhost' IDENTIFIED BY 'plus123';
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'plus'@'%' WITH GRANT OPTION;

--
-- Banco de dados: `plus`
--
CREATE DATABASE IF NOT EXISTS `plus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `plus`;
-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `ag_id` int(11) NOT NULL,
  `ag_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ag_id_alarme` int(11) NOT NULL,
  `ag_id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `alarme`
--

CREATE TABLE `alarme` (
  `al_id` int(11) NOT NULL,
  `al_id_evento` int(11) NOT NULL,
  `al_dt_inicio` int(11) NOT NULL,
  `al_dt_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `ev_id` int(11) NOT NULL,
  `ev_id_usuario` int(11) NOT NULL,
  `ev_nome_evento` varchar(50) NOT NULL,
  `ev_localizacao` varchar(150) NOT NULL,
  `ev_duracao_inicio` time NOT NULL,
  `ev_duracao_final` time NOT NULL,
  `ev_descricao` varchar(250) NOT NULL,
  `ev_dt_evento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ev_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `pe_id` int(11) NOT NULL,
  `pe_permissao` varchar(50) NOT NULL,
  `pe_status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `permissoes`
--

INSERT INTO `permissoes` (`pe_id`, `pe_permissao`, `pe_status`) VALUES
(1, 'Usuario', 'ATIVO'),
(2, 'Administrador', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `rotinas`
--

CREATE TABLE `rotinas` (
  `ro_id` int(11) NOT NULL,
  `ro_id_usuario` int(11) NOT NULL,
  `ro_nome_rotina` varchar(50) NOT NULL,
  `ro_dt_rotina_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ro_dt_rotina_final` timestamp NULL DEFAULT NULL,
  `ro_descricao_rotina` varchar(250) NOT NULL,
  `ro_status_rotina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `us_id` int(11) NOT NULL,
  `us_nome_full` varchar(250) NOT NULL,
  `us_login` varchar(30) NOT NULL,
  `us_email` varchar(250) NOT NULL,
  `us_senha` varchar(100) NOT NULL,
  `us_permissao` int(11) NOT NULL DEFAULT '1',
  `us_dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `us_status` varchar(8) NOT NULL DEFAULT 'ATIVO'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ag_id`),
  ADD KEY `agenda_fk0` (`ag_id_alarme`);

--
-- Índices de tabela `alarme`
--
ALTER TABLE `alarme`
  ADD PRIMARY KEY (`al_id`),
  ADD KEY `alarme_fk0` (`al_id_evento`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ev_id`);

--
-- Índices de tabela `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`pe_id`);

--
-- Índices de tabela `rotinas`
--
ALTER TABLE `rotinas`
  ADD PRIMARY KEY (`ro_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`us_id`),
  ADD KEY `usuarios_fk0` (`us_permissao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `alarme`
--
ALTER TABLE `alarme`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `rotinas`
--
ALTER TABLE `rotinas`
  MODIFY `ro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_fk0` FOREIGN KEY (`ag_id_alarme`) REFERENCES `alarme` (`al_id`);

--
-- Restrições para tabelas `alarme`
--
ALTER TABLE `alarme`
  ADD CONSTRAINT `alarme_fk0` FOREIGN KEY (`al_id_evento`) REFERENCES `eventos` (`ev_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
