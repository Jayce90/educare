-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2017 às 21:02
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `inep_aluno` varchar(45) DEFAULT NULL,
  `nome_aluno` varchar(45) DEFAULT NULL,
  `nascimento_aluno` varchar(45) DEFAULT NULL,
  `sexo_aluno` varchar(45) DEFAULT NULL,
  `nis_aluno` varchar(45) DEFAULT NULL,
  `raca_aluno` varchar(45) DEFAULT NULL,
  `mae_aluno` varchar(45) DEFAULT NULL,
  `pai_aluno` varchar(45) DEFAULT NULL,
  `nacionalidade_aluno` varchar(45) DEFAULT NULL,
  `pais_nasc_aluno` varchar(45) DEFAULT NULL,
  `estado_nasc_aluno` varchar(45) DEFAULT NULL,
  `fone_aluno` varchar(45) DEFAULT NULL,
  `municipio_nasc_aluno` varchar(45) DEFAULT NULL,
  `deficiencia_aluno` varchar(45) DEFAULT NULL,
  `tipo_deficiencia_aluno` varchar(45) DEFAULT NULL,
  `identidade_aluno` varchar(45) DEFAULT NULL,
  `complemento_identidade_aluno` varchar(45) DEFAULT NULL,
  `orgao_identidade_aluno` varchar(45) DEFAULT NULL,
  `estado_identidade_aluno` varchar(45) DEFAULT NULL,
  `data_identidade_aluno` varchar(45) DEFAULT NULL,
  `certidao_civil_aluno` varchar(45) DEFAULT NULL,
  `cpf_aluno` varchar(45) DEFAULT NULL,
  `passaporte_aluno` varchar(45) DEFAULT NULL,
  `justificativa_aluno` varchar(45) DEFAULT NULL,
  `localizacao_aluno` varchar(45) DEFAULT NULL,
  `cep_aluno` varchar(45) DEFAULT NULL,
  `endereco_aluno` varchar(100) DEFAULT NULL,
  `numero_aluno` varchar(45) DEFAULT NULL,
  `complemento_aluno` varchar(100) DEFAULT NULL,
  `bairro_aluno` varchar(45) DEFAULT NULL,
  `estado_aluno` varchar(45) DEFAULT NULL,
  `municipio_aluno` varchar(45) DEFAULT NULL,
  `outra_escolarizacao_aluno` varchar(45) DEFAULT NULL,
  `transporte_aluno` varchar(45) DEFAULT NULL,
  `responsavel_transporte_aluno` varchar(45) DEFAULT NULL,
  `tipo_transporte_aluno` varchar(45) DEFAULT NULL,
  `status_aluno` varchar(45) DEFAULT NULL,
  `escola_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `inep_aluno`, `nome_aluno`, `nascimento_aluno`, `sexo_aluno`, `nis_aluno`, `raca_aluno`, `mae_aluno`, `pai_aluno`, `nacionalidade_aluno`, `pais_nasc_aluno`, `estado_nasc_aluno`, `fone_aluno`, `municipio_nasc_aluno`, `deficiencia_aluno`, `tipo_deficiencia_aluno`, `identidade_aluno`, `complemento_identidade_aluno`, `orgao_identidade_aluno`, `estado_identidade_aluno`, `data_identidade_aluno`, `certidao_civil_aluno`, `cpf_aluno`, `passaporte_aluno`, `justificativa_aluno`, `localizacao_aluno`, `cep_aluno`, `endereco_aluno`, `numero_aluno`, `complemento_aluno`, `bairro_aluno`, `estado_aluno`, `municipio_aluno`, `outra_escolarizacao_aluno`, `transporte_aluno`, `responsavel_transporte_aluno`, `tipo_transporte_aluno`, `status_aluno`, `escola_id_escola`) VALUES
(1, '', 'THIAGO BORGES', '24/02/1990', 'masculino', '12431312312', 'preta', 'DONA THIAGA', '', 'brasileira', 'BRASIL', 'PA', '', 'TOMÃ‰-AÃ‡U', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'utiliza', 'municipal', '; Barco', 'aguardando', 3),
(2, '', 'ALEXANDRE MATIAS', '07/07/1990', 'masculino', '21233231212', 'branca', 'DONA ALEXANDRINA', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3),
(3, '', 'BENEDITO FERNADES', '07/09/1980', 'masculino', '21233287987', 'preta', 'DONA BENEDITA', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3),
(4, '', 'CHARLES OLIVEIRA', '28/11/1987', 'masculino', '98798798786', 'preta', 'DONA CHARLITA', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3),
(5, '', 'DANIEL FEITOSA', '10/03/1992', 'masculino', '87647567687', 'parda', 'DONA DANIELA', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3),
(6, '', 'GLEYSON DU POP', '24/04/1996', 'masculino', '52876359678', 'indigena', 'DONA GLEYDSA', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3),
(7, '', 'MILENA TEIXEIRA', '10/11/1991', 'feminino', '80980980980', 'branca', 'DONA MILENESA', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3),
(8, '', 'FERNANDA PIRES', '31/04/1970', 'feminino', '80980980980', 'preta', 'DONA FERNANDETHE', '', 'brasileira', '', 'PA', '', '', 'NÃ£o', '; ; ', '', '', '', 'PA', '', '; ; ; ; ; ; PA; ; ; ', '', '', '', '', '', '', '', '', '', 'PA', '', 'nao', 'nÃ£o utiliza', 'municipal', '; ', 'aguardando', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome_disciplina` varchar(45) DEFAULT NULL,
  `descricao_disciplina` varchar(45) DEFAULT NULL,
  `cargaHoraria_disciplina` varchar(45) DEFAULT NULL,
  `nivel_disciplina` varchar(45) DEFAULT NULL,
  `etapa_disciplina` varchar(45) DEFAULT NULL,
  `turma_id_turma` int(11) NOT NULL,
  `lotacao_professor_id_professor` int(11) NOT NULL,
  `lotacao_escola_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id_disciplina`, `nome_disciplina`, `descricao_disciplina`, `cargaHoraria_disciplina`, `nivel_disciplina`, `etapa_disciplina`, `turma_id_turma`, `lotacao_professor_id_professor`, `lotacao_escola_id_escola`) VALUES
