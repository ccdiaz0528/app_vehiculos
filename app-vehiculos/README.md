<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
Primeramente hay que tener instalado el software necesario:
1. XAMPP es un software libre y multiplataforma que permite crear y probar páginas web en un ordenador local: https://www.apachefriends.org/es/download.html
2. Composer es un sistema de gestión de paquetes para programar en PHP el cual provee los formatos estándar necesarios para manejar dependencias y librerías de PHP: https://getcomposer.org/download/
3. Declarar variables de entorno agregar la ruta donde esta instalado el PHP: C:\xampp\php esta es la ruta por defecto al instalarlo en un sistema operativo windows.
4. Git es un software de control de versiones diseñado por Linus Torvalds, pensando en la eficiencia, la confiabilidad y compatibilidad del mantenimiento de versiones de aplicaciones cuando estas tienen un gran número de archivos de código fuente : https://git-scm.com/downloads/win 
5. Instalar un editor de codigo, uno de los mas famosos es Visual Studio Code: https://code.visualstudio.com/
6. Una vez instalado los programas abrir el XAMPP y ejecutar las casillas MYSLQ y APACHE
7. Abrir Visual Studio Code y instalar las extensiones necesarias para usar PHP, HTML, CSS, LARAVEL y poder inicializar el entorno local
8. Una vez ya instaladas procedemos a ir al apartado de view en Visual Studio Code y abrir un Command Palette y ejecutar GIT CLONE pegando el link del repositorio
9. Se abre una ventana para seleccionar la ruta en la cual se clonara el repositorio, tiene que estar en la siguiente ruta: C:\xampp\htdocs al ya tener el proyecto pasamos al siguiente paso
10. en el archivo .env esta configurado el nombre de la base de datos como "app" si deseas puedes continuar usando este nombre o el nombre que desees
11. acontinuacion abrimos una terminal y usamos cd app-vehiculos para acceder como tal al directorio donde estan todos los archivos del proyecto
12. En nuestro navegador nos dirigimos a http://localhost/phpmyadmin/ y creamos una base de datos con el nombre por defecto "app" o el nombre que cambiaste en caso tal en el archivo .env
13. Ya estando en la terminal de Visual Studio Code utilizamos el comando php artisan migrate, al hacer esto se crean las tablas por defecto que trae laravel y la tabla "todos" donde tenemos nuestros campos esto lo podemos ver en phpmyadmin
14. Una vez migrada la base de datos podemos inicializar el entorno local para poder visualizarlo con "php artisan serve", esto nos genera un link en el cual debemos acceder para ver el aplicativo
15. Y listo se abre el aplicativo donde en una barra de navegacion esta: el inicio del aplicativo, y apartado de registro donde vamos a poder registrar la informacion
16. Una vez teniendo registros podemos eliminarlos con el boton "Eliminar" y para querer editar un registro nos paramos en cualquier campo del registro en el apartado titulado "Registro"
17. Todo esto lo puedes verificar de manera manual en "phpmyadmin" o en el Apartado de registro como comentaba anteriormente.
18. Finalmente estos serian todos los pasos a seguir para un correcto funcionamiento del aplicativo :D ! 
>>>>>>> 08cb02fbef8aa05ed8a47d858b9743fd417244fb
