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
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lintitule` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `lintitule_UNIQUE` (`lintitule` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette`.`pays`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`pays` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lintitule` VARCHAR(100) NOT NULL,
  `ladesc` TEXT NOT NULL,
  `continent_id` INT UNSIGNED NOT NULL,
  `img` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sous-cat-pays_continent_idx` (`continent_id` ASC),
  CONSTRAINT `fk_sous-cat-pays_continent`
    FOREIGN KEY (`continent_id`)
    REFERENCES `recette`.`continent` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette`.`droit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`droit` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lintitule` VARCHAR(80) NOT NULL,
  `ecrit` TINYINT(1) NOT NULL,
  `modif` TINYINT(1) NOT NULL,
  `sup` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `mdp` VARCHAR(45) NOT NULL,
  `ladesc` TEXT NOT NULL,
  `droit_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_droit1_idx` (`droit_id` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  CONSTRAINT `fk_user_droit1`
    FOREIGN KEY (`droit_id`)
    REFERENCES `recette`.`droit` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `recette`.`recette`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recette`.`recette` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(150) NOT NULL,
  `ladesc` TEXT NOT NULL,
  `ladate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` INT UNSIGNED NOT NULL,
  `pays_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_article_user1_idx` (`user_id` ASC),
  INDEX `fk_recette_pays1_idx` (`pays_id` ASC),
  CONSTRAINT `fk_article_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `recette`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_recette_pays1`
    FOREIGN KEY (`pays_id`)
    REFERENCES `recette`.`pays` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
