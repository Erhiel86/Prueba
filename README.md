#CREAR PROYECTO:
composer create-project --prefer-dist laravel/laravel APIREST

php artisan serve

CREAR CONTROLADOR PARA EMPRESA
php artisan make:controller Empresa\EmpresaController

CREAR MODELO PARA EMPRESA
php artisan make:model Models\EmpresaModel

CREAR AUTENTICACIÓN PARA ACCESO A LA API
php artisan ui:auth
php artisan ui vue --auth
php artisan make:middleware AuthBasic
php artisan ui:auth

CREATE DATABASE learning;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    numero_trabajadores INT,
    tipo_empresa VARCHAR(255) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;

INSERT INTO `empresa`(`nombre`, `numero_trabajadores`, `tipo_empresa`) VALUES ('allware',100,'software')
INSERT INTO `empresa`(`nombre`, `numero_trabajadores`, `tipo_empresa`) VALUES ('IBM',1000,'software')
INSERT INTO `empresa`(`nombre`, `numero_trabajadores`, `tipo_empresa`) VALUES ('Paris',500,'Retail')
INSERT INTO `empresa`(`nombre`, `numero_trabajadores`, `tipo_empresa`) VALUES ('Ripley',600,'Retail')
