-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2020 às 22:18
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgppfc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(10) UNSIGNED NOT NULL,
  `turma_id_turma` int(10) UNSIGNED NOT NULL,
  `nome_aluno` varchar(45) DEFAULT NULL,
  `cpf_aluno` varchar(11) DEFAULT NULL,
  `data_nasc_aluno` varchar(10) DEFAULT NULL,
  `nome_reponsavel` varchar(45) DEFAULT NULL,
  `cpf_responsavel` varchar(11) DEFAULT NULL,
  `endereco_aluno` varchar(255) DEFAULT NULL,
  `telefone_aluno` varchar(13) DEFAULT NULL,
  `email_aluno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `calendario`
--

CREATE TABLE `calendario` (
  `id_evento` int(10) UNSIGNED NOT NULL,
  `nome_evento` varchar(45) DEFAULT NULL,
  `data_evento` varchar(10) DEFAULT NULL,
  `horario_evento` varchar(20) DEFAULT NULL,
  `local_evento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `calendario`
--

INSERT INTO `calendario` (`id_evento`, `nome_evento`, `data_evento`, `horario_evento`, `local_evento`) VALUES
(3, 'Peneira Juvenil 17 e 18 anos', '25/04/2020', '14:00 Ã s 18:00', 'Campo Principal NÂº 01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(10) UNSIGNED NOT NULL,
  `nome_funcionario` varchar(45) DEFAULT NULL,
  `cpf_funcionario` varchar(11) DEFAULT NULL,
  `data_nasc_funcionario` varchar(10) DEFAULT NULL,
  `endereco_funcionario` varchar(255) DEFAULT NULL,
  `telefone_funcionario` varchar(13) DEFAULT NULL,
  `email_funcionario` varchar(50) DEFAULT NULL,
  `cargo_funcionario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(10) UNSIGNED NOT NULL,
  `funcionario_id_funcionario` int(10) UNSIGNED NOT NULL,
  `valor_pagamento` varchar(20) DEFAULT NULL,
  `data_pagamento` varchar(10) DEFAULT NULL,
  `referencia_pagamento` varchar(30) DEFAULT NULL,
  `tipo_pagamento` varchar(20) DEFAULT NULL,
  `comprovante_pagamento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `funcionario_id_funcionario`, `valor_pagamento`, `data_pagamento`, `referencia_pagamento`, `tipo_pagamento`, `comprovante_pagamento`) VALUES
(2, 1, 'R$3600,00', '10/04/2020', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(10) UNSIGNED NOT NULL,
  `funcionario_id_funcionario` int(10) UNSIGNED NOT NULL,
  `dias` varchar(27) DEFAULT NULL,
  `horario` varchar(16) DEFAULT NULL,
  `categoria` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(3, 'dimas', 'e8d95a51f3af4a3b134bf6bb680a213a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `usuario_FKIndex1` (`turma_id_turma`);

--
-- Indexes for table `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`),
  ADD KEY `usuario_FKIndex1` (`funcionario_id_funcionario`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`),
  ADD KEY `usuario_FKIndex1` (`funcionario_id_funcionario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_evento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
