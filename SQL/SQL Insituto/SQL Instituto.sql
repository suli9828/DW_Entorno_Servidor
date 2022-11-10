-- MySQL Script generated by MySQL Workbench
-- mar 08 nov 2022 09:46:55
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`grupos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`grupos` (
  `id_grupo` INT NOT NULL,
  `nombre_grupo` VARCHAR(45) NOT NULL,
  `curso` VARCHAR(45) NULL,
  PRIMARY KEY (`id_grupo`));


-- -----------------------------------------------------
-- Table `mydb`.`alumnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`alumnos` (
  `id_alumno` INT NOT NULL,
  `numExp` INT NOT NULL,
  `nombreAlumno` VARCHAR(30) NOT NULL,
  `apellidosAlumno` VARCHAR(45) NULL,
  `emailAlumno` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `alumnos_id_grupo` INT NOT NULL,
  PRIMARY KEY (`id_alumno`, `alumnos_id_grupo`),
  INDEX `fk_alumnos_grupos1_idx` (`alumnos_id_grupo` ASC) VISIBLE,
  CONSTRAINT `fk_alumnos_grupos1`
    FOREIGN KEY (`alumnos_id_grupo`)
    REFERENCES `mydb`.`grupos` (`id_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`profesores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`profesores` (
  `id_profesor` INT NOT NULL,
  `nombreProfesor` VARCHAR(30) NOT NULL,
  `apellidosProfesor` VARCHAR(45) NULL,
  `emailProfesor` VARCHAR(45) NULL,
  PRIMARY KEY (`id_profesor`));


-- -----------------------------------------------------
-- Table `mydb`.`tutoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tutoria` (
  `tutoria_id_profesor` INT NOT NULL,
  `tutoria_id_grupo` INT NOT NULL,
  PRIMARY KEY (`tutoria_id_profesor`, `tutoria_id_grupo`),
  INDEX `fk_profesores_has_grupos_grupos1_idx` (`tutoria_id_grupo` ASC) VISIBLE,
  INDEX `fk_profesores_has_grupos_profesores_idx` (`tutoria_id_profesor` ASC) VISIBLE,
  CONSTRAINT `fk_profesores_has_grupos_profesores`
    FOREIGN KEY (`tutoria_id_profesor`)
    REFERENCES `mydb`.`profesores` (`id_profesor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesores_has_grupos_grupos1`
    FOREIGN KEY (`tutoria_id_grupo`)
    REFERENCES `mydb`.`grupos` (`id_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