(7, 'POO COM PHP', '', '05', 'EJA', 'EJA - Ensino Fundamental anos iniciais', 3, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinaealuno`
--

CREATE TABLE `disciplinaealuno` (
  `ano_disciplinaEaluno` varchar(45) NOT NULL,
  `disciplina_id_disciplina` int(11) NOT NULL,
  `disciplina_turma_id_turma` int(11) NOT NULL,
  `disciplina_lotacao_professor_id_professor` int(11) NOT NULL,
  `disciplina_lotacao_escola_id_escola` int(11) NOT NULL,
  `aluno_id_aluno` int(11) NOT NULL,
  `avaliacao_1_disciplinaEaluno` float DEFAULT NULL,
  `avaliacao_2_disciplinaEaluno` float DEFAULT NULL,
  `avaliacao_3_disciplinaEaluno` float DEFAULT NULL,
  `avaliacao_4_disciplinaEaluno` float DEFAULT NULL,
  `frequencia_1_qnt_disciplinaEaluno` int(11) DEFAULT NULL,
  `frequencia_2_qnt_disciplinaEaluno` int(11) DEFAULT NULL,
  `frequencia_3_qnt_disciplinaEaluno` int(11) DEFAULT NULL,
  `frequencia_4_qnt_disciplinaEaluno` int(11) DEFAULT NULL,
  `frequencia_1_per_disciplinaEaluno` float DEFAULT NULL,
  `frequencia_2_per_disciplinaEaluno` float DEFAULT NULL,
  `frequencia_3_per_disciplinaEaluno` float DEFAULT NULL,
  `frequencia_4_per_disciplinaEaluno` float DEFAULT NULL,
  `recuperacao_1_disciplinaEaluno` float DEFAULT NULL,
  `recuperacao_2_disciplinaEaluno` float DEFAULT NULL,
  `media_anual_disciplinaEaluno` float DEFAULT NULL,
  `frequencia_anual_disciplinaEaluno` float DEFAULT NULL,
  `status_disciplinaEaluno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `id_escola` int(11) NOT NULL,
  `inep_escola` int(11) DEFAULT NULL,
  `cpf_gestor_escola` varchar(45) DEFAULT NULL,
  `nome_gestor_escola` varchar(45) DEFAULT NULL,
  `cargo_gestor_escola` varchar(45) DEFAULT NULL,
  `email_gestor_escola` varchar(45) DEFAULT NULL,
  `situacao_escola` varchar(45) DEFAULT NULL,
  `nome_escola` varchar(45) DEFAULT NULL,
  `cep_escola` varchar(45) DEFAULT NULL,
  `polo_escola` varchar(45) DEFAULT NULL,
  `distrito_escola` varchar(45) DEFAULT NULL,
  `endereco_escola` varchar(45) DEFAULT NULL,
  `numero_escola` varchar(45) DEFAULT NULL,
  `complemento_escola` varchar(100) DEFAULT NULL,
  `bairro_escola` varchar(45) DEFAULT NULL,
  `fone_escola` varchar(45) DEFAULT NULL,
  `outro_fone_escola` varchar(45) DEFAULT NULL,
  `email_escola` varchar(45) DEFAULT NULL,
  `localizacao_escola` varchar(45) DEFAULT NULL,
  `regulamentacao_escola` varchar(45) DEFAULT NULL,
  `portaria_escola` varchar(45) DEFAULT NULL,
  `autorizacao_escola` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`id_escola`, `inep_escola`, `cpf_gestor_escola`, `nome_gestor_escola`, `cargo_gestor_escola`, `email_gestor_escola`, `situacao_escola`, `nome_escola`, `cep_escola`, `polo_escola`, `distrito_escola`, `endereco_escola`, `numero_escola`, `complemento_escola`, `bairro_escola`, `fone_escola`, `outro_fone_escola`, `email_escola`, `localizacao_escola`, `regulamentacao_escola`, `portaria_escola`, `autorizacao_escola`) VALUES
