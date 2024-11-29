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

CREATE TABLE foto_perfil(idFotoPerfil INT AUTO_INCREMENT, idUsuario INT, fotoPerfil_Logo LONGBLOB NOT NULL, 
                        fechaCreacion DATETIME NOT NULL,
                        PRIMARY KEY (idFotoPerfil),
                        FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario));

CREATE TABLE fotografia(idFotografia INT AUTO_INCREMENT, idEmpleado INT, idNegocio INT,
                        foto1 LONGBLOB NOT NULL, foto2 LONGBLOB NOT NULL, 
                        foto3 LONGBLOB NOT NULL, foto4 LONGBLOB NOT NULL, 
                        foto5 LONGBLOB NOT NULL, fechaCreacion DATETIME NOT NULL,
                        PRIMARY KEY (idFotografia),
                        FOREIGN KEY (idEmpleado) REFERENCES empleado(idEmpleado),
                        FOREIGN KEY (idNegocio) REFERENCES negocio(idNegocio));       

create table servicio (idServicio INT AUTO_INCREMENT, idNegocio int,nombre VARCHAR(250), detalle VARCHAR(250), precio int, 
                        estado boolean, duracion VARCHAR(10),
                        PRIMARY KEY (idServicio)
                        FOREIGN KEY (idNegocio) REFERENCES negocio(idNegocio));       

create table reserva (idReserva INT AUTO_INCREMENT, idEmpleado INT, idCliente int, 
                        estado boolean,fechaReserva DATETIME NOT NULL, fechaFinalizacion DATETIME, idServicio INT, 
                        PRIMARY KEY (idReserva),
                        FOREIGN KEY (idEmpleado) REFERENCES empleado(idEmpleado),
                        FOREIGN KEY (idServicio) REFERENCES servicio(idServicio),
                        FOREIGN KEY (idCliente) REFERENCES cliente(idCliente)); 

create table reserva_historico (idReserva INT AUTO_INCREMENT, idEmpleado INT, idCliente int, 
                        estado boolean,fechaReserva DATETIME NOT NULL, fechaFinalizacion DATETIME, idServicio INT,
                        PRIMARY KEY (idReserva)); 


DELIMITER //
CREATE OR REPLACE TRIGGER historico_reserva
AFTER UPDATE ON reserva
FOR EACH ROW
BEGIN
    IF NEW.estado = 1 THEN
        INSERT INTO reserva_historico (`idReserva`, `idEmpleado`, `idCliente`, `estado`, `fechaReserva`, `fechaFinalizacion`) select * from reserva where idReserva =  OLD.idReserva;
    END IF;
END//
DELIMITER ;

DELIMITER //
CREATE OR REPLACE TRIGGER eliminar_reserva
AFTER INSERT ON reserva_historico
FOR EACH ROW
BEGIN
	DELETE FROM reserva where idReserva = NEW.idReserva;
END//
DELIMITER ;   

INSERT INTO rol (perfil)VALUES ('negocio'),('barbero'),('cliente');