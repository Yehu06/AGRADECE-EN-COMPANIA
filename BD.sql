Use jesuitas;


CREATE TABLE alumnos(
    npuesto tinyint unsigned not null PRIMARY key,
    nombre varchar (80) not null,
    contrasenia varchar (25) not null,
    nombreJesuita varchar (80) not null,
    nombreIMG varchar (50) not null,
    informacion varchar (150) not null
    );
    
CREATE TABLE agradecimientos(
    idAgradecimiento SMALLINT unsigned not null primary key AUTO_INCREMENT,
    iddestinatario tinyint unsigned not null,
    idemisor tinyint unsigned not null,
    mensaje varchar (150) not null,
    
    UNIQUE (iddestinatario, idemisor),
    CONSTRAINT fk_destinatario FOREIGN KEY (iddestinatario) REFERENCES alumnos(npuesto),
    CONSTRAINT fk_emisor FOREIGN KEY (idemisor) REFERENCES alumnos(npuesto)
    );
