CREATE DATABASE proyectosena;

USE proyectosena;

CREATE TABLE rol(idPerfil INT AUTO_INCREMENT,perfil VARCHAR(20),
                PRIMARY KEY (idPerfil));

CREATE TABLE negocio(idNegocio INT AUTO_INCREMENT, nombreEstablecimiento VARCHAR(50) NOT NULL,
                     numeroCelular VARCHAR(10) NOT NULL,correoElectronico VARCHAR(50) NOT NULL, direccion VARCHAR(110) NOT NULL,
                     nit VARCHAR(10) NOT NULL, fechaCreacion DATETIME NOT NULL, estado TINYINT NOT NULL,
                     PRIMARY KEY (idNegocio));

CREATE TABLE usuario(idUsuario INT AUTO_INCREMENT,idPerfil int, correoElectronico VARCHAR(50) NOT NULL, 
                     contraseña VARCHAR(15) NOT NULL, fechaCreacion DATETIME NOT NULL, estado TINYINT NOT NULL,
                     PRIMARY KEY (idUsuario),
                    FOREIGN KEY (idPerfil) REFERENCES rol(idPerfil));                              

CREATE TABLE cliente(idCliente INT AUTO_INCREMENT,
                     nombres VARCHAR(40) NOT NULL,apellidos VARCHAR(50) NOT NULL,
                     numeroCelular VARCHAR(10) NOT NULL,correoElectronico VARCHAR(50) NOT NULL,
                     fechaCreacion DATETIME NOT NULL,estado TINYINT NOT NULL,
                     idUsuario INT,
                     PRIMARY KEY(idCliente),
                     FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario));

CREATE TABLE empleado(idEmpleado INT AUTO_INCREMENT, idNegocio INT,
                     nombres VARCHAR(40) NOT NULL,apellidos VARCHAR(50) NOT NULL,
                     numeroCelular VARCHAR(10) NOT NULL,correoElectronico VARCHAR(50) NOT NULL,
                     fechaCreacion DATETIME NOT NULL,estado TINYINT NOT NULL,
                     idUsuario Int,
                     PRIMARY KEY(idEmpleado),
                     FOREIGN KEY (idNegocio) REFERENCES negocio(idNegocio),
                     FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario));

CREATE TABLE fotografia(idFotografia INT AUTO_INCREMENT, idEmpleado INT, idCliente int, fotoPerfil_Logo LONGBLOB NOT NULL, 
                        foto1 LONGBLOB, foto2 LONGBLOB, 
                        foto3 LONGBLOB, foto4 LONGBLOB, 
                        foto5 LONGBLOB, fechaCreacion DATETIME NOT NULL,
                        PRIMARY KEY (idFotografia),
                        FOREIGN KEY (idEmpleado) REFERENCES empleado(idEmpleado),
                        FOREIGN KEY (idCliente) REFERENCES cliente(idCliente));       

create table reserva (idReserva INT AUTO_INCREMENT, idEmpleado INT, idCliente int, 
                        estado boolean,fechaReserva DATETIME NOT NULL, fechaFinalizacion DATETIME,
                        PRIMARY KEY (idReserva),
                        FOREIGN KEY (idEmpleado) REFERENCES empleado(idEmpleado),
                        FOREIGN KEY (idCliente) REFERENCES cliente(idCliente)); 

INSERT INTO rol (perfil)VALUES ('negocio'),('barbero'),('cliente');