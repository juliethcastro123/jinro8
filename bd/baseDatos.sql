
DROP DATABASE IF EXISTS  proyecto;
CREATE DATABASE proyecto;
USE proyecto;


CREATE TABLE DETALLE_MASTER (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_categoria BIGINT UNSIGNED NULL,
    nombre VARCHAR(200),
    descripcion VARCHAR(200)
);


CREATE TABLE PRODUCT (
    id BIGINT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(200),
    descripcion VARCHAR(200),
    id_tipo_producto BIGINT UNSIGNED,
    id_presentacion BIGINT UNSIGNED,
    cantidad_stock INTEGER,
    url_img VARCHAR(500),
    costo_unitario  INTEGER,
    PRIMARY KEY (id),
    FOREIGN KEY (id_tipo_producto) REFERENCES DETALLE_MASTER (id),
    FOREIGN KEY (id_presentacion) REFERENCES DETALLE_MASTER (id)    
);


CREATE TABLE usuarios (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    apellido VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    cedula VARCHAR(200) NOT NULL,
    clave VARCHAR(200) NOT NULL,
    usuario VARCHAR(200) NOT NULL   
);

CREATE TABLE cargo (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(200)
);


CREATE TABLE superusu (
    id BIGINT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(200) NOT NULL,
    apellido VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    cedula VARCHAR(200) NOT NULL,
    clave VARCHAR(200) NOT NULL,
    conclav VARCHAR(200) NOT NULL,
    id_cargo BIGINT UNSIGNED NULL,
    PRIMARY KEY (id),    
    FOREIGN KEY (id_cargo) REFERENCES cargo (id)    
);


/*DETALLE MASTER*/
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (NULL,'TIPO_PRODUCTO','Son los tipos de productos de la Base de Datos');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (NULL,'TIPO_PRESENTACION','Son los tipos de presentaciones de la Base de Datos');


insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (1,'CERVEZAS','Es la bebida mas tomada.');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (1,'LICORES','Todos los tipos de licores del colombia');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (1,'PRODUCTOS SIN ALCHOL','Son los tipos de productos de la Base de Datos');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (1,'SNACK','Son los tipos de productos de la Base de Datos');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (1,'PROMOCIONES','Son los tipos de productos de la Base de Datos');


/*TIPO DE PRESENTACIONES*/
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (2,'SIXPACK LATA','Presentacion de cervesas');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (2,'CAJA LATA','Presentacion de cervesas');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion)  VALUES (2,'SIXPACK BOTELLA','Presentacion de cervesas');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (2,'BOTELLA','Presentación de licores.');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (2,'PAQUETE','Presentación de SNACKS.');
insert into DETALLE_MASTER (id_categoria,nombre,descripcion) VALUES (2,'MIXTO','Presentación de Combos.');

/*PRODUCT*/
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA CORONA","Mejor cerveza de todo el mundo",3,10,50,"img/sixcorona.jpg",15000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA REDS","Mejor cerveza de todo el mundo",3,8,50,"img/sixreds.jpg",14500);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA REDDS CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/reddscaja.jpg",16000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA BUDWEISER","Mejor cerveza de todo el mundo",3,9,50,"img/budweiser.jpg",15000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA BUDWEISER CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/budweisercaja.jpg",16000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA POKER","Mejor cerveza de todo el mundo",3,8,50,"img/pokersix.jpg",13000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA POKER CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/pkercaja.jpg",10000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA HEINEKEN","Mejor cerveza de todo el mundo",3,8,50,"img/heinekenlatasix.jpg",16000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA HEINEKEN CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/heinekencaja.jpg",64000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA CLUB COLOMBIA","Mejor cerveza de todo el mundo",3,8,50,"img/clubsix.jpg",16000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA CLUB COLOMBIA CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/clubcaja.jpg",56000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA COSTEÑA","Mejor cerveza de todo el mundo",3,8,50,"img/costeñasix.jpg",13000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA COSTEÑA CAJA","Mejor cerveza de todo el mundo",3,8,50,"img/costeñacaja.jpg",13000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA ANDINA CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/andinacaja.jpg",10000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA ANDINA","Mejor cerveza de todo el mundo",3,8,50,"img/andinasix.jpg",16000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA AGUILA LIGTH","Mejor cerveza de todo el mundo",3,8,50,"img/ligthsix.jpg",14500);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA AGUILA LIGTH CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/ligthcaja.jpg",16000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA AGUILA ","Mejor cerveza de todo el mundo",3,8,50,"img/aguilatrsix.jpg",10000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CERVEZA AGUILA CAJA","Mejor cerveza de todo el mundo",3,9,50,"img/aguilacaja.jpg",16000);

