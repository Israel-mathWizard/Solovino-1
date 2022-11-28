-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema solovino
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema solovino
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `solovino` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci ;
USE `solovino` ;

-- -----------------------------------------------------
-- Table `solovino`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solovino`.`usuarios` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NULL,
  `Direccion` VARCHAR(100) NULL,
  `Telefono` VARCHAR(10) NULL,
  `Email` VARCHAR(100) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `solovino`.`adoptador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solovino`.`adoptador` (
  `IdAdopt` INT NOT NULL AUTO_INCREMENT,
  `NombreAdopt` VARCHAR(100) NULL,
  `TelefonoAdopt` VARCHAR(10) NULL,
  `EmailAdopt` VARCHAR(100) NULL,
  `MotivoAdopc` VARCHAR(500) NULL,
  `DondeVivira` VARCHAR(500) NULL,
  PRIMARY KEY (`IdAdopt`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `solovino`.`mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solovino`.`mascotas` (
  `IdMasc` INT NOT NULL AUTO_INCREMENT,
  `NombreMasc` VARCHAR(55) NULL,
  `Caracteristicas` VARCHAR(500) NULL,
  `Genero` VARCHAR(45) NULL,
  `Edad` VARCHAR(45) NULL,
  `Tamanio` VARCHAR(45) NULL,
  `TipoMasc` VARCHAR(45) NULL,
  `UbicacionAdopc` VARCHAR(500) NULL,
  `Foto` BLOB NULL,
  `Estatus` INT(1) ZEROFILL NULL,
  `adoptador_IdAdopt` INT NULL,
  PRIMARY KEY (`IdMasc`),
  INDEX `fk_mascotas_adoptador_idx` (`adoptador_IdAdopt` ASC) VISIBLE,
  CONSTRAINT `fk_mascotas_adoptador`
    FOREIGN KEY (`adoptador_IdAdopt`)
    REFERENCES `solovino`.`adoptador` (`IdAdopt`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
