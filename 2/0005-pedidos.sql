CREATE TABLE 
pedidos 
(
    Identificador INT(255) NOT NULL AUTO_INCREMENT ,
	FK_clientes_nombre VARCHAR(100) NOT NULL , 
	fecha DATE NOT NULL ,
	numeropedido VARCHAR(20) NOT NULL ,
	PRIMARY KEY (`Identificador`)
) 
ENGINE = InnoDB;