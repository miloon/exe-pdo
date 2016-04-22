-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema recette
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema recette
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `recette` DEFAULT CHARACTER SET utf8 ;
USE `recette` ;

-- -----------------------------------------------------
-- Table `recette`.`continent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`continent` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lintitule` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `lintitule_UNIQUE` (`lintitule` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `recette`.`droit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`droit` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lintitule` VARCHAR(80) NOT NULL,
  `ecrit` TINYINT(1) NOT NULL,
  `modif` TINYINT(1) NOT NULL,
  `sup` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `recette`.`pays`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`pays` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lintitule` VARCHAR(100) NOT NULL,
  `ladesc` TEXT NOT NULL,
  `continent_id` INT(10) UNSIGNED NOT NULL,
  `img` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sous-cat-pays_continent_idx` (`continent_id` ASC),
  CONSTRAINT `fk_sous-cat-pays_continent`
    FOREIGN KEY (`continent_id`)
    REFERENCES `recette`.`continent` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `recette`.`util`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`util` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `mdp` VARCHAR(45) NOT NULL,
  `ladesc` TEXT NOT NULL,
  `droit_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  INDEX `fk_user_droit1_idx` (`droit_id` ASC),
  CONSTRAINT `fk_user_droit1`
    FOREIGN KEY (`droit_id`)
    REFERENCES `recette`.`droit` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `recette`.`recette`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`recette` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(150) NOT NULL,
  `ladesc` TEXT NOT NULL,
  `ladate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pays_id` INT(10) UNSIGNED NOT NULL,
  `util_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_recette_pays1_idx` (`pays_id` ASC),
  INDEX `fk_recette_util1_idx` (`util_id` ASC),
  CONSTRAINT `fk_recette_pays1`
    FOREIGN KEY (`pays_id`)
    REFERENCES `recette`.`pays` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_recette_util1`
    FOREIGN KEY (`util_id`)
    REFERENCES `recette`.`util` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
