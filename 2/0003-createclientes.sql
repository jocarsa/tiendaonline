CREATE TABLE 
clientes 
(
    Identificador INT(255) NOT NULL AUTO_INCREMENT ,
	usuario VARCHAR(50) NOT NULL , 
	contrasena VARCHAR(50) NOT NULL ,
	nombre VARCHAR(100) NOT NULL ,
	apellidos VARCHAR(100) NOT NULL ,
	email VARCHAR(100) NOT NULL ,
	telefono VARCHAR(50) NOT NULL ,
	PRIMARY KEY (`Identificador`)
) 
ENGINE = InnoDB;