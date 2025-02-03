create database if not exists crud;
use crud;
DROP TABLE if exists `carros`;
CREATE TABLE if not exists `carros` (
  `idCarro` INT NOT NULL AUTO_INCREMENT,
  `Modelo` VARCHAR(45) NOT NULL,
  `Ano` INT NOT NULL,
  `Cor` VARCHAR(45) NOT NULL,
  `Marca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCarro`));