#### instalación composer
- composer global require laravel/installer

#### crear proyecto librería
- laravel new 'nombre carpeta' (ejemplo: librería)

#### crear migración tabla-libros
- php artisan make:migration tabla libros

#### crear migración tabla-prestamos
- php artisan make:migration tabla prestamos

#### crear las tablas en la BBDD
- php artisan migrate

#### crear un modelos - Clase que interacciona con la BBDD
- php artisan make:model Libro
#### Si quisieramos crear el modelo y la migración a la vez sería así
- php artisan make:model Libro --migrate
#### crear controller
- php artisan make:controller LibroController

