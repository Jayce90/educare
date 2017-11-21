-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema educacao
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `educacao` ;

-- -----------------------------------------------------
-- Schema educacao
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `educacao` DEFAULT CHARACTER SET utf8 ;
USE `educacao` ;

-- -----------------------------------------------------
-- Table `educacao`.`escola`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`escola` (
  `id_escola` INT(11) NOT NULL AUTO_INCREMENT,
  `inep_escola` INT(11) NULL DEFAULT NULL,
  `cpf_gestor_escola` VARCHAR(45) NULL DEFAULT NULL,
  `nome_gestor_escola` VARCHAR(45) NULL DEFAULT NULL,
  `cargo_gestor_escola` VARCHAR(45) NULL DEFAULT NULL,
  `email_gestor_escola` VARCHAR(45) NULL DEFAULT NULL,
  `situacao_escola` VARCHAR(45) NULL DEFAULT NULL,
  `nome_escola` VARCHAR(45) NULL DEFAULT NULL,
  `cep_escola` VARCHAR(45) NULL DEFAULT NULL,
  `polo_escola` VARCHAR(45) NULL DEFAULT NULL,
  `distrito_escola` VARCHAR(45) NULL DEFAULT NULL,
  `endereco_escola` VARCHAR(45) NULL DEFAULT NULL,
  `numero_escola` VARCHAR(45) NULL DEFAULT NULL,
  `complemento_escola` VARCHAR(100) NULL DEFAULT NULL,
  `bairro_escola` VARCHAR(45) NULL DEFAULT NULL,
  `fone_escola` VARCHAR(45) NULL DEFAULT NULL,
  `outro_fone_escola` VARCHAR(45) NULL DEFAULT NULL,
  `email_escola` VARCHAR(45) NULL DEFAULT NULL,
  `localizacao_escola` VARCHAR(45) NULL DEFAULT NULL,
  `regulamentacao_escola` VARCHAR(45) NULL DEFAULT NULL,
  `portaria_escola` VARCHAR(45) NULL,
  `autorizacao_escola` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_escola`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`aluno` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT,
  `inep_aluno` INT NULL,
  `nome_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `nascimento_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `sexo_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `nis_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `raca_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `mae_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `pai_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `nacionalidade_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `pais_nasc_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `estado_nasc_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `fone_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `municipio_nasc_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `deficiencia_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_deficiencia_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `identidade_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `complemento_identidade_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `orgao_identidade_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `estado_identidade_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `data_identidade_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `certidao_civil_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `cpf_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `passaporte_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `justificativa_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `localizacao_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `cep_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `endereco_aluno` VARCHAR(100) NULL DEFAULT NULL,
  `numero_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `complemento_aluno` VARCHAR(100) NULL DEFAULT NULL,
  `bairro_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `estado_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `municipio_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `outra_escolarizacao_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `transporte_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `responsavel_transporte_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_transporte_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `status_aluno` VARCHAR(45) NULL DEFAULT NULL,
  `escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_aluno`, `escola_id_escola`),
  INDEX `fk_aluno_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_aluno_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`turma` (
  `id_turma` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_turma` VARCHAR(45) NULL DEFAULT NULL,
  `capacidade_turma` VARCHAR(45) NULL,
  `ano_turma` VARCHAR(45) NULL DEFAULT NULL,
  `horario_turma` VARCHAR(45) NULL DEFAULT NULL,
  `turno_turma` VARCHAR(45) NULL DEFAULT NULL,
  `dias_turma` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_turma` VARCHAR(45) NULL DEFAULT NULL,
  `programa_turma` VARCHAR(45) NULL DEFAULT NULL,
  `aee_turma` VARCHAR(45) NULL DEFAULT NULL,
  `modalidade_turma` VARCHAR(45) NULL DEFAULT NULL,
  `nivel_turma` VARCHAR(45) NULL DEFAULT NULL,
  `etapa_turma` VARCHAR(45) NULL DEFAULT NULL,
  `descricao_turma` VARCHAR(150) NULL DEFAULT NULL,
  `escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_turma`, `escola_id_escola`),
  INDEX `fk_turma_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_turma_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`professor` (
  `id_professor` INT(11) NOT NULL AUTO_INCREMENT,
  `inep_professor` INT(11) NULL,
  `cpf_professor` VARCHAR(45) NULL DEFAULT NULL,
  `fone_professor` VARCHAR(45) NULL,
  `nome_professor` VARCHAR(45) NULL DEFAULT NULL,
  `nascimento_professor` VARCHAR(45) NULL DEFAULT NULL,
  `mae_professor` VARCHAR(45) NULL DEFAULT NULL,
  `pai_professor` VARCHAR(45) NULL DEFAULT NULL,
  `email_professor` VARCHAR(45) NULL DEFAULT NULL,
  `nis_professor` VARCHAR(45) NULL DEFAULT NULL,
  `sexo_professor` VARCHAR(45) NULL DEFAULT NULL,
  `raca_professor` VARCHAR(45) NULL DEFAULT NULL,
  `nacionalidade_professor` VARCHAR(45) NULL DEFAULT NULL,
  `pais_nasc_professor` VARCHAR(45) NULL DEFAULT NULL,
  `estado_nasc_professor` VARCHAR(45) NULL DEFAULT NULL,
  `municipio_nasc_professor` VARCHAR(45) NULL DEFAULT NULL,
  `deficiencia_professor` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_deficiencia_professor` VARCHAR(45) NULL DEFAULT NULL,
  `localizacao_professor` VARCHAR(45) NULL DEFAULT NULL,
  `cep_professor` VARCHAR(45) NULL DEFAULT NULL,
  `endereco_professor` VARCHAR(100) NULL DEFAULT NULL,
  `numero_professor` VARCHAR(45) NULL DEFAULT NULL,
  `complemento_professor` VARCHAR(80) NULL DEFAULT NULL,
  `bairro_professor` VARCHAR(45) NULL DEFAULT NULL,
  `municipio_professor` VARCHAR(45) NULL DEFAULT NULL,
  `escolaridade_professor` VARCHAR(45) NULL DEFAULT NULL,
  `curso_professor` VARCHAR(45) NULL DEFAULT NULL,
  `instituicao_curso_professor` VARCHAR(45) NULL DEFAULT NULL,
  `situacao_curso_professor` VARCHAR(45) NULL DEFAULT NULL,
  `pos_graduacao_professor` VARCHAR(45) NULL DEFAULT NULL,
  `outro_curso_professor` VARCHAR(45) NULL DEFAULT NULL,
  `funcao_professor` VARCHAR(45) NULL DEFAULT NULL,
  `vinculo_professor` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_professor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`lotacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`lotacao` (
  `professor_id_professor` INT(11) NOT NULL,
  `escola_id_escola` INT(11) NOT NULL,
  `ano_lotacao` VARCHAR(45) NOT NULL,
  `cargaHoraria_lotacao` VARCHAR(45) NULL,
  PRIMARY KEY (`professor_id_professor`, `escola_id_escola`, `ano_lotacao`),
  INDEX `fk_professor_has_escola_escola1_idx` (`escola_id_escola` ASC),
  INDEX `fk_professor_has_escola_professor1_idx` (`professor_id_professor` ASC),
  CONSTRAINT `fk_professor_has_escola_professor1`
    FOREIGN KEY (`professor_id_professor`)
    REFERENCES `educacao`.`professor` (`id_professor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_professor_has_escola_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`disciplina` (
  `id_disciplina` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` VARCHAR(45) NULL DEFAULT NULL,
  `descricao_disciplina` VARCHAR(45) NULL DEFAULT NULL,
  `cargaHoraria_disciplina` VARCHAR(45) NULL DEFAULT NULL,
  `nivel_disciplina` VARCHAR(45) NULL DEFAULT NULL,
  `etapa_disciplina` VARCHAR(45) NULL DEFAULT NULL,
  `turma_id_turma` INT(11) NOT NULL,
  `lotacao_professor_id_professor` INT(11) NOT NULL,
  `lotacao_escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`, `turma_id_turma`, `lotacao_professor_id_professor`, `lotacao_escola_id_escola`),
  INDEX `fk_disciplina_turma1_idx` (`turma_id_turma` ASC),
  INDEX `fk_disciplina_locacao1_idx` (`lotacao_professor_id_professor` ASC, `lotacao_escola_id_escola` ASC),
  CONSTRAINT `fk_disciplina_turma1`
    FOREIGN KEY (`turma_id_turma`)
    REFERENCES `educacao`.`turma` (`id_turma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplina_locacao1`
    FOREIGN KEY (`lotacao_professor_id_professor` , `lotacao_escola_id_escola`)
    REFERENCES `educacao`.`lotacao` (`professor_id_professor` , `escola_id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`disciplinaEaluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`disciplinaEaluno` (
  `ano_disciplinaEaluno` VARCHAR(45) NOT NULL,
  `disciplina_id_disciplina` INT(11) NOT NULL,
  `disciplina_turma_id_turma` INT(11) NOT NULL,
  `disciplina_lotacao_professor_id_professor` INT(11) NOT NULL,
  `disciplina_lotacao_escola_id_escola` INT(11) NOT NULL,
  `aluno_id_aluno` INT(11) NOT NULL,
  `avaliacao_1_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `avaliacao_2_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `avaliacao_3_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `avaliacao_4_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `frequencia_1_qnt_disciplinaEaluno` INT(11) NULL DEFAULT NULL,
  `frequencia_2_qnt_disciplinaEaluno` INT(11) NULL DEFAULT NULL,
  `frequencia_3_qnt_disciplinaEaluno` INT(11) NULL DEFAULT NULL,
  `frequencia_4_qnt_disciplinaEaluno` INT(11) NULL DEFAULT NULL,
  `frequencia_1_per_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `frequencia_2_per_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `frequencia_3_per_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `frequencia_4_per_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `recuperacao_1_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `recuperacao_2_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `media_anual_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `frequencia_anual_disciplinaEaluno` FLOAT NULL DEFAULT NULL,
  `status_disciplinaEaluno` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ano_disciplinaEaluno`, `disciplina_id_disciplina`, `disciplina_turma_id_turma`, `disciplina_lotacao_professor_id_professor`, `disciplina_lotacao_escola_id_escola`, `aluno_id_aluno`),
  INDEX `fk_disciplinaealuno_disciplina1_idx` (`disciplina_id_disciplina` ASC, `disciplina_turma_id_turma` ASC, `disciplina_lotacao_professor_id_professor` ASC, `disciplina_lotacao_escola_id_escola` ASC),
  INDEX `fk_disciplinaealuno_aluno1_idx` (`aluno_id_aluno` ASC),
  CONSTRAINT `fk_disciplinaealuno_disciplina1`
    FOREIGN KEY (`disciplina_id_disciplina` , `disciplina_turma_id_turma` , `disciplina_lotacao_professor_id_professor` , `disciplina_lotacao_escola_id_escola`)
    REFERENCES `educacao`.`disciplina` (`id_disciplina` , `turma_id_turma` , `lotacao_professor_id_professor` , `lotacao_escola_id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplinaealuno_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `educacao`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `email_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `fone_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `cpf_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `apelido_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `senha_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `perfil_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `status_usuario` VARCHAR(45) NULL DEFAULT NULL,
  `escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_usuario`, `escola_id_escola`),
  INDEX `fk_usuario_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_usuario_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`historico` (
  `id_historico` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_historico` VARCHAR(45) NULL DEFAULT NULL,
  `descricao_historico` VARCHAR(45) NULL DEFAULT NULL,
  `escola_origem_historico` VARCHAR(45) NULL DEFAULT NULL,
  `escola_destino_historico` VARCHAR(45) NULL DEFAULT NULL,
  `status_historico` VARCHAR(45) NULL DEFAULT NULL,
  `aluno_id_aluno` INT(11) NOT NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  `escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_historico`, `aluno_id_aluno`, `usuario_id_usuario`, `escola_id_escola`),
  INDEX `fk_historico_aluno1_idx` (`aluno_id_aluno` ASC),
  INDEX `fk_historico_usuario1_idx` (`usuario_id_usuario` ASC),
  INDEX `fk_historico_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_historico_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `educacao`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `educacao`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`protocolo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`protocolo` (
  `id_protocolo` INT(11) NOT NULL,
  `data_protocolo` VARCHAR(45) NULL DEFAULT NULL,
  `tipo_protocolo` VARCHAR(45) NULL DEFAULT NULL,
  `solicitante_protocolo` VARCHAR(45) NULL DEFAULT NULL,
  `aluno_id_aluno` INT(11) NOT NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  `escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_protocolo`, `aluno_id_aluno`, `usuario_id_usuario`, `escola_id_escola`),
  INDEX `fk_protocolo_aluno1_idx` (`aluno_id_aluno` ASC),
  INDEX `fk_protocolo_usuario1_idx` (`usuario_id_usuario` ASC),
  INDEX `fk_protocolo_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_protocolo_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `educacao`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_protocolo_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_protocolo_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `educacao`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `educacao`.`feed`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`feed` (
  `id_feed` INT NOT NULL AUTO_INCREMENT,
  `titulo_feed` VARCHAR(45) NULL,
  `texto_feed` VARCHAR(100) NULL,
  `imagem_feed` VARCHAR(45) NULL,
  `data_feed` VARCHAR(45) NULL,
  `publico_feed` VARCHAR(45) NULL,
  `escola_id_escola` INT(11) NOT NULL,
  PRIMARY KEY (`id_feed`, `escola_id_escola`),
  INDEX `fk_feed_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_feed_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`papo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `educacao`.`papo` (
  `id_papo` INT NOT NULL AUTO_INCREMENT,
  `assunto_papo` VARCHAR(80) NULL,
  `texto_papo` VARCHAR(300) NULL,
  `imagem_papo` VARCHAR(45) NULL,
  `usuario_id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id_papo`, `usuario_id_usuario`),
  INDEX `fk_papo_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_papo_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `educacao`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
