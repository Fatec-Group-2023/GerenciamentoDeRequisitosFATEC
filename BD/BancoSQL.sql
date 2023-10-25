-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2023 às 20:55
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
-- Banco de dados: `banco_projeto_integrador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambientes`
--

CREATE TABLE `ambientes` (
  `idambientes` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `quantidade_maquinas` double DEFAULT NULL,
  `softwares_disponiveis` varchar(50) DEFAULT NULL,
  `tipo_ambiente_idtipo_ambiente` int(11) NOT NULL,
  `disponibilidade` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `modulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `sigla_disciplina` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `curso_idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `idequipamentos` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `disponibilidade` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `idprofessores` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email_institucional` varchar(50) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_eventuais`
--

CREATE TABLE `reservas_eventuais` (
  `idreservas_eventuais` int(11) NOT NULL,
  `horario_inicio` time DEFAULT NULL,
  `horario_fim` time DEFAULT NULL,
  `data` date DEFAULT NULL,
  `reservas_eventuaiscol` varchar(45) DEFAULT NULL,
  `equipamentos_idequipamentos` int(11) NOT NULL,
  `professores_idprofessores` int(11) NOT NULL,
  `disciplina_sigla_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_semanais`
--

CREATE TABLE `reservas_semanais` (
  `idreservas` int(11) NOT NULL,
  `horario_inicio` time DEFAULT NULL,
  `horario_fim` time DEFAULT NULL,
  `data` date DEFAULT NULL,
  `quantidade_alunos` double DEFAULT NULL,
  `professores_idprofessores` int(11) NOT NULL,
  `ambientes_idambientes` int(11) NOT NULL,
  `equipamentos_idequipamentos` int(11) NOT NULL,
  `disciplina_sigla_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `idsolicitacoes` int(11) NOT NULL,
  `dia_da_semana` varchar(45) DEFAULT NULL,
  `inicio_aula` time DEFAULT NULL,
  `fim_aula` time DEFAULT NULL,
  `quantidade_sofrware` varchar(45) DEFAULT NULL,
  `quantidade_alunos` double DEFAULT NULL,
  `professores_idprofessores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ambiente`
--

CREATE TABLE `tipo_ambiente` (
  `idtipo_ambiente` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`idambientes`),
  ADD KEY `fk_ambientes_tipo_ambiente1_idx` (`tipo_ambiente_idtipo_ambiente`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`sigla_disciplina`),
  ADD KEY `fk_disciplina_curso1_idx` (`curso_idcurso`);

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`idequipamentos`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`idprofessores`);

--
-- Índices para tabela `reservas_eventuais`
--
ALTER TABLE `reservas_eventuais`
  ADD PRIMARY KEY (`idreservas_eventuais`,`equipamentos_idequipamentos`,`professores_idprofessores`,`disciplina_sigla_disciplina`),
  ADD KEY `fk_reservas_eventuais_equipamentos1_idx` (`equipamentos_idequipamentos`),
  ADD KEY `fk_reservas_eventuais_professores1_idx` (`professores_idprofessores`),
  ADD KEY `fk_reservas_eventuais_disciplina1_idx` (`disciplina_sigla_disciplina`);

--
-- Índices para tabela `reservas_semanais`
--
ALTER TABLE `reservas_semanais`
  ADD PRIMARY KEY (`idreservas`,`professores_idprofessores`,`ambientes_idambientes`,`equipamentos_idequipamentos`,`disciplina_sigla_disciplina`),
  ADD KEY `fk_reservas_semanais_professores1_idx` (`professores_idprofessores`),
  ADD KEY `fk_reservas_semanais_ambientes1_idx` (`ambientes_idambientes`),
  ADD KEY `fk_reservas_semanais_equipamentos1_idx` (`equipamentos_idequipamentos`),
  ADD KEY `fk_reservas_semanais_disciplina1_idx` (`disciplina_sigla_disciplina`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`idsolicitacoes`,`professores_idprofessores`),
  ADD KEY `fk_solicitacoes_professores1_idx` (`professores_idprofessores`);

--
-- Índices para tabela `tipo_ambiente`
--
ALTER TABLE `tipo_ambiente`
  ADD PRIMARY KEY (`idtipo_ambiente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `idambientes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `idequipamentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `idprofessores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reservas_eventuais`
--
ALTER TABLE `reservas_eventuais`
  MODIFY `idreservas_eventuais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reservas_semanais`
--
ALTER TABLE `reservas_semanais`
  MODIFY `idreservas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `idsolicitacoes` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ambientes`
--
ALTER TABLE `ambientes`
  ADD CONSTRAINT `fk_ambientes_tipo_ambiente1` FOREIGN KEY (`tipo_ambiente_idtipo_ambiente`) REFERENCES `tipo_ambiente` (`idtipo_ambiente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `fk_disciplina_curso1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `reservas_eventuais`
--
ALTER TABLE `reservas_eventuais`
  ADD CONSTRAINT `fk_reservas_eventuais_disciplina1` FOREIGN KEY (`disciplina_sigla_disciplina`) REFERENCES `disciplina` (`sigla_disciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservas_eventuais_equipamentos1` FOREIGN KEY (`equipamentos_idequipamentos`) REFERENCES `equipamentos` (`idequipamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservas_eventuais_professores1` FOREIGN KEY (`professores_idprofessores`) REFERENCES `professores` (`idprofessores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `reservas_semanais`
--
ALTER TABLE `reservas_semanais`
  ADD CONSTRAINT `fk_reservas_semanais_ambientes1` FOREIGN KEY (`ambientes_idambientes`) REFERENCES `ambientes` (`idambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservas_semanais_disciplina1` FOREIGN KEY (`disciplina_sigla_disciplina`) REFERENCES `disciplina` (`sigla_disciplina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservas_semanais_equipamentos1` FOREIGN KEY (`equipamentos_idequipamentos`) REFERENCES `equipamentos` (`idequipamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservas_semanais_professores1` FOREIGN KEY (`professores_idprofessores`) REFERENCES `professores` (`idprofessores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `fk_solicitacoes_professores1` FOREIGN KEY (`professores_idprofessores`) REFERENCES `professores` (`idprofessores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
