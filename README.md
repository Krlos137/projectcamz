<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre este proyecto

Es una monolito/SPA desarrollado con laravel/blade/bootstrap este proyecto emula el diseño del formulario de creación de cuenta de amazon. En el backend se implemento lo siguiente:

- Diseño de base (Migraciones/Modelos) para las entidades.
- Configuración de rutas.
- Creación de usuarios implementando el patron de diseño de Repository.
- Manejo de transacciones (atomicidad).
- Validación con Request de los datos recibidos desde la vista create.
- Uso de Resources.
- Manejo de excepciones para la personalización de los mensajes de error. 
- Retorno de la data en formato json con su respectivo codigo HTTP.

En el frontend:

- Maquetación con bootstrap,css y componentes blade.
- 
- Implementación asincrona de ajax con el metodo fetch para enviar los datos capturados en el formulario.
- Captura de datos del controlador.
- Contenido dinamico para el control de las validaciones con la información recibida.

## Pasos para descargar y desplegar el proyecto

Para iniciar deben abrir la terminal de windows y despues de ubicarse en el directorio donde van a descargar la aplicacion van seguir los siguentes pasos:  

- Primero clonar el repositorio con el comando "git clone https://github.com/Krlos137/projectcamz.git .".
- Al terminar la descarga se renombra el archivo .env.example por .env.
- Despues deben ejecutar el comando composer dump-autoload verifica las despendencias del composer, las descarga o actualiza.
- Se ejecuta el comando php artisan key:generate genera una nueva clave para aplicacion.
- Para corre la aplicación debe estar iniciado los servicios de apache y mysql
- Iniciados los servicios apache/mysql deben crear la base datos pprojectamazon.
- Se ejecuta el comando php artisan migrate de esta manera se crean las tablas en la base de datos anteriormente creada.
- Para finalizar deben ejecutar el comando php artisan serve para arrancar el servidor de laravel. 