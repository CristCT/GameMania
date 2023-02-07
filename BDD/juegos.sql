-- crea la base de datos y tabla juegos con valores como nombre, precio, comision
create database juegos;
use juegos;
create table if not exists juegos(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(30),
    precio real,
    comision real
);
-- insertamos juegos en la tabla, en este caso solo hay tres juego, por ende no es necesario algun metodo para insertar más
insert into juegos(nombre, precio, comision) values('CallOfDuty', 34500, 0.6) on duplicate key update nombre=values(nombre), precio=values(precio), comision=values(comision);
insert into juegos(nombre, precio, comision) values('Starcraft', 58200, 0.4) on duplicate key update nombre=values(nombre), precio=values(precio), comision=values(comision);
insert into juegos(nombre, precio, comision) values('Minecraft', 8800, 0.9) on duplicate key update nombre=values(nombre), precio=values(precio), comision=values(comision);
-- Se insertan solo cuando no se hayan insertados antes