
CREATE DATABASE plataforma_cursos;

USE DATABASE plataforma_cursos;

CREATE TABLE Categoria
(
	Descripcion          VARCHAR(50) NULL,
	Estado               boolean NULL,
	Id                   INTEGER AUTO_INCREMENT NOT NULL,
	PRIMARY KEY (Id)
);

CREATE TABLE Curso
(
	Nombre               VARCHAR(20) NULL,
	Descripcion          VARCHAR(300) NULL,
	Precio               DECIMAL(10,4) NULL,
	Idioma               VARCHAR(20) NULL,
	Duracion             DATE NULL,
	Id                   INTEGER AUTO_INCREMENT NOT NULL,
	IdCategoria          INTEGER NULL,
	Estado               boolean NULL,
	PRIMARY KEY (Id),
	FOREIGN KEY (IdCategoria) REFERENCES Categoria (Id)
);
CREATE TABLE Persona
(
	Id	SMALLINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Nombres	VARCHAR(50) NOT NULL,
	ApellidoPaterno VARCHAR(40) NOT NULL,
	ApellidoMaterno VARCHAR(40),
	Pais CHAR(2) NOT NULL, 
	FechaNacimiento DATE,
	Tipo CHAR(1) NOT NULL -- docente o alumno
)ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE Usuario (
  Id tinyint NOT NULL,
  Usuario varchar(50) NOT NULL,
  Contraseña varchar(40) NOT NULL,
  Tipo char(1) NOT NULL,
  Correo varchar(50) NOT NULL,
  IdPersona SMALLINT NULL,

  CONSTRAINT Usuario_idPersona FOREIGN KEY (IdPersona) REFERENCES persona(Id);
) 
CREATE TABLE Compra
(
	IdCurso              INTEGER NOT NULL,
	CodigoOperacion      CHAR(18) NULL,
	Monto                CHAR(18) NULL,
	Estado               CHAR(18) NULL,
	Id                   INTEGER NOT NULL AUTO_INCREMENT,
	IdAlumno             SMALLINT NOT NULL,
	PRIMARY KEY (Id),
	FOREIGN KEY (IdCurso) REFERENCES Curso (Id),
	FOREIGN KEY (IdAlumno) REFERENCES Persona (Id)
);

CREATE TABLE Tarjeta(
    Id INT AUTO_INCREMENT NOT NULL,
    NumeroTarjeta VARCHAR(16) NOT NULL,
    CCI VARCHAR(20) NOT NULL,
    Banco VARCHAR(40) NOT NULL,
    ID_Persona SMALLINT NOT NULL,
    CONSTRAINT Tarjeta_Id PRIMARY KEY (Id),
    CONSTRAINT Tarjeta_ID_Persona FOREIGN KEY (ID_Persona) REFERENCES Persona(Id),
    CONSTRAINT Tarjeta_NumeroTarjeta UNIQUE (NumeroTarjeta)
);
--Insert
INSERT INTO `usuario` (`Id`, `Usuario`, `Contraseña`, `Tipo`, `Correo`, `IdPersona`) VALUES
(1, 'Mr.UWU12', 'contra', 'D', 'uwu@gmail.com', NULL),
(2, 'CallIt', 'prueba2', 'D', 'mrvain@gmail.com', NULL),
(3, 'usereuser', 'user', 'D', 'bira@afjd.com', NULL),
(4, 'nayelhy', 'contra', 'D', 'naye@gmail.com', NULL),
(5, 'Lana Del Rey', 'xd', 'A', 'lana@gmail.com', NULL),
(6, 'Moti', 'lol', 'E', 'moti@gmail.com', NULL)

INSERT INTO `persona` (`Id`, `Nombres`, `ApellidoPaterno`, `ApellidoMaterno`, `Pais`, `FechaNacimiento`, `Tipo`) VALUES
(1, 'Jose', 'Martinez', 'Lopez', 'CL', '2000-06-05', 'E'),
(2, 'Carlos', 'Mortes', 'Gomez', 'KR', '1990-04-07', 'D')

INSERT INTO `categoria` (`Id`, `Descripcion`, `Estado`) VALUES
(1, 'Matematicas', 1),
(2, 'Letras', 1)

INSERT INTO `curso` (`Id`, `Nombre`, `Descripicion`, `Precio`, `Idioma`, `Duracion`, `IdCategoria`, `Estado`) VALUES
(1, 'Estadistica', 'Estadistica descriptiva', 23, 'Español','',1, 1),
(2, 'Poesia', 'Posia de antaño y contemporanea',34,'Ingles','',2, 1)
