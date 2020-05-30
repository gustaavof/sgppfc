-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2020 às 03:41
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
  `nome_aluno` varchar(55) DEFAULT NULL,
  `cpf_aluno` varchar(11) DEFAULT NULL,
  `data_nasc_aluno` varchar(10) DEFAULT NULL,
  `nome_responsavel` varchar(55) DEFAULT NULL,
  `cpf_responsavel` varchar(11) DEFAULT NULL,
  `endereco_aluno` varchar(110) DEFAULT NULL,
  `telefone_aluno` varchar(16) DEFAULT NULL,
  `email_aluno` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `turma_id_turma`, `nome_aluno`, `cpf_aluno`, `data_nasc_aluno`, `nome_responsavel`, `cpf_responsavel`, `endereco_aluno`, `telefone_aluno`, `email_aluno`) VALUES
(1, 1, 'Neymar da Silva Santos JÃºnior', '78945612311', '11/04/2003', 'Edson Arantes do Nascimento', '98765432199', 'Meninos da Vila, NÂº 3, Santos-SP, CEP: 00000-000', '(999)9-9999-9999', 'neymar_barcelona@jogadores.com');

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
(1, 'Peneira Juvenil (17 e 18 anos)', '12/06/2020', '08:00 Ã s 11:45', 'Campo de Treino NÂº 12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nome_cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nome_cargo`) VALUES
(1, 'Professor'),
(2, 'Segurança'),
(3, 'Terceirizado'),
(4, 'Zelador'),
(5, 'Secretário');

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
  `cargo_id_cargo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `cpf_funcionario`, `data_nasc_funcionario`, `endereco_funcionario`, `telefone_funcionario`, `email_funcionario`, `cargo_id_cargo`) VALUES
(1, 'Carlos Caetano Bledorn Verri (Dunga)', '12345678911', '31/10/1963', 'TÃ©cnicos da SeleÃ§Ã£o Brasileira, NÂº 2010, Granja Comary-RJ, CEP: 00000-000', '(000)0-0000-0', 'dunga@tecnicos.com.br', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(10) UNSIGNED NOT NULL,
  `envolvido` varchar(55) DEFAULT NULL,
  `valor_pagamento` varchar(20) DEFAULT NULL,
  `data_pagamento` varchar(10) DEFAULT NULL,
  `referencia_pagamento` varchar(30) DEFAULT NULL,
  `tipo_pagamento` varchar(20) DEFAULT NULL,
  `comprovante_pagamento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `envolvido`, `valor_pagamento`, `data_pagamento`, `referencia_pagamento`, `tipo_pagamento`, `comprovante_pagamento`) VALUES
(1, 'Neymar da Silva Santos JÃºnior', 'R$110,00', '05/05/2020', 'Pagamento de SalÃ¡rio', 'Recebimento', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(10) UNSIGNED NOT NULL,
  `funcionario_id_funcionario` int(10) UNSIGNED NOT NULL,
  `codigo_turma` varchar(30) DEFAULT NULL,
  `dias` varchar(27) DEFAULT NULL,
  `horario` varchar(16) DEFAULT NULL,
  `categoria` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `funcionario_id_funcionario`, `codigo_turma`, `dias`, `horario`, `categoria`) VALUES
(1, 1, 'Juv, T e Q, 8-10', 'TerÃ§a e Quinta', '08:00 Ã s 09:45', 'Juvenil (17 a 18 anos)');

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
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `usuario_FKIndex1` (`cargo_id_cargo`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

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
  MODIFY `id_aluno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_evento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
