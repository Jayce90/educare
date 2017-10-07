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
-- Table `educacao`.`turma`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`turma` ;

CREATE TABLE IF NOT EXISTS `educacao`.`turma` (
  `id_turma` INT NOT NULL,
  `nome_turma` VARCHAR(45) NULL,
  `ano_turma` VARCHAR(45) NULL,
  `turno_turma` VARCHAR(45) NULL,
  `serie_turma` VARCHAR(45) NULL,
  PRIMARY KEY (`id_turma`))
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
  `turma_id_turma` INT NOT NULL,
  PRIMARY KEY (`id_escola`, `turma_id_turma`),
  INDEX `fk_escola_turma1_idx` (`turma_id_turma` ASC),
  CONSTRAINT `fk_escola_turma1`
    FOREIGN KEY (`turma_id_turma`)
    REFERENCES `educacao`.`turma` (`id_turma`)
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
-- Table `educacao`.`disciplina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`disciplina` ;

CREATE TABLE IF NOT EXISTS `educacao`.`disciplina` (
  `id_disciplina` INT NOT NULL AUTO_INCREMENT,
  `nome_disciplina` VARCHAR(45) NULL,
  `cargaHoraria_disciplina` VARCHAR(45) NULL,
  `nivel_disciplina` VARCHAR(45) NULL,
  PRIMARY KEY (`id_disciplina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`professor` ;

CREATE TABLE IF NOT EXISTS `educacao`.`professor` (
  `id_professor` INT NOT NULL AUTO_INCREMENT,
  `nome_professor` VARCHAR(45) NULL,
  PRIMARY KEY (`id_professor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `educacao`.`nota`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `educacao`.`nota` ;

CREATE TABLE IF NOT EXISTS `educacao`.`nota` (
  `turma_id_turma` INT NOT NULL,
  `aluno_id_aluno` INT NOT NULL,
  `disciplina_id_disciplina` INT NOT NULL,
  `professor_id_professor` INT NOT NULL,
  `avaliaca_1_nota` FLOAT NULL,
  `avaliaca_2_nota` FLOAT NULL,
  `avaliaca_3_nota` FLOAT NULL,
  `avaliaca_4_nota` FLOAT NULL,
  `recuperacao_1_nota` FLOAT NULL,
  `recuperacao_2_nota` FLOAT NULL,
  `media_anual_nota` FLOAT NULL,
  PRIMARY KEY (`turma_id_turma`, `aluno_id_aluno`, `disciplina_id_disciplina`, `professor_id_professor`),
  INDEX `fk_disciplina_has_professor_professor1_idx` (`professor_id_professor` ASC),
  INDEX `fk_disciplina_has_professor_disciplina_idx` (`disciplina_id_disciplina` ASC),
  INDEX `fk_notas_turma1_idx` (`turma_id_turma` ASC),
  INDEX `fk_notas_aluno1_idx` (`aluno_id_aluno` ASC),
  CONSTRAINT `fk_disciplina_has_professor_disciplina`
    FOREIGN KEY (`disciplina_id_disciplina`)
    REFERENCES `educacao`.`disciplina` (`id_disciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_disciplina_has_professor_professor1`
    FOREIGN KEY (`professor_id_professor`)
    REFERENCES `educacao`.`professor` (`id_professor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notas_turma1`
    FOREIGN KEY (`turma_id_turma`)
    REFERENCES `educacao`.`turma` (`id_turma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notas_aluno1`
    FOREIGN KEY (`aluno_id_aluno`)
    REFERENCES `educacao`.`aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
