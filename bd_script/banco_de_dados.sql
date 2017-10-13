-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema educacao
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema educacao
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `educacao` DEFAULT CHARACTER SET utf8 ;
USE `educacao` ;

-- -----------------------------------------------------
-- Table `educacao`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`usuario` ;

CREATE TABLE IF NOT EXISTS `educacao`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(45) NULL,
  `email_usuario` VARCHAR(45) NULL,
  `fone_usuario` VARCHAR(45) NULL,
  `apelido_usuario` VARCHAR(45) NULL,
  `senha_usuario` VARCHAR(45) NULL,
  `perfil_usuario` VARCHAR(45) NULL,
  `status_usuario` VARCHAR(45) NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`escola`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`escola` ;

CREATE TABLE IF NOT EXISTS `educacao`.`escola` (
  `id_escola` INT NOT NULL AUTO_INCREMENT,
  `inep_escola` VARCHAR(45) NULL,
  `nome_escola` VARCHAR(45) NULL,
  `endereco_escola` VARCHAR(45) NULL,
  `diretora_escola` VARCHAR(45) NULL,
  `fone_escola` VARCHAR(45) NULL,
  `usuario_id_usuario` INT NOT NULL,
  PRIMARY KEY (`id_escola`, `usuario_id_usuario`),
  INDEX `fk_escola_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_escola_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `educacao`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`turma`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`turma` ;

CREATE TABLE IF NOT EXISTS `educacao`.`turma` (
  `id_turma` INT NOT NULL,
  `nome_turma` VARCHAR(45) NULL,
  `ano_turma` VARCHAR(45) NULL,
  `turno_turma` VARCHAR(45) NULL,
  `serie_turma` VARCHAR(45) NULL,
  `nivel_turma` VARCHAR(45) NULL,
  `escola_id_escola` INT NOT NULL,
  PRIMARY KEY (`id_turma`, `escola_id_escola`),
  INDEX `fk_turma_escola1_idx` (`escola_id_escola` ASC),
  CONSTRAINT `fk_turma_escola1`
    FOREIGN KEY (`escola_id_escola`)
    REFERENCES `educacao`.`escola` (`id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`aluno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`aluno` ;

CREATE TABLE IF NOT EXISTS `educacao`.`aluno` (
  `id_aluno` INT NOT NULL,
  `nome_aluno` VARCHAR(45) NULL,
  `sexo_aluno` VARCHAR(45) NULL,
  `nascimento_aluno` VARCHAR(45) NULL,
  `idade_aluno` VARCHAR(45) NULL,
  `especial_aluno` VARCHAR(45) NULL,
  `nis_aluno` VARCHAR(45) NULL,
  `certidao_aluno` VARCHAR(45) NULL,
  `mae_aluno` VARCHAR(45) NULL,
  `pai_aluno` VARCHAR(45) NULL,
  `fone_aluno` VARCHAR(45) NULL,
  `endereco_aluno` VARCHAR(45) NULL,
  `serie_aluno` VARCHAR(45) NULL,
  `repetente_aluno` VARCHAR(45) NULL,
  `transporte_aluno` VARCHAR(45) NULL,
  `status_aluno` VARCHAR(45) NULL,
  PRIMARY KEY (`id_aluno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`professor` ;

CREATE TABLE IF NOT EXISTS `educacao`.`professor` (
  `id_professor` INT NOT NULL AUTO_INCREMENT,
  `cpf_professor` VARCHAR(45) NULL,
  `nome_professor` VARCHAR(45) NULL,
  `nascimento_professor` VARCHAR(45) NULL,
  `mae_professor` VARCHAR(45) NULL,
  `pai_professor` VARCHAR(45) NULL,
  `email_professor` VARCHAR(45) NULL,
  `nis_professor` VARCHAR(45) NULL,
  `sexo_professor` VARCHAR(45) NULL,
  `raca_professor` VARCHAR(45) NULL,
  `nacionalidade_professor` VARCHAR(45) NULL,
  `pais_professor` VARCHAR(45) NULL,
  `estado_professor` VARCHAR(45) NULL,
  `municipio_professor` VARCHAR(45) NULL,
  `deficiencia_professor` VARCHAR(45) NULL,
  `tipo_deficiencia_professor` VARCHAR(45) NULL,
  `localizacao_professor` VARCHAR(45) NULL,
  `cep_professor` VARCHAR(45) NULL,
  `endereco_professor` VARCHAR(100) NULL,
  `numero_professor` VARCHAR(45) NULL,
  `complemento_professor` VARCHAR(80) NULL,
  `bairro_professor` VARCHAR(45) NULL,
  `estado_autal_professor` VARCHAR(45) NULL,
  `municipio_atual_professor` VARCHAR(45) NULL,
  `escolaridade_professor` VARCHAR(45) NULL,
  `pos_graduacao_professor` VARCHAR(45) NULL,
  `outro_curso_professor` VARCHAR(45) NULL,
  `funcao_professor` VARCHAR(45) NULL,
  `vinculo_professor` VARCHAR(45) NULL,
  PRIMARY KEY (`id_professor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`disciplina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`disciplina` ;

CREATE TABLE IF NOT EXISTS `educacao`.`disciplina` (
  `id_disciplina` INT NOT NULL AUTO_INCREMENT,
  `nome_disciplina` VARCHAR(45) NULL,
  `descricao_disciplina` VARCHAR(45) NULL,
  `cargaHoraria_disciplina` VARCHAR(45) NULL,
  `nivel_disciplina` VARCHAR(45) NULL,
  `professor_id_professor` INT NOT NULL,
  `turma_id_turma` INT NOT NULL,
  `turma_escola_id_escola` INT NOT NULL,
  PRIMARY KEY (`id_disciplina`, `professor_id_professor`, `turma_id_turma`, `turma_escola_id_escola`),
  INDEX `fk_disciplina_professor1_idx` (`professor_id_professor` ASC),
  INDEX `fk_disciplina_turma1_idx` (`turma_id_turma` ASC, `turma_escola_id_escola` ASC),
  CONSTRAINT `fk_disciplina_professor1`
    FOREIGN KEY (`professor_id_professor`)
    REFERENCES `educacao`.`professor` (`id_professor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplina_turma1`
    FOREIGN KEY (`turma_id_turma` , `turma_escola_id_escola`)
    REFERENCES `educacao`.`turma` (`id_turma` , `escola_id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`transferencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`transferencia` ;

CREATE TABLE IF NOT EXISTS `educacao`.`transferencia` (
  `id_transferencia` INT NOT NULL,
  `escola_origem_transferencia` VARCHAR(45) NULL,
  `escola_destino_transferencia` VARCHAR(45) NULL,
  `data_transferencia` VARCHAR(45) NULL,
  `motivo_transferencia` VARCHAR(45) NULL,
  `aluno_id_aluno` INT NOT NULL,
  `usuario_id_usuario` INT NOT NULL,
  PRIMARY KEY (`id_transferencia`, `aluno_id_aluno`, `usuario_id_usuario`),
  INDEX `fk_transferencia_aluno1_idx` (`aluno_id_aluno` ASC),
  INDEX `fk_transferencia_usuario1_idx` (`usuario_id_usuario` ASC),
  CONSTRAINT `fk_transferencia_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `educacao`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_transferencia_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `educacao`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`disciplinaEaluno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`disciplinaEaluno` ;

CREATE TABLE IF NOT EXISTS `educacao`.`disciplinaEaluno` (
  `ano_disciplinaEaluno` VARCHAR(45) NOT NULL,
  `disciplina_id_disciplina` INT NOT NULL,
  `disciplina_professor_id_professor` INT NOT NULL,
  `disciplina_turma_id_turma` INT NOT NULL,
  `disciplina_turma_escola_id_escola` INT NOT NULL,
  `aluno_id_aluno` INT NOT NULL,
  `avaliacao_1_disciplinaEaluno` FLOAT NULL,
  `avaliacao_2_disciplinaEaluno` FLOAT NULL,
  `avaliacao_3_disciplinaEaluno` FLOAT NULL,
  `avaliacao_4_disciplinaEaluno` FLOAT NULL,
  `frequencia_1_qnt_disciplinaEaluno` INT NULL,
  `frequencia_2_qnt_disciplinaEaluno` INT NULL,
  `frequencia_3_qnt_disciplinaEaluno` INT NULL,
  `frequencia_4_qnt_disciplinaEaluno` INT NULL,
  `frequencia_1_per_disciplinaEaluno` FLOAT NULL,
  `frequencia_2_per_disciplinaEaluno` FLOAT NULL,
  `frequencia_3_per_disciplinaEaluno` FLOAT NULL,
  `frequencia_4_per_disciplinaEaluno` FLOAT NULL,
  `recuperacao_1_disciplinaEaluno` FLOAT NULL,
  `recuperacao_2_disciplinaEaluno` FLOAT NULL,
  `media_anual_disciplinaEaluno` FLOAT NULL,
  `frequencia_anual_disciplinaEaluno` FLOAT NULL,
  PRIMARY KEY (`ano_disciplinaEaluno`, `disciplina_id_disciplina`, `disciplina_professor_id_professor`, `disciplina_turma_id_turma`, `disciplina_turma_escola_id_escola`, `aluno_id_aluno`),
  INDEX `fk_disciplina_has_aluno_aluno1_idx` (`aluno_id_aluno` ASC),
  INDEX `fk_disciplina_has_aluno_disciplina1_idx` (`disciplina_id_disciplina` ASC, `disciplina_professor_id_professor` ASC, `disciplina_turma_id_turma` ASC, `disciplina_turma_escola_id_escola` ASC),
  CONSTRAINT `fk_disciplina_has_aluno_disciplina1`
    FOREIGN KEY (`disciplina_id_disciplina` , `disciplina_professor_id_professor` , `disciplina_turma_id_turma` , `disciplina_turma_escola_id_escola`)
    REFERENCES `educacao`.`disciplina` (`id_disciplina` , `professor_id_professor` , `turma_id_turma` , `turma_escola_id_escola`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplina_has_aluno_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `educacao`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