/*LICORES*/
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("BUCHANAS MASTER 1000ML","El mejor licor de todo el mundo",4,11,50,"img/buchanas.jpg",199000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("JONNY WOLKER","El mejor licor de todo el mundo",4,11,50,"img/botellajhon.jpg",60000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CHIVAS REGAL","El mejor licor de todo el mundoeza de todo el mundo",4,8,50,"img/chivas.jpg",214000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("BLACK & WHITE","El mejor licor de todo el mundo",4,11,50,"img/back.jpg",68000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("OLD PARR","El mejor licor de todo el mundo",4,11,50,"img/old parr.jpg",276000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("SOMETHING","El mejor licor de todo el mundo",4,11,50,"img/something.jpg",82000);

/*SIN ALCOHOL*/
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("SPARTAN","El mejor energizante de el mundo entero",5,11,50,"img/spartan.jpg",12000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("POWERADE","El mejor energizante de el mundo entero",5,11,50,"img/powerade.jpg",2000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("REDBULL","El mejor energizante de el mundo entero",5,8,50,"img/redbull.jpg",7400);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("VIVE100","El mejor energizante de el mundo entero",5,11,50,"img/vive100.jpg",3000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("AMP","El mejor energizante de el mundo entero",5,11,50,"img/amp.jpg",28000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBO ENERGIZANTE","El mejor energizante de el mundo entero",5,11,50,"img/combo.jpg",30000);

/*SNACK*/
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("DETODITO","Los mejores paquetes para que disfrutes",6,12,50,"img/detodito.jpg",8000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("CHIPS","Los mejores paquetes para que disfrutes",6,12,50,"img/chips.jpg",2000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBOS SNACKS","Los mejores paquetes para que disfrutes",6,12,50,"img/combosnacks.jpg",20000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("M & MS","Los mejores paquetes para que disfrutes",6,12,50,"img/m$ms.jpg",3000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("MARGARITAS","Los mejores paquetes para que disfrutes",6,12,50,"img/margaritas.jpg",5000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("GOMITAS TRULULUS ","Los mejores paquetes para que disfrutes",6,12,50,"img/trululu.jpg",2000);

/*PROMOCIONES*/
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBO 1","Los mejores promo solo para ti",7,13,50,"img/combo1.png",40000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBO 2","Los mejores promo solo para ti",7,13,50,"img/combo2.png",2000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBO 3","Los mejores promo solo para ti",7,13,50,"img/combo3.png",20000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBO 4","Los mejores promo solo para ti",7,13,50,"img/combo4.png",3000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBO 5","Los mejores promo solo para ti",7,13,50,"img/combo5.png",5000);
insert into PRODUCT (nombre, descripcion, id_tipo_producto, id_presentacion, cantidad_stock, url_img, costo_unitario) VALUES ("COMBOS SNACKS","Los mejores paquetes para que disfrutes",7,13,50,"img/combosnacks.jpg",20000);

/*EL CARGO PARA EL ADMINISTRADOR*/
insert into cargo (descripcion) VALUES ('Administrador');


/*USUARIO ADMINISTRADOR*/
insert into superusu (nombre,apellido,email,cedula,clave,conclav,id_cargo) VALUES ('camilo','puentes','bahemodz@outlook.com','10293334','1234','Avenida 1 de mayo',1);

/*USUARIO ADMINISTRADOR*/
insert into usuarios (nombre,apellido,email,cedula,clave,usuario) VALUES('JULIETH STEPHANY','CASTRO OLIVARES','juliethcastro1020@gmail.com','1045233002','Sena2022*','julieth.castro');