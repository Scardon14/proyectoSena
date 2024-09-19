CREATE DATABASE proyectosena;

USE proyectosena;

CREATE TABLE rol(idPerfil INT AUTO_INCREMENT,perfil VARCHAR(20),
                PRIMARY KEY (idPerfil));

CREATE TABLE negocio(idNegocio INT AUTO_INCREMENT, nombreEstablecimiento VARCHAR(50) NOT NULL,
                     numeroCelular VARCHAR(10) NOT NULL,correoElectronico VARCHAR(50) NOT NULL, direccion VARCHAR(110) NOT NULL,
                     nit VARCHAR(10) NOT NULL, fechaCreacion DATETIME NOT NULL, estado TINYINT NOT NULL,
                     PRIMARY KEY (idNegocio));

CREATE TABLE persona(idPersona INT AUTO_INCREMENT, idPerfil INT, idNegocio INT,
                     nombres VARCHAR(40) NOT NULL,apellidos VARCHAR(50) NOT NULL,
                     numeroCelular VARCHAR(10) NOT NULL,correoElectronico VARCHAR(50) NOT NULL,
                     fechaCreacion DATETIME NOT NULL,estado TINYINT NOT NULL,
                     PRIMARY KEY(idPersona),
                     FOREIGN KEY (idPerfil) REFERENCES rol(idPerfil),
                     FOREIGN KEY (idNegocio) REFERENCES negocio(idNegocio));

CREATE TABLE usuario(idUsuario INT AUTO_INCREMENT, idPersona INT, correoElectronico VARCHAR(50) NOT NULL, 
                     contraseña VARCHAR(15) NOT NULL, fechaCreacion DATETIME NOT NULL, estado TINYINT NOT NULL,
                     PRIMARY KEY (idUsuario),
                     FOREIGN KEY(idPersona) REFERENCES persona(idPersona)); 
CREATE TABLE fotografia(idFotografia INT AUTO_INCREMENT, idPersona INT, fotoPerfil_Logo LONGBLOB NOT NULL, 
                     foto1 LONGBLOB, foto2 LONGBLOB, 
                     foto3 LONGBLOB, foto4 LONGBLOB, 
                     foto5 LONGBLOB, fechaCreacion DATETIME NOT NULL,
                     PRIMARY KEY (idFotografia),
                     FOREIGN KEY (idPersona) REFERENCES persona(idPersona));                                    

INSERT INTO rol (perfil)VALUES ('negocio'),('barbero'),('cliente');
