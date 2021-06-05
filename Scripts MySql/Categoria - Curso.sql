CREATE TABLE Categoria
(
	Descripcion          VARCHAR(20) NULL,
	Estado               boolean NULL,
	Id                   INTEGER AUTO_INCREMENT NOT NULL,
	PRIMARY KEY (Id)
);

CREATE TABLE Curso
(
	Nombre               VARCHAR(20) NULL,
	Descripcion          VARCHAR(20) NULL,
	Precio               DECIMAL(10,4) NULL,
	Idioma               VARCHAR(20) NULL,
	Duracion             DATE NULL,
	Id                   INTEGER AUTO_INCREMENT NOT NULL,
	IdCategoria          INTEGER NULL,
	Estado               boolean NULL,
	PRIMARY KEY (Id),
	FOREIGN KEY (IdCategoria) REFERENCES Categoria (Id)
);