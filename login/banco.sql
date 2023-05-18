
CREATE database IF NOT EXISTS contato DEFAULT CHARACTER SET utf8 ;
USE contato ;


CREATE TABLE IF NOT EXISTS usuarios (
  idusuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NULL,
  email VARCHAR(45) NULL,
  senha VARCHAR(32) NULL
);