(3, 0, '000.000.000-00', 'XXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXX', 'XXXXXXXXX', 'ESCOLA TESTE', 'XXXXXXXXXXXXXX', 'XXXXXXX', 'XXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX', 'XXXX', 'XXXX', 'XXXXXXXXXXXXXXX', '', 'XXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `tipo_historico` varchar(45) DEFAULT NULL,
  `descricao_historico` varchar(45) DEFAULT NULL,
  `escola_origem_historico` varchar(45) DEFAULT NULL,
  `escola_destino_historico` varchar(45) DEFAULT NULL,
  `status_historico` varchar(45) DEFAULT NULL,
  `aluno_id_aluno` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `escola_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotacao`
--

CREATE TABLE `lotacao` (
  `professor_id_professor` int(11) NOT NULL,
  `escola_id_escola` int(11) NOT NULL,
  `ano_lotacao` varchar(45) NOT NULL,
  `cargaHoraria_lotacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lotacao`
--

INSERT INTO `lotacao` (`professor_id_professor`, `escola_id_escola`, `ano_lotacao`, `cargaHoraria_lotacao`) VALUES
(2, 3, '2017', '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `inep_professor` int(11) DEFAULT NULL,
  `cpf_professor` varchar(45) DEFAULT NULL,
  `fone_professor` varchar(45) DEFAULT NULL,
  `nome_professor` varchar(45) DEFAULT NULL,
  `nascimento_professor` varchar(45) DEFAULT NULL,
  `mae_professor` varchar(45) DEFAULT NULL,
  `pai_professor` varchar(45) DEFAULT NULL,
  `email_professor` varchar(45) DEFAULT NULL,
  `nis_professor` varchar(45) DEFAULT NULL,
  `sexo_professor` varchar(45) DEFAULT NULL,
  `raca_professor` varchar(45) DEFAULT NULL,
  `nacionalidade_professor` varchar(45) DEFAULT NULL,
  `pais_nasc_professor` varchar(45) DEFAULT NULL,
  `estado_nasc_professor` varchar(45) DEFAULT NULL,
  `municipio_nasc_professor` varchar(45) DEFAULT NULL,
  `deficiencia_professor` varchar(45) DEFAULT NULL,
  `tipo_deficiencia_professor` varchar(45) DEFAULT NULL,
  `localizacao_professor` varchar(45) DEFAULT NULL,
  `cep_professor` varchar(45) DEFAULT NULL,
  `endereco_professor` varchar(100) DEFAULT NULL,
  `numero_professor` varchar(45) DEFAULT NULL,
  `complemento_professor` varchar(80) DEFAULT NULL,
  `bairro_professor` varchar(45) DEFAULT NULL,
  `municipio_professor` varchar(45) DEFAULT NULL,
  `escolaridade_professor` varchar(45) DEFAULT NULL,
  `curso_professor` varchar(45) DEFAULT NULL,
  `instituicao_curso_professor` varchar(45) DEFAULT NULL,
  `situacao_curso_professor` varchar(45) DEFAULT NULL,
  `pos_graduacao_professor` varchar(45) DEFAULT NULL,
  `outro_curso_professor` varchar(45) DEFAULT NULL,
  `funcao_professor` varchar(45) DEFAULT NULL,
  `vinculo_professor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `inep_professor`, `cpf_professor`, `fone_professor`, `nome_professor`, `nascimento_professor`, `mae_professor`, `pai_professor`, `email_professor`, `nis_professor`, `sexo_professor`, `raca_professor`, `nacionalidade_professor`, `pais_nasc_professor`, `estado_nasc_professor`, `municipio_nasc_professor`, `deficiencia_professor`, `tipo_deficiencia_professor`, `localizacao_professor`, `cep_professor`, `endereco_professor`, `numero_professor`, `complemento_professor`, `bairro_professor`, `municipio_professor`, `escolaridade_professor`, `curso_professor`, `instituicao_curso_professor`, `situacao_curso_professor`, `pos_graduacao_professor`, `outro_curso_professor`, `funcao_professor`, `vinculo_professor`) VALUES
(1, 0, '477.267.763-28', '91 919191919', 'DECIOLA FERREIRA', '30/04/1880', '', '', '', '18721627627', 'masculino', '', 'brasileira', '', 'PA', '', 'NÃ£o', ' ', '', '', '', '', '', '', '', '', '', '', 'concluido', '', ' ', ' ', 'Contrato temporÃ¡rio'),
(2, 0, '687.236.487-26', '91 999372873', 'FABIO BRITO', '30/10/1980', '', '', '', '63876234762', 'masculino', '', 'brasileira', '', 'PA', '', 'NÃ£o', ' ', '', '', '', '', '', '', '', '', '', '', 'concluido', '', ' ', ' ', ''),
(3, 0, '989.797.869-68', '91 888888888', 'SILVANA DA SILVA', '03/10/1980', '', '', '', '67868347963', 'masculino', '', 'brasileira', '', 'PA', '', 'NÃ£o', ' ', '', '', '', '', '', '', '', '', '', '', 'concluido', '', ' ', ' ', ''),
(4, 0, '382.472.345-83', '91 888888555', 'ANDREA DO NASCIMENTO', '27/12/1970', '', '', '', '73541827364', 'masculino', '', 'brasileira', '', 'PA', '', 'NÃ£o', ' ', '', '', '', '', '', '', '', '', '', '', 'concluido', '', ' ', ' ', ''),
(5, 0, '836.393.217-63', '91 889090909', 'CANDIDO NETO', '17/11/1989', '', '', '', '39810732987', 'masculino', '', 'brasileira', '', 'PA', '', 'NÃ£o', ' ', '', '', '', '', '', '', '', '', '', '', 'concluido', '', ' ', ' ', ''),
(6, 0, '546.541.265-46', '91 991763287', 'MARCEL BOTELHO', '03/07/1979', '', '', '', '97812987192', 'masculino', '', 'brasileira', '', 'PA', '', 'NÃ£o', ' ', '', '', '', '', '', '', '', '', '', '', 'concluido', '', ' ', ' ', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `id_protocolo` int(11) NOT NULL,
  `data_protocolo` varchar(45) DEFAULT NULL,
  `tipo_protocolo` varchar(45) DEFAULT NULL,
  `solicitante_protocolo` varchar(45) DEFAULT NULL,
  `aluno_id_aluno` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `escola_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int(11) NOT NULL,
  `nome_turma` varchar(45) DEFAULT NULL,
  `capacidade_turma` varchar(45) DEFAULT NULL,
  `ano_turma` varchar(45) DEFAULT NULL,
  `horario_turma` varchar(45) DEFAULT NULL,
  `turno_turma` varchar(45) DEFAULT NULL,
  `dias_turma` varchar(45) DEFAULT NULL,
  `tipo_turma` varchar(45) DEFAULT NULL,
  `programa_turma` varchar(45) DEFAULT NULL,
  `aee_turma` varchar(45) DEFAULT NULL,
  `modalidade_turma` varchar(45) DEFAULT NULL,
  `nivel_turma` varchar(45) DEFAULT NULL,
  `etapa_turma` varchar(45) DEFAULT NULL,
  `descricao_turma` varchar(150) DEFAULT NULL,
  `escola_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `nome_turma`, `capacidade_turma`, `ano_turma`, `horario_turma`, `turno_turma`, `dias_turma`, `tipo_turma`, `programa_turma`, `aee_turma`, `modalidade_turma`, `nivel_turma`, `etapa_turma`, `descricao_turma`, `escola_id_escola`) VALUES
(3, 'TURMATESTE', '32', '2017', '08:00; 12:00', 'Noite', 'segunda; quarta', '', 'NÃ£o', '', 'Ensino Regular', 'EducaÃ§Ã£o Infantil', 'Creche 2', 'TESTE DE TURMA POR ESCOLA', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `email_usuario` varchar(45) DEFAULT NULL,
  `fone_usuario` varchar(45) DEFAULT NULL,
  `cpf_usuario` varchar(45) DEFAULT NULL,
  `apelido_usuario` varchar(45) DEFAULT NULL,
  `senha_usuario` varchar(45) DEFAULT NULL,
  `perfil_usuario` varchar(45) DEFAULT NULL,
  `status_usuario` varchar(45) DEFAULT NULL,
  `escola_id_escola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `fone_usuario`, `cpf_usuario`, `apelido_usuario`, `senha_usuario`, `perfil_usuario`, `status_usuario`, `escola_id_escola`) VALUES
(1, 'JAYCE ALMEIDA', 'jayce@gmail.com', '99 999999999', '123.123.123-12', 'jayce', '123', 'Semed', 'aprovado', 3),
(2, 'SILVARNEY HENRIQUE DA SILVA VIEIRA', 'silvarney@gmail.com', '91993556993', '999.999.999-99', 'silvarney', '123', 'SecretÃ¡rio(a)', 'aprovado', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`,`escola_id_escola`),
  ADD KEY `fk_aluno_escola1_idx` (`escola_id_escola`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`,`turma_id_turma`,`lotacao_professor_id_professor`,`lotacao_escola_id_escola`),
  ADD KEY `fk_disciplina_turma1_idx` (`turma_id_turma`),
  ADD KEY `fk_disciplina_locacao1_idx` (`lotacao_professor_id_professor`,`lotacao_escola_id_escola`);

--
-- Indexes for table `disciplinaealuno`
--
ALTER TABLE `disciplinaealuno`
  ADD PRIMARY KEY (`ano_disciplinaEaluno`,`disciplina_id_disciplina`,`disciplina_turma_id_turma`,`disciplina_lotacao_professor_id_professor`,`disciplina_lotacao_escola_id_escola`,`aluno_id_aluno`),
  ADD KEY `fk_disciplinaealuno_disciplina1_idx` (`disciplina_id_disciplina`,`disciplina_turma_id_turma`,`disciplina_lotacao_professor_id_professor`,`disciplina_lotacao_escola_id_escola`),
  ADD KEY `fk_disciplinaealuno_aluno1_idx` (`aluno_id_aluno`);

--
-- Indexes for table `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`id_escola`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`,`aluno_id_aluno`,`usuario_id_usuario`,`escola_id_escola`),
  ADD KEY `fk_historico_aluno1_idx` (`aluno_id_aluno`),
  ADD KEY `fk_historico_usuario1_idx` (`usuario_id_usuario`),
  ADD KEY `fk_historico_escola1_idx` (`escola_id_escola`);

--
-- Indexes for table `lotacao`
--
ALTER TABLE `lotacao`
  ADD PRIMARY KEY (`professor_id_professor`,`escola_id_escola`,`ano_lotacao`),
  ADD KEY `fk_professor_has_escola_escola1_idx` (`escola_id_escola`),
  ADD KEY `fk_professor_has_escola_professor1_idx` (`professor_id_professor`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`id_protocolo`,`aluno_id_aluno`,`usuario_id_usuario`,`escola_id_escola`),
  ADD KEY `fk_protocolo_aluno1_idx` (`aluno_id_aluno`),
  ADD KEY `fk_protocolo_usuario1_idx` (`usuario_id_usuario`),
  ADD KEY `fk_protocolo_escola1_idx` (`escola_id_escola`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`,`escola_id_escola`),
  ADD KEY `fk_turma_escola1_idx` (`escola_id_escola`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`,`escola_id_escola`),
  ADD KEY `fk_usuario_escola1_idx` (`escola_id_escola`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `escola`
--
ALTER TABLE `escola`
  MODIFY `id_escola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_escola1` FOREIGN KEY (`escola_id_escola`) REFERENCES `escola` (`id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `fk_disciplina_locacao1` FOREIGN KEY (`lotacao_professor_id_professor`,`lotacao_escola_id_escola`) REFERENCES `lotacao` (`professor_id_professor`, `escola_id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disciplina_turma1` FOREIGN KEY (`turma_id_turma`) REFERENCES `turma` (`id_turma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplinaealuno`
--
ALTER TABLE `disciplinaealuno`
  ADD CONSTRAINT `fk_disciplinaealuno_aluno1` FOREIGN KEY (`aluno_id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_disciplinaealuno_disciplina1` FOREIGN KEY (`disciplina_id_disciplina`,`disciplina_turma_id_turma`,`disciplina_lotacao_professor_id_professor`,`disciplina_lotacao_escola_id_escola`) REFERENCES `disciplina` (`id_disciplina`, `turma_id_turma`, `lotacao_professor_id_professor`, `lotacao_escola_id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `fk_historico_aluno1` FOREIGN KEY (`aluno_id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_historico_escola1` FOREIGN KEY (`escola_id_escola`) REFERENCES `escola` (`id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_historico_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `lotacao`
--
ALTER TABLE `lotacao`
  ADD CONSTRAINT `fk_professor_has_escola_escola1` FOREIGN KEY (`escola_id_escola`) REFERENCES `escola` (`id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_professor_has_escola_professor1` FOREIGN KEY (`professor_id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD CONSTRAINT `fk_protocolo_aluno1` FOREIGN KEY (`aluno_id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_protocolo_escola1` FOREIGN KEY (`escola_id_escola`) REFERENCES `escola` (`id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_protocolo_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_turma_escola1` FOREIGN KEY (`escola_id_escola`) REFERENCES `escola` (`id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_escola1` FOREIGN KEY (`escola_id_escola`) REFERENCES `escola` (`id_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
