-- crea la base de datos y luego la tabla vendedor con valores a usar en las tablas
create database vendedores;
use vendedores;
create table if not exists vendedores(
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(30),
    CanVenCod real,
    CanVenMin real,
    CanVenStar real,
    ComVenCod real,
    ComVenMin real,
    ComVenStar real,
    TotalVentas real,
    Mayor text,
    TotalComision real,
    GananciaCod real,
    GananciaMin real,
    GananciaStar real
);