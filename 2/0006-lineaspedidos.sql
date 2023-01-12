CREATE TABLE 
lineaspedido 
(
    Identificador INT(255) NOT NULL AUTO_INCREMENT ,
	FK_pedidos_numeropedido INT(100) NOT NULL , 
	FK_productos_titulo INT(100) NOT NULL ,
	cantidad INT(20) NOT NULL ,
	PRIMARY KEY (`Identificador`)
) 
ENGINE = InnoDB;