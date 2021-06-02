/*CREATE TABLE Categoria(
	Id SMALLINT AUTO_INCREMENT NOT NULL,
    Descripcion VARCHAR(20) NOT NULL,
    Estado BIT DEFAULT 1,
    CONSTRAINT Categoria_Id PRIMARY KEY (Id)
);

CREATE TABLE Curso(
	Id INT AUTO_INCREMENT NOT NULL,
    Nombre VARCHAR(20) NOT NULL,
    Descripcion VARCHAR(20)) NOT NULL,
    Precio DECIMAL (10,4) not null,
    Idioma VARCHAR(20) NOT NULL,
    Duracion TIME,
    ID_Categoria SMALLINT NOT NULL,
    ESTADO BIT DEFAULT 1,
    CONSTRAINT Curso_Id PRIMARY KEY (Id),
    CONSTRAINT Curso_ID_Categoria FOREIGN KEY (ID_Categoria) REFERENCES Categoria ( Id)
);
CREATE TABLE Persona(
	Id INT AUTO_INCREMENT NOT NULL,
    Nombres VARCHAR(60) NOT NULL,
    Apellidos VARCHAR(60) NOT NULL,
    Correo VARCHAR (90) NOT NULL,
    CONSTRAINT Persona_Id PRIMARY KEY (Id)
);*/

CREATE TABLE Tarjeta(
    Id INT AUTO_INCREMENT NOT NULL,
    NumeroTarjeta VARCHAR(16) NOT NULL,
    CCI VARCHAR(20) NOT NULL,
    Banco VARCHAR(40) NOT NULL,
    ID_Persona SMALLINT NOT NULL,
    CONSTRAINT Tarjeta_Id PRIMARY KEY (Id),
    CONSTRAINT Tarjeta_ID_Persona FOREIGN KEY (ID_Persona) REFERENCES Persona(Id)
);/*
CREATE TABLE Compra(
	Id INT AUTO_INCREMENT NOT NULL,
    ID_Curso INT NOT NULL,
    CodigoOperacion INT NOT NULL,
    Monto DECIMAL (4,4) NOT NULL,
    Estado BIT DEFAULT 1,
	ID_Tarjeta INT NOT NULL,    
    
   CONSTRAINT Compra_Id PRIMARY KEY (Id),
   CONSTRAINT Compra_ID_Tarjeta FOREIGN KEY (ID_Tarjeta) REFERENCES Tarjeta(Id)
);*/