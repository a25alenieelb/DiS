APLICACIÓ VIDEOJOCS

Es una aplicacó que fa CRUD amb una base de dades i una mica de bootstrap per als estils.



codi de la estructura de la base de dades:

    CREATE TABLE videojuegos(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
    descripcion varchar(255)
    );
