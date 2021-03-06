-- MySQL Script generated by MySQL Workbench
-- Sat Jun  4 17:06:38 2022
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
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`alumnos_22036`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`alumnos_22036` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(40) CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci' NOT NULL,
  `apellido` VARCHAR(40) CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci' NOT NULL,
  `edad` TINYINT(2) NOT NULL,
  `fecha` TIMESTAMP(14) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `provincia` VARCHAR(30) NOT NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- ---------------------------------------------------------

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `provincia`) VALUES (NULL, 'Alejandro', 'Zapata', '35', '0000-00-00 00:00:00', 'Salta')

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `provincia`) VALUES (NULL, 'Franco', 'Sánchez', '30', '2022-06-20 03:13:19', 'Tucumán')

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `provincia`) VALUES (NULL, 'Gabriel', 'Rodriguez', '42', '0000-00-00 00:00:00', 'CABA')

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `provincia`) VALUES (NULL, 'Carla', 'Cinquemani', '34', '0000-00-00 00:00:00', 'Mendoza')

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `provincia`) VALUES (NULL, 'Guadalupe', 'Seco', '27', '0000-00-00 00:00:00', 'Cordoba')