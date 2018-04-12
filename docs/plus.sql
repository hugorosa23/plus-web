-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Mar-2018 às 20:47
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `ag_id` int(11) NOT NULL,
  `ag_us_id` int(11) NOT NULL,
  `ag_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ag_id_alarme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alarme`
--

CREATE TABLE `alarme` (
  `al_id` int(11) NOT NULL,
  `al_id_evento` int(11) NOT NULL,
  `al_dt_inicio` int(11) NOT NULL,
  `al_dt_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `ev_id` int(11) NOT NULL,
  `ev_id_usuario` int(11) NOT NULL,
  `ev_id_local` int(11) NOT NULL,
  `ev_nome_evento` varchar(50) NOT NULL,
  `ev_localizacao` varchar(50) NOT NULL,
  `ev_duracao_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ev_duracao_final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ev_descricao` varchar(250) NOT NULL,
  `ev_dt_criacao_evento` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ev_dt_evento` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ev_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `loc_id` int(11) NOT NULL,
  `loc_nome_local` varchar(60) NOT NULL,
  `loc_endereco` varchar(80) NOT NULL,
  `loc_lat` float(10,6) NOT NULL,
  `loc_lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `pe_id` int(11) NOT NULL,
  `pe_permissao` varchar(50) NOT NULL,
  `pe_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`pe_id`, `pe_permissao`, `pe_status`) VALUES
(1, 'usuario', 'ativo'),
(2, 'administrador', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rotinas`
--

CREATE TABLE `rotinas` (
  `ro_id` int(11) NOT NULL,
  `ro_id_usuario` int(11) NOT NULL,
  `ro_nome_rotina` varchar(50) NOT NULL,
  `ro_dt_rotina_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ro_dt_rotina_final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ro_dt_descricao_rotina` varchar(250) NOT NULL,
  `ro_dt_status_rotina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `us_id` int(11) NOT NULL,
  `us_nome_full` varchar(250) NOT NULL,
  `us_login` varchar(30) NOT NULL,
  `us_email` varchar(250) NOT NULL,
  `us_senha` varchar(100) NOT NULL,
  `us_permissao` int(11) NOT NULL,
  `us_dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `us_status` varchar(8) NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ag_id`),
  ADD KEY `Agenda_fk0` (`ag_us_id`),
  ADD KEY `Agenda_fk1` (`ag_id_alarme`);

--
-- Indexes for table `alarme`
--
ALTER TABLE `alarme`
  ADD PRIMARY KEY (`al_id`),
  ADD KEY `Alarme_fk0` (`al_id_evento`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ev_id`),
  ADD KEY `Eventos_fk0` (`ev_id_usuario`),
  ADD KEY `ev_id_local` (`ev_id_local`);

--
-- Indexes for table `locais`
--
ALTER TABLE `locais`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`pe_id`);

--
-- Indexes for table `rotinas`
--
ALTER TABLE `rotinas`
  ADD PRIMARY KEY (`ro_id`),
  ADD KEY `Rotinas_fk0` (`ro_id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`us_id`),
  ADD KEY `Usuarios_fk0` (`us_permissao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alarme`
--
ALTER TABLE `alarme`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locais`
--
ALTER TABLE `locais`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rotinas`
--
ALTER TABLE `rotinas`
  MODIFY `ro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `Agenda_fk0` FOREIGN KEY (`ag_us_id`) REFERENCES `usuarios` (`us_id`),
  ADD CONSTRAINT `Agenda_fk1` FOREIGN KEY (`ag_id_alarme`) REFERENCES `alarme` (`al_id`);

--
-- Limitadores para a tabela `alarme`
--
ALTER TABLE `alarme`
  ADD CONSTRAINT `Alarme_fk0` FOREIGN KEY (`al_id_evento`) REFERENCES `eventos` (`ev_id`);

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `Eventos_fk0` FOREIGN KEY (`ev_id_usuario`) REFERENCES `usuarios` (`us_id`),
  ADD CONSTRAINT `Eventos_fk1` FOREIGN KEY (`ev_id_local`) REFERENCES `eventos` (`ev_id`);

--
-- Limitadores para a tabela `rotinas`
--
ALTER TABLE `rotinas`
  ADD CONSTRAINT `Rotinas_fk0` FOREIGN KEY (`ro_id_usuario`) REFERENCES `usuarios` (`us_id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `Usuarios_fk0` FOREIGN KEY (`us_permissao`) REFERENCES `permissoes` (`pe_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
