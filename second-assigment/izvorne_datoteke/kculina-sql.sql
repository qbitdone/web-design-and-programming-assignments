-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema WebDiP2020x110
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema WebDiP2020x110
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `WebDiP2020x110` DEFAULT CHARACTER SET utf8 ;
USE `WebDiP2020x110` ;

-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`uloga`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`uloga` (
  `id_uloga` INT NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_uloga`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`korisnik`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`korisnik` (
  `id_korisnik` INT NOT NULL AUTO_INCREMENT,
  `id_uloga` INT NOT NULL,
  `ime` VARCHAR(45) NOT NULL,
  `prezime` VARCHAR(45) NOT NULL,
  `korisnicko_ime` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `lozinka` VARCHAR(45) NOT NULL,
  `lozinka_kriptirana` VARCHAR(40) NOT NULL,
  `uvjeti` VARCHAR(45) NULL,
  `status` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id_korisnik`),
  INDEX `fk_korisnik_uloga_idx` (`id_uloga` ASC) VISIBLE,
  CONSTRAINT `fk_korisnik_uloga`
    FOREIGN KEY (`id_uloga`)
    REFERENCES `WebDiP2020x110`.`uloga` (`id_uloga`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`tip_rada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`tip_rada` (
  `id_tip` INT NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(45) NOT NULL,
  `opis` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tip`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`dnevnik_rada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`dnevnik_rada` (
  `id_dnevnik` INT NOT NULL AUTO_INCREMENT,
  `id_tip` INT NOT NULL,
  `id_korisnik` INT NOT NULL,
  `opis_radnje` VARCHAR(45) NOT NULL,
  `vrijeme` DATETIME NOT NULL,
  `upit` VARCHAR(45) NULL,
  PRIMARY KEY (`id_dnevnik`),
  INDEX `fk_dnevnik_rada_tip_rada1_idx` (`id_tip` ASC) VISIBLE,
  INDEX `fk_dnevnik_rada_korisnik1_idx` (`id_korisnik` ASC) VISIBLE,
  CONSTRAINT `fk_dnevnik_rada_tip_rada1`
    FOREIGN KEY (`id_tip`)
    REFERENCES `WebDiP2020x110`.`tip_rada` (`id_tip`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_dnevnik_rada_korisnik1`
    FOREIGN KEY (`id_korisnik`)
    REFERENCES `WebDiP2020x110`.`korisnik` (`id_korisnik`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`kategorija`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`kategorija` (
  `id_kategorija` INT NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_kategorija`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`upravlja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`upravlja` (
  `id_korisnik` INT NOT NULL,
  `id_kategorija` INT NOT NULL,
  `datum` DATE NOT NULL,
  PRIMARY KEY (`id_korisnik`, `id_kategorija`),
  INDEX `fk_korisnik_has_kategorija_kategorija1_idx` (`id_kategorija` ASC) VISIBLE,
  INDEX `fk_korisnik_has_kategorija_korisnik1_idx` (`id_korisnik` ASC) VISIBLE,
  CONSTRAINT `fk_korisnik_has_kategorija_korisnik1`
    FOREIGN KEY (`id_korisnik`)
    REFERENCES `WebDiP2020x110`.`korisnik` (`id_korisnik`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_korisnik_has_kategorija_kategorija1`
    FOREIGN KEY (`id_kategorija`)
    REFERENCES `WebDiP2020x110`.`kategorija` (`id_kategorija`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`grad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`grad` (
  `id_grad` INT NOT NULL AUTO_INCREMENT,
  `ime` VARCHAR(45) NOT NULL,
  `ZIP` VARCHAR(15) NOT NULL,
  `broj_stanovnika` INT NULL,
  `drzava` VARCHAR(45) NULL,
  PRIMARY KEY (`id_grad`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`javni_poziv`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`javni_poziv` (
  `id_poziv` INT NOT NULL AUTO_INCREMENT,
  `id_korisnik` INT NOT NULL,
  `id_grad` INT NOT NULL,
  `id_kategorija` INT NOT NULL,
  `naziv` VARCHAR(45) NOT NULL,
  `opis` VARCHAR(45) NOT NULL,
  `otvoren_od` DATETIME NOT NULL,
  `otvoren_do` DATETIME NOT NULL,
  `sredstva` DOUBLE NOT NULL,
  PRIMARY KEY (`id_poziv`),
  INDEX `fk_javni_poziv_korisnik1_idx` (`id_korisnik` ASC) VISIBLE,
  INDEX `fk_javni_poziv_grad1_idx` (`id_grad` ASC) VISIBLE,
  INDEX `fk_javni_poziv_kategorija1_idx` (`id_kategorija` ASC) VISIBLE,
  CONSTRAINT `fk_javni_poziv_korisnik1`
    FOREIGN KEY (`id_korisnik`)
    REFERENCES `WebDiP2020x110`.`korisnik` (`id_korisnik`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_javni_poziv_grad1`
    FOREIGN KEY (`id_grad`)
    REFERENCES `WebDiP2020x110`.`grad` (`id_grad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_javni_poziv_kategorija1`
    FOREIGN KEY (`id_kategorija`)
    REFERENCES `WebDiP2020x110`.`kategorija` (`id_kategorija`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`materijal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`materijal` (
  `id_materijal` INT NOT NULL AUTO_INCREMENT,
  `naziv` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_materijal`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`prijava`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`prijava` (
  `id_korisnik` INT NOT NULL,
  `id_poziv` INT NOT NULL,
  `id_materijal` INT NOT NULL,
  `status` VARCHAR(10) NULL,
  `iznos_subvencije` DOUBLE NULL,
  `naziv` VARCHAR(45) NOT NULL,
  `opis` VARCHAR(45) NOT NULL,
  `oznake` VARCHAR(45) NOT NULL,
  INDEX `fk_korisnik_has_javni_poziv_javni_poziv1_idx` (`id_poziv` ASC) VISIBLE,
  INDEX `fk_korisnik_has_javni_poziv_korisnik1_idx` (`id_korisnik` ASC) VISIBLE,
  INDEX `fk_prijava_materijal1_idx` (`id_materijal` ASC) VISIBLE,
  PRIMARY KEY (`id_korisnik`, `id_poziv`),
  CONSTRAINT `fk_korisnik_has_javni_poziv_korisnik1`
    FOREIGN KEY (`id_korisnik`)
    REFERENCES `WebDiP2020x110`.`korisnik` (`id_korisnik`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_korisnik_has_javni_poziv_javni_poziv1`
    FOREIGN KEY (`id_poziv`)
    REFERENCES `WebDiP2020x110`.`javni_poziv` (`id_poziv`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_prijava_materijal1`
    FOREIGN KEY (`id_materijal`)
    REFERENCES `WebDiP2020x110`.`materijal` (`id_materijal`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `WebDiP2020x110`.`donacija`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WebDiP2020x110`.`donacija` (
  `id_korisnik` INT NOT NULL,
  `id_poziv` INT NOT NULL,
  `sredstva` DOUBLE NOT NULL,
  `datum_vrijeme` DATETIME NOT NULL,
  PRIMARY KEY (`id_korisnik`, `id_poziv`),
  INDEX `fk_korisnik_has_javni_poziv_javni_poziv2_idx` (`id_poziv` ASC) VISIBLE,
  INDEX `fk_korisnik_has_javni_poziv_korisnik2_idx` (`id_korisnik` ASC) VISIBLE,
  CONSTRAINT `fk_korisnik_has_javni_poziv_korisnik2`
    FOREIGN KEY (`id_korisnik`)
    REFERENCES `WebDiP2020x110`.`korisnik` (`id_korisnik`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_korisnik_has_javni_poziv_javni_poziv2`
    FOREIGN KEY (`id_poziv`)
    REFERENCES `WebDiP2020x110`.`javni_poziv` (`id_poziv`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
