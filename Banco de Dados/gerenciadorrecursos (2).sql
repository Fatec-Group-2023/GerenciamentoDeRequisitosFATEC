-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2023 às 03:45
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciadorrecursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `cod_horario` int(11) NOT NULL,
  `horario` time NOT NULL,
  `periodo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`cod_horario`, `horario`, `periodo`) VALUES
(150, '00:00:00', 'manha'),
(151, '00:00:00', 'manha'),
(152, '23:23:00', 'manha'),
(153, '00:00:00', 'manha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `cod_reserva` int(11) NOT NULL,
  `nome_reserva` varchar(50) NOT NULL,
  `disciplina_reserva` varchar(50) NOT NULL,
  `turma_reserva` varchar(50) NOT NULL,
  `quantidade_reserva` int(50) NOT NULL,
  `software_reserva` varchar(50) NOT NULL,
  `dias_reserva` varchar(50) NOT NULL,
  `inicio_reserva` int(50) NOT NULL,
  `fim_reserva` int(50) NOT NULL,
  `sala_reserva` varchar(50) NOT NULL,
  `qtd_maquina_reserva` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`cod_reserva`, `nome_reserva`, `disciplina_reserva`, `turma_reserva`, `quantidade_reserva`, `software_reserva`, `dias_reserva`, `inicio_reserva`, `fim_reserva`, `sala_reserva`, `qtd_maquina_reserva`) VALUES
(3, '', 'TEste', 'asdasd', 123, 'asda', 'Sexta-feira', 13, 12, '1321', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta_formulario`
--

CREATE TABLE `resposta_formulario` (
  `cod_resposta` int(11) NOT NULL,
  `nome_resposta` varchar(50) NOT NULL,
  `disciplina_resposta` varchar(100) NOT NULL,
  `turma_resposta` varchar(50) NOT NULL,
  `quantidade_resposta` int(50) NOT NULL,
  `software_resposta` varchar(200) NOT NULL,
  `dias_resposta` varchar(45) NOT NULL,
  `inicio_resposta` varchar(45) NOT NULL,
  `fim_resposta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `resposta_formulario`
--

INSERT INTO `resposta_formulario` (`cod_resposta`, `nome_resposta`, `disciplina_resposta`, `turma_resposta`, `quantidade_resposta`, `software_resposta`, `dias_resposta`, `inicio_resposta`, `fim_resposta`) VALUES
(7, '', 'sadsadsa', 'aasdasd', 2313131, 'sadad', '', '02:57', '23:00'),
(8, '', 'sadas', 'asdasd', 12, 'dfdf', '', '14:13', '15:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `cod_sala` int(11) NOT NULL,
  `salas` varchar(200) NOT NULL,
  `maquinas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`cod_sala`, `salas`, `maquinas`) VALUES
(18, 'Sala3', 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestres`
--

CREATE TABLE `semestres` (
  `cod_semestre` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` int(4) NOT NULL,
  `situacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `semestres`
--

INSERT INTO `semestres` (`cod_semestre`, `nome`, `ano`, `situacao`) VALUES
(79, '1ºSemestre', 2023, ''),
(80, '2ºSemestre', 2023, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `senha` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Teste', 'teste@hotmail.com', 123),
(2, 'Victor Hugo', 'victorsilvamelo@hotmail.com', 123),
(3, 'victor', 'admin@hotmail.com', 123),
(4, 'Teste', 'teste@hotmail.com', 123),
(5, 'Alvaro', 'admin@hotmail.com', 1234),
(6, 'victor', 'teste@hotmail.com', 123),
(7, 'victor', 'admin@hotmail.com', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`cod_reserva`);

--
-- Índices para tabela `resposta_formulario`
--
ALTER TABLE `resposta_formulario`
  ADD PRIMARY KEY (`cod_resposta`);

--
-- Índices para tabela `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`cod_sala`);

--
-- Índices para tabela `semestres`
--
ALTER TABLE `semestres`
  ADD PRIMARY KEY (`cod_semestre`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `cod_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `cod_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `resposta_formulario`
--
ALTER TABLE `resposta_formulario`
  MODIFY `cod_resposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `salas`
--
ALTER TABLE `salas`
  MODIFY `cod_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `semestres`
--
ALTER TABLE `semestres`
  MODIFY `cod_semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
