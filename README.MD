# Prueba seleccion incentivo

Esto es un modulo de administrador para la gestion de información para la empresa CAMPUSLANDS principalmente con las tecnologías de Php y mySQL.

El programa cuenta con una base de datos que contiene la información de cada uno de los campers y sus contactos.



## Querys de la DataBase campuslands

```mysql
//1. Creo la base de datos llamada campuslands.
CREATE DATABASE campuslands;

// 2. Doy el comando para empezar a usar la base que cree anteriormente.
USE campuslands;


//3. Creo la tabla País que contiene:
1. la llave primaria idPais de tipo entero auto-incrementable.
2. contraints que hace referencia a nombrePais.

//campuslands tabla País:
CREATE TABLE pais(idPais INT AUTO_INCREMENT PRIMARY KEY, nombrePais VARCHAR(40));


//4. Creo la tabla departamento que contiene:
1. la llave primaria idDep de tipo entero auto-incrementable.
2. contraints que hace referencia a nombreDep.
3. la llave foranea idPais que hace referencia a la tabla 1(pais).

//campuslands tabla departamento:
CREATE TABLE departamento (idDep INT AUTO_INCREMENT PRIMARY KEY, nombreDep VARCHAR(50),idPais INT, FOREIGN KEY (idPais) REFERENCES pais(idPais));

//5. Creo la tabla region que contiene:
1. la llave primaria idReg de tipo entero auto-incrementable.
2. contraints que hace referencia a nombreReg.
3. la llave foranea idDep que hace referencia a la tabla 2(departamento).

campuslands tabla región:
CREATE TABLE region (idReg INT AUTO_INCREMENT PRIMARY KEY, nombreReg VARCHAR(60), idDep INT, FOREIGN KEY (idDep) REFERENCES departamento(idDEP ));

//6. Creo la tabla campers que contiene:
1. la llave primaria idCamper de tipo entero auto-incrementable.
2. contraints que hace referencia a nombreCamper de tipo string.
3. contraints que hace referencia a apellidoCamper de tipo string.
4. contraints que hace referencia a fechaNac de tipo date.
4. la llave foranea idReg que hace referencia a la tabla 3(region).

campuslands tabla campers:
CREATE TABLE campers (idCamper INT AUTO_INCREMENT PRIMARY KEY, nombreCamper VARCHAR(50), apellidoCamper VARCHAR(50),fechaNac DATE, idReg INT, FOREIGN KEY (idReg) REFERENCES region(idReg));

```

## Errores encontrados

Habian dos errores en el modelo de las tablas del documento.

1. En la primera tabla solicitaban para nombrePais un tipo de dato entero(int) y debe ser de tipo string(VARCHAR).

2. En la tabla campers solicitaban para idCamper un valor de tipo string(VARCHAR) y este debe ser de tipo entero(INT).

